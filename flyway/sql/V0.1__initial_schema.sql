CREATE TABLE mm_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	left_term VARCHAR(100) NOT NULL,
	right_term VARCHAR(100) NOT NULL,
	status TINYINT NOT NULL,
        PRIMARY KEY (id)
);

CREATE TABLE mm_user (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	salt CHAR(32) NOT NULL,
	password_hash CHAR(64) NOT NULL,
	email VARCHAR(100) NOT NULL,
	language VARCHAR(2) NOT NULL,
	status TINYINT(1) UNSIGNED NOT NULL,
        PRIMARY KEY (id)
);

CREATE TABLE mm_license (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        url VARCHAR(2083),
        not_commercial BOOLEAN NOT NULL,
	PRIMARY KEY (id)
);


CREATE TABLE mm_media_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	media_id BIGINT UNSIGNED NOT NULL,
	axis_id INT UNSIGNED NOT NULL,
	axis_position TINYINT(1) UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (media_id) REFERENCES media(id),
	FOREIGN KEY (axis_id) REFERENCES axis(id)
);


CREATE TABLE mm_user_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        user_id BIGINT UNSIGNED NOT NULL,
        axis_id INT UNSIGNED NOT NULL,
        axis_position TINYINT(1) UNSIGNED NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (axis_id) REFERENCES axis(id)
);

CREATE TABLE mm_media (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        type BIGINT UNSIGNED NOT NULL,
        title text NOT NULL,
        user_id BIGINT UNSIGNED NOT NULL,
        user_name VARCHAR(100) NOT NULL,
        excerpt text,
        content LONGTEXT NOT NULL,
        original_creator VARCHAR(100) NOT NULL,
        original_url VARCHAR(2083),
        license_id TINYINT(1) UNSIGNED NOT NULL,
        license_name VARCHAR(100) NOT NULL,
        language CHAR(2) NOT NULL,
        status TINYINT(1) UNSIGNED NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (license_id) REFERENCES license(id)
);

