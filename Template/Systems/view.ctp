<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit System'), ['action' => 'edit', $system->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete System'), ['action' => 'delete', $system->id], ['confirm' => __('Are you sure you want to delete # {0}?', $system->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systems view large-10 medium-9 columns">
    <h2><?= h($system->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($system->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($system->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($system->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Things') ?></h4>
    <?php if (!empty($system->things)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Version Id') ?></th>
            <th><?= __('System Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($system->things as $things): ?>
        <tr>
            <td><?= h($things->id) ?></td>
            <td><?= h($things->name) ?></td>
            <td><?= h($things->type_id) ?></td>
            <td><?= h($things->description) ?></td>
            <td><?= h($things->version_id) ?></td>
            <td><?= h($things->system_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Things', 'action' => 'view', $things->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Things', 'action' => 'edit', $things->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Things', 'action' => 'delete', $things->id], ['confirm' => __('Are you sure you want to delete # {0}?', $things->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
