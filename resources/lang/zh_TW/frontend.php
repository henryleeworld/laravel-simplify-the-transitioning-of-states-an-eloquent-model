<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */

    'sales_orders' => [
        'list' => [
            'title'   => '銷售訂單資訊',
            'content' => [
                'customer' => '客戶',
                'number'   => '編號',
                'status'   => '狀態',
                'total'    => '總數',
            ],
        ],
        'new' => [
            'title'  => 'New',
            'content' => [
                'choose_new_status' => '選擇新狀態',
            ],
            'status' => '新狀態',
        ],
        'status_history' => [
            'title'   => '狀態歷程',
            'content' => [
                'comments' => '評論',
                'date'     => '日期',
                'from'     => '起始',
                'to'       => '結束',
            ],
        ],
        'update' => [
            'content' => [
                'comments' => '評論',
                'reset'    => '重新設定',
                'save'     => '儲存',
            ],
            'status' => '更新狀態',
        ],
    ],
];
