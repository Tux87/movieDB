<?php

namespace ContainerUaXbGw8;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6260c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer77867 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5925c = [
        
    ];

    public function getConnection()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getConnection', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getMetadataFactory', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getExpressionBuilder', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'beginTransaction', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getCache', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'transactional', array('func' => $func), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->transactional($func);
    }

    public function commit()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'commit', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->commit();
    }

    public function rollback()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'rollback', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getClassMetadata', array('className' => $className), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'createQuery', array('dql' => $dql), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'createNamedQuery', array('name' => $name), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'createQueryBuilder', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'flush', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'clear', array('entityName' => $entityName), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->clear($entityName);
    }

    public function close()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'close', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->close();
    }

    public function persist($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'persist', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'remove', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'refresh', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'detach', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'merge', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'contains', array('entity' => $entity), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getEventManager', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getConfiguration', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'isOpen', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getUnitOfWork', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getProxyFactory', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'initializeObject', array('obj' => $obj), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'getFilters', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'isFiltersStateClean', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'hasFilters', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return $this->valueHolder6260c->hasFilters();
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

        $instance->initializer77867 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6260c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6260c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6260c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__get', ['name' => $name], $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        if (isset(self::$publicProperties5925c[$name])) {
            return $this->valueHolder6260c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6260c;

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

        $targetObject = $this->valueHolder6260c;
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
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6260c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6260c;
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
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__isset', array('name' => $name), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6260c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6260c;
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
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__unset', array('name' => $name), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6260c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6260c;
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
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__clone', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        $this->valueHolder6260c = clone $this->valueHolder6260c;
    }

    public function __sleep()
    {
        $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, '__sleep', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;

        return array('valueHolder6260c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer77867 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer77867;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer77867 && ($this->initializer77867->__invoke($valueHolder6260c, $this, 'initializeProxy', array(), $this->initializer77867) || 1) && $this->valueHolder6260c = $valueHolder6260c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6260c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6260c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
