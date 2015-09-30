<?php

function get_list_view_html($product_id,$product){
       
        $camisetas="";
        $camisetas=$camisetas . "<li>";
        $camisetas=$camisetas . '<a href="camisadet.php?id='. $product_id. '">';
        $camisetas=$camisetas . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
        $camisetas=$camisetas . "<p>Ver Detalhes</p>";
        $camisetas=$camisetas . "</a>";
        $camisetas=$camisetas . "</li>";
            return $camisetas;
}

$products = array();
$products[101] = array(
    "name" => "Logo Shirt, Red",
    "img" => "img/shirts/shirt-101.jpg",
    "price" => 18   
);
$products[102] = array(
    "name" => "Mike the Frog Shirt, Black",
    "img" => "img/shirts/shirt-102.jpg",
    "price" => 20
);
$products[103] = array(
    "name" => "Mike the Frog Shirt, Blue",
    "img" => "img/shirts/shirt-103.jpg",    
    "price" => 20
);
$products[104] = array(
    "name" => "Logo Shirt, Green",
    "img" => "img/shirts/shirt-104.jpg",    
    "price" => 18);
$products[105] = array(
    "name" => "Mike the Frog Shirt, Yellow",
    "img" => "img/shirts/shirt-105.jpg",    
    "price" => 25
);
$products[106] = array(
    "name" => "Logo Shirt, Gray",
    "img" => "img/shirts/shirt-106.jpg",    
    "price" => 20
);
$products[107] = array(
    "name" => "Logo Shirt, Turquoise",
    "img" => "img/shirts/shirt-107.jpg",    
    "price" => 20
);
$products[108] = array(
    "name" => "Logo Shirt, Orange",
    "img" => "img/shirts/shirt-108.jpg",    
    "price" => 25
);

?>