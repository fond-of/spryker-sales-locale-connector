<?php

namespace FondOfSpryker\Zed\SalesLocaleConnector\Business;

use FondOfSpryker\Zed\SalesLocaleConnector\Business\Model\OrderExpander;
use FondOfSpryker\Zed\SalesLocaleConnector\Business\Model\OrderExpanderInterface;
use FondOfSpryker\Zed\SalesLocaleConnector\Dependency\Facade\SalesLocaleConnectorToLocaleFacadeInterface;
use FondOfSpryker\Zed\SalesLocaleConnector\SalesLocaleConnectorDependencyProvider;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class SalesLocaleConnectorBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\SalesLocaleConnector\Business\Model\OrderExpanderInterface
     */
    public function createOrderExpander(): OrderExpanderInterface
    {
        return new OrderExpander($this->getLocaleFacade());
    }

    /**
     * @return \FondOfSpryker\Zed\SalesLocaleConnector\Dependency\Facade\SalesLocaleConnectorToLocaleFacadeInterface
     */
    protected function getLocaleFacade(): SalesLocaleConnectorToLocaleFacadeInterface
    {
        return $this->getProvidedDependency(SalesLocaleConnectorDependencyProvider::FACADE_LOCALE);
    }
}
