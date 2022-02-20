<?php
    $doc = new DOMDocument; 
    $doc->load('../../datasource.xml');

    $thedocument = $doc->documentElement;

    //this gives you a list of the messages
    $list = $thedocument->getElementsByTagName('message');

    //figure out which ones you want -- assign it to a variable (ie: $nodeToRemove )
    $nodeToRemove = null;
    foreach ($list as $domElement){
    $attrValue = $domElement->getAttribute('time');
    if ($attrValue == 'VALUEYOUCAREABOUT') {
        $nodeToRemove = $domElement; //will only remember last one- but this is just an example :)
    }
    }

    //Now remove it.
    if ($nodeToRemove != null)
    $thedocument->removeChild($nodeToRemove);

    echo $doc->saveXML(); 
?>