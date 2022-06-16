create table users(

user_id int(11) AUTO_INCREMENT Primary key not null	,	
user_fullname	varchar(256)	not null	,	
user_email	varchar(256)	not null	,	
user_pwd	varchar(256)	not null	,	
created_at	datetime   DEFAULT CURRENT_TIMESTAMP,
last_seen	datetime   DEFAULT CURRENT_TIMESTAMP
);


create table products(

	pid int AUTO_INCREMENT Primary key not null,
	product_name varchar(300), 
	product_description text ,
	product_price decimal(6,2) not null,
	category varchar(200) not null,
	create_at datetime   DEFAULT CURRENT_TIMESTAMP,
	update_at datetime   DEFAULT CURRENT_TIMESTAMP
)


create table categories(

	cid int auto_increment primary key not null,
	category_name varchar(200)
	create_at datetime   DEFAULT CURRENT_TIMESTAMP,
        update_at datetime   DEFAULT CURRENT_TIMESTAMP
);


create table cart(
	cart_id int auto_increment primary key not null,
	product_id int not null,
	created_at datetime   DEFAULT CURRENT_TIMESTAMP,
	updated_at datetime   DEFAULT CURRENT_TIMESTAMP
);
create table admin(
	admin_id int auto_increment primary key not null,
	admin_name varchar(256)    not null,
	admin_email varchar(256)    not null,
	admin_pwd  varchar(256)    not null
	created_at datetime   DEFAULT CURRENT_TIMESTAMP,
	updated_at datetime   DEFAULT CURRENT_TIMESTAMP
);

