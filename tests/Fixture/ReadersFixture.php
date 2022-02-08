<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReadersFixture
 */
class ReadersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'area' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-02-06 17:40:24',
                'modified' => '2022-02-06 17:40:24',
            ],
        ];
        parent::init();
    }
}
