<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11-6-2020
 * Time: 13:30
 */

$host="localhost";
$user="root";
$password="root";
$db="login scherm";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['User'])){

    $uname=$_POST['User'];
    $password=$_POST['Pass'];

    $sql="select * from gebruikers where User='".$uname."'AND Pass='".$password."' limit 3";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

}
?>