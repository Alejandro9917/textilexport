<?php 
    //Vars
    $title='Dashboard'; 

    //XML import
    $datasource = simplexml_load_file("../datasource.xml") or die("Error: No se pudo encontrar el datasource");

    //Iniciando variables de session
    session_start();
?>

<?php require("resources/templates/header-template.php"); ?>

    <?php require("resources/templates/dashboard-template.php"); ?>

        <?php 
            if(isset($_SESSION['errors']) && $_SESSION['post'] == true){
                echo "<div class='mx-3 mt-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative'><ul>";  
                    foreach($_SESSION['errors'] as $error){
                        echo "<li><span class='block sm:inline'>$error</span></li>";
                    }
                echo "</ul></div>";
            }
        ?>

        <?php require("resources/components/addProduct-component.php"); ?>
            <?php require("resources/components/formProduct-component.php"); ?>
        <?php require("resources/components/addProductFooter-component.php"); ?>

        <?php require("resources/components/productList-component.php"); ?>

    <?php require("resources/templates/dashboardFooter-template.php"); $_SESSION['post'] = false;?>

<?php require("resources/templates/footer-template.php");?>