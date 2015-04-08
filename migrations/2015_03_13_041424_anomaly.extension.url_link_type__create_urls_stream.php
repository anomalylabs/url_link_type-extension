<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

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
