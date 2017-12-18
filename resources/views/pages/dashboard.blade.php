@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/application.min.css') }}">
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
						<li class="hidden-xs hidden-sm">
							<form class="navbar-search navbar-search-collapsed">
								<div class="navbar-search-group">
									<input class="navbar-search-input" type="text"
									       placeholder="Search for people, companies, and more&hellip;">
									<button class="navbar-search-toggler" title="Expand search form ( S )"
									        aria-expanded="false" type="submit">
										<span class="icon icon-search icon-lg"></span>
									</button>
									<button class="navbar-search-adv-btn" type="button">Advanced</button>
								</div>
							</form>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
							   aria-haspopup="true">
                                <span class="icon-with-child hidden-xs">
	                                <span class="icon icon-envelope-o icon-lg"></span>
                                    <span class="badge badge-danger badge-above right">8</span>
                                </span>
								<span class="visible-xs-block">
                                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                                    <span class="badge badge-danger pull-right">8</span>
                                    Messages
                                </span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
								<div class="dropdown-header">
									<a class="dropdown-link" href="compose.html">New Message</a>
									<h5 class="dropdown-heading">Recent messages</h5>
								</div>
								<div class="dropdown-body">
									<div class="list-group list-group-divided custom-scrollbar">
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0299419341.jpg') }}"
													     alt="Harry Jones">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">16 min</small>
													<h5 class="notification-heading">Harry Jones</h5>
													<p class="notification-text">
														<small class="truncate">Hi Teddy, Just wanted to let you know we
															got the project! We should be starting the planning next
															week. Harry
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0310728269.jpg') }}"
													     alt="Daniel Taylor">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">2 hr</small>
													<h5 class="notification-heading">Daniel Taylor</h5>
													<p class="notification-text">
														<small class="truncate">Teddy Boyyyy, label text isn't
															vertically aligned with value text in grid forms when using
															.form-control... DT
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0460697039.jpg') }}"
													     alt="Charlotte Harrison">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 20</small>
													<h5 class="notification-heading">Charlotte Harrison</h5>
													<p class="notification-text">
														<small class="truncate">Dear Teddy, Can we discuss the benefits
															of this approach during our Monday meeting? Best regards
															Charlotte Harrison
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0531871454.jpg') }}"
													     alt="Ethan Walker">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 19</small>
													<h5 class="notification-heading">Ethan Walker</h5>
													<p class="notification-text">
														<small class="truncate">If you need any further assistance,
															please feel free to contact us. We are always happy to
															assist you. Regards, Ethan
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0601274412.jpg') }}"
													     alt="Sophia Evans">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 18</small>
													<h5 class="notification-heading">Sophia Evans</h5>
													<p class="notification-text">
														<small class="truncate">Teddy, Please call me when you finish
															your work! I have many things to discuss. Don't forget call
															me !! Sophia
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0777931269.jpg') }}"
													     alt="Harry Walker">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 17</small>
													<h5 class="notification-heading">Harry Walker</h5>
													<p class="notification-text">
														<small class="truncate">Thank you for your message. I am
															currently out of the office, with no email access. I will be
															returning on 20 Jun.
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0872116906.jpg') }}"
													     alt="Emma Lewis">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 15</small>
													<h5 class="notification-heading">Emma Lewis</h5>
													<p class="notification-text">
														<small class="truncate">Teddy, Please find the attached report.
															I am truly sorry and very embarrassed about not finishing
															the report by the deadline.
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0980726243.jpg') }}"
													     alt="Eliot Morgan">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">Sep 15</small>
													<h5 class="notification-heading">Eliot Morgan</h5>
													<p class="notification-text">
														<small class="truncate">Dear Teddy, Please accept this message
															as notification that I was unable to work yesterday, due to
															personal illness.m
														</small>
													</p>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown-footer">
									<a class="dropdown-btn" href="#">See All</a>
								</div>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
							   aria-haspopup="true">
                                <span class="icon-with-child hidden-xs">
                                    <span class="icon icon-bell-o icon-lg"></span>
                                    <span class="badge badge-danger badge-above right">7</span>
                                </span>
								<span class="visible-xs-block">
                                    <span class="icon icon-bell icon-lg icon-fw"></span>
                                    <span class="badge badge-danger pull-right">7</span>
                                    Notifications
                                </span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
								<div class="dropdown-header">
									<a class="dropdown-link" href="#">Mark all as read</a>
									<h5 class="dropdown-heading">Recent Notifications</h5>
								</div>
								<div class="dropdown-body">
									<div class="list-group list-group-divided custom-scrollbar">
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<span
														class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">35 min</small>
													<h5 class="notification-heading">Update Status</h5>
													<p class="notification-text">
														<small class="truncate">Failed to get available update data. To
															ensure the proper functioning of your application, update
															now.
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<span class="icon icon-flag bg-success rounded sq-40"></span>
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">43 min</small>
													<h5 class="notification-heading">Account Contact Change</h5>
													<p class="notification-text">
														<small class="truncate">A contact detail associated with your
															account teddy.wilson, has recently changed.
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<span
														class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">1 hr</small>
													<h5 class="notification-heading">Failed Login Warning</h5>
													<p class="notification-text">
														<small class="truncate">There was a failed login attempt from
															"192.98.19.164" into the account teddy.wilson.
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0310728269.jpg') }}"
													     alt="Daniel Taylor">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">4 hr</small>
													<h5 class="notification-heading">Daniel Taylor</h5>
													<p class="notification-text">
														<small class="truncate">Like your post: "Everything you know
															about Bootstrap is wrong".
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0872116906.jpg') }}"
													     alt="Emma Lewis">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">8 hr</small>
													<h5 class="notification-heading">Emma Lewis</h5>
													<p class="notification-text">
														<small class="truncate">Like your post: "Everything you know
															about Bootstrap is wrong".
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0601274412.jpg') }}"
													     alt="Sophia Evans">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">8 hr</small>
													<h5 class="notification-heading">Sophia Evans</h5>
													<p class="notification-text">
														<small class="truncate">Like your post: "Everything you know
															about Bootstrap is wrong".
														</small>
													</p>
												</div>
											</div>
										</a>
										<a class="list-group-item" href="#">
											<div class="notification">
												<div class="notification-media">
													<img class="rounded" width="40" height="40"
													     src="{{ asset('assets/images/0180441436.jpg') }}"
													     alt="Teddy Wilson">
												</div>
												<div class="notification-content">
													<small class="notification-timestamp">9 hr</small>
													<h5 class="notification-heading">Teddy Wilson</h5>
													<p class="notification-text">
														<small class="truncate">Published a new post: "Everything you
															know about Bootstrap is wrong".
														</small>
													</p>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="dropdown-footer">
									<a class="dropdown-btn" href="#">See All</a>
								</div>
							</div>
						</li>
						<li class="dropdown hidden-xs">
							<button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
								<img class="rounded" width="36" height="36"
								     src="{{ asset('assets/images/0180441436.jpg') }}" alt="Teddy Wilson">
								Teddy Wilson
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<a href="upgrade.html">
										<h5 class="navbar-upgrade-heading">
											Upgrade Now
											<small class="navbar-upgrade-notification">You have 15 days left in your
												trial.
											</small>
										</h5>
									</a>
								</li>
								<li class="divider"></li>
								<li class="navbar-upgrade-version">Version: 1.0.0</li>
								<li class="divider"></li>
								<li>
									<a href="contacts.html">Contacts</a>
								</li>
								<li>
									<a href="profile.html">Profile</a>
								</li>
								<li>
									<a href="login-1.html">Sign out</a>
								</li>
							</ul>
						</li>
						<li class="visible-xs-block">
							<a href="contacts.html">
								<span class="icon icon-users icon-lg icon-fw"></span>
								Contacts
							</a>
						</li>
						<li class="visible-xs-block">
							<a href="profile.html">
								<span class="icon icon-user icon-lg icon-fw"></span>
								Profile
							</a>
						</li>
						<li class="visible-xs-block">
							<a href="login-1.html">
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
										<a href="form-controls.html">Form controls</a>
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
										<a href="responsive-tables.html">Responsive tables</a>
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