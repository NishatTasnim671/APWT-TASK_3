@extends('Layouts.navbar')

@section('content')
<h1 align='center'> Welcome to Our Service page <h1>
    <h2>Our Products</h2>
    @foreach ($product as $item)
    {{
        $item
    }}
    <?php 
        echo "<br>";
        ?>
    @endforeach
    @endsection