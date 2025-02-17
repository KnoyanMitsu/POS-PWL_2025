@extends('home')

@section('content')    
<h1>
    Selamat datang di POS 
</h1>

<h2>Form untuk Transaksi</h2>
<form action="{{ route('transcation')}}" method="post">
    @csrf
    category: <select name="category" id="cateogory">
        <option value="Food Beverage">Food Beverage</option>
        <option value="Beauty Health">Beauty Health</option>
        <option value="Home Care">Home Care</option>
        <option value="Baby Kid">Baby Kid</option>
    </select>
    name: <input type="text" name="name">
    <button type="submit">Transaksi</button>
</form>
@endsection