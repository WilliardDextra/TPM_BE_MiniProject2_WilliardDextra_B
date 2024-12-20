<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Recipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Recipe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add Recipe</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center">View Recipe</h1>

    <div class="m-5">
        <a href="<?php echo e(route('createBook')); ?>" class="">
            <button class="btn btn-success">Add New Recipe</button>
        </a>
    </div>

    <div class="d-flex flex-row justify-content-center gap-5">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo e(asset('/storage/images/'.$book->image)); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Name: <?php echo e($book->name); ?></h5>
                    <p class="card-text">Description: <?php echo e($book->description); ?></p>
                    <p class="card-text">Main Ingredients: <?php echo e($book->main_ingredients); ?></p>
                    <p class="card-text">Cooking Duration : <?php echo e($book->cooking_duration); ?> minutes</p>
                    <p class="card-text">Category: <?php echo e($book->category->category_name); ?></p>
                    <p class="card-text">Time Added: <?php echo e($book->time_added); ?></p>
                    <a href="<?php echo e(route('editBook', $book->id)); ?>" class="btn btn-success">Edit</a>

                    <form action="<?php echo e(route('deleteBook', $book->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH E:\Binus\Back End_TPM\TPM36-BE\resources\views/welcome.blade.php ENDPATH**/ ?>