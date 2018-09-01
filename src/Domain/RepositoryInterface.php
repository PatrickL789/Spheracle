<?php

namespace Javelin\Domain;


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
	* findById() returns an object matching the identity $identity. 
	*
	* @param $id mixed
	*
	* @return mixed
	*/

	public functiobn findById($id);


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