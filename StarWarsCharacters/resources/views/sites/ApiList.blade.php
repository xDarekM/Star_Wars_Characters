<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/css/index.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<ol>
@foreach($star_wars as $element)
        <ul class="list-group ">
            <li class="list-group-item" id="name"> {{  $element['name'] }}</li>
            <li class="list-group-item" id="height"> Height :  {{  $element['height']  }}</li>
            <li class="list-group-item "id="mass"> Mass  : {{  $element['mass']  }}</li>
            <li class="list-group-item" id="eyesColor"> Eyes color  : {{  $element['eye_color']  }}</li>
            <li class="list-group-item" id="year"> Birth Year  : {{  $element['birth_year']  }}</li>
            <li class="list-group-item" id="gender"> Gender  : {{  $element['gender']  }}</li>

        </ul>
        </li>
@endforeach
</ol>
</div>
</body>
</html>
