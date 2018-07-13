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
    public function current(): AbstractCommand
    {
        return $this->collection[$this->position];
    }

    public function next(): void
    {
        $this->position++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->collection[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return \count($this->collection);
    }
}
