DROP TABLE Management CASCADE CONSTRAINTS;
CREATE TABLE Management(
    Management_ID NUMBER(10) PRIMARY KEY,
    User_Name VARCHAR2(100) NOT NULL UNIQUE,
    Password VARCHAR2(200) NOT NULL ,
    Role VARCHAR2(10)  NOT NULL
);

-- added gender 
DROP TABLE Trader CASCADE CONSTRAINTS;
CREATE TABLE Trader(
    Trader_ID NUMBER(10) PRIMARY KEY,
    First_Name VARCHAR2(100) NOT NULL,
    Last_Name VARCHAR2(100) NOT NULL,
    Email VARCHAR2(100) NOT NULL  UNIQUE,
    Contact_Number NUMBER(20) NOT NULL  UNIQUE,
    Address VARCHAR2(300) NOT NULL,
    Gender VARCHAR2(10) CHECK( Gender IN('Male', 'Female', 'Other')),
    Date_of_Birth DATE NOT NULL,
    UserName VARCHAR2(100) NOT NULL  UNIQUE,
    Password VARCHAR2(100) NOT NULL,
    Register_Date DATE NOT NULL,
    Profile_Image BLOB ,
    Role VARCHAR2(10) NOT NULL
);


DROP TABLE Shop CASCADE CONSTRAINTS;
CREATE TABLE Shop(
    Shop_ID NUMBER(10) PRIMARY KEY,
    Shop_Name VARCHAR2(100) NOT NULL  UNIQUE,
    Shop_Location VARCHAR2(200) NOT NULL,
    Contact_Number NUMBER(20) NOT NULL  UNIQUE,
    Email VARCHAR2(100) NOT NULL  UNIQUE,
    Product_Image BLOB,
    Trader_ID NUMBER(10)
);
--  foreign key in Shop
ALTER TABLE Shop ADD FOREIGN KEY (Trader_ID) REFERENCES Trader(Trader_ID);


DROP TABLE Customer CASCADE CONSTRAINTS;
CREATE TABLE Customer(
    Customer_ID NUMBER(10) PRIMARY KEY,
    First_Name VARCHAR2(100) NOT NULL,
    Last_Name VARCHAR2(100) NOT NULL,
    Contact_Number NUMBER(20) NOT NULL  UNIQUE,
    Address VARCHAR2(200) NOT NULL,
    Date_of_Birth DATE NOT NULL,
    Gender VARCHAR2(10) CHECK( Gender IN('Male', 'Female', 'Other')),
    Email VARCHAR2(100) NOT NULL  UNIQUE,
    Register_Date DATE NOT NULL,
    Username VARCHAR2(100) NOT NULL  UNIQUE,
    Password VARCHAR2(100) NOT NULL ,
    Profile_Image BLOB ,
    Role VARCHAR2(10)  NOT NULL
);

DROP TABLE Category CASCADE CONSTRAINTS;
CREATE TABLE Category(
    Category_ID NUMBER(10) PRIMARY KEY,
    Category_Type VARCHAR2(100) NOT NULL  UNIQUE
);
-- ??????????????????????

DROP TABLE Collection_Slot CASCADE CONSTRAINTS;
CREATE TABLE Collection_Slot(
    Collection_ID NUMBER(10) PRIMARY KEY,
    Collection_Day VARCHAR2(50) CHECK( Collection_Day IN('Wednesday', 'Thursday', 'Friday')) NOT NULL,
    Collection_Date DATE NOT NULL
);


-- added product status, product Name
DROP TABLE Product CASCADE CONSTRAINTS;
CREATE TABLE Product(
    Product_ID NUMBER(10) PRIMARY KEY,
    Product_Name VARCHAR2(100) NOT NULL UNIQUE,
    Price VARCHAR2(10) NOT NULL,
    Stock_Available NUMBER(20) NOT NULL,
    Product_Status VARCHAR2(100) CHECK( Product_Status IN('In stock', 'out of stock')) NOT NULL,
    Min_Order NUMBER(20) NOT NULL,
    Max_Order NUMBER(20) NOT NULL,
    Allergy VARCHAR2(100) NOT NULL,
    Description VARCHAR2(200) NOT NULL,
    Product_Image BLOB,
    Shop_ID	NUMBER(10),
	Category_ID	NUMBER(10),
	Discount_ID	NUMBER(10)
);

-- foreign key in Product
ALTER TABLE Product ADD FOREIGN KEY (Shop_ID) REFERENCES Shop(Shop_ID);
ALTER TABLE Product ADD FOREIGN KEY (Category_ID) REFERENCES Category(Category_ID);
ALTER TABLE Product ADD FOREIGN KEY (Discount_ID) REFERENCES Discount(Discount_ID);


DROP TABLE Wishlist CASCADE CONSTRAINTS;
CREATE TABLE Wishlist(
    Wishlist_ID NUMBER(10) PRIMARY KEY,
    Wishlist_Date DATE NOT NULL,
    Product_ID NUMBER(10),
    Customer_ID NUMBER(10) 
);
-- foreign key in Wishlist
ALTER TABLE Wishlist ADD FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID);
ALTER TABLE Wishlist ADD FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID);

DROP TABLE Discount CASCADE CONSTRAINTS;
CREATE TABLE Discount(
    Discount_ID NUMBER(10) PRIMARY KEY,
    Discount_Percent VARCHAR2(100) NOT NULL
 
);

DROP TABLE Review CASCADE CONSTRAINTS;
CREATE TABLE Review(
    Review_ID NUMBER(10) PRIMARY KEY,
    Rating VARCHAR2(100) CHECK( Rating IN('1','2','3','4','5')),
    Review_Comment VARCHAR2(400),
    Review_Date DATE NOT NULL,
    Customer_ID NUMBER(10) ,
    Product_ID NUMBER(10) 
);
-- -foreign key in Review
ALTER TABLE Review ADD FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID);
ALTER TABLE Review ADD FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID);



DROP TABLE Cart CASCADE CONSTRAINTS;
CREATE TABLE Cart(
    Cart_ID NUMBER(10) PRIMARY KEY,
    Quantity NUMBER(20) NOT NULL,
    Total_Price DECIMAL(5,2) NOT NULL,
    Customer_ID NUMBER(10) 
);
-- foreign key in Cart
ALTER TABLE Cart ADD FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID);

DROP TABLE Cart_Item CASCADE CONSTRAINTS;
CREATE TABLE Cart_Item(
    Cart_Item_ID NUMBER(10) PRIMARY KEY,
    Quantity NUMBER(20) NOT NULL,
    Product_ID NUMBER(10),
    Cart_ID NUMBER(10) 
);
-- foreign key in Cart_Item
ALTER TABLE Cart_Item ADD FOREIGN KEY (Cart_ID) REFERENCES Cart(Cart_ID);
ALTER TABLE Cart_Item ADD FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID);


DROP TABLE Order_Detail CASCADE CONSTRAINTS;
CREATE TABLE Order_Detail(
    Order_ID NUMBER(10) PRIMARY KEY,
    Order_Date DATE NOT NULL,
    Order_Status VARCHAR2(10) CHECK( Order_Status IN('confirm', 'received','cancel','not received')) NOT NULL,
    Total_Amount DECIMAL(5,2) NOT NULL,
    Collection_ID NUMBER(10) ,
    Cart_ID NUMBER(10) ,
    Customer_ID NUMBER(10) 
);
-- Foreign  key in order detail
ALTER TABLE Order_Detail ADD FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID);
ALTER TABLE Order_Detail ADD FOREIGN KEY (Cart_ID) REFERENCES Cart(Cart_ID);
ALTER TABLE Order_Detail ADD FOREIGN KEY (Collection_ID) REFERENCES Collection_Slot(Collection_ID);



DROP TABLE Order_Product CASCADE CONSTRAINTS;
CREATE TABLE Order_Product(
    Order_Product_ID NUMBER(10) PRIMARY KEY,
    Product_ID NUMBER(10) ,
    Order_ID NUMBER(10),
    Quantity Number(10)
);
-- foreign key in Order_Product
ALTER TABLE Order_Product ADD FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID);
ALTER TABLE Order_Product ADD FOREIGN KEY (Order_ID) REFERENCES Order_Detail(Order_ID);



DROP TABLE Report CASCADE CONSTRAINTS;
CREATE TABLE Report(
    Report_ID NUMBER(10) PRIMARY KEY,
    Report_Date DATE NOT NULL,
    Report_Type VARCHAR2(10) CHECK( Report_Type IN('order', 'product', 'trader')) NOT NULL,
    Order_ID NUMBER(10) ,
    Product_ID NUMBER(10) ,
    Trader_ID NUMBER(10) 
);
-- foreign key in Report
ALTER TABLE Report ADD FOREIGN KEY (Product_ID) REFERENCES Order_Detail(Order_ID);
ALTER TABLE Report ADD FOREIGN KEY (Product_ID) REFERENCES Product(Product_ID);
ALTER TABLE Report ADD FOREIGN KEY (Trader_ID) REFERENCES Trader(Trader_ID);


DROP TABLE Payment CASCADE CONSTRAINTS;
CREATE TABLE Payment(
    Payment_ID NUMBER(10) PRIMARY KEY,
    Amount DECIMAL(5,2) NOT NULL,
    Payment_Method VARCHAR2(100) NOT NULL,
    Payment_Date DATE NOT NULL,
    Customer_ID NUMBER(10) ,
    Order_ID NUMBER(10)
);
-- foreign key in Payment
ALTER TABLE Payment ADD FOREIGN KEY (Customer_ID) REFERENCES Customer(Customer_ID);
ALTER TABLE Payment ADD FOREIGN KEY (Order_ID) REFERENCES Order_Detail(Order_ID);





















