<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Runner $runner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $runner->runner_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $runner->runner_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Runner'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Result'), ['controller' => 'Result', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Result', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Runner'), ['controller' => 'Runner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Runner'), ['controller' => 'Runner', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temp Results'), ['controller' => 'TempResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Temp Result'), ['controller' => 'TempResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vw Results'), ['controller' => 'VwResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vw Result'), ['controller' => 'VwResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vw Runner'), ['controller' => 'VwRunner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vw Runner'), ['controller' => 'VwRunner', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="runner form large-9 medium-8 columns content">
    <?= $this->Form->create($runner) ?>
    <fieldset>
        <legend><?= __('Edit Runner') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('surname');
            echo $this->Form->control('active_flag');
            echo $this->Form->control('gender');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
