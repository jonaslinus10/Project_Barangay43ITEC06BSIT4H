<!-- Left col -->
<section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
              <img src="<?= base_url('/assets/AdminLTE/dist/img/barangaylogo.png');?>" alt="User Avatar" class="img-size-32 mr-1 img-circle">
                Brgy. Officials
              </h3>
              <!--<div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                  </li>
                </ul>
              </div> -->
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <?php if(!empty($barangay_list)) :?>
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 320px; overflow:scroll;">
                  <?php foreach($barangay_list as $list): ?>
                    <p><b><?= $list->first_name?> <?= $list->middle_initial?> <?= $list->last_name?></b><br><small style="color: red;"><?= $list->position?></small></p><hr>
                  <?php endforeach; ?>
                    
                </div>
                <?php else: ?>
                  <h1>Sorry! No record found</h1>
                <?php endif; ?>
                
              </div>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->