# TwoWeeter

# users
# drop table if exists users;
create table if not exists users (
    id bigint not null primary key auto_increment, 
    screen_name varchar(100) unique not null,
    icon_url varchar(100),
    is_registered boolean not null default 0,
    created datetime not null,
    modified datetime
) engine = InnoDB default charset=utf8;

# user_details
create table if not exists user_details (
    id int not null primary key auto_increment,
    user_id bigint not null unique,
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
    id int not null primary key auto_increment,
    user_id int not null,
    following_user_id int not null
) engine=InnoDB default charset=utf8;

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
) engine=InnoDB default charset=utf8;
