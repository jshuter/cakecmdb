<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bbbs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['controller' => 'AaasBbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['controller' => 'AaasBbbs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bbbs form large-10 medium-9 columns">
    <?= $this->Form->create($bbb); ?>
    <fieldset>
        <legend><?= __('Add Bbb') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('aaas._ids', ['options' => $aaas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
