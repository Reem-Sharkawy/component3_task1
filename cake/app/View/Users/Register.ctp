<div class="users index">
	<h2>Users</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th>username</th>
			<th>password></th>

			<th class="actions">Actions</th>
	</tr>
	
	</table>
</div>



<div class="users form">
	<?php 
	echo $this->form->create ('User'); ?>
	<fieldset>
		<legend> Register</legend>
		<?php 
		echo $this->form->input('username');
		echo $this->form->input('password');
		echo $this->form->input('password confirmation', array('type'=>'password'));
		?>

	</fieldset>

	<?php echo $this->form->end('Submit');?>
</div>