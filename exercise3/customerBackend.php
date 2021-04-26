<html>
<body>
<?php

echo 'WELCOME TO THE PENCIL SHOP, YOUR PASSWORD IS: ' . $_POST['pwd']  . '<br><br>';


echo "Here is your receipt, thank you for shopping with us : " . '<br>';

$QuantP1 = $_POST['QuantP1'];
$QuantP2 = $_POST['QuantP2'];
$QuantP3 = $_POST['QuantP3'];

$shippingType = $_POST['shipping'];
$shippingPrice = 0;

if($shippingType == '7day')
{
	$shippingPrice = 0;
}
if($shippingType == 'overnight')
{
	$shippingPrice = 50;
}

if($shippingType == '3day')
{
	$shippingPrice = 5;
}


?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
<table style="width:100%">
  <caption>Receipt</caption>
  <tr>
<th> </th>
    <th>Quantity</th>
    <th>Cost Per Item</th>
<th>Sub Total</th>
  </tr>
  <tr>
    <th>#2 Pencil</th>
    <td><?php echo $QuantP1?></td>
    <td>$3</td>
<td>$<?php 
$subtotal1 = $QuantP1 * 3;
echo $subtotal1?> </td>
  </tr>
  <tr>
    <th>Mechanical Pencil</th>
    <td><?php echo $QuantP2?></td>
<td>$5</td>
<td>$<?php
$subtotal2 = $QuantP2 * 5;
 echo $subtotal2?> </td>
  </tr>
<tr>
    <th>Unsharpened Pencil</th>
    <td><?php echo $QuantP3?></td>
<td>$2</td>
<td>$<?php 
$subtotal3 = $QuantP3 * 2;
echo $subtotal3?> </td>
  </tr>

 <tr>
    <th>Shipping</th>
    <td><?php echo $shippingType?></td>
    <td><?php echo '$' . $shippingPrice?></td>
<td><?php echo '$' . $shippingPrice?> </td>
  </tr>
<tr>
    <th>GRAND TOTAL: $<?php echo $shippingPrice + $subtotal1 + $subtotal2 + $subtotal3?></th>
   
      </tr>



</table>






            

    



</body>

</html>
