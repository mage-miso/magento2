<?php

namespace Samsung\Mobile\Model\ResourceModel\News;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Samsung\Mobile\Model\News',
            'Samsung\Mobile\Model\ResourceModel\News'
        );
    }
}
