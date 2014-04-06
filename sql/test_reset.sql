# scrap & bulid sql
# 

drop database if exists test_twoweeter;
create database if not exists test_twoweeter;
grant all on test_twoweeter.* to tester@localhost;

use test_twoweeter;
source schema.sql;
