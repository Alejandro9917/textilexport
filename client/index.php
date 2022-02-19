<?php $title='Inicio'; ?>

<?php require("resources/templates/header-template.php"); ?>

    <h1>Hola mundo</h1>

    <?php 
        $xml=simplexml_load_file("../data.xml") or die("Error: Cannot create object");
        print_r($xml);
    ?>

<?php require("resources/templates/footer-template.php"); ?>