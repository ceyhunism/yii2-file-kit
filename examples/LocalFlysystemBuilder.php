<?php

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use yii\base\BaseObject;

/**
 * Class LocalFilesystemBuilder
 * @author Jeihun Ismayilzade <ismayilzadeceyhun@gmail.com>*
 *
 */
class LocalFilesystemBuilder extends BaseObject implements \ceyhunism\filekit\filesystem\FilesystemBuilderInterface
{
    /**
     * @var
     */
    public $path;

    /**
     * @return Filesystem
     */
    public function build()
    {
        $adapter = new Local(\Yii::getAlias($this->path));
        return new Filesystem($adapter);
    }
}