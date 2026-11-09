<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Advert page</title>
</head>
<body>
    <header>

        <div>
            <div style="display: flex; align-items: center; gap: 10px;">
                <p>Welcome:{{ $user->name }}</p>
                <a href="{{ route('admin.logout') }}">logout</a>
            </div>
            <div>
                <a href="{{ route('admin.index') }}">Home</a>
                <a href="{{ route('admin.categories') }}">categories</a>
                <a href="{{ route('admin.users') }}">users</a>
                <a href="{{ route('admin.adverts') }}">adverts</a>
                <a href="{{ route('admin.advert') }}">advert details</a>
            </div>
        </div>

    </header>
</body>
</html>
