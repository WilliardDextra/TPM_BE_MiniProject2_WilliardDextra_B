<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        font-family: "Hanken Grotesk";
      }

      p {
        color: rgb(180, 180, 180);
      }

      .subtitle {
        margin-bottom: 12px;
      }

      h1 {
        margin-bottom: 8px;
        color: rgb(164, 164, 164)
      }

      .label {
        color: rgb(164, 164, 164);
        margin-bottom: 10px;
      }

      .login-input {
        padding-left: 24px;
        padding-top: 12px;
        padding-bottom: 12px;
        padding-right: 24px;
        border-color: #131313;
        border-width: 1px;
        border-style: solid;
        border-radius: 6px;
        margin-bottom: 16px;
        width: 100%;
      }

      .submit {
        display: block;
        padding-left: 24px;
        padding-top: 12px;
        padding-bottom: 12px;
        padding-right: 24px;
        border: none;
        background-color: rgb(72, 41, 250);
        color: #bfc2e4;
        border-radius: 6px;
        width: 100%;
        cursor: pointer;
      }

      .wrapper {
        width: 550px;
        height: 700px;
        padding: 96px;
        background-color: #131313;
      }

      .remember-me-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 24px;
      }

      .checkbox-container {
        display: flex;
        gap: 12px;
      }

      .forgot-password {
        color: rgb(72, 41, 250);
      }

      .checkbox {
        accent-color: rgb(72, 41, 250);
      }

      .submit-google {
        background-color: #6b6b6b;
        border-color: #6b6b6b;
        border-style: solid;
        border-width: 1px;
        width: 100%;
        padding-top: 12px;
        padding-bottom: 12px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
      }

      .google-logo {
        width: 20px;
      }

      .google-text{
        color: #bfc2e4;
      }

      .divider-container {
        display: flex;
        justify-content: center;
        margin-top: 12px;
        margin-bottom: 14px;
      }

      .no-account-container {
        display: flex;
        justify-content: center;
        gap: 6px;
        font-size: 14px;
        margin-top: 32px;
      }

      .register-here {
        color: rgb(72, 41, 250);
        text-decoration: underline;
        cursor: pointer;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #131313;
      }

      .submit:hover {
        background-color: rgb(248, 76, 76);
      }

      .background {
        width: 550px;
        height: 700px;
        border: solid;
        border-width: 5px;
        border-radius: 10px;
        border-color: #131313
      }

      .large-container {
        display: flex;
      }
    </style>
  </head>
  <body>
    <div class="large-container">
      <div class="wrapper">
        <h1>Welcome Back!</h1>
        <p class="subtitle">
          Enter to get unlimited access to data and information
        </p>
        <?php if(session('success')): ?>
        <p class="subtitle"><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo csrf_field(); ?>
          <div class="label-container">
            <p class="label">Email</p>
          </div>
          <input
            class="login-input"
            placeholder="Enter Your Email"
            type="email"
            name="email"
            required
          />
          <div class="label-container">
            <p class="label">Password</p>
          </div>
          <input
            class="login-input"
            placeholder="Enter Your Password"
            type="password"
            name="password"
            required
          />
          <div class="remember-me-container">
            <div class="checkbox-container">
              <input type="checkbox" class="checkbox" />
              <p class="remember-me">Remember Me</p>
            </div>
            <a href="#" class="forgot-password">Forgot Password?</a>
          </div>
          <button type="submit" class="submit">Login</button>
        </form>
        <div class="divider-container">
          <p>Or, Login With</p>
        </div>
        <button class="submit-google">
          <img src='https://i.postimg.cc/DyV9qYQY/image.png' class="google-logo" />
          <p class="google-text">Sign Up With Google</p>
        </button>
        <div class="no-account-container">
          <p class="no-account-text">Don't have an Account?</p>
          <a href="#" class="register-here">Register Here</a>
        </div>
      </div>
      <img src="https://img.freepik.com/free-photo/woman-working-as-professional-chef_23-2151864220.jpg?t=st=1733833652~exp=1733837252~hmac=41208cd129ad7688e7d15b7ff5b939e67140522458913777116ed52f4bcef111&w=360" class="background" />
    </div>
  </body>
</html>
<?php /**PATH E:\Binus\Back End_TPM\TPM36-BE\resources\views/auth/login.blade.php ENDPATH**/ ?>