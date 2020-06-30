SELECT  *
FROM    userDetails
WHERE   createdDate >= DATEADD(hour,-24 , GETDATE()) AND userID=550204
ORDER BY entryID DESC