<h3><?= (__('Update Users')) ?></h3>

<?php
  echo $this->Form->create();
  echo $this->Form->control('Email');
  echo $this->Form->button('Update Record',['class'=>'btn btn-primary']);
  echo $this->Form->end();
?>