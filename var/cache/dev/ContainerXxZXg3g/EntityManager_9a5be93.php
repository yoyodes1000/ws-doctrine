<?php

namespace ContainerXxZXg3g;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd279 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer778ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4db96 = [
        
    ];

    public function getConnection()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getConnection', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getMetadataFactory', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getExpressionBuilder', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'beginTransaction', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getCache', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getCache();
    }

    public function transactional($func)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'transactional', array('func' => $func), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'wrapInTransaction', array('func' => $func), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'commit', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->commit();
    }

    public function rollback()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'rollback', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getClassMetadata', array('className' => $className), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'createQuery', array('dql' => $dql), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'createNamedQuery', array('name' => $name), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'createQueryBuilder', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'flush', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'clear', array('entityName' => $entityName), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->clear($entityName);
    }

    public function close()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'close', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->close();
    }

    public function persist($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'persist', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'remove', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'refresh', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'detach', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'merge', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getRepository', array('entityName' => $entityName), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'contains', array('entity' => $entity), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getEventManager', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getConfiguration', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'isOpen', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getUnitOfWork', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getProxyFactory', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'initializeObject', array('obj' => $obj), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'getFilters', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'isFiltersStateClean', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'hasFilters', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return $this->valueHolderfd279->hasFilters();
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

        $instance->initializer778ed = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd279) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd279 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd279->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__get', ['name' => $name], $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        if (isset(self::$publicProperties4db96[$name])) {
            return $this->valueHolderfd279->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd279;

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

        $targetObject = $this->valueHolderfd279;
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
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd279;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd279;
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
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__isset', array('name' => $name), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd279;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd279;
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
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__unset', array('name' => $name), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd279;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd279;
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
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__clone', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        $this->valueHolderfd279 = clone $this->valueHolderfd279;
    }

    public function __sleep()
    {
        $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, '__sleep', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;

        return array('valueHolderfd279');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer778ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer778ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer778ed && ($this->initializer778ed->__invoke($valueHolderfd279, $this, 'initializeProxy', array(), $this->initializer778ed) || 1) && $this->valueHolderfd279 = $valueHolderfd279;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd279;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd279;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
