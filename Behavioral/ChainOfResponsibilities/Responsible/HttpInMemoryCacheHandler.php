<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 9:26
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use Psr\Http\Message\RequestInterface;

/**
 * 创建 http 缓存处理类。
 */
class HttpInMemoryCacheHandler extends Handler
{
    /**
     * @var array
     */
    private $data;

    /**
     * FastStorage constructor.
     * @param array $data
     * 传入数据数组参数
     * @param Handler|null $successor
     * 传入处理器类对象 $successor
     */
    public function __construct(array $data, Handler $successor = null)
    {
        parent::__construct($successor);
        $this->data = $successor;
    }

    public function processing(RequestInterface $request)
    {
        // TODO: Implement processing() method.
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}