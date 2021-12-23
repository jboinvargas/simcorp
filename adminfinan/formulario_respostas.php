<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "respostas"; //o nome da tabela
$cfg_campo_chave = "id_resposta"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
        $id_pergunta = $res['id_pergunta'];
		$resposta = $res['resposta'];
		$tipo_resposta = $res['tipo_resposta'];
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
							<h2 class="art-postheader">Cadastro de: Pesquisas</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form action="post.php" method="post" name="login" id="form-login">
											<input type="hidden" name="id" value="<?= $id?>">
												<input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
													<p id="form-login-username">
                                                        <label for="cp_pergunta">Pergunta</label>
              											<br />
														<select id="cp_pergunta" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="id_pergunta">
															<option value="">- Selecione -</option>
<?php
$sql_pergunta = "select * from perguntas order by pergunta";
$qr_pergunta = mysqli_query($conn,$sql_pergunta);
while ($res_pergunta = mysqli_fetch_array($qr_pergunta)) {
?>
															<option value="<?=$res_pergunta['id_pergunta']?>" <?=($res_pergunta['id_pergunta']==$id_pergunta)?"selected":"";?>><?=$res_pergunta['pergunta']?></option>
<?php
}
?>
															</select>
           											</p>
                      								<p id="form-login-username">
														<label for="cp_resposta">Resposta</label>
														<br />
														<input id="cp_resposta" type="text" name="resposta" required class="inputbox" alt="resposta" value="<?= $resposta?>"style="width:100%" />
													</p>
													<p id="form-login-username">
                                                        <label for="cp_tipo_resposta">Tipo Resposta</label>
              											<br />
														<select id="cp_tipo_resposta" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="tipo_resposta">
															<option value="O" <?=($tipo_resposta == "O")?"selected":"";?>>Objetiva</option>
															<option value="S" <?=($tipo_resposta == "S")?"selected":"";?>>Subjetiva</option>
															<option value="V" <?=($tipo_resposta == "V")?"selected":"";?>>Verdadeiro ou Falso</option>
														</select>
           											</p>
                        						<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />
												</fieldset>
												<ul>
													<li>
														<a href="lista_respostas.php">Voltar para listagem.</a>
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
