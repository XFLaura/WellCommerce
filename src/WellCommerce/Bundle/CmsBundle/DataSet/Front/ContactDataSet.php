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

namespace WellCommerce\Bundle\CmsBundle\DataSet\Front;

use WellCommerce\Bundle\CmsBundle\DataSet\Admin\ContactDataSet as BaseDataSet;

/**
 * Class ContactDataSet
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class ContactDataSet extends BaseDataSet
{
    public function getIdentifier(): string
    {
        return 'front.contact';
    }
}
