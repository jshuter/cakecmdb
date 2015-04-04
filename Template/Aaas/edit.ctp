<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aaa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aaa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aaas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['controller' => 'AaasBbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['controller' => 'AaasBbbs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bbbs'), ['controller' => 'Bbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbb'), ['controller' => 'Bbbs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aaas form large-10 medium-9 columns">
    <?= $this->Form->create($aaa); ?>
    <fieldset>
        <legend><?= __('Edit Aaa') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('bbbs._ids', ['options' => $bbbs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
