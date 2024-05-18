-- limit restrication table for Trader
DROP TRIGGER trig_limit_trader;

CREATE OR REPLACE TRIGGER trig_limit_trader
Before INSERT on Trader
FOR EACH ROW
DECLARE
    count_trader NUMBER;
BEGIN
    SELECT COUNT(*) INTO count_trader from Trader;

    IF count_trader >= 10 THEN
        RAISE_APPLICATION_ERROR(-20001, 'TRADER SHOULD NOT BE MORE THAN 10');
    END IF;
END;
/

-- limit restrication table for management
DROP TRIGGER trig_limit_management;

CREATE OR REPLACE TRIGGER trig_limit_management
Before INSERT on Management
FOR EACH ROW
DECLARE
    count_management NUMBER;
BEGIN
    SELECT COUNT(*) INTO count_management from Management;

    IF count_management >= 1 THEN
        RAISE_APPLICATION_ERROR(-20002, 'Management SHOULD NOT BE MORE THAN 1');
    END IF;
END;
/


-- limit restrication table in product, no more than 10 product in one shop
DROP TRIGGER trig_shopprods;

-- create triiger 
CREATE OR REPLACE TRIGGER trig_shopprods
BEFORE INSERT on Product
FOR EACH ROW
DECLARE
    count_product NUMBER;
BEGIN
    SELECT COUNT(*) INTO count_product from Product WHERE Shop_ID = :NEW.Shop_ID;

    IF count_product >= 10 THEN
        RAISE_APPLICATION_ERROR(-20002, 'Error , No more than 10 product in one shop');
    END IF;
END;
/

-- --  limit restration in product, no more than 500 product quantity;

DROP TRIGGER trig_shop_quantity;

-- create triiger 
CREATE OR REPLACE TRIGGER trig_shop_quantity
BEFORE INSERT OR UPDATE on Product
FOR EACH ROW

BEGIN
    IF :NEW.Stock_Available >= 1000 THEN
        RAISE_APPLICATION_ERROR(-20002, 'No more than 1000 stock');
    END IF;

END;
/



-- age limit restriction trigger for Trader
DROP TRIGGER trig_limit_Trader_age;

CREATE OR REPLACE TRIGGER trig_limit_Trader_age
BEFORE INSERT OR UPDATE on Trader
FOR EACH ROW
DECLARE
BEGIN
    IF :NEW.Date_of_Birth >= SYSDATE - numtoyminterval(18, 'YEAR') THEN
        RAISE_APPLICATION_ERROR(-20002, 'Traders must be at least 18 years old.');
    ELSE
        IF :NEW.Date_of_Birth <= SYSDATE - numtoyminterval(150, 'YEAR') THEN
            RAISE_APPLICATION_ERROR(-20002, 'Traders age must be less than 150 years old.');
        END IF;
    END IF;
END;
/

-- age limit restriction trigger for Customer
DROP TRIGGER trig_limit_Customer_age;

CREATE OR REPLACE TRIGGER trig_limit_Customer_age
BEFORE INSERT OR UPDATE on Customer
FOR EACH ROW
BEGIN
    IF :NEW.Date_of_Birth >= SYSDATE - numtoyminterval(12, 'YEAR') THEN
        RAISE_APPLICATION_ERROR(-20002, 'Customer must be at least 12 years old.');
    ELSE
        IF :NEW.Date_of_Birth <= SYSDATE - numtoyminterval(150, 'YEAR') THEN
            RAISE_APPLICATION_ERROR(-20002, 'Customer age must be less than 150 years old.');
        END IF;
    END IF;
END;
/



-- create a single cart for every customer
DROP TRIGGER trig_create_cart;

CREATE OR REPLACE TRIGGER trig_create_cart
AFTER INSERT ON Customer
FOR EACH ROW
BEGIN
   INSERT INTO Cart (Quantity, Total_Price, Customer_ID) VALUES (0, 0, :NEW.Customer_ID);
END;
/
DROP TRIGGER trig_limit_cart_quantity;
CREATE OR REPLACE TRIGGER trig_limit_cart_quantity
BEFORE INSERT OR UPDATE ON Cart
FOR EACH ROW
BEGIN
    IF :NEW.Quantity > 20 THEN
        RAISE_APPLICATION_ERROR(-20002, 'Error: Cart quantity cannot exceed 20.');
    END IF;
END;
/

DROP TRIGGER update_product_status_trigger;
CREATE OR REPLACE TRIGGER update_product_status_trigger
BEFORE INSERT OR UPDATE ON Product
FOR EACH ROW
BEGIN
    IF :NEW.Stock_Available > 0 THEN
        :NEW.Product_Status := 'In stock';
    ELSE
        :NEW.Product_Status := 'Out of stock';
    END IF;
END;
/


CREATE OR REPLACE TRIGGER trg_role_customer
BEFORE INSERT ON Customer
FOR EACH ROW
BEGIN
    IF :NEW.Role IS NULL THEN
        :NEW.Role := 'customer'; -- Default role
    END IF;
END;
/



CREATE OR REPLACE TRIGGER trg_role_management
BEFORE INSERT ON Management
FOR EACH ROW
BEGIN
    IF :NEW.Role IS NULL THEN
        :NEW.Role := 'admin'; -- Default role
    END IF;
END;
/


CREATE OR REPLACE TRIGGER trg_role_admin
BEFORE INSERT ON Trader
FOR EACH ROW
BEGIN
    IF :NEW.Role IS NULL THEN
        :NEW.Role := 'trader'; -- Default role
    END IF;
END;
/












