<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */

    'sales_orders' => [
        'list' => [
            'title'   => 'Sales Order Information',
            'content' => [
                'customer' => 'Customer',
                'number'   => '#Number',
                'status'   => 'Status',
                'total'    => 'Total',
            ],
        ],
        'new' => [
            'title'  => 'New',
            'content' => [
                'choose_new_status' => 'Choose New Status',
            ],
            'status' => 'New Status',
        ],
        'status' => [
            'content' => [
                'approved'      => 'approved',
                'declined'      => 'declined',
                'not_available' => 'N/A',
                'pending'       => 'pending',
                'processed'     => 'processed',
            ],
        ],
        'status_history' => [
            'title'   => 'Status History',
            'content' => [
                'comments'      => 'Comments',
                'date'          => 'Date',
                'from'          => 'From',
                'not_available' => 'N/A',
                'to'            => 'To',
            ],
        ],
        'update' => [
            'content' => [
                'comments' => 'Comments',
                'reset'    => 'Reset',
                'save'     => 'Save',
            ],
            'status' => 'Update Status',
        ],
    ],
];
