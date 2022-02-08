<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reader $reader
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reader'), ['action' => 'edit', $reader->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reader'), ['action' => 'delete', $reader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reader->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Readers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reader'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="readers view content">
            <h3><?= h($reader->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $reader->has('admin') ? $this->Html->link($reader->admin->name, ['controller' => 'Admins', 'action' => 'view', $reader->admin->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($reader->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($reader->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area') ?></th>
                    <td><?= h($reader->area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reader->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reader->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reader->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Uses') ?></h4>
                <?php if (!empty($reader->uses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Card Id') ?></th>
                            <th><?= __('Reader Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reader->uses as $uses) : ?>
                        <tr>
                            <td><?= h($uses->card_id) ?></td>
                            <td><?= h($uses->reader_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Uses', 'action' => 'view', $uses->card_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Uses', 'action' => 'edit', $uses->card_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Uses', 'action' => 'delete', $uses->card_id], ['confirm' => __('Are you sure you want to delete # {0}?', $uses->card_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
