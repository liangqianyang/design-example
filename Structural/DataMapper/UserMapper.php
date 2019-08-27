<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/27
 * Time: 13:35
 */

namespace DesignPatterns\Structural\DataMapper;


class UserMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * 根据 id 从存储器中找到用户，并返回一个用户对象
     * 在内存中，通常这种逻辑将使用 Repository 模式来实现
     * 然而，重要的部分是在下面的 mapRowToUser() 中，它将从中创建一个业务对象
     *  从存储中获取的数据
     * @param int $id
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if (is_null($result)) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * 创建一个对象
     * @param array $row
     * @return User
     */
    public function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}