<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Subscriber;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;

/**
 * Adds the prefix to the wcf tables.
 */
class WcfTablePrefixSubscriber implements \Doctrine\Common\EventSubscriber
{

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * Constructor.
     *
     * @param string $prefix
     */
    public function __construct($prefix)
    {
        $this->prefix = (string) $prefix;
    }

    /**
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array('loadClassMetadata');
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs $args)
    {
        $classMetadata = $args->getClassMetadata();
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