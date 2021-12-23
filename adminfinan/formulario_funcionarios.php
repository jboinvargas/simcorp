<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "funcionarios"; //o nome da tabela
$cfg_campo_chave = "id_funcionario"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
	$id_empresa = $res['id_empresa'];
	$nome = $res['nome'];
	$id_cargo = $res['id_cargo'];
	$matricula = $res['matricula'];
	$ramal = $res['ramal'];
	$email = $res['email'];
	$senha = $res['senha'];
}
?>
	
	<div class="art-sheet clearfix">
		<div class="art-layout-wrapper">
			<div class="art-content-layout">
				<div class="art-content-layout-row">
<?php
					include ("menu.php");
?>
					<div class="art-layout-cell art-content">
						<article class="art-post art-article">
							<h2 class="art-postheader">Cadastro de Funcionarios</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form action="post.php" method="post" name="login" id="form-login">
											<input type="hidden" name="id" value="<?= $id?>">
												<input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
													<p id="form-login-username">
                                                        <label for="cp_empresa">Empresa</label>
              											<br />
														<select id="cp_empresa" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="id_empresa">
															<option value="">- Selecione -</option>
<?php
$sql_empresa = "select * from empresa order by nome_fantasia";
$qr_empresa = mysqli_query($conn,$sql_empresa);
while ($res_empresa = mysqli_fetch_array($qr_empresa)) {
?>
															<option value="<?=$res_empresa['id_empresa']?>" <?=($res_empresa['id_empresa']==$id_empresa)?"selected":"";?>><?=$res_empresa['nome_fantasia']?></option>
<?php
}
?>
														</select>
														</p>
													<p id="form-login-username">
														<label for="cp_nome">Nome</label>
														<br />
														<input id="cp_nome" type="text" name="nome" required class="inputbox" alt="name" value="<?= $nome?>" style="width:100%" />
													</p>
													<p id="form-login-username">
														<label for="cp_cargo">Setor / Cargo</label>
                                                        <br />
														<select id="cp_cargo" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="id_cargo">
															<option value="">- Selecione -</option>
<?php
$sql_cargo = "select id_cargo, c.descricao cargo, s.descricao setor from cargo c inner join setores s on c.id_setor = s.id_setor order by s.descricao, c.descricao";
$qr_cargo = mysqli_query($conn,$sql_cargo);
while ($res_cargo = mysqli_fetch_array($qr_cargo)) {
?>
															<option value="<?=$res_cargo['id_cargo']?>" <?=($res_cargo['id_cargo']==$id_cargo)?"selected":"";?>><?=$res_cargo['setor']." / ".$res_cargo['cargo']?></option>
<?php
}
?>
														</select>
														</p>
													<p id="form-login-username">
														<label for="cp_matricula">Matricula</label>
														<br />
														<input id="cp_matricula" type="text" name="matricula" required class="inputbox" alt="matricula" value="<?= $matricula?>"style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_ramal">Ramal</label>
														<br />
														<input id="cp_ramal" type="text" name="ramal" required class="inputbox" alt="ramal" value="<?= $ramal?>"style="width:15%" />
													</p>
													<p id="form-login-username">
														<label for="cp_email">Email</label>
														<br />
														<input id="cp_email" type="text" name="email" required class="inputbox" alt="email" value="<?= $email?>"style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_senha">Senha</label>
														<br />
														<input id="cp_senha" type="password" name="senha" required class="inputbox" alt="senha" value="<?= $senha?>" style="width:10%" />
													</p>
													<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />    
												</fieldset>
												<ul>
													<li>
														<a href="lista_funcionarios.php">Voltar para listagem.</a>
													</li>
												</ul>
											</form>
											
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>

<?php
		include ("footer.php");
?>

	</div>
</div>


</body></html>
