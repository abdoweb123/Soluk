-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 05:48 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solokemcangroup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'لماذا مركز سلوك للتأهيل والرعاية؟', 'Why Suluk Center for Rehabilitation and Care?', '<p>تأتي مراكز سلوك بجيل جديد من مركز الرعاية النهارية والذي يختص بتعديل وتنمية وتشكيل السلوك واستحداث برامج فعالة لاكتشاف القدرات الكامنة لدي أبنائنا وتطويرها لتمكنيهم كأشخاص فاعلين بالمجتمع.<br />\r\nمركز سلوك لجيل جديد ورؤية جديدة وتقديم نموذج ناجح يحقق نجاحات متعددة دائماز<br />\r\n<strong>رسالتنا</strong><br />\r\nتقديم تدريب فعال وهادف يعمل علي اطفاء السلوك السلبي وتنمية السلوك الأيجابي وتشكيل سلوكيات ومهارات ايجابية جديدة<br />\r\n<strong>رؤيتنا</strong><br />\r\nتقديم رواد لجيل جديد من مراكز الرعاية والتأهيل<br />\r\nمركز سلوك لجيل جديد ورؤية جديدة وتقديم نموذج ناجح يحقق نجاحات متعددة دائماز</p>', '<p>Suluk Centers bring a new generation of day care centers that specialize in modifying, developing and shaping behavior and creating effective programs to discover the latent capabilities of our children and develop them to empower them as active individuals in society.<br />\r\nA behavior center for a new generation, a new vision, and presenting a successful model that achieves multiple successes<br />\r\n<strong>Our message</strong><br />\r\nProviding effective and purposeful training that works to extinguish negative behavior, develop positive behavior, and form new positive behaviors and skills.<br />\r\n<strong>Our vision</strong><br />\r\nProviding pioneers for a new generation of care and rehabilitation centres<br />\r\nA behavior center for a new generation, a new vision, and presenting a successful model that achieves multiple successes</p>', 1, '2023-11-12 09:09:43', '2024-06-09 06:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `branch_id`, `uuid`, `name`, `email`, `phone`, `image`, `phone_code`, `country_code`, `status`, `password`, `email_verified_at`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, 'Admin', 'Admin@solok.com', '123456', NULL, '973', 'BH', 1, '$2y$10$TN09svTlNpoAm34OZsmKMO03HDcWtM43FsjEl5nhhzYX7ldUhkDii', NULL, NULL, NULL, '2024-02-20 10:05:17', '2024-03-13 10:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `beneficiaries`
--

CREATE TABLE `beneficiaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beneficiaries`
--

INSERT INTO `beneficiaries` (`id`, `title_ar`, `title_en`, `status`, `created_at`, `updated_at`) VALUES
(20, 'ذوى اضطراب طفيف التوحد', 'People with mild autism disorder', 1, '2024-06-06 10:52:27', '2024-06-06 10:52:27'),
(21, 'ذوي الإعاقة النفسية', 'People with psychological disabilities', 1, '2024-06-06 10:53:13', '2024-06-06 10:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `title_ar`, `title_en`, `status`, `created_at`, `updated_at`) VALUES
(22, 'مركز سلوك للرعاية والتأهيل', 'Suluk Center for Care and Rehabilitation', 1, '2024-06-06 11:10:13', '2024-06-06 11:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'أحمد على', '+9731231241', 'ahmed@gmail.com', 'شكرا لكم على الاهتمام', '2024-06-05 18:28:29', '2024-06-05 18:28:29'),
(6, 'أحمد خالد', '+9731231241', 'ahmed@gmail.com', 'شكرا لكم على الاهتمام', '2024-06-05 19:34:03', '2024-06-05 19:34:03'),
(7, 'أحمد خالد', '+9731231241', 'ahmed@gmail.com', 'شكرا لكم على الاهتمام', '2024-06-06 07:15:43', '2024-06-06 07:15:43'),
(8, 'أحمد خالد', '+9731231241', 'ahmed@gmail.com', 'شكرا لكم على الاهتمام', '2024-06-06 08:28:10', '2024-06-06 08:28:10'),
(9, 'أحمد خالد', '+9731231241', 'ahmed@gmail.com', 'شكرا لكم على الاهتمام', '2024-06-06 10:42:18', '2024-06-06 10:42:18'),
(10, 'Mohamed', '+966555555555', 'm12@gmail.com', 'Fdsfsf', '2024-06-06 11:10:02', '2024-06-06 11:10:02'),
(11, 'mohamedddd', '+966555555555', 'm1@gmail.com', 'Dsgsgsgsgs', '2024-06-06 11:15:42', '2024-06-06 11:15:42'),
(12, 'Moooo', '+966555555554', 'm123@gmail', 'Dsfsdgs', '2024-06-06 11:17:33', '2024-06-06 11:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(255) DEFAULT NULL,
  `question_en` varchar(255) DEFAULT NULL,
  `answer_ar` text DEFAULT NULL,
  `answer_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question_ar`, `question_en`, `answer_ar`, `answer_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quis harum dolorem c', 'Nostrum eu enim iste', 'Amet anim et qui fu', 'Minima quasi volupta', 1, '2024-02-15 09:16:49', '2024-02-15 09:16:49'),
(2, 'In qui autem consect', 'Ut ratione dolores v', 'Libero eos ipsum ea', 'Quisquam inventore i', 1, '2024-02-15 09:16:52', '2024-02-15 09:16:52'),
(3, 'Dolore est nostrum e', 'Do ea consectetur qu', 'Dicta ut doloribus i', 'Illum do pariatur', 1, '2024-02-15 09:16:55', '2024-02-15 09:16:55'),
(4, 'Reprehenderit deser', 'Pariatur Eligendi c', 'Voluptatum rem culpa', 'Cumque qui dolor tem', 1, '2024-02-15 09:16:58', '2024-02-15 09:16:58'),
(5, 'Eos incidunt quia f', 'Hic aute sapiente ha', 'Minim voluptas quas', 'Dolores perferendis', 1, '2024-02-15 09:17:00', '2024-02-15 09:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_05_10_080339_create_services_table', 1),
(2, '2013_10_10_100517_create_days_table', 1),
(3, '2013_10_12_000000_create_client_table', 1),
(4, '2013_10_12_000000_create_employer_table', 1),
(5, '2013_12_15_080340_create_branches_table', 1),
(6, '2014_10_10_000000_create_countries_table', 1),
(7, '2014_10_11_000000_create_abouts_table', 1),
(8, '2014_10_11_000000_create_privacy_table', 1),
(9, '2014_10_11_000000_create_sliders_table', 1),
(10, '2014_10_11_000000_create_terms_table', 1),
(11, '2014_10_11_100517_create_blocks_table', 1),
(12, '2014_10_12_000000_create_admin_table', 1),
(13, '2022_04_18_080645_create_points_table', 1),
(14, '2022_04_18_080645_create_settings_table', 1),
(15, '2022_04_18_084603_create_contacts_table', 1),
(16, '2022_04_18_084626_create_f_a_q_s_table', 1),
(17, '2022_04_19_100517_create_payments_table', 1),
(18, '2022_05_11_080339_create_carts_table', 1),
(19, '2022_05_11_080339_create_orders_table', 1),
(20, '2022_05_12_080341_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'سياسة الخصوصية لمركز سلوك للتأهيل والرعاية', 'Privacy Policy for Suluk Center for Rehabilitation and Care', '<p>تعتبر الخصوصية وحماية المعلومات الشخصية من أهم الأولويات في مركز سلوك للتأهيل والرعاية. ندرك تماماً أهمية الخصوصية لمرضانا وعائلاتهم، ونسعى لضمان حماية المعلومات الشخصية بطريقة تتوافق مع أفضل المعايير والممارسات الدولية.<br />\r\nتهدف هذه السياسة إلى توضيح كيفية جمع، استخدام، ومشاركة المعلومات الشخصية، بالإضافة إلى حقوق الأفراد فيما يتعلق بمعلوماتهم.<br />\r\n<strong>سياسة الخصوصية</strong></p>\r\n\r\n<ul>\r\n	<li>حماية المعلومات الشخصية</li>\r\n	<li>تقديم الرعاية الصحية و تواصل مع المرضى وأسرهم بشكل مستمر</li>\r\n</ul>\r\n\r\n<p>قد نقوم بتحديث سياسة الخصوصية من وقت لآخر لتعكس التغييرات في ممارساتنا أو القوانين المعمول بها.</p>', '<p>Privacy and protection of personal information are among the most important priorities at Suluk Rehabilitation and Care Center. We fully recognize the importance of privacy to our patients and their families, and we strive to ensure that personal information is protected in a manner consistent with best international standards and practices.<br />\r\nThis policy aims to explain how we collect, use and share personal information, as well as the rights of individuals in relation to their information.<br />\r\n<strong>privacy policy</strong></p>\r\n\r\n<ul>\r\n	<li>Protection of personal information</li>\r\n	<li>Providing health care and communicating with patients and their families on an ongoing basis</li>\r\n</ul>\r\n\r\n<p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable laws.</p>', 1, '2023-11-12 09:09:43', '2024-06-09 06:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `file`, `status`, `created_at`, `updated_at`) VALUES
(7, 'برنامج النطق والتخاطب', 'Speech and communication programme', 'برنامج علاج النطق (التخاطب) يتم النظر إليه على مستوى إعاقة الطفل و مشكلة التخاطب لديه كما يتم التركيز على قدرات البلع لدى الطفل و مستوى تطور الكلام والتواصل مع من حوله و على السلوك و التعلم و مشاكل الكلام و التعبير و غيرها من الشركاء .', 'The speech therapy program looks at the level of the child’s disability and his communication problem. It also focuses on the child’s swallowing abilities, the level of speech development, communication with those around him, behavior, learning, speech and expression problems, and other partners.', '/uploads/Programs/1717621481_2193.jpg', 1, '2024-06-05 21:04:41', '2024-06-05 21:04:41'),
(8, 'برنامج الخدمات النفسية', 'Psychological services program', 'تمثل عملية القياس أهمية جوهرية في رصد التقدم العلمي للظواهر وتطورها ، حيث تقيس عددا كبيرا من الظواهر النفسية ، ففي المجال العقلي – المعرفي Cognitive - Domain نقيس العمليات العقلية مثل التعلم ، التفكير، التذكر وكذلك نقيس القدرات العقلية العامة . ( الذكاء ) ، الاستعدادات والقدرات مثل : القدرة الرياضية، والقدرة اللغوية.....إلخ. وفي المجال الانفعالي – الوجداني Affective – Domain نقيس الميول ، الاتجاهات ، والقيم وبعض سمات الشخصية.', 'The measurement process represents fundamental importance in monitoring the scientific progress and development of phenomena, as it measures a large number of psychological phenomena. In the mental-cognitive domain, we measure mental processes such as learning, thinking, and remembering, as well as general mental abilities. (Intelligence), aptitudes and abilities such as: mathematical ability, linguistic ability...etc. In the Affective - Domain, we measure inclinations, trends, values, and some personality traits.', '/uploads/Programs/1717941118_1186.jpg', 1, '2024-06-05 21:05:57', '2024-06-09 13:51:58'),
(9, 'برنامج العلاج الوظيفي', 'Occupational therapy program', 'إن الهدف الرئيسي لمهنة العلاج الوظيفي هو تمكين الأشخاص ذوي الإعاقة من القيام بوظائفهم اليومية بشكل آمن وبدرجة عالية من الاعتماد على الذات والتي تعطي معنى وهدف لحياتهم وتساعد على دمجهم ومشاركتهم في المجتمع بشكل فعال.', 'The main goal of the occupational therapy profession is to enable people with disabilities to carry out their daily functions safely and with a high degree of self-reliance, which gives meaning and purpose to their lives and helps to integrate them and participate effectively in society.', '/uploads/Programs/1717621611_9620.jpg', 1, '2024-06-05 21:06:51', '2024-06-05 21:06:51'),
(10, 'برنامج المهارات التدريبية', 'Training skills programme', 'يعتبر التطوير الشخصي والمهني أمرًا أساسيًا في سبيل تحقيق النجاح في بيئة العمـل المتطورة والمتغيرة باستمرار. وفي هذا السياق، تبرز أهمـية البرامـج التدريبيه كأداة فعّالة لتطوير المهارات وتحسـين أداء الأفراد والمؤسسات. يعد هذا المقال استكشافًا لمفهوم البرامـج التدريبيـة والأهداف التي تسعى لتحقيقها، بالإضافة إلى فحص الأنواع المتنوعة لهذه البرامـج وكيفية تأثيرها على تطويـر القوى العاملة.', 'Personal and professional development is essential to achieving success in a constantly evolving and changing work environment. In this context, the importance of training programs is highlighted as an effective tool for developing skills and improving the performance of individuals and institutions. This article is an exploration of the concept of training programs and the goals they seek to achieve, in addition to examining the various types of these programs and how they impact workforce development.', '/uploads/Programs/1717621678_7016.jpg', 1, '2024-06-05 21:07:58', '2024-06-05 21:07:58'),
(11, 'برنامج العلاج الطبيعي', 'Physical therapy program', 'العلاج الطبيعي هو فن وعلم يسهم في تطوير الصحة ومنع المرض من خلال فهم حركة الجسم، وهو يعمل على تصحيح وتخفيف آثار المرض والاصابة، وتشتمل الوسائل على التقييم والعلاج للمرضى والادارة والاشراف لخدمات العلاج الطبيعي والعاملين به، ومشاورة الانظمة الصحية الأخرى وإعداد السجلات والتقارير، والمشاركة في التخطيط للمجتمع والمشروعات ...', 'Physical therapy is an art and science that contributes to developing health and preventing disease through understanding body movement. It works to correct and mitigate the effects of disease and injury. Methods include evaluation and treatment of patients, management and supervision of physical therapy services and its workers, consulting other health systems, preparing records and reports, and participating in Community and project planning...', '/uploads/Programs/1717941142_5728.jpg', 1, '2024-06-05 21:09:04', '2024-06-09 13:52:22'),
(12, 'برنامج الرعاية النهارية', 'Day care program', 'سيساعدك البرنامج لرعاية الأطفال على إدارة رعاية الأطفال ، وتحسين التكلفة ، والحصول على المزيد من القبول ، وزيادة الربحية من خلال نظام إدارة رعاية الأطفال المتكامل وسهل الاستخدام.', 'Childcare software will help you manage childcare, optimize cost, gain more acceptance, and increase profitability with our integrated, easy-to-use childcare management system.', '/uploads/Programs/1717621819_7114.jpg', 1, '2024-06-05 21:10:19', '2024-06-05 21:10:19'),
(13, 'برنامج الصحة', 'Health programme', 'حافظ على لياقتك البدنية واستمتع بنمط حياة أكثر صحة. يسجل تطبيق الصحة من هواوي نشاطك في أكثر من 100 رياضة مختلفة، من مستوى المبتدئين إلى المستويات المتقدمة. شاهد بيانات التدريب بوضوح خلال كل خطوة من خطوات مسيرتك، بحيث يتسنى لك التأكد من أنك تحقق أهدافك. ادخل عالم اللياقة البدنية الرائع الذي فتح أبوابه على مصراعيها لك.', 'Stay fit and live a healthier lifestyle. The Huawei Health app records your activity in more than 100 different sports, from beginner to advanced levels. See training data clearly at every step of your journey, so you can be sure you\'re achieving your goals. Enter the wonderful world of fitness that has opened its doors wide for you.', '/uploads/Programs/1717941157_3914.jpg', 1, '2024-06-05 21:11:24', '2024-06-09 13:52:37'),
(14, 'برنامج الارشاد الاجتماعى', 'Social guidance program', 'يهدف برنامج الإرشاد النفسي /الاجتماعي  إلى مساعدة الطالب, لكي يفهم شخصيته ويعرف قدراته, ويحل مشكلاته في إطار التعاليم الإسلامية,ليصل إلى تحقيق التوافق النفسي والتربوي والمهني والاجتماعي وبالتالي يصل إلى تحقيق أهدافه في إطار الأهداف العامة للتعليم .', 'The psychological/social counseling program aims to help the student understand his personality, know his abilities, and solve his problems within the framework of Islamic teachings, in order to achieve psychological, educational, professional, and social compatibility and thus achieve his goals within the framework of the general goals of education.', '/uploads/Programs/1717621958_7455.jpg', 1, '2024-06-05 21:12:38', '2024-06-05 21:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `status`, `created_at`, `updated_at`) VALUES
(15, 'تنمية النطق والتخاطب', 'Development of speech and communication', 'وهو تقييم شامل، يقوم به مجموعة من المتخصصين، ويتناول التخصصات، وهي تحليل السلوك التطبيقي، وعلاج النطق واللغة، من خلال إجراء عدد من جلسات التقييم لهذا الغرض.', 'It is a comprehensive evaluation, carried out by a group of specialists, and addresses the specialties, namely applied behavior analysis and speech and language therapy, by conducting a number of evaluation sessions for this purpose.', 1, '2024-06-06 10:26:18', '2024-06-06 13:21:49'),
(19, 'تنمية النطق والتخاطب2', 'Development of speech and communication2', 'وهو تقييم شامل، يقوم به مجموعة من المتخصصين، ويتناول التخصصات، وهي تحليل السلوك التطبيقي، وعلاج النطق واللغة، من خلال إجراء عدد من جلسات التقييم لهذا الغرض.2', 'It is a comprehensive evaluation, carried out by a group of specialists, and addresses the specialties, namely applied behavior analysis and speech and language therapy, by conducting a number of evaluation sessions for this purpose.2', 1, '2024-06-06 10:32:04', '2024-06-06 13:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `beneficiary_id` bigint(20) NOT NULL,
  `age_group_ar` varchar(255) NOT NULL,
  `age_group_en` varchar(255) NOT NULL,
  `age_range_en` varchar(255) NOT NULL,
  `age_range_ar` varchar(255) NOT NULL,
  `sessions_count_en` varchar(255) NOT NULL,
  `sessions_count_ar` varchar(255) NOT NULL,
  `center_id` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `program_id`, `service_id`, `beneficiary_id`, `age_group_ar`, `age_group_en`, `age_range_en`, `age_range_ar`, `sessions_count_en`, `sessions_count_ar`, `center_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 19, 21, 'جميع الفئات العمرية', 'All age groups', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-06 12:31:12', '2024-06-06 13:18:28'),
(2, 13, 15, 20, 'جميع الفئات العمرية', 'All age groups', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-06 13:33:34', '2024-06-09 07:20:38'),
(3, 8, 19, 21, 'جميع الفئات العمرية', 'All age groups', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-06 12:31:12', '2024-06-06 13:18:28'),
(4, 11, 15, 20, 'جميع الفئات العمرية', 'All age groups', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-06 13:33:34', '2024-06-09 07:20:38'),
(5, 11, 15, 20, 'الرجال', 'mens', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-06 13:33:34', '2024-06-09 07:20:38'),
(6, 14, 19, 21, 'جميع الفئات العمرية', 'All age groups', '2-year - 45 years', '2-سنة - 45 سنة', '4-6 Sessions (60 minutes per class)', '4-6 حصص (60 دقيقة لكل حصة)', 22, 1, '2024-06-09 14:36:03', '2024-06-09 14:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'title_ar', 'سلوك', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(2, 'title_en', 'Solok', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(3, 'logo', '/uploads/Settings/1717594529_7643.png', 'publicSettings', 1, NULL, '2024-06-05 12:35:30'),
(4, 'email', 'Solukcenter@gmail.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(5, 'phone', '(+966)55664213', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(6, 'address_c', 'الدور الأول، مبنى 250، قطعة 704، طريق 410، الرياض', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(7, 'desc', 'Solok', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(8, 'keywords', 'Solok', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(9, 'author', 'Solok', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(10, 'main_color', '#32ba77', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(35, 'twitter', 'https://x.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(36, 'linkedin', 'https://linkedin.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(37, 'facebook', 'https://www.facebook.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(38, 'instagram', 'https://www.instagram.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(39, 'tiktok', 'https://www.tiktok.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(41, 'snapchat', 'https://snapchat.com', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(42, 'ios_version', '1.0', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(43, 'android_version', '1', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(44, 'apple', 'https://apps.apple.com/us/app', 'publicSettings', 1, NULL, '2024-06-05 19:19:21'),
(45, 'android', 'https://play.google.com/store/apps', 'publicSettings', 1, NULL, '2024-06-05 19:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `SliderHome`
--

CREATE TABLE `SliderHome` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `SliderHome`
--

INSERT INTO `SliderHome` (`id`, `title_ar`, `title_en`, `file`, `link`, `status`, `created_at`, `updated_at`) VALUES
(14, 'هدفنا هو دعم الأفراد بالخدمات النفسية. أشترك في البرنامج التأهيلي معنا هدفنا هو دعم الأفراد بالخدمات النفسية', 'Our goal is to support individuals with psychological services. Participate in the rehabilitation program with us. Our goal is to support individuals with psychological services', '/uploads/SliderHome/1717939804_6413.png', NULL, 1, '2024-06-09 13:05:20', '2024-06-09 13:30:04'),
(15, 'هدفنا هو دعم الأفراد بالخدمات النفسية. أشترك في البرنامج التأهيلي معنا تواصل معانا', 'Our goal is to support individuals with psychological services. Participate in the rehabilitation program with us. Our goal is to support individuals with psychological services', '/uploads/SliderHome/1717939789_7683.png', NULL, 1, '2024-06-09 13:05:56', '2024-06-09 13:29:49'),
(16, 'هدفنا هو دعم الأفراد بالخدمات النفسية. أشترك في البرنامج التأهيلي معنا هدفنا هو دعم الأفراد بالخدمات النفسية', 'Our goal is to support individuals with psychological services. Participate in the rehabilitation program with us. Our goal is to support individuals with psychological services', '/uploads/SliderHome/1717939775_7809.png', NULL, 1, '2024-06-09 13:06:11', '2024-06-09 13:29:35'),
(17, 'هدفنا هو دعم الأفراد بالخدمات النفسية. أشترك في البرنامج التأهيلي معنا هدفنا هو دعم الأفراد بالخدمات النفسية', 'Our goal is to support individuals with psychological services. Participate in the rehabilitation program with us. Our goal is to support individuals with psychological services', '/uploads/SliderHome/1717939750_2976.png', NULL, 1, '2024-06-09 13:06:30', '2024-06-09 13:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `file`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'مرحبًا بك في مجتمع الرعاية الخاص بنا', 'Welcome to our caring community', 'نوضح كيفية تمكين التعاطف والدعم المتبادل لمقدمي الرعاية لفهم الاحتياجات العاطفية والجسدية.', 'We demonstrate how empathy and mutual support enable caregivers to understand emotional and physical needs.', NULL, NULL, 1, '2024-06-05 17:41:07', '2024-06-05 17:41:07'),
(5, 'مرحبًا بك في مجتمع الرعاية الخاص بنا', 'Welcome to our caring community', 'نوضح كيفية تمكين التعاطف والدعم المتبادل لمقدمي الرعاية لفهم الاحتياجات العاطفية والجسدية.', 'We demonstrate how empathy and mutual support enable caregivers to understand emotional and physical needs.', NULL, NULL, 1, '2024-06-05 17:41:07', '2024-06-05 17:41:07'),
(6, 'مرحبًا بك في مجتمع الرعاية الخاص بنا', 'Welcome to our caring community', 'نوضح كيفية تمكين التعاطف والدعم المتبادل لمقدمي الرعاية لفهم الاحتياجات العاطفية والجسدية.', 'We demonstrate how empathy and mutual support enable caregivers to understand emotional and physical needs.', NULL, NULL, 1, '2024-06-05 17:42:55', '2024-06-05 17:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `status`, `created_at`, `updated_at`) VALUES
(1, 'الشروط والأحكام لمركز سلوك للتأهيل والرعاية', 'Terms and conditions for Suluk Rehabilitation and Care Centre', '<p>يعد مركز سلوك للتأهيل والرعاية مؤسسة رائدة في تقديم خدمات الرعاية الصحية والتأهيلية، ملتزمين بتوفير بيئة آمنة وفعالة لمرضانا. تهدف هذه الوثيقة إلى توضيح الشروط والأحكام التي تحكم استخدام خدماتنا والموقع الإلكتروني الخاص بنا.<br />\r\nمن خلال الوصول إلى خدماتنا أو استخدامها، فإنك توافق على الالتزام بهذه الشروط والأحكام.<br />\r\n<strong>الشروط و الأحكام</strong></p>\r\n\r\n<ul>\r\n	<li>التعديلات على الشروط والأحكام</li>\r\n	<li>الالتزامات والمسؤوليات</li>\r\n	<li>السرية والخصوصية</li>\r\n</ul>\r\n\r\n<p>نشكرك على اختيار مركز سلوك للتأهيل والرعاية. نأمل أن تلبي خدماتنا توقعاتك ونؤكد التزامنا بتقديم أفضل مستويات الرعاية الصحية والتأهيلية.</p>', '<p>Suluk Rehabilitation and Care Center is a leading institution in providing health and rehabilitation care services, committed to providing a safe and effective environment for our patients. This document aims to explain the terms and conditions governing the use of our services and website.<br />\r\nBy accessing or using our Services, you agree to be bound by these Terms and Conditions.<br />\r\n<strong>Terms and Conditions</strong></p>\r\n\r\n<ul>\r\n	<li>Amendments to terms and conditions</li>\r\n	<li>Obligations and responsibilities</li>\r\n	<li>Confidentiality and privacy</li>\r\n</ul>\r\n\r\n<p>Thank you for choosing Suluk Center for Rehabilitation and Care. We hope that our services meet your expectations and we affirm our commitment to providing the best levels of health and rehabilitation care.</p>', 1, '2023-11-12 12:09:43', '2024-06-09 06:52:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SliderHome`
--
ALTER TABLE `SliderHome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `beneficiaries`
--
ALTER TABLE `beneficiaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `SliderHome`
--
ALTER TABLE `SliderHome`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
