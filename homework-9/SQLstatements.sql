/* Here are the SQL statements I used in phpMyAdmin to create the database and tables. */
/* I was a little confused as to whether we needed to display it via the sever on MAMP, or just interact with phpMyAdmin? */

-- #6 

CREATE DATABASE `homework_9`;

CREATE TABLE `library` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,              -- The instructions say to list this as AUTO_INCREMENT, but I keep getting errors. --
    
    primary key (`id`)
);


CREATE TABLE `books` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,                -- same issue as above --
    primary key (`id`)
);

CREATE TABLE `libraryBook` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `libraryID` INT(11) NOT NULL,
    `bookID` INT(11) NOT NULL,

    primary key (`id`)
)

-- #7
insert into library (name) values ('NYC Public Library');
insert into library (name) values ('Brooklyn Public Library');
insert into library (name) values ('Queens Public Library');
insert into library (name) values ('Stavros Niarchos Foundation Library');

insert into books (name) values ('Dante''s Inferno');
insert into books (name) values ('Lizzie & Dante');
insert into books (name) values ('Aristotle & Dante');
insert into books (name) values ('The Dante Club');

/* Foreign Database */
/* Library id# has respective book id# */
insert into libraryBook (libraryID, bookID) values (1, 1);
insert into libraryBook (libraryID, bookID) values (1, 2);
insert into libraryBook (libraryID, bookID) values (1, 3);
insert into libraryBook (libraryID, bookID) values (2, 4);
insert into libraryBook (libraryID, bookID) values (2, 1);
insert into libraryBook (libraryID, bookID) values (3, 2);
insert into libraryBook (libraryID, bookID) values (3, 3);
insert into libraryBook (libraryID, bookID) values (4, 4);
insert into libraryBook (libraryID, bookID) values (4, 1);
insert into libraryBook (libraryID, bookID) values (4, 2);


/* Select queries */
select * from library where id = 1;
select * from books where name like '%&%';
select * from books where name like '%Dante%';

select * from books order by name ASC;

-- #8
SELECT 
    books.name AS Book_Name, 
    library.name AS Library_Name
FROM books
        JOIN libraryBook ON books.id = libraryBook.bookID
        JOIN library ON library.id = libraryBook.libraryID;

-- #9
UPDATE books
    set name = 'Dante''s Peak'
    where id = 1;

-- So I can change it back! --
UPDATE books
    set name = 'Dante''s Inferno'
    where id = 1;

-- #10
insert into books (name) values ('The Hand of Dante');          -- added a 5th book so it wouldn't mess with my select queries for question 8 --
select * from books where id= 5;

-- Delete statement 
delete from books where id = 5;
