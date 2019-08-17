<?php
session_start();

if(isset($_POST['submit'])){

include_once 'config.php';

$uname = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

if(empty($uname)||empty($pass)){
  header("Location:index.php?signin=empty") ;
  exit();
}else{
  $sql = "SELECT * FROM signup where email='$uname'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "id: " . $row["sl_id"]. " Name: " . $row["name"]. "<br>";
      if($row['password']==$pass){
        echo "log in success";
      }else{
        echo "log in failed";
      }
    }
}
//  $resultCheck = mysqli_num_rows($result);

//  echo $resultCheck;
    //  $sql1="SELECT password FROM signup WHERE email='$uname'";
    //  //echo $sql1;
    // $result1 = $conn->query($sql1);
    //
    //
    // $resultCheck1 = mysqli_num_rows($result1);
    // // // $result1=mysqli_num_rows($sql1);
  }
  }
  else{
  header("Location:index.php?signin=2error") ;
  exit();
}
 ?>
