<?
$username = $_POST['username'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if(empty($username)){
    echo 'введите все пропуски';
} else{
    echo $username . "<br>";
    echo $email . "<br>";
    echo $msg . "<br>";
}
?>