<?php
$rcode = $_POST['rcode'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$user = 'root';
$pass = '';
$db = new PDO('mysql:127.0.0.1;dbname=vierkantewielendb', $user, $pass);
$result = $db->query("SELECT * from vierkantewielendb.Accounts WHERE resetpw_token='$rcode'");
// if ($password1 == $password2){
//   if ($result->rowCount()>0) {
//     $db->query("UPDATE vierkantewielendb.Accounts SET Password='$password1' WHERE resetpw_token='$rcode'");
//     $db->query("UPDATE vierkantewielendb.Accounts SET resetpw_token='0' WHERE resetpw_token='$rcode'");
//   } else {
//     echo'reset token invalid'
//   }; else {
//   echo 'Passwords did not match'
// }
if ($password1 == $password2){
  if($result->rowCount()>0){
    $db->query("UPDATE vierkantewielendb.Accounts SET Password='$password1' WHERE resetpw_token='$rcode'");
    $db->query("UPDATE vierkantewielendb.Accounts SET resetpw_token='0' WHERE resetpw_token='$rcode'");
    echo 'Succesfully changed password and invalidated reset token';
  } else {
    echo'reset token invalid';
  }
} else {
  echo 'Passwords did not match';
}
  