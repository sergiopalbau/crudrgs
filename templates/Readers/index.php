<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reader[]|\Cake\Collection\CollectionInterface $readers
 */
?>
<div class="readers index content">
    <?= $this->Html->link(__('New Reader'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Readers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('admin_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('area') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($readers as $reader): ?>
                <tr>
                    <td><?= $this->Number->format($reader->id) ?></td>
                    <td><?= $reader->has('admin') ? $this->Html->link($reader->admin->name, ['controller' => 'Admins', 'action' => 'view', $reader->admin->id]) : '' ?></td>
                    <td><?= h($reader->name) ?></td>
                    <td><?= h($reader->email) ?></td>
                    <td><?= h($reader->area) ?></td>
                    <td><?= h($reader->created) ?></td>
                    <td><?= h($reader->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reader->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reader->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reader->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
