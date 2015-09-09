<?php
include "inc/header.php";
require "./ToDoClass.php";

// saving the todo's
if (isset($_POST['todo'])) {
	$item = $_POST['todo'];
	// basic validation
	if ($item !== '') {
		ToDo::addItem($item);
	}
} else if (isset($_POST['id']) && isset($_POST['item']) && isset($_POST['update'])) {
	$id = $_POST['id'];
	$item = $_POST['item'];

	ToDo::updateItem($id, $item);
} else if (isset($_POST['id']) && isset($_POST['delete'])) {
	$id = $_POST['id']

	ToDo::deleteItem($id);
}

?>

<div class="main">
	<h2><i class="glyphicon glyphicon-circle-arrow-right"></i> ToDo App</h2>
	<div class="col-md-6">
		<form action="" method="post">
			<div class="input-group">
	      <input type="text" name="todo" class="form-control" placeholder="Type todo here">
	      <span class="inpu	t-group-btn">
	        <button class="btn btn-success" type="submit">Add</button>
	      </span>
	    </div>
	  </form>
	</div>

	<div class="col-md-6 todo">
		<ul>
		<?php
			// todo listing
			foreach (ToDo::getItems() as $row) {
				echo "<li>" . $row['item'] . " - " . $row['date_time']. "</li>";
				?>

				<form method="POST">
					<input type="text" name="item" value="<?php echo $row['item'];?>">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<button type="submit" name="update">update</button>
					<button type="submit" name="delete">delete</button>
				</form>

				<?php
			}

		?>
		</ul>
	</div>

</div>


<?php include "inc/footer.php"; ?>
