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
            'title' => 'Заглавие'
        ],
        'story_content' => [
            'title' => 'Съдържание'
        ],
        'created_at' => [
            'title' => 'Дата на създаване'
        ]
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'story_title' => [
            'title' => 'Заглавие',
            'type' => 'text'
        ],
        'story_content' => [
            'title' => 'Съдържание',
            'type' => 'wysiwyg',
            'height' => 500
        ]
    ],

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'created_at',
        'direction' => 'desc',
    ),

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 1000,
];
