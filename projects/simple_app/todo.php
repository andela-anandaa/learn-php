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
}

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	if($id != '') {
		ToDo::deleteItem($id);
	}
}

if(isset($_POST['update_sent'])) {
	$result = ToDo::updateItem($_POST['up_id'], $_POST['update_sent']);
}

?>



<div class="main">
	<h2><i class="glyphicon glyphicon-circle-arrow-right"></i> ToDo App</h2>
	<div class="col-md-6">
<?php

if(isset($_GET['update_id'])) {
?>
		<form action="/todo.php" method="post">
			<div class="input-group">
		    <input type="text" name="update_sent" class="form-control" 
		    	value="<?php echo $_GET['update_text'];?>">
		    <input name="up_id" value= "<?php echo $_GET['update_id']; ?>" hidden>
		    <span class="input-group-btn">
		      <button class="btn btn-success" type="submit">Update</button>
		    </span>
		  </div>
		</form>
<?php
	}
	else {
?>
		<form action="" method="post">
			<div class="input-group">
	      <input type="text" name="todo" class="form-control" placeholder="Type todo here">
	      <span class="input-group-btn">
	        <button class="btn btn-success" type="submit">Add</button>
	      </span>
	    </div>
	  </form>

	  <?php } ?>
	</div>

	<div class="col-md-6 todo">
		<ul>
		<?php
			// todo listing
			foreach (ToDo::getItems() as $row) {
				echo '<li>' . $row['item'] . ' - ' . $row['date_time'] . 
				'<a href="?id='. $row['tid']. '">
					<img src="images/trash.png" class="image-right"></a>' . 
				'<a href="?update_id=' . $row['tid'] .'&update_text= '. $row['item'] .'">
				<img src="images/pencil.png" class="image-right"></a></li>';
			}

		?>
		</ul>
	</div>

</div>


<?php include "inc/footer.php"; ?>
