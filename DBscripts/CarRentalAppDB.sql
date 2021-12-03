DROP DATABASE IF EXISTS carRentalApp;

CREATE DATABASE carRentalApp;

USE carRentalApp;

#DROP TABLE IF EXISTS User;

CREATE TABLE IF NOT EXISTS User ( User_ID mediumint NOT NUll auto_increment, 
	User_Fname VARCHAR(30) NOT NUll, User_Lname VARCHAR(30) NOT NULL, 
    User_Phone varchar(10) NOT NUll, User_Email Varchar(100) NOT NUll, 
    User_Pass Varchar(50) NOT NUll, 
    PRIMARY KEY (User_ID));
    
#DROP TABLE IF EXISTS Car;

CREATE TABLE IF NOT EXISTS Car ( Car_ID mediumint NOT NULL auto_increment, User_ID mediumint NOT NULL,
	Brand_Name VARCHAR(20) NOT NULL, Price_Per_Day float NOT NULL, Car_Year int NOT NULL,
    Car_Model varchar(20) NOT NULL, Car_Desc varchar(400) NOT NULL, Car_Image varchar(50),
    PRIMARY KEY (Car_ID), FOREIGN KEY (User_ID) REFERENCES User(User_ID));
    

#DROP TABLE IF EXISTS Rental_Agreement;

CREATE TABLE IF NOT EXISTS Rental_Agreement ( Agreement_ID mediumint NOT NULL auto_increment, 
User_ID mediumint NOT NULL, Car_ID mediumint NOT NULL, Rental_Start Date, Rental_End DATE, 
Total_Price float NOT NULL, 
PRIMARY KEY (Agreement_ID), 
FOREIGN KEY (User_ID) References User(User_ID), 
FOREIGN KEY (Car_ID) References Car(Car_ID));



#DROP TABLE IF EXISTS Availability;

CREATE TABLE IF NOT EXISTS Availability ( Availability_ID mediumint NOT NULL auto_increment, 
Car_ID mediumint NOT NULL, Date_Unavailible DATE, 
PRIMARY KEY (Availability_ID), 
FOREIGN KEY (Car_ID) references car(Car_ID)); 


INSERT INTO User (User_fname, User_Lname, User_Phone, User_Email, User_Pass) 
	VAlUES 
    ('Dominic', 'Hannah', '6512701303','dominichannah@gmail.com', 'P@ssw0rd'),
    ('Hassan', 'Hassan', '6511234567', 'hassanhassan@gmail.com','P@ssw0rd'),
    ('Obin', 'Koffi', '6121234567', 'obinkoffi@gmail.com', 'P@ssw0rd'),
    ('John', 'Doe', '6514375182', 'johndoe@gmail.com', 'P@ssw0rd'),
	('Alice', 'Adams', '6126519988', 'aliceadams@gmail.com', 'P@ssw0rd');

INSERT INTO Car (User_ID, Brand_Name, Price_Per_Day, Car_Year, Car_Model, Car_Desc, Car_Image)
	VALUES
    (1, 'Honda', 60.00, 2011, 'Accord', 'Average Car, Average Description', 'img/hondaA2011.jpg'),
    (2, 'Jeep', 70.00, 2019, 'Grand Cherokee', 'Car with big tires', 'img/jeepC2019.jpeg'),
    (3, 'Mclaren', 200.00, 2016, '675LT', 'Fast expensive car', 'img/mclaren62016.jpg'),
    (4, 'Audi', 100.00, 2022, 'Q5', 'Reasonibly fast car', 'img/audiQ2022.jpg'),
    (1, 'Ford', 75.00, 2019, 'F150', 'A Simple Pick-up Truck','img/fordF2019.jpg'),
    (2, 'Lamborghini', 250.00, 2022, 'Aventador', 'AWD naturally aspirated V12', 'img/lamboA2022.jpg');

INSERT INTO Rental_Agreement (User_ID, Car_ID, Rental_Start, Rental_End, Total_Price)
	VALUES
    (1,2, '2021-09-17', '2021-09-18', 140.00),
    (3,1, '2021-04-20', '2021-04-21', 120.00);


INSERT INTO Availability (Car_ID, Date_Unavailible)
	VALUES
    (2, '2021-09-17'),
    (2, '2021-09-18'),
    (1, '2021-04-20'),
    (1, '2021-04-21');




    
    
    


