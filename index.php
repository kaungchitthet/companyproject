<?php include "partials/header.php" ?>
<?php include "partials/navbar.php" ?>
	<div class="conatiner">
		<h1 class="text-center">Company</h1>
		<div class="col-md-8 col-md-offset-2">

			<table class="table">
			<tr>
				<th>No</th><th>Name</th><th>Address</th><th>Phone</th><th></th>
			</tr>	
			<?php 
					$db=new mysqli("localhost","root","","companyproject");
					
					if (isset($_GET["search"]))
					{
						$value=$_GET["search"];
						$query="select * from company where name Like '".$value."%'";	
					}
					else
					{
						$query="select * from company";	
					}
					
					

					$result=$db->query($query);
					while ($c=$result->fetch_object())
					{
						echo '<tr>
								<td>'.$c->id.'</td><td>'.$c->name.'</td><td>'.$c->address.'</td><td>'.$c->phone.'</td><td>
								<a href="" class="btn btn-info">Edit</a><a href="" class="btn btn-danger">Delete</a>
								</td>
							</tr>';
					}
			 ?>
			
			
			</table>	
		</div>
	</div>
<?php include "partials/footer.php" ?>