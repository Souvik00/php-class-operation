<?php
require_once 'Book.php';
require_once 'Customer.php';

echo '<pre>';

echo 'Code: new Book(123456789, "1984", "George Orwell", 12)' . "\n";
$book = new Book(123456789, "1984", "George Orwell", 12);
echo "\n\n";

echo 'Code: echo $book' . "\n";
echo $book;
echo "\n\n";

echo 'Code: echo $book->getTitle()' . "\n";
echo $book->getTitle();
echo "\n\n";

echo 'Code: echo $book->setTitle("Something")' . "\n";
echo $book->setTitle("Something");
echo "\n\n";

echo 'Code: echo $book->getTitle()' . "\n";
echo $book->getTitle();
echo "\n\n";

echo 'Code: echo $book->getAuthor()' . "\n";
echo $book->getAuthor();
echo "\n\n";

echo 'Code: echo $book->setAuthor("Someone")' . "\n";
echo $book->setAuthor("Someone");
echo "\n\n";

echo 'Code: echo $book->getAuthor()' . "\n";
echo $book->getAuthor();
echo "\n\n";

echo 'Code: var_dump($book->getCopy())' . "\n";
echo var_dump($book->getCopy());
echo "\n\n";

echo 'Code: echo $book->getAvailable()' . "\n";
echo $book->getAvailable();
echo "\n\n";

echo 'Code: echo var_dump($book->addCopy(100))' . "\n";
echo var_dump($book->addCopy(100));
echo "\n\n";

echo 'Code: echo $book->getAvailable()' . "\n";
echo $book->getAvailable();
echo "\n\n";

echo 'Code: echo $book' . "\n";
echo $book;
echo "\n\n";


echo "\n\n\n";


echo 'Code: new Customer(999, "John", "Doe", "john@test.test")' . "\n";
$customer = new Customer(999, "John", "Doe", "john@test.test");
echo "\n\n";

echo 'Code: echo $customer' . "\n";
echo $customer;
echo "\n\n";

echo 'Code: echo $customer->getFirstName()' . "\n";
echo $customer->getFirstName();
echo "\n\n";

echo 'Code: echo $customer->setFirstName("first")' . "\n";
echo $customer->setFirstName("first");
echo "\n\n";

echo 'Code: echo $customer->getFirstName()' . "\n";
echo $customer->getFirstName();
echo "\n\n";

echo 'Code: echo $customer->getEmail()' . "\n";
echo $customer->getEmail();
echo "\n\n";

echo 'Code: echo $customer->setEmail("test@one.two")' . "\n";
echo $customer->setEmail("test@one.two");
echo "\n\n";

echo 'Code: echo $customer->getEmail()' . "\n";
echo $customer->getEmail();
echo "\n\n";

echo 'Code: echo $customer' . "\n";
echo $customer;
echo "\n\n";

echo '</pre>';