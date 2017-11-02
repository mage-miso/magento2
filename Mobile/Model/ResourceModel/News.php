<?php

namespace Samsung\Mobile\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('catalog_product_entity_varchar', 'value_id');
    }
}
