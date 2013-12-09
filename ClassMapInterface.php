<?php
/**
 * Class Map Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Class Map Interface
 *
 * @package    Resource
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      0.1
 */
interface ClassMapInterface
{
    /**
     * Create interface to concrete references
     *
     * @return  $this
     * @since   0.1
     */
    public function createMap();
}
