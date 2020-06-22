-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 07:03 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `name_en` varchar(100) NOT NULL DEFAULT '',
  `name_bn` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `name_en`, `name_bn`) VALUES
(1, 'AF', 'Afghanistan', 'আফগানিস্তান'),
(2, 'AL', 'Albania', 'আল্বেনিয়া'),
(3, 'DZ', 'Algeria', 'আলজেরিয়া'),
(4, 'DS', 'American Samoa', 'আমেরিকান সামোয়া'),
(5, 'AD', 'Andorra', 'এ্যান্ডোরা'),
(6, 'AO', 'Angola', 'অ্যাঙ্গোলা'),
(7, 'AI', 'Anguilla', 'এ্যাঙ্গুইলা'),
(8, 'AQ', 'Antarctica', 'এন্টার্কটিকা'),
(9, 'AG', 'Antigua and Barbuda', 'অ্যান্টিগুয়া ও বার্বুডা'),
(10, 'AR', 'Argentina', 'আর্জিণ্টিনা'),
(11, 'AM', 'Armenia', 'আরমেনিয়া'),
(12, 'AW', 'Aruba', 'আরুবা'),
(13, 'AU', 'Australia', 'অস্ট্রেলিয়া'),
(14, 'AT', 'Austria', 'অস্ট্রিয়া'),
(15, 'AZ', 'Azerbaijan', 'আজেরবাইজান'),
(16, 'BS', 'Bahamas', 'বাহামা'),
(17, 'BH', 'Bahrain', 'বাহরাইন'),
(18, 'BD', 'Bangladesh', 'বাংলাদেশ'),
(19, 'BB', 'Barbados', 'বার্বাডোস'),
(20, 'BY', 'Belarus', 'বেলারুশ'),
(21, 'BE', 'Belgium', 'বেলজিয়াম'),
(22, 'BZ', 'Belize', 'বেলিজ'),
(23, 'BJ', 'Benin', 'বেনিন'),
(24, 'BM', 'Bermuda', 'বারমুডা'),
(25, 'BT', 'Bhutan', 'ভুটান'),
(26, 'BO', 'Bolivia', 'বোলিভিয়া'),
(27, 'BA', 'Bosnia and Herzegovina', 'বসনিয়া ও হার্জেগোভিনা'),
(28, 'BW', 'Botswana', 'বোট্স্বানা'),
(29, 'BV', 'Bouvet Island', 'বোয়েন দ্বীপ'),
(30, 'BR', 'Brazil', 'ব্রাজিল'),
(31, 'IO', 'British Indian Ocean Territory', 'ব্রিটিশ ভারতীয় মহাসাগর অঞ্চল'),
(32, 'BN', 'Brunei Darussalam', 'ব্রুনাই দারুসসালাম'),
(33, 'BG', 'Bulgaria', 'বুলগেরিয়া'),
(34, 'BF', 'Burkina Faso', 'বুর্কিনা ফাসো'),
(35, 'BI', 'Burundi', 'বুরুন্ডি'),
(36, 'KH', 'Cambodia', 'কাম্বোজ'),
(37, 'CM', 'Cameroon', 'ক্যামেরুন'),
(38, 'CA', 'Canada', 'কানাডা'),
(39, 'CV', 'Cape Verde', 'কেপ ভার্দে'),
(40, 'KY', 'Cayman Islands', 'কেম্যান দ্বীপপুঞ্জ'),
(41, 'CF', 'Central African Republic', 'মধ্য আফ্রিকান প্রজাতন্ত্র'),
(42, 'TD', 'Chad', 'মত্স্যবিশেষ'),
(43, 'CL', 'Chile', 'চিলি'),
(44, 'CN', 'China', 'চীন'),
(45, 'CX', 'Christmas Island', 'ক্রিস্টমাস দ্বীপ'),
(46, 'CC', 'Cocos (Keeling) Islands', 'কোকোস (কিলিং) দ্বীপপুঞ্জ'),
(47, 'CO', 'Colombia', 'কলোমবিয়া'),
(48, 'KM', 'Comoros', 'কমোরোস'),
(49, 'CG', 'Congo', 'কঙ্গো'),
(50, 'CK', 'Cook Islands', 'কুক দ্বীপপুঞ্জ'),
(51, 'CR', 'Costa Rica', 'কোস্টারিকা'),
(52, 'HR', 'Croatia (Hrvatska)', 'ক্রোয়েশিয়া (হ্রভাত্ক্কা)'),
(53, 'CU', 'Cuba', 'কুবা'),
(54, 'CY', 'Cyprus', 'সাইপ্রাসদ্বিপ'),
(55, 'CZ', 'Czech Republic', 'চেক প্রজাতন্ত্র'),
(56, 'DK', 'Denmark', 'ডেন্মার্ক্'),
(57, 'DJ', 'Djibouti', 'জিবুতি'),
(58, 'DM', 'Dominica', 'ডোমিনিকা'),
(59, 'DO', 'Dominican Republic', 'ডোমিনিকান প্রজাতন্ত্র'),
(60, 'TP', 'East Timor', 'পূর্ব তিমুর'),
(61, 'EC', 'Ecuador', 'ইকোয়াডর'),
(62, 'EG', 'Egypt', 'মিশর'),
(63, 'SV', 'El Salvador', 'এল সালভাদর'),
(64, 'GQ', 'Equatorial Guinea', 'নিরক্ষীয় গিনি'),
(65, 'ER', 'Eritrea', 'ইরিত্রিয়া'),
(66, 'EE', 'Estonia', 'এস্তোনিয়াদেশ'),
(67, 'ET', 'Ethiopia', 'ইথিওপিয়া'),
(68, 'FK', 'Falkland Islands (Malvinas)', 'ফকল্যান্ড দ্বীপপুঞ্জ (মালভিন্স)'),
(69, 'FO', 'Faroe Islands', 'ফারো দ্বীপপুঞ্জ'),
(70, 'FJ', 'Fiji', 'ফিজি'),
(71, 'FI', 'Finland', 'ফিনল্যাণ্ড'),
(72, 'FR', 'France', 'ফ্রান্স'),
(73, 'FX', 'France, Metropolitan', 'ফ্রান্স, মেট্রোপলিটন'),
(74, 'GF', 'French Guiana', 'একটি দেশের নাম'),
(75, 'PF', 'French Polynesia', 'ফরাসি পলিনেশিয়া'),
(76, 'TF', 'French Southern Territories', 'ফরাসি সাউদার্ন টেরিটোরিজ'),
(77, 'GA', 'Gabon', 'গাবোনবাদ্যযন্ত্র'),
(78, 'GM', 'Gambia', 'গাম্বিয়াদেশ'),
(79, 'GE', 'Georgia', 'জর্জিয়া'),
(80, 'DE', 'Germany', 'জার্মানি'),
(81, 'GH', 'Ghana', 'ঘানা'),
(82, 'GI', 'Gibraltar', 'জিব্রালটার'),
(83, 'GK', 'Guernsey', 'গেঁজি'),
(84, 'GR', 'Greece', 'গ্রীস'),
(85, 'GL', 'Greenland', 'গ্রীনল্যাণ্ড'),
(86, 'GD', 'Grenada', 'গ্রেনাডা'),
(87, 'GP', 'Guadeloupe', 'গুয়াডেলোপ'),
(88, 'GU', 'Guam', 'গুয়াম'),
(89, 'GT', 'Guatemala', 'গুয়াটেমালা'),
(90, 'GN', 'Guinea', 'গিনি'),
(91, 'GW', 'Guinea-Bissau', 'গিনি-বিসাউ'),
(92, 'GY', 'Guyana', 'গায়ানা'),
(93, 'HT', 'Haiti', 'হাইতি'),
(94, 'HM', 'Heard and Mc Donald Islands', 'হেরার্ড এবং ম্যাক ডোনাল্ড আইল্যান্ডস'),
(95, 'HN', 'Honduras', 'হন্ডুরাস'),
(96, 'HK', 'Hong Kong', 'হংকং'),
(97, 'HU', 'Hungary', 'হাঙ্গেরি'),
(98, 'IS', 'Iceland', 'আইস্ল্যাণ্ড'),
(99, 'IN', 'India', 'ভারত'),
(100, 'IM', 'Isle of Man', 'আইল অফ ম্যান'),
(101, 'ID', 'Indonesia', 'ইন্দোনেশিয়া'),
(102, 'IR', 'Iran', 'ইরান'),
(103, 'IQ', 'Iraq', 'ইরাক'),
(104, 'IE', 'Ireland', 'আয়ারল্যাণ্ড'),
(105, 'IL', 'Israel', 'ইস্রায়েল'),
(106, 'IT', 'Italy', 'ইতালি'),
(107, 'CI', 'Ivory Coast', 'আইভরি কোস্ট'),
(108, 'JE', 'Jersey', 'জার্সি'),
(109, 'JM', 'Jamaica', 'জ্যামাইকা'),
(110, 'JP', 'Japan', 'জাপান'),
(111, 'JO', 'Jordan', 'জর্ডন'),
(112, 'KZ', 'Kazakhstan', 'কাজাকস্থান'),
(113, 'KE', 'Kenya', 'কেনিয়া'),
(114, 'KI', 'Kiribati', 'কিরিবাতি'),
(115, 'KP', 'Democratic People\'s Republic of Korea', 'ডেমোক্রেটিক পিপলস রিপাবলিক অফ কোরিয়া'),
(116, 'KR', 'Republic of Korea', 'দক্ষিণ কোরিয়া'),
(117, 'XK', 'Kosovo', 'কসোভো'),
(118, 'KW', 'Kuwait', 'কুয়েত'),
(119, 'KG', 'Kyrgyzstan', 'কিরগিজস্তান'),
(120, 'LA', 'Lao People\'s Democratic Republic', 'লাও পিপলস ডেমোক্রেটিক রিপাবলিক'),
(121, 'LV', 'Latvia', 'ল্যাট্ভিআ'),
(122, 'LB', 'Lebanon', 'লেবানন'),
(123, 'LS', 'Lesotho', 'লেসোথো'),
(124, 'LR', 'Liberia', 'লাইবেরিয়া'),
(125, 'LY', 'Libyan Arab Jamahiriya', 'লিবিয়ান আরব জামাহিরিয়া'),
(126, 'LI', 'Liechtenstein', 'লিচেনস্টেইন'),
(127, 'LT', 'Lithuania', 'লিত্ভা'),
(128, 'LU', 'Luxembourg', 'লাক্সেমবার্গ'),
(129, 'MO', 'Macau', 'ম্যাকাও'),
(130, 'MK', 'Macedonia', 'ম্যাসাডোনিয়া'),
(131, 'MG', 'Madagascar', 'ম্যাডাগ্যাস্কার'),
(132, 'MW', 'Malawi', 'মালাউই'),
(133, 'MY', 'Malaysia', 'মাল্যাশিয়া'),
(134, 'MV', 'Maldives', 'মালদ্বীপ'),
(135, 'ML', 'Mali', 'মালি'),
(136, 'MT', 'Malta', 'মালটা'),
(137, 'MH', 'Marshall Islands', 'মার্শাল দ্বীপপুঞ্জ'),
(138, 'MQ', 'Martinique', 'মার্টিনিক'),
(139, 'MR', 'Mauritania', 'মরিতানিয়া'),
(140, 'MU', 'Mauritius', 'মরিশাস'),
(141, 'TY', 'Mayotte', 'মায়োত্তে'),
(142, 'MX', 'Mexico', 'মক্সিকো'),
(143, 'FM', 'Federated States of Micronesia', 'মাইক্রোনেশিয়া ফেডারেটেড রাজ্য'),
(144, 'MD', 'Republic of Moldova', 'মোল্দাভিয়া প্রজাতন্ত্র'),
(145, 'MC', 'Monaco', 'মোনাকো'),
(146, 'MN', 'Mongolia', 'মঙ্গোলিআ'),
(147, 'ME', 'Montenegro', 'মন্টিনিগ্রো'),
(148, 'MS', 'Montserrat', 'মন্টসেরাট'),
(149, 'MA', 'Morocco', 'মরক্কো'),
(150, 'MZ', 'Mozambique', 'মোজাম্বিক'),
(151, 'MM', 'Myanmar', 'মায়ানমার'),
(152, 'NA', 'Namibia', 'নামিবিয়া'),
(153, 'NR', 'Nauru', 'নাউরু'),
(154, 'NP', 'Nepal', 'নেপাল'),
(155, 'NL', 'Netherlands', 'নেদারল্যান্ডস'),
(156, 'AN', 'Netherlands Antilles', 'নেদারল্যান্ডস এন্টিলস'),
(157, 'NC', 'New Caledonia', 'নতুন ক্যালেডোনিয়া'),
(158, 'NZ', 'New Zealand', 'নিউজিল্যান্ড'),
(159, 'NI', 'Nicaragua', 'নিক্যার্যাগিউআদেশ'),
(160, 'NE', 'Niger', 'নাইজারনদী'),
(161, 'NG', 'Nigeria', 'নাইজিরিয়াদেশ'),
(162, 'NU', 'Niue', 'নিউই'),
(163, 'NF', 'Norfolk Island', 'নরফোক দ্বীপ'),
(164, 'MP', 'Northern Mariana Islands', 'উত্তর মারিয়ানা দ্বীপপুঞ্জ'),
(165, 'NO', 'Norway', 'নরত্তএদেশ'),
(166, 'OM', 'Oman', 'ওমান'),
(167, 'PK', 'Pakistan', 'পাকিস্তান'),
(168, 'PW', 'Palau', 'পালাউ'),
(169, 'PS', 'Palestine', 'প্যালেস্টাইন'),
(170, 'PA', 'Panama', 'পানামা'),
(171, 'PG', 'Papua New Guinea', 'পাপুয়া নিউ গিনি'),
(172, 'PY', 'Paraguay', 'প্যারাগুয়ে'),
(173, 'PE', 'Peru', 'পেরু'),
(174, 'PH', 'Philippines', 'ফিলিপাইন'),
(175, 'PN', 'Pitcairn', 'পিটকেয়ার্ন'),
(176, 'PL', 'Poland', 'পোল্যান্ড'),
(177, 'PT', 'Portugal', 'পর্তুগাল'),
(178, 'PR', 'Puerto Rico', 'পুয়ের্তো রিকো'),
(179, 'QA', 'Qatar', 'কাতার'),
(180, 'RE', 'Reunion', 'পুনর্মিলন'),
(181, 'RO', 'Romania', 'রুমানিয়া'),
(182, 'RU', 'Russian Federation', 'রাশিয়ান ফেডারেশন'),
(183, 'RW', 'Rwanda', 'রুয়ান্ডা'),
(184, 'KN', 'Saint Kitts and Nevis', 'সেন্ট কিটস ও নেভিস'),
(185, 'LC', 'Saint Lucia', 'সেন্ট লুসিয়া'),
(186, 'VC', 'Saint Vincent and the Grenadines', 'সেন্ট ভিনসেন্ট ও গ্রেনাডাইন দ্বীপপুঞ্জ'),
(187, 'WS', 'Samoa', 'সামোয়া'),
(188, 'SM', 'San Marino', 'সান মারিনো'),
(189, 'ST', 'Sao Tome and Principe', 'সাও টোমে এবং প্রিনসিপে'),
(190, 'SA', 'Saudi Arabia', 'সৌদি আরব'),
(191, 'SN', 'Senegal', 'সেনেগাল'),
(192, 'RS', 'Serbia', 'সার্বিয়া'),
(193, 'SC', 'Seychelles', 'সিসিলি'),
(194, 'SL', 'Sierra Leone', 'সিয়েরা লিওন'),
(195, 'SG', 'Singapore', 'সিঙ্গাপুর'),
(196, 'SK', 'Slovakia', 'শ্লোভাকিয়া'),
(197, 'SI', 'Slovenia', 'স্লোভানিয়া'),
(198, 'SB', 'Solomon Islands', 'সলোমান দ্বীপপুঞ্জ'),
(199, 'SO', 'Somalia', 'সোমালিয়া'),
(200, 'ZA', 'South Africa', 'দক্ষিন আফ্রিকা'),
(201, 'GS', 'South Georgia South Sandwich Islands', 'দক্ষিণ জর্জিয়া সাউথ স্যান্ডউইচ দ্বীপপুঞ্জ'),
(202, 'ES', 'Spain', 'স্পেন'),
(203, 'LK', 'Sri Lanka', 'শ্রীলংকা'),
(204, 'SH', 'St. Helena', 'সেন্ট হেলেনা'),
(205, 'PM', 'St. Pierre and Miquelon', 'সেন্ট পিয়ের এবং মিকেলন'),
(206, 'SD', 'Sudan', 'সুদান'),
(207, 'SR', 'Suriname', 'সুরিনাম'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands', 'সাভালবার্ড এবং জন মায়েন দ্বীপপুঞ্জ'),
(209, 'SZ', 'Swaziland', 'সোয়াজিল্যান্ড'),
(210, 'SE', 'Sweden', 'সুইডেন'),
(211, 'CH', 'Switzerland', 'সুইজর্লণ্ড'),
(212, 'SY', 'Syrian Arab Republic', 'সিরিয় আরব প্রজাতন্ত্র'),
(213, 'TW', 'Taiwan', 'তাইওয়ান'),
(214, 'TJ', 'Tajikistan', 'তাজিকস্থান'),
(215, 'TZ', 'Tanzania, United Republic of', 'তানজানিয়া, ইউনাইটেড প্রজাতন্ত্রের'),
(216, 'TH', 'Thailand', 'থাইল্যান্ড'),
(217, 'TG', 'Togo', 'যাও'),
(218, 'TK', 'Tokelau', 'টোকেলাউ'),
(219, 'TO', 'Tonga', 'টাঙ্গা'),
(220, 'TT', 'Trinidad and Tobago', 'ত্রিনিদাদ ও টোবাগো'),
(221, 'TN', 'Tunisia', 'টিউনিস্'),
(222, 'TR', 'Turkey', 'তুরস্ক'),
(223, 'TM', 'Turkmenistan', 'তুর্কমেনিয়া'),
(224, 'TC', 'Turks and Caicos Islands', 'টার্কস্ ও কেইকোস দ্বীপপুঞ্জ'),
(225, 'TV', 'Tuvalu', 'টুভালু'),
(226, 'UG', 'Uganda', 'উগান্ডা'),
(227, 'UA', 'Ukraine', 'ইউক্রেইন্'),
(228, 'AE', 'United Arab Emirates', 'সংযুক্ত আরব আমিরাত'),
(229, 'GB', 'United Kingdom', 'যুক্তরাজ্য'),
(230, 'US', 'United States', 'যুক্তরাষ্ট্র'),
(231, 'UM', 'United States minor outlying islands', 'মার্কিন যুক্তরাষ্ট্র ক্ষুদ্র ও পার্শ্ববর্তী দ্বীপপুঞ্জ'),
(232, 'UY', 'Uruguay', 'উরুগুয়ে'),
(233, 'UZ', 'Uzbekistan', 'উজ্বেকিস্থান'),
(234, 'VU', 'Vanuatu', 'ভানুয়াতু'),
(235, 'VA', 'Vatican City State', 'ভ্যাটিকান সিটি রাজ্য'),
(236, 'VE', 'Venezuela', 'ভেনেজুয়েলা'),
(237, 'VN', 'Vietnam', 'ভিয়েতনাম'),
(238, 'VG', 'Virgin Islands (British)', 'ভার্জিন দ্বীপপুঞ্জ (ব্রিটিশ)'),
(239, 'VI', 'Virgin Islands (U.S.)', 'ভার্জিন আইল্যান্ডস (ইউ এস)'),
(240, 'WF', 'Wallis and Futuna Islands', 'ওয়ালিস এবং ফুটুনা দ্বীপপুঞ্জ'),
(241, 'EH', 'Western Sahara', 'পশ্চিম সাহারা'),
(242, 'YE', 'Yemen', 'ইমেন'),
(243, 'ZR', 'Zaire', 'জায়ারে'),
(244, 'ZM', 'Zambia', 'জাম্বিয়া'),
(245, 'ZW', 'Zimbabwe', 'জিম্বাবুয়ে');

-- --------------------------------------------------------

--
-- Table structure for table `data_file`
--

CREATE TABLE `data_file` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `upload_date` date DEFAULT NULL,
  `import_date` date DEFAULT NULL,
  `year_of_data` tinyint(5) DEFAULT NULL,
  `month_of_data` tinyint(5) DEFAULT NULL,
  `status` tinyint(5) DEFAULT NULL,
  `bin_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_file`
--

INSERT INTO `data_file` (`id`, `name`, `upload_date`, `import_date`, `year_of_data`, `month_of_data`, `status`, `bin_number`) VALUES
(1, 'Payment_to_Employees.xlsx', '2020-06-16', '2020-06-16', NULL, NULL, 2, '0102-123456789');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(3) NOT NULL,
  `district_id` varchar(2) NOT NULL,
  `name_en` varchar(200) DEFAULT NULL,
  `name_bn` varchar(200) DEFAULT NULL,
  `divid` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_id`, `name_en`, `name_bn`, `divid`) VALUES
(1, '01', 'BAGERHAT', 'বাগেরহাট', '40'),
(2, '03', 'BANDARBAN', 'বান্দরবান', '20'),
(3, '04', 'BARGUNA', 'বরগুনা', '10'),
(4, '06', 'BARISAL', 'বরিশাল', '10'),
(5, '09', 'BHOLA', 'ভোলা', '10'),
(6, '10', 'BOGRA', 'বগুড়া', '50'),
(7, '12', 'BRAHMANBARIA', 'ব্রাক্ষ্মণবাড়িয়া', '20'),
(8, '13', 'CHANDPUR', 'চাঁদপুর', '20'),
(9, '15', 'CHITTAGONG', 'চট্টগ্রাম', '20'),
(10, '18', 'CHUADANGA', 'চুয়াডাঙ্গা', '40'),
(11, '19', 'COMILLA', 'কুমিল্লা', '20'),
(12, '22', 'COXBAZAR', 'কক্সবাজার', '20'),
(13, '26', 'DHAKA', 'ঢাকা', '30'),
(14, '27', 'DINAJPUR', 'দিনাজপুর', '55'),
(15, '29', 'FARIDPUR', 'ফরিদপুর', '30'),
(16, '30', 'FENI', 'ফেনী', '20'),
(17, '32', 'GAIBANDHA', 'গাইবান্ধা', '55'),
(18, '33', 'GAZIPUR', 'গাজীপুর', '30'),
(19, '35', 'GOPALGANJ', 'গোপালগঞ্জ', '30'),
(20, '36', 'HABIGANJ', 'হবিগঞ্জ', '60'),
(21, '38', 'JOYPURHAT', 'জয়পুরহাট', '50'),
(22, '39', 'JAMALPUR', 'জামালপুর', '30'),
(23, '41', 'JESSORE', 'যশোর', '40'),
(24, '42', 'JHALOKATI', 'ঝালকাঠী', '10'),
(25, '44', 'JHENAIDAH', 'ঝিনাইদহ', '40'),
(26, '46', 'KHAGRACHHARI', 'খাগড়াছড়ি', '20'),
(27, '47', 'KHULNA', 'খুলনা', '40'),
(28, '48', 'KISHOREGONJ', 'কিশোরগঞ্জ', '30'),
(29, '49', 'KURIGRAM', 'কুড়িগ্রাম', '50'),
(30, '50', 'KUSHTIA', 'কুষ্টিয়া', '55'),
(31, '51', 'LAKSHMIPUR', 'লক্ষ্মীপুর', '20'),
(32, '52', 'LALMONIRHAT', 'লালমনিরহাট', '55'),
(33, '54', 'MADARIPUR', 'মাদারীপুর', '30'),
(34, '55', 'MAGURA', 'মাগুরা', '40'),
(35, '56', 'MANIKGANJ', 'মানিকগঞ্জ', '30'),
(36, '57', 'MEHERPUR', 'মেহেরপুর', '40'),
(37, '58', 'MAULVIBAZAR', 'মৌলভীবাজার', '60'),
(38, '59', 'MUNSHIGANJ', 'মুন্সীগঞ্জ', '30'),
(39, '61', 'MYMENSINGH', 'ময়মনসিংহ', '30'),
(40, '64', 'NAOGAON', 'নওগাঁ', '50'),
(41, '65', 'NARAIL', 'নড়াইল', '40'),
(42, '67', 'NARAYANGANJ', 'নারায়ণগঞ্জ', '30'),
(43, '68', 'NARSINGDI', 'নরসিংদী', '30'),
(44, '69', 'NATORE', 'নাটোর', '50'),
(45, '70', 'CHAPAI NABABGANJ', 'চাঁপাই নবাবগঞ্জ', '50'),
(46, '72', 'NETRAKONA', 'নেত্রকোনা', '30'),
(47, '73', 'NILPHAMARI ZILA', 'নীলফামারী', '55'),
(48, '75', 'NOAKHALI', 'নোয়াখালী', '20'),
(49, '76', 'PABNA', 'পাবনা', '50'),
(50, '77', 'PANCHAGARH', 'পঞ্চগড়', '55'),
(51, '78', 'PATUAKHALI', 'পটুয়াখালী', '10'),
(52, '79', 'PIROJPUR', 'পিরোজপুর', '10'),
(53, '81', 'RAJSHAHI', 'রাজশাহী', '50'),
(54, '82', 'RAJBARI', 'রাজবাড়ী', '30'),
(55, '84', 'RANGAMATI', 'রাঙ্গামাটি', '20'),
(56, '85', 'RANGPUR', 'রংপুর', '55'),
(57, '86', 'SHARIATPUR', 'শরিয়তপুর', '30'),
(58, '87', 'SATKHIRA', 'সাতক্ষীরা', '40'),
(59, '88', 'SIRAJGANJ', 'সিরাজগঞ্জ', '50'),
(60, '89', 'SHERPUR', 'শেরপুর', '30'),
(61, '90', 'SUNAMGANJ', 'সুনামগঞ্জ', '60'),
(62, '91', 'SYLHET', 'সিলেট', '60'),
(63, '93', 'TANGAIL', 'টাঙ্গাইল', '30'),
(64, '94', 'THAKURGAON', 'ঠাকুরগাঁও', '55');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divID` varchar(2) NOT NULL DEFAULT '00',
  `divname` varchar(100) NOT NULL DEFAULT '',
  `divnameeng` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divID`, `divname`, `divnameeng`) VALUES
('10', 'বরিশাল', 'Barisal'),
('20', 'চট্টগ্রাম', 'Chittagong'),
('30', 'ঢাকা', 'Dhaka'),
('40', 'খুলনা', 'Khulna'),
('50', 'রাজশাহী', 'Rajshahi'),
('60', 'সিলেট', 'Sylhet'),
('55', 'রংপুর', 'Rangpur'),
('45', 'ময়মনসিংহ', 'MYMENSINGH');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(25) NOT NULL,
  `passport_no` varchar(100) NOT NULL,
  `current_address` varchar(250) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `bin` varchar(20) DEFAULT NULL,
  `employer_mobile` varchar(20) DEFAULT NULL,
  `employer_phone` varchar(20) DEFAULT NULL,
  `tana` int(5) DEFAULT NULL,
  `district` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `passport_no`, `current_address`, `mobile`, `employer`, `company_name`, `bin`, `employer_mobile`, `employer_phone`, `tana`, `district`) VALUES
(1, 'C0987650', 'asdfasdf', '01710520054', NULL, 'adsfa', '4444444', '44444444', 'dsfasd', 156, 13),
(2, 'C0987650', 'asdf', 'asdf', 'asdfasdf', 'adsfadsf', 'asdf', 'adsf', 'adsf', 155, 13);

-- --------------------------------------------------------

--
-- Table structure for table `fiscalyear`
--

CREATE TABLE `fiscalyear` (
  `id` int(11) NOT NULL,
  `fiscalyear` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fiscalyear`
--

INSERT INTO `fiscalyear` (`id`, `fiscalyear`, `status`) VALUES
(1, '2020-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fp_doc`
--

CREATE TABLE `fp_doc` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(150) DEFAULT NULL,
  `uploaded_by` int(15) DEFAULT NULL,
  `uploaded_date` date DEFAULT NULL,
  `year_of_data` tinyint(10) DEFAULT NULL,
  `month_of_data` tinyint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fp_information`
--

CREATE TABLE `fp_information` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `mother` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `passport_old` varchar(150) DEFAULT NULL,
  `passport_no` varchar(150) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `departure_date` datetime DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `country_last` varchar(150) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `address_bd` text DEFAULT NULL,
  `visa_type` varchar(50) DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `data_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fp_information`
--

INSERT INTO `fp_information` (`id`, `name`, `father`, `mother`, `dob`, `passport_old`, `passport_no`, `arrival_date`, `departure_date`, `purpose`, `country`, `country_last`, `occupation`, `address_bd`, `visa_type`, `picture`, `data_file`) VALUES
(1, 'Rahul Roy', 'Subash Roy', 'Asaha Roy', '1970-01-01', 'I3454672', '123456', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Outsourceing Job', 'India', 'India', 'Software Engineer', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'A3', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_2.png', 'Img_fp_data_10_31.xlsx'),
(2, 'Cris Gayleee', 'Jhon Gayle', 'Janifar ', '1970-01-01', 'AA090078', 'AA090011', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Play Cricket', 'Gayana', 'India', 'Cricketer', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_3.jpeg', 'Img_fp_data_10_31.xlsx'),
(3, 'Shan warneee', 'Sturt Warne', 'Marian Warne', '1970-01-01', 'AA0956780', 'AA095611', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Play Cricket', 'Austraila', 'India', 'Cricketer', 'Redison Hotel, Baridhara, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_4.png', 'Img_fp_data_10_31.xlsx'),
(4, 'Cris Line', 'Macakine Line', 'Marian Domart ', '1970-01-01', 'EA213450', 'EA213450', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Businees Meeting', 'England', 'England', 'Businessperson', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'B', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_5.png', 'Img_fp_data_10_31.xlsx'),
(5, 'VVS Laxmannn', 'SD Laxman', 'Anita Laxman', '1970-01-01', 'I3457672', 'I3457611', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Cricket Coching', 'India', 'India', 'Coching', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_6.png', 'Img_fp_data_10_31.xlsx'),
(6, 'Sonil Joshii', 'Rahul Joshi', 'Antara Joshi', '1970-01-01', 'I3454670', 'I3454611', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Cricket Coching', 'India', 'India', 'Coching', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_7.png', 'Img_fp_data_10_31.xlsx'),
(7, 'Binod Kumarrr', 'Auron Kumar', 'Anamika Kumar', '1970-01-01', 'I3454609', 'I3454611', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Commentator of TV', 'India', 'India', 'Commentator', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_8.png', 'Img_fp_data_10_31.xlsx'),
(8, 'Kamara Dormasanaa', 'Ronil Dormasana', 'Jenifar Darmasana', '1970-01-01', 'S9820111', 'S9820111', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'Sri Lanka', 'Sri Lanka', 'Cricketer', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_9.png', 'Img_fp_data_10_31.xlsx'),
(9, 'Provin Kumarrr', 'Aojit Kumar', 'Bity Kumar', '1970-01-01', 'I3004672', 'I3004611', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'India', 'India', 'Cricketer', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', NULL, 'Img_fp_data_10_31.xlsx'),
(10, 'Dananja de Silvaa', 'Anjala De Silva', 'Jenifar De Silva', '1970-01-01', 'S0009831', 'S0009811', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'Sri Lanka', 'Sri Lanka', 'Cricketer', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_11.png', 'Img_fp_data_10_31.xlsx'),
(11, 'Rahul Boseee', 'Amor Bose', 'Saina Bose', '1970-01-01', 'I3454009', 'I3454011', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'India', 'India', 'Cricketer', 'Redison Hotel, Baridhara, Dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_12.png', 'Img_fp_data_10_31.xlsx'),
(12, 'Shahad Butttt', 'Akram Butt', 'Homaira Butt', '1970-01-01', 'P9826701', 'P9826711', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'Pakistan', 'Pakistan', 'Cricketer', 'Hotel westin, dhaka', 'P', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_13.png', 'Img_fp_data_10_31.xlsx'),
(13, 'Mira Kunar Saha', 'Topan Kumar Saha', 'Tumpa Saha', '1970-01-01', 'I3450102', 'I3450102', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Sports', 'India', 'India', 'Businessperson', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(14, 'Jong Ho', 'Ling Ho', 'To Li Ho', '1970-01-01', 'C0987650', 'C0987650', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Businees', 'China', 'China', 'Businessperson', 'Hotel westin, dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(15, 'Quang Ho', 'Aong Ho', 'Shi Ho', '1970-01-01', 'V8765373', 'V8765372', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Job', 'Vietnam', 'Vietnam', 'Software Engineer', 'Bashundhara Residential Area', 'A3', NULL, 'Img_fp_data_10_31.xlsx'),
(16, 'Amit Kumar Roy', 'Suvas Kumar Roy', 'Kabita Roy', '1970-01-01', 'I3450232', 'I3450232', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'Job', 'India', 'India', 'Engineer', 'Hotel Sonargong, Dhaka', 'A3', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_17.png', 'Img_fp_data_10_31.xlsx'),
(17, 'Bikrom De Silva', 'David De Silva', 'Asha De Silva', '1970-01-01', 'S9809638', 'S9809638', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'tourism', 'Sri Lanka', 'Sri Lanka', 'Businessperson', 'Hotel Sonargong, Dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(18, 'Anita Roy', 'Arop Roy', 'Supria Roy', '1970-01-01', 'I2209022', 'I2209022', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'tourism', 'India', 'India', 'Businessperson', 'Hotel westin, dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(19, 'Chandidas Ganguly', 'Aubijit Ganguly', 'Taposhi Ganguly', '1970-01-01', 'I3409043', 'I3409043', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'tourism', 'India', 'India', 'Businessperson', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(20, 'Bipul Ganguly', 'Bijit Ganguly', 'Rupa Ganguly', '1970-01-01', 'I0908041', 'I0908041', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'tourism', 'India', 'India', 'Businessperson', 'Le Meridien, Nikunja-2, Khilkhet, Dhaka', 'B', NULL, 'Img_fp_data_10_31.xlsx'),
(21, 'Ifran Khan', 'Asfaq Khan', 'Afia Khan', '1970-01-01', 'P1100211', 'P1100211', '1970-01-01 01:00:00', '1970-01-01 01:00:00', 'tourism', 'Pakistan', 'Pakistan', 'Businessperson', 'Redison Hotel, Baridhara, Dhaka', 'B', 'c4ca4238a0b923820dcc509a6f75849b/iImg_fp_data_10_31.xlsx_Image_22.jpeg', 'Img_fp_data_10_31.xlsx'),
(22, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(23, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(24, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(25, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(26, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(27, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(28, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(29, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(30, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(31, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(32, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(33, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(34, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(35, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(36, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(37, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(38, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(39, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(40, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(41, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(42, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(43, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(44, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(45, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(46, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(47, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(48, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(49, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(50, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(51, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(52, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(53, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(54, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(55, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(56, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(57, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(58, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(59, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(60, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(61, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(62, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(63, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(64, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(65, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(66, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(67, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(68, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(69, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(70, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(71, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(72, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(73, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(74, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(75, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(76, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(77, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(78, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(79, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(80, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(81, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(82, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(83, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(84, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(85, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(86, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(87, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(88, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(89, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(90, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(91, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(92, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(93, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(94, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(95, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(96, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(97, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(98, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(99, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(100, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(101, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(102, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx'),
(103, 'Amazon', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_2.png', 'testImageRead.xlsx'),
(104, 'Google', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_3.png', 'testImageRead.xlsx'),
(105, 'IBM', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_4.png', 'testImageRead.xlsx'),
(106, 'Microsoft', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_5.png', 'testImageRead.xlsx'),
(107, 'Adobe', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_6.png', 'testImageRead.xlsx'),
(108, 'Apple', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_7.png', 'testImageRead.xlsx'),
(109, 'HP', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_8.png', 'testImageRead.xlsx'),
(110, 'Sony', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_9.png', 'testImageRead.xlsx'),
(111, 'Dell', '', '', '0000-00-00', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', 'c81e728d9d4c2f636f067f89cc14862c/itestImageRead.xlsx_Image_10.png', 'testImageRead.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `monthsname` varchar(20) NOT NULL,
  `fiscalyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `monthsname`, `fiscalyear`) VALUES
(1, 'July/20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `bin_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suspects`
--

CREATE TABLE `suspects` (
  `id` int(15) NOT NULL,
  `passport_no` varchar(100) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `action` text DEFAULT NULL,
  `suspect_date` date DEFAULT NULL,
  `detect_date` date DEFAULT NULL,
  `action_date` date DEFAULT NULL,
  `authority` text DEFAULT NULL,
  `penalty_to` text DEFAULT NULL,
  `penalty` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suspects`
--

INSERT INTO `suspects` (`id`, `passport_no`, `status`, `action`, `suspect_date`, `detect_date`, `action_date`, `authority`, `penalty_to`, `penalty`) VALUES
(1, 'I3454670', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'I3454609', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'S9820111', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'I3004672', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'I3454009', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'C0987650', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tax_employer_info`
--

CREATE TABLE `tax_employer_info` (
  `id` int(20) NOT NULL,
  `sl` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `nid` varchar(150) DEFAULT NULL,
  `designation` text DEFAULT NULL,
  `tin` varchar(150) DEFAULT NULL,
  `g_salary` double(50,0) DEFAULT NULL,
  `h_allowence` double(50,0) DEFAULT NULL,
  `i_houserent` double(50,0) DEFAULT NULL,
  `j_convenc` double(50,0) DEFAULT NULL,
  `k_entertn` double(50,0) DEFAULT NULL,
  `l_medical` double(50,0) DEFAULT NULL,
  `m_other` double(50,0) DEFAULT NULL,
  `n_pf` double(50,0) DEFAULT NULL,
  `o_benefit` double(50,0) DEFAULT NULL,
  `p_liebletax` double(50,0) DEFAULT NULL,
  `q_eligibletax` double(50,0) DEFAULT NULL,
  `r_taxcredit` double(50,0) DEFAULT NULL,
  `s_taxpayble` double(50,0) DEFAULT NULL,
  `t_taxdeduct` double(50,0) DEFAULT NULL,
  `u_taxgovt` double(50,0) DEFAULT NULL,
  `v_remark` double(50,0) DEFAULT NULL,
  `data_file` text DEFAULT NULL,
  `bin_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tax_employer_info`
--

INSERT INTO `tax_employer_info` (`id`, `sl`, `name`, `nationality`, `nid`, `designation`, `tin`, `g_salary`, `h_allowence`, `i_houserent`, `j_convenc`, `k_entertn`, `l_medical`, `m_other`, `n_pf`, `o_benefit`, `p_liebletax`, `q_eligibletax`, `r_taxcredit`, `s_taxpayble`, `t_taxdeduct`, `u_taxgovt`, `v_remark`, `data_file`, `bin_number`) VALUES
(1, 1, 'Karim', 'Bangladeshi', '326547895', 'VP', '12345687412', 200000, 24000, 60000, 10000, 4000, 30000, 3000, 10000, 6000, 30000, 4000, 10000, 10000, 10000, 10000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(2, 2, 'Rahim', 'Bangladeshi', '542365789', 'VP', '12345687413', 200000, 24000, 60000, 10000, 4000, 30000, 3000, 10000, 6000, 30000, 4000, 10000, 10000, 10000, 10000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(3, 3, 'Abdullah', 'Bangladeshi', '213652489', 'AVP', '12345687414', 180000, 21600, 54000, 9000, 3600, 27000, 2700, 9000, 5400, 27000, 3600, 9000, 9000, 9000, 9000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(4, 4, 'Raif', 'Bangladeshi', '953214568', 'AVP', '12345687415', 180000, 21600, 54000, 9000, 3600, 27000, 2700, 9000, 5400, 27000, 3600, 9000, 9000, 9000, 9000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(5, 5, 'Kabir', 'Indian', '852463217', 'AVP', '12345687416', 180000, 21600, 54000, 9000, 3600, 27000, 2700, 9000, 5400, 27000, 3600, 9000, 9000, 9000, 9000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(6, 6, 'Sultana', 'Bangladeshi', '965423161', 'SSE', '12345687417', 150000, 18000, 45000, 7500, 3000, 22500, 2250, 7500, 4500, 22500, 3000, 7500, 7500, 7500, 7500, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(7, 7, 'Taposhi', 'Bangladeshi', '965778452', 'SSE', '12345687418', 150000, 18000, 45000, 7500, 3000, 22500, 2250, 7500, 4500, 22500, 3000, 7500, 7500, 7500, 7500, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(8, 8, 'Farida', 'Bangladeshi', '321654789', 'SSE', '12345687419', 150000, 18000, 45000, 7500, 3000, 22500, 2250, 7500, 4500, 22500, 3000, 7500, 7500, 7500, 7500, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(9, 9, 'Akash', 'Korean', '546321756', 'SSE', '12345687420', 150000, 18000, 45000, 7500, 3000, 22500, 2250, 7500, 4500, 22500, 3000, 7500, 7500, 7500, 7500, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(10, 10, 'Rupam', 'Bangladeshi', '654123987', 'SE', '12345687421', 100000, 12000, 30000, 5000, 2000, 15000, 1500, 5000, 3000, 15000, 2000, 5000, 5000, 5000, 5000, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(11, 11, 'Selina', 'Bangladeshi', '147852361', 'SE', '12345687422', 90000, 10800, 27000, 4500, 1800, 13500, 1350, 4500, 2700, 13500, 1800, 4500, 4500, 4500, 4500, 0, 'Payment_to_Employees.xlsx', '0102-123456789'),
(12, 12, 'Nazneen', 'Bangladeshi', '258369147', 'SE', '12345687423', 85000, 10200, 25500, 4250, 1700, 12750, 1275, 4250, 2550, 12750, 1700, 4250, 4250, 4250, 4250, 0, 'Payment_to_Employees.xlsx', '0102-123456789');

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `id` int(10) NOT NULL,
  `zillaid` varchar(2) NOT NULL,
  `upazilaid` varchar(2) NOT NULL,
  `name_en` varchar(200) DEFAULT NULL,
  `name_bn` varchar(200) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `up_type` varchar(1) NOT NULL DEFAULT 'G' COMMENT 'G=general, H=hill, R=remote',
  `district` tinyint(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`id`, `zillaid`, `upazilaid`, `name_en`, `name_bn`, `status`, `tag`, `up_type`, `district`) VALUES
(1, '01', '08', 'BAGERHAT SADAR', 'বাগেরহাট সদর', 'U', NULL, 'G', 1),
(2, '01', '14', 'CHITALMARI', 'চিতলমারী', 'U', NULL, 'G', 1),
(3, '01', '34', 'FAKIRHAT', 'ফকিরহাট', 'U', NULL, 'G', 1),
(4, '01', '38', 'KACHUA', 'কচুয়া', 'U', NULL, 'G', 1),
(5, '01', '56', 'MOLLAHAT', 'মোল্লাহাট', 'U', NULL, 'G', 1),
(6, '01', '58', 'MONGLA', 'মোংলা', 'U', NULL, 'G', 1),
(7, '01', '60', 'MORRELGANJ', 'মোড়েলগঞ্জ', 'U', NULL, 'G', 1),
(8, '01', '73', 'RAMPAL', 'রামপাল', 'U', NULL, 'G', 1),
(9, '01', '77', 'SARANKHOLA', 'শরণখোলা', 'U', NULL, 'G', 1),
(10, '03', '04', 'ALIKADAM', 'আলীকদম', 'U', NULL, 'H', 2),
(11, '03', '14', 'BANDARBAN SADAR', 'বান্দরবান সদর', 'U', NULL, 'H', 2),
(12, '03', '51', 'LAMA', 'লামা', 'U', NULL, 'H', 2),
(13, '03', '73', 'NAIKHONGCHHARI', 'নাইক্ষ্যংছড়ি', 'U', NULL, 'H', 2),
(14, '03', '89', 'ROWANGCHHARI', 'রোয়াংছড়ি', 'U', NULL, 'H', 2),
(15, '03', '91', 'RUMA', 'রুমা', 'U', NULL, 'H', 2),
(16, '03', '95', 'THANCHI', 'থান্‌চি', 'U', NULL, 'H', 2),
(17, '04', '09', 'AMTALI', 'আমতলী', 'U', NULL, 'G', 3),
(18, '04', '19', 'BAMNA', 'বামনা', 'U', NULL, 'G', 3),
(19, '04', '28', 'BARGUNA SADAR', 'বরগুনা সদর', 'U', NULL, 'G', 3),
(20, '04', '47', 'BETAGI', 'বেতাগী', 'U', NULL, 'G', 3),
(21, '04', '85', 'PATHARGHATA', 'পাথরঘাটা', 'U', NULL, 'G', 3),
(22, '04', '92', 'TALTOLI', 'তালতলী', 'U', NULL, 'G', 3),
(23, '06', '02', 'AGAILJHARA', 'আগৈলঝাড়া', 'U', NULL, 'G', 4),
(24, '06', '03', 'BABUGANJ', 'বাবুগঞ্জ', 'U', NULL, 'G', 4),
(25, '06', '07', 'BAKERGANJ', 'বাকেরগঞ্জ', 'U', NULL, 'G', 4),
(26, '06', '10', 'BANARI PARA', 'বানারী পাড়া', 'U', NULL, 'G', 4),
(27, '06', '32', 'GAURNADI', 'গৌরনদী', 'U', NULL, 'G', 4),
(28, '06', '36', 'HIZLA', 'হিজলা', 'U', NULL, 'G', 4),
(29, '06', '51', 'BARISAL SADAR', 'বরিশাল সদর', 'U', NULL, 'G', 4),
(30, '06', '62', 'MHENDIGANJ', 'মেহেন্দীগঞ্জ', 'U', NULL, 'G', 4),
(31, '06', '69', 'MULADI', 'মুলাদী', 'U', NULL, 'G', 4),
(32, '06', '94', 'WAZIRPUR', 'উজিরপুর', 'U', NULL, 'G', 4),
(33, '09', '18', 'BHOLA SADAR', 'ভোলা সদর', 'U', NULL, 'G', 5),
(34, '09', '21', 'BURHANUDDIN', 'বোরহানউদ্দীন', 'U', NULL, 'G', 5),
(35, '09', '25', 'CHAR FASSON', 'চরফ্যাশন', 'U', NULL, 'G', 5),
(36, '09', '29', 'DAULAT KHAN', 'দৌলত খান', 'U', NULL, 'G', 5),
(37, '09', '54', 'LALMOHAN', 'লালমোহন', 'U', NULL, 'G', 5),
(38, '09', '65', 'MANPURA', 'মনপুরা', 'U', NULL, 'R', 5),
(39, '09', '91', 'TAZUMUDDIN', 'তজুমুদ্দিন', 'U', NULL, 'G', 5),
(40, '10', '06', 'ADAMDIGHI', 'আদমদিঘী', 'U', NULL, 'G', 6),
(41, '10', '20', 'BOGRA SADAR', 'বগুড়া সদর', 'U', NULL, 'G', 6),
(42, '10', '27', 'DHUNAT', 'ধুনট', 'U', NULL, 'G', 6),
(43, '10', '33', 'DHUPCHANCHIA', 'দুপচাঁচিয়া', 'U', NULL, 'G', 6),
(44, '10', '40', 'GABTALI', 'গাবতলী', 'U', NULL, 'G', 6),
(45, '10', '54', 'KAHALOO', 'কাহালু', 'U', NULL, 'G', 6),
(46, '10', '67', 'NANDIGRAM', 'নন্দীগ্রাম', 'U', NULL, 'G', 6),
(47, '10', '81', 'SARIAKANDI', 'সারিয়াকান্দি', 'U', NULL, 'G', 6),
(48, '10', '85', 'SHAJAHANPUR', 'শাজাহানপুর', 'U', NULL, 'G', 6),
(49, '10', '88', 'SHERPUR', 'শেরপুর', 'U', NULL, 'G', 6),
(50, '10', '94', 'SHIBGANJ', 'শিব্‌গঞ্জ', 'U', NULL, 'G', 6),
(51, '10', '95', 'SONATOLA', 'সোনাতলা', 'U', NULL, 'G', 6),
(52, '12', '02', 'AKHAURA', 'আখাউড়া', 'U', NULL, 'G', 7),
(53, '12', '04', 'BANCHHARAMPUR', 'বাঞ্ছারামপুর', 'U', NULL, 'G', 7),
(54, '12', '07', 'BIJOYNAGAR', 'বিজয়নগর', 'U', NULL, 'G', 7),
(55, '12', '13', 'BRAHMANBARIA SADAR', 'ব্রাক্ষ্মণবাড়িয়া সদর', 'U', NULL, 'G', 7),
(56, '12', '33', 'ASHUGANJ', 'আশুগঞ্জ', 'U', NULL, 'G', 7),
(57, '12', '63', 'KASBA', 'কস্‌বা', 'U', NULL, 'G', 7),
(58, '12', '85', 'NABINAGAR', 'নবীনগর', 'U', NULL, 'G', 7),
(59, '12', '90', 'NASIRNAGAR', 'নাসিরনগর', 'U', NULL, 'G', 7),
(60, '12', '94', 'SARAIL', 'সরাইল', 'U', NULL, 'G', 7),
(61, '13', '22', 'CHANDPUR SADAR', 'চাঁদপুর সদর', 'U', NULL, 'G', 8),
(62, '13', '45', 'FARIDGANJ', 'ফরিদগঞ্জ', 'U', NULL, 'G', 8),
(63, '13', '47', 'HAIM CHAR', 'হাইমচর', 'U', NULL, 'G', 8),
(64, '13', '49', 'HAJIGANJ', 'হাজীগঞ্জ', 'U', NULL, 'G', 8),
(65, '13', '58', 'KACHUA', 'কচুয়া', 'U', NULL, 'G', 8),
(66, '13', '76', 'MATLAB DAKSHIN', 'মতলব দক্ষিণ', 'U', NULL, 'G', 8),
(67, '13', '79', 'MATLAB UTTAR', 'মতলব উত্তর', 'U', NULL, 'G', 8),
(68, '13', '95', 'SHAHRASTI', 'শাহরাস্তি', 'U', NULL, 'G', 8),
(69, '15', '04', 'ANOWARA', 'আনোয়ারা', 'U', NULL, 'G', 9),
(70, '15', '06', 'BAYEJID BOSTAMI', 'বায়জিদ বোস্তামী', 'T', NULL, 'G', 9),
(71, '15', '08', 'BANSHKHALI', 'বাঁশখালী', 'U', NULL, 'G', 9),
(72, '15', '10', 'BAKALIA', 'বাকলীয়া', 'T', NULL, 'G', 9),
(73, '15', '12', 'BOALKHALI', 'বোয়ালখালী', 'U', NULL, 'G', 9),
(74, '15', '18', 'CHANDANAISH', 'চন্দনাইশ', 'U', NULL, 'G', 9),
(75, '15', '19', 'CHANDGAON', 'চাঁদগাও', 'T', NULL, 'G', 9),
(76, '15', '20', 'CHITTAGONG PORT', 'চট্টগ্রাম পোর্ট', 'T', NULL, 'G', 9),
(77, '15', '28', 'DOUBLE MOORING', 'ডবলমুরিং', 'T', NULL, 'G', 9),
(78, '15', '33', 'FATIKCHHARI', 'ফটিকছড়ি', 'U', NULL, 'G', 9),
(79, '15', '35', 'HALISHAHAR', 'হালিশহর', 'T', NULL, 'G', 9),
(80, '15', '37', 'HATHAZARI', 'হাটহাজারী', 'U', NULL, 'G', 9),
(81, '15', '39', 'KARNAFULI', 'কর্ণফুলী', 'U', NULL, 'G', 9),
(82, '15', '41', 'KOTWALI', 'কোতয়ালী', 'T', NULL, 'G', 9),
(83, '15', '43', 'KHULSHI', 'খুল্‌শী', 'T', NULL, 'G', 9),
(84, '15', '47', 'LOHAGARA', 'লোহাগড়া', 'U', NULL, 'G', 9),
(85, '15', '53', 'MIRSHARAI', 'মিরশরাই', 'U', NULL, 'G', 9),
(86, '15', '55', 'PAHARTALI', 'পাহাড়তলী', 'T', NULL, 'G', 9),
(87, '15', '57', 'PANCHLAISH', 'পাঁচলাইশ', 'T', NULL, 'G', 9),
(88, '15', '61', 'PATIYA', 'পটিয়া', 'U', NULL, 'G', 9),
(89, '15', '65', 'PATENGA', 'পতেঙ্গা', 'T', NULL, 'G', 9),
(90, '15', '70', 'RANGUNIA', 'রাংগুনীয়া', 'U', NULL, 'G', 9),
(91, '15', '74', 'RAOZAN', 'রাউজান', 'U', NULL, 'G', 9),
(92, '15', '78', 'SANDWIP', 'সন্দ্বীপ', 'U', NULL, 'R', 9),
(93, '15', '82', 'SATKANIA', 'সাতকানিয়া', 'U', NULL, 'G', 9),
(94, '15', '86', 'SITAKUNDA', 'সীতাকুন্ড', 'U', NULL, 'G', 9),
(95, '18', '07', 'ALAMDANGA', 'আলমডাংগা', 'U', NULL, 'G', 10),
(96, '18', '23', 'CHUADANGA SADAR', 'চুয়াডাঙ্গা সদর', 'U', NULL, 'G', 10),
(97, '18', '31', 'DAMURHUDA', 'দামুরহুদা', 'U', NULL, 'G', 10),
(98, '18', '55', 'JIBAN NAGAR', 'জীবন নগর', 'U', NULL, 'G', 10),
(99, '19', '09', 'BARURA', 'বরুড়া', 'U', NULL, 'G', 11),
(100, '19', '15', 'BRAHMAN PARA', 'ব্রাক্ষ্মণপাড়া', 'U', NULL, 'G', 11),
(101, '19', '18', 'BURICHANG', 'বুড়িচং', 'U', NULL, 'G', 11),
(102, '19', '27', 'CHANDINA', 'চান্দিনা', 'U', NULL, 'G', 11),
(103, '19', '31', 'CHAUDDAGRAM', 'চৌদ্দগ্রাম', 'U', NULL, 'G', 11),
(104, '19', '33', 'COMILLA SADAR DAKSHIN', 'কুমিল্লা সদর দক্ষিণ', 'U', NULL, 'G', 11),
(105, '19', '36', 'DAUDKANDI', 'দাউদকান্দি', 'U', NULL, 'G', 11),
(106, '19', '40', 'DEBIDWAR', 'দেবিদ্বার', 'U', NULL, 'G', 11),
(107, '19', '54', 'HOMNA', 'হোমনা', 'U', NULL, 'G', 11),
(108, '19', '67', 'COMILLA ADARSHA SADAR', 'কুমিল্লা আদর্শ সদর', 'U', NULL, 'G', 11),
(109, '19', '72', 'LAKSAM', 'লাকসাম', 'U', NULL, 'G', 11),
(110, '19', '73', 'LALMAI', 'লালমাই', 'U', NULL, 'G', 11),
(111, '19', '74', 'MANOHARGANJ', 'মনোহরগঞ্জ', 'U', NULL, 'G', 11),
(112, '19', '75', 'MEGHNA', 'মেঘনা', 'U', NULL, 'R', 11),
(113, '19', '81', 'MURADNAGAR', 'মুরাদনগর', 'U', NULL, 'G', 11),
(114, '19', '87', 'NANGALKOT', 'নাঙ্গলকোট', 'U', NULL, 'G', 11),
(115, '19', '94', 'TITAS', 'তিতাস', 'U', NULL, 'G', 11),
(116, '22', '16', 'CHAKARIA', 'চকরিয়া', 'U', NULL, 'G', 12),
(117, '22', '24', 'COX\'S BAZAR SADAR', 'কক্সবাজার সদর', 'U', NULL, 'G', 12),
(118, '22', '45', 'KUTUBDIA', 'কুতুবদিয়া', 'U', NULL, 'R', 12),
(119, '22', '49', 'MAHESHKHALI', 'মহেশখালী', 'U', NULL, 'R', 12),
(120, '22', '56', 'PEKUA', 'পেকুয়া', 'U', NULL, 'G', 12),
(121, '22', '66', 'RAMU', 'রামু', 'U', NULL, 'G', 12),
(122, '22', '90', 'TEKNAF', 'টেক্‌নাফ', 'U', NULL, 'G', 12),
(123, '22', '94', 'UKHIA', 'উখিয়া', 'U', NULL, 'G', 12),
(124, '26', '02', 'ADABOR', 'আদাবর', 'T', NULL, 'G', 13),
(125, '26', '04', 'BADDA', 'বাড্ডা', 'U', NULL, 'G', 13),
(126, '26', '05', 'BANGSHAL', 'বংশাল', 'T', NULL, 'G', 13),
(127, '26', '06', 'BIMAN BANDAR', 'বিমান বন্দর', 'T', NULL, 'G', 13),
(128, '26', '08', 'CANTONMENT', 'ক্যান্টনমেন্ট', 'U', NULL, 'G', 13),
(129, '26', '09', 'CHAK BAZAR', 'চক বাজার', 'T', NULL, 'G', 13),
(130, '26', '10', 'DAKSHINKHAN', 'দক্ষিণখান', 'U', NULL, 'G', 13),
(131, '26', '11', 'DARUS SALAM', 'দারুস সালাম', 'T', NULL, 'G', 13),
(132, '26', '12', 'DEMRA', 'ডেমরা', 'U', NULL, 'G', 13),
(133, '26', '14', 'DHAMRAI', 'ধামরাই', 'U', NULL, 'G', 13),
(134, '26', '16', 'DHANMONDI', 'ধানমন্ডি', 'T', NULL, 'G', 13),
(135, '26', '18', 'DOHAR', 'দোহার', 'U', NULL, 'G', 13),
(136, '26', '24', 'GANDARIA', 'গেন্ডারিয়া', 'T', NULL, 'G', 13),
(137, '26', '26', 'GULSHAN', 'গুলশান', 'T', NULL, 'G', 13),
(138, '26', '28', 'HAZARIBAGH', 'হাজারীবাগ', 'T', NULL, 'G', 13),
(139, '26', '29', 'JATRABARI', 'যাত্রাবাড়ী', 'U', NULL, 'G', 13),
(140, '26', '30', 'KAFRUL', 'কাফরুল', 'T', NULL, 'G', 13),
(141, '26', '32', 'KADAMTALI', 'কদমতলী', 'U', NULL, 'G', 13),
(142, '26', '33', 'KALABAGAN', 'কলাবাগান', 'T', NULL, 'G', 13),
(143, '26', '34', 'KAMRANGIR CHAR', 'কামরাঙ্গীর চর', 'U', NULL, 'G', 13),
(144, '26', '36', 'KHILGAON', 'খিলগাও', 'U', NULL, 'G', 13),
(145, '26', '37', 'KHILKHET', 'খিলক্ষেত', 'U', NULL, 'G', 13),
(146, '26', '38', 'KERANIGANJ', 'কেরানীগঞ্জ', 'U', NULL, 'G', 13),
(147, '26', '40', 'KOTWALI', 'কোতয়ালী', 'T', NULL, 'G', 13),
(148, '26', '42', 'LALBAGH', 'লালবাগ', 'T', NULL, 'G', 13),
(149, '26', '48', 'MIRPUR', 'মিরপুর', 'T', NULL, 'G', 13),
(150, '26', '50', 'MOHAMMADPUR', 'মোহাম্মদপুর', 'T', NULL, 'G', 13),
(151, '26', '54', 'MOTIJHEEL', 'মতিঝিল', 'T', NULL, 'G', 13),
(152, '26', '62', 'NAWABGANJ', 'নবাবগঞ্জ', 'U', NULL, 'G', 13),
(153, '26', '63', 'NEW MARKET', 'নিউ মার্কেট', 'T', NULL, 'G', 13),
(154, '26', '64', 'PALLABI', 'পল্লবী', 'T', NULL, 'G', 13),
(155, '26', '65', 'PALTAN', 'পল্টন', 'T', NULL, 'G', 13),
(156, '26', '66', 'RAMNA', 'রমনা', 'T', NULL, 'G', 13),
(157, '26', '67', 'RAMPURA', 'রামপুরা', 'T', NULL, 'G', 13),
(158, '26', '68', 'SABUJBAGH', 'সবুজবাগ', 'U', NULL, 'G', 13),
(159, '26', '72', 'SAVAR', 'সাভার', 'U', NULL, 'G', 13),
(160, '26', '74', 'SHAH ALI', 'শাহ আলী', 'T', NULL, 'G', 13),
(161, '26', '75', 'SHAHBAGH', 'শাহবাগ', 'T', NULL, 'G', 13),
(162, '26', '76', 'SHYAMPUR', 'শ্যামপুর', 'U', NULL, 'G', 13),
(163, '26', '80', 'SHER-E-BANGLA NAGAR', 'শের-ই-বাংলা নগর', 'T', NULL, 'G', 13),
(164, '26', '88', 'SUTRAPUR', 'সুত্রাপুর', 'T', NULL, 'G', 13),
(165, '26', '90', 'TEJGAON', 'তেজগাঁও', 'T', NULL, 'G', 13),
(166, '26', '92', 'TEJGAON IND. AREA', 'তেজগাঁও শিল্প এলাকা', 'T', NULL, 'G', 13),
(167, '26', '93', 'TURAG', 'তুরাগ', 'U', NULL, 'G', 13),
(168, '26', '95', 'UTTARA', 'উত্তরা', 'U', NULL, 'G', 13),
(169, '26', '96', 'UTTAR KHAN', 'উত্তর খান', 'U', NULL, 'G', 13),
(170, '27', '10', 'BIRAMPUR', 'বিরামপুর', 'U', NULL, 'G', 14),
(171, '27', '12', 'BIRGANJ', 'বীরগঞ্জ', 'U', NULL, 'G', 14),
(172, '27', '17', 'BIRAL', 'বিরল', 'U', NULL, 'G', 14),
(173, '27', '21', 'BOCHAGANJ', 'বোচাগঞ্জ', 'U', NULL, 'G', 14),
(174, '27', '30', 'CHIRIRBANDAR', 'চিরিরবন্দর', 'U', NULL, 'G', 14),
(175, '27', '38', 'FULBARI', 'ফুলবাড়ী', 'U', NULL, 'G', 14),
(176, '27', '43', 'GHORAGHAT', 'ঘোড়াঘাট', 'U', NULL, 'G', 14),
(177, '27', '47', 'HAKIMPUR', 'হাকিমপুর', 'U', NULL, 'G', 14),
(178, '27', '56', 'KAHAROLE', 'কাহারোল', 'U', NULL, 'G', 14),
(179, '27', '60', 'KHANSAMA', 'খান্‌সামা', 'U', NULL, 'G', 14),
(180, '27', '64', 'DINAJPUR SADAR', 'দিনাজপুর সদর', 'U', NULL, 'G', 14),
(181, '27', '69', 'NAWABGANJ', 'নবাবগঞ্জ', 'U', NULL, 'G', 14),
(182, '27', '77', 'PARBATIPUR', 'পার্বতীপুর', 'U', NULL, 'G', 14),
(183, '29', '03', 'ALFADANGA', 'আল্‌ফাডাঙ্গা', 'U', NULL, 'G', 15),
(184, '29', '10', 'BHANGA', 'ভাংগা', 'U', NULL, 'G', 15),
(185, '29', '18', 'BOALMARI', 'বোয়ালমারী', 'U', NULL, 'G', 15),
(186, '29', '21', 'CHAR BHADRASAN', 'চর ভদ্রাশন', 'U', NULL, 'G', 15),
(187, '29', '47', 'FARIDPUR SADAR', 'ফরিদপুর সদর', 'U', NULL, 'G', 15),
(188, '29', '56', 'MADHUKHALI', 'মধুখালী', 'U', NULL, 'G', 15),
(189, '29', '62', 'NAGARKANDA', 'নগরকান্দা', 'U', NULL, 'G', 15),
(190, '29', '84', 'SADARPUR', 'সদরপুর', 'U', NULL, 'G', 15),
(191, '29', '90', 'SALTHA', 'সালথা', 'U', NULL, 'G', 15),
(192, '30', '14', 'CHHAGALNAIYA', 'ছাগলনাইয়া', 'U', NULL, 'G', 16),
(193, '30', '25', 'DAGANBHUIYAN', 'দাগনভূঁঞা', 'U', NULL, 'G', 16),
(194, '30', '29', 'FENI SADAR', 'ফেনী সদর', 'U', NULL, 'G', 16),
(195, '30', '41', 'FULGAZI', 'ফুলগাজী', 'U', NULL, 'G', 16),
(196, '30', '51', 'PARSHURAM', 'পরশুরাম', 'U', NULL, 'G', 16),
(197, '30', '94', 'SONAGAZI', 'সোনাগাজী', 'U', NULL, 'G', 16),
(198, '32', '21', 'FULCHHARI', 'ফুলছড়ি', 'U', NULL, 'G', 17),
(199, '32', '24', 'GAIBANDHA SADAR', 'গাইবান্ধা সদর', 'U', NULL, 'G', 17),
(200, '32', '30', 'GOBINDAGANJ', 'গোবিন্দগঞ্জ', 'U', NULL, 'G', 17),
(201, '32', '67', 'PALASHBARI', 'পলাশবাড়ী', 'U', NULL, 'G', 17),
(202, '32', '82', 'SADULLAPUR', 'সাদুল্লাপুর', 'U', NULL, 'G', 17),
(203, '32', '88', 'SAGHATA', 'সাঘাটা', 'U', NULL, 'G', 17),
(204, '32', '91', 'SUNDARGANJ', 'সুন্দরগঞ্জ', 'U', NULL, 'G', 17),
(205, '33', '30', 'GAZIPUR SADAR', 'গাজীপুর সদর', 'U', NULL, 'G', 18),
(206, '33', '32', 'KALIAKAIR', 'কালিয়াকৈর', 'U', NULL, 'G', 18),
(207, '33', '34', 'KALIGANJ', 'কালিগঞ্জ', 'U', NULL, 'G', 18),
(208, '33', '36', 'KAPASIA', 'কাপাসিয়া', 'U', NULL, 'G', 18),
(209, '33', '86', 'SREEPUR', 'শ্রীপুর', 'U', NULL, 'G', 18),
(210, '35', '32', 'GOPALGANJ SADAR', 'গোপালগঞ্জ সদর', 'U', NULL, 'G', 19),
(211, '35', '43', 'KASHIANI', 'কাশিয়ানী', 'U', NULL, 'G', 19),
(212, '35', '51', 'KOTALIPARA', 'কোটালিপাড়া', 'U', NULL, 'G', 19),
(213, '35', '58', 'MUKSUDPUR', 'মুকসুদপুর', 'U', NULL, 'G', 19),
(214, '35', '91', 'TUNGIPARA', 'টুংগীপাড়া', 'U', '1', 'G', 19),
(215, '36', '02', 'AJMIRIGANJ', 'আজমিরিগঞ্জ', 'U', NULL, 'R', 20),
(216, '36', '05', 'BAHUBAL', 'বাহুবল', 'U', NULL, 'G', 20),
(217, '36', '11', 'BANIACHONG', 'বানিয়াচং', 'U', NULL, 'G', 20),
(218, '36', '26', 'CHUNARUGHAT', 'চুনারুঘাট', 'U', NULL, 'G', 20),
(219, '36', '44', 'HABIGANJ SADAR', 'হবিগঞ্জ সদর', 'U', NULL, 'G', 20),
(220, '36', '68', 'LAKHAI', 'লাখাই', 'U', NULL, 'G', 20),
(221, '36', '71', 'MADHABPUR', 'মাধবপুর', 'U', NULL, 'G', 20),
(222, '36', '77', 'NABIGANJ', 'নবীগঞ্জ', 'U', NULL, 'G', 20),
(223, '38', '13', 'AKKELPUR', 'আক্কেলপুর', 'U', NULL, 'G', 21),
(224, '38', '47', 'JOYPURHAT SADAR', 'জয়পুরহাট সদর', 'U', NULL, 'G', 21),
(225, '38', '58', 'KALAI', 'কালাই', 'U', NULL, 'G', 21),
(226, '38', '61', 'KHETLAL', 'ক্ষেতলাল', 'U', NULL, 'G', 21),
(227, '38', '74', 'PANCHBIBI', 'পাঁচবিবি', 'U', NULL, 'G', 21),
(228, '39', '07', 'BAKSHIGANJ', 'বকশিগঞ্জ', 'U', NULL, 'G', 22),
(229, '39', '15', 'DEWANGANJ', 'দেওয়ানগঞ্জ', 'U', NULL, 'G', 22),
(230, '39', '29', 'ISLAMPUR', 'ইসলামপুর', 'U', NULL, 'G', 22),
(231, '39', '36', 'JAMALPUR SADAR', 'জামালপুর সদর', 'U', NULL, 'G', 22),
(232, '39', '58', 'MADARGANJ', 'মাদারগঞ্জ', 'U', NULL, 'G', 22),
(233, '39', '61', 'MELANDAHA', 'মেলান্দহ', 'U', NULL, 'G', 22),
(234, '39', '85', 'SARISHABARI', 'সরিষাবাড়ী', 'U', NULL, 'G', 22),
(235, '41', '04', 'ABHAYNAGAR', 'অভয়নগর', 'U', NULL, 'G', 23),
(236, '41', '09', 'BAGHER PARA', 'বাঘারপাড়া', 'U', NULL, 'G', 23),
(237, '41', '11', 'CHAUGACHHA', 'চৌগাছা', 'U', NULL, 'G', 23),
(238, '41', '23', 'JHIKARGACHHA', 'ঝিকরগাছা', 'U', NULL, 'G', 23),
(239, '41', '38', 'KESHABPUR', 'কেশবপুর', 'U', NULL, 'G', 23),
(240, '41', '47', 'JESSOR SADAR', 'যশোর সদর', 'U', NULL, 'G', 23),
(241, '41', '61', 'MANIRAMPUR', 'মনিরামপুর', 'U', NULL, 'G', 23),
(242, '41', '90', 'SHARSHA', 'শার্শা', 'U', NULL, 'G', 23),
(243, '42', '40', 'JHALOKATI SADAR', 'ঝালকাঠী সদর', 'U', NULL, 'G', 24),
(244, '42', '43', 'KANTHALIA', 'কাঠালিয়া', 'U', NULL, 'G', 24),
(245, '42', '73', 'NALCHITY', 'নলছিটি', 'U', NULL, 'G', 24),
(246, '42', '84', 'RAJAPUR', 'রাজাপুর', 'U', NULL, 'G', 24),
(247, '44', '14', 'HARINAKUNDA', 'হরিনাকুন্ডু', 'U', NULL, 'G', 25),
(248, '44', '19', 'JHENAIDAH SADAR', 'ঝিনাইদহ সদর', 'U', NULL, 'G', 25),
(249, '44', '33', 'KALIGANJ', 'কালীগঞ্জ', 'U', NULL, 'G', 25),
(250, '44', '42', 'KOTCHANDPUR', 'কোটচাঁদপুর', 'U', NULL, 'G', 25),
(251, '44', '71', 'MAHESHPUR', 'মহেশপুর', 'U', NULL, 'G', 25),
(252, '44', '80', 'SHAILKUPA', 'শৈলকুপা', 'U', NULL, 'G', 25),
(253, '46', '43', 'DIGHINALA', 'দিঘিনালা', 'U', NULL, 'H', 26),
(254, '46', '47', 'GUIMARA', 'গুইমারা', 'U', NULL, 'H', 26),
(255, '46', '49', 'KHAGRACHHARI SADAR', 'খাগরাছড়ি সদর', 'U', NULL, 'H', 26),
(256, '46', '61', 'LAKSHMICHHARI', 'লক্ষীছড়ি', 'U', NULL, 'H', 26),
(257, '46', '65', 'MAHALCHHARI', 'মহালছড়ি', 'U', NULL, 'H', 26),
(258, '46', '67', 'MANIKCHHARI', 'মানিকছড়ি', 'U', NULL, 'H', 26),
(259, '46', '70', 'MATIRANGA', 'মাটিরাংগা', 'U', NULL, 'H', 26),
(260, '46', '77', 'PANCHHARI', 'পানছড়ি', 'U', NULL, 'H', 26),
(261, '46', '80', 'RAMGARH', 'রামগড়', 'U', NULL, 'H', 26),
(262, '47', '12', 'BATIAGHATA', 'বটিয়াঘাটা', 'U', NULL, 'G', 27),
(263, '47', '17', 'DACOPE', 'দাকোপ', 'U', NULL, 'G', 27),
(264, '47', '21', 'DAULATPUR', 'দৌলতপুর', 'T', NULL, 'G', 27),
(265, '47', '30', 'DUMURIA', 'ডুমুরিয়া', 'U', NULL, 'G', 27),
(266, '47', '40', 'DIGHALIA', 'দিঘলিয়া', 'U', NULL, 'G', 27),
(267, '47', '45', 'KHALISHPUR', 'খালিসপুর', 'T', NULL, 'G', 27),
(268, '47', '48', 'KHAN JAHAN ALI', 'খান জাহান আলী', 'T', NULL, 'G', 27),
(269, '47', '51', 'KHULNA SADAR', 'খুলনা সদর', 'T', NULL, 'G', 27),
(270, '47', '53', 'KOYRA', 'কয়রা', 'U', NULL, 'R', 27),
(271, '47', '64', 'PAIKGACHHA', 'পাইকগাছা', 'U', NULL, 'G', 27),
(272, '47', '69', 'PHULTALA', 'ফুলতলা', 'U', NULL, 'G', 27),
(273, '47', '75', 'RUPSA', 'রূপসা', 'U', NULL, 'G', 27),
(274, '47', '85', 'SONADANGA', 'সোনাডাঙ্গা', 'T', NULL, 'G', 27),
(275, '47', '94', 'TEROKHADA', 'তেরখাদা', 'U', NULL, 'G', 27),
(276, '48', '02', 'AUSTAGRAM', 'অষ্টগ্রাম', 'U', NULL, 'R', 28),
(277, '48', '06', 'BAJITPUR', 'বাজিতপুর', 'U', NULL, 'G', 28),
(278, '48', '11', 'BHAIRAB', 'ভৈরব', 'U', NULL, 'G', 28),
(279, '48', '27', 'HOSSAINPUR', 'হোসেনপুর', 'U', NULL, 'G', 28),
(280, '48', '33', 'ITNA', 'ইটনা', 'U', NULL, 'R', 28),
(281, '48', '42', 'KARIMGANJ', 'করিমগঞ্জ', 'U', NULL, 'G', 28),
(282, '48', '45', 'KATIADI', 'কটিয়াদী', 'U', NULL, 'G', 28),
(283, '48', '49', 'KISHOREGANJ SADAR', 'কিশোরগঞ্জ সদর', 'U', NULL, 'G', 28),
(284, '48', '54', 'KULIAR CHAR', 'কুলিয়ার চর', 'U', NULL, 'G', 28),
(285, '48', '59', 'MITHAMAIN', 'মিঠামইন', 'U', NULL, 'R', 28),
(286, '48', '76', 'NIKLI', 'নিক্‌লী', 'U', NULL, 'G', 28),
(287, '48', '79', 'PAKUNDIA', 'পাকুন্দিয়া', 'U', NULL, 'G', 28),
(288, '48', '92', 'TARAIL', 'তারাইল', 'U', NULL, 'G', 28),
(289, '49', '06', 'BHURUNGAMARI', 'ভুরুংগামারী', 'U', NULL, 'G', 29),
(290, '49', '08', 'CHAR RAJIBPUR', 'রাজিবপুর', 'U', NULL, 'R', 29),
(291, '49', '09', 'CHILMARI', 'চিলমারী', 'U', NULL, 'G', 29),
(292, '49', '18', 'PHULBARI', 'ফুলবাড়ী', 'U', NULL, 'G', 29),
(293, '49', '52', 'KURIGRAM SADAR', 'কুড়িগ্রাম সদর', 'U', NULL, 'G', 29),
(294, '49', '61', 'NAGESHWARI', 'নাগেশ্বরী', 'U', NULL, 'G', 29),
(295, '49', '77', 'RAJARHAT', 'রাজারহাট', 'U', NULL, 'G', 29),
(296, '49', '79', 'RAUMARI', 'রৌমারী', 'U', NULL, 'R', 29),
(297, '49', '94', 'ULIPUR', 'উলিপুর', 'U', NULL, 'G', 29),
(298, '50', '15', 'BHERAMARA', 'ভেড়ামারা', 'U', NULL, 'G', 30),
(299, '50', '39', 'DAULATPUR', 'দৌলতপুর', 'U', NULL, 'G', 30),
(300, '50', '63', 'KHOKSA', 'খোক্‌সা', 'U', NULL, 'G', 30),
(301, '50', '71', 'KUMARKHALI', 'কুমারখালী', 'U', NULL, 'G', 30),
(302, '50', '79', 'KUSHTIA SADAR', 'কুষ্টিয়া সদর', 'U', NULL, 'G', 30),
(303, '50', '94', 'MIRPUR', 'মিরপুর', 'U', NULL, 'G', 30),
(304, '51', '33', 'KAMALNAGAR', 'কমলনগর', 'U', NULL, 'G', 31),
(305, '51', '43', 'LAKSHMIPUR SADAR', 'লক্ষ্ণীপুর সদর', 'U', NULL, 'G', 31),
(306, '51', '58', 'ROYPUR', 'রায়পুর', 'U', NULL, 'G', 31),
(307, '51', '65', 'RAMGANJ', 'রামগঞ্জ', 'U', NULL, 'G', 31),
(308, '51', '73', 'RAMGATI', 'রামগতী', 'U', NULL, 'G', 31),
(309, '52', '02', 'ADITMARI', 'আদিতমারী', 'U', NULL, 'G', 32),
(310, '52', '33', 'HATIBANDHA', 'হাতীবান্ধা', 'U', NULL, 'G', 32),
(311, '52', '39', 'KALIGANJ', 'কালীগঞ্জ', 'U', NULL, 'G', 32),
(312, '52', '55', 'LALMONIRHAT SADAR', 'লালমনিরহাট সদর', 'U', NULL, 'G', 32),
(313, '52', '70', 'PATGRAM', 'পাটগ্রাম', 'U', NULL, 'G', 32),
(314, '54', '40', 'KALKINI', 'কালকিনী', 'U', NULL, 'G', 33),
(315, '54', '54', 'MADARIPUR SADAR', 'মাদারিপুর সদর', 'U', NULL, 'G', 33),
(316, '54', '80', 'RAJOIR', 'রাজৈর', 'U', NULL, 'G', 33),
(317, '54', '87', 'SHIB CHAR', 'শিবচর', 'U', NULL, 'G', 33),
(318, '55', '57', 'MAGURA SADAR', 'মাগুরা সদর', 'U', NULL, 'G', 34),
(319, '55', '66', 'MOHAMMADPUR', 'মোহাম্মদপুর', 'U', NULL, 'G', 34),
(320, '55', '85', 'SHALIKHA', 'শালিখা', 'U', NULL, 'G', 34),
(321, '55', '95', 'SREEPUR', 'শ্রীপুর', 'U', NULL, 'G', 34),
(322, '56', '10', 'DAULATPUR', 'দৌলতপুর', 'U', NULL, 'G', 35),
(323, '56', '22', 'GHIOR', 'ঘিওর', 'U', NULL, 'G', 35),
(324, '56', '28', 'HARIRAMPUR', 'হরিরামপুর', 'U', NULL, 'G', 35),
(325, '56', '46', 'MANIKGANJ SADAR', 'মানিকগঞ্জ সদর', 'U', NULL, 'G', 35),
(326, '56', '70', 'SATURIA', 'সাটুরিয়া', 'U', NULL, 'G', 35),
(327, '56', '78', 'SHIBALAYA', 'শিবালয়', 'U', NULL, 'G', 35),
(328, '56', '82', 'SINGAIR', 'সিংগাইর', 'U', '1', 'G', 35),
(329, '57', '47', 'GANGNI', 'গাংনী', 'U', NULL, 'G', 36),
(330, '57', '60', 'MUJIB NAGAR', 'মজিব নগর', 'U', NULL, 'G', 36),
(331, '57', '87', 'MEHERPUR SADAR', 'মেহেরপুর সদর', 'U', NULL, 'G', 36),
(332, '58', '14', 'BARLEKHA', 'বড়লেখা', 'U', NULL, 'G', 37),
(333, '58', '35', 'JURI', 'জুড়ী', 'U', NULL, 'G', 37),
(334, '58', '56', 'KAMALGANJ', 'কমলগঞ্জ', 'U', NULL, 'G', 37),
(335, '58', '65', 'KULAURA', 'কুলাউড়া', 'U', NULL, 'G', 37),
(336, '58', '74', 'MAULVIBAZAR SADAR', 'মৌলভীবাজার সদর', 'U', NULL, 'G', 37),
(337, '58', '80', 'RAJNAGAR', 'রাজনগর', 'U', NULL, 'G', 37),
(338, '58', '83', 'SREEMANGAL', 'শ্রীমঙ্গল', 'U', NULL, 'G', 37),
(339, '59', '24', 'GAZARIA', 'গজারিয়া', 'U', NULL, 'G', 38),
(340, '59', '44', 'LOHAJANG', 'লৌহজং', 'U', NULL, 'G', 38),
(341, '59', '56', 'MUNSHIGANJ SADAR', 'মুন্সীগঞ্জ সদর', 'U', NULL, 'G', 38),
(342, '59', '74', 'SERAJDIKHAN', 'সিরাজদিখান', 'U', NULL, 'G', 38),
(343, '59', '84', 'SREENAGAR', 'শ্রীনগর', 'U', NULL, 'G', 38),
(344, '59', '94', 'TONGIBARI', 'টুঙ্গিবাড়ী', 'U', NULL, 'G', 38),
(345, '61', '13', 'BHALUKA', 'ভালুকা', 'U', NULL, 'G', 39),
(346, '61', '16', 'DHOBAURA', 'ধোবাউড়া', 'U', NULL, 'G', 39),
(347, '61', '20', 'FULBARIA', 'ফুলবাড়ীয়া', 'U', NULL, 'G', 39),
(348, '61', '22', 'GAFFARGAON', 'গফরগাঁও', 'U', NULL, 'G', 39),
(349, '61', '23', 'GAURIPUR', 'গৌরীপুর', 'U', NULL, 'G', 39),
(350, '61', '24', 'HALUAGHAT', 'হালুয়াঘাট', 'U', NULL, 'G', 39),
(351, '61', '31', 'ISHWARGANJ', 'ঈশ্বরগঞ্জ', 'U', NULL, 'G', 39),
(352, '61', '52', 'MYMENSINGH SADAR', 'ময়মনসিংহ সদর', 'U', NULL, 'G', 39),
(353, '61', '65', 'MUKTAGACHHA', 'মুক্তাগাছা', 'U', NULL, 'G', 39),
(354, '61', '72', 'NANDAIL', 'নান্দাইল', 'U', NULL, 'G', 39),
(355, '61', '81', 'PHULPUR', 'ফুলপুর', 'U', NULL, 'G', 39),
(356, '61', '88', 'TARAKANDA', 'তারাকান্দা', 'U', NULL, 'G', 39),
(357, '61', '94', 'TRISHAL', 'ত্রিশাল', 'U', NULL, 'G', 39),
(358, '64', '03', 'ATRAI', 'আত্রাই', 'U', NULL, 'G', 40),
(359, '64', '06', 'BADALGACHHI', 'বদলগাছী', 'U', NULL, 'G', 40),
(360, '64', '28', 'DHAMOIRHAT', 'ধামুইরহাট', 'U', NULL, 'G', 40),
(361, '64', '47', 'MANDA', 'মান্দা', 'U', NULL, 'G', 40),
(362, '64', '50', 'MAHADEBPUR', 'মহাদেবপুর', 'U', NULL, 'G', 40),
(363, '64', '60', 'NAOGAON SADAR', 'নওগাঁ সদর', 'U', NULL, 'G', 40),
(364, '64', '69', 'NIAMATPUR', 'নিয়ামতপুর', 'U', NULL, 'G', 40),
(365, '64', '75', 'PATNITALA', 'পত্নীতলা', 'U', NULL, 'G', 40),
(366, '64', '79', 'PORSHA', 'পোরশা', 'U', NULL, 'G', 40),
(367, '64', '85', 'RANINAGAR', 'রাণীনগর', 'U', NULL, 'G', 40),
(368, '64', '86', 'SAPAHAR', 'সাপাহার', 'U', NULL, 'G', 40),
(369, '65', '28', 'KALIA', 'কালিয়া', 'U', NULL, 'G', 41),
(370, '65', '52', 'LOHAGARA', 'লোহাগড়া', 'U', NULL, 'G', 41),
(371, '65', '76', 'NARAIL SADAR', 'নড়াইল সদর', 'U', NULL, 'G', 41),
(372, '67', '02', 'ARAIHAZAR', 'আড়াইহাজার', 'U', NULL, 'G', 42),
(373, '67', '04', 'SONARGAON', 'সোনারগাঁও', 'U', NULL, 'G', 42),
(374, '67', '06', 'BANDAR', 'বন্দর', 'U', NULL, 'G', 42),
(375, '67', '58', 'NARAYANGANJ SADAR', 'নারায়ণগঞ্জ সদর', 'U', NULL, 'G', 42),
(376, '67', '68', 'RUPGANJ', 'রূপগঞ্জ', 'U', NULL, 'G', 42),
(377, '68', '07', 'BELABO', 'বেলাবো', 'U', NULL, 'G', 43),
(378, '68', '52', 'MANOHARDI', 'মনোহরদী', 'U', NULL, 'G', 43),
(379, '68', '60', 'NARSINGDI SADAR', 'নরসিংদী সদর', 'U', NULL, 'G', 43),
(380, '68', '63', 'PALASH', 'পলাশ', 'U', NULL, 'G', 43),
(381, '68', '64', 'ROYPURA', 'রায়পুরা', 'U', NULL, 'G', 43),
(382, '68', '76', 'SHIBPUR', 'শিবপুর', 'U', NULL, 'G', 43),
(383, '69', '09', 'BAGATIPARA', 'বাগাতিপাড়া', 'U', NULL, 'G', 44),
(384, '69', '15', 'BARAIGRAM', 'বড়ইগ্রাম', 'U', NULL, 'G', 44),
(385, '69', '41', 'GURUDASPUR', 'গুরুদাসপুর', 'U', NULL, 'G', 44),
(386, '69', '44', 'LALPUR', 'লালপুর', 'U', NULL, 'G', 44),
(387, '69', '55', 'NALDANGA', 'নলডাঙ্গা', 'U', NULL, 'G', 44),
(388, '69', '63', 'NATORE SADAR', 'নাটোর সদর', 'U', NULL, 'G', 44),
(389, '69', '91', 'SINGRA', 'সিংড়া', 'U', NULL, 'G', 44),
(390, '70', '18', 'BHOLAHAT', 'ভোলাহাট', 'U', NULL, 'G', 45),
(391, '70', '37', 'GOMASTAPUR', 'গোমস্তাপুর', 'U', NULL, 'G', 45),
(392, '70', '56', 'NACHOLE', 'নাচোল', 'U', NULL, 'G', 45),
(393, '70', '66', 'CHAPAI NABABGANJ SADAR', 'চাঁপাই নবাবগঞ্জ সদর', 'U', NULL, 'G', 45),
(394, '70', '88', 'SHIBGANJ', 'শিবগঞ্জ', 'U', NULL, 'G', 45),
(395, '72', '04', 'ATPARA', 'আটপাড়া', 'U', NULL, 'G', 46),
(396, '72', '09', 'BARHATTA', 'বারহাট্টা', 'U', NULL, 'G', 46),
(397, '72', '18', 'DURGAPUR', 'দূর্গাপুর', 'U', NULL, 'R', 46),
(398, '72', '38', 'KHALIAJURI', 'খলিয়াজুরী', 'U', NULL, 'R', 46),
(399, '72', '40', 'KALMAKANDA', 'কলমাকান্দা', 'U', NULL, 'G', 46),
(400, '72', '47', 'KENDUA', 'কেন্দুয়া', 'U', NULL, 'G', 46),
(401, '72', '56', 'MADAN', 'মদন ', 'U', NULL, 'G', 46),
(402, '72', '63', 'MOHANGANJ', 'মোহনগঞ্জ', 'U', NULL, 'G', 46),
(403, '72', '74', 'NETROKONA SADAR', 'নেত্রকোনা সদর', 'U', NULL, 'G', 46),
(404, '72', '83', 'PURBADHALA', 'পূর্বধলা', 'U', NULL, 'G', 46),
(405, '73', '12', 'DIMLA', 'ডিমলা', 'U', NULL, 'G', 47),
(406, '73', '15', 'DOMAR', 'ডোমার', 'U', NULL, 'G', 47),
(407, '73', '36', 'JALDHAKA', 'জলঢাকা', 'U', NULL, 'G', 47),
(408, '73', '45', 'KISHOREGANJ', 'কিশোরগঞ্জ', 'U', NULL, 'G', 47),
(409, '73', '64', 'NILPHAMARI SADAR', 'নীলফামারী সদর', 'U', NULL, 'G', 47),
(410, '73', '85', 'SAIDPUR', 'সৈয়দপুর', 'U', NULL, 'G', 47),
(411, '75', '07', 'BEGUMGANJ', 'বেগমগঞ্জ', 'U', NULL, 'G', 48),
(412, '75', '10', 'CHATKHIL', 'চাট্‌খিল', 'U', NULL, 'G', 48),
(413, '75', '21', 'COMPANIGANJ', 'কোম্পানীগঞ্জ', 'U', NULL, 'G', 48),
(414, '75', '36', 'HATIYA', 'হাতিয়া', 'U', NULL, 'R', 48),
(415, '75', '47', 'KABIRHAT', 'কবিরহাট', 'U', NULL, 'G', 48),
(416, '75', '80', 'SENBAGH', 'সেনবাগ', 'U', NULL, 'G', 48),
(417, '75', '83', 'SONAIMURI', 'সোনাইমুড়ি', 'U', NULL, 'G', 48),
(418, '75', '85', 'SUBARNACHAR', 'সুবর্ণচর', 'U', NULL, 'G', 48),
(419, '75', '87', 'NOAKHALI SADAR', 'নোয়াখালী সদর', 'U', NULL, 'G', 48),
(420, '76', '05', 'ATGHARIA', 'আটঘরিয়া', 'U', NULL, 'G', 49),
(421, '76', '16', 'BERA', 'বেড়া', 'U', NULL, 'G', 49),
(422, '76', '19', 'BHANGURA', 'ভাংগুড়া', 'U', NULL, 'G', 49),
(423, '76', '22', 'CHATMOHAR', 'চাট্‌মোহর', 'U', NULL, 'G', 49),
(424, '76', '33', 'FARIDPUR', 'ফরিদপুর', 'U', NULL, 'G', 49),
(425, '76', '39', 'ISHWARDI', 'ঈশ্বরদী', 'U', NULL, 'G', 49),
(426, '76', '55', 'PABNA SADAR', 'পাবনা সদর', 'U', NULL, 'G', 49),
(427, '76', '72', 'SANTHIA', 'সাঁথিয়া', 'U', NULL, 'G', 49),
(428, '76', '83', 'SUJANAGAR', 'সুজানগর', 'U', NULL, 'G', 49),
(429, '77', '04', 'ATWARI', 'আটোয়ারী', 'U', NULL, 'G', 50),
(430, '77', '25', 'BODA', 'বোদা', 'U', NULL, 'G', 50),
(431, '77', '34', 'DEBIGANJ', 'দেবীগঞ্জ', 'U', NULL, 'G', 50),
(432, '77', '73', 'PANCHAGARH SADAR', 'পঞ্চগড় সদর', 'U', NULL, 'G', 50),
(433, '77', '90', 'TENTULIA', 'তেঁতুলিয়া', 'U', NULL, 'G', 50),
(434, '78', '38', 'BAUPHAL', 'বাউফল', 'U', NULL, 'G', 51),
(435, '78', '52', 'DASHMINA', 'দশমিনা', 'U', NULL, 'G', 51),
(436, '78', '55', 'DUMKI', 'দুম্‌কী', 'U', NULL, 'G', 51),
(437, '78', '57', 'GALACHIPA', 'গলাচিপা', 'U', NULL, 'G', 51),
(438, '78', '66', 'KALA PARA', 'কলাপাড়া', 'U', NULL, 'G', 51),
(439, '78', '76', 'MIRZAGANJ', 'মির্জাগঞ্জ', 'U', NULL, 'G', 51),
(440, '78', '95', 'PATUAKHALI SADAR', 'পটুয়াখালী সদর', 'U', '1', 'G', 51),
(441, '78', '97', 'RANGABALI', 'রাঙ্গাবালী', 'U', NULL, 'R', 51),
(442, '79', '14', 'BHANDARIA', 'ভান্ডারিয়া', 'U', NULL, 'G', 52),
(443, '79', '47', 'KAWKHALI', 'কাউখালী', 'U', NULL, 'G', 52),
(444, '79', '58', 'MATHBARIA', 'মঠবাড়ীয়া', 'U', NULL, 'G', 52),
(445, '79', '76', 'NAZIRPUR UPAZILA', 'নাজিরপুর', 'U', NULL, 'G', 52),
(446, '79', '80', 'PIROJPUR SADAR', 'পিরোজপুর সদর', 'U', NULL, 'G', 52),
(447, '79', '87', 'NESARABAD (SWARUPKATI)', 'নেছারাবাদ(স্বরূপকাঠী)', 'U', NULL, 'G', 52),
(448, '79', '90', 'INDURKANI', 'ইন্দুরকানী', 'U', NULL, 'G', 52),
(449, '81', '10', 'BAGHA', 'বাঘা', 'U', NULL, 'G', 53),
(450, '81', '12', 'BAGHMARA', 'বাগমারা', 'U', NULL, 'G', 53),
(451, '81', '22', 'BOALIA', 'বোয়ালিয়া', 'T', NULL, 'G', 53),
(452, '81', '25', 'CHARGHAT', 'চারঘাট', 'U', NULL, 'G', 53),
(453, '81', '31', 'DURGAPUR', 'দূর্গাপুর', 'U', NULL, 'G', 53),
(454, '81', '34', 'GODAGARI', 'গোদাগাড়ী', 'U', NULL, 'G', 53),
(455, '81', '40', 'MATIHAR', 'মতিহার', 'T', NULL, 'G', 53),
(456, '81', '53', 'MOHANPUR', 'মোহনপুর', 'U', NULL, 'G', 53),
(457, '81', '72', 'PABA', 'পবা', 'U', NULL, 'G', 53),
(458, '81', '82', 'PUTHIA', 'পুঠিয়া', 'U', NULL, 'G', 53),
(459, '81', '85', 'RAJPARA', 'রাজপাড়া', 'T', NULL, 'G', 53),
(460, '81', '90', 'SHAH MAKHDUM', 'শাহ্‌ মখদুম', 'T', NULL, 'G', 53),
(461, '81', '94', 'TANORE', 'তানোর', 'U', NULL, 'G', 53),
(462, '82', '07', 'BALIAKANDI', 'বালিয়াকান্দি', 'U', NULL, 'G', 54),
(463, '82', '29', 'GOALANDA', 'গোয়ালন্দ', 'U', NULL, 'G', 54),
(464, '82', '47', 'KALUKHALI', 'কালুখালী', 'U', NULL, 'G', 54),
(465, '82', '73', 'PANGSHA', 'পাংশা', 'U', NULL, 'G', 54),
(466, '82', '76', 'RAJBARI SADAR', 'রাজবাড়ী সদর', 'U', NULL, 'G', 54),
(467, '84', '07', 'BAGHAICHHARI', 'বাঘাইছড়ি', 'U', NULL, 'H', 55),
(468, '84', '21', 'BARKAL', 'বরকল', 'U', NULL, 'H', 55),
(469, '84', '25', 'KAWKHALI', 'কাউখালী', 'U', NULL, 'H', 55),
(470, '84', '29', 'BELAI CHHARI', 'বিলাইছড়ি', 'U', NULL, 'H', 55),
(471, '84', '36', 'KAPTAI', 'কাপ্তাই', 'U', NULL, 'H', 55),
(472, '84', '47', 'JURAI CHHARI', 'জুরাইছড়ি', 'U', NULL, 'H', 55),
(473, '84', '58', 'LANGADU', 'লংগদু', 'U', NULL, 'H', 55),
(474, '84', '75', 'NANIARCHAR', 'নানিয়ারচর', 'U', NULL, 'H', 55),
(475, '84', '78', 'RAJASTHALI', 'রাজস্থালী', 'U', NULL, 'H', 55),
(476, '84', '87', 'RANGAMATI SADAR', 'রাঙ্গামাটি সদর', 'U', NULL, 'H', 55),
(477, '85', '03', 'BADARGANJ', 'বদরগঞ্জ', 'U', NULL, 'G', 56),
(478, '85', '27', 'GANGACHARA', 'গংগাচড়া', 'U', NULL, 'G', 56),
(479, '85', '42', 'KAUNIA', 'কাউনিয়া', 'U', NULL, 'G', 56),
(480, '85', '49', 'RANGPUR SADAR', 'রংপুর সদর', 'U', NULL, 'G', 56),
(481, '85', '58', 'MITHA PUKUR', 'মিঠাপুকুর', 'U', NULL, 'G', 56),
(482, '85', '73', 'PIRGACHHA', 'পীরগাছা', 'U', NULL, 'G', 56),
(483, '85', '76', 'PIRGANJ', 'পীরগঞ্জ', 'U', NULL, 'G', 56),
(484, '85', '92', 'TARAGANJ', 'তারাগঞ্জ', 'U', NULL, 'G', 56),
(485, '86', '14', 'BHEDARGANJ', 'ভেদরগঞ্জ', 'U', NULL, 'G', 57),
(486, '86', '25', 'DAMUDYA', 'ডামুড্যা', 'U', NULL, 'G', 57),
(487, '86', '36', 'GOSAIRHAT', 'গোসাইরহাট', 'U', NULL, 'G', 57),
(488, '86', '65', 'NARIA', 'নড়িয়া', 'U', NULL, 'G', 57),
(489, '86', '69', 'SHARIATPUR SADAR', 'শরিয়তপুর সদর', 'U', NULL, 'G', 57),
(490, '86', '94', 'ZANJIRA', 'জাজিরা', 'U', NULL, 'G', 57),
(491, '87', '04', 'ASSASUNI', 'আশাশুনি', 'U', NULL, 'G', 58),
(492, '87', '25', 'DEBHATA', 'দেবহাটা', 'U', NULL, 'G', 58),
(493, '87', '43', 'KALAROA', 'কলারোয়া', 'U', NULL, 'G', 58),
(494, '87', '47', 'KALIGANJ', 'কালিগঞ্জ', 'U', NULL, 'G', 58),
(495, '87', '82', 'SATKHIRA SADAR', 'সাতক্ষীরা সদর', 'U', NULL, 'G', 58),
(496, '87', '86', 'SHYAMNAGAR', 'শ্যামনগর', 'U', NULL, 'G', 58),
(497, '87', '90', 'TALA', 'তালা', 'U', NULL, 'G', 58),
(498, '88', '11', 'BELKUCHI', 'বেলকুচি', 'U', NULL, 'G', 59),
(499, '88', '27', 'CHAUHALI', 'চৌহালী', 'U', NULL, 'R', 59),
(500, '88', '44', 'KAMARKHANDA', 'কামারখন্দ', 'U', NULL, 'G', 59),
(501, '88', '50', 'KAZIPUR', 'কাজীপুর', 'U', NULL, 'G', 59),
(502, '88', '61', 'ROYGANJ', 'রায়গঞ্জ', 'U', NULL, 'G', 59),
(503, '88', '67', 'SHAHJADPUR', 'শাহাজাদপুর', 'U', NULL, 'G', 59),
(504, '88', '78', 'SIRAJGANJ SADAR', 'সিরাজগঞ্জ সদর', 'U', NULL, 'G', 59),
(505, '88', '89', 'TARASH', 'তাড়াশ', 'U', NULL, 'G', 59),
(506, '88', '94', 'ULLAH PARA', 'উল্লাপাড়া', 'U', NULL, 'G', 59),
(507, '89', '37', 'JHENAIGATI', 'ঝিনাইঘাতি', 'U', NULL, 'G', 60),
(508, '89', '67', 'NAKLA', 'নকলা', 'U', NULL, 'G', 60),
(509, '89', '70', 'NALITABARI', 'নালিতাবাড়ী', 'U', NULL, 'G', 60),
(510, '89', '88', 'SHERPUR SADAR', 'শেরপুর সদর', 'U', NULL, 'G', 60),
(511, '89', '90', 'SREEBARDI', 'শ্রীবর্দি', 'U', NULL, 'G', 60),
(512, '90', '18', 'BISHWAMBARPUR', 'বিশ্বম্ভরপুর', 'U', NULL, 'R', 61),
(513, '90', '23', 'CHHATAK', 'ছাতক', 'U', NULL, 'G', 61),
(514, '90', '27', 'DAKSHIN SUNAMGANJ', 'দক্ষিণ সুনামগঞ্জ', 'U', NULL, 'G', 61),
(515, '90', '29', 'DERAI', 'দিরাই', 'U', NULL, 'G', 61),
(516, '90', '32', 'DHARAMPASHA', 'ধর্মপাশা', 'U', NULL, 'R', 61),
(517, '90', '33', 'DOWARABAZAR', 'দোয়ারাবাজার', 'U', NULL, 'R', 61),
(518, '90', '47', 'JAGANNATHPUR', 'জগন্নাথপুর', 'U', NULL, 'G', 61),
(519, '90', '50', 'JAMALGANJ', 'জামালগঞ্জ', 'U', NULL, 'G', 61),
(520, '90', '86', 'SULLA', 'শুল্লা', 'U', NULL, 'R', 61),
(521, '90', '89', 'SUNAMGANJ SADAR', 'সুনামগঞ্জ সদর', 'U', NULL, 'G', 61),
(522, '90', '92', 'TAHIRPUR', 'তাহিরপুর', 'U', NULL, 'R', 61),
(523, '91', '08', 'BALAGANJ', 'বালাগঞ্জ', 'U', NULL, 'G', 62),
(524, '91', '17', 'BEANI BAZAR', 'বিয়ানী বাজার', 'U', NULL, 'G', 62),
(525, '91', '20', 'BISHWANATH', 'বিশ্বনাথ', 'U', NULL, 'G', 62),
(526, '91', '27', 'COMPANIGANJ', 'কোম্পানীগঞ্জ', 'U', NULL, 'G', 62),
(527, '91', '31', 'DAKSHIN SURMA', 'দক্ষিণ সুরমা', 'U', NULL, 'G', 62),
(528, '91', '35', 'FENCHUGANJ', 'ফেঞ্চুগঞ্জ', 'U', NULL, 'G', 62),
(529, '91', '38', 'GOLAPGANJ', 'গোলাপগঞ্জ', 'U', NULL, 'G', 62),
(530, '91', '41', 'GOWAINGHAT', 'গোয়াইনঘাট', 'U', NULL, 'G', 62),
(531, '91', '53', 'JAINTIAPUR', 'জৈন্তাপুর', 'U', NULL, 'G', 62),
(532, '91', '59', 'KANAIGHAT', 'কানাইঘাট', 'U', NULL, 'G', 62),
(533, '91', '60', 'Osmaninagar', 'ওসমানীনগর', 'U', NULL, 'G', 62),
(534, '91', '62', 'SYLHET SADAR', 'সিলেট সদর', 'U', NULL, 'G', 62),
(535, '91', '94', 'ZAKIGANJ', 'জকিগঞ্জ', 'U', NULL, 'G', 62),
(536, '93', '09', 'BASAIL', 'বাসাইল', 'U', NULL, 'G', 63),
(537, '93', '19', 'BHUAPUR', 'ভূঞাপুর', 'U', NULL, 'G', 63),
(538, '93', '23', 'DELDUAR', 'দেলদুয়ার', 'U', NULL, 'G', 63),
(539, '93', '25', 'DHANBARI', 'ধনবাড়ী', 'U', NULL, 'G', 63),
(540, '93', '28', 'GHATAIL', 'ঘাটাইল', 'U', NULL, 'G', 63),
(541, '93', '38', 'GOPALPUR', 'গোপালপুর', 'U', NULL, 'G', 63),
(542, '93', '47', 'KALIHATI', 'কালিহাতি', 'U', NULL, 'G', 63),
(543, '93', '57', 'MADHUPUR', 'মধুপুর', 'U', NULL, 'G', 63),
(544, '93', '66', 'MIRZAPUR', 'মির্জাপুর', 'U', NULL, 'G', 63),
(545, '93', '76', 'NAGARPUR', 'নাগরপুর', 'U', NULL, 'G', 63),
(546, '93', '85', 'SAKHIPUR', 'সখিপুর', 'U', NULL, 'G', 63),
(547, '93', '95', 'TANGAIL SADAR', 'টাঙ্গাইল সদর', 'U', NULL, 'G', 63),
(548, '94', '08', 'BALIADANGI', 'বালিয়াডাংগী', 'U', NULL, 'G', 64),
(549, '94', '51', 'HARIPUR', 'হরিপুর', 'U', NULL, 'G', 64),
(550, '94', '82', 'PIRGANJ', 'পীরগঞ্জ', 'U', NULL, 'G', 64),
(551, '94', '86', 'RANISANKAIL', 'রানীশংকাইল', 'U', NULL, 'G', 64),
(552, '94', '94', 'THAKURGAON SADAR', 'ঠাকুরগাঁও সদর', 'U', NULL, 'G', 64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` tinyint(1) DEFAULT 0,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `privilege` tinyint(1) DEFAULT 0,
  `division` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `upazilla` varchar(50) NOT NULL,
  `unionparisod` varchar(50) NOT NULL,
  `citicorporation` varchar(50) NOT NULL,
  `municipal` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `vat_zone` varchar(50) NOT NULL,
  `vat_circle` varchar(50) NOT NULL,
  `vat_division` varchar(50) NOT NULL,
  `tax_zone` varchar(50) NOT NULL,
  `tax_circle` varchar(50) NOT NULL,
  `tax_range` varchar(50) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `bin_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`, `privilege`, `division`, `district`, `upazilla`, `unionparisod`, `citicorporation`, `municipal`, `ward`, `vat_zone`, `vat_circle`, `vat_division`, `tax_zone`, `tax_circle`, `tax_range`, `organization`, `bin_number`) VALUES
(1, 0, 'admin', '25d55ad283aa400af464c76d713c07ad', NULL, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 0, 'jakir', '25d55ad283aa400af464c76d713c07ad', 'Jakir Hosen Khan', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', 'ABC Company', '0102-123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_file`
--
ALTER TABLE `data_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divid` (`divid`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divID`),
  ADD KEY `div_code` (`divID`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiscalyear`
--
ALTER TABLE `fiscalyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fp_doc`
--
ALTER TABLE `fp_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fp_information`
--
ALTER TABLE `fp_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `suspects`
--
ALTER TABLE `suspects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_employer_info`
--
ALTER TABLE `tax_employer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `data_file`
--
ALTER TABLE `data_file`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fiscalyear`
--
ALTER TABLE `fiscalyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fp_doc`
--
ALTER TABLE `fp_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fp_information`
--
ALTER TABLE `fp_information`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suspects`
--
ALTER TABLE `suspects`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tax_employer_info`
--
ALTER TABLE `tax_employer_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
