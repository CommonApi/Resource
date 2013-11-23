<?php
/**
 * Resource Adapter Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Adapter Interface
 *
 * @package    Resource
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface AdapterInterface
    extends ClassHandlerInterface,
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
