<?php
    /* $doc = new DOMDocument; 
    $doc->load('../../datasource.xml');

    $thedocument = $doc->documentElement;

    //this gives you a list of the messages
    $list = $thedocument->getElementsByTagName('product');

    //figure out which ones you want -- assign it to a variable (ie: $nodeToRemove )
    $nodeToRemove = null;
    foreach ($list as $domElement){
        $attrValue = $domElement->getAttribute('id');
        if ($attrValue == 'PROD00004') {
            $nodeToRemove = $domElement; //will only remember last one- but this is just an example :)
        }
    }

    //Now remove it.
    if ($nodeToRemove != null)
    $thedocument->removeChild($nodeToRemove);

    echo $doc->saveXML();  */
?>