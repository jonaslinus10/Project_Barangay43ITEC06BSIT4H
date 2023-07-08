<?= $this->extend("layouts/base"); ?>

<?= $this->section("title"); ?>
	<?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

	<?= $this->include("partials/user/sidebar"); ?>
	
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
    
  			<?= $this->include("partials/user/header"); ?>

			<?= $this->include("partials/user/user_information"); ?>

  		</div>

<?= $this->endSection(); ?>