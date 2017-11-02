<?php

namespace Samsung\Mobile\Block\Widget;

use Magento\Framework\View\Element\Template;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Widget\Block\BlockInterface;


class ContactInformations extends \Magento\Catalog\Block\Product\AbstractProduct
    implements \Magento\Widget\Block\BlockInterface
{

    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder,
        \Magento\CatalogWidget\Model\Rule $rule,
        \Magento\Widget\Helper\Conditions $conditionsHelper,
        array $data = []
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->catalogProductVisibility = $catalogProductVisibility;
        $this->httpContext = $httpContext;
        $this->sqlBuilder = $sqlBuilder;
        $this->rule = $rule;
        $this->conditionsHelper = $conditionsHelper;
        parent::__construct(
            $context,
            $data
        );
    }


    public function _toHtml()
    {
        $this->setTemplate('widget/contact_informations.phtml');
    }

    protected function _prepareLayout()
    {
        $this->setPJH("Samsung MSG");
    }


}