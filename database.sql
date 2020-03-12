-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.1.38-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- vrcdb 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `vrcdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `vrcdb`;

-- 테이블 vrcdb.board 구조 내보내기
CREATE TABLE IF NOT EXISTS `board` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udate` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 vrcdb.board:~10 rows (대략적) 내보내기
/*!40000 ALTER TABLE `board` DISABLE KEYS */;
INSERT INTO `board` (`no`, `id`, `title`, `note`, `udate`) VALUES
	(1, 'sindm', '[공지사항]어드민 공지사항입니다.', '공지사항을 등록했습니다. 읽어주세요.', '2019-06-22'),
	(3, 'sindm', '두번째 공지입니다.', '게시글은 잘올라가고 있습니까?', '2019-06-22'),
	(4, 'sindm', '어드민의 공지입니다.', '세번째 공지입니다.', '2019-06-22'),
	(5, 'sindm', '어드민의 공지 제목입니다?', '정상적으로 적용되었습니다. 음.', '2019-06-23'),
	(6, 'sindm93', '일반 유저의 게시글입니다. 이건 제목', '나는 일반유저입니다.', '2019-06-22'),
	(7, 'sindm93', '일반유저의 게시글 2번입니다.', '게시글이 잘 올라가는 것 같습니다.', '2019-06-22'),
	(8, 'sindm93', '자신이 쓴 것만 수정가능합니다.', '그런 것 같습니다. 어드민 계정으로 작성한 것은 일반유저가 수정이 불가능합니다.\r\n', '2019-06-22'),
	(9, 'park', '난 파커입니다.', '그렇습니다. 나는 파커입니다.', '2019-06-22'),
	(10, 'park', '파커는 VR이 사고싶습니다.', '그래서 일을 하고있습니다.', '2019-06-22'),
	(12, 'sindm', '게시글 한개를 작성해봅니다', '그렇습니다. 작성합니다.', '2019-06-23');
/*!40000 ALTER TABLE `board` ENABLE KEYS */;

-- 테이블 vrcdb.game 구조 내보내기
CREATE TABLE IF NOT EXISTS `game` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `udate` date NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `targeturl` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 vrcdb.game:~10 rows (대략적) 내보내기
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` (`no`, `title`, `note`, `udate`, `filename`, `url`, `size`, `targeturl`) VALUES
	(1, 'Vacation Simulator', 'The latest VR game from Owlchemy Labs, creators of ‘Job Simulator’ and ‘Rick and Morty: Virtual Rick', '2019-06-21', 'header.jpg', './data/header.jpg', 51308, 'https://vacationsimulatorgame.com/'),
	(2, 'Blood & Truth', 'Enter London’s lethal melting pot of high-end glamour and gritty underworld crime', '2019-06-21', 'maxresdefault.jpg', './data/maxresdefault.jpg', 152500, 'https://www.playstation.com/en-gb/games/blood-and-truth-ps4/'),
	(3, 'Beat Saber', 'Rhythm slashing VR game! We have many tournament and chellenge!you can doit!', '2019-06-22', '20190315151835_8000.jpg', './data/20190315151835_8000.jpg', 23702, 'https://beatsaber.com/'),
	(4, 'Tetris Effect', 'Our focus is centered \r\naround creating brand new experiences\r\nthat move you, stimulate you and evok', '2019-06-21', '수정됨_tetriseffect_keyart_1200x675.png', './data/수정됨_tetriseffect_keyart_1200x675.png', 150276, 'https://enhance-experience.com/'),
	(5, 'Arizona Sunshine', 'FOR THE FIRST TIME EVER, STEP INTO THE MIDST OF A ZOMBIE APOCALYPSE. GO TO DEATH APOCALIPES WORLD AN', '2019-06-21', '수정됨_header.jpg', './data/수정됨_header.jpg', 34128, 'http://arizona-sunshine.com/'),
	(6, 'Space Junkies', 'Strap on that jetpack and prepare for lift-off with a brand-new shooter experience! Ubisoft Montpell', '2019-06-21', '수정됨_header (1).jpg', './data/수정됨_header (1).jpg', 32112, 'https://spacejunkiesgame.com/'),
	(7, 'Star Trek: Bridge Crew', 'takes place in the timeline established in the 2009 Star Trek film and sees the Starfleet ship USS Aegis searching', '2019-06-21', '-next-generation-dlc-out-now.jpeg', './data/-next-generation-dlc-out-now.jpeg', 29262, 'https://www.ubisoft.com/en-gb/game/star-trek-bridge-crew/'),
	(8, 'Space Pirate Trainer', 'Space Pirate Trainer puts you inside the arcade game - fighting off relentless waves of droids with all the weapons and gadgets a Space Pirate would ever need.', '2019-06-21', '수정됨_capsule_616x353.jpg', './data/수정됨_capsule_616x353.jpg', 23380, 'https://www.spacepiratetrainer.com/'),
	(9, '새로운 게임포스팅입니다', '그렇습니다.', '2019-06-23', 'daniel-liang-final12.jpg', './data/daniel-liang-final12.jpg', 303888, 'www.djelfhemswlans.com'),
	(10, '아무게시글이나', '그렇습니다', '2019-06-23', 'jan-urschel-sketch20150210-small.jpg', './data/jan-urschel-sketch20150210-small.jpg', 382268, 'www.dkanrjsk.com');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;

-- 테이블 vrcdb.user 구조 내보내기
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pw` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `admin` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 vrcdb.user:~3 rows (대략적) 내보내기
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `pw`, `name`, `admin`) VALUES
	('park', '12345', 'parker', 'n'),
	('sindm', '1234', 'noname', 'y'),
	('sindm93', '12345', 'kim', 'n');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- 테이블 vrcdb.video 구조 내보내기
CREATE TABLE IF NOT EXISTS `video` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udate` datetime NOT NULL,
  `filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `targeturl` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 vrcdb.video:~23 rows (대략적) 내보내기
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`no`, `type`, `title`, `note`, `udate`, `filename`, `url`, `size`, `targeturl`) VALUES
	(3, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:07', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(4, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:17', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(5, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:18', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(6, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:18', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(7, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:18', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(8, 'replay', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:18', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(9, 'world', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:27', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(10, 'world', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:27', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(11, 'world', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:28', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(12, 'world', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:28', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(13, 'world', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:28', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(15, 'review', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:43', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(16, 'review', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:43', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(17, 'review', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:43', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(18, 'review', '[트위치 풀영상] VR로 즐기는 신개념 테트리스! (Tetris Effect)', '2018년 11월 14일(수) 버추얼월드 트위치 방송입니다!', '2019-06-22 04:12:44', '수정됨_제목 없음.jpg', './data/수정됨_제목 없음.jpg', 20706, 'https://www.youtube.com/watch?v=LcPqEgqFwY8'),
	(19, 'replay', 'SLIVER.tv VR Stadium Experience Trailer', 'SLIVER.tv is proud to present another amazing innovation in the VR/360 eSports spectating experience', '2019-06-22 18:49:34', '수정됨_vrb3.jpg', './data/수정됨_vrb3.jpg', 25500, 'https://www.youtube.com/watch?v=VFqqocbv4mc'),
	(20, 'replay', 'SLIVER.tv Launches VR Live Cast and Live Replay', 'We are looking forward to watching this technology grow and evolve as we broadcast more and more eve', '2019-06-22 18:50:33', '수정됨_vrb2.png', './data/수정됨_vrb2.png', 103714, 'http://www.catsandvr.com/blog/sliver'),
	(21, 'world', 'PlayStation VR Worlds', 'Journey through 5 different virtual reality experiences developed exclusively for PlayStation VR.', '2019-06-22 18:53:07', '수정됨_다운로드 (1).jpg', './data/수정됨_다운로드 (1).jpg', 19607, 'https://www.youtube.com/watch?v=69XFqRfzl_k'),
	(22, 'world', 'VR World NYC: Home', 'Discover The Largest Virtual Reality Entertainment Attraction This Side Of The Planet.', '2019-06-22 18:55:52', '수정됨_vr-world-congress-b2b-takeaways.jpg', './data/수정됨_vr-world-congress-b2b-takeaways.jpg', 21456, 'https://vrworldnyc.com/'),
	(23, 'world', 'VR World Media - YouTube', 'VR World Media offers authenticity and integrity delivered as ad units, enabling brands and advertis', '2019-06-22 18:56:49', '수정됨_다운로드 (2).jpg', './data/수정됨_다운로드 (2).jpg', 26781, 'https://www.youtube.com/watch?v=-AAeOUbrFbU'),
	(24, 'review', 'OCULUS GO: Still worth it in 2019?', 'Are you considering getting an Oculus Go but wondering if its worth it in ... Oculus Go ', '2019-06-22 18:58:48', '수정됨_다운로드 (3).jpg', './data/수정됨_다운로드 (3).jpg', 12177, 'https://www.youtube.com/watch?v=4fKZ1NDqBo4'),
	(25, 'review', 'HTC Vive VR review - YouTube', 'The Vive, a powerful but unvarnished virtual reality headset from Valve and HTC', '2019-06-22 18:59:47', '수정됨_images (1).jpg', './data/수정됨_images (1).jpg', 14839, 'https://www.youtube.com/watch?v=7zqp1szDWyA'),
	(26, 'review', 'Tested: PlayStation VR Review - YouTube', 'Its finally here! We review Sony virtual reality headset, PlayStation VR, which has potential to bri', '2019-06-22 19:01:03', '수정됨_psvr-review-9.jpg', './data/수정됨_psvr-review-9.jpg', 17939, 'https://www.youtube.com/watch?v=qi28_4HKVLE');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
