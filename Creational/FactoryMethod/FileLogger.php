<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:36
 */

namespace DesignPatterns\Creational\FactoryMethod;


class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        // TODO: Implement log() method.
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}