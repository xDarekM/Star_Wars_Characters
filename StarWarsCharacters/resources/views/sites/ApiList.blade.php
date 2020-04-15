<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./css/index.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<ol>
    <form  method="get">
    <input class="form-control" type="text" placeholder="Your Country e.x Poland, poland" name="countrySet">
        <div><button type="submit" class="btn btn-primary mb-2" id="submitButton">Check Country</button></div>>
    </form>
@if(empty($star_wars)  && gettype($star_wars="array"))
        <div class="alert alert-danger">Country not found</div>
@else
    @foreach($star_wars as $element)
        <ul class="list-group ">
            <li class="list-group-item" id="date"> {{  $element['date'] }}</li>
            <li class="list-group-item" id="confirmed"> Confirmed :  {{  $element['confirmed']  }}</li>
            <li class="list-group-item "id="deaths"> Deaths  : {{  $element['deaths']  }}</li>
            <li class="list-group-item" id="recovered"> Recovered  : {{  $element['recovered']  }}</li>
        </ul>
        </li>
    @endforeach
@endif

</ol>
</div>
</body>
</html>
