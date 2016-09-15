<!DOCTYPE html>
<html>
<head>
    <title>Laravel API example</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Time Management</a>
            </div>

            <ul class="nav navbar-nav navbar-right navigation-menu">
                <li style="margin-right:10px"><a href="/top/100">Leaderboard  | </a></li>
                <li><a href="/add_score">Add score |</a></li>
            </ul>
        </div>
    </nav>
</header>
<div>
    @if(isset($errors) && count($errors) >0)
        <div class="alert alert-danger">
            <ul>
                @if(is_array($errors))
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @elseif(is_string($errors))
                    {{ $errors }}
                @else
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                @endif
            </ul>
        </div>
    @endif
</div>
<div class="container col-md-12">
    @yield('content')
</div>
</body>
</html>
