<?php
/**
 * Resource Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Interface
 *
 * @package    Resource
 * @license    MIT
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ResourceInterface
    extends ClassLoaderInterface,
    LocatorInterface,
    NamespaceInterface,
    SchemeInterface
{
    /**
     * Verify if the resource namespace has been defined or not
     *
     * @param   string $resource_namespace
     *
     * @return  boolean
     * @since   1.0
     */
    public function exists($resource_namespace);
}
