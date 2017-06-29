<html>
	<head>
		<title>GarageMS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<div class="logo" align="center">
			<img src="/images/logo.png" alt="" class="img-responsive">
		</div>
		<div class="container">			
			<div class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#teste" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>						
					</div>
					<div class="collapse navbar-collapse" align="center" id="teste">
						<ul class="nav navbar-nav">
							<li><a href="/">Início</a></li>
							<li><a href="/download">Download</a></li>
							<li><a href="/ranking">Ranking</a></li>
							<li><a href="/donate">Doação</a></li>
							<li><a href="http://forum.selcip.com">Fórum</a></li>
							<li><a href="/vote">Votar</a></li>
							<li><a href="http://wiki.garagems.com">Wiki</a></li>
						</ul>
					</div>
				</div>
				<div class="well">
					<div class="row">
						<div class="col-md-3">
							<div class="well">
								<div class="form-title">
									ACESSE SUA CONTA
								</div>
								<form>
								  <div class="form-group">
								    <input type="text" class="form-control" id="user" placeholder="Usuário">
								  </div>
								  <div class="form-group">
								    <input type="password" class="form-control" id="pwd" placeholder="Senha">
								  </div>
								  <div class="checkbox">
								    <label><input type="checkbox"> Remember me</label>
								  </div>
								  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
								  <button type="submit" class="btn btn-secondary btn-block">Registrar</button>
								</form>
							</div>
							<div class="well offline">
								<div class="title">
									<span></span>
								</div>
								<p>Jogadores Online: <b>200</b></p>
								<p>Versão: <b>v117.2</b></p>
								<p>Taxa de Mesos: <b>2x</b></p>
								<p>Taxa de EXP: <b>4x</b></p>
								<p>Taxa de Quests: <b>2x</b></p>
								<p>Taxa de Drop: <b>2x</b></p>
							</div>
						</div>
						<div class="col-md-9">
                            @yield ('content')
                        </div>
					</div>
				</div>
			</div>
        </div>
        <script src="js/app.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>