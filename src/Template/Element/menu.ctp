<?php ?>
<div id="stick-here"></div>

<nav class="navbar navbar-expand-lg navbar-dark " id="stickThis">
	<?php echo $this->Html->link("FP", "#",["class"=>"fpSmall brand"]);?>
  <?php 
//echo $this->Html->link(
//    $this->Html->image("logo.jpg", ["class"=>"maxHeight60px"]),
//    "#", array('escape' => false)
//);
  ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo $this->Html->link(__("Service"),"#service", ["class"=>"coverLink"]);?>
      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("À propos"),"#apropos", ["class"=>"coverLink"]);?>

      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("Info"),"#info", ["class"=>"coverLink"]);?>

      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("Équipe"),"#equipe", ["class"=>"coverLink"]);?>

      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("Contact"),"#contact", ["class"=>"coverLink"]);?>

      </li>
    </ul>
  </div>
</nav>

