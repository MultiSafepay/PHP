<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Load templates
include("views/header.php");

if(isset($_GET['view'])){
	include("views/".$_GET['view'].'.php');
}else{
	include("views/content.php");
}
include("views/footer.php");
?>