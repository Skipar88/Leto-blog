<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Поезия',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'поема',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Poem',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'poem_title' => [
            'poem_title' => 'poem_title'
        ],
        'poem_content' => [
            'poem_content' => 'poem_content'
        ]
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'poem_title' => [
            'poem_title' => 'poem_title',
            'type' => 'text'
        ],
        'poem_content' => [
            'poem_content' => 'poem_content',
            'type' => 'textarea',
            'height' => 500
        ]
    ],
];
