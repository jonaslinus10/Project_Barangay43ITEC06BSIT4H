<?= $this->extend("layouts/base"); ?>

<?= $this->section("title"); ?>
	<?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

	<?= $this->include("partials/dashboard/sidebar"); ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">

		<?= $this->include("partials/dashboard/header"); ?>

		<!-- Main content -->
		<section class="content">

			<div class="container-fluid">
			
				<?= $this->include("partials/dashboard/dashboard_box"); ?>

					<!-- Main row -->
					<div class="row">

						<?= $this->include("partials/dashboard/barangay_officials"); ?>

						<?= $this->include("partials/dashboard/maps"); ?>

					</div>
					<!-- /.row (main row) -->

			</div>
			<!-- /.container-fluid -->
			
		</section>
		<!-- /.content -->
	</div>

<?= $this->endSection(); ?>
