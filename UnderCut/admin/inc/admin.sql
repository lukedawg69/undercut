CREATE TABLE login_admin
(
id INT NOT NULL AUTO_INCREMENT,
user_name VARCHAR(20),
user_pass VARCHAR(255),
PRIMARY KEY (id)
)
INSERT INTO login_admin (user_name, user_pass)
VALUES
(
'test', SHA(‘test12345’)
)
 
INSERT INTO login_admin (user_name, user_pass)
VALUES
(
‘admin’, SHA(‘admin’)
)
