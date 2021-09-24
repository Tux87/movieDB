<?php

namespace ContainerBvLSPsu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder11f71 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1c15 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdab1c = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getConnection', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getMetadataFactory', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getExpressionBuilder', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'beginTransaction', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getCache', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'transactional', array('func' => $func), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->transactional($func);
    }

    public function commit()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'commit', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->commit();
    }

    public function rollback()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'rollback', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'createQuery', array('dql' => $dql), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'createQueryBuilder', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'flush', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'clear', array('entityName' => $entityName), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'close', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->close();
    }

    public function persist($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'persist', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'remove', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'refresh', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'detach', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'merge', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'contains', array('entity' => $entity), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getEventManager', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getConfiguration', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'isOpen', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getUnitOfWork', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getProxyFactory', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'getFilters', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'isFiltersStateClean', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'hasFilters', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return $this->valueHolder11f71->hasFilters();
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

        $instance->initializerb1c15 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder11f71) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder11f71 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder11f71->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__get', ['name' => $name], $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        if (isset(self::$publicPropertiesdab1c[$name])) {
            return $this->valueHolder11f71->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f71;

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

        $targetObject = $this->valueHolder11f71;
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
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f71;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder11f71;
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
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__isset', array('name' => $name), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f71;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder11f71;
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
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__unset', array('name' => $name), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder11f71;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder11f71;
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
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__clone', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        $this->valueHolder11f71 = clone $this->valueHolder11f71;
    }

    public function __sleep()
    {
        $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, '__sleep', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;

        return array('valueHolder11f71');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1c15 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1c15;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1c15 && ($this->initializerb1c15->__invoke($valueHolder11f71, $this, 'initializeProxy', array(), $this->initializerb1c15) || 1) && $this->valueHolder11f71 = $valueHolder11f71;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder11f71;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder11f71;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
