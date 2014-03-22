# scrap & bulid sql
# 

drop database if exists twoweeter;
create database if not exists twoweeter;
grant all on twoweeter.* to developer@localhost;

use twoweeter;
source schema.sql;
