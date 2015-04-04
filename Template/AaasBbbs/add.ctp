<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bbbs'), ['controller' => 'Bbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbb'), ['controller' => 'Bbbs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aaasBbbs form large-10 medium-9 columns">
    <?= $this->Form->create($aaasBbb); ?>
    <fieldset>
        <legend><?= __('Add Aaas Bbb') ?></legend>
        <?php
            echo $this->Form->input('aaa_id');
            echo $this->Form->input('bbb_id');
            echo $this->Form->input('attrib1');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
