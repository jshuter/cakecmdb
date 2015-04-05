<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Systems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Systems Things'), ['controller' => 'SystemsThings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Systems Thing'), ['controller' => 'SystemsThings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systems form large-10 medium-9 columns">
    <?= $this->Form->create($system); ?>
    <fieldset>
        <legend><?= __('Add System') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('things._ids', ['options' => $things]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
