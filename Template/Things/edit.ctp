<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $thing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $thing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Things'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Attributes'), ['controller' => 'Attributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attribute'), ['controller' => 'Attributes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Systems'), ['controller' => 'Systems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System'), ['controller' => 'Systems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thing2s'), ['controller' => 'Thing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing2'), ['controller' => 'Thing2s', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="things form large-10 medium-9 columns">
    <?= $this->Form->create($thing); ?>
    <fieldset>
        <legend><?= __('Edit Thing') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('version_id', ['options' => $versions, 'empty' => true]);
            echo $this->Form->input('systems._ids', ['options' => $systems]);
            echo $this->Form->input('thing2s._ids', ['options' => $thing2s]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
