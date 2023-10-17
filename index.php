<?php

require_once 'Book.php';
require_once 'Customer.php';

$book1 = new Book('187981954','Ghore Baire','Rabindranath Tagore',6);

$book2 = new Book('978818','Joshna','Humayun Azad',12);
$book3 = new Book('97881953','Pokkho',' Ahmed',0);

$customer1 = new  Customer(1,'Sam','Ahmed','sa@gmail.com');
$customer2 = new  Customer(2,'Souvik','Sanyal','souvikavro00.sa@gmail.com');

echo "<b>BOOK</b></br>";
// isAvailable
echo "Book-1 is available? " . $book1->__call("isAvailable","") . "</br>";
// getPrintableTitle
echo "Book-1 Detail: " . $book1. "</br>";

echo "</br>";

// addCopy
echo "Book-1 Detail: " . $book1. "</br>";
echo "Book-3 availableCopy: " . $book3->__get("availableCopy") . "</br>"; 
$book3->__call("addCopy","2"); // add A copy of Book-3
echo "Book-3 availableCopy after adding 2 copy: " . "Book-3 Detail: " . $book3. "</br>";

echo "</br>";

//getTitle
echo "Book-1 Title: <b>" . $book1->__get("title") . "</b></br>";
//getAuthor
echo "Book-1 Author: <b>" . $book1->__get("author") . "</b></br>";
//getIsbn
echo "Book-1 Isbn: <b>" . $book1->__get("isbn") . "</b></br>";

//Customer INFO.
echo "</br> <b>CUSTOMER</b> </br>";
echo "Customer-1 Id: <b>" . $customer1->__get("id") . "</b></br>";
echo "Customer-1 First Name: <b>" . $customer1->__get("firstName") . "</b></br>";
echo "Customer-1 Last Name: <b>" . $customer1->__get("lastName") . "</b></br>";
echo "Customer-1 Email: <b>" . $customer1->__get("email") . "</b></br>";
$customer1->__set("email","adrit@gmail.com");
echo "Customer-1 Email after update: <b>" . $customer1->__get("email") . "</b></br>";
echo "Customer 1 Detail: " . $customer1. "</br>";
echo "Customer 2 Detail: " . $customer2. "</br>";


?>