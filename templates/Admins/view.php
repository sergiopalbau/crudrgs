<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Admin'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="admins view content">
            <h3><?= h($admin->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($admin->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($admin->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area') ?></th>
                    <td><?= h($admin->area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($admin->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($admin->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($admin->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Cards') ?></h4>
                <?php if (!empty($admin->cards)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Admin Id') ?></th>
                            <th><?= __('Img') ?></th>
                            <th><?= __('Txt Sp') ?></th>
                            <th><?= __('Txt En') ?></th>
                            <th><?= __('Txt Fr') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($admin->cards as $cards) : ?>
                        <tr>
                            <td><?= h($cards->id) ?></td>
                            <td><?= h($cards->admin_id) ?></td>
                            <td><?= h($cards->img) ?></td>
                            <td><?= h($cards->txt_sp) ?></td>
                            <td><?= h($cards->txt_en) ?></td>
                            <td><?= h($cards->txt_fr) ?></td>
                            <td><?= h($cards->created) ?></td>
                            <td><?= h($cards->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cards', 'action' => 'view', $cards->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cards', 'action' => 'edit', $cards->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cards', 'action' => 'delete', $cards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cards->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Readers') ?></h4>
                <?php if (!empty($admin->readers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Admin Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Area') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($admin->readers as $readers) : ?>
                        <tr>
                            <td><?= h($readers->id) ?></td>
                            <td><?= h($readers->admin_id) ?></td>
                            <td><?= h($readers->name) ?></td>
                            <td><?= h($readers->email) ?></td>
                            <td><?= h($readers->password) ?></td>
                            <td><?= h($readers->area) ?></td>
                            <td><?= h($readers->created) ?></td>
                            <td><?= h($readers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Readers', 'action' => 'view', $readers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Readers', 'action' => 'edit', $readers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Readers', 'action' => 'delete', $readers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $readers->id)]) ?>
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
