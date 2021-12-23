<?php

namespace Container8bkQEuP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5cfad = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf39e7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5ed51 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getConnection', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getMetadataFactory', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getExpressionBuilder', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'beginTransaction', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getCache', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'transactional', array('func' => $func), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'commit', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->commit();
    }

    public function rollback()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'rollback', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getClassMetadata', array('className' => $className), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'createQuery', array('dql' => $dql), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'createNamedQuery', array('name' => $name), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'createQueryBuilder', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'flush', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'clear', array('entityName' => $entityName), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->clear($entityName);
    }

    public function close()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'close', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->close();
    }

    public function persist($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'persist', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'remove', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'refresh', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'detach', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'merge', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'contains', array('entity' => $entity), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getEventManager', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getConfiguration', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'isOpen', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getUnitOfWork', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getProxyFactory', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'initializeObject', array('obj' => $obj), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'getFilters', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'isFiltersStateClean', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'hasFilters', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return $this->valueHolder5cfad->hasFilters();
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

        $instance->initializerf39e7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5cfad) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5cfad = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5cfad->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__get', ['name' => $name], $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        if (isset(self::$publicProperties5ed51[$name])) {
            return $this->valueHolder5cfad->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfad;

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

        $targetObject = $this->valueHolder5cfad;
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
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfad;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5cfad;
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
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__isset', array('name' => $name), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfad;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5cfad;
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
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__unset', array('name' => $name), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfad;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5cfad;
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
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__clone', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        $this->valueHolder5cfad = clone $this->valueHolder5cfad;
    }

    public function __sleep()
    {
        $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, '__sleep', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;

        return array('valueHolder5cfad');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf39e7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf39e7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf39e7 && ($this->initializerf39e7->__invoke($valueHolder5cfad, $this, 'initializeProxy', array(), $this->initializerf39e7) || 1) && $this->valueHolder5cfad = $valueHolder5cfad;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5cfad;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5cfad;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
