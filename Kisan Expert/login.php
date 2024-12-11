<html>
<head>
    <title> LOGIN KISAN EXPERT  </title>
    <link rel="stylesheet" type="text/css" href="login style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="abb.jpg" class="avatar">
        <h1>Login Here</h1>
            <form>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login" class="loginBtn">
            <a href="#">Forget Password</a>    
            </form>
         <hr>
         
         <a href="register.html">Create an account</a>
         
        </div>
    
    </body>
</html>
<?php
$conn = mysqli_connect("localhost","root","");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result= mysqli_query($conn,$sql);
    while($row = mysql_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }else{
            echo "<script>
                alert('Login unsuccessful');
                </script>
        }
    }
}
?>
