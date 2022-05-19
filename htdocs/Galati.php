<?php  
include_once 'databaseconnect.php';
session_start();  

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
    
    <title>Alba Iulia | Facultati</title>
    <link rel="icon" type="image/png" href="LogoTheHive.png">
    <link rel="stylesheet" href="css/bootstrap.css">
	
  <link rel="stylesheet" href="style_postcard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<style>/* width */
::-webkit-scrollbar {
    width: 10px;
   background-color: #ffd369;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    border-radius: 10px;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #393E46; 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #222831; 
  }</style>

</head>
  <body style="
  background-image: url('BG.png');
  
                overflow-y:scroll;">
    

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
    <section class="dark">
	<div class="container-fluid" style="margin-left:18%;
                                      margin-right:-60%;">

		<h1 class="h1 text-center" id="pageHeaderTitle">FACULTATI ALBA IULIA</h1>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://www.math.ugal.ro/">Facultatea de Matematica si Informatica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul de Matematică Informatică face parte din Facultatea de Științe și Mediu a Universității "Dunărea de Jos" din Galați. Misiunea departamentului este de a transfera cunoaștere către societate prin formare inițială, continuă și prin cercetare științifică, construind capitalul intelectual al studenților, dar și al cercetătorilor.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     IT</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     4 ani</li>
					<li class="tag__item play blue">
						<a href="http://www.math.ugal.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinta-si-ingineria-alimentelor">Facultatea de Ştiinţa şi Ingineria Alimentelor</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Știința și Ingineria Alimentelor se numără printre cele mai prestigioase facultăți din cadrul Universității „Dunărea de Jos” din Galați, fiind recunoscută atât la nivel național, cât și internațional, pentru performanțele la nivel academic și în activitatea de cercetare, dezvoltare și inovare, fiind cea mai veche facultate de profil din țară.  Facultatea de Știința și Ingineria Alimentelor și-a menținut locul în elita facultăților existente în prezent România, ca principal furnizor de educație și cercetare în domeniul fundamental Ingineria produselor alimentare și domenii conexe (biotehnologie, nutriție, alimentație publică, acvacultură).</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinta-si-ingineria-alimentelor"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-economie-si-administrarea-afacerilor">Facultatea de Economie si Administrarea afacerilor</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Economie şi Administrarea Afacerilor (FEAA) are privilegiul de a se fi întemeiat pe fundamentul unei recunoscute tradiţii a învăţământului economic gălăţean, menţionând că prima şcoală comercială din România a fost înfiinţată la Galaţi în octombrie 1864, iar în anul 1934 lua fiinţă Academia de Export din Galaţi. Într-un asemenea cadru s-au format două mari personalităţi economice recunoscute la nivel internaţional: profesorii Virgil Madgearu şi Anghel Rugină.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Economice</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-economie-si-administrarea-afacerilor"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-litere">Facultatea de Litere</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Litere din Universitatea „Dunărea de Jos”din Galaţi reprezintă una dintre cele mai importante instituţii cu profil filologic din România, cu o tradiţie de peste cincizeci de ani în organizarea programelor de studii universitare.
În cadrul Facultăţii de Litere au fost acreditate şi sunt organizate în prezent şapte programe de licenţă, cinci programe de masterat şi studii de doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-litere"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://feaa.ugal.ro/specializari/licenta/finante-si-banci/">Facultatea de Finante Banci</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Ți-ai făcut măcar o dată planuri să îți cumperi ceva, și a trebuit să strângi bani pentru asta? Sau și mai bine, ai luat vreodată un “credit” de la părinți (gen, niște bani împrumut) scadent la primul salariu? Fară să iți dai seama, ai făcut deja primii pași spre lumea fascinantă a banilor, a conturilor de economii sau a creditelor de nevoi personale. Încă puțin și CFO poate fi noua ta titulatură. Știi ce înseamnă?</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Business</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://feaa.ugal.ro/specializari/licenta/finante-si-banci/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/anunturi/stiri-si-evenimente/11-site/32-facultatea-de-ingineria-materialelor-si-a-mediului">Facultatea de Ingineria Materialelor și a Mediului</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Prin Ordinul ministrului învăţământului nr.7751/1990 s-a înfiinţat Facultatea de Metalurgie cu specializările: Siderurgie, Turnarea metalelor, Deformări plastice şi tratamente termice, având în structura sa trei catedre: Metalurgie extractivă şi tehnologia materialelor, Elaborarea şi turnarea aliajelor, Deformări plastice şi tratamente termice.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/anunturi/stiri-si-evenimente/11-site/32-facultatea-de-ingineria-materialelor-si-a-mediului"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="http://www.fmfgl.ro/">Facultatea de Medicină şi Farmacie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Studiul medicinii la Universitatea "Dunărea de Jos" a inceput la sfarsitul anilor '90 odată cu înfiintarea specializării kinetoterapie și a specializării de asistență medicală. 
      Coroborarea dintre traditia medicală din aceasta zonă si mediul academic, a avut ca rezultat fondarea Facultătii de Medicină în anul 2004, prin decizia Guvernului Romaniei, ca o consecintă necesară a importantei si a dezvoltării socio-economice a acestei zone.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="http://www.fmfgl.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de Ştiinţe si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Științe și Mediu continuă o tradiție de peste 50 de ani privind pregătirea absolvenților de liceu în domeniul științelor exacte și ale naturii (matematică, fizică, chimie și știința mediului). În cadrul facultății sunt implementate programe de licență interdisciplinare: Matematică informatică, Știința mediului, Chimie farmaceutică și Fizică medicală, care au continuitate prin programe de masterat și doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="http://www.fmfgl.ro/">Facultatea de Medicină şi Farmacie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Studiul medicinii la Universitatea "Dunărea de Jos" a inceput la sfarsitul anilor '90 odată cu înfiintarea specializării kinetoterapie și a specializării de asistență medicală. 
      Coroborarea dintre traditia medicală din aceasta zonă si mediul academic, a avut ca rezultat fondarea Facultătii de Medicină în anul 2004, prin decizia Guvernului Romaniei, ca o consecintă necesară a importantei si a dezvoltării socio-economice a acestei zone.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://www.fmfgl.ro/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de Ştiinţe si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Științe și Mediu continuă o tradiție de peste 50 de ani privind pregătirea absolvenților de liceu în domeniul științelor exacte și ale naturii (matematică, fizică, chimie și știința mediului). În cadrul facultății sunt implementate programe de licență interdisciplinare: Matematică informatică, Știința mediului, Chimie farmaceutică și Fizică medicală, care au continuitate prin programe de masterat și doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/relatii-internationale">Facultatea de Relatii Internationale</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Biroul de Cooperare internațională, studenți străini și extensiuni universitare ia parte în mod activ la politica de internaționalizare a Universității „Dunărea de Jos” din Galaţi, pe care Universitatea o promovează şi dezvoltă în mod constant. Internaţionalizarea reprezintă o prioritate a societăţii contemporane și implicit a noastră, tocmai de aceea  un rol important în dezvoltarea relaţiilor internaţionale îl reprezintă activitățile întreprinse pentru cunoaşterea realităţilor şi tendinţelor din învăţământul superior românesc, european şi mondial prin participarea membrilor comunităţii universitare la programe de dezvoltare, cercetare, inovare şi manifestări ştiinţifice naţionale şi internaţionale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/relatii-internationale"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala">Facultatea de Arhitectură Navală</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Istoria învăţământului superior naval gălăţean şi implicit a Facultăţii de Arhitectură Navală începe în 1951, odată cu înfiinţarea Institutului Mecano – Naval (HCM 1375/1950). Prin acest act, la Galaţi au fost aşezate bornele solide ale singurei facultăţi din România care asigură pregătirea tehnică superioară necesară cercetării, proiectării şi construcţiei navelor şi structurilor marine.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept și Științe Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept și Științe Administrative din cadrul Universității „Dunărea de Jos” din Galați este o instituție de învățământ superior care își propune să se integreze activ în comunitatea academică atât pe plan național, cât și european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-inginerie">Facultatea de Inginerie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Inginerie ia naștere prin Hotărârea Senatului 12/10.04.2014, ca urmare a Hotărârilor Consiliilor Facultății de Mecanică și Facultății de Ingineria Materialelor și a Mediului de a-și uni eforturile pentru îmbunătățirea calității actului educațional, creșterea vizibilității științifice a rezultatelor cercetărilor, creșterea gradului de internaționalizare și îmbunătățirea parteneriatului cu mediul socio-economic. Facultatea de Mecanică a fost înființată prin H.C.M. nr. 14/9 ianuarie 1954, anterior funcționând Institutul Tehnic Galați (H.C.M. nr. 2727/ 1953), urmașul Institutului Mecano-Naval din Galați (H.C.M. nr. 1050/ 2 octombrie 1951). Facultatea de Metalurgie a fost înființată prin ordinul ministrului învățământului nr.7751/1990 iar începând cu anul universitar 2013-2014, prin HG 69/2013, facultatea își schimbă denumirea în Facultatea de Ingineria Materialelor si a Mediului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-inginerie"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica">Facultatea de Automatica,Calculatoare,Energie electrica si Electronica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Automatică, Calculatoare, Inginerie Electrică şi Electronică a fost înfiinţată prin Hotărârea de Guvern HG. nr. 631 din 30/06/2010 publicată în Monitorul Oficial al României, Partea I, Nr. 578 din 16/08/2010. Facultatea a luat ființă prin comasarea Facultății de Știința Calculatoarelor cu Facultatea de Inginerie Electrică. Înființarea Facultății de Automatică, Calculatoare, Inginerie Electrică şi Electronică se încadrează într-o evoluție care a început în anul 1990, an în care au fost înfiinţate programe de studii în domeniul Automaticii, Ingineriei electrice şi Ingineriei Electronice. Primul program de studii în domeniul Calculatoare a fost derulat începând din toamna anului 2000.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie">Facultatea de Istorie, Filosofie şi Teologie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Începuturile Facultății de Istorie, Filosofie și Teologie se plasează cu aproximativ trei decenii în urmă, în 1991 fiind deschisă specializarea istorie-geografie, înlocuită din 1993 cu secţia istorie-filosofie. Învăţământul teologic superior în cadrul Universității „Dunărea de Jos” din Galați (UDJG) datează tot din 1991, când se constituia secţie de teologie-litere. Până în 2004, specializările aferente acestei structuri actuale au funcţionat în cadrul mai larg al Facultăţii de Litere, Istorie şi Teologie.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport">Facultatea de Educaţie Fizică şi Sport</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Educație Fizică și Sport a fost înfiinţată prin Hotărârea de Guvern HG. nr. 329 din 22/06/1998 publicată în Monitorul Oficial al României, Partea I, Nr. 237 din 29/06/1998. Înființarea catedrei de educație fizică a avut loc în anul 1969 și a funcționat în cadrul Institutului Pedagogic de 3 ani. În perioada 1990 – 1997 a funcționat în cadrul Facultății de Litere și Științe.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


<!--







-->



		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-arte">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Înființată în anul 2003, Facultatea de Arte are trei programe de studii de licență și unul de masterat:

Artele spectacolului  (Actorie) - licență – acreditat;
Interpretare muzicală – canto – licență – acreditat;
Arte  plastice (Pictură) – licență - acreditat;
Teatru muzical – masterat – acreditat;</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arte"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-transfrontaliera">Facultatea Transfrontalieră de Ştiinţe Umaniste, Economice şi Inginereşti</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Cadrul favorabil înființării Facultății Transfrontaliere a fost creat printr-un lung șir de negocieri și documente care s-au semnat între România și Republica Moldova, anterior anului 1998, an în care se naște propriu-zis ideea înființării unei forme de învățământ transfrontalier:</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-transfrontaliera"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="http://www.dppd.ugal.ro/">Departamentul pentru Pregatirea Personalului Didactic</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Prin specificul său, D.P.P.D. are o misiune didactică şi de cercetare ştiinţifică în domeniul
pregătirii personalului didactic, pentru promovarea unui învăţământ modern, formativ, centrat pe
subiectul învăţării, adaptat la cerinţele europene în domeniul programelor de formare psihopedagogică
şi metodică, orientat pragmatic către nevoile reale ale societăţii şi priorităţile actuale ale educaţiei.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="http://www.dppd.ugal.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://idd.ugal.ro/index.php/ro/">Departamentul de învaţământ la distanţă</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Reducerea costurilor legate de chirie sau de şederea în localitatea unde studiază. Posibilitatea de a alege o programă de studiu a unei școli dintr-o altă localitate, fără a fi nevoie de relocare pentru a urma cursurile respective.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://idd.ugal.ro/index.php/ro/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu">Facultatea de Ştiinţe si Mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Științe și Mediu continuă o tradiție de peste 50 de ani privind pregătirea absolvenților de liceu în domeniul științelor exacte și ale naturii (matematică, fizică, chimie și știința mediului). În cadrul facultății sunt implementate programe de licență interdisciplinare: Matematică informatică, Știința mediului, Chimie farmaceutică și Fizică medicală, care au continuitate prin programe de masterat și doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-stiinte-si-mediu"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/relatii-internationale">Facultatea de Relatii Internationale</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Biroul de Cooperare internațională, studenți străini și extensiuni universitare ia parte în mod activ la politica de internaționalizare a Universității „Dunărea de Jos” din Galaţi, pe care Universitatea o promovează şi dezvoltă în mod constant. Internaţionalizarea reprezintă o prioritate a societăţii contemporane și implicit a noastră, tocmai de aceea  un rol important în dezvoltarea relaţiilor internaţionale îl reprezintă activitățile întreprinse pentru cunoaşterea realităţilor şi tendinţelor din învăţământul superior românesc, european şi mondial prin participarea membrilor comunităţii universitare la programe de dezvoltare, cercetare, inovare şi manifestări ştiinţifice naţionale şi internaţionale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/relatii-internationale"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala">Facultatea de Arhitectură Navală</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Istoria învăţământului superior naval gălăţean şi implicit a Facultăţii de Arhitectură Navală începe în 1951, odată cu înfiinţarea Institutului Mecano – Naval (HCM 1375/1950). Prin acest act, la Galaţi au fost aşezate bornele solide ale singurei facultăţi din România care asigură pregătirea tehnică superioară necesară cercetării, proiectării şi construcţiei navelor şi structurilor marine.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arhitectura-navala"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept și Științe Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept și Științe Administrative din cadrul Universității „Dunărea de Jos” din Galați este o instituție de învățământ superior care își propune să se integreze activ în comunitatea academică atât pe plan național, cât și european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.ugal.ro/facultati/facultatea-de-inginerie">Facultatea de Inginerie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Inginerie ia naștere prin Hotărârea Senatului 12/10.04.2014, ca urmare a Hotărârilor Consiliilor Facultății de Mecanică și Facultății de Ingineria Materialelor și a Mediului de a-și uni eforturile pentru îmbunătățirea calității actului educațional, creșterea vizibilității științifice a rezultatelor cercetărilor, creșterea gradului de internaționalizare și îmbunătățirea parteneriatului cu mediul socio-economic. Facultatea de Mecanică a fost înființată prin H.C.M. nr. 14/9 ianuarie 1954, anterior funcționând Institutul Tehnic Galați (H.C.M. nr. 2727/ 1953), urmașul Institutului Mecano-Naval din Galați (H.C.M. nr. 1050/ 2 octombrie 1951). Facultatea de Metalurgie a fost înființată prin ordinul ministrului învățământului nr.7751/1990 iar începând cu anul universitar 2013-2014, prin HG 69/2013, facultatea își schimbă denumirea în Facultatea de Ingineria Materialelor si a Mediului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Inginerie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.ugal.ro/facultati/facultatea-de-inginerie"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica">Facultatea de Automatica,Calculatoare,Energie electrica si Electronica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Automatică, Calculatoare, Inginerie Electrică şi Electronică a fost înfiinţată prin Hotărârea de Guvern HG. nr. 631 din 30/06/2010 publicată în Monitorul Oficial al României, Partea I, Nr. 578 din 16/08/2010. Facultatea a luat ființă prin comasarea Facultății de Știința Calculatoarelor cu Facultatea de Inginerie Electrică. Înființarea Facultății de Automatică, Calculatoare, Inginerie Electrică şi Electronică se încadrează într-o evoluție care a început în anul 1990, an în care au fost înfiinţate programe de studii în domeniul Automaticii, Ingineriei electrice şi Ingineriei Electronice. Primul program de studii în domeniul Calculatoare a fost derulat începând din toamna anului 2000.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte Umaniste</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.ugal.ro/facultati/facultatea-de-automatica-calculatoare-inginerie-electrica-si-electronica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie">Facultatea de Istorie, Filosofie şi Teologie</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Începuturile Facultății de Istorie, Filosofie și Teologie se plasează cu aproximativ trei decenii în urmă, în 1991 fiind deschisă specializarea istorie-geografie, înlocuită din 1993 cu secţia istorie-filosofie. Învăţământul teologic superior în cadrul Universității „Dunărea de Jos” din Galați (UDJG) datează tot din 1991, când se constituia secţie de teologie-litere. Până în 2004, specializările aferente acestei structuri actuale au funcţionat în cadrul mai larg al Facultăţii de Litere, Istorie şi Teologie.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Stiinte ale Naturii</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.ugal.ro/facultati/facultatea-de-istorie-filosofie-si-teologie"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://scontent.ftce2-1.fna.fbcdn.net/v/t39.30808-6/275613257_2033753116792589_8644907205764982215_n.jpg?_nc_cat=105&ccb=1-6&_nc_sid=09cbfe&_nc_ohc=SyLlq0MttfsAX8UcWGk&_nc_ht=scontent.ftce2-1.fna&oh=00_AT_wSkbGiuqZwq_-3lvlRd2XqMrBXMixHuysgHkPrdlJtg&oe=62898C35" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport">Facultatea de Educaţie Fizică şi Sport</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Educație Fizică și Sport a fost înfiinţată prin Hotărârea de Guvern HG. nr. 329 din 22/06/1998 publicată în Monitorul Oficial al României, Partea I, Nr. 237 din 29/06/1998. Înființarea catedrei de educație fizică a avut loc în anul 1969 și a funcționat în cadrul Institutului Pedagogic de 3 ani. În perioada 1990 – 1997 a funcționat în cadrul Facultății de Litere și Științe.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Teologie</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-educatie-fizica-si-sport"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>



	</div>


  
</section>
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