<?php

namespace Swissup\DynamicBaseUrl\Plugin;

use Magento\Framework\View\Element\AbstractBlock;

class AbstractBlockCacheKey
{
    public function afterGetCacheKey(AbstractBlock $subject, $result)
    {
        $dynamicHost = $subject->getRequest()->getServer('HTTP_HOST');

        if ($dynamicHost) {
            $prefix = str_starts_with($result, $subject::CUSTOM_CACHE_KEY_PREFIX)
                ? $subject::CUSTOM_CACHE_KEY_PREFIX
                : $subject::CACHE_KEY_PREFIX;

            $result = $prefix . hash('sha256', $result . $dynamicHost);
        }

        return $result;
    }
}
