
<h1>Articles</h1>
<table>
    <tr>
    	<th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Action</th>
    </tr>

<?php 
$id=1;
	foreach($articles as $article):
	?>
    <tr>
    	<td>
    		<?= $id++; ?>
    	</td>
        <td>
            <?= $this->Html->link($article->title,['action' => 'view', $article->slug]); ?>
        </td>
        <td>
            <?php echo  $article->created->format('Y-m-d h:i:s A'); ?>
        </td>
        <td>
        <?= $article->modified->format('Y-m-d h:m:s A'); ?>
        </td>
        <td >
           <button class="btn btn-primary"> <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?></button>
            <button class="btn btn-primary"> <?= $this->Html->link("Add", ['action' => 'add']) ?></button>
            <button class="btn btn-primary"> <?= $this->Form->postLink('Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?> </button>
        </td>
    </tr>
<?php endforeach; ?>

</table>