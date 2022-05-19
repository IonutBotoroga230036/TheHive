 <?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
?>  
<!DOCTYPE html>  
<html>  
<head>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="./style.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js" integrity="sha512-VEBjfxWUOyzl0bAwh4gdLEaQyDYPvLrZql3pw1ifgb6fhEvZl9iDDehwHZ+dsMzA0Jfww8Xt7COSZuJ/slxc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./app.js"></script> 
<link rel="stylesheet" href="./style.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet"/>
    
    <title>Home|TheHive</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="Kaleidoscope/css/bootstrap.css">
	<link rel="stylesheet" href="Kaleidoscope/css/style.css">
  
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
                    <a href="profile.php" class="link-bag"></a>
                    
                </li>
            </ul>
        </nav>

        <!-- End of navigation menu items -->

       


    
    <br><br><br><br><br><br><br><br><br><br><br>
<div class="container text-center">
    
            <h2 class="big-text">Stay Informed</h2>
    
           
      
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
        
        <div class="row">
            <div class="col-md-2 col-lg-3 col-xl-4"></div>
            <div class="col-md-4 col-lg-3 col-xl-2" ">
                <div class="search-1">
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                      <i class='bx bx-search-alt'></i>
                    <input placeholder="Facultati" id="myInput" type="text" >
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-2">
                <div>
                    <div class="search-2">
                        <i class='bx bxs-map'></i>
                        <input type="text"  id="myOtherInput" placeholder="Oras" >
                        
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-lg-1">
                <div class="col-md-3 col-lg-1 col-xl-1"> <div class="search-2">
                    <button onclick="getInputFromTextBox();">Search</button></div>
                    <div>
                </div>
            <div class="col-md-2 col-lg-3 col-xl-4"></div>
        </div>
    
    
</div>

<br/><br/>  
     <div class="container" style="width:500px;">  
 
<br/>  
<?php  
echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
echo '<label><a href="logout.php">Logout</a></label>';  
?>  
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
    <script>
        function autocomplete(inp, arr) {
          /*the autocomplete function takes two arguments,
          the text field element and an array of possible autocompleted values:*/
          var currentFocus;
          /*execute a function when someone writes in the text field:*/
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              /*close any already open lists of autocompleted values*/
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              /*create a DIV element that will contain the items (values):*/
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              /*append the DIV element as a child of the autocomplete container:*/
              this.parentNode.appendChild(a);
              /*for each item in the array...*/
              for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  /*create a DIV element for each matching element:*/
                  b = document.createElement("DIV");
                  /*make the matching letters bold:*/
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  /*insert a input field that will hold the current array item's value:*/
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  /*execute a function when someone clicks on the item value (DIV element):*/
                  b.addEventListener("click", function(e) {
                      /*insert the value for the autocomplete text field:*/
                      inp.value = this.getElementsByTagName("input")[0].value;
                      /*close the list of autocompleted values,
                      (or any other open lists of autocompleted values:*/
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          /*execute a function presses a key on the keyboard:*/
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
              } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                  /*and simulate a click on the "active" item:*/
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
              }
            }
          }
          /*execute a function when someone clicks in the document:*/
          document.addEventListener("click", function (e) {
              closeAllLists(e.target);
          });
        }
        
        /*An array containing all the country names in the world:*/
        const specialitati = [
  "Arte",
  "Arhitectura",
  "Business",
  "IT",
  "Inginerie",
  "Medicina",
  "Stiinte Umaniste",
  "Stiinte Juridice",
  "Stiinte ale Naturii",
  "Stiinte Economice",
  "Teologie",
  "Sport",
  "Constructii",
];
const cities = [
  "Alba Iulia",
  "Arad",
  "Bacau",
  "Brasov",
  "Bucuresti",
  "Cluj Napoca",
  "Constanta",
  "Craiova",
  "Galati",
  "Iasi",
  "Lugoj",
  "Oradea",
  "Petrosani",
  "Pitesti",
  "Ploiesti",
  "Resita",
  "Sibiu",
  "Suceava",
  "Targoviste",
  "Targu Jiu",
  "Targu Mures",
  "Timisoara",
];
        
        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
        autocomplete(document.getElementById("myInput"), specialitati);
        autocomplete(document.getElementById("myOtherInput"), cities);
        </script>

        
  </body>
</html>