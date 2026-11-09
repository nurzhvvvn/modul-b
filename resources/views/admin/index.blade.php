<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Admin page</title>
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

<div class="con">
    <p>- Количество объявлений в различных статусах на текущий момент: {{ $adver }}</p>
    <p>- Количество пользователей: {{ $users }}</p>
    <p>- Топ 10 объявлений по просмотрам (только в статусе `published`):</p>
</div>
    <table style="border: solid  #1c1c1a 2px; border-radius: 10px; height: 250px; width: 650px ;">
        <thead style="background-color: #a1a09a;">
            <td>id</td>
            <td>title</td>
            <td>status</td>
            <td>author</td>
        </thead>
        @foreach($top as $top10)
            <tbody>
            <td>
                <div>{{ $top10->id }}</div>
            </td>
            <td>
                <div>{{ $top10->title }}</div>
            </td>
            <td>
                <div>{{ $top10->status }}</div>
            </td>
            <td>
                <div>{{ $top10->author }}</div>
            </td>
            </tbody>
        @endforeach
    </table>
</body>
</html>
