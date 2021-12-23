<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "empresa"; //o nome da tabela
$cfg_campo_chave = "id_empresa"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);
	
	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
	$cnpj = $res['cnpj'];
	$nome_fantasia = $res['nome_fantasia'];
	$responsavel = $res['responsavel'];
	$endereco = $res['endereco'];
	$bairro = $res['bairro'];
	$complemento = $res['complemento'];
	$cidade = $res['cidade'];
	$uf = $res['uf'];
	$cep = $res['cep'];
	$telefone = $res['telefone'];
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
							<h2 class="art-postheader">Cadastro de: Empresas</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
										  	<form action="post.php" method="post" name="login" id="form-login">
												<input type="hidden" name="id" value="<?= $id?>">
												<input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
													<p id="form-login-username">
														<label for="cp_cnpj">CNPJ</label>
														<br />
														<input id="cp_cnpj" type="text" name="cnpj" required class="inputbox" alt="cnpj" value="<?= $cnpj?>" style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_nome_fantasia">Nome de Fantasia</label>
														<br />
														<input id="cp_nome_fantasia" type="text" name="nome_fantasia" required class="inputbox" alt="nome_fantasia" value="<?= $nome_fantasia?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_responsavel">Nome Responsável</label>
														<br />
														<input id="cp_responsavel" type="text" name="responsavel" required class="inputbox" alt="responsavel" value="<?= $responsavel?>" style="width:100%" />
													</p>
													<p id="form-login-username">
														<label for="cp_telefone">Telefone</label>
														<br />
														<input id="cp_telefone" type="text" name="telefone" required class="inputbox" alt="telefone" value="<?= $telefone?>" style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_email">E-mail</label>
														<br />
														<input id="cp_email" type="text" name="email" required class="inputbox" alt="email" value="<?= $email?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_endereco">Endereço</label>
														<br />
														<input id="cp_endereco" type="text" name="endereco" required class="inputbox" alt="endereco" value="<?= $endereco?>" style="width:100%" />
													</p>
													<p id="form-login-username">
														<label for="cp_bairro">Bairro</label>
														<br />
														<input id="cp_bairro" type="text" name="bairro" required class="inputbox" alt="bairro" value="<?= $bairro?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_uf">Estado</label>
														<br />
														<select id="cp_uf" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="uf">
															<option value="">- Selecione -</option>
															<option value="AC">Acre</option>
															<option value="AL">Alagoas</option>
															<option value="AP">Amapá</option>
															<option value="AM">Amazonas</option>
															<option value="BA">Bahia</option>
															<option value="CE">Ceará</option>
															<option value="DF">Distrito Federal</option>
															<option value="ES">Espírito Santo</option>
															<option value="GO">Goiás</option>
															<option value="MA">Maranhão</option>
															<option value="MT">Mato Grosso</option>
															<option value="MS">Mato Grosso do Sul</option>
															<option value="MG">Minas Gerais</option>
															<option value="PA">Pará</option>
															<option value="PB">Paraíba</option>
															<option value="PR">Paraná</option>
															<option value="PE">Pernambuco</option>
															<option value="PI">Piauí</option>
															<option value="RJ">Rio de Janeiro</option>
															<option value="RN">Rio Grande do Norte</option>
															<option value="RS">Rio Grande do Sul</option>
															<option value="RO">Rondônia</option>
															<option value="RR">Roraima</option>
															<option value="SC">Santa Catarina</option>
															<option value="SP">São Paulo</option>
															<option value="SE">Sergipe</option>
															<option value="TO" selected>Tocantins</option>
														</select>
													</p>
													<p id="form-login-username">
														<label for="cp_cidade">Cidade</label>
														<br />
														<input id="cp_cidade" type="text" name="cidade" required class="inputbox" alt="cidade" value="<?= $cidade?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_cep">CEP</label>
														<br />
														<input id="cp_cep" type="text" name="cep" required class="inputbox" alt="cep" value="<?= $cep?>" style="width:10%" />
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
														<a href="lista_empresa.php">Voltar para listagem.</a>
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
