<?php

namespace Interface;


/**--------------------------------------------------------------------------
|
|	Storable
|
-----------------------------------------------------------------------------
|
|	Storable defines an interface for persisting objects
|
-----------------------------------------------------------------------------
*/


interface Storable
{
	/**
	* store() persists the object in persistent storage. 
	* @param mixed
	* @return an identifier to retrieve the stored object. 
	*/

	public function store($object); 


	/**
	* retrieve() retrieves a stored object using it's identifier $id.
	* @param $id is the unique identifier of the object to be retrieved. 
	* @return the object that corresponds to the id or null if not found. 
	*/

	public function retrieve($id);
}


?>