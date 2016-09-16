-- CREATE database lostnfound;
USE lostnfound;

CREATE TABLE user(
	email char(254) NOT NULL,
	Primary key(email),
	trust int,
	phone char(10),
	name char(20),
	password char(8));
	
create table useradmin (
	email char(254) not null,
	privileges char(10),
	primary key (email),
	
	constraint 
	foreign key (email) 
	references user(email)
	on delete cascade
);

create table location (
	address char(50),
	postal_code char(6),
	city char(80),
	province char(25),
	description varchar(500),
	primary key(address));
    
create table itemtype (
	type char(20),
	primary key(type));

create table item (
	id int,
	description varchar(500),
	type char(20),
	primary key(id),

	constraint 
	foreign key (type) 
	references itemtype(type)
	on delete cascade);
    
create table reward (
	id int,
	description varchar(500),
	primary key (id));
    

create table lost (
	item_id int,
	date long,
	location char(50),
	reward_id int,
	email char(254),
	primary key (item_id, email),
	foreign key (location) references location(address),
	
	constraint 
	foreign key (email) 
	references user(email)
	on delete cascade,

	constraint 
	foreign key (reward_id) 
	references reward(id)
	on delete cascade,
	
	constraint 
	foreign key (item_id) 
	references item(id)
	on delete cascade
);

create table found (
	item_id int,
	date long,
	location char(50),
	email char(254),
	primary key(item_id, email),
	foreign key (location) references location(address),
	
	constraint 
	foreign key (email) 
	references user(email)
	on delete cascade,

	constraint 
	foreign key (item_id) 
	references item(id)
	on delete cascade
);


    
/*Initial Database Insertions*/	
	
/*User insertions*/
INSERT INTO user(email, trust, phone, name, password)
Values('mick@sayson.com', '2','1222222222', 'Mick Sayson','mick');

INSERT INTO user(email, trust, phone, name, password)
Values('nick@wong.com', '1', '1233333333', 'nick', 'nick');

INSERT INTO user(email, trust, phone, name, password)
Values('chris@yu.com', '2', '1234555555', 'chris', 'chris');

INSERT INTO user(email, trust, phone, name, password)
Values('calvin@chan.com', '3', '1234566666', 'calvin', 'calvin');

INSERT INTO user(email, trust, phone, name, password)
Values('daniel@chong.com', '4', '1234567777', 'daniel', 'daniel');

INSERT INTO user(email, trust, phone, name, password)
Values('brendan@lau.com', '4', '1234567888', 'brendan', 'brendan');


/*Item type insertions*/
Insert into itemtype ( type )
Values('book');

Insert into itemtype ( type )
Values('wallet');

Insert into itemtype ( type )
Values('duffle bag');

Insert into itemtype ( type )
Values('backpack');

Insert into itemtype ( type )
Values('cellphone');

Insert into itemtype ( type )
Values('wire stripper');

Insert into itemtype ( type )
Values('motor toothbrush');


/*Item insertions*/
Insert into item(id, description, type)
Values('1', 'Harry Potter', 'book');

Insert into item(id, description, type)
Values('2', 'Money', 'wallet');

Insert into item(id, description, type)
Values('3', 'Big, Thick, Long, Black', 'duffle bag');

Insert into item(id, description, type)
Values('4', 'Big, Black', 'backpack');

Insert into item(id, description, type)
Values('5', 'Long, Thin, Black', 'cellphone');

Insert into item(id, description, type)
Values('6', 'purple', 'wire stripper');

Insert into item(id, description, type)
Values('7', 'pink', 'motor toothbrush');

Insert into item(id, description, type)
Values('8', 'Harry Potter', 'book');


/*For division query mick found all items*/
Insert into item(id, description, type)
Values('9', 'Money', 'wallet');

Insert into item(id, description, type)
Values('10', 'Big, Thick, Long, Black', 'duffle bag');

Insert into item(id, description, type)
Values('11', 'Big, Black', 'backpack');

Insert into item(id, description, type)
Values('12', 'Long, Thin, Black', 'cellphone');

Insert into item(id, description, type)
Values('13', 'purple', 'wire stripper');

Insert into item(id, description, type)
Values('14', 'pink', 'motor toothbrush');

Insert into item(id, description, type)
Values('15', 'Harry Potter', 'book');



/*Reward insertions*/
Insert into reward(id, description)
Values('1', '20 bucks');

Insert into reward(id, description)
Values('2', 'dinner');

Insert into reward(id, description)
Values('3', 'Interview at H.A.N.D.');

Insert into reward(id, description)
Values('4', 'high five');


/*Location insertions*/
Insert into location( address, postal_code, city, province, description)
Values('Library Lane', 'a0a0a0', 'vancouver','bc', 'magical');

Insert into location( address, postal_code, city, province, description)
Values('Mall Street', 'a0a0a0', 'burnaby', 'bc', 'entertainment');

Insert into location( address, postal_code, city, province, description)
Values('Hastings Street', 'a0a0a0', 'east vancouver', 'bc', 'dirty');

Insert into location( address, postal_code, city, province, description)
Values('Main Mall', 'a9a9a9', 'west vancouver', 'bc', '24/7 construction');


/*Lost insertions*/
Insert into lost (item_id, date, location, reward_id, email)
Values('1', '032716', 'Library Lane', '1', 'mick@sayson.com');

Insert into lost (item_id, date, location, reward_id, email)
Values('2', '032716', 'Mall Street', '4', 'nick@wong.com');

Insert into lost (item_id, date, location, reward_id, email)
Values('3', '032716', 'Hastings Street', '3', 'calvin@chan.com');

Insert into lost (item_id, date, location, reward_id, email)
Values('4', '032716', 'Main Mall', '1', 'chris@yu.com');

Insert into lost (item_id, date, location, reward_id, email)
Values('6', '032716', 'Hastings Street', '2', 'brendan@lau.com');

Insert into lost (item_id, date, location, reward_id, email)
Values('7', '032716', 'Hastings Street', '1', 'calvin@chan.com');




/*Found insertions*/
Insert into found (item_id, date, location, email)
Values('4', '032716', 'Mall Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('3', '032716', 'Hastings Street', 'nick@wong.com');

Insert into found (item_id, date, location, email)
Values('1', '032716', 'Main Mall', 'nick@wong.com');

Insert into found (item_id, date, location, email)
Values('2', '032716', 'Hastings Street', 'daniel@chong.com');

Insert into found (item_id, date, location, email)
Values('5', '032716', 'Hastings Street', 'daniel@chong.com');

Insert into found (item_id, date, location, email)
Values('8', '032716', 'Library Lane', 'chris@yu.com');

/*For division query; Mick has found all item types*/
Insert into found (item_id, date, location, email)
Values('9', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('10', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('11', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('12', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('13', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('14', '032716', 'Hastings Street', 'mick@sayson.com');

Insert into found (item_id, date, location, email)
Values('15', '032716', 'Hastings Street', 'mick@sayson.com');


SELECT * FROM user;
SELECT * FROM itemtype;
Select * from item;
Select * from lost;
Select * from found;


-- selection and projection query
select email, phone name
from user; 

-- join query
select U.email, I.type 
from user U, item I, Lost L
where U.email = L.user AND L.id = I.id;

-- aggregation query
select avg(trust)
from user;


-- nested aggregation with group by
/*lists users that have the same trust with 
at least one other user*/
select email, trust
from user
where trust in (
	select trust 
	from user  
    group by trust 
    having count(*) > 1);

/*same as above, but pairs the users side by side*/
create view v as 
select email, trust
from user  
where trust in (
	select trust 
	from user  
    group by trust 
    having count(*) > 1);

select * 
from v v1, v v2
where v1.trust = v2.trust AND v1.email <> v2.email;
	
	

-- left outer join query
/*matches users that found and lost an item*/
select f.email as foundUser, l.email as lostUser
from found f left outer join lost l
on f.item_id = l.item_id; 

-- right outer join query
/*matches users that found and lost an item*/
select f.email as foundUser, l.email as lostUser
from found f right outer join lost l
on f.item_id = l.item_id; 


-- inner join query
/*matches users that found and lost an item*/
select f.email as foundUser, l.email as lostUser
from found f inner join lost l
on f.item_id = l.item_id; 


--division query
/*Finds all users that found all items*/
select * 
from found
where email in (
	select email 
	from (
		select user.email, count(distinct user.email , item.type) as count 
		from user, found, item 
		where found.email = user.email and found.item_id = item.id 
		group by user.email) 	as type_count 
	where type_count.count = (
		select count(*) 
		from itemtype)
);










