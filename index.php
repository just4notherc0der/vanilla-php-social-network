<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>

    <!-- Welcome -->
    <h1 class="welcome">Welcome</h1>

    <div class="forms">
      <!-- Register -->
      <form id="register-form" class="form" action="register.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password-confirm" placeholder="Confirm Password">
        <button type="submit" name="register">Register</button>
      </form>

      <!-- Login -->
      <form id="login-form" class="form" action="login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="login">Login</button>
      </form>
    </div>

  </body>
</html>
