<h3><?= (__('Add Articles')); ?></h3>

<?php 
	echo $this->Form->Create($article); 
	echo $this->Form->Control('user_id',['type' => 'hidden', 'value' => 1]);
	echo $this->Form->Control('title',['placeholder' => 'Enter your title']);
	echo $this->Form->Control('slug',['placeholder' => 'Enter your slug']);
	echo $this->Form->Control('body',['row' => 3,'Placeholder' => 'Enter your Article']);
	echo $this->Form->button(__('Save Article'));
	echo $this->Form->end();

?>
