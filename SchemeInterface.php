<?php
/**
 * Scheme Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Resource;

/**
 * Scheme Interface
 *
 * @package    Resource
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @since      1.0.0
 */
interface SchemeInterface
{
/**
     * Get Scheme
     *
     * @param   string $scheme_name
     *
     * @return  null|object
     * @since   1.0.0
     */
    public function getScheme($scheme_name);

    /**
     * Define scheme, allowable file extensions and adapter instance
     *
     * @param   string             $scheme_name
     * @param   ResourceInterface  $adapter
     * @param   array              $extensions
     *
     * @return  $this
     * @since   1.0.0
     */
    public function setScheme($scheme_name, ResourceInterface $adapter, array $extensions = array());
}
