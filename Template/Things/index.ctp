<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Thing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things Attributes'), ['controller' => 'ThingsAttributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Attribute'), ['controller' => 'ThingsAttributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="things index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('type_id') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('version_id') ?></th>
            <th><?= $this->Paginator->sort('system_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($things as $thing): ?>
        <tr>
            <td><?= $this->Number->format($thing->id) ?></td>
            <td><?= h($thing->name) ?></td>
            <td>
                <?= $thing->has('type') ? $this->Html->link($thing->type->name, ['controller' => 'Types', 'action' => 'view', $thing->type->id]) : '' ?>
            </td>
            <td><?= h($thing->description) ?></td>
            <td>
                <?= $thing->has('version') ? $this->Html->link($thing->version->id, ['controller' => 'Versions', 'action' => 'view', $thing->version->id]) : '' ?>
            </td>
            <td>
                <?= $thing->has('system') ? $this->Html->link($thing->system->name, ['controller' => 'Systems', 'action' => 'view', $thing->system->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $thing->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thing->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]) ?>
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
