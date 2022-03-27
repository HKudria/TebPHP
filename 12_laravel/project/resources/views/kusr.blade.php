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
<style>
    table, th, td {
        border: 1px solid;
    }
</style>
<table>
    <tr>
        <th>Valuta</th>
        <th>Code</th>
        <th>Zakup</th>
        <th>Spredaż</th>
    </tr>
@foreach($kurs[0]['rates'] as $valuta)
    <tr>
        <td>{{$valuta['currency']}}</td>
        <td>{{$valuta['code']}}</td>
        <td>{{$valuta['ask']}}</td>
        <td>{{$valuta['bid']}}</td>
    </tr>
@endforeach
</table>
</body>
</html>
