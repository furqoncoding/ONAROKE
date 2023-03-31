
<div class="content-body">
	<!-- Zero configuration table -->
	
	<section id="configuration">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title"><?php echo $title; ?></h4>
						<br>
						
					</div>
					
					<div class="card-content collapse show">
						<div class="card-body card-dashboard">
							<form action="<?php echo $action; ?>" method="post" class="form-horizontal">
								<div class="box-body">
									
									<div class="form-group">
										
										<label for="program_type_name">Program Type Description <?php echo form_error('program_type_description') ?></label>
										<input required="" type="text" class="form-control" name="program_type_description" id="program_type_description" placeholder="Program Type Description" value="<?php echo $program_type_description; ?>" />
									</div>
									<div class="form-group">
										
										<label for="status">Status <?php echo form_error('status') ?></label>
										<?php 
											$result= array();
											$result['']= "Status";
											$result['Y']= 'Y';
											$result['N']= 'N';
											
											echo form_dropdown('status', $result,$status,"class='form-control' id='status'");
											
										?>
									</div>
									<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
									<button type="submit" class="btn btn-secondary"><?php echo $button ?></button> 

									<a href="<?php echo site_url('programtype') ?>" class="btn btn-default">Cancel</a>
								</form>
							</body>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>