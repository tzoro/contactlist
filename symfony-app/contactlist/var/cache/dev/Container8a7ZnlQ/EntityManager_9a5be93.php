<?php

namespace Container8a7ZnlQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ec21 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8db9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a4c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getConnection', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getMetadataFactory', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getExpressionBuilder', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'beginTransaction', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getCache', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'transactional', array('func' => $func), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'commit', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->commit();
    }

    public function rollback()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'rollback', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'createQuery', array('dql' => $dql), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'createQueryBuilder', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'flush', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'clear', array('entityName' => $entityName), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'close', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->close();
    }

    public function persist($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'persist', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'remove', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'refresh', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'detach', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'merge', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'contains', array('entity' => $entity), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getEventManager', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getConfiguration', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'isOpen', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getUnitOfWork', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getProxyFactory', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'getFilters', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'isFiltersStateClean', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'hasFilters', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return $this->valueHolder5ec21->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb8db9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ec21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ec21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ec21->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__get', ['name' => $name], $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        if (isset(self::$publicProperties6a4c7[$name])) {
            return $this->valueHolder5ec21->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ec21;

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

        $targetObject = $this->valueHolder5ec21;
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
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ec21;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ec21;
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
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__isset', array('name' => $name), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ec21;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ec21;
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
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__unset', array('name' => $name), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ec21;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ec21;
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
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__clone', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        $this->valueHolder5ec21 = clone $this->valueHolder5ec21;
    }

    public function __sleep()
    {
        $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, '__sleep', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;

        return array('valueHolder5ec21');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8db9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8db9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8db9 && ($this->initializerb8db9->__invoke($valueHolder5ec21, $this, 'initializeProxy', array(), $this->initializerb8db9) || 1) && $this->valueHolder5ec21 = $valueHolder5ec21;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ec21;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ec21;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
