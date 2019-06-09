<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = "Fortin Pomerleau";
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title>    
        <?= $cakeDescription ?>
    </title>
<meta property="og:title" content="Fortin Pomerleau" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://fortinpomerleau.ca" />
<meta property="og:image" content="https://fortinpomerleau.ca/img/og.png" />
<meta property="og:description" content="Notre équipe d'experts expérimentés peut aller vous rencontrer en entreprise pour discuter de vos besoins en financement et des solutions disponibles." />
<meta property="fb:app_id" content="2119177981732931" />
    
    
    <?php echo $this->Html->meta ( 'keywords', "Fortin, Pomerleau, Fortin Pomerleau, Fortin et Pomerleau, Financement, 
Financement d'entreprise, consultation, finance, entreprise, immobilier, financement d'entreprise, financement immobilier, 
financement d'entreprise et d'immobilier, Jean Fortin, Jonathan Pomerleau, Jean, Jonathan, entreprise, Québec, Quebec, 
est du Québec, banque, pret, prêt" );?>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('bootstrap/bootstrap.min.css') ?>
    <?= $this->Html->css('custom.css') ?>
    <link rel="stylesheet" href="https://use.typekit.net/fgc6ana.css">


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>

    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <?= $this->fetch('content') ?>
    </div>
	<footer> </footer>
        <?= $this->Html->script('jquery.js') ?>
    <?= $this->Html->script('bootstrap/bootstrap.min.js') ?>
            <?= $this->fetch('script') ?>

</body>
</html>
