<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thingsSystem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thingsSystem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Things Systems'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsSystems form large-10 medium-9 columns">
    <?= $this->Form->create($thingsSystem); ?>
    <fieldset>
        <legend><?= __('Edit Things System') ?></legend>
        <?php
            echo $this->Form->input('thing_id', ['options' => $things]);
            echo $this->Form->input('system_id', ['options' => $systems]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
