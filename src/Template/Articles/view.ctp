<h3><?= (__('Views')) ?></h3>
<h1><?= h($article->title); ?></h1>
<p><?= h($article->body); ?></p>
<p><small>Created: <?= $article->created->format('Y-m-d h:m:i A'); ?></small></p>
<button class="btn btn-primary"><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]); ?></button>
<button class="btn btn-primary"><?= $this->Html->link('Back',['action' => 'index']); ?></button>