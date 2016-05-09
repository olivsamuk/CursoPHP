
<?php 
include("config.php");
 ?>


 <!DOCTYPE html>
<html>
<head>
	
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Projeto PHP</title>
</head>
<body>
<div id="margem">
		<div id="header"><h1>Curso de PHP</h1></div>
		<div id="container">
			<div id="menu">
				<ul>
				    <li>Link 1</li>
				    <li>Link 2</li>
				    <li>Link 3</li>
				    <li>Link 4</li>
				</ul>
				<form>
					Texto:<br/>
					<input type="text" /><br />
					Combo box:<br />
					<select>
						<option>Opção 1</option>
						<option>Opção 2</option>
						<option>Opção 3</option>
						<option>Opção 4</option>
						<option>Opção 5</option>
					</select>
					<br />
					Radio Button:<br />
					<input type="radio" name="sexo" value="1" /> Masculino<br/>
  				<input type="radio" name="sexo" value="0" /> Feminino<br/>
  				
  				Checkbox: <br />

  				<input type="checkbox" name="y[]" checked="true" /> Melão <br />
  				<input type="checkbox" name="y[]" /> Melancia <br />
  				<input type="checkbox" name="y[]" checked="true" /> Uva <br />
  				<input type="checkbox" name="y[]" /> Manga <br />

  				Textarea:<br />
  				<textarea rows="10" cols="25"></textarea>

					
					<input type="submit" value="Buscar" />					
				</form>
			</div>
			<div id="main">
				<p>
					<b>The standard Lorem Ipsum passage, used since the 1500s</b><br />

	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

	Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC

	"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
				</p>
			</div>
		</div>
		<div id="footer">
			<h4>Todos os direitos reservados<br /> Unifap 2016</h4>
		</div>
	</div>
</body>
</html> 