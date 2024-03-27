<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="language" content="English">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ARIVALAYAM Foundation is a nationally registered Non-Profit Organisation that works with uttermost determination to enrich and blossom the lives of women and girl children since 2012.">
    <meta name="keywords" content="ARIVALAYAM, Foundation, Non-Profit Organisation, women empowerment, girl child, NGO, 2012">
    <meta name="author" content="Nadun Sandeepa">

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>ARIVALAYAM</title>
   
</head>
<body>
   @include('./layout/top_nav')
    <div >
        @yield('content')
    </div>

    @include('./layout/footer')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
