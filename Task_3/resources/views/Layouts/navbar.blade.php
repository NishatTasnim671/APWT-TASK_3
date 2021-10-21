
<html>
    <body>
    
        <table width=100%>
            <tr><b>
            <td>
            <a  href="/user/home/{{$user->id}}">Home</a>
                </td>
                <td>
                <a href="/user/profile/{{$user->id}}"> {{$user->name}}</a>
                </td>

                <td>
                    <a href="{{ route('service') }}">Service/Product </a>
                </td>

                <td>
                     <a href="{{ route('teams') }}">Our Teams </a>       
                </td>

                <td>
                    <a href="{{ route('about') }}">About Us</a>
                </td>

                <td>
                     <a href="{{ route('contact') }}">Contact Us </a>
                </td>
<td>
                <a href="{{route('/logout')}}"><button type="submit">Log out</button></a>
</td>
</b>
            </tr>
        </table>

        @yield('content')
    </body>

</html>