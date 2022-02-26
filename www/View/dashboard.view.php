<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CMS MyShopMaker</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./dist/main.css">

</head>
<body>
<header>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
			
				<a href="#"><span></span>
				<div>
				 <img src="dist/LOGO2.png">	
					</div>   
			    </a>
				<ul>

				

					<li> 
					<i class="fa-solid fa-house navbar-icon"></i>
						<a id="icone" href="#">Dashboard</a>
				    </li>
					
					<li>
					<i class="fa-solid fa-folder-open navbar-icon"></i>
						<a id="icone" href="#">Mes Projets</a>
					
				</li>
					<li>
					<i class="fa-solid fa-file-lines navbar-icon"></i>
						<a id="icone" href="#">Pages</a>
					
				</li>
					<li>
					<i class="fa-solid fa-user-group navbar-icon"></i>
						<a id="icone" href="#">Utilisateurs</a>
				</li>
					<li>
					<i class="fa-solid fa-list navbar-icon"></i>
						<a id="icone" href="#">Catégories</a>
				</li> 
					<li>
					<i class="fa-solid fa-comments navbar-icon"></i>
						<a id="icone" href="#">Commentaires</a>
				</li>
					<li>
					<i class="fa-solid fa-gears navbar-icon"></i>	
						<a id="icone" href="#">Paramètres</a>
					</li>
					

				</ul>
			</nav>
		</div>
		<div class="main-content">
			<nav id="navConnexion">
					<ul id="ulConnexion">
						<li class="deroulant" id="liConnexion"><a id="aConnexion" href="#">Bonjour, alex &ensp;</a>
							<ul class="sous">
							<li id="liConnexion"><a id="aConnexion" href="#">Mon profil</a></li>
							<li id="liConnexion"><a id="aConnexion" href="#">Aide</a></li>
							<li id="liConnexion"><a id="aConnexion" href="#">Se déconnecter</a></li>
					</ul>
			</nav>
			<h1>Bienvenue sur votre Dashboard !</h1>
        
	<form class="search-container">
    <input type="text" id="search-bar" placeholder="Recherche...">
    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>
			<div class="row1">
				<div class="col1">
					<h2>Vue d'ensemble</h2>
					<div class="conteneur1">
						<div class="flex1"></div>
						<div class="flex1"></div>
						<div class="flex1"></div>
					</div>
				<div class="col1">
					<h2>Produits tendances</h2>
					<div class="conteneur2">
						<div class="flex2"></div>
					</div>
				</div>
			</div>
			<div class="row2">
				<div class="col2">
					<h2>Statistiques</h2>
						<div class="conteneur3">
							<div class="flex3">
								<canvas id="myChart" width='100%'></canvas>
							</div>		
						</div>
				</div>
				<div class="col2">
					<h2>Récemment ajoutés</h2>
					<div class="conteneur4">
						<div class="flex4"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>

</body>
</html>
