<?php
/**
 * Resource Handler Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Handler Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      0.1
 */
interface HandlerInterface
{
    /**
     * Set a namespace prefix by mapping to the filesystem path
     *
     * @param   string  $namespace_prefix
     * @param   string  $namespace_base_directory
     * @param   boolean $prepend
     *
     * @return  $this
     * @since   0.1
     */
    public function setNamespace($namespace_prefix, $namespace_base_directory, $prepend = false);

    /**
     * Locates folder/file associated with Namespace for Resource
     *
     * @param   string $resource_namespace
     * @param   bool   $multiple
     *
     * @return  void|mixed
     * @since   0.1
     */
    public function get($resource_namespace, $multiple = false);

    /**
     * Handle located folder/file associated with URI Namespace for Resource
     *
     * @param   string $scheme
     * @param   string $located_path
     * @param   array  $options
     *
     * @return  void|mixed
     * @since   0.1
     */
    public function handlePath($scheme, $located_path, array $options = array());

    /**
     * Retrieve a collection of a specific handler
     *
     * @param   string $scheme
     * @param   array  $options
     *
     * @return  mixed
     * @since   0.1
     */
    public function getCollection($scheme, array $options = array());
}
