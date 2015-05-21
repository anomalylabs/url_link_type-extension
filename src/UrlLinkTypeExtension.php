<?php namespace Anomaly\UrlLinkTypeExtension;

use Anomaly\NavigationModule\Link\LinkType;

/**
 * Class UrlLinkTypeExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UrlLinkTypeExtension
 */
class UrlLinkTypeExtension extends LinkType
{

    /**
     * This extension provides the URL
     * link type for the Navigation module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.url';

}