<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CardsFixture
 */
class CardsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'admin_id' => 1,
                'img' => 'Lorem ipsum dolor sit amet',
                'txt_sp' => 'Lorem ipsum dolor sit amet',
                'txt_en' => 'Lorem ipsum dolor sit amet',
                'txt_fr' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-02-06 17:40:16',
                'modified' => '2022-02-06 17:40:16',
            ],
        ];
        parent::init();
    }
}
