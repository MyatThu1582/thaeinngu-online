<?php
session_start();

include "../Admin/config/config.php";
// include "Admin/config/config.php";

class Query
{


public function selectOne($table)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id");
  $stmt->execute();
  $datas = $stmt->fetch(PDO::FETCH_ASSOC);
  return $datas;
}

public function select($table, $id)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = '$id' ORDER BY id DESC");
  $stmt->execute();
  $datas = $stmt->fetch(PDO::FETCH_ASSOC);
  return $datas;
}

public function select_user_table($table, $id)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = '$id' ORDER BY id DESC");
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

public function selectAll($table)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id DESC");
  $stmt->execute();
  $datas = $stmt->fetchall();
  return $datas;
}

public function selectAllNoDesc($table)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id");
  $stmt->execute();
  $datas = $stmt->fetchall();
  return $datas;
}

public function selectWithCol($table, $col, $id)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table WHERE $col='$id' ORDER BY id DESC");
  $stmt->execute();
  $datas = $stmt->fetchall();
  return $datas;
}

public function selectLimit($table, $limit)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id DESC LIMIT $limit");
  $stmt->execute();
  $datas = $stmt->fetchall();
  return $datas;
}

public function selectOneWithWhere($table,$column,$what)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table WHERE $column=:what");
  $stmt->execute(
    array(':what' => $what)
  );
  $datas = $stmt->fetch(PDO::FETCH_ASSOC);
  return $datas;
}


public function selectCount($aswhat, $table)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT COUNT(*) AS :aswhat FROM $table");
  $stmt->execute(
    array(':aswhat' => $aswhat)
  );
  $datas = $stmt->fetch(PDO::FETCH_ASSOC);
  return $datas;
}

public function selectCountWithWhere($aswhat, $table,$column,$what)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT COUNT(*) AS :aswhat FROM $table WHERE $column=:what");
  $stmt->execute(
    array(':aswhat' => $aswhat, ':what' => $what)
  );
  $datas = $stmt->fetch(PDO::FETCH_ASSOC);
  return $datas;
}

public function search($table,$column,$search)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM $table WHERE $column LIKE '%$search%' ORDER BY id DESC");
  $stmt->execute();
  $datas = $stmt->fetchall();
  return $datas;
}

public function user_add_page($name,$email,$phone,$password,$address,$role)
{
  global $pdo;

  $passwordhash = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");
  $user = $stmt->bindValue('email', $email);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user) {
    echo "<script>alert('Email duplicate')</script>";
  }else {
    $stmt = $pdo->prepare("INSERT INTO users(name,email,phone,password,address,role) VALUES (:name,:email,:phone,:password,:address,:role)");
    $result = $stmt->execute(
      array(':name'=>$name, ':email'=>$email, ':phone'=>$phone, ':password'=>$passwordhash, ':address'=>$address, ':role'=>$role)
    );
    if ($result) {
      echo "<script>alert('Successfuly Your Create');window.location.href='user_page.php'</script>";
    }
  }
}

public function user_update_page($name,$email,$phone,$address,$role,$id)
{
  global $pdo;

  $stmt = $pdo->prepare("UPDATE users SET name='$name', email='$email', phone='$phone', address='$address', role='$role' WHERE id='$id'");
  $stmt->execute();
  echo "<script>alert('Update is sussessfully');window.location.href='user_page.php';</script>";
}

public function admin_login($email,$password)
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email");
  $stmt->bindValue(':email', $email);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($user) {
      if ($user['role'] == 1) {

        if (password_verify($password, $user['password'])) {
          echo "<script>alert('SUCCESS');</script>";
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['username'] = $user['name'];
          $_SESSION['role'] = 1;
          $_SESSION['logged_in'] = time();

          header('location: dashboard.php');
        }
      }else {
        echo "<script>alert(Your Not Admin);window.Location.href='login.php';</script>";
    }
  }
  echo "<script>alert('Incorrect Credentials')</script>";
}


public function Forums_create($title,$description)
{
  global $pdo;

  $stmt = $pdo->prepare("INSERT INTO forums(title,description,author_id) VALUES (:title,:description,:author_id)");
  $result = $stmt->execute(
    array(':title'=>$title, ':description'=>$description, ':author_id'=>$_SESSION['user_id'])
  );
  if ($result) {
    echo "<script>alert('Successfuly Your Create');window.location.href='forums.php'</script>";
  }
}

public function forums_select_data($id)
{

  global $pdo;

  $stmtcmt = $pdo->prepare("SELECT * FROM comments WHERE forums_id=$id AND parent_id IS NULL");
  $stmtcmt->execute();
  $cmResult = $stmtcmt->fetchAll();
  return $cmResult;
  }

  public function select_reply($parent_id,$id)
  {

    global $pdo;

    $stmtrp = $pdo->prepare("SELECT * FROM comments WHERE forums_id=$id AND parent_id = $parent_id");
    $stmtrp->execute();
    $rpResult = $stmtrp->fetchAll();
    return $rpResult;
    }

  public function auResult()
  {
    global $pdo;

    $auResult = [];

    if (!empty($cmResult)) {
      foreach ($cmResult as $key => $value) {
        $authorId = $cmResult[$key]['author_id'];
        $stmtau = $pdo->prepare("SELECT * FROM user WHERE id=$authorId");
        $stmtau->execute();
        $auResult[] = $stmtau->fetch(PDO::FETCH_ASSOC);
        return $auResult;
        }
      }
  }

public function add_comment($comment)
{

  global $pdo;

  $forumId = $_GET['id'];

  $stmtcomment = $pdo->prepare("INSERT INTO comments(content,author_id,forums_id) VALUES (:content,:author_id,:forums_id)");
  $result = $stmtcomment->execute(
    array(':content'=>$comment,':author_id'=>$_SESSION['user_id'], ':forums_id'=>$forumId)
  );
  if ($result) {
    // header('Location: forums_details.php?id='.$forumId);
    echo "<script>window.location.href='forums_details.php?id=" . $forumId . "';</script>";

    }
  }

  public function add_reply($reply,$parent_id)
  {

    global $pdo;

    $forumId = $_GET['id'];

    $stmtreply = $pdo->prepare("INSERT INTO comments(content,author_id,forums_id,parent_id) VALUES (:content,:author_id,:forums_id,:parent_id)");
    $reply_result = $stmtreply->execute(
      array(':content'=>$reply, ':author_id'=>$_SESSION['user_id'], ':forums_id'=>$forumId, ':parent_id'=>$parent_id)
    );
    if ($reply_result) {
      echo "<script>window.location.href='forums_details.php?id=" . $forumId . "';</script>";
      }
    }

  public function admin_forums_update($title,$description,$id)
  {
    global $pdo;

    $stmt = $pdo->prepare("UPDATE forums SET title='$title', description='$description' WHERE id='$id'");
    $stmt->execute();
    echo "<script>alert('Update is sussessfully');window.location.href='forums_page.php';</script>";
  }

  public function admin_activity_add($title,$description,$image)
  {
    global $pdo;

    $file = 'activityimage/'.($_FILES['image']['name']);
    $imageType = pathinfo($file,PATHINFO_EXTENSION);

    if ($imageType  != 'png' && $imageType != 'jpg' && $imageType != 'jpeg') {
      echo "<script>alert('Image must be png,jpg,jpeg')</script>";
    }else {
      move_uploaded_file($_FILES['image']['tmp_name'], $file);
      $stmt = $pdo->prepare("INSERT INTO activity (title,description,image) VALUES (:title,:description,:image)");
      $result = $stmt->execute(
        array(':title'=>$title, ':description'=>$description, ':image'=>$image)
      );
      if ($result) {
        echo "<script>alert('Successfuly added');window.locction.href='activity_page.php'</script>";
      }
    }
  }

  public function admin_activity_update($title,$description,$image,$id){

    global $pdo;

    if ($_FILES['image']['name'] != null) {
      $file = 'activityimage/'.($_FILES['image']['name']);
      $imageType = pathinfo($file,PATHINFO_EXTENSION);

      if ($imageType != 'png' && $imageType != 'jpg' && $imageType != 'jpeg') {
        echo "<script>alert('Image must be png,jpg,jpeg')</script>";
      }else {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],$file);

        $stmt = $pdo->prepare("UPDATE activity SET title='$title', description='$description', image='$image', WHERE id='$id'");
        $result = $stmt->execute();
        if ($result) {
          echo "<script>alert('Successfuly Updated');window.location.href='activity_page.php'</script>";
        }
      }
    }else {
      $stmt = $pdo->prepare("UPDATE activity SET title='$title', description='$description' WHERE id='$id'");
      $result = $stmt->execute();
      if ($result) {
        echo "<script>alert('Successfuly Updated');window.location.href='activity_page.php'</script>";
      }
    }
  }

  public function donate_add($name,$email,$address,$phone,$dontent_content,$amount,$message)
  {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO donate (name,email,address,phone,dontent_content,amount,message) VALUES (:name,:email,:address,:phone,:dontent_content,:amount,:message)");
    $result = $stmt->execute(
      array(':name'=>$name, ':email'=>$email, ':address'=>$address, ':phone'=>$phone, ':dontent_content'=>$dontent_content, ':amount'=>$amount, ':message'=>$message)
    );
    if ($result) {
      echo "<script>alert('Successfuly added');window.locction.href='donator_page.php'</script>";
    }
  }

  public function information_add($bank_acc_name,$acc_name,$phone_number)
  {
    global $pdo;

    $stmt = $pdo->prepare("INSERT INTO information (bank_acc_name,acc_name,phone_number) VALUES (:bank_acc_name,:acc_name,:phone_number)");
    $result = $stmt->execute(
      array(':bank_acc_name'=>$bank_acc_name, ':acc_name'=>$acc_name, ':phone_number'=>$phone_number)
    );
    if ($result) {
      echo "<script>alert('Successfuly added');window.locction.href='information_page.php'</script>";
    }
  }


}
