<!DOCTYPE html>
<html>
    <head>
        <title>Product Order Form</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>Product Order Form</h1>
        <?php
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            if($s==="1"){
                echo "<p style='color:green;'>Your order has been saved successfully.</p>";
            }else if($s==="0"){
                echo "<p style='color:red;'>An error occurred. Please try again.</p>";
            }
        ?>
        <form action="process_order.php" method="POST">
            <label>Product Name:</label>
            <input name="productName" type="text"><br>

            <label>Quantity:</label>
            <input name="quantity" type="number" min="1"><br>

            <label>Shipping Address:</label><br>
            <textarea name="shippingA" rows="4" cols="50"></textarea><br>

            <label>Preferred Delivery Days:</label><br>
            <input name="deliveryDay[]" type="checkbox" value="monday" id="monday">
            <label for="monday">Monday</label><br>

            <input name="deliveryDay[]" type="checkbox" value="wednesday" id="wednesday">
            <label for="wednesday">Wednesday</label><br>

            <input name="deliveryDay[]" type="checkbox" value="friday" id="friday">
            <label for="friday">Friday</label><br>

            <label>Payment Method:</label><br>
            <input name="payment" type="radio" value="credit_card" id="credit_card">
            <label for="credit_card">Credit Card</label><br>

            <input name="payment" type="radio" value="paypal" id="paypal">
            <label for="paypal">PayPal</label><br>

            <input name="payment" type="radio" value="bank_transfer" id="bank_transfer">
            <label for="bank_transfer">Bank Transfer</label><br>
            <div class="center-button">
                <input type="submit" value="Place Order">
            </div>
        </form>
    </body>
</html>
