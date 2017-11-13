<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Runner[]|\Cake\Collection\CollectionInterface $runner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Runner'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Result'), ['controller' => 'Result', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Result', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temp Results'), ['controller' => 'TempResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Temp Result'), ['controller' => 'TempResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vw Results'), ['controller' => 'VwResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vw Result'), ['controller' => 'VwResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vw Runner'), ['controller' => 'VwRunner', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vw Runner'), ['controller' => 'VwRunner', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="runner index large-9 medium-8 columns content">
    <h3><?= __('Runner') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('runner_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($runners as $runner) : ?>
            <tr>
                <td><?= $this->Number->format($runner->runner_id) ?></td>
                <td><?= h($runner->first_name) ?></td>
                <td><?= h($runner->surname) ?></td>
                <td><?= h($runner->active_flag) ?></td>
                <td><?= h($runner->gender) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $runner->runner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $runner->runner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $runner->runner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $runner->runner_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
