<?php

namespace Swissup\DynamicBaseUrl\Plugin;

use Magento\Backend\App\Area\FrontNameResolver as Subject;
use Magento\Framework\App\RequestInterface;

class FrontNameResolver
{
    public function __construct(
        private RequestInterface $request
    ) {
    }

    public function afterIsHostBackend(Subject $subject, $result)
    {
        return $result ?: (bool) $this->request->getServer('HTTP_HOST');
    }
}
