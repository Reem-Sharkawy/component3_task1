<h2>Login</h2>
<?php
echo $this->Form->create();
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>
<div style="text-align: right;">
<?php echo $this->Html->link('Register', array('controller'=>'users', 'action'=>'Register')); ?>
</div>
