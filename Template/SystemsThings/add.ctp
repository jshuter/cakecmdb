<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Systems Things'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systemsThings form large-10 medium-9 columns">
    <?= $this->Form->create($systemsThing); ?>
    <fieldset>
        <legend><?= __('Add Systems Thing') ?></legend>
        <?php
            echo $this->Form->input('thing_id', ['options' => $things]);
            echo $this->Form->input('system_id', ['options' => $systems]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
