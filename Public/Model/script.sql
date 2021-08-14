


CREATE TABLE Product (
  IdProduct INT(11) auto_increment,
  Code VARCHAR(20) NOT NULL,
  weight DECIMAL(7,2) NOT NULL,
  MilkProduct  INT(11) NOT NULL,
  PRIMARY KEY (IdProduct)
); 


INSERT INTO Product (Code, weight, MilkProduct) VALUES
('AAAB', 456.7, 30),
('AAAC', 416.7, 31),
('AAAD', 426.7, 32),
('AAAE', 446.7, 33),
('AAAF', 436.7, 34),
('AAAG', 496.7, 35),
('AAAH', 476.7, 36),
('AAAI', 426.7, 37),
('AAAJ', 416.7, 38),
('AAAK', 356.7, 39),
('AAAL', 556.7, 40),
('AAAM', 756.7, 41),
('AAAN', 856.7, 42),
('AAAO', 356.7, 43),
('AAAP', 356.7, 44),
('AAAQ', 356.7, 45),
('AAAH', 356.7, 46),
('AAAR', 356.7, 47),
('AAAS', 356.7, 34),
('AAAT', 356.7, 33),
('AAAU', 356.7, 32);