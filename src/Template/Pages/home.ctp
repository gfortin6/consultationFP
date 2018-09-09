<?php /*Bloc Accueil*/ ?>
<div class="" id="accueil" style="height: 92.5vh">
	<div class="container text-center">
		<?php echo $this->Html->image("logo.jpg"); ?>
		<h1 class="text-center">
			<?php echo __("Fortin et Pomerleau services financiers est un bureau de consultation en financement d’entreprise et investissement privé.") ?>
		</h1>

	</div>


</div>
<?php echo $this->element('menu'); ?>

<?php /*Bloc service*/ ?>
<div class="" id="service" style="height: 500px">
	<div class="container">
		<div class="col-xs-12">

		</div>
		<h2><?php echo __("NOS SERVICES");?></h2>
		<ul>
			<li><?php echo __("Conseils financiers;");?></li>
			<li><?php echo __("Aide à la préparation d'un projet de financement;");?></li>
			<li><?php echo __("Négociation avec les banques;");?></li>
			<li><?php echo __("Financements bancaires traditionnels;");?></li>
			<li><?php echo __("Financements privés;");?></li>
			<li><?php echo __("Crédit-bail de tout genre.");?></li>
		</ul>
	</div>
</div>

<?php /*Bloc A propos*/ ?>
<div class="marginTop15vh" id="apropos" style="height: 500px">
	<div class="container">

	</div>


</div>


<?php /*Bloc Info*/ ?>
<div class="marginTop15vh" id="info" style="height: 500px">
	<div class="container"></div>


</div>

<?php /*Bloc Equipe*/ ?>
<div class="marginTop15vh" id="equipe" >
	<div class="container">
		<div class="row ">

			<div class="col-xs-12">
				<h2><?php echo "NOTRE ÉQUIPE"; ?></h2>
				<h3><?php echo "Notre équipe d'experts expérimentés peut aller vous rencontrer en entreprise pour discuter de vos besoins en financement et des solutions disponibles."; ?></h3>
			</div>
		</div>
		<div class="row marginTop3em">
			<div class="col-xs-6 col-sm-4">
				<?php echo $this->Html->image("photojean.png", ["class"=>"img-responsive"]); ?>
			</div>
			<div class="col-xs-6 col-sm-8">
				<h3>
					<?php echo __("Jean Fortin"); ?>
				</h3>
				<p>
					<?php echo __("Avec plus de 35 années d’expérience en financement d’entreprises, analyse financière, développement des affaires et gestion d’équipes de vente pour de grandes institutions, j'offre mes services en recherche de financement, financement privé, consultation, coaching / mentorat d'équipe de gestion"); ?>
				</p>
			</div>
		</div>

		<div class="row marginTop3em" >
			<div class="col-xs-6 col-sm-4">
				<?php echo $this->Html->image("photojo.png", ["class"=>"img-responsive"]); ?>
			</div>
			<div class="col-xs-6 col-sm-8">
				<h3>
					<?php echo __("Jonathan Pomerleau"); ?>
				</h3>
				<p>
					<?php echo __("Fort de plus de 10 ans dans le financement aux entreprises et dans l’investissement immobilier, Jonathan Pomerleau détient un baccalauréat en administration des affaires de l’Université Laval. "); ?>
					<?php echo __("Passionné de l’entrepreneuriat, de l’investissement et du développement des affaires, son objectif est de contribuer à la construction de projets d’entreprises à succès et d’être reconnu un incontournable comme consultant en financement et investissement pour les entreprises."); ?>
				</p>
			</div>
		</div>

	</div>

</div>

<?php /*Bloc Contact*/ ?>
<div class="marginTop15vh" id="contact" style="height: 500px">
	<div class="container"></div>


</div>
