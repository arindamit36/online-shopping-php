<?php include('connect.php'); ?>

<?php $get_id = $_GET['cat_id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from category where cat_id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
           <h1>Edit Category</h1>
			
	
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_books.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Category_Name:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['cat_name']; ?>" placeholder="cat_name" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="cat_name" required>
			</div>
		</div>
		
		
		
		
			
		
		
		
		
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>