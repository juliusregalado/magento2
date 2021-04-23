<?php
namespace Magento\UrlRewrite\Model\Storage\DbStorage;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Model\Storage\DbStorage
 */
class Interceptor extends \Magento\UrlRewrite\Model\Storage\DbStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Service\V1\Data\UrlRewriteFactory $urlRewriteFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\App\ResourceConnection $resource, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($urlRewriteFactory, $dataObjectHelper, $resource, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteByData');
        return $pluginInfo ? $this->___callPlugins('deleteByData', func_get_args(), $pluginInfo) : parent::deleteByData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function findAllByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findAllByData');
        return $pluginInfo ? $this->___callPlugins('findAllByData', func_get_args(), $pluginInfo) : parent::findAllByData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function findOneByData(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findOneByData');
        return $pluginInfo ? $this->___callPlugins('findOneByData', func_get_args(), $pluginInfo) : parent::findOneByData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array $urls)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'replace');
        return $pluginInfo ? $this->___callPlugins('replace', func_get_args(), $pluginInfo) : parent::replace($urls);
    }
}
