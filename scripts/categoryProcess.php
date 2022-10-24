<?php 
/*categoryProcess.php*/

$categoryCode = $_GET['categoryCode'];
$query = "SELECT * FROM my_Product WHERE catCode = '$categoryCode' ORDER BY name ASC";
$category = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($category);
//echo "<table cellpadding= '4px' cellspacing= '2px' border= '2px'>"
echo "<table class = 'item'>
    <tr>
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Price</th>
    <th># in Stock</th>
    <th>Purchase?</th>
    </tr>";

for($i=1; $i<=$numRecords; $i++){
    
    $row = mysqli_fetch_array($category, MYSQLI_ASSOC);
    $productImageFile = $row['image_file'];
    $productName = $row['name'];
    $productPrice = $row['price'];
    $productPriceAsString = sprintf("$%.2f", $productPrice);
    $productQuantity = $row['quantity'];
    $productID = $row['product_id'];
    $shoppingCartURL = "pages/shoppingCart.php?productID=$productID";

    echo "<tr>
    <!-- <td align = 'center'> --><td class ='center'> 
     <img width = '70'
        src = 'images/products/$productImageFile' alt = 'Product Image'>
        </td><td>
        $productName
        </td><!-- <td align='right'> --><td class = 'right'>
        $productPriceAsString
        </td><!-- <td align='center'> --><td class = 'center'>
        $productQuantity
        </td><td>
         <a class='w3-button w3-orange w3-round w3-small'
            href= '$shoppingCartURL'>
            Buy Item
        </a>
        </td></tr>";        
}

echo "</table>";
mysqli_close($db);    

?>