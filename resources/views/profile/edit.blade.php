<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
