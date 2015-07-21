<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionUrlLinkType_1_0_0_CreateLinksStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionUrlLinkType_1_0_0_CreateLinksStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'urls',
        'title_column' => 'title',
        'translatable' => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title'       => [
            'required'     => true,
            'translatable' => true
        ],
        'url'         => [
            'required' => true
        ],
        'description' => [
            'translatable' => true
        ]
    ];

}
