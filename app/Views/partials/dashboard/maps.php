<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class="col-lg-5 connectedSortable">

<!-- Map card -->
<div class="card bg-gradient-primary">
  <div class="card-header border-0">
    <h3 class="card-title">
      <i class="fas fa-map-marker-alt mr-1"></i>
      Google Maps
    </h3>
    <!-- card tools -->
    <div class="card-tools">
      <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
    <!-- /.card-tools -->
  </div>
  <div class="card-body">
    <iframe id="world-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.9604195099173!2d120.89640549521096!3d14.486961693846052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cd321c8ea447%3A0xd14a80b835ddc8c4!2s43%20(Pinagpala)%2C%20San%20Antonio%2C%20Cavite%20City%2C%20Cavite!5e0!3m2!1sen!2sph!4v1684929628294!5m2!1sen!2sph" width="600" height="450" style="border:0; height: 292px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- /.card-body-->
  <div class="card-footer bg-transparent">
    <div class="row">   
      <div class="col-4 text-center">
        <div id="sparkline-1"></div>
        
      </div>
      <!-- ./col -->
      <div class="col-4 text-center">
        <div id="sparkline-2"></div>
        
      </div>
      <!-- ./col -->
      <div class="col-4 text-center">
        <div id="sparkline-3"></div>
        
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- /.card -->
</section>
<!-- right col -->