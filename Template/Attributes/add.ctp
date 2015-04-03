<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Attributes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things Attributes'), ['controller' => 'ThingsAttributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Attribute'), ['controller' => 'ThingsAttributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="attributes form large-10 medium-9 columns">
    <?= $this->Form->create($attribute); ?>
    <fieldset>
        <legend><?= __('Add Attribute') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value');
            echo $this->Form->input('things._ids', ['options' => $things]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
