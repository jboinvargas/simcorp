<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "planos"; //o nome da tabela
$cfg_campo_chave = "id_plano"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);
	
	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
	$descricao = $res['descricao'];
	$valor = $res['valor'];
	$periodicidade = $res['periodicidade'];
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
							<h2 class="art-postheader">Cadastro de: Planos</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
										  	<form action="post.php" method="post" name="login" id="form-login">
												<input type="hidden" name="id" value="<?= $id?>">
												<input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
													<p id="form-login-username">
														<label for="cp_descricao">Descrição</label>
														<br />
														<input id="cp_descricao" type="text" name="descricao" required class="inputbox" alt="descricao" value="<?= $descricao?>" style="width:50%" />
													</p>
													<p id="form-login-username">
														<label for="cp_valor">Valor</label>
														<br />
														<input id="cp_valor" type="text" name="valor" required class="inputbox" alt="valor" value="<?= $valor?>" style="width:20%" />
													</p>
													<p id="form-login-username">
														<label for="cp_periodicidade">Periodicidade</label>
														<br />
														<select id="cp_periodicidade" style="width: 20%; font-size:16px; height: 40px; padding:5px;" name="periodicidade">
                              <option value="">- Selecione -</option>
                              <option value="U" <?=($periodicidade=="U")?"selected":"";?>>Único</option>
                              <option value="M" <?=($periodicidade=="M")?"selected":"";?>>Mensal</option>
                              <option value="H" <?=($periodicidade=="H")?"selected":"";?>>Hora Técnica</option>
                            </select>
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
