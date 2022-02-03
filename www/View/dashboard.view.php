<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
    <body>
        <header id="site-header">
            <div class="container">
                <a href="#">
                    <img src="" alt="">
                </a>
                <nav>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="#">Mes projets</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Utilisateurs</a></li>
                        <li><a href="#">Catégories</a></li>
                        <li><a href="#">Commentaires</a></li>
                        <li><a href="#">Paramètres</a></li>
                    </ul>
                    <p>Suivez-nous</p>
                </nav>
            </div>
        </header>
        <main>
            <section id="sectionBienvenue">
                <div class="container">
                    <h1>Bienvenue sur votre Dashboard !</h1>   
                       <input type="text" placeholder="Rechercher...">    
                </div>
            </section>
            <section id="sectionVueEns">
                <div class="container">
                    <h2>Vue d'ensemble</h2>
                    <label for="totalVentes">Total des ventes</label>
                    <label for="totalVisiteurs">Total des visiteurs</label>
                    <label for="totalCommandes">Total des commandes</label>
                </div>
            </section>
            <section id="sectionStatistique">
                <div class="container">
                    <h2>Statistique</h2>
                    <canvas id="myChart" width="100%"></canvas>
                </div>
            </section>
            <section id="sectionProdTend">
                <div class="container">
                    <h2>Produits tendance</h2>
                    <label for="produitsTendance">(carré blanc)</label>
                </div>
            </section>
            <section id="sectionRecAj">
                <div class="container">
                    <h2>Récemment ajouté</h2>
                    <label for="recemmentAjoute">(carré blanc)</label>
                </div>
            </section>
        </main>
        <footer>
			<div class="container">
				<nav>
					<ul>
						<li><a href="#">Légal</a></li>
						<li><a href="#">Cookies</a></li>
						<li><a href="#">À propos des pubs</a></li>
					</ul>
				</nav>
				<small>© 2022 MyShopMaker</small>
			</div>
		</footer>
    </body>
</html>