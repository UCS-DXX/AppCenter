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
</head>
<body>
<div class="width-100">
	<div class="apps-container">
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
</div>
</body>