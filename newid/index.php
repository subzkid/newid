<?php 
// ini_set("display_errors", 1);
//wanneer er op de submit wordt gedrukt dan voert hij dit uit
if(isset($_POST['submit'])){
  
  //hier haalt hij de gegevens uit de form op
  $email = $_POST['email'];
  $name = $_POST['name'];
  $checkbox = implode(',',$_POST['whatYouWannaDo']);
  $letter = $_POST['subject'];
  
  //mail van ontvanger
  $to = "dutch-new-id@hotmail.com";
  
  $subject = "Sollicitatie";

  $message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>
naam: <br>
'$name'
</p>
<p>
email: <br>
'$email'
</p>
<p>
Wat zou je willen doen en kunnen doen op de stage: <br>
'$checkbox'
</p>
<p>
motivatie brief: <br>
'$letter'
</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: sollicitatie@new-id.eu' . "\r\n";
  
  if ($email == NULL || $name== NULL || $checkbox == NULL || $letter == NULL) {
  
  echo "<script>window.alert('VUL ALLES IN');</script>";
  
  }else {
    mail($to,$subject,$message,$headers);
  }

}

 ?>


<!DOCTYPE html>
<html lang="nl">


<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="design, design agency, nederland, mediacollege, mediacollege Amsterdam" />
  <meta name="author" content="Guido van Dijk, Twan Meijer, Floris, Stijn van Beugen" />
  <meta name="description" content="New ID is an design agency that exels in product branding and re branding" />
  <title>New ID | For your idea an identity</title>
  
<link rel="icon" type="image/png" href="links/logoFavi.png" />
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
  <title>New ID</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset-top="200">
<div id="hoofdWrapper">
  <!-- NAVBAR -->

  <nav class="navbar nav navbar-fixed-top navigation">
    <div class="container meerPaddingfoo">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
        <a class="navbar-brand" href="#wrapper_home"><img class="logo_nav" src="links/logo.svg" alt="logo navigatie"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a class="a_nav" href="#wrapper_whatwedo">wie wij zijn</a></li>
          <li><a class="a_nav" href="#wrapper_meettheteam">het team</a></li>
          <li><a class="a_nav" href="#wrapper_ourwork">ons werk</a></li>
          <li><a class="a_nav" href="#wrapper_jobs_contact">stage/contact</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">

    <!--HOME -->


    <div id="wrapper_home">
      <!--
      <div class="col-xs-push-1 col-sm-push-2 col-xs-11 ">
        <img class="logo_home" src="links/logo_home.png" alt="logo homepagina">
      </div>
-->
      <div class="col-xs-10 col-xs-push-1">
        <p class="weAreNewId bebas">for your idea,<br>an identity.</p>
      </div>
<!--
      <div class="col-sm-push-5 col-xs-push-1 col-sm-2 col-xs-8 text-center">
        <button class="button_home">Say hi</button>
      </div>
-->

      <img class="pattern" src="links/patternVierkant.svg" alt="patroon van vierkantjes"/>

    </div>


    <!-- WHAT WE DO -->

    <div class="col-xs-11 col-sm-push-1 col-xs-push-0">
      <p class="backgroundTitle bebas relative marginTop">wie wij zijn</p>
    </div>
    <div id="wrapper_whatwedo">
        <div class="col-xs-10 col-xs-push-1">
         <div class="col-md-6 col-xs-12">
           <p class="wiewijzijn">
            Wij zijn New ID, een analitisch scherp bedrijf als het gaat om designkeuzes en planning.
            Daarnaast zijn wij erg nieuwsgierig naar uw idee. 
            Voor ons zou het geweldig zijn om uw idee vanaf begin tot eind te realiseren en er uiteindelijk een prachtig en uniek eindresultaat ervan te maken waar we als team zeer trots op kunnen zijn.
          </p> 
          </div>
        
        
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12 col-xs-push-1 col-sm-push-0 col-md-push-1">
          <div class="whatwedo">
            <div class="col-sm-2 col-xs-12">
              <div class="circle_whatwedo">
                <span class="glyphicon glyphicon-search whatWeDoIcons" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2>Wij onderzoeken</h2>
              <p class="p_whatwedo">Wij doen onderzoek naar uw doelgroep, zodat uw identiteit is afgestemd op de behoefdes van uw doelgroep.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-xs-push-1 col-sm-push-0">
          <div class="whatwedo">

            <div class="col-sm-2 col-xs-12">
              <div class="circle_whatwedo">
                <span class="glyphicon glyphicon-pencil whatWeDoIcons" aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-10">
              <h2>Wij branden</h2>
              <p class="p_whatwedo">Wij branden uw ideeën tot een volledig gerealiseerd product waar u trots op kan zijn</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-xs-push-1 col-sm-push-0 col-md-push-1">
          <div class="whatwedo">
            <div class="col-sm-2 col-xs-12">
              <div class="circle_whatwedo">
                <span class="glyphicon glyphicon-picture whatWeDoIcons" aria-hidden="true"></span>

              </div>
            </div>
            <div class="col-xs-10">
              <h2>Wij realiseren</h2>
              <p class="p_whatwedo">Wij realiseren websites, webapps, logo's en visitekaartjes.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-xs-push-1 col-sm-push-0">
          <div class="whatwedo">
            <div class="col-sm-2 col-xs-12">
              <div class="circle_whatwedo">
                <span class="glyphicon glyphicon-user whatWeDoIcons whatWeDoIconComunication" aria-hidden="true"></span>

              </div>
            </div>
            <div class="col-xs-10">
              <h2>Wij communiceren</h2>
              <p class="p_whatwedo">Wij geloven wanneer er goed klantcontact is, dat er iets heel unieks ontstaat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / wrapper_whatwedo -->

    <!-- MEET THE TEAM -->
    <div class="formBgSchuin"></div>

    <div id="wrapper_meettheteam">
      <div class="col-xs-11 col-sm-push-1 col-xs-push-0">
        <p class="backgroundTitle bebas relative marginBottom marginTop">het team</p>
      </div>

      <div class="row">
        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam2">
            <img class="portret" src="links/twanmeijer2.jpg" alt="student twan meijer">
          </div>
        </div>
        <div class="col-sm-5 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam">
            <h2 class="h_top">Twan Meijer</h2>
            <p>Interactief vormgever</p>
            <div class="line"></div>
            <p class="p_gespecialiseerd">Mijn naam is Twan Meijer, 18 jaar oud en woon in Zaandam. Ik ben erg gemotiveerd, gedisciplineerd en leergierig. Buiten mijn studie doe ik graag aan hardlopen, fietsen, piano spelen, wiskunde en lezen. Deze diverse hobby's zorgen voor een brede ontwikkeling die ik kan toepassen in mijn projecten. Daarnaast is mijn instelling: “Waar ik aan begin, maak ik af.” Tevens stel ik zeer hoge eisen aan mezelf, ben ik perfectionistisch, maar heb ik zeker een realistische kijk op het leven.</p>
            <a class="p_gespecialiseerd ganaarportfolio" href="http://20764.hosts.ma-cloud.nl/twanmeijer/" target="_blank">bekijk portfolio</a>
            
             <p class="p_gespecialiseerd2">Gespecialiseerd UI/ UX Design</p>
            <a href="https://www.linkedin.com/in/twan-meijer-3a6b1712b/" target="_blank">
              <div class="circle_whatwedo socialIcons insta">
                <img height="24px" src="links/linkedin.svg" alt="facebook logo" />
              </div>
            </a>
          </div>
        </div>
      </div>

     
     
      <div class="row marginTop">

        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2 show-xs hidden-sm hidden-md hidden-lg">
          <div class="meettheteam2">
            <img class="portret" src="links/stijn.jpg" alt="student Stijn van Beugen">
          </div>
        </div>
        <div class="col-sm-5 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam2 test">
            <h2 class="h_top">Stijn van Beugen</h2>
            <p>Media Developer</p>
            <div class="line line-right"></div>
            <p class="p_gespecialiseerd2 p_gespecialiseerd">
⁠⁠⁠⁠              Mijn naam is Stijn van Beugen ik ben 20 jaar en studeer media-development. Ben momenteel geïnteresseerd in all-round                 developing. Daarnaast vind ik het communiceren met de klant erg inspirerend.
            </p>
            <a class="p_gespecialiseerd ganaarportfolio" href="https://stijnvanbeugen.nl/" target="_blank">bekijk portfolio</a>
            <p class="p_gespecialiseerd2">Gespecialiseerd Allround-Developing</p>
<!--
            <div class="floatRight">
              <a href="https://www.instagram.com/stijnvanbeugen/" target="_blank">
                <div class="circle_whatwedo socialIcons insta">
                  <img height="24px" src="links/instagram.svg" alt="Instagram logo" />
                </div>
              </a>
            </div>
-->
          </div>
        </div>

        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2 hidden-xs">
          <div class="meettheteam2">
            <img class="portret" src="links/stijn.jpg" alt="student Stijn van Beugen">
          </div>
        </div>
      </div>
      
      

      <div class="row marginTop">
        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam2">
            <img class="portret" src="links/floris.jpg" alt="student twan meijer">
          </div>
        </div>
        <div class="col-sm-5 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam">
            <h2 class="h_top">Floris Droppert</h2>
            <p>Media Developer</p>
            <div class="line"></div>
            <p class="p_gespecialiseerd2 p_gespecialiseerd">
                Ik ben een zeer gemotiveerde media developer, sta heel positief in het leven en ga altijd voor goud. Ik kan zowel front-end als backend en beheers de talen javascript, php, html en css.
            </p>
            <a class="p_gespecialiseerd ganaarportfolio" href="https://florisdroppert.nl/" target="_blank">bekijk portfolio</a>

            <p class="p_gespecialiseerd">Gespecialiseerd in Allround-Developing</p>
<!--
            <a href="https://www.instagram.com/gewoonfloriz/" target="_blank">
              <div class="circle_whatwedo socialIcons insta">
                <img height="24px" src="links/instagram.svg" alt="facebook logo" />
              </div>
            </a>
-->
          </div>
        </div>
      </div>

     
     
      <div class="row marginTop">

        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2 show-xs hidden-sm hidden-md hidden-lg">
          <div class="meettheteam2">
            <img class="portret" src="links/guidovandijk2.jpg" alt="student Guido van Dijk">
          </div>
        </div>
        <div class="col-sm-5 col-sm-push-2 col-xs-8 col-xs-push-2">
          <div class="meettheteam2 test">
            <h2 class="h_top">Guido van Dijk</h2>
            <p>Interactief vormgever</p>
            <div class="line line-right"></div>
            <p class="p_gespecialiseerd2 p_gespecialiseerd">Mijn naam is Guido van Dijk. Ik ben 18 jaar oud en begon met Photoshop, After Effects en Illustrator toen ik 13 was en 16 met coderen. Ik heb hieraan veel tijd besteed om te komen waar ik nu ben, en ik ben er erg trots op.
            </p>
            <a class="p_gespecialiseerd ganaarportfolio" href="http://20711.hosts.ma-cloud.nl/portfolio/" target="_blank">bekijk portfolio</a>
            <p class="p_gespecialiseerd2">Gespecialiseerd in Logo design, Webdesign</p>
            <div class="floatRight">
            
<!--
              <a href="https://www.facebook.com/guido.vandijk.146" target="_blank">
                <div class="circle_whatwedo socialIcons">
                  <img height="24px" src="links/facebook.svg" alt="facebook logo" />
                </div>
              </a>
              <a href="https://www.instagram.com/dv_guido/" target="_blank">
                <div class="circle_whatwedo socialIcons insta">
                  <img height="24px" src="links/instagram.svg" alt="Intagram logo" />
                </div>
              </a>
-->
              <a href="https://www.linkedin.com/in/guido-van-dijk-ma/" target="_blank">
                <div class="circle_whatwedo socialIcons insta">
                  <img height="24px" src="links/linkedin.svg" alt="LinkedIn logo" />
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-sm-push-2 col-xs-8 col-xs-push-2 hidden-xs">
          <div class="meettheteam2">
            <img class="portret" src="links/guidovandijk2.jpg" alt="student Guido van Dijk">
          </div>
        </div>
      </div>








    </div>
    <!-- / wrapper_meettheteam -->
    <div class="formBgSchuin geenRotatie meerHeightSchuin"></div>

    <div class="row" id="wrapper_ourwork">
      <div class="workBg">
        <div class="col-xs-11 col-sm-push-1 col-xs-push-1">
          <p class="backgroundTitle bebas relative marginTop">Ons werk</p>
        </div>

        <div class="col-xs-12 paddingBij noMarginTop">
          <div class="col-md-3 col-xs-12 col-sm-8 col-sm-push-2 col-md-push-2 col-xs-push-0">
            <div class="centerThumbnail">
              <img class="werkThumbnail" src="links/werkguido.png" alt="Logo voor Rotterdam dat de band dat de samenhang van Rotterdammers weergeeft. Gemaakt door Guido van Dijk" />
            </div>
          </div>
          <div class="col-md-5 col-xs-12 col-md-push-2 col-xs-push-0">
            <div class="werkTextBox">
              <div class="col-xs-12 col-sm-11 col-sm-push-0 col-xs-push-0">
                <p class="workTitle">Logo Rotterdam</p>
                <div class="border"></div>
                <p class="workBroodText">Een logo dat de band dat de samenhang van Rotterdammers weergeeft.</p>
                <br>
                <p class="workMakerEnCategorie">Logo design<br>Maker: Guido van Dijk</p>
                <a href="http://20711.hosts.ma-cloud.nl/portfolio/rotterdam.html" target="_blank">
                  <div class="goToWork">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 paddingBij">
          <div class="col-md-3 col-xs-12 col-sm-8 col-sm-push-2 col-md-push-2 col-xs-push-0">
            <div class="centerThumbnail">
              <img class="werkThumbnail" src="links/werkguido2.png" alt="Logo voor Rotterdam dat de band dat de samenhang van Rotterdammers weergeeft. Gemaakt door Guido van Dijk" />
            </div>
          </div>
          <div class="col-md-5 col-xs-12 col-md-push-2 col-xs-push-0">
            <div class="werkTextBox">
              <div class="col-xs-12 col-sm-11 col-sm-push-0 col-xs-push-0">
                <p class="workTitle">Het Hobby Huis</p>
                <div class="border"></div>
                <p class="workBroodText">Mobile design voor de fusering van BoekenVoordeel en Free Record Shop.</p>
                <br>
                <p class="workMakerEnCategorie">Webdesign/ Logo design<br>Maker: Guido van Dijk</p>
                <a href="http://20711.hosts.ma-cloud.nl/portfolio/hethobbyhuis.html" target="_blank">
                  <div class="goToWork">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 paddingBij">
          <div class="col-md-3 col-xs-12 col-sm-8 col-sm-push-2 col-md-push-2 col-xs-push-0">
            <div class="centerThumbnail">
              <img class="werkThumbnail" src="links/werktwan.jpg" alt="Webdesign voor Ultra Music Festival, gemaakt door Twan Meijer" />
            </div>
          </div>
          <div class="col-md-5 col-xs-12 col-md-push-2 col-xs-push-0">
            <div class="werkTextBox">
              <div class="col-xs-12 col-sm-11 col-sm-push-0 col-xs-push-0">
                <p class="workTitle">Ultra Music Festival</p>
                <div class="border"></div>
                <p class="workBroodText">Een fictieve website voor het Ultra Music Festival.</p>
                <br>
                <p class="workMakerEnCategorie">Webdesign<br>Maker: Twan Meijer</p>
                <a href="http://20764.hosts.ma-cloud.nl/ticket-time/" target="_blank">
                  <div class="goToWork">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

                <div class="col-xs-12 paddingBij">
          <div class="col-md-3 col-xs-12 col-sm-8 col-sm-push-2 col-md-push-2 col-xs-push-0">
            <div class="centerThumbnail">
              <img class="werkThumbnail" src="links/werkstijnfloris.jpg" alt="Logo voor Rotterdam dat de band dat de samenhang van Rotterdammers weergeeft. Gemaakt door Guido van Dijk" />
            </div>
          </div>
          <div class="col-md-5 col-xs-12 col-md-push-2 col-xs-push-0">
            <div class="werkTextBox">
              <div class="col-xs-12 col-sm-11 col-sm-push-0 col-xs-push-0">
                <p class="workTitle">De Buurt Boerderij</p>
                <div class="border"></div>
                <p class="workBroodText">Een website voor De Buurt Boerderij in het bruisend centrum van het Westerpark.</p>
                <br>
                <p class="workMakerEnCategorie">Webdesign/ Back-End<br>Maker: Stijn van Beugen Floris Droppert</p>
                <a href="http://20326.hosts.ma-cloud.nl/OnsGenoegen/?page=home" target="_blank">
                  <div class="goToWork">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


    <div class="row" id="wrapper_jobs_contact">
      <div class="formBgSchuin"></div>
      <div class="formBg">
        <div class="col-xs-11 col-sm-push-1 col-xs-push-1">
          <p class="backgroundTitle bebas relative">stage</p>
          <p class="workBroodText stageText col-sm-9 col-sm-push-1">                      
          We zijn op zoek naar tweede jaars studenten Media developer aan het Mediacollege Amsterdam. <br>
          We zoeken iemand die goed is in backend en buiten school graag meer wilt leren dan dat op school gevraagd wordt. <br>
          Eisen in het team:<br>
          - eerlijkheid<br>
          - oplossend gericht<br>
          - ondernemend.
        </div>

        <!-- intership formulier -->
         <form id="internship" method="post">

           <!-- naam -->
           <div class="col-sm-4 col-xs-10 col-sm-push-2 col-xs-push-1">
             <div class="col-xs-12 nopadding">
               <input type="text" id="name" name="name" placeholder="jouw naam..." required>
             </div>
             <br><br>
             <!-- email -->
             <div class="col-xs-12 nopadding">
               <input type="email" id="email" name="email" placeholder="jouw school-email..." required>
             </div>

             <br>

             <!-- checkboxen -->
             <div class="form-group" id="alleCheckboxen">
               <label for="checkbox" class="titleCheckbox">Wat zou je willen doen en kunnen doen op de stage*</label>

               <br>
               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="cmsMaken"> Het maken van eigen cms-systemen
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="webdesign"> Ontwerpen van websites en apps
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="backendWebshop"> Aan de back-end werken van webshops
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="branding"> Ontwerpen van huistijlen en logo's
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="graphicDesign"> Ontwerpen van grafische producten
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="wordpress"> Het maken van een wordpress theme
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="research"> Onderzoeken en verslagen schrijven
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="concept"> Ideeën schetsen voor de te ontwerpen producten
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="frontEnd"> Websites coderen in HTML en CSS
               </label><br>

               <label class="checkboxInternship">
                 <input type="checkbox" name="whatYouWannaDo[]" value="nativeApp"> Native apps coderen
               </label><br>
               <label class="checkboxInternship" id="anderNamelijk">
                 <input type="checkbox" name="anders"> Anders namelijk...
               </label><br>
               <!-- formgroup einde -->
               <div class="col-xs-12 nopadding">
                 <div id="dependent-box">
                   <input type="text" id="anderNamelijkInput" name="whatYouWannaDo[]" placeholder="anders namelijk...">
                 </div>
               </div>
             </div>
             </div>
           <!-- col-sm-4 col-xs-12 col-sm-push-2 col-xs-push-0 einde -->
           <!-- motivatie brief -->
           <div class="col-sm-4 col-xs-10 col-sm-push-2 col-xs-push-1">
             <textarea id="motivation" name="subject" placeholder="Schrijf een motivatie brief + link portfolio en/of gemaakt werk..." required></textarea>
             <div class="col-xs-12 nopadding">
               <input type="submit" value="versturen" id="submit" name="submit">
             </div>
           </div>
           <!-- submit button -->
         </form>
        <div class="col-xs-12 col-sm-10 col-sm-push-2">
          <p class="disclaimer intershipDisclaimer">*Deze stage is alleen voor studenten van het Mediacollege Amsterdam, die de opleiding volgen tot media development.</p>
        </div>
      </div>
    </div>


    <!-- footer -->
    <div class="row">
      <footer>
        <div class="contactbg">
          <div class="col-xs-11 col-sm-push-1 col-xs-push-0">
            <p class="backgroundTitle bebas">contact</p>
          </div>
          <br>
          <div class="col-xs-10 col-sm-push-2 col-xs-push-1">
            <p class="bebas endText">wij werken met trots voor u</p>
          </div>

          <div class="col-xs-10 col-sm-push-2 col-xs-push-1">
            <p class="contactus">Contacteer ons op</p>
          </div>


          <a href="mailto:dutch-new-id@hotmail.com" rel="noopener" class="contactButton col-xs-10 col-sm-4  col-xs-push-1 col-sm-push-2">dutch-new-id@hotmail.com</a>
          <p class="contactButton col-xs-10 col-sm-4 col-xs-push-1 col-sm-push-2">06 24154581</p>
        </div>
        <!-- back to top button -->
        <div class="col-xs-12">
          <div class="backToTop" onclick="$('html,body').animate({scrollTop:0},'1');return false;">
            <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
          </div>
        </div>
        <!-- disclaimer -->
        <div class="col-xs-11 col-sm-push-1 col-xs-push-0">
          <p class="disclaimer">
            Project in opdracht van het <a href="https://www.ma-web.nl/" target="_blank">Mediacollege Amsterdam</a> 2017
          </p>
        </div>
      </footer>
    </div>
  </div>
  <!-- / container-fluid -->
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>