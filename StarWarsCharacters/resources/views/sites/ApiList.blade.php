<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<ol>
@foreach($star_wars as $element)
        <ul class="list-group">
            <li class="list-group-item list-group-item-info">Name : {{  $element['name'] }}</li>
            <li class="list-group-item">Height :  {{  $element['height']  }}</li>
            <li class="list-group-item"> Mass  : {{  $element['mass']  }}</li>
            <li class="list-group-item"> Birth Year  : {{  $element['birth_year']  }}</li>
            <li class="list-group-item"> Gender  : {{  $element['gender']  }}</li>
        </ul>
        </li>
@endforeach
</ol>
</body>
</html>
