<?php

namespace Quydhd\Article\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
//        $resultPage = $this->_pageFactory->create();
//        $resultPage->getConfig()->getTitle()->set('Something');
        return $this->_pageFactory->create();
    }
}