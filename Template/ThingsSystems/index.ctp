<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Things System'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsSystems index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('thing_id') ?></th>
            <th><?= $this->Paginator->sort('system_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($thingsSystems as $thingsSystem): ?>
        <tr>
            <td><?= $this->Number->format($thingsSystem->id) ?></td>
            <td>
                <?= $thingsSystem->has('thing') ? $this->Html->link($thingsSystem->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsSystem->thing->id]) : '' ?>
            </td>
            <td>
                <?= $thingsSystem->has('system') ? $this->Html->link($thingsSystem->system->name, ['controller' => 'Systems', 'action' => 'view', $thingsSystem->system->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $thingsSystem->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thingsSystem->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thingsSystem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsSystem->id)]) ?>
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
