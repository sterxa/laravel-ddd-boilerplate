<?php
namespace App;

class Application extends \Illuminate\Foundation\Application
{
    /**
     * Get the path to the application "app" directory.
     *
     * @param  string  $path
     * @return string
     */
    public function path($path = '')
    {
        $appPath = $this->appPath ?: $this->basePath.DIRECTORY_SEPARATOR.'src/App';

        return $appPath.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}