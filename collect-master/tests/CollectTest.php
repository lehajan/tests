<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testCount()
    {
        $collect = new Collect\Collect([13,17]);
        $this->assertSame(2, $collect->count());
    }

    public function testCountNotSame()
    {
        $collect = new Collect\Collect([13,17]);
        $this->assertNotSame(1, $collect->count());
    }

    public function testKeys()
    {
        $collect = new Collect\Collect(['a' => 13, 'b' => 17]);
        $this->assertSame(['a', 'b'], $collect->keys()->toArray());
    }

    public function testKeysNotSame()
    {
        $collect = new Collect\Collect(['a' => 13, 'b' => 17]);
        $this->assertNotSame(['b', 'a'], $collect->keys()->toArray());
    }

    public function testValues()
    {
        $collect = new Collect\Collect(['a' => 13, 'b' => 17]);
        $this->assertSame([13, 17], $collect->values()->toArray());
    }

    public function testValuesNotSame()
    {
        $collect = new Collect\Collect(['a' => 13, 'b' => 17]);
        $this->assertNotSame([17, 13], $collect->values()->toArray());
    }

    public function testGet()
    {
        $collect = new Collect\Collect(['a' => 13, 'b' => 17]);
        $this->assertSame(13, $collect->get('a'));
    }

    public function testGetNotSame()
    {
        $collect = new Collect\Collect(['a' => 1, 'b' => 2]);
        $this->assertNotSame(2, $collect->get('a'));
    }

    public function testPush()
    {
        $collect = new Collect\Collect(['Mike' => 4, 'Foo' => 3]);
        $collect->push(5, 'John');
        $this->assertSame(['Mike' => 4, 'Foo' => 3, 'John' => 5], $collect->toArray());
    }

    public function testPushNotSame()
    {
        $collect = new Collect\Collect(['Mike' => 4, 'Foo' => 3]);
        $collect->push(5, 'John');
        $this->assertNotSame(['Mike' => 4, 'John' => 5], $collect->toArray());
    }

    public function testUnshift()
    {
        $collect = new Collect\Collect(['Mike', 'Foo']);
        $collect->unshift('John');
        $this->assertSame(['John', 'Mike', 'Foo'], $collect->toArray());
    }

    public function testUnshiftNotSame()
    {
        $collect = new Collect\Collect(['Mike', 'Foo']);
        $collect->unshift('John');
        $this->assertNotSame(['John', 'Mike',], $collect->toArray());
    }

    public function testShift()
    {
        $collect = new Collect\Collect(['Mike', 'Foo', 'John']);
        $collect->shift();
        $this->assertSame(['Foo', 'John'], $collect->toArray());
    }

    public function testShiftNotSame()
    {
        $collect = new Collect\Collect(['Mike', 'Foo', 'John']);
        $collect->shift();
        $this->assertNotSame(['Mike', 'Foo', 'John'], $collect->toArray());
    }

    public function testPop()
    {
        $collect = new Collect\Collect(['Mike', 'Foo', 'John']);
        $collect->pop();
        $this->assertSame(['Mike', 'Foo'], $collect->toArray());
    }

    public function testPopNotSame()
    {
        $collect = new Collect\Collect(['Mike', 'Foo', 'John']);
        $collect->pop();
        $this->assertNotSame(['Mike', 'Foo', 'John'], $collect->toArray());
    }

    

}