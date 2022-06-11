<?php

namespace Container47SnAPx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder86dbe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccf6e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesebaf7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getConnection', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getMetadataFactory', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getExpressionBuilder', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'beginTransaction', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getCache', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getCache();
    }

    public function transactional($func)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'transactional', array('func' => $func), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'wrapInTransaction', array('func' => $func), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'commit', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->commit();
    }

    public function rollback()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'rollback', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getClassMetadata', array('className' => $className), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'createQuery', array('dql' => $dql), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'createNamedQuery', array('name' => $name), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'createQueryBuilder', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'flush', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'clear', array('entityName' => $entityName), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->clear($entityName);
    }

    public function close()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'close', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->close();
    }

    public function persist($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'persist', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'remove', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'refresh', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'detach', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'merge', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'contains', array('entity' => $entity), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getEventManager', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getConfiguration', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'isOpen', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getUnitOfWork', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getProxyFactory', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'initializeObject', array('obj' => $obj), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'getFilters', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'isFiltersStateClean', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'hasFilters', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return $this->valueHolder86dbe->hasFilters();
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

        $instance->initializerccf6e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder86dbe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86dbe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder86dbe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__get', ['name' => $name], $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        if (isset(self::$publicPropertiesebaf7[$name])) {
            return $this->valueHolder86dbe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86dbe;

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

        $targetObject = $this->valueHolder86dbe;
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
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86dbe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder86dbe;
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
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__isset', array('name' => $name), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86dbe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder86dbe;
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
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__unset', array('name' => $name), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86dbe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder86dbe;
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
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__clone', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        $this->valueHolder86dbe = clone $this->valueHolder86dbe;
    }

    public function __sleep()
    {
        $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, '__sleep', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;

        return array('valueHolder86dbe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccf6e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccf6e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccf6e && ($this->initializerccf6e->__invoke($valueHolder86dbe, $this, 'initializeProxy', array(), $this->initializerccf6e) || 1) && $this->valueHolder86dbe = $valueHolder86dbe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86dbe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86dbe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
