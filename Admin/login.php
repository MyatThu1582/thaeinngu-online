<?php include '../Controllers/query.ctr.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-modal-link/bootstrap.min.css">
    <script src="bootstrap-modal-link/jquery.min.js"></script>
    <script src="bootstrap-modal-link/bootstrap.min.js"></script>
    <script src="app.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href='custom.css' rel='stylesheet' type='text/css'>
    <script src="app.js" charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <style media="screen">
    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  }

  body {
  background-color: #f5f7fa;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  }

  .login-container {
  background-color: #ffffff;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0px 8px 16px 0px rgb(94,0,0);

  width: 100%;
  max-width: 400px;
  }

  .login-form h2 {
  text-align: center;
  margin-bottom: 1.5rem;
  color: #333;
  }

  .input-group {
  margin-bottom: 1rem;
  }

  .input-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #555;
  }

  .input-group input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  }

  button {
  margin-top:10px;
  width: 100%;
  padding: 0.75rem;
  background-color:rgb(94,0,0);
  color: #fff;
  font-size: 1rem;
  border:2px solid  rgb(94,0,0);
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.3s;
  }

  button:hover {
  background:none;
  color:black;
  font-weight: bold;
  }
  </style>

    <body>

      <?php
        $db = new Query();
        if ($_POST) {
          if (empty($_POST['email']) OR empty($_POST['password'])) {
            if (empty($_POST['email'])) {
              $emailError = 'Email cannot be empty';
            }
            if (empty($_POST['password'])) {
              $passwordError = 'Password cannot be empty';
            }
          }else {
            print_r($_POST['email']);
            die();
            $admin_login = $db->admin_login($_POST['email'], $_POST['password']);
          }
        }


       ?>

      <div class="login-container">
        <form class="login-form" action="" method="post">
          <h2>Admin Login</h2>
          <div class="input-group">
            <label for="email">Email</label><p style="color:red;" class="ms-3"><?php echo empty($emailError) ? '' : $emailError; ?></p>
            <input type="email" name="email" placeholder="Enter Your Email">
          </div>
          <div class="input-group">
            <label for="password">Password</label><p style="color:red;" class="ms-3"><?php echo empty($passwordError) ? '' : $passwordError; ?></p>
            <input type="password" name="password" placeholder="Enter Your Password">
          </div>
          <button type="submit" name="login_btn">Login</button>
        </form>
      </div>
    </body>
    </html>


  </body>
</html>
