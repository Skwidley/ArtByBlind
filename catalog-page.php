<!DOCTYPE>
<?php 

include("functions/functions.php");

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Catalog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Art By Blind</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="catalog-page.php">Catalog</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.php">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Catalog</h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="products">
                                <div class="row no-gutters">
								
									<?php 
									$get_pro = "select * from products";

									$run_pro = mysqli_query($con, $get_pro); 

									while($row_pro=mysqli_fetch_array($run_pro)){

									$pro_id = $row_pro['product_id'];
									$pro_price = $row_pro['product_price'];
									$pro_image = $row_pro['product_image'];

									echo "
										<div class='col-12 col-md-6 col-lg-4'>
											<div class='clean-product-item'>
													<div class='image'><a href='#'><img class='img-fluid d-block mx-auto' src='productImages/$pro_image'></a></div>
													<div class='product-name'><a href='#'>$pro_name</a></div>
													<div class='price'>]<h3>$ $pro_price</h3>]</div>
											</div>
										</div>
										";
									}
									?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>