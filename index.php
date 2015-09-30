<?php include("produto.php");?>
<?php 
	$paginaTitulo =	"Pagina Principal";
	$section="index";
	include('header.php');?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Camisas em Destaque</h2>

				<ul class="products">

					<?php 
					$total_produtos=count($products);
					$posicao=0;
					$list_view_html="";
					foreach($products as $product_id => $product) {
							$posicao=$posicao+1;
							if ($total_produtos - $posicao < 4) {
								$list_view_html =get_list_view_html($product_id,$product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>							
				</ul>

			</div>

		</div>

	

	<?php include('footer.php');?>