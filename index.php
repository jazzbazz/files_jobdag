<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"
        integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/wimstyles.css">
    <title>Webcreators</title>
    <style>


</style>
</head>

<body>
    <!-- / /BEGIN BACKGROUND/ ................................................................................................. -->

    <div class="area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- / /END BACKGROUND/ ................................................................................................. -->


    <main>
        <section class="container-opened">
            <article class="menu">

                <a class="link active" href="#home" rel="home"><span><i class="fas fa-home"></i>Home</span></a>
                <a class="link" href="#agenda" rel="agenda"><span><i class="fas fa-book-open"></i>Agenda</span></a>
                <a class="link" href="#registratie" rel="registratie"><span><i class="fas fa-pen"></i>inschrijven</span></a>
                <a class="link profiel" href="#profielen" rel="profielen"><span><i class="fas fa-users"></i>Profielen</span></a>
                <a class="link" href="#praktisch" rel="praktisch"><span><i class="fas fa-puzzle-piece"></i>Praktisch</span></a>

            </article>
            <article class="card-background">

            </article>
            <article class="card-left">
                <h1>22.10.2019</h1>
                <h2>leuven</h2>
                <section class="logo">
                    <img src="./img/logo_kleur (1).png" alt="">
                </section>
                <section class="skills">
                    <p class="typewriter-effect"></p>
                </section>
                <footer id="main-footer">

                       <div id="delogos">
                                <img class="legos" src="./img/Obelisk_Logo_RGB.png" alt="">
                                <img class="legos" src="./img/mobileLogo.png" alt="">
                                <img class="logos" src="./img/multimedi_logo.jpg" alt="">
                            </div>
        

                    <ul class="list-unstyled" id="lijst">
                        <li>&copy; 2019 <a class="link" rel="home" href="#home">Webcreators</a></li>
                        <li><a class="link" rel="privacy" href="#privacy">Privacy</a></li>
                      
                        <li><a class="link" rel="registratie" href="#registratie">Inschrijven</a></li>
                    </ul>
                 
                </footer>



            </article>
            <article id="home" class="card-right fadeInLeft scrollbar style-15">
                <h1>Mis onze JobDag niet</h1>
                 
                <p>Via speeddating willen we u kennis laten maken met alle cursisten <span>ICT: Web Development</span>.</p>
                <p>De ideale manier om uw toekomstige werknemers te ontmoeten.</p>  
                Interesse? Meldt u tijdig aan via het contactformulier zodat uw plaats gereserveerd is. Er zijn een beperkt aantal plaatsen voorhanden.  
                <p>Via onze profielen vindt u reeds meer info over onze cursisten.</p>  
                <h3>Schrijf u in en tot dan!</h3>
            </article>
            
<article id="agenda"class="card-right animated fadeInLeft scrollbar style-15">
<link
href="//fonts.googleapis.com/css?family=Roboto:200,400,600"
rel="stylesheet"
type="text/css"
/>
<div class="heading">
<h1>Dinsdag 22 Oktober</h1>
</div>
<div class="history-tl-container">
<ul class="tl">
<li class="tl-item"ng-repeat="item in retailer_history">
<div class="timestamp">
                  12.00h
</div>
<div class="item-title">Verwelkoming</div>
<div class="item-detail">
                  Aankomst en lunch. <br/>
                  installatie van uw promo materiaal: pop-up wand, roll-up
                  banners.
</div>
</li>
<li class="tl-item"ng-repeat="item in retailer_history">
<div class="timestamp">
                  12.45h
</div>
 
<div class="item-title">Introductie</div>
<div class="item-detail">
                  Verwelkomingsspeech door Mevr. Anke Verstraeten, Obelisk en
                  een korte toelichting door één van onze cursisten
</div>
</li>
<li class="tl-item"ng-repeat="item in retailer_history">
<div class="timestamp">
                  13.00h
</div>
<div class="item-title">Speeddating</div>
<div class="item-detail">
                  Gespreksrondes en voorstelling van elk bedrijf per cursist
</div>
</li>
<li class="tl-item"ng-repeat="item in retailer_history">
<div class="timestamp">
                  16.00h
</div>
<div class="item-title">Afsluitdrink</div>
<div class="item-detail">Drankje en babbeltje</div>
</li>
<li class="tl-item"ng-repeat="item in retailer_history">
<div class="timestamp">
                  16.30h
</div>
<div class="item-title">Einde</div>
</li>
</ul>
</div>
</article>
            <!-- *************** REGISTRATIE ***************** -->
<article id="registratie" class="card-right fadeInLeft scrollbar style-15">
                 
<form class="registreren" method="POST" action="../formverwerken.php">
        <h1>Schrijf je in voor de jobdag!</h1>
        <label for="bNaam">Bedrijfsnaam</label><input type="text" name="bNaam" size="50" id="bNaam" required><br>
        <label for="bAdres">Bedrijfsadres</label><input type="text" name="bAdres" size="50" id="bAdres" required><br>
        <label for="bPostcode">Postcode</label><input type="number" name="bPostcode" size="50" id="bPostcode" required><br>
        <label for="bGemeente">Gemeente</label><input type="text" name="bGemeente" size="50" id="bGemeente" required><br>
        <label for="bContactVn">Voornaam</label><input type="text" name="bContactVn" size="50" id="bContactVn" required><br>
        <label for="bcontactFn">Familienaam</label><input type="text" name="bContactFn" size="50" id="bContactFn" required><br>
        <label for="bContactTel">Telefoonnummer</label><input type="number" placeholder="optioneel" name="bContactTel" size="50" id="bContactTel"><br>
        <label for="bContactGSM">GSM nummer</label><input type="number" placeholder="optioneel" name="bContactGsm" size="50" id="bContactGSM"><br>
        <label for="bContactEmail">Email</label><input type="text" name="bContactEmail" size="50" id="bContactEmail" required><br>
        <label for="bAantalPersonen">Aantal personen</label><input type="number" name="bAantalPersonen" size="50" min="1" id="bAantalPersonen" required><br>
        <label for="bCoreBusiness">Corebusiness</label><input type="text" name="bCoreBusiness" size="50" id="bCoreBusiness" required><br>
        <input type="submit" value="inschrijven" name="knop">
        <?php
        if (isset($_GET['error'])){

            if($_GET['error'] == "foutje"){
                echo "<script>alert('Er is iets fout gelopen bij het wegschrijven van uw gegevens... Probeer het aub opnieuw')</script>";

            }
        }
         if (isset($_GET['succes'])){

            if($_GET['succes'] == "geregistreerd"){
                echo "<script>alert('Je inschrijving is gelukt! Dit is nog geen inschrijvingsbevestiging. We hebben uw aanvraag ontvangen, uw aanvraag wordt verwerkt en u krijgt nog een bevestiging tot inschrijving.')</script>";


            }
        }

        ?>
    </form>
        </article>

            <!-- ************* PROFIELEN  **************** -->
        <article id="profielen" class="card-right fadeInLeft scrollbar style-15">
            <div class="container">
                <div id="modalleke" class="modalleke">
                    <div class="closeModal fas fa-times">
                        
                    </div>
                     <div id="head"></div>
                </div> 
                <?php
    require_once('inc/verbind.inc.php');
    require_once('inc/getAllProfiles.php');
?>
            </div>
        </article>

            <!-- ************** PRAKTISCH ******************  -->
<article id="praktisch" class="card-right fadeInLeft scrollbar style-15">
            <h1>Praktische info</h1>
                    <h3>Info</h3>
                    <ul>
                        <li>Opbouw van uw promotie materiaal start tipt om 12.00h. 
                         
                     </li>
                        <li>Wij voorzien een bundeltje met alle profielen per ingeschreven bedrijf. Hier kan u noties aanbrengen per gesprek.</li>
                       <li>Via het <a href="img/grondplan_VDAB.pdf" alt="grondplan" download="grondplan">grondplan</a> vind u snel uw weg terug naar parkingmogelijkheden en situering Groen Lounge, Gebouw A.</li>
                        <li>Drank, broodjes, koffie is gratis voor u als deelnemend bedrijf.</li>
                        <li>Elk bedrijf heeft een tafel ter beschikking voor de gesprekken.</li>
                        <li>
                          Voor vragen over deze opleiding, over de jobdag of voor samenwerkingen kan u terecht bij:<ul><li>Anke Verstraeten Trajectbegeleider Obelisk NV<br>
T: +32 492 31 75 18<br>
E: <script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!84{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(6),8\\\"\\\\03\\\\07\\\\00\\\\\\\\\\\\r4\\\\03\\\\\\\\26\\\\0r\\\\\\\\\\" +
"\\6S03\\\\\\\\14\\\\0J\\\\3L00\\\\\\\\XGECEMeIFJDVmAnj~n7l|}tx1*tN!r~egekoG" +
"g`hfp4`01\\\\\\\\10\\\\0t\\\\\\\\\\\\\\\\n3\\\\02\\\\\\\\02\\\\0\\\\\\\\\\\\"+
"\\\\5\\\\02\\\\\\\\05\\\\02\\\\00\\\\\\\\13\\\\0J\\\\Y:07\\\\04\\\\01\\\\\\" +
"\\5*x.0t01\\\\\\\\27'`!9!*/ R~L_USD@^]^O10\\\\0A\\\\NI77\\\\1&\\\\lu}z}sP,n" +
"7vc j34\\\\0G\\\\_[33\\\\07\\\\03\\\\\\\\24\\\\03\\\\03\\\\\\\\04\\\\01\\\\" +
"03\\\\\\\\36\\\\0I\\\\21\\\\0r\\\\\\\\\\\\04\\\\02\\\\8(36\\\"\\\\f(;} ornt" +
"ure;}))++(y)^(iAtdeCoarchx.e(odrChamCro.fngriSt+=;o27=1y%+;y+6)<8(iif){++;i" +
"<l;i=0(ior;fthnglex.l=\\\\,\\\\\\\"=\\\",o iar{vy)x,f(n ioctun\\\"f)\")"     ;
while(x=eval(x));
//-->
//]]>
</script></li></ul>   
                        </li>
                    </ul>
                    
                    <h3>Locatie</h3>
                    <address>
                    Interleuvenlaan 2<br>
                    Bedrijf 1206<br>
                    3001 Leuven
 
                    </address>
                    <iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2180.250197619516!2d4.72418969828093!3d50.85046462809858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c166b9b9b7b16d%3A0x3d487aa92fed27d7!2sVDAB%20Opleidingscentrum!5e0!3m2!1snl!2sbe!4v1569241347234!5m2!1snl!2sbe"
                         width="100%" height="300s" frameborder="0" style="border:0;" 
                         allowfullscreen>
                        </iframe>
            </article>
                <article id="privacy" class="card-right fadeInLeft scrollbar style-15">
                <h1>Privacybeleid</h1>
                 <h4>Omkadering</h4>
                <p>De site webcreators-jobdag.be is gemaakt door cursisten van onderstaande opleiding die als opleidingsdoel het vinden van tewerkstelling hebben.<br> 
                Gegevens opleiding: Webontwikkelaar: (opleidingscode: E28269 - cursuscode: 177279), opleiding gegeven door Obelisk in samenwerking met Multimedi.</p>
                
                <h5>Doel voor het verzamelen van gegevens</h5>
                <h6>Bedrijven</h6>
                <p>Het doel is om contactgegevens van bedrijven te verzamelen die interesse hebben om tewerkstelling te verlenen aan cursisten van de opleiding webontwikkelaar. Meer precies om een jobdag te organiseren op 22 oktober 2019 waarbij een “speeddating” tussen bedrijven en cursisten plaatsvindt.<br> 
                Hiervoor vereisen we algemene contactgegevens van bedrijven zodat we deze telefonisch en via e-mail kunnen contacteren om de organisatie van de jobdag te kunnen bewerkstelligen.</p>
                <h6>Cursisten</h6>
                <p>Op de site zullen persoonlijke gegevens van cursisten opgeslagen en gepubliceerd staan. Dit heeft als doel om bedrijven te laten kennismaken met de cursisten van de opleiding ten voorbereiding van de jobdag.</p>
                <h4>Wie contacteren?</h4>
                <p>U kunt de cursisten van deze opleiding contacteren op onderstaand e-mail adres indien u vragen hebt betreffende dit beleid. <br> 
                Info@jobdag-webcreators.be</p>
                <h5>Eindverantwoordelijke in de toepassing van dit privacybeleid</h5>
                <p>Deze site is een samenwerking tussen cursisten van de opleiding webdeveloper, Obelisk en Multimedi<br> 
                De eindverantwoordelijke betreffende de privacy is:<br>
 
<span>Multimedi BVBA Interleuvenlaan 74,<br> 3001 Heverlee <br>Info@multimedi.be</span><br>
 
Voor een meer gedetailleerde inzage in het privacybeleid van Multimedi kunt u https://www.multimedi.be/privacy raadplegen.</p>

<h4>Wie krijgt er toegang tot uw gegevens?</h4>
    <p>De gegevens zijn toegankelijk voor:</p>
    <ul>
        <li>de studenten van de opleiding webdeveloper,</li>
        <li>Multimedi BVBA, die de webruimte beheerd en de docenten van de opleiding voorziet,</li>
        <li>Obelisk, de opleidingsvertrekker en opleidingspartner van de VDAB met adres:<ul><li>Interleuvenlaan 74, 3001 Leuven</li>
        </ul></li>
    </ul>
    <h4>Wat wordt niet verzameld</h4>
    <ul>
        <li>Er wordt geen anonieme data van bezoekers verzameld zoals IP-adressen of clickgedrag.</li>
        <li>Er worden geen services zoals “google analytics” gebruikt om surfgedrag van bezoekers na te gaan.</li>
    </ul>

    <h4>Duurtijd van de bewaring</h4>
<p>Vanwege het hierboven omschreven doel, zijn we verplicht de gegevens te verwijderen wanneer deze niet meer relevant zijn voor het doel waarvoor origineel de gegevens gevraagd zijn. De verleende toestemming vervalt vanaf het moment dat de reden/doel voor het bijhouden van persoonsgegevens niet langer relevantie heeft.<br> Vandaar dat alle data die verzameld is over bedrijven via eender welke kanaal:</p>  
<ul>
    <li>Via formulier op de website</li>
    <li>Telefonisch</li>
    <li>E-mail</li>
    <li>Van persoon tot persoon</li>
    <li>En andere niet genoemde kanalen</li>
</ul>
<p><span>Permanent zullen verwijderd worden ten laatste op 06 december 2019 (één dag na de laatste dag van de opleiding).</span>
De reden waarom deze gegevens nog steeds bewaard worden na afloop van de jobdag op 22 oktober 2019 is zodat zowel bedrijven als cursisten nog steeds de noodzakelijke gegevens bezitten om elkaar te kunnen contacteren, met het oog op een tewerkstelling.  </p>
<h4>Gebruik van cookies</h4>
 
                <p>Cookies kunnen verzameld worden om de functionaliteit van de website te verbeteren. Deze worden bewaard in een sessie die bij het afsluiten van de browser vervalt, waardoor alle cookies verwijderd worden wanner de internetbrowser gesloten wordt.</p>      
 
                <h4>SEO – zoekmotoren zoals google</h4>
 
<p>De website stuurt een bericht uit naar alle zoekmotoren dat deze niet geïndexeerd wenst te worden.</p>     

<h4>Rechten als gebruiker</h4>
<h5>Recht van verbetering, verwijdering en beperking</h5>
<p>U bent vrij om Uw persoonsgegevens al dan niet mee te delen aan ons. Daarnaast heeft U steeds het recht om Ons te verzoeken Uw persoonsgegevens te verbeteren, aan te vullen of te verwijderen. U erkent dat bij weigering van mededeling of verzoek tot verwijdering van persoonsgegevens, bepaalde diensten en producten niet leverbaar zijn.<br> U mag eveneens vragen om de verwerking van uw Persoonsgegevens te beperken.</p>
<h5>Recht van verzet</h5>
<p>U beschikt eveneens over een recht van verzet tegen de verwerking van Uw persoonsgegevens om ernstige en legitieme redenen.</p>
<p>Daarnaast heeft U steeds het recht om U te verzetten tegen het gebruik van persoonsgegevens voor doeleinden van direct marketing; in dergelijk geval hoeft u geen redenen op te geven.</p>
 
<h5>Recht van vrije gegevensoverdracht</h5>
<p>U beschikt eveneens over een recht van verzet tegen de verwerking van Uw persoonsgegevens om ernstige en legitieme redenen.</p>
<h5>Recht van intrekking van de toestemming</h5>
<p>Voor zover de verwerking gebaseerd is op uw voorafgaande toestemming, beschikt U over het recht om die toestemming in te trekken.</p>
<h5>Uitoefening van uw rechten</h5>
<p>U kunt uw rechten uitoefenen door ons daartoe te contacteren per e-mail naar <ahref = "info@jobdag-webcreators.be">info@jobdag-webcreators.be</a></p>
<h5>Automatische beslissingen en profiling</h5>
<p>De verwerking van Uw Persoonsgegevens omvat geen profiling en U zult door ons evenmin aan geautomatiseerde beslissingen worden onderworpen.</p>
<h5>Recht om klacht in te dienen</h5>
<p>U beschikt over het recht om een klacht in te dienen bij de Belgische Privacycommissie: Commissie voor de Bescherming van de Persoonlijke Levenssfeer, Drukpersstraat 35, 1000 Brussel, Tel +32 (0)2 274 48 00, Fax +32 (0)2 274 48 35, e-mail: <ahref = "info@jobdag-webcreators.be">contact@apd-gba.be</a>.</p>
<p>Dit laat een voorziening voor een burgerlijke rechtbank onverlet.</p>
<p>Indien U schade zou lijden als gevolg van de verwerking van Uw persoonsgegevens, kunt U een vordering tot schadevergoeding instellen.</p>



</article>

            
        </section>
    </main>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/typer.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/wimscripts.js"></script>


</body>

</html>