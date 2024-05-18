-- Trader
INSERT INTO Trader ( First_Name, Last_Name, Email, Contact_Number, Address, Gender, Date_of_Birth, UserName, Password, Register_Date, Profile_Image) 
VALUES ( 'saiman', 'shrestha', 'saiman@example.com', 1234567890, 'kathmandu', 'Male', TO_DATE('2002-05-01', 'YYYY-MM-DD'), 'saiman', 'pwsssd#123', SYSDATE, NULL);
INSERT INTO Trader ( First_Name, Last_Name, Email, Contact_Number, Address, Gender, Date_of_Birth, UserName, Password, Register_Date, Profile_Image) 
VALUES ( 'sushan', 'vhanu', 'sushan@example.com', 1234599890, 'Patan', 'Male', TO_DATE('2001-05-01', 'YYYY-MM-DD'), 'sushan', 'pwsssd#222', SYSDATE, NULL);
INSERT INTO Trader ( First_Name, Last_Name, Email, Contact_Number, Address, Gender, Date_of_Birth, UserName, Password, Register_Date, Profile_Image) 
VALUES ( 'hem', 'Sah', 'hem@example.com', 1235567890, 'chitwan', 'Male', TO_DATE('2003-05-01', 'YYYY-MM-DD'), 'hem', 'pwsssd#444', SYSDATE, NULL);
INSERT INTO Trader ( First_Name, Last_Name, Email, Contact_Number, Address, Gender, Date_of_Birth, UserName, Password, Register_Date, Profile_Image) 
VALUES ( 'Karan', 'Rai', 'karan@example.com', 3334567890, 'kathmandu', 'Male', TO_DATE('2000-05-01', 'YYYY-MM-DD'), 'karan', 'pwsssd#777', SYSDATE, NULL);
INSERT INTO Trader ( First_Name, Last_Name, Email, Contact_Number, Address, Gender, Date_of_Birth, UserName, Password, Register_Date, Profile_Image) 
VALUES ( 'Mohan', 'shres33', 'mohan@example.com', 774567890, 'Birgunj', 'Male', TO_DATE('2001-05-01', 'YYYY-MM-DD'), 'Mohan', 'pwsssd#999', SYSDATE, NULL);


--customer
INSERT INTO Customer ( First_Name, Last_Name, Contact_Number, Address, Date_of_Birth, Gender, Email, Register_Date, Username, Password, Profile_Image)
VALUES ( 'raimon', 'rana', 2228374650, 'address', TO_DATE('1980-08-15', 'YYYY-MM-DD'), 'Female', 'raimon@example.com', SYSDATE, 'raimon', 'saiman*98', NULL);
INSERT INTO Customer (First_Name, Last_Name, Contact_Number, Address, Date_of_Birth, Gender, Email, Register_Date, Username, Password, Profile_Image)
VALUES ('Bishnu', 'Poudel', 9841234567, 'Pokhara, Kaski', TO_DATE('1990-02-05', 'YYYY-MM-DD'), 'Male', 'bishnu.poudel@example.com', SYSDATE, 'bishnup', 'poudel!123', NULL);
INSERT INTO Customer (First_Name, Last_Name, Contact_Number, Address, Date_of_Birth, Gender, Email, Register_Date, Username, Password, Profile_Image)
VALUES ('Aastha', 'Rimal', 9810123456, 'Lalitpur, Patan', TO_DATE('1995-07-25', 'YYYY-MM-DD'), 'Female', 'aastha.rimal@example.com', SYSDATE, 'aasthar', 'secure$987', NULL);
INSERT INTO Customer (First_Name, Last_Name, Contact_Number, Address, Date_of_Birth, Gender, Email, Register_Date, Username, Password, Profile_Image)
VALUES ('Prabin', 'Gurung', 9851123456, 'Bhaktapur, Bhaktapur', TO_DATE('1988-11-11', 'YYYY-MM-DD'), 'Male', 'prabin.gurung@example.com', SYSDATE, 'prabing', 'gurung#88', NULL);
INSERT INTO Customer (First_Name, Last_Name, Contact_Number, Address, Date_of_Birth, Gender, Email, Register_Date, Username, Password, Profile_Image)
VALUES ('Srijana', 'Shrestha', 9821234567, 'Dharan, Sunsari', TO_DATE('1992-03-15', 'YYYY-MM-DD'), 'Female', 'srijana.shrestha@example.com', SYSDATE, 'srijanas', 'password%123', NULL);



-- Shop

INSERT INTO Shop ( Shop_Name, Shop_Location, Contact_Number,Product_Image, Email, Trader_ID) VALUES ( 'Butcher', 'Patan', 9876543210,NULL, 'butcher@example.com', 201);
INSERT INTO Shop ( Shop_Name, Shop_Location, Contact_Number, Product_Image,Email, Trader_ID) VALUES ( 'greengrocers', 'Basundhara', 9876333210,NULL, 'greengrocers@example.com', 202);
INSERT INTO Shop ( Shop_Name, Shop_Location, Contact_Number, Product_Image,Email, Trader_ID) VALUES ( 'Fishmongers', 'Thapathali', 9876543660,NULL, 'fishmongers@example.com', 203);
INSERT INTO Shop ( Shop_Name, Shop_Location, Contact_Number, Product_Image,Email, Trader_ID) VALUES ( 'Bakeries', 'baneshwor', 9872223210,NULL, 'bakeries@example.com', 204);
INSERT INTO Shop ( Shop_Name, Shop_Location, Contact_Number, Product_Image,Email, Trader_ID) VALUES ( 'Delitessans', 'kupondol', 9111543210,NULL, 'delitessans@example.com', 205);

-- product
INSERT INTO Product (Product_Name, Price, Stock_Available, Min_Order, Max_Order, Allergy, Product_Image, Description, Shop_ID) 
VALUES ('Apples', '2.99', 150, 1, 10, 'none', null, 'Fresh juicy apples, perfect for snacking or baking.', 402);
INSERT INTO Product (Product_Name, Price, Stock_Available, Min_Order, Max_Order, Allergy, Product_Image, Description, Shop_ID) 
VALUES ('Oranges', '1.99', 100, 1, 10, 'none', null, 'Sweet and tangy oranges packed with vitamin C.', 402);
INSERT INTO Product (Product_Name, Price, Stock_Available, Min_Order, Max_Order, Allergy, Product_Image, Description, Shop_ID) 
VALUES ('Bananas', '2.50', 200, 1, 20, 'none', null, 'Nutritious bananas, a great source of potassium.', 402);
INSERT INTO Product (Product_Name, Price, Stock_Available, Min_Order, Max_Order, Allergy, Product_Image, Description, Shop_ID) 
VALUES ('Cherries', '10.00', 50, 1, 5, 'none', null, 'Delicious cherries, perfect for desserts or snacking.', 402);
INSERT INTO Product (Product_Name, Price, Stock_Available, Min_Order, Max_Order, Allergy, Product_Image, Description, Shop_ID) 
VALUES ('Pears', '3.00', 120, 1, 15, 'none', null, 'Sweet and juicy pears, a tasty addition to any fruit bowl.', 402);


--collection slot
INSERT INTO Collection_Slot ( Collection_Day, Collection_Date) VALUES ( 'Thursday', TO_DATE('2024-05-16', 'YYYY-MM-DD'));
INSERT INTO Collection_Slot ( Collection_Day, Collection_Date) VALUES ( 'Friday', TO_DATE('2024-05-17', 'YYYY-MM-DD'));

--cart item
INSERT INTO Cart_Item ( Quantity,Product_ID, Cart_ID) VALUES ( 100,801, 501);
INSERT INTO Cart_Item (Quantity, Product_ID, Cart_ID) VALUES ( 90,802, 502);
INSERT INTO Cart_Item ( Quantity,Product_ID, Cart_ID) VALUES ( 40,801, 501);
INSERT INTO Cart_Item (Quantity, Product_ID, Cart_ID) VALUES ( 12,801, 502);
INSERT INTO Cart_Item (Quantity, Product_ID, Cart_ID) VALUES ( 8,802, 505);


--order_detail
INSERT INTO Order_Detail ( Order_Date, Order_Status, Total_Amount, Collection_ID, Cart_ID, Customer_ID) VALUES ( SYSDATE, 'confirm', 25.50, 1201,501, 301);
INSERT INTO Order_Detail ( Order_Date, Order_Status, Total_Amount, Collection_ID, Cart_ID, Customer_ID) VALUES ( SYSDATE, 'received', 15.00, 1202, 502, 302);
INSERT INTO Order_Detail ( Order_Date, Order_Status, Total_Amount, Collection_ID, Cart_ID, Customer_ID) VALUES ( SYSDATE, 'cancel', 50.75,1202, 503, 303);
INSERT INTO Order_Detail ( Order_Date, Order_Status, Total_Amount, Collection_ID, Cart_ID, Customer_ID) VALUES ( SYSDATE, 'received', 10.00, 1202, 504, 304);
INSERT INTO Order_Detail ( Order_Date, Order_Status, Total_Amount, Collection_ID, Cart_ID, Customer_ID) VALUES (SYSDATE, 'confirm', 40.00, 1202, 505, 305);


-- order product
INSERT INTO Order_Product ( Product_ID, Order_ID, Quantity) VALUES ( 802, 1302, 20);
INSERT INTO Order_Product ( Product_ID, Order_ID, Quantity) VALUES ( 803, 1301, 50);
INSERT INTO Order_Product ( Product_ID, Order_ID, Quantity) VALUES ( 804, 1304, 10);
INSERT INTO Order_Product ( Product_ID, Order_ID, Quantity) VALUES ( 805, 1303, 40);

---discount
INSERT INTO Discount (Discount_Percent)
VALUES( '10%');
INSERT INTO Discount (Discount_Percent)
VALUES( '20%');
INSERT INTO Discount (Discount_Percent)
VALUES( '30%');
INSERT INTO Discount (Discount_Percent)
VALUES( '40%');
INSERT INTO Discount (Discount_Percent)
VALUES( '50%');
 


-- Category
INSERT INTO Category (Category_Type) VALUES  ( 'Electronics');
INSERT INTO Category (Category_Type) VALUES  ( 'Clothing');
INSERT INTO Category (Category_Type) VALUES  ( 'Food');
INSERT INTO Category (Category_Type) VALUES  ( 'Appliances');
INSERT INTO Category (Category_Type) VALUES  ( 'Furniture');

