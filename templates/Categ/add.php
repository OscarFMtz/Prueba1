<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categ $categ
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categ'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categ form content">
            <?= $this->Form->create($categ) ?>
            <fieldset>
                <legend><?= __('Add Categ') ?></legend>
                <?php
                    echo $this->Form->control('categoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
