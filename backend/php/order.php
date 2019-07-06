<?php 
include_once("connection.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../../bootstrap/css/bootstrap.min.css">
    <script src="./../../frontend/js/jq.js"></script>
    <script src="./../../frontend/js/order.js"></script>
</head>

<body>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead class="table-success">
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $sql = "SELECT s_name,  description, price FROM seedlings WHERE category='fruit'";
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
                    while( $product = mysqli_fetch_assoc($resultset) ) {
                ?>
                
               <tr>
                    <td data-th="Product" class="product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src=".$product['image']?>" alt="..."
                                    class="img-responsive" /></div>
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?php echo $product['s_name'] ?></h4>
                                <p><?php echo $product['description']?></p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price"><?php echo $product['price']?></td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" name="quantity" value="1" min="1">
                    </td>
                    <td data-th="Subtotal" class="text-center"><?php echo($product['price'] * 2)?></td>
                    <td data-th="remove" class="text-center"><button type="button" class="remove-item">X</button></td>

                </tr>
                
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total $<?php echo"Total"?></strong></td>
                    <td></i></a></td>
                </tr>
            </tfoot>
        </table>
    </div>




    <script src="" async defer></script>
</body>

</html>
