/* Allowed values for 'status' are one (active) and zero (deleted) */

/* mm_axis: model different ideological positions. For example, in
   Economics, Laissez-faire could be on the left and Interventionism
   on the right. Both medias and users have a value that represents
   their position on each ideological axis. */

CREATE TABLE mm_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	left_term VARCHAR(100) NOT NULL,
	right_term VARCHAR(100) NOT NULL,
	status TINYINT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* mm_user: store the user information. There is not much to say here,
   as column names are mostly self-explanatory. Languages are stored
   as ISO 639-1, those two-letter codes with which you are probably
   already familiar: "EN" for English, "DE" for German, etc. */

CREATE TABLE mm_user (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(100) NOT NULL,
	password_salt CHAR(32) NOT NULL,
	password_hash CHAR(64) NOT NULL,
	email VARCHAR(100) NOT NULL,
	language VARCHAR(2) NOT NULL,
	status TINYINT UNSIGNED NOT NULL,
        PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* mm_license: the copyright license under which a media is published.
   For example, the name of the license could be "CC BY-NC-SA" and the
   URL point to "http://creativecommons.org/licenses/by-nc-sa/3.0/".
   The 'allows_commercial' column stores exactly that: whether the work
   may be used for commercial purposes */

CREATE TABLE mm_license (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        url VARCHAR(2083) NOT NULL,
        allows_commercial BOOLEAN NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* mm_media: medias (such as an article on a newspaper or a video on
   Vimeo) are not automatically imported into our database: they must
   be edited by an user, whose responsibility is to determine the
   position of the media on the different ideological dimensions. */

CREATE TABLE mm_media (
        id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
        type BIGINT UNSIGNED NOT NULL,
        title text NOT NULL,
        user_id BIGINT UNSIGNED NOT NULL,
        excerpt text,
        content LONGTEXT NOT NULL,
        original_creator VARCHAR(100),
        original_url VARCHAR(2083),
        license_id INT UNSIGNED NOT NULL,
        license_name VARCHAR(100) NOT NULL,
        language CHAR(2) NOT NULL,
        status TINYINT UNSIGNED NOT NULL,
        creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES mm_user(id),
        FOREIGN KEY (license_id) REFERENCES mm_license(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* mm_user_axis: the position of an user on an ideological dimension.
   The value of 'axis_position' must be in the range [0, 20], where
   zero is the far left of the spectrum (e.g., Laissez-faire in
   Economics) and twenty the far right (such as Interventionism) */

CREATE TABLE mm_user_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        user_id BIGINT UNSIGNED NOT NULL,
        axis_id INT UNSIGNED NOT NULL,
        axis_position TINYINT UNSIGNED NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES mm_user(id),
        FOREIGN KEY (axis_id) REFERENCES mm_axis(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/* mm_media_axis: exactly the same as mm_user_axis, representing the
   position of a media on an ideological dimension */

CREATE TABLE mm_media_axis (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	media_id BIGINT UNSIGNED NOT NULL,
	axis_id INT UNSIGNED NOT NULL,
	axis_position TINYINT UNSIGNED NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (media_id) REFERENCES mm_media(id),
	FOREIGN KEY (axis_id) REFERENCES mm_axis(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
