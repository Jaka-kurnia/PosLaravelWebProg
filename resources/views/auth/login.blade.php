<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
</head>

<body>
    @if ($errors->any())
        <span class="text-red-500">{{ $errors->first() }}</span>
    @endif
    <form action="{{ route('proseslogin') }}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
