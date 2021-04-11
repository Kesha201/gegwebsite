<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Home</title>
</head>
<body>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Config::get('languages')[App::getLocale()] }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach (Config::get('languages') as $lang => $language)
        @if ($lang != App::getLocale())
                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
        @endif
    @endforeach
    </div>
</li>
</body>
</html>