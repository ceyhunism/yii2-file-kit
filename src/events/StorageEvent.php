<?php

namespace ceyhunism\filekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package ceyhunism\filekit\events
 * @author Jeihun Ismayilzade <ismayilzadeceyhun@gmail.com>
 */
class StorageEvent extends Event
{
    /**
     * @var \League\Flysystem\FilesystemInterface
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
}
