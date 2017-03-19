<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Subscriber;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use stepotronic\WcfToSymfonyBridgeBundle\Entity\WcfSession;
use stepotronic\WcfToSymfonyBridgeBundle\Entity\WcfUser;
use stepotronic\WcfToSymfonyBridgeBundle\Entity\WcfUserGroup;
use stepotronic\WcfToSymfonyBridgeBundle\Entity\WcfUserOptionValue;

/**
 * Adds the prefix to the wcf tables.
 */
class WcfTablePrefixSubscriber implements \Doctrine\Common\EventSubscriber
{

    /**
     * @var array
     */
    protected $prefixedClasses = array();

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * Constructor.
     *
     * @param string $prefix
     * @param array  $prefixedClasses
     */
    public function __construct($prefix, array $prefixedClasses)
    {
        $this->prefix = (string) $prefix;
        $this->prefixedClasses = $prefixedClasses;
    }

    /**
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array('loadClassMetadata');
    }

    /**
     * @param LoadClassMetadataEventArgs $args
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs $args)
    {
        $classMetadata = $args->getClassMetadata();
        if (!in_array($classMetadata->getName(), $this->prefixedClasses)) {
            return;
        }
        if ($classMetadata->isInheritanceTypeSingleTable() && !$classMetadata->isRootEntity()) {
            return;
        }

        $classMetadata->setTableName($this->prefix . $classMetadata->getTableName());

        foreach ($classMetadata->getAssociationMappings() as $fieldName => $mapping) {
            if ($mapping['type'] == \Doctrine\ORM\Mapping\ClassMetadataInfo::MANY_TO_MANY
                && array_key_exists('name', $classMetadata->associationMappings[$fieldName]['joinTable'])
            ) {
                $mappedTableName = $classMetadata->associationMappings[$fieldName]['joinTable']['name'];
                $classMetadata->associationMappings[$fieldName]['joinTable']['name'] = $this->prefix . $mappedTableName;
            }
        }
    }
}