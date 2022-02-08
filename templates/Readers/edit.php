<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reader $reader
 * @var string[]|\Cake\Collection\CollectionInterface $admins
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reader->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reader->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Readers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="readers form content">
            <?= $this->Form->create($reader) ?>
            <fieldset>
                <legend><?= __('Edit Reader') ?></legend>
                <?php
                    echo $this->Form->control('admin_id', ['options' => $admins]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('area');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
