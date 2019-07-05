<?php
// https://www.php.net/manual/en/class.mysqli.php
    $mysqli = new mysqli('localhost','root','','cy');
//  var_dump($mysqli);
//  echo $mysqli->connect_errno; //0為ok
$mysqli->set_charset('utf8');

//資料新增
//$sql = 'INSERT INTO cust(cname,tel,birthday) VALUES ("jessie","12345","1994-04-04")';
// $sql .= ', ("Rey","1234","1993-03-03")';
// $sql .= ', ("Lid","123","1992-02-02")';
$sql = 'INSERT INTO cust(cname,tel,birthday) VALUES (?,?,?)';
$cname = 'Kevin';
$tel = '666';
$birthday= '1991-01-01';

//資料修改
//$sql = 'UPDATE cust set cname = "Tony" where id =2';

// 砍資料
//$sql = 'DELETE from cust where id =2';


$stmt = $mysqli->prepare($sql);// 預先準備 ; $stmt is a Object of mysqli_stmt
$stmt->bind_param('sss', $cname, $tel, $birthday);//綁定參數  //sss 三個問號三個型別：三個字串
$stmt->execute(); 
echo $stmt->affected_rows; // 有幾筆資料受到影響
echo $mysqli->error; // 用於除錯