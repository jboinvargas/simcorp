<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "perguntas"; //o nome da tabela
$cfg_campo_chave = "id_pergunta"; //é o campo chave da tabela
$id =& $_GET[ 'id' ];

if ($id){
	$sql = "select * from ".$cfg_tabela." where ".$cfg_campo_chave." = '".$id."'";
	$qr = mysqli_query($conn,$sql);

	//preencher as variaveis com os registros da tabela
	$res = mysqli_fetch_array($qr);
        $id_pesquisa = $res['id_pesquisa'];
		$id_cargo = $res['id_cargo'];
		$pergunta = $res['pergunta'];
        $id_respota = $res['id_resposta'];

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
							<h2 class="art-postheader">Cadastro de: Perguntas</h2>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
											<form action="post.php" method="post" name="login" id="form-login">
												<fieldset class="input" style="border: 0 none;">
										    	<input type="hidden" name="id" value="<?= $id?>">
												<input type="hidden" name="tabela" value="<?= $cfg_tabela?>">
												<fieldset class="input" style="border: 0 none;">
													<p id="form-login-username">
                                                        <label for="cp_pesquisa">Pesquisa</label>
              											<br />
														<select id="cp_pesquisa" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="id_pesquisa">
                                                        <option value="">- Selecione -</option>
<?php
$sql_pesquisa = "select * from pesquisa order by descricao";
$qr_pesquisa = mysqli_query($conn,$sql_pesquisa);
while ($res_pesquisa = mysqli_fetch_array($qr_pesquisa)) {
?>
															<option value="<?=$res_pesquisa['id_pesquisa']?>" <?=($res_pesquisa['id_pesquisa']==$id_pesquisa)?"selected":"";?>><?=$res_pesquisa['descricao']?></option>
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
														<label for="cp_pergunta">Pergunta</label>
														<br />
														<input id="cp_pergunta" type="text" name="pergunta" required class="inputbox" alt="pergunta" value="<?= $pergunta?>"style="width:100%" />
													</p>
													<p id="form-login-username">
													<label for="cp_resposta">Resposta Correta</label>
													<br />
														<select id="cp_resposta" style="width: 100%; font-size:16px; height: 40px; padding:5px;" name="id_resposta">
														<option value="0">- Selecione -</option>
<?php
$sql_resposta = "select * from respostas where id_pergunta = $id order by resposta";
$qr_resposta = mysqli_query($conn,$sql_resposta);
while ($res_resposta = mysqli_fetch_array($qr_resposta)) {
?>
														<option value="<?=$res_resposta['id_resposta']?>" <?=($res_resposta['id_resposta']==$id_resposta)?"selected":"";?>><?=$res_resposta['resposta']?></option>
<?php
}
?>
														</select>
													</p>
                        						<input type="submit" value="Salvar" name="Salvar" class="art-button" /> <input type="reset" value="Cancelar" name="Cancelar" class="art-button" />
												</fieldset>
												<ul>
													<li>
														<a href="lista_perguntas.php">Voltar para listagem.</a>
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
