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
            <?= $this->Html->link(__('Edit Categ'), ['action' => 'edit', $categ->id_categoria], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categ'), ['action' => 'delete', $categ->id_categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categ->id_categoria), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categ'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categ'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categ view content">
            <h3><?= h($categ->id_categoria) ?></h3>
            <table>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= h($categ->categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categoria') ?></th>
                    <td><?= $this->Number->format($categ->id_categoria) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
