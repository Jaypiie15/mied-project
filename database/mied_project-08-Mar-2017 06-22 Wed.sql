DROP TABLE IF EXISTS accounts_tbl;

CREATE TABLE `accounts_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO accounts_tbl VALUES("14","Bobila","John Paul","Bobila","Jaypiiie15","$2y$10$0b5NJjvQb3JA6bRdNbbpg.d91H5UyvsQkHFUVvr0JOJqNSH.0WmBa","0");
INSERT INTO accounts_tbl VALUES("15","sample","sample","sample","administrator","$2y$10$YZJyxVoLW8CdYon0JBsKfOgHtgGl3e6nB75mH9frF8IHxY33UQbBS","0");



DROP TABLE IF EXISTS commodity;

CREATE TABLE `commodity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO commodity VALUES("1","sample");
INSERT INTO commodity VALUES("2","sample");
INSERT INTO commodity VALUES("3","Chicken");



DROP TABLE IF EXISTS country;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO country VALUES("1","sample");
INSERT INTO country VALUES("2","Canada");



DROP TABLE IF EXISTS cut_type;

CREATE TABLE `cut_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cut` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO cut_type VALUES("1","demo");
INSERT INTO cut_type VALUES("2","Chicken Leg Quarter");



DROP TABLE IF EXISTS hs_code;

CREATE TABLE `hs_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO hs_code VALUES("1","0001");
INSERT INTO hs_code VALUES("2","0002");



DROP TABLE IF EXISTS meat_cuts;

CREATE TABLE `meat_cuts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kind` varchar(255) NOT NULL,
  `cut_type` varchar(255) NOT NULL,
  `hscode` varchar(255) NOT NULL,
  `name_number` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `show` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO meat_cuts VALUES("1","sample","","demo","12345","","sample","../../images/0IMG_1727.JPG","");
INSERT INTO meat_cuts VALUES("2","sample","","demo","12345","","sample","../../images/1IMG_1730.JPG","");
INSERT INTO meat_cuts VALUES("3","sample","","demo","12345","","sample","../../images/2IMG_1732.JPG","");
INSERT INTO meat_cuts VALUES("4","sample","","demo","12345","","sample","../../images/3IMG_1734.JPG","");
INSERT INTO meat_cuts VALUES("5","Chicken","Chicken Leg Quarter","0001","10","Chicken Joy","Canada","../../images/0Primary Packaging.JPG","");
INSERT INTO meat_cuts VALUES("6","sample","Chicken Leg Quarter","0001","sadas","asdasdas","Canada","../../images/011.png","");
INSERT INTO meat_cuts VALUES("7","sample","Chicken Leg Quarter","0001","sadas","asdasdas","Canada","../../images/112.png","");
INSERT INTO meat_cuts VALUES("8","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/0IMG_1723.JPG","");
INSERT INTO meat_cuts VALUES("9","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/1IMG_1724.JPG","");
INSERT INTO meat_cuts VALUES("10","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/2IMG_1725.JPG","");
INSERT INTO meat_cuts VALUES("11","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/3IMG_1726.JPG","");



DROP TABLE IF EXISTS title_footer;

CREATE TABLE `title_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mini_name` varchar(255) NOT NULL,
  `footer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO title_footer VALUES("2","Meat Cut Catalogue","Meat Cut Catalogue","MCC","National Meat Inspection Services   Meat Cuts Catalogue  @2017");



