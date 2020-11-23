<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Scope;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    /** Stores configuration paths */
    const XML_PATH_CATALOG_PRODUCT_IMAGE_LAZYLOAD_ENABLED = 'catalog/product_image_lazyload/enabled';
    const XML_PATH_CATALOG_IMAGE_PRELOAD_ENABLED = 'catalog/product_image_lazyload/preload';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function isProductImageLazyloadingEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_CATALOG_PRODUCT_IMAGE_LAZYLOAD_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function isImagePreloadingEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_CATALOG_PRODUCT_IMAGE_LAZYLOAD_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }
}
