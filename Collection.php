<?php

/**
* 
*/
class Collection implements CollectionInterface, Countable, IteratorAggregate
{
	private $collection = [];

	public function add($newItem)
	{
		$this->collection[] = $newItem;
	}

	public function getIterator()
	{
		return new ArrayIterator($this->collection);
	}

	public function count()
	{
		return count($this->collection);
	}

	public function sortDesc()
	{
		rsort($this->collection);
	}

	public function sortAsc()
	{
		sort($this->collection);
	}

	public function getAll()
	{
		return $this->collection;
	}
}