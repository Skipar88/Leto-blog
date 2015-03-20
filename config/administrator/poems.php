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
    'single' => 'поезия',

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
            'title' => 'Заглавие'
        ],
        'poem_content' => [
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
        'poem_title' => [
            'title' => 'Заглавие',
            'type' => 'text'
        ],
        'poem_content' => [
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
