use book;

insert into customers values
(4, 'Julie Smith', '25 Oak Street', 'Airport West'),
(5, 'Alan Wong', '1/47 Haines Avenue', 'Box Hill'),
(6, 'Michelle Arthur', '357 North Road', 'Yarraville');

insert into orders values 
(NULL, 3, 69.98, '2007-04-02'),
(NULL, 1, 49.99, '2007-04-15'),
(NULL, 2, 74.89, '2007-04-19'),
(NULL, 3, 24.99, '2007-05-01');

insert into books values
('0-672-31697-8', 'Micheal Morgan', 'Java', 34.99),
('0-672-31745-1', 'Thomas Down', 'Debain', 24.99),
('0-672-31509-2', 'Pruitt', 'GIMP', 24.99),
('0-672-31769-9', 'Schenk', 'OpenLinux', 49.99);

insert into order_items values 
(1, '0-672-31697-8', 2),
(2, '0-672-31769-9', 1),
(3, '0-672-31769-9', 1),
(3, '0-672-31509-2', 1),
(4, '0-672-31745-1', 3);

insert into book_reviews values
('0-672-31697-8', 'It is a Java basic book');



