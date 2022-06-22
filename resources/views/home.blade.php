<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="CSS/style.css">
  <title>Laravel-primi-passi</title>
</head>
<body>
  <h1>HELLO WORLD!</h1>
  <h2>Hello {{$user}}!!</h2>

  <h3>Here's a list of your favourite colors:</h3>

  <ul>

    @foreach ($favourite_colors as $color)

      @if($loop->first)
        <li class="orange">{{ $color }}</li>
      @elseif ($loop->last)
        <li class="purple"> {{ $color }}</li>
      @else
        <li>{{$color}}</li>
   
      @endif
    @endforeach


  </ul>

  <nav>
    <ul>
      <li><a href="{{route('about')}}">About</a></li>
      <li><a href="{{route('contact_us')}}">Contact Us</a></li>
    </ul>
  </nav>



</body>
</html>