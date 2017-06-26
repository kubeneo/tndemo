<?php
class book{
	public $book_id;
	public $book_name;
	public $price;
}

echo 'book<br/>';
$b = new book;
$b->book_id = '0001';
$b->book_name = 'Hello PHP';
$b->price = 100;

echo $b->book_id . ' ' . $b->book_name . ' ' . $b->price ;
?>