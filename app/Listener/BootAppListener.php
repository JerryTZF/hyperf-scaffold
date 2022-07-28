<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Listener;

use App\Lib\Log\Log;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\BeforeServerStart;
use Hyperf\Framework\Event\BootApplication;

#[Listener]
class BootAppListener implements ListenerInterface
{
    public function listen(): array
    {
        return [
            BootApplication::class,
            BeforeServerStart::class,
        ];
    }

    public function process(object $event)
    {
        if ($event instanceof BootApplication) {
            Log::stdout()->info('Hyperf 启动成功!!!');
        }
    }
}
