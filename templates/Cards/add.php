<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Card $card
 * @var \Cake\Collection\CollectionInterface|string[] $admins
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cards form content">
            <?= $this->Form->create($card,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Card') ?></legend>
                <?php
                    echo $this->Form->control('admin_id', ['options' => $admins]);
                    echo $this->Form->control('img',['type'=>'file']);
                    echo $this->Form->control('txt_sp');
                    echo $this->Form->control('txt_en');
                    echo $this->Form->control('txt_fr');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
