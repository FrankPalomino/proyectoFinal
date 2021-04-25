<?php

namespace Container0gx9Zo2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0e962 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer34fa3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties821fb = [
        
    ];

    public function getConnection()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getConnection', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getMetadataFactory', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getExpressionBuilder', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'beginTransaction', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getCache', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getCache();
    }

    public function transactional($func)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'transactional', array('func' => $func), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->transactional($func);
    }

    public function commit()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'commit', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->commit();
    }

    public function rollback()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'rollback', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getClassMetadata', array('className' => $className), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'createQuery', array('dql' => $dql), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'createNamedQuery', array('name' => $name), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'createQueryBuilder', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'flush', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'clear', array('entityName' => $entityName), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->clear($entityName);
    }

    public function close()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'close', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->close();
    }

    public function persist($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'persist', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'remove', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'refresh', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'detach', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'merge', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getRepository', array('entityName' => $entityName), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'contains', array('entity' => $entity), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getEventManager', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getConfiguration', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'isOpen', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getUnitOfWork', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getProxyFactory', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'initializeObject', array('obj' => $obj), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'getFilters', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'isFiltersStateClean', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'hasFilters', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return $this->valueHolder0e962->hasFilters();
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

        $instance->initializer34fa3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0e962) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0e962 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0e962->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__get', ['name' => $name], $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        if (isset(self::$publicProperties821fb[$name])) {
            return $this->valueHolder0e962->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e962;

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

        $targetObject = $this->valueHolder0e962;
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
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e962;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0e962;
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
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__isset', array('name' => $name), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e962;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0e962;
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
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__unset', array('name' => $name), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0e962;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0e962;
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
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__clone', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        $this->valueHolder0e962 = clone $this->valueHolder0e962;
    }

    public function __sleep()
    {
        $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, '__sleep', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;

        return array('valueHolder0e962');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer34fa3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer34fa3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer34fa3 && ($this->initializer34fa3->__invoke($valueHolder0e962, $this, 'initializeProxy', array(), $this->initializer34fa3) || 1) && $this->valueHolder0e962 = $valueHolder0e962;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0e962;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0e962;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
