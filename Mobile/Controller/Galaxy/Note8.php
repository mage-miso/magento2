<?php

namespace Samsung\Mobile\Controller\Galaxy;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;


class Note8 extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
//        $page_object = $this->pageFactory->create();
//        return $page_object;
        echo '<div style="width: 200px;height:200px; background-color: #0a6c9f;background-image: url(https://images-na.ssl-images-amazon.com/images/I/41iz5Tw82IL._AA210_.jpg)">Echo Dot (2nd Generation) - Black</div>';
//        var_dump(__METHOD___);
    }
}