<?php 
include "inc/header.php";
require "../conn.php";


// saving the todo's
if (isset($_POST['todo'])) {
	$todo = $_POST['todo'];
	$sql = "INSERT INTO todo (item) VALUES ('" . 
							$todo . "')";

	$conn->query($sql);
}

// retrieving the todos

$sql = "SELECT * FROM todo";
$result = $conn->query($sql);

?>

<div class="main">
	<h2><i class="glyphicon glyphicon-circle-arrow-right"></i> ToDo App</h2>
	<div class="col-md-6">
		<form action="" method="post">
			<div class="input-group">
	      <input type="text" name="todo" class="form-control" placeholder="Type todo here">
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="submit">Add</button>
	      </span>
	    </div>
	  </form>
	</div>

	<div class="col-md-6 todo">
		<ul>
		<?php
			// todo listing
			foreach ($result as $row) {
				echo "<li>" . $row['item'] . "</li>";
			}

		?>
		</ul>
	</div>

</div>


<?php include "inc/footer.php"; ?>