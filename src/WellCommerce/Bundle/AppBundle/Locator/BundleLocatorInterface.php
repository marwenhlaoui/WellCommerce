<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\AppBundle\Locator;

/**
 * Interface BundleLocatorInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface BundleLocatorInterface
{
    /**
     * Returns an array containing resolved bundle classes
     *
     * @return array
     */
    public function getBundles();
}