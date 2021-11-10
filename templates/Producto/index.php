<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $producto
 */
?>
<div class="producto index content">
    <?= $this->Html->link(__('Nuevo Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Producto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_producto') ?></th>
                    <th><?= $this->Paginator->sort('id_categoria') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('imagen') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($producto as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id_producto) ?></td>
                    <td><?= $this->Number->format($producto->id_categoria) ?></td>
                    <td><?= h($producto->nombre) ?></td>
                    <td><?= h($producto->descripcion) ?></td>
                    <td><?= h($producto->precio) ?></td>
                    <td><?= h($producto->url) ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id_producto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id_producto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id_producto)]) ?>
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
