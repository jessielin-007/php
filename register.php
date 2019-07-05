<?php
    //資料新增
    include_once 'sql.php';

    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $realname = $_REQUEST['realname'];
        
        $passwd = password_hash($passwd, PASSWORD_DEFAULT); //密碼加密
        
        //檔案上傳
        $icon = null; //預設值
        if($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name'])); //檔案內容讀成一個字串
        }
        $sql = "INSERT INTO member (account,passwd,realname,icon) VALUES " . 
        "('{$account}','{$passwd}','{$realname}','{$icon}')"; //只要不是數字,就是字串
        if($mysqli->query($sql)){
            //header('Location: ');
            echo 'OK';
        }else{
            echo 'Error' . $sql;
        }

    }
?>

<script>
    //XML Object
    let xhttp = new XMLHttpRequest();
    let isDataOK = false;
    
    xhttp.onreadystatechange = function(){
        if (xhttp.readyState == 4 && xhttp.status == 200){
            if(xhttp.responseText == 0){
                document.getElementById('mesg').innerHTML = 'OK';
                isDataOK = true;
            }else{
                document.getElementById('mesg').innerHTML = 'XX';
            }
        }
    }

    function isNewAccount(){
        let account = document.getElementById('account').value;
        //alert('account');
        xhttp.open('GET','newaccount.php?account=' + account, true); //非同步處理
        xhttp.send();
    }

    function isSubmit(){
        
        return isDataOK; 
    }
</script>

<form method='post' action ="register.php" onsubmit ="return isSubmit();" enctype="multipart/form-data">
    Account: <input type = "text" id="account" name="account" onchange="isNewAccount()"/>
    <span id='mesg'></span>
    <br>
    Password: <input type = "password" name="passwd" /><br>
    Realname: <input type = "text" name="realname" /><br>
    Icon: <input type = "file" name="icon" /><br>
    <input type = "submit" value="Register" />
</form>