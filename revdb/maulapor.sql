# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.39)
# Database: maulapor
# Generation Time: 2016-08-21 09:37:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table article
# ------------------------------------------------------------

CREATE TABLE `article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL DEFAULT '0',
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `FK_article_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table ci_sessions
# ------------------------------------------------------------

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`)
VALUES
	('0081fd5dc82be812246aead2d9339e9178312002','::1',1466847377,'__ci_last_regenerate|i:1466847090;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('0086167d58ccef54f9124763a90e41a8dccbda84','::1',1466876228,'__ci_last_regenerate|i:1466876161;sess_expiration|i:7200;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('026015dd19b5629ba654907b9fccf58547f839b4','::1',1465900934,'__ci_last_regenerate|i:1465900701;'),
	('0312dca8e230e32a0923f4a95fbfe938bc47258a','::1',1464342213,'__ci_last_regenerate|i:1464341938;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('034578f9e13c9830078d4e582bc84d0b24568500','::1',1464620596,'__ci_last_regenerate|i:1464620596;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('03ed92d8340877c445b36140c941bee27e00b851','::1',1471589658,'__ci_last_regenerate|i:1471589473;'),
	('049fcc4eae4a704bf70aa74663a30709868ae111','::1',1464622888,'__ci_last_regenerate|i:1464622603;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('05e30ebaa9d1a41180bc2f5a596fdbd3923e99bb','::1',1466687267,'__ci_last_regenerate|i:1466687177;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('067688764214b23d50e3b09eab917ebe89a99431','::1',1464615438,'__ci_last_regenerate|i:1464615160;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('06d3088121f3bb3c8c530f095d1e16cedb79361c','::1',1464198531,'__ci_last_regenerate|i:1464198241;'),
	('0729435f72055efcc1a9250aeeb320b359e114f4','::1',1464611522,'__ci_last_regenerate|i:1464611344;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('07461e8744f71468376219423c8752f2ae26f6f3','::1',1464620268,'__ci_last_regenerate|i:1464620264;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('08a9d4d687956a2f99651e9f67cf75aa732024a1','::1',1466677668,'__ci_last_regenerate|i:1466677586;'),
	('09642034e0c43542dc58272cddce4833d45d13af','::1',1464615103,'__ci_last_regenerate|i:1464614807;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('0a633ffe6c9ae0caafb4e9e4cb965e4dd6358119','::1',1464335460,'__ci_last_regenerate|i:1464335460;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('0afc4fd1ee0dd4e4c9b567b56d27eb82d15cff25','::1',1464363496,'__ci_last_regenerate|i:1464363238;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('0b0191cc782b01e76f8a3b1bb1930d32c75fd638','::1',1466686176,'__ci_last_regenerate|i:1466685941;'),
	('0b1ac77816e7a47331a7546b0567c65b0e8ef222','::1',1466846503,'__ci_last_regenerate|i:1466846225;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('0b7c8f270a581488ef157677b852c321906fd8b4','::1',1464665071,'__ci_last_regenerate|i:1464664833;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('0c05265f47af4ad903a43807a5dcd61674aff58e','::1',1464379800,'__ci_last_regenerate|i:1464379612;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('0ccdf90797473bc93ceb32b39d59570b93a47ddb','::1',1464420442,'__ci_last_regenerate|i:1464420319;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('0cdf370aa5d28d77cf9337350c96161d04ef9452','::1',1466675115,'__ci_last_regenerate|i:1466675106;'),
	('0d1b8ea92f66e8ce20da661f4adbfaac3130a626','::1',1466763620,'__ci_last_regenerate|i:1466763618;'),
	('0e8ab9ce5a399341b98bd890350f6eb91b6e0140','::1',1466757228,'__ci_last_regenerate|i:1466757218;'),
	('0ec4d29e64df4d295a3ef4c7fbd6e8020ea1bef7','::1',1466676838,'__ci_last_regenerate|i:1466676752;'),
	('0f87a265ffaaec9b3b6fb25e4734922472d71b17','::1',1464623043,'__ci_last_regenerate|i:1464622905;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('0f9a87fc1d22178586a27d8dd128dfc9f09d0683','::1',1464613601,'__ci_last_regenerate|i:1464613536;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('101b3625cae2387574357b34586ed99bcbd3dac3','::1',1466838835,'__ci_last_regenerate|i:1466838535;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('10657c46ef79ee96118db877f8fea62d06019729','::1',1471241283,'__ci_last_regenerate|i:1471241076;'),
	('12ac09ee802524b0883794db912a88940722b2a8','::1',1464349933,'__ci_last_regenerate|i:1464349758;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('136dda6fc1ba39c9c9d340ee96f0b39e7d3c1fd7','::1',1464421718,'__ci_last_regenerate|i:1464421458;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('139156bfb56e632dda2206e3abb0d8f73fa3c0f9','::1',1464676768,'__ci_last_regenerate|i:1464676616;'),
	('16013c16129e8ab46b015edb06d23f2e831b9b6c','::1',1464666269,'__ci_last_regenerate|i:1464666261;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('16ca4c08691d2b6fe11e2fc70ba3cd399bcdb12b','::1',1465899821,'__ci_last_regenerate|i:1465899562;'),
	('178280b22a61943075924e58889abac2cbc7a043','::1',1464433079,'__ci_last_regenerate|i:1464432905;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('18cadca4e5cea84b8d74aa150cd9d1845c16b7c6','::1',1464525585,'__ci_last_regenerate|i:1464525470;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('18f4780bcf4714596f601c3975d535723879f1a0','::1',1464420286,'__ci_last_regenerate|i:1464420000;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('19510df90a7241be7cdd524ad7ef0e695a9cf387','::1',1464379589,'__ci_last_regenerate|i:1464379302;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('197d0adf70e34595234952984545e3f62e79413b','::1',1466675668,'__ci_last_regenerate|i:1466675668;'),
	('1b94c567af993a64871bb722141b3a6658b8f493','::1',1464525989,'__ci_last_regenerate|i:1464525892;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('1bf9406c38714aa884b5ec1a801ef863c3377802','::1',1464619850,'__ci_last_regenerate|i:1464619585;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('1d25a31b95a868e8b5b988cc0984978aba7f8582','::1',1465907453,'__ci_last_regenerate|i:1465907453;'),
	('1e59613c1ba850d42f2dca93656d8b1596aead9c','::1',1464458079,'__ci_last_regenerate|i:1464457787;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('1e5cb724812fdcf444b6d84ec7a79ba080b535f3','::1',1464380455,'__ci_last_regenerate|i:1464380164;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('1ee59c9ced4c9eb76776c88d1681d29f5c378c3b','::1',1466875314,'__ci_last_regenerate|i:1466875295;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;__ci_vars|a:3:{s:8:"username";i:1466882514;s:2:"id";i:1466882514;s:9:"logged_in";i:1466882514;}'),
	('1f5795dc5bdce2e7fda76b415ada5ad83782620d','::1',1464360489,'__ci_last_regenerate|i:1464360189;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('1ff43e9ce38ae69a535efe57c170a7d9efed9e97','192.168.23.2',1464876369,'__ci_last_regenerate|i:1464876262;'),
	('207f5f17a7c3324083fadf01f571f43e5e2bea9f','::1',1464532926,'__ci_last_regenerate|i:1464532724;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('235e90f302804474909b491426c6598cd60bd307','::1',1464613100,'__ci_last_regenerate|i:1464612826;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('238c5c17089792bfe192c2bdf891552568f5bd5c','::1',1464616006,'__ci_last_regenerate|i:1464615778;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('251dc6bc30d779105024149ba85c240303e7a2cc','::1',1464432648,'__ci_last_regenerate|i:1464432424;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('25f4d3f1783a01a13da6a893a5b69ff433f8baf4','::1',1464457351,'__ci_last_regenerate|i:1464457064;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('261acb3a822ca95498773f0e0a0170e64557987d','::1',1464345935,'__ci_last_regenerate|i:1464345645;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('264de7ae6c53706568588c552f1894a6ac95de3f','::1',1464343846,'__ci_last_regenerate|i:1464343653;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('28de307b09caac5e7e09e24cd95221b99d83faef','::1',1466757129,'__ci_last_regenerate|i:1466756841;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('2917b09280d80b27b8c5b36ac2d06bf29de1ceb4','::1',1466875545,'__ci_last_regenerate|i:1466875545;'),
	('2985d438168f50a01cbfb9c1c4994523ca29297f','::1',1464525108,'__ci_last_regenerate|i:1464524848;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('2a3bda20e390a65ab71d2d7c56e82730d683311e','::1',1464374508,'__ci_last_regenerate|i:1464374315;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('2a9e8a3705d1e5fea2e50e973bb3a48a49fc7581','::1',1464373944,'__ci_last_regenerate|i:1464373941;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('2ceeae889b633d2858ffac748df678624289427c','::1',1464343129,'__ci_last_regenerate|i:1464342944;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('2dbaa5fe7ab3943598462823799b4c231fbc06a1','::1',1464692646,'__ci_last_regenerate|i:1464692646;'),
	('2e4af30a0c221292fbf0e1e251ec18d4d9ed5887','::1',1466761798,'__ci_last_regenerate|i:1466761794;'),
	('2e56c9cbe9bb604628acfd95c801badb01fc857d','::1',1464344914,'__ci_last_regenerate|i:1464344617;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('2ee2ce2181c0538ac5fd6bf62d6f618371fe4571','::1',1466756805,'__ci_last_regenerate|i:1466756510;'),
	('2f9724cf26561419ac437b8c5161ec4f75911dc4','::1',1464377133,'__ci_last_regenerate|i:1464376853;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('2fdea9b7d86701e3f5c421e972367bdbf3cbb66a','::1',1464524422,'__ci_last_regenerate|i:1464524128;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3004716270c56b5fa54c4de304df08b69130370e','::1',1466837656,'__ci_last_regenerate|i:1466837391;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3161070b8339c6eb2f41386f7f55d6713ee206b9','::1',1464199116,'__ci_last_regenerate|i:1464198893;'),
	('316ebcf4a0972ad42f7040e5c81471665d2381c5','::1',1464345500,'__ci_last_regenerate|i:1464345342;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('34d494782bfadcad1d0db6cea80280f2ade0dc46','::1',1466863636,'__ci_last_regenerate|i:1466863389;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('355e1ab7594424feced44a0cc0751c6715427496','::1',1466934110,'__ci_last_regenerate|i:1466934074;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('35d91c3bdce39e8d0ac141e4bf20fd700abe993c','::1',1466694619,'__ci_last_regenerate|i:1466694600;'),
	('387dc7221e34d8e7060cd2d5941af47e63ee7777','::1',1465898356,'__ci_last_regenerate|i:1465898321;'),
	('399eb2b24cfe0a57098ecb4ea3ac8eac2e1af269','::1',1464364009,'__ci_last_regenerate|i:1464363981;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('39c019c96c979f92c8c8dedbf32ef646b542ccfc','::1',1464426034,'__ci_last_regenerate|i:1464425803;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3a3905a66e2e9725a2bc771fc23042a871deade0','::1',1464346118,'__ci_last_regenerate|i:1464345991;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3aaef99203f4d490fbf13bfaec1ecb85a8c0d787','::1',1464422636,'__ci_last_regenerate|i:1464422636;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3b734126bceb0775b34b68dc3340c741aec21e51','::1',1464360491,'__ci_last_regenerate|i:1464360491;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('3cd3d5225aa4a5030784c80650a677f98bc64e25','::1',1464612743,'__ci_last_regenerate|i:1464612492;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('3e1539c25e8f1d27bf05fe5f57e91b1e3e6b17cf','::1',1464427830,'__ci_last_regenerate|i:1464427670;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('3eeeb3a4e8c212df61858e2d29b70de1f09b2c12','::1',1464616776,'__ci_last_regenerate|i:1464616478;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('431a6f89492c1d1ec6e33bc831ab46df090e258b','::1',1464433438,'__ci_last_regenerate|i:1464433438;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('43894b2ab66ddb50d31faf4f03e91f88a7b55f1a','::1',1466925169,'__ci_last_regenerate|i:1466925163;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('445ed8eff378b7db0348878b4e7e1ac3520e243c','::1',1466877107,'__ci_last_regenerate|i:1466877107;'),
	('461bfd1b6e4cd48f14bd841fafee1af36aa8c46c','::1',1466838258,'__ci_last_regenerate|i:1466838071;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('463b41e7c8a97360ae1183b395033443e65e3c52','::1',1464331741,'__ci_last_regenerate|i:1464331534;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('47c05dd997fc07edde56db6c5fd1d889c93baee2','::1',1466780001,'__ci_last_regenerate|i:1466779701;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('49d56807488c85e507e8687d474da6bc6f98fb6b','::1',1464196871,'__ci_last_regenerate|i:1464196810;'),
	('4a2ba2325c5befd7ff879a54db4a597ef1f33b86','::1',1466677543,'__ci_last_regenerate|i:1466677256;'),
	('4a8ad2ebcae88623f4e511f0a179bfe68d76e3ec','::1',1464434420,'__ci_last_regenerate|i:1464434207;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('4bc1814cbb069db726427044051ca7a3eb80e8e6','::1',1464428468,'__ci_last_regenerate|i:1464428433;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('4ced39b7c5e50e667fdb38499b13951b1f994941','::1',1466837384,'__ci_last_regenerate|i:1466837088;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('4d11e50ff5f01190cdb08abf1de569601feb8207','::1',1466874961,'__ci_last_regenerate|i:1466874961;'),
	('4f884c41a93aa7674b4538d415c7de09d44debf8','::1',1466763038,'__ci_last_regenerate|i:1466762744;'),
	('4fc7847b78edf6fe47d51f7d3f71e4d997d5472c','::1',1464242315,'__ci_last_regenerate|i:1464242222;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('537ffe490ccd55ac2fdec5c2c765e07a181b07ef','::1',1464457741,'__ci_last_regenerate|i:1464457448;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('53d73125ce2a95de181bc2a95050bab47b5a3f29','::1',1464617577,'__ci_last_regenerate|i:1464617545;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('53dacf200f0269559b7f8afc36a3ecbfb06c0f23','::1',1464244162,'__ci_last_regenerate|i:1464243875;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('54337c0f0482ae4a78bfc9b008b345eef55c1188','::1',1464676026,'__ci_last_regenerate|i:1464675981;'),
	('544c6ef343d55738838d43176548444e37ad8961','::1',1466674426,'__ci_last_regenerate|i:1466674200;'),
	('5455eab0e352999e2e8424477f35420987c860b7','::1',1466678159,'__ci_last_regenerate|i:1466677951;'),
	('55ef7891f2a5f90ad5d6eb674d0bb1947ef48448','::1',1466839497,'__ci_last_regenerate|i:1466839388;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('57f70ccd8952d9051b33466c46d26078a8144b87','::1',1466849621,'__ci_last_regenerate|i:1466849541;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('5813734a7a74db85d0e7c794be66c4594e376214','::1',1464356452,'__ci_last_regenerate|i:1464356450;'),
	('5862e2128186bb731b47c372a6c230ec2be7ebb9','::1',1464341748,'__ci_last_regenerate|i:1464341472;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('58c044e864d100163a99ee5c678fc23ddc333dd5','::1',1464362667,'__ci_last_regenerate|i:1464362370;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('59ccbf871a0982930c98d85ee1aa4d1bae459a4d','::1',1466874952,'__ci_last_regenerate|i:1466874908;sess_expiration|i:7200;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('5b4ad2b16d69f32733e79d1c0739a4bbbefe2aa9','::1',1464359228,'__ci_last_regenerate|i:1464358978;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('5bc99a1f00555b7cf5013ff37fd10a4622042996','::1',1464623244,'__ci_last_regenerate|i:1464623229;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('5cd89ab8b9a106de2cb1911b6ff449c4b6cd7494','::1',1464243867,'__ci_last_regenerate|i:1464243572;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('5d6a0a27d49621d9c7034abed621745315a95995','::1',1466869287,'__ci_last_regenerate|i:1466869287;'),
	('5e22ef90efdaa36b397c94252ee12d844b0d3b8c','::1',1464357962,'__ci_last_regenerate|i:1464357670;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('5f22ef931f2f961408657b7a3dffd8fa7bf7f222','::1',1464376773,'__ci_last_regenerate|i:1464376540;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('5fba738947930b9434a5805105613af96fa93b12','::1',1464334274,'__ci_last_regenerate|i:1464334013;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('5fd37ec55e871f324a49e96f71ff3839eaf86386','::1',1466876255,'__ci_last_regenerate|i:1466876238;sess_expiration|i:7200;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('60c4c93e7f14b6f3fca4bd68d9c22e260000d93e','::1',1464463982,'__ci_last_regenerate|i:1464463982;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('612240b4c22ce3dd8b952aa020f2356ac190128c','::1',1464359689,'__ci_last_regenerate|i:1464359500;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('61b856de6d035aa1c28cfacf253ee0a24ef0c60b','::1',1465770052,'__ci_last_regenerate|i:1465769808;'),
	('61eea826fe6019c3f6c18fa12eee13af0abbd42d','::1',1464362859,'__ci_last_regenerate|i:1464362713;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('62a3ba3198b4d67607f646150d060227f2797dc6','::1',1466761396,'__ci_last_regenerate|i:1466761392;'),
	('638c20996fcec53993988121c533f72ad9b0fce6','::1',1466676102,'__ci_last_regenerate|i:1466676086;'),
	('63cc8a31d32961319b2ed4b11daa24b180ef3ef5','::1',1466678392,'__ci_last_regenerate|i:1466678292;'),
	('6688e3e929210fd8a7594db544aaf5b7818bddda','::1',1464461079,'__ci_last_regenerate|i:1464460831;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('66ca15219649277a3b32330dba772d4916da32bd','::1',1464613315,'__ci_last_regenerate|i:1464613137;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('67ed19011dcac14d4f71af5a2ca452e6199af745','::1',1466682916,'__ci_last_regenerate|i:1466682641;'),
	('68709aff24251214d6ae78dd52191c5875eb143f','::1',1464630003,'__ci_last_regenerate|i:1464630000;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('6ae2d99ff616130b5e95c249e1f34f3d58b746e0','::1',1465187858,'__ci_last_regenerate|i:1465187858;'),
	('6b5931653a9cd6309682529c4d9b774e7b688d4d','::1',1466862767,'__ci_last_regenerate|i:1466862494;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('6fcdbff263eef3b98e3860ba525d5a356a096f49','::1',1466846170,'__ci_last_regenerate|i:1466845922;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7095c0f312265de34630ce5bee6ad74e149a0d48','::1',1464424357,'__ci_last_regenerate|i:1464424077;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7234c5b9f5ffdd21d99f27e881f14ab639eaa233','::1',1464620230,'__ci_last_regenerate|i:1464619940;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('728de8a1adeefb6a37bef8d755f86616efd9e4d1','::1',1464347330,'__ci_last_regenerate|i:1464347037;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7350f84bd255fb79f20524e463e1d80eef71d41d','127.0.0.1',1464243603,'__ci_last_regenerate|i:1464243603;'),
	('7555e0dc2fab94736203de610ca7181dbcafd35f','::1',1464332529,'__ci_last_regenerate|i:1464332484;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7613320e6ff87c4a048eef9b4f313ca37b6b7bc3','::1',1464447950,'__ci_last_regenerate|i:1464447942;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7690839ef837f7448e2a96c1957a6646119c2cb7','::1',1464422044,'__ci_last_regenerate|i:1464421799;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('76a1a87f27019ca766ea0b909152a940afa85e7f','::1',1464459439,'__ci_last_regenerate|i:1464459164;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('78b212e538318124f9a6e91b01a3ac88ffb02618','::1',1471689701,'__ci_last_regenerate|i:1471689660;'),
	('7bacc90654b16927ad0c1a6260af6a1d218b0033','::1',1466848225,'__ci_last_regenerate|i:1466848215;'),
	('7beff7cff8acffc5e905bb6567784c1d39c9fefb','::1',1466874383,'__ci_last_regenerate|i:1466874237;sess_expiration|i:30;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7e92e1bbb95126010aceafef3655605b94a3580b','::1',1464334748,'__ci_last_regenerate|i:1464334503;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('7f5b3f63f5760b3a5fd04561bd798005179e7afe','::1',1471246220,'__ci_last_regenerate|i:1471246105;'),
	('80f14b2a781a38a9a3ececaaeca609854bb0df63','::1',1466876151,'__ci_last_regenerate|i:1466876139;sess_expiration|i:7200;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('8211f36157969905bc95db22feb3ef95a111f476','::1',1464668535,'__ci_last_regenerate|i:1464668535;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('822ef8a4d8366630b951452cd19d62d0e32611f0','::1',1464241421,'__ci_last_regenerate|i:1464241180;'),
	('8435d7f7fdf5b8ba802799968007ce2cb4e7b479','::1',1466864804,'__ci_last_regenerate|i:1466864769;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('86c23486f986f3aa872be7dc116d09735ede344c','::1',1466868268,'__ci_last_regenerate|i:1466868242;'),
	('87e1cdca29aff2f44ef6552f68613d0ab3e3433d','::1',1464458728,'__ci_last_regenerate|i:1464458437;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('8917298adf27f8e086b5bcf30982fe11ebfb3d3e','::1',1464459771,'__ci_last_regenerate|i:1464459555;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('8983a095fc0e5353147214a4c9bc555fb70639a7','::1',1471241920,'__ci_last_regenerate|i:1471241920;'),
	('8abe00498f4f0464075a5ea0243073d66c0429ef','::1',1466678928,'__ci_last_regenerate|i:1466678928;'),
	('8c2e37d49ea1167689bdccb12d2043be9863bd99','::1',1464379291,'__ci_last_regenerate|i:1464379000;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('8d3df99b23b7ca1354af99de7362f9b36212ed9f','::1',1466685264,'__ci_last_regenerate|i:1466685254;'),
	('8dab2746160b86a6bac72f392bc263348583a48e','::1',1464458397,'__ci_last_regenerate|i:1464458127;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('8e2a19ba4c472a2407c9a53000cdc01e48250086','::1',1464373924,'__ci_last_regenerate|i:1464373639;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('8ebd82d9e1fc8f672b9de8d08cca60b172757acf','::1',1465898287,'__ci_last_regenerate|i:1465898006;'),
	('8f12125a414efde72c91a8654c686f76eb554de5','::1',1464199514,'__ci_last_regenerate|i:1464199221;'),
	('8f255d9fb2f91701b0f34a4ffa0b6de09a2ba626','::1',1464638280,'__ci_last_regenerate|i:1464638161;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('8f868c0240a8933baf4feacb8943bc094095904f','::1',1465900147,'__ci_last_regenerate|i:1465899939;'),
	('9043bf8d924ce99365741c0f16bab23c27ab9acf','::1',1465770965,'__ci_last_regenerate|i:1465770820;'),
	('90aeefd8a7df742a2b414cf39e86c778ad5296d4','::1',1466874617,'__ci_last_regenerate|i:1466874617;'),
	('9164ab777b4354ba493526cae3aa9835556f0f81','::1',1464425533,'__ci_last_regenerate|i:1464425280;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('94abf7fba4c16cb0c7655f1e5f67a44b4087f477','::1',1466875537,'__ci_last_regenerate|i:1466875324;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;__ci_vars|a:3:{s:8:"username";i:1466882737;s:2:"id";i:1466882737;s:9:"logged_in";i:1466882737;}'),
	('965b290546ea8a39c447d124b5d5af9ed3979694','::1',1464380851,'__ci_last_regenerate|i:1464380847;'),
	('96b09f433cea5481c453baeeea93f3c51b7f5316','::1',1471240203,'__ci_last_regenerate|i:1471240195;'),
	('9746abf9888654b0140f6b56d012db37432fea66','::1',1464459959,'__ci_last_regenerate|i:1464459957;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('990ff2f4605f73d21a50585536d3e6b0be360a0f','::1',1464639045,'__ci_last_regenerate|i:1464639045;'),
	('9a167f0c65e30d1d5d5742c0f9a8b71129eea46f','::1',1466875288,'__ci_last_regenerate|i:1466875275;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;__ci_vars|a:3:{s:8:"username";i:1466882475;s:2:"id";i:1466882475;s:9:"logged_in";i:1466882475;}'),
	('9aadf542166f032e7fc498cee4c9d755856b2bb5','::1',1471242116,'__ci_last_regenerate|i:1471242116;'),
	('9b3456d9821947f652f83a9065549bc4d276612b','::1',1464638973,'__ci_last_regenerate|i:1464638710;username|s:6:"kiki27";id|s:1:"3";logged_in|b:1;'),
	('9b7f7daceab1593b56f092ab82ee134794924aa6','::1',1464426690,'__ci_last_regenerate|i:1464426392;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('9c0a8aab38ef8c14e0f3f5b579806f922c60ca7d','::1',1464426958,'__ci_last_regenerate|i:1464426693;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('9c4698b1f9a798e6a777dfb6c2bde92fa8d6cfa0','::1',1466863130,'__ci_last_regenerate|i:1466862831;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('9d0ff6d9d5be73fe7d23026e1bf654fce9f27752','::1',1464333682,'__ci_last_regenerate|i:1464333677;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('9d653d4852191c994a27f83b19163b81381e129d','::1',1464463728,'__ci_last_regenerate|i:1464463523;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('9d66256462f50530707de205172ab6293f737b87','::1',1464376429,'__ci_last_regenerate|i:1464376170;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('9eb09723e91ae6a1fb13ad5024249e45608dfc6b','::1',1464199665,'__ci_last_regenerate|i:1464199537;'),
	('a080aba150baf99238153fb2c6f074e991889f9b','::1',1464200026,'__ci_last_regenerate|i:1464199986;'),
	('a26a9423d6948cc045928b36a920e3093c8177df','::1',1466685149,'__ci_last_regenerate|i:1466684905;'),
	('a2b7c95abba3b90a84a350ebad34c8b20591263b','::1',1464515053,'__ci_last_regenerate|i:1464515031;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('a2e096805fb321da67b7c48a0dbf21d4b5c0ebc2','127.0.0.1',1464199623,'__ci_last_regenerate|i:1464199623;'),
	('a537d1cd8db7413f0cf6f0b01c14fdec27c256e7','::1',1466676692,'__ci_last_regenerate|i:1466676415;'),
	('a5a70494e180a779b6d95af9dea8c9ce195250bf','::1',1464361848,'__ci_last_regenerate|i:1464361562;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('a8ef43d373815423690e976bef43c4f00ea30e1a','::1',1471241657,'__ci_last_regenerate|i:1471241483;'),
	('a9321b932f5b154459e20191c93c6b9356a0f2ef','::1',1464344539,'__ci_last_regenerate|i:1464344253;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('a99a4447c60051d9995c5f0743bf74ab1050c67e','::1',1464431896,'__ci_last_regenerate|i:1464431876;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('aba610c32e3d609b26ad7d814d0b3dce287a5d00','::1',1464666194,'__ci_last_regenerate|i:1464665953;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('ac4f6be2c72869f11a6a653215e7d77fbe521334','::1',1464421172,'__ci_last_regenerate|i:1464421106;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('af189b7520013cd5ed246d60490f13a392e6974f','::1',1466874603,'__ci_last_regenerate|i:1466874591;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('af278de56af7069a9c35c39124db1d550b93bcbd','::1',1464342339,'__ci_last_regenerate|i:1464342329;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('aff079e5f3973dcce9cfebd9bb0a878ef616a01c','::1',1464378991,'__ci_last_regenerate|i:1464378693;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('b0637cf4083f7678492f9a0e10c2e90499c83b6c','::1',1466780376,'__ci_last_regenerate|i:1466780368;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b078a24c00185487a2ad243fef871beff7f56cf8','::1',1465770592,'__ci_last_regenerate|i:1465770443;'),
	('b084b8112658f7a163fe2bd921d1bd38d931efd1','::1',1466880425,'__ci_last_regenerate|i:1466880265;'),
	('b35575d8d8fc8171e82fa502dd5830bea841c815','::1',1464197931,'__ci_last_regenerate|i:1464197739;'),
	('b3885a144b9a9d073b01343a507a468d9f3e5557','::1',1464424681,'__ci_last_regenerate|i:1464424398;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b3b9ad8603eddfced4cd11570e83c239620bcb41','::1',1464343541,'__ci_last_regenerate|i:1464343245;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b3f4045097ddf9e37ea7bba9dd88cd14e193430c','::1',1471690305,'__ci_last_regenerate|i:1471690305;'),
	('b47b54fbea4f3a36fecf9fd3f4e2f736b06a2fc3','::1',1466874646,'__ci_last_regenerate|i:1466874640;sess_expiration|i:7200;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b480d0609f31bc54ddb8a6e760635cd456d92b6f','::1',1464377372,'__ci_last_regenerate|i:1464377170;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('b62487e8685f43755131521497722ce91ae20a59','::1',1464420838,'__ci_last_regenerate|i:1464420662;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b72af973ac08cd9cd1518d14dd53e7623ccb8447','::1',1464419610,'__ci_last_regenerate|i:1464419333;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b735a7f7b4d9cba910b64e8c541e4a6f0f090534','::1',1464615767,'__ci_last_regenerate|i:1464615472;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('b7b4e80a6151691d3200967b7447fee9f05f20d3','::1',1464422598,'__ci_last_regenerate|i:1464422331;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b91088e216e5bf147d5f7066a442255bb1d9936c','::1',1464427651,'__ci_last_regenerate|i:1464427362;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b92d9a6809784f0d00062edafd024fdf97b4f109','::1',1466876297,'__ci_last_regenerate|i:1466876262;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('b9b4db8c68ca13d3ba1fa7a949ff7f7061d41bfb','::1',1467341560,'__ci_last_regenerate|i:1467341560;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ba5837f9fb39bec5354e7e8ff0e8c8c519a3b65d','::1',1466837998,'__ci_last_regenerate|i:1466837769;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('bb717103ede92fcadcae0d251eaabb4ba13a2a76','::1',1464423812,'__ci_last_regenerate|i:1464423639;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('bb8babb1eff5afd8b2e81f740aadf42ea114a03b','::1',1464240839,'__ci_last_regenerate|i:1464240837;'),
	('bc885e2e6af45ae658002822565f2d424ebb075a','::1',1466764524,'__ci_last_regenerate|i:1466764473;'),
	('bde5f8801500525cb46515f9af4708c5b89fc083','::1',1464419976,'__ci_last_regenerate|i:1464419692;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('befd9dead88d3fbac73c3befa585d1b568e4b089','::1',1464614647,'__ci_last_regenerate|i:1464614356;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('bf5a6c13c2a5e2f3eaf42bcc2b35ec3b0d628456','::1',1464423187,'__ci_last_regenerate|i:1464422999;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('bfbe6e748e86631d9f2f158c42178f5f52be2d1e','::1',1464434695,'__ci_last_regenerate|i:1464434637;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('c03a39eeab9610c6a713c225554cc906d99cb55d','::1',1464665775,'__ci_last_regenerate|i:1464665647;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('c06897209a15eda1690321eb0c91abd21d91f655','::1',1467245880,'__ci_last_regenerate|i:1467245753;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('c0c2388e33d83ba1a07288ec4d89f4e40b433fcc','::1',1466863872,'__ci_last_regenerate|i:1466863745;'),
	('c11a5605f972004b79fd31c9ac537e5898a92bd4','::1',1464665553,'__ci_last_regenerate|i:1464665264;username|s:5:"yudis";id|s:2:"10";logged_in|b:1;'),
	('c1b5108cbe53c735e27494f5ea79a840e75b3f2c','::1',1466683363,'__ci_last_regenerate|i:1466683120;'),
	('c28655408af5b0505a10bae4068b587acd2edbde','::1',1464522958,'__ci_last_regenerate|i:1464522933;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('c4f2910044fc8d0c0d716f9c69f2f879dc3e7e6a','::1',1466847665,'__ci_last_regenerate|i:1466847401;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('c57534e97dc5be3f29d47a68aa6bc5e69797aabc','::1',1467335593,'__ci_last_regenerate|i:1467335566;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('c65973b13bc9df3cae0fb9f71c8536916771826b','::1',1464423611,'__ci_last_regenerate|i:1464423322;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('c9cf9851e138d5976eaeb63fa3b522138eabddc8','::1',1466864170,'__ci_last_regenerate|i:1466864074;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ca2ad165f3f37e98e3729d23ac5cab1ab7c941fe','::1',1464345154,'__ci_last_regenerate|i:1464344963;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ca975698db161a7726e29392b659cdf8c68b3760','::1',1466780189,'__ci_last_regenerate|i:1466780045;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('cb3cc7cc23c14ef53c0bd1313347eb160809d66e','::1',1464425036,'__ci_last_regenerate|i:1464424760;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('cbeeac593c8078a624e838e646c414e3e8f37342','::1',1464616883,'__ci_last_regenerate|i:1464616785;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('ce54993a50524677d8c6821c2bcdcad16c0ec1ba','::1',1464332163,'__ci_last_regenerate|i:1464331891;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('cf1d41964fd2ee860fe8ae5ea43de6196a1f99ac','::1',1464364700,'__ci_last_regenerate|i:1464364461;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('cf29d627af826106548c013186f4234c5cc7a908','::1',1466874581,'__ci_last_regenerate|i:1466874581;sess_expiration|i:30;sess_expire_on_close|b:1;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('d003e81402c712f4de4d2f69d427815f054ba2e1','::1',1464361178,'__ci_last_regenerate|i:1464360880;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('d105cf4c2f0441577cdc7ec7fef5f2f88b9b4e41','::1',1464614353,'__ci_last_regenerate|i:1464614055;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('d26eabad40261f13747f0f2b5738da6e26f536e3','::1',1465900675,'__ci_last_regenerate|i:1465900376;'),
	('d3bd3e908d7930acb1d553cc01a07b96ceb8f56d','::1',1466879476,'__ci_last_regenerate|i:1466879476;'),
	('d3e2ca1eb4b6b8799556939ddc43263a5020e824','::1',1464242954,'__ci_last_regenerate|i:1464242727;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('d62fc4f44d3de15d829d1fd3bc3f98a746b7b824','::1',1466869235,'__ci_last_regenerate|i:1466869221;'),
	('d766cd9df881c2f5ba4454eb147f3c0d73f8a97e','::1',1464431511,'__ci_last_regenerate|i:1464431266;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('d7aa0dda9ddede3ac0d447371bc55a1e3c09eab2','::1',1466763426,'__ci_last_regenerate|i:1466763138;'),
	('d7efeb8698554605a8c738586e52c24a8ea65a8a','::1',1464461405,'__ci_last_regenerate|i:1464461394;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('d890b74947d79a41eca2187b46bf5e485eef36ea','::1',1464240725,'__ci_last_regenerate|i:1464240534;'),
	('d95a3018f982e85866471b9324b61fd0f30a2826','::1',1466925193,'__ci_last_regenerate|i:1466925193;'),
	('d96badd902b95ac86118951112f4e5bd172494bc','::1',1466869263,'__ci_last_regenerate|i:1466869263;'),
	('dae7464e91dd98c4e9fe5d4a80942e4a7e0ea89e','::1',1464619483,'__ci_last_regenerate|i:1464619210;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('db1e93268bc0b6fda9312639ab43a69062285379','::1',1464347732,'__ci_last_regenerate|i:1464347597;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('dc3d696b3741d1e5e65be4280d026885a3d0a600','::1',1464428356,'__ci_last_regenerate|i:1464428098;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('dd4fad81a6e722f89be04e17f46efa31818a01f3','::1',1464358045,'__ci_last_regenerate|i:1464357997;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('e0ae4470cd2647c7242d2d350dee829a4977a240','::1',1467256346,'__ci_last_regenerate|i:1467256346;'),
	('e1b8e70cf203cdc7adbd04f0e5f686c2770e5b3d','::1',1464524521,'__ci_last_regenerate|i:1464524521;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('e300fb9647bb5a730f7e2347367e7dbe4db031ce','::1',1464278685,'__ci_last_regenerate|i:1464278653;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('e3cd8b468ce3c1a8e74a1d6bbe55fd90bcbcbb46','::1',1467250944,'__ci_last_regenerate|i:1467250921;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('e55aca9fd03cdd5647261686576e5916a7828556','::1',1464362072,'__ci_last_regenerate|i:1464361896;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('e6050494ddbae6c1f4db84070de9cae04d2093f5','::1',1464363861,'__ci_last_regenerate|i:1464363565;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('e6eab01a8cfae4365e28e12548f438f0943f2321','::1',1466934901,'__ci_last_regenerate|i:1466934885;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('e7cdf7567bce36a44a5091e337569bb00b6e3f48','::1',1464243325,'__ci_last_regenerate|i:1464243066;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('e80f7eee8f90e334673c8e3e791ccb3d325651c4','::1',1464331359,'__ci_last_regenerate|i:1464331192;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('e83131a13403fc02668b99461be6b9a891e0d0af','::1',1464342901,'__ci_last_regenerate|i:1464342637;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('e84c04ac16fa846d9786aa98a47655788db3cff5','::1',1466880171,'__ci_last_regenerate|i:1466879933;'),
	('e8e2176a6e28e08f6a65be351f3773663f1dfd57','::1',1466686536,'__ci_last_regenerate|i:1466686271;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ea3a968b7232620a68b3b104e50f06fba4894290','::1',1465770321,'__ci_last_regenerate|i:1465770124;'),
	('ea46544e426b19569bc5c49228ced1292e998329','::1',1464378304,'__ci_last_regenerate|i:1464378147;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('ea87562788c21b9d3fc6a5b74fa63647811021bd','::1',1464459077,'__ci_last_regenerate|i:1464458803;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('eaa5898efbac126a6b24694eb1134f53ed368c69','::1',1464431870,'__ci_last_regenerate|i:1464431570;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('eb6acb14d6102d8aaf26999a313dcaa024015000','::1',1464611656,'__ci_last_regenerate|i:1464611656;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('eba589abd4fb6f104562c95ace965ea5645e1f44','::1',1467334876,'__ci_last_regenerate|i:1467334865;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ebf28936be5ebce2343d6b4b4f25628147c663d5','::1',1464616311,'__ci_last_regenerate|i:1464616104;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('ed2fa7d6f74aa57d3e6c48ff6cb94f593dd283e2','::1',1464639959,'__ci_last_regenerate|i:1464639959;'),
	('ed76c6487a17d6ff3dac5d7fdbf381a2742dcd00','::1',1464617964,'__ci_last_regenerate|i:1464617964;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;'),
	('eee7828ac988630af8c4bbd9ee11609e4a69a606','::1',1466838916,'__ci_last_regenerate|i:1466838859;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ef3db230a9ec60fdff00fa8dba6cf2f81c4f9090','::1',1466925048,'__ci_last_regenerate|i:1466925048;'),
	('f4072b887409aaa1e2a055767c8b6c6c7c30ae90','::1',1466864656,'__ci_last_regenerate|i:1466864435;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('f9ef39b489bbf5805d5c9e6ecd33e753598392d0','::1',1464198827,'__ci_last_regenerate|i:1464198558;'),
	('fae5d53865e509e7a4a350041e95c195e7207195','::1',1464195175,'__ci_last_regenerate|i:1464195175;'),
	('fc3d5a3eed3c24448175c95a259b9a3adaf4f296','::1',1464427321,'__ci_last_regenerate|i:1464427042;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('fd9e4b7e59dc69a3b7f5622abea5ceb11c913217','::1',1466880690,'__ci_last_regenerate|i:1466880684;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ff5bdfdbd2527c78332cfc21f49b18951664c310','::1',1464533110,'__ci_last_regenerate|i:1464533085;username|s:8:"rudiarta";id|s:1:"2";logged_in|b:1;'),
	('ff9ba9b2eb46f1d3d590a835ccb96d42c57825fb','::1',1464435244,'__ci_last_regenerate|i:1464435115;username|s:4:"kiki";id|s:1:"3";logged_in|b:1;');

/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table city
# ------------------------------------------------------------

CREATE TABLE `city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;

INSERT INTO `city` (`id`, `name`)
VALUES
	(1,'Jogjakarta');

/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table item
# ------------------------------------------------------------

CREATE TABLE `item` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_city` int(10) NOT NULL,
  `id_location` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id_categori` int(10) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `note` varchar(255) NOT NULL,
  `chronological` varchar(500) NOT NULL,
  `id_user` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usr_fk` (`id_user`),
  KEY `FK_barang_kategori_barang` (`id_categori`),
  KEY `id_kabupaten` (`id_location`),
  KEY `id_city` (`id_city`),
  CONSTRAINT `FK_barang_kabupaten` FOREIGN KEY (`id_location`) REFERENCES `location` (`id`),
  CONSTRAINT `FK_barang_kategori_barang` FOREIGN KEY (`id_categori`) REFERENCES `item_category` (`id`),
  CONSTRAINT `FK_item_city` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`),
  CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;

INSERT INTO `item` (`id`, `id_city`, `id_location`, `date`, `time`, `id_categori`, `brand`, `tag`, `picture`, `note`, `chronological`, `id_user`, `status`, `rate`)
VALUES
	(56,1,3,'2016-05-23','12:30:00',5,'Kucing paret','Kucing Kesayangan HILANG sdsd','207a3e1fb891fe5a30b28764ac1f6862.jpg,120d1382ef2d47e552d64148d09e1e85.png,','tolong dong yang nemuin balikin','Kejadian nya pas sore saya ngasih makan dia asdasd',2,'missing',0),
	(61,1,1,'2016-00-10','02:30:00',5,'Surat Nikah w','Surat kawin Ilang w','7ccee657c8fcc2705ef9c6f1e2805b61.jpg,939d78c5e93e49cb759bccb651043e53.png,f6a46b5090657970443a10c2dcd4ba00.png','mohon yang menemukan jangan menikahi istri saya w','hilang di saat pernikahandd w',3,'missing',0),
	(62,1,1,'2016-03-03','23:00:00',1,'calvin klein','mencari hp murah ',',3638724caefd863d7826aac2eb9ac01b.png,a700866bc04f9791127844339bea3ad0.jpg','ada senternya','hilang pas lg naik motor nth jatuh dimana',10,'missing',0),
	(63,1,1,'0000-00-00','00:00:00',1,'hr','tas cantik','fdccbd00eab26e5695b350a927bf17e8.png,,','ada ktp nama yudis','saya menemukan ini pas lg responsi',10,'found',0);

/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table item_category
# ------------------------------------------------------------

CREATE TABLE `item_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `item_category` WRITE;
/*!40000 ALTER TABLE `item_category` DISABLE KEYS */;

INSERT INTO `item_category` (`id`, `name`)
VALUES
	(1,'Elektronik'),
	(2,'Accecoris'),
	(3,'Kunci'),
	(4,'Surat-menyurat'),
	(5,'Orang'),
	(6,'Properti'),
	(7,'Alat Tulis'),
	(8,'Kendaraan'),
	(9,'Helm'),
	(10,'Sepatu'),
	(11,'Baju'),
	(12,'Celana');

/*!40000 ALTER TABLE `item_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table location
# ------------------------------------------------------------

CREATE TABLE `location` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_city` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kota` (`id_city`),
  CONSTRAINT `FK_kabupaten_kota` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;

INSERT INTO `location` (`id`, `name`, `id_city`)
VALUES
	(1,'Sleman',1),
	(2,'Bantul',1),
	(3,'Ngaglik',1);

/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table partner
# ------------------------------------------------------------

CREATE TABLE `partner` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `partner` WRITE;
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;

INSERT INTO `partner` (`id`, `name`, `address`)
VALUES
	(1,'TELKOM INDONESIA','');

/*!40000 ALTER TABLE `partner` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table partner_data_product
# ------------------------------------------------------------

CREATE TABLE `partner_data_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_product` int(10) NOT NULL,
  `atribut` varchar(50) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT '',
  `id_customer` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`),
  CONSTRAINT `partner_data_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `partner_product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `partner_data_product` WRITE;
/*!40000 ALTER TABLE `partner_data_product` DISABLE KEYS */;

INSERT INTO `partner_data_product` (`id`, `id_product`, `atribut`, `value`, `id_customer`)
VALUES
	(5,3,'name','arta',1),
	(6,3,'address','kaliurang',1);

/*!40000 ALTER TABLE `partner_data_product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table partner_product
# ------------------------------------------------------------

CREATE TABLE `partner_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_partner` int(10) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id_partner` (`id_partner`),
  CONSTRAINT `partner_product_ibfk_1` FOREIGN KEY (`id_partner`) REFERENCES `partner` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `partner_product` WRITE;
/*!40000 ALTER TABLE `partner_product` DISABLE KEYS */;

INSERT INTO `partner_product` (`id`, `id_partner`, `name`)
VALUES
	(3,1,'INDIHOME');

/*!40000 ALTER TABLE `partner_product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table report
# ------------------------------------------------------------

CREATE TABLE `report` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_found` int(10) NOT NULL,
  `id_lost` int(10) NOT NULL,
  `id_item` int(10) NOT NULL,
  `date` date NOT NULL,
  `result` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penemu` (`id_found`),
  KEY `id_kehilangan` (`id_lost`),
  KEY `id_barang` (`id_item`),
  CONSTRAINT `FK_laporan_penemuan_barang` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_laporan_penemuan_user` FOREIGN KEY (`id_found`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_laporan_penemuan_user_2` FOREIGN KEY (`id_lost`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `born_place` varchar(50) NOT NULL,
  `born_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `gender` char(2) NOT NULL,
  `id_card` varchar(25) NOT NULL,
  `card_type` varchar(25) NOT NULL,
  `active` char(2) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `contact`, `address`, `password`, `username`, `email`, `picture`, `born_place`, `born_date`, `status`, `gender`, `id_card`, `card_type`, `active`)
VALUES
	(2,'Rudi Arta Rahardian','08981706583','kaliurang km 8.79','81dc9bdb52d04dc20036dbd8313ed055','rudiarta','rudi@gmail.com','a9d14a41329b5299ed2a71e01de90b8c.jpg','Balikpapan','1996-06-10','mahasiswa','L','008982221','KTM','Y'),
	(3,'kiki parah tull','08123','kaliurang km 8.7 tesss','5c806bc4d0b60480470e77b3273e9e79','kiki27','rudi@gmail.com','77ede3deaf864c35e32031d763ffd18c.jpg','Balikpapan','1996-06-10','karyawan','L','008982221675','KTM','Y'),
	(9,'','123','','84fe7f77b735849e42f70f037d7f9a68','arta','asd@gmail.com','','','0000-00-00','','','','','Y'),
	(10,'yudistira arsya yudha','082393168322','jakal km13','fe1eee391afb7567ff222f5409eaad89','yudis','yudistira_kaka8322@gmail.com','09f46ed391c0a2eac70f705612c3dec9.png','jambi','0000-00-00','menikah','L','','','Y'),
	(11,'','123','','ad57484016654da87125db86f4227ea3','asd','rudiarta321@gmail.com','','','0000-00-00','','','','','N'),
	(12,'','123123123','','76d80224611fc919a5d54f0ff9fba446','asd','rudi.arta@ymail.com','','','0000-00-00','','','','','N'),
	(13,'','','','d41d8cd98f00b204e9800998ecf8427e','','','','','0000-00-00','','','','','N');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
