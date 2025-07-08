<?php 
session_start();
?>
<?php include 'navbar.php'; ?>
<?php include 'config/config.php'; ?>

<style media="screen">
@keyframes fadeBody {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

.form-container {
  background: #ffffff;
  padding: 35px 30px;
  border-radius: 18px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 460px;
  animation: slideUp 1s ease-in-out;
  margin-left:38%;
  margin-top:90px;
}

@keyframes slideUp {
  0% {
    opacity: 0;
    transform: translateY(40px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

h2 {
  text-align: center;
  margin-bottom: 25px;
  font-size: 26px;
  color: #333;
}

label {
  font-weight: 600;
  font-size: 14px;
  margin-bottom: 5px;
  display: block;
  color: #444;
}

input, textarea {
  width: 100%;
  padding: 10px 14px;
  margin-bottom: 18px;
  border: 1px solid #ccc;
  border-radius: 10px;
  transition: all 0.3s ease;
}

input:focus, textarea:focus {
  border-color: #e91e63;
  box-shadow: 0 0 0 4px rgba(233, 30, 99, 0.15);
  outline: none;
}

.row {
  display: flex;
  gap: 10px;
}

.row > div {
  flex: 1;
}

button {
  width: 100%;
  padding: 12px;
  background-color:rgb(94,0,0);
  color: #fff;
  border: none;
  border-radius: 12px;
  font-weight: 600;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.35s ease;
  position: relative;
  overflow: hidden;
}

button::after {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255,255,255,0.2);
  transition: all 0.3s ease;
}

button:hover::after {
  left: 100%;
}

button:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 20px rgba(136, 14, 79, 0.3);
}

button:active {
  transform: scale(0.97);
}

textarea {
  resize: vertical;
  min-height: 60px;
}
</style>

  <?php
  if ($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->bindValue(':email',$email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['name'];
        $_SESSION['role'] = 0;
        $_SESSION['logged_in'] = time();

         echo "<script>window.location.href='index.php'</script>";

       }else {
         echo "<script>alert('Incorrect Credentials')</script>";
       }
    }
  }

 ?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Login</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="gallery.php" class="link text-brown">Login</a>
  </div>
</div>



<div class="form-container">
  <h2>Login Into Thaeinngu</h2>
  <form class="" action="" method="post">
    <label for="name">Email</label><span style="color:red;" class="ms-2"><?php echo empty($emailError) ? '' : '*'.$emailError; ?></span>
    <input type="email" name="email" placeholder="Enter Your Email">

    <label for="password">Password</label><span style="color:red;" class="ms-2"><?php echo empty($passwordError) ? '' : '*'.$passwordError; ?></span>
    <input type="password" name="password" placeholder="Enter Your Password">

    <button type="submit" class="mt-2">Login</button>
  </form>
</div>
<br><br><br>
<?php include 'footer.php'; ?>
