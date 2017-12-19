@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/application.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection
@section('content')
	<body class="layout layout-header-fixed">
	<div class="layout-header">
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand navbar-brand-center" href="{{ URL::to('/') }}">
					<img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png') }}" alt="Elephant"/>
				</a>
				<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
				        data-target="#sidenav">
					<span class="sr-only">Toggle navigation</span>
					<span class="bars">
                        <span class="bar-line bar-line-1 out"></span>
                        <span class="bar-line bar-line-2 out"></span>
                        <span class="bar-line bar-line-3 out"></span>
                    </span>
					<span class="bars bars-x">
                        <span class="bar-line bar-line-4"></span>
                        <span class="bar-line bar-line-5"></span>
					</span>
				</button>
				<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse"
				        data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="arrow-up"></span>
					<span class="ellipsis ellipsis-vertical">
                        <img class="ellipsis-object" width="32" height="32"
                             src="{{ asset('assets/images/0180441436.jpg') }}" alt="Teddy Wilson">
                    </span>
				</button>
			</div>
			<div class="navbar-toggleable">
				<nav id="navbar" class="navbar-collapse collapse">
					<button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true"
					        type="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                            <span class="bar-line bar-line-4 in"></span>
                            <span class="bar-line bar-line-5 in"></span>
                            <span class="bar-line bar-line-6 in"></span>
                        </span>
					</button>
					<ul class="nav navbar-nav navbar-right">
						<li class="visible-xs-block">
							<h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
						</li>
						<li class="dropdown hidden-xs">
							<button class="navbar-account-btn profile" data-toggle="dropdown" aria-haspopup="true">
								Teddy Wilson
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
	<div class="layout-main">
		<div class="layout-sidebar">
			<div class="layout-sidebar-backdrop"></div>
			<div class="layout-sidebar-body">
				<div class="custom-scrollbar">
					<nav id="sidenav" class="sidenav-collapse collapse">
						<ul class="sidenav">
							<li class="sidenav-search hidden-md hidden-lg">
								<form class="sidenav-form" action="">
									<div class="form-group form-group-sm">
										<div class="input-with-icon">
											<input class="form-control" type="text" placeholder="Search…">
											<span class="icon icon-search input-icon"></span>
										</div>
									</div>
								</form>
							</li>
							<li class="sidenav-item has-subnav">
								<a href="#" aria-haspopup="true">
									<span class="sidenav-icon icon icon-edit"></span>
									<span class="sidenav-label">Forms</span>
								</a>
								<ul class="sidenav-subnav collapse">
									<li>
										<a href="{{ URL::to('form-controls') }}">Form controls</a>
									</li>
								</ul>
							</li>
							<li class="sidenav-item has-subnav">
								<a href="#" aria-haspopup="true">
									<span class="sidenav-icon icon icon-list"></span>
									<span class="sidenav-label">Tables</span>
								</a>
								<ul class="sidenav-subnav collapse">
									<li>
										<a href="{{ URL::to('responsive-tables') }}">Responsive tables</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="layout-content">
			<div class="layout-content-body">
				<div class="title-bar">
					<h1 class="title-bar-title">
						<span class="d-ib">Welcome to  UNACORE Dashboard</span>
					</h1>
				</div>
			</div>
		</div>
		<div class="layout-footer">
			<div class="layout-footer-body">
				<small class="version">Version 1.4.0</small>
				<small class="copyright">2017 &copy; Elephant <a href="">Made by Tilde</a></small>
			</div>
		</div>
	</div>
	<div class="theme">
		<div class="theme-panel theme-panel-collapsed">
			<div class="theme-panel-body">
				<div class="custom-scrollbar">
					<div class="custom-scrollbar-inner">
						<h5 class="theme-heading">
							<a href="" class="btn btn-primary btn-block">Buy Elephant Now!</a>
						</h5>
						<ul class="theme-settings">
							<li class="theme-settings-heading">
								<div class="divider">
									<div class="divider-content">Theme Settings</div>
								</div>
							</li>
							<li class="theme-settings-item">
								<div class="theme-settings-label">Header fixed</div>
								<div class="theme-settings-switch">
									<label class="switch switch-primary">
										<input class="switch-input" type="checkbox" name="layout-header-fixed"
										       data-sync="true">
										<span class="switch-track"></span>
										<span class="switch-thumb"></span>
									</label>
								</div>
							</li>
							<li class="theme-settings-item">
								<div class="theme-settings-label">Sidebar fixed</div>
								<div class="theme-settings-switch">
									<label class="switch switch-primary">
										<input class="switch-input" type="checkbox" name="layout-sidebar-fixed"
										       data-sync="true">
										<span class="switch-track"></span>
										<span class="switch-thumb"></span>
									</label>
								</div>
							</li>
							<li class="theme-settings-item">
								<div class="theme-settings-label">Sidebar sticky*</div>
								<div class="theme-settings-switch">
									<label class="switch switch-primary">
										<input class="switch-input" type="checkbox" name="layout-sidebar-sticky"
										       data-sync="true">
										<span class="switch-track"></span>
										<span class="switch-thumb"></span>
									</label>
								</div>
							</li>
							<li class="theme-settings-item">
								<div class="theme-settings-label">Sidebar collapsed</div>
								<div class="theme-settings-switch">
									<label class="switch switch-primary">
										<input class="switch-input" type="checkbox" name="layout-sidebar-collapsed"
										       data-sync="false">
										<span class="switch-track"></span>
										<span class="switch-thumb"></span>
									</label>
								</div>
							</li>
							<li class="theme-settings-item">
								<div class="theme-settings-label">Footer fixed</div>
								<div class="theme-settings-switch">
									<label class="switch switch-primary">
										<input class="switch-input" type="checkbox" name="layout-footer-fixed"
										       data-sync="true">
										<span class="switch-track"></span>
										<span class="switch-thumb"></span>
									</label>
								</div>
							</li>
							<li class="theme-settings-description">
                                <span>
                                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached.
	                                <a href="page-layouts.html">Learn more</a>
                                </span>
							</li>
						</ul>
						<hr class="theme-divider">
						<ul class="theme-variants">
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Flaming Red (default)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/9722110524.jpg') }}"
									     alt="Flaming Red Theme"/>
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Flaming Red (inverse)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/9870681590.jpg') }}"
									     alt="Flaming Red Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Flatistic Green (default)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/9964167452.jpg') }}"
									     alt="Flatistic Green Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Flatistic Green (inverse)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1007517980.jpg') }}"
									     alt="Flatistic Green Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Midnight Blue (default)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1015664515.jpg') }}"
									     alt="Midnight Blue Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Midnight Blue (inverse)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1025453682.jpg') }}"
									     alt="Midnight Blue Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Materialistic Blue (default)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1033422797.jpg') }}"
									     alt="Materialistic Blue Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Materialistic Blue (inverse)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1044368407.jpg') }}"
									     alt="Materialistic Blue Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Eerie Black (default)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1050099119.jpg') }}"
									     alt="Eerie Black Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
							<li class="theme-variants-item">
								<a class="theme-variants-link" href="" title="Eerie Black (inverse)"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									<img class="img-responsive" src="{{ asset('assets/images/1067123558.jpg') }}"
									     alt="Eerie Black Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">
									Rounded
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="theme-panel-footer">
				<a class="rounded sq-36 bg-facebook" href="" title="Share on Facebook" target="_blank">
					<span class="icon icon-facebook"></span>
				</a>
				<a class="rounded sq-36 bg-twitter" href="" title="Tweet" target="_blank">
					<span class="icon icon-twitter"></span>
				</a>
				<a class="rounded sq-36 bg-googleplus" href="" title="Share on Google+" target="_blank">
					<span class="icon icon-google-plus"></span>
				</a>
				<a class="rounded sq-36 bg-linkedin" href="" target="_blank">
					<span class="icon icon-linkedin"></span>
				</a>
				<a class="rounded sq-36 bg-pinterest" href="" title="Pin it" target="_blank">
					<span class="icon icon-pinterest-p"></span>
				</a>
				<a class="rounded sq-36 bg-default" href="" title="Send email" target="_blank">
					<span class="icon icon-envelope-o"></span>
				</a>
			</div>
		</div>
	</div>
	@endsection
	@section('custom-script')
		@include('layouts/partials/script')
		<script src="{{ asset('assets/js/application.min.js') }}"></script>
	</body>
@endsection