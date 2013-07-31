create database omnitech;
use omnitech;
create table main_catalog (id int(3) not null auto_increment,
                           tabimage varchar(40),
                           tabp varchar(100),
                           tabpurl varchar(40),
                           tabsuburl varchar(40),
                           primary key (id)
                           );

insert into main_catalog values (1,'Access Control System.jpg','this is Access Control System class.....','access_control_ system.php','access_control_ system.php'); 


create table class (classid int(3) not null auto_increment,
                    classimage varchar(40),
                    classname varchar(40),
                    primary key (classid)
                    );
                                         