<?php

/**
* 
*/
interface CollectionInterface
{
	public function add($newItem);
	public function getAll();
	public function sortDesc();
	public function sortAsc();
}