<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Card'), ['action' => 'edit', $card->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Card'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Card'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cards view content">
            <h3><?= h($card->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Admin') ?></th>
                    <td><?= $card->has('admin') ? $this->Html->link($card->admin->name, ['controller' => 'Admins', 'action' => 'view', $card->admin->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Img') ?></th>
                    <td><?= h($card->img) ?></td>
                </tr>
                <tr>
                    <th><?= __('Txt Sp') ?></th>
                    <td><?= h($card->txt_sp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Txt En') ?></th>
                    <td><?= h($card->txt_en) ?></td>
                </tr>
                <tr>
                    <th><?= __('Txt Fr') ?></th>
                    <td><?= h($card->txt_fr) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($card->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($card->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($card->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Uses') ?></h4>
                <?php if (!empty($card->uses)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Card Id') ?></th>
                            <th><?= __('Reader Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($card->uses as $uses) : ?>
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
