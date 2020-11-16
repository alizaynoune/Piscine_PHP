SELECT f.id_genre, g.name AS name_genre, f.id_distrib,
       dis.name AS name_distrib, f.title AS title_film
       FROM film AS f
       LEFT JOIN genre AS g ON f.id_genre=g.id_genre
       LEFT JOIN distrib AS dis ON f.id_distrib=dis.id_distrib
       WHERE f.id_genre BETWEEN 4 AND 8 ;
