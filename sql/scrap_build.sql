# scrap & bulid sql
# 

drop database twoweeter;
create database twoweeter;
grant all on twoweeter.* to developer@localhost;

use twoweeter;
source schema.sql;
