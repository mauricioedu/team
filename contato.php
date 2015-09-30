<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name = trim($_POST["name"]);	
	$email = trim($_POST["email"]);
	$messagem = trim($_POST["messagem"]);
	

	 if ($name == "" OR $email == "" OR $messagem == "") {
        echo "Preencha corretamente o seu nome,email, e a sua messagem";
        exit;
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }

  

    require_once("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)){
        echo "Voce nao especifico um endereco de email valido.";
        exit;
    }

	$emailbody=$emailbody . "Nome :" . $name ."\n";
	$emailbody=$emailbody . "Email :" . $email ."\n";
	$emailbody=$emailbody . "Messagem: " . $messagem ."\n";

		header("Location: contato.php?status=thanks");
		exit();
	} ?>
<?php 

$paginaTitulo = "Contato";
$section = "contato";
include('header.php');?>

	<div class="section page">	

		<div class="wrapper"> 		
			<h1>Contato</h1>
 
			<?php if(isset($_GET["status"]) AND $_GET["status"]=="thanks") { ?>

			<p>Obrigado pelo email mande messagem sempre</p>
			
			<?php } else {?>

			<p>Entre em contato para mais informações:</p>
				<form method="post" action="contato.php">
					<table>
						<tr>
							<th>
								<label for="name">Nome</label>
							</th>
							<td>
								<input type="text" name="name" id="name">
						    </td>
						</tr>
							<tr>
							<th>
								<label for="email">Email</label>
							</th>
							<td>
								<input type="text" name="email" id="email">
						    </td>
						</tr>
							<tr>
							<th>
								<label for="messagem">Messagem</label>
							</th>
							<td>
								<textarea type="text" name="messagem" id="messagem"></textarea>
						    </td>
						</tr>
					</table>
					<input type="submit" value="Enviar">


				</form>	
			<?php }?>	
			</div>


	</div>

	<?php include('footer.php');?>