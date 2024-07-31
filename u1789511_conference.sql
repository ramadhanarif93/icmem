-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 07:47 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1789511_conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baseroom`
--

CREATE TABLE `tbl_baseroom` (
  `baseroomId` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_baseroom`
--

INSERT INTO `tbl_baseroom` (`baseroomId`, `name`, `parent`, `created_at`, `subname`) VALUES
(5, 'SAMPLE 1', 0, '2021-05-18 06:38:10', ''),
(6, 'SAMPLE FOLDER !', 5, '2021-05-18 06:38:29', 'SAMPLE FOLDER 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baseroom_file`
--

CREATE TABLE `tbl_baseroom_file` (
  `baseroomfileid` int(255) NOT NULL,
  `baseroomId` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` text NOT NULL,
  `actor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_baseroom_file`
--

INSERT INTO `tbl_baseroom_file` (`baseroomfileid`, `baseroomId`, `name`, `created_at`, `file`, `actor`) VALUES
(4, 6, 'SAMPLE FILE', '2021-05-18 06:41:51', 'undangan_mudikku.pdf', 'SAMPLE ACTOR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exchibition`
--

CREATE TABLE `tbl_exchibition` (
  `idExchibition` int(8) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `embed` text DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `meetingTimeStart` time DEFAULT NULL,
  `meetingTimeEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_exchibition`
--

INSERT INTO `tbl_exchibition` (`idExchibition`, `title`, `description`, `embed`, `category`, `logo`, `meetingTimeStart`, `meetingTimeEnd`) VALUES
(7, 'test video 1', 'descripiton 100', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7kE24NQb3YY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '\r\n                                                                                Fun Workshop', 'test_video_11596278078-.png', NULL, NULL),
(8, 'test video 2kasdjgvkhasuvbl', 'description 2030101', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7kE24NQb3YY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Exhibition', 'test_video_2kasdjgvkhasuvbl1595862880-.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exhi`
--

CREATE TABLE `tbl_exhi` (
  `idExhi` int(128) NOT NULL,
  `logo` text DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `meetingTimeStart` time DEFAULT NULL,
  `meetingTimeEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_exhi`
--

INSERT INTO `tbl_exhi` (`idExhi`, `logo`, `title`, `description`, `instagram`, `youtube`, `meetingTimeStart`, `meetingTimeEnd`) VALUES
(4, 'agri.png', 'AGRIFARM', 'The Agriculture Industry, Greenhouse & Hydroponics Services for Hydroponics farm with Greenhouse system and management organization for agriculture company. ', 'https://www.instagram.com/agrifamindonesia/', 'http://www.agrifam.co.id/', NULL, NULL),
(5, 'suku.png', 'Sukku Collective', 'Sukku Collective creates innovation in jeans with the concept of patchwork in which various pieces of fabric are sewn to form patterns.', 'https://www.instagram.com/sukkucollective/?hl=en', 'https://sukkucollective.com/', NULL, NULL),
(6, 'tech.png', 'Tech Prom Lab', 'The Tech Prom Lab is a startup with the main objective to implement research from the lab to the community. ', 'https://www.instagram.com/techpromlab/', 'https://www.techpromlab.com/', NULL, NULL),
(7, 'umbara.png', 'UMBARA INDONESIA', 'UMBARA traveled and collected stories of ikat, our weavers, and our trips and told them to local and international audiences in the design and booklet. ', 'https://www.instagram.com/umbara_id/?hl=en', NULL, NULL, NULL),
(8, 'kopibon1.png', 'Kopi Bon', 'Bon Coffee is an unusual coffee shop, closeness to customers is fostered by us through Music, Books and also Coffee. ', 'https://www.instagram.com/kopi.bon/?hl=en', NULL, NULL, NULL),
(9, 'wasteup.png', 'Wasteup', 'Wasteup is a startup engaged in the field of environment.', 'https://www.instagram.com/waste.up/?hl=en', NULL, NULL, NULL),
(10, 'rahsampah.png', 'Rahsampah', 'Rahsampah is a waste management platform that process the remaining organic production in the production of Rahsa Nusantara herbal medicine.', NULL, 'https://www.f6s.com/rahsampah', NULL, NULL),
(11, 'eijfes.png', 'Eijfes', 'EIJFES is a fine craft product designed by exploring wood with a concept to transform the strong perception of wood into elegant geometric and symmetric shapes. \r\n', 'https://www.instagram.com/eijfes/?hl=en', '.', NULL, NULL),
(12, 'bellsociety.png', 'Bell Society', 'By using the power of bacteria, we recyle organic waste into valuable goods', '.', 'http://bellsociety.id/', NULL, NULL),
(13, '', 'BIOPS Agrotekno', 'PT BIOPS Agrotekno Indonesia provides a precision farming system which is able to irrigate and fertilize your farm precisely and automatically.', '.', 'https://www.biopsagrotekno.co.id/en/', NULL, NULL),
(14, 'idealab.png', 'Idealab', '3D printing and thermoforming technology enable us to creatively help diffable person feels prouductive', '', 'https://idealab.id/', '00:00:00', '00:00:00'),
(15, 'khairaenergy.png', 'Khaira Energy', 'Khaira Energy provide Energy Storage System combined with Solar Panel by changing unused rooftop into affordable and efficient renewable energy resource', '', 'http://www.khairaenergy.com/', '00:00:00', '00:00:00'),
(16, 'locarvest.png', 'Locarvest', 'Locarvest is a provider of fresh agricultural products that work directly with farmers and small & medium enterprises.', '', 'https://locarvest.id/', '00:00:00', '00:00:00'),
(17, 'plastikinia.png', 'Plastikinia', 'Application to reduce plastic waste, by giving rewards in the form of loyalty programs to volunteers who begin to reduce the use of plastic.', '', 'http://plastikinia.com', '00:00:00', '00:00:00'),
(18, 'plepah.png', 'Plepah', 'Pl?pah provides food containers made from Areca Palm leaf sheath which naturally degrades in soil within 60 days', '', 'https://www.plepah.com/', '00:00:00', '00:00:00'),
(19, 'wegrow.png', 'WeGrow', 'WeGrow.life is a forum created to help city dwellers achieve sustainable urban lifestyles, so that healthy living is easier to implement from home.', 'https://www.instagram.com/wegrow.life/?hl=en', 'http://wegrow.id/', '00:00:00', '00:00:00'),
(20, 'wisewaste.png', 'Wise Waste', 'Wise Waste is make efficient budget on waste management by increasing waste recycling rate and fair payment method.', 'https://www.instagram.com/wisewaste/?hl=pa', '', '00:00:00', '00:00:00'),
(21, 'akaran.png', 'Akaran', 'Kebun Akaran produce organic vegetable that are affordable, seasonal, and as fresh and local as possible.', '', 'https://www.instagram.com/kebun.akaran/?hl=en', '00:00:00', '00:00:00'),
(22, 'jamban.png', 'Jamban', 'Jamban provide safe, healthy, public toilets and are supported by technology based on mobile applications that are very easy to use.', 'https://www.instagram.com/jambanindonesia/', 'www.jamban.id', '00:00:00', '00:00:00'),
(23, 'mataharikecil.png', 'Matahari Kecil', 'Mataharikecil Community is a place for young people to share, collaborate and contribute in the field of education.', 'https://www.instagram.com/mataharikecil_id/?hl=en', '', '00:00:00', '00:00:00'),
(24, 'waster4change.png', 'Waste4change', 'Waste4Change is a company with the mission of providing waste management services that are environmentally friendly and responsible for waste-free Indonesia', 'https://waste4change.com/official/', '', '00:00:00', '00:00:00'),
(25, 'bionoils.png', 'Bio-N Oils', 'Inspired by Indonesia\'s rich natural resources, Bio-N Oils is committed to provide high quality beauty and health products that are beneficial to society.', 'https://www.bion-oils.com/', 'https://www.instagram.com/bionoils/?hl=en', '00:00:00', '00:00:00'),
(26, 'herbsays.png', 'Herbsays', 'Herbsays Kitchen is a company that promote healthy food from original herbs and spices from Indonesia.', '', 'https://www.instagram.com/herbsays.id/', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `idInfo` int(128) NOT NULL,
  `info` varchar(128) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`idInfo`, `info`, `link`) VALUES
(4, 'EXHIBITION_AND_FUN_WORKSHOP.jpg', 'https://www.youtube.com/watch?v=p5kc8hJ3GcA&list=RDp5kc8hJ3GcA&start_radio=1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKategori` int(128) NOT NULL,
  `kategori` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting`
--

CREATE TABLE `tbl_meeting` (
  `idMeeting` int(128) NOT NULL,
  `topic` varchar(128) DEFAULT NULL,
  `meetingTimeStart` time DEFAULT NULL,
  `meetingID` varchar(128) DEFAULT NULL,
  `meetingPWD` varchar(128) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meetingDate` date DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `foto` varchar(128) DEFAULT 'logo.png',
  `category` varchar(128) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `meetingTimeEnd` time DEFAULT NULL,
  `participant` int(128) DEFAULT 0,
  `meet` text DEFAULT NULL,
  `meetStatus` varchar(128) DEFAULT '0',
  `actualTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`idMeeting`, `topic`, `meetingTimeStart`, `meetingID`, `meetingPWD`, `description`, `meetingDate`, `name`, `foto`, `category`, `link`, `meetingTimeEnd`, `participant`, `meet`, `meetStatus`, `actualTime`) VALUES
(40, 'Sample Room General', '05:16:00', 'q34read', '42342342', 'description', '2021-05-09', 'sample 1', 'logo.png', '1', 'awsd', '05:17:00', 0, 'wdawda', '0', '00:00:00'),
(41, 'Sample Room ', '08:16:00', 'q34read', '42342342', 'description', '2021-05-09', 'test File', 'logo.png', '2', 'awsd', '07:16:00', 0, 'asda', '0', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_papper`
--

CREATE TABLE `tbl_papper` (
  `idPapper` int(128) NOT NULL,
  `judulPapper` varchar(128) DEFAULT NULL,
  `presenter` varchar(128) DEFAULT NULL,
  `idParallel` int(128) DEFAULT NULL,
  `sesi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_papper`
--

INSERT INTO `tbl_papper` (`idPapper`, `judulPapper`, `presenter`, `idParallel`, `sesi`) VALUES
(1, 'Building a Practice-Oriented Model for Strategic Public Policy Making Process for the National Social Security System in a Compl', 'Iene Muliati', 0, 'IGC-A4'),
(2, 'papper 1', 'presenter 11', 1, '1'),
(3, 'papper 2', 'arif', 1, 'IGC-A1'),
(4, 'judulPapper', 'presenter', 0, 'sesi'),
(5, 'Boosting financial inclusion through social assistance reform: Evidence-based approach in selecting payment system', 'Hilman Palaon', 0, 'IGC-A1'),
(6, 'The Impact of Founder?s Behaviour Traits on SMEs Financial Performance', 'Nakita Gusman', 0, 'IGC-B2'),
(7, 'The Impact of Governmental Announcement and Decisions During COVID-19 Pandemic on Indonesian Stock Price', 'Irshad Adriatama', 0, 'IGC-A2'),
(8, 'Overconfidence Bias of Managers and Debt Decisions in Emerging Market: An Empirical Study', 'Yanri Nur Jannah', 0, 'IGC-C3'),
(9, 'Household finances and well-being in an emerging country: Evidence from Indonesia', 'Aisyah Amatul Ghina', 0, 'IGC-B2'),
(10, 'Observation on Behavioral Finance in Indonesia Stock Exchange Stocks Prices During COVID-19 Pandemic in January ? March 2020', 'Eddy Prabowo', 0, 'IGC-B2'),
(11, 'Accommodating Approval Bureaucracy In Oil & Gas State-Owned Enterprise During Pandemic (Case Study: A holding company of Indones', 'Hanto Yananto', 0, 'IGC-A4'),
(13, 'Digital Capability Maturity Model for Outsourcing', 'Ervia Tissyaraksita Devi', 0, 'IGC-A6'),
(14, 'Agent-based model of circular economy concepts implementation in agri-food supply cahin : case of organic fertilizer producer', 'Ruth Nattassha', 0, 'IGC-B7'),
(15, 'How E-commerce becomes a platform of Value Co-destruction: The Relation between Psychographic and Value Co-destruction', 'Farrah Aisya Miftah', 0, 'IGC-A5'),
(16, 'Conceptual Modelling for Net Interest Margin Optiomisation Using System Dynamics', 'Maria Ulfa', 0, 'IGC-A1'),
(17, 'In between of young generations and stock investment', 'Bagus Aditya Nugraha', 0, 'IGC-A2'),
(18, 'Finding workable eradiction measures for illegal gold-mining', 'Ongku P Hasibuan', 0, 'IGC-A3'),
(19, 'Does Combination of Financial Capability, Market Adaptability and Technology Orientation Influence New Product Development in Di', 'Retna Ayu Mustikarini Kencanasari', 0, 'IGC-A8'),
(20, 'Building a Comprehensive Framework for Aligning Business and Information Technology through IT Balanced Scorecard', 'Hardy Santosa', 0, 'IGC-C5'),
(21, 'Vehicle Routing Problem for Perishable Products', 'Rahmi Rahmania', 0, 'IGC-A6'),
(22, 'How Venture Capitals Determines Factors to Funds Startups in Indonesia', 'Abrori NoorEsa', 0, 'IGC-A2'),
(23, 'A Review of the Challenges of Internet of Things Implementation in Organization', 'Eka Yunita Dian Pratiwi', 0, 'IGC-C2'),
(24, 'Assessing Supplier-Customer Co-Creation in Sheet-Steel Company Using DART Model', 'Adinda Farhana', 0, 'IGC-B5'),
(25, 'An Exploratory Case Study: How the Firm Governance Affects the Collaboration Process in Professional Service Firm', 'Budiarso', 0, 'IGC-A4'),
(26, 'Reconceptualizing Entrepreneurship Education \'For\' Entrepreneurship as a Value Orchestration Platform', 'Nazmi Fathnur Ahmad', 0, 'IGC-A3'),
(27, 'Are Islamic Equity Funds fulfill its compliance?', 'Riza Zahrotun Nisa', 0, 'IGC-C3'),
(28, 'Developing Green Business: The Behavioral Intention among Women Entrepreneur in Indonesia', 'Asyiffa Fitri Awallia', 0, 'IGC-B9'),
(29, 'Effect of Payday-Like Platform in Peer-to-Peer Lending\'s Non-Performance Loan (NPL): Evidence in Indonesia', 'Yolli Eka Putri', 0, 'IGC-A1'),
(30, 'Islamic Bank Business Model on Bank Stability and Performance', 'Fakhrana Nadhilah', 0, 'IGC-C4'),
(31, 'Developing Value Co-Creation Platform in Railway Service Indonesia: A Study From Passenger Perspective', 'Retno Widiana', 0, 'IGC-B5'),
(32, 'Developing independent campus through smart learning organization in digital era - a preliminary study', 'Dewi Wahyu Handayani', 0, 'IGC-A3'),
(33, 'Using Framework of Commitment - Trust Theory in Pre-Consumption Stage; Preliminary Study of Collaborative Online Accomodation', 'Anna Riana Putriya', 0, 'IGC-B4'),
(34, 'Addressing The Issue of Turnover Intention In Start-Up: COPSOQ Instrument Perspective', 'Sofi Hanifah Hermawan', 0, 'IGC-C2'),
(35, 'Sovereign Credit Ratings and Policy Implications: Case of Indonesia', 'Firman Darwis', 0, 'IGC-B1'),
(36, 'Gameful Design: A Criteria of Good Gamification', 'Hendarsyah Aditya Saptari', 0, 'IGC-A3'),
(37, 'The Roles of Societal Learning to Improve Public Participation in Municipal Waste Management in Developing Countries: Literature', 'Sunarti', 0, 'IGC-B3'),
(38, 'A Preliminary research of the understansing of \'PSBB\' word networking and sentiment analysis', 'Yulianti', 0, 'IGC-C3'),
(39, 'The Influence of Relational Capital on the Intellectual Capital and Market to Book Ratio in Jordan', 'Kamelia Moh\'d Khier Momami', 0, 'IGC-C4'),
(40, 'Government-Owned Banks Behaviour During Election in Different President Regime: Politically Connected Boards Perspective', 'Renno Prawira', 0, 'IGC-B1'),
(41, 'Adapting soft-system methodology to accommodate community outreach programe into university strategic plan: an experience of an ', 'Muhammad Setiawan Kusmulyono', 0, 'IGC-A8'),
(42, 'What Did The Government Do To Help SME?', 'Ronal Ferdilan', 0, 'IGC-A8'),
(43, 'Entrepreneurial Islamic Leadership in Social Enterprise: A Study Case at Islamic Boarding School Business Unit in West Java', 'Adrian Ariatin', 0, 'IGC-A8'),
(44, 'A Literature Review of Turnover Intention in Relationship with Work Engagement, Organization Justice, and Job Autonomy', 'Yenny Yorisca', 0, 'IGC-C2'),
(45, 'Blockchain technology and the business models: a systematic review', 'Ambara Purusottama', 0, 'IGC-B7'),
(46, 'Improving Marketplace Business Through The Value Co-Creation Process: A Study Cross-Border Marketplace in Indonesia', 'Andi Sigit Trianto', 0, 'IGC-B5'),
(47, 'Scenario Planning for 5G Deployment in Indonesia', 'Sahat Hutajulu', 0, 'IGC-B8'),
(49, 'Assessing the Feasibility of Urban Mining: A System Dynamics Study of Electronic Waste Management in Indonesia', 'Alma Kenanga Attazahri', 0, 'IGC-B4'),
(50, 'The emergence of multicultural characteristics in virtual team', 'Daniel Karim', 0, 'IGC-C1'),
(51, 'Anticipating post-disaster chaos in housing reconstruction process through designing service blueprint', 'Crista Fialdila Suryanto', 0, 'IGC-A5'),
(52, 'Factors Influensing Knowledge Management Implementation in Creative Industries', 'Alexandra Sinta', 0, 'IGC-B3'),
(53, 'Constructing Demand Forecasting Models for Peer-to-peer Accommodation Businesses using Machine Learning Techniques', 'Mochammad Agus Afrianto', 0, 'IGC-A5'),
(54, 'Towards of open-innovation in the urban circular economy: the case study of Kang Pisman initiative in Bandung city', 'Dania Sitadewi', 0, 'IGC-B6'),
(55, 'Evaluation of Warehousing Productivity Performance Indicators by the FAHP Method', 'Nur Hazwani Karim', 0, 'IGC-B6'),
(56, 'An Analysis on Financial System Vulnerability Through National/Regional Financial Account Balance Sheets', 'Darjana', 0, 'IGC-B1'),
(57, 'Digital Transformation on SMEs: Taking Advantage of Digital Business Ecosystem', 'Aisha Salsabila Tisyani', 0, 'IGC-A9'),
(58, 'Can Small Things Make Big Changes? An Exploratory Study of Innovation Path in Internet-of-Things (IoT)-based Businesses: Case St', 'Tribowo Rachmat Fauzan', 0, 'IGC-B8'),
(59, 'Exploring IT Competence, Innovation Capacity and Organizational Agility Relationship', 'Hakiim Rachman Noor', 0, 'IGC-B9'),
(60, 'A Proposed Model of Value Co-Creating through Multi-Stakeholder Collaboration in Domestic Production Development', 'Anggraeni Permatasari', 0, 'IGC-B8'),
(61, 'The Making of Creative City: In Search of a Definition', 'Salfitrie R. M.', 0, 'IGC-A7'),
(62, 'The Barriers of Responsible Agriculture Supply Chain: The Relationship between Organization Capabilities, External Actor involve', 'Irayanti Adriant', 0, 'IGC-B7'),
(63, 'Developing ecosystem based human capital department roles', 'Veronica Afridita Khristiningrum', 0, 'IGC-C1'),
(64, 'Developing Model of Integrative Policy for Truck Sharing Economy Adoption in Trucks Company through Modeling and Simulation', 'Batara Parada Siahaan', 0, 'IGC-B7'),
(65, 'Human capital digital capability model for transforming technology-based holding company', 'Tubagus Arief Fahmi', 0, 'IGC-B3'),
(66, 'MULTI-STAKEHOLDER INNOVATION IN TOURISM INDUSTRY: A LITERATURE REVIEW', 'Roma Nova Cahjati Poetry', 0, 'IGC-A7'),
(67, 'Do we really need to adopt them? Understanding SMEs? perceptions of implementing emerging technologies in the fashion manufactur', 'Arianne Muthia Zahra', 0, 'IGC-B8'),
(68, 'An Analytical Service Ecosystem of Technology Based Business Incubation Research: Case of Bandung Techno Park', 'Eka Yuliana', 0, 'IGC-B4'),
(69, 'What Makes Commercialization of University Research Products Challenging?: Exploration of the Researchers? Perspective', 'Dyah Putri Puspitasari', 0, 'IGC-A9'),
(70, 'Bridging Individual Adaptive Performance and Learning Process (A Systematic Literature Review)', 'Widya Nandini', 0, 'IGC-C1'),
(71, 'Redefining Sustainable Innovation Transition Framework: How it differs from conventional innovation?', 'Dita Novizayanti', 0, 'IGC-B9'),
(72, 'Does Spin-Off Affect The Efficiency and Stability of Islamic Banking?', 'Rifka Indi', 0, 'IGC-C4'),
(73, 'E-Commerce Performance, Digital Marketing Capability and Supply Chain Capability within E-Commerce Platform: Comparison between ', 'Anna Amalyah Agus', 0, 'IGC-B6'),
(74, 'Empirical Study Interest Rate Pass Through BI 7-Day Repo Rate to Bank Lending Rate', 'Shofia', 0, 'IGC-C4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parallel`
--

CREATE TABLE `tbl_parallel` (
  `idParallel` int(128) NOT NULL,
  `topic` varchar(128) DEFAULT NULL,
  `meetingTimeStart` time DEFAULT NULL,
  `meetingID` varchar(128) DEFAULT NULL,
  `meetingPWD` varchar(128) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meetingDate` date DEFAULT NULL,
  `speakername` varchar(128) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `meetingTimeEnd` time DEFAULT NULL,
  `participant` int(128) DEFAULT 0,
  `chairname` varchar(128) DEFAULT NULL,
  `linkRec` text DEFAULT NULL,
  `meet` text DEFAULT NULL,
  `meetStatus` varchar(128) DEFAULT '0',
  `kodeSession` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_parallel`
--

INSERT INTO `tbl_parallel` (`idParallel`, `topic`, `meetingTimeStart`, `meetingID`, `meetingPWD`, `description`, `meetingDate`, `speakername`, `foto`, `link`, `meetingTimeEnd`, `participant`, `chairname`, `linkRec`, `meet`, `meetStatus`, `kodeSession`) VALUES
(1, 'test parallel', '12:00:37', '92818694813', '924627', 'Dr. Yusliza Mohd Yusoff and Mr. Fadzil Dhiya Hillman', '2020-08-03', 'OBHRM-1', 'ICMEM.PNG', 'https://zoom.us/j/92818694813?pwd=YW1ORDY3b1pXU05XRnBGV0svVnNRQT09', '20:00:00', 13, 'Dr. Yusliza Mohd Yusoff and Mr. Fadzil Dhiya Hillman', '0', 'https://meet.google.com/bep-jymy-wwa', '0', 'ICMEM-A1'),
(2, NULL, '05:00:00', '94902632014', '129351', 'Dr. Zaliha Zainuddin', '2021-02-02', 'BSME-1', '1612835534-.png', 'https://zoom.us/j/94902632014?pwd=S1lwL3ZWb3kzdFNEc2pJdEF2SjkyZz09', '20:00:00', 2, 'Dr. Zaliha Zainuddin', '0', 'https://meet.google.com/dbb-fqpg-jid', '0', 'ICMEM-A2'),
(3, 'test parallel', '16:00:00', '92273922810', '850227', 'Dr. Zaleha Mohamad', '2020-08-02', 'BSME-2', 'ICMEM.PNG', 'https://zoom.us/j/92273922810?pwd=UTBKbnk3NFhLZEVVYVdmRXZ4RE4vUT09', '20:00:00', 2, 'Dr. Zaleha Mohamad', '0', 'https://meet.google.com/yzz-rgsd-pqp', '0', 'ICMEM-A3'),
(4, 'test parallel', '16:00:00', '95500267873', '622206', 'Ms. Aisha Khan', '2020-08-02', 'BSME-3', 'ICMEM.PNG', 'https://zoom.us/j/95500267873?pwd=eG04MkpaREQzM1paamNVVVVLYkZPQT09', '20:00:00', 2, 'Ms. Aisha Khan', '0', 'https://meet.google.com/jkg-wdfa-cjq', '0', 'ICMEM-A4'),
(5, 'test parallel', '16:00:00', '92937544002', '685443', 'Mr. Khalid Niazi', '2020-08-02', 'OFAE-1', 'ICMEM.PNG', 'https://zoom.us/j/92937544002?pwd=cXdYTkJCN1hvQmdkdGhYMDhIU3BPZz09', '20:00:00', 4, 'Mr. Khalid Niazi', '0', 'https://meet.google.com/bzb-pisr-jqz', '0', 'ICMEM-A5'),
(6, 'test parallel', '16:00:00', '93571112406', '302200', 'Ms. Argee Gallardo', '2020-08-02', 'OFAE-2', 'ICMEM.PNG', 'https://zoom.us/j/93571112406?pwd=OVlHTkRlLzJaQVR2MEJMdVUrZDFjQT09', '20:00:00', 2, 'Ms. Argee Gallardo', '0', 'https://meet.google.com/jqd-cmpz-oui', '0', 'ICMEM-A6'),
(7, 'test parallel', '16:00:00', '97202047076', '907776', 'Ms. Nur Farah Zafira Zaidi', '2020-08-02', 'OFAE-3', 'ICMEM.PNG', 'https://zoom.us/j/97202047076?pwd=QzMzbkVFME5Yd0kxSENCV2JySjhEZz09', '20:00:00', 2, 'Ms. Nur Farah Zafira Zaidi', '0', 'https://meet.google.com/pxa-sxch-anb', '0', 'ICMEM-A7'),
(8, 'test parallel', '16:00:00', '95710943415', '558717', 'Ms. Jacia Afrin Bristi', '2020-08-02', 'OBHRM-2', 'ICMEM.PNG', 'https://zoom.us/j/95710943415?pwd=M3VCSEU2SmtBZTRuTWhTc01rd3JRZz09', '20:00:00', 2, 'Ms. Jacia Afrin Bristi', '0', 'https://meet.google.com/uau-fvhv-gnd', '0', 'ICMEM-B1'),
(9, 'test parallel', '16:00:00', '94586688377', '021190', 'De. Angelina Nhat Hanh Le', '2020-08-02', 'BSME-4', 'ICMEM.PNG', 'https://zoom.us/j/94586688377?pwd=VThnbnlDWDFXWVlVcUd4MUp6TEFXQT09', '20:00:00', 2, 'De. Angelina Nhat Hanh Le', '0', 'https://meet.google.com/fqb-pdao-mki', '0', 'ICMEM-B2'),
(10, 'test parallel', '16:00:00', '92897614098', '719416', 'Ms. Juhari Noor Faezah', '2020-08-02', 'BSME-5', 'ICMEM.PNG', 'https://zoom.us/j/92897614098?pwd=endBM2h3RjhNSTQramgwNFJudUUzZz09', '20:00:00', 2, 'Ms. Juhari Noor Faezah', '0', 'https://meet.google.com/xxu-cynh-dqi', '0', 'ICMEM-B3'),
(11, 'test parallel', '16:00:00', '95962636483', '778577', 'Dr. Rohana Ahmad', '2020-08-02', 'BSME-6', 'ICMEM.PNG', 'https://zoom.us/j/95962636483?pwd=b1JXZkFWRW9meG5vRE1LVGlvZHp1dz09', '20:00:00', 3, 'Dr. Rohana Ahmad', '0', 'https://meet.google.com/kdm-pyjs-eka', '0', 'ICMEM-B4'),
(12, 'test parallel', '16:00:00', '97728893692', '089210', 'Dr. Noel Santander', '2020-08-02', 'CASE-1', 'ICMEM.PNG', 'https://zoom.us/j/97728893692?pwd=REkxd05KbGl4V252TEFvK2ZoVUlnQT09', '20:00:00', 4, 'Dr. Noel Santander', '0', 'https://meet.google.com/ewy-myec-ohy', '0', 'ICMEM-B5'),
(13, 'test parallel', '16:00:00', '99087524936', '966417', 'Ms. Siti Nurul Husna Omar', '2020-08-02', 'CASE-2', 'ICMEM.PNG', 'https://zoom.us/j/99087524936?pwd=cDZUbjRiZnBLZEptK25KT2diSzB2dz09', '20:00:00', 2, 'Ms. Siti Nurul Husna Omar', '0', 'https://meet.google.com/edx-vbyx-csv', '0', 'ICMEM-B6'),
(14, 'test parallel', '16:00:00', '95900383456', '617565', 'Ms. Naema Omar', '2020-08-02', 'CASE-3', 'ICMEM.PNG', 'https://zoom.us/j/95900383456?pwd=UEpqd2VBSkwvaEN6dExhWEJ4OEhyUT09', '20:00:00', 2, 'Ms. Naema Omar', '0', 'https://meet.google.com/gtw-hfqn-iqy', '0', 'ICMEM-B7'),
(15, 'test parallel', '16:00:00', '93381578941', '605529', 'Ms. Noor Azlina Yusoff', '2020-08-02', 'CASE-4', 'ICMEM.PNG', 'https://zoom.us/j/93381578941?pwd=RDZtQXJoaVZMWGtSUG16TzFWVzFIQT09', '20:00:00', 2, 'Ms. Noor Azlina Yusoff', '0', 'https://meet.google.com/tzw-kzbx-uvc', '0', 'ICMEM-B8'),
(16, 'test parallel', '16:00:00', '94633959485', '949309', 'Mr. Olawole Fawehinmi', '2020-08-02', 'OBHRM-3', 'ICMEM.PNG', 'https://zoom.us/j/94633959485?pwd=UFE3Y0pLT2xaT2hZVDh5SmxsenpEUT09', '20:00:00', 6, 'Mr. Olawole Fawehinmi', '0', 'https://meet.google.com/cmw-oodp-rqn', '0', 'ICMEM-C1'),
(17, 'test parallel', '16:00:00', '93035464242', '904849', 'Ms. Jessica Lhay Asana', '2020-08-02', 'BSME-7', 'ICMEM.PNG', 'https://zoom.us/j/93035464242?pwd=S3d5MFBDSW91cWFxR1pXMFA2RTY2dz09', '20:00:00', 4, 'Ms. Jessica Lhay Asana', '0', 'https://meet.google.com/gpn-yviv-xos', '0', 'ICMEM-C2'),
(18, 'test parallel', '16:00:00', '96519732549', '002304', 'Ms. Najahul Kamilah Aminy Sukri', '2020-08-02', 'BSME-8', 'ICMEM.PNG', 'https://zoom.us/j/96519732549?pwd=UmZBcFRibFlNbVBNMEhGYTdXNy80UT09', '20:00:00', 2, 'Ms. Najahul Kamilah Aminy Sukri', '0', 'https://meet.google.com/nia-xibs-gdt', '0', 'ICMEM-C3'),
(19, 'test parallel', '16:00:00', '97302924078', '916999', 'Dr. Divina Edralin', '2020-08-02', 'OFAE-4', 'ICMEM.PNG', 'https://zoom.us/j/97302924078?pwd=MnFJWHltQVM5MWg4YkVleFBTUFMxUT09', '20:00:00', 2, 'Dr. Divina Edralin', '0', 'https://meet.google.com/ywh-omhv-kox', '0', 'ICMEM-C4'),
(20, 'test parallel', '16:00:00', '99247527480', '902559', 'Mr. Jeffrey Aram', '2020-08-02', 'OFAE-5', 'ICMEM.PNG', 'https://zoom.us/j/99247527480?pwd=NEhZMnBZcnpSMTNUMmhMajJBM2VzQT09', '20:00:00', 2, 'Mr. Jeffrey Aram', '0', 'https://meet.google.com/cvc-amvu-tbe', '0', 'ICMEM-C5'),
(21, 'test parallel', '16:00:00', '93884364914', '768725', 'Ms. Noor Azlina Yusoff', '2020-08-02', 'OBHRM-4', 'ICMEM.PNG', 'https://zoom.us/j/93884364914?pwd=QXRrOWRESTJPaFBsa2R3dG9ZYXcvUT09', '20:00:00', 2, 'Ms. Noor Azlina Yusoff', '0', 'https://meet.google.com/hnn-ynps-wox', '0', 'ICMEM-D1'),
(22, 'test parallel', '16:00:00', '97636397226', '683513', 'Mr. Muhammad Imran Tanveer', '2020-08-02', 'CASE-7', 'ICMEM.PNG', 'https://zoom.us/j/97636397226?pwd=SnVSM0VjN01CRzR5cmh4NkJ2cU9FUT09', '20:00:00', 2, 'Mr. Muhammad Imran Tanveer', '0', 'https://meet.google.com/ftv-xziw-jkk', '0', 'ICMEM-D10'),
(23, 'test parallel', '16:00:00', '99229872459', '660245', 'Mr. Muhammad Umar', '2020-08-02', 'OBHRM-5', 'ICMEM.PNG', 'https://zoom.us/j/99229872459?pwd=L09ON0tOa1k5OHBEMDFqU2I3V3Z3Zz09', '20:00:00', 2, 'Mr. Muhammad Umar', '0', 'https://meet.google.com/qgo-scya-zpe', '0', 'ICMEM-D2'),
(24, 'IGC Parallel Sessions (A1 - A9)', '16:00:00', '91675888395', '690849', 'Ms. Nur Farah Zafira Zaidi', '2020-08-02', 'BSME-9', 'ICMEM.PNG', 'https://zoom.us/j/91675888395?pwd=N3RuanBaOFg2TTJzbklMQ252SlFRZz09', '20:00:00', 2, 'Ms. Nur Farah Zafira Zaidi', '0', 'https://meet.google.com/jiy-abih-baq', '0', 'ICMEM-D3'),
(25, 'IGC Parallel Sessions (B1 - B9)', '16:00:00', '97016455179', '788834', 'Ms. Argee Gallardo', '2020-08-02', 'BSME-10', 'ICMEM.PNG', 'https://zoom.us/j/97016455179?pwd=WjM3V2xBY0U3dGduYXBOVFNVeEF1QT09', '20:00:00', 2, 'Ms. Argee Gallardo', '0', 'https://meet.google.com/srv-vqig-yok', '0', 'ICMEM-D4'),
(26, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94513035103', '206398', 'Dr. Divina Edralin', '2020-08-02', 'OFAE-6', 'ICMEM.PNG', 'https://zoom.us/j/94513035103?pwd=cjFQUHl1bEZmRCtHVDNmNnJPaXRIQT09', '20:00:00', 2, 'Dr. Divina Edralin', '0', 'https://meet.google.com/ent-xrsp-ryn', '0', 'ICMEM-D5'),
(27, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '93197337893', '072642', 'Ms. Najahul Kamilah Aminy Sukri', '2020-08-02', 'OFAE-7', 'ICMEM.PNG', 'https://zoom.us/j/93197337893?pwd=NlhrYW9vYm5oamc3ekw3djhjM2ZBQT09', '20:00:00', 2, 'Ms. Najahul Kamilah Aminy Sukri', '0', 'https://meet.google.com/ahc-ctwb-hud', '0', 'ICMEM-D6'),
(28, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '92501412200', '510638', 'Mr. Jeffrey Aram', '2020-08-02', 'OFAE-8', 'ICMEM.PNG', 'https://zoom.us/j/92501412200?pwd=Qm1HK1IvZHFDbGF5RUVBRTFOeUg2dz09', '20:00:00', 2, 'Mr. Jeffrey Aram', '0', 'https://meet.google.com/ern-ahpt-mye', '0', 'ICMEM-D7'),
(29, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94402351639', '506995', 'Mr. Olawole Fawehinmi', '2020-08-02', 'CASE-5', 'ICMEM.PNG', 'https://zoom.us/j/94402351639?pwd=QVpiNFFjZ29EcXlOVkdGeEYvUlNFZz09', '20:00:00', 2, 'Mr. Olawole Fawehinmi', '0', 'https://meet.google.com/efy-fufd-asq', '0', 'ICMEM-D8'),
(30, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '97038691671', '566961', 'Ms. Jessica Lhay Asana', '2020-08-02', 'CASE-6', 'ICMEM.PNG', 'https://zoom.us/j/97038691671?pwd=QmI3SzlTME9ydmRLalc5SGFVL0Ntdz09', '20:00:00', 2, 'Ms. Jessica Lhay Asana', '0', 'https://meet.google.com/bim-ypth-kcr', '0', 'ICMEM-D9'),
(31, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '91052196661', '492805', 'Oktofa Yudha Sudrajad, Ph.D', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/91052196661?pwd=dkx1VXJIajExdWZwYTRlNGNhcmx2Zz09', '20:00:00', 32, 'Oktofa Yudha Sudrajad, Ph.D', '0', 'https://meet.google.com/wjr-ykax-aje', '0', 'IGC-A1'),
(32, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94368961651', '179921', 'Ahmad Danu Prasetyo, Ph.D', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/94368961651?pwd=V2UycGMrWXVGdXhvSU9ZOXB2Uy9Udz09', '20:00:00', 6, 'Ahmad Danu Prasetyo, Ph.D', '0', 'https://meet.google.com/pmp-wuxi-gta', '0', 'IGC-A2'),
(33, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94540689426', '434667', 'Akbar Adhi Utama, Ph.D', '2020-08-02', 'PKM', 'IGC.PNG', 'https://zoom.us/j/94540689426?pwd=V2c0VFpIS1Z0ckNNeXVJaHU1a0Q5dz09', '20:00:00', 3, 'Akbar Adhi Utama, Ph.D', '0', 'https://meet.google.com/zji-uzja-mvz', '0', 'IGC-A3'),
(34, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '93299182772', '154315', 'Santi Novani, PhD', '2020-08-02', 'DMSN', 'IGC.PNG', 'https://zoom.us/j/93299182772?pwd=dkM0bE9ySTNublp5aDFkQUZQZ0pQUT09', '20:00:00', 3, 'Santi Novani, PhD', '0', 'https://meet.google.com/tbb-rgqg-iwy', '0', 'IGC-A4'),
(35, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '92125456375', '479526', 'Dr. Henndy Ginting', '2020-08-02', 'DMSN', 'IGC.PNG', 'https://zoom.us/j/92125456375?pwd=ek0rVFpzeS84dmdibDk3eGhCWUtYQT09', '20:00:00', 9, 'Dr. Henndy Ginting', '0', 'https://meet.google.com/qaw-hiyf-ths', '0', 'IGC-A5'),
(36, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '93225975164', '244448', 'Dr.rer.pol Eko Agus Prasetio', '2020-08-02', 'OPM', 'IGC.PNG', 'https://zoom.us/j/93225975164?pwd=eURWTGlsdGMyb3FDZzlsRzNVTUpPdz09', '20:00:00', 3, 'Dr.rer.pol Eko Agus Prasetio', '0', 'https://meet.google.com/jof-kcum-xpw', '0', 'IGC-A6'),
(37, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '92416581177', '665840', 'Meditya Wasesa, Ph.D', '2020-08-02', 'OPM', 'IGC.PNG', 'https://zoom.us/j/92416581177?pwd=UDlCTVExZVJXYUFXM2d5ajBRbmxWZz09', '20:00:00', 3, 'Meditya Wasesa, Ph.D', '0', 'https://meet.google.com/oqh-hvuy-add', '0', 'IGC-A7'),
(38, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '95139255464', '560863', 'Manahan Siallagan, Ph.D', '2020-08-02', 'ETM', 'IGC.PNG', 'https://zoom.us/j/95139255464?pwd=RTkybkt3c24vTlFqTnlMcHpLL0h0QT09', '20:00:00', 12, 'Manahan Siallagan, Ph.D', '0', 'https://meet.google.com/rpn-ejzf-euy', '0', 'IGC-A8'),
(39, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '99565913219', '262067', 'Nila Armelia Windasari, Ph.D', '2020-08-02', 'PKM', 'IGC.PNG', 'https://zoom.us/j/99565913219?pwd=RFZQWEdBVUh2MUVjaVZXdHgvb1FKdz09', '20:00:00', 5, 'Nila Armelia Windasari, Ph.D', '0', 'https://meet.google.com/kdz-izua-mtm', '0', 'IGC-A9'),
(40, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94862974110', '930852', 'Yunieta Anny Nainggolan, Ph.D', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/94862974110?pwd=RHRhQTlTU0NSTjRTcGE0UzU1UldoUT09', '20:00:00', 4, 'Yunieta Anny Nainggolan, Ph.D', '0', 'https://meet.google.com/cbr-uhms-xro', '0', 'IGC-B1'),
(41, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '97622562645', '947988', 'Dr. Sylviana Maya Damayanti', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/97622562645?pwd=YTVWcWZPNVovYW52azd0MVUzRnYxQT09', '20:00:00', 2, 'Dr. Sylviana Maya Damayanti', '0', 'https://meet.google.com/iqk-eryo-emx', '0', 'IGC-B2'),
(42, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '92430912356', '773709', 'Achmad Ghazali, Ph.D', '2020-08-02', 'PKM', 'IGC.PNG', 'https://zoom.us/j/92430912356?pwd=aUI0UnZ2SUcvVnhaMDY0VXBvRVlsdz09', '20:00:00', 2, 'Achmad Ghazali, Ph.D', '0', 'https://meet.google.com/ziq-vtft-xuh', '0', 'IGC-B3'),
(43, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '99884494878', '372034', 'Atik Aprianingsih, DBA.', '2020-08-02', 'DMSN', 'IGC.PNG', 'https://zoom.us/j/99884494878?pwd=VCtpbWNiYnZIbEdiOXNtR3ViT3VYQT09', '20:00:00', 2, 'Atik Aprianingsih, DBA.', '0', 'https://meet.google.com/ijp-gdyz-ryq', '0', 'IGC-B4'),
(44, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '98162974570', '491211', 'Prawira Fajarindra Belgiawan, Ph.D', '2020-08-02', 'DMSN', 'IGC.PNG', 'https://zoom.us/j/98162974570?pwd=ZEhua2VtaFNsT3Y2QUpwTG1RTUZtQT09', '20:00:00', 2, 'Prawira Fajarindra Belgiawan, Ph.D', '0', 'https://meet.google.com/ibi-ribz-han', '0', 'IGC-B5'),
(45, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '99021528657', '026291', 'Dr. Liane Okdinawati', '2020-08-02', 'OPM', 'IGC.PNG', 'https://zoom.us/j/99021528657?pwd=d2x1Z1Y5ejVoMkM2QmVGelBSTWF3Zz09', '20:00:00', 2, 'Dr. Liane Okdinawati', '0', 'https://meet.google.com/gjh-esdg-bva', '0', 'IGC-B6'),
(46, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94586955533', '426724', 'Yuliani Dwi Lestari, Ph.D', '2020-08-02', 'OPM', 'IGC.PNG', 'https://zoom.us/j/94586955533?pwd=SXNPcnoxZDIvYWlDOWY2SDUwSDJPUT09', '20:00:00', 2, 'Yuliani Dwi Lestari, Ph.D', '0', 'https://meet.google.com/xcx-diem-rmu', '0', 'IGC-B7'),
(47, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94866304804', '791952', 'Dedy Sushandoyo, Ph.D', '2020-08-02', 'ETM', 'IGC.PNG', 'https://zoom.us/j/94866304804?pwd=U0Q4dWxERDBFaEVPd2NRTlJUNk1EZz09', '20:00:00', 2, 'Dedy Sushandoyo, Ph.D', '0', 'https://meet.google.com/vyz-xgzj-jcp', '0', 'IGC-B8'),
(48, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '95310520700', '392506', 'Dr.rer.pol. Achmad Fajar Hendarman', '2020-08-02', 'ETM', 'IGC.PNG', 'https://zoom.us/j/95310520700?pwd=aEdHcWlRWGo0RFozV3pUUlNBNlQ2QT09', '20:00:00', 2, 'Dr.rer.pol. Achmad Fajar Hendarman', '0', 'https://meet.google.com/tfi-tokx-ivv', '0', 'IGC-B9'),
(49, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94743248554', '488122', 'Dedy Sushandoyo, Ph.D', '2020-08-02', 'PKM', 'IGC.PNG', 'https://zoom.us/j/94743248554?pwd=a2V6QjVMVGpFQWZscEVROXdtOUUrUT09', '20:00:00', 2, 'Dedy Sushandoyo, Ph.D', '0', 'https://meet.google.com/qti-jumo-can', '0', 'IGC-C1'),
(50, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '94465848109', '785427', 'Dr. Henndy Ginting', '2020-08-02', 'PKM', 'IGC.PNG', 'https://zoom.us/j/94465848109?pwd=YUhzQ2lsd1dGNkFLOUVZRVE3NUZ0dz09', '20:00:00', 2, 'Dr. Henndy Ginting', '0', 'https://meet.google.com/mqn-orad-hjb', '0', 'IGC-C2'),
(51, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '93914447028', '284409', 'Ahmad Danu Prasetyo, Ph.D', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/93914447028?pwd=azR5ZUQveTM1aDN0NXByOUZudE9Xdz09', '20:00:00', 2, 'Ahmad Danu Prasetyo, Ph.D', '0', 'https://meet.google.com/xsp-tvij-ucw', '0', 'IGC-C3'),
(52, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '98070183996', '807363', 'Taufik Faturohman, Ph.D', '2020-08-02', 'BRF', 'IGC.PNG', 'https://zoom.us/j/98070183996?pwd=ZjZPWkdjOUM0RzVQVFZzUnBSV3N4QT09', '20:00:00', 2, 'Taufik Faturohman, Ph.D', '0', 'https://meet.google.com/dnm-rwfi-nyg', '0', 'IGC-C4'),
(53, 'ICMEM Parallel Sessions (A1 - A7)', '16:00:00', '96564942582', '572170', 'Prawira Fajarindra Belgiawan, Ph.D', '2020-08-02', 'BSM', 'IGC.PNG', 'https://zoom.us/j/96564942582?pwd=MFV4QlpWamgvTjF0bCt6ZjR0S3RLdz09', '20:00:00', 2, 'Prawira Fajarindra Belgiawan, Ph.D', '0', 'https://meet.google.com/gxh-xzmo-cjf', '0', 'IGC-C5'),
(63, 'Testing', '05:00:00', ' 77082039150 ', 'bpZ2i9', 'testing', '2021-01-11', 'Testing', '1610354458-.png', 'https://us04web.zoom.us/j/77082039150?pwd=cEpJTEUrQlc2ZnhOeXNmM0VsNUZaUT09', '18:00:00', 0, 'Testing', 'https://us04web.zoom.us/j/77082039150?pwd=cEpJTEUrQlc2ZnhOeXNmM0VsNUZaUT09', 'https://us04web.zoom.us/j/77082039150?pwd=cEpJTEUrQlc2ZnhOeXNmM0VsNUZaUT09', '0', 'ICMEM-A2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participant`
--

CREATE TABLE `tbl_participant` (
  `idParticipant` int(128) NOT NULL,
  `id` int(128) DEFAULT NULL,
  `participant` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_participant`
--

INSERT INTO `tbl_participant` (`idParticipant`, `id`, `participant`) VALUES
(1, 3, 'ramadhanarif93@gmail.com'),
(2, 3, 'ramadhanarif93@gmail.com'),
(3, 3, 'ramadhanarif93@gmail.com'),
(4, 3, 'ramadhanarif93@gmail.com'),
(5, 3, 'ramadhanarif93@gmail.com'),
(6, 4, 'ramadhanarif93@gmail.com'),
(7, 4, 'ramadhanarif93@gmail.com'),
(8, 4, 'ramadhanarif93@gmail.com'),
(9, 4, 'ramadhanarif93@gmail.com'),
(10, 4, 'ramadhanarif93@gmail.com'),
(11, 4, 'ramadhanarif93@gmail.com'),
(12, 4, 'ramadhanarif93@gmail.com'),
(13, 9, 'arif'),
(14, 9, 'arif'),
(15, 9, 'arif'),
(16, 9, 'arif'),
(17, 9, 'arif'),
(18, 10, 'arif2'),
(19, 10, 'arif2'),
(20, 31, 'arif'),
(21, 31, 'arif'),
(22, 31, 'arif'),
(23, 31, 'arif'),
(24, 31, 'arif'),
(25, 31, 'arif'),
(26, 31, 'arif'),
(27, 31, 'arif'),
(28, 3, 'arif'),
(29, 3, 'arif'),
(30, 3, 'arif'),
(31, 3, 'arif'),
(32, 3, 'arif'),
(33, 3, 'arif'),
(34, 3, 'arif'),
(35, 31, 'fitri'),
(36, 31, 'fitri'),
(37, 31, 'fitri'),
(38, 3, 'fitri'),
(39, 3, 'fitri'),
(40, 31, 'arif'),
(41, 3, 'fitri'),
(42, 3, 'fitri'),
(43, 31, 'arif'),
(44, 3, 'fitri'),
(45, 3, 'fitri'),
(46, 3, 'fitri'),
(47, 31, 'arif'),
(48, 31, 'fitri'),
(49, 31, 'fitri'),
(50, 31, 'arif'),
(51, 31, 'arif'),
(52, 31, 'arif'),
(53, 3, 'fitri'),
(54, 31, 'arif'),
(55, 3, 'fitri'),
(56, 3, 'fitri'),
(57, 3, 'fitri'),
(58, 3, 'fitri'),
(59, 3, 'fitri'),
(60, 31, 'fitri'),
(61, 3, 'fitri'),
(62, 3, 'fitri'),
(63, 32, 'arif'),
(64, 3, 'fitri'),
(65, 3, 'fitri'),
(66, 3, 'fitri'),
(67, 3, 'fitri'),
(68, 5, 'fitri'),
(69, 5, 'fitri'),
(70, 31, 'fitri'),
(71, 32, 'arif'),
(72, 6, 'fitri'),
(73, 6, 'fitri'),
(74, 7, 'fitri'),
(75, 31, 'fitri'),
(76, 31, 'arif'),
(77, 3, 'arif'),
(78, 3, 'arif'),
(79, 3, 'arif'),
(80, 3, 'arif'),
(81, 31, 'arif'),
(82, 31, 'arif'),
(83, 3, 'fitri'),
(84, 31, 'arif'),
(85, 32, 'arif'),
(86, 32, 'arif'),
(87, 3, 'fitri'),
(88, 3, 'fitri'),
(89, 3, 'fitri'),
(90, 3, 'fitri'),
(91, 6, 'fitri'),
(92, 31, 'fitri'),
(93, 3, 'fitri'),
(94, 3, 'fitri'),
(95, 3, 'fitri'),
(96, 3, 'fitri'),
(97, 3, 'fitri'),
(98, 31, 'arif'),
(99, 3, 'arif'),
(100, 4, 'fitri'),
(101, 3, 'fitri'),
(102, 4, 'fitri'),
(103, 5, 'fitri'),
(104, 5, 'fitri'),
(105, 4, 'arif'),
(106, 4, 'fitri'),
(107, 3, 'fitri'),
(108, 3, 'fitri'),
(109, 4, 'fitri'),
(110, 3, 'arif'),
(111, 3, 'arif'),
(112, 3, 'arif'),
(113, 25, 'arif'),
(114, 3, 'arif'),
(115, 3, 'arif'),
(116, 6, 'arif'),
(117, 6, 'arif'),
(118, 31, 'arif'),
(119, 6, 'arif'),
(120, 6, 'arif'),
(121, 7, 'arif'),
(122, 7, 'arif'),
(123, 1, 'arif'),
(124, 31, 'arif'),
(125, 31, 'arif'),
(126, 32, 'arif'),
(127, 32, 'arif'),
(128, 33, 'arif'),
(129, 33, 'arif'),
(130, 33, 'arif'),
(131, 34, 'arif'),
(132, 34, 'arif'),
(133, 35, 'arif'),
(134, 35, 'arif'),
(135, 35, 'arif'),
(136, 35, 'arif'),
(137, 35, 'arif'),
(138, 35, 'arif'),
(139, 34, 'arif'),
(140, 35, 'arif'),
(141, 36, 'arif'),
(142, 35, 'arif'),
(143, 35, 'arif'),
(144, 36, 'arif'),
(145, 36, 'arif'),
(146, 37, 'arif'),
(147, 38, 'arif'),
(148, 38, 'arif'),
(149, 38, 'arif'),
(150, 38, 'arif'),
(151, 38, 'arif'),
(152, 38, 'arif'),
(153, 38, 'arif'),
(154, 38, 'arif'),
(155, 38, 'arif'),
(156, 37, 'arif'),
(157, 37, 'arif'),
(158, 38, 'arif'),
(159, 38, 'arif'),
(160, 39, 'arif'),
(161, 39, 'arif'),
(162, 39, 'arif'),
(163, 39, 'arif'),
(164, 38, 'arif'),
(165, 39, 'arif'),
(166, 40, 'arif'),
(167, 40, 'arif'),
(168, 40, 'arif'),
(169, 40, 'arif'),
(170, 41, 'arif'),
(171, 41, 'arif'),
(172, 42, 'arif'),
(173, 42, 'arif'),
(174, 43, 'arif'),
(175, 43, 'arif'),
(176, 44, 'arif'),
(177, 44, 'arif'),
(178, 45, 'arif'),
(179, 45, 'arif'),
(180, 46, 'arif'),
(181, 46, 'arif'),
(182, 47, 'arif'),
(183, 47, 'arif'),
(184, 48, 'arif'),
(185, 48, 'arif'),
(186, 1, 'arif'),
(187, 1, 'arif'),
(188, 2, 'arif'),
(189, 2, 'arif'),
(190, 3, 'arif'),
(191, 3, 'arif'),
(192, 4, 'arif'),
(193, 4, 'arif'),
(194, 5, 'arif'),
(195, 5, 'arif'),
(196, 5, 'arif'),
(197, 5, 'arif'),
(198, 6, 'arif'),
(199, 6, 'arif'),
(200, 7, 'arif'),
(201, 7, 'arif'),
(202, 6, 'arif'),
(203, 6, 'arif'),
(204, 7, 'arif'),
(205, 7, 'arif'),
(206, 10, 'arif'),
(207, 10, 'arif'),
(208, 11, 'arif'),
(209, 11, 'arif'),
(210, 12, 'arif'),
(211, 12, 'arif'),
(212, 8, 'arif'),
(213, 8, 'arif'),
(214, 9, 'arif'),
(215, 9, 'arif'),
(216, 10, 'arif'),
(217, 10, 'arif'),
(218, 11, 'arif'),
(219, 11, 'arif'),
(220, 11, 'arif'),
(221, 12, 'arif'),
(222, 12, 'arif'),
(223, 12, 'arif'),
(224, 12, 'arif'),
(225, 13, 'arif'),
(226, 13, 'arif'),
(227, 14, 'arif'),
(228, 14, 'arif'),
(229, 15, 'arif'),
(230, 15, 'arif'),
(231, 16, 'arif'),
(232, 16, 'arif'),
(233, 17, 'arif'),
(234, 17, 'arif'),
(235, 16, 'arif'),
(236, 16, 'arif'),
(237, 49, 'arif'),
(238, 49, 'arif'),
(239, 50, 'arif'),
(240, 50, 'arif'),
(241, 51, 'arif'),
(242, 51, 'arif'),
(243, 52, 'arif'),
(244, 52, 'arif'),
(245, 53, 'arif'),
(246, 53, 'arif'),
(247, 14, 'arif'),
(248, 14, 'arif'),
(249, 15, 'arif'),
(250, 15, 'arif'),
(251, 16, 'arif'),
(252, 16, 'arif'),
(253, 17, 'arif'),
(254, 17, 'arif'),
(255, 18, 'arif'),
(256, 18, 'arif'),
(257, 19, 'arif'),
(258, 19, 'arif'),
(259, 16, 'arif'),
(260, 16, 'arif'),
(261, 17, 'arif'),
(262, 17, 'arif'),
(263, 18, 'arif'),
(264, 18, 'arif'),
(265, 19, 'arif'),
(266, 19, 'arif'),
(267, 20, 'arif'),
(268, 20, 'arif'),
(269, 21, 'arif'),
(270, 21, 'arif'),
(271, 23, 'arif'),
(272, 23, 'arif'),
(273, 24, 'arif'),
(274, 24, 'arif'),
(275, 25, 'arif'),
(276, 25, 'arif'),
(277, 26, 'arif'),
(278, 26, 'arif'),
(279, 27, 'arif'),
(280, 27, 'arif'),
(281, 28, 'arif'),
(282, 28, 'arif'),
(283, 29, 'arif'),
(284, 29, 'arif'),
(285, 30, 'arif'),
(286, 30, 'arif'),
(287, 22, 'arif'),
(288, 22, 'arif'),
(289, 26, 'arif'),
(290, 26, 'arif'),
(291, 27, 'arif'),
(292, 27, 'arif'),
(293, 28, 'arif'),
(294, 28, 'arif'),
(295, 29, 'arif'),
(296, 29, 'arif'),
(297, 30, 'arif'),
(298, 30, 'arif'),
(299, 31, 'arif'),
(300, 31, 'arif'),
(301, 32, 'arif'),
(302, 32, 'arif'),
(303, 33, 'arif'),
(304, 33, 'arif'),
(305, 3, 'arif'),
(306, 3, 'arif'),
(307, 3, 'arif'),
(308, 3, 'arif'),
(309, 4, 'arif'),
(310, 5, 'arif'),
(311, 4, 'arif'),
(312, 5, 'arif'),
(313, 3, 'arif'),
(314, 24, 'arif'),
(315, 34, 'arif'),
(316, 24, 'arif'),
(317, 34, 'arif'),
(318, 3, 'arif'),
(319, 3, 'fitri'),
(320, 4, 'fitri'),
(321, 4, 'fitri'),
(322, 5, 'fitri'),
(323, 13, 'fitri'),
(324, 23, 'fitri'),
(325, 25, 'fitri'),
(326, 20, 'fitri'),
(327, 34, 'fitri'),
(328, 1, 'fitri'),
(329, 4, 'arif'),
(330, 1, 'fitri'),
(331, 1, 'fitri'),
(332, 8, 'fitri'),
(333, 8, 'fitri'),
(334, 21, 'fitri'),
(335, 21, 'fitri'),
(336, 2, 'fitri'),
(337, 2, 'fitri'),
(338, 9, 'fitri'),
(339, 9, 'fitri'),
(340, 22, 'fitri'),
(341, 22, 'fitri'),
(342, 3, 'dwibisono@sbm-itb.ac.id'),
(343, 3, 'dwibisono@sbm-itb.ac.id'),
(344, 3, 'dwibisono@sbm-itb.ac.id'),
(345, 3, 'dwibisono@sbm-itb.ac.id'),
(346, 3, 'dwibisono@sbm-itb.ac.id'),
(347, 3, 'dwibisono@sbm-itb.ac.id'),
(348, 3, 'dwibisono@sbm-itb.ac.id'),
(349, 3, 'dwibisono@sbm-itb.ac.id'),
(350, 3, 'dwibisono@sbm-itb.ac.id'),
(351, 3, 'dwibisono@sbm-itb.ac.id'),
(352, 3, 'dwibisono@sbm-itb.ac.id'),
(353, 3, 'dwibisono@sbm-itb.ac.id'),
(354, 3, 'dwibisono@sbm-itb.ac.id'),
(355, 3, 'dwibisono@sbm-itb.ac.id'),
(356, 1, 'adella_izdhiharnada@sbm-itb.ac.id'),
(357, 1, 'adella_izdhiharnada@sbm-itb.ac.id'),
(358, 1, 'adella_izdhiharnada@sbm-itb.ac.id'),
(359, 1, 'endangsilk@gmail.com'),
(360, 3, 'jannhidajat@sbm-itb.ac.id'),
(361, 3, 'jannhidajat@sbm-itb.ac.id'),
(362, 3, 'jannhidajat@sbm-itb.ac.id'),
(363, 3, 'jannhidajat@sbm-itb.ac.id'),
(364, 1, 'dedy.sushandoyo@sbm-itb.ac.id'),
(365, 1, 'nurfaisa.hidayanti@sbm-itb.ac.id'),
(366, 1, 'dpbisnar@gmail.com'),
(367, 1, 'nurfaisa.hidayanti@sbm-itb.ac.id'),
(368, 1, 'dpbisnar@gmail.com'),
(369, 1, 'dpbisnar@gmail.com'),
(370, 35, 'user'),
(371, 36, 'user'),
(372, 36, 'user'),
(373, 36, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partisipasi`
--

CREATE TABLE `tbl_partisipasi` (
  `idPartisipasi` int(128) NOT NULL,
  `idUser` int(128) DEFAULT NULL,
  `joinTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_polling`
--

CREATE TABLE `tbl_polling` (
  `idPolling` int(128) NOT NULL,
  `question` varchar(128) DEFAULT NULL,
  `answerA` varchar(128) DEFAULT NULL,
  `answerB` varchar(128) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `answerC` varchar(128) DEFAULT NULL,
  `sumA` int(128) DEFAULT 0,
  `sumB` int(128) DEFAULT 0,
  `sumC` int(128) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_polling`
--

INSERT INTO `tbl_polling` (`idPolling`, `question`, `answerA`, `answerB`, `tanggal`, `answerC`, `sumA`, `sumB`, `sumC`) VALUES
(9, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Clean water supply for all', 'Good corporate image ', '2020-08-03', 'Non-discriminatory laws against women', 2, 0, 5),
(10, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Employee engagement', 'Decent job for all workers', '2020-08-03', 'Management of knowledge', 0, 0, 2),
(11, 'Day 1’s Plenary Session addresses the idea of Sustainable Human Capital. Based on your understanding, which sustainable developm', 'Decent work and economic growth', 'Industry, Innovation, and Infrastructure ', '2020-08-03', 'Quality education', 0, 1, 0),
(16, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Meritocracy in selecting employees', 'Selection of the best talents for industry', '2020-08-03', 'Equal work opportunities for all genders', 0, 0, 0),
(17, 'Day 2’s Plenary Session addresses the idea of Ecosystem for Sustainable Development. Based on your understanding, which sustaina', 'Decent work and economic growth', 'Peace, Justice, and Strong Institutions', '2020-08-03', 'Partnerships for the Goals ', 0, 1, 0),
(18, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Inclusive and innovative infrastructures ', 'Decent jobs for all people ', '2020-08-03', 'Exponential economic growth ', 0, 0, 0),
(19, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Creation of corporate universities for selected talents', 'Maintenance of good image by doing corporate social responsibility', '2020-08-03', '\r\nContribution to quality education, especially for the disadvantaged ', 0, 0, 0),
(23, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Highly selective education system ', 'Lives of the disadvantaged leveraged ', '2020-08-03', 'Cities with facilities to fulfill basic needs ', 0, 0, 0),
(25, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Responsible production process ', 'Smart marketing strategy ', '2020-08-04', 'Well-managed climate risks ', 0, 0, 0),
(26, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Mechanisms for recycling natural resources', 'Consumption of nationally produced products', '2020-08-04', 'Building of public trust through law-abiding behaviors ', 0, 0, 0),
(28, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Institutions protecting human rights ', 'Collective aids across nations ', '2020-08-04', 'Minimization of cultural differences ', 0, 0, 0),
(29, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Internationalization of domestic products through partnerships', 'Explicit non-discriminatory policies in organizations ', '2020-08-04', 'Fair distribution of financial incentives among shareholders', 0, 0, 0),
(30, 'What is the theme of ICMEM 2020?', 'Sustainable Development: Orchestrating Business to Respond to Society’s Latest Challenges', 'Managing Business in Digital Disruption Era', '2020-08-04', 'Digital Integration and Business Sustainability in Emerging Markets - Business Engineering and Industry 4.0 in a global economy', 0, 0, 0),
(31, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Profit maximization ', 'Marine biodiversity ', '2020-08-04', 'Forest protection ', 0, 0, 0),
(32, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Access to electricity, especially in developing countries', 'Promotion of the energy sector as the dominant sector of a nation', '2020-08-04', 'Efforts to ensure that the energy sector is not replaced by a less sustainable sector', 0, 0, 0),
(33, 'The Chairperson of ICMEM 2020 is', 'Andika Putra Pratama, S.Si., MSM, Ph.D', 'Dr. Raden Aswin Rahadi ST, MM, MBA, QWP, RFA', '2020-08-04', 'Dr. Eng. Nur Budi Mulyono', 0, 0, 0),
(34, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Investments in hospitals as a source of individual profit', 'Strong political systems that represent the majority of people', '2020-08-04', 'Basic health services accessible to all people', 0, 0, 0),
(35, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Inclusive economic growth ', 'Psychologically healthy people ', '2020-08-03', 'Market dominance ', 0, 0, 0),
(36, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Well-managed & responsible consumption ', 'Freedom of expression across all aspects of life ', '2020-08-05', 'Socio-economic security for the marginalized group ', 0, 0, 0),
(37, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Employee retention programs that promote loyalty', 'Competitive education environments that promote winners', '2020-08-05', 'Basic education institutions that are inclusive for all', 0, 0, 0),
(38, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Renewable energy beyond the electricity sector', 'Quality education for all ', '2020-08-05', 'Publication of charity events on social media ', 0, 0, 0),
(39, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Access to big corporations for young talents ', 'Protection of people from income losses', '2020-08-05', 'Digitalization in all aspects of life, including doing business', 0, 0, 0),
(40, 'Out of the 3 available options, spot the one that is not the main concern of sustainable development goals set up by the UN:', 'Good talent management ', 'Social protection for those in need of food ', '2020-08-05', 'Efficient funding of health systems ', 0, 0, 0),
(41, 'Out of the 3 available options, spot the one that is a concern directly embedded in sustainable development goals.', 'Providing scholarships for talented people in big cities', 'Financing for small-scale industries ', '2020-08-05', 'Promoting industries that can grow on their own', 0, 0, 0),
(42, 'Who was the moderator for SBM SICA Webinars?', 'Akhmad Rizqhata Ramadhan ', 'Vania Wijaya', '2020-08-03', 'Isti Raafaldini', 0, 0, 0),
(43, 'How many parallel sessions are there at IGC?', '25', '23', '2020-08-04', '20', 0, 0, 0),
(44, 'Below are The speakers in SBM SICA webinar that conducted on July 12 2020, except', 'Prof. Dieter Reineke', 'Dr. Melia Femiola', '2020-08-05', 'Dr. Leo Aldianto ', 0, 0, 0),
(45, 'How many judges for the Sica’s final?', '6', '8', '2020-08-05', '10', 0, 0, 0),
(46, 'What does IGC stand for?', 'International Graduates Conference', 'International Graduates Colloquium ', '2020-08-05', 'International Graduates Collaboration', 0, 0, 0),
(47, 'The Chairperson of IGC 2020 is ', 'Yunieta Anny Nainggolan, PhD', 'Andika Putra Pratama, S.Si., MSM, Ph.D', '2020-08-05', 'Dr. Raden Aswin Rahadi ST, MM, MBA, QWP, RFA', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_polling_answer`
--

CREATE TABLE `tbl_polling_answer` (
  `idPollingAnswer` int(128) NOT NULL,
  `idPolling` int(128) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `answer` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_polling_answer`
--

INSERT INTO `tbl_polling_answer` (`idPollingAnswer`, `idPolling`, `username`, `answer`) VALUES
(2, 4, 'ramadhanarif93@gmail.com', ''),
(3, 5, 'ramadhanarif93@gmail.com', ''),
(4, 4, 'testing', ''),
(5, 4, 'arif', ''),
(6, 7, 'arif', ''),
(7, 7, 'arif2', ''),
(8, 9, 'Endang Malau', 'B'),
(9, 9, 'ftiri', 'B'),
(10, 9, 'ftiri', 'B'),
(11, 9, 'ftiri', 'B'),
(12, 9, 'ftiri', 'B'),
(13, 9, 'ftiri', 'A'),
(14, 9, 'ftiri', 'B'),
(15, 9, 'ftiri', 'B'),
(16, 9, 'ftiri', 'C'),
(17, 9, 'ftiri', 'C'),
(18, 10, 'ftiri', 'C'),
(19, 10, 'ftiri', 'C'),
(20, 9, 'ftiri', 'C'),
(21, 9, 'ftiri', 'C'),
(22, 9, 'ftiri', 'C'),
(23, 9, 'ftiri', 'A'),
(24, 9, 'ftiri', 'A'),
(25, 11, 'ftiri', 'B'),
(26, 17, 'ftiri', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resources`
--

CREATE TABLE `tbl_resources` (
  `idResources` int(128) NOT NULL,
  `resources` text DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_resources`
--

INSERT INTO `tbl_resources` (`idResources`, `resources`, `title`, `link`) VALUES
(15, 'Virtual Background1.jpeg', 'Virtual Background 1', ''),
(16, 'Virtual Background2.jpeg', 'Virtual Background 2', ''),
(17, 'Virtual Background3.jpeg', 'Virtual Background 3', ''),
(18, 'Virtual Background4.jpeg', 'Virtual Background 4', ''),
(19, 'Virtual Background5.jpeg', 'Virtual Background 5', ''),
(20, 'Virtual Background6.jpeg', 'Virtual Background  6', ''),
(21, '', 'ICMEM 2020 Papers (Only for Session Chair)', 'https://drive.google.com/drive/folders/1oSvC-IDW6y1vFkhlxkUiGCjpRE55BXtm?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `idSchedule` int(128) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `event` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `idSession` int(128) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `author` varchar(128) DEFAULT NULL,
  `session` varchar(128) DEFAULT NULL,
  `idpapper` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`idSession`, `title`, `author`, `session`, `idpapper`) VALUES
(1, 'Analyzing the User-generated Content Effectiveness on Twitter for Small Medium-Sized Enterprises', 'Gabriella Stefany Puteri', 'ICMEM-A2', '71'),
(2, 'The Unified Theory of Acceptance and Use of Technology (UTAUT) Application in Analyzing Key Factors Towards Intention to Use Lin', 'Yolanda Sagala, Ira Fachira', 'ICMEM-A2', '81'),
(3, 'Comparative Analysis Between Subbed and Dubbed Trailer of Japanese Animation Towards Viewer’s Engagement and Visual Attention Us', 'Taufiqur Rohman, Fitri Aprilianty', 'ICMEM-A2', '85'),
(4, 'The Effectiveness of Bank Mandiri White Labeling Strategy in Bicara Kopi Instagram Account', 'Ahresty Miuradewi, Fitri Aprilianty', 'ICMEM-A2', '92'),
(5, 'Mother’s Negative Behavior in Online Discussion Forum: Value Co-Destruction Measurement Development Scale', 'Aulia Fadlilllah Puteri Solikhan, Nila Armelia Windasari', 'ICMEM-A2', '96'),
(6, 'The Influence of Minimalist Packaging Design on Makeup Products Towards Consumer Purchase Intention', 'Derra Inayah Avia Rizky', 'ICMEM-A2', '103'),
(7, 'The Study of Customer Interest, Engagement, and Visit Intention Towards Official Bali’s Luxury Hotel Promotional Video on YouTub', 'Valentina Nadya', 'ICMEM-A2', '107'),
(8, 'Measuring The Influence of Native Advertising in Digital Comic Towards Engagement Rate by Applying a Narrative Structure', 'Girindra Mahesadzikri', 'ICMEM-A2', '112'),
(9, 'Analyzing Factors That Influence Purchase Intention Based on Brand Recommendation of Digital Influencers', 'Adella Izdhiharnada Novian', 'ICMEM-A2', '223'),
(10, 'Business Strategy Development For Retail Lending Business Using Scenario Planning Approach', 'Tri Sujatioadi, Yos Sunitiyoso', 'ICMEM-D4', '48'),
(11, 'The Multidimensional Effect of Perceived Value on Trust and Purchase Intention of Organic Vegetables', 'Wulan Nugraini, Ignatius Heruwasto', 'ICMEM-D4', '140'),
(12, 'Churn Prediction Model for Telecommunication Company in Indonesia', 'Etano Garda Ariyan, Sri Rahayu Hijrah Hati', 'ICMEM-D4', '143'),
(13, 'Linking Tourist Perception to Halal Tourism Intention Behavior', 'Faridatus Saidah, Yuliani Dwi Lestari', 'ICMEM-D4', '232'),
(14, 'The Antecedents of Consumer Eco-friendly Vehicles Purchase Behavior: A Theoretical Framework Proposing the Roles of Perception, ', 'Aisha Khan, Yusliza Mohd Yusoff, Faisal Khan', 'ICMEM-D4', '248'),
(15, 'Proliferation of Chain Grocery Stores and Its Effects on FMCG Distributors\' Performance', 'Argee Gallardo, Alan Michael Cipriano', 'ICMEM-D4', '253'),
(16, 'The Use of “Community-Based Business” Concept in Developing Sustainable Future through Organic Farming', 'Annisa S. Soemodinoto, Yuanita Handayati', 'ICMEM-D4', '300'),
(17, 'The Relationship Between Service Quality Toward Customer Satisfaction of Teman Lama Coffee Shop Bandung', 'Keiko Shintota Jan Wiguna, Atik Aprianingsih', 'ICMEM-A3', '115'),
(18, 'The Effects of B2B E-Commerce Website’s Information Quality on Purchase Intention in Small to Medium-Sized Hotel Sector', 'Krisanti Debora Angelia', 'ICMEM-A3', '118'),
(19, 'The Role of Motivations and Constraints in Forming Repurchase Intention of Collaborative Consumption Platform', 'Qinthara Silmi Faizal, Reza Ashari Nasution', 'ICMEM-A3', '120'),
(20, 'Brand Loyalty in South Korean Cosmetic Industry', 'Hee Yeon Kan', 'ICMEM-A3', '122'),
(21, 'The Influence of Online Grocery Shopping Customer Experience on Customer Behavioral Response During Covid-19 Pandemic', 'Sherina Kusmira Sari, Reza Ashari Nasution', 'ICMEM-A3', '123'),
(22, 'The Influence of Instagram on Brand Equity and Purchase Intention of Luxury Fashion Brands', 'Puti Shania Sastrosatomo, Reza Ashari Nasution', 'ICMEM-A3', '125'),
(23, 'Measuring The Influence of Discomfort Tolerance to Customer Loyalty: Warunk Upnormal Case', 'Jessica Kimaru', 'ICMEM-A3', '127'),
(24, 'The Role of Social Presence in Consumer Acceptance Toward Customer Service Chatbot', 'Sarah Sophia Romdoni, Reza Ashari Nasution', 'ICMEM-A3', '128'),
(25, 'Factors Affecting Consumer Purchase Intention in Online Second-Hand Clothing STore', 'Beatricia Surbakti', 'ICMEM-A3', '177'),
(26, 'The Study of Consumer Preferences and Advertising Effectiveness Analysis Towards Studio Hikari Instagram Story Video Ads', 'Dovan Fakhradyan', 'ICMEM-A4', '181'),
(27, 'The Study of Customer Experience on Grab Subscription Plan Program and Its Effects Towards Customer Loyalty on Grab Company', 'Athifah Syauqin Aryndani, Fitri Aprilianty', 'ICMEM-A4', '182'),
(28, 'Analysis of Channel Integration Quality on Customer Engagement Towards Repurchase Intention in IKEA Indonesia', 'Luthfi Rizalullah Alrasyid, Reza Ashari Nasution', 'ICMEM-A4', '186'),
(29, 'The Influence of Services Cape and Service Quality on Customer Satisfaction and Repurchase Intention at One Eighty Cafe in Bandu', 'Armayoga Al Gifari', 'ICMEM-A4', '189'),
(30, 'Analyzing Factors that Influencing Continuance Intention of Ewallet in DKI Jakarta Study Case : OVO', 'Cici Kurniasih', 'ICMEM-A4', '204'),
(31, 'The Influence of User Generated Content (UGC) Factors Towards The Content Utilization for Customer Purchase Decisions on Instagr', 'Almira Rahma Aurellia, Reza Ashari Nasution', 'ICMEM-A4', '205'),
(32, 'Factors Influencing Consumer Purchase Intention Towards Slow Fashion Products in Bandung and Jakarta', 'Shafa Lathifan, Atik Aprianingsih, Margareth Setiawan, Teresia Debby, Nia Desiana', 'ICMEM-A4', '208'),
(33, 'Consumer Choice Decision for Buying Sheet Mask: A Case Study of Indonesian, Korean, and French Sheet Mask Comparison', 'Michelle Ferica', 'ICMEM-A4', '213'),
(34, 'The Influence of Innovation Adoption Towards Purchase Intention in Nano Coating for Eyeglass', 'Felicia Christabella', 'ICMEM-A4', '305'),
(35, 'Intention to Use Mobile Wallet Payments of Mobile Wallet Application in Indonesia', 'Evan Vilio Djaja Indrianto', 'ICMEM-B2', '23'),
(36, 'The Analysis Of Gopay`s Sales Promotion Using a Social Network Analysis Of Twitter', 'Dewinta Srinanda, Kristina Sisilia, Yahya Peranginangin', 'ICMEM-B2', '53'),
(37, 'Analysis of Factors that Influence Consumers Adoption of E-payment', 'Stephanie Roselyn', 'ICMEM-B2', '78'),
(38, 'Pivot Decision Influence Customer Perceived Value in The Digital Startups', 'Gopala Arcana', 'ICMEM-B2', '109'),
(39, 'The Factors Influencing Offices Acceptance Towards Smart Home Technology', 'Hasna Bachtiar', 'ICMEM-B2', '137'),
(40, 'Factor Influencing User Acceptance Towards Audio Streaming Service: Case Study Spotify', 'Try Asih Wulandari', 'ICMEM-B2', '231'),
(41, 'The Role of Sales Proneness on Customer Purchase Behavior Intention Through Coffee Shop Mobile Application', 'Keany Edessias, Annisa Qastharin', 'ICMEM-B2', '265'),
(42, 'The Phenomenon of Virtual Influencers’ Parasocial Interaction on Instagram', 'Millenia Nur Puspita Ciptoputri', 'ICMEM-B2', '280'),
(43, 'The Influence of Performance Expectancy and Moderating Variable of Regulatory Focus on Mobile App Acceptance: The Case of Warunk', 'Saskia Hana Clarissha, Reza Ashari Nasution', 'ICMEM-B3', '86'),
(44, 'The Relationship Between Promotional Mix Towards Customer Purchase Intention in 7 Honey', 'Olga Victoria', 'ICMEM-B3', '210'),
(45, 'The Influence of Brand Name and Country-of-Origins Towards Purchase Intention of Miniso With The Moderating Effect of Gender', 'Fujiarto Wibisono Hosana', 'ICMEM-B3', '218'),
(46, 'Effectivity of Product Placement in Web Series Towards Brand Attractiveness', 'Safira Rahmadani Setiawan, Reza Ashari Nasution', 'ICMEM-B3', '246'),
(47, 'The Impact of Social Media Influencers and Customer Reviews Towards Purchase Intention of Organic Personal Care Products', 'Nikihapsary Sitty Nurmawarizqina', 'ICMEM-B3', '257'),
(48, 'Online Privacy Awareness of Indonesian Millennials', 'Aditya Kalipah Ramdhan Rini', 'ICMEM-B3', '299'),
(49, 'A Study of Factors Influencing on Choice of Investment Products', 'Tutur Riama Maruliana Sianturi', 'ICMEM-B3', '301'),
(50, 'Factors Affecting Consumer’s Willingness to Pay for Nanotechnology-based Product A Case Study: Nasho', 'Fany Anggraeni, Annisa R Qastharin', 'ICMEM-B3', '303'),
(51, 'The Impact of Social Media Influencers Review on Women’s Purchase Intention of Beauty Products', 'Debora Kezia Esther, Ira Fachira', 'ICMEM-B4', '135'),
(52, 'A Study to Analyze the Cross-selling of Mind Blowon Studio by Looking at Customer Intimacy', 'Elisabeth Sirumapea', 'ICMEM-B4', '138'),
(53, 'The Influence of Self-Efficacy in Customer Acceptance Toward Online Healthcare Applications in Indonesia', 'Muhamad Bayurizki, Reza Ashari Nasution', 'ICMEM-B4', '157'),
(54, 'Brand Positioning Analysis of Five Indonesian E-Commerce Courier Companies Using Perceptual Mapping Technique', 'Nestia Frida Aisya, Meditya Wasesa', 'ICMEM-B4', '160'),
(55, 'Influence of Social Media Marketing Activity on Customer-Based Brand Equity in Liunic on Things Company', 'Siti Sarah, Ira Fachira', 'ICMEM-B4', '162'),
(56, 'Consumer Behavior Changes on Healthy Food Consumption Among Young Adults', 'Rana Syifa Atikah', 'ICMEM-B4', '178'),
(57, 'The Impact of Luxury Brand Fragrance Review Videos on YouTube Towards Viewers Purchase Intention', 'Amanda Vania', 'ICMEM-B4', '180'),
(58, 'Developing Online Radio Platform for Millennial Niche Market', 'Muhammad Naufal Rohmat', 'ICMEM-B4', '224'),
(59, 'Business Traveler Insights to Develop Digital Platform of Trac Astra Rental Car', 'Leka Putra, Asnan Furinto', 'ICMEM-C2', '88'),
(60, 'Government Rebranding Effort on Pekerja Migran Indonesia: Perception From The Eye of Indonesian Job Seeker', 'Ade Setiati, Yeshika Alversia', 'ICMEM-C2', '119'),
(61, 'The Antecedents of Trust, and Commitment Toward Continuance Intention Mobile Payment', 'Oktyfany Sembiring, Daniel Tumpal Hamonangan Aruan', 'ICMEM-C2', '149'),
(62, 'Destination Competitiveness: The Antecedent of Tourist’s Perceived Value, Trust, and Perceived Behavioural Control on Halal Tour', 'Sherly Artadita, Yuliani Dwi Lestari', 'ICMEM-C2', '211'),
(63, 'A Descriptive Analysis of The Impact of Tourism Towards Quality of Life Among Fishermen', 'Zaleha Mohamad, Khatijah Omar', 'ICMEM-C2', '245'),
(64, 'The Influence of Beauty Vloggers on Building Consumer Brand Awareness of Cosmetic Products', 'Jessica Lhay Asana, Ankiat Byron Co', 'ICMEM-C2', '266'),
(65, 'Effect of Website Quality on Satisfaction Use E-Commerce Website as Product Marketing Distribution', 'Handry Sudiartha Athar', 'ICMEM-C3', '67'),
(66, 'Proposed Digital Marketing Strategy for Muslim Women`s Fashion Brand (Case Study: Arra Style)', 'Roni Akbar', 'ICMEM-C3', '192'),
(67, 'Business Coaching: Create Business Intelligence, Develop Loyalty Program, and Enhance Employee Performance System in Fashion Ret', 'Andrey Hadibrata', 'ICMEM-C3', '207'),
(68, 'Proposed Strategy to Introduce New Technology in Waste to Energy Management (Case: TPA Puuwatu Kendari City)', 'Gustian Rismaya Anwar', 'ICMEM-C3', '209'),
(69, 'Sustainable Business Performance in Malaysian SMEs via Eco-Innovation Capability: A Conceptual Approach', 'Najahul Kamilah Aminy Sukri, Nur Farah Zafira Zaidi, Siti Nur \'Atikah Zulkiffli, Nik Hazimah Nik Mat', 'ICMEM-C3', '276'),
(70, 'Generating Business Strategy for New Business Model Fashion Renting Start Up “Restyle” in Indonesia', 'Nelfriani', 'ICMEM-C3', '286'),
(71, 'A Concept on the Destination Image, Tourist Satisfaction and Destination Loyalty at World Heritage Site -Malacca Malaysia', 'Zaliha Zainuddin', 'ICMEM-C3', '304'),
(72, 'The Attitude of Consumers towards Herbal Medicine for Common Cold (Case Study in Bandung)', 'Ray Burton', 'ICMEM-D3', '28'),
(73, 'Proposed Business Strategy for Revenue Growth of a Manufacturing Company Operating in Indonesia', 'Matteo Lelli', 'ICMEM-D3', '37'),
(74, 'Application of In-Store Advertising and Forming of Marketing Standard Operating Procedures for In-Store Sampling Through Busines', 'Fajriana Khusnul Khotimah, Sisdjiatmo K. Widhaningrat', 'ICMEM-D3', '152'),
(75, 'A Conceptual Study of Eco-Innovation Capabilities and Competitive Capabilities among Malaysian SMEs', 'Nur Farah Zafira Zaidi, Siti Nur \'Atikah Zulkiffli, Siti Falindah Padlee, Najahul Kamilah Aminy Sukri', 'ICMEM-D3', '264'),
(76, 'Mapping The Conceptual Structure of Research on Sustainable Marketing Management: A Co-Word Analysis', 'Angelina Nhat Hanh Le, Pham Ngoc Thu Trang', 'ICMEM-D3', '271'),
(77, 'Business Strategy for Pepper Products of CSR PT. Berau Coal to Support Economic Sustainability', 'Fandy Alim, Ira Fachira', 'ICMEM-D3', '272'),
(78, 'Critical Success Factors Of Blockchain Technology Implementation in E-Commerce: Case Study Of PT Etalase Potensi Daerah (Potensi', 'Nafia Azhariya, Eko Agus Prasetio', 'ICMEM-D3', '298'),
(79, 'Financing Model Decision on the Biomass Facility Boiler Project and Its Impact to the Financial Reporting, Accordance to Stateme', 'Bernard Iskandar', 'ICMEM-B5', '1'),
(80, 'Proposed Strategy for Sanitation Business at PT. Jawara Bersih Nusantara (Jamban Start-up)', 'Joobu Wahyudi, Hermawan Kartajaya', 'ICMEM-B5', '33'),
(81, 'Decision Making for Selection of Emergency Energy Supply For Mass Rapid Transport System Using Analytic Hierarchy Process', 'Rifkiandi Darajatun, Utomo Sarjono Putro', 'ICMEM-B5', '57'),
(82, 'Integrated Strategy in Providing Solution to Illegal Gold Mining: A Case Study in Mount Muro, Central Kalimantan', 'Ongku Hasibuan', 'ICMEM-B5', '66'),
(83, 'Analytical Hierarchy Process for Assessing Sustainable Development Criteria and Subcriteria of Micro Hidro Power Plant Project', 'Nila Murti, Yos Sunitiyoso, Heru Prasetyo', 'ICMEM-B5', '216'),
(84, 'Developing Strategy Using Scenario Planning at JIIPE (Java Integrated Industrial and Port Estate) To Gain Sustainable Competitiv', 'Alex Simanjuntak, Agung Wicaksono', 'ICMEM-B5', '219'),
(85, 'Transforming Indonesia Small Medium Enterprises to Digital Business for Sustainable Development Goals in The Mid of Pandemic Cov', 'Dio Wibowo', 'ICMEM-B5', '267'),
(86, 'Strengthening The Mine Service Contract Model Function in Managing Coal Mining Business Risk With A Capital Budgeting Approach: ', 'Ongky Elisman, Yunieta Anny Nainggolan', 'ICMEM-B5', '287'),
(87, 'The Effect of Motivation, Ability, Role Perceptions, and Situational Factors (MARS) toward HIV-Related Stigma and Discrimination', 'Hadi Putra, Yos Sunitiyoso', 'ICMEM-B6', '19'),
(88, 'Operational Process Improvement Study Case in a Local Biotechnology Distributor Company', 'Lina Anggraini, Adirizal Nizar', 'ICMEM-B6', '25'),
(89, 'Marketing Strategy for Sanitation Startup Case Study Jamban', 'Rudy Wahyu Perdana, Jacky Mussry', 'ICMEM-B6', '31'),
(90, 'Crisis Management Strategy to Sustain Upstream Oil and Gas Operations during COVID-19 Pandemic', 'Alvin Reginald, Manahan Parlindungan Saragih Siallagan', 'ICMEM-B6', '49'),
(91, 'Proposed Marketing Strategy in Handicraft Business Sector (Case Study: Toko Lempung)', 'Annisaa Dyah Adani, Dona Saphiranti', 'ICMEM-B6', '131'),
(92, 'Innovation for Sustainable Drinking Water Industry: Case Izifill Design Sprint', 'Ichsan Mulia Permata, Wawan Dhewanto', 'ICMEM-B6', '214'),
(93, 'Strategic Human Resources Management (SHRM) Modeling on Food Safety Management Systems (FSMS) and Food Safety Performance View o', 'Siti Nurul Husna Omar, Azlinzuraini Ahmad', 'ICMEM-B6', '256'),
(94, 'Applied Systems Thinking in Business Issue Exploration for Sustainable Development Case PT. Sirkel Kreasi Nusantara (Sirkel.Id)', 'Muhammad Ahsanuddin Abdurrohim', 'ICMEM-B6', '278'),
(95, 'Proposed Corporate Strategy for Gemilang Machinery Indonesia to Increase the Sales Revenue Focus on Existing Customers', 'Eko Wiji Novianto', 'ICMEM-B7', '2'),
(96, 'Applying Scenario Planning in The Loan Growth of Commercial Banking', 'Erling', 'ICMEM-B7', '5'),
(97, 'Business Strategy for TopCorp’s Net Cages to Succeed in Indonesia Market', 'Elizabeth Elvienna, Wawan Dhewanto', 'ICMEM-B7', '7'),
(98, 'Strategic Management and Performance Management System for Start-Up: A Case Study of Advanced Material Technology Venture', 'Anisa Azizah', 'ICMEM-B7', '12'),
(99, 'Instagram Content Strategy for Branding and Engaging Customer using Analytical Hierarchy Process (Case Study: Dhys Daily - Cloth', 'Diah Yuniasari', 'ICMEM-B7', '15'),
(100, 'Proposed Marketing Strategy to Develop New Market (Case: PT Nusakarya Indo Makmur)', 'Michael Alvian Aliwarga', 'ICMEM-B7', '21'),
(101, 'Evaluation of Investment in IoT Startup at PT TMI', 'Wiwit Hermawan, Kin Tjendrasa', 'ICMEM-B7', '77'),
(102, 'Developing an Online Media Solution for Home Design and Construction, Case Study: Melbuild', 'Imelda', 'ICMEM-B7', '89'),
(103, 'Training Program as Moderator Effect of Entrepreneurial Leadership, Technology Innovation and Total Quality Management on SME Pe', 'Naema Omar, Azlinzuraini Ahmad', 'ICMEM-B7', '255'),
(104, 'Multi-Criteria Decision-Making Model on Investment Portfolio Prioritization in PT Krakatau Steel (Persero), Tbk: An Analytic Hie', 'Aditya Tejo Widagdo, Yos Sunitiyoso', 'ICMEM-B8', '18'),
(105, 'Proposed Business Strategy For Retail Marketing Directorate of PT Pertamina (Persero)', 'Daniel', 'ICMEM-B8', '26'),
(106, 'Proposed Business Strategy For BPRS Fajar Sejahtera Bali', 'Deri Meidian Ramdhani, Suryani Siddik Motik', 'ICMEM-B8', '64'),
(107, 'Investment Company and Investment Manager: Investment Fund Structures in Indonesia, Study Case: FAM Investment', 'Ilham Dhiaputra, Erman Arif Sumirat', 'ICMEM-B8', '75'),
(108, 'Proposed Improvement Strategy for Subscription-Based Digital News Company; Study of Permindo.Com', 'Rikordias Dominius', 'ICMEM-B8', '114'),
(109, 'What Kind of Coffee Concentrate Product Do You Like? A Study of Consumer’s Preference and Purchase Intention Towards Mosey Coffe', 'Livia Rosti Fahriani', 'ICMEM-B8', '183'),
(110, 'Strategic Analysis of Corporate Venture Capital Units as Innovation-Arm for Parent Company Using Open Innovation Method', 'Herdi Sularko, Dina Dellyana', 'ICMEM-B8', '185'),
(111, 'Proposed Marketing Strategy for Material Handling Product in Indonesia', 'Muhammad Aditya Ramadhan, Satya Aditya Wibowo', 'ICMEM-B8', '198'),
(112, 'Capital Budgeting Analysis for High Capital Requirement Project in Equity-Constrained Company (Case Study of Coal Washing Plant ', 'Okky Warman, Yunieta Anny Nainggolan', 'ICMEM-B8', '279'),
(113, 'Strategic Sourcing’s Decision Making of Chemical Supply in The Upstream Oilfield Services Company', 'Abdurahman Alatas, Yos Sunitiyoso', 'ICMEM-D8', '13'),
(114, 'Designing Service Assurance Business Process to Accelerate the Pace of Time-to-Market Transition: A Telkom’s Internet-of-Things ', 'Alfi Nurhafid', 'ICMEM-D8', '35'),
(115, 'Blue Ocean Shift Strategy of PT Citilink Indonesia', 'Venesia Ayu Rahmawati, Yudo Anggoro', 'ICMEM-D8', '38'),
(116, 'Developing A Marketing Strategy A Start-Up Business Case of Masbro Studio', 'Herdiana Wiyono, Iriawan Alex Ibarat', 'ICMEM-D8', '104'),
(117, 'Reinventing Business Model of Bigmedia Group in Digital Era', 'Maftuh Ihsan', 'ICMEM-D8', '251'),
(118, 'Business Strategy for Sustainable Growth (Case Study of a Software Development Company)', 'Aunurrahman Prio Aji', 'ICMEM-D8', '259'),
(119, 'Business Strategy For Payment Switch Service of PT Jaringan Transaksi Elektronik Indonesia in The Indonesia National Payment Gat', 'Aulia Rinata, Agung Wicaksono', 'ICMEM-D9', '8'),
(120, 'New Business Strategy of PT. GASCOMP to Improve Their Sales and Profit in The Future', 'Heru Derajat', 'ICMEM-D9', '10'),
(121, 'New Business Strategy of PT XYZ in Order to Gain Competitive Advantage in Polyethylene Products', 'Stefany Simanjuntak, Anh Dung Do', 'ICMEM-D9', '11'),
(122, 'Strategic Responses to Encounter Revolution Industry 4.0: An Empirical Research For Japan Auto-Part Company', 'Vinny, Adirizal Nizar', 'ICMEM-D9', '24'),
(123, 'New Marketing Strategy to Increase Sales in The Digital Transformation Competition in Indonesia', 'Ivory Rachmalia Beskarina', 'ICMEM-D9', '50'),
(124, 'Proposed Marketing Strategy for IKO Catering & Wedding Package', 'Muhammad Anandha Ramadhan, Satya Aditya Wibowo', 'ICMEM-D9', '56'),
(125, 'The Use of MVP Approach in Rugged Menswear E-Commerce Based in Bandung: Study Case Selected Goods', 'Muhammad Berdauno', 'ICMEM-D9', '275'),
(126, 'Project Management Office Evaluation in Project Unit at Indonesian Telecommunication Company', 'Dafry Reksavagita, Rudy Bekti', 'ICMEM-D10', '22'),
(127, 'Development of Social Media Marketing Strategy for Apparel Rental Business (Case Study: Gemala Atelier)', 'Kemala Putri, Nazmi Fathnur Ahmad', 'ICMEM-D10', '80'),
(128, 'Marketing Strategy Using Mobile Apps to Increase Brand Advocacy For DFSK Indonesia', 'Lucky Wibisono', 'ICMEM-D10', '101'),
(129, 'Developing PASMA Instagram Content Strategy', 'Fitria Ghaisani', 'ICMEM-D10', '184'),
(130, 'Linguistic Study: The Relationship of Words and Meaning in Acehnese Language, Gayo Language and Alas Language', 'Juni Ahyar', 'ICMEM-D10', '284'),
(131, 'Proposed Employer Branding Strategy to Leverage the Attractiveness of the Organization and Intentions of Word-Of-Mouth (Case: CO', 'Armeyditta Willia Abdullah, Dina Dellyana', 'ICMEM-D10', '296'),
(132, 'Influencing Factors of Employer Attractiveness Towards Intention to Apply for a Job of Generation Z Digital Talents to Digital T', 'Putu Yusa Abdi Dharma', 'ICMEM-A1', '70'),
(133, 'Negotiation Support System for Dilemma Analysis in Conflict Dynamics: Implementation of REDD+ in Indonesia', 'Ilham Nugraha, Pri Hermawan', 'ICMEM-A1', '155'),
(134, 'Analyzing How Spiritual Intelligence Affecting Stress Coping in Stress Management', 'Irenne, Anggara Wisesa', 'ICMEM-A1', '217'),
(135, 'Determinants of Pro-environmental Behaviour Among Students', 'Fadzil Dhiya Hillman, Yusliza Mohd Yusoff, Ngah Abdul Hafaz', 'ICMEM-A1', '221'),
(136, 'The Crucial Antecedents of Family-Work Conflict and The Impact on Work Stress Among Millennial Female Employees in Indonesia: An', 'Dina Rizki, Anggara Wisesa', 'ICMEM-A1', '250'),
(137, 'Evaluating Leadership in OSKM ITB 2019 Committee Using the Contingency Approach', 'Dhea Meirizka', 'ICMEM-B1', '74'),
(138, 'Analyze the Underlying Reason of Undergraduate Students of Management ITB Class of 2020 in Using Digital-Based Platform to Devel', 'Nadira Anggita Arbarani, Donald Crestofel Lantu', 'ICMEM-B1', '108'),
(139, 'Assessment for Human Capital, Big Data Implementation, and Leadership Readiness For Industry 4.0 in Brins General Insurance', 'Reihan Fahrurizal, Achmad Fajar Hendarman', 'ICMEM-B1', '111'),
(140, 'The Role of Personality and Perceived Organizational Support on Employee Voice Behavior in Public Sector', 'Gita Rousica Hadi, Riani Rachmawati', 'ICMEM-B1', '147'),
(141, 'Designing Training Program to Solve Competencies Gap in Non-Managerial Level, Low Management Level, and Middle Management Level ', 'Maharani Gitaastuti', 'ICMEM-B1', '168'),
(142, 'Analyzing StudentsCatalyst Training Performance using Kirkpatrick 4 Level Assessment Framework', 'Akhmad Rizqatha Ramadhan', 'ICMEM-B1', '172'),
(143, 'Mapping The Use of Big Data Analysis, Human Capital, and Organizational Culture in Industry 4.0 Era', 'Achmad Fajar Hendarman, Sofi Hanifah Hermawan, Astrid Alfina Primatasya, Farrah Aisya Miftah, Azzahra Nabilla Sufiadi', 'ICMEM-C1', '32'),
(144, 'Justice in Organizations and Its Impact on Organizational Citizenship Behavior: Moderating Role of Perceived Organizational Supp', 'Muhammad Imran Tanveer, Yusliza Mohd Yusoff', 'ICMEM-C1', '227'),
(145, 'Pro-Environmental Behaviour in The Workplace', 'Yusliza Mohd Yusoff, Nik Sarah Athirah Nik Afzan, T. Ramayah, Khalid Niazi, Zikri Muhammad', 'ICMEM-C1', '229'),
(146, 'Conceptualising The Antecedents of Employee Green Behaviour Using Modified Theory of Planned Behaviour', 'Olawole Fawehinmi, Zaleha Mohamad', 'ICMEM-C1', '258'),
(147, 'The Correlation Between Job Crafting and Work Engagement in Manufacturing Companies in Indonesia', 'Donafeby Widyani', 'ICMEM-C1', '269'),
(148, 'Employee Experience Retention Strategy During The COVID-19 Pandemic (Case Study: Company \"KG\")', 'Nadhira Tasya, Yudo Anggoro', 'ICMEM-C1', '297'),
(149, 'Maturity Assessment of Knowledge Management Strategy & Implementation at A Multinational Telecommunication Company', 'Dinda Sekar Putri', 'ICMEM-D1', '51'),
(150, 'Model Development and Measurement of Human Capital Aspect of Digital Capability Readiness Case Study PT. Telkom Indonesia TREG I', 'Ezra Hizkia Nathanael, John Welly', 'ICMEM-D1', '139'),
(151, 'Union Citizenship: A Furtive Spirit of Positive Peace Towards Industrial Peace', 'Noel Santander, Josephine Prudente', 'ICMEM-D1', '212'),
(152, 'A Concept Paper on The Impact of Job Embeddedness, Personality, Person-Job Fit on Turnover Intention Among Academic Staff', 'Noor Azlina Yusoff, Yusliza Mohd Yusoff', 'ICMEM-D1', '226'),
(153, 'Relationship Between University Environment, Psychological Adjustment, and Academic Performance of International Students’ in Ma', 'Jacia Afrin Bristi, Yusliza Mohd Yusoff, Abdul Hafaz Ngah', 'ICMEM-D1', '254'),
(154, 'Designing Gamification Using Bartle Persona and Octalysis Framework For Learning Management System at PT Berau Coal', 'Junialdi Dwijaputra, Ira Fachira, Cahyo Andrianto', 'ICMEM-D1', '292'),
(155, 'Cultural Intelligence, Cultural Dimension, and Knowledge Sharing: Another Story', 'Anggara Wisesa, Prameshwara Anggahegari, Ruspita Rani Pertiwi', 'ICMEM-D1', '294'),
(156, 'An Analysis of A Survey on Residents Awareness of Disaster Prevention Using the Resilience Assessmentt Grid (The RAG)', 'Hiroyuki Masuda', 'ICMEM-D2', '17'),
(157, 'Job Embeddedness as a Mediator for Intention to Remain Among Academicians', 'Yusliza Mohd Yusoff, Nora? Aini Ali', 'ICMEM-D2', '193'),
(158, 'Modelling the Effect of Perceived Organizational Climate, Perceived Organizational Support, Peer Group Interaction, and Supervis', 'Juhari Noor Faezah, Yusliza Mohd Yusoff, M. Imran Tanveer, T. Ramayah, Nora? Aini Ali, Noor Maizura Mohamad Noor', 'ICMEM-D2', '196'),
(159, 'Integrative Literature Review of Agile Transformation Challenges Mapped on Schneider Culture Model', 'Fairuuz Xaviera, Achmad Fajar Hendarman', 'ICMEM-D2', '238'),
(160, 'An Empirical Study on The Telecom Sector of Pakistan: Mediating Role of Organizational Citizenship Behavior in Perceived Organiz', 'Muhammad Umar, Yusliza Mohd Yusoff', 'ICMEM-D2', '240'),
(161, 'Conceptual Paper on Understanding Job Stress Among the Civil Servants in The Malaysia Federal Public Sector', 'Rohana Ahmad, Wan Naqiah Wan Abdul Majid', 'ICMEM-D2', '281'),
(162, 'Analyzing the Partnership Program Effectiveness in Developing the Pass Debt Development Partner (Case Study: Regional V of PT. X', 'Gina Amalia, Liane Okdinawati', 'ICMEM-A5', '61'),
(163, 'Analysis of Inventory Management System at A Hospital Pharmacy', 'Monicha Rosana Tirza, Mursyid Hasan Basri', 'ICMEM-A5', '116'),
(164, 'Quality and Cost Analysis for Dengue Fever BPJS Patients at RSIA Zainab', 'Karina Indra', 'ICMEM-A5', '130'),
(165, 'Improving Inventory Management Policy: Case Study Boenkus', 'Dianita Allysia Hadi, Yuliani Dwi Lestari', 'ICMEM-A5', '161'),
(166, 'Agriculture Supply Chain Resilience during COVID-19 Pandemic in Indonesia', 'Modesta Mevi, Yuanita Handayati', 'ICMEM-A5', '282'),
(167, 'Optimizing Inventory Management of PT Sam Adi Karya by Demand Forecasting and Inventory Policy', 'Zimmy Ashidiqi, Yuliani Dwi Lestari', 'ICMEM-A5', '285'),
(168, 'Gap Analysis on Sustainable SCOR Model Derived from EU RED II and ISPO 2015', 'Aninda Annisa, Yuanita Handayati', 'ICMEM-A5', '290'),
(169, 'The Effect of Marketplace Towards Financial Inclusion in Bandung Undergraduate Students', 'Gorank Raymuna Pardamean Purba, Sylviana Maya Damayanti', 'ICMEM-A6', '63'),
(170, 'Analysing The Financial Performance of PT Phapros Tbk Against Other Pharmaceutical Companies', 'Aisyah Febri Hanaan, Sylviana Maya Damayanti', 'ICMEM-A6', '72'),
(171, 'The Implications of Digital Maturity on Financial Performance: Evidence from Indonesian Public Companies', 'Erlangga, Subiakto Soekarno', 'ICMEM-A6', '73'),
(172, 'Financial Feasibility Study of PT XYZ New Machine Investment', 'Amanda Aulia Hanggoro, Mandra Lazuardi Kitri', 'ICMEM-A6', '91'),
(173, 'Analyzing Performance of Technical Analysis Indicator Between Ema, Sma, Macd, and Triple Screen in Three Stock Market Condition ', 'Andreas Cornelius Purba', 'ICMEM-A6', '94'),
(174, 'Impact of Stock Repurchase Announcement on Market Reaction: Study for Indonesia Stock Exchange 2015-2019', 'Cristian Eliezer Manurung, Mandra Lazuardi Kitri', 'ICMEM-A6', '97'),
(175, 'The Impact of Political Influence on Financial Flexibility: Evidence from Indonesia', 'Charles Vincent, Yunieta Anny Nainggolan', 'ICMEM-A6', '99'),
(176, 'Does Risk Disclosure Affect Investment Efficiency? Study of Publicly Listed Firms in Kompas 100 Index', 'Raisa Soraya Anjani, Yunieta Anny Nainggolan', 'ICMEM-A7', '106'),
(177, 'Corporate Social Media Engagement and Dividend Payout Policy of Indonesia Listed Firms', 'William Suryajaya Eltanto, Yunieta Anny Nainggolan', 'ICMEM-A7', '113'),
(178, 'Cryptocurrencies for Alternative Investment in Indonesia', 'Nashrullah Putra Sulaeman, Subiakto Sukarno', 'ICMEM-A7', '121'),
(179, 'Assessing Strategy Value of PT XYZ Portfolio Which Synergize With PT XYZ Parent Firm', 'Ayunindya Pawestri, Mandra Lazuardi Kitri', 'ICMEM-A7', '124'),
(180, 'Economic Feasibility Study of Bit.33 Space: A Co-Working Space in Bandung', 'Monika Adelia, Arson Aliludin', 'ICMEM-A7', '129'),
(181, 'Comparative Analysis of Takaful and Conventional Insurance in Indonesia Throughout 2015-2018 using Two-Stage Data Envelopment An', 'Anggito Zainul', 'ICMEM-A7', '150'),
(182, 'The Application of Optimal Control in Macroeconomics Dynamic Analysis', 'Barick Setiawan, Roberd Saragih', 'ICMEM-C4', '36'),
(183, 'Analysis of Relationship between Land and Building Tax Exemption for Rural and Urban (PBB-P2) With Tax Compliance, Land and Buil', 'Endang Malau, Yulianti Abbas', 'ICMEM-C4', '144'),
(184, 'How Does Investor Recognition Mediate the Relationship Between Corporate Social Responsibility Disclosure and Firm Value?', 'Muhammad Hafizh Ridha', 'ICMEM-C4', '145'),
(185, 'Characteristics of Directors and Environmental, Social and Governance (ESG) Disclosures', 'Nadia Triwahyuni, Aria Farahmita', 'ICMEM-C4', '146'),
(186, 'Online Incubator: A Solution to Find The Value of Startups', 'Dwi Al Aji Suseno, Yunieta Anny Nainggolan', 'ICMEM-C4', '206'),
(187, 'The Impact of Dependence and Integration to Financial Performance Through Trust as Mediating (Study on MSME Using Janio Indonesi', 'Kristian Heri Utomo, Ratih Hendayani, Astri Ghina, Yuvaraj Ganesan', 'ICMEM-C4', '230'),
(188, 'Adaptive Model Hypothesis As An Evolutionary Predictive on Market Efficiency: An Insight Loop', 'Nor Haryanti Md Nor, Nurasyikin Jamaludin', 'ICMEM-C4', '263'),
(189, 'The Effect of Cash from Operating Activities to Stock Return Predictors', 'Muchamad Adittya', 'ICMEM-C4', '302'),
(190, 'Monetization of Passengers of Transjakarta as New Digital Revenue Stream Through Establishment of Digital Business Platform', 'Seno Soemadji', 'ICMEM-C5', '55'),
(191, 'Learning Maturity of Enterprise Risk Management and Firm Value Evidence: Germany', 'Risnawati Ramli, Chaerul D. Djakman', 'ICMEM-C5', '133'),
(192, 'Business and Trade Policies During Covid-19 Pandemic: A Cross-Country Web-Based Comparative Analysis', 'Wawan Dhewanto, Lik Gayantini, Tribowo Rachmat Fauzan', 'ICMEM-C5', '158'),
(193, 'The Effect of Client Importance on Audit Quality', 'Resmi Afifah Fadilah', 'ICMEM-C5', '164'),
(194, 'The Effects of Financial Status on Investment Decision: An Investigation Among Indonesian Millennials', 'Ivan Butar', 'ICMEM-C5', '260'),
(195, 'Effect of Robotics Process Automation on Skills and Job Autonomy of Accountants', 'Jeffrey Aram, Doris Bisnar', 'ICMEM-C5', '262'),
(196, 'Performance Analysis in Relation to IFRS 17 Implementation Within Life Insurance Company; A Case Study of PT Asuransi Jiwa Gener', 'Monika Satmaka', 'ICMEM-C5', '270'),
(197, 'Financial Distress Analysis of Coal Mining Company', 'Fajar Adiwibowo', 'ICMEM-C5', '273'),
(198, 'Organization Visibility and Firm Ownership: Investigation of the Association With Sustainable Development Goals (SDG) Contributi', 'Faris Windiarti, Sylvia Veronica Nalurita Purnama Siregar', 'ICMEM-D5', '52'),
(199, 'Government Outlook: How to Deal With The Inequality Issue Using Macroeconomics Factor in West Java', 'Syarief Abdul Fattahsyah, Sylviana Maya Damayanti', 'ICMEM-D5', '100'),
(200, 'Related Party Transactions, Corporate Social Responsibility, Public Governance and Firm Value: Evidence from ASEAN', 'Kenneth August Sahetapy, Ratna Wardhani', 'ICMEM-D5', '141'),
(201, 'How Socially Responsible Indonesian Companies Are? An Exploration of Determinant Factors', 'Nurul Fatimah, Indra Yudha Mambea', 'ICMEM-D5', '171'),
(202, 'Sustainable Business Practices of Selected Publicly-Listed Commercial Banks in The Philippines and Their Impact on Society', 'Divina Edralin, Ronald Pastrana', 'ICMEM-D5', '225'),
(203, 'Delivering Social Assistance in Pandemic with Optimum Cost and Time using Sweep Method', 'Yosua Eka Putra, Yuanita Handayati', 'ICMEM-D5', '274'),
(204, 'Political Affiliation and Corporate Social Responsibility of Islamic Banks: Evidence from Indonesia vs. Malaysia', 'Raelis Wibisono, Yunieta Anny Nainggolan', 'ICMEM-D6', '98'),
(205, 'Do Reverse Stock Splits Predict Bankruptcy? Case of Indonesia Listed Firms', 'Felix Swarnadwipa, Yunieta Anny Nainggolan', 'ICMEM-D6', '173'),
(206, 'Stock Return Predictor of Indonesian Retail Industry', 'Deina Perwita, Sylviana Damayanti', 'ICMEM-D6', '175'),
(207, 'Financial Feasibility Analysis Of XYZ Company New Branch', 'Christy', 'ICMEM-D6', '237'),
(208, 'Peer to Peer Lending Experience Towards People\'s Investment Decision Making Behaviour in Indonesia', 'Jordi Apriantono', 'ICMEM-D6', '249'),
(209, 'Bank Specific Determinants of Bank Profitability In Indonesia for The Period 2008-2019', 'Muhammad Luthfi Utomo, Achmad Herlanto Anggono', 'ICMEM-D6', '289'),
(210, 'Assessment of Investment Plan and Financing Strategy for Hobbyist-Based Marketplace as a New Business from PT XYZ', 'Putri Nadiya Intan Safira, Mandra Lazuardi Kitri', 'ICMEM-D6', '291'),
(211, 'Influence of European Union’s Palm Oil Boycott on Agribusiness Company Listed in Indonesia and Malaysia Stock Market', 'Alexander Panjaitan', 'ICMEM-D7', '69'),
(212, 'Factors Influencing Individual Financial Decision-Making Behaviour based on Prospect Theory Biases', 'Wendy Anastasia Yeoda', 'ICMEM-D7', '117'),
(213, 'Assessing Financial Performance of PT Blue Bird Tbk Through The Disrupt of Online Transportation', 'Rafif Auzan Hidayat, Sylviana Maya Damayanti', 'ICMEM-D7', '151'),
(214, 'Analyzing The Application of Greenblatt’s Value Investment Strategy in Jakarta Composite Index', 'Rizal Adisaputra, Deddy Priatmodjo Koesrindartoto', 'ICMEM-D7', '153'),
(215, 'Determining The Influencing Factors in Mutual Fund Product Choices', 'Catherine Kasih Adjie Cahyani, Deddy Priatmodjo Koesrindartoto', 'ICMEM-D7', '159'),
(216, 'Selling Price Determination as a Financial Planning for Waste Composter Bin: Case Study of PASMA', 'Ranti Dian Anggraini, Raden Aswin Rahadi', 'ICMEM-D7', '166'),
(217, 'Building a Practice-Oriented Model for Strategic Public Policy Making Process for the National Social Security System in a Compl', 'Iene Muliati', 'IGC-A4', '1'),
(218, 'THE ROLE OF OPENNESS TO CHANGE VALUE SYSTEM AND POSITIVE AFFECT ON PRAGMATIC LEGITIMACY JUDGEMENT: COMPANY FAMILIARITY AS MODERA', 'Airlangga Surya Kusuma', 'IGC-C5', '2'),
(219, 'How Large-established Joint Venture Firm Remain Resilient In Digital Era', 'Moris Krismas Tarigan', 'IGC-A7', '3'),
(220, 'A System Dynamics Approach To Biodiesel Fund Management in Indonesia', 'Fitriani Tupa R Silalahi', 'IGC-A7', '4'),
(221, 'Boosting financial inclusion through social assistance reform: Evidence-based approach in selecting payment system', 'Hilman Palaon', 'IGC-A1', '5'),
(222, 'The Impact of Founder’s Behaviour Traits on SMEs Financial Performance', 'Nakita Gusman', 'IGC-B2', '6'),
(223, 'The Impact of Governmental Announcement and Decisions During COVID-19 Pandemic on Indonesian Stock Price', 'Irshad Adriatama', 'IGC-A2', '7'),
(224, 'Overconfidence Bias of Managers and Debt Decisions in Emerging Market: An Empirical Study', 'Yanri Nur Jannah', 'IGC-C3', '8'),
(225, 'Household finances and well-being in an emerging country: Evidence from Indonesia', 'Aisyah Amatul Ghina', 'IGC-B2', '9'),
(226, 'Observation on Behavioral Finance in Indonesia Stock Exchange Stocks Prices During COVID-19 Pandemic in January – March 2020', 'Eddy Prabowo', 'IGC-B2', '10'),
(227, 'Accommodating Approval Bureaucracy In Oil & Gas State-Owned Enterprise During Pandemic (Case Study: A holding company of Indones', 'Hanto Yananto', 'IGC-A4', '11'),
(228, 'Digital Capability Maturity Model for Outsourcing', 'Ervia Tissyaraksita Devi', 'IGC-A6', '13'),
(229, 'Agent-based model of circular economy concepts implementation in agri-food supply cahin : case of organic fertilizer producer', 'Ruth Nattassha', 'IGC-B7', '14'),
(230, 'How E-commerce becomes a platform of Value Co-destruction: The Relation between Psychographic and Value Co-destruction', 'Farrah Aisya Miftah', 'IGC-A5', '15'),
(231, 'Conceptual Modelling for Net Interest Margin Optiomisation Using System Dynamics', 'Maria Ulfa', 'IGC-A1', '16'),
(232, 'In between of young generations and stock investment', 'Bagus Aditya Nugraha', 'IGC-A2', '17'),
(233, 'Finding workable eradiction measures for illegal gold-mining', 'Ongku P Hasibuan', 'IGC-A3', '18'),
(234, 'Does Combination of Financial Capability, Market Adaptability and Technology Orientation Influence New Product Development in Di', 'Retna Ayu Mustikarini Kencanasari', 'IGC-A8', '19'),
(235, 'Building a Comprehensive Framework for Aligning Business and Information Technology through IT Balanced Scorecard', 'Hardy Santosa', 'IGC-C5', '20'),
(236, 'Building Supply Chain Resilience through Logistics Capabilities: An Agent-based Simulation', 'Rahmi Rahmania', 'IGC-A6', '21'),
(237, 'How Venture Capitals Determines Factors to Funds Startups in Indonesia', 'Abrori NoorEsa', 'IGC-A2', '22'),
(238, 'A Review of the Challenges of Internet of Things Implementation in Organization', 'Eka Yunita Dian Pratiwi', 'IGC-C2', '23'),
(239, 'Assessing Supplier-Customer Co-Creation in Sheet-Steel Company Using DART Model', 'Adinda Farhana', 'IGC-B5', '24'),
(240, 'An Exploratory Case Study: How the Firm Governance Affects the Collaboration Process in Professional Service Firm', 'Budiarso', 'IGC-A4', '25'),
(241, 'Reconceptualizing Entrepreneurship Education \'For\' Entrepreneurship as a Value Orchestration Platform', 'Nazmi Fathnur Ahmad', 'IGC-A3', '26'),
(242, 'Are Islamic Equity Funds fulfill its compliance?', 'Riza Zahrotun Nisa', 'IGC-C3', '27'),
(243, 'Developing Green Business: The Behavioral Intention among Women Entrepreneur in Indonesia', 'Asyiffa Fitri Awallia', 'IGC-B9', '28'),
(244, 'Effect of Payday-Like Platform in Peer-to-Peer Lending\'s Non-Performance Loan (NPL): Evidence in Indonesia', 'Yolli Eka Putri', 'IGC-A1', '29'),
(245, 'Islamic Bank Business Model on Bank Stability and Performance', 'Fakhrana Nadhilah', 'IGC-C4', '30'),
(246, 'Developing Value Co-Creation Platform in Railway Service Indonesia: A Study From Passenger Perspective', 'Retno Widiana', 'IGC-B5', '31'),
(247, 'Developing independent campus through smart learning organization in digital era - a preliminary study', 'Dewi Wahyu Handayani', 'IGC-A3', '32'),
(248, 'Using Framework of Commitment - Trust Theory in Pre-Consumption Stage; Preliminary Study of Collaborative Online Accomodation', 'Anna Riana Putriya', 'IGC-B4', '33'),
(249, 'Addressing The Issue of Turnover Intention In Start-Up: COPSOQ Instrument Perspective', 'Sofi Hanifah Hermawan', 'IGC-C2', '34'),
(250, 'Sovereign Credit Ratings and Policy Implications: Case of Indonesia', 'Firman Darwis', 'IGC-B1', '35'),
(251, 'Gameful Design: A Criteria of Good Gamification', 'Hendarsyah Aditya Saptari', 'IGC-A3', '36'),
(252, 'The Roles of Societal Learning to Improve Public Participation in Municipal Waste Management in Developing Countries: Literature', 'Sunarti', 'IGC-B3', '37'),
(253, 'A Preliminary research of the understansing of \'PSBB\' word networking and sentiment analysis', 'Yulianti', 'IGC-C3', '38'),
(254, 'The Influence of Relational Capital on the Intellectual Capital and Market to Book Ratio in Jordan', 'Kamelia Moh\'d Khier Momami', 'IGC-C4', '39'),
(255, 'Government-Owned Banks Behaviour During Election in Different President Regime: Politically Connected Boards Perspective', 'Renno Prawira', 'IGC-B1', '40'),
(256, 'Adapting soft-system methodology to accommodate community outreach programe into university strategic plan: an experience of an ', 'Muhammad Setiawan Kusmulyono', 'IGC-A8', '41'),
(257, 'What Did The Government Do To Help SME?', 'Ronal Ferdilan', 'IGC-A8', '42'),
(258, 'Entrepreneurial Islamic Leadership in Social Enterprise: A Study Case at Islamic Boarding School Business Unit in West Java', 'Adrian Ariatin', 'IGC-A8', '43'),
(259, 'A Literature Review of Turnover Intention in Relationship with Work Engagement, Organization Justice, and Job Autonomy', 'Yenny Yorisca', 'IGC-C2', '44'),
(260, 'Blockchain technology and the business models: a systematic review', 'Ambara Purusottama', 'IGC-B7', '45'),
(261, 'Improving Marketplace Business Through The Value Co-Creation Process: A Study Cross-Border Marketplace in Indonesia', 'Andi Sigit Trianto', 'IGC-B5', '46'),
(262, 'Scenario Planning for 5G Deployment in Indonesia', 'Sahat Hutajulu', 'IGC-B8', '47'),
(263, 'Assessing the Feasibility of Urban Mining: A System Dynamics Study of Electronic Waste Management in Indonesia', 'Alma Kenanga Attazahri', 'IGC-B4', '49'),
(264, 'The emergence of multicultural characteristics in virtual team', 'Daniel Karim', 'IGC-C1', '50'),
(265, 'Anticipating post-disaster chaos in housing reconstruction process through designing service blueprint', 'Crista Fialdila Suryanto', 'IGC-A5', '51'),
(266, 'Factors Influensing Knowledge Management Implementation in Creative Industries', 'Alexandra Sinta', 'IGC-B3', '52'),
(267, 'Constructing Demand Forecasting Models for Peer-to-peer Accommodation Businesses using Machine Learning Techniques', 'Mochammad Agus Afrianto', 'IGC-A5', '53'),
(268, 'Towards of open-innovation in the urban circular economy: the case study of Kang Pisman initiative in Bandung city', 'Dania Sitadewi', 'IGC-B6', '54'),
(269, 'Evaluation of Warehousing Productivity Performance Indicators by the FAHP Method', 'Nur Hazwani Karim', 'IGC-B6', '55'),
(270, 'An Analysis on Financial System Vulnerability Through National/Regional Financial Account Balance Sheets', 'Darjana', 'IGC-B1', '56'),
(271, 'Digital Transformation on SMEs: Taking Advantage of Digital Business Ecosystem', 'Aisha Salsabila Tisyani', 'IGC-A9', '57'),
(272, 'Can Small Things Make Big Changes? An Exploratory Study of Innovation Path in Internet-of-Things (IoT)-based Businesses: Case St', 'Tribowo Rachmat Fauzan', 'IGC-B8', '58'),
(273, 'Exploring IT Competence, Innovation Capacity and Organizational Agility Relationship', 'Hakiim Rachman Noor', 'IGC-B9', '59'),
(274, 'A Proposed Model of Value Co-Creating through Multi-Stakeholder Collaboration in Domestic Production Development', 'Anggraeni Permatasari', 'IGC-B8', '60'),
(275, 'The Making of Creative City: In Search of a Definition', 'Salfitrie R. M.', 'IGC-A7', '61'),
(276, 'The Barriers of Responsible Agriculture Supply Chain: The Relationship between Organization Capabilities, External Actor involve', 'Irayanti Adriant', 'IGC-B7', '62'),
(277, 'Developing ecosystem based human capital department roles', 'Veronica Afridita Khristiningrum', 'IGC-C1', '63'),
(278, 'Developing Model of Integrative Policy for Truck Sharing Economy Adoption in Trucks Company through Modeling and Simulation', 'Batara Parada Siahaan', 'IGC-B7', '64'),
(279, 'Human capital digital capability model for transforming technology-based holding company', 'Tubagus Arief Fahmi', 'IGC-B3', '65'),
(280, 'MULTI-STAKEHOLDER INNOVATION IN TOURISM INDUSTRY: A LITERATURE REVIEW', 'Roma Nova Cahjati Poetry', 'IGC-A7', '66'),
(281, 'Do we really need to adopt them? Understanding SMEs’ perceptions of implementing emerging technologies in the fashion manufactur', 'Arianne Muthia Zahra', 'IGC-B8', '67'),
(282, 'An Analytical Service Ecosystem of Technology Based Business Incubation Research: Case of Bandung Techno Park', 'Eka Yuliana', 'IGC-B4', '68'),
(283, 'Performance Analysis of Novel Normal Distribution Monte-Carlo Fuzzy Hierarchy Process in the Multi-Criteria Decision Making', 'Fermi Dwi Wicaksono', 'IGC-B4', '68'),
(284, 'What Makes Commercialization of University Research Products Challenging?: Exploration of the Researchers’ Perspective', 'Dyah Putri Puspitasari', 'IGC-A9', '69'),
(285, 'Bridging Individual Adaptive Performance and Learning Process (A Systematic Literature Review)', 'Widya Nandini', 'IGC-C1', '70'),
(286, 'Redefining Sustainable Innovation Transition Framework: How it differs from conventional innovation?', 'Dita Novizayanti', 'IGC-B9', '71'),
(287, 'Does Spin-Off Affect The Efficiency and Stability of Islamic Banking?', 'Rifka Indi', 'IGC-C4', '72'),
(288, 'E-Commerce Performance, Digital Marketing Capability and Supply Chain Capability within E-Commerce Platform: Comparison between ', 'Anna Amalyah Agus', 'IGC-B6', '73'),
(289, 'Service Ecosystem Configuration Process in Trade Show: Case on Toyota Public Display Event in Eastern Indonesia', 'Romi Setiawan', 'IGC-A6', '74');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `idUser` int(128) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `role_id` char(1) DEFAULT NULL,
  `name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`idUser`, `username`, `password`, `role_id`, `name`) VALUES
(1, 'userPRT', '$2y$10$rTfA5MCSPfmBaDA54QNQBO8bFQ16LDLJRLBMybysDT9aOKzf7SHKW', '3', ''),
(2, 'admin', '$2y$10$mkRpElAGLdGTN/659gELfOTfz///HF.ux8BAWPH3FCFrTL8SgJ2zW', '1', ''),
(3, 'clama', '$2y$10$pEhbul0VxRMjyLg23PG3Eu5GLafY9ax4leZ469dz2xDH25syjxL5K', '2', 'clama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workshop`
--

CREATE TABLE `tbl_workshop` (
  `idWorkshop` int(128) NOT NULL,
  `logo` varchar(128) DEFAULT NULL,
  `company` varchar(128) DEFAULT NULL,
  `hyperlink` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meetingTimeStart` time DEFAULT NULL,
  `meetingTimeEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_workshop`
--

INSERT INTO `tbl_workshop` (`idWorkshop`, `logo`, `company`, `hyperlink`, `description`, `meetingTimeStart`, `meetingTimeEnd`) VALUES
(4, 'w3logo.jpg', 'itb', 'https://www.youtube.com/watch?v=9iazB3EYZ2w', 'tessss', NULL, NULL),
(5, 'logo_icm1.png', 'aa', 'aa', 'aa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_baseroom`
--
ALTER TABLE `tbl_baseroom`
  ADD PRIMARY KEY (`baseroomId`);

--
-- Indexes for table `tbl_baseroom_file`
--
ALTER TABLE `tbl_baseroom_file`
  ADD PRIMARY KEY (`baseroomfileid`);

--
-- Indexes for table `tbl_exchibition`
--
ALTER TABLE `tbl_exchibition`
  ADD PRIMARY KEY (`idExchibition`);

--
-- Indexes for table `tbl_exhi`
--
ALTER TABLE `tbl_exhi`
  ADD PRIMARY KEY (`idExhi`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`idInfo`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  ADD PRIMARY KEY (`idMeeting`);

--
-- Indexes for table `tbl_papper`
--
ALTER TABLE `tbl_papper`
  ADD PRIMARY KEY (`idPapper`);

--
-- Indexes for table `tbl_parallel`
--
ALTER TABLE `tbl_parallel`
  ADD PRIMARY KEY (`idParallel`);

--
-- Indexes for table `tbl_participant`
--
ALTER TABLE `tbl_participant`
  ADD PRIMARY KEY (`idParticipant`);

--
-- Indexes for table `tbl_partisipasi`
--
ALTER TABLE `tbl_partisipasi`
  ADD PRIMARY KEY (`idPartisipasi`);

--
-- Indexes for table `tbl_polling`
--
ALTER TABLE `tbl_polling`
  ADD PRIMARY KEY (`idPolling`);

--
-- Indexes for table `tbl_polling_answer`
--
ALTER TABLE `tbl_polling_answer`
  ADD PRIMARY KEY (`idPollingAnswer`);

--
-- Indexes for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  ADD PRIMARY KEY (`idResources`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`idSchedule`);

--
-- Indexes for table `tbl_session`
--
ALTER TABLE `tbl_session`
  ADD PRIMARY KEY (`idSession`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `tbl_workshop`
--
ALTER TABLE `tbl_workshop`
  ADD PRIMARY KEY (`idWorkshop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_baseroom`
--
ALTER TABLE `tbl_baseroom`
  MODIFY `baseroomId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_baseroom_file`
--
ALTER TABLE `tbl_baseroom_file`
  MODIFY `baseroomfileid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_exchibition`
--
ALTER TABLE `tbl_exchibition`
  MODIFY `idExchibition` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_exhi`
--
ALTER TABLE `tbl_exhi`
  MODIFY `idExhi` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `idInfo` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKategori` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  MODIFY `idMeeting` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_papper`
--
ALTER TABLE `tbl_papper`
  MODIFY `idPapper` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_parallel`
--
ALTER TABLE `tbl_parallel`
  MODIFY `idParallel` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_participant`
--
ALTER TABLE `tbl_participant`
  MODIFY `idParticipant` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT for table `tbl_partisipasi`
--
ALTER TABLE `tbl_partisipasi`
  MODIFY `idPartisipasi` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_polling`
--
ALTER TABLE `tbl_polling`
  MODIFY `idPolling` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_polling_answer`
--
ALTER TABLE `tbl_polling_answer`
  MODIFY `idPollingAnswer` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_resources`
--
ALTER TABLE `tbl_resources`
  MODIFY `idResources` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `idSchedule` int(128) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_session`
--
ALTER TABLE `tbl_session`
  MODIFY `idSession` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=448;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `idUser` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_workshop`
--
ALTER TABLE `tbl_workshop`
  MODIFY `idWorkshop` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
