<?php
require 'koneksi.php';

   if (isset($_POST["signin"])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $submit = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND BINARY password = '$password'");

      if (mysqli_num_rows($submit) == 1) {
         $row = mysqli_fetch_assoc($submit);
         if (password_verify($password, $row["password"])); {
            header("Location: admin.php");
            exit;
         }
      }
      $error = true;
   }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8" />
   <title>Login Admin</title>
   <link rel="stylesheet" href="css/login.css" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">Form Login</div>
      </div>
      <div class="form-container">
         <div class="form-inner">
            <form action="" class="login" method="post">
               <div class="field">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" placeholder="Masukan Username" required>
               </div>
               <br>
               <div class="field">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" placeholder="Masukan Password" required>
               </div>
               <br>

               <?php if (isset($error)) : ?>
                  <p style="color: red; font-style: italic;">username/ password salah</p>
               <?php endif; ?>

               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" name="signin" value="Login" />
               </div>
            </form>
         </div>
      </div>
   </div>

</body>

</html>