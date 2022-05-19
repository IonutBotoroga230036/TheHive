<?php  
include_once 'databaseconnect.php';
session_start();  

if(isset($_SESSION["username"])){header("location:entry.php");}  

if(isset($_POST["register"])){  
if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])){  
echo '<script>alert("All Fields are required")</script>';}  
else{  
   $username = mysqli_real_escape_string($conn, $_POST["username"]);  
   $password = mysqli_real_escape_string($conn, $_POST["password"]);  
   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $password = password_hash($password, PASSWORD_DEFAULT);  
   $query = "INSERT INTO accounts(username, password, email) VALUES('$username', '$password', '$email')";  


///niceeee
/// console.WriteLine
   if(mysqli_query($conn, $query))  
   {echo '<script>alert("Registration Done")</script>';}}}

   


if(isset($_POST["login"])){  
if(empty($_POST["username"]) || empty($_POST["password"])){  
echo '<script>alert("Both Fields are required")</script>';}  
else {  
$username = mysqli_real_escape_string($conn, $_POST["username"]);  
$password = mysqli_real_escape_string($conn, $_POST["password"]);  
$query = "SELECT * FROM accounts WHERE username = '$username'";  
$result = mysqli_query($conn, $query);  
if(mysqli_num_rows($result) > 0){  
while($row = mysqli_fetch_array($result))  
{  
if(password_verify($password, $row["password"])){  
//return true;  
$_SESSION["username"] = $username;  
header("location:entry.php");  }  
else{  
//return false;  
echo '<script>alert("Wrong User Details")</script>';}}}  
else{echo '<script>alert("Wrong User Details")</script>';}}}

?>  
<!DOCTYPE html>  
<html>  
<head>  
<title>The Hive</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./style.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./app.js"></script>

</head>
<body>  
<br/><br/>  
<div class="container" style="width:500px;">  
<h3 align="center">Guten Tag!</h3><br/> 

<?php ///Why?

if(isset($_GET["action"]) == "login"){?>  
<h3 align="center">Login</h3><br/>

<form method="post">  
<label>Enter Enail</label>  
<input type="text" name="username" class="form-control" /><br/>  
<label>Enter Password</label>  
<input type="text" name="password" class="form-control" /><br/>  
<input type="submit" name="login" value="Login" class="btn btn-info" /><br/>  
<p align="center"><a href="login.php">Register</a></p>  
</form>

<?php ///Why?
}  
else{
?>  
<h3 align="center">Register</h3><br/>  
<form method="post">  
<label>Enter Email</label>  
<input type="text" name="username" class="form-control" /><br/>  
<label>Enter Password</label>  
<input type="text" name="password" class="form-control" /><br/>  
<input type="submit" name="register" value="Register" class="btn btn-info" /><br/>  
<p align="center"><a href="login.php?action=login">Login</a></p></form>

<?php ///Why?
}?> 
</div>  
</body>  
</html>