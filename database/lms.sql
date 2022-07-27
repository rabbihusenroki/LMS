-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 01:20 PM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OnlineKit', 'OnlineKit is a online free learning environment for those who really want to learn something new and skill up their knowledge. Learn Programing skills, from absolute beginner to advanced mastery. We try to create project base course which help your to learn professionally and make you fell as a complete developer.', 'images/about/1735424451596041.png', '2022-06-12 03:53:34', '2022-07-25 03:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `about_banner`, `created_at`, `updated_at`) VALUES
(4, 'images/banner/1739172460687405.jpg', '2022-07-23 13:21:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `title`, `image`, `blog_description`, `created_at`, `updated_at`) VALUES
(3, '1', '6 Principal Reason for Using E-Learning Applications', 'images/blog/1739274714152892.png', 'E-learning application means electronic learning systems, which can be used as a part of the learning system. A Learning management system is arranged for a formal teaching system. But with electronic resources on your educational system is called e-learning. On the E-learning platform, students can access their learning materials on the application. Instructors can provide courses, documents, and videos according to their expertise. E-learning platform takes place in the form of online courses, online degrees, or online programs.\r\n\r\nThe E-learning platform has changed the vision of the traditional educational method. Unlike the customary board and marker method of teaching and learning, e-learning makes it simpler, easier, and more effective. In the 21st century, eLearning courses have become the most prevalent matter.\r\n\r\nThere are lots of e-learning platforms on the internet. But all of these platforms can’t provide you with the same features. OnlineKit is a kind of e-learning application reducing where students and teachers combine to enrich or share knowledge through a structured course-based system.\r\n\r\nAlmost every student and instructor like to use the e-learning platform all over the world. There are lots of benefits and reasons why to use the eLearning platform. Here are Six features of the e-Learning application that make it advantageous to students and instructor.\r\n\r\n\r\nThe online educational platform is five-time more effective than the traditional classroom. The instructor can use animations, videos, audio, pdf, and so on. According to psychology, students can understand much faster when instructors use multimedia. It is the reason why students receive more information in less time. \r\n\r\nWith online learning, students can access the lecture an unlimited number of times. This feature is beneficial at the time of revision or when preparing for an exam. In the traditional form of the learning system, if anyone skips the lecture, they have to prepare that topic independently. But in the eLearning platform, you can attend the lessons whenever you want.', '2022-07-24 16:24:39', '2022-07-24 16:27:04'),
(4, '1', 'How to Develop Your Data Science Team', 'images/blog/1739275107844573.jpg', 'Data science is one of the top technical skills all employees need in 2022. But how do you help your team develop these skills and define what specifically they need to learn? We recently asked a panel of data scientists to share their insights on developing a data science team. Here are a few key takeaways. \r\n\r\nLook for in-house talent \r\nThere’s a growing need for analysis skills like machine learning, data science, and data visualization, but not enough candidates on the market to meet these needs. This is why it’s critical to develop this talent in-house. \r\n\r\n“Developing in-house talent takes a two-pronged approach,” says Udemy instructor Mike Cohen. The first prong involves ongoing training and continuous learning. “Data science is continuously evolving,” says Mike. This means that your in-house team should be regularly devoting time to following the latest developments in the field and reinforcing the foundational math and statistical skills that data science techniques are built on. \r\n\r\n\r\nThe second prong involves educating non-experts on what the company can expect to get from its data. This process of developing data literacy ensures everyone understands what is realistic and where their data might be flawed. “You don’t need to be a data scientist in order to learn how to make data-based decisions,” says Mike.  \r\n\r\nFind a balance between breadth and depth of knowledge\r\n“Trying to know everything results in superficial knowledge,” says Mike. And in the world of data science, it’s impossible to know everything. Data scientists should strive for a balance between breadth and depth of knowledge. Mike puts it this way: “Each individual should have their own deep knowledge of a small number of topics.” \r\n\r\nIt’s also imperative to develop knowledge of your business’s needs, argues Udemy instructor Diogo Alves de Resende. “If you just work on your data and building your models, but you’re not aware of what the business needs, there’s a disconnect,” says Diogo.', '2022-07-24 16:33:19', NULL),
(5, '1', 'The Best Way to Prepare Your Team for Technical Certifications', 'images/blog/1739275318420111.png', 'Employees who earn technical certifications drive outcomes that business leaders care about — increased productivity, accuracy, and quality of work, along with reduced project costs. But even if leaders are concerned about seeing the return on investment with technical certifications, it might not be obvious how to help your employees prepare for them. We asked several Udemy Business technical certification instructors — Jason Dion, Scott Duffy, and Alan Rodrigues — to share their tips and tricks. Familiarize yourself with the available modes of learning In the past, employers that wanted to offer technical certification education to their employees had limited options. One of the most common styles of preparing employees for certification involved paying an instructor to come in and lead an intensive boot camp. This approach to development costs several thousands of dollars per learner and takes time away from learners’ daily tasks. On the other side of the spectrum, books were a low-cost and easily accessible option, but they required a lot of heads-down time to study and absorb the information. Today there are plenty of more flexible options. Here are some of the insights the Udemy Business instructors shared about the different learning modes available now. Videos Jason Dion is a big proponent of video content because it’s fast and convenient: “For a lot of things, it’s easier to see a video to demonstrate it. Something that might take five to ten pages in a book could be shown in a two-minute video, and it’s going to be a lot more effective because I can watch the person doing the steps and follow along.” Practice exams Practice exams give learners the chance to put their knowledge to the test — literally. By going through exercises that are likely to appear on the certification exam, they’ll get a good sense of how prepared they are and identify any knowledge or skill gaps. Jason says practice exams are one of the most important ways to prepare for certification. Virtual lab environments Virtual lab environments or sandboxes are another way learners can gain practical experience. “It’s very easy to practice using a lab product,” says Scott Duffy. Jason adds that virtual lab environments are ideal because you can have your team gain hands-on experience without affecting your production network. Maximize the support your company and managers provide Offering training to help prepare for certification is a great first step, but there’s more your company and managers can do to maximize employees’ chances of success. Create learning paths Technical certification skills often build on each other, so starting with foundational knowledge is helpful before moving on to more advanced topics. Alan Rodrigues recommends having teams or departments create their own learning paths. When you have an online learning platform like Udemy Business, it’s easy for technical leaders to outline the necessary skills or courses they’d like their team members to take. Structure workload to allow for study time When managers get involved in the certification preparation process, they can support their team members by allowing time to study, says Scott Duffy. For example, if a manager knows the certification exam is coming up, they can take some story points away from the people taking the test to allow more time to study or prepare. They can also work with their team members to predict when their workload might be heavier and when it would be best to avoid scheduling the certification exam. Regularly ask team members about their professional goals Scott Duffy says the certification provides an ideal starting point for professional development conversations. If managers know someone on their team is about to take a certification exam or just completed one, it’s a good time to check in about their longer-term goals and career plans. And if you’re the person doing the certification, don’t be afraid to take this opportunity to kick off these conversations with your manager. Technical certification training is just the start If you’re going to invest the time and money in technical certifications for your team, you want to ensure you’re setting them up for success. Simply providing a learning and development budget or giving access to training materials still puts the onus on employees to find the time and acquire the skills and knowledge they’ll need. The tips Jason, Scott, and Alan shared here give you a few ideas for getting started. Looking for even more practical tips on helping your employees gain technical certifications? Watch the on-demand webinar, Unlocking Technical Certifications.', '2022-07-24 16:35:23', '2022-07-24 16:36:40'),
(6, '1', 'Learn Coding in Scratch with a Cool Game Idea', 'images/blog/1739275460152315.jpg', 'A few years ago, the creation of programs and applications was aimed at only a few people with specialized knowledge. Lately, though, programming for beginners has been possible, thanks to software that has been developed, such as Scratch. In this article, you will see how to create your own game in an easy and fun way.\r\n\r\nWhy start Scratch Coding?\r\nThe rate at which jobs in the IT sector are growing is almost twice as high as in other industries, and this is only an indication of work in future new technologies. Researchers estimate that “the digital economy is worth $11.5 trillion globally, equivalent to 15.5 percent of global GDP and has grown two and a half times faster than global GDP over the past 15 years.”\r\n\r\nIn a few years, programming knowledge will be fully integrated into educational programs for every age. Using coding concepts, it’s possible to design projects that utilize very similar guidelines and rubrics for a digital project, thereby giving students the opportunity to learn about their topic and sharpen their coding skills at the same time. Future human resources, generations Y and Z, will have at their core the digital skills needed to program.\r\nFollowing are some of the top reasons to begin learning how to program:\r\n\r\nYou will speak the “language” of the future, and you will have more options for access to the labor market. With programming knowledge, you will have a competitive advantage over other candidates for the same jobs.\r\nProgramming does exactly what Steve Jobs was saying — it helps you think — so it allows you to further develop skills like critical thinking and the ability to solve complex problems.\r\nIt helps you develop your creativity and deal with innovative projects by having access to technologically advanced tools and methods when working for any employer in the global market.\r\nYou will be able to deal in almost any industry or even combine different areas of work applications. Sectors such as economics, medicine, content creation, etc., will have an elementary knowledge of code and programming as a prerequisite.\r\nIt will help you make everyone’s life and work easier! Programming finds infinite applications in our everyday life because everything is based on code (e.g., GPS while driving, smartphones, weather applications, shopping, etc.)\r\nLet’s start coding by creating a video game in Scratch 3.0! But, first…\r\nHey, what is Scratch 3.0?\r\nScratch is a programming language created in 2007 by the Lifelong Kindergarten Group department of the University of Massachusetts MIT. It is mainly used in education so children can learn programming concepts and start creating with block based coding and get used to designing algorithms and real coding.\r\n\r\nScratch’s environment makes programming for beginners very easy, especially for children. They can create games and animations by moving (drag & drop) commands, which appear as detachable blocks, actually it is block based coding .\r\n\r\nA vital element is the large community that supports Scratch, as well as the fact that everyone has the ability to share their own projects on the official website. So the programming for beginners becomes even easier since there is mutual user support.\r\n\r\nSo far, over 14 million games, animations and music creations have been uploaded to Scratch’s platform.\r\n\r\nLet’s start creating the great game Arkanoid!', '2022-07-24 16:38:55', NULL),
(7, '1', 'How to Become a Cybersecurity Analyst in 2022: Training, Salary and Trends', 'images/blog/1739275634295889.png', 'n learning how to become a cybersecurity analyst, you will acquire the answers to these questions:\r\n\r\nWhat is the difference between a cybersecurity analyst and a cybersecurity engineer?\r\nWhat does a cybersecurity analyst really do?\r\nWhat skills should you have to become a cybersecurity analyst?\r\nWhat are the requirements to get started as a cybersecurity analyst?\r\nWhat are some common titles of cybersecurity analysts?\r\nWhat certifications should I work towards for success as a cybersecurity analyst?\r\nAre you on the lookout for something to give more meaning and challenge to your work or for new career paths? If so, the cybersecurity career, particularly as an analyst, is an exciting option. Cybersecurity professionals are now on the frontlines of a growing global industry. They tackle advancing cyber threats and help organizations and individuals. They master deep technical expertise as they go. The cybersecurity career also offers a future-proof career path. It is one of the most in-demand skillsets in the US. \r\nThe number of cybersecurity jobs in the US is growing at an astounding rate. There are not enough well-trained professionals to fill these positions. One prediction estimates that there may be 3.5 million unfilled cybersecurity jobs globally by 2025. Cybersecurity offers significant potential for both entry-level and seasoned professionals and provides a path toward meaningful and rewarding work.\r\nWith the COVID-19 pandemic, the demand for cybersecurity skills increased even more. According to one report, around 80% of cybersecurity threats use COVID-19 as leverage. This is due to the increased reliance on telework across most industries. These threats encompass nearly all cyber attacks. These include business email compromise, credential phishing, malware, and spam emails. Cybersecurity specialists have never been more important than they are today. They protect businesses, people, and their data in the situation the world is facing.\r\n\r\nYou may want to consider the path that many prospective cybersecurity analysts take. Most candidates begin their careers as information technology specialists. They then get the CompTIA Security+ and CompTIA CySA+ certifications. Then they find themselves ready to start their next career challenge.\r\n\r\nWhat is the difference between a cybersecurity analyst and a cybersecurity engineer?\r\nIn the broadest sense, we can map cybersecurity jobs into two categories — analysts and engineers. So how do they differ? Well, I’m pretty sure we all have seen Formula 1 racing. Imagine for a moment that cybersecurity analysts are like those F1 drivers. They are paying attention to how the car is working and everything going on around it. They know if something is not right with the car (or, in our case, the computer networks) and if there is an issue with the way it is functioning. Unfortunately, cybersecurity analysts do not know how to get under the hood and fix it, though. They just sit in the car and are the experts in driving it to a pole position or to secure a podium finish. \r\n\r\nIn contrast, cybersecurity engineers are like the race car’s designers and engineers. These specialists understand all the nuts and bolts of how the system within the car operates. In our case, the vehicle is the cyber defense systems and analysis network. The engineers design the systems that make the car function as efficiently as possible. They know how to fix the car’s issues, if there are any, and ensure that it is fine-tuned and functioning correctly.', '2022-07-24 16:41:41', NULL),
(8, '1', 'Top 60 Java Interview Questions Java Programmers Need to Know', 'images/blog/1739275776133497.jpg', 'When you are preparing to interview for a Java programming job, it’s important to consider the questions you’ll be asked. These interview questions can vary based on many factors, including company type, role level, and how long the company you interview with has been in business. How can you prepare to answer these questions with so much to consider?\r\n\r\nPrep for a Java interview by thinking about examples that demonstrate your Java programming skills and capabilities. You can also think of scenarios and past experiences that speak to your understanding of Java programming concepts. We recommend you brainstorm some ideas and write them down. If you keep a list of your examples, you can quickly refer to them when you prepare to interview.\r\nAnother useful interview strategy is to review potential Java interview questions in advance. Let’s check out examples of some of the top Java interview questions. Also, each question includes some information that can help refresh your memory. \r\n\r\nThe topics we will cover include: \r\n\r\nGeneral Java interview questions\r\nJava class, variables, objects, and argument questions\r\nJava string interview questions \r\nThe more you know about these topics, the better prepared you will be to answer your Java interview questions with flying colors!\r\n\r\nGeneral Java interview questions\r\nWhat is Java?\r\nJava is a platform-independent high-level programming language. It is platform-independent because its byte codes can run on any system regardless of its operating system.\r\n\r\nWhat are the features of Java?\r\nObject-oriented programming (OOP) concepts\r\nPlatform independent\r\nHigh performance\r\nMulti-threaded\r\nWhat are the OOP concepts?\r\nInheritance\r\nEncapsulation\r\nPolymorphism\r\nAbstraction\r\nInterface\r\nWhat is data encapsulation, and why is it useful?\r\nEncapsulation is a concept in Object-Oriented Programming for combining properties and methods in a single unit. Encapsulation helps developers follow a modular approach for software development because each object has its own set of methods and variables and serves its functions independent of other objects. In addition to that, encapsulation serves data hiding purposes.\r\n\r\nWhat is polymorphism?\r\nPolymorphism is one interface with many implementations. This characteristic allows you to assign a different meaning or usage to something in different contexts. For example, you can use polymorphisms to enable more than one form for entities, such as variables, functions, or objects.\r\n\r\nWhat are the types of polymorphism, and how do they differ?\r\nThere are two types of polymorphism:\r\n\r\nCompile-time polymorphism is method overloading.\r\nRun-time polymorphism uses inheritance and interface.\r\nWhat does an interface in Java refer to?\r\nAn interface as it relates to Java is a blueprint of a class or a collection of abstract methods and static constants. \r\nEach method is public and abstract, but it does not contain any constructor. \r\nWhat are constructors in Java?\r\nIn Java, a constructor refers to a block of code used to initialize an object. In addition:\r\n\r\nConstructors must have the same name as that of the class. \r\nConstructors have no return type. \r\nCreating an object will call a constructor automatically.\r\nName and explain the types of constructors in Java.\r\nThe two types of constructors in Java are the Default Constructor and the Parameterized Constructor.\r\n\r\nDefault Constructor \r\nDoes not take any inputs\r\nMain purpose is to initialize the instance variables with the default values \r\nWidely used for object creation\r\n Parameterized Constructor\r\nCapable of initializing the instance variables with the provided values. \r\nThese constructors take the arguments.\r\n What is JDK?\r\nJDK stands for Java development kit.\r\nIt can compile, document, and package Java programs.\r\nIt contains both JRE and development tools.\r\n What is JVM?\r\nJVM stands for Java virtual machine.\r\nIt is an abstract machine that provides a run-time environment that allows programmers to execute Java bytecode.\r\nJVM follows specification, implementation, and runtime instance notations.\r\n What is JRE?\r\nJRE stands for Java runtime environment.\r\nJRE refers to a runtime environment that allows programmers to execute Java bytecode.\r\nJRE is a physical implementation of the JVM.\r\n In Java, what are the differences between heap and stack memory?\r\nMemory\r\n\r\nStack memory is used only by one thread of execution.\r\nAll the parts of the application use heap memory.\r\nAccess\r\n\r\n Other threads can’t access stack memory.\r\n Objects stored in the heap are globally accessible.\r\nMemory Management\r\n\r\nStack follows the LIFO manner to free memory.\r\nMemory management for heap stems from the generation associated with each object.\r\nLifetime\r\n\r\nStack exists until the end of the execution of the thread.\r\nHeap memory lives from the start till the end of application execution.\r\nUsage\r\n\r\nStack memory only contains local primitive and reference variables to objects in heap space.\r\n Whenever you create an object, it is always stored away in the heap space. \r\n What is a JIT compiler?\r\nA JIT compiler runs after the program is executed and compiles the code into a faster form, hosting the CPU’s native instructing set. \r\n\r\n How does a JIT compiler differ from a standard compiler?\r\nJIT can access dynamic runtime information, and a standard compiler does not. Therefore, JIT can better optimize frequently used inlining functions.', '2022-07-24 16:43:56', NULL),
(9, '1', '4 Ways to Make Hybrid Meetings More Inclusive', 'images/blog/1739275899425356.jpg', 'Hybrid work is no passing fad. In a recent report from Accenture, 83% of workers said they prefer a hybrid model in which they can work remotely at least 25% of the time. And this preference is quickly becoming a deal-breaker for employees, with 39% of employees saying they’d consider quitting if their employers were not flexible on hybrid work. \r\n\r\nWhile often a win for employees, hybrid setups aren’t automatically successful. It takes intentional effort to overcome the information and experience gaps that can occur with hybrid work, especially when it comes to meetings. Here are a few ways to make sure your hybrid meetings are more inclusive.\r\n\r\nFocus on building remote-first culture\r\nThe first rule of creating an inclusive hybrid culture is to take a remote-first approach to everything, says Hassan Osman, a Udemy instructor, and a project manager with over 15 years of experience managing virtual teams. In the context of meetings, this means you should use video conferencing software rather than requiring employees to be available in person. You’ll also want to use collaboration tools like virtual whiteboards so any participant can access any information they need from anywhere.\r\nPrioritize creating an equitable experience\r\nIf you’ve been in a meeting where most of your coworkers were in the same room, you know how tough it can be to follow side conversations or share your input without being talked over. This is why Hassan recommends having everyone call in from their own computer, even those in the same office. Leaders can also create a more equitable experience by making sure breakout rooms have both onsite and remote participants and assigning an onsite buddy to remote participants so they can get clarification or signal they’d like to contribute without interrupting the entire session.\r\n\r\nConsider accessibility issues\r\n“For leaders and meeting facilitators accustomed to the accommodations common to physical spaces, like ramps or in-person interpreters, creating an accessible and inclusive virtual environment requires a different set of best practices,” writes Catherine Tansey on the Lattice blog.\r\n\r\nThere are several steps you can take to make hybrid meetings more accessible. These include:\r\n\r\nGiving attendees the ability to request accommodations such as ASL interpreting or captions when you send out the meeting invitation\r\nEnsuring all speakers introduce themselves before they begin and face the camera directly\r\nMaking presentation materials available ahead of time \r\nProviding live captioning\r\nBuilding an inclusive work culture\r\nEmployees and job seekers are increasingly vocal about their desire to work for companies that prioritize DEI. The ebook, Embedding DEI Across Your Organization, offers a framework for creating a company culture based on DEI best practices.\r\n\r\nCheck out Harvard University’s Hosting Accessible Remote Meetings and Events page for more on this topic.\r\n\r\nMix up the meeting structure and agenda\r\nMixing up your meeting structure and agenda creates different ways for team members to participate. \r\n\r\nAt the start of each meeting, you might experiment with different icebreaker activities to help everyone feel more comfortable and catch up before getting into the business talk.\r\n\r\nFor example, ask everyone to name their favorite thing about your company or something more general like their favorite breakfast food or a word that describes their plans for the weekend. Miro has several examples of simple remote icebreakers. You can also add variety to meetings by using the chat and polling functions of your video conferencing software, asking everyone to contribute to virtual whiteboards or collaboration tools, and rotating the meeting host or presenter (making sure remote employees have the chance to do this just as often as onsite employees). \r\n\r\nCommit to inclusion at every level of your organization\r\nWhile all employees might benefit from a hybrid work setup, Sheela Subramanian and Ella F. Washington write in Harvard Business Review that groups like women, working parents, and people of color benefit most from opting out of the office. Flexible work is a critical way', '2022-07-24 16:45:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_banners`
--

CREATE TABLE `blog_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_banners`
--

INSERT INTO `blog_banners` (`id`, `blog_banner`, `created_at`, `updated_at`) VALUES
(1, 'images/banner/blog/1739140196180695.jpg', '2022-07-23 04:48:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WHY YOU CHOOSE OnlineKit ?', 'Our life’s mission is to help novice and professional software engineers increase their skills, make more money, and ultimately change their lives for the better. I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings the master-builder.', 'images/choose/1739273866537539.png', '2022-05-29 05:30:18', '2022-07-24 17:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Sahi Eidgha Point, Sylhet', 'wp.dev.tahsin786@gmail.com', '01893904686', '2022-06-12 07:13:49', '2022-06-12 07:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_banners`
--

CREATE TABLE `contact_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_banners`
--

INSERT INTO `contact_banners` (`id`, `contact_banner`, `created_at`, `updated_at`) VALUES
(2, 'images/banner/contact/1739172478827902.jpg', '2022-07-23 13:22:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Rabbi Husen Roki', 'patient@gmail.com', '01893904686', 'How to Enroll', 'jl              hhhhhhhhhhhhhhhhh', '2022-07-23 13:35:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `image`, `course_description`, `about_description`, `apply_description`, `certificate_description`, `created_at`, `updated_at`) VALUES
(5, 'The Complete JavaScript Course 2022: From Zero to Expert!', 'images/course/1739277526750740.png', 'The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!\r\nWhy is this the right JavaScript course for you?\r\n\r\nThis is the most complete JavaScript course on Udemy. It\'s an all-in-one package that will take you from the very fundamentals of JavaScript, all the way to building modern and complex applications.\r\n\r\nYou will learn modern JavaScript from the very beginning, step-by-step. I will guide you through practical and fun code examples, important theory about how JavaScript works behind the scenes, and beautiful and complete projects.\r\n\r\nYou will also learn how to think like a developer, how to plan application features, how to architect your code, how to debug code, and a lot of other real-world skills that you will need on your developer job.', 'Build 5 beautiful real-world projects for your portfolio! In these projects, you will learn how to plan and architect your applications using flowcharts and common JavaScript patterns\r\n\r\nMaster the JavaScript fundamentals: variables, if/else, operators, boolean logic, functions, arrays, objects, loops, strings, and more\r\n\r\nLearn modern JavaScript (ES6+) from the beginning: arrow functions, destructuring, spread operator, default arguments, optional chaining (ES2020), and more\r\n\r\nHow JavaScript works behind the scenes: engines, the call stack, hoisting, scoping, the \'this\' keyword, reference values, and more.\r\n\r\nDeep dive into functions: arrow functions, first-class and higher-order functions, bind, and closures.\r\n\r\nDeep dive into object-oriented programming: prototypal inheritance, constructor functions (ES5), classes (ES6), encapsulation, abstraction, inheritance, and polymorphism. [This is like a small standalone course]\r\n\r\nDeep dive into asynchronous JavaScript: the event loop, promises, async/await, and error handling. You will use these to access data from third-party APIs with AJAX calls. [This is like a small standalone course]\r\n\r\nLearn modern tools that are used by professional web developers: NPM, Parcel (module bundler), Babel, and ES6 modules\r\n\r\nCheck out the course curriculum for an even more detailed overview of the content :)', 'No coding experience is necessary to take this course! I take you from beginner to expert!\r\nAny computer and OS will work — Windows, macOS or Linux. We will set up your text editor the course.\r\nA basic understanding of HTML and CSS is a plus, but not a must! The course includes an HTML and CSS crash course.', 'This course is for you if...\r\n\r\n... you want to gain a true and deep understanding of JavaScript\r\n\r\n... you have been trying to learn JavaScript but: 1) still don\'t really understand JavaScript, or 2) still don\'t feel confident to code real apps\r\n\r\n... you are interested in using a library/framework like React, Angular, Vue, or Node.js in the future\r\n\r\n... you already know JavaScript and are looking for an advanced course. This course includes expert topics!\r\n\r\n... you want to get started with programming: JavaScript is a great first language!', '2022-07-24 17:11:46', NULL),
(6, 'Fundamentals of DSLR Photography', 'images/course/1739277887289238.jpg', 'This introductory photography class is a smart, inspiring way to get up to speed quickly. Taught by photographer Justin Bridges, you\'ll learn how to manually balance shutter speed, aperture, and ISO to achieve perfect exposure, every time — and then hit the NYC streets to see it all in action.\r\n\r\nEasy-to-follow lessons include how to:\r\n\r\nBalance shutter speed, aperture, and ISO for perfect exposure (and conquer fear of \"manual\" mode)\r\nFreeze and blur motion via shutter speed\r\nControl background blur via aperture\r\nEdit your photos in 5 minutes or less\r\nPlus, you\'ll also learn Justin\'s go-to camera settings, must-have gear, and recommendations on a budget. By the end, you\'ll know how to master your settings, shoot in manual mode for total control, and create the pro-level photos you\'ve always imagined.\r\n\r\n______________', 'What You\'ll Learn in Fundamentals of DSLR Photography\r\n\r\nIntroduction. Justin Bridges will go over the fundamentals of how to use your camera, discussing camera settings like ISO, aperture, and shutter speed. You’ll take a look at the “exposure pyramid.”\r\n\r\nUnderstanding your DSLR. You’ll learn exactly what happens when you click the button to take a photograph and dive deeper into what is really meant by the exposure pyramid and its three elements:\r\n\r\nShutter speed. You’ll learn how to represent shutter speed as a number and how different shutter speeds capture motion.\r\nAperture. You’ll learn how aperture settings can affect the amount of light let into your photograph and dictate a distinction between the foreground and background of your image.\r\nISO. You’ll see why Justin calls ISO “the weapon of last resort” and learn how to avoid digital noise in your photographs.', 'You usually apply in the academic year before you plan to go to college. The  earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.)\r\n\r\nIf you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve.\r\n\r\nTo find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'The Ultimate Guide to Learning How to Use Your First DSLR\r\nDive deeper into metering\r\nDive deeper into focal Length', '2022-07-24 17:17:30', NULL),
(7, 'Create an Ocean Loop in Cinema 4D and After Effects', 'images/course/1739278233006250.jpg', 'n this class, you will learn how to make a cinematic ocean loop animation in Cinema 4D and After Effects. In addition to the technical process, you will also learn techniques for coming up new ideas or expanding your existing ideas.', 'You will learn various techniques & tools that you can use for motion graphics projects in general such as:\r\n\r\nCreating on ocean simulation using a free plugin for Cinema 4D called Hot4D\r\nCamera animation in Cinema 4D\r\nCreating a scene & animation that loops seamlessly\r\nA cinematic lighting and rendering style in Cinema 4D using only reflections.\r\nAtmospheric and fog effects in Cinema 4D\r\nOutput/render settings from Cinema 4D. Optimizing for both Quality & Speed\r\nImporting the rendered sequence/s into After Effects\r\nUsing After Effects for finishing touches, applying glow and color adjustments.\r\nThe best export setting in Premier Pro for Instagram and YouTube.\r\nThis class is suitable for users of all levels. Beginners who have not used the software before will be able to follow along. Intermediate to advanced users will be able to learn about or expand their knowledge of how to make looping scenes in Cinema 4D.\r\n\r\nIf you need any help use the community section and I will respond as soon as I can. Remember to add screenshots!', 'You usually apply in the academic year before you plan to go to college. The earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.) If you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve. To find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'This class is suitable for users of all levels. Beginners who have not used the software before will be able to follow along. Intermediate to advanced users will be able to learn about or expand their knowledge of how to make looping scenes in Cinema 4D.\r\n\r\nIf you need any help use the community section and I will respond as soon as I can. Remember to add screenshots!', '2022-07-24 17:22:59', NULL),
(8, 'Psychology in Web Design: How to Create a Hero Section That Converts', 'images/course/1739278636950125.jpeg', 'Learn the psychology of web design and copywriting behind high converting hero sections. Create one for yourself. Become an expert at understanding online human behavior.\r\n\r\nRinaldo has spent years in the agency world working with some of the biggest brands in the world like Samsung, Airbnb, EA, SAP, SoftBank, 3M, and many more.\r\n\r\nDrawing from academic research in cognitive and behavioral psychology paired with real-life experience this class teaches you how to influence visitor\'s behavior on your website.', 'In this class you\'ll learn:\r\n\r\n7 research-backed frameworks to write your heading and subheading\r\n2 psychological principles to increase the persuasiveness of your CTA button copy\r\n2 ways to choose a graphic to motivate your visitor to take action\r\nA research-backed technique to position your hero section layout\r\nImportant design heuristic that most designers get wrong\r\n2 tips to start picking out high-quality fonts right away\r\nA practical approach to establishing a type scale\r\nWhy psychology of color isn\'t super practical\r\nEasy to implement technique to make your hero section look modern\r\nTotal of 16 outlined psychological principles\r\nFor each tactic in the class there are 3 sections:\r\n\r\nPrinciple (psychological research background)\r\nExample (conversion optimization best practices)\r\nDesign (latest UI & UX approach)\r\nYou’ll be creating:\r\n\r\nA high converting hero-section for your website using proven research-based frameworks from this class\r\nWhether you’re a seasoned pro or just starting out, you should find some valuable takeaways.', 'You usually apply in the academic year before you plan to go to college. The earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.) If you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve. To find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'Your class project is to create a hero-section for your own website or a landing page using proven research-based frameworks from this class. If this sounds like too much work to you, don’t fret, it actually isn’t. With the actionable frameworks provided in each lesson, you can execute each step in no time', '2022-07-24 17:28:01', '2022-07-24 17:29:25'),
(9, 'eCommerce for Creatives: Sell Your Artwork with an Online Store', 'images/course/1739278853699012.jpg', 'Turning your passion into profit is an art of its own. Level up your creative pursuit by learning how to build, launch, and bring traffic to an online store with artist and entrepreneur, Alicia Souza! \r\n\r\nAs an illustrator, Alicia has been drawing and creating for as long as she can remember. With her loveable characters and lively patterns, she has crafted a community of over 400k Instagram followers and created for brands like Google, Yahoo, and Times of India.\r\n\r\nAnd yet, business—and all the administrative steps that go into creating one—didn’t always come as easily as bringing her illustrations to life. From legal procedures to market research to pricing her products, no amount of art-filled notebooks had prepared her for this side of building a business.\r\n\r\nNow, years into her entrepreneurial journey, Alicia is here to share how you can unlock your inner entrepreneur and create a home for your creative pursuit through an online shop. You’ll learn the basics of starting a business, finding your market, creating a brand identity and finally building a website that makes your customers feel.', 'Together with Alicia, you’ll learn to:\r\n\r\nTake care of the nitty-gritty of starting a business\r\nFlourish financially by correctly pricing your products (including hidden costs!)\r\nBuild a website with a visual style and brand story that aligns with you\r\nLeverage social media to bring traffic to your beautiful new store\r\nEach lesson is packed with stories, examples, and actionable do-to items. Every step will bring you that much closer to getting your product in the hands of your biggest fans. Plus, get a sneak peek into the behind-the-scenes of Alicia’s business and how she’s found success in her field. \r\n\r\nWhether you’re just beginning your entrepreneurial pursuit or you already have a following around your creative works, this class will give you exactly what you need to build an online shop and bring you one step closer to your first sale! By the end, you\'ll have created a website made to house your exact products, welcome your ideal customers, and guide you to further growth. \r\n\r\n––––––––––\r\n\r\nWhile this class is specifically geared towards creatives who want to launch an online shop, any business owner looking to sell products online can learn from this class. Download your calculator, brand story worksheet, and business basics checklist to follow along, or simply use a pen and paper. Since you know yourself and your business best, we invite you to adapt every practice and exercise to work for you and your creative endeavor.', 'You usually apply in the academic year before you plan to go to college. The earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.) If you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve. To find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'Your class project is to create a hero-section for your own website or a landing page using proven research-based frameworks from this class. If this sounds like too much work to you, don’t fret, it actually isn’t. With the actionable frameworks provided in each lesson, you can execute each step in no time', '2022-07-24 17:32:51', NULL),
(10, 'Vlogging for Business: Build Your Brand with Video', 'images/course/1739278996297498.jpeg', 'Do you want to develop more connection and trust with your customers? Give your brand a human face through the power of vlogging!\r\n\r\nGetting in front of the camera and \"being yourself\" can be intimidating, but YouTuber and content strategist Erin Winters is here to help. Erin has successfully used vlogging to land more than 300k subscribers and grow her own business. Now she\'s ready to teach you how to vlog for business too. Whether you\'re a freelancer, small business owner, or a marketing pro working for a big brand, this class will cover everything you need to know to get started.', 'Through exercises and examples, you\'ll learn how vlogging can help:\r\n\r\nHumanize your brand\r\nMarket without being sales-y\r\nBuild community and connection\r\nPlus, Erin shares her favorite tips, tricks, and strategies for planning, shooting, editing, and publishing vlog content across distribution platforms. \r\n\r\nIf you’re looking for a way to incorporate more video marketing in your own business plans this is the perfect place to start. Erin offers straight-forward, beginner-friendly advice anyone can use to launch and grow a successful business vlog—and a successful business!\r\n\r\nThis class is for anyone new to vlogging for business. You don\'t need dedicated equipment or a lot of video experience to get started. Erin will show you how to start small and offer insights on upping your game when the time is right.', 'You usually apply in the academic year before you plan to go to college. The earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.) If you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve. To find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'Your class project is to create a hero-section for your own website or a landing page using proven research-based frameworks from this class. If this sounds like too much work to you, don’t fret, it actually isn’t. With the actionable frameworks provided in each lesson, you can execute each step in no time', '2022-07-24 17:35:07', NULL),
(11, 'Intro to UI/UX for Graphic Designers: Adobe Xd', 'images/course/1739279150337098.png', 'Whether you want to expand the services you can offer as a designer or transition into a new job entirely, UI/UX and product design skills are extremely advantageous. Many creatives like you know this, but have no idea where to start.\r\n\r\nJoin strategic designer, Maddy Beard, as she helps you start on your path towards honing these skills. The best way to learn UI/UX is by practicing it and taking an active role in your learning. That’s why, during this class you\'ll be guided through the creation of a UI/UX project that is unique to you - a perfect way to kick-start your portfolio. Along the way, you’ll learn about each step of the process and how to apply them effectively.\r\n\r\nThis class is perfect for graphic designers and other creatives who have the basics of design down, but are eager to expand their skill-set to include UI/UX. Don’t worry if you’ve never opened Adobe Xd before, this class covers the foundations as well as Maddy\'s favorite features and most-used tricks.\r\n\r\nAfter you complete this class, you’ll be able to repeat this process over and over again, put your own spin on it, and fill out your portfolio to ultimately land an exciting job or freelance client. Practice makes better, so don’t be afraid to return to this class often.', 'Here’s what you’ll need:\r\n\r\nPen & paper\r\nSticky notes (or scraps of paper)\r\nA printer (optional, if you’d like to print out the iphone template provided)\r\nAdobe Xd (free to download!)\r\nAdobe Premiere Pro or iMovie', 'You usually apply in the academic year before you plan to go to college. The earliest you can send in a finished application is the September before you want to start your course (unless you are applying to postpone your place until the following year.) If you haven\'t done your exams by this stage, your application will be based on the grades your teachers or lecturers predict you will achieve. To find out how to apply and about the deadlines you\'ll need to meet, follow the link below:', 'Your class project is to create a hero-section for your own website or a landing page using proven research-based frameworks from this class. If this sounds like too much work to you, don’t fret, it actually isn’t. With the actionable frameworks provided in each lesson, you can execute each step in no time', '2022-07-24 17:37:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_banners`
--

CREATE TABLE `course_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_banners`
--

INSERT INTO `course_banners` (`id`, `course_banner`, `created_at`, `updated_at`) VALUES
(4, 'images/banner/course/1739085384337056.jpeg', '2022-07-22 14:17:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PROFESSIONAL TEACHER', 'Start learning from experienced instructors to improve your skills using live knowledge flow. The most powerful online learning platform for all kinds of instructors. Be a global teacher. Learn from anywhere, anytime.', '2022-05-26 05:05:55', '2022-07-24 16:07:09'),
(2, 'ONLINE COURSES', 'Learn on your schedule Study any topic, anytime. explore thousands of courses for free ever! You did it! You\'ve created, coded. You\'ve equipped yourself with a skill that is seriously valuable — what will you do now?', '2022-05-26 05:12:40', '2022-07-24 16:09:09');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_19_070541_create_sessions_table', 1),
(8, '2022_05_22_202310_create_slides_table', 2),
(13, '2022_05_25_220421_create_notices_table', 4),
(14, '2022_05_25_165721_create_features_table', 5),
(15, '2022_05_29_105948_create_chooses_table', 6),
(16, '2022_05_29_140437_create_courses_table', 7),
(18, '2022_05_30_062722_create_testimonials_table', 8),
(20, '2022_06_10_180620_create_blogs_table', 9),
(21, '2022_06_11_195304_create_teachers_table', 10),
(22, '2022_06_12_084924_create_abouts_table', 11),
(23, '2022_06_12_115324_create_contacts_table', 12),
(24, '2022_06_12_135129_create_contact_forms_table', 13),
(27, '2022_06_12_230241_create_banners_table', 14),
(28, '2022_06_12_232754_create_course_banners_table', 15),
(29, '2022_07_23_095729_create_teacher_banners_table', 16),
(31, '2022_07_23_104756_create_blog_banners_table', 17),
(32, '2022_07_23_104956_create_contact_banners_table', 18),
(33, '2022_07_23_194820_create_subscribers_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `event_date`, `description`, `created_at`, `updated_at`) VALUES
(4, '2022-07-25', 'We have modified the 2nd number lesson. Those who have problems can watch the video again.\r\n\r\nThanks all.', '2022-07-24 15:49:25', '2022-07-24 15:50:08'),
(5, '2022-07-29', 'New topics(Bootstarp) will be uploaded  21 July 2022\r\n\r\nAttention, please! We have completed the video tutorial for bootstrap 5. It will be upload on Aug 2, 2022.', '2022-07-24 15:51:18', NULL);

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
('arif@gmail.com', '$2y$10$1HPq5cpPZLmPnVVeqwKTL.TdAiZ76vmKWkiPXKPn9ANT/8vKYAAjq', '2022-07-24 13:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4svJaEJ5b7wIYKkH1EC3wlqaKU9sBop2PDkOu1XE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVZmU2xIRHhxVEZzNlhzSDJ3Sm0weEJlRlVCUkJKSm5RTDRMWkxwWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwvcG9zdHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1658747687);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Learn Anytime', 'Learn Wherever, Whenever, However...\r\n\r\nOnline Classes', 'images/slider/1739271883879580.jpg', '2022-07-24 15:42:04', NULL),
(11, 'Online Courses', 'Explore a variety of fresh topics | Search Online.. Explore Online', 'images/slider/1739272055869281.jpg', '2022-07-24 15:44:48', NULL),
(12, 'Learn Smart Online', 'Become a Better Researcher | Online Classes', 'images/slider/1739272214909515.jpg', '2022-07-24 15:47:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'wp.dev.tahsin786@gmail.com', '2022-07-24 00:56:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `position`, `description`, `degree`, `experience`, `hobbies`, `faculty`, `mail`, `call`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Mashiyath Tahsin', 'Co-Founder Of  The Visual', 'I am a  solutions architect, consultant and software developer that has a particular interest in all things related to Big Data, Cloud & API. He\'s also a many-times best seller instructor on Udemy for his courses in Apache Kafka and AWS.', 'B.Sc in CSE', 'Digital creator', 'Singing, Riding, Travelling, Eating', 'Web Science and Technology', 'mashiyathtahsin4747@gmail.com', '+8801739344747', 'images/teacher/1739276723021279.jpg', '2022-07-24 16:58:59', NULL),
(5, 'Rabbi Husen Roki', 'I Am Founder Of  The Visual', 'My life’s mission is to help novice and professional software engineers increase their skills, make more money, and ultimately change their lives for the better.', 'B.Sc in CSE', 'I can help you with Laravel, Python and JavaScript issues, particularly in web and backend development.', 'Riding, Travelling, Playing, Watch Movie', 'Web Science and Technology', 'wp.dev.tahsin786@gmail.com', '+8801893904686', 'images/teacher/1739277028900003.jpg', '2022-07-24 17:03:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_banners`
--

CREATE TABLE `teacher_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_banners`
--

INSERT INTO `teacher_banners` (`id`, `teacher_banner`, `created_at`, `updated_at`) VALUES
(1, 'images/banner/teacher/1739137781210494.png', '2022-07-23 04:10:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `study_at`, `title`, `description`, `image`, `bg_image`, `created_at`, `updated_at`) VALUES
(3, 'Francis W.', 'Master in Javascript', NULL, 'A great course, It has taken me 6 months to complete with a full time job in tow. Just about every critical JS topic has been covered at length and it\'s now my turn to practice on my own and hone my skills. Jonas\' teaching was superb, easy to follow and quite professional. My only gripe; I felt the last two chapters were not as fluid as all the previous ones, doable, but not as easy to follow. All in all, amazing', 'images/testimonial/1739304390692830.jpg', 'images/testimonial/1739304390704700.jpg', '2022-07-25 00:18:45', NULL),
(4, 'Saira G.', 'Master in Laravel', NULL, 'What an amazing course. So well explained. I have learnt so much. Watching the videos a second time helped the concepts to sink in. This course prepares you to think like a developer. Thank you Jonas. You are amazing!', 'images/testimonial/1739304660169165.jpg', 'images/testimonial/1739304660171815.png', '2022-07-25 00:23:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Rabbi Husen Roki', 'wp.dev.tahsin786@gmail.com', '2022-05-22 14:12:06', '$2y$10$AjxwVaBKbxf98VBQmv7d/ulHX.Zt08Ac4MGm5AqZSmEJJc0WrfAEG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-22 14:11:22', '2022-05-22 14:12:06'),
(7, 'Jiku', 'jiku12@gmail.com', '2022-05-27 07:58:25', '$2y$10$Ute.wLTG3ZPRyGk9yeOBkeIJnsr7Lxy6QgDA19qOXDIHIC9DgCqX2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 07:49:16', '2022-05-27 07:58:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_banners`
--
ALTER TABLE `blog_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_banners`
--
ALTER TABLE `contact_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_banners`
--
ALTER TABLE `course_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_banners`
--
ALTER TABLE `teacher_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_banners`
--
ALTER TABLE `blog_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_banners`
--
ALTER TABLE `contact_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course_banners`
--
ALTER TABLE `course_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_banners`
--
ALTER TABLE `teacher_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
