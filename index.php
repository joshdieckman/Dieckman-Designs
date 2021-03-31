<?php
	//index.php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Dieckman Designs</title>
		<link rel="icon" href="/images/Dieckman Designs Logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style type="text/css">
          	*{
               margin: 0;
               padding: 0;
              }

              html{
                  width: 100vw;
                  height: 100vh;
              }

              /* CSS which you need for blurred box */
              body{
               background-repeat: no-repeat;
               background-attachment: fixed;
               background-size: cover;
               background-position: top;
               background-image:url("/images/louisville.jpg");
               width: 100%;
               height: 100%;
               font-family: Arial, Helvetica;
               letter-spacing: 0.02em;
                font-weight: 400;
               -webkit-font-smoothing: antialiased;
              }

              .blurred-box{
                position: relative;
                width: 275px;
                height: 300px;
                top: calc(50% - 175px);
                left: calc(50% - 125px);
                background: inherit;
                border-radius: 2px;
                overflow: hidden;
              }

              .blurred-box:after{
               content: '';
               width: 400px;
               height: 500px;
               background: inherit;
               position: absolute;
               left: -25px;
               left position
               right: 0;
               top: -25px;
               top position
               bottom: 0;
               box-shadow: inset 0 0 0 200px rgba(255,255,255,0.05);
               filter: blur(10px);
              }


              /* Form which you dont need */
              .user-login-box{
                position: relative;
                margin-top: 10px;
                text-align: center;
                z-index: 1;
              }
              .user-login-box > *{
                display: inline-block;
                width: 300px;
              }

              .user-icon{
                width: 100px;
                height: 100px;
                position: relative;
                border-radius: 50%;
                background-size: contain;
                background-image: url("/images/Dieckman Designs Logo.png");
              }

              .user-name{
                margin: 10px 0;
				width: 75%;
                color: white;
              }

              #user-password{
                width: 75%;
                opacity: 0.7;
                border-radius: 2px;
                padding: 5px 15px;
                border: 0;
              }

              .fa-facebook, .fa-twitter, .fa-linkedin{
                display: inline-block;
                width: 50px;
                margin: 25px 10px;
                color: black;
                font-size: 20px;
              }

          	.fa-facebook:hover, .fa-twitter:hover, .fa-linkedin:hover{
                text-decoration: none;
              	color: white;
              }
		</style>
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<div class="blurred-box">
			<div class="user-login-box">
              	<a href="https://www.facebook.com/josh.dieckman" class="fa fa-facebook" target="_blank"></a>
          		<a href="https://twitter.com/Iceb3rgS1im" class="fa fa-twitter" target="_blank"></a>
              	<a href="https://www.linkedin.com/in/joshua-dieckman/" class="fa fa-linkedin" target="_blank"></a>
				<span class="user-icon"></span>
				<div class="user-name">Dieckman Designs</div>
				<a href="welcome.php" id="user-password" class="btn btn-primary btn-lg">Welcome</a>
			</div>
		</div>
	</body>
</html>
