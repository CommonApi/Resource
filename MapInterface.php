<?php
/**
 * Resource Map Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Map Interface
 *
 * @package    Resource
 * @license    MIT
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface MapInterface
{
    /**
     * Create resource map of folder/file locations and Fully Qualified Namespaces
     *
     * @return  object
     * @since   0.1
     */
    public function createMap();
}
