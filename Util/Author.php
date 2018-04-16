<?php
class Author implements JsonWritable
{
	private $id;
	private $name;
	private $books;

	public function __construct($id, $name, array $books){
	// id, naam en books worden toegekend
        $this->id = $id;
        $this->name = $name;
        $this->books = $books;
	}

	public function getJSONString(){
	// de JSON-voorstelling van het object wordt teruggeven.
        return '[{"id":$id, "name":$name}, "books":$books]';

	}
}
