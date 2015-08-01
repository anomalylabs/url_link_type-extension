<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionUrlLinkTypeCreateUrlLinkTypeFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionUrlLinkTypeCreateUrlLinkTypeFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'       => 'anomaly.field_type.text',
        'url'         => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea'
    ];

}
