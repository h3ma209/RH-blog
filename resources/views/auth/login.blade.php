<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #007bff;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #555;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: calc(100% - 20px);
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .remember {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .remember input {
            margin-right: 8px;
        }

        .error {
            color: #dc3545;
            margin-top: 5px;
        }

        h1 {
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Login</h1>

        <label for="email">E-Mail Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <div class="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Remember Me</label>
        </div>

        @if ($errors->has('email') || $errors->has('password'))
            <div class="error">{{ __('These credentials do not match our records.') }}</div>
        @endif

        <button type="submit">Login</button>
    </form>
</body>
</html>
