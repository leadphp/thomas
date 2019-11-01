-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2019 at 06:16 AM
-- Server version: 5.6.45
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsca55_csc`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `type`, `title`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sidebar', 'Description', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to ma</p>', '1567763643.png', 'https://www.google.com/', 'null', NULL, '2019-09-25 03:58:05'),
(2, 'footer', 'Description', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to ma</p>', '1567763633.png', 'https://www.google.com/', 'null', NULL, '2019-09-25 03:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Safe', '<p>All solutions offered are up-to-date code compliant with nationwide federal and provincial accessibility laws and building regulations, creating safe pathmarking guidance and attention warning detectability.</p>', NULL, '2019-08-19 06:40:24'),
(2, 'Accessibility', '<p>All solutions offered focus on upgrading or implementing accessibility routes. These tactile solutions provide safe accessible environments for people with vision loss. All product solutions meet the most rigorous test requirements and comply with AODA, CSA, ISO, FADS and IFC standards.</p>', NULL, '2019-08-19 06:40:59'),
(3, 'Tactile Qualities for Pedestrians', '<p>Tactile Walking Surface Indicators are perfect for any space where the safety of the visually impaired is a concern. All products are reliable, easy to install, and help prevent slips, falls or other dangerous situations.</p>\r\n\r\n<p>Tactile attention domes serve as warning indicators for dangerous or hazardous conditions ahead and the wayfinding bars safely guide pedestrians down their path.</p>', NULL, '2019-08-19 06:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `image`, `alt_image`, `category`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(15, 'TACTILE WALKING SURFACE INDICATORS', 'tactile_walking_surface_indicators', '<p>Effective January 2016 the Accessibility for Ontarians with Disabilities act requires new accessibility standards for public spaces including new laws on tactile walking surface indicators. Compliance Solutions Canada is your top Canadian source for tactile walking surface indicators TWSI&rsquo;s (also known as detectable warning plates). TWSI&rsquo;s are mandatory on all new and repaired depressed curb sidewalks in Ontario and Compliance Solutions Canada offers a variety of products to ensure your project is compliant.﻿</p>\r\n\r\n<p>Tactile walking surface indicators are seen on street corners, intended to be detectable underfoot when walking or with a cane. They alert those with low or no vision of potential hazards such as moving vehicular traffic.&nbsp;<strong><a href=\"https://tactilesolution.ca\">Compliance Solutions Canada</a></strong>﻿&nbsp;provides a wide variety of construction compliant tactile walking surface indicators.﻿</p>\r\n\r\n<p>Compliance Solutions Canada carries Advantage tactile systems,&nbsp;<strong><a href=\"https://tactilesolution.ca/category/armor\">Armor-Tile</a></strong>﻿, <a href=\"https://tactilesolution.ca/category/access\">Access Tile</a>, <a href=\"https://tactilesolution.ca/category/eon\">EON</a> and <a href=\"https://tactilesolution.ca/category/elan\">ELAN</a> code compliant tactile walking surface indicators.﻿</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Advantage tactile systems offers&nbsp;stainless steel TWSI&rsquo;s that have integral stamped slip resistant micro texture, can be powder coated, available in different sizes and colours, and can be surface applied or cast in place. Compliance Solutions Canada also offers the <a href=\"https://tactilesolution.ca/category/advantage/single-domes-&amp;-bars\">Advantage One&nbsp;<strong>Domes/Bars or Plates</strong>﻿</a> that are either individual domes/bars that are drilled and adhered into the ground or plate format that will be fastened down to the floor. A favorite among the architectural community, these stylish domes/bars or plates are aesthetically pleasing and comply with all code requirements. Engineered to outlast the sidewalk, the Advantage Cast Iron Plates are a long-lasting&nbsp;<strong><a href=\"https://tactilesolution.ca/category/armor/surface-applied-tile\">TWSI products</a></strong>&nbsp;that are all strong enough to withstand the abuse of heavy equipment such as snow plows, fork lifts and other construction vehicles and are ideal for northern climates and high traffic areas. They are designed to be permanently embedded into concrete and lower your maintenance and product life cycle costs, all while complying with AODA, CSA, ISO, provincial and national building codes.﻿</p>\r\n\r\n<p>Compliance Solutions Canada&rsquo;s Access Tiles TWSI&rsquo;s&nbsp;are made of engineered polymer composites, reinforced with fiberglass and has integral colour with&nbsp;combined proven polymer processing and material technologies with innovative and intelligent design features to create the ultimate in detectable warning tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access Tile meets the most recent AODA, CSA, ISO, provincial and national building codes. Compliance Solutions Canada offers Access Tiles replaceable cast in place tiles and&nbsp;<strong><a href=\"https://tactilesolution.ca/category/access/surface-applied-tile\">Access Tiles surface applied tiles</a></strong>﻿. Compliance Solutions Canada&rsquo;s replaceable cast in place tile is the easiest and fastest installation in the industry requiring no concrete demolition and needing only a single fastening device. The Access Tile surface applied tiles are engineered to successfully upgrade any existing surface to comply with AODA and provincially mandated detectable warning guidelines.﻿</p>\r\n\r\n<p>Compliance Solutions Canada&rsquo;s Armor Tile offers a selection of Fully AODA/CSA/ISO and OBC compliant detectable warning tactile system products for transit platforms, multi-modal transit centers, curb ramps, stairwells, escalator approaches, pedestrian crossings, parking areas, reflecting pools, and building entrances.</p>\r\n\r\n<p><strong><a href=\"https://tactilesolution.ca/category/armor\">Armor-Tile</a></strong>&nbsp;has an exceptional wear resistance factor meaning a longer tile life and greater cost effectiveness outperforming all other tactile warning systems. Compliance Solutions Canada offers various Armor Tile tactile products such as Cast In Place tiles that install in minutes for new construction. Armor Tile also offers Surface Applied tiles engineered to retrofit any existing surface to comply with AODA/CSA/ISO and OBC requirements. Armor Tile Modular Paver Tiles are high strength modular tactile tiles that can be dry laid on compacted fill or set in a grout bed or dry Pac. The Replaceable&nbsp;&nbsp;<strong>Herculite Tiles with a herculite polymer</strong>﻿ composite allows for replaceability and installs in minutes to meet code requirements.﻿</p>\r\n\r\n<p>Compliance Solutions Canada&rsquo;s&nbsp;<strong>ELAN Tile porcelain tactile</strong>﻿ indicators provide porcelain tiles with domes or bars. The Elan porcelain tactile bars and domes are ideal and versatile for any application. These products offer attention indicators (truncated domes) for warning and tactile direction indicators for way finding. Compliance Solutions Canada&rsquo;s Elan Tile porcelain tactile indicatorsare perfect for businesses that design and construct the finest commercial, institutional and public environments.</p>\r\n\r\n<p>Compliance Solutions Canada&rsquo;s EON Tiles are a category leader in quality and a contemporary look and finish. EON Tile is suitable for a variety of applications such as airports, railway stations, shopping centers, department stores, supermarkets, hospitals, schools, swimming pools, community centers, banks or most high traffic environments. Compliance Solutions<strong>&nbsp;Canada&rsquo;s EON Tile products</strong>﻿(include) polymer tile with domes or bars.﻿</p>\r\n\r\n<p>Compliance Solutions Canada is your one stop shop to ensure your project is completely compliant and up to date with provincial codes and regulations. With our wide variety of&nbsp;<strong>tactile walking surface indicators</strong>, you can get your construction job done with ease knowing Compliance Solutions Canada is your reliable source﻿</p>', '1566741543.jpg', 'Alt Image', '20', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-08-16 04:08:25', '2019-09-20 03:56:07'),
(16, 'ECOGLO PHOTOLUMINESCENT EMERGENCY EXIT SIGNS', 'ecoglo_photoluminescent_emergency_exit_signs', '<p>Compliance Solutions Canada offers your facility compliant Ecoglo RM series exit signs that come with a clear anodized aluminum frame and universal mounting kit with the guarantee of the most efficient installation procedure for any location. Our emergency exit signs are rugged, require no electricity, reduce maintenance costs and provide the lowest life cycle cost available for an exit sign. Here at Compliance Solutions Canada,&nbsp;we provide our customers with easy solutions to your facilities everyday regulated (code compliant) product needs.﻿</p>\r\n\r\n<p>With Canada&rsquo;s perpetually growing and diverse population, Ontario legislation introduced new (building codes) regulations for emergency exit signs in which all major and new buildings must comply with (which began January 1st&nbsp;2014). This shift from the classic red and white exit sign to new green photoluminescent exit signs with a pictograph of a &ldquo;running man&rdquo; was driven by our country&rsquo;s changing demographics and the increasing amount of non-English-speaking immigrants moving into the country.</p>\r\n\r\n<p>Compliance Solutions Canada is your source for&nbsp;<a href=\"https://www.compliancesolutionscanada.com/ecoglo-photoluminescent-exit-sign-system-standard-series/794-1-sided-right-facing-running-man-with-down-arrow-50-foot-rated-no-frame.html\"><strong>Ecoglo photoluminescent emergency exit signs</strong></a>. We deliver an easy solution to comply with building regulated emergency exit &ldquo;running man&rdquo; signs providing a safer way for all citizens to identify building exits with ease. Compliance Solutions Canada is your number 1 Ontario provider for Ecoglo photoluminescent exit signs; the favored solution to ensuring your facility is equipped with the safest backup technology in emergency. These code compliant exit signs will illuminate your path after being charged with natural or artificial light, no electricity or batteries required. Additionally, the previously used exit signs were illuminated in red which traditionally represents &ldquo;stop&rdquo; or some sort of hazard where the new photoluminescent signs give off electricity and are coloured green to represent (which universally represents) &ldquo;go&rdquo; or safety.</p>', '1566741636.jpg', 'Alt Image', '20', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-08-16 04:11:40', '2019-09-20 03:56:33'),
(24, 'Compliance Solutions Canada! Something new is Coming', 'compliance_solutions_canada!_something_new_is_coming', '<p><strong>Compliance Solutions Canada</strong>, a leader in providing Canadian business with compliant workplace solutions since 2008, now introduces a specialized website helping contractors to find the best and most cost-effective code compliant tactile solution for their projects. This new website is named&nbsp;<a href=\"https://tactilesolution.ca\"><strong>TactileSolution.ca</strong></a></p>\r\n\r\n<p>By making use of our extensive knowledge of code compliance, this specialized site is&nbsp;<strong>&ldquo;Your Source for Code Compliant Solutions&rdquo;.</strong></p>\r\n\r\n<p>Our Mission is to provide our customers with accessibility solutions that meet all current federal and provincial standards. All products offered meet the most rigorous test requirements and comply with AODA, CSA, ISO, FADS and IFC standards to ensure you achieve the highest compliance in your projects.</p>\r\n\r\n<p>Our Tactile Solutions are achieved by the most comprehensive offering of tactile walking surface indicators ranging from cast iron and stainless steel to various engineered polymers and an extensive range of photoluminescent (PLM) exit signs, stair nosing&rsquo;s and exit path marking.</p>\r\n\r\n<p><strong>When you need mandatory code compliant accessibility solutions for any project in Canada, look in our&nbsp;</strong><a href=\"http://tactilesolution.ca/solutions\"><strong>featured solutions</strong></a><strong>&nbsp;or call us.</strong></p>', '1566742539.png', 'Image', '20', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-08-20 02:04:24', '2019-09-20 03:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_title`, `slug`, `banner_image`, `alt_banner_image`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(20, 'News', 'news', '1565947476.png', 'Alt Banner', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-08-16 03:54:36', '2019-08-25 18:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `cart_products`
--

CREATE TABLE `cart_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_ske` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width_p_inch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_products`
--

INSERT INTO `cart_products` (`id`, `product_id`, `email`, `customer_id`, `product_ske`, `product_name`, `product_price`, `product_quantity`, `product_type`, `list_id`, `inch`, `colour`, `width_p_inch`, `created_at`, `updated_at`) VALUES
(386, '1654', 'gautamg64@gmail.com', '186', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 05:27:39', '2019-10-18 05:27:39'),
(387, '1648', 'gautamg64@gmail.com', '186', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 05:27:39', '2019-10-18 05:27:39'),
(388, '1654', 'gautamg64@gmail.com', '187', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 05:28:26', '2019-10-18 05:28:26'),
(389, '1648', 'gautamg64@gmail.com', '187', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 05:28:26', '2019-10-18 05:28:26'),
(390, '1648', 'gautamg64@gmail.com', '188', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 05:46:18', '2019-10-18 05:46:18'),
(391, '1654', 'gautamg64@gmail.com', '189', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 05:47:16', '2019-10-18 05:47:16'),
(392, '1654', 'gautamg64@gmail.com', '190', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 05:48:17', '2019-10-18 05:48:17'),
(393, '1642', 'gautamg64@gmail.com', '190', 'S1071', 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.1\" Black', '17.55', '1', 'sub-category', '13', '12', 'no colour', '17.55', '2019-10-18 05:48:17', '2019-10-18 05:48:17'),
(394, '1654', 'gautamg64@gmail.com', '191', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 05:48:49', '2019-10-18 05:48:49'),
(395, '1642', 'gautamg64@gmail.com', '191', 'S1071', 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.1\" Black', '17.55', '1', 'sub-category', '13', '12', 'no colour', '17.55', '2019-10-18 05:48:49', '2019-10-18 05:48:49'),
(396, '1480', 'gautamg64@gmail.com', '191', 'ADA-C-1212', 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 12\" x 12\"', '259.2', '1', 'sub-category', '1', '12', '', '259.20', '2019-10-18 05:48:49', '2019-10-18 05:48:49'),
(397, '1654', 'gautamg64@gmail.com', '192', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:10:39', '2019-10-18 06:10:39'),
(398, '1654', 'gautamg64@gmail.com', '193', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:11:26', '2019-10-18 06:11:26'),
(399, '1654', 'gautamg64@gmail.com', '194', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:12:11', '2019-10-18 06:12:11'),
(400, '1654', 'gautamg64@gmail.com', '195', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:12:48', '2019-10-18 06:12:48'),
(401, '1654', 'gautamg64@gmail.com', '196', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:13:20', '2019-10-18 06:13:20'),
(402, '1654', 'gautamg64@gmail.com', '197', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:14:11', '2019-10-18 06:14:11'),
(403, '1654', 'gautamg64@gmail.com', '198', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '3', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:14:37', '2019-10-18 06:14:37'),
(404, '1648', 'gautamg64@gmail.com', '198', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 06:14:37', '2019-10-18 06:14:37'),
(405, '1654', 'gautamg64@gmail.com', '199', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:25:02', '2019-10-18 06:25:02'),
(406, '1654', 'gautamg64@gmail.com', '200', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:25:23', '2019-10-18 06:25:23'),
(407, '1654', 'gautamg64@gmail.com', '201', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:26:06', '2019-10-18 06:26:06'),
(408, '1648', 'gautamg64@gmail.com', '201', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 06:26:06', '2019-10-18 06:26:06'),
(409, '1654', 'gautamg64@gmail.com', '202', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:26:32', '2019-10-18 06:26:32'),
(410, '1648', 'gautamg64@gmail.com', '202', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 06:26:32', '2019-10-18 06:26:32'),
(411, '1654', 'gautamg64@gmail.com', '203', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 06:27:25', '2019-10-18 06:27:25'),
(412, '1648', 'gautamg64@gmail.com', '203', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-18 06:27:25', '2019-10-18 06:27:25'),
(413, '1654', 'gautamg64@gmail.com', '204', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-18 17:03:10', '2019-10-18 17:03:10'),
(414, '1637', 'tschwartz@csc-inc.ca', '205', 'N2060', 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Grey', '7.4', '1', 'sub-category', '12', '12', 'no colour', '7.40', '2019-10-18 17:42:29', '2019-10-18 17:42:29'),
(415, '1638', 'tschwartz@csc-inc.ca', '206', 'N2050', 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Yellow', '7.4', '1', 'sub-category', '12', '12', 'no colour', '7.40', '2019-10-22 20:42:14', '2019-10-22 20:42:14'),
(416, '1638', 'tschwartz@csc-inc.ca', '206', 'N2050', 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Yellow', '7.4', '1', 'sub-category', '12', '12', 'no colour', '7.40', '2019-10-22 20:42:14', '2019-10-22 20:42:14'),
(417, '1648', 'gautamg64@gmail.com', '207', 'S1070', 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '15.15', '1', 'sub-category', '11', '12', 'no colour', '15.15', '2019-10-24 10:50:00', '2019-10-24 10:50:00'),
(418, '1654', 'tschwartz@csc-inc.ca', '208', 'RA02012', 'Exit to the right- 8\" x 4.6\"', '30.05', '1', 'sub-category', '17', '12', 'no colour', '30.05', '2019-10-25 01:05:08', '2019-10-25 01:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `cart_users`
--

CREATE TABLE `cart_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_users`
--

INSERT INTO `cart_users` (`id`, `fname`, `lname`, `email`, `password`, `dob`, `company`, `address`, `city`, `province`, `zip_code`, `country`, `add_info`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'rr', 'rr', 'csc@csc-inc.ca', 'thomas@123#', '18/November/1985', 'rr', 'rr', 'rr', 'Nova Scotia', 'rr', 'Canada', 'rr', 'rr', '2019-09-13 02:51:52', '2019-09-13 02:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csc_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_features` longtext COLLATE utf8mb4_unicode_ci,
  `size_price` longtext COLLATE utf8mb4_unicode_ci,
  `application` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `price`, `banner_image`, `alt_banner_image`, `solution_id`, `csc_category_id`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Armor Tile Tactile System', 'armor-tile-tactile-system', 'From: $18.09Per sqft', '1565097134.png', 'banner image', '1,2,5', 'armor', '<p>Armor-Tile offers the largest selection of Fully AODA/CSA/ISO and OBC compliant detectable warning tactile system products for Transit platforms, Multi-modal transit centers, Curb ramps, Stairwells, Escalator approaches. Pedestrian crossings, Parking areas, Reflecting pools and Building entrances.</p>', NULL, NULL, NULL, '1565182704.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 07:42:14', '2019-09-25 06:16:53'),
(2, 'AccessTile', 'accesstile', 'From: $18.09Per sqft', '1565097532.png', 'banner image', '1,2,5', 'access', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Replaceable Cast in Place has combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate replaceable tactile walking surface indicators. Maximized efficiencies in manufacturing, materials sourcing and<br />\r\nproduct specifications deliver the most cost-effective solution in the industry. Access&reg; Tile truncated dome and wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as surface applied tiles and directional bars.</p>', NULL, NULL, NULL, '1565183059.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 07:48:52', '2019-09-25 06:21:02'),
(3, 'Advantage Tactile Systems', 'advantage-tactile-systems', 'From: $18.09Per sqft', '1565097758.png', 'banner image', '1,5', 'advantage', '<p>Advantage one is the leading detectable warning and directional tile surface system for construction requirements anywhere the safety of the visually impaired is a concern: curb ramps, shopping malls, transit platforms, parking areas, stairwells and escalator approaches.<br />\r\nAdvantage Tactile Systems, is our line of TWSI&rsquo;s that come in different metal materials. Designed to last the most rigours applications or to enhance the look of your projects while complying with all code requirements.</p>', NULL, NULL, NULL, '1565182614.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 07:52:38', '2019-09-25 06:40:54'),
(4, 'Eon Tile', 'eon-tile', 'From: $18.09Per sqft', '1565098023.png', 'banner image', '2,4,5', 'eon', '<p>EonTM Tile is a durable and flexible rubber tactile indicator chosen first by professionals who design and construct the finest commer-cial, institutional and public environments.<br />\r\nEonTM Tile is state of the art polymers compounded together to create category leading quality and a contemporary look and finish.&nbsp;<br />\r\nSuitable for a variety of applications such as airport con-courses, railway stations, shopping centres, department stores, supermarkets, hospitals, swimming pools, schools, banks, com-munity centres or most any high traffic environment.&nbsp;<br />\r\nEonTM Tile&rsquo;s line of products offer attention indicators (truncated domes) for warning and tactile direction indicators for way finding.&nbsp;<br />\r\nEonTM Tile is part of the newest generation of excellence in warning surfaces from Kinesik Engineered Products Incorporated.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', NULL, NULL, NULL, '1565182404.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 07:57:03', '2019-09-25 06:25:55'),
(5, 'Elan Tile', 'elan-tile', 'From: $18.09Per sqft', '1565098375.png', 'banner image', '2,4,5', 'elan', '<p>ElanTM Tile is the ultimate porcelain tactile indicator chosen by professionals who design and construct the finest commercial, institutional and public environments.&nbsp;<br />\r\nIncorporating the best raw materials in the market, ElanTM Tile far exceeds the EN 14411 standard, allowing the product to meet the designation of &ldquo;Porcelain Stoneware&rdquo; and to be suitable for both interior and exterior applications.&nbsp;<br />\r\nOffering highly durable and versatile tactile walking surface indicators (truncated domes) for warning, and direction indicators for wayfinding, the ElanTM Tile line of products signals the newest generation of excellence from Kinesik.</p>', NULL, NULL, NULL, '1565182536.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 08:02:56', '2019-09-25 06:29:11'),
(6, 'Armor Tile Tactile System Cast-In-Place', 'armor-tile-tactile-system-cast-in-place', 'From: $18.09Per sqft', '1565098554.png', 'banner image', '3,8', 'armor/cast-in-place-tile', '<p>Armor-Tile Surface Applied takes pride in being the leading manufacturer for tactile walking surface indicator systems. The Armor-Tile Surface Applied truncated domes are a diamond-hard vitrified polymer composite setting the benchmark for durability and detectability in tactile systems. The Armor-Tile surface applied tiles provide a cost-effective method for retrofitting existing sidewalks. These surface applied tiles are available in 10 different colours creating clear boundaries to ensure separation and safety for pedestrian&rsquo;s route from vehicular traffic or other potentially hazardous obstacles. The tactile walking surface indicators (TWSI) can be used for a variety applications including curb ramps, escalator approaches, parking areas, transit platforms, top of stair landings/wheelchair ramps, multimodal transit stations, pedestrian crossings and vehicular passage ways. Armor-Tile surface applied products are in full compliance with Canadian accessibility codes AODA, CSA, ISO, provincial and national building codes (ontarios tactile walking surface indicators).&nbsp;</p>', NULL, NULL, NULL, '1566290467.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:05:54', '2019-09-25 06:15:53'),
(8, 'AccessTile Cast-In-Place Attention Domes', 'accesstile-cast-in-place-attention-domes', 'From: $18.09Per sqft', '1565099452.png', 'banner image', '3,8', 'access/cast-in-place-tile/attention-domes', '<p>Access Tile Cast in Place Replaceable Tactile Attention Domes are setting the standard for durability and detectability in tactile systems. The Cast in Place truncated attention domes are Canadian accessibility code compliant, suitable for all environments delivering the highest quality of tactile infrastructure product solutions. The Access Tile Replaceable Cast in Place attention domes are installed into wet set concrete at buildings exits into areas with moving vehicles. The detectable warning surfaces visually contrast the ground and provide a differed texture to act as a warning to the surrounding area allowing the public to safely navigate their environment. These Replaceable Cast in Place tactile surface indicators act as a detectable tile warning system that are durable and proven to be resistant to weather and wear and tear. Access Tile Replaceable Cast in Place truncated attention domes are designed for new wet set projects such as pedestrian crossings with tiles available in eight different sizes and six different colours to meet your specification needs. This detectable warning design provides a safe and accessible barrier free path for pedestrians to cross.</p>', NULL, NULL, NULL, '1567361355.jpg', 'image', 'meta title', 'Meta Description.', 'Meta Keyword', '2019-08-06 08:20:52', '2019-09-25 06:17:34'),
(9, 'Advantage Tactile Systems Cast Iron', 'advantage-tactile-systems-cast-iron', 'From: $18.09Per sqft', '1565099648.png', 'banner image', '3,8', 'advantage/cast-iron-cast-in-place', '<p>Advantage&trade; Cast Iron Tactile Walking Surface Indicator (TWSI) plates are manufactured in strict accordance with ASTM A-48, Class 35B Grey Cast Iron.&nbsp;<br />\r\nThe Advantage&trade; Cast in Place System is lightweight with exceptional high strength, and utilizes the most advanced metallurgical Engineering Science and Technology to meet and exceed the most stringent municipal standards.&nbsp;<br />\r\nAdvantage&trade; Cast Iron is aesthetically pleasing, has exceptional longevity and incorporates integral texture for a permanent slip resistant surface.</p>', NULL, NULL, NULL, '1566290216.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:24:08', '2019-09-25 06:29:49'),
(10, 'Armor Tile Tactile System Surface Applied', 'armor-tile-tactile-system-surface-applied', 'From: $18.09Per sqft', '1565099794.png', 'banner image', '4,8', 'armor/surface-applied-tile', '<p>Armor-Tile Surface Applied takes pride in being the leading manufacturer for tactile walking surface indicator systems. The Armor-Tile Surface Applied truncated domes are a diamond-hard vitrified polymer composite setting the benchmark for durability and detectability in tactile systems. The Armor-Tile surface applied tiles provide a cost-effective method for retrofitting existing sidewalks. These surface applied tiles are available in 10 different colours creating clear boundaries to ensure separation and safety for pedestrian&rsquo;s route from vehicular traffic or other potentially hazardous obstacles. The tactile walking surface indicators (TWSI) can be used for a variety applications including curb ramps, escalator approaches, parking areas, transit platforms, top of stair landings/wheelchair ramps, multimodal transit stations, pedestrian crossings and vehicular passage ways. Armor-Tile surface applied products are in full compliance with Canadian accessibility codes AODA, CSA, ISO, provincial and national building codes (ontarios tactile walking surface indicators).&nbsp;</p>', NULL, NULL, NULL, '1566290709.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:26:34', '2019-09-25 06:16:34'),
(11, 'AccessTile Surface Applied  Attention Domes', 'accesstile-surface-applied- attention-domes', 'From: $18.09Per sqft', '1565099975.png', 'banner image', '4,8', 'access/surface-applied-tile/attention-domes', '<p>Access Tile Surface Applied Domes are the industry leader in affordable detectable warning tiles perfect for any retrofit job. The tactile walking surface indicators (TWSI) are slip resistant, corrosion resistant, abrasion resistance ensuring all truncated domes are durable against wear and tear maximizing the longevity of the detectable warning pads. The Surface Applied truncated attention domes can be applied in many situations including: multimodal transit stations, curb ramps, accessible pedestrian crossings, parking areas, tops and bottoms of stair landings, escalator approaches and many more to warn the public when they have reached an unsafe edge. The Tactile attention domes are especially useful for those with visual impairments as they can be felt through footwear, as well as designed with unique sound reflection for those with guidance canes to safely differentiate between Access Tile surface applied tile and concrete allowing for safe and detectable navigation of curb endings. Access Tile Surface applied truncated attention domes are available in 8 different colours to provide visual contrast warning the public when they have reached an unsafe edge</p>', NULL, NULL, NULL, '1566290648.jpg', 'image', 'meta title', 'Meat descriptin', 'Meta Keyword', '2019-08-06 08:29:35', '2019-09-25 06:18:47'),
(12, 'Advantage Tactile Systems Single Domes', 'advantage-tactile-systems-single-domes', 'From: $18.09Per sqft', '1565100503.png', 'banner image', '6,8', 'advantage/single-domes-&-bars/stainless-steel-domes', '<p>Advantage One Individual Stainless Steel Attention Domes and Wayfinding bars are designed to for interior applications enhancing the look of your project while complying with Canadian accessibility code requirements. The stainless steel individual attention domes and wayfinding bars are composed of a slip resistant micro texture and are available in different sizes and colours. The Advantage one individual attention domes and wayfinding bars are drilled and adhered directly into the ground. The Advantage One Individual Wayfinding Bars and Attention Dome Tactile Walking Surface Indicators (TWSI), provide a reliable solution for interior projects in all spaces meeting Canadian Accessibility regulations, ensuring safety for all pedestrians including the visually impaired, acting as warning indicators and path marking indicators preventing slips, falls and assisted guidance on your desired path.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Advantage One Individual Wayfinding Bars and Attention Domes for the following interior applications and many more:<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', NULL, NULL, NULL, '1566298629.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:38:23', '2019-09-25 06:36:44'),
(13, 'Advantage Tactile Systems Single Bars', 'advantage-single-bars', 'From: $18.09Per sqft', '1565100727.png', 'banner image', '6,9', 'advantage/single-domes-&-bars/stainless-steel-bars', '<p>Advantage One Individual Stainless Steel Attention Domes and Wayfinding bars are designed to for interior applications enhancing the look of your project while complying with Canadian accessibility code requirements. The stainless steel individual attention domes and wayfinding bars are composed of a slip resistant micro texture and are available in different sizes and colours. The Advantage one individual attention domes and wayfinding bars are drilled and adhered directly into the ground. The Advantage One Individual Wayfinding Bars and Attention Dome Tactile Walking Surface Indicators (TWSI), provide a reliable solution for interior projects in all spaces meeting Canadian Accessibility regulations, ensuring safety for all pedestrians including the visually impaired, acting as warning indicators and path marking indicators preventing slips, falls and assisted guidance on your desired path.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Advantage One Individual Wayfinding Bars and Attention Domes for the following interior applications and many more:<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', NULL, NULL, NULL, '1566298616.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:42:07', '2019-08-31 14:21:34'),
(14, 'Non Photoluminescent Surface Applied Anti-Slip Strips', 'non-photoluminescent-surface-applied-anti-slip-strips', 'From: $18.09Per sqft', '1565100981.png', 'banner image', '10', 'ecoglo-stair-nosing/non-photoluminescent-surface-applied-anti-slip-strips', '<p>Ecoglo anti slip products to prevent slips or falls in all weather conditions for any type of stairs. Ecoglo non photoluminescent anti slip strips are offered in 3 different colours black, yellow, and grey in two different sizes, delivering the perfect fit and solution for anti-slip strips for stairs. These non-slip step strips are made of hard wearing silicon carbide making them reliably durable, weather resistance, UV resistance, stain resistance and easy to clean. Ecoglo&rsquo;s non photoluminescent non-slip step strips provide an extra non-slip surface supplementing the steps own non-slip properties as well as providing step edge contrast. Ecoglo non photoluminescent surface applied anti slip strips are the perfect safety solution preventing slips and falls down any stairs.&nbsp;</p>', NULL, NULL, NULL, '1567248452.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 08:46:21', '2019-08-31 20:32:50'),
(15, 'Non Photoluminescent Cast In Place Stair Nosings', 'non-photoluminescent-cast-in-place-stair-nosings', 'From: $18.09Per sqft', '1565101177.png', 'banner image', '11', 'ecoglo-stair-nosing/non-photoluminescent-cast-in-place-stair-nosings', '<p>Ecoglo Step Edge Cast in Place Stair Nosings, are a series of right angled aluminum step nosing&rsquo;s to be placed into wet set concrete, fitting to the edge of public stairways, exit ways and other applications where pathfinding in darkness is an issue. The Non-Slip Anodized Stair Nosings provide step edge colour contrast, long lasting anti-slip protection and are an affordable way to modernize stairways to improve stairway safety. The Step Edge Cast in Place Stair Nosing&rsquo;s are made of hard wearing silicon carbide non-slip material, bonded to an aluminum substrate, with a thick anodized finish so that they are aesthetically pleasing, prevent corrosion and are hard and abrasion resistant tested to withstand UV and all types of weather exposure. The Ecoglo Step Edge Cast in Place Stair Nosing&rsquo;s, are engineered for durability and designed for step edge safety with their colour contrasting non-slip material providing excellent step edge visibility.&nbsp;</p>', NULL, NULL, NULL, '1566292894.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:49:37', '2019-08-31 20:38:01'),
(16, 'Photoluminescent Surface Applied Anti-Slip Contrast Strip', 'photoluminescent-surface-applied-anti-slip-contrast-strip', 'From: $18.09Per sqft', '1565101364.png', 'banner image', '10,12', 'ecoglo-stair-nosing/photoluminescent-surface-applied-anti-slip-contrast-strip', '<p>Ecoglo Non-Slip Photoluminescent Step Edge Contrast Strip provide step edge visibility in all lighting conditions even for several hours after the lights have gone out. The Photoluminescent Surface Applied Anti Slip Contrast Strips are made from hard wearing silicon carbon non-slip material bonded to aluminum plate allowing for long lasting all weather slip resistance and step edge visibility. The Photoluminescent Contrast strip colour contrasting and advanced photoluminscent material are ideal for stairs required by code to have luminous path markings. The Ecoglo Photoluminescent non-slip contrast slip is designed for installation onto flat steps and corridors with a pathmarking glow charged from overhead or natural lighting providing leading technology for guidance systems in all lighting conditions.&nbsp;</p>\r\n\r\n<p>The photoluminescent strip provides luminance on the step edge in event of a black out. The International Building Code requires photoluminescent path marking in all high rises.&nbsp; Our step edge products with Photoluminescent strips exceed the standards for performance in ULC572S, which requires that Photoluminescent path marking operate for a minimum of 120 minutes of black out.</p>', NULL, NULL, NULL, '1567248908.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:52:44', '2019-09-04 12:25:37'),
(17, 'Photoluminescent Cast In Place Stair Nosings', 'photoluminescent-cast-in-place-stair-nosings', 'From: $17.55 Per Linear Foot﻿﻿', '1565101533.png', 'banner image', '11,13', 'ecoglo-stair-nosing/photoluminescent-surface-applied-anti-slip-contrast-strip', '<p>Ecoglo Photoluminescent Cast in Place Stair Nosings provides step edge visibility durability and are the most efficient photoluminescent product available. The Ecoglo Cast in Place Stair Nosing&rsquo;s are installed into wet concrete and provide step edge visibility in all light conditions. The Photoluminescent stair nosing&rsquo;s work just as well in the light as the dark to reduce falls and provide path marking enhancing egress speed. Ecoglo photoluminescent cast in place stair nosing&rsquo;s are made of a hard-wearing silicon carbon non-slip material with unique ridges and advanced photoluminescnt technology, to provide step edge visibility and high durability against wear and tear for all-weather slip resistance. The Ecoglo Photoluminescent Stair Nosing&rsquo;s are environmentally friendly making them the perfect solution for step edge safety.</p>\r\n\r\n<p>The photoluminescent strip provides luminance on the step edge in event of a black out. The International Building Code requires photoluminescent path marking in all high rises.&nbsp; Our step edge products with Photoluminescent strips exceed the standards for performance in ULC572S, which requires that Photoluminescent path marking operate for a minimum of 120 minutes of black out.</p>', NULL, NULL, NULL, '1567439076.jpg', 'image', 'meta title', 'Meta Description', 'Meta Keyword', '2019-08-06 08:55:33', '2019-09-04 12:27:13'),
(18, 'Ecoglo Directional Signage Exit Signs', 'ecoglo-pathmarking-exit-signs', 'From: $18.09Per sqft', '1565101695.png', 'banner image', '14', 'pathmarking-exit-signs/ecoglo-pathmarking--exit-signs', '<p>Ecoglo is a leading global innovator of UL certified Photoluminescent Exit Signs and Emergency Signage that exceed worldwide code requirements. Ecoglo&rsquo;s Photoluminescent Exit Sign systems are durable against UV and all-weather conditions making them the leading solution for indoor and outdoor photoluminescent illuminated egress exit guidance system applications. Ecoglo Photoluminescent Exit Signs and Emergency Exit Pathmarking signs, are manufactured using a patented process embedding photoluminescent particles in a clear durable polymer to ensure maximum efficiency and uses a dry powder for maximum luminance. The Ecoglo Exit Signs and Pathfinding Emergency Exit signs photoluminescent pigment, allow them to be seen in all light conditions and is fast charging by natural and artificial light making them the most cost efficient and reliable exit sign system.&nbsp;<br />\r\n<br />\r\nEcoglo Photoluminescent Exit Signs:<br />\r\n&bull; Multiple directions<br />\r\n&bull; Choice of a universal wall mounting kit or Sign only<br />\r\nEcoglo Photoluminescent Pathmarking Exit Signs:<br />\r\n&bull; Multiple Directins</p>', NULL, NULL, NULL, '1567414308.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 08:58:15', '2019-09-02 12:51:48'),
(19, 'Ecoglo Directional Signage Photoluminescent Exit Signs', 'ecoglo-photoluminescent-exit-signs', 'From: $18.09Per sqft', '1565101943.png', 'banner image', '15', 'pathmarking-exit-signs/ecoglo-photoluminescent-exit-signs', '<p>&bull; LEED points qualified for energy conservation and sustainability<br />\r\n&bull; ULC S572 listed for Photoluminescent and Self-Luminous Exit Signs<br />\r\n&bull; 50/75 foot visibility rating<br />\r\n&bull; No electricity or batteries required<br />\r\n&bull; Requires exposure to at least 54 lux (5 foot-candles) of fluorescent, metal halide, mercury vapor, or other 4000K light illumination for a minimum of 60 minutes to become fully operational<br />\r\n&bull; Indoor installation<br />\r\n&bull; Standard twenty-five (25) year warranty<br />\r\n&bull; Non- toxic and non radioactive<br />\r\n&bull; ULC testing/listing no. E344049/4RG2<br />\r\n&bull; Frame and universal mounting kit constructed of clear anodized aluminum</p>', NULL, NULL, NULL, '1567269979.jpg', 'image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-06 09:02:23', '2019-08-31 20:46:19'),
(22, 'AccessTile Fire Resistant Tile with Attention Domes', 'accesstile-fire-resistant-tile-with-attention-domes', 'From: $18.09Per sqft', '1565949352.png', 'Alt Banner', '7,8', 'access/fire-resistant-surface-applied-tile-with-attention-domes', '<p>Access Tile Surface Applied Fire Retardant FIRESENTRY-X Composite Technology offers maximum resistance against fire. Access Tile Fire Resistant FR meets ULC-S 102.2 fire standard at less than 25 flames and less than 50 smoke. This Surface Applied fire-resistant tile is the first composite tile meeting the Ontario building code requirements. Access Tile FR is the cost effective interior solution for applying TWSI tactile warning surface indicators for tactile warning floor surfaces at exit stair wells, vestibules to exit stairs and lobby&rsquo;s as well as corridors. The Ontario tactile walking surface indicators Surface Applied Fire-Resistant tile comes in 3 different colors and sizes to meet your buildings specifications.</p>', NULL, NULL, NULL, '1566299092.jpg', 'Alt Image', 'Meta Title', 'Meta Description', 'Meta Title', '2019-08-16 04:25:52', '2019-09-25 06:20:37'),
(23, 'Polymer', 'polymer', 'From: $12.40 Per sqft', '1566190760.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559580.jpg', 'Alt Image', 'Code Compliant TWSI Polymer Solutions - AODA and ADA Compliant Solution', 'Tactile Solutions bring the AODA and ADA code compliant TWSI polymer solutions to install at outside surfaces like parking areas, reflecting pools & curb ramps.', 'Polymer Solutions, attention indicators, tactile wayfinding bars', '2019-08-18 23:29:20', '2019-09-05 17:26:33'),
(24, 'Cast Iron', 'cast-iron', 'From: $29.17 Per sqft', '1566191177.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559631.jpg', 'Alt Image', 'Code Compliant TWSI Cast Iron Solution | AODA and ADA Compliant Solution', 'Our code compliant cast iron surface indicators are mandatory to be installed for the safety of the visually impaired at the parking areas, transit platforms, etc.', 'cast iron surface indicators, tactile wayfinding bars, Access cast-in-place wayfinding tiles', '2019-08-18 23:36:17', '2019-09-02 19:47:02'),
(25, 'Steel', 'steel', 'From: $116.70 Per sqft', '1566191185.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566560086.jpg', 'Alt Image', 'Code Compliant Steel Tactile solution Ontario', 'Tactile Solutions brings the code compliant and mandatory steel wayfinding bars and attention domes, providing long term safest and lowest life cycle cost.', 'Code Compliant Tactile solution British Columbia', '2019-08-18 23:36:25', '2019-09-02 19:49:07'),
(26, 'Rubber', 'rubber', 'From: $12.40 Per sqft', '1566191194.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559732.jpg', 'Alt Image', 'Code Compliant TWSI Rubber Solution | AODA & ADA Compliant Attention Indicators', 'Tactile Solutions brings the code compliant TWSI rubber tactile indicators for surface installation at shopping centers, airport courses, railways stations, etc.', 'tactile indicators material', '2019-08-18 23:36:34', '2019-09-02 19:47:40'),
(27, 'Porcelain', 'porcelain', 'From: $16.20 Per sqft', '1566191201.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559795.jpg', 'Alt Image', 'Code Compliant Tactile Solutions Porcelain Indicator – Tactile Solution Canada', 'Tactile Solutions bring the accessibility code compliant porcelain tactile offering high durability and versatility for both interior and exterior applications.', 'Tactile Attention indicator, vehicular routes, Accessibility Code Compliant Tactile', '2019-08-18 23:36:41', '2019-09-02 19:48:30'),
(28, 'Stainless Steel', 'stainless-steel', 'From: $1.99', '1566191208.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559851.jpg', 'Alt Image', 'Code Compliant Tactile Solutions Stainless Steel Indicator', 'Our accessibility code compliant stainless steel tactile includes the attention domes and wayfinding bars, installed to address the safety of blind pedestrians.', 'accessibility code compliant tactile, areas with curb', '2019-08-18 23:36:48', '2019-09-02 19:50:02'),
(29, 'Aluminum', 'aluminum', 'From: $1.99', '1566191214.png', 'Alt Banner Image', '17', NULL, NULL, NULL, NULL, NULL, '1566559899.jpg', 'Alt Image', 'Code Compliant Aluminum Tactile | Tactile Attention', 'Tactile Solutions brings the code compliant aluminum attention domes and wayfinding bars for interior applications that helps in preventing slips and falls.', 'Tactile Attention, Wayfinding Surface Indicators, Alberta', '2019-08-18 23:36:54', '2019-09-02 19:51:06'),
(30, 'AccessTile Cast-In-Place Wayfinding Bars', 'access-cast-in-place-wayfinding-bars', 'From: $18.09Per sqft', '1567361491.png', 'banner image', '3,9', 'access/cast-in-place-tile/wayfinding-bars', '<p>Access Tiles Surface Applied Directional Wayfinding Tiles (Directional Bar Tiles) are specifically designed to work in unison with truncated attention dome tiles. These Canadian accessibility code compliant wayfinding bars are designed to lead the public between spaces and follow the desired path safely. These (TWSI) tactile walking surface indicators use a series of bar shaped tactile surfaces creating a detectable path. These paths are created with truncated attention dome tiles to indicate where the path begins, ends or splits so the visually impaired can orient themselves to follow their desired path. Access Tile detectable directional warning pad is cost effective, light weight and extremely durable used with truncated attention dome tiles to create fully accessible pathways around any pace and to alert pedestrians of a paths end. Access Tile Direction Wayfinding bars are offered in Replaceable Cast in Place tiles and Surface Applied Tiles.</p>', NULL, NULL, NULL, '1567361492.jpg', 'Alt Image', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-09-01 22:11:33', '2019-09-09 12:52:50'),
(31, 'AccessTile Surface Applied Wayfinding Bars', 'access-surface-applied-wayfinding-bars', 'From: $18.09Per sqft', '1567361824.png', 'banner image', '4,9', 'access/surface-applied-tile/wayfinding-bars', '<p>Access Tiles Surface Applied Directional Wayfinding Tiles (Directional Bar Tiles) are specifically designed to work in unison with truncated attention dome tiles. These Canadian accessibility code compliant wayfinding bars are designed to lead the public between spaces and follow the desired path safely. These (TWSI) tactile walking surface indicators use a series of bar shaped tactile surfaces creating a detectable path. These paths are created with truncated attention dome tiles to indicate where the path begins, ends or splits so the visually impaired can orient themselves to follow their desired path. Access Tile detectable directional warning pad is cost effective, light weight and extremely durable used with truncated attention dome tiles to create fully accessible pathways around any pace and to alert pedestrians of a paths end. Access Tile Direction Wayfinding bars are offered in Replaceable Cast in Place tiles and Surface Applied Tiles.</p>', NULL, NULL, NULL, '1567361825.png', 'Alt Image', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-09-01 22:17:05', '2019-09-09 12:52:43'),
(32, 'Elan Tile Porcelain Wayfinding Bar Tile', 'elan-porcelain-wayfinding-bar-tile', 'From: $16.20 Per sqft', '1568019410.jpg', 'banner image', '9', 'elan/porcelain-wayfinding-bar-tile', '<p>Elan Tile Porcelain Tactile Indicator Wayfindng Bars designed for style and engineered for performance. Elan Tile Wayfindnig Bars incorporate the best raw materials allowing the product to meet the designation of Porcelain Stoneware and is suitable for both interior and exterior applications. Elan Tile Wayfinding Bars offer highly durable and versatile walking surface Direction indicators for Wayfinding ensuring the visually impaired can navigate around their environments effectively and safely. Elan Tile Porcelain Wayfinding Bars create a path for guiding pedestrians towards correctly reaching their desired destinations. Elan Tile Porcelain Wayfinding Bars are designed for safety, convenience and code compliance.</p>', NULL, NULL, NULL, '1568019410.jpg', 'Alt Image', 'Your Source for Code Compliant Tactile Solutions - Accessibility Code Compliant Tactile', 'Your Source for Code Compliant Tactile Solutions Accessibility Code Compliant Tactile', 'Your Source for Code Compliant Tactile Solutions', '2019-09-09 12:56:50', '2019-09-09 12:56:50'),
(33, 'Eon Tile Rubber Wayfinding Bars Tile', 'eon-tile-rubber-wayfinding-bars-tile', 'From: $12.40 Per sqft', '1568695763.jpg', 'Banner Image', '9', 'eon/rubber-wayfinding-bars-tile', '<p>Eon Tile Rubber Wayfinding Bars are durable and flexible tactile indicators perfect for those who design and construct the finest commercial, institutional and public environments. Eon Wayfinding Bar Tiles are made from premium long lasting polymers creating category leading quality with a contemporary look and finish. Eon Tile Wayfinding Bars act as path marking indicators for pedestrians including the visually impaired for safe guidance around various environments. The Eon Tile Wayfinding Bars are fully Compliant with all Canadian Accessibility codes and are available in 4 colours ivory, vogue black, smoke grey and yellow.</p>', NULL, NULL, NULL, '1568695763.jpg', 'Alt Image', 'Meta Title', 'Meta Description', 'Meta Keyword', '2019-09-16 23:19:23', '2019-09-16 23:20:59'),
(34, 'Eon Tile Rubber Attention Domes Tile', 'eon-tile-rubber-attention-domes-tile', 'From: $12.40 Per sqft', '1569412519.png', 'Alt Banner', '8', 'eon/rubber-attention-domes-tile', '<p>Eon Tile Rubber Attention Domes are durable and flexible tactile indicators perfect for those who design and construct the finest commercial, institutional and public environments. Eon Attention Dome Tiles are made from premium long lasting polymers creating category leading quality with a contemporary look and finish. Eon Tile Attention Domes act as warning indicators for pedestrians including the visually impaired for unprotected drop off edges or where there are no curbs or elements to separate the pedestrian route from a vehicular traffic route.</p>', NULL, NULL, NULL, '1569412519.jpg', 'Alt Image', 'Meta Title', 'Meta', 'Meta Keyword', '2019-09-25 06:25:19', '2019-09-25 06:25:19'),
(35, 'Elan Tile Porcelain Attention Domes Tile', 'elan-tile-porcelain-attention-domes-tile', 'From: $16.20 Per sqft', '1569412739.png', 'Alt Banner', '8', 'elan/porcelain-attention-domes-tile', '<p>Elan Tile Porcelain Tactile Indicator Attention Domes are designed for style and engineered for performance. Elan Tile Attention Domes incorporate the best raw materials allowing the product to meet the designation of Porcelain Stoneware and is suitable for both interior and exterior applications. Elan Tile offers highly durable and versatile walking surface indicators (truncated attention domes) to serve as a warning to all pedestrians of potential hazardous conditions ahead, indicating the end of a curb or an edge drop off. Elan Tile Porcelain Attention Domes are fully Canadian Accessibility code compliant.</p>', NULL, NULL, NULL, '1569412739.jpg', 'Alt Image', 'meta title', 'Meta', 'Meta Keyword', '2019-09-25 06:28:59', '2019-09-25 06:28:59'),
(36, 'Advantage Tactile Systems One Plate With Domes', 'advantage-tactile-systems-one-plate-with-domes', 'From: $116.70 Per sqft', '1569413444.png', 'Alt Banner', '8', 'advantage/steel-cast-in-place/one-plate-with-domes', '<p>Advantage ONE Plate&trade; Tactile Walking Surface Indicators<br />\r\n(TWSI) have been designed for all interior accessibility solutions.<br />\r\nAdvantage ONE Plate&trade; indicators are machined from a solid piece of 316L Marine Grade Stainless Steel and fastened to a solid Stainless Steel Plate.&nbsp;<br />\r\nThis process enhances the aesthetics of the tile, but also have been proven to be strong and durable.<br />\r\nAdvantage ONE Plate&trade; incorporates an integral texture in the stainless steel for permanent slip resistance.&nbsp;<br />\r\nOur products have undergone a rigorous series of tests to ensure that they meet and exceed guidelines developed by the AODA, CSA, ISO, and<br />\r\nprovincial and national building codes.&nbsp;<br />\r\nAdvantage ONE&trade; TWSI products offer the lowest lifecycle cost, and eliminates long term safety concerns and accessibility limitations.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', NULL, NULL, NULL, '1569413444.jpg', 'Alt Image', 'Meta Title', 'Meta', 'Meta Keyword', '2019-09-25 06:40:44', '2019-09-25 06:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `cat_subcats`
--

CREATE TABLE `cat_subcats` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `page_name`, `slug`, `body`, `image`, `alt_image`, `type`, `function`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', ' ', '<p>&nbsp;&nbsp;</p>', '1567416390.png', 'home', 'main', 'home', 'Your Source for Code Compliant Tactile Solutions - Accessibility Code Compliant Tactile', 'Tactile Solutions brings the Accessibility code compliant tactile for vehicular routes or curb ramps. We’ve got the CSA, AODA & ISO tactile warning indicators.', 'code compliant tactile solution, tactile plates, CSA tactile warning strips, Code Compliance Services, tactile walking surface indicators, tactile walking surface indicators suppliers, TWSI installation, AODA Detectable Warning Tiles , tactile attention indicator, ISO tactile warning indicators, Building Code Canada, tactile indicators ON, Building Code AB, TWSI, Tactile Building Code, Building Code NS, Building Code NB, Accessible Building requirements, Tactile Requirement, tactile surface indicators, tactile indicators, tactile attention indicators, Building Code ON, Building Code PEI, Building Code MB, Building Code BC, tactile indicators requirements', 'on', '2019-07-10 04:11:31', '2019-09-02 13:26:31'),
(2, 'About', 'about', '<h2><strong>About Us</strong></h2>\r\n\r\n<p><strong>Compliance Solutions Canada</strong>, a leader in providing Canadian business with compliant workplace solutions since 2008, now introduces a specialized website helping contractors to find the best and most cost-effective code compliant tactile solution for their projects. This new website is named <strong>TactileSolution.ca</strong></p>\r\n\r\n<p>By making use of our extensive knowledge of code compliance, this specialized site is <strong>&ldquo;Your Source for Code Compliant Solutions&rdquo;.</strong></p>\r\n\r\n<p>Our Mission is to provide our customers with accessibility solutions that meet all current federal and provincial standards. All products offered meet the most rigorous test requirements and comply with AODA, CSA, ISO, FADS and IFC standards to ensure you achieve the highest compliance in your projects.</p>\r\n\r\n<p>Our Tactile Solutions are achieved by the most comprehensive offering of tactile walking surface indicators ranging from cast iron and stainless steel to various engineered polymers and an extensive range of photoluminescent (PLM) exit signs, stair nosing&rsquo;s and exit path marking.</p>\r\n\r\n<p><strong>When you need mandatory code compliant accessibility solutions for any project in Canada, look in our </strong><a href=\"http://tactilesolution.ca/solutions\"><strong>featured solutions</strong></a><strong> or call us.</strong></p>', '1567416398.png', 'Image', 'main', 'about', 'About Us | Tactile Solution Canada – AODA, ISO, CSA, OBC, IFC', 'Tactile Solutions brings the code compliant tactile walking surface indicators for interior & exterior installation in British Columbia, Alberta, Ontario, NU, etc.', 'Code Compliant Tactile solution, British Columbia, BC, Alberta, AB, Saskatchewan, SK, Manitoba, MB, Ontario, ON, Quebec, QB, New Brunswick, NB, Prince Edward Island, PEI, Nova Scotia, NS, Newfoundland & Labrador, NF, Nunavut, NU, North West Territories, NWT, Yukon, YU', 'on', '2019-07-10 04:25:47', '2019-09-02 13:26:38'),
(5, 'Solutions', 'solutions', '<h2>Welcome to Your Source for Canadian Code Compliant Tactile Solutions</h2>\r\n\r\n<p>Make use of our extensive knowledge of code compliance to provide you with accessibility solutions that meet all current federal and provincial standards.</p>\r\n\r\n<p>The very comprehensive offering of the products in the sidebar meet the most rigorous test requirements and comply with AODA, CSA, ISO, FADS and IFC standards to ensure you achieve the highest compliance in your projects.</p>\r\n\r\n<p>The featured brands for tactile walking surface indicators range from cast iron and stainless steel to various engineered polymers and an extensive range of photoluminescent (PLM) exit signs, stair nosing&rsquo;s and exit path marking.</p>\r\n\r\n<p><strong>Click on the applications to find the brands that offer the best solution for your project.</strong></p>\r\n\r\n<p>If you need assistance, please contact us or click on request quote and we will be happy to assist you to find the best and cost-effective solution for your project.</p>', '1567416410.png', 'Banner Image', 'main', 'solutions', 'Code Compliant Tactile Tiles (TWSI) Solution AODA, ISO, CSA, IFC', 'We are the accessibility solutions provider, offering mandatory and code compliant tactile indicators for vehicular routes, wheel chair ramps and stair landings.', 'Code Compliant Tactile Solutions, accessibility solutions provider, Tactile entrance solutions, Tactile solutions provider, tactile warning indicator requirement, mandatory tactile indicator, Directional Ground Surface Indicators, accessibility low stair landing indicator, AODA Tactile Stair Landings, Building Code Canada, tactile indicators ON, Building Code AB, TWSI, Tactile Building Code, Building Code NS, Building Code NB, Accessible Building requirements, Tactile Requirement, tactile surface indicators, tactile indicators, tactile attention indicators, Building Code ON, Building Code PEI, Building Code MB, Building Code BC, tactile indicators requirements', 'on', '2019-07-10 07:34:19', '2019-09-02 13:26:50'),
(6, 'Reference', 'reference', '<p>Reference</p>', '1567416417.png', 'Image', 'main', 'reference', 'Installation Guide for Tactile Indicators | Code Compliant Tactile Reference', 'With Tactile Solutions, find the tactile product installation guides and the code requirements essential to follow while installing the tactile walking indicators.', 'Reference', 'on', '2019-07-10 07:34:36', '2019-09-02 13:26:57'),
(7, 'Codes', 'codes', '<h2>Canadian mandatorily required Federal and International Building Codes and Standards</h2>\r\n\r\n<ul>\r\n	<li><a href=\"http://kinesik.ca/Standardspage/codes/CLEARING_Our_PATH%20english%20final%20oct%202017.pdf\" target=\"_blank\">CNIB Clearing Our Path Guide</a></li>\r\n	<li><a href=\"http://kinesik.ca/Standardspage/codes/2009%20IFC-IBC%201024%20Luminous%20Egress%20Path%20Markings%20compliance%20Guide.pdf\" target=\"_blank\">International Fire Code Compliance Guide</a></li>\r\n	<li><a href=\"https://store.csagroup.org/?gclid=CJPp1YvIobwCFa5DMgodOG8ABg\" target=\"_blank\">CSA B651-12 &ndash; Accessible Design for the Built Environment</a></li>\r\n	<li><a href=\"https://www.iso.org/standard/55867.html\" target=\"_blank\">ISO 23599:2012 Assistive Products for Blind and Vision Impaired Persons &ndash; Tactile Walking Surface Indicators</a></li>\r\n</ul>\r\n\r\n<h2>Provincial Accessibility Requirements</h2>\r\n\r\n<p>For specific codes in your area please contact your provincial and / or municipal building codes department</p>', '1567416424.png', 'Alt Image', 'main', 'codes', 'Canadian Provincial Building Codes | AODA, ISO, CSA, OBC, IFC', 'Canadian accessibility codes and different international building codes and standards mandated for the installation of tactile walking indicators for safety concerns.', 'Codes', 'on', '2019-07-10 07:34:52', '2019-09-02 13:27:04'),
(8, 'Categories', 'categories', '<h2>Welcome to Your Source for Canadian Code Compliant Tactile Solutions</h2>\r\n\r\n<p>Make use of our extensive knowledge of code compliance to provide you with accessibility solutions that meet all current federal and provincial standards.</p>\r\n\r\n<p>The very comprehensive offering of the products below&nbsp;meet the most rigorous test requirements and comply with AODA, CSA, ISO, FADS and IFC standards to ensure you achieve the highest compliance in your projects.</p>\r\n\r\n<p>The featured brands for tactile walking surface indicators range from cast iron and stainless steel to various engineered polymers and an extensive range of photoluminescent (PLM) exit signs, stair nosing&rsquo;s and exit path marking.</p>\r\n\r\n<p>Click on the brands to find the best solution for your project.<strong>If you need assistance, please contact us or click on request quote </strong>and we will be happy to assist you to find the best and cost-effective solution for your project.</p>', '1567416443.png', 'Image', 'main', 'categories', 'Your Source for Canadian Code Compliant Tactile Solutions', 'We are your source for Canadian code compliant tactile solutions, providing the most durable and weather and wear resistant tactile walking surface indicators.', 'Your Source for Canadian Code Compliant Tactile Solutions, tactile walking surface indicators, Tactile Indicators Canada, tactile attention indicator, tactile warning indicators, tactile warning plates Canada, Your Source code tactile surface indicators', 'on', '2019-07-10 07:35:08', '2019-09-02 13:27:23'),
(9, 'Blog', 'blog', '<p>Blog</p>', '1567416450.png', 'Image', 'main', 'blog', 'Blog about Tactile Solution - Provincially Mandated Tactile Solution', 'Provincially mandated tactile solution installation becomes easy with our code compliant tactile solutions. Start reading to discover more about tactile indicators.', 'provincially mandated tactile solution installation', 'on', '2019-07-10 07:35:26', '2019-09-02 13:27:30');
INSERT INTO `cms` (`id`, `page_name`, `slug`, `body`, `image`, `alt_image`, `type`, `function`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Contact', 'contact', '<h3>Contact Us Toll Free! 1-877-761-5354</h3>\r\n\r\n<p><img src=\"data:image/jpeg;base64,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\" style=\"height:233px; width:350px\" /></p>\r\n\r\n<p>Call our Toll-Free number Monday through Friday 7:30 am to 7:30 pm Eastern Standard Time. Need mandatory code compliant accessibility solutions for any project in Canada? Then email our Professional Sales Team at <a href=\"mailto:csc@csc-inc.ca\">csc@csc-inc.ca</a> to deliver our code compliant tactile solutions for your project!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Compliance Solutions Canada Inc.</h3>\r\n\r\n<p>5863 Leslie Street Suite 507<br />\r\nToronto Ontario<br />\r\nCanada M2H 1J8<br />\r\nToll Free: 1-877-761-5354<br />\r\nPhone: 905-761-5354<br />\r\nFax: 905-761-5650</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '1567416459.png', 'Image', 'main', 'contact', 'Contact Us | Your Source for Canadian Code Compliant Tactile Solutions', 'Tactile Solutions brings you the code compliant walking surface indicators for installation. For any queries and issues, feel free to contact us.', 'Contact', 'on', '2019-07-10 07:35:42', '2019-09-02 13:27:39');
INSERT INTO `cms` (`id`, `page_name`, `slug`, `body`, `image`, `alt_image`, `type`, `function`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Terms and Conditions', 'terms-and-conditions', '<p><strong>Compliance Solutions Canada Terms and Conditions</strong></p>\r\n\r\n<p>These terms and conditions apply to the viewing, purchasing and sale of products through www.tactilesolution.ca (the &ldquo;site&rdquo;), a site operated by Compliance Solutions Canada, (&ldquo;CSC&rdquo;). By viewing this site, placing an order or completing a purchase, you agree to be bound by and accept these terms and conditions. If you do not agree to these terms and conditions, do not use this site and do not place an order. Please print a copy of these terms and conditions for your records. All advertisements on the site are invitations to purchase and not offers to sell. CSC reserves the right, at its sole discretion, to accept or reject the order once the order has been completed and submitted by you.</p>\r\n\r\n<p><strong>Ownership of Materials, Trademarks and Copyright:</strong></p>\r\n\r\n<p>The information contained in this site including all images, designs, logos, photographs, text and other materials (the &ldquo;contents&rdquo;) are copyrights, trademarks, or other intellectual property owned or licensed by CSC or its affiliates or vendors are the property of their respective owners. The contents of this site may not be copied, republished, downloaded, transmitted, mirrored or reproduced without the prior written permission of CSC or the applicable copyright owner. You may only use the site to view its content and place an order. All rights not expressly granted are hereby reserved by CSC and its licensors.</p>\r\n\r\n<p><strong>Limitation of Liability:</strong></p>\r\n\r\n<p>CSC will not be liable for any indirect, special, incidental, or consequential damages, whether based on contract, tort (including negligence), or any other legal theory, including without limitation loss of profits, loss of business, or other economic damages. CSC is not responsible for delays in delivery which result from any circumstances beyond its control. CSC&rsquo;s aggregate liability shall not exceed the purchase price paid for any products purchased through this site.</p>\r\n\r\n<p><strong>Pricing and Specifications:</strong></p>\r\n\r\n<p>All information regarding pricing, products and services is subject to change. CSC reserves the right to make changes to pricing and products for reasons including, but not limited to, changing market conditions, discontinuation, unavailability, manufacturer price changes and errors in advertisements. Prices listed are net and do not include shipping charges, handling fees, taxes and/or applicable duties, brokerage fees or special shipping requirements. Those customers who claim exemption from taxes or duties are responsible for providing CSC with the necessary documentation at the time of purchase or taxes will be added to their order. Occasionally, stated prices on the site are subject to change without notice due to circumstances beyond our control.</p>\r\n\r\n<p><strong>Shipping:</strong></p>\r\n\r\n<p>Products are shipped F.O.B. point of origin. All shipping charges are prepaid by CSC and added to the customer&rsquo;s invoice unless you choose to be billed freight collect. Any additional charges for services requested by the customer, including but not limited to inside delivery, special routing, residential delivery or pre-delivery notification must be paid by the customer.</p>\r\n\r\n<p><strong>Returns:</strong></p>\r\n\r\n<p>If for any reason you are dissatisfied with a purchase you made from CSC, you may return the merchandise within 30 days subject to the following conditions. 1) Please contact customer service at 1-877-761-5354 for a return authorization. 2) A return re stocking fee of 25% will apply to most returns. Customers will be responsible for shipping charges on returned orders. Customers will be responsible for shipping charges on cancelled orders. Due to their nature, custom and made-to-order products cannot be accepted for return unless the product was initially defective. If a product is damaged during delivery to you via a freight carrier (when prepaid by CSC), note the damage on the carrier&rsquo;s delivery receipt and request an inspection report on the damaged shipment from the carrier to be forwarded to you within 48 hours. Forward the inspection report and original packing list to CSC and we will file a claim on your behalf and provide you with disposition instructions.</p>\r\n\r\n<p><strong>Refund:</strong></p>\r\n\r\n<p>Customers may elect to leave final credit on account, receive credit card credit where applicable or receive refund by cheque where credit account has been established.</p>\r\n\r\n<p><strong>Warranties:</strong></p>\r\n\r\n<p>Customers acknowledge that CSC is not the manufacturer of any of the products purchased hereunder. Any warranty with respect to the products must come from the manufacturer. CSC will pass through to customers any applicable warranties of the manufacturer, if any, to the extent permissible. Notwithstanding anything to the contrary, CSC&rsquo;s liability is limited to the replacement value of the products purchased from this site. CSC and its affiliates hereby expressly disclaim all warranties and conditions, either legal, express or implied, arising from statute, course of dealing, usage of trade or otherwise, related to this site or the products,</p>', '1565003335.png', 'Alt Image', 'other', 'cms', 'Terms and condition', '<p>Terms and condition</p>', 'Terms and condition', 'on', '2019-07-16 00:28:45', '2019-08-28 13:32:53'),
(13, 'Privacy Policy', 'privacy-policy', '<p><strong>Our Commitment to Privacy</strong></p>\r\n\r\n<p>Compliance Solutions Canada (CSC) values your privacy and is committed to maintaining the accuracy, confidentiality and security of your personal information.</p>\r\n\r\n<p>We have developed this Website Privacy Policy (&ldquo;Policy&rdquo;) to describe our privacy policies and practices and how we collect, use and disclose the personal information of those individuals who purchase and visit our website. Our privacy policy arises from the Freedom of Information and Protection of Privacy Act. , other legislations, and fair information practices.</p>\r\n\r\n<p><strong>What is Personal Information?</strong></p>\r\n\r\n<p>Throughout this Privacy Policy, we refer to &ldquo;personal information&rdquo; as any information about you as an identifiable individual, other than your business title or business contact information when used or disclosed for the purpose of business communications. Personal information does not include non-identifiable or non-personal information (i.e. information that cannot be associated with or tracked back to a specific individual).</p>\r\n\r\n<p><strong>How is Your Personal Information Protected?</strong></p>\r\n\r\n<p>CSC endeavors to maintain physical, technical and procedural safeguards that are appropriate to the sensitivity of the personal information in question. These safeguards are designed to prevent your personal information from loss, unauthorized access, copying, use, modification, disclosure or selling.</p>\r\n\r\n<p>Unfortunately, no data transmission over the Internet can be guaranteed to be 100% secure. As a result, while this website strives to protect your personal information, we cannot warrant the security of any information you transmit to us, and you do so at your own risk.</p>\r\n\r\n<p><strong>What we don&#39;t do</strong></p>\r\n\r\n<p>We do not provide personal information gathered on the websites to third parties except with your express permission or as permitted by law. (For example, see: Freedom of Information and Protection of Privacy Act, section 27)</p>\r\n\r\n<p><strong>What about Links to other Websites?</strong></p>\r\n\r\n<p>Our website may contain links to other websites that may be subject to less stringent privacy standards. We cannot assume any responsibility for the privacy practices, policies or actions of the third parties that operate these websites. CSC is not responsible for how such third parties collect, use or disclose your personal information. You should review the privacy policies of these websites before providing them with personal information.</p>\r\n\r\n<p><strong>Updating Your Personal Information</strong></p>\r\n\r\n<p>It is important that the information contained in our records is both accurate and current. If your personal information happens to change during the course of your relationship with Compliance Solutions Canada Inc., please keep us informed of such changes.</p>\r\n\r\n<p><strong>Access to your information</strong></p>\r\n\r\n<p>You are entitled to correct any personal information gathered through the websites that we hold about you. If you want to correct your personal information, there will be an appropriate contact listed for you to direct enquiries. If no contact is identified, then you should contact the webmaster of the relevant site. (For example, see: Freedom of Information and Protection of Privacy Act, section 25)</p>\r\n\r\n<p>THANK YOU for visiting our website and reading our website privacy policy. If you have any inquiries please don&rsquo;t hesitate to email us at&nbsp;<a href=\"mailto:csc@csc-inc.ca\">csc@csc-inc.ca</a></p>', '1565002514.png', 'privacy', 'other', 'cms', 'Privacy Policy', '<p>Privacy Policy</p>', 'Privacy Policy', 'on', '2019-07-16 00:29:20', '2019-08-28 13:32:38'),
(14, 'Site map', 'site-map', '<p>Site map</p>', '1566450881.png', 'Image', 'other', 'cms', 'Site map', '<p>Site map</p>', 'Site map', 'null', '2019-07-16 00:29:48', '2019-08-28 13:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leaf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincial_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canada_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `title`, `leaf`, `type`, `name_1`, `href_1`, `name_2`, `href_2`, `name_3`, `href_3`, `rate_type`, `provincial_rate`, `canada_rate`, `created_at`, `updated_at`) VALUES
(2, 'British Columbia', 'single', 'wc', 'Provincial Accessibility Requirements', 'https://www2.gov.bc.ca/gov/content/governments/about-the-bc-government/accessibility', NULL, NULL, NULL, NULL, 'GST+PST', '7', '5', '2019-08-20 01:25:38', '2019-09-11 01:22:36'),
(3, 'Alberta', 'single', 'wc', 'Provincial Accessibility Requirements', 'https://www.alberta.ca/building-codes-accessibility.aspx', NULL, NULL, NULL, NULL, 'GST', '0', '5', '2019-08-20 01:26:13', '2019-09-11 01:22:00'),
(4, 'Saskatchewan', 'single', 'wc', 'Provincial Accessibility Requirements', 'https://publications.saskatchewan.ca/#/products/918', NULL, NULL, NULL, NULL, 'GST+PST', '6', '5', '2019-08-20 01:26:38', '2019-10-04 07:23:45'),
(5, 'Manitoba', 'single', 'wc', 'Provincial Accessibility Requirements', 'https://www.gov.mb.ca/dio/discussionpaper/discussion_w5.html', NULL, NULL, NULL, NULL, 'GST+PST', '8', '5', '2019-08-20 01:26:58', '2019-09-11 01:24:13'),
(6, 'Ontario', NULL, 'cc', 'Provincial Accessibility Requirements', 'https://www.ontario.ca/page/about-accessibility-laws', NULL, NULL, 'Provincial Building Code', 'https://www.ontario.ca/page/ontarios-building-code', 'HST', '8', '5', '2019-08-20 01:27:27', '2019-09-11 01:45:32'),
(7, 'Quebec', 'single', 'cc', 'Provincial Accessibility Requirements', 'https://www.ontario.ca/laws/statute/05a11', NULL, NULL, NULL, NULL, 'GST+QST', '9.975', '5', '2019-08-20 01:27:55', '2019-10-04 07:25:51'),
(8, 'New Brunswick', 'single', 'tm', 'Provincial Accessibility Requirements', 'https://www2.gnb.ca/content/gnb/en/news/news_release.2011.07.0785.html', NULL, NULL, NULL, NULL, 'HST', '10', '5', '2019-08-20 01:28:32', '2019-09-11 01:24:44'),
(10, 'Prince Edward Island', NULL, 'tm', NULL, NULL, NULL, NULL, NULL, NULL, 'HST', '10', '5', '2019-08-20 01:29:31', '2019-09-11 01:45:51'),
(12, 'Nunavut', NULL, 'nc', NULL, NULL, NULL, NULL, NULL, NULL, 'GST', '0', '5', '2019-08-20 01:31:10', '2019-09-11 01:45:12'),
(13, 'North West Territories', NULL, 'nc', NULL, NULL, NULL, NULL, NULL, NULL, 'GST', '0', '5', '2019-08-20 01:31:34', '2019-09-11 01:44:45'),
(14, 'Yukon', NULL, 'nc', NULL, NULL, NULL, NULL, NULL, NULL, 'GST', '0', '5', '2019-08-20 01:31:48', '2019-09-11 01:47:20'),
(16, 'Nova Scotia', NULL, 'tm', 'Provincial Accessibility Requirements', 'https://beta.novascotia.ca/government/communications-nova-scotia', 'Provincial Accessibility Regulations', 'https://beta.novascotia.ca/documents/hearing-procedure-nova-scotia-building-advisory-committee', NULL, NULL, 'HST', '10', '5', '2019-08-29 23:28:39', '2019-09-11 01:45:01'),
(17, 'Newfoundland & Labrador', NULL, 'tm', 'Provincial Accessibility Requirements', 'https://assembly.nl.ca/Legislation/sr/statutes/b10.htm', NULL, NULL, NULL, NULL, 'HST', '10', '5', '2019-08-29 23:29:43', '2019-09-11 01:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE `colours` (
  `id` int(10) UNSIGNED NOT NULL,
  `list_id` int(255) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test purpose', 'test@gmail.com', 'Checkout this information', 'Test purpose', '2019-08-26 09:10:42', '2019-08-26 09:10:42'),
(2, 'ScottHak', 'raphaeinvar@gmail.com', 'Do you want cheap and innovative advertising for little money?', 'Ciao!  tactilesolution.ca \r\n \r\nWe present \r\n \r\nSending your commercial offer through the feedback form which can be found on the sites in the Communication section. Feedback forms are filled in by our application and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This technique raise the probability that your message will be open. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', '2019-08-29 23:00:36', '2019-08-29 23:00:36'),
(3, 'MarioGew', 'raphaeinvar@gmail.com', 'Delivery of your email messages.', 'Ciao!  tactilesolution.ca \r\n \r\nWe offer \r\n \r\nSending your commercial proposal through the feedback form which can be found on the sites in the Communication section. Feedback forms are filled in by our program and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This technique raise the odds that your message will be read. \r\n \r\nOur database contains more than 25 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing of 50,000 messages to any country of your choice. \r\n \r\n \r\nThis message is automatically generated to use our contacts for communication. \r\n \r\n \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  FeedbackForm2019 \r\nEmail - FeedbackForm@make-success.com', '2019-09-01 08:30:52', '2019-09-01 08:30:52'),
(4, 'Thomas Schwartz', 'tschwartz@csc-inc.ca', 'Checkout this information', 'TEST', '2019-09-02 01:30:53', '2019-09-02 01:30:53'),
(5, 'PatsyCaw', 'patsyavale@gmail.com', 'Whitehat Monthly SEO Plans', 'hi there \r\nWe all know there are no tricks with google anymore \r\nSo, instead of looking for ways to trick google, why not perform a whitehat results driven monthly SEO Plan instead. \r\n \r\nCheck out our plans \r\nhttps://googlealexarank.com/index.php/seo-packages/ \r\n \r\nWe know how to get you into top safely, without risking your investment during google updates \r\n \r\nthanks and regards \r\nMike \r\nstr8creativecom@gmail.com', '2019-09-09 14:43:17', '2019-09-09 14:43:17'),
(6, 'test', 'test@gmail.com', 'Checkout this information', 'tesing', '2019-09-27 06:59:58', '2019-09-27 06:59:58'),
(7, 'test', 'test@gmail.com', 'Checkout this information', 'tesing', '2019-09-27 07:00:11', '2019-09-27 07:00:11'),
(8, 'test', 'gautamg64@gmail.com', 'Checkout this information', 'test mail', '2019-09-27 07:02:13', '2019-09-27 07:02:13'),
(9, 'rre', 'gautamg64@gmail.com', 'Checkout this information', 'dsds', '2019-09-27 07:03:24', '2019-09-27 07:03:24'),
(10, 'test', 'test@gmail.com', 'Checkout this information', 'test', '2019-09-27 07:35:08', '2019-09-27 07:35:08'),
(11, 'test', 'test@gmail.com', 'Checkout this information', 'test', '2019-09-27 07:35:40', '2019-09-27 07:35:40'),
(12, 'test', 'test@gmail.com', 'Checkout this information', 'test', '2019-09-27 07:35:59', '2019-09-27 07:35:59'),
(13, 'AnthonyAlusy', 'anthonysnulp@gmail.com', '加密货币市场是最赚钱的！向所有人开放！', '如何规避风险并获得最大的投资回报？ \r\n \r\n有更好的解决方案！ \r\n短期投资带来最大利润！ \r\n \r\n投资期限2天。 \r\n投资利润+ 10％ \r\n \r\n可以在官方网站上注册国际投资基金： \r\nhttps://www.crypto-mmm.com/?source=xbtc', '2019-10-25 21:03:30', '2019-10-25 21:03:30'),
(14, 'MariaZiP', 'af.antocrespo@consultant.com', 'We need your response urgently', 'Attn: Beneficiary \r\nTHE WEB PROMOTION PROGRAM. We are pleased to inform you of the release of the results of our ES.INTERNATIONAL WEB PROMOTION PROGRAM. The result was released on the 28 OF OCTOBER 2019. Your e-Website was attached to ticket number 902089237-067 drew lucky numbers 9-24-06-18-05-26. Which consequently won our website lottery program in the 2nd category. Your website has therefore won the sum of €1, 710, 460.00. for you CONGRATULATION!!!!!!!!!!! \r\n \r\nAll participants were selected through a computer ballot system drawn from 25,000 website addresses All over the world as part of our international website promotion program. \r\nTo start your lottery claim and also for more enlightenment regarding to this, kindly contact your agent; PEDRO PEREZ, FOREIGN OPERATION MANAGER OF PRUDENTIAL SEGUROS S.A. By TELEPHONE N?: +34 631 692 612, Email: perez@martinjoselaws.com \r\nPlease fills the payment processing form below and retunes it to your claims agent to this email: perez@martinjoselaws.com.  Congratulations once again. \r\nBeneficiary Full name: --------------------   Website: -------------------- \r\nEmail Address: --------------------------        Tel: -------------------------- \r\nNationality: ------------------------                Mode of Payment: ---------- \r\nSincerely yours, \r\nMRS MARIA LOPEZ DANIEL. \r\n(ES.WEBSITE LOTTERY COORDINATOR)', '2019-10-29 14:38:48', '2019-10-29 14:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `csc_categories`
--

CREATE TABLE `csc_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `csc_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` longtext COLLATE utf8mb4_unicode_ci,
  `size_price` longtext COLLATE utf8mb4_unicode_ci,
  `application` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_categories`
--

INSERT INTO `csc_categories` (`id`, `product_type`, `product_material`, `banner_image`, `alt_banner_image`, `title`, `slug`, `price`, `csc_type`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'tactile', 'Polymer', '1567422199.png', 'Banner', 'Armor Tile Tactile System', 'armor', 'From: $25.92 Per sqft', 'single', '<p>Armor-Tile offers the largest selection of Fully AODA/CSA/ISO and OBC compliant detectable warning tactile system products for Transit platforms, Multi-modal transit centers, Curb ramps, Stairwells, Escalator approaches. Pedestrian crossings, Parking areas, Reflecting pools and Building entrances.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565182714.jpg', 'Image', 'Armor-Tile Tactile System | Compliant Detectable Warning Tactile System', '<p>Tactile Solutions bring the CSA code compliant Armor detectable warning tactile system that can be installed at curb ramps, stair edges, vehicular passageways, etc.</p>', 'compliant detectable warning tactile system, CSA Armor-Tile tactile system, Armor-Tile tactile system', NULL, '2019-09-02 15:03:19'),
(2, 'tactile', 'Polymer', '1567422214.png', 'banner image', 'AccessTile', 'access', 'From: $11.30 Per sqft', NULL, '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Replaceable Cast in Place has combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate replaceable tactile walking surface indicators. Maximized efficiencies in manufacturing, materials sourcing and<br />\r\nproduct specifications deliver the most cost-effective solution in the industry. Access&reg; Tile truncated dome and wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as surface applied tiles and directional bars.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565183050.jpg', 'image', 'Access Tactile Walking Surface Indicators | Tactile Solutions', '<p>Tactile Solutions brings the Access TWSI including attention domes and wayfinding bars tiles which are durable and appropriate for curb ramps &amp; sidewalk designs.</p>', 'Tactile Walking Surface Indicators, Access dome and wayfinding bar tiles,  ISO Access Tile Surface Applied', NULL, '2019-09-05 16:07:44'),
(3, 'tactile', 'Cast Iron', '1567422228.png', 'banner image', 'Advantage Tactile Systems', 'advantage', 'From: $29.17 Per sqft', NULL, '<p>Advantage one is the leading detectable warning and directional tile surface system for construction requirements anywhere the safety of the visually impaired is a concern: curb ramps, shopping malls, transit platforms, parking areas, stairwells and escalator approaches.<br />\r\nAdvantage Tactile Systems, is our line of TWSI&rsquo;s that come in different metal materials. Designed to last the most rigours applications or to enhance the look of your projects while complying with all code requirements.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565182623.jpg', 'image', 'ISO Advantage Tactile Systems | Tactile Solutions', '<p>We provide the ISO code compliant Advantage tactile system which is lightweight and possess exceptional high strength with permanent slip resistant surface.</p>', 'ISO Advantage Tactile Systems, Manitoba Advantage Tactile System, Advantage Tactile Systems TWSI’s', '2019-08-06 07:48:47', '2019-09-02 15:03:48'),
(4, 'tactile', 'Rubber', '1567422241.png', 'banner image', 'Eon Tile', 'eon', 'From: $12.40 Per sqft', 'single', '<p>EonTM Tile is a durable and flexible rubber tactile indicator chosen first by professionals who design and construct the finest commer-cial, institutional and public environments.<br />\r\nEonTM Tile is state of the art polymers compounded together to create category leading quality and a contemporary look and finish.&nbsp;<br />\r\nSuitable for a variety of applications such as airport con-courses, railway stations, shopping centres, department stores, supermarkets, hospitals, swimming pools, schools, banks, com-munity centres or most any high traffic environment.&nbsp;<br />\r\nEonTM Tile&rsquo;s line of products offer attention indicators (truncated domes) for warning and tactile direction indicators for way finding.&nbsp;<br />\r\nEonTM Tile is part of the newest generation of excellence in warning surfaces from Kinesik Engineered Products Incorporated.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565182429.jpg', 'image', 'AODA EON Rubber Tactile Indicator | Tactile Walking Surface Indicators', '<p>At Tactile Solutions, find the code compliant EON Tactile Walking Surface Indicators (TWSI) which have maximized efficiencies and are cost-effective &amp; durable.</p>', 'AODA EON rubber tactile indicator, Tactile Walking Surface Indicators (TWSI) , Newfoundland rubber tactile indicator', '2019-08-06 07:50:51', '2019-09-02 18:11:20'),
(5, 'tactile', 'Porcelain', '1567422254.png', 'banner image', 'Elan Tile', 'elan', 'From: $16.20 Per sqft', 'single', '<p>ElanTM Tile is the ultimate porcelain tactile indicator chosen by professionals who design and construct the finest commercial, institutional and public environments.&nbsp;<br />\r\nIncorporating the best raw materials in the market, ElanTM Tile far exceeds the EN 14411 standard, allowing the product to meet the designation of &ldquo;Porcelain Stoneware&rdquo; and to be suitable for both interior and exterior applications.&nbsp;<br />\r\nOffering highly durable and versatile tactile walking surface indicators (truncated domes) for warning, and direction indicators for wayfinding, the ElanTM Tile line of products signals the newest generation of excellence from Kinesik.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565182541.jpg', 'image', 'Porcelain Tactile Indicator | Elan Wayfinding Bar Tile', '<p>Find the Elan porcelain tactile indicator at Tactile Solutions which are suitable for wayfinding, which can be used in both internal &amp; external applications.</p>', 'Newfoundland porcelain tactile indicator, Porcelain Tactile Indicator, Elan Wayfinding Bar Tile', '2019-08-06 07:52:43', '2019-09-02 15:04:14'),
(6, 'stair', NULL, '1567422274.png', 'banner image', 'Ecoglo Stair Nosing', 'ecoglo-stair-nosing', 'From: $7.40 Per Linear Foot﻿﻿', 'single', '<p>Ecoglo is known throughout the industry for producing a wide range of products that offer the one-stop solution for your pathfinding needs. All Ecoglo products are slip-resistant and visible in all light conditions. Ecoglo&rsquo;s range of emergency visibility products include surface applied anti-slip strips and cast in place star noising&rsquo;s that are individually tested to meet the performance requirements of any performance-based building codes and are designed to meet the requirements of the safety path marking guidance system. Ecoglo Step Edge products are all highly durable tested against all-weather conditions for long lasting anti-slip and guidance for multiple indoor and outdoor applications. Ecoglo Step Edge products provide an easy, reliable and durable solution for preventing slips and falls, illuminating pedestrians path.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565182915.jpg', 'image', 'ISO Ecoglo Stair Nosings | Step Edge Stair Nosings', '<p>Tactile Solutions brings the ISO code compliant Ecoglo stair nosings which can be set in wet concrete or can be applied on the existing stairs to prevent slips.</p>', 'ISO Ecoglo Stair Nosings Quebec, Ecoglo Step Edge Stair Nosings', '2019-08-06 07:54:11', '2019-09-02 15:04:34'),
(24, 'exit signs', NULL, '1567422191.png', 'From: $18.09Per sqft', 'Ecoglo Directional Signage', 'pathmarking-exit-signs', 'From: $18.09Per sqft', NULL, '<p>Ecoglo is a leading global innovator of UL certified Photoluminescent Exit Signs and Emergency Signage that exceed worldwide code requirements. Ecoglo&rsquo;s Photoluminescent Exit Sign systems are durable against UV and all-weather conditions making them the leading solution for indoor and outdoor photoluminescent illuminated egress exit guidance system applications. Ecoglo Photoluminescent Exit Signs and Emergency Exit Pathmarking signs, are manufactured using a patented process embedding photoluminescent particles in a clear durable polymer to ensure maximum efficiency and uses a dry powder for maximum luminance. The Ecoglo Exit Signs and Pathfinding Emergency Exit signs photoluminescent pigment, allow them to be seen in all light conditions and is fast charging by natural and artificial light making them the most cost efficient and reliable exit sign system.&nbsp;<br />\r\n<br />\r\nEcoglo Photoluminescent Exit Signs:<br />\r\n&bull; Multiple directions<br />\r\n&bull; Choice of a universal wall mounting kit or Sign only<br />\r\nEcoglo Photoluminescent Pathmarking Exit Signs:<br />\r\n&bull; Multiple Directins</p>', NULL, NULL, NULL, '1567419474.jpg', 'Alt Image', 'Code Compliant Pathmarking Exit Signs | Ecoglo Emergency Signage', '<p>Code compliant Ecoglo pathmarking photoluminescent exit signs are available at Tactile Solutions, which are highly durable to UV and all-weather conditions.</p>', 'Pathmarking Exit Signs, Photoluminescent Exit Signs, Ecoglo Photoluminescent Exit Signs, Pathmarking Emergency Signage', '2019-08-22 06:34:09', '2019-09-02 15:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `csc_cat_subs`
--

CREATE TABLE `csc_cat_subs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_cat_subs`
--

INSERT INTO `csc_cat_subs` (`id`, `category_id`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(259, 1, 1, '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(260, 1, 2, '2019-10-11 06:38:52', '2019-10-11 06:38:52'),
(261, 2, 3, '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(262, 3, 4, '2019-10-11 06:39:19', '2019-10-11 06:39:19'),
(263, 3, 5, '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(266, 3, 6, '2019-10-11 06:40:55', '2019-10-11 06:40:55'),
(267, 4, 7, '2019-10-11 06:41:03', '2019-10-11 06:41:03'),
(268, 4, 8, '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(269, 5, 9, '2019-10-11 06:42:34', '2019-10-11 06:42:34'),
(270, 5, 10, '2019-10-11 06:43:05', '2019-10-11 06:43:05'),
(271, 2, 15, '2019-10-11 06:44:19', '2019-10-11 06:44:19'),
(272, 2, 16, '2019-10-11 06:44:28', '2019-10-11 06:44:28'),
(288, 6, 14, '2019-10-17 06:20:34', '2019-10-17 06:20:34'),
(289, 6, 12, '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(290, 6, 13, '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(291, 6, 11, '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(292, 24, 17, '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(294, 24, 18, '2019-10-18 01:59:19', '2019-10-18 01:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `csc_colours`
--

CREATE TABLE `csc_colours` (
  `id` int(10) UNSIGNED NOT NULL,
  `list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_colour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_colours`
--

INSERT INTO `csc_colours` (`id`, `list_id`, `type`, `name`, `number`, `background_colour`, `colour_code`, `created_at`, `updated_at`) VALUES
(1018, '8', 'detail', 'Federal Yellow', 'No. 33538', '#e7be0f', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1019, '8', 'detail', 'Brick Red', 'No. 22144', '#D0482C', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1020, '8', 'detail', 'Colonial Red', 'No. 20109', '#BD5338', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1021, '8', 'detail', 'Safety Red', 'No. 31350', '#BE1623', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1022, '8', 'detail', 'Dark Grey', 'No. 36118', '#677879', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1023, '8', 'detail', 'Onyx Black', 'No. 17038', '#0B0E0F', NULL, '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1024, '10', 'detail', 'Federal Yellow', 'No. 33538', '#e7be0f', NULL, '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1025, '10', 'detail', 'Brick Red', 'No. 22144', '#D0482C', NULL, '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1026, '10', 'detail', 'Colonial Red', 'No. 20109', '#BD5338', NULL, '2019-10-10 05:17:49', '2019-10-10 05:17:49'),
(1027, '10', 'detail', 'Safety Red', 'No. 31350', '#BE1623', NULL, '2019-10-10 05:17:49', '2019-10-10 05:17:49'),
(1028, '10', 'detail', 'Dark Grey', 'No. 36118', '#677879', NULL, '2019-10-10 05:17:49', '2019-10-10 05:17:49'),
(1029, '10', 'detail', 'Onyx Black', 'No. 17038', '#0B0E0F', NULL, '2019-10-10 05:17:49', '2019-10-10 05:17:49'),
(1031, '12', 'detail', 'Federal Yellow', 'No. 33538', '#e7be0f', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1032, '12', 'detail', 'Brick Red', 'No. 22144', '#D0482C', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1033, '12', 'detail', 'Colonial Red', 'No. 20109', '#BD5338', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1034, '12', 'detail', 'Safety Red', 'No. 31350', '#BE1623', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1035, '12', 'detail', 'Dark Grey', 'No. 36118', '#677879', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1036, '12', 'detail', 'Onyx Black', 'No. 17038', '#0B0E0F', NULL, '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1037, '13', 'detail', 'Federal Yellow', 'No. 33538', '#e7be0f', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1038, '13', 'detail', 'Brick Red', 'No. 22144', '#D0482C', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1039, '13', 'detail', 'Colonial Red', 'No. 20109', '#BD5338', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1040, '13', 'detail', 'Safety Red', 'No. 31350', '#BE1623', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1041, '13', 'detail', 'Dark Grey', 'No. 36118', '#677879', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1042, '13', 'detail', 'Onyx Black', 'No. 17038', '#0B0E0F', NULL, '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1102, '15', 'detail', NULL, NULL, '#CDA159', NULL, '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1103, '15', 'detail', NULL, NULL, '#E9E6DF', NULL, '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1104, '15', 'detail', NULL, NULL, '#263970', NULL, '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1105, '15', 'detail', NULL, NULL, '#B92125', NULL, '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1106, '15', 'detail', NULL, NULL, '#151113', NULL, '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1107, '14', 'detail', 'Federal Yellow', 'No. 33538', '#e7be0f', NULL, '2019-10-11 06:13:57', '2019-10-11 06:13:57'),
(1109, '16', 'detail', 'Stainless Steel', NULL, '#9ea2a2', NULL, '2019-10-11 06:20:51', '2019-10-11 06:20:51'),
(1114, '1', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1115, '1', 'sub-category', 'Ochre Yellow', 'No. 23594', '#f9dfa4', 'OCR', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1116, '1', 'sub-category', 'Brick Red', 'No. 22144', '#D0482C', 'RD', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1117, '1', 'sub-category', 'Colonial Red', 'No. 20109', '#BD5338', 'COL', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1118, '1', 'sub-category', 'Safety Red', 'No. 31350', '#BE1623', 'SR', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1119, '1', 'sub-category', 'Ocean Blue', 'No. 15187', '#3482B4', 'BL', '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(1120, '1', 'sub-category', 'Dark Grey', 'No. 36118', '#677879', 'DG', '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(1121, '1', 'sub-category', 'Light Grey', 'No. 26280', '#748993', 'LG', '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(1122, '1', 'sub-category', 'Pearl White', 'No. 37875', '#F6F7F8', 'WH', '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(1123, '1', 'sub-category', 'Onyx Black', 'No. 17038', '#0B0E0F', 'BK', '2019-10-11 06:36:55', '2019-10-11 06:36:55'),
(1124, '2', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1125, '2', 'sub-category', 'Ochre Yellow', 'No. 23594', '#f9dfa4', 'OCR', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1126, '2', 'sub-category', 'Brick Red', 'No. 22144', '#D0482C', 'RD', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1127, '2', 'sub-category', 'Colonial Red', 'No. 20109', '#BD5338', 'COL', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1128, '2', 'sub-category', 'Safety Red', 'No. 31350', '#BE1623', 'SR', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1129, '2', 'sub-category', 'Ocean Blue', 'No. 15187', '#3482B4', 'BL', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1130, '2', 'sub-category', 'Dark Grey', 'No. 36118', '#677879', 'DG', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1131, '2', 'sub-category', 'Light Grey', 'No. 26280', '#748993', 'LG', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1132, '2', 'sub-category', 'Pearl White', 'No. 37875', '#F6F7F8', 'WH', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1133, '2', 'sub-category', 'Onyx Black', 'No. 17038', '#0B0E0F', 'BK', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1134, '3', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(1135, '4', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:39:19', '2019-10-11 06:39:19'),
(1136, '5', 'sub-category', 'Dark Grey', NULL, '#95A090', 'DG', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1137, '5', 'sub-category', 'Federal Yellow', NULL, '#FFF100', 'YW', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1138, '5', 'sub-category', 'Brick Red', NULL, '#D2232B', 'RD', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1139, '5', 'sub-category', 'Onyx Black', NULL, '#231F20', 'BK', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1145, '6', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:40:55', '2019-10-11 06:40:55'),
(1146, '7', 'sub-category', 'Ivory', NULL, '#F5F4F4', 'WH', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1147, '7', 'sub-category', 'Vogue Black', NULL, '#3F3E40', 'BK', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1148, '7', 'sub-category', 'Smoke Grey', NULL, '#949599', 'SG', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1149, '7', 'sub-category', 'HiVis Yellow', NULL, '#FFDF44', 'YW', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1150, '8', 'sub-category', 'Ivory', NULL, '#F5F4F4', 'WH', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1151, '8', 'sub-category', 'Vogue Black', NULL, '#3F3E40', 'BK', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1152, '8', 'sub-category', 'Smoke Grey', NULL, '#949599', 'SG', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1153, '8', 'sub-category', 'HiVis Yellow', NULL, '#FFDF44', 'YW', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1154, '9', 'sub-category', 'Cultured Grey', NULL, '#95989B', 'DG', '2019-10-11 06:42:34', '2019-10-11 06:42:34'),
(1155, '9', 'sub-category', 'Vogue Black', NULL, '#3F4040', 'BK', '2019-10-11 06:42:34', '2019-10-11 06:42:34'),
(1156, '9', 'sub-category', 'Sand Stone', NULL, '#E9DEC7', 'ST', '2019-10-11 06:42:34', '2019-10-11 06:42:34'),
(1157, '10', 'sub-category', 'Cultured Grey', NULL, '#95989B', 'DG', '2019-10-11 06:43:05', '2019-10-11 06:43:05'),
(1158, '10', 'sub-category', 'Vogue Black', NULL, '#3F4040', 'BK', '2019-10-11 06:43:05', '2019-10-11 06:43:05'),
(1159, '10', 'sub-category', 'Sand Stone', NULL, '#E9DEC7', 'ST', '2019-10-11 06:43:05', '2019-10-11 06:43:05'),
(1160, '15', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:44:19', '2019-10-11 06:44:19'),
(1161, '16', 'sub-category', 'Federal Yellow', 'No. 33538', '#e7be0f', 'YW', '2019-10-11 06:44:28', '2019-10-11 06:44:28'),
(1182, '11', 'detail', 'Stainless Steel', NULL, '#9ea2a2', 'empty', '2019-10-11 23:54:28', '2019-10-11 23:54:28'),
(1203, '14', 'sub-category', 'Black', NULL, '#000000', NULL, '2019-10-17 06:20:34', '2019-10-17 06:20:34'),
(1204, '14', 'sub-category', 'Grey', NULL, '#808080', NULL, '2019-10-17 06:20:34', '2019-10-17 06:20:34'),
(1205, '14', 'sub-category', 'Yellow', NULL, '#FFFF00', NULL, '2019-10-17 06:20:34', '2019-10-17 06:20:34'),
(1206, '12', 'sub-category', 'Black', NULL, '#000000', NULL, '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1207, '12', 'sub-category', 'Grey', NULL, '#808080', NULL, '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1208, '12', 'sub-category', 'Yellow', NULL, '#FFFF00', NULL, '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1209, '13', 'sub-category', 'Black', NULL, '#000000', NULL, '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1210, '13', 'sub-category', 'Grey', NULL, '#808080', NULL, '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1211, '13', 'sub-category', 'Yellow', NULL, '#FFFF00', NULL, '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1212, '11', 'sub-category', 'Black', NULL, '#000000', NULL, '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1213, '11', 'sub-category', 'Grey', NULL, '#808080', NULL, '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1214, '11', 'sub-category', 'Yellow', NULL, '#FFFF00', NULL, '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1215, '17', 'sub-category', 'ff', 'ff', 'ff', NULL, '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1217, '18', 'sub-category', 'Green', NULL, '#008000', NULL, '2019-10-18 01:59:19', '2019-10-18 01:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `csc_details`
--

CREATE TABLE `csc_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `put_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_price` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `application` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_details`
--

INSERT INTO `csc_details` (`id`, `put_type`, `product_material`, `attention`, `banner_image`, `alt_banner_image`, `sub_category_id`, `title`, `slug`, `price`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(8, 'Wet Concrete', 'Polymer', 'Attention', '1565256446.png', 'banner image', '15', 'Attention Domes', 'attention-domes', 'From: $18.09 Per sqft', '<p>Access Tile Cast in Place Replaceable Tactile Attention Domes are setting the standard for durability and detectability in tactile systems. The Cast in Place truncated attention domes are Canadian accessibility code compliant, suitable for all environments delivering the highest quality of tactile infrastructure product solutions. The Access Tile Replaceable Cast in Place attention domes are installed into wet set concrete at buildings exits into areas with moving vehicles. The detectable warning surfaces visually contrast the ground and provide a differed texture to act as a warning to the surrounding area allowing the public to safely navigate their environment. These Replaceable Cast in Place tactile surface indicators act as a detectable tile warning system that are durable and proven to be resistant to weather and wear and tear. Access Tile Replaceable Cast in Place truncated attention domes are designed for new wet set projects such as pedestrian crossings with tiles available in eight different sizes and six different colours to meet your specification needs. This detectable warning design provides a safe and accessible barrier free path for pedestrians to cross.</p>', '<p>&bull; &nbsp;The most cost effective method of new&nbsp;curb ramp applications<br />\r\n&bull; &nbsp;A smooth transition that meets&nbsp;Canadian Accessibility Codes<br />\r\n&bull; &nbsp;Light weight and easy to handle<br />\r\n&bull; &nbsp;Easily cut to conform to various sizes&nbsp;and radius ramps<br />\r\n&bull; &nbsp;Available as a standard radius tile<br />\r\n&bull; &nbsp;Available in eight (8) different sizes to&nbsp;meet your needs<br />\r\n&bull; &nbsp;Comes in six (6) standard colours with&nbsp;Federal colour identification numbers<br />\r\n&bull;&nbsp; &nbsp;5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/3.png\" /></p>', '<p>&bull; &nbsp;Accessible curb ramps align with the safe&nbsp;pedestrian crossing &nbsp; route across the vehicle&nbsp;roadway.<br />\r\n&bull; &nbsp;An entry into a vehicular route or area where&nbsp;no curbs or other elements separate it from&nbsp;pedestrian route such as curb ramps, wheel&nbsp;chair ramps, top of stairs/escalators and&nbsp;blended transitions.<br />\r\n&bull; &nbsp;An unprotected drop off edge, such as a&nbsp;transit platform where the change in elevation&nbsp;is greater than 250mm or the slope is steeper&nbsp;than in a ratio of 1:3 (33%).<br />\r\n&bull; &nbsp;The unprotected edges of a reflecting pool.</p>', '1565326528.jpg', 'dgdg', 'Code Compliant TWSI Attention Domes Tile | Tactile Solutions', '<p>We bring the Canadian accessibility code compliant Access Cast in Place attention domes in different sizes and colors for safe pathways for the visually impaired.</p>', 'TWSI attention domes tile, Code Compliant TWSI Attention Domes Tile', '2019-08-08 03:57:26', '2019-10-10 05:12:57'),
(10, 'Glue it on top of existent surface', 'Polymer', 'Attention', '1565256636.png', 'banner image', '16', 'Attention Domes', 'attention-domes', 'From: $18.09 Per sqft', '<p>Access Tile Surface Applied Domes are the industry leader in affordable detectable warning tiles perfect for any retrofit job. The tactile walking surface indicators (TWSI) are slip resistant, corrosion resistant, abrasion resistance ensuring all truncated domes are durable against wear and tear maximizing the longevity of the detectable warning pads. The Surface Applied truncated attention domes can be applied in many situations including: multimodal transit stations, curb ramps, accessible pedestrian crossings, parking areas, tops and bottoms of stair landings, escalator approaches and many more to warn the public when they have reached an unsafe edge. The Tactile attention domes are especially useful for those with visual impairments as they can be felt through footwear, as well as designed with unique sound reflection for those with guidance canes to safely differentiate between Access Tile surface applied tile and concrete allowing for safe and detectable navigation of curb endings. Access Tile Surface applied truncated attention domes are available in 8 different colours to provide visual contrast warning the public when they have reached an unsafe edge</p>', '<p>&bull; &nbsp;A cost effective method of retrofitting an&nbsp;existing curb ramp application<br />\r\n&bull; &nbsp;A complete system is shipped with the&nbsp;tiles; adhesive &amp; colour match fasteners<br />\r\n&bull; &nbsp;Beveled edges make for a smooth&nbsp;transition that meets Canadian&nbsp;Accessibility Codes<br />\r\n&bull; &nbsp;Light weight and easy to handle<br />\r\n&bull; &nbsp;Easily cut to conform to various sizes&nbsp;and radius ramps<br />\r\n&bull; &nbsp;Available as a standard radius tile<br />\r\n&bull; &nbsp;Available in eight (8) different sizes to&nbsp;meet your needs<br />\r\n&bull; &nbsp;Comes in six (6) standard colours with&nbsp;Federal colour identification numbers<br />\r\n&bull; &nbsp;5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/6.png\" /></p>', '<p>&bull; &nbsp;Accessible curb ramps align with the safe&nbsp;pedestrian crossing route across the vehicle&nbsp;roadway.<br />\r\n&bull; &nbsp;An entry into a vehicular route or area where&nbsp;no curbs or other elements separate it from&nbsp;pedestrian route such as curb ramps, wheel&nbsp;chair ramps, top of stairs/escalators and&nbsp;blended transitions.<br />\r\n&bull; &nbsp;An unprotected drop off edge, such as a&nbsp;transit platform where the change in elevation&nbsp;is greater than 250mm or the slope is steeper&nbsp;than in a ratio of 1:3 (33%).<br />\r\n&bull; &nbsp;The unprotected edges of a reflecting pool.</p>', '1565327009.jpg', 'Alt Image', 'CSA Attention Domes Tiles | Access Tile Surface Applied tiles', '<p>Tactile Solutions provides Access Surface Applied attention domes tiles that are durable against wear &amp; tear and indicates the visually impaired about certain spots.</p>', 'CSA attention domes tiles, Access Tile Surface Applied tiles', '2019-08-08 04:00:36', '2019-10-10 05:17:48'),
(11, 'Wet Concrete', 'Stainless Steel', 'Attention', '1565264505.png', 'baaneer', '4', 'One Plate With Domes', 'one-plate-with-domes', 'From: $116.70 Per sqft', '<p>Advantage ONE Plate&trade; Tactile Walking Surface Indicators<br />\r\n(TWSI) have been designed for all interior accessibility solutions.<br />\r\nAdvantage ONE Plate&trade; indicators are machined from a solid piece of 316L Marine Grade Stainless Steel and fastened to a solid Stainless Steel Plate.&nbsp;<br />\r\nThis process enhances the aesthetics of the tile, but also have been proven to be strong and durable.<br />\r\nAdvantage ONE Plate&trade; incorporates an integral texture in the stainless steel for permanent slip resistance.&nbsp;<br />\r\nOur products have undergone a rigorous series of tests to ensure that they meet and exceed guidelines developed by the AODA, CSA, ISO, and<br />\r\nprovincial and national building codes.&nbsp;<br />\r\nAdvantage ONE&trade; TWSI products offer the lowest lifecycle cost, and eliminates long term safety concerns and accessibility limitations.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', '<p>&bull; 316L, Marine grade stainless steel<br />\r\n&bull; Innovative adhesive capture design<br />\r\n&bull; Optimum anti-slip design<br />\r\n&bull; Resistant to heavy traffic abuse and maintenance machinery<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty<br />\r\n&bull; Domes come in the following styles:<br />\r\n- Concentric Rings Pattern<br />\r\n- Crosshatch Pattern<br />\r\n- Carborundum &ndash; Non-Slip</p>', '<p><img alt=\"\" src=\"https://tactilesolution.ca/public/images/product/static/11.png\" /></p>', '<p>&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.</p>', '1566961658.jpg', 'Image', 'Code Compliant Advantage Steel Cast In Place Attention Domes Tile', '<p>We bring the code compliant Advantage Steel Cast in Place Attention domes tile with wear and tear resistance, corrosion resistance and maximized longevity.</p>', 'advantage steel cast in place attention domes Tile, Code Compliant Advantage Steel Cast In Place Attention Domes Tile', '2019-08-08 06:11:45', '2019-10-11 23:54:28'),
(12, 'Wet Concrete', 'Polymer', 'Wayfinding', '1565264739.png', 'banner image', '15', 'Wayfinding Bars', 'wayfinding-bars', 'From: $25.06 Per sqft', '<p>Access Tiles Surface Applied Directional Wayfinding Tiles (Directional Bar Tiles) are specifically designed to work in unison with truncated attention dome tiles. These Canadian accessibility code compliant wayfinding bars are designed to lead the public between spaces and follow the desired path safely. These (TWSI) tactile walking surface indicators use a series of bar shaped tactile surfaces creating a detectable path. These paths are created with truncated attention dome tiles to indicate where the path begins, ends or splits so the visually impaired can orient themselves to follow their desired path. Access Tile detectable directional warning pad is cost effective, light weight and extremely durable used with truncated attention dome tiles to create fully accessible pathways around any pace and to alert pedestrians of a paths end. Access Tile Direction Wayfinding bars are offered in Replaceable Cast in Place tiles and Surface Applied Tiles.</p>', '<p>&bull; A cost effective method of retrofitting existing sidewalks<br />\r\n&bull; &nbsp;Cast in place replaceable and surface applied options<br />\r\n&bull; A complete system is shipped with&nbsp;the tiles; adhesive &amp; colour match fasteners/anchors<br />\r\n&bull; Light weight and easy to handle<br />\r\n&bull; Easily cut to conform to various sizes&nbsp;and radius ramps<br />\r\n&bull; Comes in six (6) standard colours with&nbsp;Federal colour identification numbers<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/4.png\" /></p>', '<p>&bull; &nbsp;Located in large open floor areas, such as&nbsp;shopping malls or transportation terminals, to&nbsp;facilitate wayfinding by indicating the primary&nbsp;routes of travel.<br />\r\n&bull; &nbsp;The indicated routes should lead from the&nbsp;entrance to major destinations, such as&nbsp;an information kiosk, registration desk,&nbsp;stairway, elevator, scalators, or to store or service doors.</p>', '1565326658.jpg', 'imge', 'Access Cast In Place Wayfinding Bars Tile | Tactile Solutions', '<p>Tactile Solutions brings the ISO code compliant Access Cast in Place wayfinding bars for the safety of the visually impaired pedestrians at specific unsafe spots.</p>', 'Access Cast in Place Wayfinding bars Tile, ISO Wayfinding bars tiles', '2019-08-08 06:15:39', '2019-10-10 05:44:47'),
(13, 'Glue it on top of existent surface', 'Polymer', 'Wayfinding', '1565264782.png', 'ddfdfd', '16', 'Wayfinding Bars', 'wayfinding-bars', 'From: $25.06 Per sqft', '<p>Access Tiles Surface Applied Directional Wayfinding Tiles (Directional Bar Tiles) are specifically designed to work in unison with truncated attention dome tiles. These Canadian accessibility code compliant wayfinding bars are designed to lead the public between spaces and follow the desired path safely. These (TWSI) tactile walking surface indicators use a series of bar shaped tactile surfaces creating a detectable path. These paths are created with truncated attention dome tiles to indicate where the path begins, ends or splits so the visually impaired can orient themselves to follow their desired path. Access Tile detectable directional warning pad is cost effective, light weight and extremely durable used with truncated attention dome tiles to create fully accessible pathways around any pace and to alert pedestrians of a paths end. Access Tile Direction Wayfinding bars are offered in Replaceable Cast in Place tiles and Surface Applied Tiles.</p>', '<p>&bull; &nbsp;A cost effective method of retrofitting an&nbsp;existing curb ramp application<br />\r\n&bull; &nbsp;A complete system is shipped with the&nbsp;tiles; adhesive &amp; colour match fasteners<br />\r\n&bull; &nbsp;Beveled edges make for a smooth&nbsp;transition that meets Canadian&nbsp;Accessibility Codes<br />\r\n&bull; &nbsp;Light weight and easy to handle<br />\r\n&bull; &nbsp;Easily cut to conform to various sizes&nbsp;and radius ramps<br />\r\n&bull; &nbsp; Available as a standard radius tile<br />\r\n&bull; &nbsp; Available in eight (8) different sizes to&nbsp;meet your needs<br />\r\n&bull; &nbsp; &nbsp;Comes in six (6) standard colours with&nbsp;Federal colour identification numbers<br />\r\n&bull; &nbsp; &nbsp;5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/5.png\" /></p>', '<p>&bull; &nbsp;Located in large open floor areas, such as shopping malls or transportation terminals, to facilitate wayfinding by indicating the primary&nbsp;routes of travel.<br />\r\n&bull; &nbsp;The indicated routes should lead from the&nbsp;entrance to major destinations, such as&nbsp;an information kiosk, registration desk, stairway, elevator, escalators, or to store&nbsp;or service doors.</p>', '1565264782.png', 'ffdfd', 'Surface Applied Wayfinding Bars Tiles | Tactile Solutions', '<p>The code compliant Access Surface Applied wayfinding bars tiles available at Tactile Solutions are durable &amp; weather resistant &amp; best for wayfinding for the blind.</p>', 'surface applied wayfinding bars tiles', '2019-08-08 06:16:22', '2019-10-10 05:45:30'),
(14, 'Drill Single Domes or Bars', 'Stainless Steel', 'Wayfinding', '1565265094.png', 'Banner Image', '6', 'Stainless Steel Bars', 'stainless-steel-bars', 'From: $17.40', '<p>The Advantage One Stainless Steel Wayfinding Individual Bars Tactile System incorporates an integral texture in the stainless steel for permanent slip resistance. The Individual Wayfinding Bars are the leading industry standard for detectable warning products; proven for durability exceeding any detectable warning product on the market. Advantage One Individual Wayfinding bars are drilled and fastened directly into the ground creating a safe pathway/guidance indicator system, designed for all interior accessibility solutions</p>', '<p>&bull; 316L, Marine grade stainless steel<br />\r\n&bull; Innovative adhesive capture design<br />\r\n&bull; Optimum anti-slip design<br />\r\n&bull; Resistant to heavy traffic abuse and maintenance machinery<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty<br />\r\n&bull; Bars come in the following styles:<br />\r\n- Linear Grooves<br />\r\n- Crosshatch Pattern<br />\r\n- Carborundum &ndash; Non-Slip</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/9.png\" /></p>', '<p>&bull; Located in large open floor in large open floor areas, such as shopping malls or transportation terminals, to facilitate wayfinding by indicating the primary routes of travel.<br />\r\n&bull; The indicated routes should lead from the entrance to major destinations, such as an information kiosk, registration desk, stairway, elevator, escalators, or to store or service doors.</p>', '1565271651.jpg', 'Image', 'AODA Advantage Stainless Steel Bars | Single Domes & Bars', '<p>Tactile Solutions brings the code compliant Advantage stainless steel single domes &amp; bars with permanent slip resistance for creating safe pathways for the blind.</p>', 'AODA Advantage Stainless Steel Bars, Single Domes & Bars', '2019-08-08 06:21:34', '2019-10-11 06:13:57'),
(15, 'Drill Single Domes or Bars', 'Stainless Steel', 'Attention', '1565265097.png', 'Banner Image', '6', 'Stainless Steel Domes', 'stainless-steel-domes', 'From: $1.99', '<p>The Advantage One Stainless Steel Dome Tactile System incorporates an integral texture in the stainless steel for permanent slip resistance. The Individual Attention Domes are the leading industry standard for detectable warning products; proven for durability exceeding any detectable warning product on the market. Advantage One Individual Attention Domes are drilled and fastened directly into the ground and designed for all interior accessibility solutions.<br />\r\n<br />\r\n<br />\r\n&nbsp;</p>', '<p>&bull; 316L, Marine grade stainless steel<br />\r\n&bull; Innovative adhesive capture design<br />\r\n&bull; Optimum anti-slip design<br />\r\n&bull; Resistant to heavy traffic abuse and maintenance machinery<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty<br />\r\n&bull; Domes come in the following styles:<br />\r\n- Concentric Rings Pattern<br />\r\n- Crosshatch Pattern<br />\r\n- Carborundum &ndash; Non-Slip</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/8.png\" /></p>', '<p>&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.</p>', '1565271607.jpg', 'image', 'Advantage Stainless Steel Domes Ontario | Single Domes & Bars', '<p>Our code compliant stainless steel Advantage single domes &amp; bars can be easily drilled and fastened into the ground providing safe accessibility to the blind.</p>', 'Advantage Stainless Steel Domes Ontario, Single Domes & Bars', '2019-08-08 06:21:37', '2019-10-11 06:11:26'),
(16, 'Wet Concrete', 'Stainless Steel', 'Wayfinding', '1565265101.png', 'Banner Image', '4', 'One Plate With Bars', 'one-plate-with-bars', 'From: $138.87 Per sqft', '<p>Advantage ONE Plate&trade; Tactile Walking Surface Indicators<br />\r\n(TWSI) have been designed for all interior accessibility solutions.<br />\r\nAdvantage ONE Plate&trade; indicators are machined from a solid piece of 316L Marine Grade Stainless Steel and fastened to a solid Stainless Steel Plate.&nbsp;<br />\r\nThis process enhances the aesthetics of the tile, but also have been proven to be strong and durable.<br />\r\nAdvantage ONE Plate&trade; incorporates an integral texture in the stainless steel for permanent slip resistance.&nbsp;<br />\r\nOur products have undergone a rigorous series of tests to ensure that they meet and exceed guidelines developed by the AODA, CSA, ISO, and<br />\r\nprovincial and national building codes.&nbsp;<br />\r\nAdvantage ONE&trade; TWSI products offer the lowest lifecycle cost, and eliminates long term safety concerns and accessibility limitations.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', '<p>&bull; 316L, Marine grade stainless steel<br />\r\n&bull; Innovative adhesive capture design<br />\r\n&bull; Optimum anti-slip design<br />\r\n&bull; Resistant to heavy traffic abuse and maintenance machinery<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty<br />\r\n&bull; Bars come in the following styles:<br />\r\n- Linear Grooves<br />\r\n- Crosshatch Pattern<br />\r\n- Carborundum &ndash; Non-Slip</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/10.png\" /></p>', '<p>&bull; Located in large open floor in large open floor areas, such as shopping malls or transportation terminals, to facilitate wayfinding by indicating the primary routes of travel.<br />\r\n&bull; The indicated routes should lead from the entrance to major destinations, such as an information kiosk, registration desk, stairway, elevator, escalators, or to store or service doors.</p>', '1565271446.jpg', 'Image', 'Advantages Steel Cast In Place Wayfinding Bars | Steel Cast In Place', '<p>Tactile Solutions comes up with the AODA code compliant Advantage Steel Cast in Place wayfinding bars with lowest lifecycle cost and permanent slip resistance.</p>', 'advantages steel Cast in Place Wayfinding bars, Steel Cast In Place, AODA steel Cast in Place Wayfinding bars', '2019-08-08 06:21:41', '2019-10-11 06:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `csc_sub_categories`
--

CREATE TABLE `csc_sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `put_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_price` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `application` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_sub_categories`
--

INSERT INTO `csc_sub_categories` (`id`, `put_type`, `photo`, `attention`, `product_material`, `banner_image`, `alt_banner_image`, `category_id`, `title`, `slug`, `price`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Wet Concrete', NULL, NULL, NULL, '1565093870.png', 'Banner Image', '1', 'Cast-In-Place Tile', 'cast-in-place-tile', 'From: $25.92 Per sqft', '<p>Armor-Tile Cast in Place takes pride in being the leading manufacturer for tactile walking surface indicator systems. The Armor-Tile Cast in place truncated domes are made from a diamond-hard vitrified polymer composite making them the industry leader for their durability, strength, weather and wear resistance. The truncated domes are available in 10 different colours creating clear boundaries to ensure separation and safety for pedestrian&rsquo;s route from vehicular traffic. The tactile walking surface indicators (TWSI) have many more applications including curb ramps, escalator approaches, parking areas, transit platforms, top of stair landings/wheelchair ramps, multimodal transit stations, pedestrian crossings and vehicular passage ways. Armor Tile cast in place domes are in full compliance with Canadian accessibility codes AODA, CSA, ISO, provincial and national building codes (Ontario&rsquo;s tactile walking surface indicators).&nbsp;</p>', '<p>&bull; The most cost-effective method of new curb ramps&nbsp;<br />\r\n&bull; A smooth transition that meets Canadian Accessibility Codes&nbsp;<br />\r\n&bull; Light weight and easy to handle&nbsp;<br />\r\n&bull; Easily cut to conform to various sizes and radius ramps&nbsp;<br />\r\n&bull; Available in seven (7) different sizes to meet your needs&nbsp;<br />\r\n&bull; Comes in ten (10) standard colours with Federal colour identification numbers&nbsp;<br />\r\n&bull; Advanced Warning Strip &ndash; 75 mm x 1220 mm can be used to create a colour contrast around the TWSI&nbsp;<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/2.png\" /></p>', '<p>&bull; &nbsp;Accessible curb ramps align with the safe pedestrian&nbsp;crossing &nbsp; route across the vehicle roadway.<br />\r\n&bull; &nbsp;An entry into a vehicular route or area where no&nbsp;curbs or other elements separate it from pedestrian&nbsp;route such as curb ramps, wheel chair ramps, top of&nbsp;stairs/escalators and blended transitions.<br />\r\n&bull; &nbsp;An unprotected drop off edge, such as a transit&nbsp;platform where the change in elevation is greater&nbsp;than 250mm or the slope is steeper than in a ratio of&nbsp;1:3 (33%).<br />\r\n&bull; &nbsp;The unprotected edges of a reflecting pool.</p>', '1565265954.jpg', 'Image', 'AODA Armor-Tile Cast in Place Indicators | Tactile Solutions', '<p>The AODA code compliant Armor- Tile Cast in Place indicators by Tactile Solutions can be easily installed when creating new surfaces at curb ramps or parking areas.</p>', 'Armor-Tile Cast in Place Indicators,   AODA Cast in Place surface Indicators', '2019-08-06 06:47:50', '2019-10-11 06:36:54'),
(2, 'Glue it on top of existent surface', NULL, NULL, NULL, '1565184073.png', 'Surface Applied Tile', '1', 'Surface Applied Tile', 'surface-applied-tile', 'From: $26.07 Per sqft', '<p>Armor-Tile Surface Applied takes pride in being the leading manufacturer for tactile walking surface indicator systems. The Armor-Tile Surface Applied truncated domes are a diamond-hard vitrified polymer composite setting the benchmark for durability and detectability in tactile systems. The Armor-Tile surface applied tiles provide a cost-effective method for retrofitting existing sidewalks. These surface applied tiles are available in 10 different colours creating clear boundaries to ensure separation and safety for pedestrian&rsquo;s route from vehicular traffic or other potentially hazardous obstacles. The tactile walking surface indicators (TWSI) can be used for a variety applications including curb ramps, escalator approaches, parking areas, transit platforms, top of stair landings/wheelchair ramps, multimodal transit stations, pedestrian crossings and vehicular passage ways. Armor-Tile surface applied products are in full compliance with Canadian accessibility codes AODA, CSA, ISO, provincial and national building codes (ontarios tactile walking surface indicators).&nbsp;</p>', '<p>&bull; A cost effective method of retrofitting existing sidewalks<br />\r\n&bull; A complete system is shipped with the tiles; adhesive &amp; fasteners<br />\r\n&bull; Beveled edges make for a smooth transition that meets Canadian Accessibility Codes<br />\r\n&bull; Light weight and easy to handle&nbsp;<br />\r\n&bull; Easily cut to conform to various sizes and radius ramps<br />\r\n&bull; Available in six (6) different sixes to meet your needs<br />\r\n&bull; Comes in ten (10) standard colours with Federal colour identification numbers<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/1.png\" style=\"height:718px; width:709px\" /></p>', '<p>&bull; Accessible curb ramps align with the safe pedestrian crossing route across the vehicle roadway.<br />\r\n&bull; An entry into a vehicular route or area where no curbs or other elements separate it from pedestrian route such as curb ramps, wheel chair ramps, top of stairs/escalators and blended transitions.<br />\r\n&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.</p>', '1565266003.jpg', 'Surface Applied Tile', 'Tactile Walking Surface Indicators | Armor-Tile Surface Applied', '<p>Go for code compliant Armor surface applied tactile surface indicators for the installation at existing surfaces, with availability in different color variants.</p>', 'Armor-Tile Surface Applied, tactile walking surface indicators (TWSI), ISO tactile walking surface indicators', '2019-08-07 07:51:13', '2019-10-11 06:38:51'),
(3, 'Glue it on top of existent surface', NULL, 'Attention', NULL, '1565247281.png', 'Fire Resistant Surface', '2', 'Fire Resistant Surface Applied Tile with Attention Domes', 'fire-resistant-surface-applied-tile-with-attention-domes', 'From: $30.78 Per sqft', '<p>Access Tile Surface Applied Fire Retardant FIRESENTRY-X Composite Technology offers maximum resistance against fire. Access Tile Fire Resistant FR meets ULC-S 102.2 fire standard at less than 25 flames and less than 50 smoke. This Surface Applied fire-resistant tile is the first composite tile meeting the Ontario building code requirements. Access Tile FR is the cost effective interior solution for applying TWSI tactile warning surface indicators for tactile warning floor surfaces at exit stair wells, vestibules to exit stairs and lobby&rsquo;s as well as corridors. The Ontario tactile walking surface indicators Surface Applied Fire-Resistant tile comes in 3 different colors and sizes to meet your buildings specifications.</p>', '<p>&bull; A cost effective method of complying with&nbsp;TWSI requirements for interior tactile&nbsp;warning floor surfaces at exit stair wells,&nbsp;vestibules to exit stairs and lobbies, and corridors<br />\r\n&bull; A complete system is shipped with the tiles; adhesive &amp; fasteners<br />\r\n&bull; Beveled edges make for a smooth transition that meets Canadian Accessibility Codes<br />\r\n&bull; Easily cut to conform to various sizes and radius landings<br />\r\n&bull; Available in three (3) different sizes<br />\r\n&bull; Comes in three (3) standard colours with Federal colour identification numbers<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/3.png\" /></p>', '<p>&bull; Specifically designed for interior use in high-rise building applications in compliance with Ontario Building Code.<br />\r\n&bull; For tactile warning floor surface at exit stair wells, vestibules to exit stairs and lobbies, and corridors.</p>', '1565271846.jpg', 'sfsf gdd', 'IFC Fire Resistant Tactile Solution | Ontario Surface Applied Fire-Resistant Tile', '<p>Tactile Solution brings the IFC code compliant Access fire resistant surface applied tiles which becomes the cost-effective interior solutions for applying TWSI.</p>', 'access Tile Surface Applied Fire Retardant, Ontario Surface Applied Fire-Resistant tile, IFC Fire resistant tactile solution, IFC Fire resistant tactile Manitoba', '2019-08-08 01:24:41', '2019-10-11 06:39:08'),
(4, 'Wet Concrete', NULL, NULL, 'Stainless Steel', '1565247713.png', 'Banner Image', '3', 'Steel Cast-In-Place', 'steel-cast-in-place', 'From: $116.70 Per sqft', '<p>Advantage One Stainless Steel Bars and Domes tactile walking surface indicators are designed for all interior accessibility solutions. The advantage One plate indicators are machined from a solid piece of 316L Marine Grade stainless steel and fastened to a Stainless-Steel plate that will be applied to the floor, offered as either attention domes or wayfinding bars. The Advantage One plate incorporates a texture into the stainless steel for permanent slip resistance while enhancing the aesthetics of the tile. The Advantage One attention dome and wayfinding bar plates are in full compliance with Canadians Accessibility codes while offering the lowest life cycle cost eliminating long term safety concerns and accessibility limitations.&nbsp;</p>\r\n\r\n<p>Advantage One Stainless Steel Wayfinding Bars and Attention Dome Plates applications:&nbsp;<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', '<p>.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565271319.jpg', 'Image', 'Code Compliant Advantage Steel Cast In Place Tile', '<p>The code compliant Advantage Steel Cast in Place Tiles are available at Tactile Solutions for long term safety concerns and also enhancing the aesthetics.</p>', 'advantage stainless steel domes Ontario, Code Compliant Advantage Steel Cast In Place Tile', '2019-08-08 01:31:53', '2019-10-11 06:39:19'),
(5, 'Wet Concrete', NULL, NULL, NULL, '1565247716.png', 'Banner Image', '3', 'Cast Iron Cast-In-Place', 'cast-iron-cast-in-place', 'From: $29.17 Per sqft', '<p>Advantage&trade; Cast Iron Tactile Walking Surface Indicator (TWSI) plates are manufactured in strict accordance with ASTM A-48, Class 35B Grey Cast Iron.&nbsp;<br />\r\nThe Advantage&trade; Cast in Place System is lightweight with exceptional high strength, and utilizes the most advanced metallurgical Engineering Science and Technology to meet and exceed the most stringent municipal standards.&nbsp;<br />\r\nAdvantage&trade; Cast Iron is aesthetically pleasing, has exceptional longevity and incorporates integral texture for a permanent slip resistant surface.</p>', '<p>&bull; &nbsp;Lightweight and easy to install<br />\r\n&bull; &nbsp;Bolted connection allows for easy&nbsp;connectability between two or&nbsp;more plates<br />\r\n&bull; &nbsp;Available in various sizes and radii<br />\r\n&bull; &nbsp;Engineered to endure the toughest&nbsp;conditions such as snow plows,&nbsp;overweight vehicular loads and&nbsp;heavy pedestrian traffic<br />\r\n&bull; &nbsp;Maintenance-free natural patina<br />\r\n&bull; &nbsp;ASTM A48, Class 35B Grey Cast&nbsp;Iron<br />\r\n&bull; &nbsp;Can be recycled after its lifecycle<br />\r\n&bull; &nbsp;Largest selection of standard and&nbsp;radii sizes<br />\r\n&bull; &nbsp;10 year manufacturer&rsquo;s warranty</p>\r\n\r\n<p><strong>4 Colour Options:</strong></p>\r\n\r\n<p>&bull; &nbsp;Standard Uncoated Natural Patina<br />\r\n&bull; &nbsp;Federal Yellow -&nbsp;color surcharge of $25 applies﻿<br />\r\n&bull; &nbsp;Safety Red -&nbsp;color surcharge of $25 applies﻿<br />\r\n&bull; &nbsp;Onyx Black -&nbsp;color surcharge of $25 applies﻿</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/7.png\" /></p>', '<p>&bull; Accessible curb ramps align with the safe pedestrian crossing route across the vehicle roadway.<br />\r\n&bull; An entry into a vehicular route or area where no curbs or other elements separate it from pedestrian route such as curb ramps, wheel chair ramps, top of stairs/escalators and blended transitions.<br />\r\n&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250 mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.</p>', '1565271267.jpg', 'Image', 'Advantage Cast Iron Tactile Walking Surface Indicator | Tactile Systems', '<p>Tactile Solutions provides the code compliant Advantage Cast in Place tactile walking surface indicators which is aesthetically pleasing &amp; is also slip resistant.</p>', 'Advantage Cast Iron Tactile Walking Surface Indicator, CSA advantage tactile Systems', '2019-08-08 01:31:56', '2019-10-11 06:39:53'),
(6, 'Drill Single Domes or Bars', NULL, NULL, 'Stainless Steel', '1565247718.png', 'Banner Image', '3', 'Single Domes & Bars', 'single-domes-&-bars', 'From: $1.99', '<p>Advantage One Individual Stainless Steel Attention Domes and Wayfinding bars are designed to for interior applications enhancing the look of your project while complying with Canadian accessibility code requirements. The stainless steel individual attention domes and wayfinding bars are composed of a slip resistant micro texture and are available in different sizes and colours. The Advantage one individual attention domes and wayfinding bars are drilled and adhered directly into the ground. The Advantage One Individual Wayfinding Bars and Attention Dome Tactile Walking Surface Indicators (TWSI), provide a reliable solution for interior projects in all spaces meeting Canadian Accessibility regulations, ensuring safety for all pedestrians including the visually impaired, acting as warning indicators and path marking indicators preventing slips, falls and assisted guidance on your desired path.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Advantage One Individual Wayfinding Bars and Attention Domes for the following interior applications and many more:<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', '<p>.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565271502.jpg', 'Image', 'Stainless Steel Attention Domes And Wayfinding | Advantage Single Domes & Bars', '<p>The code compliant Advantage stainless steel attention domes and wayfinding bars by Tactile Solutions are durable &amp; create safe pathways for the visually impaired.</p>', 'Stainless Steel Attention Domes and Wayfinding, advantage Single Domes & Bars', '2019-08-08 01:31:58', '2019-10-11 06:40:55'),
(7, NULL, NULL, 'Wayfinding', NULL, '1565248055.png', 'Banner Image', '4', 'Rubber Wayfinding Bars Tile', 'rubber-wayfinding-bars-tile', 'From: $12.40 Per sqft', '<p>Eon Tile Rubber Wayfinding Bars are durable and flexible tactile indicators perfect for those who design and construct the finest commercial, institutional and public environments. Eon Wayfinding Bar Tiles are made from premium long lasting polymers creating category leading quality with a contemporary look and finish. Eon Tile Wayfinding Bars act as path marking indicators for pedestrians including the visually impaired for safe guidance around various environments. The Eon Tile Wayfinding Bars are fully Compliant with all Canadian Accessibility codes and are available in 4 colours ivory, vogue black, smoke grey and yellow.</p>', '<p>&bull; Made from premium long lasting polymers<br />\r\n&bull; Flexible tiles will form to curved surfaces<br />\r\n&bull; Flexible tiles become stable once bound to most surfaces<br />\r\n&bull; Easily worked and shaped<br />\r\n&bull; Appropriate for both initial installation, and surface retrofit<br />\r\n&bull; UV resistant for colour stability and ensures optimal visual surface contrast<br />\r\n&bull; Conforms to contrast requirements (based on adjacent surfaces)<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/12.png\" /></p>', '<p>&bull; Located in large open floor in large open floor areas, such as shopping malls or transportation terminals, to facilitate wayfinding by indicating the primary routes of travel.<br />\r\n&bull; The indicated routes should lead from the entrance to major destinations, such as an information kiosk, registration desk, stairway, elevator,&nbsp;escalators, or to store or service doors.</p>', '1565265473.jpg', 'Alt Image', 'Code Compliant EON Rubber Wayfinding Bars Tile', '<p>Code compliant EON rubber wayfinding bars tile are available at Tactile Solutions for safe wayfinding for the visually impaired &amp; possess high durability.</p>', 'EON Rubber Wayfinding Bars Tile, Wayfinding Bars Tile, Code Compliant EON Rubber Wayfinding Bars Tile', '2019-08-08 01:37:35', '2019-10-11 06:41:02'),
(8, NULL, NULL, 'Attention', NULL, '1565248059.png', 'Banner Image', '4', 'Rubber Attention Domes Tile', 'rubber-attention-domes-tile', 'From: $12.40 Per sqft', '<p>Eon Tile Rubber Attention Domes are durable and flexible tactile indicators perfect for those who design and construct the finest commercial, institutional and public environments. Eon Attention Dome Tiles are made from premium long lasting polymers creating category leading quality with a contemporary look and finish. Eon Tile Attention Domes act as warning indicators for pedestrians including the visually impaired for unprotected drop off edges or where there are no curbs or elements to separate the pedestrian route from a vehicular traffic route.<br />\r\n<br />\r\n&nbsp;</p>', '<p>&bull; Made from premium long lasting polymers&nbsp;<br />\r\n&bull; Flexible tiles will form to curved surfaces&nbsp;<br />\r\n&bull; Flexible tiles become stable once bound to most surfaces&nbsp;<br />\r\n&bull; Easily worked and shaped&nbsp;<br />\r\n&bull; Appropriate for both initial installation, and surface retrofit&nbsp;<br />\r\n&bull; UV resistant for colour stability and ensures optimal visual surface contrast&nbsp;<br />\r\n&bull; Conforms to contrast requirements (based on adjacent surfaces)&nbsp;<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/13.png\" /></p>', '<p>&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.<br />\r\n&bull; An entry into a vehicular route or area where no curbs or other elements separate it from a pedestrian route such as curb ramps, wheel chair ramps, top of stairs/escalators and blended transitions.</p>', '1566959506.jpg', 'Alt Image', 'AODA EON Rubber Tactile Indicator | Attention Domes Tile', '<p>Tactile Solutions brings the code compliant EON rubber attention domes tiles which are durable &amp; flexible &amp; are the best warning indicators for blind pedestrians.</p>', 'EON Rubber Attention Domes Tile, AODA EON rubber tactile indicator', '2019-08-08 01:37:39', '2019-10-11 06:41:36'),
(9, NULL, NULL, 'Wayfinding', NULL, '1565248313.png', 'Banner Image', '5', 'Porcelain Wayfinding Bar Tile', 'porcelain-wayfinding-bar-tile', 'From: $16.20 Per sqft', '<p>Elan Tile Porcelain Tactile Indicator Wayfindng Bars designed for style and engineered for performance. Elan Tile Wayfindnig Bars incorporate the best raw materials allowing the product to meet the designation of Porcelain Stoneware and is suitable for both interior and exterior applications. Elan Tile Wayfinding Bars offer highly durable and versatile walking surface Direction indicators for Wayfinding ensuring the visually impaired can navigate around their environments effectively and safely. Elan Tile Porcelain Wayfinding Bars create a path for guiding pedestrians towards correctly reaching their desired destinations. Elan Tile Porcelain Wayfinding Bars are designed for safety, convenience and code compliance.</p>', '<p>&bull; Certified porcelain stoneware for maximum durability and surface hardness<br />\r\n&bull; Full body porcelain that gives a highly compact surface with extremely low absorbency characteristics<br />\r\n&bull; Not affected by stains, water or chemicals<br />\r\n&bull; Exceptional resistance to thermal shock, deep abrasions and frost<br />\r\n&bull; R11 finish meets most demanding slip resistance requirements for construction projects in high traffic areas<br />\r\n&bull; Versatile and easy installation for interior and exterior environments<br />\r\n&bull; Field tile available in different sizes<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/14.png\" /></p>', '<p>&bull; Located in large open floor in large open floor areas, such as shopping malls or transportation terminals, to facilitate wayfinding by indicating the primary routes of travel.<br />\r\n&bull; The indicated routes should lead from the entrance to major destinations, such as an information kiosk, registration desk, stairway, elevator, escalators, or to store or service doors.</p>', '1566957020.jpg', 'Alt Image', 'Porcelain Tactile Indicator Wayfindng Bars | Walking Surface Direction Indicators', '<p>Tactile Solutions brings the Elan porcelain wayfinding bar tiles that plays the role of walking surface direction indicators for the visually impaired pedestrians.</p>', 'elan porcelain wayfinding bar tile, Walking Surface Direction Indicators, Porcelain Tactile Indicator Wayfindng Bars', '2019-08-08 01:41:53', '2019-10-11 06:42:34'),
(10, NULL, NULL, 'Attention', NULL, '1565248367.png', 'Banner Image', '5', 'Porcelain Attention Domes Tile', 'porcelain-attention-domes-tile', 'From: $16.20 Per sqft', '<p>Elan Tile Porcelain Tactile Indicator Attention Domes are designed for style and engineered for performance. Elan Tile Attention Domes incorporate the best raw materials allowing the product to meet the designation of Porcelain Stoneware and is suitable for both interior and exterior applications. Elan Tile offers highly durable and versatile walking surface indicators (truncated attention domes) to serve as a warning to all pedestrians of potential hazardous conditions ahead, indicating the end of a curb or an edge drop off. Elan Tile Porcelain Attention Domes are fully Canadian Accessibility code compliant.</p>', '<p>&bull; Certified porcelain stoneware for maximum durability and surface hardness<br />\r\n&bull; Full body porcelain that gives a highly compact surface with extremely low absorbency characteristics<br />\r\n&bull; Not affected by stains, water or chemicals<br />\r\n&bull; Exceptional resistance to thermal shock, deep abrasions and frost<br />\r\n&bull; R11 finish meets most demanding slip resistance requirements for construction projects in high traffic areas<br />\r\n&bull; Versatile and easy installation for interior and exterior environments<br />\r\n&bull; Field tile available in different sizes<br />\r\n&bull; 5 year manufacturer&rsquo;s warranty</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/15.png\" /></p>', '<p>&bull; An unprotected drop off edge, such as a transit platform where the change in elevation is greater than 250mm or the slope is steeper than in a ratio of 1:3 (33%).<br />\r\n&bull; The unprotected edges of a reflecting pool.<br />\r\n&bull; An entry into a vehicular route or area where no curbs or other elements separate it from a pedestrian route such as curb ramps, wheel<br />\r\nchair ramps, top of stairs/escalators and blended transitions.</p>', '1565265620.jpg', 'Alt Imag', 'Porcelain Tactile Indicator Attention Domes | Wayfinding Bar Tile', '<p>At Tactile Solutions, find the Elan porcelain attention domes tiles for both interior and exterior applications to warn the blind pedestrians of risky locations.</p>', 'elan porcelain attention domes tile, Porcelain Tactile Indicator Attention Domes, Tactile Indicator Attention Domes', '2019-08-08 01:42:47', '2019-10-11 06:43:04'),
(11, 'wet', 'No', NULL, NULL, '1565248846.png', 'Banner Image', '6', 'Non Photoluminescent Cast In Place Stair Nosings', 'non-photoluminescent-cast-in-place-stair-nosings', 'From: $15.15 Per Linear Foot﻿﻿', '<p>Ecoglo Step Edge Cast in Place Stair Nosings, are a series of right angled aluminum step nosing&rsquo;s to be placed into wet set concrete, fitting to the edge of public stairways, exit ways and other applications where pathfinding in darkness is an issue. The Non-Slip Anodized Stair Nosings provide step edge colour contrast, long lasting anti-slip protection and are an affordable way to modernize stairways to improve stairway safety. The Step Edge Cast in Place Stair Nosing&rsquo;s are made of hard wearing silicon carbide non-slip material, bonded to an aluminum substrate, with a thick anodized finish so that they are aesthetically pleasing, prevent corrosion and are hard and abrasion resistant tested to withstand UV and all types of weather exposure. The Ecoglo Step Edge Cast in Place Stair Nosing&rsquo;s, are engineered for durability and designed for step edge safety with their colour contrasting non-slip material providing excellent step edge visibility.&nbsp;</p>', '<p>PRODUCT FEATURES:<br />\r\n&bull; High Durability for Indoors and Outdoors<br />\r\n&bull; Slip Resistant<br />\r\n&bull; Abrasion Resistant, Hard Wearing- Salt Spray Resistant, Freeze-thaw Resistant<br />\r\n&bull; Easy to Clean<br />\r\n&bull; Do Not Burn<br />\r\n&bull; Environmentally Friendly<br />\r\n&bull; 3 Colours Black, Grey, Yellow</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/40.png\" /></p>', '<p>Our non-photoluminescent step edge were designed for use in outdoor stadiums and are found in high rises, theatres, stadiums and arenas all across Canada.</p>\r\n\r\n<p>&bull; Install into wet concrete. Used on concrete stairs, concrete-filled steel pan stairs, and pre-cast concrete stairs. Install &frac12;&rdquo; (25mm) back from the front of the step.&nbsp;<br />\r\n&bull; Available in cut to length sizes. (Tolerance +or- 1/8&rdquo;) Standard lengths are 8ft and 10ft.&nbsp;<br />\r\n&bull; Inserts Attached or Unattached &ndash; Inserts unattached can be installed later to ensure the product is clean and has not been damaged during construction. Inserts are installed with a premium polyurethane adhesive.&nbsp;<br />\r\n&bull; A clear protective tape wraps around the product to keep it clean during installation. To remove, cut the tape along the edges and peel away.&nbsp;<br />\r\n&bull; Weight: 0.328 lbs/ft.</p>', '1565271141.jpg', 'Image', 'Ecoglo Anti Slip Cast Place Stair Nosings | Anti slip cast in place', '<p>With the Ecoglo Anti-slip Cast in Place stair nosings, installed during building new stairs, get the step edge safety needed to have safe passage compliance.</p>', 'Anti slip cast in place stair nosings Saskatchewan, Ecoglo Step Edge Cast in Place Stair Nosings, Step Edge Cast in Place Stair Nosing’s, Ecoglo Anti Slip Cast in Place Stair Nosings, Cast Place Stair Nosings, Cast In Place Stair Nosings', '2019-08-08 01:50:46', '2019-10-17 06:26:25'),
(12, 'surface', 'No', NULL, NULL, '1565249018.png', 'Banner Image', '6', 'Non Photoluminescent Surface Applied Anti-Slip Strips', 'non-photoluminescent-surface-applied-anti-slip-strips', 'From: $7.40 Per Linear Foot﻿﻿', '<p>Ecoglo anti slip products to prevent slips or falls in all weather conditions for any type of stairs. Ecoglo non photoluminescent anti slip strips are offered in 3 different colours black, yellow, and grey in two different sizes, delivering the perfect fit and solution for anti-slip strips for stairs. These non-slip step strips are made of hard wearing silicon carbide making them reliably durable, weather resistance, UV resistance, stain resistance and easy to clean. Ecoglo&rsquo;s non photoluminescent non-slip step strips provide an extra non-slip surface supplementing the steps own non-slip properties as well as providing step edge contrast. Ecoglo non photoluminescent surface applied anti slip strips are the perfect safety solution preventing slips and falls down any stairs.&nbsp;</p>', '<p>&bull; UV Stability- High Durability Indoors and Outdoors<br />\r\n&bull; Slip Resistant<br />\r\n&bull; Abrasion Resistant<br />\r\n&bull; Easy to Clean<br />\r\n&bull; Environmentally Friendly- No Radioactivity or Toxicity<br />\r\n&bull; Do Not Burn</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/41.png\" /></p>', '<p>Our non-photoluminescent step edge were designed for use in outdoor stadiums and are found in high rises, theatres, stadiums and arenas all across Canada.</p>\r\n\r\n<p>&bull; Install with premium polyurethane adhesive.<br />\r\n&bull; Option for mechanical fasteners.<br />\r\n&bull; Do not use mechanical fasteners when installing outdoors.&nbsp;<br />\r\n&bull; Available in cut to length sizes. (Tolerance +or- 1/8&rdquo;) Standard lengths are 8ft and 10ft.<br />\r\n&bull; Weight: 0.1 lbs/ft.</p>', '1566969565.jpg', 'Image', 'Ecoglo Anti Slip Surface Applied Stair Nosings | Ecoglo Stair Nosing', '<p>With our code compliant Ecoglo Surface Applied stair nosings, get the step edge visibility with the feature of wear and tear and slip resistance.</p>', 'Anti slip step surface applied Yukon, Ecoglo Surface Applied Stair Nosings, Ecoglo Stair Nosing, Surface Applied Stair Nosings, non-slip step strips', '2019-08-08 01:53:38', '2019-10-17 06:22:59'),
(13, 'wet', 'Yes', NULL, NULL, '1565249066.png', 'Banner Image', '6', 'Photoluminescent Cast In Place Stair Nosings', 'photoluminescent-cast-in-place-stair-nosings', 'From: $17.55 Per Linear Foot﻿﻿', '<p>Ecoglo Photoluminescent Cast in Place Stair Nosings provides step edge visibility durability and are the most efficient photoluminescent product available. The Ecoglo Cast in Place Stair Nosing&rsquo;s are installed into wet concrete and provide step edge visibility in all light conditions. The Photoluminescent stair nosing&rsquo;s work just as well in the light as the dark to reduce falls and provide path marking enhancing egress speed. Ecoglo photoluminescent cast in place stair nosing&rsquo;s are made of a hard-wearing silicon carbon non-slip material with unique ridges and advanced photoluminescnt technology, to provide step edge visibility and high durability against wear and tear for all-weather slip resistance. The Ecoglo Photoluminescent Stair Nosing&rsquo;s are environmentally friendly making them the perfect solution for step edge safety.</p>\r\n\r\n<p>The photoluminescent strip provides luminance on the step edge in event of a black out. The International Building Code requires photoluminescent path marking in all high rises.&nbsp; Our step edge products with Photoluminescent strips exceed the standards for performance in ULC572S, which requires that Photoluminescent path marking operate for a minimum of 120 minutes of black out.</p>', '<p>&bull; High Visibility in Dark or Light Conditions<br />\r\n&bull; High Durability for Indoor and Outdoor Applications<br />\r\n&bull; Slip Resistance<br />\r\n&bull; Hard Wearing, Abrasion Resistant in all weather conditions<br />\r\n&bull; Easy to Clean<br />\r\n&bull; Environmentally Friendly No Radioactivity or Toxicity<br />\r\n&bull; Flammable Resistant &ndash; Do not Burn<br />\r\n&bull; Come in 3 Colours- Black Yellow Grey</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/42.png\" /></p>', '<p>Our photoluminescent step edge were designed for use in outdoor stadiums and are found in high rises, theatres, stadiums and arenas all across Canada.</p>\r\n\r\n<p>&bull; Install into wet concrete. Used on concrete stairs, concrete-filled steel pan stairs, and pre-cast concrete stairs. Install &frac12;&rdquo; (25mm) back from the front of the step.&nbsp;<br />\r\n&bull; Available in cut to length sizes. (Tolerance +or- 1/8&rdquo;) Standard lengths are 8ft and 10ft.&nbsp;<br />\r\n&bull; Inserts Attached or Unattached &ndash; Inserts unattached can be installed later to ensure the product is clean and has not been damaged during construction. Inserts are installed with a premium polyurethane adhesive.&nbsp;<br />\r\n&bull; A clear protective tape wraps around the product to keep it clean during installation. To remove, cut the tape along the edges and peel away.<br />\r\n&bull; Weight: 0.276 lbs/ft.</p>', '1565271022.jpg', 'Image', 'Photoluminescent Anti Slip Surface Applied | Ecoglo Stair Nosing', '<p>Tactile Solutions provides the Ecoglo Photoluminescent anti-slip surface applied stair nosing for existing stairs which are reliably durable and easy to clean.</p>', 'photoluminescent anti slip surface-applied, Ecoglo Stair Nosing, Cast In Place Stair Nosings, stair nosings for tiles', '2019-08-08 01:54:26', '2019-10-17 06:24:43'),
(14, 'surface', 'Yes', NULL, NULL, '1565249098.png', 'Banner Image', '6', 'Photoluminescent Surface Applied Anti-Slip Contrast Strip', 'photoluminescent-surface-applied-anti-slip-contrast-strip', 'From: $8.25 Per Linear Foot﻿﻿', '<p>Ecoglo Non-Slip Photoluminescent Step Edge Contrast Strip provide step edge visibility in all lighting conditions even for several hours after the lights have gone out. The Photoluminescent Surface Applied Anti Slip Contrast Strips are made from hard wearing silicon carbon non-slip material bonded to aluminum plate allowing for long lasting all weather slip resistance and step edge visibility. The Photoluminescent Contrast strip colour contrasting and advanced photoluminscent material are ideal for stairs required by code to have luminous path markings. The Ecoglo Photoluminescent non-slip contrast slip is designed for installation onto flat steps and corridors with a pathmarking glow charged from overhead or natural lighting providing leading technology for guidance systems in all lighting conditions.&nbsp;</p>\r\n\r\n<p>The photoluminescent strip provides luminance on the step edge in event of a black out. The International Building Code requires photoluminescent path marking in all high rises.&nbsp; Our step edge products with Photoluminescent strips exceed the standards for performance in ULC572S, which requires that Photoluminescent path marking operate for a minimum of 120 minutes of black out.</p>', '<p>&bull; High Visibility in Dark or Light Conditions<br />\r\n&bull; High Durability for Indoor and Outdoor Applications<br />\r\n&bull; Hard Wearing, Abrasion Resistant in all weather conditions<br />\r\n&bull; Easy to Clean<br />\r\n&bull; Environmentally Friendly No Radioactivity or Toxicity<br />\r\n&bull; Flammable Resistant &ndash; Do not Burn<br />\r\n&bull; Come in 3 Colours- Black Yellow Grey</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/43.png\" /></p>', '<p>Our photoluminescent step edge were designed for use in outdoor stadiums and are found in high rises, theatres, stadiums and arenas all across Canada.</p>\r\n\r\n<p>&bull; Install with premium polyurethane adhesive.<br />\r\n&bull; Option for mechanical fasteners.<br />\r\n&bull; Do not use mechanical fasteners when installing outdoors.&nbsp;<br />\r\n&bull; Available in cut to length sizes. (Tolerance +or- 1/8&rdquo;) Standard lengths are 8ft and 10ft.<br />\r\n&bull; Weight: 0.1 lbs/ft.</p>', '1566969772.jpg', 'Image', 'Ecoglo Photoluminescent Anti Slip Cast In Place | Anti Slip Step Edge in Place', '<p>We provide you with Ecoglo photoluminescent Cast in Place anti-slip strips that can be installed while building new stairs for achieving the step edge visibility in any light condition.</p>', 'photoluminescent anti slip strips Alberta, Ecoglo photoluminescent anti slip step edge, Step Edge Tiles, Tile Stairs Edge Stair Edge', '2019-08-08 01:54:58', '2019-10-17 06:20:32'),
(15, 'Wet Concrete', NULL, NULL, NULL, '1565326415.png', 'Banner Image', '2', 'Cast-In-Place Tile', 'cast-in-place-tile', 'From: $18.09 Per sqft', '<p>Access Tile Replaceable Cast in Place Tactile Walking Surface Indicators (TWSI) has combined processing, material technologies and engineered polymers with intelligent durable design to create the ultimate replaceable tactile walking surface indicators. The Replaceable Cast in place tiles are installed directly into wet set concrete incorporating the tactile warning systems industry leading replaceability feature. Access Tile Replaceable Cast in Place tile indicators are light weight and durable perfect for curb ramp and sidewalk designs. The Replaceable cast in place truncated attention domes are compliant with Canadian accessibility codes and have a non-slip tactile surface for your interior and exterior applications. Access Tile Cast in Place Way finding bars are also available to be used in concordance with attention domes creating barrier free pathways ensuring all pedestrians are able to navigate around their environment safely.<br />\r\n<br />\r\nAccess Tile Replaceable Cast in Place Tactile Walking Surface Indicators (TWSI) products are for the following applications and many more:<br />\r\n&bull; Curb Ramps&nbsp;<br />\r\n&bull; Vehicular Passage Ways<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings &ndash; Wheelchair Ramps&nbsp;<br />\r\n&bull; Pedestrian Crossings&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal transit stations</p>', '<p>Product Features</p>', '<p>Available Cast-In-Place Tile Sizes And Prices</p>', '<p>Application</p>', '1565326415.jpg', 'Alt Image', 'AODA Cast In Place Tactile Walking Surface Indicators | Access Tiles', '<p>We provide code compliant Access Cast in Place walking surface indicators which are durable and are required for the safe wayfinding by the visually impaired.</p>', 'AODA Cast in Place Tactile Walking Surface Indicators, AODA Access Tile Cast In Place, Access Tile Cast In Place', '2019-08-08 23:23:35', '2019-10-11 06:44:18'),
(16, 'Glue it on top of existent surface', NULL, NULL, NULL, '1565326913.png', 'Banner Image', '2', 'Surface Applied Tile', 'surface-applied-tile', 'From: $18.09 Per sqft', '<p>Access Tile Surface Applied tiles are the ultimate solution in Tactile Walking Surface Indicators (TWSI). The Surface Applied Tiles (retrofit tile) are easy to handle and cut allowing for adjustments due to unforeseen site conditions and can be installed on any existing cured concrete surface where tactile detectable warning is required. The Access Tile Surface Applied truncated attention domes are especially useful for individuals with visual impairment warning pedestrians when they have reached an unsafe edge. Access Tile Surface Applied tile are the cost-effective alternative to wet set Cast in Place tiles. The Surface Applied Tile is the easiest, fastest, environmentally conscious leading tile in the industry while remaining completely compliant with Canadian Accessibility codes. Access Tile Way finding bars are also available to be used in concordance with attention domes to create barrier free pathways ensuring all pedestrians are able to navigate around their environment safely.<br />\r\n<br />\r\nAccess Tile Surface Applied Tactile Walking Surface Indicators (TWSI) products are for the following applications and many more:<br />\r\n&bull; Curb Ramps&nbsp;<br />\r\n&bull; Vehicular Passage Ways<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings &ndash; Wheelchair Ramps&nbsp;<br />\r\n&bull; Pedestrian Crossings&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal transit stations</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Wayfinding tiles have combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate in wayfinding tiles. Maximized efficiencies in manufacturing, materials sourcing and product specifications deliver the most cost-effective solution in the industry. Access&reg; Tile Wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as replaceable cast in place tiles and surface applied tiles.</p>', '1565326913.jpg', 'Alt Image', 'Access Tile Surface Applied tiles | Tactile Walking Surface Indicators', '<p>With code compliant Access surface applied tiles by Tactile Solution, create the safe pathways for the blind at pedestrian crossings, parking areas &amp; stair edges.</p>', 'Access Tile Surface Applied tiles, Tactile Walking Surface Indicators, ISO Access Tile Surface indicator', '2019-08-08 23:31:53', '2019-10-11 06:44:28'),
(17, 'pathmarking', NULL, NULL, NULL, '1566476053.png', 'Banner Image', '24', 'Ecoglo Directional Signage Exit Signs', 'ecoglo-directional-signage-exit-signs', 'From: $30.05', '<p>Ecoglo is a leading global innovator of UL certified Photoluminescent Exit Signs and Emergency Signage that exceed worldwide code requirements. Ecoglo&rsquo;s Photoluminescent Exit Sign systems are durable against UV and all-weather conditions making them the leading solution for indoor and outdoor photoluminescent illuminated egress exit guidance system applications. Ecoglo Photoluminescent Exit Signs and Emergency Exit Pathmarking signs, are manufactured using a patented process embedding photoluminescent particles in a clear durable polymer to ensure maximum efficiency and uses a dry powder for maximum luminance. The Ecoglo Exit Signs and Pathfinding Emergency Exit signs photoluminescent pigment, allow them to be seen in all light conditions and is fast charging by natural and artificial light making them the most cost efficient and reliable exit sign system.&nbsp;<br />\r\n<br />\r\nEcoglo Photoluminescent Exit Signs:<br />\r\n&bull; Multiple directions<br />\r\n&bull; Choice of a universal wall mounting kit or Sign only<br />\r\nEcoglo Photoluminescent Pathmarking Exit Signs:<br />\r\n&bull; Multiple Directins</p>', '<p>&bull; High Visibility in Dark or Light Conditions<br />\r\n&bull; High Durability Indoors and Outdoors<br />\r\n&bull; Abrasion Resistant<br />\r\n&bull; Easy to Clean<br />\r\n&bull; Environmentally Friendly- No Radioactivity or Toxicity<br />\r\n&bull;&nbsp;Flammability- Do Not Burn<br />\r\n&bull; Visible for 2 hours or more in the event of a blackout</p>', '<p>&bull; LEED points qualified for energy conservation and sustainability ULC S572 listed for Photoluminescent and Self-Luminous Exit Signs<br />\r\n&bull; 50/75 foot visibility rating<br />\r\n&bull; No electricity or batteries required<br />\r\n&bull; Indoor installation, only<br />\r\n&bull; Standard twenty-five year warranty<br />\r\n&bull; Requires exposure to at least 54 lux (5 foot-candles) of fluorescent, metal halide, mercury vapor, or other 4000K light illumination for a<br />\r\nminimum of 60 minutes to become fully operational<br />\r\n&bull; Non-toxic and non-radioactive<br />\r\n&bull; ULC certified/listing no. E344049/4RG2</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/22.png\" style=\"height:363px; width:521px\" /></p>', '1567419743.jpg', 'Alt Image', 'Code Compliant Path finding Emergency Exit Signs | Ecoglo Exit Signs', '<p>At Tactile Solutions, find the Ecoglo pathfinding emergency exit signs which need least maintenance and can be easily maintained.</p>', 'Ecoglo Exit Signs, Pathfinding Emergency Exit signs, Path Marking Systems & Exit Signs, Emergency Exit Pathmarking signs', '2019-08-22 06:44:13', '2019-10-17 06:28:28');
INSERT INTO `csc_sub_categories` (`id`, `put_type`, `photo`, `attention`, `product_material`, `banner_image`, `alt_banner_image`, `category_id`, `title`, `slug`, `price`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(18, 'exit door', NULL, NULL, NULL, '1566476189.png', 'Alt Image', '24', 'Ecoglo Directional Signage Photoluminescent Exit Signs', 'ecoglo-directional-signage-photoluminescent-exit-signs', 'From: $90.00', '<p>Compliance Solutions Canada can provide your facility with a variety of Canada code compliant Ecoglo Photoluminescent products. Ecoglo photoluminescent signs are the number one choice for ECOGLO emergency exit signs offering the safest back up technology for any emergency. Ecoglo photoluminescent exit signs are charged by natural light requiring no electricity or batteries illuminating your path while providing the lowest life cycle costs available for any exit sign. This Ecoglo photoluminescent exit sign is available in Standard Series 50-foot rated visibility with right facing running man with a down arrow with the option of clear anodized frame and universal mounting kit or exit sign only</p>', '<p>&bull; LEED points qualified for energy conservation and sustainability<br />\r\n&bull; ULC S572 listed for Photoluminescent and Self-Luminous Exit Signs<br />\r\n&bull; 50/75 foot visibility rating<br />\r\n&bull; No electricity or batteries required<br />\r\n&bull; Requires exposure to at least 54 lux (5 foot-candles) of fluorescent, metal halide, mercury vapor, or other 4000K light illumination for a minimum of 60 minutes to become fully operational<br />\r\n&bull; Indoor installation<br />\r\n&bull; Standard twenty-five (25) year warranty<br />\r\n&bull; Non- toxic and non radioactive<br />\r\n&bull; ULC testing/listing no. E344049/4RG2<br />\r\n&bull; Frame and universal mounting kit constructed of clear anodized aluminum</p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/16.png\" /></p>', '<p><img alt=\"\" src=\"https://www.tactilesolution.ca/public/images/product/static/17.png\" /></p>', '1566476189.jpg', 'Alt Image', 'Ecoglo Photoluminescent Exit Signs | Emergency Exit signs', '<p>Tactile Solutions brings the Ecoglo Photoluminescent directional exit signs for indoor installation that could be easily visible in dim or dark lighting conditions.</p>', 'Ecoglo Photoluminescent Exit Signs, Emergency Exit signs, Photoluminescent Exit Signs, Exit Signs, Self-Luminous Exit Signs, Exit Signs For Indoor Installation', '2019-08-22 06:46:29', '2019-10-18 01:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `csc_sub_dets`
--

CREATE TABLE `csc_sub_dets` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_sub_dets`
--

INSERT INTO `csc_sub_dets` (`id`, `sub_category_id`, `detail_id`, `created_at`, `updated_at`) VALUES
(108, '15', '8', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(109, '16', '10', '2019-10-10 05:17:49', '2019-10-10 05:17:49'),
(110, '15', '12', '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(111, '16', '13', '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(121, '6', '15', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(122, '6', '14', '2019-10-11 06:13:58', '2019-10-11 06:13:58'),
(124, '4', '16', '2019-10-11 06:20:51', '2019-10-11 06:20:51'),
(126, '4', '11', '2019-10-11 23:54:29', '2019-10-11 23:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `csc_tiles_specifications`
--

CREATE TABLE `csc_tiles_specifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_per_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titles_per_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_per_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_per_domes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domes_per_box` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csc_tiles_specifications`
--

INSERT INTO `csc_tiles_specifications` (`id`, `list_id`, `tile_code`, `type`, `size`, `sqft`, `cost_per_title`, `titles_per_box`, `cost_per_box`, `img`, `price`, `price_per_domes`, `domes_per_box`, `description`, `created_at`, `updated_at`) VALUES
(1339, '8', 'ACC-R-1212', 'detail', '12\" x 12\"', '1', '23.06', '10', '230.60', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 12\" X 12\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1340, '8', 'ACC-R-2424', 'detail', '24\" x 24\"', '4', '72.36', '10', '723.60', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 24\" X 24\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1341, '8', 'ACC-R-2436', 'detail', '24\" x 36\"', '6', '108.54', '10', '1085.40', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 24\" X 36\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1342, '8', 'ACC-R-2448', 'detail', '24\" x 48\"', '8', '144.72', '10', '1447.20', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 24\" X 48\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1343, '8', 'ACC-R-2460', 'detail', '24\" x 60\"', '10', '180.90', '10', '1809.00', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 24\" X 60\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1344, '8', 'ACC-R-3648', 'detail', '36\" x 48\"', '12', '217.08', '10', '2170.80', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 36\" X 48\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1345, '8', 'ACC-R-3660', 'detail', '36\" x 60\"', '15', '271.35', '10', '2713.50', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box 36\" X 60\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1346, '8', 'ACC-R-3024CRV', 'detail', '24\" x 30\"', '5', '90.45', '10', '904.50', NULL, NULL, NULL, NULL, 'Access Tile Cast in Place Replaceable Tactile- Domes 10 Tiles / Box \"24 X 30\"', '2019-10-10 05:12:58', '2019-10-10 05:12:58'),
(1347, '10', 'ACC-S-2424', 'detail', '12\" x 12\"', '1', '23.06', '16', '368.96', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 12\" X 12\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1348, '10', 'ACC-S-2424', 'detail', '24\" x 24\"', '4', '72.36', '16', '1157.76', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 24\" X 24\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1349, '10', 'ACC-S-2436', 'detail', '24\" x 36\"', '6', '108.54', '16', '1736.64', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 24\" X 36\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1350, '10', 'ACC-S-2448', 'detail', '24\" x 48\"', '8', '144.72', '16', '2315.52', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 24\" X 48\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1351, '10', 'ACC-S-2460', 'detail', '24\" x 60\"', '10', '180.90', '16', '2894.40', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 24\" X 60\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1352, '10', 'ACC-S-3648', 'detail', '36\" x 48\"', '12', '217.08', '16', '3473.28', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 36\" X 48\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1353, '10', 'ACC-S-3660', 'detail', '36\" x 60\"', '15', '271.35', '16', '4341.60', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 36\" X 60\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1354, '10', 'ACC-S-3024CRV', 'detail', '24\" x 30\"', '5', '90.45', '16', '1447.20', NULL, NULL, NULL, NULL, 'Access Tile Surface Applied Tactile- Domes 16 Tiles/ Box 24\" X 30\"', '2019-10-10 05:17:48', '2019-10-10 05:17:48'),
(1359, '12', 'ACC-RB-1212', 'detail', '12\" x 12\"', '1', '25.06', '10', '250.60', NULL, NULL, NULL, NULL, 'Access Tile Wayfinding Bars - Cast In Place 10 Tiles/box 12\" x 12\"', '2019-10-10 05:44:47', '2019-10-10 05:44:47'),
(1360, '13', 'ACC-SB-1212', 'detail', '12\" x 12\"', '1', '25.06', '16', '400.96', NULL, NULL, NULL, NULL, 'Access Tile Wayfinding Bars - Surface Applied 16 Tiles/box 12\" x 12\"', '2019-10-10 05:45:30', '2019-10-10 05:45:30'),
(1452, '15', 'ADV-D-1281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'ew.jpg', '219.00', '2.19', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - Non Polished - SS 22mm', '2019-10-11 06:11:26', '2019-10-11 06:11:26'),
(1453, '15', 'ADV-D-2281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'ew - Copy.jpg', '219.00', '2.19', '100', 'Advantage One Individual Domes - Notched - Cross Hatch - Non Polished - SS 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1454, '15', 'ADV-D-5281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'ew - Copy (2).jpg', '229.00', '2.29', '100', 'Advantage One Individual Domes - Notched - Black Carborundum - Non Polished - SS 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1455, '15', 'ADV-D-1285 YW', 'detail', NULL, NULL, NULL, NULL, NULL, 'ew - Copy (3).jpg', '229.00', '2.29', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - Yellow Rubber Ring - SS 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1456, '15', 'ADV-D-1281-PVD', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-domes-notched-concentric-rings-pvd-coated-ss-22mm.jpg', '309.00', '3.09', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - PVD Coated - SS 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1457, '15', 'ADV-D-1212-CL', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-domes-notched-concentric-rings-non-polished-aluminium-22mm.jpg', '199.00', '1.99', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - Non Polished - Aluminium 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1458, '15', 'ADV-D-1282-BK', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-domes-notched-concentric-rings-anodized-black-aluminium-22mm.jpg', '199.00', '1.99', '100', 'ADVANTAGE ONE INDIVIDUAL DOMES - NOTCHED - CONCENTRIC RINGS - ANODIZED BLACK - ALUMINIUM 22MM', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1459, '15', 'ADV-D-1282-RD', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-domes-notched-concentric-rings-anodized-red-aluminium-22mm.jpg', '199.00', '1.99', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - Anodized Red - Aluminium 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1460, '15', 'ADV-D-1283-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-domes-notched-concentric-rings-non-polished-brass-22mm.jpg', '309.00', '3.09', '100', 'Advantage One Individual Domes - Notched - Concentric Rings - Non Polished - Brass 22mm', '2019-10-11 06:11:27', '2019-10-11 06:11:27'),
(1461, '14', 'ADV-B-2281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-bars-cross-hatch-ss-non-ploished-notched-280mmx27mm.jpg', '882.50', '17.65', '50', 'Advantage One Individual Bars Cross Hatch SS Non Ploished Notched 280mmx27mm', '2019-10-11 06:13:57', '2019-10-11 06:13:57'),
(1462, '14', 'ADV-B-3281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-bars-cross-hatch-ss-non-ploished-notched-280mmx27mm - Copy.jpg', '870.00', '17.40', '50', 'Advantage One Individual Bars Linnear Grooves SS Non Ploished Notched 280mmx27mm', '2019-10-11 06:13:57', '2019-10-11 06:13:57'),
(1463, '14', 'ADV-B-5281-N', 'detail', NULL, NULL, NULL, NULL, NULL, 'advantage-one-individual-bars-cross-hatch-ss-non-ploished-notched-280mmx27mm - Copy (2).jpg', '915.00', '18.30', '50', 'Advantage One Individual Bars Black Carborundum SS Non Ploished Notched 280mmx27mm', '2019-10-11 06:13:57', '2019-10-11 06:13:57'),
(1467, '16', 'ADV-PB-21431-N', 'detail', 'Advantage One Plate Plates with Bars- Cross Hatch Non Polished SS 12\" X 12\"', '1', '138.87', '1', '138.87', NULL, NULL, NULL, NULL, 'Advantage One Plate Plates with Bars- Cross Hatch Non Polished SS 12\" X 12\"', '2019-10-11 06:20:51', '2019-10-11 06:20:51'),
(1468, '16', 'ADV-PB-31431-N', 'detail', 'ADVANTAGE ONE PLATE WITH BARS- LINEAR GROOVES NON POLISHED SS 12\" X 12\"', '1', '138.87', '1', '138.87', NULL, NULL, NULL, NULL, 'ADVANTAGE ONE PLATE WITH BARS- LINEAR GROOVES NON POLISHED SS 12\" X 12\"', '2019-10-11 06:20:51', '2019-10-11 06:20:51'),
(1469, '16', 'ADV-PB-51431-N', 'detail', 'Advantage One Plate Plates with Bars- Black Carborundum Non Polished SS 12\" X 12\"', '1', '160.65', '1', '160.65', NULL, NULL, NULL, NULL, 'Advantage One Plate Plates with Bars- Black Carborundum Non Polished SS 12\" X 12\"', '2019-10-11 06:20:51', '2019-10-11 06:20:51'),
(1480, '1', 'ADA-C-1212', 'sub-category', '12\" x 12\"', '1', '25.92', '10', '259.20', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 12\" x 12\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1481, '1', 'ADA-C-2424', 'sub-category', '24\" x 24\"', '4', '103.68', '10', '1036.80', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 24\" X 24\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1482, '1', 'ADA-C-2436', 'sub-category', '24\" x 36\"', '6', '155.52', '10', '1555.20', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 24\" X 36\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1483, '1', 'ADA-C-2448', 'sub-category', '24\" x 48\"', '8', '207.36', '10', '2073.60', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 24\" X 48\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1484, '1', 'ADA-C-2460', 'sub-category', '24\" x 60\"', '10', '259.20', '10', '2592.00', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 24\" X 60\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1485, '1', 'ADA-C-3648', 'sub-category', '36\" x 48\"', '12', '311.04', '10', '3110.40', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 36\" X 48\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1486, '1', 'ADA-C-3660', 'sub-category', '36\" x 60\"', '15', '388.00', '10', '3880.00', NULL, NULL, NULL, NULL, 'Armor-Tile Cast in Place Tactile- Domes 10 Tiles / Box 36\" X 60\"', '2019-10-11 06:36:54', '2019-10-11 06:36:54'),
(1487, '2', 'ADA-S-2424', 'sub-category', '24\" x 24\"', '4', '104.30', '16', '1668.88', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes 16 Tiles / Box 24\" X 24\" ', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1488, '2', 'ADA-S-2436', 'sub-category', '24\" x 36\"', '6', '155.52', '16', '2488.32', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes 16 Tiles / Box 24\" X 36\"', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1489, '2', 'ADA-S-2448', 'sub-category', '24\" x 48\"', '8', '207.36', '16', '3317.76', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes 16 Tiles / Box 24\" X 48\"', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1490, '2', 'ADA-S-2460', 'sub-category', '24\" x 60\"', '10', '259.20', '16', '4147.20', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes 16 Tiles / Box 24\" X 60\"', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1491, '2', 'ADA-S-3648', 'sub-category', '36\" x 48\"', '12', '311.04', '16', '4976.64', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes 16 Tiles / Box 36\" X 48\"', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1492, '2', 'ADA-S-3660', 'sub-category', '36\" x 60\"', '15', '388.80', '16', '6220.80', NULL, NULL, NULL, NULL, 'Armor-Tile Surface Applied- Domes  16 Tiles / Box 36\" X 60\"', '2019-10-11 06:38:51', '2019-10-11 06:38:51'),
(1493, '3', 'ACC-S-1212-FR', 'sub-category', '12\" x 12\"', '1', '39.25', '16', '628.00', NULL, NULL, NULL, NULL, 'Access Tile Fire Resistant Surface Applied Domes 16 Tiles/Box 12\"x12\"', '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(1494, '3', 'ACC-S-2424-FR', 'sub-category', '24\" x 24\"', '4', '123.12', '16', '1969.92', NULL, NULL, NULL, NULL, 'Access Tile Fire Resistant Surface Applied Domes 16 Tiles/Box 24\"x24\"', '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(1495, '3', 'ACC-S-2436-FR', 'sub-category', '24\" x 36\"', '6', '184.68', '16', '2954.88', NULL, NULL, NULL, NULL, 'Access Tile Fire Resistant Surface Applied Domes 16 Tiles/Box 24\"x36\"', '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(1496, '3', 'ACC-S-2448-FR', 'sub-category', '24\" x 48\"', '8', '246.24', '16', '3939.84', NULL, NULL, NULL, NULL, 'Access Tile Fire Resistant Surface Applied Domes 16 Tiles/Box 24\"x48\"', '2019-10-11 06:39:08', '2019-10-11 06:39:08'),
(1497, '4', NULL, 'sub-category', '12\" x 12\"', '12', '12\" x 12\"', '12', '12', NULL, NULL, NULL, NULL, '12\" x 12\"', '2019-10-11 06:39:19', '2019-10-11 06:39:19'),
(1498, '5', 'ADV-CI-18-24', 'sub-category', '18\" x 24\"', '3', '108.00', 'NA', '108.00', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates 18\" X 24\"', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1499, '5', 'ADV-CI-24-24', 'sub-category', '24\" x 24\"', '4', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates 24\" X 24\"', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1500, '5', 'ADV-CI-30-24', 'sub-category', '24\" x 30\"', '5', '142.60', 'NA', '142.60', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates 24\" X 30\"', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1501, '5', 'ADV-CI-24-10R', 'sub-category', '2\' x 10\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 10\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1502, '5', 'ADV-CI-24-15R', 'sub-category', '2\' x 15\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 15\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1503, '5', 'ADV-CI-24-17.5R', 'sub-category', '2\' x 17.5\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 17.5\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1504, '5', 'ADV-CI-24-20R', 'sub-category', '2\' x 20\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\" x 20\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1505, '5', 'ADV-CI-24-25R', 'sub-category', '2\' x 25\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 25\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1506, '5', 'ADV-CI-24-30R', 'sub-category', '2\' x 30\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 30\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1507, '5', 'ADV-CI-24-35R', 'sub-category', '2\' x 35\' Radius', 'NA', '116.70', 'NA', '116.70', NULL, NULL, NULL, NULL, 'Advantage Cast Iron - Cast in Place Uncoated Plates - 2\' x 35\' Radius', '2019-10-11 06:39:54', '2019-10-11 06:39:54'),
(1511, '6', NULL, 'sub-category', '12\" x 12\"', '12', '12\" x 12\"', '12', '12', NULL, NULL, NULL, NULL, '12\" x 12\"', '2019-10-11 06:40:55', '2019-10-11 06:40:55'),
(1512, '7', 'EON-B-1212', 'sub-category', '12\" x 12\" x 3mm', '1', '12.40', '1', '12.40', NULL, NULL, NULL, NULL, 'EON RUBBER RESILIENT TACTILE - Bars 12\" X 12\" x 3mm', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1513, '7', 'EON-B-1212-5', 'sub-category', '12\" x 12\" x 5mm', '1', '12.90', '1', '12.90', NULL, NULL, NULL, NULL, 'EON RUBBER RESILIENT TACTILE - Bars 12\" X 12\" x 5mm', '2019-10-11 06:41:02', '2019-10-11 06:41:02'),
(1514, '8', 'EON-D-1212', 'sub-category', '12\" x 12\" x 3mm', '1', '12.40', '1', '12.40', NULL, NULL, NULL, NULL, 'EON RUBBER RESILIENT TACTILE - DOMES 12\" X 12\" X 3MM', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1515, '8', 'EON-D-1212-5', 'sub-category', '12\" x 12\" x 5mm', '1', '12.90', '1', '12.90', NULL, NULL, NULL, NULL, 'EON RUBBER RESILIENT TACTILE - Domes 12\" X 12\" x 5mm', '2019-10-11 06:41:36', '2019-10-11 06:41:36'),
(1516, '9', 'ELAN-B-1212', 'sub-category', '12\" x 12\"', '1', '16.20', '8', '129.60', NULL, NULL, NULL, NULL, 'ELAN PORCELAIN TACTILE - BARS 8 TILES / BOX 12\" X 12\"', '2019-10-11 06:42:34', '2019-10-11 06:42:34'),
(1517, '10', 'ELAN-D-1212', 'sub-category', '12\" x 12\"', '1', '16.20', '8', '129.60', NULL, NULL, NULL, NULL, 'ELAN PORCELAIN TACTILE - DOMES 8 TILES / BOX 12\" X 12\"', '2019-10-11 06:43:04', '2019-10-11 06:43:04'),
(1518, '15', NULL, 'sub-category', '77', '77', '77', '77', '77', NULL, NULL, NULL, NULL, '77', '2019-10-11 06:44:19', '2019-10-11 06:44:19'),
(1519, '16', NULL, 'sub-category', '77', '77', '77', '77', '77', NULL, NULL, NULL, NULL, '77', '2019-10-11 06:44:28', '2019-10-11 06:44:28'),
(1571, '11', 'ADV-PD-21421-N', 'detail', 'Advantage One Plate Plates with Domes- Cross Hatch Non Polished SS 12\" X 12\"', '1', '116.70', '1', '116.70', NULL, NULL, NULL, NULL, 'Advantage One Plate Plates with Domes- Cross Hatch Non Polished SS 12\" X 12\"', '2019-10-11 23:54:28', '2019-10-11 23:54:28'),
(1572, '11', 'ADV-PD-11421-N', 'detail', 'Advantage One Plate Plates with Domes- Concentric Rings Non Polished SS 12\" X 12\"', '1', '116.70', '1', '116.70', NULL, NULL, NULL, NULL, 'Advantage One Plate Plates with Domes- Concentric Rings Non Polished SS 12\" X 12\"', '2019-10-11 23:54:28', '2019-10-11 23:54:28'),
(1573, '11', 'ADV-PD-51421-N', 'detail', 'Advantage One Plate Plates with Domes- Black Carborundum Non Polished SS 12\" X 12\"', '1', '135.00', '1', '135.00', NULL, NULL, NULL, NULL, 'Advantage One Plate Plates with Domes- Black Carborundum Non Polished SS 12\" X 12\"', '2019-10-11 23:54:28', '2019-10-11 23:54:28'),
(1630, '14', 'E2071', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1pss.jpg', '8.25', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 1.5\" Black', '2019-10-17 06:20:33', '2019-10-17 06:20:33'),
(1631, '14', 'E2061', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2pss.jpg', '8.25', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 1.5\" Grey', '2019-10-17 06:20:33', '2019-10-17 06:20:33'),
(1632, '14', 'E2051', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3pss.jpg', '8.25', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 1.5\" Yellow', '2019-10-17 06:20:33', '2019-10-17 06:20:33'),
(1633, '14', 'E3071', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4pss.jpg', '10.45', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 2\" Black', '2019-10-17 06:20:33', '2019-10-17 06:20:33'),
(1634, '14', 'E3061', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5pss.jpg', '10.45', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 2\" Grey', '2019-10-17 06:20:33', '2019-10-17 06:20:33'),
(1635, '14', 'E3051', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6pss.jpg', '10.45', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Surface Applied 2\" Yellow', '2019-10-17 06:20:34', '2019-10-17 06:20:34'),
(1636, '12', 'N2070', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1ns.jpg', '7.40', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Black', '2019-10-17 06:22:59', '2019-10-17 06:22:59'),
(1637, '12', 'N2060', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2ns.jpg', '7.40', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Grey', '2019-10-17 06:22:59', '2019-10-17 06:22:59'),
(1638, '12', 'N2050', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3ns.jpg', '7.40', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 1.5\" Yellow', '2019-10-17 06:22:59', '2019-10-17 06:22:59'),
(1639, '12', 'N3070', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4ns.jpg', '8.90', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 2\" Black', '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1640, '12', 'N3060', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5ns.jpg', '8.90', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 2\" Grey', '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1641, '12', 'N3050', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6ns.jpg', '8.90', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Surface Applied 2\" Yellow', '2019-10-17 06:23:00', '2019-10-17 06:23:00'),
(1642, '13', 'S1071', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.1\" Black', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1643, '13', 'S1061', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.1\" Grey', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1644, '13', 'S1051', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.1\" Yellow', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1645, '13', 'SA4071', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.2\" Black', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1646, '13', 'SA4061', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.2\" Grey', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1647, '13', 'SA4051', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6pc.jpg', '17.55', NULL, NULL, 'Ecoglo Non-Slip Photoluminescent Cast In Place 2.2\" Yellow', '2019-10-17 06:24:44', '2019-10-17 06:24:44'),
(1648, '11', 'S1070', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1nc.jpg', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Black', '2019-10-17 06:26:25', '2019-10-17 06:26:25'),
(1649, '11', 'S1060', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2nc.png', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Grey', '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1650, '11', 'S1050', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3nc.jpg', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.1\" Yellow', '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1651, '11', 'S4070', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4nc.jpg', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.2\" Black', '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1652, '11', 'S4060', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5nc.jpg', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.2\" Grey', '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1653, '11', 'S4050', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6nc.jpg', '15.15', NULL, NULL, 'Ecoglo Non-Slip Non Photoluminescent Cast In Place 2.2\" Yellow', '2019-10-17 06:26:26', '2019-10-17 06:26:26'),
(1654, '17', 'RA02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1pm.jpg', '30.05', NULL, NULL, 'Exit to the right- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1655, '17', 'RB02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2pm.jpg', '30.05', NULL, NULL, 'Exit to the Left- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1656, '17', 'RC02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3pm.jpg', '30.05', NULL, NULL, 'Exit Down and to the Right- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1657, '17', 'RD02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4pm.jpg', '30.05', NULL, NULL, 'Exit Down and to the left- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1658, '17', 'RE02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5pm.jpg', '30.05', NULL, NULL, 'Exit Up and to the Right- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1659, '17', 'RG02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6pm.jpg', '30.05', NULL, NULL, 'Exit Straight Ahead and Up- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1660, '17', 'RH02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '7pm.jpg', '30.05', NULL, NULL, 'Exit Straight Ahead and Down- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1661, '17', 'RF02012', 'sub-category', NULL, NULL, NULL, NULL, NULL, '8pm.jpg', '30.05', NULL, NULL, 'Exit up and to the Left- 8\" x 4.6\"', '2019-10-17 06:28:29', '2019-10-17 06:28:29'),
(1674, '18', 'RM-RD50', 'sub-category', NULL, NULL, NULL, NULL, NULL, '1ppe.jpg', '90.00', NULL, NULL, 'Right-Facing Running man sign with down arrow (sign only)1-Sided﻿', '2019-10-18 01:59:18', '2019-10-18 01:59:18'),
(1675, '18', 'RM-RD50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '2ppe.jpg', '105.00', NULL, NULL, 'Right-Facing running man with down arrowIncludes clear anodized frame and universal mounting kit1-Sided﻿', '2019-10-18 01:59:18', '2019-10-18 01:59:18'),
(1676, '18', 'RM-LA50', 'sub-category', NULL, NULL, NULL, NULL, NULL, '3ppe.jpg', '90.00', NULL, NULL, 'Left-Facing running man with arrow (sign only)1-sided﻿', '2019-10-18 01:59:18', '2019-10-18 01:59:18'),
(1677, '18', 'RM-LA50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '4ppe.jpg', '105.00', NULL, NULL, 'Left-Facing running man with arrow Includes clear anodized frame and universal mounting kit1-sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1678, '18', 'RM-RA50', 'sub-category', NULL, NULL, NULL, NULL, NULL, '5ppe.jpg', '90.00', NULL, NULL, 'Right-Facing Running man sign with arrow (sign only)1-Sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1679, '18', 'RM-RA50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '6ppe.jpg', '105.00', NULL, NULL, 'Right-Facing running man with arrow (sign only)Includes clear anodized frame and universal mounting kit1-Sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1680, '18', 'RM-RU50', 'sub-category', NULL, NULL, NULL, NULL, NULL, '7pp3.jpg', '90.00', NULL, NULL, 'Right-Racing running man with up arrow (sign only)1-Sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1681, '18', 'RM-RU50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '8pp3.jpg', '105.00', NULL, NULL, 'Right-Racing running man with up arrow Includes clear anodized frame and universal mounting kit1-Sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1682, '18', 'RM-SA50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '9ppe.jpg', '194.00', NULL, NULL, 'Double sided single direction with arrowsIncludes clear anodized frame and universal mounting kit﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1683, '18', 'RM-BA50', 'sub-category', NULL, NULL, NULL, NULL, NULL, '10ppe.jpg', '157.00', NULL, NULL, 'Running man sign with bi-directional arrows (sign only)1-sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1684, '18', 'RM-BA50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '11ppe.jpg', '194.00', NULL, NULL, 'Running man with bi-directional arrowsIncludes clear anodized frame and universal mounting kit1-Sided﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19'),
(1685, '18', 'RM-DA50-CA', 'sub-category', NULL, NULL, NULL, NULL, NULL, '12ppe.jpg', '325.00', NULL, NULL, 'Double sided bi-directional with arrowsIncludes clear anodized frame and universal kit﻿', '2019-10-18 01:59:19', '2019-10-18 01:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exit_signs`
--

CREATE TABLE `exit_signs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exit_put` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mountain_kit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exit_signs`
--

INSERT INTO `exit_signs` (`id`, `name`, `lname`, `email`, `phone`, `company_name`, `exit_put`, `mountain_kit`, `direction`, `need`, `additional`, `shipped`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test', 'testingdeveloper1@gmail.com', '9888888', 'sds', 'At Exit Door?', 'Yes', 'Direction', 'sds', 'dsds', 'ssd', '2019-08-29 09:24:12', '2019-08-29 09:24:12'),
(2, 'fdgfdg', 'fggfg', 'testingdeveloper1@gmail.com', '4654545', 'cbvcb', 'Pathmarking to Exit Door', NULL, 'fgdg', 'fdfdg', 'dffdg', 'dffgd', '2019-08-29 12:39:20', '2019-08-29 12:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `image`, `image_alt`, `line_1`, `line_2`, `line_3`, `button`, `button_href`, `created_at`, `updated_at`) VALUES
(1, '1567417666.jpg', 'Banner Img', 'Your Source for Code Compliant', 'Elan Porcelain Tiles', 'ElanTM Tile is the ultimate porcelain tactile solution', 'Find Out More', '/category/elan', '2019-07-14 23:41:36', '2019-09-02 13:47:46'),
(2, '1567417687.jpg', 'Banner Img', 'Your Source for Code Compliant', 'Access Tile TWSI System', 'Introducing the Ultimate Tactile SolutionTM', 'Find Out More', '/category/access', '2019-07-14 23:42:42', '2019-09-02 13:48:09'),
(3, '1567417708.jpg', 'Banner Img', 'Your Source for Code Compliant', 'Advantage Tactile Solutions', 'Advantage detectable warning system for various applications', 'Find Out More', '/category/advantage', '2019-07-14 23:43:19', '2019-09-02 13:48:28'),
(4, '1565606290.jpg', 'Banner Img', 'Your Source for Code Compliant', 'EON Rubber Resilient Tiles', 'EonTM Tile is a durable and flexible Tactile Solution', 'Find Out More', '/category/eon', '2019-08-12 05:08:10', '2019-08-14 12:55:24'),
(5, '1565606380.jpg', 'Banner Img', 'Your Source for Code Compliant', 'ECOGLO EXIT SIGNS', 'Ecoglo, leader for pathmarking signage', 'Find Out More', '/category/ecoglo-exit-signs', '2019-08-12 05:09:40', '2019-08-14 12:56:54'),
(6, '1567417744.png', 'Banner Img', 'Your Source for Code Compliant', 'Ecoglo Stair nosing', 'Ecoglo is known throughout the industry for its stair safety nosing', 'Find Out More', '/category/ecoglo-stair-nosing', '2019-08-12 05:10:54', '2019-09-02 13:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>You realize that you need to provide a Tactile Solution for one of your projects. The solution needs to comply with the most recent AODA, CSA, ISO, Provincial and National Building Codes..</p>', '2019-07-15 05:13:48', '2019-07-18 08:12:28'),
(2, '<p>Just determine if you have to install the solution on an existing surface or into fresh concrete and if it is for indicating a danger or a safe path. Put this information into the request quote form or call us and you&rsquo;ll have the right solution quoted within 24 hours</p>', '2019-07-15 05:29:46', '2019-07-15 06:12:00'),
(3, '<p>It&rsquo;s easy! &ndash; Our quote includes freight cost, product availability, product data sheets, product drawings and installation instructions. Now, you are ready to implement your tactile solution efficiently, well scheduled and code compliant</p>', '2019-07-15 05:29:54', '2019-07-15 06:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_03_083012_add_role_to_users_table', 2),
(4, '2019_07_04_063654_create_cms_table', 3),
(5, '2019_07_10_062307_create_home_banner_table', 4),
(6, '2019_07_10_065434_create_home__banner_table', 5),
(7, '2019_07_11_124658_create_blog_categorys_table', 6),
(8, '2019_07_12_071422_create_blogs_table', 7),
(9, '2019_07_15_103630_create_how_it_works_table', 8),
(10, '2019_07_16_092905_create_solutions_table', 9),
(11, '2019_07_16_093448_create_solutions_table', 10),
(12, '2019_07_17_074726_create_categories_table', 11),
(13, '2019_07_17_103832_create_sub_categories_table', 12),
(14, '2019_07_17_104056_create_detail_table', 13),
(15, '2019_07_22_045903_create_blog_socials_table', 14),
(16, '2019_07_22_064024_create_newsletters_table', 15),
(17, '2019_07_22_075623_create_colours_table', 16),
(18, '2019_07_22_080100_create_tiles_specifications_table', 17),
(19, '2019_07_22_092636_create_lists_table', 18),
(20, '2019_07_25_080707_create_requests_table', 19),
(21, '2019_07_31_054707_create_sol_cats_table', 20),
(22, '2019_07_31_070211_create_cat_subcats_table', 21),
(23, '2019_08_05_061112_create_csc_products_table', 22),
(24, '2019_08_05_061431_create_csc_sub_products_table', 22),
(25, '2019_08_05_074820_create_csc_colours_table', 23),
(26, '2019_08_05_074846_create_csc_tiles_specifications_table', 23),
(27, '2019_08_05_125459_create_csc_product_subs_table', 24),
(28, '2019_08_06_100158_create_csc_details_table', 25),
(29, '2019_08_06_100221_create_csc_sub_det_table', 25),
(30, '2019_08_12_051134_create_references_table', 26),
(31, '2019_08_12_051203_create_reference_pdfs_table', 26),
(32, '2019_08_12_080859_create_sub_references_table', 27),
(33, '2019_08_19_114758_create_benefits_table', 28),
(34, '2019_08_20_044725_create_codes_table', 29),
(35, '2019_08_21_085342_create_quotes_table', 30),
(36, '2019_09_13_053635_create_cart_users_table', 31),
(37, '2019_09_26_083950_create_personal_details_table', 32),
(38, '2019_09_26_111740_create_cart_product_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'developerprakharpandey@gmail.com', '2019-07-22 01:20:00', '2019-07-22 01:20:00'),
(2, 'dd@gmail.com', '2019-07-22 01:30:59', '2019-07-22 01:30:59'),
(3, 'rrr@gmail.com', '2019-07-22 01:31:46', '2019-07-22 01:31:46'),
(4, 'a@yopmail.com', '2019-07-24 04:32:40', '2019-07-24 04:32:40'),
(5, 'gautamg64@gmail.com', '2019-08-14 06:48:08', '2019-08-14 06:48:08'),
(6, 'yy@gmail.com', '2019-08-29 12:48:54', '2019-08-29 12:48:54'),
(7, 'qwww@gmail.com', '2019-08-29 12:49:31', '2019-08-29 12:49:31'),
(8, 'ds@gmail.com', '2019-08-29 12:49:48', '2019-08-29 12:49:48'),
(9, 'xtt@gmail.com', '2019-08-29 12:50:15', '2019-08-29 12:50:15'),
(10, 'ioo@gmail.com', '2019-08-29 12:50:29', '2019-08-29 12:50:29'),
(11, 'cdv@gmail.com', '2019-08-29 13:13:38', '2019-08-29 13:13:38'),
(12, 'tschwartz@csc-inc.ca', '2019-09-02 01:32:34', '2019-09-02 01:32:34'),
(13, 'shavetasharma395@gmail.com', '2019-09-02 11:57:20', '2019-09-02 11:57:20'),
(14, 'shavetasharma392@gmail.com', '2019-09-02 12:01:09', '2019-09-02 12:01:09'),
(15, 'dff@gmail.com', '2019-09-02 12:02:35', '2019-09-02 12:02:35'),
(17, 'brocksran@gmail.com', '2019-09-02 20:35:05', '2019-09-02 20:35:05'),
(18, 'tommy@zapcity.com', '2019-09-02 20:42:10', '2019-09-02 20:42:10'),
(19, 'parminderwalia007@gmail.com', '2019-09-03 13:09:24', '2019-09-03 13:09:24'),
(20, 't.schwartz7@icloud.com', '2019-09-03 17:18:51', '2019-09-03 17:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('gautamg64@gmail.com', '$2y$10$yKNNArjVk0PaluE92eeexu6sa1aQ7xAINKx/3pFDCReUDVWW7FtTO', '2019-09-04 09:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` longtext COLLATE utf8mb4_unicode_ci,
  `s_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_add_info` longtext COLLATE utf8mb4_unicode_ci,
  `delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `fname`, `lname`, `email`, `phone_number`, `company`, `address`, `address1`, `city`, `province`, `zipcode`, `additional_info`, `s_company`, `s_address`, `s_address1`, `s_city`, `s_province`, `s_zipcode`, `s_add_info`, `delivery`, `created_at`, `updated_at`) VALUES
(182, 'test', 'test', 'gautamg64@gmail.com', '987654321', 'jhjhjhj', 'jhjhgjhhj', 'hhjhgjh', 'jhjhj', '14', '123 456', NULL, 'jhjhjhj', 'jhjhgjhhj', 'hhjhgjh', 'jhjhj', '14', '123 456', NULL, 'Shipping', '2019-10-18 05:16:55', '2019-10-18 05:16:55'),
(183, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:22:06', '2019-10-18 05:22:06'),
(184, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:23:00', '2019-10-18 05:23:00'),
(185, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:23:08', '2019-10-18 05:23:08'),
(186, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:27:39', '2019-10-18 05:27:39'),
(187, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:28:25', '2019-10-18 05:28:25'),
(188, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:46:18', '2019-10-18 05:46:18'),
(189, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:47:16', '2019-10-18 05:47:16'),
(190, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:48:17', '2019-10-18 05:48:17'),
(191, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 05:48:49', '2019-10-18 05:48:49'),
(192, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:10:39', '2019-10-18 06:10:39'),
(193, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:11:26', '2019-10-18 06:11:26'),
(194, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:12:11', '2019-10-18 06:12:11'),
(195, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:12:48', '2019-10-18 06:12:48'),
(196, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:13:20', '2019-10-18 06:13:20'),
(197, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:14:11', '2019-10-18 06:14:11'),
(198, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:14:37', '2019-10-18 06:14:37'),
(199, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:25:02', '2019-10-18 06:25:02'),
(200, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:25:23', '2019-10-18 06:25:23'),
(201, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:26:06', '2019-10-18 06:26:06'),
(202, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:26:32', '2019-10-18 06:26:32'),
(203, 'gfgf', 'gfgfg', 'gautamg64@gmail.com', '9882122', 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'sfdfdjhk', 'jhdvfjhh', 'hjfdfdcjh', 'jhgdsvfg', '12', '123 456', NULL, 'Shipping', '2019-10-18 06:27:25', '2019-10-18 06:27:25'),
(204, 'test', 'test', 'gautamg64@gmail.com', '9876543210', 'test', 'tesst', 'tesst', 'tesst', '2', '123 45', NULL, 'test', 'tesst', 'tesst', 'tesst', '2', '123 45', NULL, 'Shipping', '2019-10-18 17:03:10', '2019-10-18 17:03:10'),
(205, 'Thomas', 'Schwartz', 'tschwartz@csc-inc.ca', '9057615354', 'Compliance Solutions Canada Inc', '5863 Leslie St., Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Compliance Solutions Canada Inc', '5863 Leslie St., Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Pickup', '2019-10-18 17:42:29', '2019-10-18 17:42:29'),
(206, 'Thomas', 'Schwartz', 'tschwartz@csc-inc.ca', '19057615354', 'Compliance Solutions Canada Inc', 'Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Compliance Solutions Canada Inc', 'Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Shipping', '2019-10-22 20:42:14', '2019-10-22 20:42:14'),
(207, 'test purpose', 'test purpose', 'gautamg64@gmail.com', '9876543210', 'test', 'test', 'test', 'test', '6', '123 456', NULL, 'test', 'test', 'test', 'test', '6', '123 456', NULL, 'Shipping', '2019-10-24 10:50:00', '2019-10-24 10:50:00'),
(208, 'Thomas', 'Schwartz', 'tschwartz@csc-inc.ca', '19057615354', 'Compliance Solutions Canada Inc', 'Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Compliance Solutions Canada Inc', 'Suite 507', '5863 Leslie St.', 'Toronto', '6', 'M2H 1J8', NULL, 'Shipping', '2019-10-25 01:05:08', '2019-10-25 01:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `put` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `att_domes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipped` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `lname`, `email`, `phone`, `company_name`, `put`, `material`, `type`, `att_domes`, `area`, `shipped`, `additional`, `created_at`, `updated_at`) VALUES
(1, 'ee', 'ee', 'ee@gmail.com', '888', 'fddf', 'df', 'on', '', '', 'dfd', 'dffd', 'dfd', '2019-08-21 05:41:07', '2019-08-21 05:41:07'),
(2, 'tt', 'rr', 'rr@gmail.com', '22', 'efe', 'fefee', 'on', '', '', 'effeef', 'fefefe', 'ffefe', '2019-08-21 05:45:39', '2019-08-21 05:45:39'),
(3, 'tt', 'rr', 'rr@gmail.com', '22', 'efe', 'fefee', 'on', '', '', 'effeef', 'fefefe', 'ffefe', '2019-08-21 05:46:07', '2019-08-21 05:46:07'),
(4, 'Test', 'test', 'test@gmail.com', '9876543210', 'Test', 'Test', 'Wet Concrete', 'Cast Iron', '', 'Test', 'test', 'test', '2019-08-22 01:29:25', '2019-08-22 01:29:25'),
(5, 'Test purpose', 'Test purpose', 'gautamg64@gmail.com', '9876543210', 'tEST', 'Wall', 'Glue it on top of existent surface', 'Porcelain', '', '255', 'Canada', 'Nothing', '2019-08-28 21:54:52', '2019-08-28 21:54:52'),
(6, 'Test purpose', 'Test purpose', 'gautamg64@gmail.com', '9876543210', 'tEST', 'Wall', 'Glue it on top of existent surface', 'Porcelain', '', '255', 'Canada', 'Nothing', '2019-08-28 21:54:52', '2019-08-28 21:54:52'),
(7, 'Test purpose', 'Test purpose', 'gautamg64@gmail.com', '9876543210', 'tEST', 'Wall', 'Glue it on top of existent surface', 'Porcelain', '', '255', 'Canada', 'Nothing', '2019-08-28 21:54:56', '2019-08-28 21:54:56'),
(8, 'Test purpose', 'Test purpose', 'gautamg64@gmail.com', '9876543210', 'tEST', 'Wall', 'Glue it on top of existent surface', 'Porcelain', '', '255', 'Canada', 'Nothing', '2019-08-28 21:54:58', '2019-08-28 21:54:58'),
(9, 'Thomas', 'Schwartz', 'tschwartz@csc-inc.ca', '9057615354', 'Compliance Solutions Canada Inc', 'stairlanding', 'Glue it on top of existent surface', 'Rubber', '', '10 x 2\' x 4\'', '3636 Bathurst St. North York ON M6A 2Y5', 'cheapest', '2019-08-29 03:51:18', '2019-08-29 03:51:18'),
(10, 'vxcvcx', 'vcvcxv', 'testingdeveloper1@gmail.com', '698986986', 'ZxZxZ', 'dssdfsdf', 'Wet Concrete', 'Polymer', '', 'dxfdsfds', 'dfsdfds', 'sddsfds', '2019-08-29 12:34:45', '2019-08-29 12:34:45'),
(11, 'test1', 'test', 'testingdeveloper1@gmail.com', '78578587', '58858', 'xgfgfd', 'Wet Concrete', 'Polymer', '', 'dsfdsfds', 'dfdfdfd', 'xcgd', '2019-08-29 12:37:03', '2019-08-29 12:37:03'),
(12, 'ghggh', 'ghghg', 'testingdeveloper1@gmail.com', '9876543210', 'wewe', 'jhjhjh', 'Wet Concrete', 'Polymer', '', 'hjhjh', 'jhjhj', 'jhh', '2019-08-29 14:55:05', '2019-08-29 14:55:05'),
(13, 'Test', 'test', 'newdeftsoft@gmail.com', '9876543210', 'Test', 'Wall', 'Wet Concrete', 'Stainless Steel', 'Wayfinding Bars', '225', 'Canada', 'Test', '2019-09-02 09:19:30', '2019-09-02 09:19:30'),
(14, 'EEE', 'eee', 'newdeftsoft@gmail.com', '9876543210', 'rrr', 'ssds', 'Wet Concrete', 'Polymer', 'Attention Domes', 'dsd', 'dds', 'ss', '2019-09-02 09:26:02', '2019-09-02 09:26:02'),
(15, 'fff', 'fff', 'testingdeveloper1@gmail.com', '669', 'fdfd', 'fddfd', 'Wet Concrete', 'Polymer', NULL, 'fdf', 'dfdf', 'fdfd', '2019-09-02 09:29:14', '2019-09-02 09:29:14'),
(16, 'gfgf', 'fgf', 'gfgf@gmail.com', '98888', 'vffvf', 'fdfd', 'Wet Concrete', 'Polymer', 'Attention Domes', 'dffd', 'dfd', 'fdffd', '2019-09-02 09:30:22', '2019-09-02 09:30:22'),
(17, 'ddsvsd', 'dvvdv', 'testingdeveloper1@gmail.com', '9876543210', 'wewe', 'ss', 'Wet Concrete', 'Polymer', 'Attention Domes', 'scc', 'cscs', 'scsc', '2019-09-02 09:32:33', '2019-09-02 09:32:33'),
(18, 'Thomas', 'Schwartz', 'tschwartz@csc-inc.ca', '9057615354', 'Compliance Solutions Canada Inc', 'stairlanding', 'Glue it on top of existent surface', 'Rubber', 'Attention Domes', '10 x 2\' x 4\'', '1707-3636 Bathurst St. North York, ON M6A 2Y5', 'cheapest', '2019-09-02 14:20:37', '2019-09-02 14:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `name`, `type`, `detail_condition`, `created_at`, `updated_at`) VALUES
(1, 'Code requirements tactile', 'Single', NULL, '2019-08-23 05:11:36', '2019-08-23 05:11:36'),
(2, 'Code requirements Safe Way', NULL, NULL, '2019-08-23 05:11:54', '2019-08-23 05:11:54'),
(3, 'Tactile product drawings', NULL, 'yes', '2019-08-23 05:12:06', '2019-08-23 05:12:06'),
(4, 'Tactile products instalation guides', NULL, 'yes', '2019-08-23 05:12:18', '2019-08-23 05:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `reference_pdfs`
--

CREATE TABLE `reference_pdfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reference_pdfs`
--

INSERT INTO `reference_pdfs` (`id`, `list_id`, `type`, `original_pdf`, `created_at`, `updated_at`) VALUES
(1, '1', 'main', 'CODE Requirements for Tactile Walking Surface Indicators.pdf', '2019-08-23 05:11:36', '2019-08-23 05:11:36'),
(2, '1', 'sub', 'Safe_Way_Guidance_Installation_and_Maintenance.pdf', '2019-08-23 05:13:47', '2019-08-23 05:13:47'),
(3, '1', 'sub', 'Luminous-Egress-Path-Markings-compliance-Guide.pdf', '2019-08-23 05:13:47', '2019-08-23 05:13:47'),
(4, '2', 'sub', 'AccessTile_WayFinding-Drawings.pdf', '2019-08-23 05:14:27', '2019-08-23 05:14:27'),
(5, '2', 'sub', 'AccessTile_Surface Applied_Drawings.pdf', '2019-08-23 05:14:27', '2019-08-23 05:14:27'),
(6, '2', 'sub', 'AccessTile_Cast-in-place_Drawings.pdf', '2019-08-23 05:14:28', '2019-08-23 05:14:28'),
(7, '3', 'sub', 'Drawing Advantage_Domes_and_Bars.pdf', '2019-08-23 05:14:49', '2019-08-23 05:14:49'),
(8, '3', 'sub', 'Advantage-Cast-Iron-Drawings.pdf', '2019-08-23 05:14:49', '2019-08-23 05:14:49'),
(9, '4', 'sub', 'ARMOR_TILE_Surface Applied_DRAWINGS.pdf', '2019-08-23 05:15:11', '2019-08-23 05:15:11'),
(10, '4', 'sub', 'ARMOR_TILE_Modular_Paver_DRAWINGS.pdf', '2019-08-23 05:15:11', '2019-08-23 05:15:11'),
(11, '4', 'sub', 'ARMOR_TILE_Cast-In-Place_DRAWINGS.pdf', '2019-08-23 05:15:11', '2019-08-23 05:15:11'),
(12, '5', 'sub', 'Elan_tile_Drawings.pdf', '2019-08-23 05:15:31', '2019-08-23 05:15:31'),
(13, '6', 'sub', 'Eon_Tiles_Drawings.pdf', '2019-08-23 05:15:47', '2019-08-23 05:15:47'),
(14, '7', 'sub', 'Access Tile Surface Applied Installation Instructions.pdf', '2019-08-23 05:16:15', '2019-08-23 05:16:15'),
(15, '8', 'sub', 'TEMPLATE ADVANTAGE HOLE PATTERN FOR DOMES - 841X1189MM.PDF', '2019-08-23 05:16:43', '2019-08-23 05:16:43'),
(16, '8', 'sub', 'Installation Manual Advantage One Domes & Attention Bars.pdf', '2019-08-23 05:16:43', '2019-08-23 05:16:43'),
(17, '8', 'sub', 'Advantage-Cast-Iron-Installation-Instructions.pdf', '2019-08-23 05:16:43', '2019-08-23 05:16:43'),
(18, '9', 'sub', 'Armor Surface-Applied-Installation-Instructions.pdf', '2019-08-23 05:17:04', '2019-08-23 05:17:04'),
(19, '10', 'sub', 'Safety Way Guidance_Installation_and_Maintenance.pdf', '2019-08-23 05:17:24', '2019-08-23 05:17:24'),
(20, '10', 'sub', 'Ecoglo Running Man Instalation Instructions.pdf', '2019-08-23 05:17:24', '2019-08-23 05:17:24'),
(21, '11', 'sub', 'Suggested Glue for Surface Applied - Ultrabond.pdf', '2019-08-23 05:17:40', '2019-08-23 05:17:40'),
(22, '11', 'sub', 'How To Cut A Radius With Detectable Warning.pdf', '2019-08-23 05:17:40', '2019-08-23 05:17:40'),
(24, '6', 'main', 'John_SOW_V_1.1.pdf', '2019-08-28 13:34:09', '2019-08-28 13:34:09'),
(25, '5', 'main', 'PCS syllabus.pdf', '2019-08-28 13:34:35', '2019-08-28 13:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qst2_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wet_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `fname`, `lname`, `email`, `phone`, `company`, `question1`, `question2`, `qst2_value`, `question3`, `wet_value`, `surface_value`, `question4`, `question5`, `question6`, `created_at`, `updated_at`) VALUES
(1, 'First Name', 'Last Name', 'Email', 'Phone', 'Company Name (optional)', 'Where do you need to put tactile?', 'Will you put it into', 'Wet Concrete,Glue it on top of existent surface,Drill Single Domes or Bars', 'For which material are you looking for', 'Polymer,Cast Iron', 'Polymer,Rubber,Porcelain', 'How many areas and how big is each area you need to put tactile on?', 'The address where the tactile product needs to be shipped to?', 'Additional info', '2019-07-25 04:16:00', '2019-09-01 19:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/compliancesolutionscanada/', 'https://twitter.com/cscanada_', 'https://www.linkedin.com/company/compliance-solutions-canada-inc/?viewAsMember=true', 'https://www.youtube.com/', '2019-07-22 04:30:00', '2019-08-25 21:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(270) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_features` longtext COLLATE utf8mb4_unicode_ci,
  `size_price` longtext COLLATE utf8mb4_unicode_ci,
  `application` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `number`, `banner_image`, `alt_banner_image`, `title`, `slug`, `price`, `description`, `product_features`, `size_price`, `application`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 1, '1567421741.png', 'banner image', 'Tactile for outside', 'tactile-for-outside', 'From: $18.09 Per sqft', '<p>As per accessibility legislation, dangerous pathways or drop offs in an open space need to have Tactile Walking Surface Indicators (TWSI) to assist the visually impaired, warning individuals through grooves felt underfoot or with a walking stick. Our Code Compliant Tactile Solutions for outside meet all the municipal, provincial, and federal detectable warning surface requirements. The products we offer are code-compliant, come in various sizes and colors to match customer aesthetics and code-compliant contrasting. There are cast-in-place (for fresh concrete) or surface applied (glued) applications to enable easy installation on existent surfaces, where replacement is not required. All products are weather and wear-resistant thus cost-effective.</p>\r\n\r\n<p>The tactile solution in our product line meet all municipal, provincial, and federal detectable warning surface requirements, being AODA and ADA compliant. The tactile solutions play a crucial role in reducing accidents by making people aware of the presence of dangerous locations in their line of travel. Here are some of the features of tactile for outside:</p>\r\n\r\n<ul>\r\n	<li>Available in a variety of sizes</li>\r\n	<li>Different colors available to add on to the aesthetics while being compliant</li>\r\n	<li>Available both as cast-in-place and surface applied</li>\r\n	<li>Versatile and easy to install</li>\r\n	<li>5-year manufacturer&rsquo;s warranty&nbsp;</li>\r\n</ul>', NULL, NULL, NULL, '1565790651.jpg', 'image', 'Code Compliant Tactile Tiles for Outside Installation | Tactile Attention / Wayfinding Surface Indicators', 'Tactile walking surface indicators for outside includes the detectable warning surface installation for pathways for easy access for sight impaired consumers.', 'Tactile Walking Surface Indicators pathways, access for sight impaired consumers, detectable warning surface installation, Surface Applied Detectable Warning Systems, Surface Applied AODA Systems, surface applied tactile warning system', '2019-08-06 06:23:11', '2019-09-05 17:21:19'),
(2, 2, '1567421749.png', 'banner image', 'Tactile for inside', 'tactile-for-inside', 'From: $12.40 Per sqft', '<p>The municipal and federal legislation mandates the installation of Tactile Walking Surface Indicators (TWSI), attention domes and wayfinding bars for the inside of any building. Our Code Compliant Tactile Solutions come in various sizes for easy installation in different indoor spots. The inside solutions come in a range of materials from polymer, rubber, porcelain or stainless steel to match the floor used. You can also choose between a Tile solution and Tactile Solutions using only single domes or single bars. We carry a range of color options to enhance aesthetics and provide contrast requirements while staying compliant. The Tactile tiles are available in cast-in-place or surface applied versions to be installed on any existing surfaces or onto a newly built surface.</p>\r\n\r\n<p>Our TWSI&rsquo;s alert individuals with vision loss that there is potential danger for a slip or fall ahead or help assist safe guidance down a path by allowing them to feel it through their feet or cane. Our code-compliant tactile solutions provide reliable and durable products, easy installation and even fire resistance, if needed. Our tactile solutions for inside fully comply with all the code requirements, making safe wayfinding easier for the visually impaired.</p>\r\n\r\n<p>Here are some of the features of tactile for inside:</p>\r\n\r\n<ul>\r\n	<li>Available in a variety of sizes</li>\r\n	<li>Different colors available for aesthetic reasons while staying compliant</li>\r\n	<li>Versatile and easy to install</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565093263.png', 'image', 'Code Compliant Tactile Tiles for Indoor Installation | Tactile Attention / Wayfinding Surface Indicators', 'Tactile Solutions brings the ISO tactile tiles for indoor installation, including the attention & wayfinding tactile for existing or newly built indoor surface area.', 'ISO tactile tiles for indoor installation, tactile for indoor surface area, Tactile Ground Surface Indicators', '2019-08-06 06:37:43', '2019-09-05 17:21:47'),
(3, 3, '1567421767.png', 'banner image', 'Tactile put into “wet” concrete', 'tactile-put-into-wet-concrete', 'From: $18.09 Per sqft', '<p>Attention TWSIs include attention domes for potentially dangerous locations to actively alert people with vision loss. Our Code Compliant Tactile Cast-In-Place Solutions for new builds are available in various sizes and can be applied with ease to a straight or curved path. Our code-compliant solutions come in cast-iron and polymer cast-in-place tiles for outside and inside. They are easy to install at flat areas and stair edges. &nbsp;We carry solutions in various colors to enhance aesthetics and contrast requirements. All products are composed of top-quality materials making them highly durable for weather and wear-resistance.&nbsp;</p>\r\n\r\n<p>Our line of tactile walking surface indicators is fully compliant with Canadian Accessibility Codes and national building codes, AODA and ADA. Our tactile solutions are the right solution to help the visually impaired identify potential hazards on their path.</p>\r\n\r\n<p>Here are some of the features for tactile indicators applied into &ldquo;wet&rdquo; concrete:</p>\r\n\r\n<ul>\r\n	<li>Tiles available in different sizes</li>\r\n	<li>Availability in different materials to choose for indoor and outdoor installation</li>\r\n	<li>Weather and wear-resistant</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565791211.jpg', 'image', 'Code Compliant Tactile Tiles Indicator (TWSI) for Wet Concrete', 'Our code compliant wet concrete tactile indicators are the cast-in-place solutions for new builds and can be applied on straight or curved path or at stair edges.', 'wet concrete comply tactile indicators, wet concrete comply tactile indicators installation', '2019-08-06 06:43:43', '2019-09-02 15:13:07'),
(4, 4, '1567421782.png', 'banner image', 'Tactile “glued” to existent surface', 'tactile-glued-to-existent-surface', 'From: $12.40 Per sqft', '<p>Accessibility legislation requires installation of TWSI&rsquo;s on existent surfaces. Our Surface Applied TWSI&rsquo;s, come as wayfinding bars, attention domes and step edge stair nosing to safely guide visually impaired people. Our code-compliant tactile solutions come in tiles or single domes / bars. Tiles come in different sizes and can be cut to fit various applications including curved surfaces, making it easy to install without ripping out existent surfaces. Our surface applied tactile solutions are available in different materials for indoor &amp; outdoor installation. The tactile tiles are offered in various colors allowing you to choose the color of the tactile solution keeping it in contrast with the surface and can be installed onto a flat area or on stair edges. Our solutions are ADA compliant, wear and weather resistant and some even fire-resistant.</p>\r\n\r\n<p>Our code compliant &ldquo;glued&rdquo; tactile solutions offer easy installation for retrofitting when there is no requirement of creating a new surface. Whether it is municipal curbs or inside stair landings, the Surface Applied tactile solutions help to warn individuals as they reach an unsafe edge or help guide them along a safe path.</p>\r\n\r\n<p>Here are some of the features of tactile &ldquo;glued&rdquo; to the existent surface:</p>\r\n\r\n<ul>\r\n	<li>Availability in different materials</li>\r\n	<li>Range of colors to choose for surface contrast</li>\r\n	<li>Wear and weather resistant</li>\r\n	<li>Highly durable</li>\r\n	<li>5-year manufacturer warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565790718.jpg', 'image', 'Code Compliant Surface Applied (TWSI) Glued Tactile for Existent Surface', 'Our code compliant surface applied (TWSI) solutions include tactile glued to existing surfaces, available in different materials for indoor & outdoor installation.', 'installation of tactile walking surface indicators on existing surfaces, tactile glued to existing surfaces', '2019-08-06 06:49:25', '2019-09-05 17:23:20'),
(5, 5, '1567421790.png', 'banner image', 'Tactile Tiles', 'tactile-tiles', 'From: $12.40 Per sqft', '<p>Canadian accessibility legislation mandates the installation of Tactile tiles for sensing dangerous areas and for safe path-marking for the visually impaired. The tactile tiles can be felt through their cane or feet to prevent the risk of falls, slips, or any accidents. Our Code Compliant Tactile Solutions are available in different sizes and radius&rsquo; allowing for custom fitting and cutting to meet any area needs. Choose from a variety of materials and variety of colors to deal with aesthetic requirements while achieving mandatory contrast compliance. The tiles are available as Cast-In-Place and Surface Applied versions, are easy to install and have excellent durability and resistance features to withstand abrasions and thermal shock.</p>\r\n\r\n<p>Cast-In-Place tiles are used for newly poured concrete surfaces while for existent surfaces that need no replacement the Surface Applied version is the most cost-effective solution.</p>\r\n\r\n<p>Here are some of the features of tactile tiles:</p>\r\n\r\n<ul>\r\n	<li>Not affected by stains or water</li>\r\n	<li>Offers maximum durability and surface hardness</li>\r\n	<li>Available in a variety of colors</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565791504.png', 'image', 'Accessibility Code Compliant Tactile | Cast-In-Place and Surface Applied Tiles', 'Tactile Solutions brings the accessibility code compliant ISO tactile tiles available in different sizes and radius in cast-in place & surface applied versions.', 'ISO Tactile tile installation, tactile tile features', '2019-08-06 06:54:29', '2019-09-05 17:24:17'),
(6, 6, '1567421805.png', 'banner image', 'Tactile Single Domes & Bars', 'tactile-single-domes-&-bars', 'From: $1.99', '<p>Accessibility legislation requires the mandatory installation of tactile walking surface indicators for all floors. For situations in which maintaining the visually appealing aesthetics of floors is a priority, the tile solution would not be as appropriate as installing the single domes or bars solutions, making them the perfect choice to guide and assist the visually impaired to safety. Our Code Compliant Tactile Solutions include attention domes and wayfinding bars, which are drilled and adhered into the ground. Our solutions are available in different materials and colors, which make them aesthetically pleasing while complying with contrast requirements.</p>\r\n\r\n<p>Our solutions include stainless steel, brass and aluminum, which are all highly durable. Our attention domes and wayfinding bars are resistant to heavy traffic abuse and maintenance machinery.</p>\r\n\r\n<p>Here are some of the features of tactile single domes &amp; bars:</p>\r\n\r\n<ul>\r\n	<li>Optimum anti-slip design</li>\r\n	<li>Resistance to heavy traffic abuse</li>\r\n	<li>Availability in different material</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565791691.png', 'image', 'Code Compliant Tactile Tiles (TWSI) | Tactile Single Domes & Bars', 'Tactile Solutions brings the OBC compliant attention domes and wayfinding bars which are drilled and adhered to ground as tactile walking surface indicators.', 'CSA Advantage Stainless Steel Bars and Domes, attention Domes installation, OBC attention bars installation', '2019-08-06 06:59:28', '2019-09-02 15:17:44'),
(7, 7, '1567421814.png', 'banner image', 'Fire-resistant Tactile', 'fire-resistant-tactile', 'From: $30.78 Per sqft', '<p>In some cases, the municipal, provincial, federal legislation and the Fire Code require a mandatory installation of fire-resistant Tactile Walking Surface Indicators (TWSI) for both attention domes and wayfinding bars inside of a building. In these cases, our Code Compliant Fire-Resistant Tactile Solutions provide the solution you need. The fire-resistant tactile solution is available in different standard colors to choose in accordance with maintaining contrast to the surface. The ease of installation, durability, and of course, the feature of fire-resistance, makes our code compliant tactile solutions best pick.</p>\r\n\r\n<p>The reason for applying these tiles are simply to provide both Accessibility and Fire Code compliance for the visually impaired.</p>\r\n\r\n<p>Here are some of the features of fire-resistant tactile:</p>\r\n\r\n<ul>\r\n	<li>Available in a variety of colors</li>\r\n	<li>Highly durable, easy installation</li>\r\n	<li>Available in multiple sizes</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565791852.jpg', 'image', 'IFC standards Fire Resistant TWSI Tactile Surface installation', 'Our code complaint IFC fire resistant tactile indicators for both attention domes and wayfinding bars, mandatory by Fire-Code compliance for visually impaired.', 'IFC Fire resistant Tactile, fire resistant tactile surface, IFC fire resistance tactile installation', '2019-08-06 07:04:24', '2019-09-02 15:18:12'),
(8, 9, '1567421834.png', 'banner image', 'Attention Tactile', 'attention-tactile', 'From: $11.30 Per sqft', '<p>Canadian accessibility codes require the mandatory installation of attention Tactile Walking Surface Indicators (TWSI) to indicate the visually impaired that they are approaching a potentially dangerous location. Our Code Compliant Tactile Solutions with truncated domes are specifically made in different materials, colors and sizes to provide compliance in all situations, inside or outside, on newly built or on retrofit and existent surfaces. The various colors available are all code-compliant attention domes complying with color contrast requirements.</p>\r\n\r\n<p>Here are some of the features of attention domes:</p>\r\n\r\n<ul>\r\n	<li>Available in different materials and sizes</li>\r\n	<li>Offer weather and wear-resistance</li>\r\n	<li>Available in multiple colors for creating contrast</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565791961.jpg', 'image', 'Canadian Accessibility Code Compliant (TWSI) Attention Tactile Solution', 'Accessibility code mandates to install TWSI attention tactile solutions for indicating the visually impaired about approaching stairs, elevators or vehicular routes.', 'Attention Tactile Indicators, TWSI Attention Tactile Solutions', '2019-08-06 07:09:33', '2019-09-05 16:16:34'),
(9, 10, '1567421844.png', 'banner image', 'Wayfinding Tactile', 'wayfinding-tactile', 'From: $12.40 Per sqft', '<p>Accessibility legislation requires implementing solutions compliant with codes for creating safe pathways for the visually impaired. Our Code Compliant Tactile Solutions with wayfinding bars are for areas that are not dangerous but indicate a safe passage for the visually impaired. The code-compliant wayfinding bars are specifically made in different materials, colors and sizes to provide compliance in all situations, inside, outside, on newly built, on retrofit and existent surfaces. They are offered in various colors and can be used in alongside attention domes.</p>\r\n\r\n<p>Here are some of the features of wayfinding bars:</p>\r\n\r\n<ul>\r\n	<li>Available in different material&rsquo;s and sizes</li>\r\n	<li>Offer weather and wear-resistance</li>\r\n	<li>Available in multiple colors for creating contrast</li>\r\n	<li>5-year manufacturer&rsquo;s warranty&nbsp;</li>\r\n</ul>', NULL, NULL, NULL, '1565792099.jpg', 'image', 'Code Compliant Wayfinding Tactile Solutions | Code Compliant Wayfinding Bars', 'Our code compliant wayfinding bars are mandatory installation for creating safe pathways for visually impaired, providing compliance for inside & outside surfaces.', 'code-compliant wayfinding bars, Wayfinding Tactile Solutions, Access Surface Applied fire-resistant attention tiles', '2019-08-06 07:14:45', '2019-09-02 15:48:48'),
(10, 11, '1567421855.png', 'banner image', 'Stair nosing “glued” or “screwed” to existent surface', 'stair-nosing-glued-or-screwed-to-existent-surface', 'From: $7.40 Per Linear Foot﻿﻿', '<p>Safe staircases are a necessity, accessibility legislation requires the installation of 2 inches of slip resistant color contrast at the edge of every step. Our Code Compliant Step edge and&nbsp; Stair Nosing Solutions can be &ldquo;glued&rdquo; or &ldquo;screwed&rdquo; to any existent surface when creating a new floor isn&rsquo;t needed. Our code-compliant surface applied stair nosing can be installed into stairs of different materials and colors while complying with all safety standards including contrast requirements. The stair nosing for step edge are available in different sizes for application on stairs with different depths. Our surface applied stair nosing are for inside or out door applications, are easy to clean and are wear-resistant.</p>\r\n\r\n<p>Our stair nosing solutions are UV resistant and are in compliance with the Canadian accessibility codes AODA, CSA, ISO, provincial, and national building codes. Here are some of the features of stair nosing &ldquo;glued&rdquo; or &quot;screwed&rdquo; to existent surface:</p>\r\n\r\n<ul>\r\n	<li>Available in different colors</li>\r\n	<li>No radioactivity or toxicity</li>\r\n	<li>Wear and abrasion-resistant</li>\r\n	<li>Slip resistance</li>\r\n	<li>Easy to clean</li>\r\n</ul>', NULL, NULL, NULL, '1565790767.jpg', 'image', 'Code Compliant Stair Nosing Solutions - Accessibility Code Compliant AODA, CSA, ISO', 'Our code compliant stair nosing solutions can be glued or screwed to any surface for safety at step edge. These are installed mostly at top of stairs & elevators.', 'top of stairs, elevation, wheel chair ramps, Code Compliant Stair Nosing Solutions', '2019-08-06 07:19:22', '2019-09-03 19:57:22'),
(11, 12, '1567421885.png', 'banner image', 'Stair nosing put into “wet” concrete', 'stair-nosing-put-into-wet-concrete', 'From: $15.15 Per Linear Foot', '<p>Safe staircases are a necessity, accessibility standards specified in building codes require the installation of&nbsp; 2 inches of slip resistant color contrast at every step edge. Our code-compliant cast-in-place stair nosing can be installed in different colors complying with all safety standards including contrast requirements. The stair nosing for step edge are available in different sizes to apply on stairs with different depths and edge design. The Ecoglo Step Edge Cast in Place Stair Nosing&rsquo;s, are engineered for durability and designed for step edge safety with their colour contrasting non-slip material providing excellent step edge visibility.&nbsp;Our cast-in-place stair nosing are for inside and outside, easy to clean and are wear-resistant.&nbsp;</p>\r\n\r\n<p>Our stair nosing solutions possess UV stability and are in compliance with the Canadian accessibility codes AODA, CSA, ISO, provincial, and national building codes.</p>\r\n\r\n<p>Here are some of the features of stair nosing put into &quot;wet&quot; concrete:</p>\r\n\r\n<ul>\r\n	<li>Available in different colors</li>\r\n	<li>No radioactivity or toxicity</li>\r\n	<li>Wear and abrasion-resistant</li>\r\n	<li>Slip resistance</li>\r\n	<li>Easy to clean</li>\r\n</ul>', NULL, NULL, NULL, '1565792268.jpg', 'image', 'Code Compliant Stair Nosing Solutions | Stair Nosing Installation on Wet Concrete', 'Our stair nosing solutions for wet concrete comply with Canadian accessibility codes like AODA, CSA & ISO & can be easily installed at newly built concrete stairs.', 'Canadian accessibility codes AODA, CSA, ISO, Stair accessibility code compliant solution', '2019-08-06 07:23:37', '2019-09-04 04:06:10'),
(12, 13, '1567421899.png', 'banner image', 'Photoluminescent Stair nosing “glued” or “screwed” to existent surface', 'photoluminescent-stair-nosing-glued-or-screwed-to-existent-surface', 'From: $17.55 Per Linear Foot﻿﻿', '<p>Safe staircases in bad light condition are a necessity, accessibility legislation requires the installation of luminescent stair nosing. Our Code Compliant Photoluminescent Stair Nosing Solutions can be &ldquo;glued&rdquo; or &ldquo;screwed&rdquo; to any existent surface when creating a new floor isn&rsquo;t needed. Our code-compliant Photoluminescent stair nosing can be installed to stairs of different materials and colors while complying with all safety standards including contrast requirements. The stair nosing for step edge are available in different sizes to apply on stairs with different depths. Our Photoluminescent stair nosing are for inside and outside, easy to clean and are wear-resistant.</p>\r\n\r\n<p>Our code-compliant Photoluminescent stair nosing are completely environment-friendly and also possess the features to be durable against abrasion and wear resistance. High visibility in dim lighting and anti-slip feature of our surface applied Photoluminescent stair nosing are the right solutions for safety at the staircase. Here are some of the features of Photoluminescent stair nosing &ldquo;glued&rdquo; or &ldquo;screwed&rdquo; to the existent surface:</p>\r\n\r\n<ul>\r\n	<li>Available in different colors</li>\r\n	<li>High visibility in dark lighting conditions</li>\r\n	<li>Wear and abrasion-resistant</li>\r\n	<li>Slip resistance</li>\r\n	<li>Easy to clean&nbsp;</li>\r\n</ul>', NULL, NULL, NULL, '1565792367.jpg', 'image', 'Code Compliant Photoluminescent Stair Nosing Solutions | Surface Applied Luminescent Stair Nosing', 'Our code compliant Photoluminescent stair nosing solution can be glued or screwed to the surface for safe staircases that will be easily visible in bad light conditions.', 'Photoluminescent stair nosing installation, Code Compliant Photoluminescent Stair Nosing Solutions, Photoluminescent stair nosing “glued” or “screwed”', '2019-08-06 07:28:14', '2019-09-03 19:26:22'),
(13, 14, '1567421909.png', 'banner image', 'Photoluminescent Stair nosing put into “wet” concrete', 'photoluminescent-stair-nosing-put-into-wet-concrete', 'From: $17.55 Per Linear Foot﻿﻿', '<p>Safe staircases in bad light conditions are a necessity, accessibility legislation requires the installation of photoluminescent stair nosing. Our Code Compliant Photoluminescent Stair Nosing Solutions for newly built concrete stairs are the cast-in-place photoluminescent stair nosing. Our code-compliant cast-in-place photoluminescent stair nosing can be installed in different colors complying with all safety standards including contrast requirements. The photoluminescent stair nosing for step edge are available in different sizes to apply on stairs with different depths. Our cast-in-place photoluminescent stair nosing are for inside and outside, easy to clean and are wear-resistant.</p>\r\n\r\n<p>Our code-compliant photoluminescent stair nosing is completely environment-friendly and are also abrasion and wear resistance. High visibility in dim lighting and the anti-slip feature of our cast-in-place photoluminescent stair nosing make them the right solution for ensuring safe staircases. Here are some of the features of photluminescent cast-in-place stair nosing:</p>\r\n\r\n<ul>\r\n	<li>Available in different colors</li>\r\n	<li>High visibility in dark lighting conditions</li>\r\n	<li>Wear and abrasion-resistant</li>\r\n	<li>Slip resistance</li>\r\n	<li>Easy to clean&nbsp;</li>\r\n</ul>', NULL, NULL, NULL, '1565793115.jpg', 'image', 'Compliant Photoluminescent Stair Nosing Solutions for Newly Built Concrete Stairs', 'Our code compliant photoluminescent cast in place stair nosing is the reliable solution for step edge safety that can be put into wet concrete while building new stairs', 'Photoluminescent Stair Nosing', '2019-08-06 07:32:33', '2019-09-03 19:29:12'),
(14, 15, '1567421917.png', 'banner image', 'Exit Signs', 'exit-signs', 'From: $30.05', '<p>Accessibility legislation mandates installing Exit Signs and Emergency Lighting indoors, which has to be easily visible in all lighting conditions. Our Code Compliant Exit Signs, are completely qualified for energy conservation and renowned for sustainability come with a range of anodized aluminum mounting kits that guarantee the most efficient installation procedure for any location. The Exit signs offer the visibility rating at 50/75 feet and no regular maintenance. Our Exit Signs are compliant with the fire, building, and life safety codes and are wear resistance to reduce the maintenance costs. All Exit signs provide visibility and indicate the direction of egress in all light conditions.</p>\r\n\r\n<p>Our exit signs adhere to all the safety codes and compliances, directing people towards the exit, with properly visible directional signs. Here are some of the features of exit signs:</p>\r\n\r\n<ul>\r\n	<li>No need for battery or electricity</li>\r\n	<li>Non-toxic, non-radioactive</li>\r\n	<li>A universal mounting system for quick and versatile installation</li>\r\n	<li>50/75- foot visibility rating&nbsp;</li>\r\n	<li>High Visibility in Dark or Light Conditions</li>\r\n	<li>High Durability for Indoor and Outdoor Applications</li>\r\n	<li>Hard Wearing, Abrasion Resistant in all weather conditions</li>\r\n	<li>Easy to Clean</li>\r\n	<li>Environmentally Friendly</li>\r\n	<li>Flammable Resistant &ndash; Do not Burn</li>\r\n</ul>', NULL, NULL, NULL, '1565792515.jpg', 'image', 'Code Compliant Exit Signs | Emergency Indoor Lighting Installation', 'Tactile Solutions brings AODA code compliant exit signs and emergency lighting for indoors which are easily visible in all lighting conditions & is wear resistant.', 'Code Compliant Exit Signs, AODA code compliant exit signs', '2019-08-06 07:36:19', '2019-09-02 20:10:54'),
(15, 16, '1567421935.png', 'banner image', 'Photoluminescent Exit Signs', 'photoluminescent-exit-signs', 'From: $90.00', '<p>Accessibility legislation mandates installing Exit Signs and Emergency Lighting indoors, which has to be easily visible in all lighting conditions. In order to deal with poor lighting environments, the Code Compliant Photoluminescent Exit Signs are designed to be easily visible in any lighting conditions. Our Photoluminescent exit signs come with a universal mounting kit that guarantees the most efficient installation procedure for any location. The exit signs offer visibility at 50/75 feet. Our Photoluminescent Exit Signs are compliant with the fire, building and life safety codes, providing proper visibility even in the dark with no need of maintenance or batteries, just the occasional cleaning. The Photoluminescent exit signs require exposure to at least 54 lux of natural or artificial light to absorb the amount of light needed to glow in the dark.</p>\r\n\r\n<p>Here are some of the features of Photoluminescent exit signs:</p>\r\n\r\n<ul>\r\n	<li>No need for battery or electricity</li>\r\n	<li>Non-toxic, non-radioactive</li>\r\n	<li>Visibility in dark conditions</li>\r\n	<li>50/75- foot visibility rating</li>\r\n	<li>LEED points qualified for energy conservation and sustainability</li>\r\n	<li>ULC S572 listed for Photoluminescent and Self-Luminous Exit Signs</li>\r\n	<li>No electricity or batteries required</li>\r\n	<li>Indoor installation</li>\r\n	<li>Standard twenty-five (25) year warranty</li>\r\n	<li>ULC testing/listing no. E344049/4RG2</li>\r\n	<li>Frame and universal mounting kit constructed of clear anodized aluminum</li>\r\n</ul>', NULL, NULL, NULL, '1565790850.jpg', 'image', 'Code Compliant Photoluminescent Exit Signs | CSA Emergency Photoluminescent Exit Signs', 'AODA building accessibility code mandates exit signs and emergency lighting for indoors. Tactile Solutions brings these exit signs, visible in poor lighting.', 'exit signs, CSA compliant, AODA building accessibility code', '2019-08-06 07:40:12', '2019-09-03 19:31:47'),
(17, 8, '1567421942.png', 'banner image', 'Tactile by Material', 'tactile-by-material', 'From: $12.40 Per sqft', '<p>Canadian Accessibility legislation mandates the installation of tactile solutions at potentially dangerous locations and as path leading indicators for people with vision loss. Our Code Compliant Tactile Solutions can be easily installed in a variety of locations where needed, by choosing the right material for inside or outside surfaces. For outside surfaces we offer cast-iron or polymer solutions and for the interiors there are polymer, rubber, porcelain, stainless steel, aluminum and brass solutions to provide utmost flexibility for the surrounding floor. The solutions come in a variety of colors to choose from to maintain color contrast with the surface.</p>\r\n\r\n<p>The available solutions are AODA and ADA compliant attention indicators (truncated domes) for warning and tactile wayfinding indicators (bars) for safe guidance path-marking. Our tactile solutions are durable and flexible tactile indicators perfect for those who design and construct the finest commercial, institutional, and public environments.</p>\r\n\r\n<p>Here are some of the features of our tactile solutions:</p>\r\n\r\n<ul>\r\n	<li>Available in different materials</li>\r\n	<li>Materials suitable for both interior and exterior installation</li>\r\n	<li>Available in different color standards</li>\r\n	<li>Weather and wear-resistant</li>\r\n	<li>5-year manufacturer&rsquo;s warranty</li>\r\n</ul>', NULL, NULL, NULL, '1565795961.jpg', 'image', 'Tactile Tiles Materials |Provincially Mandated Tactile Solution Installation', 'We bring tactile solutions of different materials, including cast-iron & polymer tactile for outside and stainless steel & rubber solutions for inside surfaces.', 'polymer tactile warning plates, Materials for tactile solution, cast iron tactile, stainless steel tactile installation', '2019-08-14 09:49:21', '2019-09-05 17:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `sol_cats`
--

CREATE TABLE `sol_cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `solution_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sol_cats`
--

INSERT INTO `sol_cats` (`id`, `solution_id`, `category_id`, `created_at`, `updated_at`) VALUES
(182, 6, 13, '2019-08-31 14:21:34', '2019-08-31 14:21:34'),
(183, 9, 13, '2019-08-31 14:21:34', '2019-08-31 14:21:34'),
(188, 10, 14, '2019-08-31 20:32:50', '2019-08-31 20:32:50'),
(189, 11, 15, '2019-08-31 20:38:01', '2019-08-31 20:38:01'),
(190, 15, 19, '2019-08-31 20:46:19', '2019-08-31 20:46:19'),
(198, 14, 18, '2019-09-02 12:51:48', '2019-09-02 12:51:48'),
(208, 17, 24, '2019-09-02 19:47:03', '2019-09-02 19:47:03'),
(209, 17, 26, '2019-09-02 19:47:40', '2019-09-02 19:47:40'),
(210, 17, 27, '2019-09-02 19:48:30', '2019-09-02 19:48:30'),
(211, 17, 25, '2019-09-02 19:49:07', '2019-09-02 19:49:07'),
(212, 17, 28, '2019-09-02 19:50:02', '2019-09-02 19:50:02'),
(213, 17, 29, '2019-09-02 19:51:06', '2019-09-02 19:51:06'),
(216, 10, 16, '2019-09-04 12:25:37', '2019-09-04 12:25:37'),
(217, 12, 16, '2019-09-04 12:25:37', '2019-09-04 12:25:37'),
(218, 11, 17, '2019-09-04 12:27:13', '2019-09-04 12:27:13'),
(219, 13, 17, '2019-09-04 12:27:13', '2019-09-04 12:27:13'),
(221, 17, 23, '2019-09-05 17:26:33', '2019-09-05 17:26:33'),
(222, 4, 31, '2019-09-09 12:52:43', '2019-09-09 12:52:43'),
(223, 9, 31, '2019-09-09 12:52:43', '2019-09-09 12:52:43'),
(224, 3, 30, '2019-09-09 12:52:50', '2019-09-09 12:52:50'),
(225, 9, 30, '2019-09-09 12:52:50', '2019-09-09 12:52:50'),
(230, 9, 32, '2019-09-09 12:56:50', '2019-09-09 12:56:50'),
(236, 9, 33, '2019-09-16 23:20:59', '2019-09-16 23:20:59'),
(241, 3, 6, '2019-09-25 06:15:53', '2019-09-25 06:15:53'),
(242, 8, 6, '2019-09-25 06:15:53', '2019-09-25 06:15:53'),
(243, 4, 10, '2019-09-25 06:16:34', '2019-09-25 06:16:34'),
(244, 8, 10, '2019-09-25 06:16:34', '2019-09-25 06:16:34'),
(245, 1, 1, '2019-09-25 06:16:53', '2019-09-25 06:16:53'),
(246, 2, 1, '2019-09-25 06:16:53', '2019-09-25 06:16:53'),
(247, 5, 1, '2019-09-25 06:16:53', '2019-09-25 06:16:53'),
(248, 3, 8, '2019-09-25 06:17:34', '2019-09-25 06:17:34'),
(249, 8, 8, '2019-09-25 06:17:34', '2019-09-25 06:17:34'),
(250, 4, 11, '2019-09-25 06:18:47', '2019-09-25 06:18:47'),
(251, 8, 11, '2019-09-25 06:18:47', '2019-09-25 06:18:47'),
(254, 7, 22, '2019-09-25 06:20:37', '2019-09-25 06:20:37'),
(255, 8, 22, '2019-09-25 06:20:37', '2019-09-25 06:20:37'),
(256, 1, 2, '2019-09-25 06:21:02', '2019-09-25 06:21:02'),
(257, 2, 2, '2019-09-25 06:21:02', '2019-09-25 06:21:02'),
(258, 5, 2, '2019-09-25 06:21:02', '2019-09-25 06:21:02'),
(259, 8, 34, '2019-09-25 06:25:19', '2019-09-25 06:25:19'),
(260, 2, 4, '2019-09-25 06:25:55', '2019-09-25 06:25:55'),
(261, 4, 4, '2019-09-25 06:25:55', '2019-09-25 06:25:55'),
(262, 5, 4, '2019-09-25 06:25:55', '2019-09-25 06:25:55'),
(263, 8, 35, '2019-09-25 06:28:59', '2019-09-25 06:28:59'),
(264, 2, 5, '2019-09-25 06:29:11', '2019-09-25 06:29:11'),
(265, 4, 5, '2019-09-25 06:29:11', '2019-09-25 06:29:11'),
(266, 5, 5, '2019-09-25 06:29:11', '2019-09-25 06:29:11'),
(267, 3, 9, '2019-09-25 06:29:49', '2019-09-25 06:29:49'),
(268, 8, 9, '2019-09-25 06:29:49', '2019-09-25 06:29:49'),
(269, 6, 12, '2019-09-25 06:36:44', '2019-09-25 06:36:44'),
(270, 8, 12, '2019-09-25 06:36:44', '2019-09-25 06:36:44'),
(271, 8, 36, '2019-09-25 06:40:44', '2019-09-25 06:40:44'),
(272, 1, 3, '2019-09-25 06:40:54', '2019-09-25 06:40:54'),
(273, 5, 3, '2019-09-25 06:40:54', '2019-09-25 06:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `stair_nosings`
--

CREATE TABLE `stair_nosings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stair_put` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoluminescent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stair_width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stair_nosings`
--

INSERT INTO `stair_nosings` (`id`, `name`, `lname`, `email`, `phone`, `company_name`, `stair_put`, `photoluminescent`, `stair_width`, `additional`, `shipped`, `created_at`, `updated_at`) VALUES
(1, 'fret', 'test', 'testingdeveloper1@gmail.com', '9876543210', 'wewe', 'Surface', 'NO', 'wew', 'tt', 'ee', '2019-08-29 08:58:28', '2019-08-29 08:58:28'),
(2, 'Email', 'Email', 'newdeftsoft@gmail.com', '9876543210', 'Email', 'Surface', 'Yes', 'Email', 'Email', 'Email', '2019-08-29 11:47:30', '2019-08-29 11:47:30'),
(3, 'Email Check', 'Email Check', 'newdeftsoft@gmail.com', '9876543210', 'Email Check', 'Surface', 'Yes', 'Email Check', 'Email Check', 'Email Check', '2019-08-29 11:49:26', '2019-08-29 11:49:26'),
(4, 'Email Check', 'Email Check', 'newdeftsoft@gmail.com', '9876543210', 'Email Check', 'Surface', 'Yes', 'Email Check', 'Email Check', 'Email Check', '2019-08-29 11:56:11', '2019-08-29 11:56:11'),
(5, 'Rt', 'Rt', 'gautamg64@gmail.com', '9876543210', 'rtrt', 'Surface', 'Yes', 'rggrgr', 'rgre', 'rgrgrg', '2019-08-29 11:59:05', '2019-08-29 11:59:05'),
(6, 'test1', 'test', 'newdeftsoft@gmail.com', '98766666', 'efe', 'Surface', 'Yes', 'Email', 'Exit', 'wee', '2019-08-29 12:02:20', '2019-08-29 12:02:20'),
(7, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:08', '2019-08-29 14:52:08'),
(8, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:09', '2019-08-29 14:52:09'),
(9, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:09', '2019-08-29 14:52:09'),
(10, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:10', '2019-08-29 14:52:10'),
(11, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:10', '2019-08-29 14:52:10'),
(12, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:10', '2019-08-29 14:52:10'),
(13, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:11', '2019-08-29 14:52:11'),
(14, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:11', '2019-08-29 14:52:11'),
(15, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:11', '2019-08-29 14:52:11'),
(16, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:11', '2019-08-29 14:52:11'),
(17, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:12', '2019-08-29 14:52:12'),
(18, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:12', '2019-08-29 14:52:12'),
(19, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:12', '2019-08-29 14:52:12'),
(20, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:13', '2019-08-29 14:52:13'),
(21, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:14', '2019-08-29 14:52:14'),
(22, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:14', '2019-08-29 14:52:14'),
(23, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:14', '2019-08-29 14:52:14'),
(24, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:15', '2019-08-29 14:52:15'),
(25, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:15', '2019-08-29 14:52:15'),
(26, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:15', '2019-08-29 14:52:15'),
(27, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:15', '2019-08-29 14:52:15'),
(28, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:16', '2019-08-29 14:52:16'),
(29, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:16', '2019-08-29 14:52:16'),
(30, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:16', '2019-08-29 14:52:16'),
(31, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:16', '2019-08-29 14:52:16'),
(32, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:17', '2019-08-29 14:52:17'),
(33, 'rr', 'dfdf', 'testingdeveloper1@gmail.com', '9877777', 'wewe', 'Wet', 'NO', 'jhjhjh', 'jgjgjg', 'chgghgh', '2019-08-29 14:52:17', '2019-08-29 14:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `csc_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `title`, `price`, `slug`, `banner_image`, `alt_banner_image`, `category_id`, `csc_category_id`, `description`, `image`, `image_alt`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Armor Tile Tactile System', 'From: $18.09Per sqft', 'armor', '1567422009.png', 'From: $18.09Per sqft', '23', 'armor', '<p>Armor-Tile offers the largest selection of Fully AODA/CSA/ISO and OBC compliant detectable warning tactile system products for Transit platforms, Multi-modal transit centers, Curb ramps, Stairwells, Escalator approaches. Pedestrian crossings, Parking areas, Reflecting pools and Building entrances.</p>', '1566216986.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:16:05', '2019-09-02 15:00:09'),
(2, 'AccessTile', 'From: $18.09Per sqft', 'access', '1567422019.png', 'From: $18.09Per sqft', '23', 'access', '<p>Introducing the Ultimate SolutionTM in Tactile Walking Surface Indicators (TWSI). Access&reg; Tile Replaceable Cast in Place has combined proven engineered polymers, processing and material technologies with innovative and intelligent design features to create the ultimate replaceable tactile walking surface indicators. Maximized efficiencies in manufacturing, materials sourcing and<br />\r\nproduct specifications deliver the most cost-effective solution in the industry. Access&reg; Tile truncated dome and wayfinding bar tiles are the industry leader for durability, weather and wear resistance and are available as surface applied tiles and directional bars.</p>', '1566217032.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:17:36', '2019-09-02 15:00:19'),
(3, 'Elan Tile', 'From: $18.09Per sqft', 'elan', '1567422039.png', 'Alt Image', '27', 'elan', '<p>ElanTM Tile is the ultimate porcelain tactile indicator chosen by professionals who design and construct the finest commercial, institutional and public environments.&nbsp;<br />\r\nIncorporating the best raw materials in the market, ElanTM Tile far exceeds the EN 14411 standard, allowing the product to meet the designation of &ldquo;Porcelain Stoneware&rdquo; and to be suitable for both interior and exterior applications.&nbsp;<br />\r\nOffering highly durable and versatile tactile walking surface indicators (truncated domes) for warning, and direction indicators for wayfinding, the ElanTM Tile line of products signals the newest generation of excellence from Kinesik.</p>', '1566217153.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:22:34', '2019-09-02 15:00:40'),
(4, 'EON Tile', 'From: $18.09Per sqft', 'eon', '1567422045.png', 'Alt Image', '26', 'eon', '<p>EonTM Tile is a durable and flexible tactile indicator chosen first by professionals who design and construct the finest commer-cial, institutional and public environments.<br />\r\nEonTM Tile is state of the art polymers compounded together to create category leading quality and a contemporary look and finish.&nbsp;<br />\r\nSuitable for a variety of applications such as airport con-courses, railway stations, shopping centres, department stores, supermarkets, hospitals, swimming pools, schools, banks, com-munity centres or most any high traffic environment.&nbsp;<br />\r\nEonTM Tile&rsquo;s line of products offer attention indicators (truncated domes) for warning and tactile direction indicators for way finding.&nbsp;<br />\r\nEonTM Tile is part of the newest generation of excellence in warning surfaces from Kinesik Engineered Products Incorporated.<br />\r\nTactile Walking Surface Indicators (TWSI) products for the following and many more applications.</p>', '1566217114.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:23:12', '2019-09-02 15:00:45'),
(5, 'Advantage Tactile Systems One Plate', 'From: $18.09Per sqft', 'advantage-one-plate', '1567422059.png', 'Alt Image', '25', 'advantage/steel-cast-in-place', '<p>Advantage One Stainless Steel Bars and Domes tactile walking surface indicators are designed for all interior accessibility solutions. The advantage One plate indicators are machined from a solid piece of 316L Marine Grade stainless steel and fastened to a Stainless-Steel plate that will be applied to the floor, offered as either attention domes or wayfinding bars. The Advantage One plate incorporates a texture into the stainless steel for permanent slip resistance while enhancing the aesthetics of the tile. The Advantage One attention dome and wayfinding bar plates are in full compliance with Canadians Accessibility codes while offering the lowest life cycle cost eliminating long term safety concerns and accessibility limitations.&nbsp;</p>\r\n\r\n<p>Advantage One Stainless Steel Wayfinding Bars and Attention Dome Plates applications:&nbsp;<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', '1566299239.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:23:46', '2019-09-02 15:00:59'),
(6, 'Cast Iron Cast-In-Place', 'From: $18.09Per sqft', 'cast-iron-cast-in-place', '1567422066.png', 'Alt Image', '24', 'advantage/cast-iron-cast-in-place', '<p>Advantage&trade; Cast Iron Tactile Walking Surface Indicator (TWSI) plates are manufactured in strict accordance with ASTM A-48, Class 35B Grey Cast Iron.&nbsp;<br />\r\nThe Advantage&trade; Cast in Place System is lightweight with exceptional high strength, and utilizes the most advanced metallurgical Engineering Science and Technology to meet and exceed the most stringent municipal standards.&nbsp;<br />\r\nAdvantage&trade; Cast Iron is aesthetically pleasing, has exceptional longevity and incorporates integral texture for a permanent slip resistant surface.</p>', '1567247372.jpg', 'Alt Image', 'meta title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:24:32', '2019-09-02 15:01:06'),
(7, 'Advantage Tactile Systems Single Domes & Bars', 'From: $18.09Per sqft', 'advantage-single-domes-&-bars', '1567422080.png', 'Alt Image', '28', 'advantage/single-domes-&-bars', '<p>Advantage One Individual Stainless Steel Attention Domes and Wayfinding bars are designed to for interior applications enhancing the look of your project while complying with Canadian accessibility code requirements. The stainless steel individual attention domes and wayfinding bars are composed of a slip resistant micro texture and are available in different sizes and colours. The Advantage one individual attention domes and wayfinding bars are drilled and adhered directly into the ground. The Advantage One Individual Wayfinding Bars and Attention Dome Tactile Walking Surface Indicators (TWSI), provide a reliable solution for interior projects in all spaces meeting Canadian Accessibility regulations, ensuring safety for all pedestrians including the visually impaired, acting as warning indicators and path marking indicators preventing slips, falls and assisted guidance on your desired path.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Advantage One Individual Wayfinding Bars and Attention Domes for the following interior applications and many more:<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', '1566217248.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 00:27:11', '2019-09-02 15:01:20'),
(8, 'Advantage Tactile Systems Single Domes & Bars', 'From: $18.09Per sqft', 'advantage-single-domes-&-bars', '1567422092.png', 'Alt Image', '29', 'advantage/single-domes-&-bars', '<p>Advantage One Individual Stainless Steel Attention Domes and Wayfinding bars are designed to for interior applications enhancing the look of your project while complying with Canadian accessibility code requirements. The stainless steel individual attention domes and wayfinding bars are composed of a slip resistant micro texture and are available in different sizes and colours. The Advantage one individual attention domes and wayfinding bars are drilled and adhered directly into the ground. The Advantage One Individual Wayfinding Bars and Attention Dome Tactile Walking Surface Indicators (TWSI), provide a reliable solution for interior projects in all spaces meeting Canadian Accessibility regulations, ensuring safety for all pedestrians including the visually impaired, acting as warning indicators and path marking indicators preventing slips, falls and assisted guidance on your desired path.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Advantage One Individual Wayfinding Bars and Attention Domes for the following interior applications and many more:<br />\r\n&bull; Revolving Door Approaches&nbsp;<br />\r\n&bull; Wheelchair Ramps&nbsp;<br />\r\n&bull; Parking Areas&nbsp;<br />\r\n&bull; Top of Stair Landings&nbsp;<br />\r\n&bull; Turnstile and Gate Access&nbsp;<br />\r\n&bull; Escalator Approaches&nbsp;<br />\r\n&bull; Transit Platforms&nbsp;<br />\r\n&bull; Multi-Modal Transit Stations</p>', '1566217256.jpg', 'Alt Image', 'Meta Title', '<p>Meta Description</p>', 'Meta Keyword', '2019-08-19 03:08:22', '2019-09-02 15:01:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_references`
--

CREATE TABLE `sub_references` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference_id` int(11) NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_references`
--

INSERT INTO `sub_references` (`id`, `reference_id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'CODE Requirements for Safety Way Guidance', '2019-08-23 05:13:47', '2019-08-23 05:13:47'),
(2, 3, '2', 'Access Tile Drawings', '2019-08-23 05:14:27', '2019-08-27 12:18:21'),
(3, 3, '3', 'Advantage Tile drawings', '2019-08-23 05:14:49', '2019-08-27 12:19:01'),
(4, 3, '1', 'Armor Tile drawings', '2019-08-23 05:15:11', '2019-08-27 12:19:11'),
(5, 3, '5', 'Elan Tile drawing', '2019-08-23 05:15:30', '2019-08-27 12:19:21'),
(6, 3, '4', 'EON Tile drawing', '2019-08-23 05:15:47', '2019-08-27 12:19:33'),
(7, 4, '2', 'Access Tile instalation', '2019-08-23 05:16:15', '2019-08-26 10:26:59'),
(8, 4, '3', 'Advantage Tile Instalation', '2019-08-23 05:16:43', '2019-08-27 12:20:20'),
(9, 4, '1', 'Armor Tile instalation', '2019-08-23 05:17:04', '2019-08-27 12:20:29'),
(10, 4, '6', 'Ecoglo instalation', '2019-08-23 05:17:24', '2019-08-27 12:20:43'),
(11, 4, 'check', 'Special instalation instructions', '2019-08-23 05:17:40', '2019-08-27 12:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `solution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `cat_id`, `solution_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 1),
(4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tiles_specifications`
--

CREATE TABLE `tiles_specifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sqft` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titles_per_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_per_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Thomas', 'csc@csc-inc.ca', NULL, '$2y$10$tIDx4DntduBJjhxcJk18.u8trcwSfhfbYgGoETSe3A2t7VFTV./ue', 'kTsIqBgUVoTefiyUFeCU75nWWMFv86r3TACEYFGVQ6DQMQEDsjNpyMFOFznL', '2019-09-03 13:48:35', '2019-09-04 09:13:07', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_products`
--
ALTER TABLE `cart_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_users`
--
ALTER TABLE `cart_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_subcats`
--
ALTER TABLE `cat_subcats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colours`
--
ALTER TABLE `colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_categories`
--
ALTER TABLE `csc_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_cat_subs`
--
ALTER TABLE `csc_cat_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_colours`
--
ALTER TABLE `csc_colours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_details`
--
ALTER TABLE `csc_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_sub_categories`
--
ALTER TABLE `csc_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_sub_dets`
--
ALTER TABLE `csc_sub_dets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csc_tiles_specifications`
--
ALTER TABLE `csc_tiles_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exit_signs`
--
ALTER TABLE `exit_signs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_pdfs`
--
ALTER TABLE `reference_pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sol_cats`
--
ALTER TABLE `sol_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stair_nosings`
--
ALTER TABLE `stair_nosings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_references`
--
ALTER TABLE `sub_references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiles_specifications`
--
ALTER TABLE `tiles_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cart_products`
--
ALTER TABLE `cart_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT for table `cart_users`
--
ALTER TABLE `cart_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cat_subcats`
--
ALTER TABLE `cat_subcats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `colours`
--
ALTER TABLE `colours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `csc_categories`
--
ALTER TABLE `csc_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `csc_cat_subs`
--
ALTER TABLE `csc_cat_subs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `csc_colours`
--
ALTER TABLE `csc_colours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1218;

--
-- AUTO_INCREMENT for table `csc_details`
--
ALTER TABLE `csc_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `csc_sub_categories`
--
ALTER TABLE `csc_sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `csc_sub_dets`
--
ALTER TABLE `csc_sub_dets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `csc_tiles_specifications`
--
ALTER TABLE `csc_tiles_specifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exit_signs`
--
ALTER TABLE `exit_signs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reference_pdfs`
--
ALTER TABLE `reference_pdfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sol_cats`
--
ALTER TABLE `sol_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `stair_nosings`
--
ALTER TABLE `stair_nosings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_references`
--
ALTER TABLE `sub_references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiles_specifications`
--
ALTER TABLE `tiles_specifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
