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
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thing2s'), ['controller' => 'Thing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing2'), ['controller' => 'Thing2s', 'action' => 'add']) ?> </li>
    </ul>
</div>
<?php print_r($thing) ?>

<div class="things view large-10 medium-9 columns">
    <h2><?= h($thing->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($thing->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($thing->description) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= $thing->has('type') ? $this->Html->link($thing->type->name, ['controller' => 'Types', 'action' => 'view', $thing->type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Version') ?></h6>
            <p><?= $thing->has('version') ? $this->Html->link($thing->version->id, ['controller' => 'Versions', 'action' => 'view', $thing->version->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thing->id) ?></p>
        </div>
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
            <th><?= __('Thing Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($thing->attributes as $attributes): ?>
        <tr>
            <td><?= h($attributes->id) ?></td>
            <td><?= h($attributes->name) ?></td>
            <td><?= h($attributes->value) ?></td>
            <td><?= h($attributes->thing_id) ?></td>

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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Systems') ?></h4>
    <?php if (!empty($thing->systems)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($thing->systems as $systems): ?>
        <tr>
            <td><?= h($systems->id) ?></td>
            <td><?= h($systems->name) ?></td>
            <td><?= h($systems->description) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Systems', 'action' => 'view', $systems->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Systems', 'action' => 'edit', $systems->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Systems', 'action' => 'delete', $systems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systems->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Thing2s') ?></h4>
    <?php if (!empty($thing->thing2s)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Type Id') ?></th>
            <th><?= __('Version Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($thing->thing2s as $thing2s): ?>
        <tr>
            <td><?= h($thing2s->id) ?></td>
            <td><?= h($thing2s->name) ?></td>
            <td><?= h($thing2s->description) ?></td>
            <td><?= h($thing2s->type_id) ?></td>
            <td><?= h($thing2s->version_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Thing2s', 'action' => 'view', $thing2s->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Thing2s', 'action' => 'edit', $thing2s->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Thing2s', 'action' => 'delete', $thing2s->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thing2s->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
