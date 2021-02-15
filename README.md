# Student Management System

# Tech stack: 
Frontend: html, CSS
Backend: php
Database: MySql (phpmyadmin)
Server: Xampp server

## Aim of this project:
To implement a distributed database with location and access transparency.

## Features of our system:
The admin can add, update and delete student details and the student can view his/her details.
The admin needs to login/register in order to perform any operations.
So index.php will be the home page of my project where a user(i.e. a student) can choose his/her standard and roll number and by entering these two inputs he/she will be able to see his/her details. There is also admin login on this page. When we click on admin login, it will redirect us to the login.php, where admin has to enter the username and password in order to login/register. After successful login, the admin will be redirected to the admin dashboard where the admin can perform three tasks:

1.) Insert Student Details
2.) Update Student Details
3.) Delete Student Details

## The student information consists of:
1.) Student Name 
2.) Student Roll Number
3.) Standard 
4.) Phone number
5.) City
6.) Photo 

## Database: 

We have created three databases (actually it is one database only and other 2 are it's replica)
#### 1.) Student_Management_System database (on localhost phpmyadmin) 
#### 2.) Replicated_sms database on localhost (on localhost phpmyadmin) 
#### 3.) Sql12366578 database (online cloud - freemysqlhosting.net)

## Each database consists of two tables:
#### 1.) admin table
#### 2.) student table

# Explanation for Transparency:-

## 1) Location Transparency 
The user is able to verify its login details from anywhere in the 3 databases where it is stored.Also whenever the student data is updated , he does not know from where his data is retrieved , hence location transparency is shown here.

## 2) Access Transparency 
The user is able to access the database from any location in the world. Hence access transparency is shown here.

## 3) Replication Transparency
The database has its 2 more fragments one in localhost and another in cloud. And the user does not have know anything about it . Hence Replication Transparency is shown here.



