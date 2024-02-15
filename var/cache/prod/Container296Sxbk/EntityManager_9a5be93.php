<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera4cdc = null;
    private $initializeree5a3 = null;
    private static $publicPropertiesc664f = [
        
    ];
    public function getConnection()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getConnection', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getMetadataFactory', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getExpressionBuilder', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'beginTransaction', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getCache', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getCache();
    }
    public function transactional($func)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'transactional', array('func' => $func), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'wrapInTransaction', array('func' => $func), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'commit', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->commit();
    }
    public function rollback()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'rollback', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getClassMetadata', array('className' => $className), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'createQuery', array('dql' => $dql), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'createNamedQuery', array('name' => $name), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'createQueryBuilder', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'flush', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'clear', array('entityName' => $entityName), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->clear($entityName);
    }
    public function close()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'close', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->close();
    }
    public function persist($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'persist', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'remove', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'refresh', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'detach', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'merge', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getRepository', array('entityName' => $entityName), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'contains', array('entity' => $entity), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getEventManager', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getConfiguration', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'isOpen', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getUnitOfWork', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getProxyFactory', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'initializeObject', array('obj' => $obj), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'getFilters', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'isFiltersStateClean', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, 'hasFilters', array(), $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        return $this->valueHoldera4cdc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializeree5a3 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera4cdc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera4cdc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera4cdc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializeree5a3 && ($this->initializeree5a3->__invoke($valueHoldera4cdc, $this, '__get', ['name' => $name], $this->initializeree5a3) || 1) && $this->valueHoldera4cdc = $valueHoldera4cdc;
        if (isset(self::$publicPropertiesc664f[$name])) {
            return $this->valueHoldera4cdc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
