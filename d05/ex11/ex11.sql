SELECT upper(user.last_name) AS NAME, user.first_name, sub.price FROM user_card AS user
	INNER JOIN member AS mem ON user.id_user = mem.id_user_card
	INNER JOIN subscription AS sub ON sub.price > 42 AND sub.id_sub = mem.id_sub
	ORDER BY user.last_name, user.first_name;
