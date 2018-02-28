<?php $title = 'Un billet pour Alaska | Jean Forteroche'; ?>

<?php ob_start(); ?>

<?php require('./src/view/nav.php'); ?>
<?php require('./src/view/header.php'); ?>
<?php require('./src/view/about.php'); ?>
<?php require('./src/view/bibliographie.php'); ?>
<?php require('./src/view/testimonial.php'); ?>
<?php require('./src/view/chapitre.php'); ?>
<?php require('./src/view/contact.php'); ?>
<?php require('./src/view/footer.php'); ?>
<?php $content = ob_get_clean(); ?>
<?php require('./src/view/template.php'); ?>
