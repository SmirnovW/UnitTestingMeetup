<?php

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
	private $collection;

	public function setUp()
	{
		parent::setUp();
		$this->collection = new Collection();
	}

	public function testCollectionCannAdd()
	{
		$this->collection->add(1);
		$this->collection->add(2);

		$this->assertCount(2, $this->collection);
	}

	public function testCollectionCanReturnIterator()
	{
		$this->assertInstanceOf(ArrayIterator::class, $this->collection->getIterator());
	}

	public function testCollectionCanSortToHigh()
	{
		$this->collection->add(5);
		$this->collection->add(2);
		$this->collection->add(9);
		$this->collection->sortAsc();

		$this->assertEquals([2,5,9], $this->collection->getAll());
	}

	public function testCollectionCanSortToLow()
	{

		$this->collection->add(5);
		$this->collection->add(2);
		$this->collection->add(9);
		$this->collection->sortDesc();

		$this->assertEquals([9,5,2], $this->collection->getAll());
	}
}