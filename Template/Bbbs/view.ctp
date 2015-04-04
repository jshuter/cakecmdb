<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Bbb'), ['action' => 'edit', $bbb->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bbb'), ['action' => 'delete', $bbb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bbb->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bbbs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bbb'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaas Bbbs'), ['controller' => 'AaasBbbs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaas Bbb'), ['controller' => 'AaasBbbs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aaas'), ['controller' => 'Aaas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aaa'), ['controller' => 'Aaas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="bbbs view large-10 medium-9 columns">
    <h2><?= h($bbb->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($bbb->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($bbb->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related AaasBbbs') ?></h4>
    <?php if (!empty($bbb->aaas_bbbs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Aaa Id') ?></th>
            <th><?= __('Bbb Id') ?></th>
            <th><?= __('Attrib1') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($bbb->aaas_bbbs as $aaasBbbs): ?>
        <tr>
            <td><?= h($aaasBbbs->id) ?></td>
            <td><?= h($aaasBbbs->aaa_id) ?></td>
            <td><?= h($aaasBbbs->bbb_id) ?></td>
            <td><?= h($aaasBbbs->attrib1) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'AaasBbbs', 'action' => 'view', $aaasBbbs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'AaasBbbs', 'action' => 'edit', $aaasBbbs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AaasBbbs', 'action' => 'delete', $aaasBbbs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aaasBbbs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Aaas') ?></h4>
    <?php if (!empty($bbb->aaas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($bbb->aaas as $aaas): ?>
        <tr>
            <td><?= h($aaas->id) ?></td>
            <td><?= h($aaas->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Aaas', 'action' => 'view', $aaas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Aaas', 'action' => 'edit', $aaas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Aaas', 'action' => 'delete', $aaas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aaas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
