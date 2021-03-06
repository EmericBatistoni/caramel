			
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">	
	<nav id="navigation">
			<ul data-intro="La barre de navigation permet d'utiliser les différentes fonctions du logiciel Caramel.<br/><br/>Vous pouvez accéder aux fonctionnalités concernant les Contacts, les Versements, les Campagnes, les Offres et les Segments. Tout est légendé pour vous aider." data-step="2">
				<li data-intro="Grâce à ce bouton vous pouvez revenir sur la page d'accueil depuis n'importe quel endroit de Caramel" data-step="3"><a href = <?php echo (site_url('')); ?> title="Retour à l'accueil">
				<img <?php echo('src="'.img_url('icons/home.png').'"'); ?> alt="Home"/> </a></li>
				<li>
				<a href="<?php echo (site_url('contact')); ?>" title="Permet de créer, éditer ou supprimer un ou des contacts de la base de données">Contacts</a>
				</li>
				<li>
				<a href="<?php echo (site_url('don')); ?>" title="Permet de créer, rechercher, éditer, supprimer un nouveau versement et éditer un reçu fiscal">Versements</a>
				</li>
				<li>
				<a href="<?php echo (site_url('campagne')); ?>" title="Permet de créer, rechercher, éditer, supprimer une nouvelle campagne">Campagnes</a>
				</li>
				<li>
				<a href="<?php echo (site_url('offre')); ?>" title="Permet de créer, rechercher, éditer, supprimer une nouvelle offre" >Offres</a>
				</li>
				<li>
				<a href="<?php echo (site_url('segment')); ?>" title="Permet de créer, rechercher, éditer, supprimer un nouveau segment">Segments</a>
				</li>
			</ul>
	</nav>

	<!--
			<ul>
				<li class="menu">
				<a> <?php echo($username) ?> </a>
				</li>
			<ul>
	-->
	
	<nav id=navigation style="margin-left: 800px">
			<ul data-intro="Ici, vous avez accès à des fonctionnalités annexes comme le manuel d'aide, les outils statistiques, l'édition de documents, les paramètres. Vous pouvez aussi vous déconnecter." data-step="4">
				<li data-intro="Le manuel permet d'obtenir des informations sur le fonctionnement du logiciel.<br/><br/> Lorsque vous appuyez sur le bouton, les informations affichées sont en relation avec ce qui est visible sur votre écran.<br/><br/>Vous pouvez cependant accéder à l'intégralité du manuel en utilisant la molette de votre souris" data-step="5"><a id="aide_button" href = <?php echo (site_url('aide/general')).'#'.($this->router->uri->rsegments[1]); ?> title="Accéder au manuel d'aide utilisateur">
				<img <?php echo('src="'.img_url('icons/man.png').'"'); ?> alt="Manuel"/> </a></li>
				<li><a href = <?php echo (site_url('stat')); ?> title="Accès aux outils statistiques">
				<img <?php echo('src="'.img_url('icons/stat.png').'"'); ?> alt="Statistics"/> </a></li>
				<li><a href = <?php echo (site_url('document')); ?> title="Edition de reçus fiscaux et de lettres pré-enregistrées" >
				<img <?php echo('src="'.img_url('icons/document.png').'"'); ?> alt="Documents"/> </a></li>
				<!-- <li><a href = <?php echo (site_url('user')); ?> title="Utilisateur">
				<img <?php echo('src="'.img_url('icons/user.png').'"'); ?> alt="User"/> </a></li> -->
				<li><a href = <?php echo (site_url('admin')); ?> title="Accès aux paramètres de Caramel">
				<img <?php echo('src="'.img_url('icons/admin.png').'"'); ?> alt="Admin"/> </a></li>
				<li><a href = <?php echo (site_url('login/disconnect')); ?> title="Fermeture de votre compte">
				<img <?php echo('src="'.img_url('icons/logout.png').'"'); ?> alt="Logout"/> </a></li>
			</ul>
	</nav>

		</div>
	</div>
</div>

