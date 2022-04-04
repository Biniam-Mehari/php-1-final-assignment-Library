<?php

class MyList
{

//public $today = date("m.d.y");
   public const possibleLendDays = 20;
   private ?string $dateOfLend = null;
   private $book;
    
   public function __construct5($dateOfLend,$book){
    $this->dateOfLend = $dateOfLend;
    $this->book = $book;
}
   

   /**
    * Get the value of dateOfLend
    */ 
   public function getDateOfLend()
   {
      return $this->dateOfLend;
   }

   /**
    * Set the value of dateOfLend
    *
    * @return  self
    */ 
   public function setDateOfLend($dateOfLend)
   {
      $this->dateOfLend = $dateOfLend;

      return $this;
   }

   /**
    * Get the value of book
    */ 
   public function getBook()
   {
      return $this->book;
   }

   /**
    * Set the value of book
    *
    * @return  self
    */ 
   public function setBook($book)
   {
      $this->book = $book;

      return $this;
   }
}