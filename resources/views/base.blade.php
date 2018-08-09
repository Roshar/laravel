<!doctype html>
<html lang="en">
<head>
    <title>{{$title or ''}}</title>
    <link rel="stylesheet" href="base.style.css">
    @section('head')
    @show
</head>
<body>
    <header>
        @section('header')
        @show
    </header>
    <div class="mainContent">

    </div>
    <footer>
        @section('footer')
        @show
    </footer>
    <script src="base.script.js"></script>
</body>
</html>