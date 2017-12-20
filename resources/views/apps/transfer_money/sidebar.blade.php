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
					{{--<li class="sidenav-item has-subnav">
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
					</li>--}}
					<li class="sidenav-item has-subnav">
						<a href="{{ URL::to('customers') }}">
							<span class="sidenav-icon">
								<i class="material-icons" style="transform: translate(0, -2px);">people</i>
							</span>
							<span class="sidenav-label">Customers</span>
						</a>
					</li>
					<li class="sidenav-item has-subnav">
						<a href="{{ URL::to('transactions') }}">
							<span class="sidenav-icon">
								<i class="material-icons" style="transform: translate(0, -2px);">account_balance_wallet</i>
							</span>
							<span class="sidenav-label">Transactions</span>
						</a>
					</li>
					<li class="sidenav-item has-subnav">
						<a href="{{ URL::to('product-codes') }}">
							<span class="sidenav-icon">
								<i class="material-icons" style="transform: translate(0, -2px);">code</i>
							</span>
							<span class="sidenav-label">Product Codes</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
