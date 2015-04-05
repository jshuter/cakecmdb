<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $attribute->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $attribute->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Attributes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="attributes form large-10 medium-9 columns">
    <?= $this->Form->create($attribute); ?>
    <fieldset>
        <legend><?= __('Edit Attribute') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value');
            echo $this->Form->input('thing_id', ['options' => $things]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
