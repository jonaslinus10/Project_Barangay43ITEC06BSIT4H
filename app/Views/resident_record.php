<?php if (!isset($_SESSION['user'])) {
   redirect()->to('/dashboard/login');
} ?>

<?= $this->extend("layouts/base"); ?>

<?= $this->section("title"); ?>
	<?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

	<?= $this->include("partials/resident_record/sidebar") ?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		
		<?= $this->include("partials/resident_record/header") ?>
				
		<?= $this->include("partials/resident_record/table") ?>
		
	</div>

<?= $this->endSection(); ?>