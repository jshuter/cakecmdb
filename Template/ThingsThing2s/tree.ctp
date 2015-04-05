<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Things Thing2'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thing2s'), ['controller' => 'Thing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing2'), ['controller' => 'Thing2s', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reltypes'), ['controller' => 'Reltypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reltype'), ['controller' => 'Reltypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsThing2s index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <tbody>
    <?php foreach ($thingsThing2s as $thingsThing2): ?>
        <tr>
            <td><?= $this->Number->format($thingsThing2->id) ?></td>
            <td>
                <?= $thingsThing2->has('thing') ? $this->Html->link($thingsThing2->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsThing2->thing->id]) : '' ?>
            </td>
            <td>
                <?= $thingsThing2->has('thing2') ? $this->Html->link($thingsThing2->thing2->name, ['controller' => 'Thing2s', 'action' => 'view', $thingsThing2->thing2->id]) : '' ?>
            </td>
            <td>
                <?= $thingsThing2->has('reltype') ? $this->Html->link($thingsThing2->reltype->name, ['controller' => 'Reltypes', 'action' => 'view', $thingsThing2->reltype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $thingsThing2->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $thingsThing2->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $thingsThing2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsThing2->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
</div>
