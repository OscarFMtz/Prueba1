<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id_producto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id_producto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Producto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="producto view content">
            <h3><?= h($producto->id_producto) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($producto->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripcion') ?></th>
                    <td><?= h($producto->descripcion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= h($producto->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($producto->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Producto') ?></th>
                    <td><?= $this->Number->format($producto->id_producto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categoria') ?></th>
                    <td><?= $this->Number->format($producto->id_categoria) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
