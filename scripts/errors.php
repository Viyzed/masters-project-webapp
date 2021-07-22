<?php if(count($errors) > 0): ?>
	
	<!-- Populate Error Array  -->
	<div id="error">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>

<?php endif ?>
