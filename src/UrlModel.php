<?php namespace Anomaly\UrlLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkableInterface;
use Anomaly\Streams\Platform\Model\UrlLinkType\UrlLinkTypeUrlsEntryModel;

class UrlModel extends UrlLinkTypeUrlsEntryModel implements LinkableInterface
{

    /**
     * @return string
     */
    public function getUrl()
    {
        return starts_with($this->url, url()) ? url($this->url) : $this->url;
    }

}