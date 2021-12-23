<?php
include ("config.php");
include ("header.php");
?>


	<div class="art-sheet clearfix">
		<div class="art-layout-wrapper">
			<div class="art-content-layout">
				<div class="art-content-layout-row">
					<div class="art-layout-cell art-content">
						<div class="art-block clearfix">
							<div class="art-blockheader">
								<h3 class="t">Faça o login</h3>
							</div>
							<div class="art-blockcontent">
								<form action="lista_empresa.php" method="post" name="login" id="form-login">
									<fieldset class="input" style="border: 0 none;">
										<p id="form-login-username">
											<label for="modlgn_username">Usuário</label>
											<br />
											<input id="modlgn_username" type="text" name="username" required class="inputbox" alt="username" style="width:100%" />
										</p>
										<p id="form-login-password">
											<label for="modlgn_passwd">Senha</label>
											<br />
											<input id="modlgn_passwd" type="password" name="passwd" required class="inputbox" size="18" alt="password" style="width:100%" />
										</p>
										<p id="form-login-remember">
											<label class="art-checkbox">
											<input type="checkbox" id="modlgn_remember" name="remember" value="yes" alt="Remember Me" />Manter conectado
										</label>
										</p>
										<input type="submit" value="Login" name="Submit" class="art-button" />    
									</fieldset>
									
									<ul>
										<li>
											<a href="#">Esqueci minha senha.</a>
										</li>
									</ul>
								</form>
							</div>
						</div>
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