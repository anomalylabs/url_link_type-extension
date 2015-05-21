<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionUrlLinkTypeCreateUrlsStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionUrlLinkTypeCreateUrlsStream extends Migration
{

    /**
     * Fields
     *
     * @var array
     */
    protected $fields = [
        'title'       => 'anomaly.field_type.text',
        'url'         => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea',
    ];

    /**
     * Stream
     *
     * @var array
     */
    protected $stream = [
        'slug'   => 'urls',
        'locked' => true,
    ];

    /**
     * Field assignments
     *
     * @var array
     */
    protected $assignments = [
        'title'       => [
            'required' => true
        ],
        'url'         => [
            'required' => true,
            'unique'   => true,
        ],
        'description' => []
    ];

}
