CREATE TABLE [dbo].[userDetails] (
    [Firstname] NVARCHAR (50) NULL,
    [Surname]   NVARCHAR (50) NULL,
	[Location]	NVARCHAR (50) NULL,
	[Date]		NVARCHAR (50) NULL,
	[Time]		NVARCHAR (50) NULL,
    [ID]        INT           IDENTITY (1, 1) NOT NULL
);

