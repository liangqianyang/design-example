<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/26
 * Time: 15:43
 */

namespace DesignPatterns\Creational\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        // TODO: Implement createLogger() method.
        return new FileLogger($this->filePath);
    }
}