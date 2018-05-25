<?php
namespace ceyhunism\filekit\tests\data;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use ceyhunism\filekit\filesystem\FilesystemBuilderInterface;

/**
 * @author Jeihun Ismayilzade <ismayilzadeceyhun@gmail.com>
 */
class TmpFilesystemBuilder implements FilesystemBuilderInterface
{

    /**
     * @return mixed
     */
    public function build()
    {
        return new Filesystem(new Local(sys_get_temp_dir()));
    }
}
