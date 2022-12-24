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
					<div class="nav-link">Books / View</div>
				</nav>
			</div>
		</div>		
	</div>

	<div class="container mt-2">
		<div class="row">
			<div class="col-md-12 text-right">
				<a href="<?php echo base_url("books/create");?>" class="btn btn-primary btn-sm">ADD</a>
			</div>
		</div>
	</div>

	<div class="container mt-4">
		<div class="row">

			<div class="col-md-12">
				<?php if(!empty($session->getFlashdata('success'))){?>
					<div class="alert alert-success">
						<?php echo $session->getFlashdata('success');?>
					</div>
				<?php }?>
			</div>

			<div class="col-md-12">
				<?php if(!empty($session->getFlashdata('error'))){?>
					<div class="alert alert-error">
						<?php echo $session->getFlashdata('error');?>
					</div>
				<?php }?>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-purple text-white">
						<div class="card-header-title">Books</div>
					</div>

					<div class="card-body">
						<table class="table table-striped">
							<tr>
								<th>Id</th>
								<th>Title</th>
								<th>ISBN</th>
								<th>Author</th>
								<th width="150">Actions</th>
							</tr>

							<?php 
							    if(!empty($books_list)){ 
								  
								    foreach($books_list as $value){
									// $i++;
							?>

							<tr>
								<td><?php echo $value['id'];?></td>
								<td><?php echo $value['name'];?></td>
								<td><?php echo $value['isbn'];?></td>
								<td><?php echo $value['author'];?></td>
								<td>
									<a href="<?php echo base_url("books/edit/".$value['id']);?>" class="btn btn-primary btn-sm">Edit</a>
									<a href="#" onclick="deleteConfirm(<?php echo $value['id'];?>);" class="btn btn-danger btn-sm">Delete</a>
								</td>
							</tr>
						    <?php }}else{ ?>
						    	<tr>
						    		<td colspan="5">No record available</td>
						    	</tr>
						    <?php }?>

						</table>					
					</div>
				</div>
			</div>						
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	function deleteConfirm(id){
		// alert(id);
		if(confirm("Are you sure want to delete?")){
			window.location.href="<?php echo base_url('books/delete/')?>/"+id;
		}
	}
</script>