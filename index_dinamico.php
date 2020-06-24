<?php

     $paginas = ['home'=>'Minha página home aqui', 'sobre'=>'Estou na minha página Sobre', 'contato'=>'<form><input type "text" placeholder="Seu nome..."/></form>','FAQ'=>'perguntas frequentes',
     'loja'=>'loja'];

    
     ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Youtube</title>
	<style type="text/css">
		*{
			margin:0;
			padding: 0;
			box-sizing: border-box;
		}

		header{
			background-color: #2E8B57;
			padding: 8px 10px;
			text-align: center;
		}

		a{
			display: inline-block;
			margin: 0 10px;
			color: white;
			font-size: 17px;
		}

		section{
			max-width: 960px;
			margin: 20px auto;
			padding: 0 2%;
		}

		h2{
			background-color: #2E8B57;
			color: white;
			padding: 8px 10px;
		}

		p{
			color: black;
			margin-top: 10px;
			font-size: 16px;
		}

	</style>
</head>
<body>
	<header>
		<?php
		foreach ($paginas as $key => $value) {
			echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
		
		}
		?>
	</header>
	<section>
		<h2>
			<?php

			$pagina = (isset($_GET['page']) ? $_GET['page'] : 'home');

			if (!array_key_exists($pagina, $paginas)){
				$pagina = 'home';
			}

			echo ucfirst($pagina);
			/*ucfirst = deixa a primeira letra em maiúscula. Retorna o mesmo valor mas, a primeira letra vai estar em maiúscula

            ! = oposto da função requerida
            */
			?>
		</h2>
		<p><?php echo $paginas[$pagina]; ?></p>
	</section>
	
		Teste Simples de uma página de um site dinâmico, reproduzido para ampliar o conhimento da ferramenta web.
	
</body>
 </html>