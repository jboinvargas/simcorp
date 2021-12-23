<?php
include ("config.php");

//------ CRUD para tabela Empresa------------//
if ($_REQUEST['tabela'] == 'empresa'){
	$tabela = $_REQUEST['tabela'];
	
	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_empresa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_empresa.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}
	
	if (!$_REQUEST['id']){ //--- inserir arquivo
		
		$cnpj = $_REQUEST['cnpj'];
		$nome_fantasia = $_REQUEST['nome_fantasia'];
		$responsavel = $_REQUEST['responsavel'];
		$endereco = $_REQUEST['endereco'];
		$bairro = $_REQUEST['bairro'];
		$complemento = $_REQUEST['complemento'];
		$cidade = $_REQUEST['cidade'];
		$uf = $_REQUEST['uf'];
		$cep = $_REQUEST['cep'];
		$telefone = $_REQUEST['telefone'];
		$email = $_REQUEST['email'];
		$senha = $_REQUEST['senha'];
		
		$sql = "insert into ".$tabela." values(null, '$cnpj', '$nome_fantasia', '$responsavel', '$endereco', '$bairro', '$complemento', '$cidade', '$uf', '$cep', '$telefone', '$email', '$senha', 'A')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_empresa.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}
	
	if ($_REQUEST['id']){ //--- alterar arquivo
		
		$cnpj = $_REQUEST['cnpj'];
		$nome_fantasia = $_REQUEST['nome_fantasia'];
		$responsavel = $_REQUEST['responsavel'];
		$endereco = $_REQUEST['endereco'];
		$bairro = $_REQUEST['bairro'];
		$complemento = $_REQUEST['complemento'];
		$cidade = $_REQUEST['cidade'];
		$uf = $_REQUEST['uf'];
		$cep = $_REQUEST['cep'];
		$telefone = $_REQUEST['telefone'];
		$email = $_REQUEST['email'];
		$senha = $_REQUEST['senha'];
		
		$sql = "update ".$tabela." set
					cnpj = '$cnpj', 
					nome_fantasia = '$nome_fantasia', 
					responsavel = '$responsavel', 
					endereco = '$endereco', 
					bairro = '$bairro', 
					complemento = '$complemento', 
					cidade = '$cidade', 
					uf = '$uf', 
					cep = '$cep', 
					telefone = '$telefone', 
					email = '$email', 
					senha = '$senha'
				where id_empresa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_empresa.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}
	
}

//------ CRUD para tabela Setor------------//
if ($_REQUEST['tabela'] == 'setores'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_setor = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_setores.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_empresa = $_REQUEST['id_empresa'];
		$descricao = $_REQUEST['descricao'];

		$sql = "insert into ".$tabela." values(null, '$id_empresa', '$descricao')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_setores.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

		$id_empresa = $_REQUEST['id_empresa'];
        $descricao = $_REQUEST['descricao'];

		$sql = "update ".$tabela." set
					id_empresa = '$id_empresa',
					descricao = '$descricao'
     				where id_setor = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_setores.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

 //------ CRUD para tabela Cargo------------//
if ($_REQUEST['tabela'] == 'cargo'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_setor = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_cargos.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_setor = $_REQUEST['id_setor'];
		$descricao = $_REQUEST['descricao'];

		$sql = "insert into ".$tabela." values(null, '$id_setor', '$descricao')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_cargos.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

		$id_setor = $_REQUEST['id_setor'];
        $descricao = $_REQUEST['descricao'];

		$sql = "update ".$tabela." set
					id_setor = '$id_setor',
					descricao = '$descricao'
     				where id_cargo = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_cargos.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}
  //------ CRUD para tabela Funcionarios------------//
if ($_REQUEST['tabela'] == 'funcionarios'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_funcionario = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_funcionarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_empresa = $_REQUEST['id_empresa'];
		$nome = $_REQUEST['nome'];
		$id_cargo = $_REQUEST['id_cargo'];
		$matricula = $_REQUEST['matricula'];
		$ramal = $_REQUEST['ramal'];
		$email = $_REQUEST['email'];
		$senha = $_REQUEST['senha'];

		$sql = "insert into ".$tabela." values(null, '$id_empresa', '$nome', '$id_cargo', '$matricula', '$ramal', '$email', '$senha')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_funcionarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

  		$id_empresa = $_REQUEST['id_empresa'];
		$nome = $_REQUEST['nome'];
		$id_cargo = $_REQUEST['id_cargo'];
		$matricula = $_REQUEST['matricula'];
		$ramal = $_REQUEST['ramal'];
		$email = $_REQUEST['email'];
		$senha = $_REQUEST['senha'];

		$sql = "update ".$tabela." set
					id_empresa = '$id_empresa',
					nome = '$nome',
					id_cargo = '$id_cargo',
					matricula = '$matricula',
					ramal = '$ramal',
					email = '$email',
					senha = '$senha'
				where id_funcionario = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_funcionarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

  //------ CRUD para tabela Pesquisa------------//
if ($_REQUEST['tabela'] == 'pesquisa'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_pesquisa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_pesquisas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_empresa = $_REQUEST['id_empresa'];
		$descricao = $_REQUEST['descricao'];
		$data = $_REQUEST['data'];

		$sql = "insert into ".$tabela." values(null, '$id_empresa', '$descricao', '$data')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_pesquisas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

  		$id_empresa = $_REQUEST['id_empresa'];
		$descricao = $_REQUEST['descricao'];
		$data = $_REQUEST['data'];

		$sql = "update ".$tabela." set
					id_empresa = '$id_empresa',
					descricao = '$descricao',
					data = '$data'
				where id_pesquisa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_pesquisas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}


//------ CRUD para tabela Perguntas------------//
if ($_REQUEST['tabela'] == 'perguntas'){

	$tabela = $_REQUEST['tabela'];
	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_pergunta = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_perguntas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_pesquisa = $_REQUEST['id_pesquisa'];
		$id_cargo = $_REQUEST['id_cargo'];
		$pergunta = $_REQUEST['pergunta'];
		$id_resposta = $_REQUEST['id_resposta'];

		$sql = "insert into ".$tabela." values(null, '$id_pesquisa', '$id_cargo', '$pergunta', '$id_resposta')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_perguntas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

		$id_pesquisa = $_REQUEST['id_pesquisa'];
		$id_cargo = $_REQUEST['id_cargo'];
		$pergunta = $_REQUEST['pergunta'];
		$id_resposta = $_REQUEST['id_resposta'];

		$sql = "update ".$tabela." set
					id_pesquisa = '$id_pesquisa',
					id_cargo = '$id_cargo',
					pergunta = '$pergunta',
					id_resposta = '$id_resposta'
				where id_pergunta = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_perguntas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

  //------ CRUD para tabela Respostas------------//
if ($_REQUEST['tabela'] == 'respostas'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_resposta = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_respostas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_pergunta = $_REQUEST['id_pergunta'];
		$resposta = $_REQUEST['resposta'];
		$tipo_resposta = $_REQUEST['tipo_resposta'];

		$sql = "insert into ".$tabela." values(null, '$id_pergunta', '$resposta', '$tipo_resposta')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_respostas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

        $id_pergunta = $_REQUEST['id_pergunta'];
		$resposta = $_REQUEST['resposta'];
		$tipo_resposta = $_REQUEST['tipo_resposta'];

		$sql = "update ".$tabela." set
					id_pergunta = '$id_pergunta',
					resposta = '$resposta',
					tipo_resposta = '$tipo_resposta'
				where id_resposta = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_respostas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

  //------ CRUD para tabela Tarefas------------//
if ($_REQUEST['tabela'] == 'tarefas'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where id_tarefa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_tarefas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$id_empresa = $_REQUEST['id_empresa'];
		$id_cargo = $_REQUEST['id_cargo'];
		$descricao = $_REQUEST['descricao'];

		$sql = "insert into ".$tabela." values(null, '$id_empresa', '$id_cargo', '$descricao')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_tarefas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

        $id_empresa = $_REQUEST['id_empresa'];
		$id_cargo = $_REQUEST['id_cargo'];
		$descricao = $_REQUEST['descricao'];

		$sql = "update ".$tabela." set
					id_empresa = '$id_empresa',
					id_cargo = '$id_cargo',
					descricao = '$descricao'
				where id_tarefa = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_tarefas.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

  //------ CRUD para tabela Usuario------------//
if ($_REQUEST['tabela'] == 'usuarios'){
	$tabela = $_REQUEST['tabela'];

	if ($_REQUEST['acao'] == 'del'){ //--- deletar arquivo
		$sql = "delete from ".$tabela." where idUsuario = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_usuarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if (!$_REQUEST['id']){ //--- inserir arquivo

		$nome = $_REQUEST['nome'];
		$login = $_REQUEST['login'];
		$senha = $_REQUEST['senha'];
		$email = $_REQUEST['email'];
		$tipo = $_REQUEST['tipo'];
		$ativo = $_REQUEST['ativo'];
		
		$sql = "insert into ".$tabela." values(null, '$nome', '$login', '$senha', '$email', NULL, '$tipo', '$ativo')";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_usuarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

	if ($_REQUEST['id']){ //--- alterar arquivo

		$nome = $_REQUEST['nome'];
		$login = $_REQUEST['login'];
		$senha = $_REQUEST['senha'];
		$email = $_REQUEST['email'];
		$tipo = $_REQUEST['tipo'];
		$ativo = $_REQUEST['ativo'];

		$sql = "update ".$tabela." set
					nome = '$nome',
					login = '$login',
					senha = '$senha',
					email = '$email',
					tipo = '$tipo',
					ativo = '$ativo'
				where idUsuario = '".$_REQUEST['id']."'";
		if ($qr = mysqli_query($conn,$sql)){
			header('Location: lista_usuarios.php');
			exit;
		}
		else{
			echo "Erro!!! - ".$sql;
			exit;
		}
	}

}

?>
