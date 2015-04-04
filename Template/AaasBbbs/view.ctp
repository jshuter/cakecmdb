<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Aaas Bbb'), ['action' => 'edit', $aaasBbb->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aaas Bbb'), ['action' => 'delete', $aaasBbb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aaasBbb->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bbbs'), ['controller' => 'Bbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbb'), ['controller' => 'Bbbs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aaasBbbs view large-10 medium-9 columns">
    <h2><?= h($aaasBbb->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Attrib1') ?></h6>
            <p><?= h($aaasBbb->attrib1) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($aaasBbb->id) ?></p>
            <h6 class="subheader"><?= __('Aaa Id') ?></h6>
            <p><?= $this->Number->format($aaasBbb->aaa_id) ?></p>
            <h6 class="subheader"><?= __('Bbb Id') ?></h6>
            <p><?= $this->Number->format($aaasBbb->bbb_id) ?></p>
        </div>
    </div>
</div>
