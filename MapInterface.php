<?php
/**
 * Resource Map Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Resource Map Interface
 *
 * @package    Resource
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0.0
 */
interface MapInterface
{
    /**
     * Create resource map of folder/file locations and namespaces
     *
     * @return  $this
     * @since   1.0.0
     */
    public function createMap();
}
