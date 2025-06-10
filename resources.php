<!DOCTYPE html>
<html>
<head>
    <title>Combo Demo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @for ($i = 1; $i <= 10; $i++)
        <select id="combo{{ $i }}"></select>
        <br><br>
    @endfor
    <script src="{{ asset('combo.js') }}"></script>
</body>
</html>
