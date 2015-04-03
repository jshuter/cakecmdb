<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Reltype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Things Thing2s'), ['controller' => 'ThingsThing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Thing2'), ['controller' => 'ThingsThing2s', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reltypes index large-10 medium-9 columns">
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
    <?php foreach ($reltypes as $reltype): ?>
        <tr>
            <td><?= $this->Number->format($reltype->id) ?></td>
            <td><?= h($reltype->name) ?></td>
            <td><?= h($reltype->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $reltype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reltype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reltype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reltype->id)]) ?>
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
