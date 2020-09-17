    <div id="header" style="position:absolute; height:60px; width: 100%; overflow:hidden; text-align: center; background-color: #333;vertical-align: middle;display:block;"> 
    	<span style="color: white;float:left;"><h1><a style="color : white;" href="<?php echo site_url("products");?>">Online Shopping Portal</a></h1></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<?php 
    	if($this->session->userdata('user')!=""){
    		?>
    		<span><p style="color: white;">Welcome&nbsp;&nbsp;<?php echo $this->session->userdata('user');?>&nbsp;&nbsp;
    		<a style="color: blue;" href="<?php echo site_url("login/logoutAction");?>">Logout</a>
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: white;" href="<?php echo site_url("cart");?>">Cart</a></p></span>
		<?php
		}else{
		?>
		   <span> <a style="color: white;" href="<?php echo site_url("login");?>">Login</a>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<a style="color: white;" href="<?php echo site_url("cart");?>">Cart</a></span>
		<?php
		}
		?>
    </div>