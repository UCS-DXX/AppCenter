<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta property="" content="">
	<title>UNACORES</title>
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}">
	<link rel="stylesheet" type="text/css"
	      href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
	<link rel="stylesheet" href="{{ asset('assets/css/apps.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/elephant.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/application.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
<div class="layout-header">
	<div class="navbar navbar-default">
		<div class="navbar-toggleable" style="margin-left: 0; background-color: #0ac29d;">
			<nav id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown hidden-xs">
						<button class="navbar-account-btn profile username" data-toggle="dropdown" aria-haspopup="true">
							{{ Session::get('user_id') }}
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li>
								<a href="{{ URL::to('logout') }}">Sign out</a>
							</li>
						</ul>
					</li>
					<li class="visible-xs-block">
						<a href="{{ URL::to('logout') }}">
							<span class="icon icon-power-off icon-lg icon-fw"></span>
							Sign out
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="width-100" style="margin-top: 50px; padding: 8px 0;">
		<div class="flex-container">
			<div>
				<a href="{{ URL::to('changeapp/transfer_money') }}">
					<div>
						<img src="{{ asset('assets/images/money-transfer.jpg') }}" height="150px" width="150px"/>
					</div>
					<div>Transfer Money</div>
				</a>
			</div>
		</div>
</div>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/elephant.min.js') }}"></script>
</body>