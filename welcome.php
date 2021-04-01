<?php
	//welcome.php Dieckman Designs
?>
<!DOCTYPE html>
<html lang="en">
	<head>
      	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y0LRF1W1TY"></script>
		<script>
  			window.dataLayer = window.dataLayer || [];
  			function gtag(){dataLayer.push(arguments);}
  			gtag('js', new Date());

  			gtag('config', 'G-Y0LRF1W1TY');
		</script>
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
               background-position: center;
               background-image:url("/images/horses.png");
               width: 100%;
               height: 100%;
               font-family: Arial, Helvetica;
               letter-spacing: 0.02em;
                font-weight: 400;
               -webkit-font-smoothing: antialiased;
              }

              .container{
                width: 100%;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-evenly;
              }

              .wrapper{
                width: 100%;
              }

              .col-md-12{
                width: 100%;
                text-align: center;
              }

              .box{
                position: relative;
                width: 100%;
                height: 300px;
                margin: 30px 0;
              }

              .icon{
                width: 50%;
                height: 300px;
				text-align: center;
                display: inline-block;
                background-image: url("/images/gripelogo.png");
                background: contain;
            	background-repeat: no-repeat;
            	background-position: center;
                background-size: 555px 300px;
                margin-right: -3px;
                transition: all 0.5s ease;
              }

          .content{
          	opacity: 0;
            text-decoration: none;
            color: white;
            height: 300px;
            transition: all 0.5s ease;
            text-shadow: 2px 2px black;
          }

          .content:hover{
          	opacity: 1;
          }

          .icon2{
                width: 50%;
                background-image: url("/images/tattoodoor.png");
                background: contain;
            	background-repeat: no-repeat;
            	background-position: center;
                background-size: 300px 300px;
            	display: inline-block;
            	margin-right: -3px;
            	transition: all 0.5s ease;
              }

          .icon3{
                width: 50%;
                height: 300px;
                background-image: url("/images/top-secret.png");
                background: contain;
            	background-repeat: no-repeat;
            	background-position: center;
                background-size: 300px 300px;
            	display: inline-block;
            	margin-right: -3px;
            	transition: all 0.5s ease;
              }

          h2 h3 h4{
          	color: white;
          }
          p{
          	color: white;
          }
          .content{
          	opacity: 0;
            text-decoration: none;
            height: 300px;
            transition: all 0.5s ease;
            margin-top: 20px;
          }

              .fa-facebook, .fa-twitter, .fa-linkedin{
                display: inline-block;
                width: 33%;
                margin: 25px 0;
                color: black;
                font-size: 20px;
                text-align: center;
              }

          	.fa-facebook:hover, .fa-twitter:hover, .fa-linkedin:hover{
                text-decoration: none;
              	color: white;
              }
          .footer{
          	width: 100%;
			position: fixed;
			z-index: 10;
			bottom: 0;
			left: 0;
          }
          .watermark{
              display: inline-block;
              width: 100%;
              text-align: center;
              margin: 20px 0;
            color: white;
          }
          .dieckmandesigns{
              -ms-transition: 0.4s ease-in-out;
              -webkit-transform: 0.4s ease-in-out;
              transition: 0.4s ease-in-out;
          }
          .dieckmandesigns:hover{
              -ms-transform: rotate(360deg); /* IE 9 */
              -webkit-transform: rotate(360deg); /* Chrome, Safari, Opera */
              transform: rotate(360deg);
          }
          @media only screen and (max-width: 850px) {
            .icon, .icon2, .icon3{
            	width: 100%;
            }
          }
          @media only screen and (min-width: 850px) {
            .icon, .icon2, .icon3{
            	width: 80%;
            }
          }
          @media only screen and (min-width: 1200px) {
            .icon, .icon2, .icon3{
            	width: 50%;
            }
          }
		</style>
		<script type="text/javascript">
		</script>
	</head>
	<body>
      <div class="container">
        <a href="https://www.facebook.com/josh.dieckman" class="fa fa-facebook" target="_blank"></a>
       	<a href="https://twitter.com/Iceb3rgS1im" class="fa fa-twitter" target="_blank"></a>
        <a href="https://www.linkedin.com/in/joshua-dieckman/" class="fa fa-linkedin" target="_blank"></a>
       </div>
        <div class="wrapper">
          <div class="col-md-12">
            <div class="box">
                <div class="site">
                    <a href="../codelou/php/register.php" target="_blank"><div id="icon" class="icon">
                    	<div class="content">
                      		<h2>Gripe</h2>
                        	<h3>Messaging Web App</h3>
                        	<h3>Developed with:</h3>
                        	<h4>HTML, CSS, PHP, JavaScript & JQuery</h4>
                        	<h4>Still under construction.</h4>
                      	</div>
                      </div></a>
                </div>
            </div>
            <div class="box">
                <div class="site">
                    <a href="../dagger/index.php" target="_blank"><div id="icon2" class="icon2">
                      	<div class="content">
                      		<h2>InkNDagger.com</h2>
                        	<h3>Commercial Website</h3>
                        	<h3>Developed with:</h3>
                        	<h4>HTML, CSS, PHP, JavaScript & JQuery</h4>
                        	<h4>I developed and maintain this site.</h4>
                      	</div>
                      </div></a>
                </div>
            </div>
            <div class="box">
                <div class="site">
                    <a href="#" target="_blank"><div id="icon3" class="icon3">
                    	<div class="content">
                      		<h2>Code Louisville Project-JavaScript</h2>
                        	<h3>Under Construction</h3>
                      	</div>
                     </div></a>
                </div>
            </div>
          </div>
        </div>
	</body>
  <footer>
	<center>
      	<div class="watermark">
           <h4>Powered by:</h4>
           <img class="dieckmandesigns" src="/images/Dieckman Designs Logo.png" height="100px" width="100px">
        </div>
		<p>&copy; 2021 Dieckman Designs</p>
		<p>Contact information: <a href="mailto:info@dieckmandesigns.com">info@dieckmandesigns.com</a>.</p>
	</center>
</footer>
</html>
