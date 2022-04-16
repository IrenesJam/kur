create database Shop;
use Shop;

create table Albums(
AlbumID varchar(20) primary key,
AlbName varchar(200) not null,
SingerName varchar(100) not null,
AlbDescription varchar(1000),
AlbPrice decimal(5,2) check(AlbPrice>0), 
Stock varchar(20),
ProQuantity int,
ReliseDate date,
ImgName varchar(20)
);

/*таблица в целом служит для организации группировки альбомов*/
create table Singers(
SingID varchar(20) primary key,
SingerName varchar(100) not null references Albums(SingerName),
SoloMF varchar(10)
);

create table Customers(
CusID int primary key auto_increment,
CusLogin varchar(200) not null,
CusName varchar(200) not null,
Country varchar(20),
CusEmail varchar(50) unique,
CusPass varchar(50) not null
);

create table Invoice(
InvID varchar(20) primary key,
CusID varchar(20) references Customers(CusID),
BuyDate date
);

create table Invoice_Album(
InvID varchar(20) references Invoice(InvID),
AlbID varchar(20) references Albums(AlbumID),
Quantity int check (Stock = 'В наличии')
);

create table Feedback(
CusID varchar(20) references Customers(CusID),
AlbumID varchar(20) references Albums(AlbumID),
Comments varchar(500),
DateofCom date
);

create table ManageAccount(
AccName varchar(20) primary key,
AccPass varchar(200) not null,
AccPhone varchar(100) not null,
AccCountry varchar(20),
AccEmail varchar(50) unique,
AccStatus varchar(20) check (AccStatus = 'активен' or AccStatus = 'не активен')
);


insert into Albums values
(234, 'I burn', '(G)I-DLE', 'описание', 84.90, 'Не в наличии', 0, '2022-04-20', 'iburn.jpg'),
(235, 'GUESS WHO', 'ITZY', 'описание', 89.90, 'Не в наличии', 0, '2022-04-21', 'loco.jpg'),
(236, 'Next Level', 'aespa', 'описание', 82.30, 'Не в наличии', 0, '2022-04-22', 'nextlevel.jpg'),
(237, 'Perfect World', 'TWICE', 'описание', 81.30, 'Не в наличии', 0, '2022-04-23', 'perfectworld.png'),
(238, 'Queendom', 'Red Velvet', 'описание', 90.90, 'Не в наличии', 0, '2022-04-20', 'queendom.jpg'),
(239, 'Savage', 'aespa', 'описание', 92.30, 'Не в наличии', 0, '2022-04-20', 'savage.png'),
(240, 'Alcohol-free', 'TWICE', 'описание', 81.50, 'Не в наличии', 0, '2022-04-20', 'alcofree.jpg'),
(241, 'Carnival', 'BVNDIT', 'описание', 77.50, 'Не в наличии', 0, '2022-04-20', 'carnival.jpg'),
(242, 'Cherry Rush', 'Cherry Bullet', 'описание', 77.40, 'Не в наличии', 0, '2022-04-20', 'cherryrush.jpg'),
(243, 'Dumhdurum', 'Apink', 'описание', 79.90, 'Не в наличии', 0, '2022-04-20', 'dumhdurum.jpg'),
(244, 'Helicopter', 'CLC', 'описание', 84.30, 'Не в наличии', 0, '2022-04-20', 'helicopter.jpg'),
(245, 'IM THE TREND', '(G)I-DLE', 'описание', 85.20, 'Не в наличии', 0, '2022-04-20','imthetrend.jpg'),
(246, 'INTO VIOLET', 'PURPLE KISS', 'описание', 83.20, 'Не в наличии', 0, '2022-04-20', 'intoviolet.jpg'),
(247, 'JACKPOT', 'Elris', 'описание', 76.60, 'Не в наличии', 0, '2022-04-20', 'jackpot.jpg'),
(248, 'LA DI DA', 'EVERGLOW', 'описание', 87.90, 'Не в наличии', 0, '2022-04-20', 'ladida.jpg'),
(249, 'Last Melody', 'EVERGLOW', 'описание', 86.80, 'Не в наличии', 0, '2022-04-20', 'lastmelody.jpg'),
(250, 'We are', 'Weekly', 'описание', 77.30, 'Не в наличии', 0, '2022-04-20', 'weare.jpg'),
(251, 'We can', 'Weekly', 'описание', 77.50, 'Не в наличии', 0, '2022-04-20', 'wecan.jpg'),
(252, 'We play', 'Weekly', 'описание', 73.30, 'Не в наличии', 0, '2022-04-20', 'weplay.jpg'),
(253, 'We ride', 'Brave Girls', 'описание', 81.30, 'Не в наличии', 0, '2022-04-20', 'weride.jpg');

insert into Albums values
(254, 'BOARDER: CARNIVAL', 'ENHYPEN', 'описание', 91.90, 'Не в наличии', 0, '2022-04-20', 'carnival.jpg'),
(255, 'NOEASY', 'Stray Kids', 'описание', 97.20, 'Не в наличии', 0, '2022-04-21', 'noisy.jpg'),
(256, 'Sticker', 'NCT 127', 'описание', 76.20, 'Не в наличии', 0, '2022-04-22', 'sticker.jpg'),
(257, 'BORDER: DAY ONE', 'ENHYPEN', 'описание', 91.60, 'Не в наличии', 0, '2022-04-23', 'boarderdayone.jpg'),
(258, 'FATAL LOVE', 'MONSTA X', 'описание', 77.50, 'Не в наличии', 0, '2022-04-20', 'fatallove.jpg'),
(259, 'GO生', 'Stray Kids', 'описание', 91.90, 'Не в наличии', 0, '2022-04-20', 'golive.jpg'),
(260, 'Cle: Levanter', 'Stray Kids', 'описание', 88.30, 'Не в наличии', 0, '2022-04-20', 'levanter.jpg'),
(261, 'MAP OF THE SOUL: 7', 'BTS', 'описание', 77.30, 'Не в наличии', 0, '2022-04-20', 'mapofthesoul7.jpg'),
(262, 'Cle 1: MIROH', 'Stray Kids', 'описание', 81.30, 'Не в наличии', 0, '2022-04-20', 'miroh.jpg'),
(263, 'MAP OF THE SOUL: PERSONA', 'BTS', 'описание', 78.90, 'Не в наличии', 0, '2022-04-20', 'persona.jpg'),
(264, 'Reload', 'NCT DREAM', 'описание', 82.30, 'Не в наличии', 0, '2022-04-20', 'reload.jpg'),
(265, 'NCT 2020: RESONANCE', 'NCT', 'описание', 85.20, 'Не в наличии', 0, '2022-04-20','resonance.jpg'),
(266, '; [Semicolon]', 'SEVENTEEN', 'описание', 82.60, 'Не в наличии', 0, '2022-04-20', 'semicolon.jpg'),
(267, 'Heng:garae', 'SEVENTEEN', 'описание', 82.60, 'Не в наличии', 0, '2022-04-20', 'seventeen.jpg'),
(268, 'SuperM', 'SuperM', 'описание', 83.30, 'Не в наличии', 0, '2022-04-20', 'superm.jpg'),
(269, 'Super One', 'SuperM', 'описание', 83.30, 'Не в наличии', 0, '2022-04-20', 'superone.jpg'),
(270, 'Chase', 'THE BOYZ', 'описание', 82.60, 'Не в наличии', 0, '2022-04-20', 'chase.jpg'),
(271, 'I DECIDE', 'IKON', 'описание', 87.50, 'Не в наличии', 0, '2022-04-20', 'idecide.jpg'),
(272, 'Reveal', 'THE BOYZ', 'описание', 83.30, 'Не в наличии', 0, '2022-04-20', 'reveal.jpg'),
(273, 'Into The Ice Age', 'MCND', 'описание', 81.30, 'Не в наличии', 0, '2022-04-20', 'iceage.jpg');

insert into Albums values
(274, 'Bambi', 'BAEKHYUN', 'описание', 86.90, 'Не в наличии', 0, '2022-04-20', 'bambi.jpg'),
(275, 'LALISA', 'LISA', 'описание', 71.60, 'Не в наличии', 0, '2022-04-21', 'lalisa.jpg'),
(276, 'Like Water', 'Wendy', 'описание', 71.50, 'Не в наличии', 0, '2022-04-22', 'likewater.jpg'),
(277, 'Querencia', 'CHUNG HA', 'описание', 81.20, 'Не в наличии', 0, '2022-04-23', 'querencia.jpg'),
(278, '1/6', 'SUNMI', 'описание', 77.50, 'Не в наличии', 0, '2022-04-20', '1-3.jpg'),
(279, 'LILAC', 'IU', 'описание', 81.90, 'Не в наличии', 0, '2022-04-20', 'lilac.jpg'),
(280, 'R', 'ROSE', 'описание', 88.00, 'Не в наличии', 0, '2022-04-20', 'r.jpg'),
(281, 'Hello', 'JOY', 'описание', 77.80, 'Не в наличии', 0, '2022-04-20', 'hello.jpg'),
(282, 'Im Not Cool', 'HyunA', 'описание', 81.70, 'Не в наличии', 0, '2022-04-20', 'imnotcool.jpg'),
(283, 'BAD LOVE', 'Key', 'описание', 88.10, 'Не в наличии', 0, '2022-04-20', 'badlove.jpg'),
(284, 'XOXO', 'JEON SOMI', 'описание', 80.30, 'Не в наличии', 0, '2022-04-20', 'xoxo.jpg'),
(285, 'Advice', 'Taemin', 'описание', 90.30, 'Не в наличии', 0, '2022-04-20','advice.jpg'),
(286, 'TAIL', 'SUNMI', 'описание', 86.90, 'Не в наличии', 0, '2022-04-20', 'tail.jpg'),
(287, 'Perfume', 'Yubin', 'описание', 71.60, 'Не в наличии', 0, '2022-04-20', 'perfume.jpg'),
(288, 'SET', 'Woodz', 'описание', 83.30, 'Не в наличии', 0, '2022-04-20', 'set.jpg'),
(289, 'riBBon', 'BamBam', 'описание', 82.40, 'Не в наличии', 0, '2022-04-20', 'ribbon.jpg'),
(290, 'MAGENTA', 'KANG DANIEL', 'описание', 79.90, 'Не в наличии', 0, '2022-04-20', 'magenta.jpg'),
(291, 'Maria', 'Hwa Sa', 'описание', 77.50, 'Не в наличии', 0, '2022-04-20', 'maria.jpg'),
(292, 'Pporappippam', 'SUNMI', 'описание', 73.80, 'Не в наличии', 0, '2022-04-20', 'pporappippam.jpg'),
(293, 'Purpose', 'TAEYEON', 'описание', 80.00, 'Не в наличии', 0, '2022-04-20', 'purpose.jpg');

insert into Singers values
(1, '(G)I-DLE', 'F'),
(2, 'ITZY', 'F'),
(3, 'aespa', 'F'),
(4, 'TWICE', 'F'),
(5, 'Red Velvet', 'F'),
(6, 'BVNDIT', 'F'),
(7, 'Cherry Bullet', 'F'),
(8, 'Apink', 'F'),
(9, 'CLC', 'F'),
(10, 'PURPLE KISS', 'F'),
(11, 'Elris', 'F'),
(12,'EVERGLOW', 'F'),
(13, 'Weekly', 'F'),
(14, 'Brave Girls', 'F'),

(15, 'ENHYPEN', 'M'),
(16, 'Stray Kids', 'M'),
(17, 'NCT 127', 'M'),
(18, 'MONSTA X', 'M'),
(19, 'BTS', 'M'),
(20, 'NCT DREAM', 'M'),
(21, 'SEVENTEEN', 'M'),
(22, 'SuperM', 'M'),
(23, 'THE BOYZ', 'M'),
(24, 'IKON', 'M'),
(25, 'MCND', 'M'),

(26, 'BAEKHYUN', 'Solo'),
(27, 'LISA', 'Solo'),
(28, 'Wendy', 'Solo'),
(29, 'CHUNG HA', 'Solo'),
(30, 'SUNMI', 'Solo'),
(31, 'IU', 'Solo'),
(32, 'ROSE', 'Solo'),
(33, 'JOY', 'Solo'),
(34, 'HyunA', 'Solo'),
(35, 'Key', 'Solo'),
(36, 'JEON SOMI', 'Solo'),
(37, 'Taemin', 'Solo'),
(38, 'Yubin', 'Solo'),
(39, 'Woodz', 'Solo'),
(40, 'BamBam', 'Solo'),
(41, 'KANG DANIEL', 'Solo'),
(42, 'Hwa Sa', 'Solo'),
(43, 'TAEYEON', 'Solo')
;


insert into Feedback values
(1, 234, 'Быстрая доставка', '2022-01-25'),
(2, 235, 'Приятные подарки', '2022-01-25'),
(3, 236, 'Обратная свзяь это что-то', '2022-01-25');


select * from customers;

SELECT * FROM Albums
LEFT JOIN Singers on Singers.SingerName = Albums.SingerName
WHERE SoloMF = 'F'
order by ReliseDate;
