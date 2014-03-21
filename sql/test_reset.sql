# scrap & bulid sql
# 

drop database if exists test_twoweeter;
create database test_twoweeter;
grant all on test_twoweeter.* to developer@localhost;

use test_twoweeter;
source schema.sql;
