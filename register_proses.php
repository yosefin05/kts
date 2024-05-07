<?php
include 'koneksi.php';

$email = $_POST['email']; 
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO `user`(`email`, `username`, `password`, `role`) VALUES ('$email','$username','$password','$role')";;
$result = mysqli_query($mysqli,$sql);
if($result){
    echo "<script>
            alert('Register successfully');
            document.location = 'login.php';
        </script>";
}else{
    echo "<script>
    alert('Register Failed');
    document.location = 'register.php';
</script>";
}
?>

