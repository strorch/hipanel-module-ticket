<?php
/**
 * @link    http://hiqdev.com/hipanel-module-ticket
 * @license http://hiqdev.com/hipanel-module-ticket/license
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hipanel\modules\ticket;

class Menu extends \hipanel\base\Menu implements \yii\base\BootstrapInterface
{

    protected $_menus = [
        'sidebar' => [
            'where' => [
                'after'     => ['finance', 'clients', 'dashboard', 'header'],
                'before'    => ['domains', 'servers', 'hosting'],
            ],
            'items' => [
                'tickets' => [
                    'label' => 'Tickets',
                    'url'   => ['/ticket/ticket/index'],
                    'icon'  => 'fa-ticket',
                    'items' => [
                        'tickets' => [
                            'label' => 'Tickets',
                            'url'   => ['/ticket/ticket/index'],
                            'icon'  => 'fa-ticket',
                        ],
                        'settings' => [
                            'label' => 'Tickets settings',
                            'url'   => ['/ticket/ticket/settings'],
                            'icon'  => 'fa-gears',
                        ],
                        'statistics' => [
                            'label' => 'Tickets statistic',
                            'url'   => ['/ticket/ticket/statistics'],
                            'icon'  => 'fa-bar-chart',
                        ],
                    ],
                ],
            ],
        ],
    ];

}
