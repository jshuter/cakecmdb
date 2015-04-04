<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Thing'), ['action' => 'edit', $thing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thing'), ['action' => 'delete', $thing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['action' => 'add']) ?> </li>
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
<div class="things view large-10 medium-9 columns">
    <h2><?= h($thing->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($thing->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $thing->has('type') ? $this->Html->link($thing->type->name, ['controller' => 'Types', 'action' => 'view', $thing->type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($thing->description) ?></p>
            <h6 class="subheader"><?= __('Version') ?></h6>
            <p><?= $thing->has('version') ? $this->Html->link($thing->version->id, ['controller' => 'Versions', 'action' => 'view', $thing->version->id]) : '' ?></p>
            <h6 class="subheader"><?= __('System') ?></h6>
            <p><?= $thing->has('system') ? $this->Html->link($thing->system->name, ['controller' => 'Systems', 'action' => 'view', $thing->system->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thing->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ThingsAttributes') ?></h4>
    <?php if (!empty($thing->things_attributes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Thing Id') ?></th>
            <th><?= __('Attribute Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($thing->things_attributes as $thingsAttributes): ?>
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
    <h4 class="subheader"><?= __('Related Attributes') ?></h4>
    <?php if (!empty($thing->attributes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Value') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($thing->attributes as $attributes): ?>
        <tr>
            <td><?= h($attributes->id) ?></td>
            <td><?= h($attributes->name) ?></td>
            <td><?= h($attributes->value) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Attributes', 'action' => 'view', $attributes->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Attributes', 'action' => 'edit', $attributes->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attributes', 'action' => 'delete', $attributes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attributes->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
