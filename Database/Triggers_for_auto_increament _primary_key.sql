-- primary key auto increament trigger management

CREATE OR REPLACE TRIGGER trig_Management_pk
BEFORE INSERT ON Management
FOR EACH ROW
DECLARE
    ManagementID NUMBER(10);
BEGIN
-- INCREATMET OF PRIMARY KEY VALUE IN SEQUENCE IN Management
    SELECT NVL(MAX(Management_ID), 100) + 1 INTO ManagementID FROM Management;
    :NEW.Management_ID := ManagementID;
END;
/


-- primary key auto increament trigger tder

CREATE OR REPLACE TRIGGER trig_Trader_pk
BEFORE INSERT ON Trader
FOR EACH ROW
DECLARE
    TraderID NUMBER(10);
BEGIN
-- INCREATMET OF PRIMARY KEY VALUE IN SEQUENCE IN Trader
    SELECT NVL(MAX(Trader_ID),200) + 1 INTO TraderID FROM Trader;

    :NEW.Trader_ID := TraderID;

END;
/



-- primary key auto increament trigger customer

CREATE OR REPLACE TRIGGER trig_Customer_pk
BEFORE INSERT ON Customer
FOR EACH ROW
DECLARE
    CustomerID NUMBER(10);
BEGIN
-- INCREATMET OF PRIMARY KEY VALUE IN SEQUENCE IN Customer
    SELECT NVL(MAX(Customer_ID),300) + 1 INTO CustomerID FROM Customer;

    :NEW.Customer_ID := CustomerID;

END;
/


-- primary key auto increament trigger shop

CREATE OR REPLACE TRIGGER trig_Shop_pk
BEFORE INSERT ON Shop
FOR EACH ROW
DECLARE
    ShopID NUMBER(10);
BEGIN
-- INCREATMET OF PRIMARY KEY VALUE IN SEQUENCE IN STAFF_AUDIT
    SELECT NVL(MAX(Shop_ID),400) + 1 INTO ShopID FROM Shop;

    :NEW.Shop_ID := ShopID;

END;
/


-- primary key auto increament trigger cart

CREATE OR REPLACE TRIGGER trig_cart_pk
BEFORE INSERT on Cart
FOR EACH ROW
DECLARE
    CartID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Cart_ID),500) + 1 INTO CartID FROM CART;

    :NEW.Cart_ID := CartID;

END;
/

-- primary key auto increament trigger Category

CREATE OR REPLACE TRIGGER trig_Category_pk
BEFORE INSERT on Category
FOR EACH ROW
DECLARE
    CategoryID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Category_ID),600) + 1 INTO CategoryID FROM Category;

    :NEW.Category_ID := CategoryID;

END;
/

-- primary key auto increament trigger Cart_Item

CREATE OR REPLACE TRIGGER trig_Cart_Item_pk
BEFORE INSERT on Cart_Item
FOR EACH ROW
DECLARE
    Cart_ItemID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Cart_Item_ID),700) + 1 INTO Cart_ItemID FROM Cart_Item;

    :NEW.Cart_Item_ID := Cart_ItemID;

END;
/

-- primary key auto increament trigger Product

CREATE OR REPLACE TRIGGER trig_Product_pk
BEFORE INSERT on Product
FOR EACH ROW
DECLARE
    ProductID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Product_ID),800) + 1 INTO ProductID FROM Product;

    :NEW.Product_ID := ProductID;

END;
/

-- primary key auto increament trigger Wishlist

CREATE OR REPLACE TRIGGER trig_Wishlist_pk
BEFORE INSERT on Wishlist
FOR EACH ROW
DECLARE
   WishlistID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Wishlist_ID),900) + 1 INTO WishlistID FROM Wishlist;


    :NEW.Wishlist_ID := WishlistID;

END;
/

-- primary key auto increament trigger Discount

CREATE OR REPLACE TRIGGER trig_Discount_pk
BEFORE INSERT on Discount
FOR EACH ROW
DECLARE
    DiscountID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Discount_ID),1000) + 1 INTO DiscountID FROM Discount;

    :NEW.Discount_ID := DiscountID;

END;
/

-- primary key auto increament trigger Review

CREATE OR REPLACE TRIGGER trig_Review_pk
BEFORE INSERT on Review
FOR EACH ROW
DECLARE
    ReviewID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Review_ID),1100) + 1 INTO ReviewID FROM Review;

    :NEW.Review_ID := ReviewID;

END;
/

-- primary key auto increament trigger Collection_Slot

CREATE OR REPLACE TRIGGER trig_Collection_Slot_pk
BEFORE INSERT on Collection_Slot
FOR EACH ROW
DECLARE
   CollectionID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Collection_ID),1200) + 1 INTO CollectionID FROM Collection_Slot;

    :NEW.Collection_ID := CollectionID;

END;
/

-- primary key auto increament trigger Order_Detail

CREATE OR REPLACE TRIGGER trig_Order_Detail_pk
BEFORE INSERT on Order_Detail
FOR EACH ROW
DECLARE
    OrderID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Order_ID),1300) + 1 INTO OrderID FROM Order_Detail;

    :NEW.Order_ID := OrderID;

END;
/

-- primary key auto increament trigger Order_Product

CREATE OR REPLACE TRIGGER trig_Order_Product_pk
BEFORE INSERT on Order_Product
FOR EACH ROW
DECLARE
    Order_ProductID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Order_Product_ID),1400) + 1 INTO Order_ProductID FROM Order_Product;

    :NEW.Order_Product_ID := Order_ProductID;

END;
/

-- primary key auto increament trigger Report

CREATE OR REPLACE TRIGGER trig_Report_pk
BEFORE INSERT on Report
FOR EACH ROW
DECLARE
    ReportID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Report_ID),1500) + 1 INTO ReportID FROM Report;

    :NEW.Report_ID := ReportID;

END;
/

-- primary key auto increament trigger Payment

CREATE OR REPLACE TRIGGER trig_Payment_pk
BEFORE INSERT on Payment
FOR EACH ROW
DECLARE
    PaymentID NUMBER(10);
BEGIN
    SELECT NVL(MAX(Payment_ID),1600) + 1 INTO PaymentID FROM Payment;

    :NEW.Payment_ID := PaymentID;

END;
/