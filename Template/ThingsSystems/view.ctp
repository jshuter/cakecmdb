<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Things System'), ['action' => 'edit', $thingsSystem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Things System'), ['action' => 'delete', $thingsSystem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsSystem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things Systems'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things System'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsSystems view large-10 medium-9 columns">
    <h2><?= h($thingsSystem->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Thing') ?></h6>
            <p><?= $thingsSystem->has('thing') ? $this->Html->link($thingsSystem->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsSystem->thing->id]) : '' ?></p>
            <h6 class="subheader"><?= __('System') ?></h6>
            <p><?= $thingsSystem->has('system') ? $this->Html->link($thingsSystem->system->name, ['controller' => 'Systems', 'action' => 'view', $thingsSystem->system->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thingsSystem->id) ?></p>
        </div>
    </div>
</div>
