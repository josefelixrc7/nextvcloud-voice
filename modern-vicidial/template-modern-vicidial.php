
	/* -- Modern Vicidial: Phone Login -- */
	?>
		<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Agentes - ModernVici</title>
				<link rel="icon" type="image/x-icon" href="../modern-vicidial/images/logo.png">
	
				<!-- CSS files -->
					<link rel="stylesheet" href="../../modern-vicidial/css/libraries/fontawesome-v5.9.0.min.css">
					<link href="../../modern-vicidial/css/libraries/bootstrap-v5.1.1/bootstrap.min.css" rel="stylesheet">
					<link href="../../modern-vicidial/css/main.css" rel="stylesheet">
				<!-- /CSS files -->ventas
	
			</head>
			<body class="position-relative">
	
				<div class="row">
					<section class="col-12 col-md-6 p-5">
						<div class="p-2 p-md-5">
	
							<div class="d-flex justify-content-start align-items-center mb-4">
								<img width="50px;" src="../../modern-vicidial/images/logo.png" alt="Logo">
								<h2 class="ms-4">Panel de Agentes</h2>
							</div>
							<p class="p">Bienvenido al panel de Agentes</p>
			
							<form name="vicidial_form" id="vicidial_form" action="<?=$agcPAGE?>" method="post">
								
								<table class="table">
									<tr>
										<td>Usuario</td>
										<td><input class="form-control" type="text" name="VD_login" size="20" maxlength="20" value="<?=$VD_login?>"/></td>
									</tr>
									<tr>
										<td>Contrase&ntilde;a</td>
										<td><input type="password" name="VD_pass" size="20" maxlength="100" value="<?=$VD_pass?>"/></td>
									</tr>
									<tr>
										<td>Campa&ntilde;a</td>
										<td><font class="skb_text"><span id="LogiNCamPaigns"><?=$camp_form_code?></span></font></td>
									</tr>
									<tr>
										<td align="center" colspan="2">
											<input class="btn btn-primary" type="submit" name="SUBMIT" value="Enviar" />
											<span id="LogiNReseT"></span>
										</td>
									</tr>
								</table>
							</form>
	
						</div>
					</section>
					<section class="d-none d-md-block col-12 col-md-6">
						<img class="w-100 h-100" src="../../modern-vicidial/images/image1.png">
					</section>
				</div>
	
				<!-- Javascript -->
					<!-- Libraries -->
					<script src="../../modern-vicidial/js/libraries/jquery.min-v3.4.1.js"></script>
					<script src="../../modern-vicidial/js/libraries/bootstrap-v5.1.1/bootstrap.bundle.min.js"></script>
				<!-- Javascript -->
			</body>
		</html>
	<?php
	/* -- /Modern Vicidial: Phone Login -- */