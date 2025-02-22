<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CronClientAdd $cronClientAdd
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cron Client Add'), ['action' => 'edit', $cronClientAdd->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cron Client Add'), ['action' => 'delete', $cronClientAdd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronClientAdd->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cron Client Add'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cron Client Add'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contractors'), ['controller' => 'Contractors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contractor'), ['controller' => 'Contractors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cronClientAdd view large-9 medium-8 columns content">
    <h3><?= h($cronClientAdd->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contractor') ?></th>
            <td><?= $cronClientAdd->has('contractor') ? $this->Html->link($cronClientAdd->contractor->id, ['controller' => 'Contractors', 'action' => 'view', $cronClientAdd->contractor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $cronClientAdd->has('client') ? $this->Html->link($cronClientAdd->client->id, ['controller' => 'Clients', 'action' => 'view', $cronClientAdd->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cronClientAdd->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($cronClientAdd->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($cronClientAdd->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cronClientAdd->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cronClientAdd->modified) ?></td>
        </tr>
    </table>
</div>
