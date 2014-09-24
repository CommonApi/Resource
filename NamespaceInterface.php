<?php
/**
 * Resource Namespace Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Namespace Interface
 *
 * @package    Resource
 * @license    MIT
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface NamespaceInterface
{
    /**
     * Locates a resource using only the namespace
     *
     * @param   string $namespace
     * @param   string $scheme
     *
     * @return  void|mixed
     * @since   1.0.0
     */
    public function locateNamespace($namespace, $scheme = 'Class');

    /**
     * Set a namespace prefix by mapping to the filesystem path
     *
     * @param   string  $namespace_prefix
     * @param   string  $base_directory
     * @param   boolean $prepend
     *
     * @return  $this
     * @since   1.0.0
     */
    public function setNamespace($namespace_prefix, $base_directory, $prepend = false);
}
