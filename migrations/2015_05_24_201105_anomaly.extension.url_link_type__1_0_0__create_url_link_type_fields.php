<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionUrlLinkType_1_0_0_CreateUrlLinkTypeFields
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionUrlLinkType_1_0_0_CreateUrlLinkTypeFields extends Migration
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
