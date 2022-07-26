/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : 127.0.0.1:3306
 Source Schema         : mennr_cms

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 05/09/2022 08:25:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
BEGIN;
INSERT INTO `admins` VALUES (1, 'admin', '$2y$10$SR9rmo32ZhR1pZSpkt6xReu65tVzgCvI5KisOuN.U2MEY3iMRw/eK', NULL, '2022-07-21 12:09:32', '2022-07-21 12:09:32');
COMMIT;

-- ----------------------------
-- Table structure for contact_saves
-- ----------------------------
DROP TABLE IF EXISTS `contact_saves`;
CREATE TABLE `contact_saves` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `query_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contact_saves
-- ----------------------------
BEGIN;
INSERT INTO `contact_saves` VALUES (1, 'Kai Akira', NULL, 'kai@mennr.com', NULL, NULL, NULL, NULL, NULL, 'Hi\r\nThis is test email.\r\nThanks', '2022-08-05 16:38:37', '2022-08-05 16:38:37');
COMMIT;

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
BEGIN;
INSERT INTO `contacts` VALUES (1, '', '', '', '', NULL, NULL);
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for faqs
-- ----------------------------
DROP TABLE IF EXISTS `faqs`;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of faqs
-- ----------------------------
BEGIN;
INSERT INTO `faqs` VALUES (1, 'Appointment and Booking', 'What is online appointment booking?', '<p>A salon/spa online appointment system is essentially a cloud-based software which allows guests to book, reschedule, and <i><strong>cancel</strong></i> appointments anytime, anywhere. The salon software enables convenient and secure appointment scheduling via a computer, laptop, phone, or tablet by accessing either a webpage or an app. It is designed to work as the first point of interaction between your business and your guests. One of the biggest advantages of an online salon/spa appointment booking system is that it makes your business available to your guests 24/7.</p>', '2022-08-02 16:40:35', '2022-08-02 20:31:41');
INSERT INTO `faqs` VALUES (2, 'Appointment and Booking', 'How successful can an appointment booking software be for salon/spa owners?', 'For businesses in the beauty and wellness sector, a salon/spa booking software works wonders. The software helps streamline the entire administrative process from booking appointments to taking payments. In addition to running the appointment book, the software can also help businesses manage their inventory, employees, and marketing. With almost every task being automated, salon and spa owners can shift their attention to important business goals such as increasing revenue and sales.', '2022-08-02 16:40:59', '2022-08-02 16:40:59');
INSERT INTO `faqs` VALUES (3, 'Billing and Payments', 'How can Zenoti billing & payment be useful for salon owners?', '<p>Zenoti billing and payments is your one stop solution to accept and process payments for all kinds of services and products that you offer. The fully PCI compliant, system is fast, reliable and secure. Designed to take the hard work out of the equation, the billings and payments module allows you to generate error free invoices and process payments for all kinds of transactions such as in-store, online or app based sales. With enhanced features such as integrated deposit report, dispute management, transparent pricing, no commitment contracts, and the features to save payment method within the guest profile, the billings and payments module works to give your clients a <a href=\"https://www.zenoti.com/solutions/elevate-the-customer-experience\">seamless experience</a>. Elevate your guest’s contactless experience of payments by deploying Zenoti’s billing and payments module.</p>', '2022-08-03 01:59:19', '2022-08-03 01:59:19');
INSERT INTO `faqs` VALUES (4, 'Billing and Payments', 'What are the different payment options available with Zenoti?', '<p>The system is designed to accord complete convenience and peace of mind for your guests. Therefore, at the heart of the system is to concept to make the guest feel empowered during the entire exercise. It is with this mantra that the Zenoti billing and payments system is configured to accept payments through both contact and contactless methods. Dip transactions, credit cards, gift cards and vouchers, phone based payment systems such as Apple Pay, Samsung Pay or Android Pay all work seamlessly and effortlessly on the platform. <a href=\"https://www.zenoti.com/zenoti-payments\">Zenoti payments </a>supports both in store, and online payments for in –app or webstore purchases. As the module is 100% PCI compliant both you and your guests can be completely at ease about the security of the data.</p>', '2022-08-03 01:59:49', '2022-08-03 01:59:49');
INSERT INTO `faqs` VALUES (5, 'Marketing and Sales', 'What is a marketing software platform?', '<p>A marketing software platform is a tool that enables businesses to build, track, and analyze marketing campaigns. It helps salons and spas better understand their guests’ demographics and preferences and target them with promotions to suit their needs, taste, and budget. The salon/spa marketing software platform is often a module within the <a href=\"https://www.zenoti.com/\">salon/spa management software</a>. It runs data analytics to recommend personalized marketing ideas, which are likely to generate better results with your guests.</p>', '2022-08-03 16:53:02', '2022-08-03 16:53:02');
INSERT INTO `faqs` VALUES (6, 'Marketing and Sales', 'How can Zenoti marketing software be useful for salon owners?', '<p>Zenoti’s marketing software is a highly intuitive tool which deploys advanced data analytics to increase the sales of both goods and services. It analyzes every guest’s purchase history to ascertain their profile, spend patterns, and budget. Using these parameters, it gives salon staff a better understanding of guest requirements and helps them upsell both products and services. It prevents salons from indulging in blind marketing campaigns, saving both time and resources. Furthermore, targeted messaging tends to have better conversion rates than general campaigns, with increased revenue as a result.</p>', '2022-08-03 16:53:29', '2022-08-03 16:53:29');
INSERT INTO `faqs` VALUES (7, 'Business Management', 'What is a business management software?', '<p>A business management software is a tool that is designed to assist salon and spa business owners to handle daily admin in an efficient way. The software helps streamline and simplify workflows by eliminating and automating repetitive tasks. Salon and spa management software handles guest information and conducts daily administrative tasks such as appointments, scheduling, raising invoices, <a href=\"https://www.mennr.com/billing-payments\">processing payments</a>, and recording customer feedback. With much of the back-end work being done by the salon/spa management software, the salon management team and staff can focus on delivering a <a href=\"https://www.zenoti.com/solutions/elevate-the-customer-experience\">superior guest experience</a> and increasing sales and revenue.</p>', '2022-08-03 17:43:10', '2022-08-03 17:43:10');
INSERT INTO `faqs` VALUES (8, 'Business Management', 'What should you look for in a business management software application?', '<p>When it comes to evaluating a <a href=\"https://www.mennr.com/\">salon/spa business management software</a>, one must bear some key factors in mind. These are user-friendliness, process control, guest management, accessibility, data insights, storage and safety, customer support, and value for money. In order evaluate these factors it is important to understand how well the salon/spa management software aligns with the goals of your business. Deploying a salon business management software should maximize the efficiency of your operations, give you new ways to connect with guests, and improve your revenue.</p>', '2022-08-03 17:44:00', '2022-08-03 17:44:00');
INSERT INTO `faqs` VALUES (9, 'pricing', 'How does the 14-day free trial work?', '<p>You can reach out to 200 people (prospects) in the 14 days, and access all the features in the Pro Plan.</p>', '2022-08-12 22:01:27', '2022-08-12 22:01:27');
INSERT INTO `faqs` VALUES (10, 'pricing', 'What happens after my free trial ends?', '<p>Sit aperiam provident doloribus eius voluptate odio alias nisi explicabo asperiores impedit, sint illum accusantium laborum facilis.</p>', '2022-08-12 22:02:30', '2022-08-12 22:02:30');
COMMIT;

-- ----------------------------
-- Table structure for free_demos
-- ----------------------------
DROP TABLE IF EXISTS `free_demos`;
CREATE TABLE `free_demos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` enum('private','public') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees` enum('0-49','50-99','100-500') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','canceled','accepted','rejected','completed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of free_demos
-- ----------------------------
BEGIN;
INSERT INTO `free_demos` VALUES (2, 'Kai', 'Akira', 'kai@mennr.com', '16144524242', 'public', '50-99', 'Mennr', 'pending', '2022-08-13 18:09:28', '2022-08-13 18:09:28');
COMMIT;

-- ----------------------------
-- Table structure for histories
-- ----------------------------
DROP TABLE IF EXISTS `histories`;
CREATE TABLE `histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of histories
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for leaders
-- ----------------------------
DROP TABLE IF EXISTS `leaders`;
CREATE TABLE `leaders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of leaders
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_05_03_000001_create_customer_columns', 1);
INSERT INTO `migrations` VALUES (4, '2019_05_03_000002_create_subscriptions_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_05_03_000003_create_subscription_items_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_06_17_134538_create_admins_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_06_17_194541_create_pages_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_06_18_122717_create_posts_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_06_26_093240_create_faqs_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_06_28_003724_update_description_column_on_posts_table', 2);
INSERT INTO `migrations` VALUES (13, '2022_06_30_000420_update_title_to_nullable_on_posts_table', 2);
INSERT INTO `migrations` VALUES (14, '2022_06_30_124555_create_leaders_table', 2);
INSERT INTO `migrations` VALUES (15, '2022_07_01_103405_create_histories_table', 2);
INSERT INTO `migrations` VALUES (16, '2022_07_01_110724_update_description_column_to_text_on_posts_table', 2);
INSERT INTO `migrations` VALUES (17, '2022_07_07_054913_add_tags_column_to_post_table', 2);
INSERT INTO `migrations` VALUES (18, '2022_08_01_215107_create_testimonials_table', 3);
INSERT INTO `migrations` VALUES (19, '2022_08_02_072622_create_contacts_table', 4);
INSERT INTO `migrations` VALUES (20, '2022_08_02_111251_create_contact_saves_table', 4);
INSERT INTO `migrations` VALUES (21, '2022_08_03_091346_add_new_columns_to_users_table', 4);
INSERT INTO `migrations` VALUES (22, '2022_08_03_121727_add_email_column_to_admins_table', 4);
INSERT INTO `migrations` VALUES (23, '2022_08_04_061609_create_newsletters_table', 4);
INSERT INTO `migrations` VALUES (24, '2022_08_05_053032_add_user_level_columns_to_users_table', 4);
INSERT INTO `migrations` VALUES (25, '2022_08_05_183919_create_pricing_table', 5);
INSERT INTO `migrations` VALUES (26, '2022_08_05_184300_create_free_demos_table', 5);
INSERT INTO `migrations` VALUES (27, '2022_08_05_180626_add_new_columns_to_contact_saves_table', 6);
INSERT INTO `migrations` VALUES (28, '2022_08_05_183008_rename_name_to_first_name_in_contact_saves_table', 6);
INSERT INTO `migrations` VALUES (29, '2022_08_08_064001_add_new_signup_columns_to_users_table', 6);
INSERT INTO `migrations` VALUES (32, '2022_08_08_153156_rename_providers_to_employees_on_freedemos_table', 7);
INSERT INTO `migrations` VALUES (33, '2022_08_09_121134_update_description_column_to_longtext_on_posts_table', 8);
INSERT INTO `migrations` VALUES (34, '2022_08_11_182822_create_socialmedia_table', 9);
INSERT INTO `migrations` VALUES (37, '2022_08_11_211703_create_plans_table', 10);
INSERT INTO `migrations` VALUES (38, '2022_08_12_160220_update_columns_on_freedemo_table', 11);
INSERT INTO `migrations` VALUES (39, '2022_08_13_085655_create_user_plans_table', 12);
INSERT INTO `migrations` VALUES (40, '2022_08_17_195203_change_data_column_on_pages_table', 13);
COMMIT;

-- ----------------------------
-- Table structure for newsletters
-- ----------------------------
DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE `newsletters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of newsletters
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
BEGIN;
INSERT INTO `pages` VALUES (1, 'Appointment and Booking', 'section_1_title', 'Banner', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (2, 'Appointment and Booking', 'section_1_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (3, 'Appointment and Booking', 'section_2_title', 'Multiple channels, one booking solution', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (4, 'Appointment and Booking', 'section_2_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (5, 'Appointment and Booking', 'section_3_title', 'Simplified appointment management', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (6, 'Appointment and Booking', 'section_3_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (7, 'Appointment and Booking', 'section_4_title', 'Our Bookings and Webstore features deliver results', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (8, 'Appointment and Booking', 'section_4_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (9, 'Appointment and Booking', 'section_5_title', 'A simpler appointment experience', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (10, 'Appointment and Booking', 'section_5_description', '<p>Our integrated <i><strong>solutions</strong></i> simplify front desk operations and make everyone’s life easier.</p>', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (11, 'Appointment and Booking', 'section_6_title', 'Testimonial', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (12, 'Appointment and Booking', 'section_6_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (13, 'Appointment and Booking', 'section_7_title', 'Drive business success', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (14, 'Appointment and Booking', 'section_7_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (15, 'Appointment and Booking', 'section_8_title', 'Features that will help your business reach its full potential', '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (16, 'Appointment and Booking', 'section_8_description', NULL, '2022-08-01 19:01:34', '2022-08-02 19:29:02');
INSERT INTO `pages` VALUES (17, 'Billing and Payments', 'section_1_title', 'Banner', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (18, 'Billing and Payments', 'section_1_description', NULL, '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (19, 'Billing and Payments', 'section_2_title', 'Break free from the front desk', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (20, 'Billing and Payments', 'section_2_description', '<p>Our world-class, mobile-first technology empowers your team to focus on what’s important - delivering amazing service.</p>', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (21, 'Billing and Payments', 'section_3_title', 'Access a cutting-edge, secure solution that doesn’t break the bank', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (22, 'Billing and Payments', 'section_3_description', '<p>Zenoti Payments integrates with the POS to unify your business operations and is fully compliant with PCI Data Security Standards (PCI DSS).</p>', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (23, 'Billing and Payments', 'section_4_title', 'A versatile payment solution', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (24, 'Billing and Payments', 'section_4_description', '<p>Discover all the payment options you need to get the most out of your business transactions.</p>', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (25, 'Billing and Payments', 'section_5_title', 'Testimonial', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (26, 'Billing and Payments', 'section_5_description', NULL, '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (27, 'Billing and Payments', 'section_6_title', 'Unparalleled support for memberships and packages', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (28, 'Billing and Payments', 'section_6_description', '<p>Zenoti Billing &amp; Payments are designed with the needs of all beauty and wellness businesses in mind – including those that are membership and package based.</p>', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (29, 'Billing and Payments', 'section_7_title', 'Did you know?', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (30, 'Billing and Payments', 'section_7_description', NULL, '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (31, 'Billing and Payments', 'section_8_title', 'Features that will help your business reach its full potential', '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (32, 'Billing and Payments', 'section_8_description', NULL, '2022-08-02 21:21:38', '2022-08-02 21:21:38');
INSERT INTO `pages` VALUES (33, 'Marketing and Sales', 'section_1_title', 'Banner', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (34, 'Marketing and Sales', 'section_1_description', NULL, '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (35, 'Marketing and Sales', 'section_2_title', 'Automated marketing', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (36, 'Marketing and Sales', 'section_2_description', '<p>Reduce the time and expense involved in planning and executing consistent, targeted campaigns and grow long-term revenue.</p>', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (37, 'Marketing and Sales', 'section_3_title', 'Centralized lead management', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (38, 'Marketing and Sales', 'section_3_description', '<p>Convert more leads with an all-in-one lead management system that takes you from inquiry to appointment in just a few clicks - without the overhead of a dedicated team.</p>', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (39, 'Marketing and Sales', 'section_4_title', 'Generate more revenue with AI-powered advertising', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (40, 'Marketing and Sales', 'section_4_description', '<p>Promote your services and products effectively with ad campaigns across Google, Facebook, and Instagram with ezAds, a simple, self-served advertising tool.</p>', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (41, 'Marketing and Sales', 'section_5_title', 'More', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (42, 'Marketing and Sales', 'section_5_description', NULL, '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (43, 'Marketing and Sales', 'section_6_title', 'Our scalable marketing and sales platform delivers results', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (44, 'Marketing and Sales', 'section_6_description', NULL, '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (45, 'Marketing and Sales', 'section_7_title', 'Chief Marketing Officers', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (46, 'Marketing and Sales', 'section_7_description', NULL, '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (47, 'Marketing and Sales', 'section_8_title', 'A solution tailor-made for your unique needs', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (48, 'Marketing and Sales', 'section_8_description', '<p>From turning consultations into paying guests to filling your appointment book, and increasing average ticket price, Zenoti gives you more.</p>', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (49, 'Marketing and Sales', 'section_9_title', 'Features that will help your business reach its full potential', '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (50, 'Marketing and Sales', 'section_9_description', NULL, '2022-08-03 15:32:00', '2022-08-03 15:32:00');
INSERT INTO `pages` VALUES (51, 'Business Management', 'section_1_title', 'Banner', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (52, 'Business Management', 'section_1_description', NULL, '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (53, 'Business Management', 'section_2_title', 'business', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (54, 'Business Management', 'section_2_description', NULL, '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (55, 'Business Management', 'section_3_title', 'Scalable business management solutions', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (56, 'Business Management', 'section_3_description', NULL, '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (57, 'Business Management', 'section_4_title', 'Do what you couldn’t do before', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (58, 'Business Management', 'section_4_description', NULL, '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (59, 'Business Management', 'section_5_title', 'Our all-in-one platform boosts productivity and growth', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (60, 'Business Management', 'section_5_description', '<p>With a unified brand and streamlined operations, Zenoti delivers significant growth potential, operational efficiencies, and cost savings.</p>', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (61, 'Business Management', 'section_6_title', 'Chief Executive Officers', '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (62, 'Business Management', 'section_6_description', NULL, '2022-08-03 17:38:32', '2022-08-03 17:38:32');
INSERT INTO `pages` VALUES (63, 'home', 'section_1_title', 'Banner', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (64, 'home', 'section_1_description', NULL, '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (65, 'home', 'section_2_title', 'Marquee Slider', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (66, 'home', 'section_2_description', '<h2>More than 25,000 businesses use Mennr</h2>', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (67, 'home', 'section_3_title', 'Why Mennr you ask?', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (68, 'home', 'section_3_description', NULL, '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (69, 'home', 'section_4_title', 'If you need it, we do it.', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (70, 'home', 'section_4_description', '<p>Mennr is tried, tested, and trusted by every type of brand including national chains, exclusive boutiques, nail studios, skin clinics, walk-in salons, resort spas and more…</p>', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (71, 'home', 'section_5_title', 'Our software works for you.', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (72, 'home', 'section_5_description', '<h2><strong>Our team works with you.</strong></h2>', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (73, 'home', 'section_6_title', 'Our customers success stories', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (74, 'home', 'section_6_description', '<p>Mennr is tried, tested, and trusted by every type of brand including national chains, exclusive boutiques, nail studios, skin clinics, walk-in salons, resort spas and more…</p>', '2022-08-04 18:26:18', '2022-08-04 20:53:20');
INSERT INTO `pages` VALUES (75, 'pricing', 'section_1_title', 'Everything you need to grow<br /> your Saas business', '2022-08-11 17:28:28', '2022-08-17 12:58:55');
INSERT INTO `pages` VALUES (76, 'pricing', 'section_1_description', '<p>A complete toolkit for scaling your business at a fraction of the price of other tools</p>', '2022-08-11 17:28:28', '2022-08-17 12:58:55');
INSERT INTO `pages` VALUES (83, 'about', 'section_1_title', 'About Mennr Software', '2022-08-17 18:32:39', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (84, 'about', 'section_1_description', '<h1 class=\"ql-align-center\">Born on the salon floor,<br/>bred to help you thrive.</h1><p class=\"ql-align-center\">With over 9,000 spas and salons as customers across the globe and growing, Phorest Salon Software is the system of choice for the forward-thinking salon owners.</p>', '2022-08-17 18:32:39', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (85, 'about', 'section_2_title', 'The Story of Mennr', '2022-08-17 18:32:39', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (86, 'about', 'section_2_description', '<p>Early 20 years ago, our founder and CEO, Ronan Perceval was working as a receptionist in a busy salon in Dublin, when he had a career-defining realisation. He had worked prior customer service jobs, but he soon discovered that nothing compared to the atmosphere of being in a salon.</p><p><span style=\"color: rgb(0, 71, 178);\">“I saw right away that–wow- a salon is a truly special place. There is this amazing energy flowing through it. People arrive looking forward to spending a few hours there, and by the time they are finished, they feel even better than when they came in. There is a total emotional transformation; they are glowing, confident. And this kind of positivity is absolutely contagious. I knew that I wanted to be a part of that forever.”</span></p><p>Ronan Perceval, Founder &amp; CEO of Mennr Software</p><p>At Mennr, we don’t have a job. We have a purpose. It’s to help salon, spa and clinic owners like you succeed. Not long after working the reception desk, Ronan noticed the owner was struggling with the same primary issues. Firstly, the salon was consistently dealing with at least one or two no-shows a week. Over time, this was adding up to a fairly significant loss in revenue. Ronan couldn’t let this go… He knew there had to be a better way.</p><p>Ronan enlisted the help of a friend, (Mennr’s co-founder, Luca Venezian0) who worked with him to write a bit of software that could send the salon clients a simple text message through the internet (which in those days was dial-up) to remind them of their upcoming appointments. Within a month, they were able to reduce no-shows by 70%.</p><p>But they didn’t stop there. The salon had another problem: getting clients back in, spending money after the Christmas rush had died down. So they came up with the idea to use the text message software they built to send their clients a message about a special offer for January, offering a free retail product with every appointment booked. Within days of the messages going out, they had filled up their books well into February. Other local salons began to take notice of this new style of promotion and began calling Ronan at his reception post asking where they could get access to it.</p>', '2022-08-17 18:34:30', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (87, 'about', 'section_3_title', 'Our Mission:', '2022-08-17 18:34:30', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (88, 'about', 'section_3_description', '<h3 class=\"ql-align-center\"><strong style=\"color: rgb(0, 71, 178);\">“ We empower and inspire salon, spa and clinic owners to grow fantastic businesses while attracting and delighting loyal clients and talented staff.”</strong></h3><p class=\"ql-align-center\">Mennr is more than just a technology company We are proud to be a life force for our industry. Our system helps businesses to manage, market and grow, not just through innovation in technology, but through mentoring, education and unrivalled support.</p><p class=\"ql-align-center\">Phorest believes in the human touch at the heart of the salon community. That’s why we’re the only salon software provider to connect every business with their own dedicated business advisor — a committed partner for helping salon owners achieve their dreams.</p>', '2022-08-17 18:34:30', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (89, 'about', 'section_4_title', 'We hate to brag but... <br/>people really like what we do', '2022-08-17 18:34:30', '2022-08-17 19:17:59');
INSERT INTO `pages` VALUES (90, 'about', 'section_4_description', '<p><br></p>', '2022-08-17 18:34:30', '2022-08-17 19:17:59');
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for plans
-- ----------------------------
DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('monthly','yearly','custom') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monthly',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) unsigned DEFAULT '0.00',
  `features` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of plans
-- ----------------------------
BEGIN;
INSERT INTO `plans` VALUES (1, 'monthly', 'PRO MONTHLY PLAN', '<p><strong>2,000 leads per month</strong></p>', 79.00, '<ul><li>Premium Integrations</li><li>3 Active Models</li><li>9 Months Lookback</li><li>Real-time Data Refresh</li><li>6hrs Data Refresh</li><li>12hrs Support SLA</li><li>Community Access</li><li>Dedicated CSM</li></ul>', '2022-08-12 19:49:39', '2022-08-17 13:37:05');
INSERT INTO `plans` VALUES (2, 'yearly', 'PRO YEARLY PLAN', '<p><strong>2,000 leads per month</strong></p>', 999.00, '<ul><li>Premium Integrations</li><li>3 Active Models</li><li>9 Months Lookback</li><li>Real-time Data Refresh</li><li>6hrs Data Refresh</li><li>12hrs Support SLA</li><li>Community Access</li><li>Dedicated CSM</li></ul>', '2022-08-12 19:50:59', '2022-08-12 19:50:59');
INSERT INTO `plans` VALUES (3, 'custom', 'ENTERPRISE MONTHLY PLAN', '<p><strong>Personalized pricing for unique needs</strong></p>', NULL, '<ul><li>Premium Integrations</li><li>3 Active Models</li><li>9 Months Lookback</li><li>Real-time Data Refresh</li><li>6hrs Data Refresh</li><li>12hrs Support SLA</li><li>Community Access</li><li>Dedicated CSM</li></ul>', '2022-08-12 19:51:32', '2022-08-12 19:52:59');
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES (1, 'Appointment and Booking', 'section_1', 'Keep your appointment book full with Zenoti Appointments & Bookings', NULL, 'Appointment,Booking', '<p>Provide a consistent <i><strong>brand</strong></i><strong> experience</strong>, delight your guests, and increase productivity with an all-in-one solution that makes empty appointment slots a thing of the past.</p>', NULL, '01082022165938198624.jpeg', '2022-08-01 19:26:26', '2022-08-02 20:50:41');
INSERT INTO `posts` VALUES (2, 'Appointment and Booking', 'section_2', 'Meet guests where they are', NULL, 'Booking,Channel', 'Give guests the freedom to book services, view upcoming appointments, manage their memberships and packages, and browse their service history anywhere, anytime, on any device.', '01082022165938409342.png', NULL, '2022-08-01 20:01:33', '2022-08-01 20:01:33');
INSERT INTO `posts` VALUES (3, 'Appointment and Booking', 'section_2', 'Boost productivity and profitability', NULL, 'Booking,Productivity,Profitability', 'Save time, training, and overhead with a Booking Wizard that notes customer preferences as well as your business parameters to offer the optimal booking slot.', '01082022165938422452.png', NULL, '2022-08-01 20:03:44', '2022-08-01 20:03:44');
INSERT INTO `posts` VALUES (4, 'Appointment and Booking', 'section_2', 'Upsell add-ons and retail in real time', NULL, 'Booking,Upsell,Add-on', 'Enable guests to buy gift cards, memberships, packages, and retail products at the same time across any device. And automatically notify providers of current promotions to upsell and increase their average ticket price.', '01082022165938432240.png', NULL, '2022-08-01 20:05:22', '2022-08-01 20:05:22');
INSERT INTO `posts` VALUES (5, 'Appointment and Booking', 'section_3', 'Empower your team with independence', NULL, 'Appointment,Management,Empower', 'Providers can add upgrades or retail products to invoices, take payments, and rebook appointments all from their mobile devices at the service chair and deliver a high-quality guest experience.', '01082022165938684214.png', NULL, '2022-08-01 20:47:22', '2022-08-01 20:47:22');
INSERT INTO `posts` VALUES (6, 'Appointment and Booking', 'section_3', 'Personalize your touchpoints', NULL, 'Appointment,Management,Personalize', 'Reduce no-shows by sending automated appointment reminders and giving guests access to their profile information at their fingertips. Fill available slots by sending target promotions via text or in-app notifications.', '01082022165938698799.png', NULL, '2022-08-01 20:49:47', '2022-08-01 20:49:47');
INSERT INTO `posts` VALUES (7, 'Appointment and Booking', 'section_3', 'Create a touchless, receptionless experience', NULL, 'Appointment,Management,Touchless', 'Make it easy for guests to book anywhere, anytime, and check-in/out, complete forms, and pay on their mobile phones with your own branded Consumer Mobile App and Zenoti Go.', '01082022165938731082.png', NULL, '2022-08-01 20:55:10', '2022-08-01 20:55:10');
INSERT INTO `posts` VALUES (8, 'Appointment and Booking', 'section_4', '~20%', NULL, 'Deliver,Higher', 'higher spends', '0108202216593875720.png', NULL, '2022-08-01 20:59:32', '2022-08-01 20:59:32');
INSERT INTO `posts` VALUES (9, 'Appointment and Booking', 'section_4', '~70%', NULL, 'Deliver,Online', 'online booking rate', '01082022165938764052.png', NULL, '2022-08-01 21:00:40', '2022-08-01 21:00:40');
INSERT INTO `posts` VALUES (10, 'Appointment and Booking', 'section_4', '~76%', NULL, 'Deliver,Share,COVID', 'higher share of bookings post-COVID', '01082022165938770150.png', NULL, '2022-08-01 21:01:41', '2022-08-01 21:01:41');
INSERT INTO `posts` VALUES (11, 'Appointment and Booking', 'section_5', 'Boost online retail sales', NULL, 'Appointment,Experience', 'Start, manage, and grow your online business with our Shopify integration.', '01082022165938908631.svg', NULL, '2022-08-01 21:24:46', '2022-08-01 21:24:46');
INSERT INTO `posts` VALUES (12, 'Appointment and Booking', 'section_5', 'Sell everything on one platform', NULL, 'Appointment,Experience,Platform', 'Give guests access to everything in one place from services to retail products, gift cards, memberships, and more.', '01082022165938914492.svg', NULL, '2022-08-01 21:25:44', '2022-08-01 21:25:44');
INSERT INTO `posts` VALUES (13, 'Appointment and Booking', 'section_5', 'Provide multiple payment options', NULL, 'Appointment,Experience,Payment', 'Increase guest convenience with the choice to pay how it best suits them.', '01082022165938918415.svg', NULL, '2022-08-01 21:26:24', '2022-08-01 21:26:24');
INSERT INTO `posts` VALUES (14, 'Appointment and Booking', 'section_5', 'Drive upsells', NULL, 'Appointment,Experience,Upsell', 'Provide add-on alerts and product recommendations for guests during booking and appointments.', '01082022165938922273.svg', NULL, '2022-08-01 21:27:02', '2022-08-01 21:27:02');
INSERT INTO `posts` VALUES (15, 'Appointment and Booking', 'section_5', 'Enjoy an integrated system', NULL, 'Appointment,Experience,System', 'Access everything you need in one place, including provider details, guest information, room availability, and much more.', '01082022165938926417.svg', NULL, '2022-08-01 21:27:44', '2022-08-01 21:27:44');
INSERT INTO `posts` VALUES (16, 'Appointment and Booking', 'section_5', 'Go paperless', NULL, 'Appointment,Experience,Paperless', 'Enhance the appointment experience by giving guests the freedom to complete forms digitally before coming in.', '0108202216593893096.svg', NULL, '2022-08-01 21:28:29', '2022-08-01 21:28:29');
INSERT INTO `posts` VALUES (17, 'Appointment and Booking', 'section_7', 'Drive business success with a modern appointment booking solution.', NULL, 'Drive,Mordern', NULL, '02082022165945731513.png', NULL, '2022-08-02 16:21:55', '2022-08-02 16:21:55');
INSERT INTO `posts` VALUES (18, 'Appointment and Booking', 'section_8', 'Zenoti Mobile App', NULL, 'Appointment,Booking,Feature,Mobile', NULL, '02082022165945762932.png', NULL, '2022-08-02 16:27:09', '2022-08-02 16:27:09');
INSERT INTO `posts` VALUES (19, 'Appointment and Booking', 'section_8', 'Payments', NULL, 'Appointment,Booking,Feature,Payment', NULL, '02082022165945766472.png', NULL, '2022-08-02 16:27:44', '2022-08-02 16:27:44');
INSERT INTO `posts` VALUES (20, 'Appointment and Booking', 'section_8', 'Reports', NULL, 'Appointment,Booking,Feature,Report', NULL, '02082022165945768961.png', NULL, '2022-08-02 16:28:09', '2022-08-02 16:28:09');
INSERT INTO `posts` VALUES (21, 'Appointment and Booking', 'section_8', 'Webstore', NULL, 'Appointment,Booking,Feature,Webstore', NULL, '02082022165945771589.png', NULL, '2022-08-02 16:28:35', '2022-08-02 16:28:35');
INSERT INTO `posts` VALUES (22, 'Appointment and Booking', 'section_8', 'Online Bookings', NULL, 'Appointment,Booking,Feature,Online', NULL, '02082022165945774775.png', NULL, '2022-08-02 16:29:07', '2022-08-02 16:29:07');
INSERT INTO `posts` VALUES (23, 'Billing and Payments', 'section_1', 'Make payments easier with Zenoti Billing & Payments', NULL, 'Billing,Payment', '<p>Go touchless with your payments and deliver a faster, more convenient checkout experience for guests and staff.</p>', '02082022165947667354.jpeg', NULL, '2022-08-02 21:44:33', '2022-08-02 21:44:33');
INSERT INTO `posts` VALUES (24, 'Billing and Payments', 'section_2', 'Mobile POS', NULL, 'Billing,Payment,Mobile,POS', '<p>Move beyond the traditional front desk with a mobile POS that’s ready whenever and wherever your guests are.</p>', '02082022165948394727.png', NULL, '2022-08-02 23:45:23', '2022-08-02 23:51:48');
INSERT INTO `posts` VALUES (25, 'Billing and Payments', 'section_2', 'A better guest experience', NULL, 'Billing,Payment,Guest,Experience', '<p>Give staff everything they need at their fingertips – they can add chair-side upgrades or retail products to guest invoices and check them out with a few taps on a mobile device.</p>', '02082022165948400572.png', NULL, '2022-08-02 23:46:45', '2022-08-02 23:52:38');
INSERT INTO `posts` VALUES (26, 'Billing and Payments', 'section_2', 'Real-time reports', NULL, 'Billing,Payment,Real-time,Report', '<p>Ensure you always have the insights you need to drive business decisions with real-time sales reports and automatic daily email reports.</p>', '02082022165948405846.png', NULL, '2022-08-02 23:47:38', '2022-08-02 23:52:48');
INSERT INTO `posts` VALUES (27, 'Billing and Payments', 'section_3', 'Consistent experience', NULL, 'Billing,Payment,Consistent,Experience', '<p>Store guest cards on one profile and use a single merchant for payments made in-store, online, or through your branded app for fast checkout at any location.</p>', '02082022165948459367.png', NULL, '2022-08-02 23:56:33', '2022-08-02 23:56:33');
INSERT INTO `posts` VALUES (28, 'Billing and Payments', 'section_3', 'Easy online sales', NULL, 'Billing,Payment,Online,Sale', '<p>Sell gift cards, retail products, packages, and memberships online using the same centralized payments system.</p>', '02082022165948468074.png', NULL, '2022-08-02 23:58:00', '2022-08-02 23:58:00');
INSERT INTO `posts` VALUES (29, 'Billing and Payments', 'section_3', 'No contracts', NULL, 'Billing,Payment,Contract', '<p>Enjoy the freedom of a solution that doesn’t lock you in. You pay a predictable fee per transaction, and we don\'t charge for refunds, authorizations, or failed charges. No long-term contracts, no set-up or monthly service fees, no surprises.</p>', '02082022165948473774.png', NULL, '2022-08-02 23:58:57', '2022-08-02 23:58:57');
INSERT INTO `posts` VALUES (30, 'Billing and Payments', 'section_4', 'Web', NULL, 'Billing,Payment,Web', '<p>Browser-based payment experiences for web and mobile.</p>', '03082022165948493126.png', NULL, '2022-08-03 00:02:11', '2022-08-03 00:02:11');
INSERT INTO `posts` VALUES (31, 'Billing and Payments', 'section_4', 'Consumer Mobile App', NULL, 'Billing,Payment,Consumer,Mobile,App', '<p>In-app and mobile payment experiences.</p>', '03082022165948497287.png', NULL, '2022-08-03 00:02:52', '2022-08-03 00:02:52');
INSERT INTO `posts` VALUES (32, 'Billing and Payments', 'section_4', 'Mirror mode', NULL, 'Billing,Payment,Mirror,Mode', '<p>Customer facing payment kiosk.</p>', '03082022165948501390.png', NULL, '2022-08-03 00:03:33', '2022-08-03 00:03:33');
INSERT INTO `posts` VALUES (33, 'Billing and Payments', 'section_4', 'Subscription', NULL, 'Billing,Payment,Subscription', '<p>Single click and recurring payments that keep customers coming back.</p>', '0308202216594850499.png', NULL, '2022-08-03 00:04:09', '2022-08-03 00:04:09');
INSERT INTO `posts` VALUES (34, 'Billing and Payments', 'section_6', 'Gift card sales', NULL, 'Billing,Payment,Gift Card,Sales', '<p>Boost your sales while reducing your effort with built-in sales tools.</p>', '03082022165948674421.svg', NULL, '2022-08-03 00:32:24', '2022-08-03 01:07:53');
INSERT INTO `posts` VALUES (35, 'Billing and Payments', 'section_6', 'No-show fees', NULL, 'Billing,Payment,Fee', '<p>Charge no-show or late cancellation fees with the click of a button.</p>', '03082022165948680752.svg', NULL, '2022-08-03 00:32:45', '2022-08-03 00:33:27');
INSERT INTO `posts` VALUES (36, 'Billing and Payments', 'section_6', 'Refunds', NULL, 'Billing,Payment,Refund', '<p>Get the full transaction fee back when you process refunds.</p>', '03082022165948687689.svg', NULL, '2022-08-03 00:33:59', '2022-08-03 00:34:36');
INSERT INTO `posts` VALUES (37, 'Billing and Payments', 'section_6', 'Expired cards', NULL, 'Billing,Payment,Expired,Card', '<p>Update expired cards automatically with no additional fees and ensure all your payments are successful.</p>', '03082022165948692937.svg', NULL, '2022-08-03 00:35:29', '2022-08-03 00:35:29');
INSERT INTO `posts` VALUES (38, 'Billing and Payments', 'section_6', 'Recurring payments', NULL, 'Billing,Payment,Recurring', '<p>Enjoy complete support for automated and recurring payments.</p>', '03082022165948711790.svg', NULL, '2022-08-03 00:38:37', '2022-08-03 00:38:37');
INSERT INTO `posts` VALUES (39, 'Billing and Payments', 'section_6', 'Scheduled payments', NULL, 'Billing,Payment,Schedule', '<p>Accept payments in full or take partial payments with cards that are securely stored and accessible from any location.</p>', '03082022165948719312.svg', NULL, '2022-08-03 00:39:53', '2022-08-03 00:39:53');
INSERT INTO `posts` VALUES (40, 'Billing and Payments', 'section_6', 'Instant reporting', NULL, 'Billing,Payment,Instant,Report', '<p>View integrated, up-to-the-minute reports, so you always know where your payments stand.</p>', '03082022165948729911.svg', NULL, '2022-08-03 00:41:39', '2022-08-03 00:41:39');
INSERT INTO `posts` VALUES (41, 'Billing and Payments', 'section_6', 'Chargebacks', NULL, 'Billing,Payment,Chargeback', '<p>Access full details and support during the chargeback process, including contesting any that you feel are unjustified. If the chargeback is resolved in your favor; you\'ll pay no fees.</p>', '03082022165948894547.svg', NULL, '2022-08-03 01:09:05', '2022-08-03 01:09:05');
INSERT INTO `posts` VALUES (42, 'Billing and Payments', 'section_7', 'Did you know?', NULL, 'Billing,Payment', '<p>Zenoti customers have seen up to <strong>90%</strong> of all <strong>credit card transactions</strong>&nbsp;completed on <strong>mobile devices.</strong></p>', '0308202216594893274.png', NULL, '2022-08-03 01:15:27', '2022-08-03 01:15:27');
INSERT INTO `posts` VALUES (43, 'Billing and Payments', 'section_8', 'Reports', NULL, 'Billing,Payment,Report', NULL, '03082022165949005668.png', NULL, '2022-08-03 01:27:36', '2022-08-03 01:27:36');
INSERT INTO `posts` VALUES (44, 'Billing and Payments', 'section_8', 'Payments', NULL, 'Billing,Payment', NULL, '03082022165949164170.png', NULL, '2022-08-03 01:54:01', '2022-08-03 01:54:01');
INSERT INTO `posts` VALUES (45, 'Billing and Payments', 'section_8', 'Mennr Mobile App', NULL, 'Billing,Payment,Mobile', NULL, '03082022165949169651.png', NULL, '2022-08-03 01:54:56', '2022-08-03 01:54:56');
INSERT INTO `posts` VALUES (46, 'Billing and Payments', 'section_8', 'Webstore', NULL, 'Billing,Payment,Webstore', NULL, '03082022165949173518.png', NULL, '2022-08-03 01:55:35', '2022-08-03 01:55:35');
INSERT INTO `posts` VALUES (47, 'Billing and Payments', 'section_8', 'Online Bookings', NULL, 'Billing,Payment,Online,Booking', NULL, '03082022165949177033.png', NULL, '2022-08-03 01:56:10', '2022-08-03 01:56:10');
INSERT INTO `posts` VALUES (48, 'Marketing and Sales', 'section_1', 'Grow your business with Zenoti Marketing & Sales', NULL, 'Marketing,Sales,Business', '<p>Target leads with fully branded, personalized campaigns and manage them from opportunity through to paying guest, all with a few clicks in one platform.</p>', '03082022165954104361.jpeg', NULL, '2022-08-03 15:37:23', '2022-08-03 15:37:23');
INSERT INTO `posts` VALUES (49, 'Marketing and Sales', 'section_2', 'A fully booked schedule', NULL, 'Marketing,Sales,Fully,Schedule', '<p>We analyze guest preferences and business parameters to provide the best timeslots for bookings, and send personalized emails to fill open slots and keep your schedule fully booked.</p>', '03082022165954185462.png', NULL, '2022-08-03 15:50:54', '2022-08-03 15:55:35');
INSERT INTO `posts` VALUES (50, 'Marketing and Sales', 'section_2', 'Guests that keep coming back', NULL, 'Marketing,Sales,Guest,Keep', '<p>Our predictive analytics forecast which guests you’re likely to lose, so you can reach out and encourage them to return with personalized communications and promotions.</p>', '03082022165954193072.png', NULL, '2022-08-03 15:52:10', '2022-08-03 15:55:08');
INSERT INTO `posts` VALUES (51, 'Marketing and Sales', 'section_2', 'More revenue from upsells', NULL, 'Marketing,Sales,Revenue,Upsell', '<p>Increase guest spend with automatic recommendations of other products and services they might be interested in. We also help front desk staff and providers to sell add-ons and retail items during their visit.</p>', '03082022165954198813.png', NULL, '2022-08-03 15:53:08', '2022-08-03 15:54:59');
INSERT INTO `posts` VALUES (52, 'Marketing and Sales', 'section_3', 'Simplified sales flow', NULL, 'Marketing,Sales,Simplified,Flow', '<p>Streamline lead management and save time with one guest profile that contains all the details you need every step of the way.</p>', '03082022165954256276.png', NULL, '2022-08-03 16:02:42', '2022-08-03 16:02:42');
INSERT INTO `posts` VALUES (53, 'Marketing and Sales', 'section_3', 'Follow-up prompts', NULL, 'Marketing,Sales,Follow-up,Prompt', '<p>Never miss an opportunity with dashboards that highlight when to next reach out and the time of day that’s most likely to lead to a conversion.</p>', '03082022165954270694.png', NULL, '2022-08-03 16:05:06', '2022-08-03 16:05:06');
INSERT INTO `posts` VALUES (54, 'Marketing and Sales', 'section_3', 'Automated operations', NULL, 'Marketing,Sales,Automate,Operation', '<p>Set emails and texts to automatically send to leads depending on their position in the funnel and notify staff when a new opportunity comes in for them to action.</p>', '03082022165954277188.png', NULL, '2022-08-03 16:06:11', '2022-08-03 16:06:11');
INSERT INTO `posts` VALUES (55, 'Marketing and Sales', 'section_4', 'Services', NULL, 'Marketing,Sales', '<ul><li>Reach the right audience with location-based campaigns</li><li>Leverage top-performing keywords and improve CPC</li><li>Run single images, videos, or carousel ads</li><li>Monitor performance across all channels</li><li>Track revenue generated from the ads</li></ul>', '03082022165954319067.png', NULL, '2022-08-03 16:13:10', '2022-08-03 16:13:10');
INSERT INTO `posts` VALUES (56, 'Marketing and Sales', 'section_5', 'More brand awareness. More reviews. More leads.', NULL, 'Marketing,Sales,More', '<p>Promote positive reviews on your social media platforms and website in just a few clicks and reduce the impact of negative feedback to keep guests coming back.</p>', '03082022165954338729.png', NULL, '2022-08-03 16:16:27', '2022-08-03 16:16:27');
INSERT INTO `posts` VALUES (57, 'Marketing and Sales', 'section_6', '180%', NULL, 'Marketing,Sales,Scalable', '<p><strong>180%</strong> jump in online <strong>gift card</strong> revenue in peak seasons</p>', '03082022165954379052.png', NULL, '2022-08-03 16:23:10', '2022-08-03 16:23:10');
INSERT INTO `posts` VALUES (58, 'Marketing and Sales', 'section_6', '32%', NULL, 'Marketing,Sales,Scalable', '<p><strong>32% revenue growth</strong> from leads</p>', '03082022165954385158.png', NULL, '2022-08-03 16:24:11', '2022-08-03 16:24:11');
INSERT INTO `posts` VALUES (59, 'Marketing and Sales', 'section_6', '33%', NULL, 'Marketing,Sales,Scalable', '<p><strong>33%</strong> increase in <strong>average booking price</strong></p>', '03082022165954387918.png', NULL, '2022-08-03 16:24:39', '2022-08-03 16:24:39');
INSERT INTO `posts` VALUES (60, 'Marketing and Sales', 'section_7', 'Chief Marketing Officers at the most successful brands in the beauty and wellness industry trust only Zenoti', NULL, 'Marketing,Sales,Chief, Officer', NULL, '03082022165954409297.png', NULL, '2022-08-03 16:28:12', '2022-08-03 16:28:12');
INSERT INTO `posts` VALUES (61, 'Marketing and Sales', 'section_8', 'Set staff up for success', NULL, 'Marketing,Sales,Staff', '<p>Provide your team with fingertip access to the information and context they need to have productive conversations.</p>', '03082022165954465013.svg', NULL, '2022-08-03 16:37:30', '2022-08-03 16:37:30');
INSERT INTO `posts` VALUES (62, 'Marketing and Sales', 'section_8', 'Never miss a lead', NULL, 'Marketing,Sales,Miss', '<p>Reassign leads if a sales rep is ill, goes on holiday, or leaves your company and maintain a consistent experience.</p>', '03082022165954468410.svg', NULL, '2022-08-03 16:38:04', '2022-08-03 16:38:04');
INSERT INTO `posts` VALUES (63, 'Marketing and Sales', 'section_8', 'Monitor KPIs', NULL, 'Marketing,Sales,Monitor,KPI', '<p>Track key business benchmarks, including number of leads, sales, conversions, and more.</p>', '03082022165954471952.svg', NULL, '2022-08-03 16:38:39', '2022-08-03 16:38:39');
INSERT INTO `posts` VALUES (64, 'Marketing and Sales', 'section_8', 'Behavior-based campaigns', NULL, 'Marketing,Sales,Campaign', '<p>Organize guests based on their interactions and send relevant announcements or promotional campaigns.</p>', '0308202216595447608.svg', NULL, '2022-08-03 16:39:20', '2022-08-03 16:39:20');
INSERT INTO `posts` VALUES (65, 'Marketing and Sales', 'section_8', 'Micro-segmentation', NULL, 'Marketing,Sales,Micro,Segmentation', '<p>Craft campaigns that actually convert by sending personalized marketing messages to guests based on their data.</p>', '03082022165954479518.svg', NULL, '2022-08-03 16:39:55', '2022-08-03 16:39:55');
INSERT INTO `posts` VALUES (66, 'Marketing and Sales', 'section_8', 'Consistent brand standards', NULL, 'Marketing,Sales,Brand', '<p>Maintain a unified look and feel across all locations and touchpoints by predefining your brand elements.</p>', '03082022165954484177.svg', NULL, '2022-08-03 16:40:25', '2022-08-03 16:40:41');
INSERT INTO `posts` VALUES (67, 'Marketing and Sales', 'section_8', 'Franchise and multi-center support', NULL, 'Marketing,Sales,Franchise,Multi-center', '<p>Create campaigns from one centralized platform and choose to share to all or specific brand locations.</p>', '03082022165954487855.svg', NULL, '2022-08-03 16:41:18', '2022-08-03 16:41:18');
INSERT INTO `posts` VALUES (68, 'Marketing and Sales', 'section_8', 'A fully integrated system', NULL, 'Marketing,Sales,Integrate,System', '<p>Promote marketing offers to your Webstore and social media channels effortlessly.</p>', '03082022165954491191.svg', NULL, '2022-08-03 16:41:51', '2022-08-03 16:41:51');
INSERT INTO `posts` VALUES (69, 'Marketing and Sales', 'section_8', 'Privacy and compliance', NULL, 'Marketing,Sales,Privacy,Compliance', '<p>Enjoy peace of mind knowing our platform complies with global regulations, including SOC, CAN-SPAM, and GDPR, and protects your data.</p>', '03082022165954495491.svg', NULL, '2022-08-03 16:42:34', '2022-08-03 16:42:34');
INSERT INTO `posts` VALUES (70, 'Marketing and Sales', 'section_9', 'Feedback & Reviews', NULL, 'Marketing,Sales,Feedback,Review', NULL, '03082022165954524768.png', NULL, '2022-08-03 16:47:27', '2022-08-03 16:47:27');
INSERT INTO `posts` VALUES (71, 'Marketing and Sales', 'section_9', 'Gift Cards', NULL, 'Marketing,Sales,Gift Card', NULL, '03082022165954527688.png', NULL, '2022-08-03 16:47:56', '2022-08-03 16:47:56');
INSERT INTO `posts` VALUES (72, 'Marketing and Sales', 'section_9', 'Marketing', NULL, 'Marketing,Sales', NULL, '03082022165954530127.png', NULL, '2022-08-03 16:48:21', '2022-08-03 16:48:21');
INSERT INTO `posts` VALUES (73, 'Marketing and Sales', 'section_9', 'Memberships', NULL, 'Marketing,Sales,Membership', NULL, '03082022165954533949.png', NULL, '2022-08-03 16:48:59', '2022-08-03 16:48:59');
INSERT INTO `posts` VALUES (74, 'Marketing and Sales', 'section_9', 'Packages', NULL, 'Marketing,Sales,Package', NULL, '03082022165954536866.png', NULL, '2022-08-03 16:49:28', '2022-08-03 16:49:28');
INSERT INTO `posts` VALUES (75, 'Marketing and Sales', 'section_9', 'Rewards & Loyalty Programs', NULL, 'Marketing,Sales,Rewards,Loyalty', NULL, '03082022165954541927.png', NULL, '2022-08-03 16:50:19', '2022-08-03 16:50:19');
INSERT INTO `posts` VALUES (76, 'Marketing and Sales', 'section_9', 'Reports', NULL, 'Marketing,Sales,Report', NULL, '03082022165954544440.png', NULL, '2022-08-03 16:50:44', '2022-08-03 16:50:44');
INSERT INTO `posts` VALUES (77, 'Marketing and Sales', 'section_9', 'Sales', NULL, 'Marketing,Sales', NULL, '03082022165954546898.png', NULL, '2022-08-03 16:51:08', '2022-08-03 16:51:08');
INSERT INTO `posts` VALUES (78, 'Business Management', 'section_1', 'Increase operational efficiency with an all-in-one business management platform', NULL, 'Business,Management', '<p>A seamless, simple, and scalable solution.</p>', '03082022165954840890.png', NULL, '2022-08-03 17:40:08', '2022-08-03 17:40:08');
INSERT INTO `posts` VALUES (79, 'Business Management', 'section_2', 'Front desk', NULL, 'Business,Management,Front,Desk', '<p>We free up the front desk team to focus on helping guests to feel great, by handling all the time-consuming operations involved in check-in/out, booking appointments, managing retail sales, billing and payments, appointment forms, and more!</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/files/619faf58eb17e001ecb0c064_mmb-tag-appoint-booking-manag.png\"><a href=\"/appointments-bookings\">Appointments &amp; Bookings Management</a></p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf59fe92da95b6a86f06_mmb-tag-kiosk.png\"><a href=\"/kiosk\">Kiosk </a><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5af5d58167993e08c9_mmb-tag-pos.png\">Pos</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5b41ed44244da7a9dc_mmb-tag-queue-manag.png\"> Queue Management</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5bed38dc181b6b0215_mmb-tag-zma.png\"> Zonit Mobile App</p>', '03082022165954911846.png', NULL, '2022-08-03 17:51:58', '2022-08-03 20:05:43');
INSERT INTO `posts` VALUES (80, 'Business Management', 'section_2', 'Employees', NULL, 'Business,Management,Employee', '<p>Manage staff in a unified platform that covers payroll, commissions, tips, performance, schedules, attendance, and more. The Zenoti Mobile App provides employees with everything they need to excel at their job and create an extraordinary guest experience.</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf59508afd6bf9e63857_mmb-tag-emp-manag.png\">Employees Management</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5a293b1e02a6849e7f_mmb-tag-smartshift.png\">SmartShifts</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5bed38dc181b6b0215_mmb-tag-zma%20(1).png\">Zonit Mobile App</p>', '03082022165955752138.png', NULL, '2022-08-03 20:12:01', '2022-08-03 20:12:01');
INSERT INTO `posts` VALUES (81, 'Business Management', 'section_2', 'Inventory', NULL, 'Business,Management,Inventory', '<p>Enjoy a faster, more accurate way to manage your retail and professional inventory. Our real time, centralized approach gives you the data insights you need to make timely, cost-saving, stock management decisions.</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf58487f873c5d38aaef_mmb-tag-analytics.png\">Analytics</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5a13c21bfb34874e00_mmb-tag-invent-manag.png\">Inventory</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/619faf5a84ed5f6202efa3b3_mmb-tag-repots.png\">Reports</p><p><img src=\"https://ckeditor.com/apps/ckfinder/userfiles/images/625e6caad47feb30892b89b7_webstore-icon%20(1).png\">Webstore</p>', '03082022165955792316.png', NULL, '2022-08-03 20:18:43', '2022-08-03 20:18:43');
INSERT INTO `posts` VALUES (82, 'Business Management', 'section_3', 'Scalable business management solutions designed for growing businesses and franchises', NULL, 'Business,Management,Scalable', '<p>We make opening new locations and managing expansions easy. A centralized database provides a single source of truth for all your locations, and a simple way to execute marketing campaigns, access organization and location-based reports and analytics, manage inventory, and much more.</p>', '03082022165955814271.png', NULL, '2022-08-03 20:22:22', '2022-08-03 20:22:22');
INSERT INTO `posts` VALUES (83, 'Business Management', 'section_4', 'Do what you couldn’t do before', NULL, 'Business,Management,What', '<p>Enjoy a single business management software that handles everything from marketing to front desk tasks and free your team to focus on impact rather than coordination.</p>', '03082022165955836124.png', NULL, '2022-08-03 20:26:01', '2022-08-03 20:26:01');
INSERT INTO `posts` VALUES (84, 'Business Management', 'section_5', '180', NULL, 'Business,Management', '<p><strong>180%</strong> jump in online <strong>gift card</strong> revenue in peak seasons</p>', '03082022165955853440.png', NULL, '2022-08-03 20:28:54', '2022-08-03 20:28:54');
INSERT INTO `posts` VALUES (85, 'Business Management', 'section_5', '96', NULL, 'Business,Management', '<p>upto <strong>96% </strong>increase in<strong> mobile bookings</strong></p>', '03082022165955856855.png', NULL, '2022-08-03 20:29:28', '2022-08-03 20:29:28');
INSERT INTO `posts` VALUES (86, 'Business Management', 'section_5', '33', NULL, 'Business,Management', '<p><strong>100%</strong> increase in <strong>direct mail</strong> sales</p>', '03082022165955863489.png', NULL, '2022-08-03 20:30:34', '2022-08-03 20:30:34');
INSERT INTO `posts` VALUES (87, 'Business Management', 'section_5', '80', NULL, 'Business,Management', '<p><strong>80% </strong>Technology <strong>costs reduced</strong></p>', '03082022165955867242.png', NULL, '2022-08-03 20:31:12', '2022-08-03 20:31:12');
INSERT INTO `posts` VALUES (88, 'Business Management', 'section_5', '100', NULL, 'Business,Management', '<p><strong>100% </strong>use of digital forms, improving<strong> front desk utilization </strong>by 50%</p>', '03082022165955869760.png', NULL, '2022-08-03 20:31:37', '2022-08-03 20:31:37');
INSERT INTO `posts` VALUES (89, 'Business Management', 'section_6', 'Chief Executive Officers at the most successful brands in the beauty and wellness industry trust their operations and growth only to Zenoti', NULL, 'Business,Management,CEO', NULL, '03082022165955902354.png', NULL, '2022-08-03 20:37:03', '2022-08-03 20:37:03');
INSERT INTO `posts` VALUES (90, 'solutions', 'section_1', 'Schedule Appointment', NULL, 'schedule,appointment', '<p>Simplify the appointment scheduling process of your business with a clean and simple tool. Custom-designed for your brand, the online booking feature is incorporated with a powerful calendar that allows customers to make and change appointments within the comfort of their own device.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/schedule-appointment.png\"></figure><h4><strong>24/7 booking:</strong></h4><p><strong>Allow customers to book online appointments through your website, Facebook page or mobile application. This premium feature has your reception open 24/7.</strong></p><h4><strong>Reminders:</strong></h4><p>Send automated text messages and email reminders to your clients.</p><h4><strong>Real-time business management:</strong></h4><p>The online booking system updates in real-time allowing your employees to view their upcoming schedule when they log-in.</p><h4><strong>Calendar:</strong></h4><p>The powerful calendar incorporates color coded scheduling making it easier for your staff to glance through various appointments.</p><h4><strong>Avoid overbooking:</strong></h4><p>Make overbooking is a thing of the past. The system seamlessly avoids any chance of overbooking giving your staff the chance to stay on time always.</p><h4><strong>Make it attractive:</strong></h4><p>Customized color, fonts and buttons to match your brand.</p>', NULL, NULL, '2022-08-04 16:08:52', '2022-08-08 20:11:16');
INSERT INTO `posts` VALUES (91, 'solutions', 'section_2', 'Point of Sale', NULL, 'sale', '<p>Mennr has an integrated/built-in point-of-sale (POS) system that enables faster checkout for your salon and spa clients. You can now spend less time at checkout and more time with your clients. Check guests in, handle sales transactions, invoicing, receipts, retail product management and chair upgrades, all at the click of a button.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/point-sale-img.png\"></figure><h4><strong>Invoice &amp; Checkout</strong></h4><p>Unchain yourself from your front desk and process payments from your desktop or mobile device. Faster checkouts redefine how payments work thereby offering a number-convenient experience for your customers.</p><h4><strong>Gift card sales</strong></h4><p>Promote your business with customised or pre-designed gift cards. The integrated gift card sales tool can improve your bottom line.</p><h4><strong>Mixed mode payment</strong></h4><p>Complete transparency and predictability that enables easier accounting. Collect payments through various payment modes – cash, credit card, gift voucher, to make it simple for your customers.</p><h4><strong>Invoice notification</strong></h4><p>Go paperless! Send your automated invoices directly to your client\'s inbox or via text messages.</p><h4><strong>Centralized Prepaid</strong></h4><p>This means, a guest/customer can purchase prepaid cards at any branch of the outlet and subsequently redeem it at any of the branches. This upgrade will work for chain outlets as well as franchisees.</p>', NULL, NULL, '2022-08-04 16:21:31', '2022-08-08 20:11:54');
INSERT INTO `posts` VALUES (92, 'solutions', 'section_3', 'Online Booking', NULL, 'online,booking', '<p>Promote your business efficiently and effectively with MioSalon. Integrate your salon and spa software to your website and social media pages to enable your clients to book, cancel or reschedule their appointment bookings anytime from anywhere.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/online-booking-img.png\"></figure><h4><strong>Add online booking to your website</strong></h4><p>The online booking widget for your website makes it easy and convenient for your guests to schedule appointments.</p><h4><strong>Facebook widget</strong></h4><p>Attract new clients by adding an online booking widget on your Facebook page. Clients are likely to take inspiration from your posts and book straight.</p><h4><strong>Integrated online payments</strong></h4><p>An integrated online payment gateway for bookings made on the website or through Facebook and Google.</p>', NULL, NULL, '2022-08-04 16:24:07', '2022-08-08 20:12:26');
INSERT INTO `posts` VALUES (93, 'solutions', 'section_4', 'Marketing', NULL, 'marketing', '<p>Create targeted promotions and engage with new clients at the right time with the right offers. With simple and effective marketing strategies, put your salon business where customers are looking.</p><p><img src=\"http://local.mennr.com/upload/images/marketing-img.png\"><br><strong>Personalised campaigns</strong></p><p>Use booking preference and appointment history to filter clients based on service, age, gender, visit and value.</p><h4><strong>SMS &amp; Email campaigns</strong></h4><p>Boost client engagement with SMS and email campaigns. Create targeted messages for your active and inactive clients.</p>', NULL, NULL, '2022-08-04 16:25:41', '2022-08-08 20:12:53');
INSERT INTO `posts` VALUES (94, 'home', 'section_1', 'The best salons, spas & medspas trust only Mennr.', NULL, 'salon', '<p>We\'re the best all-in-one, cloud-based software for big, growing, ambitious brands in beauty and wellness, we always focus on bringing out the best from business.</p>', '04082022165963820671.png', '04082022165963834296.png', '2022-08-04 18:36:46', '2022-08-04 18:39:02');
INSERT INTO `posts` VALUES (95, 'home', 'section_2', 'Samsung', NULL, 'Samsung', NULL, '04082022165963877436.png', NULL, '2022-08-04 18:46:14', '2022-08-04 18:46:14');
INSERT INTO `posts` VALUES (96, 'home', 'section_2', 'Oracle', NULL, 'Oracle', NULL, '04082022165963880489.png', NULL, '2022-08-04 18:46:44', '2022-08-04 18:46:44');
INSERT INTO `posts` VALUES (97, 'home', 'section_2', 'Segment', NULL, 'Segment', NULL, '0408202216596388253.png', NULL, '2022-08-04 18:47:05', '2022-08-04 18:47:05');
INSERT INTO `posts` VALUES (98, 'home', 'section_2', 'Monday', NULL, 'Monday', NULL, '0408202216596388450.png', NULL, '2022-08-04 18:47:25', '2022-08-04 18:47:25');
INSERT INTO `posts` VALUES (99, 'home', 'section_2', 'Morpheus', NULL, 'Morpheus', NULL, '0408202216596388805.png', NULL, '2022-08-04 18:48:00', '2022-08-04 18:48:00');
INSERT INTO `posts` VALUES (100, 'home', 'section_3', 'Elevate your customer experience', NULL, 'Elevate', '<p>From online booking to self-check-in, from e-paying to leaving reviews, the modern, touchless experience we give your guests is simply magical.</p>', '04082022165963955750.png', '04082022165963955764.png', '2022-08-04 18:59:17', '2022-08-04 18:59:17');
INSERT INTO `posts` VALUES (101, 'home', 'section_3', 'Unify your brand customer experience', NULL, 'Unify', '<p>With our salon-spa management software you can grow faster and maintain consistency across all your outlets at the same time.</p>', '04082022165963962010.png', '04082022165963962038.png', '2022-08-04 19:00:20', '2022-08-04 19:00:20');
INSERT INTO `posts` VALUES (102, 'home', 'section_3', 'Automate your customer experience', NULL, 'Automate', '<p>From streamlining front desk tasks, to scheduling appointments, and sending smart marketing campaigns, utilize Mennr to harness the power of AI.</p>', '04082022165963968623.png', '04082022165963968665.png', '2022-08-04 19:01:26', '2022-08-04 19:01:26');
INSERT INTO `posts` VALUES (103, 'home', 'section_4', 'Appointments & Bookings', NULL, 'Appointments & Bookings', '<p>Provide a consistent brand experience, delight your guests, and increase productivity with an all-in</p>', '04082022165964049254.svg', NULL, '2022-08-04 19:14:52', '2022-08-04 19:14:52');
INSERT INTO `posts` VALUES (104, 'home', 'section_4', 'Business Intelligence', NULL, 'Business Intelligence', '<p>Know exactly how your business is doing with easy-to-use reports and dashboards on financials, staff.</p>', '04082022165964055563.svg', NULL, '2022-08-04 19:15:55', '2022-08-04 19:15:55');
INSERT INTO `posts` VALUES (105, 'home', 'section_4', 'Marketing & Sales', NULL, 'Marketing & Sales', '<p>Target leads with fully branded, personalized campaigns and manage them from opportunity</p>', '04082022165964058494.svg', NULL, '2022-08-04 19:16:24', '2022-08-04 19:16:24');
INSERT INTO `posts` VALUES (106, 'home', 'section_4', 'Billing & Payment', NULL, 'Billing & Payment', '<p>Go touchless with your payments and deliver a faster, reliable, more convenient checkout experience</p>', '04082022165964061414.svg', NULL, '2022-08-04 19:16:54', '2022-08-04 19:16:54');
INSERT INTO `posts` VALUES (107, 'home', 'section_4', 'Business Management', NULL, 'Business Management', '<p>A seamless, simple, and scalable solution to always improve and grow all aspect of the business</p>', '04082022165964064274.svg', NULL, '2022-08-04 19:17:22', '2022-08-04 19:17:22');
INSERT INTO `posts` VALUES (108, 'home', 'section_4', 'Mobile Solutions', NULL, 'Mobile Solutions', '<p>Convenient, flexible, touchless features for your guests and your staff for fast business flow.</p>', '04082022165964070145.svg', NULL, '2022-08-04 19:18:21', '2022-08-04 19:18:21');
INSERT INTO `posts` VALUES (109, 'home', 'section_5', 'Store Integration', NULL, 'Store Integration', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '0408202216596457018.svg', NULL, '2022-08-04 20:41:41', '2022-08-04 20:41:41');
INSERT INTO `posts` VALUES (110, 'home', 'section_5', 'Data Protection', NULL, 'Data Protection', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '04082022165964572692.svg', NULL, '2022-08-04 20:42:06', '2022-08-04 20:42:06');
INSERT INTO `posts` VALUES (111, 'home', 'section_5', 'Invoice Generator', NULL, 'Invoice Generator', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '04082022165964578315.svg', NULL, '2022-08-04 20:43:03', '2022-08-04 20:43:03');
INSERT INTO `posts` VALUES (112, 'home', 'section_5', 'Auto Responder', NULL, 'Auto Responder', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '04082022165964580472.svg', NULL, '2022-08-04 20:43:24', '2022-08-04 20:43:24');
INSERT INTO `posts` VALUES (113, 'home', 'section_5', 'Social Plugins', 'Social Plugins', 'Social Plugins', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '04082022165964583571.svg', NULL, '2022-08-04 20:43:55', '2022-08-04 20:43:55');
INSERT INTO `posts` VALUES (114, 'home', 'section_5', 'Data Backup', NULL, 'Data Backup', '<p>Eos tota dicunt democritum no. Has natum gubergren ne. Est viris soleat insolens eu nec.</p>', '04082022165964585988.svg', NULL, '2022-08-04 20:44:19', '2022-08-04 20:44:19');
INSERT INTO `posts` VALUES (115, 'solutions', 'section_5', 'Analytics & Reports', NULL, 'Analytics & Reports', '<p>Check how your business is tracking overall with individual reports and detailed insights on revenue, tax, campaigns and staff and sales performance. Maintain your entire business and client history in the cloud.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/customize-reports.png\"></figure><h4>Dashboard</h4><p>Get an instant overview of how your business is doing at the click of a button. Also, keep track of client retention, referrals, staff productivity and sales benchmarks.</p><h4>Staff performance analysis</h4><p>Keep the wheels of your business running smoothly by generating staff performance reports, total hours booked, product sales and client retention rate for each team member.</p><h4>Customer 360 degree</h4><p>Enhance client relationships by getting valuable insights into customer activity. Pull reports on rebooking, no-shows, cancelled appointments and customer retention.</p><h4>Customer segmentation</h4><p>Segment clients on different parameters to get insights on active and inactive clients.</p>', NULL, NULL, '2022-08-08 20:30:40', '2022-08-08 20:32:27');
INSERT INTO `posts` VALUES (116, 'solutions', 'section_6', 'Feedback System', NULL, 'Feedback System', '<p>The online reputation manager on MioSalon gives you complete control on how people treat, react and rate your business online. Get the real-time opinion of your clients before they rant on social media.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/increase-online-reputation.png\"></figure><h4>Control negative feedback</h4><p>Monitor and control what’s being said about your business on Google, Facebook, TripAdvisor and Yelp.</p><h4>Enhanced reputation</h4><p>Gain more 5-star ratings through automated settings. Gets your salon to stand out from your competition online and improves your salon’s website ranking on Google.</p><h4>Feedback alerts</h4><p>Get notifications and alerts each time a negative rating is given.</p><h4>Feedback response</h4><p>Respond to negative and positive comments online from one clean and clear dashboard.</p><h4>Rating by SMS</h4><p>Send out text messages to clients after the service to collect dynamic ratings by SMS.</p><h4>Feedback at store</h4><p>Get clients to review your salon during checkout using salon software on your tablet.</p><h4>Feedback questionnaires</h4><p>Setup feedback questions on staff performance, appointment timeliness, quality of services and more.</p>', NULL, NULL, '2022-08-08 20:37:38', '2022-08-08 20:37:38');
INSERT INTO `posts` VALUES (117, 'solutions', 'section_7', 'Repeat Clients', NULL, 'Repeat Clients', '<p>Add to your salon bottom line and guarantee future income by creating membership packages and rewarding loyal clients. This will ensure you get more business opportunities from them.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/Repeat-Clients.png\"></figure><h4>Run a membership program</h4><p>For consistent repeat business and steady revenue flow, create membership programs to meet your client’s needs. Keep them coming back running special and exclusive offers only for members.</p><h4>Gift vouchers</h4><p>Sell gift cards and vouchers in-store and online. Give your clients the opportunity to pick-up the perfect last-minute gift for their friends, and near and dear ones.</p><h4>Prepaid and Credit management</h4><p>The CRM module displays the collected and pending payments against each customer. Bring more transparency in your business by managing finances within a few clicks.</p><h4>Reward points</h4><p>Turn your clients into loyal customers by implementing a loyalty point program. Reward clients for referrals, pre-booked appointments and retail purchases. While your customers will feel rewarded, your business will grow.</p><h4>Packages</h4><p>Bundle multiple services and sell as a package to loyal customers. Entice customers to make a one-time payment.</p><h4>Send personalised offers</h4><p>Personalised offers and packages for clients based on their history.</p>', NULL, NULL, '2022-08-08 20:38:38', '2022-08-08 20:38:38');
INSERT INTO `posts` VALUES (118, 'solutions', 'section_8', 'Book Keeping', NULL, 'Book Keeping', '<p>Ensure that your team and your business are on the same page by managing all the aspects vital to your business from one location.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/book-keeping.png\"></figure><h4>Product inventory management</h4><p>Get notified when you’re low on product and stock. Manage product usage, expiry and purchase orders with simplified inventory management tools.</p><h4>Employee management</h4><p>Get all the details about your employees and their performance with a single click. Analyse their productivity and give them incentives.</p><h4>Client management</h4><p>Get instant access to client demographics, past service history, stylist preferences and more. Keep track of past purchases and appointment history to personalise every client’s experience.</p><h4>Expense management</h4><p>Keep track of client expenditure to ensure swift processing of payments. Get instant notifications about pending payments and minimise the loss in your business.</p>', NULL, NULL, '2022-08-08 20:40:19', '2022-08-08 20:40:19');
INSERT INTO `posts` VALUES (119, 'solutions', 'section_9', 'Send Notification', NULL, 'Send Notification', '<p>Seamlessly send notifications and appointment reminders to employees and clients respectively. This will help your business improve staff productivity.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/send-notification.png\"></figure><h4>Send staff notification</h4><p>Send out an email to your employees at the start of each day. Include the daily appointment schedule and changes, if any. MioSalon notifications and reminders will ensure they never miss an appointment.</p><h4>Send appointment reminders</h4><p>Reduce your salon no-show rate by sending automated text and email confirmations. You can also send for two-way SMS confirmations.</p><h4>Birthday and anniversary greetings</h4><p>Never miss a client’s birthday or anniversary. Get notified and send them exclusive offers on their special day.</p><h4>E-invoices</h4><p>Opt for a paperless approach, and send invoices to clients via email and SMS. Send rebooking reminders to get clients to walk back through the doors of your business.</p>', NULL, NULL, '2022-08-08 20:42:47', '2022-08-08 20:42:47');
INSERT INTO `posts` VALUES (120, 'solutions', 'section_10', 'Manage Multi-Location', NULL, 'Manage Multi-Location', '<p>Manage one or more salon locations easily within a few clicks. Do all this and more with real-time access to data.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/manage-multi-location.png\"></figure><h4>Manage locations on the go</h4><p>Manage your salon or spa anytime, anywhere by using it on your tablet, PC, laptop or mobile device.</p><h4>Analyse inventory across multiple locations</h4><p>Easily track inventory across multiple locations and ensure the availability of products.</p><h4>Consolidated reports</h4><p>Get consolidated sales and revenue of each outlet in one central location.</p><h4>Centralised membership</h4><p>Manage client memberships centrally and share customer data across all centres seamlessly so that clients can avail the requested services with ease.</p><h4>Stock transfers</h4><p>Synchronise inter-branch products and stock transfers.</p>', NULL, NULL, '2022-08-08 20:44:39', '2022-08-08 20:44:39');
INSERT INTO `posts` VALUES (121, 'solutions', 'section_11', 'Sell Online', NULL, 'Sell Online', '<p>Boost the profitability of your business by selling gift vouchers in-store and online.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/sell-online.png\"></figure><h4>Sell gift cards on third-party websites</h4><p>Put your gift cards where clients spend most of their time – Amazon, Flipkart, Groupon etc.</p>', NULL, NULL, '2022-08-08 20:58:58', '2022-08-08 20:58:58');
INSERT INTO `posts` VALUES (122, 'solutions', 'section_12', 'Business Intelligence', NULL, 'Business Intelligence', '<p>Don’t wait until the end of the year to see how your business is doing. MioSalon’s dashboard shows how your business is tracking overall.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/business-Intelligence.png\"></figure><h4>Get weekly/monthly reports</h4><p>Download individual reports to get detailed insights on important metrics like the staff and employee performance.</p><h4>Stronger and weaker metrics</h4><p>The salon software actively demonstrates sale volumes to you so that you can analyse stronger and weaker metrics and define your marketing strategy accordingly.</p><h4>Set goals and track your success</h4><p>Set retail, service and performance goals for your employees. Check recent staff activity and decide where your staff is succeeding and where they can improve.</p><h4>One single report</h4><p>Say goodbye to multiple reports and spreadsheets. Say hello to a single report to review business goals and progress.</p>', NULL, NULL, '2022-08-08 20:59:57', '2022-08-08 20:59:57');
INSERT INTO `posts` VALUES (123, 'solutions', 'section_13', 'Security', NULL, 'Security', '<p>You can be completely rest assured that your data will be protected against any kind of misuse and malicious activity.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/security.png\"></figure><h4>Individual logins</h4><p>Your data will remain safe no matter what your location faces. Every employee will be given an individual login and secure password to access the software.</p><h4>SSL/TLS security enabled</h4><p>All communications with our servers are encrypted with SSL (Secure Sockets Layer)/TLS (Transport Layer Security).</p><h4>OTP verification</h4><p>OTP verification for redemption of gift vouchers, prepaid payments and appointment booking.</p><h4>Unauthorised use alerts</h4><p>Get notifications and text alerts for unauthorized use or download.</p>', NULL, NULL, '2022-08-08 21:00:55', '2022-08-08 21:00:55');
INSERT INTO `posts` VALUES (124, 'solutions', 'section_14', 'Integrations', NULL, 'Integrations', '<p>Powerful integration with the ecosystem such as Facebook, QuickBooks, etc. to make life easier for you.</p><figure class=\"image\"><img src=\"http://local.mennr.com/upload/images/Integration.png\"></figure><h4>Facebook</h4><p>Online booking made easy by adding the booking widget to your Facebook business page. It automatically reflects in your MioSalon calendar.</p><h4>Mailchimp</h4><p>Create and send targeted email campaigns by syncing your client database from MioSalon to MailChimp.</p><h4>Stripe</h4><p>Receive payments for purchases from customers 24X7 by syncing your MioSalon booking widget with Stripe payment gateway.</p><h4>Razorpay</h4><p>Let your customers take appointments and make purchases anytime, anywhere! All you have to do is integrate MioSalon with Razor payment gateway.</p><h4>Google Calendar</h4><p>MioSalon automatically syncs the appointment with customer\'s Google calendar, so the customer gets complete control of their schedule on their smart phone and be reminded automatically from Google.</p><h4>QuickBooks</h4><p>Manage your expenses and cash flow by importing all your sales transactions and taxes into QuickBooks online accounting software.</p><h4>Card Connect</h4><p>Integrated Credit Card processing makes your POS complete. EVM supported.</p><h4>SMS Integrations</h4><p>Send your clients unlimited SMS reminders and marketing messages by creating your own SMS gateway account and integrating it with MioSalon.</p>', NULL, NULL, '2022-08-08 21:02:36', '2022-08-08 21:02:36');
INSERT INTO `posts` VALUES (125, 'pricing', 'section_2', 'Intercom', NULL, 'cost', '<p>Live chat and Marketing Automation<br><strong>$119</strong>/month<br>Cost for 1000 Profiles</p>', NULL, NULL, '2022-08-11 17:37:07', '2022-08-11 17:42:15');
INSERT INTO `posts` VALUES (126, 'pricing', 'section_2', 'MixPanel', NULL, 'cost', '<p>User Analytics<br><strong>$25</strong>/month</p>', NULL, NULL, '2022-08-11 17:43:42', '2022-08-11 17:43:42');
INSERT INTO `posts` VALUES (127, 'pricing', 'section_2', 'Hubspot', NULL, 'cost', '<p>Forms &amp; Lead Capture<br><strong>$50</strong>/month</p>', NULL, NULL, '2022-08-11 17:44:35', '2022-08-11 17:44:35');
INSERT INTO `posts` VALUES (128, 'pricing', 'section_2', 'Google Analytics', NULL, 'cost', '<p>Web Analytics<br><strong>$ Your Sanity</strong></p>', NULL, NULL, '2022-08-11 17:45:17', '2022-08-11 17:45:17');
INSERT INTO `posts` VALUES (129, 'pricing', 'section_2', '$194/month', NULL, 'total_pricing', '<p><strong>For a team of 5</strong></p>', NULL, NULL, '2022-08-11 17:46:22', '2022-08-11 17:46:22');
INSERT INTO `posts` VALUES (130, 'pricing', 'section_2', '$289/month', NULL, 'total_pricing', '<p>For a team of 10</p>', NULL, NULL, '2022-08-11 17:47:13', '2022-08-11 17:47:13');
INSERT INTO `posts` VALUES (131, 'pricing', 'section_2', '$669/month', NULL, 'total_pricing', '<p><strong>For a team of 25</strong></p>', NULL, NULL, '2022-08-11 17:47:43', '2022-08-11 17:47:43');
INSERT INTO `posts` VALUES (132, 'pricing', 'section_3', '$119 per month', 'Cost for 1000 Profiles', 'cost_logo', NULL, '11082022166024027931.png', NULL, '2022-08-11 17:51:19', '2022-08-11 17:52:11');
INSERT INTO `posts` VALUES (133, 'pricing', 'section_3', 'Unlimited Integrations', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:53:40', '2022-08-11 17:53:40');
INSERT INTO `posts` VALUES (134, 'pricing', 'section_3', 'Unlimited Active Models', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:54:17', '2022-08-11 17:54:17');
INSERT INTO `posts` VALUES (135, 'pricing', 'section_3', 'Unlimited Lookback', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:54:44', '2022-08-11 17:54:44');
INSERT INTO `posts` VALUES (136, 'pricing', 'section_3', 'Real-time Data Refresh', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:55:02', '2022-08-11 17:55:02');
INSERT INTO `posts` VALUES (137, 'pricing', 'section_3', 'Priority Support SLA', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:55:28', '2022-08-11 17:55:28');
INSERT INTO `posts` VALUES (138, 'pricing', 'section_3', 'Community Access', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:55:47', '2022-08-11 17:55:47');
INSERT INTO `posts` VALUES (139, 'pricing', 'section_3', 'Dedicated CSM', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:56:12', '2022-08-11 17:56:12');
INSERT INTO `posts` VALUES (140, 'pricing', 'section_3', 'Premium Integrations', 'Live chat and Marketing Automation', 'cost_for', NULL, NULL, NULL, '2022-08-11 17:56:34', '2022-08-11 17:56:34');
INSERT INTO `posts` VALUES (145, 'pricing', 'section_3', '$79/month', NULL, 'team_cost', '<p>For your whole team</p>', NULL, NULL, '2022-08-12 01:21:16', '2022-08-12 01:21:16');
COMMIT;

-- ----------------------------
-- Table structure for pricing
-- ----------------------------
DROP TABLE IF EXISTS `pricing`;
CREATE TABLE `pricing` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pricing
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for social_media
-- ----------------------------
DROP TABLE IF EXISTS `social_media`;
CREATE TABLE `social_media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of social_media
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for subscription_items
-- ----------------------------
DROP TABLE IF EXISTS `subscription_items`;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscription_items_subscription_id_stripe_price_unique` (`subscription_id`,`stripe_price`),
  UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of subscription_items
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for subscriptions
-- ----------------------------
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of subscriptions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_logo` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
BEGIN;
INSERT INTO `testimonials` VALUES (1, 'Appointment and Booking', 'Jonathon Levi', 'Owner', 'Jonny Levi Studios', '02082022165945324175.png', '02082022165945324135.png', '<p>Customers come to Jonny Levi Studio for a magical experience that leaves them feeling and looking radiant. <strong>Our technology partner needed to do the same. We chose </strong><a href=\"http://www.zonit.com\"><i><strong>Zenoti</strong></i></a><strong> to ensure that the avant-garde customer experience starts well before they enter our salon. </strong>With Zenoti, we’ve eliminated the friction of booking, checking in and out, paying and more.</p>', '2022-08-02 15:14:01', '2022-08-08 02:41:09');
INSERT INTO `testimonials` VALUES (2, 'home', 'Mike Taylor', 'Web Designer', NULL, '02082022165946071049.png', NULL, 'Wise busy past both park when an ye no. Nay likely her length sooner thrown sex lively income. The expense windows . Blessing welcomed ladyship.', '2022-08-02 17:18:30', '2022-08-02 17:18:30');
INSERT INTO `testimonials` VALUES (3, 'home', 'Chris Peter', 'Product Manager', NULL, '0208202216594607679.png', NULL, 'Wise busy past both park when an ye no. Nay likely her length sooner thrown sex lively income. The expense windows . Blessing welcomed ladyship.', '2022-08-02 17:19:27', '2022-08-02 17:19:27');
INSERT INTO `testimonials` VALUES (4, 'home', 'Jonathon Levi', 'Owner', NULL, '02082022165946081993.png', NULL, 'Wise busy past both park when an ye no. Nay likely her length sooner thrown sex lively income. The expense windows . Blessing welcomed ladyship.', '2022-08-02 17:20:19', '2022-08-02 17:20:19');
INSERT INTO `testimonials` VALUES (5, 'Billing and Payments', 'Carol Morgan', 'COO', 'Cosmetic Skin Therapies', '03082022165948586886.png', '0308202216594858689.png', '<p>The power of the mobile app is almost like it’s been tailor-made for our business… the fact that business owners/service providers can go into a treatment room, take the iPad with them, do everything they need to do, including payment… is a godsend to our franchisees.</p>', '2022-08-03 00:17:48', '2022-08-03 00:17:48');
COMMIT;

-- ----------------------------
-- Table structure for user_plans
-- ----------------------------
DROP TABLE IF EXISTS `user_plans`;
CREATE TABLE `user_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `plan_id` bigint unsigned NOT NULL,
  `previous_plan` bigint unsigned NOT NULL,
  `last_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `other_data` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of user_plans
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `locations_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employees_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci,
  `stripe_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pm_last_four` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_level` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_stripe_id_index` (`stripe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Kai Akira', 'kai@mennr.com', NULL, '$2y$10$5rLWICEx9Z26.ofzVxMIce/JM2cuEh3xdz6H4wuLaRR/QjyBQZA9O', 'Mennr', NULL, NULL, '100-500', 'private', '16144524242', NULL, NULL, NULL, NULL, NULL, 2, '2022-08-12 19:00:13', '2022-08-12 19:00:13');
INSERT INTO `users` VALUES (2, 'Luca Ven', 'luca@mennr.com', NULL, '$2y$10$VPK3X/21aGxb3dPY6ZnvHOeqRvjJrMfXDAoSYFpLl0cQ3JObXpMvu', 'Mennr', NULL, NULL, '100-500', 'private', '16144524242', NULL, NULL, NULL, NULL, NULL, 2, '2022-08-12 21:45:13', '2022-08-12 21:45:13');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
