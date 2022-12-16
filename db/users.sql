create table users(
    uid INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    user_type INT (1) NOT NULL,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT current_timestamp,
    updated_at TIMESTAMP DEFAULT current_timestamp ON UPDATE current_timestamp,
    PRIMARY KEY(uid)
);

insert into users(first_name, last_name, user_type, email, password)
values(
    "wecare",
    "wecare",
    0,
    "wecare@gmail.com",
    "$2y$12$7S1HPuDo6OczFWesberIhuaxLCy54BaD.pTXN0GbFJHt5MIAIOYZ."
);