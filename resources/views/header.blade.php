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
					<li class="dropdown">
						<a class="dropdown-toggle" href="{{ URL::to('apps') }}">Apps</a>
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