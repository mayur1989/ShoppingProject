<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products</title>
</head>
<body>
<?php
include_once('header.php');
?>
<div align="center" style="position:absolute; top:80px; bottom:0px; left:0px; right:0px; overflow:auto; height:100%; width:100%">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
		$i=0;
			foreach ($products as $product){

				$id = $product->id;
				$name = $product->title;
				$description = $product->description;
				$price = $product->price;
		?>
    	<tr>
        	<td><img src="<?php echo $product->image?>" alt="Product Image" width="100" height="200"/></td>
            <td><b><a href="<?php echo site_url("products/productdetail/$product->id");?>"><?php echo $name; ?></a></b><br />
            		<?php echo $description; ?><br />
                    Price:<big style="color:green">
                    $<?php echo $price; ?></big><br /><br />
                    <?php
					echo form_open('cart/add');
					echo form_hidden('id', $id);
					echo form_hidden('name', $name);
					echo form_hidden('price', $price);
					echo form_submit('action', 'Add to Cart');
					echo form_close();
					?>

			</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php 
    	} ?>
    </table>
</div>
</body>
<?php
include_once('footer.php');
?>
</html>
