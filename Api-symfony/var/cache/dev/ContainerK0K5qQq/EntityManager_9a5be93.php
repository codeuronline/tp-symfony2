<?php

namespace ContainerK0K5qQq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4939f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer997b0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1af83 = [
        
    ];

    public function getConnection()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getConnection', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getMetadataFactory', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getExpressionBuilder', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'beginTransaction', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getCache', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'transactional', array('func' => $func), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'commit', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->commit();
    }

    public function rollback()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'rollback', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getClassMetadata', array('className' => $className), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'createQuery', array('dql' => $dql), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'createNamedQuery', array('name' => $name), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'createQueryBuilder', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'flush', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'clear', array('entityName' => $entityName), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->clear($entityName);
    }

    public function close()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'close', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->close();
    }

    public function persist($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'persist', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'remove', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'refresh', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'detach', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'merge', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'contains', array('entity' => $entity), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getEventManager', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getConfiguration', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'isOpen', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getUnitOfWork', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getProxyFactory', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'initializeObject', array('obj' => $obj), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'getFilters', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'isFiltersStateClean', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'hasFilters', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return $this->valueHolder4939f->hasFilters();
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

        $instance->initializer997b0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4939f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4939f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4939f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__get', ['name' => $name], $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        if (isset(self::$publicProperties1af83[$name])) {
            return $this->valueHolder4939f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4939f;

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

        $targetObject = $this->valueHolder4939f;
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
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4939f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4939f;
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
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__isset', array('name' => $name), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4939f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4939f;
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
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__unset', array('name' => $name), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4939f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4939f;
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
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__clone', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        $this->valueHolder4939f = clone $this->valueHolder4939f;
    }

    public function __sleep()
    {
        $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, '__sleep', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;

        return array('valueHolder4939f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer997b0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer997b0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer997b0 && ($this->initializer997b0->__invoke($valueHolder4939f, $this, 'initializeProxy', array(), $this->initializer997b0) || 1) && $this->valueHolder4939f = $valueHolder4939f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4939f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4939f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
