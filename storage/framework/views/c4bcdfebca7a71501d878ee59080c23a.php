<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
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
                        <a class="nav-link" href="#">Add New Recipe</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-5">
        <h1 class="text-center">Edit Recipe</h1>
        <form action="<?php echo e(route('updateBook', $book->id )); ?>" method="POST" enctype="">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input value="<?php echo e($book->name); ?>" type="text" class="form-control" id="" name="name">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input value="<?php echo e($book->description); ?>" type="text" class="form-control" id="" name="description">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Main Ingredients</label>
                <input value="<?php echo e($book->main_ingredients); ?>" type="text" class="form-control" id="" name="main_ingredients">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Cooking Duration =In Minutes=</label>
                <input value="<?php echo e($book->cooking_duration); ?>" type="number" class="form-control" id="" name="cooking_duration">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Date Added</label>
                <input value="<?php echo e($book->time_added); ?>"type="date" class="form-control" id="" name="time_added">
            </div>

            

            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH E:\Binus\Back End_TPM\TPM36-BE-master\resources\views/editBook.blade.php ENDPATH**/ ?>