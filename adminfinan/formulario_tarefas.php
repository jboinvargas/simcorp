<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "tarefas"; //o nome da tabela
$cfg_campo_chave = "id_tarefa"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
        $id_empresa = $res['id_empresa'];
		$id_setor = $res['id_setor'];
		$descricao = $res['descricao'];

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
							<h2 class="art-postheader">Cadastro de: Tarefas</h2>
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
														<label for="cp_descricao">Descricao</label>
														<br />
														<input id="cp_descricao" type="text" name="descricao" required class="inputbox" alt="descricao" value="<?= $descricao?>"style="width:100%" />
													</p>
                        						<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />
												</fieldset>
												<ul>
													<li>
														<a href="lista_tarefas.php">Voltar para listagem.</a>
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
