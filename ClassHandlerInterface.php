<?php
/**
 * Class Handler Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Class Handler Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      1.0
 */
interface ClassHandlerInterface
{
    /**
     * Register Class Autoloader
     *
     * @param   boolean $prepend
     *
     * @return  $this
     * @since   1.0
     */
    public function register($prepend = true);

    /**
     * Unregister Class Autoloader
     *
     * @return  $this
     * @since   1.0
     */
    public function unregister();

    /**
     * Locates a resource using only the namespace
     *
     * @param   string $namespace
     * @param   string $scheme
     *
     * @return  void|mixed
     * @since   1.0
     */
    public function locateNamespace($namespace, $scheme = 'Class');
}
