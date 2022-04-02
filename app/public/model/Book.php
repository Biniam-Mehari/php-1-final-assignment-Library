<?php

class Book
{

    private ?int $id = 1;
    private ?string $title = null;
    private ?string $description = null;
    private ?string $author = null;
    private ?string $imageId = null;
    
    

   // function __construct($id,$title,$description,$author,$imageId){
   //     $this->id = $id;
    //    $this->title = $title;
    //    $this->description = $description;
   //     $this->author = $author;
    //    $this->imageId = $imageId;
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
     * Get the value of imageId
     */ 
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * Set the value of imageId
     *
     * @return  self
     */ 
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}