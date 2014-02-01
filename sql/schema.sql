# TwoWeeter

# users
# drop table if exists users;
create table if not exists users (
    id int not null primary key auto_increment, 
    tw_user_id int unique not null,
    screen_name varchar(100) unique not null,
    icon_url varchar(100),
    is_registered boolean not null default 0,
    last_login datetime,
    created datetime not null,
    modified datetime
) engine = InnoDB default charset=utf8;

# follows
# drop table if exists follows; 
create table if not exists follows (
    id int not null primary key auto_increment,
    user_id int not null,
    following_user_id int not null
) engine=innodb default charset=utf8;

# tweets
# drop table if exists tweets;
create table if not exists tweets (
    id int not null primary key auto_increment,
    user_id int not null,
    tweet varchar(140) not null,
    is_tweeted boolean not null default 0,
    tweet_date date not null,
    created datetime not null,
    modified datetime
) engine=innodb default charset=utf8;
