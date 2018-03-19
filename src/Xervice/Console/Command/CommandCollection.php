<?php


namespace Xervice\Console\Command;


class CommandCollection implements \Iterator, \Countable
{
    /**
     * @var \Xervice\Console\Command\AbstractCommand[]
     */
    private $collection;

    /**
     * @var int
     */
    private $position;

    /**
     * CommandCollection constructor.
     *
     * @param \Xervice\Console\Command\AbstractCommand[] $collection
     */
    public function __construct(array $collection)
    {
        foreach ($collection as $command) {
            $this->add($command);
        }
    }

    /**
     * @param \Xervice\Console\Command\AbstractCommand $command
     */
    public function add(AbstractCommand $command)
    {
        $this->collection[] = $command;
    }

    /**
     * @return mixed|\Xervice\Console\Command\AbstractCommand
     */
    public function current()
    {
        return $this->collection[$this->position];
    }

    public function next()
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->collection[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count()
    {
        return \count($this->collection);
    }


}