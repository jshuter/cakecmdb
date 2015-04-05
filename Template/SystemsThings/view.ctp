<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Systems Thing'), ['action' => 'edit', $systemsThing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Systems Thing'), ['action' => 'delete', $systemsThing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systemsThing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Systems Things'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Systems Thing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systemsThings view large-10 medium-9 columns">
    <h2><?= h($systemsThing->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Thing') ?></h6>
            <p><?= $systemsThing->has('thing') ? $this->Html->link($systemsThing->thing->name, ['controller' => 'Things', 'action' => 'view', $systemsThing->thing->id]) : '' ?></p>
            <h6 class="subheader"><?= __('System') ?></h6>
            <p><?= $systemsThing->has('system') ? $this->Html->link($systemsThing->system->name, ['controller' => 'Systems', 'action' => 'view', $systemsThing->system->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($systemsThing->id) ?></p>
        </div>
    </div>
</div>
