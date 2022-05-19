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
    
    <title>ARTE | Facultati</title>
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

		<h1 class="h1 text-center" id="pageHeaderTitle">FACULTATI DE ARTE</h1>
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="https://uav.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976764590501273631/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://design.uav.ro/">Facultatea de Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Specializarea Design a fost înființată pentru prima dată în cadrul Facultății de Ştiinţe Umaniste şi Sociale în anul 2008, prin H.G. 467/24.VI. 2008, iar din anul 2010 a devenit istituție independentă. Facultatea de Design din cadrul Universităţii "Aurel Vlaicu" din Arad şi-a început activitatea în fostul Palat al Serelor din Grădişte, proiectat de renumitul arhitect al Aradului, Miloş Cristea, una din cele mai frumoase clădiri ale univeristăţii a fost renovată, reabilitată şi amenajată pentru ca studenții să își desfășoare activitatea în atelierele și sălile de curs oferite de această clădire. </div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://design.uav.ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://usarb.md/">
				<img class="postcard__img" src="https://victorius170881.github.io/assets/images/usarb-meta.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://usarb.md/facultatea-de-stiinte-ale-educatiei-psihologie-si-arte/">Facultatea de Ştiințe ale Educației, Psihologie şi Arte,</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">1958 fondarea secţiei “Învăţămînt primar şi cant”

1959 crearea specialităţilor “Învăţător de limba română şi  cant”, “Învăţător de limba franceză  şi cant”, “Învăţător de limba rusă şi cant”.

1960 transferarea facultăţii ,,Învăţămînt primar” la Institutul Pedagogic din Bălţi ca rezultat al comasării Institutului Pedagogic din Chişinau cu Universitatea de Stat

1960 fondarea primei subdiviziuni de specialitate – Catedra de Muzica şi Cant

1966 reorganizarea facultăţii “Învăţămînt primar” în facultatea ,,Pedagogie” care avea ca elemente structurale catedrele “Pedagogie, psihologie şi metodica învăţământului primar”, “Muzică şi cantul”.

1968 deschiderea Facultăţii Învăţămănt Primar., crearea a două catedre: Cant şi Metodica Cantului şi Muzica..</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    3 ani</li>
					<li class="tag__item play red">
						<a href="https://usarb.md/facultatea-de-stiinte-ale-educatiei-psihologie-si-arte/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://unitbv.ro/">
				<img class="postcard__img" src="https://www.unitbv.ro/images/stiri_si_evenimente/2020/evenimente/02/1_Martie_pentru_site.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://muzica.unitbv.ro/ro/">Facultatea de Muzica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Muzică
are ca priorități cultivarea excelenței în activitatea de creație și interpretare artistică, completate, în ultimii ani, de un program de masterat consacrat funcției terapeutice a muzicii. Prin performanțele studenților săi și prin integrarea bogatei tradiții muzicale a Brașovului, facultatea a devenit în timp un pol artistic al orașului.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://muzica.unitbv.ro/ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://unitbv.ro/">
				<img class="postcard__img" src="https://www.unitbv.ro/images/stiri_si_evenimente/2020/evenimente/02/1_Martie_pentru_site.jpg" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://dpm.unitbv.ro/ro/">Facultatea de Design de produs și mediu</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Design de produs și mediu
este una dintre cele mai noi facultăți ale Universității și oferă programe de studii moderne, orientate spre lansarea de produse novatoare și specialiști în domenii într-o continuă dezvoltare, precum ingineria medicală sau energiile regenerabile.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://dpm.unitbv.ro/ro/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.ugal.ro/">
				<img class="postcard__img" src="https://media.discordapp.net/attachments/975783663121858575/976662484809310248/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.ugal.ro/facultati/facultatea-de-arte">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Ți-ai făcut măcar o dată planuri să îți cumperi ceva, și a trebuit să strângi bani pentru asta? Sau și mai bine, ai luat vreodată un “credit” de la părinți (gen, niște bani împrumut) scadent la primul salariu? Fară să iți dai seama, ai făcut deja primii pași spre lumea fascinantă a banilor, a conturilor de economii sau a creditelor de nevoi personale. Încă puțin și CFO poate fi noua ta titulatură. Știi ce înseamnă?</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.ugal.ro/facultati/facultatea-de-arte"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://unatc.ro/devunatc/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976776763281641512/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://unatc.ro/devunatc/">Universitatea Naţională de Artă Teatrală și Cinematografică „I.L. Caragiale”</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Universitatea Naţională de Artă Teatrală și Cinematografică „I.L. Caragiale” din București (UNATC) este o instituţie publică de învăţământ superior finanţată de stat, recunoscută pe plan internațional. Prin programele sale, care pun accentul pe cercetare, inovație, diversitate și interdisciplinaritate, Universitatea le oferă studenților oportunitatea de a se specializa în domeniul teatrului și în cel al filmului, precum și în domenii mixte, la nivel de licență, master și doctorat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    3 ani</li>
					<li class="tag__item play red">
						<a href="https://unatc.ro/devunatc/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		



    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://unarte.org/fap/">Facultatea de Arte Plastice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul Pictură a fost unul dintre pilonii fundamentali pe care s-a construit de-a lungul istoriei sale îndelungate învăţământul artistic academic din Bucureşti, rămânând şi astăzi una dintre cele mai importante catedre ale Universităţii Naţionale de Arte.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://unarte.org/fap/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>
	

		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://unarte.org/fadd/">Facultatea de Arte Decorative si Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">În urma strădaniilor profesorului arhitect Paul Bortnovschi, în anul 1969 a luat naştere, în cadrul Facultăţii de Arte Decorative, secţia de Estetica Formelor Industriale, care pe parcursul anilor se va dezvolta, în conformitate cu necesităţile sociale, până la formula acuală.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://unarte.org/fadd/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://unarte.org/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976777844128632902/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://unarte.org/fita/">Facultatea de Istoria si Teoria Artei</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul nostru propune o educaţie pluridisciplinară, racordată la înnoirile metodologice ale contextului internaţional, în vederea unei dezvoltări complexe şi echilibrate a viitorilor specialişti şi a bunei lor integrări în cadrul pieţei de muncă, ţinându-se cont de cerinţele contemporaneităţii. Pentru a spori prestigiul academic al departamentului, dar şi în vederea atragerii de fonduri extrabugetare, am demarat proiecte de cercetare coordonate de titulari ai catedrei,  cuprinzând, în cadrul echipelor de cercetare, masteranzi şi doctoranzi.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://unarte.org/fita/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fim/">Facultatea de Interpretare Muzicală</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Interpretare Muzicală reprezintă inima Universității Naționale de Muzică din București. Vreme de peste un secol și jumătate, pulsația acestui organism de primă importanță al învățământului muzical superior din România a făcut posibilă afirmarea și consacrarea unor muzicieni de valoare, recunoscuți pe plan național și internațional: soliști, artiști instrumentiști și artiști lirici, care au atins un înalt nivel de performanță interpretativă, dar au obținut în egală măsură și competențe didactice.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fim/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.fdsa.ugal.ro/index.php/ro/">Facultatea de Drept și Științe Administrative</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Drept și Științe Administrative din cadrul Universității „Dunărea de Jos” din Galați este o instituție de învățământ superior care își propune să se integreze activ în comunitatea academică atât pe plan național, cât și european.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="http://fto.ro/nou/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.unmb.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976779373304746004/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fcmpm/">Facultatea de Compoziție, Muzicologie și Pedagogie muzicală</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">În cei peste 150 de ani de existență ai instituției, Facultatea de Compoziție, Muzicologie și Pedagogie muzicală (FCMPm), parte integrantă a Universității Naționale de Muzică din București, s-a impus prin calitatea actului educativ, artistic și științific, caracterizându-se prin permanenta deschidere către nou și, totodată, prin transmiterea valorilor perene și a criteriilor viabile de selecție a acestora.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://www.unmb.ro/despre-noi/facultati-ansambluri/fcmpm/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.spiruharet.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976781177992130580/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://ssu-b.spiruharet.ro/pm">Facultatea de Muzică</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">  Facultatea de Științe Socio-Umane își impune adaptarea continuă și eficientă la standardele academice naționale și europene, promovând o educație bazată pe știință, comunicare și atenta îndrumare a studenților și a masteranzilor, încurajând performanțele individuale și ideile inovatoare, având grija modernizării spațiilor educaționale și a pachetelor de beneficii oferite celor direct implicați în procesul de predare-învățare (cadre universitare, studenți și masteranzi), în vederea asigurării unei formări, care să poată combina cu ușurință partea practică cu cea teoretică, studenții și masteranzii având șansa de a răspunde provocărilor domeniului studiat chiar în timpul perioadei de studiu, acest lucru având în vedere facilitarea încadrării lor ulterioare pe piața muncii. În acest sens, Facultatea de Științe Socio-Umane are ca misiune principală formarea de specialiști în domeniul științelor comunicării, în cel al muzicii, precum șia în alte domenii din aria științelor socio-umane.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      4 ani</li>
					<li class="tag__item play green">
						<a href="https://ssu-b.spiruharet.ro/pm"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.uad.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976782618928500796/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.uad.ro/structura/facultati/arte_plastice/">Facultatea de Arte Plastice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Arte Plastice include 5 departamente și se ghidează în activitate după Regulamentul propriu de organizare și funcționare.
Consiliul facultății - forul de conducere al acestei structuri academice - își desfășoară activitatea conform Regulamentului propriu de organizare și funcționare.

Hotărârile consiliului facultății sunt implementate de decan, prodecan și directorii de departamente.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.uad.ro/structura/facultati/arte_plastice/"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uad.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976782618928500796/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.uad.ro/structura/facultati/arte_decorative/">Facultatea de Arte Decorative și Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Facultatea de Arte Decorative și Design include 5 departamente și se ghidează în activitate după Regulamentul propriu de organizare și funcționare.
Consiliul facultății - forul de conducere al acestei structuri academice - își desfășoară activitatea conform Regulamentului propriu de organizare și funcționare.
Hotărârile consiliului facultății sunt implementate de decan, prodecan și directorii de departamente.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.uad.ro/structura/facultati/arte_decorative/"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>


<!--







-->



		
		<article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.univ-ovidius.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976783272271044689/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://arte.univ-ovidius.ro/">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">La iniţiativa unui grup de cadre didactice ale Liceului de Arte şi cu largul concurs al conducerii Universităţii „Ovidius”din Constanţa, al prof. univ. dr. Adrian Bavaru în calitate de Rector, în anul 1997 se fac primele demersuri în scopul punerii bazelor învăţământului superior artistic constănţean. În cadrul Departamentului de Arte, subordonat direct Rectoratului universităţii, în anul 1998, specializările Pedagogie muzicală, Canto şi Teatru primesc aviz de funcţionare din partea C.N.E.A.A., iar odată cu Ordinul Ministerului Educaţiei Naţionale nr. 3478/26.03.1998 acestea completează fericit paleta domeniilor şi specializărilor Universităţii „Ovidius”. În 1999, oferta educaţională a Departamenului de Arte se completează cu Artele plastice şi decorative, iar trei ani mai târziu (2002) Departamentul devine Facultate de Arte.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://arte.univ-ovidius.ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://www.arteiasi.ro/?page_id=486">Facultatea de Teatru</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">În domeniul Teatru, misiunea facultăţii este de a oferi absolvenţilor celor două specializări Artele spectacolului (direcţii de studii: Actorie, Arta actorului mânuitor de păpuşi şi marionete, Regie, Coregrafie) și Teatrologie – Jurnalism Teatral programe de studiu bazate pe cercetarea interdisciplinară şi care să permită atingerea competenţelor profesionale în domeniul creaţiei teatrale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://www.arteiasi.ro/?page_id=486"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

		<article class="postcard dark yellow">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title yellow"><a href="https://www.arteiasi.ro/?page_id=543">Facultatea de Arte Vizuale și Design</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">În luna ianuarie 2020 între Facultatea de Arte Vizuale și Design și firma Gemini CAD Systems a fost încheiat un Acord de parteneriat în cadrul programului GAIN (Gemini Academic Initiative), în urma căruia laboratorul specializării Modă – Design vestimentar a fost întregit cu licențe software Gemini CAD pentru Fashion&Apparel și echipament complet (sistem de calcul și cutter plotter) care oferă studenților posibilitatea de a-și transpune proiectele la un nivel performant.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play yellow">
						<a href="https://www.arteiasi.ro/?page_id=543"><i class="fas fa-play mr-2"></i>     Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>

    <article class="postcard dark blue">
			<a class="postcard__img_link" href="https://www.uaic.ro/">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975783663121858575/976784126743035924/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="https://www.arteiasi.ro/?page_id=640">Facultatea de Interpretare, Compoziție și Studii Muzicale Teoretice</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Structura actuală a facultăţii reuneşte ramurile istorice ale dezvoltării muzicii, latura artistică – interpretativă şi componistică – cu zona teoretică, muzicologică, într-un format contemporan. Astfel, pe trunchiul tradiţional al instrucţiei instrumentale şi vocale se alătură, pe linie interpretativă, specializarea Dirijat cor şi orchestră, de asemenea, Muzica religioasă şi direcţia Compoziţie jazz şi muzică uşoară, având componente interpretative fundamentale. De partea cealaltă, în aria studiilor teoretice, Muzicologia şi unul dintre domeniile sale, Pedagogia muzicală, se completează cu secţiunea de cercetare bizantinologică din cadrul specializării Muzică religioasă. Compoziţia (clasică) se situează, în consecinţă, ca un domeniu autonom, cu puternice legături atât cu zona interpretării cât şi cu cea a teoriei muzicale.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>     3 ani</li>
					<li class="tag__item play blue">
						<a href="https://www.arteiasi.ro/?page_id=640"><i class="fas fa-play mr-2"></i>    Alfa mai multe</a>
					</li>
				</ul>
			</div>
		</article>



        <article class="postcard dark red">
			<a class="postcard__img_link" href="https://www.uoradea.ro/Universitatea+din+Oradea">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975823869137018920/976788133100277780/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title red"><a href="https://arte.uoradea.ro/ro/">Facultatea de Arte</a></h1>
				<div class="postcard__subtitle small">
					
				</div>

				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Scopul nostru este ca, prin inovare pedagogică, cercetare academică, relații internaționale, parteneriate cu mediul de afaceri, burse de internship și activități extracurriculare, să fim cea mai bună alegere pentru ca tu:

- să îți îmbunătățești abilitățile
- să obții o calificare
- să îți dezvolți o carieră
- să îți schimbi alegerea profesională
- să te autodepășești
- să îți găsești locul de muncă visat.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>    Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>    4 ani</li>
					<li class="tag__item play red">
						<a href="https://arte.uoradea.ro/ro/"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		<article class="postcard dark green">
			<a class="postcard__img_link" href="https://www.uoradea.ro/Universitatea+din+Oradea">
				<img class="postcard__img" src="https://cdn.discordapp.com/attachments/975823869137018920/976788133100277780/unknown.png" alt="Image Title" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title green"><a href="https://arte.uoradea.ro/ro/departamentul-muzica">Facultatea de Muzica</a></h1>
				<div class="postcard__subtitle small">
					
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Departamentul Muzică din cadrul Facultății de Arte asigură prin programele de studiu de licență și cele de master pregătirea fundamentală și de specialitate a studenților noștri. Obiectivul nostru principal este formarea de artiști muzicieni bine pregătiți care să poată concura cu succes cu absolvenții instituțiilor de învățământ universitar similare din România, la momentul integrării pe piața muncii.</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fas fa-tag mr-2"></i>     Arte</li>
					<li class="tag__item"><i class="fas fa-clock mr-2"></i>      3 ani</li>
					<li class="tag__item play green">
						<a href="https://arte.uoradea.ro/ro/departamentul-muzica"><i class="fas fa-play mr-2"></i>    Afla mai multe</a>
					</li>
				</ul>
			</div>
		</article>


		

		



	

	

  









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