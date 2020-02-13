<html>

<head>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<link rel="stylesheet" href='/css/index.css'>
</head>
<body>
<ol>
@foreach($star_wars as $element)
   <li>Name {{  $element['name']  }}
    <ul>Height  {{  $element['height']  }}<br>
      Mass  {{  $element['mass']  }}</ul></li>
@endforeach
</ol>
</body>
</html>
