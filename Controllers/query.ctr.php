<?php
session_start();
include "database.php";

class Query
{

// COMMON FUNCTIONS
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
}
