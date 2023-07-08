<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div style="padding-left: 100px; padding-right: 100px;">
          <h2>User Info</h2>
          <div class="inputBox">
          <?php if(!empty($user)) :?>
            <?php foreach($user as $info): ?>
          Name: <input type="text" value="<?= $info->first_name; ?> <?= $info->middle_initial; ?> <?= $info->last_name; ?>" readonly><br><br>
          Username: <input type="text" value="<?= $info->username; ?>" readonly><br><br>
          Location: <input type="text" value="<?= $info->location; ?>" readonly><br><br>
          Position: <input type="text" value="<?= $info->position; ?>" readonly><br><br>
          </div>
          <h2>Contact Info</h2>
          <div class="inputBox">
          Work number: <input type="text" value="<?= $info->work_number; ?>" readonly><br><br>
          Mobile number: <input type="text" value="<?= $info->mobile_number; ?>" readonly><br><br>
          E-mail address: <input type="text" value="<?= $info->email; ?>" readonly><br><br>
          Work address: <input type="text" value="<?= $info->work_address; ?>" readonly><br><br>
          </div>
          <?php endforeach; ?>
          <a href="<?= url_to('logout');?>" >Logout</a>
        </div>
        <?php else: ?>
          <h1>Sorry! No record found</h1>
        <?php endif; ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->