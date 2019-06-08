<?php ?>
<nav class="navbar navbar-expand-xs navbar-dark fixed-top">
  <?php 
echo $this->Html->link(
    $this->Html->image("smallLogo.png", ["class"=>"maxHeight60px"]),
    "#", array('escape' => false)
);
  ?>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show">
    <?php echo $this->Html->link(__("Services"),"#service", ["class"=>"coverLink"]);?>
      </li>
     <?php /*
      <li class="nav-item">
                <?php echo $this->Html->link(__("À propos"),"#apropos", ["class"=>"coverLink"]);?>

      </li>
      */?>
      <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show">
                <?php echo $this->Html->link(__("Équipe"),"#equipe", ["class"=>"coverLink"]);?>

      </li>
      <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show">
          <?php echo $this->Html->link(__("Contact"),"#contact", ["class"=>"coverLink"]);?>
      </li>
    </ul>
  </div>
</nav>
