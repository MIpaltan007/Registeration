<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $voterid=$_POST['voterid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $password =sha1($_POST['password']);
    $choice = $_POST['choice'];

    $sql = "INSERT INTO users (voterid,firstname,lastname,gender,age,password,choice) VALUES (?,?,?,?,?,?,?)";
    $stmtinsert =$db->prepare($sql);
    $result = $stmtinsert->execute([$voterid,$firstname,$lastname,$gender,$age,$password,$choice]);
    if($result){
     echo 'Successfully saved';
    }
    else{
     echo 'They were errors while saving the data';
    }
 }
 else{
    echo 'No Data';
 }


