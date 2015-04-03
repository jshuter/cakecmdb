<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Things Thing2'), ['action' => 'edit', $thingsThing2->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Things Thing2'), ['action' => 'delete', $thingsThing2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $thingsThing2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Things Thing2s'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Things Thing2'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Things'), ['controller' => 'Things', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing'), ['controller' => 'Things', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Thing2s'), ['controller' => 'Thing2s', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Thing2'), ['controller' => 'Thing2s', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reltypes'), ['controller' => 'Reltypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reltype'), ['controller' => 'Reltypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="thingsThing2s view large-10 medium-9 columns">
    <h2><?= h($thingsThing2->id) ?></h2>
    
        <div class="large-4 columns strings">

            <h6 class="subheader"> <?= __('Thing') ?></h6>
            <p><?= $thingsThing2->has('thing') ? 
				$this->Html->link($thingsThing2->thing->name, ['controller' => 'Things', 'action' => 'view', $thingsThing2->thing->id]) : '' ?>
				<?= $thingsThing2->thing->description ?>
			</p>

        </div>
        <div class="large-4 columns strings">
            <h6 class="subheader"><?= __('Reltype') ?></h6>
            <p><?= $thingsThing2->has('reltype') ? $this->Html->link($thingsThing2->reltype->name, ['controller' => 'Reltypes', 'action' => 'view', $thingsThing2->reltype->id]) : '' ?></p>

        </div>
        <div class="large-4 columns strings">
            <h6 class="subheader"><?= __('Thing2') ?></h6>
            <p><?= $thingsThing2->has('thing2') ? $this->Html->link($thingsThing2->thing2->name, ['controller' => 'Thing2s', 'action' => 'view', $thingsThing2->thing2->id]) : '' ?>
<?= $thingsThing2->thing2->description ?>
</p>
        </div>

        <div class="large-1 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($thingsThing2->id) ?></p>
        </div>
    </div>
</div>
