-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 07:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teaxr`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(10) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `districtname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `statename`, `districtname`) VALUES
(1, 'Andaman Nicobar', 'Nicobar'),
(2, 'Andaman Nicobar', 'North Middle Andaman'),
(3, 'Andaman Nicobar', 'South Andaman'),
(4, 'Andhra Pradesh', 'Anantapur'),
(5, 'Andhra Pradesh', 'Chittoor'),
(6, 'Andhra Pradesh', 'East Godavari'),
(7, 'Andhra Pradesh', 'Guntur'),
(8, 'Andhra Pradesh', 'Kadapa'),
(9, 'Andhra Pradesh', 'Krishna'),
(10, 'Andhra Pradesh', 'Kurnool'),
(11, 'Andhra Pradesh', 'Nellore'),
(12, 'Andhra Pradesh', 'Prakasam'),
(13, 'Andhra Pradesh', 'Srikakulam'),
(14, 'Andhra Pradesh', 'Visakhapatnam'),
(15, 'Andhra Pradesh', 'Vizianagaram'),
(16, 'Andhra Pradesh', 'West Godavari'),
(17, 'Arunachal Pradesh', 'Anjaw'),
(18, 'Arunachal Pradesh', 'Central Siang'),
(19, 'Arunachal Pradesh', 'Changlang'),
(20, 'Arunachal Pradesh', 'Dibang Valley'),
(21, 'Arunachal Pradesh', 'East Kameng'),
(22, 'Arunachal Pradesh', 'East Siang'),
(23, 'Arunachal Pradesh', 'Kra Daadi'),
(24, 'Arunachal Pradesh', 'Kurung Kumey'),
(25, 'Arunachal Pradesh', 'Lohit'),
(26, 'Arunachal Pradesh', 'Longding'),
(27, 'Arunachal Pradesh', 'Lower Dibang Valley'),
(28, 'Arunachal Pradesh', 'Lower Subansiri'),
(29, 'Arunachal Pradesh', 'Namsai'),
(30, 'Arunachal Pradesh', 'Papum Pare'),
(31, 'Arunachal Pradesh', 'Tawang'),
(32, 'Arunachal Pradesh', 'Tirap'),
(33, 'Arunachal Pradesh', 'Upper Siang'),
(34, 'Arunachal Pradesh', 'Upper Subansiri'),
(35, 'Arunachal Pradesh', 'West Kameng'),
(36, 'Arunachal Pradesh', 'West Siang'),
(37, 'Assam', 'Baksa'),
(38, 'Assam', 'Barpeta'),
(39, 'Assam', 'Biswanath'),
(40, 'Assam', 'Bongaigaon'),
(41, 'Assam', 'Cachar'),
(42, 'Assam', 'Charaideo'),
(43, 'Assam', 'Chirang'),
(44, 'Assam', 'Darrang'),
(45, 'Assam', 'Dhemaji'),
(46, 'Assam', 'Dhubri'),
(47, 'Assam', 'Dibrugarh'),
(48, 'Assam', 'Dima Hasao'),
(49, 'Assam', 'Goalpara'),
(50, 'Assam', 'Golaghat'),
(51, 'Assam', 'Hailakandi'),
(52, 'Assam', 'Hojai'),
(53, 'Assam', 'Jorhat'),
(54, 'Assam', 'Kamrup'),
(55, 'Assam', 'Kamrup Metropolitan'),
(56, 'Assam', 'Karbi Anglong'),
(57, 'Assam', 'Karimganj'),
(58, 'Assam', 'Kokrajhar'),
(59, 'Assam', 'Lakhimpur'),
(60, 'Assam', 'Majuli'),
(61, 'Assam', 'Morigaon'),
(62, 'Assam', 'Nagaon'),
(63, 'Assam', 'Nalbari'),
(64, 'Assam', 'Sivasagar'),
(65, 'Assam', 'Sonitpur'),
(66, 'Assam', 'South Salmara-Mankachar'),
(67, 'Assam', 'Tinsukia'),
(68, 'Assam', 'Udalguri'),
(69, 'Assam', 'West Karbi Anglong'),
(70, 'Bihar', 'Araria'),
(71, 'Bihar', 'Arwal'),
(72, 'Bihar', 'Aurangabad'),
(73, 'Bihar', 'Banka'),
(74, 'Bihar', 'Begusarai'),
(75, 'Bihar', 'Bhagalpur'),
(76, 'Bihar', 'Bhojpur'),
(77, 'Bihar', 'Buxar'),
(78, 'Bihar', 'Darbhanga'),
(79, 'Bihar', 'East Champaran'),
(80, 'Bihar', 'Gaya'),
(81, 'Bihar', 'Gopalganj'),
(82, 'Bihar', 'Jamui'),
(83, 'Bihar', 'Jehanabad'),
(84, 'Bihar', 'Kaimur'),
(85, 'Bihar', 'Katihar'),
(86, 'Bihar', 'Khagaria'),
(87, 'Bihar', 'Kishanganj'),
(88, 'Bihar', 'Lakhisarai'),
(89, 'Bihar', 'Madhepura'),
(90, 'Bihar', 'Madhubani'),
(91, 'Bihar', 'Munger'),
(92, 'Bihar', 'Muzaffarpur'),
(93, 'Bihar', 'Nalanda'),
(94, 'Bihar', 'Nawada'),
(95, 'Bihar', 'Patna'),
(96, 'Bihar', 'Purnia'),
(97, 'Bihar', 'Rohtas'),
(98, 'Bihar', 'Saharsa'),
(99, 'Bihar', 'Samastipur'),
(100, 'Bihar', 'Saran'),
(101, 'Bihar', 'Sheikhpura'),
(102, 'Bihar', 'Sheohar'),
(103, 'Bihar', 'Sitamarhi'),
(104, 'Bihar', 'Siwan'),
(105, 'Bihar', 'Supaul'),
(106, 'Bihar', 'Vaishali'),
(107, 'Bihar', 'West Champaran'),
(108, 'Chandigarh', 'Chandigarh'),
(109, 'Chhattisgarh', 'Balod'),
(110, 'Chhattisgarh', 'Baloda Bazar'),
(111, 'Chhattisgarh', 'Balrampur'),
(112, 'Chhattisgarh', 'Bastar'),
(113, 'Chhattisgarh', 'Bemetara'),
(114, 'Chhattisgarh', 'Bijapur'),
(115, 'Chhattisgarh', 'Bilaspur'),
(116, 'Chhattisgarh', 'Dantewada'),
(117, 'Chhattisgarh', 'Dhamtari'),
(118, 'Chhattisgarh', 'Durg'),
(119, 'Chhattisgarh', 'Gariaband'),
(120, 'Chhattisgarh', 'Janjgir Champa'),
(121, 'Chhattisgarh', 'Jashpur'),
(122, 'Chhattisgarh', 'Kabirdham'),
(123, 'Chhattisgarh', 'Kanker'),
(124, 'Chhattisgarh', 'Kondagaon'),
(125, 'Chhattisgarh', 'Korba'),
(126, 'Chhattisgarh', 'Koriya'),
(127, 'Chhattisgarh', 'Mahasamund'),
(128, 'Chhattisgarh', 'Mungeli'),
(129, 'Chhattisgarh', 'Narayanpur'),
(130, 'Chhattisgarh', 'Raigarh'),
(131, 'Chhattisgarh', 'Raipur'),
(132, 'Chhattisgarh', 'Rajnandgaon'),
(133, 'Chhattisgarh', 'Sukma'),
(134, 'Chhattisgarh', 'Surajpur'),
(135, 'Chhattisgarh', 'Surguja'),
(136, 'Dadra Nagar Haveli', 'Dadra Nagar Haveli'),
(137, 'Daman Diu', 'Daman'),
(138, 'Daman Diu', 'Diu'),
(139, 'Delhi', 'Central Delhi'),
(140, 'Delhi', 'East Delhi'),
(141, 'Delhi', 'New Delhi'),
(142, 'Delhi', 'North Delhi'),
(143, 'Delhi', 'North East Delhi'),
(144, 'Delhi', 'North West Delhi'),
(145, 'Delhi', 'Shahdara'),
(146, 'Delhi', 'South Delhi'),
(147, 'Delhi', 'South East Delhi'),
(148, 'Delhi', 'South West Delhi'),
(149, 'Delhi', 'West Delhi'),
(150, 'Goa', 'North Goa'),
(151, 'Goa', 'South Goa'),
(152, 'Gujarat', 'Ahmedabad'),
(153, 'Gujarat', 'Amreli'),
(154, 'Gujarat', 'Anand'),
(155, 'Gujarat', 'Aravalli'),
(156, 'Gujarat', 'Banaskantha'),
(157, 'Gujarat', 'Bharuch'),
(158, 'Gujarat', 'Bhavnagar'),
(159, 'Gujarat', 'Botad'),
(160, 'Gujarat', 'Chhota Udaipur'),
(161, 'Gujarat', 'Dahod'),
(162, 'Gujarat', 'Dang'),
(163, 'Gujarat', 'Devbhoomi Dwarka'),
(164, 'Gujarat', 'Gandhinagar'),
(165, 'Gujarat', 'Gir Somnath'),
(166, 'Gujarat', 'Jamnagar'),
(167, 'Gujarat', 'Junagadh'),
(168, 'Gujarat', 'Kheda'),
(169, 'Gujarat', 'Kutch'),
(170, 'Gujarat', 'Mahisagar'),
(171, 'Gujarat', 'Mehsana'),
(172, 'Gujarat', 'Morbi'),
(173, 'Gujarat', 'Narmada'),
(174, 'Gujarat', 'Navsari'),
(175, 'Gujarat', 'Panchmahal'),
(176, 'Gujarat', 'Patan'),
(177, 'Gujarat', 'Porbandar'),
(178, 'Gujarat', 'Rajkot'),
(179, 'Gujarat', 'Sabarkantha'),
(180, 'Gujarat', 'Surat'),
(181, 'Gujarat', 'Surendranagar'),
(182, 'Gujarat', 'Tapi'),
(183, 'Gujarat', 'Vadodara'),
(184, 'Gujarat', 'Valsad'),
(185, 'Haryana', 'Ambala'),
(186, 'Haryana', 'Bhiwani'),
(187, 'Haryana', 'Charkhi Dadri'),
(188, 'Haryana', 'Faridabad'),
(189, 'Haryana', 'Fatehabad'),
(190, 'Haryana', 'Gurugram'),
(191, 'Haryana', 'Hisar'),
(192, 'Haryana', 'Jhajjar'),
(193, 'Haryana', 'Jind'),
(194, 'Haryana', 'Kaithal'),
(195, 'Haryana', 'Karnal'),
(196, 'Haryana', 'Kurukshetra'),
(197, 'Haryana', 'Mahendragarh'),
(198, 'Haryana', 'Mewat'),
(199, 'Haryana', 'Palwal'),
(200, 'Haryana', 'Panchkula'),
(201, 'Haryana', 'Panipat'),
(202, 'Haryana', 'Rewari'),
(203, 'Haryana', 'Rohtak'),
(204, 'Haryana', 'Sirsa'),
(205, 'Haryana', 'Sonipat'),
(206, 'Haryana', 'Yamunanagar'),
(207, 'Himachal Pradesh', 'Bilaspur'),
(208, 'Himachal Pradesh', 'Chamba'),
(209, 'Himachal Pradesh', 'Hamirpur'),
(210, 'Himachal Pradesh', 'Kangra'),
(211, 'Himachal Pradesh', 'Kinnaur'),
(212, 'Himachal Pradesh', 'Kullu'),
(213, 'Himachal Pradesh', 'Lahaul Spiti'),
(214, 'Himachal Pradesh', 'Mandi'),
(215, 'Himachal Pradesh', 'Shimla'),
(216, 'Himachal Pradesh', 'Sirmaur'),
(217, 'Himachal Pradesh', 'Solan'),
(218, 'Himachal Pradesh', 'Una'),
(219, 'Jammu Kashmir', 'Anantnag'),
(220, 'Jammu Kashmir', 'Bandipora'),
(221, 'Jammu Kashmir', 'Baramulla'),
(222, 'Jammu Kashmir', 'Budgam'),
(223, 'Jammu Kashmir', 'Doda'),
(224, 'Jammu Kashmir', 'Ganderbal'),
(225, 'Jammu Kashmir', 'Jammu'),
(226, 'Jammu Kashmir', 'Kargil'),
(227, 'Jammu Kashmir', 'Kathua'),
(228, 'Jammu Kashmir', 'Kishtwar'),
(229, 'Jammu Kashmir', 'Kulgam'),
(230, 'Jammu Kashmir', 'Kupwara'),
(231, 'Jammu Kashmir', 'Leh'),
(232, 'Jammu Kashmir', 'Poonch'),
(233, 'Jammu Kashmir', 'Pulwama'),
(234, 'Jammu Kashmir', 'Rajouri'),
(235, 'Jammu Kashmir', 'Ramban'),
(236, 'Jammu Kashmir', 'Reasi'),
(237, 'Jammu Kashmir', 'Samba'),
(238, 'Jammu Kashmir', 'Shopian'),
(239, 'Jammu Kashmir', 'Srinagar'),
(240, 'Jammu Kashmir', 'Udhampur'),
(241, 'Jharkhand', 'Bokaro'),
(242, 'Jharkhand', 'Chatra'),
(243, 'Jharkhand', 'Deoghar'),
(244, 'Jharkhand', 'Dhanbad'),
(245, 'Jharkhand', 'Dumka'),
(246, 'Jharkhand', 'East Singhbhum'),
(247, 'Jharkhand', 'Garhwa'),
(248, 'Jharkhand', 'Giridih'),
(249, 'Jharkhand', 'Godda'),
(250, 'Jharkhand', 'Gumla'),
(251, 'Jharkhand', 'Hazaribagh'),
(252, 'Jharkhand', 'Jamtara'),
(253, 'Jharkhand', 'Khunti'),
(254, 'Jharkhand', 'Koderma'),
(255, 'Jharkhand', 'Latehar'),
(256, 'Jharkhand', 'Lohardaga'),
(257, 'Jharkhand', 'Pakur'),
(258, 'Jharkhand', 'Palamu'),
(259, 'Jharkhand', 'Ramgarh'),
(260, 'Jharkhand', 'Ranchi'),
(261, 'Jharkhand', 'Sahebganj'),
(262, 'Jharkhand', 'Seraikela Kharsawan'),
(263, 'Jharkhand', 'Simdega'),
(264, 'Jharkhand', 'West Singhbhum'),
(265, 'Karnataka', 'Bagalkot'),
(266, 'Karnataka', 'Bangalore Rural'),
(267, 'Karnataka', 'Bangalore Urban'),
(268, 'Karnataka', 'Belgaum'),
(269, 'Karnataka', 'Bellary'),
(270, 'Karnataka', 'Bidar'),
(271, 'Karnataka', 'Bijapur'),
(272, 'Karnataka', 'Chamarajanagar'),
(273, 'Karnataka', 'Chikkaballapur'),
(274, 'Karnataka', 'Chikkamagaluru'),
(275, 'Karnataka', 'Chitradurga'),
(276, 'Karnataka', 'Dakshina Kannada'),
(277, 'Karnataka', 'Davanagere'),
(278, 'Karnataka', 'Dharwad'),
(279, 'Karnataka', 'Gadag'),
(280, 'Karnataka', 'Gulbarga'),
(281, 'Karnataka', 'Hassan'),
(282, 'Karnataka', 'Haveri'),
(283, 'Karnataka', 'Kodagu'),
(284, 'Karnataka', 'Kolar'),
(285, 'Karnataka', 'Koppal'),
(286, 'Karnataka', 'Mandya'),
(287, 'Karnataka', 'Mysore'),
(288, 'Karnataka', 'Raichur'),
(289, 'Karnataka', 'Ramanagara'),
(290, 'Karnataka', 'Shimoga'),
(291, 'Karnataka', 'Tumkur'),
(292, 'Karnataka', 'Udupi'),
(293, 'Karnataka', 'Uttara Kannada'),
(294, 'Karnataka', 'Yadgir'),
(295, 'Kerala', 'Alappuzha'),
(296, 'Kerala', 'Ernakulam'),
(297, 'Kerala', 'Idukki'),
(298, 'Kerala', 'Kannur'),
(299, 'Kerala', 'Kasaragod'),
(300, 'Kerala', 'Kollam'),
(301, 'Kerala', 'Kottayam'),
(302, 'Kerala', 'Kozhikode'),
(303, 'Kerala', 'Malappuram'),
(304, 'Kerala', 'Palakkad'),
(305, 'Kerala', 'Pathanamthitta'),
(306, 'Kerala', 'Thiruvananthapuram'),
(307, 'Kerala', 'Thrissur'),
(308, 'Kerala', 'Wayanad'),
(309, 'Lakshadweep', 'Lakshadweep'),
(310, 'Madhya Pradesh', 'Agar Malwa'),
(311, 'Madhya Pradesh', 'Alirajpur'),
(312, 'Madhya Pradesh', 'Anuppur'),
(313, 'Madhya Pradesh', 'Ashoknagar'),
(314, 'Madhya Pradesh', 'Balaghat'),
(315, 'Madhya Pradesh', 'Barwani'),
(316, 'Madhya Pradesh', 'Betul'),
(317, 'Madhya Pradesh', 'Bhind'),
(318, 'Madhya Pradesh', 'Bhopal'),
(319, 'Madhya Pradesh', 'Burhanpur'),
(320, 'Madhya Pradesh', 'Chhatarpur'),
(321, 'Madhya Pradesh', 'Chhindwara'),
(322, 'Madhya Pradesh', 'Damoh'),
(323, 'Madhya Pradesh', 'Datia'),
(324, 'Madhya Pradesh', 'Dewas'),
(325, 'Madhya Pradesh', 'Dhar'),
(326, 'Madhya Pradesh', 'Dindori'),
(327, 'Madhya Pradesh', 'Guna'),
(328, 'Madhya Pradesh', 'Gwalior'),
(329, 'Madhya Pradesh', 'Harda'),
(330, 'Madhya Pradesh', 'Hoshangabad'),
(331, 'Madhya Pradesh', 'Indore'),
(332, 'Madhya Pradesh', 'Jabalpur'),
(333, 'Madhya Pradesh', 'Jhabua'),
(334, 'Madhya Pradesh', 'Katni'),
(335, 'Madhya Pradesh', 'Khandwa'),
(336, 'Madhya Pradesh', 'Khargone'),
(337, 'Madhya Pradesh', 'Mandla'),
(338, 'Madhya Pradesh', 'Mandsaur'),
(339, 'Madhya Pradesh', 'Morena'),
(340, 'Madhya Pradesh', 'Narsinghpur'),
(341, 'Madhya Pradesh', 'Neemuch'),
(342, 'Madhya Pradesh', 'Panna'),
(343, 'Madhya Pradesh', 'Raisen'),
(344, 'Madhya Pradesh', 'Rajgarh'),
(345, 'Madhya Pradesh', 'Ratlam'),
(346, 'Madhya Pradesh', 'Rewa'),
(347, 'Madhya Pradesh', 'Sagar'),
(348, 'Madhya Pradesh', 'Satna'),
(349, 'Madhya Pradesh', 'Sehore'),
(350, 'Madhya Pradesh', 'Seoni'),
(351, 'Madhya Pradesh', 'Shahdol'),
(352, 'Madhya Pradesh', 'Shajapur'),
(353, 'Madhya Pradesh', 'Sheopur'),
(354, 'Madhya Pradesh', 'Shivpuri'),
(355, 'Madhya Pradesh', 'Sidhi'),
(356, 'Madhya Pradesh', 'Singrauli'),
(357, 'Madhya Pradesh', 'Tikamgarh'),
(358, 'Madhya Pradesh', 'Ujjain'),
(359, 'Madhya Pradesh', 'Umaria'),
(360, 'Madhya Pradesh', 'Vidisha'),
(361, 'Maharashtra', 'Ahmednagar'),
(362, 'Maharashtra', 'Akola'),
(363, 'Maharashtra', 'Amravati'),
(364, 'Maharashtra', 'Aurangabad'),
(365, 'Maharashtra', 'Beed'),
(366, 'Maharashtra', 'Bhandara'),
(367, 'Maharashtra', 'Buldhana'),
(368, 'Maharashtra', 'Chandrapur'),
(369, 'Maharashtra', 'Dhule'),
(370, 'Maharashtra', 'Gadchiroli'),
(371, 'Maharashtra', 'Gondia'),
(372, 'Maharashtra', 'Hingoli'),
(373, 'Maharashtra', 'Jalgaon'),
(374, 'Maharashtra', 'Jalna'),
(375, 'Maharashtra', 'Kolhapur'),
(376, 'Maharashtra', 'Latur'),
(377, 'Maharashtra', 'Mumbai City'),
(378, 'Maharashtra', 'Mumbai Suburban'),
(379, 'Maharashtra', 'Nagpur'),
(380, 'Maharashtra', 'Nanded'),
(381, 'Maharashtra', 'Nandurbar'),
(382, 'Maharashtra', 'Nashik'),
(383, 'Maharashtra', 'Osmanabad'),
(384, 'Maharashtra', 'Palghar'),
(385, 'Maharashtra', 'Parbhani'),
(386, 'Maharashtra', 'Pune'),
(387, 'Maharashtra', 'Raigad'),
(388, 'Maharashtra', 'Ratnagiri'),
(389, 'Maharashtra', 'Sangli'),
(390, 'Maharashtra', 'Satara'),
(391, 'Maharashtra', 'Sindhudurg'),
(392, 'Maharashtra', 'Solapur'),
(393, 'Maharashtra', 'Thane'),
(394, 'Maharashtra', 'Wardha'),
(395, 'Maharashtra', 'Washim'),
(396, 'Maharashtra', 'Yavatmal'),
(397, 'Manipur', 'Bishnupur'),
(398, 'Manipur', 'Chandel'),
(399, 'Manipur', 'Churachandpur'),
(400, 'Manipur', 'Imphal East'),
(401, 'Manipur', 'Imphal West'),
(402, 'Manipur', 'Senapati'),
(403, 'Manipur', 'Tamenglong'),
(404, 'Manipur', 'Thoubal'),
(405, 'Manipur', 'Ukhrul'),
(406, 'Meghalaya', 'East Garo Hills'),
(407, 'Meghalaya', 'East Jaintia Hills'),
(408, 'Meghalaya', 'East Khasi Hills'),
(409, 'Meghalaya', 'North Garo Hills'),
(410, 'Meghalaya', 'Ri Bhoi'),
(411, 'Meghalaya', 'South Garo Hills'),
(412, 'Meghalaya', 'South West Garo Hills'),
(413, 'Meghalaya', 'South West Khasi Hills'),
(414, 'Meghalaya', 'West Garo Hills'),
(415, 'Meghalaya', 'West Jaintia Hills'),
(416, 'Meghalaya', 'West Khasi Hills'),
(417, 'Mizoram', 'Aizawl'),
(418, 'Mizoram', 'Champhai'),
(419, 'Mizoram', 'Kolasib'),
(420, 'Mizoram', 'Lawngtlai'),
(421, 'Mizoram', 'Lunglei'),
(422, 'Mizoram', 'Mamit'),
(423, 'Mizoram', 'Saiha'),
(424, 'Mizoram', 'Serchhip'),
(425, 'Nagaland', 'Dimapur'),
(426, 'Nagaland', 'Kiphire'),
(427, 'Nagaland', 'Kohima'),
(428, 'Nagaland', 'Longleng'),
(429, 'Nagaland', 'Mokokchung'),
(430, 'Nagaland', 'Mon'),
(431, 'Nagaland', 'Peren'),
(432, 'Nagaland', 'Phek'),
(433, 'Nagaland', 'Tuensang'),
(434, 'Nagaland', 'Wokha'),
(435, 'Nagaland', 'Zunheboto'),
(436, 'Odisha', 'Angul'),
(437, 'Odisha', 'Balangir'),
(438, 'Odisha', 'Balasore'),
(439, 'Odisha', 'Bargarh'),
(440, 'Odisha', 'Bhadrak'),
(441, 'Odisha', 'Boudh'),
(442, 'Odisha', 'Cuttack'),
(443, 'Odisha', 'Debagarh'),
(444, 'Odisha', 'Dhenkanal'),
(445, 'Odisha', 'Gajapati'),
(446, 'Odisha', 'Ganjam'),
(447, 'Odisha', 'Jagatsinghpur'),
(448, 'Odisha', 'Jajpur'),
(449, 'Odisha', 'Jharsuguda'),
(450, 'Odisha', 'Kalahandi'),
(451, 'Odisha', 'Kandhamal'),
(452, 'Odisha', 'Kendrapara'),
(453, 'Odisha', 'Kendujhar'),
(454, 'Odisha', 'Khordha'),
(455, 'Odisha', 'Koraput'),
(456, 'Odisha', 'Malkangiri'),
(457, 'Odisha', 'Mayurbhanj'),
(458, 'Odisha', 'Nabarangpur'),
(459, 'Odisha', 'Nayagarh'),
(460, 'Odisha', 'Nuapada'),
(461, 'Odisha', 'Puri'),
(462, 'Odisha', 'Rayagada'),
(463, 'Odisha', 'Sambalpur'),
(464, 'Odisha', 'Subarnapur'),
(465, 'Odisha', 'Sundergarh'),
(466, 'Puducherry', 'Karaikal'),
(467, 'Puducherry', 'Mahe'),
(468, 'Puducherry', 'Puducherry'),
(469, 'Puducherry', 'Yanam'),
(470, 'Punjab', 'Amritsar'),
(471, 'Punjab', 'Barnala'),
(472, 'Punjab', 'Bathinda'),
(473, 'Punjab', 'Faridkot'),
(474, 'Punjab', 'Fatehgarh Sahib'),
(475, 'Punjab', 'Fazilka'),
(476, 'Punjab', 'Firozpur'),
(477, 'Punjab', 'Gurdaspur'),
(478, 'Punjab', 'Hoshiarpur'),
(479, 'Punjab', 'Jalandhar'),
(480, 'Punjab', 'Kapurthala'),
(481, 'Punjab', 'Ludhiana'),
(482, 'Punjab', 'Mansa'),
(483, 'Punjab', 'Moga'),
(484, 'Punjab', 'Mohali'),
(485, 'Punjab', 'Muktsar'),
(486, 'Punjab', 'Pathankot'),
(487, 'Punjab', 'Patiala'),
(488, 'Punjab', 'Rupnagar'),
(489, 'Punjab', 'Sangrur'),
(490, 'Punjab', 'Shaheed Bhagat Singh Nagar'),
(491, 'Punjab', 'Tarn Taran'),
(492, 'Rajasthan', 'Ajmer'),
(493, 'Rajasthan', 'Alwar'),
(494, 'Rajasthan', 'Banswara'),
(495, 'Rajasthan', 'Baran'),
(496, 'Rajasthan', 'Barmer'),
(497, 'Rajasthan', 'Bharatpur'),
(498, 'Rajasthan', 'Bhilwara'),
(499, 'Rajasthan', 'Bikaner'),
(500, 'Rajasthan', 'Bundi'),
(501, 'Rajasthan', 'Chittorgarh'),
(502, 'Rajasthan', 'Churu'),
(503, 'Rajasthan', 'Dausa'),
(504, 'Rajasthan', 'Dholpur'),
(505, 'Rajasthan', 'Dungarpur'),
(506, 'Rajasthan', 'Ganganagar'),
(507, 'Rajasthan', 'Hanumangarh'),
(508, 'Rajasthan', 'Jaipur'),
(509, 'Rajasthan', 'Jaisalmer'),
(510, 'Rajasthan', 'Jalore'),
(511, 'Rajasthan', 'Jhalawar'),
(512, 'Rajasthan', 'Jhunjhunu'),
(513, 'Rajasthan', 'Jodhpur'),
(514, 'Rajasthan', 'Karauli'),
(515, 'Rajasthan', 'Kota'),
(516, 'Rajasthan', 'Nagaur'),
(517, 'Rajasthan', 'Pali'),
(518, 'Rajasthan', 'Pratapgarh'),
(519, 'Rajasthan', 'Rajsamand'),
(520, 'Rajasthan', 'Sawai Madhopur'),
(521, 'Rajasthan', 'Sikar'),
(522, 'Rajasthan', 'Sirohi'),
(523, 'Rajasthan', 'Tonk'),
(524, 'Rajasthan', 'Udaipur'),
(525, 'Sikkim', 'East Sikkim'),
(526, 'Sikkim', 'North Sikkim'),
(527, 'Sikkim', 'South Sikkim'),
(528, 'Sikkim', 'West Sikkim'),
(529, 'Tamil Nadu', 'Ariyalur'),
(530, 'Tamil Nadu', 'Chennai'),
(531, 'Tamil Nadu', 'Coimbatore'),
(532, 'Tamil Nadu', 'Cuddalore'),
(533, 'Tamil Nadu', 'Dharmapuri'),
(534, 'Tamil Nadu', 'Dindigul'),
(535, 'Tamil Nadu', 'Erode'),
(536, 'Tamil Nadu', 'Kanchipuram'),
(537, 'Tamil Nadu', 'Kanyakumari'),
(538, 'Tamil Nadu', 'Karur'),
(539, 'Tamil Nadu', 'Krishnagiri'),
(540, 'Tamil Nadu', 'Madurai'),
(541, 'Tamil Nadu', 'Nagapattinam'),
(542, 'Tamil Nadu', 'Namakkal'),
(543, 'Tamil Nadu', 'Nilgiris'),
(544, 'Tamil Nadu', 'Perambalur'),
(545, 'Tamil Nadu', 'Pudukkottai'),
(546, 'Tamil Nadu', 'Ramanathapuram'),
(547, 'Tamil Nadu', 'Salem'),
(548, 'Tamil Nadu', 'Sivaganga'),
(549, 'Tamil Nadu', 'Thanjavur'),
(550, 'Tamil Nadu', 'Theni'),
(551, 'Tamil Nadu', 'Thoothukudi'),
(552, 'Tamil Nadu', 'Tiruchirappalli'),
(553, 'Tamil Nadu', 'Tirunelveli'),
(554, 'Tamil Nadu', 'Tiruppur'),
(555, 'Tamil Nadu', 'Tiruvallur'),
(556, 'Tamil Nadu', 'Tiruvannamalai'),
(557, 'Tamil Nadu', 'Tiruvarur'),
(558, 'Tamil Nadu', 'Vellore'),
(559, 'Tamil Nadu', 'Viluppuram'),
(560, 'Tamil Nadu', 'Virudhunagar'),
(561, 'Telangana', 'Adilabad'),
(562, 'Telangana', 'Bhadradri Kothagudem'),
(563, 'Telangana', 'Hyderabad'),
(564, 'Telangana', 'Jagtial'),
(565, 'Telangana', 'Jangaon'),
(566, 'Telangana', 'Jayashankar'),
(567, 'Telangana', 'Jogulamba'),
(568, 'Telangana', 'Kamareddy'),
(569, 'Telangana', 'Karimnagar'),
(570, 'Telangana', 'Khammam'),
(571, 'Telangana', 'Komaram Bheem'),
(572, 'Telangana', 'Mahabubabad'),
(573, 'Telangana', 'Mahbubnagar'),
(574, 'Telangana', 'Mancherial'),
(575, 'Telangana', 'Medak'),
(576, 'Telangana', 'Medchal'),
(577, 'Telangana', 'Nagarkurnool'),
(578, 'Telangana', 'Nalgonda'),
(579, 'Telangana', 'Nirmal'),
(580, 'Telangana', 'Nizamabad'),
(581, 'Telangana', 'Peddapalli'),
(582, 'Telangana', 'Rajanna Sircilla'),
(583, 'Telangana', 'Ranga Reddy'),
(584, 'Telangana', 'Sangareddy'),
(585, 'Telangana', 'Siddipet'),
(586, 'Telangana', 'Suryapet'),
(587, 'Telangana', 'Vikarabad'),
(588, 'Telangana', 'Wanaparthy'),
(589, 'Telangana', 'Warangal Rural'),
(590, 'Telangana', 'Warangal Urban'),
(591, 'Telangana', 'Yadadri Bhuvanagiri'),
(592, 'Tripura', 'Dhalai'),
(593, 'Tripura', 'Gomati'),
(594, 'Tripura', 'Khowai'),
(595, 'Tripura', 'North Tripura'),
(596, 'Tripura', 'Sepahijala'),
(597, 'Tripura', 'South Tripura'),
(598, 'Tripura', 'Unakoti'),
(599, 'Tripura', 'West Tripura'),
(600, 'Uttar Pradesh', 'Agra'),
(601, 'Uttar Pradesh', 'Aligarh'),
(602, 'Uttar Pradesh', 'Allahabad'),
(603, 'Uttar Pradesh', 'Ambedkar Nagar'),
(604, 'Uttar Pradesh', 'Amethi'),
(605, 'Uttar Pradesh', 'Amroha'),
(606, 'Uttar Pradesh', 'Auraiya'),
(607, 'Uttar Pradesh', 'Azamgarh'),
(608, 'Uttar Pradesh', 'Baghpat'),
(609, 'Uttar Pradesh', 'Bahraich'),
(610, 'Uttar Pradesh', 'Ballia'),
(611, 'Uttar Pradesh', 'Balrampur'),
(612, 'Uttar Pradesh', 'Banda'),
(613, 'Uttar Pradesh', 'Barabanki'),
(614, 'Uttar Pradesh', 'Bareilly'),
(615, 'Uttar Pradesh', 'Basti'),
(616, 'Uttar Pradesh', 'Bijnor'),
(617, 'Uttar Pradesh', 'Budaun'),
(618, 'Uttar Pradesh', 'Bulandshahr'),
(619, 'Uttar Pradesh', 'Chandauli'),
(620, 'Uttar Pradesh', 'Chitrakoot'),
(621, 'Uttar Pradesh', 'Deoria'),
(622, 'Uttar Pradesh', 'Etah'),
(623, 'Uttar Pradesh', 'Etawah'),
(624, 'Uttar Pradesh', 'Faizabad'),
(625, 'Uttar Pradesh', 'Farrukhabad'),
(626, 'Uttar Pradesh', 'Fatehpur'),
(627, 'Uttar Pradesh', 'Firozabad'),
(628, 'Uttar Pradesh', 'Gautam Buddha Nagar'),
(629, 'Uttar Pradesh', 'Ghaziabad'),
(630, 'Uttar Pradesh', 'Ghazipur'),
(631, 'Uttar Pradesh', 'Gonda'),
(632, 'Uttar Pradesh', 'Gorakhpur'),
(633, 'Uttar Pradesh', 'Hamirpur'),
(634, 'Uttar Pradesh', 'Hapur'),
(635, 'Uttar Pradesh', 'Hardoi'),
(636, 'Uttar Pradesh', 'Hathras'),
(637, 'Uttar Pradesh', 'Jalaun'),
(638, 'Uttar Pradesh', 'Jaunpur'),
(639, 'Uttar Pradesh', 'Jhansi'),
(640, 'Uttar Pradesh', 'Kannauj'),
(641, 'Uttar Pradesh', 'Kanpur Dehat'),
(642, 'Uttar Pradesh', 'Kanpur Nagar'),
(643, 'Uttar Pradesh', 'Kanshiram Nagar'),
(644, 'Uttar Pradesh', 'Kaushambi'),
(645, 'Uttar Pradesh', 'Kheri'),
(646, 'Uttar Pradesh', 'Kushinagar'),
(647, 'Uttar Pradesh', 'Lalitpur'),
(648, 'Uttar Pradesh', 'Lucknow'),
(649, 'Uttar Pradesh', 'Maharajganj'),
(650, 'Uttar Pradesh', 'Mahoba'),
(651, 'Uttar Pradesh', 'Mainpuri'),
(652, 'Uttar Pradesh', 'Mathura'),
(653, 'Uttar Pradesh', 'Mau'),
(654, 'Uttar Pradesh', 'Meerut'),
(655, 'Uttar Pradesh', 'Mirzapur'),
(656, 'Uttar Pradesh', 'Moradabad'),
(657, 'Uttar Pradesh', 'Muzaffarnagar'),
(658, 'Uttar Pradesh', 'Pilibhit'),
(659, 'Uttar Pradesh', 'Pratapgarh'),
(660, 'Uttar Pradesh', 'Raebareli'),
(661, 'Uttar Pradesh', 'Rampur'),
(662, 'Uttar Pradesh', 'Saharanpur'),
(663, 'Uttar Pradesh', 'Sambhal'),
(664, 'Uttar Pradesh', 'Sant Kabir Nagar'),
(665, 'Uttar Pradesh', 'Sant Ravidas Nagar'),
(666, 'Uttar Pradesh', 'Shahjahanpur'),
(667, 'Uttar Pradesh', 'Shamli'),
(668, 'Uttar Pradesh', 'Shravasti'),
(669, 'Uttar Pradesh', 'Siddharthnagar'),
(670, 'Uttar Pradesh', 'Sitapur'),
(671, 'Uttar Pradesh', 'Sonbhadra'),
(672, 'Uttar Pradesh', 'Sultanpur'),
(673, 'Uttar Pradesh', 'Unnao'),
(674, 'Uttar Pradesh', 'Varanasi'),
(675, 'Uttarakhand', 'Almora'),
(676, 'Uttarakhand', 'Bageshwar'),
(677, 'Uttarakhand', 'Chamoli'),
(678, 'Uttarakhand', 'Champawat'),
(679, 'Uttarakhand', 'Dehradun'),
(680, 'Uttarakhand', 'Haridwar'),
(681, 'Uttarakhand', 'Nainital'),
(682, 'Uttarakhand', 'Pauri Garhwal'),
(683, 'Uttarakhand', 'Pithoragarh'),
(684, 'Uttarakhand', 'Rudraprayag'),
(685, 'Uttarakhand', 'Tehri Garhwal'),
(686, 'Uttarakhand', 'Udham Singh Nagar'),
(687, 'Uttarakhand', 'Uttarkashi'),
(688, 'West Bengal', 'Alipurduar'),
(689, 'West Bengal', 'Bankura'),
(690, 'West Bengal', 'Birbhum'),
(691, 'West Bengal', 'Cooch Behar'),
(692, 'West Bengal', 'Dakshin Dinajpur'),
(693, 'West Bengal', 'Darjeeling'),
(694, 'West Bengal', 'Hooghly'),
(695, 'West Bengal', 'Howrah'),
(696, 'West Bengal', 'Jalpaiguri'),
(697, 'West Bengal', 'Jhargram'),
(698, 'West Bengal', 'Kalimpong'),
(699, 'West Bengal', 'Kolkata'),
(700, 'West Bengal', 'Malda'),
(701, 'West Bengal', 'Murshidabad'),
(702, 'West Bengal', 'Nadia'),
(703, 'West Bengal', 'North 24 Parganas'),
(704, 'West Bengal', 'Paschim Bardhaman'),
(705, 'West Bengal', 'Paschim Medinipur'),
(706, 'West Bengal', 'Purba Bardhaman'),
(707, 'West Bengal', 'Purba Medinipur'),
(708, 'West Bengal', 'Purulia'),
(709, 'West Bengal', 'South 24 Parganas'),
(710, 'West Bengal', 'Uttar Dinajpur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;