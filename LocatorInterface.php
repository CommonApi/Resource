<?php
/**
 * Resource Locator Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Resource;

/**
 * Resource Locator Interface
 *
 * @package    Resource
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface LocatorInterface
{
    /**
     * Locates folder/file associated with URI Namespace for Resource
     *
     * @param   string $uri_namespace
     * @param   array  $options
     *
     * @return  void|mixed
     * @since   1.0
     */
    public function get($uri_namespace, array $options = array());
}
