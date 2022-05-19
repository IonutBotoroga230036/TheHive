
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    
    <title>About | TheHive</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          font: 16px Arial;  
        }
        
        /*the container must be positioned relative:*/
        .autocomplete {
          position: relative;
          display: inline-block;
        }
        
        input {
          border: 1px solid transparent;
          background-color: #f1f1f1;
          padding: 10px;
          font-size: 16px;
        }
        
        input[type=text] {
          background-color: #f1f1f1;
          width: 100%;
        }
        
        input[type=submit] {
          background-color: DodgerBlue;
          color: #fff;
          cursor: pointer;
        }
        
        .autocomplete-items {
          position: absolute;
          border: 1px solid #d4d4d4;
          border-bottom: none;
          border-top: none;
          z-index: 99;
          /*position the autocomplete items to be the same width as the container:*/
          top: 100%;
          left: 0;
          right: 0;
        }
        
        .autocomplete-items div {
          padding: 10px;
          cursor: pointer;
          background-color: #fff; 
          border-bottom: 1px solid #d4d4d4; 
        }
        
        /*when hovering an item:*/
        .autocomplete-items div:hover {
          background-color: #e9e9e9; 
        }
        
        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
          background-color: DodgerBlue !important; 
          color: #ffffff; 
        }
        </style>
</head>
  <body>
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
                    <a href="about.php">About</a> <spann></spann><spann></spann><spann></spann><spann></spann>
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
                <lit>
                    <a href="logout.php">Logout</a> <spann></spann><spann></spann><spann></spann><spann></spann>
               </lit>
               
                <li>
                    <a href="#" class="link-bag"></a>
                    
                </li>
            </ul>
        </nav>

        <!-- End of navigation menu items -->

       


    
    <br><br><br><br><br><br><br><br><br><br><br>
      <div class="container text-center">
         
            <h2 class="big-text"  style="background-color:rgba(128, 128, 128, 0.403);"  >About Us</h2>
            <h3 class="big-text"  style="background-color:rgba(128, 128, 128, 0.403);" >Ajutam elevii din cadrul unitatilor de invatamant preuniversitar <br> sa isi aleaga mai usor facultate intr-un mod interactiv!</h3>
          
      
       </div>

    <div class="mobile-search-container">
        <div class="link-search"></div>
        <div class="search-bar">
            <form action="">
                <input type="text" placeholder="Search apple.com">
            </form>
        </div>
        <span class="cancel-btn">Cancel</span>

        <div class="quick-links">
            <h2>Quick Links</h2>
            <ul>
                <lit>
                    <a href="#">Visiting an Apple Store FAQ</a>
                </lit>
                <lit>
                    <a href="#">Shop Apple Store Online</a>
                </lit>
                <lit>
                    <a href="#">Accessories</a>
                </lit>
                <lit>
                    <a href="#">AirPods</a>
                </lit>
                <lit>
                    <a href="#">AirTag</a>
                </lit>
            </ul>
        </div>
    </div>
    <div class="overlay"></div>
    </div>
    
      <div class="container-fluid">
        
        
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
    
    <script src="./app.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

        
  </body>
</html>