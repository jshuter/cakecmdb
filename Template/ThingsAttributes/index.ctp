<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Things Attribute'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsAttributes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('thing_id') ?></th>
            <th><?= $this->Paginator->sort('attribute_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($thingsAttributes as $thingsAttribute): ?>
        <tr>
            <td><?= $this->Number->format($thingsAttribute->id) ?></td>
            <td>
                <?= $thingsAttribute->has('thing') ? $this->Html->link($thingsAttribute->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsAttribute->thing->id]) : '' ?>
            </td>
            <td>
                <?= $thingsAttribute->has('attribute') ? $this->Html->link($thingsAttribute->attribute->name, ['controller' => 'Attributes', 'action' => 'view', $thingsAttribute->attribute->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $thingsAttribute->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thingsAttribute->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thingsAttribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsAttribute->id)]) ?>
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
