<html>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="./css/index.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container">
<ol>
    <form action="ApiList.blade.php" method="get">
    <input class="form-control" type="text" placeholder="Your Country e.x Poland" name="countrySet">
    </form>
<?php $__currentLoopData = $star_wars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul class="list-group ">
            <li class="list-group-item" id="name"> <?php echo e($element['date']); ?></li>
            <li class="list-group-item" id="height"> Confirmed :  <?php echo e($element['confirmed']); ?></li>
            <li class="list-group-item "id="mass"> Deaths  : <?php echo e($element['deaths']); ?></li>
            <li class="list-group-item" id="eyesColor"> Recovered  : <?php echo e($element['recovered']); ?></li>


        </ul>
        </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
</div>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/starWars/StarWarsCharacters/resources/views//sites/ApiList.blade.php ENDPATH**/ ?>