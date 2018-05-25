<?php
namespace ceyhunism\filekit\events;
use yii\base\Event;

/**
 * Class UploadEvent
 * @package ceyhunism\filekit\events
 * @author Jeihun Ismayilzade <ismayilzadeceyhun@gmail.com>
 */
class UploadEvent extends Event
{
    /**
     * @var mixed
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
    /**
     * @var \League\Flysystem\File|null
     */
    public $file;
}
