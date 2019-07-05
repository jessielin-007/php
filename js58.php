<?php

$mysqli = new mysqli('localhost','root','','cy');

$mysqli->set_charset('utf8');

$sql = 'SELECT * FROM cust';


$stmt = $mysqli->prepare($sql);

$stmt->execute(); 
$stmt->store_result(); //儲存資料


echo $stmt->num_rows . '<hr>'; // 查看有幾筆資料
$stmt->bind_result($id, $cname, $tel, $birthday);


$ret = new stdClass(); //Object()

if($stmt->num_rows>0){
    $ret->result = $stmt->num_rows;
    $row = [];
    //$stmt->fetch();//移動游標 取出一筆
    while ($stmt->fetch()){
    //    echo "{$id} : {$cname} : {$tel} : {$birthday}<br>";
        $row['id'] = $id;
        $row['cname'] = $cname;
        $row['tel'] = $tel;
        $row['birthday'] = $birthday;

        $ret->data[] = $row;
    }
}else{
    $ret->result = 'no data';
}

$stmt-> free_result();
$stmt-> close();

echo json_encode($ret); //打包成json物件
