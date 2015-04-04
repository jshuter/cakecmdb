<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thingsAttribute->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thingsAttribute->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Things Attributes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsAttributes form large-10 medium-9 columns">
    <?= $this->Form->create($thingsAttribute); ?>
    <fieldset>
        <legend><?= __('Edit Things Attribute') ?></legend>
        <?php
            echo $this->Form->input('thing_id', ['options' => $things]);
            echo $this->Form->input('attribute_id', ['options' => $attributes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
