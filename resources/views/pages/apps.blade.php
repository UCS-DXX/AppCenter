@extends('master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/apps.css') }}">
@endsection
@section('content')
	<body>
		<div class="width-100">
			<div class="apps-container">
				<div class="flex-container">
					<div>
						<a href="{{ URL::to('changeapp/transfer_money') }}">
							<div>
								<img src="{{ asset('assets/images/money-transfer.jpg') }}" height="150px" width="150px" />
							</div>
							<div>Transfer Money</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
@endsection