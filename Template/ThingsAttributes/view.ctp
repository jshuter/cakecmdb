<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Things Attribute'), ['action' => 'edit', $thingsAttribute->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Things Attribute'), ['action' => 'delete', $thingsAttribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsAttribute->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things Attributes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Attribute'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsAttributes view large-10 medium-9 columns">
    <h2><?= h($thingsAttribute->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Thing') ?></h6>
            <p><?= $thingsAttribute->has('thing') ? $this->Html->link($thingsAttribute->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsAttribute->thing->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Attribute') ?></h6>
            <p><?= $thingsAttribute->has('attribute') ? $this->Html->link($thingsAttribute->attribute->name, ['controller' => 'Attributes', 'action' => 'view', $thingsAttribute->attribute->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thingsAttribute->id) ?></p>
        </div>
    </div>
</div>
