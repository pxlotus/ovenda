create Database oshop_db;
use Database oshop_db;
create table productBrand(
    brandId varchar(55) PRIMARY KEY,
    brandName varchar(255),
    brandPic varchar(255),
    date_created varchar(255)
);
create table productMainCategory(
    mcId varchar(55) PRIMARY KEY,
    name varchar(255),
    mcPic varchar(255),
    date_created varchar(255)
);

create table productCategory(
    categoryId varchar(55) PRIMARY KEY,
    mcId varchar(55) not null,
    categoryName varchar(255),
    categoryPic varchar(255),
    date_created varchar(255),
    foreign key (mcId) references productMainCategory(mcId)
);

create table productSubcategory(
    subcategoryId varchar(55) PRIMARY KEY,
    categoryId varchar(55) not null,
    subName varchar(255),
    subPic varchar(255),
    date_created varchar(255),
    foreign key (categoryId) references productCategory(categoryId)
);
create table product(
    productId varchar(55) PRIMARY KEY,
    brandId varchar(55) not null,
    subcategoryId varchar(55) not null,
    pName varchar(255),
    price varchar(255),
    description text,
    availability boolean,
    quantity varchar(255),
    main_pic varchar(255),
    hover_pic varchar(255),
    topSales boolean,
    flashSales boolean,
    topRated boolean,
    weekDeals boolean,
    date_created varchar(255),
    foreign key (subcategoryId) references productSubcategory(subcategoryId),
    foreign key (brandId) references productBrand(brandId)
);
create table productVariants(
    variantsId varchar(55) PRIMARY KEY,
    productId varchar(55) not null,
    color varchar(255),
    size varchar(255),
    weight varchar(255),
    volume varchar(255),
    date_created varchar(255),
    foreign key (productId) references product(productId)
);

create table productImages(
    pImagesId varchar(55) PRIMARY KEY,
    productId varchar(55) not null,
    file_name varchar(255),
    date_created varchar(255),
    foreign key (productId) references product(productId)
);


  CREATE TABLE userLogin (
  usrId varchar(55) PRIMARY KEY,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  accStatus boolean NOT NULL DEFAULT 1,
  dateCreated date NOT NULL
  );

CREATE TABLE userProfile (
  usrProId varchar(55) PRIMARY KEY,
  usrId varchar(55) NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(25) NOT NULL,
  address varchar(255) NOT NULL,
  photo varchar(255) NULL,
  dateCreated date NOT NULL,
  foreign key (usrId) references userLogin(usrId)
);

CREATE TABLE userCart (
  cartId varchar(55) PRIMARY KEY,
  usrId varchar(55) NOT NULL,
  productId varchar(55) NOT NULL,
  quantityAdded varchar(255) NOT NULL,
  productPrice varchar(255) NOT NULL,
  productSubtotal varchar(255) NOT NULL,
  dateCreated date NOT NULL,
  foreign key (usrId) references userLogin(usrId),
  foreign key (productId) references product(productId)

);
CREATE TABLE userCart (
  cartId varchar(55) PRIMARY KEY,
  usrId varchar(55) NOT NULL,
  productId varchar(55) NOT NULL,
  quantityAdded varchar(255) NOT NULL,
  productPrice varchar(255) NOT NULL,
  productSubtotal varchar(255) NOT NULL,
  dateCreated date NOT NULL,
  foreign key (usrId) references userLogin(usrId),
  foreign key (productId) references product(productId)

);

CREATE TABLE userBillingAddress (
  billId varchar(55) PRIMARY KEY,
  usrId varchar(55) NOT NULL,
  location varchar(255) NOT NULL,
  street varchar(255) NULL,
  district varchar(255) NOT NULL,
  phone varchar(255) NOT NULL,
  deliveryPreference varchar(255) NOT NULL,
  dateCreated date NOT NULL,
  foreign key (usrId) references userLogin(usrId)
);

CREATE TABLE userOrder (
  orderId varchar(55) PRIMARY KEY,
  cartId varchar(55) NOT NULL,
  usrId varchar(55) NOT NULL,
  subtotal varchar(255) NOT NULL,
--   Order Payment status
  status varchar(255) NOT NULL,
  orderProgress varchar(255) NOT NULL,
  dateCreated date NOT NULL,
  foreign key (cartId) references userCart(cartId),
  foreign key (usrId) references userLogin(usrId)
);

CREATE TABLE orderPayments (
  paymentId varchar(55) PRIMARY KEY,
  orderId varchar(55) NOT NULL,
  usrId varchar(55) NOT NULL,
  billId varchar(55) NOT NULL,
  paymentOption varchar(255) NOT NULL,
  totalAmount varchar(255) NOT NULL,
--   Order Payment status
  paymentStatus varchar(255) NOT NULL,
  dateCreated date NOT NULL,
  foreign key (orderId) references userOrder(orderId),
  foreign key (usrId) references userLogin(usrId),
  foreign key (billId) references userBillingAddress(billId)
);

create table usrAdmin(
    Id int(11) PRIMARY KEY AUTO_INCREMENT,
    user varchar(255),
    password varchar(255)
);

CREATE TABLE `clientsFeedbacks` (
  `feedId` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateCreated` date DEFAULT NULL
);

CREATE TABLE `newsBlogs` (
  `blogId` varchar(55) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `blogpic` varchar(255) DEFAULT NULL,
  `otherpic` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL
);