<?php
	require '../models/books.php';

	class helloController{

		public function say(){
			echo 'Controller says Hello';
			$this->buybooks();
		}

		public function buybooks(){
			$b1 = new book;
			$b1->book_id = '003';
			$b1->book_name = 'Hello PHP tutorial';
			$b1->price = 300;

			echo $b1->book_id . ' ' . $b1->book_name . ' ' . $b1->price;
		}

	}

$c = new helloController;
$c->buybooks;
?>