<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/frontend.min.js"></script>
    <script src="js/login.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/frontend.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <title></title>
  </head>
  
  <body id="template1">
    
  <div class="login_body" id="loginBody">

        <form id="loginForm" class="signupform" method="POST"></form>
        <div class="wrapper">
        	<div class="signupbox">
        		<form class="signupform">
            <div class="close" id="close">
      <img src="./img/ic_close_24px.svg" alt="">
    </div>
        	
        			<div class="signupsection">
	        			<label for=""></label>
						<input form="loginForm" type="text" class="username" name="username" placeholder="Username">
					</div>
					<div class="signupsection">
	        			<label for=""></label>
						<input form="loginForm" type="password" class="password" name="password" placeholder="Passwort">
					</div>
						<div class="signupsection">
                        <input class="login_input" form="loginForm" type="submit" name="submit" value="Login" id="submit">
                        
					</div>

					<div class="alert">
						<p id="errorlogin">Login Daten sind inkorrekt</p>
					</div>
        		</form>
        	</div>
        </div>     
</div>


  <div class="overlay" id="overlay"></div>

  <div id="processing" class="fullBlank">    
      <!-- <div class="classProcessingInner">  -->
          <div class="lds-roller lds-roller-pos"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <!-- </div>  -->
  </div>


 <!---------------------LOGIN---------------------------------->


    <div class="classLoginMenu" id="loginMenu">         
        <i class="fas fa-unlock-alt"></i>&nbsp;Login 
    </div>

    <div class="container">

<!--------------------------LOGO------------------->

  <div class="row">
    <div class="col">
      <div class="video">
      <iframe width="345" height="181" src="https://www.youtube.com/embed/biPuo1ppIZA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>



      <div class="row logo">
        <div class="col">
           <div class="classImageWrapper">
              <img id="logo" src="" alt="">
            
             </div>
         </div>    
      </div>

<!--------------KONTAKTDATEN---------------------------->

      <div class="row classRowP kontaktdaten">
        <div class="col-sm">
           <div id="firma" class="classKontakt"></div>
         </div>   

         <div class="col-sm">
           <div id="name" class="classKontakt"></div>
         </div>      
       
  
      <div class="classOrtWrapper">

        <div class="col-sm">
           <div id="strasse" class="classKontakt"></div>
         </div>
         <div class="col-sm">
           <div id="ort" class="classKontakt"></div>
         </div>
          <div class="col-sm">
           <div id="land" class="classKontakt"></div>
         </div>

       </div>


      <div class="classPhoneWrapper">

        <div class="col-sm">
           <div id="tel" class="classKontakt"></div>
         </div>
         <div class="col-sm">
           <div class="classKontakt"><a id="mail" href=""></a></div>
         </div>
         

       </div>
      
      <div class="col-sm">
      <a href="vcf/data.vcf"><button class="classFrontBtn">Kontakt speichern</button></a>
      </div>
</div>


 <!---------------------FIELDS---------------------------------->
      
    <div id="boxField" class="classWrapper">


 <!---------------------TITEL---------------------------------->


        <div class="row classRowP classRowMbottom">
        <div id="title" class="col-sm-4 classTextTitle classTextTitleMain">
        </div>
      </div>

      </div>
      <div class="row adCont">
        <div class="col">
          <div class="ad">
            <img src="./img/ad2.svg" alt="">
          </div>
        </div>
      </div>
  </div>
  <!-- Footer -->

  </body>
  <script src="./js/login.js"></script>

</html>

<?php
