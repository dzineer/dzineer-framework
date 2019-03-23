<?php

namespace Dengine\Foundation;

use Closure;
use RuntimeException;

class Application
{
    /**
     * The Dzineer framework version.
     *
     * @var string
     */
    const VERSION = '1.0.0';
    /**
     * The base path for the Dzineer installation
     *
     * @var string
     */
    protected $basePath;

    /**
     * Flag for when application has been already bootstrapped
     */
    protected $hasBeenBootstrapped = false;

    /**
     * Application has been booted?
     *
     * @var bool
     */
    protected $booted;

    public function __construct($basePath = null)
    {
        $this->basePath = $basePath;
    }

    /**
     * @return string
     */
    public function version() {
        return static::VERSION;
    }

    /**
     * @return bool
     */
    public function hasBeenBootstrapped() {
        return $this->hasBeenBootstrapped;
    }

    /**
     * @param $basePath
     * @return $this
     */
    public function setBasePath($basePath) {
        $this->basePath = $basePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * @param string $path
     * @return string
     */
    public function path($path = '') {
        return $this->basePath . DIRECTORY_SEPARATOR . 'app' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * @param string $path
     * @return string
     */
    public function basePath($path = '') {
        return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path: $path);
    }

    /**
     * @param string $path
     * @return string
     */
    public function configPath($path = '') {
        return $this->basePath . DIRECTORY_SEPARATOR . 'config' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    /**
     * @param string $path
     * @return string
     */
    public function servePath($path = '') {
        return $this->basePath . DIRECTORY_SEPARATOR . 'serve' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}