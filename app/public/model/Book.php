<?php

class Book
{

    private ?int $bookId = 1;
    private ?string $title = null;
    private ?string $description = null;
    private ?string $author = null;
    private ?string $numberOfCopies = null;

    // public function __construct()

    // {

    //     $get_arguments       = func_get_args();

    //     $number_of_arguments = func_num_args();

    //     if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {

    //         call_user_func_array(array($this, $method_name), $get_arguments);

    //     }

    // }

    // public function __construct5($bookId,$title,$description,$author,$numberOfCopies){
    //     $this->bookId = $bookId;
    //     $this->title = $title;
    //     $this->description = $description;
    //     $this->author = $author;
    //     $this->numberOfCopies = $numberOfCopies;
        

    // }
    
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

   
    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

   

    

    /**
     * Get the value of bookId
     */ 
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set the value of bookId
     *
     * @return  self
     */ 
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get the value of numberOfCopies
     */ 
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * Set the value of numberOfCopies
     *
     * @return  self
     */ 
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;

        return $this;
    }
}