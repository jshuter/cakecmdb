<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Reltypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things Thing2s'), ['controller' => 'ThingsThing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Thing2'), ['controller' => 'ThingsThing2s', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reltypes form large-10 medium-9 columns">
    <?= $this->Form->create($reltype); ?>
    <fieldset>
        <legend><?= __('Add Reltype') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
