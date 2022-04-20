<?php

function getMenu($vertical=TRUE,$menu = array("Главная","История","Форум")){
    if($vertical==TRUE)
    {
        echo "<h1>".$menu["0"]." ".$menu["1"]." ". $menu["2"]."</h1>";
    }
    elseif($vertical==FALSE) {
        echo "<h1>".$menu["0"]."<br>".$menu["1"]."<br>".$menu["2"]."</h1>";
    }
}
getMenu(False,array(0 => "Home", 1 => "History", 2 => "Forum"));
getMenu();
