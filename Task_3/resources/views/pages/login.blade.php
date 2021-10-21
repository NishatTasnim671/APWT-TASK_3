
    <form action="{{route('login')}}" method="post">
        
        {{csrf_field()}}

        <div>
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        
        <div >
        <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}" >
              </div>
              @error('password')
                      <span >{{$message}}</span>
                    @enderror
                    
      <input type="checkbox"  id="exampleCheck1">
      <label for="exampleCheck1">Remember me</label>
      <div id="emailHelp">Your have no account?<a href="{{route('registration')}}">Registration</a></div>          
        <input type="submit"  value="Log In" >
    </form>
