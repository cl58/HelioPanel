<?php

namespace HelioNetworks\FileSystemBundle\FileSystem;

class File extends FileObject
{
    protected $path;
    protected $BaseFileSystem;

    public function setBaseFileSystem(BaseFileSystem $BaseFileSystem)
    {
        $this->BaseFileSystem = $BaseFileSystem;
    }

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function getContents()
    {
        return $this->BaseFileSystem->read($this->path);
    }

    public function setContents($contents)
    {
        return $this->BaseFileSystem->write($this->path, $contents);
    }
}