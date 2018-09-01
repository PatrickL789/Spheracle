<?php

namespace Domain;

use Javelin\Doain\RepositoryInterface; 


/**--------------------------------------------------------------------------
|
|	Repository
|
-----------------------------------------------------------------------------
|
|	RepositoryInterface proides a common interface for Repository objects. A
|	repository encapsulates logic partaining to querying and retrieving domain 
|	objects. Repositories can also contain functionalities to retrieve certain 
|	summary information. 
|
-----------------------------------------------------------------------------
*/


abstract class Repository implements RepositoryInterface
{
	
	public function __construct()
	{
		//
	}

	/**
	* findById() returns an object matching the identity $identity. 
	*
	* @param $id mixed
	*
	* @return mixed
	*/

	public functiobn findById($id)
	{
		return null; 
	}


	/*
	* add($object) persists an object $object into storage. Returns true on success and 
	* false on failure.
	* 
	* @param mixed
	*
	* @return bool
	*/

	public function add($object): bool
	{
		return false;
	}
}

?>