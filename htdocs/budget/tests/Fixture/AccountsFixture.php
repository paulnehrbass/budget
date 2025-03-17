<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountsFixture
 */
class AccountsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'category' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor ',
                'image' => 'Lorem ipsum dolor sit amet',
                'iban' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-17 11:03:49',
                'modified' => '2025-03-17 11:03:49',
            ],
        ];
        parent::init();
    }
}
