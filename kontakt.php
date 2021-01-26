<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')) {
    
   $userName = $_POST['name'];
   $userLastName = $_POST['lastName'];
   $userEmail = $_POST['email'];
   $userTel = $_POST['tel'];
   $message = $_POST['message'];
   $messageSubject = "Poruka sa sajta";

   if(!empty($userEmail) && !empty($userName) && !empty($message)) {
    //passed
    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
        //failed
        $msg = 'molimo vas koristite ispravan mejl  ';
        $msgClass = 'alert';
    } else {
        //passed
       
        $to = "office@kudbubusinac.com";
        $subject = 'Poruka od '.$userName. ' ' .$userLastName ;

        $body = '<h2>Kontakt forma </h2>
        <h4>Ime i prezime </h4><p>'.$userName. ' ' .$userLastName.'</p>
        <h4>Email adresa</h4><p>'.$userEmail.'</p>
        <h4>Broj telefona</h4><p>'.$userTel.'</p>
        <h4>Poruka</h4><p>'.$message.'</p>
    ';
        

   
            
                

        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " .$userName. ' ' .$userLastName. "<".$userEmail.">". "\r\n";

        if(mail($to,$subject,$body,$headers)) {
            $msg = 'Vaša poruka je uspešno poslata';
            $msgClass = 'success';

        } else {
            $msg = 'Vaša poruka nije poslata';
            $msgClass = 'alert';
        }

    }
   } else {
    //failed
    $msg = 'Molimo vas da popunite sva polja';
    $msgClass = 'alert';
   }
    
}
?>


<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marko Lazarevic, markois2518@gs.viser.edu.rs">
    <meta name="keywords" content="KUD, Bubušinac, kulturno, umetničko, društvo">
    <meta name="description" content="KUD Bubusinac. Kulturno umetnicko drustvo Bubusinac. Kulturno umetničko društvo Bubušinac. Email adresa je office@kudbubusinac.com, a kontakt telefon +38165545545. Kulturno umetnicko drustvo Bubusinac se nalazi u Bubusincu nedaleko od Pozarevca. Drustvo se bavi ocuvnje narodne tradicije, narodnih igara i pesama.">
   
     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174452893-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-174452893-1');
    </script>

    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon"  type="image/png"  href="img/favicon4.png">
    <link rel="stylesheet" href="css/kontakt.min.css">
    <script src="https://kit.fontawesome.com/486587c22a.js" crossorigin="anonymous"></script>

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.kudbubusinac.com/">
    <meta property="og:title" content="Kulturno umetničko društvo Bubušinac - KUD Bubušinac">
    <meta property="og:description" content="Kulturno umetničko društvo Bubušinac se bavi očuvanjem narodne tradicije, narodnih igara i pesama. Društvo je podeljeno u dve folklorne sekcije, prvi i dečiji ansambl. Nalazimo se u Braničevskom okrugu, nedaleko od Požarevca">
    <meta property="og:image" content="https://www.kudbubusinac.com/img/logo2.1.jpg">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "DanceGroup",
          "name": "Kulturno umetničko društvo Bubušinac",
          "alternateName": "KUD Bubušinac",
          "url": "https://www.kudbubusinac.com/",
          "logo": "https://www.kudbubusinac.com/img/logo.jpg",
          "sameAs": [
            "https://www.facebook.com/KUD-Bubusinac-812466335541325/",
            "https://www.instagram.com/kud_bubusinac/"
            
          ]
        }
    

  
    

    <title> Kontakt | KUD Bubušinac - Kulturno umetničko društvo Bubušinac </title>
</head>
<body id="body">
<!-- Container site div -->
  

        <header>
            <a href="index.html">
                <img id="logo" src="img/logo.jpg" alt="logo kud Bubusinac">
            </a>
           
            <nav id="navbar2" class="navbar">
                <div class="container" id="container" onclick=" myFunction(this)" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>                
                 </div>
               
                <ul class="menu">
                   

                    <li>
                        <a href="galerija.html"> Galerija </a>
                    </li>

                    <li>
                        <a href="onama.html"> O nama </a>
                    </li>

                    <li>
                        <a href="kontakt.php"> Kontakt </a>
                    </li>
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    <li class="icons" >
                        <a href="https://www.instagram.com/kud_bubusinac/"> <i class="fab fa-instagram " ></i> </a>
                    </li>

                    <li class="icons" >
                        <a href="https://www.facebook.com/KUD-Bubusinac-812466335541325/"> <i class="fab fa-facebook-square"></i> </a>
                    </li> 
                    <li class="icons" >
                        <a href="mailto: office@kudbubusinac.com"> <i class="fas fa-envelope-square" ></i></i> </a>
                    </li>
                    <li class="icons" >
                        <a href="phone: +381637473711"> <i class="fas fa-phone-square-alt"></i> </a>
                    </li>
                    

                </ul>
                
            </nav>
           
        </header>
        <hr>

 <div class="row">
 <h1> Kontaktirajte nas <hr></h1>
        
     <div  id="kontakt_forma" class="col-6">
     
         
         <?php if($msg != ''): ?>
            <div class=" <?php echo $msgClass; ?>"> <?php echo $msg ?>  </div>
         <?php endif; ?>
         
         
        <form   method="POST" action="kontakt.php">
       

            <br><label for="ime"> Ime  </label> <br> <br>
           <input class="input" value="<?php echo isset($_POST['name']) ? $userName : ''; ?>"  type="text" id="ime" name="name" placeholder="Unesite vaše ime"> <br>  <br>

           <label for="prezime" > Prezime </label> <br> <br>
           <input class="input" value="<?php echo isset($_POST['lastName']) ? $userLastName : ''; ?>" type="text" name="lastName"id="prezime" placeholder="Unesite vaše prezime"> <br> <br>
           <label for="" > E-mail </label> <br> <br>
           <input class="input" value="<?php echo isset($_POST['email']) ? $userEmail : ''; ?> " type="email" name="email" id="email" placeholder="Unesite vaš e-mail"> <br> <br>
           <label for="tel" >Broj telefona </label> <br> <br>
           <input class='input' type="tel" name="tel" id="tel" placeholder="Unesite vaš broj telefona"> <br> <br> <br>
           <textarea value="<?php echo isset($_POST['message']) ? $message : ''; ?> "class="input" name="message"  id="unos" cols="30" rows="10" placeholder="Unesite poruku"></textarea> <br>
           <br>
          <input type="submit" name="submit" id="btnPosalji" value="Pošalji">
       </form>

     </div>

     <div class="col-6">
         <p id="podaci"> 
         <i  class="fas fa-map-marked-alt"></i> <a target="_blank" href="https://www.google.com/maps/place/%D0%91%D0%B0%D0%B1%D1%83%D1%88%D0%B8%D0%BD%D0%B0%D1%86/@44.667127,21.233731,16z/data=!4m5!3m4!1s0x4750f01a87cefe6b:0xeaaa086ec5d408d3!8m2!3d44.6606476!4d21.2421077?hl=sr">Maršala Tita bb Bubušinac, Srbija </a> <br> <br>
                <i class="far fa-envelope"></i> <a target="_blank" href="mailto:office@kudbubusinac.com">office@kudbubusinac.com </a> <br> <br>
                <i class="fas fa-phone-square-alt"></i> +3816575654

         </p> <br>
        <iframe style="border: 2px solid #a11619; border-radius: 20px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.453603195966!2d21.236931163687743!3d44.665950774318155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750f01a87cefe6b%3A0xeaaa086ec5d408d3!2z0JHQsNCx0YPRiNC40L3QsNGG!5e0!3m2!1ssr!2srs!4v1593511125656!5m2!1ssr!2srs" width="100%" height="600px" max-width="100%" max-height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>

     </div>
 </div>
 <footer class="row">
    <hr>
    <div class="col-12">
        <h2>Navigacija</h2>
        <ul class="menu2" style="display: inline-block;">
           <li>
                <a href="index.html">Početna </a>
            </li>       

            <li>
                <a href="galerija.html"> Galerija </a>
            </li>

            <li>
                <a href="onama.html"> O nama </a>
            </li>

            <li>
                <a href="kontakt.php"> Kontakt </a> <br> <br> <br>
            </li>
           
            <li class="icons" >
                <a href="https://www.instagram.com/kud_bubusinac/" target="_blank"> <i class="fab fa-instagram " ></i> </a>
            </li>

            <li class="icons" >
                <a href="https://www.facebook.com/KUD-Bubusinac-812466335541325/" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
            </li> 
            <li class="icons" >
                <a href="mailto: office@kudbubusinac.com"  target="_blank"> <i class="fas fa-envelope-square" ></i></i> </a>
            </li>
            <li class="icons" >
                <a href="phone: +381637473711"  target="_blank"> <i class="fas fa-phone-square-alt"></i> </a>
            </li>
            

        </ul>
    </div>

    

    <div class="col-12" >
        <h2> Informacije</h2>
        <div class="col-6">
            <p id="informacije" style="padding: 100px;">
                <i class="fas fa-map-marked-alt"></i> <a target="_blank" href="https://www.google.com/maps/place/%D0%91%D0%B0%D0%B1%D1%83%D1%88%D0%B8%D0%BD%D0%B0%D1%86/@44.667127,21.233731,16z/data=!4m5!3m4!1s0x4750f01a87cefe6b:0xeaaa086ec5d408d3!8m2!3d44.6606476!4d21.2421077?hl=sr">Maršala Tita bb Bubušinac, Srbija </a> <br> <br>
                <i class="far fa-envelope"></i> <a target="_blank" href="mailto:office@kudbubusinac.com">office@kudbubusinac.com </a> <br> <br>
                <i class="fas fa-phone-square-alt"></i> +381637473711

            </p>
        </div>
        
        <div class="col-6">
            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.453603195966!2d21.236931163687743!3d44.665950774318155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4750f01a87cefe6b%3A0xeaaa086ec5d408d3!2z0JHQsNCx0YPRiNC40L3QsNGG!5e0!3m2!1ssr!2srs!4v1593511125656!5m2!1ssr!2srs" width="400px" height="400px" max-width="auto" max-height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
       

    </div>
    <div class="col-12" >
        <h2> Pokrovitelji </h2>
        
        <div class="col-3">
                <a href="https://pozarevac.rs/" target="_blank"><img src="img/grb_pozarevac.png" alt="Grb grada Požarevca"> </a>
            </div>
            <div class="col-3">
                <a href="https://www.facebook.com/beomax012/" target="_blank">  <img src="img/beomax.png" alt="Grb farbare Beomax" > </a>
              </div>
        
        
            <div class="col-3">
                <a href="http://agrokiki.com/" target="_blank"><img src="img/agro_kiki.PNG" alt="Logo poljoprivredne apoteke Agro Kiki"> </a>
            </div>
            <div class="col-3">
               <a href="https://www.facebook.com/Paradiso-cs012-2191819274393786/" target="_blank"> <img src="img/paradiso.png" alt="Logo kozmetickog salona Paradiso"> </a>
            </div>
        
    </div>

    
    <div class="row">
        <div class="col-12">
           <a id="autor" href="autor.html"><i> <i class="far fa-copyright"></i> Copyright Marko Lazarevic 2020 </i> </a>
        </div>
    </div>

</footer>

    <script src="js/script.min.js"> </script>
    <script>
             
    document.getElementById('ime').addEventListener('change', proveraIme);
    document.getElementById('prezime').addEventListener('change', proveraPrezime);
    document.getElementById('email').addEventListener('change', proveraEmail);
    document.getElementById('tel').addEventListener('change' , proveraTel);
    document.getElementById('btnPosalji').addEventListener('click' , posalji);
    document.getElementById('unos').addEventListener('change' , proveraPoruke);
    
    

    function proveraIme() {
    const ime = document.getElementById('ime');
    const reg1 = /^[A-Z]{1}[a-z]{2,20}$/;

    if(!reg1.test(ime.value)) {
        ime.style.border = '3px solid red';
        alert('Ime mora početi velikim slovom, a sva ostala moraju biti mala!');
    } else {
        ime.style.border = '3px solid green';
    }
    };



    //prezime
  function proveraPrezime() {
    const prezime = document.getElementById('prezime');
    const reg1 = /^[A-Z]{1}[a-z]{2,20}\ [A-Z]{1}[a-z]{2,20}$|^[A-Z]{1}[a-z]{2,20}$/;

    if(!reg1.test(prezime.value)) {
      prezime.style.border = '3px solid red';
      alert('Neispravno uneto Prezime.');
    
    } else {
      prezime.style.border = '3px solid green';
    }

  };
//email
  function proveraEmail() {
    const email = document.getElementById('email');
    const reg2 = /^([A-Za-z0-9_\-\.]+)@([A-Za-z0-9_\-\.]+)\.([A-Za-z]{2,5})$/

    if(!reg2.test(email.value)) {
      email.style.border = '3px solid red';
      alert('Pogrešno uneta email adresa!')
      
    } else {
      email.style.border = '3px solid green';
      
    }
  }

  

  function proveraPoruke() {
      if(unos.value == "") {
          alert('Unesite poruku');
      }
  }
  // slanje
  function posalji() {
      
      proveraIme();
      proveraPrezime();
      proveraEmail();
     
      proveraPoruke();
     
    }
    </script>
</body>
</html>