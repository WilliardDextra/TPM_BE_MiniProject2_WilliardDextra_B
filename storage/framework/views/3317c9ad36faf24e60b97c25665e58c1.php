<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cooking Recipe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        p {
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Your Recipe: <span class="highlight"><?php echo e($data['name']); ?></span></h1>
        <p><strong>Description:</strong> <?php echo e($data['description']); ?></p>
        <p><strong>Main Ingredients:</strong> <?php echo e($data['main_ingredients']); ?></p>
        <p><strong>Date Added:</strong> <?php echo e($data['time_added']); ?></p>
        <p><strong>Cooking Duration:</strong> <?php echo e($data['cooking_duration']); ?> minutes</p>
        <p>Thank you for contributing your recipe to our collection! We hope it inspires many others to enjoy cooking as much as you do.</p>
        <p>Happy Cooking!</p>
    </div>
</body>
</html>
<?php /**PATH E:\Binus\Back End_TPM\TPM36-BE\resources\views/email/postEmail.blade.php ENDPATH**/ ?>