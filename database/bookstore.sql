-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 05:31 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci,
  `book_price` decimal(8,0) NOT NULL,
  `publisherid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisherid`) VALUES
('78-0781760034', 'Neuroscience: Exploring the Brain, 3rd Ed', 'Mark F. Bear, Barry W. Connors, M.A. Paradiso', 'NETB_3rd.jpg', 'Widely praised for its student-friendly style and exceptional artwork and pedagogy, Neuroscience: Exploring the Brain is a leading undergraduate textbook on the biology of the brain and the systems that underlie behavior. This edition provides increased coverage of taste and smell, circadian rhythms, brain development, and developmental disorders and includes new information on molecular mechanisms and functional brain imaging. Path of Discovery boxes, written by leading researchers, highlight major current discoveries. In addition, readers will be able to assess their knowledge of neuroanatomy with the Illustrated Guide to Human Neuroanatomy, which includes a perforated self-testing workbook.', '800000', 31),
('978-0126990577', 'Molecular Medicine, 3rd ed', 'R.J. Trent', 'MM_3rd.jpg', 'Molecular medicine is the application of gene or DNA based knowledge to the modern practice of medicine. This book provides contemporary insights into how the genetic revolution is influencing medical thinking and practice on a broad front including clinical medicine, innovative therapies and forensic medicine. \r\n\r\n* Extensively revised just after the completion of the Human Genome Project, it provides the latest in molecular medicine developments\r\n* The only book in Molecular Medicine that has undergone 3 editions\r\n* Current practice as well as future developments identified\r\n* Extensive tables, well presented figures - resources for further understanding', '750000', 29),
('978-0534401764', 'Introduction to Organic and Biochemistry, 5th ed', 'Bettelheim, Brown, March', 'GC_7th.jpg', 'Over the years Bettelheim,Brown, and March''s INTRODUCTION TO GENERAL, ORGANIC AND BIOCHEMISTRY has become the most respected and best-selling General, Organic and Biochemistry (GOB) textbook on the market. Known for the successful way it meets the needs of students who take this course--from re-entry students to those heading directly into careers in the allied health fields--the book is acclaimed for the way it provides students a solid chemistry foundation that will serve them well long after they leave the course. In this edition, the authors continue the hallmarks that have made their book a classic in the field: a pedagogically rich learning framework; a wide variety of medical and biological applications; a visually dynamic art program, innovative "Chemical Connections" essays that focus on current issues in general organic, and biochemistry; and exceptionally strong and varied end-of-chapter problems. At the same time, they have extended their student focus by providing a greatly expanded interactive CD-ROM, as well as a new "Career Corner" portion on the Book Companion Web site designed to help students make the connections between the chemistry they are learning today and their future careers. This edition gives students a solid foundation of the chemistry of the human body, consistently demonstrating that a strong background in molecular structure and properties leads to better understanding of biochemical interactions. The strength of this book is its readability, its application to normal human biochemical pathways, as well as discussing biochemical conditions present in diseases. The authors provide a unified view of chemistry, frequently using organic and biological substances to illustrate principles of general chemistry.', '400000', 27),
('978-0534407889', 'Chemistry in Focus, 2nd ed', 'Nivaldo J. Tro', 'CiF_2nd.jpg', 'From the opening example to the closing chapter, the Second Edition Update of CHEMISTRY IN FOCUS maintains a consistent focus on explaining the connections between the macroscopic world (what we can see) and the molecular world (what we cannot see). With multi-part images that feature photographs of everyday objects or processes and magnifications that reveal the molecules and the atoms responsible, the book''s "molecular vision" art program is truly unique. In addition, Tro develops students'' appreciation for the fundamental role the molecular world plays in our daily lives and an understanding of how major scientific and technological issues affect our society. With coverage of global warming, ozone depletion, acid rain, drugs, consumer products, and even the infant field of nanotechnology, the book is always contemporary, always fascinating. This Update includes CNN Videos free with every new copy of the text and is now paperbound at the same low price.', '400000', 27),
('978-0534544867', 'Understanding Food Science', 'Peter S. Murano', 'UFS.jpg', 'UNDERSTANDING FOOD SCIENCE AND TECHNOLOGY is a comprehensive introductory level text that provides thorough up-to-date coverage of a broad range of topics in food science and technology. The text begins with an explanation of the interdisciplinary nature of food science (including biology, engineering, chemistry, and physics) and describes avenues of advanced study in the field. The text explores key food commodities and food composition with an emphasis on the functional properties of each commodity. Three chapters on food chemistry cover the chemical and physical properties of foods through the use of many easy to understand figures, tables, and illustrated concepts. Next the text includes an overview of food law that provides historical perspective as well as the latest information on nutrition labeling and food regulation. Thorough coverage of processing methods in included in all major food commodities as well as a background in microbiology and fermentation, food handling and safety, food contamination, HACCP principles and toxicology. The final chapters cover food engineering concepts and applications, biotechnology and the field of sensory evaluation and food product development with coverage of marketing principles.', '400000', 26),
('978-0733977237', 'Fundamentals of Pharmacology, 5th Ed', 'Shane Bullock, Elizabeth Manias, et al', 'FoP_5th.jpg', 'Fundamentals of Pharmacology, 5th edition, presents key scientific and clinical principles to facilitate a greater understanding of pharmacology. This wholly Australasian text provides comprehensive and current coverage of topics, written in a clear style with a reader-friendly design. The fifth edition offers further enhancements to the sophisticated technology package which accompanies the text.\r\n \r\nÂ·         Comprehensive coverage of pharmacology for the needs of nursing and health science students\r\nÂ·         Wholly Australasian text developed over many years to reflect the clinical environment\r\nÂ·         Clear explanations and appropriate writing style\r\nÂ·         A successful blend of theory and practice\r\nÂ·         Clinical Management Tables that provide a step-by-step guide\r\nÂ·         Interactive Companion Website for student self-assessment and review containing the following:\r\no        Section Objectives\r\no        Multiple Choice Questions\r\no        Answers to End-of-Chapter Questions\r\no        Web Destinations\r\no        Quarterly New Drug Updates\r\no        Drug Calculations', '850000', 32),
('978-0805330663', 'Biochemistry, 3rd ed', 'Matthews, Van Holde, Ahern', 'Bcm_3rd.jpg', 'Biochemistry,Third Edition merges a classical organization and presentation with contemporary insight, information, and technology, to make modern biochemistry interesting and accessible to today''s students. Thoroughly updated to include the latest information, perspectives, and experimental techniques, the text is now supported by integrated media resources designed by the co-author Kevin Ahern. Together, the text and media resources provide students and instructors with a doorway to the vast world of biochemistry that is continuously evolving and which greatly exceeds what could be covered in a conventional textbook alone. As in previous editions, the authors introduce nucleic acid structure early (to clarify presentations of protein structure and function), emphasize the experimental roots of biochemistry (past and present), continually emphasize the energy relationships in biochemistry, and take a stepwise approach to complex metabolic pathways. The result is a thorough grounding in biology at the atomic/molecular level. The explosive growth of biochemistry, molecular biology, and biotechnology makes this approach particularly relevant for today''s life science students.', '300000', 25),
('978-0805346657', 'iGenetics, 2nd ed', 'Peter J. Russell', 'iG_2nd.jpg', 'iGenetics: A Molecular Approach reflects the dynamic nature of modern genetics by emphasizing an experimental, inquiry-based approach with a solid treatment of many research experiments. Genetics: An Introduction, DNA: The Genetic Material, DNA Replication, Gene Control of Proteins, Gene Expression: Transcription, Gene Expression: Translation, DNA Mutation, DNA Repair, and Transposable Elements, Recombinant DNA Technology, Applications of Recombinant DNA Technology, Genomics, Mendelian Genetics, Chromosomal Basis of Inheritance,Extensions of Mendelian Genetic Principles, Quantitative Genetics, Gene Mapping in Eukaryotes, Advanced Gene Mapping in Eukaryotes, Variation in Chromosome Number and Structure, Genetic Analysis of Bacteria and Bacteriophages, Regulation Of Gene Expression In Bacteria And Bacteriophages, Regulation Of Gene Expression In Eukaryotes, Genetic Analysis Of Development, Genetics Of Cancer, Non-Mendelian Inheritance, Population Genetics, Molecular Evolution. For all readers interested in learning the central concepts of genetics.', '750000', 30),
('978-0878936403', 'Essential of Conservation Biology, 5th ed', 'Richard B. Primack', 'ECB_5th.jpg', 'Essentials of Conservation Biology, Fifth Edition combines theory and applied and basic research to explain the connections between conservation biology and environmental economics, education, ethics, law, and the social sciences. A major theme throughout the book is the active role that scientists, local people, the general public, conservation organizations, and governments can play in protecting biodiversity, even while providing for human needs. Each chapter begins with general ideas and principles, which are illustrated with choice examples from the current literature. The most instructive examples are discussed in boxes highlighting species and issues of particular significance. Chapters end with summaries, an annotated list of suggested readings, and discussion questions. This new edition comes with summary statements in the text margins, as study aids. Essentials of Conservation Biology, Fifth Edition is beautifully illustrated and now in full color, and is written in clear, non-technical language.', '250000', 24),
('9780618118373', 'General-Chemistry-7th-Edition-by-Darrell-Ebbing-and-Steven-G', 'Darrel D. Ebbing, Steven D. Gammon', 'GCh_7th.JPG', 'Known for its carefully developed, thoroughly integrated approach to problem solving, this market-leading text emphasizes the conceptual understanding and visualization skills essential for first-year chemistry and science majors. The new technology program reinforces the approach of the text and provides a complete solution for teaching and learning.The Eighth Edition retains the hallmark pedagogical features of the text and builds upon the conceptual focus and art program. Students also benefit from online homework in the technology program, which features an extensive database of questions drawn from the text.In order to reinforce major chemical concepts, the authors present a proven six-part approach to problem solving that includes Example, Problem Strategy, Solution, Answer Check, Exercise, and corresponding End-of-Chapter Problems, many of which are presented in matched pairs.The Media Integration Guide for Instructors includes several user-friendly supplements designed to make class preparation, presentation, and course management more efficient and effective: HM ClassPrep/HM Testing CD-ROM; HM ClassPresent CD-ROM with animations; instructor web site access; and information about Eduspace (powered by Blackboard). Eduspace is Houghton Mifflin''s online learning tool. Powered by Blackboard, Eduspace is a customizable, powerful and interactive platform that provides instructors with text-specific online courses and content. This Ebbing et al. General Chemistry course features test bank material for exams, algorithmic in chapter and dynamically generated end-of-chapter homework problems from question pools and access to ACE quiz content for independent practice. For theinstructor, we also provide presentation slides, photos, illustrations, interactive tables and video clips. The Media Guide for Students provides information on and access to multimedia tools that help students visualize chemical concepts and practice problem-solving strategies: SMARTHINKING live online tutoring, student web site with animations, and Student CD-ROM. The guide also includes information about Eduspace (powered by Blackboard).', '700000', 28);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'a', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'b', 'b'),
(3, 'test', '123 test', '12121', 'test', 'test'),
(4, 'Rozali Syahputra', 'jl. Sunan Kalijaga no 35 Malang', 'Malang', '65144', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a'),
(5, 4, '28.47', '2018-05-07 23:08:52', 'Rozali Syahputra', 'jl. Sunan Kalijaga no 35 Malang', 'Malang', '65144', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(5, '978-0534401764', '28.47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisherid` int(10) UNSIGNED NOT NULL,
  `publisher_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisherid`, `publisher_name`) VALUES
(24, 'Sinauer Associates, Inc.'),
(25, 'Pearson'),
(26, 'Cengage Learning'),
(27, 'Brooks Cole'),
(28, 'Houghton Mifflin College Div'),
(29, 'Academic Press'),
(30, 'Benjamin Cummings'),
(31, 'Lippincott Williams and Wilkins'),
(32, 'Pearson Education Australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisherid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
