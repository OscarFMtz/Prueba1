<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductoFixture
 */
class ProductoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'producto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_producto' => 1,
                'id_categoria' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'precio' => 'Lorem ipsum dolor sit a',
                'url' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
