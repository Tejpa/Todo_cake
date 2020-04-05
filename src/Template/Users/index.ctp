<h3><?= (__('Users List')); ?></h3>

<table>
	<tr>
		<th>Id</th>
		<th>Email</th>
		<th>Action</th>
		
	</tr>
<?php
	$id=1;
	foreach($users as $user): ?>
	<tr>
		<td><?= $id++; ?></td>
		<td><?= $user->email; ?></td>
		<td><?= $this->Html->link("Add", ['action' => 'add']) ?>
		<?= $this->Html->link("Update",['action' => 'edit']) ?></td>
	</tr>

<?php endforeach; ?>

</table>