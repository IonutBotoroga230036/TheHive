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
   {echo '<script>alert("Registration Done")</script>';}}
  
  }

   


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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    
    <title>Register | TheHive</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="Kaleidoscope/css/bootstrap.css">
	<link rel="stylesheet" href="Kaleidoscope/css/style.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
  <body style="background-color:#393E46">
    <main>

      <section class="landing">
        <div class="container-alpha">
            
            <img src="1.png" class="object" data-value="-2" alt="">
            <img src="2.png" class="object" data-value="6" alt="">
            <img src="3.png" class="object" data-value="4" alt="">
            <img src="4.png" class="object" data-value="-6" alt="">
            <img src="5.png" class="object" data-value="8" alt="">
            <img src="6.png" class="object" data-value="-4" alt="">
            <img src="7.png" class="object" data-value="5" alt="">
            <img src="8.png" class="object" data-value="-9" alt="">
            <img src="9.png" class="object" data-value="-5" alt="">
          </div>
        
      </section>
    </main>

    <div class="nav-container">
        <nav>
            <ul class="mobile-nav">
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="link-logo"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
                

                <li>
                    <a href="" class="link-bag"></a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </li>
            </ul>

            <ul class="desktop-nav">
                <li>
                    <a href="index.html" class="link-logo"></a>
                </li>
        
                <lit>
                    <a href="#">About</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="#">Contact</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="login.php">Login</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                <lit>
                    <a href="register.php">Register</a> <spann></spann><spann></spann><spann></spann><spann></spann>
                </lit>
                
               
                <li>
                    <a href="#" class="link-bag"></a>
                    
                </li>
            </ul>
        </nav>

        <!-- End of navigation menu items -->

       


    
   

   
    	<div class="overlay"></div>
    </div>
    
   		 <div class="container-md">
		</div>





    	<div class="intro">
      	<div class="intro-logo">
        <h1 class="hide">
          <span class="logo"><img class="logo-intro" src="LogoTheHive.png" alt="logo">
        </span>
          </h1>
      	</div>
    </div>
    <div class="slider"></div>
   
	<div class="LoginFormContainer">
  <form method="post">
		<h2>Register</h2>
		<div class="Username">
		  <input placeholder="Username" type="text" name="username"/>
		</div>
		<div class="Password">
		  <input placeholder="Password" type="password" name="password"/>
		</div>
    
		<div class="Password">
		  <input placeholder="email@gmail.com" type="email" name="email" />
		</div>
    
		<button class="SignupButton" type="submit" name="register" value="Register">SIGN UP</button>
		<span class="Signup">Already have an account?<a href="login.php">Sign in</a></span>
    </form>  
  </div>






















    <script type="text/javascript">
        document.addEventListener("mousemove", parallax);
        function parallax(e){
          document.querySelectorAll(".object").forEach(function(move){
  
            var moving_value = move.getAttribute("data-value");
            var x = (e.clientX * moving_value) / 250;
            var y = (e.clientY * moving_value) / 250;
  
            move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
          });
        }
        </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
      integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
      crossorigin="anonymous"
    ></script>
    

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>


    <script src="./app.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>