-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 12:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `text` varchar(250) NOT NULL,
  `barname` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`text`, `barname`, `location`, `image`, `id`) VALUES
('Rooftop ของโรงแรมโนโวเทล สามารถมองเห็นวิวใจกลางสุขุมวิท เหมาะกับการไปนั่งชิล อาหารส่วนใหญ่จะเป็นอาหารทานเล่น แนะนำ\r\nPizza, Crab Bruschetta อร่อยค่ะ ', 'Sky on 20', 'Sukhumvit', 'http://localhost/Bangbar/uploads/s1.jpg', 49),
('มีทั้งอาหารและเครื่องดื่มให้เลือกสรรค่า แต่จะเน้นที่เครื่องดื่มมากกว่า อร่อยทุกอย่างเลยค่า ดีมากๆ', 'Escape Bangkok Rooftop', 'Sukhumvit', 'http://localhost/Bangbar/uploads/s2(2).jpg', 51),
('ผับแนวอังกฤษกับการนั่งดูกีฬาในยามค่ำคืน ดื่มเบียร์เย็นๆกินกับแกล้มเชียร์บอลไปเรื่อยๆ คุยกับเพื่อนไปชิลๆ น่ามานั่งครับ', 'Robin Hood Pub', 'Sukhumvit', 'http://localhost/Bangbar/uploads/s3.jpg', 52),
('เป็นร้านที่ดูหรูหรา แต่ราคาไม่ได้แพงอย่างที่คิด ถ้าคืนไหนอยากออกไปดินเนอร์ชิลๆ แบบไม่วุ่นวาย ร้านนี้ก็มักจะเป็นร้านแรกๆที่pop up ขึ้นมาในใจอยู่เสมอ', 'Wine I Love You', 'Rachada', 'http://localhost/Bangbar/uploads/s4.jpg', 53),
('Cafe & Restaurant เล็กๆ แต่อบอุ่น ที่เมนูอาหารไม่เล็กไปด้วยเลย เนื่องจากมีเมนูให้เลือกอร่อยมากมาย ซึ่งเท่าที่สั่งมาก็อร่อยถูกปากไปซะหมดจนไม่รู้จะแนะนำเมนูไหนดี แต่ละเสิร์ฟก็จานใหญ่อิ่มท้องสบายๆ ', 'Anub Cafe & Restaurant', 'Rachada', 'http://localhost/Bangbar/uploads/s5.2.jpg', 55),
('แบบบรรยากาศน่ารัก มาครั้งแรกหลงรักเลยค่ะ เจ้าของน่ารักมาก เด็กเสิร์ฟที่มีอยู่เพียงท่านเดียวก้อบริการดีค่ะ\r\nสั่งสเต๊กมาทานคู่กับ gin tonic ก็โอเคค่ะ  ', 'Mustache Bar', 'Rachada', 'http://localhost/Bangbar/uploads/s6.jpg', 56),
('สไตล์ของร้านจะเป็นฟีลสบาย ๆ มีโซนที่นั่งแบบริมน้ำ กินข้าวไป จิบเครื่องดื่ม คละเคล้าไอเย็น ๆ ใครชอบแบบชิดติดขอบเวที ดู Live Concert มันส์ ๆ ก็มีโซนกึ่ง indoor ให้เลือกด้วย อาหาร-เครื่องดื่ม ก็มาครบทั้ง', 'Fullmoon Terrace & Bar', 'Ladprao', 'http://localhost/Bangbar/uploads/la1.jpg', 57),
('ตั้งอยู่ตรงข้ามกับยูเนี่ยนมอลล์ พื้นที่ในส่วนของร้านค่อนข้างกว้างขวาง โต๊ะนั่งเยอะ ดนตรีสดสไตล์ easy listening สบายๆ ในรูปแบบ Open Air', 'Manila', 'Ladprao', 'http://localhost/Bangbar/uploads/la2.jpg', 58),
('ร้านตกแต่งสไตล์จีนร่วมสมัย มีโคมแดงเป็นจุดคลายแม็กซ์ ประตูสีแดงทางเข้าตอกย้ำการตกแต่งสุดล้ำ แกล้มหมาล่าไก่คาระเกะสุดจี๊ด ทีเด็ดของที่นี่เลยละค่ะ', 'Ninetails Bar & Booster', 'Ladprao', 'http://localhost/Bangbar/uploads/la3.jpeg', 59),
('บาร์เกาหลีเต็นท์แดงสุดปังในย่านลาดกระบัง ร้านสวยมากๆ ให้ฟีลเกาหลีสุด มีมุมให้ถ่ายรูปเยอะ ที่สำคัญอาหารอร่อยเหมือนกินที่เกาหลีเลยแม่', 'Sowon Bar', 'Ladkrabang', 'http://localhost/Bangbar/uploads/lad1.jpg', 60),
('ในร้านบรรยากาศดี แถวลาดกระบัง ด้วยกิจกรรมสนุกๆ จาก JOHNNIE WALKER ที่จะให้คุณได้ Hangout กันยกก๊วน พร้อมนั่งชิลล์ๆ ดูลูกโป่งสวยๆ ที่ประดับประดาทั่วทุกมุมของร้าน ', 'Boozer', 'Ladkrabang', 'http://localhost/Bangbar/uploads/lad2.jpg', 61),
('อาหารรสชาติดี ราคาโอเค ดนตรีเพราะอยู่นะ ร้านบรรยากาศโอเคเลย โดยส่วนตัวถือว่าชอบค่ะ', '72 RaceBar', 'Ladkrabang', 'http://localhost/Bangbar/uploads/lad3.jpg', 62),
('ใครกำลังมองหาร้านนั่งชิลล์ย่านบางนาอยู่ แนะนำ \"Loft Bar\" เลยค่ะ เดินทางสะดวก อยู่หลังเซ็นทรัลบางนานี่เอง บรรยากาศร้านตกแต่งในสไตล์ลอฟต์ ชิคคูลถูกใจมาก  ', 'Loft Bar Bangna', 'Bangna', 'http://localhost/Bangbar/uploads/ba1.jpg', 63),
('เป็นร้านนั่งชิลล์ที่อาหารมาไวมาก! รสชาติดี เพลงเพราะ บรรยากาศชิลล์จริง ๆ เหมาะสำหรับมานั่งดื่มกับเพื่อน ๆ ทางร้านมีที่นั่งทั้งแบบในร้านและนอกร้าน', 'My Corner Dine&Lounge', 'Bangna', 'http://localhost/Bangbar/uploads/ba2.jpg', 64),
('ทางร้านมีบริการเครื่องดื่มไว้หลากหลายทั้งเหล้า เบียร์ ค็อกเทล แนะนำให้ลองค็อกเทลสูตรเฉพาะของทางร้าน \r\nจุดเด่น คือดนตรีสดมีให้เลือกฟังทั้ง folksong และ fullband', 'Echo Bar', 'Bangna', 'http://localhost/Bangbar/uploads/ba3.jpg', 65),
('test', 'test', 'Ladkrabang', 'http://localhost/Bangbar/uploads/desktop.PNG', 69);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('min', 'd8bd79cc131920d5de426f914d17405a', ''),
('test1', '5a105e8b9d40e1329780d62ea2265d8a', 'thitirat.min@hotmail.com'),
('ss', '3691308f2a4c2f6983f2880d32e29c84', ''),
('admin', '21232f297a57a5a743894a0e4a801fc3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
