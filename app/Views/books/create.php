<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Codeigniter 4 CRUD Application</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
</head>
<body>


	<div class="container-fluid bg-purple shadow-sm">
		<div class="container pb-2 pt-2">
			<div class="text-white h4">Simple Codeigniter 4 CRUD Application</div>
		</div>
	</div>

	<div class="bg-white shadow-sm">
		<div class="container">
			<div class="row">
				<nav class="nav nav-underline">
					<div class="nav-link">Books / create</div>
				</nav>
			</div>
		</div>		
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-header-title">Create Books</div>
					</div>

					<div class="card-body">
						<form method="POST" name="createForm" id="createForm">
							<div class="form-group">
								<label class="">Name</label>
								<input type="text" name="names" id="names" class="form-control <?php echo (isset($validation) && $validation->hasError('names')) ? 'is-invalid' : ''; ?>" value="<?php echo set_value('names');?>">

								<?php
									if(isset($validation) && $validation->hasError('names')){
										echo '<p class="invalid-feedback">' .$validation->getError('names').'</p>';
									}
								?>
							</div>

							<div class="form-group">
								<label class="">Author</label>
								<input type="text" name="author" id="author" class="form-control echo <?php (isset($validation) && $validation->hasError('author')) ? 'is-invalid' : '' ?>" value="<?php echo set_value('author');?>">
								<?php
									if(isset($validation) && $validation->hasError('author')){
										echo '<p class="invalid-feedback">' .$validation->getError('author').'</p>';
									}
								?>
							</div>

							<div class="form-group">
								<label class="">ISBN No</label>
								<input type="text" name="isbn_no" id="isbn_no" class="form-control" value="<?php echo set_value('isbn_no');?>">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>
						</form>						
					</div>
				</div>
			</div>						
		</div>
	</div>

</body>
</html>