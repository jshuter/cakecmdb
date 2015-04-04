<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bbb'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['controller' => 'AaasBbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['controller' => 'AaasBbbs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bbbs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bbbs as $bbb): ?>
        <tr>
            <td><?= $this->Number->format($bbb->id) ?></td>
            <td><?= h($bbb->name) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bbb->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bbb->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bbb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bbb->id)]) ?>
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
