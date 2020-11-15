SELECT `title`, `summary` FROM film WHERE lower(film.summary)
LIKE '%vincent%' ORDER BY film.id_film ASC;
