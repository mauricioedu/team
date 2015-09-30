<?php include('produto.php'); 

if (isset($_GET['id'])) {
	$product_id = $_GET['id'];
	if (isset($product_id)) {
		$product = $products[$product_id];
	}
}
if (!isset($product)) {
	header("Location:camisa.php");
	exit();
}
$section = "camisadet";
$paginaTitulo=$product["name"];
include("header.php");
?>
	<div class="section page">
		
		<div class="wrapper">
			<div class="breadcrumb">
				<a href="camisa.php">Camisa Detalhes</a> &gt; <?php echo $product["name"];?>
			</div>
			<div class="shirt-picture">
				<span>
					<img src="<?php echo $product["img"];?>"alt="<?php echo $product["name"];?>">
				</span>
			</div>
			<div class="shirt-details">
				<h1>R$<?php echo $product["price"];?>,00 <?php echo $product["name"];?></h1>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="C826LBXBT6AGE">
					<input type="hidden" name="item_name" value="<?php echo $product["name"];?>">
					<table>
					<tr><th>
						<input type="hidden" name="on0" value="Tamanho">
						<label for="os0">Tamanho</label>
						</th>
						<td><select name="os0" id="os0">
						<option value="Pequeno">Pequeno R$20,00</option>
						<option value="Medio">Medio R$20,00</option>
						<option value="Grande">Grande R$20,00</option>
					</select> </td></tr>
					</table>
					<input type="submit" value="Adiciona o Cartao" name="submit" >
				</form>
			</div>
		</div>
	</div>
<?php include("footer.php");?>	