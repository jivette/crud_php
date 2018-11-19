<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>List</title>
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
      <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
   </head>

<body>
	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Hello, world!</h1>
			<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<hr class="my-4">
			<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		</div>
	</div>

	<div class="container">
		<a class="btn btn-primary float-right" href="add.php">Add column</a>
		<div class="m-4"></div>
		<table class="table m-4">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Firstname</th>
				<th scope="col">Lastname</th>
				<th scope="col">Address</th>
				<th scope="col">Gender</th>
				<th scope="col">Action</th>
				</tr>
			</thead>	
		
			<tbody>
				<?php
					//fetch data from json
					$data = file_get_contents('members.json');
					//decode into php array
					$data = json_decode($data);
		
					$index = 0;
					foreach($data as $row){
						echo "
							<tr>
								<td scope='row'>".$row->id."</td>
								<td>".$row->firstname."</td>
								<td>".$row->lastname."</td>
								<td>".$row->address."</td>
								<td>".$row->gender."</td>
								<td>
									<button class='btn btn-info' href='edit.php?index=".$index."'>Edit</button>
									<button class='btn btn-danger' href='delete.php?index=".$index."'>Delete</button>
								</td>
							</tr>
						";
		
						$index++;
					}
				?>
			</tbody>
		</table>
	</div>
</body>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</html>
