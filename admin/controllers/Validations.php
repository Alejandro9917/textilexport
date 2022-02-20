<?php 
    class validations{
        function isEmpty($var){
            return empty(trim($var));
        }

        function isId($var){
            return preg_match('/^PROD[0-9]{5}$/', $var);
        }

        function isText($var){
            return preg_match('/^[a-zA-Z ]+$/', $var);
        }

        function isPrice($var){
            return preg_match('/^[+-]?[0-9]{1,3}(?:,?[0-9]{3})*\.[0-9]{2}$/', $var);
        }

        function isInteger($var){
            return preg_match('/^\d+$/', $var);
        }

        function isUrl($var){
            return preg_match('/(?>https?:)?\/\/(\w+\.)?imgur\.com\/(\S*)(\.[a-zA-Z]{3})/', $var);
        }
    }
?>