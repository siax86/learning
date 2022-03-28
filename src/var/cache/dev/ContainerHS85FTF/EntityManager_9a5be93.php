<?php

namespace ContainerHS85FTF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8fc26 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1d7be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3136a = [
        
    ];

    public function getConnection()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getConnection', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getMetadataFactory', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getExpressionBuilder', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'beginTransaction', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getCache', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'transactional', array('func' => $func), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'commit', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->commit();
    }

    public function rollback()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'rollback', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'createQuery', array('dql' => $dql), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'createQueryBuilder', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'flush', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'clear', array('entityName' => $entityName), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->clear($entityName);
    }

    public function close()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'close', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->close();
    }

    public function persist($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'persist', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'remove', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'refresh', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'detach', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'merge', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'contains', array('entity' => $entity), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getEventManager', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getConfiguration', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'isOpen', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getUnitOfWork', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getProxyFactory', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'getFilters', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'isFiltersStateClean', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'hasFilters', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return $this->valueHolder8fc26->hasFilters();
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

        $instance->initializer1d7be = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8fc26) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8fc26 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8fc26->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__get', ['name' => $name], $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        if (isset(self::$publicProperties3136a[$name])) {
            return $this->valueHolder8fc26->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc26;

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

        $targetObject = $this->valueHolder8fc26;
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
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc26;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8fc26;
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
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__isset', array('name' => $name), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc26;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8fc26;
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
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__unset', array('name' => $name), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fc26;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8fc26;
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
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__clone', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        $this->valueHolder8fc26 = clone $this->valueHolder8fc26;
    }

    public function __sleep()
    {
        $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, '__sleep', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;

        return array('valueHolder8fc26');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d7be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d7be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1d7be && ($this->initializer1d7be->__invoke($valueHolder8fc26, $this, 'initializeProxy', array(), $this->initializer1d7be) || 1) && $this->valueHolder8fc26 = $valueHolder8fc26;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8fc26;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8fc26;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
