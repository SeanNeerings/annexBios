-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- Link to schema: https://app.quickdatabasediagrams.com/#/d/R7lwmm
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.

-- Modify this code to update the DB schema diagram.
-- To reset the sample schema, replace everything with
-- two dots ('..' - without quotes).

SET XACT_ABORT ON

BEGIN TRANSACTION QUICKDBD

CREATE TABLE [film_data] (
    [film_info] var(200)  NOT NULL 
)

CREATE TABLE [Order] (
    [order_id] int  NOT NULL ,
    [datum] date  NOT NULL ,
    [klant] int  NOT NULL ,
    [vertoning_id] int  NOT NULL ,
    CONSTRAINT [PK_Order] PRIMARY KEY CLUSTERED (
        [order_id] ASC,[klant] ASC
    )
)

-- Table documentation comment 1 (try the PDF/RTF export)
-- Table documentation comment 2
CREATE TABLE [klanten] (
    [id] AUTO_INCREMENT  NOT NULL ,
    -- Field documentation comment 1
    -- Field documentation comment 2
    -- Field documentation comment 3
    [Naam] varchar(200)  NOT NULL ,
    [email] varchar(200)  NOT NULL ,
    [postcode] varchar(200)  NOT NULL ,
    CONSTRAINT [PK_klanten] PRIMARY KEY CLUSTERED (
        [id] ASC
    ),
    CONSTRAINT [UK_klanten_Naam] UNIQUE (
        [Naam]
    ),
    CONSTRAINT [UK_klanten_email] UNIQUE (
        [email]
    )
)

CREATE TABLE [vertoningsdata] (
    [id] int  NOT NULL ,
    [filmdata_id] int  NOT NULL ,
    [zaal] varchar(200)  NOT NULL ,
    [datum] datetime  NOT NULL ,
    CONSTRAINT [PK_vertoningsdata] PRIMARY KEY CLUSTERED (
        [id] ASC
    )
)

ALTER TABLE [film_data] WITH CHECK ADD CONSTRAINT [FK_film_data_film_info] FOREIGN KEY([film_info])
REFERENCES [Order] ([datum])

ALTER TABLE [film_data] CHECK CONSTRAINT [FK_film_data_film_info]

ALTER TABLE [Order] WITH CHECK ADD CONSTRAINT [FK_Order_klant] FOREIGN KEY([klant])
REFERENCES [klanten] ([id])

ALTER TABLE [Order] CHECK CONSTRAINT [FK_Order_klant]

ALTER TABLE [Order] WITH CHECK ADD CONSTRAINT [FK_Order_vertoning_id] FOREIGN KEY([vertoning_id])
REFERENCES [vertoningsdata] ([id])

ALTER TABLE [Order] CHECK CONSTRAINT [FK_Order_vertoning_id]

ALTER TABLE [vertoningsdata] WITH CHECK ADD CONSTRAINT [FK_vertoningsdata_id] FOREIGN KEY([id])
REFERENCES [film_data] ([film_info])

ALTER TABLE [vertoningsdata] CHECK CONSTRAINT [FK_vertoningsdata_id]

COMMIT TRANSACTION QUICKDBD