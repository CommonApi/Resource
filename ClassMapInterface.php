<?php
/**
 * Class Map Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Resource;

/**
 * Class Map Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      1.0
 */
interface ClassMapInterface
{
    /**
     * Create interface to concrete references
     *
     * @return  $this
     * @since   1.0
     */
    public function createMap();
}
