<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Reltype'), ['action' => 'edit', $reltype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reltype'), ['action' => 'delete', $reltype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reltype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reltypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reltype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things Thing2s'), ['controller' => 'ThingsThing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Thing2'), ['controller' => 'ThingsThing2s', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reltypes view large-10 medium-9 columns">
    <h2><?= h($reltype->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($reltype->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($reltype->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($reltype->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related ThingsThing2s') ?></h4>
    <?php if (!empty($reltype->things_thing2s)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Thing Id') ?></th>
            <th><?= __('Thing2 Id') ?></th>
            <th><?= __('Reltype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($reltype->things_thing2s as $thingsThing2s): ?>
        <tr>
            <td><?= h($thingsThing2s->id) ?></td>
            <td><?= h($thingsThing2s->thing_id) ?></td>
            <td><?= h($thingsThing2s->thing2_id) ?></td>
            <td><?= h($thingsThing2s->reltype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ThingsThing2s', 'action' => 'view', $thingsThing2s->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ThingsThing2s', 'action' => 'edit', $thingsThing2s->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ThingsThing2s', 'action' => 'delete', $thingsThing2s->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsThing2s->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
