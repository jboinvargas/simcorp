<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "usuarios"; //o nome da tabela
$cfg_campo_chave = "idUsuario"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
	$nome = $res['nome'];
	$login = $res['login'];
	$senha = $res['senha'];
	$email = $res['email'];
	$data_acesso = $res['data_acesso'];
	$tipo = $res['tipo'];
	$ativo = $res['ativo'];
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
							<h2 class="art-postheader">Cadastro de: Usuários</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form action="post.php" method="post" name="login" id="form-login">
											<input type="hidden" name="id" value="<?= $id?>">
											 <input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
                                                	<p id="form-login-username">
														<label for="cp_nome">Nome</label>
														<br />
														<input id="cp_nome" type="text" name="nome" required class="inputbox" alt="nome" value="<?= $nome?>" style="width:100%" />
													</p>
													<p id="form-login-username">
														<label for="cp_login">Login</label>
														<br />
														<input id="cp_login" type="text" name="login" required maxlength="15" class="inputbox" alt="login" value="<?= $login?>" style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_senha">Senha</label>
														<br />
														<input id="cp_senha" type="text" name="senha" required class="inputbox" alt="senha" value="<?= $senha?>" style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_email">Email</label>
														<br />
														<input id="cp_email" type="text" name="email" required class="inputbox" alt="email" value="<?= $email?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_data_acesso">Data e Hora</label>
														<br />
														<input id="cp_data_acesso" type="text" name="data_acesso" readonly class="inputbox" alt="data_acesso" value="<?= $data_acesso?> "style="width:27%" />
													</p>
													<p id="form-login-username">
														<label for="cp_tipo">Tipo</label>
														<br />
														<select id="cp_tipo" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="tipo">
															<option value="P" <?=($tipo == "P")?"selected":"";?>>Padrão</option>
															<option value="A" <?=($tipo == "A")?"selected":"";?>>Administrador</option>
														</select>
													</p>
													<p id="form-login-username">
														<label for="cp_ativo">Ativo</label>
														<br />
														
														<select id="cp_ativo" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="ativo">
															<option value="1" <?=($ativo)?"selected":"";?>>Ativo</option>
															<option value="0" <?=(!$ativo)?"selected":"";?>>Inativo</option>
														</select>
													</p>
                 									<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />
												</fieldset>
												
												<ul>
													<li>
														<a href="lista_usuarios.php">Voltar para listagem.</a>
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
