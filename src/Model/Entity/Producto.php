<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id_producto
 * @property int $id_categoria
 * @property string $nombre
 * @property string $descripcion
 * @property string $precio
 * @property string $url
 */
class Producto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_categoria' => true,
        'nombre' => true,
        'descripcion' => true,
        'precio' => true,
        'url' => true,
    ];
}
