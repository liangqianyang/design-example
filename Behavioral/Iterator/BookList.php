<?php
/**
 * Created by PhpStorm.
 * User: bb
 * Date: 2019/8/28
 * Time: 10:42
 */

namespace DesignPatterns\Behavioral\Iterator;


class BookList implements \Countable, \Iterator
{

    /**
     * @var Book[]
     */
    private $books = [];

    /**
     * @var int
     */
    private $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    public function count(): int
    {
        // TODO: Implement count() method.
        return count($this->books);
    }

    public function current(): Book
    {
        // TODO: Implement current() method.
        return $this->books[$this->currentIndex];
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $this->currentIndex++;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        // TODO: Implement valid() method.
        return isset($this->books[$this->currentIndex]);
    }
}