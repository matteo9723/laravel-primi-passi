<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>homepage</title>
</head>
<body>
  <h1>hello world</h1>
  <ul>
    <li>
      <a href="{{route('about')}}">about</a>
    </li>
    <li>
      <a href="{{route('contact')}}">contact</a>
    </li>
  </ul>
  <h3>{{$name}}</h3>
  <ul>
    @foreach ( $list as $item )

      <li>
        {{$item}}
      </li>
      
    @endforeach
  </ul>

  <div>
    @if ($contanti < 15)
        <h4>non hai abbastanza soldi</h4>    
    @else
    <h4>hai abbastanza soldi</h4>   
    @endif
  </div>
</body>
</html>