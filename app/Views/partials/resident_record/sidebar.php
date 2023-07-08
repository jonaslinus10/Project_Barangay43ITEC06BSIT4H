<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= url_to('index');?>" class="brand-link">
	<img src="<?= base_url('/assets/AdminLTE/dist/img/barangaylogo.png');?>" alt="User Avatar" class="img-size-32 mr-1 img-circle">
		<span class="brand-text font-weight-light">Brgy. 43 Pinagpala</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
		<div class="image">
			<a href="<?= url_to('user');?>">
			<img src="<?= base_url('/assets/AdminLTE/dist/img/kapitana.jpg');?>" class="img-circle elevation-2" alt="User Image">
			</a>
		</div>
		<div class="info">
			<a href="<?= url_to('user');?>" class="d-block">Lani H. Villamin</a>
		</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
		<div class="input-group" data-widget="sidebar-search">
			<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
			<button class="btn btn-sidebar">
				<i class="fas fa-search fa-fw"></i>
			</button>
			</div>
		</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
				with font-awesome or any other icon font library -->
			<li class="nav-item menu-open">
			<a href="#" class="nav-link active">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p>
				Menu
				<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
				<a href="<?= url_to('index');?>" class="nav-link">
				<i class="fa fa-home"></i>
					<p>Dashboard</p>
				</a>
				</li>
				<li class="nav-item">
				<a href="<?= url_to('resident_record');?>" class="nav-link active">
					<i class="fa fa-book"></i>
					<p>Resident Record</p>
				</a>
				</li>
				<li class="nav-item">
				<a href="<?= url_to('user');?>" class="nav-link">
					<i class="fa fa-user"></i>
					<p>User</p>
				</a>
				</li>
			</ul>
			</li>
		</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>