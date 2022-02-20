<?php
    //Validations 
    require("Validations.php");

    $validation = new Validations();

    if(isset($_POST)){
        extract($_POST);
        $errors = array();

        if(!isset($id) || $validation->isEmpty($id)){
            array_push($errors, "Debes ingresar el id del producto");
        } else if(!$validation->isId($id)){
            array_push($errors, "El formarto de ID no coindice con PROD#####");
        }
        if(!isset($name) || $validation->isEmpty($name)){
            array_push($errors, "Debes ingresar el nombre del producto");
        } else if(!$validation->isText($name)){
            array_push($errors, "El formarto del nombre no coincide");
        }
        if(!isset($description) || $validation->isEmpty($description)){
            array_push($errors, "Debes ingresar la descripción del producto");
        } else if(!$validation->isText($description)){
            array_push($errors, "El formarto de la descripción no coincide");
        }
        if(!isset($category) || $validation->isEmpty($category)){
            array_push($errors, "Debes ingresar la cateogría del producto");
        }
        if(!isset($image) || $validation->isEmpty($image)){
            array_push($errors, "Debes ingresar la imagen del producto");
        } else if(!$validation->isUrl($image)){
            array_push($errors, "El formarto de la imagen no coincide con una URL de imugur");
        }
        if(!isset($stock) || $validation->isEmpty($stock)){
            array_push($errors, "Debes ingresar las existencias del producto");
        } else if(!$validation->isInteger($stock)){
            array_push($errors, "El formarto de las existencias no coincide");
        }
        if(!isset($price) || $validation->isEmpty($price)){
            array_push($errors, "Debes ingresar el precio del producto");
        } else if(!$validation->isPrice($price)){
            array_push($errors, "El formarto del precio no coincide");
        }

        try{
            if(count($errors)>0 && count($_POST)>0){ 
                $product = $datasource->addChild("product");
                $product->addChild("id", $id);
                $product->addChild("name", $name);
                $product->addChild("description", $description);
                $product->addChild("category", $category);
                $product->addChild("image", $image);
                $product->addChild("stock", $stock);
                $product->addChild("price", $price);
                file_put_contents('../ejemplo.txt', $datasource) or print_r(error_get_last());
            } 
        }

        catch(Exception $ex){
            echo $ex;
        }

        var_dump($errors);
        var_dump($datasource);
    }    
?>