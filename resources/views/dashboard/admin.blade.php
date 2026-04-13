{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
   
    <h1>Dashboard</h1>
    <h2>List Menu</h2>
    <b>login as: {{ Auth::user()->name }}</b> ({{ Auth::user()->role }})
    <ul>
        <li>
            <a href="{{ route('product.index') }}">Products</a>
        </li>
        @if (Auth::user()->role == 'admin')
            <li>
                <a href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li>
                <a href="{{ route('suplier.index') }}">Suppliers</a>
            </li>
        @endif
    </ul>

    <form action="{{ route('proseslogout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html> --}}
@extends('layouts.app')
@section('content')
