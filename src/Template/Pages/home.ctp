<div id="bg" >
	<?php echo $this->Html->image("/img/background.jpg", ['class'=>"bgImage"]);?>
</div>
<div class="frontDiv">

<?php /*Bloc Accueil*/ ?>
<div class="" id="accueil">

		<div class="container innerBlock text-center ">
			<p class="fpBig text-center"><?php echo __("FP");?></p>
		<?php //echo $this->Html->image("logo.jpg"); ?>
		<h1 class="text-center ">
			<?php echo __("Fortin Pomerleau") ?>
		</h1>
		</div>

	</div>
<?php echo $this->element('menu'); ?>

<?php /*Bloc service*/ ?>
<div class="minHeight500" id="service">
		<div class="container innerBlock">
			<div class="row">
				<div class="col-xs-12">
					<h2 class=""><?php echo __("NOS SERVICES");?></h2>

					<h3><?php echo __("Fortin Pomerleau est un bureau de consultation en financement d’entreprises et immobilier.") ?></h3>

					<ul>
						<li><?php echo __("Conseils financiers");?></li>
						<li><?php echo __("Aide à la préparation d’un projet de financement");?></li>
						<li><?php echo __("Négociation avec les banques");?></li>
						<li><?php echo __("Financements bancaires traditionnels");?></li>
						<li><?php echo __("Financements avec des Fonds d’investissement");?></li>
						<li><?php echo __("Achat/vente/Fusion entreprises");?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php /*Bloc a propos*/ ?>
<?php /*
<div class=" minHeight500" id="apropos">
		<div class="container innerBlock">
			<div class="col-xs-12">
				<h2 class=""><?php echo __("À PROPOS");?></h2>


			</div>
		</div>


	</div>
*/?>


<?php /*Bloc Equipe*/ ?>
<div class=" minHeight500" id="equipe">
		<div class="container innerBlock">
			<div class="row ">

				<div class="col-xs-12">
					<h2><?php echo "NOTRE ÉQUIPE"; ?></h2>
					<h3><?php echo "Notre équipe d'experts expérimentés peut aller vous rencontrer en entreprise pour discuter de vos besoins en financement et des solutions disponibles."; ?></h3>
				</div>
			</div>
			<br>
			<div class="row ">
				<div class="col-xs-6 col-sm-4">
				<?php echo $this->Html->image("photojean.png", ["class"=>"img-fluid"]); ?>
			</div>
				<div class="col-xs-6 col-sm-8">
					<h3>
					<?php echo __("Jean Fortin"); ?>
				</h3>
					<p>
					<?php echo __("Avec plus de 38 années d’expérience en financement d’entreprises, négociation, développement des affaires, gestion d’équipe de ventes pour de grandes institutions et détenteur d’un MBA en financement des PME, je veux partager mes connaissances, compétences et mon réseau de contacts avec les entrepreneurs et leur permettent de réaliser leur projet d’entreprises."); ?>
				</p>
				</div>
			</div>
			<br>
			<div class="row ">
				<div class="col-xs-6 col-sm-4">
				<?php echo $this->Html->image("photojo.png", ["class"=>"img-fluid"]); ?>
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
<div class=" minHeight500" id="contact">
		<div class="container innerBlock">
			<div class="col-xs-12  text-center">
				<h2 class=""><?php echo __("CONTACT");?></h2>
			<?= $this->Flash->render() ?>
			<?php echo $this->Form->create("Contact", array("url"=>"/contact", "class"=>"form contact_form","role"=>"form"));?>
			<?php echo $this->Form->control("firstName", array("label"=>false, 'placeholder'=>__("Prénom *"), "class"=>"form-control"));?>
			<?php
if (isset($errors["firstName"]["_required"]) || isset($errors["firstName"]["_empty"])) {
    ?>
					<p class="error"><?= $errors["firstName"]["_required"] ?></p>
			<?php }?>
			<?php echo $this->Form->control("lastName", array("label"=>false, 'placeholder'=>__("Nom *"),  "class"=>"form-control"));?>
			<?php
if (isset($errors["lastname"]["_required"]) || isset($errors["lastname"]["_empty"])) {
    ?>
					<p class="error"><?= $errors["lastname"]["_required"] ?></p>
			<?php }?>
			<?php echo $this->Form->control("email", array("label"=>false, 'placeholder'=>__("Courriel *"),  "class"=>"form-control"));?>
			<?php
if (isset($errors["email"]["_required"]) || isset($errors["email"]["_empty"])) {
    ?>
					<p class="error"><?= $errors["email"]["_required"] ?></p>
			<?php }?>
			<?php echo $this->Form->control("company", array("label"=>false, 'placeholder'=>__("Compagnie (facultatif)"), "class"=>"form-control"));?>
			<?php echo $this->Form->control("phoneNumber", array("label"=>false, 'placeholder'=>__("Téléphone (facultatif)"), "class"=>"form-control"));?>
			<?php echo $this->Form->control("message", array("label"=>false, 'placeholder'=>__("Message *"),"rows"=>6, "class"=>"form-control"));?>
            <?php
            if (isset($errors["message"]["_required"]) || isset($errors["message"]["_empty"])) {
                ?>
					<p class="error"><?= $errors["message"]["_required"] ?></p>
			<?php }?>
           <div class="g-recaptcha"
					data-sitekey="6LfqLXAUAAAAAGjojFzfUJNYZnqrWfvYlF0px7Xd"></div>
            <?php echo $this->Form->control(__('Envoyer'), array("label" => false, "type" => "submit", "class" => 'btn btn-primary')); ?>
	        <?php echo $this->Form->end(); ?>
		</div>
		</div>
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>

