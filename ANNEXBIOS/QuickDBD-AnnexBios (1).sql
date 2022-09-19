-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- Link to schema: https://app.quickdatabasediagrams.com/#/d/R7lwmm
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.

-- Modify this code to update the DB schema diagram.
-- To reset the sample schema, replace everything with
-- two dots ('..' - without quotes).

CREATE TABLE "film_data" (
    "film_info" var(200)  NOT NULL 
)

GO

CREATE TABLE "Order" (
    "order_id" int  NOT NULL ,
    "datum" date  NOT NULL ,
    "klant" int  NOT NULL ,
    "vertoning_id" int  NOT NULL ,
    CONSTRAINT "pk_Order" PRIMARY KEY (
        "order_id","klant"
    )
)

GO

-- Table documentation comment 1 (try the PDF/RTF export)
-- Table documentation comment 2
CREATE TABLE "klanten" (
    "id" AUTO_INCREMENT  NOT NULL ,
    -- Field documentation comment 1
    -- Field documentation comment 2
    -- Field documentation comment 3
    "Naam" varchar(200)  NOT NULL ,
    "email" varchar(200)  NOT NULL ,
    "postcode" varchar(200)  NOT NULL ,
    CONSTRAINT "pk_klanten" PRIMARY KEY (
        "id"
    ),
    CONSTRAINT "uk_klanten_Naam" UNIQUE (
        "Naam"
    ),
    CONSTRAINT "uk_klanten_email" UNIQUE (
        "email"
    )
)

GO

CREATE TABLE "vertoningsdata" (
    "id" int  NOT NULL ,
    "filmdata_id" int  NOT NULL ,
    "zaal" varchar(200)  NOT NULL ,
    "datum" datetime  NOT NULL ,
    CONSTRAINT "pk_vertoningsdata" PRIMARY KEY (
        "id"
    )
)

GO

ALTER TABLE "film_data" ADD CONSTRAINT "fk_film_data_film_info" FOREIGN KEY("film_info")
REFERENCES "Order" ("datum")
GO

ALTER TABLE "Order" ADD CONSTRAINT "fk_Order_klant" FOREIGN KEY("klant")
REFERENCES "klanten" ("id")
GO

ALTER TABLE "Order" ADD CONSTRAINT "fk_Order_vertoning_id" FOREIGN KEY("vertoning_id")
REFERENCES "vertoningsdata" ("id")
GO

ALTER TABLE "vertoningsdata" ADD CONSTRAINT "fk_vertoningsdata_id" FOREIGN KEY("id")
REFERENCES "film_data" ("film_info")
GO

