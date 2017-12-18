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
								     src="{{ asset('assets/images/0180441436.jpg') }}" alt="Teddy Wilson">Teddy Wilson
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
								<li><a href="contacts.html">Contacts</a></li>
								<li><a href="profile.html">Profile</a></li>
								<li><a href="login-1.html">Sign out</a></li>
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
							<li class="sidenav-item has-subnav active">
								<a href="#" aria-haspopup="true">
									<span class="sidenav-icon icon icon-edit"></span>
									<span class="sidenav-label">Forms</span>
								</a>
								<ul class="sidenav-subnav collapse">
									<li class="active">
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
						<span class="d-ib">Form controls</span>
						<span class="d-ib">
                            <a class="title-bar-shortcut" href="#" title="Add to shortcut list" data-container="body"
                               data-toggle-text="Remove from shortcut list" data-trigger="hover" data-placement="right"
                               data-toggle="tooltip">
                                <span class="sr-only">Add to shortcut list</span>
                            </a>
                        </span>
					</h1>
					<p class="title-bar-description">
						<small>
							In addition to the basic styling that Bootstrap offers for every element of a form, we have
							expanded this styling with custom
							<code>selects</code>,
							<code>checkboxes</code>,
							<code>radios</code>,
							<code>switches</code>
							and a few additional classes.
							<span class="nowrap">Please see
								<a href="toggles.html">Toggles page</a>
							</span>.
						</small>
					</p>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-1">Text input</label>
									<div class="col-sm-9">
										<input id="form-control-1" class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-2">Password input</label>
									<div class="col-sm-9">
										<input id="form-control-2" class="form-control" type="password"
										       value="test.1234">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-3">Input with
										placeholder</label>
									<div class="col-sm-9">
										<input id="form-control-3" class="form-control" type="email"
										       placeholder="Email Address">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-4">Predefined value</label>
									<div class="col-sm-9">
										<input id="form-control-4" class="form-control" type="url"
										       value="language:JavaScript">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-5">Read only input</label>
									<div class="col-sm-9">
										<input id="form-control-5" class="form-control" type="email"
										       value="teddy.wilson@elephant.theme" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Static input</label>
									<div class="col-sm-9">
										<p class="form-control-static">teddy.wilson@elephant.theme</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-6">Select</label>
									<div class="col-sm-9">
										<select id="form-control-6" class="form-control">
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-7">Multiple select</label>
									<div class="col-sm-9">
										<select id="form-control-7" class="form-control" multiple="multiple">
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-8">Textarea</label>
									<div class="col-sm-9">
										<textarea id="form-control-8" class="form-control" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-9">File input</label>
									<div class="col-sm-9">
										<input id="form-control-9" type="file" accept="image/*" multiple>
										<p class="help-block">
											<small>Unlimited number of files can be uploaded to this field. Allowed
												types: png gif jpg jpeg.
											</small>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Checkboxes and radios</label>
									<div class="col-sm-9">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="mode" checked="checked"> Put site into
												maintenance mode
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="message" value="none"> None
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="message" value="all" checked="checked"> All
												messages
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="message" value="some"> Errors and warnings
											</label>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group form-group-lg">
									<label class="col-sm-3 control-label" for="form-control-10">Large label</label>
									<div class="col-sm-9">
										<input id="form-control-10" class="form-control" type="text"
										       placeholder="Large input">
									</div>
								</div>
								<div class="form-group form-group-md">
									<label class="col-sm-3 control-label" for="form-control-11">Default label</label>
									<div class="col-sm-9">
										<input id="form-control-11" class="form-control" type="text"
										       placeholder="Default input">
									</div>
								</div>
								<div class="form-group form-group-sm">
									<label class="col-sm-3 control-label" for="form-control-12">Small label</label>
									<div class="col-sm-9">
										<input id="form-control-12" class="form-control" type="text"
										       placeholder="Small input">
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-13">Input with
										success</label>
									<div class="col-sm-9 has-success has-feedback">
										<input id="form-control-13" class="form-control" type="text">
										<span class="form-control-feedback" aria-hidden="true">
                                            <span class="icon icon-check"></span>
                                        </span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-14">Input with
										warning</label>
									<div class="col-sm-9 has-warning has-feedback">
										<input id="form-control-14" class="form-control" type="text">
										<span class="form-control-feedback" aria-hidden="true">
                                            <span class="icon icon-exclamation-triangle"></span>
                                        </span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-15">Input with error</label>
									<div class="col-sm-9 has-error has-feedback">
										<input id="form-control-15" class="form-control" type="text">
										<span class="form-control-feedback" aria-hidden="true">
                                            <span class="icon icon-times"></span>
                                        </span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-16">Input with help
										text</label>
									<div class="col-sm-9 has-error has-feedback">
										<input id="form-control-16" class="form-control" type="password" value="test">
										<span class="form-control-feedback" aria-hidden="true">
                                            <span class="icon icon-times"></span>
                                        </span>
										<p class="help-block">Password is too short and needs at least one number.</p>
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-17">Input groups</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input id="form-control-17" class="form-control" type="text"
											       placeholder="eg. teddy.wilson">
											<span class="input-group-addon">@elephant.theme</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-4 col-sm-3 col-sm-offset-3">
										<div class="input-group">
											<span class="input-group-addon">$</span>
											<input class="form-control" type="text" value="1.00" aria-label="US Dollar">
										</div>
									</div>
									<div class="col-xs-4 col-sm-3">
										<div class="input-group">
											<span class="input-group-addon">€</span>
											<input class="form-control" type="text" value="0.89" aria-label="Euro">
										</div>
									</div>
									<div class="col-xs-4 col-sm-3">
										<div class="input-group">
											<span class="input-group-addon">£</span>
											<input class="form-control" type="text" value="0.69"
											       aria-label="British Pound">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="icon icon-lock"></span>
                                            </span>
											<input class="form-control" type="password" placeholder="Password">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-group">
											<div class="input-group-btn dropdown">
												<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
												        type="button">
													GitHub
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="#">
															<div class="media">
																<div class="media-left">
																	<span
																		class="icon icon-github icon-2x icon-fw"></span>
																</div>
																<div class="media-body">
																	GitHub
																	<br>
																	<small>Clone with an SSH key from your GitHub
																		settings.
																	</small>
																</div>
															</div>
														</a>
													</li>
													<li>
														<a href="#">
															<div class="media">
																<div class="media-left">
																	<span
																		class="icon icon-bitbucket icon-2x icon-fw"></span>
																</div>
																<div class="media-body">
																	Bitbucket
																	<br>
																	<small>Clone with an SSH key from your Bitbucket
																		settings.
																	</small>
																</div>
															</div>
														</a>
													</li>
												</ul>
											</div>
											<input class="form-control" type="text" value="">
											<div class="input-group-btn">
												<button class="btn btn-primary" title="Copy to clipboard"
												        data-container="body" data-placement="top" data-toggle="tooltip"
												        type="button">
													<span class="icon icon-copy icon-fw"></span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-18">Thick border</label>
									<div class="col-sm-9">
										<input id="form-control-18" class="form-control input-thick" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-19">Rounded corners</label>
									<div class="col-sm-9">
										<input id="form-control-19" class="form-control input-pill" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-20">Input with
										contrast</label>
									<div class="col-sm-9">
										<input id="form-control-20" class="form-control input-contrast" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-21">Custom select</label>
									<div class="col-sm-9">
										<select id="form-control-21" class="custom-select">
											<option value="" selected="selected">Language</option>
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-22">Custom file
										input</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input class="form-control" type="text" placeholder="No file chosen">
											<span class="input-group-btn">
                                                <label class="btn btn-primary file-upload-btn">
                                                    <input id="form-control-22" class="file-upload-input" type="file"
                                                           name="file">
                                                    <span class="icon icon-paperclip icon-lg"></span>
                                                </label>
                                            </span>
										</div>
										<p class="help-block">
											<small>Click the button next to the input field.</small>
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Custom checkboxes,
										<br>radios and switches</label>
									<div class="col-sm-9">
										<div class="custom-controls-stacked m-t">
											<label class="custom-control custom-control-primary custom-checkbox">
												<input class="custom-control-input" type="checkbox" name="mode"
												       checked="checked">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-label">Put site into maintenance mode</span>
											</label>
											<label class="custom-control custom-control-primary custom-radio">
												<input class="custom-control-input" type="radio" name="message"
												       value="none">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-label">None</span>
											</label>
											<label class="custom-control custom-control-primary custom-radio">
												<input class="custom-control-input" type="radio" name="message"
												       value="all" checked="checked">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-label">All messages</span>
											</label>
											<label class="custom-control custom-control-primary custom-radio">
												<input class="custom-control-input" type="radio" name="message"
												       value="some">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-label">Errors and warnings</span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<label class="switch switch-primary">
											<input class="switch-input" type="checkbox" checked="checked">
											<span class="switch-track"></span>
											<span class="switch-thumb"></span>
										</label>
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group form-group-lg">
									<label class="col-sm-3 control-label" for="form-control-23">Custom select</label>
									<div class="col-sm-9">
										<select id="form-control-23" class="custom-select custom-select-lg">
											<option value="" selected="">--Large--</option>
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<select class="custom-select">
											<option value="" selected="">--Default--</option>
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<select class="custom-select custom-select-sm">
											<option value="" selected="">--Small--</option>
											<option value="c-plus-plus">C++</option>
											<option value="css">CSS</option>
											<option value="java">Java</option>
											<option value="javascript">JavaScript</option>
											<option value="php">PHP</option>
											<option value="python">Python</option>
											<option value="ruby">Ruby</option>
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="demo-form-wrapper">
							<form class="form form-horizontal">
								<div class="form-group">
									<label class="col-sm-3 control-label" for="form-control-24">Input with icon</label>
									<div class="col-sm-9">
										<div class="input-with-icon">
											<input id="form-control-24" class="form-control" type="email"
											       placeholder="Email address">
											<span class="icon icon-envelope input-icon"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-with-icon">
											<input class="form-control" type="password" placeholder="Password">
											<span class="icon icon-lock input-icon"></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-with-icon">
											<div class="input-group">
												<input class="form-control" type="password" placeholder="Password">
												<span class="input-group-addon">
                                                    <label
	                                                    class="custom-control custom-control-primary custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox">
                                                        <span class="custom-control-indicator"></span>
	                                                    <span class="custom-control-label">Show</span>
                                                    </label>
                                                </span>
											</div>
											<span class="icon icon-lock input-icon"></span>
										</div>
									</div>
								</div>
								<div class="form-group form-group-lg">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-with-icon">
											<input class="form-control input-thick pill" type="text"
											       placeholder="Search&hellip;">
											<span class="icon icon-search input-icon"></span>
										</div>
									</div>
								</div>
								<div class="form-group form-group-lg">
									<div class="col-sm-9 col-sm-offset-3">
										<div class="input-with-icon">
											<input class="form-control input-thick pill" type="text"
											       placeholder="Search&hellip;">
											<span class="spinner spinner-default spinner-sm input-icon"></span>
										</div>
									</div>
								</div>
							</form>
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
				<a class="rounded sq-36 bg-linkedin" href="" title="Share on LinkedIn" target="_blank">
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