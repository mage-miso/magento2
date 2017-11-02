<?php

namespace Samsung\Mobile\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Samsung\Mobile\Model\News;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Default News Index page
     *
     * @return void
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->getPage()->getConfig()->getTitle()->set(__('catalog_product_entity_varchar'));
        $listBlock = $this->_view->getLayout()->getBlock('news.list');

        if ($listBlock) {
            $currentPage = abs(intval($this->getRequest()->getParam('p')));
            if ($currentPage < 1) {
                $currentPage = 1;
            }

            $listBlock->setCurrentPage($currentPage);
        }


        //$this->_view->renderLayout();
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;

//        $page_object = $this->pageFactory->create();
//        return $page_object;
//        echo '<div style="width: 200px;height:200px; background-color: #0a6c9f;background-image: url(https://images-na.ssl-images-amazon.com/images/I/41iz5Tw82IL._AA210_.jpg)">Echo Dot (2nd Generation) - Black</div>';
//        var_dump(__METHOD___);
    }
}