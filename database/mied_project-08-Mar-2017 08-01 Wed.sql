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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO accounts_tbl VALUES("14","Bobila","John Paul","Bobila","Jaypiiie15","$2y$10$0b5NJjvQb3JA6bRdNbbpg.d91H5UyvsQkHFUVvr0JOJqNSH.0WmBa","0");
INSERT INTO accounts_tbl VALUES("15","sample","sample","sample","administrator","$2y$10$YZJyxVoLW8CdYon0JBsKfOgHtgGl3e6nB75mH9frF8IHxY33UQbBS","0");
INSERT INTO accounts_tbl VALUES("16","villareal","marianne","villareal","mjvillareal","$2y$10$J19kdoIRaiLEE88rD67byu8C/Z0mbYrzfqaivpyhtyihLeP37SKse","0");



DROP TABLE IF EXISTS commodity;

CREATE TABLE `commodity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO commodity VALUES("1","Chicken");
INSERT INTO commodity VALUES("2","Chicken");
INSERT INTO commodity VALUES("3","Chicken");
INSERT INTO commodity VALUES("4","Chicken");
INSERT INTO commodity VALUES("5","Chicken");
INSERT INTO commodity VALUES("6","Pork");
INSERT INTO commodity VALUES("7","Beef");



DROP TABLE IF EXISTS country;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO country VALUES("1","sample");
INSERT INTO country VALUES("2","Canada");
INSERT INTO country VALUES("3","USA");
INSERT INTO country VALUES("4","Ireland");



DROP TABLE IF EXISTS cut_type;

CREATE TABLE `cut_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cut` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO cut_type VALUES("1","demo");
INSERT INTO cut_type VALUES("2","Chicken Leg Quarter");
INSERT INTO cut_type VALUES("3","MDM Chicken");
INSERT INTO cut_type VALUES("4","Beef Body Fats Fz");



DROP TABLE IF EXISTS hs_code;

CREATE TABLE `hs_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO hs_code VALUES("1","0001");
INSERT INTO hs_code VALUES("2","0002");
INSERT INTO hs_code VALUES("3","0003");
INSERT INTO hs_code VALUES("4","0004");
INSERT INTO hs_code VALUES("5","#03 - 030817");



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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO meat_cuts VALUES("5","Chicken","Chicken Leg Quarter","0001","10","Chicken Joy","Canada","../../images/0Primary Packaging.JPG","");
INSERT INTO meat_cuts VALUES("6","sample","Chicken Leg Quarter","0001","sadas","asdasdas","Canada","../../images/011.png","");
INSERT INTO meat_cuts VALUES("7","sample","Chicken Leg Quarter","0001","sadas","asdasdas","Canada","../../images/112.png","");
INSERT INTO meat_cuts VALUES("8","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/0IMG_1723.JPG","");
INSERT INTO meat_cuts VALUES("9","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/1IMG_1724.JPG","");
INSERT INTO meat_cuts VALUES("10","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/2IMG_1725.JPG","");
INSERT INTO meat_cuts VALUES("11","sample","Chicken Leg Quarter","0002","esfdsf","sdfsdfsdf","Canada","../../images/3IMG_1726.JPG","");
INSERT INTO meat_cuts VALUES("12","Chicken","MDM Chicken","0003","Tyson P-248","frozen MDM","USA","../../images/0IMG_0220.JPG","");
INSERT INTO meat_cuts VALUES("13","Chicken","MDM Chicken","0003","Tyson P-248","frozen MDM","USA","../../images/1IMG_0221.JPG","");
INSERT INTO meat_cuts VALUES("14","Chicken","MDM Chicken","0003","Tyson P-248","frozen MDM","USA","../../images/2IMG_0225.JPG","");
INSERT INTO meat_cuts VALUES("15","Beef","Beef Body Fats Fz","0004","IE 368","no hs code","Ireland","../../images/0IMG_0230.JPG","");
INSERT INTO meat_cuts VALUES("16","Beef","Beef Body Fats Fz","0004","IE 368","no hs code","Ireland","../../images/1IMG_0231.JPG","");
INSERT INTO meat_cuts VALUES("17","Beef","Beef Body Fats Fz","0004","IE 368","no hs code","Ireland","../../images/2IMG_0232.JPG","");
INSERT INTO meat_cuts VALUES("18","Beef","Beef Body Fats Fz","0004","IE 368","no hs code","Ireland","../../images/3IMG_0234.JPG","");
INSERT INTO meat_cuts VALUES("19","Beef","Beef Body Fats Fz","0004","IE 368","no hs code","Ireland","../../images/0Untitled-2.png","");
INSERT INTO meat_cuts VALUES("20","Chicken","Chicken Leg Quarter","#03 - 030817","Pilgrims P-17340","no hs code","USA","../../images/0IMG_0236.JPG","");
INSERT INTO meat_cuts VALUES("21","Chicken","Chicken Leg Quarter","#03 - 030817","Pilgrims P-17340","no hs code","USA","../../images/1IMG_0238.JPG","");
INSERT INTO meat_cuts VALUES("22","Chicken","Chicken Leg Quarter","#03 - 030817","Pilgrims P-17340","no hs code","USA","../../images/2IMG_0239.JPG","");
INSERT INTO meat_cuts VALUES("23","Chicken","Chicken Leg Quarter","#03 - 030817","Pilgrims P-17340","no hs code","USA","../../images/3IMG_0243.JPG","");
INSERT INTO meat_cuts VALUES("24","Beef","Beef Body Fats Fz","0001","","","sample","../../images/0Banner Website_FIN.png","");
INSERT INTO meat_cuts VALUES("25","Chicken","Chicken Leg Quarter","0001","1234","","USA","../../images/0IMG_0321.JPG","");



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



