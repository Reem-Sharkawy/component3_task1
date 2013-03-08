
<div class="users form">
	<?php echo $this->form->create ('User'); ?>
	<fieldset>
		<legend> Register</legend>
		<?php 
		echo $this->form->input('username');
		echo $this->form->input('password');
		
		?>

	</fieldset>

	<?php echo $this->form->end('Submit');?>
</div>

