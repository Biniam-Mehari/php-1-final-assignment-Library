CREATE DATABASE Librarydb;

CREATE TABLE Account (
    userId int(11) NOT NULL Primary Key AUTO_INCREMENT,
    firstName varchar(255) NOT NULL,
   lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `role` varchar(255) NOT NULL
);

INSERT INTO Account (firstName, lastName, email,`password`, `role`)
VALUES ("Admin", "admin", "admin@gmail.com","admin","admin"),
 ("User", "user", "user@gmail.com","user","user");

CREATE TABLE Book (
    bookId int(11) NOT NULL Primary Key AUTO_INCREMENT,
    title varchar(255) NOT NULL,
   `description` varchar(255) NOT NULL,
    author varchar(255) NOT NULL,
    numberOfCopies int(11) NOT NULL
    
);

INSERT INTO Book (title, `description`, author,numberOfCopies)
VALUES ("The Adventures of Tom Sawyer", "This book ia about a kid and his life", "Mark Twain","45"),
 ("Adventures of Sherlock Holmes", "The adventure of sherlock holmes is based on a detective fiction ", "Sir Arthur Conan Doyle","34");


CREATE TABLE LendBook (
    lendId int(11) NOT NULL Primary Key AUTO_INCREMENT,
    dateOFLend varchar(255) NOT NULL,
    returned varchar(255) NOT NULL,
    bookId int(11) NOT NULL,
    userId int(11) NOT NULL
    
);