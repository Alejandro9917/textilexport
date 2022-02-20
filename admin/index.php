<?php 
    //Vars
    $title='Dashboard'; 

    //XML import
    //$datasource = simplexml_load_file("../datasource.xml") or die("Error: No se pudo encontrar el datasource");
?>


<?php require("resources/templates/header-template.php"); ?>

    <?php require("resources/templates/dashboard-template.php"); ?>

        <?php require("resources/components/addProduct-component.php"); ?>
            <?php require("resources/components/formProduct-component.php"); ?>
        <?php require("resources/components/addProductFooter-component.php"); ?>

        <?php require("resources/components/productList-component.php"); ?>

    <?php require("resources/templates/dashboardFooter-template.php"); ?>

<?php require("resources/templates/footer-template.php"); ?>