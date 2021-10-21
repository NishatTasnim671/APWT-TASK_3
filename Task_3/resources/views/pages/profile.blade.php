@extends("layouts.navbar")
@section("content")
<form action="{{route('/Edit')}}" method="POST" >
<h2>Profile</h2>
<input type="hidden" name="id"  value="{{$user->id}}" placeholder="Name" >
    {{csrf_field()}}
      
        <label>Name</label>
        <input type="text" name="name"  value="{{$user->name}}" placeholder="Name" >
        @error('name')
        <span >{{$message}}</span>
      @enderror
    <
      <label>Email address</label>
      <input type="text" name="email"  value="{{$user->email}}" placeholder="email" readonly>
      @error('email')
                      <span  >{{$message}}</span>
                    @enderror
                   
</div>
    <button type="submit">Submit</button>
  </form><br>


  <form action="{{route('/Edit')}}" method="POST" style=" width: 500px;  margin-left: 300px;">
<h2 class="card-title">Other Infoemation</h2>

    {{csrf_field()}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Profession</label>
        <input type="text" name="name" class="form-control" value="{{$infos->profession}}" placeholder="Name" aria-label="First name">
        @error('name')
        <span class="error" >{{$message}}</span>
      @enderror
     
       
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hobby</label>
        <input type="text" name="username" class="form-control" value="{{$infos->hobby}}" placeholder="User name" aria-label="First name">
        @error('username')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Age</label>
        <input type="text" name="phonenumber" class="form-control" value="{{$infos->Age}}" placeholder="Phone Number" aria-label="First name">
        @error('phonenumber')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
      </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Gender</label>
      <input type="text" name="email" class="form-control" value="{{$infos->gender}}" placeholder="email" aria-label="First name">
      @error('email')
                      <span class="error" >{{$message}}</span>
                    @enderror
                   
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
@section("title")
 Profile| @if(Session::get('name')) {{Session::get('name')}}
  @endif
@endsection