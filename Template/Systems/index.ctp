<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New System'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Systems Things'), ['controller' => 'SystemsThings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Systems Thing'), ['controller' => 'SystemsThings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systems index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($systems as $system): ?>
        <tr>
            <td><?= $this->Number->format($system->id) ?></td>
            <td><?= h($system->name) ?></td>
            <td><?= h($system->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $system->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $system->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $system->id], ['confirm' => __('Are you sure you want to delete # {0}?', $system->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
