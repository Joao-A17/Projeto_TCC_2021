<?php
//Incluir a conexão com banco de dados
include_once('./Conexao_Banco.php');

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

if(isset($usuarios)){
	//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	$sql_procurar = "SELECT * FROM usuarios WHERE nome LIKE '%$usuarios%' LIMIT 5";
	$result_sql_procurar = mysqli_query($conexao, $sql_procurar);

	if(($result_sql_procurar) AND ($result_sql_procurar->num_rows != 0 )){
		while($registroP = mysqli_fetch_assoc($result_sql_procurar)){
			?>
		<form action="./Perfil.php" method="GET" class="form-pesquisa">			
			<?php
			$pasta_FP_busca = '../IMAGES/Foto_Perfil/'.$registroP['nome'].'/';  
			$diretorio_pasta_FP_busca = dir($pasta_FP_busca);     
			if(isset($diretorio_pasta_FP_busca) OR !isset($diretorio_pasta_FP_busca)){
				while($FP_busca = $diretorio_pasta_FP_busca -> read()){
					if ($FP_busca != '.' && $FP_busca != '..') {  
						echo "<div id='Div_buscar_img'><img src='".'../assets/IMAGES/Foto_Perfil/'.$registroP['nome'].'/'.$FP_busca."' id='FP_img_busca'></div>"; 				
				
					}
				}
			}

			?>	
			<input style='display: none' type="text" name="outro_usuario" id="outro_usuario" value=<?php echo $registroP['nome']?>>                  
			<input type="submit" name="submit" id='btn_buscar' value=<?php echo $registroP['nome']?>>
		</form> 
		<?php
		}
	}else{
		echo "<p id='P_nenhum'>Nenhum usuário encontrado ...</p>";
	}
}