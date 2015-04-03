<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Things Thing2s'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thing2s'), ['controller' => 'Thing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing2'), ['controller' => 'Thing2s', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reltypes'), ['controller' => 'Reltypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reltype'), ['controller' => 'Reltypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsThing2s form large-10 medium-9 columns">
    <?= $this->Form->create($thingsThing2); ?>
    <fieldset>
        <legend><?= __('Add Things Thing2') ?></legend>
        <?php
            echo $this->Form->input('thing_id', ['options' => $things]);
            echo $this->Form->input('thing2_id', ['options' => $thing2s]);
            echo $this->Form->input('reltype_id', ['options' => $reltypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
