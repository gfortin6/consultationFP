<?php ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <?php echo $this->Html->link("accueil", "#", ['class'=>"navbar-brand"])?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <?php echo $this->Html->link(__("Service"),"#service");?>
      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("À propos"),"#apropos");?>

      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("Info"),"#info");?>

      </li>
      <li class="nav-item">
                <?php echo $this->Html->link(__("Contact"),"#contact");?>

      </li>


    </ul>
  </div>
</nav>