<h3><?= (__('Add User'))?></h3>
<?php
	echo $this->Form->create();
	echo $this->Form->control('email',['placeholder' => 'Enter Email']);
	echo $this->Form->control('password',['placeholder' => 'Enter Password']);
	echo $this->Form->button('Add User');
	echo $this->Form->end();
?>

