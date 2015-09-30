<?php include('produto.php');?>
<?php 
$paginaTitulo = "Camisa";
$section = "camisa";
include('header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Catalogo com todas as camisas</h1>

				<ul class="products">

					<?php foreach($products as $product_id => $product) {
								echo get_list_view_html($product_id,$product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include('footer.php') ?>