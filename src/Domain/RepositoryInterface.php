<?php

namespace Spheracle\Domain;


/**--------------------------------------------------------------------------
|
|	RepositoryInterface
|
-----------------------------------------------------------------------------
|
|	RepositoryInterface proides a common interface for Repository objects. A
|	repository encapsulates logic partaining to querying and retrieving domain 
|	objects. 
|
-----------------------------------------------------------------------------
*/


interface RepositoryInterface
{
	/**
	* save() saves the object to the repository. 
	*
	* @param $id mixed
	*
	* @return bool
	*/

	public function save($id): bool;


	/*
	* add($object) persists an object $object into storage. Returns true on success and 
	* false on failure.
	* 
	* @param mixed
	*
	* @return bool
	*/

	public function add($object): bool;
}

?>