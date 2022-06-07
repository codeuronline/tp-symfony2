<?php

namespace Container9DTi5Zp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9dfab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1042d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc71bf = [
        
    ];

    public function getConnection()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getConnection', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getMetadataFactory', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getExpressionBuilder', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'beginTransaction', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getCache', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'transactional', array('func' => $func), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'commit', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->commit();
    }

    public function rollback()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'rollback', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getClassMetadata', array('className' => $className), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'createQuery', array('dql' => $dql), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'createNamedQuery', array('name' => $name), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'createQueryBuilder', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'flush', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'clear', array('entityName' => $entityName), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->clear($entityName);
    }

    public function close()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'close', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->close();
    }

    public function persist($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'persist', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'remove', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'refresh', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'detach', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'merge', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'contains', array('entity' => $entity), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getEventManager', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getConfiguration', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'isOpen', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getUnitOfWork', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getProxyFactory', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'initializeObject', array('obj' => $obj), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'getFilters', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'isFiltersStateClean', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'hasFilters', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return $this->valueHolder9dfab->hasFilters();
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

        $instance->initializer1042d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9dfab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9dfab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9dfab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__get', ['name' => $name], $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        if (isset(self::$publicPropertiesc71bf[$name])) {
            return $this->valueHolder9dfab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dfab;

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

        $targetObject = $this->valueHolder9dfab;
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
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dfab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9dfab;
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
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__isset', array('name' => $name), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dfab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9dfab;
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
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__unset', array('name' => $name), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9dfab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9dfab;
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
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__clone', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        $this->valueHolder9dfab = clone $this->valueHolder9dfab;
    }

    public function __sleep()
    {
        $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, '__sleep', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;

        return array('valueHolder9dfab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1042d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1042d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1042d && ($this->initializer1042d->__invoke($valueHolder9dfab, $this, 'initializeProxy', array(), $this->initializer1042d) || 1) && $this->valueHolder9dfab = $valueHolder9dfab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9dfab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9dfab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
