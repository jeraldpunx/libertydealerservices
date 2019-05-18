<?php  if (count($errors) > 0) : ?>
<div class="alert alert-danger" role="alert">
	<p><b>Error: </b></p>
	<?php foreach ($errors as $error) : ?>
	  <p>- <?php echo $error ?></p>
	<?php endforeach ?>
</div>
<?php  endif ?>

<?php  if (count($success) > 0) : ?>
<div class="alert alert-success" role="alert">
	<?php foreach ($success as $suc) : ?>
	  <p><?php echo $suc ?></p>
	<?php endforeach ?>
</div>
<?php  endif ?>