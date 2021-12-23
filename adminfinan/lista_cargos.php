<?php
include ("config.php");
include ("header.php");

$cfg_tabela = "cargo"; //o nome da tabela
$cfg_reg_pagina = 40; //quantidade de registro que vai mostrar por pagina
$cfg_campo_chave = "id_cargo"; //é o campo chave da tabela
$cfg_campo_descricao = "descricao"; //é o nome do campo na tabela que vai ser mostrado na listagem

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
							<h2 class="art-postheader">Listagem para: Cargos</h2>
							<div class="art-postheadericons art-metadata-icons">
								 <span class="art-postediticon"> <a href="formulario_cargos.php" title="Novo Registro">Inserir novo registro</a></span>
							</div>
							<div class="art-postcontent art-postcontent-0 clearfix">
								<div class="art-content-layout">
									<div class="art-content-layout-row">
										<div class="art-layout-cell layout-item-0" style="width: 100%" >
<?php
$sql = "select c.*, s.descricao setor from ".$cfg_tabela." c inner join setores s on c.id_setor = s.id_setor order by ".$cfg_campo_chave." limit ".$cfg_reg_pagina;
if ($qr = mysqli_query($conn,$sql)){

?>
											<table class="art-article" style="width: 100%" >
												<tbody>
													<tr>
														<th style="width:10%;">Código</th>
														<th style="width:30%;">Setor</th>
														<th style="width:50%;">Cargos</th>
														<th style="width:10%;">Ação</th>
													</tr>
<?php
	while ($res = mysqli_fetch_array($qr)) {
?>
													<tr>
														<td style="cursor: pointer;" onclick="javascript:window.location.assign('formulario_cargos.php?id=<?=$res[$cfg_campo_chave]?>');"><?=$res[$cfg_campo_chave]?></td>
														<td style="cursor: pointer;" onclick="javascript:window.location.assign('formulario_cargos.php?id=<?=$res[$cfg_campo_chave]?>');"><?=$res['setor']?></td>
														<td style="cursor: pointer;" onclick="javascript:window.location.assign('formulario_cargos.php?id=<?=$res[$cfg_campo_chave]?>');"><?=$res[$cfg_campo_descricao]?></td>
														<td style="text-align:center;"><a href="post.php?tabela=<?=$cfg_tabela?>&id=<?=$res[$cfg_campo_chave]?>&acao=del"><span class="art-postdelicon"></a></span></td>
													</tr>
<?php
	}
?>
												</tbody>
											</table>
<?php
}
else{
?>
											<br><br>Nenhum registro encontrado.<br><br>
<?php
}
?>
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
