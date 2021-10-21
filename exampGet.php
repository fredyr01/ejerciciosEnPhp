<?php
if(isset($_GET['lang']) AND isset($_GET['course'])){
    $get = $_GET['lang'];
    $company = $_GET['course'];


    echo "My fav lang is: $get and the company name is: $company";
}


?>