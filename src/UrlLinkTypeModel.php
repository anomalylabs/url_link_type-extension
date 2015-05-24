<?php namespace Anomaly\UrlLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkEntryInterface;
use Anomaly\Streams\Platform\Model\UrlLinkType\UrlLinkTypeUrlsEntryModel;

/**
 * Class UrlLinkTypeModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UrlLinkTypeExtension
 */
class UrlLinkTypeModel extends UrlLinkTypeUrlsEntryModel implements LinkEntryInterface
{

    /**
     * Get the URL.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
