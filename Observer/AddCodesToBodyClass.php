<?php
namespace MarkShust\ExtraBodyClasses\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Page\Config;
use Magento\Store\Model\StoreManagerInterface;

class AddCodesToBodyClass implements ObserverInterface
{
    /** @var Config */
    protected $pageConfig;

    /** @var StoreManagerInterface */
    protected $storeManager;

    /**
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager
    ) {
        $this->pageConfig = $context->getPageConfig();
        $this->storeManager = $storeManager;
    }

    /**
     * @param Observer $observer
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function execute(Observer $observer)
    {
        $websiteCode = $this->storeManager->getWebsite()->getCode();
        $storeCode = $this->storeManager->getStore()->getCode();
        $this->pageConfig->addBodyClass($websiteCode);
        $this->pageConfig->addBodyClass($storeCode);
    }
}
