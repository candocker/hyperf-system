<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'scan' => [
        'paths' => [
            BASE_PATH . '/app',
            BASE_PATH . '/vendor/swoolecan/foundation/src',
            BASE_PATH . '/vendor/swoolecan/baseapp/src',
        ],
        'ignore_annotations' => [
            'mixin',
        ],
    ],
];
