<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Attribute'), ['action' => 'edit', $attribute->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attribute'), ['action' => 'delete', $attribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attribute->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things Attributes'), ['controller' => 'ThingsAttributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Attribute'), ['controller' => 'ThingsAttributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="attributes view large-10 medium-9 columns">
    <h2><?= h($attribute->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($attribute->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($attribute->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Value') ?></h6>
            <?= $this->Text->autoParagraph(h($attribute->value)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ThingsAttributes') ?></h4>
    <?php if (!empty($attribute->things_attributes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Thing Id') ?></th>
            <th><?= __('Attribute Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($attribute->things_attributes as $thingsAttributes): ?>
        <tr>
            <td><?= h($thingsAttributes->id) ?></td>
            <td><?= h($thingsAttributes->thing_id) ?></td>
            <td><?= h($thingsAttributes->attribute_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ThingsAttributes', 'action' => 'view', $thingsAttributes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ThingsAttributes', 'action' => 'edit', $thingsAttributes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ThingsAttributes', 'action' => 'delete', $thingsAttributes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsAttributes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Things') ?></h4>
    <?php if (!empty($attribute->things)): ?>
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
        <?php foreach ($attribute->things as $things): ?>
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
