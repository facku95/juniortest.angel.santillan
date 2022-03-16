<?php 
 
$id=(isset($_POST['id']))?$_POST['id']:"";
$name=(isset($_POST['nombre']))?$_POST['nombre']:"";
$price=(isset($_POST['precio']))?$_POST['precio']:"";
$type=(isset($_POST['categoria']))?$_POST['categoria']:"";
$action=(isset($_POST['action']))?$_POST['action']:"";


if($action=="save"){
    $sentenciaSQl=$conection->prepare("INSERT INTO product (sku,name,price,type) VALUES (:sku,:name,:price,:type);");
    $sentenciaSQl->bindParam(':sku',$id);
    $sentenciaSQl->bindParam(':name',$name);
    $sentenciaSQl->bindParam(':price',$price);
    $sentenciaSQl->bindParam(':type',$type);
    if($id!=null){
    $sentenciaSQl->execute();
    }
    
}
$sentenciaSQl=$conection->prepare("SELECT * FROM product");
$sentenciaSQl->execute();
$list=$sentenciaSQl->fetchAll(PDO::FETCH_ASSOC);




?>