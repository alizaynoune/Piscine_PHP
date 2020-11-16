SELECT `floor_number` AS 'floor',SUM(nb_seats) AS 'seats'
	FROM cinema GROUP BY cinema.floor_number ORDER BY seats DESC;
