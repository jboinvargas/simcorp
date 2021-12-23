<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "pesquisa"; //o nome da tabela
$cfg_campo_chave = "id_pesquisa"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
	$id_empresa = $res['id_empresa'];
	$descricao = $res['descricao'];
	$data = $res['data'];

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
														<label for="cp_descricao">Descrição</label>
														<br />
														<input id="cp_descricao" type="text" name="descricao" required class="inputbox" alt="descricao" value="<?= $descricao?>" style="width:100%" />
													</p>
													<p id="form-login-username">
														<label for="cp_data">Data</label>
														<br />
														<input id="cp_data" type="date" name="data" required class="inputbox" alt="data" value="<?= $data?>" style="width:120px" />
													</p>
                 									<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />
												</fieldset>
												
												<ul>
													<li>
														<a href="lista_pesquisas.php">Voltar para listagem.</a>
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
