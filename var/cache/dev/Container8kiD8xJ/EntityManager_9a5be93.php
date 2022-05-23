<?php

namespace Container8kiD8xJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5bf71 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0cf0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties74ae9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getConnection', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getMetadataFactory', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getExpressionBuilder', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'beginTransaction', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getCache', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'transactional', array('func' => $func), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'commit', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->commit();
    }

    public function rollback()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'rollback', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getClassMetadata', array('className' => $className), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'createQuery', array('dql' => $dql), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'createNamedQuery', array('name' => $name), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'createQueryBuilder', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'flush', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'clear', array('entityName' => $entityName), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->clear($entityName);
    }

    public function close()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'close', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->close();
    }

    public function persist($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'persist', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'remove', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'refresh', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'detach', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'merge', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'contains', array('entity' => $entity), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getEventManager', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getConfiguration', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'isOpen', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getUnitOfWork', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getProxyFactory', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'initializeObject', array('obj' => $obj), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'getFilters', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'isFiltersStateClean', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'hasFilters', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return $this->valueHolder5bf71->hasFilters();
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

        $instance->initializer0cf0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5bf71) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5bf71 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5bf71->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__get', ['name' => $name], $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        if (isset(self::$publicProperties74ae9[$name])) {
            return $this->valueHolder5bf71->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bf71;

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

        $targetObject = $this->valueHolder5bf71;
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
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bf71;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5bf71;
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
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__isset', array('name' => $name), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bf71;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5bf71;
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
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__unset', array('name' => $name), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5bf71;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5bf71;
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
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__clone', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        $this->valueHolder5bf71 = clone $this->valueHolder5bf71;
    }

    public function __sleep()
    {
        $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, '__sleep', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;

        return array('valueHolder5bf71');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0cf0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0cf0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0cf0a && ($this->initializer0cf0a->__invoke($valueHolder5bf71, $this, 'initializeProxy', array(), $this->initializer0cf0a) || 1) && $this->valueHolder5bf71 = $valueHolder5bf71;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5bf71;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5bf71;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
