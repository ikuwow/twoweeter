# TwoWeeter

# users
# DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED NOT NULL PRIMARY KEY, 
    screen_name VARCHAR(15) UNIQUE NOT NULL,
    name VARCHAR(20) NOT NULL,
    icon_url VARCHAR(100),
    is_registered BOOLEAN NOT NULL DEFAULT 0,
    created DATETIME NOT NULL,
    modified DATETIME
) ENGINE = InnoDB default charset=utf8mb4;

# timezones
# drop table if exists timezones;
CREATE TABLE IF NOT EXISTS timezones (
    id TINYINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) NOT NULL UNIQUE,
    utc_offset INT NOT NULL,
    created datetime NOT NULL,
    modified datetime
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

# user_details
CREATE TABLE IF NOT EXISTS user_details (
    id BIGINT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT UNSIGNED NOT NULL UNIQUE,
    access_token VARCHAR(100) NOT NULL,
    access_token_secret VARCHAR(100) NOT NULL,
    timezone_id TINYINT UNSIGNED,
    last_login DATETIME,
    created DATETIME NOT NULL,
    modified DATETIME,
    FOREIGN KEY(user_id) REFERENCES users(id),
    FOREIGN KEY(timezone_id) REFERENCES timezones(id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

# follows
# drop table if exists follows; 
CREATE TABLE IF NOT EXISTS follows (
    id BIGINT not null primary key auto_increment,
    user_id BIGINT NOT NULL,
    following_user_id BIGINT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# tweets
# drop table if exists tweets;
CREATE TABLE IF NOT EXISTS tweets (
    id BIGINT UNSIGNED NOT NULL PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    tweet VARCHAR(200) NOT NULL,
    is_tweeted BOOLEAN NOT NULL DEFAULT 0,
    tweet_date DATETIME NOT NULL,
    created datetime NOT NULL,
    modified DATETIME,
    FOREIGN KEY(user_id) REFERENCES USERS(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
