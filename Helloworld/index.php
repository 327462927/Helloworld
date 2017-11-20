<?php

testXdebug();

function testXdebug() {

       requireFile();

}

function requireFile() {

       require_once('abc.php');
       require_once('bbc.php');

}

?>