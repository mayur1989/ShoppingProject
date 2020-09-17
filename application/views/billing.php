<?php
$grand_total = 0;

if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
		$grand_total = $grand_total + $item['subtotal'];
	endforeach;
endif;
?>
<!DOCTYPE>
<html>
<head>

<title>Billing Info</title>
</head>
<?php
include_once('header.php');
?>
<body>
    <br/><br/><br/><br/><br/><br/>
<form name="billing" method="post" action="<?php echo base_url().'billing/save_order' ?>" >
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0" cellpadding="2px">
            <tr><td>Payment Type:</td><td><strong>COD</strong></td></tr>
        	<tr><td>Order Total:</td><td><strong><?php echo number_format($grand_total,2); ?>Rs.</strong></td><input type="hidden" name="ordertot" value="<?php echo $grand_total;?>"></tr>
            <tr><td>Customer Name:</td><td><input type="text" name="name" required/></td></tr>
            <tr><td>Address:</td><td><input type="text" name="address" required/></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" required/></td></tr>
            <tr><td>Phone:</td><td><input type="text" name="phone" required/></td></tr>
            <tr><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
        </table>
	</div>
</form>
</body>
<?php
include_once('footer.php');
?>
</html>