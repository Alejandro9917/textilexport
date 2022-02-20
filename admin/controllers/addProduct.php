<?php
    //Validations 
    require("Validations.php");

    $validation = new validations();
    $products = simplexml_load_file("../../datasource.xml") or die("Error: No se pudo encontrar el datasource");
    $product = $products->addChild("product");

    if(isset($_POST)){
        extract($_POST);
        $errors = array();

        if(!isset($id) || $validation->isEmpty($id)){
            array_push($errors, "Debes ingresar el id del producto");
        } else if(!$validation->isId($id)){
            array_push($errors, "El formarto de ID no coindice con PROD#####");
        } else{$product->addChild("id", $id);}
        if(!isset($name) || $validation->isEmpty($name)){
            array_push($errors, "Debes ingresar el nombre del producto");
        } else if(!$validation->isText($name)){
            array_push($errors, "El formarto del nombre no coincide");
        } else{$product->addChild("name", $name);}
        if(!isset($description) || $validation->isEmpty($description)){
            array_push($errors, "Debes ingresar la descripción del producto");
        } else if(!$validation->isText($description)){
            array_push($errors, "El formarto de la descripción no coincide");
        } else{$product->addChild("description", $description);}
        if(!isset($category) || $validation->isEmpty($category)){
            array_push($errors, "Debes ingresar la cateogría del producto");
        } else{$product->addChild("category", $category);}
        if(!isset($image) || $validation->isEmpty($image)){
            array_push($errors, "Debes ingresar la imagen del producto");
        } else if(!$validation->isUrl($image)){
            array_push($errors, "El formarto de la imagen no coincide con una URL de imugur");
        } else{$product->addChild("image", $image);}
        if(!isset($stock) || $validation->isEmpty($stock)){
            array_push($errors, "Debes ingresar las existencias del producto");
        } else if(!$validation->isInteger($stock)){
            array_push($errors, "El formarto de las existencias no coincide");
        } else{$product->addChild("stock", $stock);}
        if(!isset($price) || $validation->isEmpty($price)){
            array_push($errors, "Debes ingresar el precio del producto");
        } else if(!$validation->isPrice($price)){
            array_push($errors, "El formarto del precio no coincide");
        } else{$product->addChild("price", $price);}

        if(count($errors) > 0){
            session_start();
            $_SESSION['errors'] = $errors;
            header('location:../index.php');
        }

        if(count($errors) == 0 && count($_POST) > 0){
            file_put_contents('../../datasource.xml', $products->asXML()) or print_r(error_get_last());
            header('location:../index.php');
        }
    }    
?>