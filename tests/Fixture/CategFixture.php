<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategFixture
 */
class CategFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'categ';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_categoria' => 1,
                'categoria' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
