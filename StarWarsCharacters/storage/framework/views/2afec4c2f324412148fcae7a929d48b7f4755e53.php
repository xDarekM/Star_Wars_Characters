<html>

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center"> Star Wars Characters</h2>
<div class="container">
<ol>
<?php $__currentLoopData = $star_wars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul class="list-group ">
            <li class="list-group-item list-group-item-info">Name : <?php echo e($element['name']); ?></li>
            <li class="list-group-item ">Height :  <?php echo e($element['height']); ?></li>
            <li class="list-group-item"> Mass  : <?php echo e($element['mass']); ?></li>
            <li class="list-group-item"> Eyes color  : <?php echo e($element['eye_color']); ?></li>
            <li class="list-group-item"> Birth Year  : <?php echo e($element['birth_year']); ?></li>
            <li class="list-group-item"> Gender  : <?php echo e($element['gender']); ?></li>

        </ul>
        </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
</div>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/starWars/StarWarsCharacters/resources/views//sites/ApiList.blade.php ENDPATH**/ ?>