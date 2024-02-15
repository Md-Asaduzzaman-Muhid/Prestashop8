<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera4cdc = null;
    private $initializeree5a3 = null;
    private static $publicPropertiesc664f = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getList', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getInstalledModules', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getMustBeConfiguredModules', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getUpgradableModules', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getModule', array('moduleName' => $moduleName), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'setActionUrls', array('collection' => $collection), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializeree5a3 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera4cdc) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera4cdc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera4cdc->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__get', ['name' => $name], $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        if (isset(self::$publicPropertiesc664f[$name])) {
            return $this->valueHoldera4cdc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4cdc;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera4cdc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4cdc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera4cdc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__isset', array('name' => $name), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4cdc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera4cdc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__unset', array('name' => $name), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera4cdc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera4cdc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__clone', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        $this->valueHoldera4cdc = clone $this->valueHoldera4cdc;
    }
    public function __sleep()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__sleep', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return array('valueHoldera4cdc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeree5a3 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeree5a3;
    }
    public function initializeProxy() : bool
    {
        return $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'initializeProxy', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera4cdc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera4cdc;
    }
}
