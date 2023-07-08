<!-- Main content -->
<section class="content">
		<div class="container-fluid">

<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Resident</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Resident</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				<?php if(!empty($resident_list)) :?>
					<?php foreach($resident_list as $list): ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						
						<td><?= $list->first_name?> <?= $list->middle_initial?> <?= $list->last_name?></td>
						<td><?= $list->email?></td>
						<td><?= $list->address?></td>
						<td><?= $list->mobile_number?></td>
						<td>
							<?php 
								//$user_id = 0;
								$user_id = $list->id; 
							?>
							<?= '<a href="#editEmployeeModal" onclick="getId(' . $user_id . ')" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>'
							?>
							<?= '<a href="#deleteEmployeeModal" onclick="getDeleteId(' . $user_id . ')" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>'
							?>
						</td>
					</tr>
					<?php endforeach; ?>
				<?php else: ?>
                	<tr>Sorry! No record found</h1>
                <?php endif; ?>
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
	</div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('/dashboard/resident_records'); ?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Resident</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
				<div class="form-group">
						<label>First Name</label>
						<input type="text" name="first_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Middle Initial</label>
						<input type="text" name="middle_initial" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="last_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address" required></textarea>
					</div>
					<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="mobile_number" class="form-control" required>
					</div>			
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="add_resident" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('/dashboard/update_resident'); ?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Resident</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>First Name</label>
						<input type="hidden" name="user_id" id="userId" value="<?= $list->id ?>">
						<input type="text" name="first_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Middle Initial</label>
						<input type="text" name="middle_initial" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="last_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address" required></textarea>
					</div>
					<div class="form-group">
						<label>Mobile Number</label>
						<input type="text" name="mobile_number" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('/dashboard/delete_resident'); ?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Resident</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
					<input type="hidden" name="user_id" id="userDeleteId" value="<?= $list->id ?>">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
    </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->