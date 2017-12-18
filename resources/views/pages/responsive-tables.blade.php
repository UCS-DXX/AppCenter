@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/application.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/demo.min.css') }}">
@endsection
@section('content')
	<body class="layout layout-header-fixed">
	<div class="layout-header">
		<div class="navbar navbar-default">
			<div class="navbar-header">
				<a class="navbar-brand navbar-brand-center" href="{{ URL::to('/') }}">
					<img class="navbar-brand-logo" src="{{ asset('assets/images/logo.png') }}" alt="Elephant">
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
							<button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
								<div style="height: 16px; width: 16px;"></div>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><a href="{{ URL::to('logout') }}">Sign out</a></li>
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
							<li class="sidenav-item has-subnav active">
								<a href="#" aria-haspopup="true">
									<span class="sidenav-icon icon icon-list"></span>
									<span class="sidenav-label">Tables</span>
								</a>
								<ul class="sidenav-subnav collapse">
									<li class="active">
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
						<span class="d-ib">Responsive tables</span>
						<span class="d-ib">
                            <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body"
                               data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right"
                               data-toggle="tooltip">
                                <span class="sr-only">Add to shortcut list</span>
                            </a>
                        </span>
					</h1>
					<p class="title-bar-description">
						<small>Resize your browser or load on different devices to test the responsive tables.</small>
					</p>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<div class="card-actions">
									<button type="button" class="card-action card-toggler" title="Collapse"></button>
									<button type="button" class="card-action card-reload" title="Reload"></button>
									<button type="button" class="card-action card-remove" title="Remove"></button>
								</div>
								<strong>Flip Scroll</strong>
							</div>
							<div class="card-body">
								<div class="table-flip-scroll">
									<table class="table table-striped">
										<thead>
										<tr>
											<th>Rank</th>
											<th>Country</th>
											<th>Continent</th>
											<th>Region</th>
											<th class="text-right">2016</th>
											<th class="text-right">2015</th>
											<th class="text-right">Change</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>—</td>
											<td>
												<i>World</i>
											</td>
											<td>—</td>
											<td>—</td>
											<td class="text-right">7,432,663,275</td>
											<td class="text-right">7,349,472,099</td>
											<td class="text-right">+1.1%</td>
										</tr>
										<tr>
											<td>1</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/cn.svg') }}"
												     alt="State Flag">
												China
											</td>
											<td>Asia</td>
											<td>Eastern Asia</td>
											<td class="text-right">1,382,323,332</td>
											<td class="text-right">1,376,048,943</td>
											<td class="text-right">+0.5%</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/cn.svg') }}"
												     alt="State Flag">
												India
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">1,326,801,576</td>
											<td class="text-right">1,311,050,527</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/us.svg') }}"
												     alt="State Flag">
												United States
											</td>
											<td>Americas</td>
											<td>Northern America</td>
											<td class="text-right">324,118,787</td>
											<td class="text-right">321,773,631</td>
											<td class="text-right">+0.7%</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/id.svg') }}"
												     alt="State Flag">
												Indonesia
											</td>
											<td>Asia</td>
											<td>South-Eastern Asia</td>
											<td class="text-right">260,581,100</td>
											<td class="text-right">257,563,815</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/br.svg') }}"
												     alt="State Flag">
												Brazil
											</td>
											<td>Americas</td>
											<td>South America</td>
											<td class="text-right">209,567,920</td>
											<td class="text-right">207,847,528</td>
											<td class="text-right">+0.8%</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/pk.svg') }}"
												     alt="State Flag">
												Pakistan
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">192,826,502</td>
											<td class="text-right">188,924,874</td>
											<td class="text-right">+2.1%</td>
										</tr>
										<tr>
											<td>7</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/ng.svg') }}"
												     alt="State Flag">
												Nigeria
											</td>
											<td>Africa</td>
											<td>Western Africa</td>
											<td class="text-right">186,987,563</td>
											<td class="text-right">182,201,962</td>
											<td class="text-right">+2.6%</td>
										</tr>
										<tr>
											<td>8</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/bd.svg') }}"
												     alt="State Flag">
												Bangladesh
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">162,910,864</td>
											<td class="text-right">160,995,642</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>9</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/ru.svg') }}"
												     alt="State Flag">
												Russia
											</td>
											<td>Europe</td>
											<td>Eastern Europe</td>
											<td class="text-right">143,439,832</td>
											<td class="text-right">143,456,918</td>
											<td class="text-right">0.0%</td>
										</tr>
										<tr>
											<td>10</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/mx.svg') }}"
												     alt="State Flag">
												Mexico
											</td>
											<td>Americas</td>
											<td>Central America</td>
											<td class="text-right">128,632,004</td>
											<td class="text-right">127,017,224</td>
											<td class="text-right">+1.3%</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center m-b">
					<h3 class="m-b-0">Bootstrap Responsive Table</h3>
					<small>Scroll horizontally on small devices, when viewing is smaller than 768px.</small>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="card">
							<div class="card-header">
								<div class="card-actions">
									<button type="button" class="card-action card-toggler" title="Collapse"></button>
									<button type="button" class="card-action card-reload" title="Reload"></button>
									<button type="button" class="card-action card-remove" title="Remove"></button>
								</div>
								<strong>Horizontal Scroll</strong>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead>
										<tr>
											<th>Rank</th>
											<th>Country</th>
											<th>Continent</th>
											<th>Region</th>
											<th class="text-right">2016</th>
											<th class="text-right">2015</th>
											<th class="text-right">Change</th>
										</tr>
										</thead>
										<tbody>
										<tr>
											<td>—</td>
											<td>
												<i>World</i>
											</td>
											<td>—</td>
											<td>—</td>
											<td class="text-right">7,432,663,275</td>
											<td class="text-right">7,349,472,099</td>
											<td class="text-right">+1.1%</td>
										</tr>
										<tr>
											<td>1</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/cn.svg') }}"
												     alt="State Flag">
												China
											</td>
											<td>Asia</td>
											<td>Eastern Asia</td>
											<td class="text-right">1,382,323,332</td>
											<td class="text-right">1,376,048,943</td>
											<td class="text-right">+0.5%</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/in.svg') }}"
												     alt="State Flag">
												India
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">1,326,801,576</td>
											<td class="text-right">1,311,050,527</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/us.svg') }}"
												     alt="State Flag">
												United States
											</td>
											<td>Americas</td>
											<td>Northern America</td>
											<td class="text-right">324,118,787</td>
											<td class="text-right">321,773,631</td>
											<td class="text-right">+0.7%</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/id.svg') }}"
												     alt="State Flag">
												Indonesia
											</td>
											<td>Asia</td>
											<td>South-Eastern Asia</td>
											<td class="text-right">260,581,100</td>
											<td class="text-right">257,563,815</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/br.svg') }}"
												     alt="State Flag">
												Brazil
											</td>
											<td>Americas</td>
											<td>South America</td>
											<td class="text-right">209,567,920</td>
											<td class="text-right">207,847,528</td>
											<td class="text-right">+0.8%</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/pk.svg') }}"
												     alt="State Flag">
												Pakistan
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">192,826,502</td>
											<td class="text-right">188,924,874</td>
											<td class="text-right">+2.1%</td>
										</tr>
										<tr>
											<td>7</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/ng.svg') }}"
												     alt="State Flag">
												Nigeria
											</td>
											<td>Africa</td>
											<td>Western Africa</td>
											<td class="text-right">186,987,563</td>
											<td class="text-right">182,201,962</td>
											<td class="text-right">+2.6%</td>
										</tr>
										<tr>
											<td>8</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/bd.svg') }}"
												     alt="State Flag">
												Bangladesh
											</td>
											<td>Asia</td>
											<td>Southern Asia</td>
											<td class="text-right">162,910,864</td>
											<td class="text-right">160,995,642</td>
											<td class="text-right">+1.2%</td>
										</tr>
										<tr>
											<td>9</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/ru.svg') }}"
												     alt="State Flag">
												Russia
											</td>
											<td>Europe</td>
											<td>Eastern Europe</td>
											<td class="text-right">143,439,832</td>
											<td class="text-right">143,456,918</td>
											<td class="text-right">0.0%</td>
										</tr>
										<tr>
											<td>10</td>
											<td>
												<img class="img-flag"
												     src="{{ asset('assets/images/flags/4x3/mx.svg') }}"
												     alt="State Flag">
												Mexico
											</td>
											<td>Americas</td>
											<td>Central America</td>
											<td class="text-right">128,632,004</td>
											<td class="text-right">127,017,224</td>
											<td class="text-right">+1.3%</td>
										</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
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
                                    <strong>Sidebar sticky*</strong>
	                                - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached.
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
									     alt="Flaming Red Theme">
								</a>
								<a class="theme-variants-alt" href="" title="Rounded Corners Version"
								   data-container="body" data-trigger="hover" data-placement="top"
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
								   data-toggle="tooltip">Rounded</a>
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
				<a class="" target="_blank">
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
		<script src="{{ asset('assets/js/demo.min.js') }}"></script>
	</body>
@endsection