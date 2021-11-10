<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categ[]|\Cake\Collection\CollectionInterface $categ
 */
?>
<div class="categ index content">
    <?= $this->Html->link(__('New Categ'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categ') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_categoria') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categ as $categ): ?>
                <tr>
                    <td><?= $this->Number->format($categ->id_categoria) ?></td>
                    <td><?= h($categ->categoria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categ->id_categoria]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categ->id_categoria]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categ->id_categoria], ['confirm' => __('Are you sure you want to delete # {0}?', $categ->id_categoria)]) ?>
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
