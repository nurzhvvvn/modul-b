<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Users page</title>
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
<div class="table">
    <table style="border: solid  #1c1c1a 2px; border-radius: 10px; height: 250px; width: 650px ;">
        <thead style="background-color: #a1a09a;">
        <td>id</td>
        <td>title</td>
        <td>text</td>
        <td>status</td>
        <td>price</td>
        </thead>
        @foreach($adinfo as $ad)
            <tbody>
            <td>
                <div>{{ $ad->id }}</div>
            </td>
            <td>
                <div>{{ $ad->title }}</div>
            </td>
            <td>
                <div>{{ $ad->text }}</div>
            </td>
            <td>
                <div>{{ $ad->status }}</div>
            </td>
            <td>
                <div>{{ $ad->price }}</div>
            </td>
            </tbody>
        @endforeach
    </table>
</div>
</body>
</html>
