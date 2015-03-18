<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Разкази',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'разказ',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Story',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'story_title' => [
            'story_title' => 'story_title'
        ],
        'story_content' => [
            'story_content' => 'story_content'
        ]
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'story_title' => [
            'story_title' => 'story_title',
            'type' => 'text'
        ],
        'story_content' => [
            'story_content' => 'story_content',
            'type' => 'textarea',
            'height' => 500
        ]
    ],
];
