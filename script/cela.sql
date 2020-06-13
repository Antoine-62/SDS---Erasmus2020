-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 13, 2020 at 10:13 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cela`
--

-- --------------------------------------------------------

--
-- Table structure for table `choose`
--

DROP TABLE IF EXISTS `choose`;
CREATE TABLE IF NOT EXISTS `choose` (
  `IdChoose` bigint(20) NOT NULL AUTO_INCREMENT,
  `NumberLA` int(11) NOT NULL,
  `IdU` bigint(20) NOT NULL,
  `IdC` bigint(20) NOT NULL,
  PRIMARY KEY (`IdChoose`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `choose`
--

INSERT INTO `choose` (`IdChoose`, `NumberLA`, `IdU`, `IdC`) VALUES
(161, 2, 6, 1),
(162, 2, 6, 2),
(163, 2, 6, 3),
(174, 3, 6, 1),
(175, 3, 6, 2),
(176, 3, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `PublicationDate` varchar(20) NOT NULL,
  `PublicationTime` varchar(20) NOT NULL,
  `IdU` int(11) NOT NULL,
  `IdC` int(11) NOT NULL,
  PRIMARY KEY (`idCom`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idCom`, `comment`, `PublicationDate`, `PublicationTime`, `IdU`, `IdC`) VALUES
(29, 'fdvgd', '2020/06/13', '08:14:35pm', 6, 35),
(34, '            mlkjhgf', '2020/06/14', '12:08:32am', 6, 35),
(33, '            lkjhgf\r\n', '2020/06/14', '12:08:26am', 6, 35),
(32, '            lkjh', '2020/06/14', '12:08:18am', 6, 35),
(31, '            coco', '2020/06/13', '11:06:27pm', 6, 35),
(30, '            kjhgf', '2020/06/13', '10:19:32pm', 6, 35);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `IdC` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text,
  `ECTS` int(11) NOT NULL,
  `Semester` int(11) NOT NULL,
  `IdF` bigint(20) NOT NULL,
  PRIMARY KEY (`IdC`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`IdC`, `Name`, `Description`, `ECTS`, `Semester`, `IdF`) VALUES
(1, 'Advanced Internet Applications ', ' Course goals: \r\n1. Obtaining knowledge about the basic concepts and concepts in the field of implementation of web documents and web applications, necessary to distinguish between the basic architectures of web applications and methods of implementing their modules. \r\n2. Organizing knowledge of network architectures, network protocols, security of distributed systems. \r\n3. Acquiring the skills to implement a web application using advanced user interface implementation technologies, including CSS, JavaScript, presentation logic implementation technology, incl. Java servlets, JavaServer Pages, PHP, Active Server Pages, skeletal environments for Single Page Applications, business logic implementation technologies, including JavaBeans, JSF tag libraries. \r\n4. Acquiring social competences regarding team project preparation, including organization of teamwork, especially leadership and communication skills in the process of group problem solving. \r\n', 4, 8, 1),
(2, 'Basic Electronics ', 'Course goals: \r\n1. Provide students with basic knowledge of construction, analysis, computer simulation and design of electrical and electronic systems in the field of analogue systems, as well as partially digital systems and methods of measurement of these electrical signals. \r\n2. Developing students\' skills to solve simple problems related to the operation of devices and components of analog and digital electronics.\r\n 3. Developing students\' teamwork skills by showing the necessity and possibilities of team development of complex designs of analog and digital electronic circuits using CAD techniques. \r\n', 5, 8, 1),
(3, 'Low-level programming in C ', 'Course goals: \r\n1. Providing students with basic knowledge of system programming at the C language level and familiarizing them with theoretical and practical problems related to programming methodology in that language.\r\n 2. Developing students\' skills to solve simple problems and construct simple algorithms. \r\n', 3, 8, 1),
(4, 'IT in Administration ', 'Course goals: \r\n1. To provide students with knowledge of IT systems used in administration, with particular emphasis on systems used at universities. \r\n2. To provide students with knowledge about the creation of IT systems created to meet specific needs and intended for a specific user group. \r\n3. To develop students\' skills in software engineering, with particular emphasis on creating systems architecture. \r\n4. To develop students\' skills in solving problems related to using IT systems in administration.\r\n', 3, 8, 1),
(5, 'Software Design and Modeling', 'The program of the lecture: The concept of objects and object-oriented perception. Mechanisms of object-oriented programming. Object-oriented languages vs. object-oriented design. Roles of different types of objects in design. Criteria for evaluation of object-oriented design. Metrics and their interpretation. Unit testing. Mock objects. Design patterns – idea, description, categories. Overview of the catalogue of design patterns, with description of goal, description, participants and consequences – for each of them. The code decay phenomenon – reasons, symptoms, consequences. High-level evaluation of design quality with code smells. Methods of identification of code smells. Overview of selected refactorings. Verification methods of refactorings. Aspect-oriented programming and its implementation in different technologies. AspectJ as an aspect-oriented language. Inversion of Control and Dependency Injection. The course consists of fifteen 2-hour laboratory classes and it starts with an instructional session at the beginning of a semester. Students work individually or in teams of 2-4. The program of laboratory classes: Creating preliminary design with CRC cards. Analysis and evaluation of the CRC design. Assigning responsibility to objects. Measuring software with OO metrics. Analysis and interpretation of OO metrics. Implementing unit tests. Applying mock objects in unit tests. Selection and application of appropriate design patterns in design problems. Identification of code smells in code. Comparison of metrics and code smells as tools for evaluation of design quality. Applying software refactorings (both manually and with tools support). Implementation of a simple aspect-oriented program and use of selected capabilities of AspectJ. Design and implementation of a simple program based on a Inversion of Control concept.', 4, 8, 1),
(6, 'New Trends in Multimedia Technologies', 'Topics: \r\n- Defining multimedia \r\n- Tracking new trends in multimedia \r\n- AI Ethics - Multimodality vs. multimedia in XXI century \r\n- Augmented reality and limits of multimedia development \r\n- Multimedia and Internet of Things \r\n- Multimedia in the promotion of the institution \r\n', 3, 8, 1),
(7, 'Fundamentals of Immunology and Immunoche', 'To obtain basic knowledge about the immunochemical reaction, reaction between the antigen and specific antibodies, how this highly specific reaction is perfectly exploited in many variants of immunoanalytical techniques. Also to obtain the principal knowledge about the human immune system, specific blood cells, molecules synthetized by lymphocytes; how they react to the presence of antigen recognized by organism, its immune system as dangerous.\r\n\r\n', 4, 8, 3),
(8, 'Pharmacochemistry', 'Object of pharmaceutical chemistry, basic notions - pharmacology, pharmacognosy, galenic pharmacy, medicinal drug, form of medicinal drug. Basic principles of general pharmacology - way of administration, fate of drug in organism: absorption, transport and distribution, metabolism (bio-transformations - oxidation, reduction, hydrolysis, conjugation, non-enzymatic transformations), excretion.\r\n\r\nEffects of medicinal drugs - specific and non-specific effect - relationships between structure and effect. Problems of research and development of new pharmaceuticals. European and Czech Pharmacopoeias, classification of drugs from pharmacological standpoint. General anaesthetics - mechanism of action. Syntheses of fluorine-containing inhalation anaesthetics (halothane), general intravenous anaesthetics (thiopental). Hypnotics and sedatives - effect and application. Syntheses of selected hypnotics of the 1st to 3rd generations.\r\n', 5, 8, 3),
(9, 'English', 'blabla', 15, 8, 7),
(10, 'Communication in company', 'blabla', 20, 8, 7),
(11, 'Computer Graphics and Visualization ', 'Course goals: \r\n1. Provide students the basic concepts and definitions related to computer graphics. \r\n2. Provide students the knowledge of mathematical basics of 3D graphics. \r\n3. Provide students the knowledge of 3D object animation methods. \r\n4. Provide students the knowledge of shading models and hidden surface removal. \r\n5. Provide students basic knowledge related to raster based computer graphics algorithms, halftone approximation algorithms and planar clipping algorithms. \r\n6. Provide students knowledge in the field of modelling of curves and curvilinear surfaces in computer graphics. \r\n7. Provide students the basic knowledge in the field of data visualization. \r\n8. Develop students’ computer graphics application programming skills by introducing popular computer graphics libraries. \r\n', 2, 8, 1),
(12, 'Interpersonal Communication', 'Course description Communication: theories and its meaning. Different kinds of Communications. Oral language: Verbal and non-verbal communication. Public speaking : different kinds of speech, ways of preparation. Active listening. Negotiations. Written language: Writing summaries, reports, research papers in English. Principles of correct communication in business. ', 2, 8, 1),
(13, 'Project management ', 'Course goals: \r\n1. Provide knowledge regarding software engineering related to project management. \r\n2. Develop students’ skills in solving problems related to software project management. Within the course, the main focus is on developing student’s skills related to planning and management of construction stages (so called releases), closing-up a project, and transition of project outcomes. \r\n3. Develop students’ teamwork skills. Course description The course covers topics related to management of IT projects according to the PRINCE2 methodology and agile methods, e.g., eXtreme Programming or Scrum. \r\nThe following topics are covered by the lectures: \r\n• business case, \r\n• project team structure (steering committee, responsibilities of the project roles); \r\n• software project life cycle (starting-up a project, initiating a project, management of stages, closing-up a project); \r\n• quality management in PRINCE2; \r\n• project and stage planning; \r\n• risk management; \r\n• monitoring the progress; \r\n• controlling a stage. The following topics are covered by the tutorials: \r\n• overview of Outline Business Case; \r\n', 4, 8, 1),
(14, 'Software Development Studio 1 ', 'Course goals: \r\n1. Provide knowledge, supported with the presentation of real cases, regarding software engineering related to software project management, requirements engineering, software architecture, which is necessary to fulfill the roles of: project manager, analyst, architect, \r\n2. Develop students’ skills in solving problems related to software project management, requirements engineering, and software architecture by involving students in a software project developed for a real customer. Within the course, the main focus is on developing student’s skills related to preparation of project assumptions, initiation of a project, elicitation and analysis of requirements, development of software requirements specification, and design and documentation of software architecture. \r\n3. Develop students’ teamwork skills. \r\n', 6, 8, 1),
(15, 'Technologies of Software Development', 'Course goals: \r\n1. Provide students knowledge regarding Python programming language, creating websites using Django framework, natural language processing \r\n2. Develop students’ skills in solving problems related to creating application using Python \r\n3. Present students a set of development technologies for modeling data layer, designing interface layer, defining communication layer between several applications \r\n4. Develop students’ teamwork skills in the context of developing software systems Course description The program of the lecture: Introduction to Python programming language with demonstration of its application areas. Presentation of the language syntax with highlighted differences between other languages as Java and C. Demonstration of example programs and common errors made by developers. Code documenting. Regular expressions in Python. Description of Python libraries’ compatibility with Posix standard. Applying Python to creating web pages using Django framework. Description of application lifecycle, data model and rules of generating views. Creating generic webpage templates using Django and its influence on server performance. Description of optimization techniques for static data. Advanced programming techniques in Python, such as the lambda keyword, enrichment object with new functionality and operations on sets of data. Introduction to the analysis of natural language using the Natural Language Toolkit library (NLTK). Presenting ideas and basic operations on the text. The introduction of the tool and its capabilities. Creating graphical applications using PyGTK library. Discussion of the differences between the use of RAD tool for creating applications and the creation of the GUI from the code. Overview of technologies for creating data model layer. Overview of technologies for creating communication between applications. Overview of the visual technologies for creating user interfaces. The course consists of fifteen 2-hour laboratory classes and it starts with an instructional session at the beginning of a semester. Students work individually or in teams of 2-4. The program of laboratory classes is following: Presentation of sample programs in Python. Creating different types of programs in order to practice the syntax and commands. Presentation of projects to be implemented. Exercise of documenting code. Creating regular expressions. Using expressions for common tasks (text search, validate data entered by the user). Techniques for improving application performance using regular expressions. Creating projects and applications in Django framework. Using regular expressions to control the flow of HTTP requests. Generating simple web sites. Presentation of projects to be implemented . Using generic templates to increase code reuse and improve performance of web applications. Presentation of code allowing to increase the efficiency of programs written in Python. Analysis of the text using the NLTK library. Exercises with sentence dissection, analysis of sentence parts, providing modifications to sample sentences. Using Wordnet and PlWordnet databases. Presentation of projects to be implemented. Creating applications using the GTK+ library. Creating a data model layer. Developing applications that communicate with other using learned technologies. \r\n', 6, 8, 1),
(16, 'Database Performance', 'Course goals: \r\n1. Provide students with knowledge regarding database server performance evaluation and management techniques. \r\n2. Develop students’ skills in solving problems related to performance issues in database applications. Course description Lectures’ curriculum covering the following topics: Introduction to Oracle Database server internal architecture. Memory buffers: Buffer Cache, Library Cache, Query Results Cache, Redo Log Buffer. Oracle Database server administration fundamentals. Cost-based query optimization: accessing query execution plans, query transformations, evaluating costs of query execution plans, statistical models, query optimizer hints. Introduction to database server performance tuning. Response time modeling. Response time components: server activity, wait events. Tools and techniques for Oracle Database server performance monitoring: dynamic performance views, Statspack, AWR, ADDM. Physical structures for data storage. Storage allocation. Tablespaces, segments, partitions, extents, data blocks. Physical structures for efficient query execution. Index classification: B*-tree indexes, bitmap indexes, reversed key indexes, compressed indexes, function-based indexes, bitmap join indexes, partitioned indexes. Materialized views and automatic query rewriting. Using bind variables in SQL queries. TPC Benchmarking. Laboratory classes: fifteen 90-minutes blocks, conducted in a lab room, 2-hour introduction at the beginning of the semester. Students solve tasks individually. Laboratory classes curriculum covering the following topics: Installing and configuring Oracle Database server software. Basic database administration tasks. Analyzing query execution plans generated by the cost-based query optimizer. Gathering and refreshing optimizer statistics. Influencing query execution plans. Using bind variables in SQL queries. Planning and building index structures to improve query performance. Managing memory buffers. Tools for database server performance monitoring. Using materialized views and automatic query rewrite. Performance management for database backup and recovery operations. Workshops on identifying/diagnosing performance problems and resolving the performance problems by using indexing, partitioning, materialization, buffering and query transforming.\r\n', 6, 8, 1),
(17, 'Analytical Chemistry I', 'Introduction to chemical analysis. Review of tests for qualitative inorganic analysis. Quantitative analysis. Gravimetric methods of analysis. Titrimetric methods and their theroretical background. Neutralization titrations. Titrations based on oxidation-reduction reactions. Precipitation titrations. Complex formation-based titrations. Titrations based on other principles. Errors in chemical analysis; statistical evaluation of analytical data.', 2, 8, 3),
(18, 'Chemical Technology of Inorganic Compounds', 'After completing this course, students know the fundamental properties of inorganic compounds and are familiar with the process of industrial production (chemical-engineering operations, physico-chemical conditions). Students understand the technological schemes.', 4, 8, 3),
(19, 'Properties of Inorganic Pigments', 'Students make the acquaintance of problems concerning inorganic pigments, their properties and production including theoretical principles of their synthesis.', 6, 8, 3),
(20, 'Text and Image Processing I', 'Course is suitable for students with background in Printing Technologies, Graphic Arts and related technological areas.', 6, 8, 3),
(21, 'Advances in Printing Technology', 'Course is suitable for students with background in Printing Technologies, Graphic Arts and related technological areas.\r\nThe lectures are intended to introduce the innovations and speciality technologies in the printing and packaging industry. The indicative content is being adjusted with the development of printing techniques in printing industry.\r\n', 6, 8, 3),
(22, 'Architectural graphics', 'Architecture we were told about various techniques of manual graphics. Students also performed exercises and did RGR', 4, 8, 2),
(23, 'Architectural construction', 'To properly design a building, the architect must know what design solution is appropriate for a particular project. Also, depending on the design, the project itself may be slightly modified.\r\n\r\n', 6, 8, 2),
(24, 'Architectural composition ', 'Architectural composition. Teaches the harmonious combination of various elements in one composition. Simply put, it teaches that the window will look beautiful in the tower. And even better, if the same Windows are repeated under it after a certain distance, but slightly increased in size.', 3, 8, 2),
(25, 'Architectural ergonomics ', 'Architectural ergonomics. It teaches you to conveniently place all the elements of the architectural environment that a person will interact with in one way or another.', 4, 8, 2),
(26, 'Architectural layout ', 'Architectural layout. You need to be able to show your idea not only on the computer, but also in the real world. So you can touch it.', 2, 8, 2),
(27, 'History of architecture and urban planning', 'History of architecture and urban planning, as well as art history.', 4, 8, 2),
(28, 'Architectural materials science ', 'Architectural materials science. There, students study the properties of various materials and their applications.', 5, 8, 2),
(29, 'Architectural design', 'One of the most important subjects that we are taught from the first year is architectural design. The actual subject on which students work out projects. All the above items are applied there. Each semester, students develop 2 projects.', 4, 8, 2),
(30, 'Painting and sculpture ', 'Students also teach drawing, painting and sculpture. Because the architect must know how the forms work. And the synthesis of arts has not been canceled.', 3, 8, 2),
(31, 'Machine learning engineer', 'Machine learning engineering is a specialist role still in its infancy. Machine learning engineers collaborate with the organization’s data science team to build programs and create algorithms to deliver data-driven products and services that enable machines to make decisions, take action and enhance user experience without any human interference. An example of this would be self-driving cars and personalized social media news feeds.', 4, 8, 4),
(32, 'Data architect', 'Data architects use extensive programming tools to design secure data frameworks in order to manage large electronic databases for organizations. This is a highly technical role that involves ensuring the data is relevant, accurate and accessible to the organization so employees can access this information, such as financial records and marketing information, wherever and whenever they need.\r\nYou’ll need superior analytical skills, an eye for detail and sophisticated design skills as you fulfil the strategic needs of the organization.\r\n', 7, 8, 4),
(33, 'Statistician', 'Statisticians compile, analyze and evaluate quantitative information from surveys and experiments in order to help organizations reach operational standards and advise on practical solutions to problems.\r\nRelevant qualifications and industry experience is essential if you want to work in this field. ', 8, 8, 4),
(34, 'Data analyst', 'Data analysts are inquisitive, highly analytical and have a way with numbers. Every organization and business collects data, whether it’s sales figures, logistics, market research or transportation costs. As a data analyst it’s your job to gather and evaluate this data in order to provide clear insights as to how the organization can improve its business strategy and make better business decisions across various areas. ', 8, 8, 4),
(35, 'Architectural graphics', 'Architecture we were told about various techniques of manual graphics. Students also performed exercises and did RGR', 5, 8, 5),
(36, 'Architectural construction', 'To properly design a building, the architect must know what design solution is appropriate for a particular project. Also, depending on the design, the project itself may be slightly modified', 4, 8, 5),
(37, 'Architectural composition ', 'Architectural composition. Teaches the harmonious combination of various elements in one composition. Simply put, it teaches that the window will look beautiful in the tower. And even better, if the same Windows are repeated under it after a certain distance, but slightly increased in size.', 7, 8, 5),
(38, 'Architectural ergonomics ', 'Architectural ergonomics. It teaches you to conveniently place all the elements of the architectural environment that a person will interact with in one way or another', 6, 8, 5),
(39, 'Architectural layout', 'Architectural layout. You need to be able to show your idea not only on the computer, but also in the real world. So you can touch it', 6, 8, 5),
(40, 'History of architecture and urban planning', 'History of architecture and urban planning, as well as art history', 3, 8, 5),
(41, 'Architectural materials science', 'Architectural materials science. There, students study the properties of various materials and their applications', 6, 8, 5),
(42, 'Architectural design', 'One of the most important subjects that we are taught from the first year is architectural design. The actual subject on which students work out projects. All the above items are applied there. Each semester, students develop 2 projects', 7, 8, 5),
(43, 'Painting and sculpture ', 'Students also teach drawing, painting and sculpture. Because the architect must know how the forms work. And the synthesis of arts has not been canceled.', 4, 8, 5),
(44, 'Master of science in electrical engineering', 'Start your education journey today by pursuing electrical engineering courses, a graduate certificate, or a master’s degree from the University of Colorado Boulder. With performance-based admission, there is no application process—simply prove you can do the work. You’ll also benefit from short stackable courses, and pay-as-you-go tuition.', 12, 8, 6),
(45, 'Modern Robotics: Mechanics, Planning, and Control', 'This Specialization provides a rigorous treatment of spatial motion and the dynamics of rigid bodies, employing representations from modern screw theory and the product of exponentials formula. Students with a freshman-level engineering background will quickly learn to apply these tools to analysis, planning, and control of robot motion. Students\' understanding of the mathematics of robotics will be solidified by writing robotics software. Students will test their software on a free state-of-the-art cross-platform robot simulator, allowing each student to have an authentic robot programming experience with industrial robot manipulators and mobile robots without purchasing expensive robot hardware. It is highly recommended that Courses 1-6 of the Specialization are taken in order, since the material builds on itself.', 5, 8, 6),
(46, 'Biosphere 2 Science for the Future of Our Planet', 'In this course, you will delve into a world of innovative science and learn from a team of Biosphere 2 and University of Arizona researchers. From plants and soils, to oceans and rainforests, the Moon, Mars, and more, this course is an exciting opportunity for anyone interested in science and Earth stewardship. \r\nLearn how a unique research station in the Arizona desert is used to investigate big ideas, such as how Earth systems interact, the effects of climate change, and what our future holds. Go back in time thousands of years with information locked in ancient trees, and travel into an imagined future where humans become Martians. Collect and analyze your own scientific data, discuss big questions with participants from around the world, and gain novel insights and understanding about our wonderfully unique planet.\r\n', 6, 8, 6),
(47, 'Robotics', 'The Introduction to Robotics Specialization introduces you to the concepts of robot flight and movement, how robots perceive their environment, and how they adjust their movements to avoid obstacles, navigate difficult terrains and accomplish complex tasks such as construction and disaster recovery. You will be exposed to real world examples of how robots have been applied in disaster situations, how they have made advances in human health care and what their future capabilities will be. The courses build towards a capstone in which you will learn how to program a robot to perform a variety of movements such as flying and grasping objects.', 10, 8, 6),
(48, 'Chemical Engineering Principles I', 'Steady-state mass balances in chemical processes and the first law of thermodynamics. The behaviour of gases and liquids, and their physical equilibria. Recycle in steady state operation.', 6, 8, 7),
(49, 'Numerical Methods and Computing for Chemical Engineers', 'Formulation of first-principles and empirical models for various chemical processing applications at steady and unsteady states. Techniques for numerical solution of linear and nonlinear model equations. Techniques for numerical differentiation and integration of model equations and data sets.', 5, 8, 7),
(50, 'Chemical Engineering Principles II', 'Combined mass and energy balances in the steady and unsteady state. The second law of thermodynamics, physical/chemical equilibria and sustainability.', 3, 8, 7),
(51, 'Problem Solving and Technical Communication', 'Developing awareness, strategies, creativity, analysis and interpersonal skills in the context of solving homework problems and preparing technical communications. Interpretation, retrieval manipulation and communication of information.\r\n\r\n', 7, 8, 7),
(52, 'Fluid Mechanics', 'The laws of statics and dynamics in both compressible and incompressible fluids. Equations of conservation and modern turbulence and boundary layer theory applied to submerged and conduit flow. Similitude, unsteady flow, measuring devices and fluid machinery.', 6, 8, 7),
(53, 'Chemical Engineering Thermodynamics', 'Review of the total energy balance, mechanical energy balance and thermodynamics of one component system. Chemical reaction and phase equilibria of multicomponent systems, with emphasis on non-ideality.', 8, 8, 7),
(54, 'Nonlinear Dynamics: Mathematical and Computational Approaches', 'This course provides a broad introduction to the field of nonlinear dynamics, focusing both on the mathematics and the computational tools that are so important in the study of chaotic systems.  The course is aimed at students who have had at least one semester of college-level calculus and physics, and who can program in at least one high-level language (C, Java, Matlab, R, ...)\r\nAfter a quick overview of the field and its history, we review the basic background that students need in order to succeed in this course.  We then dig deeper into the dynamics of maps—discrete-time dynamical systems—encountering and unpacking the notions of state space, trajectories, attractors and basins of attraction, stability and instability, bifurcations, and the Feigenbaum number.  We then move to the study of flows, where we revisit many of the same notions in the context of continuous-time dynamical systems. \r\n', 6, 8, 8),
(55, 'Technical Textiles', 'Technical textiles are defined as textile materials and products used primarily for their technical performance and functional properties rather than their aesthetic or decorative characteristics. This course targets the specific areas of technical textiles depending on the product characteristics, functional requirements and end-use applications. The learner at the end of the course will be able to appreciate the vast scope of technical textiles in various sectors of geotextiles, sports textiles, protective wear, textile reinforced composites, filter fabric, compression bandage, automotive textiles, UV protective textiles and nonwoven hygiene textiles.', 7, 8, 8),
(56, 'Yarn manufacture I : Principle of Carding and Drawing', 'Objectives of carding process, carding actions , working principle of carding machine, Card feed system, lap and continuous feed systems, design\r\nfeature of taker-in/ licker-in,waste extraction, opening Intensity. Design feature of cylinder section, construction , design and working of flats, analysis of carding theory , carding force, fibre shedding, Transfer of\r\nfibres from cylinder to doffer,Technological significance of doffing arc, doffing of web , web condensation, Package formation: Forms of packaging,\r\ncoiling, analysis of can drive.', 5, 8, 8),
(57, 'Science and Technology of Weft and Warp Knitting', 'This isadefinitive coursefor everyone from beginners to experienced knitters to knowthe fundamental principlesof knitting.This course covers all aspects of weft and warp knittingincluding their science, engineering, technology and design. The contents of the lectures have been systematically arranged to start from the basic of simple knit design and related theories, and then progressing towards research and engineering of advanced knitted structures and their technologies. Internationally accepted methods of fabric notation are presented to clarify explanations of weft/warp structures, and their knitting actions on the machine. Both theory and practical components have been included to help participants gaining hand on experience in knit designs, and machines. Many weft and warp knit construction are carefully selected, designed and demonstrated during lectures for more clarity on the structure and their influence on the fabric properties.Several lab videos/animations/photographs are included to familiarize with the working principle of weft and warp knitting technologies.', 6, 8, 8),
(58, 'Science of Clothing Comfort', 'Clothing comfort is one of the most important attributes of textile materials. A basic understanding of comfort aspects of textile materials would be extremely useful for fibre, yarn and fabric manufacturer, researcher, garment designer, processing industries, garment houses, users of the fabrics for speciality applications and all others related with textile and garment industries. The multidisciplinary nature of the subject, encompassing various concepts of physics, neurosciences, psychological science, material sciences, ergonomics, instrumentation and textile engineering would stimulate the minds for innovation, product design and development and material characterization with scientific approaches.', 4, 8, 8),
(59, 'Textile Finishing', 'This course would cover the science and application of various finishing processes based on the need and chemistry of the fibres, namely, cellulose based, protein based and synthetics. Fundaments of the techniques and the chemistry finishing agents, mechanisms applicable to various finishing techniques. Some introduction to relevant machines and characterization of finished fabrics would also be covered.\r\nINTENDED AUDIENCE: Students of first year B.Sc (Physics / Mathematics ) and first year B.E courses.PREREQUISITES: Should have knowledge of fibres, preferably of preparatory processes and dyeing.\r\n', 6, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `IdF` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Coordinator` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `IdUnivers` bigint(20) NOT NULL,
  PRIMARY KEY (`IdF`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`IdF`, `Name`, `Coordinator`, `Email`, `Phone`, `IdUnivers`) VALUES
(1, 'Faculty of Computing and Telecommunications', 'blabla', 'bla@bla.bla', '0123456789', 7),
(2, 'Faculty of Architecture', 'blabla', 'bla@bla.bla', '0123456789', 7),
(3, 'Faculty Of Chemical Technology', 'blabla', 'bla@bla.bla', '0123456789', 7),
(4, 'Faculty of Civil and transport engineering', 'blabla', 'bla@bla.bla', '0123456789', 7),
(5, 'Faculty of Architecture', 'blabla', 'bla@bla.bla', '0123456789', 5),
(6, 'Faculty of Control, robotics and Electrical Engineering', 'blabla', 'bla@bla.bla', '0123456789', 5),
(7, 'Bioscience Engineering', 'blabla', 'bla@bla.bla', '0123456789', 8),
(8, 'Textile Engineering', 'blabla', 'bla@bla.bla', '0123456789', 8);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `IdUnivers` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `ErasmusCode` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `ContactName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  PRIMARY KEY (`IdUnivers`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`IdUnivers`, `Name`, `ErasmusCode`, `Address`, `Country`, `ContactName`, `Email`, `Phone`) VALUES
(5, 'Cracow University of Technology', 'Cra285', '24, warszawa street 31-155 Cracow, Poland', 'Poland', 'blabla', 'erasmus@pk.edu.pl', '+48126283044'),
(7, 'Poznan University of Technology', 'poz302', 'Pl. M. Sklodowskiej-Curie 5,60-965 Poznan, Poland', 'Poland', 'Poland', 'study@put.poznan.pl', '+48616653544'),
(8, 'Ghent University', 'Ghe245', 'Sint-Pietersnieuwstraat 33 9000, Ghent, Flanders, Belgium', 'Belgium', 'blabla', 'guide@UGent.be', '+32093310101'),
(9, 'Charles university', 'bla', 'Charles University, Ovocný trh 560/5, Prague 1,116 36, Czech Republic\r\n', 'Czech', 'Antoine The great', 'erasmus@ruk.cuni.cz', '+420224491710');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `IdU` bigint(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `StudyCycle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `FieldOfEducation` varchar(255) NOT NULL,
  `status` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `DateArrival` date DEFAULT NULL,
  `DateDeparture` date DEFAULT NULL,
  `IdUnivers` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`IdU`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdU`, `Username`, `FirstName`, `Surname`, `DateOfBirth`, `Nationality`, `Sex`, `StudyCycle`, `FieldOfEducation`, `status`, `Email`, `pwd`, `Phone`, `DateArrival`, `DateDeparture`, `IdUnivers`) VALUES
(3, 'test', 'test', 'test', '2020-05-03', 'test', 'M', 'test', 'test', '1', 'test@test.test', 'toto12', '0123456789', NULL, NULL, NULL),
(5, 'qesrfr', 'dfsdghfd', 'sfrdf', '2020-05-03', 'frzqdsfffss', 'F', 'Master', 'frzqdsfffss', '1', 'ezre@ef.dg', '$2y$10$keh1WJenC15Sk/yVer95SeZEZ0NgDp2lQZCNwhs.IFdBqWRKq19BC', '0123456789', NULL, NULL, NULL),
(6, 'Antoine123', 'Antoine', 'Landrieu', '1998-03-17', 'French', 'M', 'Master', 'Frenchi', '3', 'antr@sdgd.fd', '$2y$10$C8MeCwgwJD9lVgBWNocDP.cpvHUlgMdVdWIvFGzDu7/7A8z/Y2nD6', '0123456789', NULL, NULL, NULL),
(9, 'test222', 'test2', 'test2', '2020-04-26', 'English', 'M', 'Bachelor', 'fds2', '1', 'anto@gds.com', '$2y$10$bLzlUn8Y5mFmxwmxVXWCcOHdbQG86Y.gWaab1.aIoWEbCSiTowO56', '0123456789', NULL, NULL, NULL),
(10, 'testtest', 'testtest', 'testtest', '4567-12-03', 'testtest', 'M', 'Bachelor', 'testtest', '1', 'testtest@testtes.tes', '$2y$10$XCkGG2qtNskjaarsotvvb.N1kqGhW55SFmFbviuyDSbrCnIxCmkZe', '0123456789', NULL, NULL, NULL),
(15, 'testtest22', 'testtest', 'testtest', '4567-12-03', 'testtest', 'M', 'Bachelor', 'testtest', '1', 'testtest@testtes.tes', '$2y$10$lSuOptJQjoUL4q8qut4lSu7iU4QHW/Un5uxK5hVwdNWDPyEH4i6fC', '0123456789', NULL, NULL, NULL),
(17, 'test12346', 'rtegry', 'rsetr', '1234-12-03', 'french', 'M', 'Bachelor', 'sfdsgf', '1', 'fsd@qdsfd.ds', '$2y$10$HphPRvT471u7xx3fxUF4x.j3BM.gmAc9bby9WVOJgmKEEvQ9cA.dG', '0123456789', NULL, NULL, NULL),
(20, 'sqdf', 'sdftfg', 'swdfdg', '2020-04-26', 'qsdfdg', 'M', 'Bachelor', 'dsfr', '1', 'sfrdg@sdf0ds.sd', '$2y$10$U.EqHXk6nkw8ub6rFZdw5Oc.8DKF217xjujyxmaEUCrLWboBKqR2y', '0123456789', NULL, NULL, NULL),
(49, 'Antoine62', 'Antoine', 'Landrieu', '1998-12-03', 'French', 'M', 'Master', 'French', '1', 'antoine@gmail.com', '$2y$10$gwvDCQuk2Xib.3eeER7pFesxakIjTKolYAiJHBINnrjNyRfkphxFu', '0123456789', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
