# TwoWeeter

# users
# drop table if exists users;
create table if not exists users (
    id bigint unsigned not null primary key, 
    screen_name varchar(15) unique not null,
    name varchar(20) not null,
    icon_url varchar(100),
    is_registered boolean not null default 0,
    created datetime not null,
    modified datetime
) engine = InnoDB default charset=utf8;

# user_details
create table if not exists user_details (
    id bigint unsigned not null primary key auto_increment,
    user_id bigint unsigned not null unique,
    access_token varchar(100) not null,
    access_token_secret varchar(100) not null,
    last_login datetime,
    created datetime not null,
    modified datetime,
    foreign key(user_id) references users(id)
) engine = InnoDB default charset=utf8;

# follows
# drop table if exists follows; 
create table if not exists follows (
    id bigint not null primary key auto_increment,
    user_id bigint not null,
    following_user_id bigint not null
) engine=InnoDB default charset=utf8;

# tweets
# drop table if exists tweets;
create table if not exists tweets (
    id bigint unsigned not null primary key,
    user_id int not null,
    tweet varchar(145) not null,
    is_tweeted boolean not null default 0,
    tweet_date datetime not null,
    created datetime not null,
    modified datetime
) engine=InnoDB default charset=utf8;
