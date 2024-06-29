<?php

namespace App\Http\Controllers;

use App\Models\BookedRoom;
use App\Models\Booking;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function main()
    {
        return view('booking.main');
    }

    public function store(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'nama_depan' => 'required|string|max:255',
            'nama_belakang' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'negara' => 'required|string|max:255',
            'alamat' => 'required|string',
            'preferensi_tambahan' => 'nullable|string',
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date',
            'kamar' => 'required|string',
            'tambah_rencana' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $booking = new Booking();
        $booking->nama_depan = $validated['nama_depan'];
        $booking->nama_belakang = $validated['nama_belakang'];
        $booking->email = $validated['email'];
        $booking->nomor_telepon = $validated['nomor_telepon'];
        $booking->negara = $validated['negara'];
        $booking->alamat = $validated['alamat'];
        $booking->preferensi_tambahan = $validated['preferensi_tambahan'];
        $booking->tgl_checkin = $validated['tgl_checkin'];
        $booking->tgl_checkout = $validated['tgl_checkout'];
        $booking->kamar = $validated['kamar'];
        $booking->tambah_rencana = $validated['tambah_rencana'];
        $booking->price = $validated['price'];

        $booking->save();

        return redirect()->route('booking.main')->with('success', 'Pemesanan berhasil disimpan');
    }

    public function payment(Request $request)
    {
        // if(!Auth::check()) {
        //     return redirect()->back()->with('error', 'You must have to login in order to checkout');
        // }

        if(!session()->has('cart_room_id')) {
            return redirect()->back()->with('error', 'There is no item in the cart');
        }

        $request->validate([
            'billing_name' => 'required',
            'billing_email' => 'required|email',
            'billing_phone' => 'required',
            'billing_country' => 'required',
            'billing_address' => 'required',
        ]);

        session()->put('billing_name',$request->billing_name);
        session()->put('billing_email',$request->billing_email);
        session()->put('billing_phone',$request->billing_phone);
        session()->put('billing_country',$request->billing_country);
        session()->put('billing_address',$request->billing_address);
        session()->put('billing_notes',$request->billing_notes);

        return view('front.payment', compact('settings'));
    }

    public function pay_at_hotel(Request $request,$final_price)
    {
        $order_no = time();

        $order = Order::create([
            // 'user_id' => Auth::user()->id,
            'order_no' => $order_no,
            'payment_method' => 'Pay At Hotel',
            'paid_amount' => $final_price,
            'booking_date' => date('d/m/Y'),
            'status' => 'SUCCESS',
        ]);

        $orders_id = $order->id;

        $arr_cart_room_id = array();
        $i=0;
        foreach(session()->get('cart_room_id') as $value) {
            $arr_cart_room_id[$i] = $value;
            $i++;
        }

        $arr_cart_checkin_date = array();
        $i=0;
        foreach(session()->get('cart_checkin_date') as $value) {
            $arr_cart_checkin_date[$i] = $value;
            $i++;
        }

        $arr_cart_checkout_date = array();
        $i=0;
        foreach(session()->get('cart_checkout_date') as $value) {
            $arr_cart_checkout_date[$i] = $value;
            $i++;
        }

        $arr_cart_adult = array();
        $i=0;
        foreach(session()->get('cart_adult') as $value) {
            $arr_cart_adult[$i] = $value;
            $i++;
        }

        $arr_cart_children = array();
        $i=0;
        foreach(session()->get('cart_children') as $value) {
            $arr_cart_children[$i] = $value;
            $i++;
        }

        for($i=0;$i<count($arr_cart_room_id);$i++)
        {
            $r_info = Room::where('id',$arr_cart_room_id[$i])->first();
            $d1 = explode('/',$arr_cart_checkin_date[$i]);
            $d2 = explode('/',$arr_cart_checkout_date[$i]);
            $d1_new = $d1[2].'-'.$d1[1].'-'.$d1[0];
            $d2_new = $d2[2].'-'.$d2[1].'-'.$d2[0];
            $t1 = strtotime($d1_new);
            $t2 = strtotime($d2_new);
            $diff = ($t2-$t1)/60/60/24;
            $sub = $r_info->price*$diff;

            $obj = new OrderDetail();
            $obj->order_id = $orders_id;
            $obj->room_id = $arr_cart_room_id[$i];
            $obj->room_name = $r_info->name;
            $obj->checkin_date = $arr_cart_checkin_date[$i];
            $obj->checkout_date = $arr_cart_checkout_date[$i];
            $obj->night = $diff;
            $obj->adult = $arr_cart_adult[$i];
            $obj->children = $arr_cart_children[$i];
            $obj->subtotal = $sub;
            $obj->save();

            while(1) {
                if($t1>=$t2) {
                    break;
                }

                $obj = new BookedRoom();
                $obj->booking_date = date('d/m/Y',$t1);
                $obj->order_no = $order_no;
                $obj->room_id = $arr_cart_room_id[$i];
                $obj->save();

                $t1 = strtotime('+1 day',$t1);
            }

        }

        $subject = 'Pemesanan Kamar Hotel Berhasil';
        $message = '<html><body>';
        $message .= '<h1 style="color: #333;">You have made an order for hotel booking.</h1>';
        $message .= '<p style="color: #666;">The booking information is given below:</p>';
        $message .= '<ul>';
        $message .= '<li><strong>Order No:</strong> '.$order_no.'</li>';
        $message .= '<li><strong>Payment Method:</strong> Pay At Hotel</li>';
        $message .= '<li><strong>Paid Amount:</strong> '.number_format($final_price, 2, ',', '.').'</li>';
        $message .= '<li><strong>Booking Date:</strong> '.date('d/m/Y').'</li>';
        $message .= '</ul>';
        $message .= '</body></html>';

        for($i=0;$i<count($arr_cart_room_id);$i++) {

            $r_info = Room::where('id',$arr_cart_room_id[$i])->first();

            $message .= '<br>Room Name: '.$r_info->name;
            $message .= '<br>Price Per Night: $'.$r_info->price;
            $message .= '<br>Checkin Date: '.$arr_cart_checkin_date[$i];
            $message .= '<br>Checkout Date: '.$arr_cart_checkout_date[$i];
            $message .= '<br>Adult: '.$arr_cart_adult[$i];
            $message .= '<br>Children: '.$arr_cart_children[$i].'<br>';
        }

        // $customer_name = Auth::user()->name;

        // $customer_email = Auth::user()->email;

        // $customer_phone = Auth::user()->phone;

        // Mail::to($customer_email)->send(new HelloMail($subject,$message));

        // $messages = "Selamat kak $customer_name anda berhasil melakukan pemesanan!";

        // try {
        //     $this->send_message($customer_phone, $messages);
        // } catch (\Exception $e) {
        //     dd("Error sending message: " . $e->getMessage());
        // }

        // dd($customer_phone);


        session()->forget('cart_room_id');
        session()->forget('cart_checkin_date');
        session()->forget('cart_checkout_date');
        session()->forget('cart_adult');
        session()->forget('cart_children');
        session()->forget('billing_name');
        session()->forget('billing_email');
        session()->forget('billing_phone');
        session()->forget('billing_country');
        session()->forget('billing_address');
        session()->forget('billing_notes');

        // if ($user) {
        //     $message = "$notify->payment_notify";
        //     $this->send_message($user->phone, $message);

        //     $messages = "Selamat anda berhasil Daftar ini kode OTP anda Jangan beri ini kepada Siapapun $user->token";

        //     $this->send_message($user->phone,$messages);
        // } else {
        //     return response()->json(['error' => 'User not found'], 404);
        // }


        return redirect()->route('home')->with('success', 'Payment is successful');
    }
}
