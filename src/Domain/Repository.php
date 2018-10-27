<?php

namespace Javelin\Domain;

use Javelin\Domain\RepositoryInterface; 
use Javelin\Exception\IllegalArgumentException;


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
	* save() saves an object to the repository. On success, it returns 
	* true. Otherwise, it returns false.
	*
	* @param $id mixed
	*
	* @return bool
	*/

	public abstract save($id): bool;


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