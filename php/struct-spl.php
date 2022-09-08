<?php

declare(strict_types=1);

function splDoublyLinkedList(): void
{
    $list = new SplDoublyLinkedList();
    $list->push('Toyota');
    $list->push('Nissan');
    $list->push('Mitsubishi');
    $list->push('Honda');
    $list->push('Suzuki');

    // FIFO
    echo 'FIFO' . PHP_EOL;

    foreach ($list as $value) {
        echo $value . PHP_EOL;
    }

    echo PHP_EOL;

    // LIFO
    echo 'LIFO' . PHP_EOL;

    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

    foreach ($list as $value) {
        echo $value . PHP_EOL;
    }
}

function splStack(): void
{
    $stack = new SplStack();
    $stack->push('Batman');
    $stack->push('Aquaman');
    $stack->push('Flash');
    $stack->push('Superman');
    $stack->push('Wonder Women');

    $stack->rewind();

    while ($stack->valid()) {
        echo $stack->current() . PHP_EOL;
        $stack->next();
    }
}

function splQueue(): void
{
    $stack = new SplQueue();
    $stack->push('Iron Man');
    $stack->push('Spider Man');
    $stack->push('Hulk');
    $stack->push('Thor');
    $stack->push('Dr. Strange');

    $stack->rewind();

    while ($stack->valid()) {
        echo $stack->current() . PHP_EOL;
        $stack->next();
    }
}

function splHeap(): void
{
    $heap = new BirthdayHeap();
    $heap->insert(['Вася' => '2000-08-10']);
    $heap->insert(['Тимофей' => '2000-08-11']);
    $heap->insert(['Петя' => '2000-12-10']);
    $heap->insert(['Вова' => '2000-02-25']);
    $heap->insert(['Влад' => '2000-03-16']);

    while($heap->valid()) {
        $element = $heap->current();
        echo \key($element) . ': ' . \current($element) . PHP_EOL;
        $heap->next();
    }
}

function splObjectStorage(): void
{
    $storage = new SplObjectStorage();

    $object1 = new \stdClass();
    $object2 = new \stdClass();

    $storage->attach($object1);
    $storage->attach($object2);
    $storage->attach($object1);

    echo $storage->count() . PHP_EOL; // 2
}

class BirthdayHeap extends SplHeap
{
    protected function compare($value1, $value2): int
    {
        $date1 = \current($value1);
        $date2 = \current($value2);

        return $date1 <=> $date2;
    }
}
