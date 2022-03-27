<?php

namespace _CKFinder_Vendor_Prefix\Aws\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = ['structure' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\StructureShape', 'map' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\MapShape', 'list' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\ListShape', 'timestamp' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\TimestampShape', 'integer' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'double' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'float' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'long' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'string' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'byte' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'character' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'blob' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape', 'boolean' => '_CKFinder_Vendor_Prefix\\Aws\\Api\\Shape'];
        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }
        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: ' . \print_r($definition, \true));
        }
        $type = $map[$definition['type']];
        return new $type($definition, $shapeMap);
    }
    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }
    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
