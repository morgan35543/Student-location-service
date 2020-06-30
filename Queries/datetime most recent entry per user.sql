SELECT t1.*
FROM userDetails t1
WHERE t1.entryID = (SELECT MAX(t2.entryID)
                 FROM userDetails t2
                 WHERE t2.userID = t1.userID)
				 ORDER BY entryID DESC