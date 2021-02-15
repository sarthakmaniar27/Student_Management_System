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


# Screenshots:

![image](https://user-images.githubusercontent.com/47854537/107983255-81c37480-6feb-11eb-8448-c3a0ac4a4fcb.png)

![image](https://user-images.githubusercontent.com/47854537/107983278-8ab44600-6feb-11eb-93aa-1c8148977232.png)

![image](https://user-images.githubusercontent.com/47854537/107983289-8daf3680-6feb-11eb-915c-b00f2b74681a.png)

![image](https://user-images.githubusercontent.com/47854537/107983295-90aa2700-6feb-11eb-9e86-bcca214178fe.png)

![image](https://user-images.githubusercontent.com/47854537/107983301-93a51780-6feb-11eb-876a-a47e367277a1.png)

![image](https://user-images.githubusercontent.com/47854537/107983309-96a00800-6feb-11eb-83d3588d4e87d390.png)

![image](https://user-images.githubusercontent.com/47854537/107983318-999af880-6feb-11eb-8958-123cc70e93e0.png)

![image](https://user-images.githubusercontent.com/47854537/107983324-9bfd5280-6feb-11eb-9a2e-8e6febf5fb5b.png)

![image](https://user-images.githubusercontent.com/47854537/107983337-a0297000-6feb-11eb-81d6-518c5ed36a14.png)

![image](https://user-images.githubusercontent.com/47854537/107983341-a3246080-6feb-11eb-89d0-10c7431ca5cc.png)

![image](https://user-images.githubusercontent.com/47854537/107983355-a586ba80-6feb-11eb-8219-0d8031108de9.png)

![image](https://user-images.githubusercontent.com/47854537/107983370-aa4b6e80-6feb-11eb-97b3dedd4d25d525.png)

![image](https://user-images.githubusercontent.com/47854537/107983397-b46d6d00-6feb-11eb-9077-430fc57e6308.png)

![image](https://user-images.githubusercontent.com/47854537/107983409-bafbe480-6feb-11eb-95a8-7b8979254f4e.png)

![image](https://user-images.githubusercontent.com/47854537/107983427-c222f280-6feb-11eb-85cb-75b7b122a246.png)

![image](https://user-images.githubusercontent.com/47854537/107983431-c51de300-6feb-11eb-900f-0a2d84da4997.png)

![image](https://user-images.githubusercontent.com/47854537/107983438-c818d380-6feb-11eb-91cc-ded6cf373d7f.png)

![image](https://user-images.githubusercontent.com/47854537/107983448-ca7b2d80-6feb-11eb-99c7-bb64e93a7c13.png)





