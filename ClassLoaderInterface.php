<?php
/**
 * Class Loader Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Class Loader Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      1.0
 */
interface ClassLoaderInterface
{
    /**
     * Register Class Autoloader
     *
     * @param   boolean $prepend
     *
     * @return  $this
     * @since   1.0.0
     */
    public function register($prepend = true);

    /**
     * Unregister Class Autoloader
     *
     * @return  $this
     * @since   1.0.0
     */
    public function unregister();
}
