<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./css/index.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<ol>
    <form action="DefaultController.php" method="get">
    <input class="form-control" type="text" placeholder="Your Country e.x Poland" name="countrySet">
        <input type="submit" placeholder="Check Your Country">
    </form>
@foreach($star_wars as $element)
        <ul class="list-group ">
            <li class="list-group-item" id="name"> {{  $element['date'] }}</li>
            <li class="list-group-item" id="height"> Confirmed :  {{  $element['confirmed']  }}</li>
            <li class="list-group-item "id="mass"> Deaths  : {{  $element['deaths']  }}</li>
            <li class="list-group-item" id="eyesColor"> Recovered  : {{  $element['recovered']  }}</li>


        </ul>
        </li>
@endforeach
</ol>
</div>
</body>
</html>
