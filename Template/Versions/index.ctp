<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Version'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="versions index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('major') ?></th>
            <th><?= $this->Paginator->sort('minor') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($versions as $version): ?>
        <tr>
            <td><?= $this->Number->format($version->id) ?></td>
            <td><?= $this->Number->format($version->major) ?></td>
            <td><?= $this->Number->format($version->minor) ?></td>
            <td><?= h($version->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $version->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $version->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id)]) ?>
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
