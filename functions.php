<?php 
$con = mysqli_connect("aan54krr6n2so5.cz0raxnjne6x.us-east-2.rds.amazonaws.com","Admin","Password01","artbyblind");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }
  function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

function getPro(){

	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){

	global $con; 
	
	$get_pro = "select * from products order by RAND() LIMIT 0,12";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro))
	{

		$pro_id = $row_pro['product_id'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];

		echo "
		<div class='col-12 col-md-6 col-lg-4'>
			<div class='clean-product-item'>
				<div class='image'><a href='#'><img class='img-fluid d-block mx-auto' src='productImages/$pro_image'></a></div>
				<div class='product-name'><a href='#'>$pro_name</a></div>
				<div class='price'><h3>$ $pro_price</h3></div>
			</div>
		</div>
		";
		}
	}
}

}
?>