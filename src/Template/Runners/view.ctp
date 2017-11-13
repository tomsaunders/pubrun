<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Runner $runner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Runner'), ['action' => 'edit', $runner->runner_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Runner'), ['action' => 'delete', $runner->runner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $runner->runner_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Runner'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Runner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Result'), ['controller' => 'Result', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Result'), ['controller' => 'Result', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Runner'), ['controller' => 'Runner', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Runner'), ['controller' => 'Runner', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temp Results'), ['controller' => 'TempResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Temp Result'), ['controller' => 'TempResults', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vw Results'), ['controller' => 'VwResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vw Result'), ['controller' => 'VwResults', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vw Runner'), ['controller' => 'VwRunner', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vw Runner'), ['controller' => 'VwRunner', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="runner view large-9 medium-8 columns content">
    <h3><?= h($runner->runner_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($runner->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($runner->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active Flag') ?></th>
            <td><?= h($runner->active_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($runner->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Runner Id') ?></th>
            <td><?= $this->Number->format($runner->runner_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Result') ?></h4>
        <?php if (!empty($runner->result)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Result Id') ?></th>
                <th scope="col"><?= __('Result Set Id') ?></th>
                <th scope="col"><?= __('Runner Id') ?></th>
                <th scope="col"><?= __('Result Hour') ?></th>
                <th scope="col"><?= __('Result Min') ?></th>
                <th scope="col"><?= __('Result Sec') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($runner->result as $result): ?>
            <tr>
                <td><?= h($result->result_id) ?></td>
                <td><?= h($result->result_set_id) ?></td>
                <td><?= h($result->runner_id) ?></td>
                <td><?= h($result->result_hour) ?></td>
                <td><?= h($result->result_min) ?></td>
                <td><?= h($result->result_sec) ?></td>
                <td><?= h($result->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Result', 'action' => 'view', $result->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Result', 'action' => 'edit', $result->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Result', 'action' => 'delete', $result->], ['confirm' => __('Are you sure you want to delete # {0}?', $result->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Runner') ?></h4>
        <?php if (!empty($runner->runner)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Runner Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('Active Flag') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($runner->runner as $runner): ?>
            <tr>
                <td><?= h($runner->runner_id) ?></td>
                <td><?= h($runner->first_name) ?></td>
                <td><?= h($runner->surname) ?></td>
                <td><?= h($runner->active_flag) ?></td>
                <td><?= h($runner->gender) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Runner', 'action' => 'view', $runner->runner_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Runner', 'action' => 'edit', $runner->runner_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Runner', 'action' => 'delete', $runner->runner_id], ['confirm' => __('Are you sure you want to delete # {0}?', $runner->runner_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Temp Results') ?></h4>
        <?php if (!empty($runner->temp_results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Temp Id') ?></th>
                <th scope="col"><?= __('Result Id') ?></th>
                <th scope="col"><?= __('Result Set Id') ?></th>
                <th scope="col"><?= __('Runner Id') ?></th>
                <th scope="col"><?= __('Temp Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('Temp Time') ?></th>
                <th scope="col"><?= __('Time Min') ?></th>
                <th scope="col"><?= __('Time Sec') ?></th>
                <th scope="col"><?= __('Track Id') ?></th>
                <th scope="col"><?= __('Track Name') ?></th>
                <th scope="col"><?= __('Temp Date') ?></th>
                <th scope="col"><?= __('Run Date') ?></th>
                <th scope="col"><?= __('Run Notes') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($runner->temp_results as $tempResults): ?>
            <tr>
                <td><?= h($tempResults->temp_id) ?></td>
                <td><?= h($tempResults->result_id) ?></td>
                <td><?= h($tempResults->result_set_id) ?></td>
                <td><?= h($tempResults->runner_id) ?></td>
                <td><?= h($tempResults->temp_name) ?></td>
                <td><?= h($tempResults->first_name) ?></td>
                <td><?= h($tempResults->surname) ?></td>
                <td><?= h($tempResults->temp_time) ?></td>
                <td><?= h($tempResults->time_min) ?></td>
                <td><?= h($tempResults->time_sec) ?></td>
                <td><?= h($tempResults->track_id) ?></td>
                <td><?= h($tempResults->track_name) ?></td>
                <td><?= h($tempResults->temp_date) ?></td>
                <td><?= h($tempResults->run_date) ?></td>
                <td><?= h($tempResults->run_notes) ?></td>
                <td><?= h($tempResults->comments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TempResults', 'action' => 'view', $tempResults->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TempResults', 'action' => 'edit', $tempResults->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TempResults', 'action' => 'delete', $tempResults->], ['confirm' => __('Are you sure you want to delete # {0}?', $tempResults->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vw Results') ?></h4>
        <?php if (!empty($runner->vw_results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Result Set Id') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Result Id') ?></th>
                <th scope="col"><?= __('Runner Id') ?></th>
                <th scope="col"><?= __('Result Date') ?></th>
                <th scope="col"><?= __('Runner') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Track') ?></th>
                <th scope="col"><?= __('Track Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($runner->vw_results as $vwResults): ?>
            <tr>
                <td><?= h($vwResults->result_set_id) ?></td>
                <td><?= h($vwResults->notes) ?></td>
                <td><?= h($vwResults->result_id) ?></td>
                <td><?= h($vwResults->runner_id) ?></td>
                <td><?= h($vwResults->result_date) ?></td>
                <td><?= h($vwResults->runner) ?></td>
                <td><?= h($vwResults->time) ?></td>
                <td><?= h($vwResults->date) ?></td>
                <td><?= h($vwResults->track) ?></td>
                <td><?= h($vwResults->track_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VwResults', 'action' => 'view', $vwResults->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VwResults', 'action' => 'edit', $vwResults->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VwResults', 'action' => 'delete', $vwResults->], ['confirm' => __('Are you sure you want to delete # {0}?', $vwResults->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vw Runner') ?></h4>
        <?php if (!empty($runner->vw_runner)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Runner Id') ?></th>
                <th scope="col"><?= __('Runner') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($runner->vw_runner as $vwRunner): ?>
            <tr>
                <td><?= h($vwRunner->runner_id) ?></td>
                <td><?= h($vwRunner->runner) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VwRunner', 'action' => 'view', $vwRunner->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VwRunner', 'action' => 'edit', $vwRunner->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VwRunner', 'action' => 'delete', $vwRunner->], ['confirm' => __('Are you sure you want to delete # {0}?', $vwRunner->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
