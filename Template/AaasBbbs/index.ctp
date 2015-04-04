<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bbbs'), ['controller' => 'Bbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbb'), ['controller' => 'Bbbs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aaasBbbs index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('aaa_id') ?></th>
            <th><?= $this->Paginator->sort('bbb_id') ?></th>
            <th><?= $this->Paginator->sort('attrib1') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($aaasBbbs as $aaasBbb): ?>
        <tr>
            <td><?= $this->Number->format($aaasBbb->id) ?></td>
            <td><?= $this->Number->format($aaasBbb->aaa_id) ?></td>
            <td><?= $this->Number->format($aaasBbb->bbb_id) ?></td>
            <td><?= h($aaasBbb->attrib1) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $aaasBbb->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aaasBbb->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aaasBbb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aaasBbb->id)]) ?>
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
