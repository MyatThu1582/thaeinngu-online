<?php include 'navbar.php'; ?>
<?php include 'resource/links.php'; ?>
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
    if ($_POST) {
      if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['password']) || strlen($_POST['password']) < 4) {
        if (empty($_POST['name'])) {
          $nameError = 'Name cannot be empty';
        }
        if (empty($_POST['email'])) {
          $emailError = 'Email cannot be empty';
        }
        if (empty($_POST['phone'])) {
          $phoneError = 'Phone cannot be empty';
        }
        if (empty($_POST['address'])) {
          $addressError = 'Address cannot be empty';
        }
        if (empty($_POST['password'])) {
          $passwordError = 'Password cannot be empty';
        }elseif  (strlen($_POST['password']) < 4) {
          $passwordError = 'Password should be 4 characters at least';
        }
      }else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $passwordhash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");

        $stmt->bindValue(':email' ,$email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
          echo "<script>alert('Email Duplicated')</script>";
        }else {
          $stmt = $pdo->prepare("INSERT INTO users(name,email,phone,password,address) VALUES (:name,:email,:phone,:password,:address)");
          $result = $stmt->execute(
            array(':name'=>$name, ':email'=>$email, ':phone'=>$phone, ':password'=>$passwordhash, ':address'=>$address)
          );
          if ($result) {
            echo "<script>alert('Successfuly Register, You can now login');window.localtion.href='login.php'</script>";
          }
        }
      }
    }
   ?>

<div class="container mt-5 bannar pt-5" style="height:200px;">
  <div class="float-end">
  <h2 class="mt-5 pt-0">Register</h2>
  <a href="../index.php" class="link text-brown">Home</a>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short text-brown" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
  </svg>
  <a href="gallery.php" class="link text-brown">Register</a>
  </div>
</div>

<div class="form-container">
  <h2>Register At Thaeinngu</h2>
  <form class="" action="" method="post">
    <label for="name">Name</label><span style="color:red;" class="ms-2"><?php echo empty($nameError) ? '' : '*'.$nameError; ?></span>
    <input type="text" name="name" placeholder="Enter Your Name">

    <div class="row">
      <div>
        <label for="email">Email</label><span style="color:red;" class="ms-2"><?php echo empty($emailError) ? '' : '*'.$emailError; ?></span>
        <input type="email" name="email" placeholder="Enter Your Email">
      </div>
      <div>
        <label for="phone">Phone</label><span style="color:red; font-size:16px;" class="ms-1"><?php echo empty($phoneError) ? '' : '*'.$phoneError; ?></span>
        <input type="number" name="phone" placeholder="Enter Your Phone">
      </div>
    </div>

    <label for="password">Password</label><span style="color:red;" class="ms-2"><?php echo empty($passwordError) ? '' : '*'.$passwordError; ?></span>
    <input type="password" name="password" placeholder="Enter Your Password">

    <label for="address">Address</label><span style="color:red;" class="ms-2"><?php echo empty($addressError) ? '' : '*'.$addressError; ?></span>
    <textarea name="address"  placeholder="Enter Your Address"></textarea>

    <button type="submit">Register</button>
  </form>
</div>
  <br><br><br>
<?php include 'footer.php'; ?>
