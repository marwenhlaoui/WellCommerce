<?php
/**
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CatalogBundle\Tests\Entity;

use WellCommerce\Bundle\CatalogBundle\Entity\ProductStatus;
use WellCommerce\Bundle\CoreBundle\Test\Entity\AbstractEntityTestCase;

/**
 * Class ProductStatusTest
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ProductStatusTest extends AbstractEntityTestCase
{
    protected function createEntity()
    {
        return new ProductStatus();
    }
    
    public function providerTestAccessor()
    {
        $faker = $this->getFakerGenerator();
        
        return [
            ['symbol', $faker->randomAscii],
            ['createdAt', $faker->dateTime],
            ['updatedAt', $faker->dateTime],
        ];
    }
}
