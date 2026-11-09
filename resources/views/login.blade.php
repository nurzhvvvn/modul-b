<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Login page</title>
</head>
<body>
    <div class="cont">
        <div class="conteiner">
            <h1>Login form</h1>
            <p> @error('login'){{ $message }}
            @enderror</p>
            <div class="log-form">
                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div>
                        <p>Login</p>
                    <input type="text" name="login" placeholder="Phone or Email">
                    </div>
                    <div>
                        <p>Password</p>
                        <input type="text" name="password" placeholder="Password">
                    </div>
                    <button type="submit">Exit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>