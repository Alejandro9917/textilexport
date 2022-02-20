<?php $title='Inicio'; ?>
<?php $index='index.php'; ?>
<?php $about='pages/aboutUs.php'; ?>
<?php $css='resources/css/store.css'; ?>

<?php require("resources/templates/header-template.php"); ?>

    <?php $datasource = simplexml_load_file("../datasource.xml") or die("Error: Cannot create object"); ?>

    <?php require("resources/components/productModal-component.php"); ?>
    <?php require("resources/components/store-component.php"); ?>

<?php require("resources/templates/footer-template.php"); ?>