<?php 
require_once('db.php');
if (isset($_REQUEST['id']) ){
 $id = $_REQUEST['id'];
?>
<form class="form-horizontal text-center" action="action/submitcourse.php?id=<?php echo $id?>" method="post">
<div class="btn-group">
	<button class="btn btn-success" type="submit" name="delete-course">DELETE</button>
	<button class="btn btn-danger"  data-dismiss="modal">CANCEL</button>
</div>
</form>
<?php
}
?>