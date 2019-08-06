<?php
session_start();
require_once("controller.php");
$db_handle = new Controller();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
            $productByName=$db_handle->runQuery("SELECT * FROM seedlings WHERE s_name='".$_GET["s_name"]."'");
			
	$itemArray = array($productByName[0]["s_name"]=>array('name'=>$productByName[0]["s_name"], 's_name'=>$productByName[0]["s_name"], 'quantity'=>$_POST["quantity"], 'price'=>$productByName[0]["price"], 'path'=>$productByName[0]["path"]));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByName[0]["s_name"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByName[0]["s_name"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<head>


<link rel="stylesheet" href="../../frontend/css/shop.css">
</head>

<body>
    <div id="shopping-cart">
        
        <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
        <?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>
<form method="POST" action="cart.php">
        <!-- <table class="tbl-cart" cellpadding="10" cellspacing="1"> -->
        <table class="table table-sm ">
            <tbody>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col" >Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Price</th>
                    <th scope="col">Remove</th>
                </tr>
                <?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
                <tr>
                    <td><?php echo $item["s_name"]; ?></td>
                    <td scope="col"><?php echo $item["quantity"]; ?></td>
                    <td scope="col"><?php echo "Ksh. ".$item["price"]; ?></td>
                    <td scope="col"><?php echo "Ksh ". number_format($item_price,2); ?></td>
                    <td scope="col"><a href="cart.php?action=remove&code=<?php echo $item["name"]; ?>"
                            class="btnRemoveAction"><img src="" alt="Delete" /></a></td>
                </tr>
                <?php
                include 'crfunctions.php';

                $t = time();
				$total_quantity += $item["quantity"];
                $total_price += ($item["price"]*$item["quantity"]);
                $upn = "254"."715210578";
                $smss = "Hi Admin. You've receive order reguest. please check the site!"."
                Total Quantity:".$total_quantity."
                Total Price:".$total_price." ";

                sml($upn,$smss);
		}
		?>

                <tr>
                    <td scope="col" align="right">Total:</td>
                    <td align="centre"><?php echo $total_quantity; ?></td>
                    <td align="centre" colspan="2"><strong><?php echo "Ksh. ".number_format($total_price, 2); ?></strong>
                    </td>
                    <td>
                    
                    
                    <button type="submit" name="order" id="btnEmpty">Order</button>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        </form>
        <?php
} else {
?>
        <div class="no-records">Your Cart is Empty</div>
        <?php 
}
?>
    </div>

    <div id="product-grid">
        <div class="txt-heading">Products</div>
        <?php
	$product_array = $db_handle->runQuery("SELECT * FROM seedlings ORDER BY category ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
        <div class="product-item">
            <form method="post" action="cart.php?action=add&s_name=<?php echo $product_array[$key]["s_name"]; ?>">
                <div class="product-image"><img src="<?php echo $product_array[$key]["path"]; ?>" width="177px" height="75px"></div>
                <div class="product-tile-footer">
                    <div class="product-title"><?php echo $product_array[$key]["s_name"]; ?></div>
                    <div class="product-price"><?php echo "Ksh.".$product_array[$key]["price"]; ?></div>
                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1"
                            size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                </div>
            </form>
        </div>
        <?php
		}
	}
	?>
    </div>
</body>

</html>