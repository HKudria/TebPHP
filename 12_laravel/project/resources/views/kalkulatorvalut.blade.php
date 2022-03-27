<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kursy</title>
</head>
<body>

<form method="post" >
    @csrf
    <input type="text" name="first">
    <select name="second">
        @foreach($kurs[0]['rates'] as $valuta)
            <option value="{{$valuta['code']}}">{{$valuta['code']}} - {{$valuta['currency']}}</option>
        @endforeach
    </select>
    <input type="submit" value="Wymień">
</form>

@if($result)
    {{$kwota}} {{$code}} to będzie {{$result}} pln
    @endif
</body>
</html>
