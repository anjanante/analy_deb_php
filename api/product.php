<?php
/**
 * Created By Storm Nant 2022
 * User: Nantenaina
 * Date: 13/06/2023
 * Time: 17:59
 */

include($_SERVER["DOCUMENT_ROOT"]."/config/db_connect.php");
$request_method = $_SERVER["REQUEST_METHOD"];
var_dump($request_method);

switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id"])) {
            // Récupérer un seul produit
            $id = intval($_GET["id"]);
            getProduct($id);
        } else {
            // Récupérer tous les produits
            getProducts();
        }
        break;
    case 'POST':
        // Ajouter un produit
        AddProduct();
        break;
    default:
        // Requête invalide
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

/**
 * get all products
 */
function getProducts()
{
    var_dump('Get all product');
    global $oConn;
    $query = "SELECT * FROM produit";
    $stmt       = $oConn->query($query);
    $result     = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($result, JSON_PRETTY_PRINT);
}

/**
 * get one product
 * @param int $id
 */
function getProduct($id=0)
{
    var_dump('Get product '.$id);
    global $oConn;
    $query = "SELECT * FROM produit Where id = :id";
    $stmt       = $oConn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result     = $stmt->fetch(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($result, JSON_PRETTY_PRINT);
}


function AddProduct()
{
    global $oConn;
    $name   = $_POST["name"];
    $description = $_POST["description"];
    $price  = $_POST["price"];
    $category   = $_POST["category"];

    echo $query = "INSERT INTO produit(name, description, price, category_id, created, modified) VALUES(:name, :description, :price, :category, NOW(), NOW())";

    $stmt       = $oConn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':category', $category);
    if ($stmt->execute()) {
        $response = array(
            'status' => 1,
            'status_message' => 'Product successfully added.'
        );
    } else {
        $response = array(
            'status' => 0,
            'status_message' => 'Error!.' . mysqli_error($oConn)
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
}

