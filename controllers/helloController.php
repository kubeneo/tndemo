<?php
	require '../models/books.php';

	class helloController{

		public function say(){
			echo 'Controller says Hello';
			$this->buybooks();
		}

		public function buybooks(){
			$b1 = new book;
			$b1->book_id = '001';
			$b1->book_name = 'Hello PHP';
			$b1->price = 100;

			echo $b1->book_id . ' ' . $b1->book_name . ' ' . $b1->price;
		}

	}

$c = new helloController;
$c->buybooks;
?>