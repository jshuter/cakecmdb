<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Thing'), ['action' => 'edit', $thing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Thing'), ['action' => 'delete', $thing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
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
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thing->id) ?></p>
        </div>
    </div>
</div>
