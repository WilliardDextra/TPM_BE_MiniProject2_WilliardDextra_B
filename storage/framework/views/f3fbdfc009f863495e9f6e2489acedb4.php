<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #131313; /* Warna utama */
            color: #bfc2e4; /* Warna sekunder */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background-color: #1f1f1f;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #bfc2e4; /* Warna sekunder */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #bfc2e4;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #bfc2e4;
            border-radius: 4px;
            background-color: #131313; /* Warna utama */
            color: #bfc2e4; /* Warna sekunder */
        }

        input:focus {
            outline: none;
            border-color: #7579e7;
            box-shadow: 0 0 5px #7579e7;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            background-color: #7579e7;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5356a7;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Register</h1>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH E:\Binus\Back End_TPM\TPM36-BE\resources\views/auth/register.blade.php ENDPATH**/ ?>