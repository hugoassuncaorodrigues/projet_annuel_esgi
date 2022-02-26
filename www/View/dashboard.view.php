<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CMS MyShopMaker</title>
  <link rel="stylesheet" href="./dist/main.css">

</head>
<body>
<header>
		<div class="logo">Xero<span>Source</span></div>
	</header>
	<div class="nav-btn">Menu</div>
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#">Myshop<span>Maker</span></a>
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Mes Projets</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Utilisateurs</a></li>
					<li><a href="#">Catégories</a></li>  <!-- rajouter les pictos -->
					<li><a href="#">Commentaires</a></li>
					<li><a href="#">Paramètres</a></li>
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
			<div class="search">
				<input type="text" maxlength= "12" placeholder="Search..." class="searchbar">
				<img src="https://images-na.ssl-images-amazon.com/images/I/41gYkruZM2L.png" alt="Magnifying Glass" class="button">
			</div>
			<div class="row1">
				<div class="col1">
					<h2>Vue d'ensemble</h2>
					<div class="conteneur1">
						<div class="flex1"></div>
						<div class="flex1"></div>
						<div class="flex1"></div>
					</div>
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
