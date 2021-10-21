
    <form action="{{route('/Registertion')}}" method="post">
        
        {{csrf_field()}}

        <div>
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" >
            @error('name')
                <span >{{$message}}</span>
            @enderror
        </div>
        
        <div>
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" >
            @error('dob')
                <span >{{$message}}</span>
            @enderror
        </div>
        <div>
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" >
            @error('email')
                <span >{{$message}}</span>
            @enderror
        </div>
        
        <div >
        <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}" >
              </div>
              @error('password')
                      <span >{{$message}}</span>
                    @enderror
        <input type="submit"  value="Register" >
    </form>
