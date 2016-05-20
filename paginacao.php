<ul class="pagination">
    
<?php 
	$quant_pg = ceil($quantreg/$numreg);
	$quant_pg++;

	if ($_GET['pg'] > 0) {
		echo "<li class='active'><a href=".$PHP_SELF."?pg=".(@$_GET['pg']-1) .">&laquo; Anterior</a></li>";
	}else{
		echo "<li class='disabled'><a href=''>&laquo; anterior</a></li>";
	}

	for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
			// Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
		if (@$_GET['pg'] == ($i_pg-1)) { 
			echo "<li class='disabled'><a href=''>$i_pg</a></li>";
		} else {
			$i_pg2 = $i_pg-1;
			echo "<li class='active'><a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a></li>";
		}
	}
	
	if (($pg+2) < $quant_pg) { 
		echo "<li class='active'><a href=".$PHP_SELF."?pg=".(@$_GET['pg']+1)." class=pg>próximo &raquo;</a></li>";
	} else { 
		echo "<li class='disabled'><a href=''>próximo &raquo;</a></li>";
	}



 ?>
 </ul>