<?php
include './Order.php';
include './Dbconnector.php';

$product = isset($_POST["productName"]) ? filter_var($_POST["productName"], FILTER_SANITIZE_STRING) : "";
$quantity = isset($_POST["quantity"]) ? filter_var($_POST["quantity"], FILTER_VALIDATE_INT) : 0;
$shippingA = isset($_POST["shippingA"]) ? filter_var($_POST["shippingA"], FILTER_SANITIZE_STRING) : "";
$deliveryDay = isset($_POST["deliveryDay"]) ? filter_var_array($_POST["deliveryDay"], FILTER_SANITIZE_STRING) : "";
$payment = isset($_POST["payment"]) ? filter_var($_POST["payment"],FILTER_SANITIZE_STRING) : "";

$shippingStr = implode(",",$deliveryDay);
$db = new Dbconnector();
$conn = $db->getConnection();
$order = new Order($product, $quantity, $shippingA, $shippingStr, $payment);
$result = $order->save($conn);

if ($result) {
    header("Location: ./index.php?s=1");
    exit();
} else {
    header("Location: ./index.php?s=0");
    exit();
}
?>

    
    
