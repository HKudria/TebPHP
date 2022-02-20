@unless($brand)
    Brak dannych!
@else
    Marka: {{$brand}}, &nbsp;
@endunless
@if($model)
    model: {{$model}}
@endif
@if($color)
    <p>Kolor: {{$color}}</p>
@endif
@if($price)
    <p>Cena: {{$price}}</p>
@endif

