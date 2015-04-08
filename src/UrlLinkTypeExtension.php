<?php namespace Anomaly\UrlLinkTypeExtension;

use Anomaly\NavigationModule\LinkType\LinkTypeExtension;

/**
 * Class UrlLinkTypeExtension
 * @package Anomaly\UrlLinkTypeExtension
 */
class UrlLinkTypeExtension extends LinkTypeExtension
{

    /**
     * @var string
     */
    protected $provides = 'anomaly.module.navigation::link_type.url';

    /**
     * The link type model
     *
     * @var string
     */
    protected $model = 'Anomaly\UrlLinkTypeExtension\UrlModel';

    /**
     * @var string
     */
    protected $searchField = 'url';

    /**
     * Allows to create a new url from the same search input.
     *
     * @var bool
     */
    protected $create = true;

}