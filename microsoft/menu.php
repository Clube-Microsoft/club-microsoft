<header id="header">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="index.php"><img src="img/Logo/LogoName.png" id="img_menu_desktop" alt="" title="" class="img_menu"/></a>
			</div>
			<!--<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="index.php">Início</a></li>
					<li><a href="courses.php">Cursos</a></li>
					<li class="menu-has-children">
						<a>Serviços</a>
						<ul class="nav-dropdown">
							<li><a href="services.php">Workshops</a></li>
							<li><a href="services.php">Palestras</a></li>
							<li><a href="services.php">Aulas Digitais</a></li>
							<li><a href="services.php">Ajuda em Tempo Real</a></li>
						</ul>
					</li>
					<li><a href="blog-home.php">Blog</a></li>
					<li><a href="contact.php">Contacto</a></li>
				</ul>
			</nav>--><!-- #nav-menu-container -->
			<div class="topnav" id="myTopnav">
				<a href="index.php"><img src="img/Logo/LogoName.png" id="img_menu" alt="" title="" class="img_menu"/></a>
				<a href="index.php">Início</a>
				<a href="courses.php">Cursos</a>
				<div class="dropdown">
					<button class="dropbtn">Serviços 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="services.php">Workshops</a>
						<a href="services.php">Palestras</a>
						<a href="services.php">Aulas Digitais</a>
						<a href="services.php">Ajuda em Tempo Real</a>
					</div>
				</div> 
				<a href="#about">About</a>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</div>
	</div>
</header>



<style>    
	@media only screen and (max-width: 881px) {
        .img_menu{
        	width:150px!important;
        }

        #img_menu_desktop{
        	display: none;
        }

        #img_menu{
        	display: block;
        }

        .topnav {
			width: 100%;
		}

    }

    @media only screen and (min-width: 882px) {
        
        #img_menu_desktop{
        	display: block;
        }

        #img_menu{
        	display: none;
        }

    }
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  float: right;;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 881px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 881px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>