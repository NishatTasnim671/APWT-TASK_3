@extends('Layouts.navbar')

@section('content')

<h1 align='center'> Welcome to Contact page <h1>
<form action="{{route('contact')}}" method="post">
        
        {{csrf_field()}}

        <div>
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" >
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <span>Address</span>
            <input type="text" name="address" value="{{old('address')}}" >
        </div>
        <div>
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" >
        </div>
        <div >
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" >
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit"  value="Contact" >
    </form>
    @endsection