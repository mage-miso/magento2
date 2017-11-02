<?php

namespace Samsung\Mobile\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setPJH("Samsung MSG");
    }

}

?>