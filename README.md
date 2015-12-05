# otmonitoring
We introduce a methodology and a framework to let mentors screen a few critical angles identified with online tests, for example, learner behaviour and test quality. The methodology incorporates the logging of critical information identified with learner interaction with the framework and the execution of online tests and exploits data visualization to highlight information valuable to let mentors review and enhance the entire evaluation process. We have concentrated on the revelation of behavioural pattern of learners and conceptual relationship among test items. By analysing the data visualization charts, we have detected several previously unknown strategies used by learners. Last, we have recognized a few correlations among question, which gave us valuable feedback on the test quality.

Index Terms – Data Mining, data visualization and the knowledge discovery process, Distance Learning, Attribute oriented Induction Algorithm.
This project is based on Gennaro Costagliola, Member, IEEE, ‘’ Monitoring Online Test Through Data Visualization‘’ Vittorio Fuccella,Massimiliano Giordano, and Giuseppe Polese research paper
Copy paste the belox content in Mysql database
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 02:38 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `etest`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE IF NOT EXISTS `add` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`aid`, `username`, `password`) VALUES
(1, 'exam-builder', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(11) NOT NULL,
  `cat_avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_avatar`) VALUES
(1, 'java', 'image/JAVA.png'),
(2, 'c', 'image/c.jpg'),
(3, 'rdbms', 'image/rdbms.jpg'),
(4, 'CS', 'image/cs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `geo`
--

CREATE TABLE IF NOT EXISTS `geo` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `cmarks` varchar(50) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `geo`
--

INSERT INTO `geo` (`gid`, `country`, `cmarks`) VALUES
(1, 'Vatican City', '50'),
(2, 'Venezuela', '50'),
(3, 'Vietnam', '50'),
(4, 'Wallis and Futuna', '50'),
(5, 'Western Sahara', '50'),
(6, 'Yemen', '50'),
(7, 'Zambia', '50'),
(8, 'Zimbabwe', '50'),
(12, 'United States', '7.5000'),
(13, 'India', '10.0000'),
(14, 'Albania', '25.0000'),
(16, 'United Kingdom', '0.0000'),
(17, 'China', '5.0000');

-- --------------------------------------------------------

--
-- Table structure for table `hit`
--

CREATE TABLE IF NOT EXISTS `hit` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `qid` int(11) NOT NULL,
  `count` int(50) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `hit`
--

INSERT INTO `hit` (`hid`, `question`, `qid`, `count`) VALUES
(3, 'Whic is a valid keyword in Java?', 2, 11),
(4, 'Which is the reserved word in a programming language?', 1, 26),
(6, '\r\n\r\nWhich cannot directly cause a thread to stop executing?', 6, 11),
(7, ' 	\r\n\r\nWhich two of the following methods are defined in class Thread?\r\n\r\n   1. start()\r\n   2. wait()\r\n   3. notify()\r\n   4. run()\r\n   5. terminate()\r\n', 7, 7),
(8, ' 	\r\n\r\nYou want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective?', 18, 13),
(9, 'void start() {  \r\n    A a = new A(); \r\n    B b = new B(); \r\n    a.s(b);  \r\n    b = null; /* Line 5 */\r\n    a = null;  /* Line 6 */\r\n    System.out.println("start completed"); /* Line 7 */\r\n} \r\n\r\n\r\nWhen is the B object, created in line 3, eligible for garbage collection?', 15, 4),
(10, '\r\n\r\nGiven a method in a protected class, what access modifier do you use to restrict access to that method to only the other members of the same class?', 20, 6),
(11, '\r\n\r\nWhich will contain the body of the thread?', 9, 7),
(12, ' 	\r\n\r\nWhich two are valid constructors for Thread?\r\n\r\n  1.  Thread(Runnable r, String name)\r\n  2.  Thread()\r\n  3.  Thread(int priority)\r\n  4.  Thread(Runnable r, ThreadGroup g)\r\n  5.  Thread(Runnable r, int priority)\r\n', 4, 2),
(13, '  	\r\n\r\nWhich class or interface defines the wait(), notify(),and notifyAll() methods?', 12, 5),
(14, ' 	\r\n\r\nWhich is true about an anonymous inner class?', 13, 6),
(15, ' 	\r\n\r\nWhich method must be defined by a class implementing the java.lang.Runnable interface?', 10, 8),
(16, '\r\n\r\nWhich method registers a thread in a thread scheduler?', 11, 6),
(17, ' 	\r\n\r\npublic class Test { }\r\n\r\nWhat is the prototype of the default constructor?', 19, 4),
(18, ' 	\r\n\r\nWhat allows the programmer to destroy an object x?', 17, 8),
(19, 'What will be the output of the program?\r\n\r\n\r\nclass PassA \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        PassA p = new PassA();\r\n        p.start();\r\n    }\r\n\r\n    void start() \r\n    {\r\n        long [] a1 = {3,4,5};\r\n        long [] a2 = fix(a1);\r\n        System.out.print(a1[0] + a1[1] + a1[2] + " ");\r\n        System.out.println(a2[0] + a2[1] + a2[2]);\r\n    }\r\n\r\n    long [] fix(long [] a3) \r\n    {\r\n        a3[1] = 7;\r\n        return a3;\r\n    }\r\n}\r\n', 3, 2),
(20, 'Given a method in a protected class, what access modifier do you use to restrict access to that method to only the other members of the same class?', 16, 1),
(21, 'Which is a valid declarations of a String?', 8, 1),
(22, 'Which one of the following will declare an array and initialize it with five numbers?', 5, 4),
(23, '', 0, 5),
(24, 'Which one creates an instance of an array?', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `sub_id` int(11) NOT NULL,
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `level1` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132300 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`sub_id`, `qid`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `level1`) VALUES
(1, 1, 'Which one of these lists contains only Java programming language keywords?', 'class, if, void, long, Int, continue', 'goto, instanceof, native, finally, default, throws', 'try, virtual, throw, final, volatile, transient', 'strictfp, constant, super, implements, do', 'goto, instanceof, native, finally, default, throws', '1'),
(1, 2, 'Which will legally declare, construct, and initialize an array?', 'int [] myList = {"1", "2", "3"};', 'int [] myList = (5, 8, 2);', 'int myList [] [] = {4,9,7,0};', 'int myList [] = {4, 3, 7};', 'int myList [] = {4, 3, 7};', '1'),
(1, 3, 'Which is a reserved word in the Java programming language?', 'method', 'native', 'subclasses', 'reference', 'native', '1'),
(1, 4, 'Which is a valid keyword in java?', 'interface', 'string', 'Float', 'unsigned', 'interface', '1'),
(1, 5, 'Which one of the following will declare an array and initialize it with five numbers?', 'Array a = new Array(5);', 'int [] a = {23,22,21,20,19};', 'int a [] = new int[5];', 'int [5] array;', 'int [] a = {23,22,21,20,19};', '1'),
(1, 6, 'Which is the valid declarations within an interface definition?', 'public double methoda();', 'public final double methoda();', 'static void methoda(double d1);', 'protected void methoda(double d1);', 'public double methoda();', '1'),
(1, 7, 'Which one is a valid declaration of a boolean?', 'boolean b1 = 0;', 'boolean b2 = ''false'';', 'boolean b3 = false;', 'boolean b4 = Boolean.false();', 'boolean b3 = false;', '1'),
(1, 8, 'Which is a valid declarations of a String?', 'String s1 = null;', 'String s2 = ''null'';', 'String s3 = (String) ''abc'';', 'String s4 = (String) ''\\ufeed'';', 'String s1 = null;', '1'),
(1, 9, 'What is the numerical range of a char?', '-128 to 127', '-(215) to (215) - 1', '0 to 32767', '0 to 65535', '0 to 65535', '1'),
(1, 10, 'You want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective?', 'public', 'private', 'protected', 'transient', 'protected', '1'),
(1, 11, 'What is the most restrictive access modifier that will allow members of one class to have access to members of another class in the same package?', 'public', 'protected', 'default access', 'abstract', 'default access', '1'),
(1, 12, 'Which cause a compiler error?', 'int[ ] scores = {3, 5, 7};', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', 'String cats[ ] = {"Fluffy", "Spot", "Zeus"};', 'boolean results[ ] = new boolean [] {true, false, ', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', '1'),
(1, 13, 'You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective?', 'public', 'private', 'protected', 'default access', 'default access', '1'),
(1, 14, 'Which one creates an instance of an array?', 'int[ ] ia = new int[15];', 'float fa = new float[20];', 'char[ ] ca = "Some String";', 'int ia[ ] [ ] = { 4, 5, 6 }, { 1,2,3 };', 'int[ ] ia = new int[15];', '1'),
(1, 15, 'Which of the following class level (nonlocal) variable declarations will not compile?', 'protected int a;', 'transient int b = 3;', 'private synchronized int e;', 'volatile int d;', 'private synchronized int e;', '1'),
(1, 16, 'Given a method in a protected class, what access modifier do you use to restrict access to that method to only the other members of the same class?', 'final', 'static', 'private', 'protected', 'private', '1'),
(1, 17, 'Which is a valid declaration within an interface?', 'public static short stop = 23;', 'protected short stop = 23;', 'transient short stop = 23;', 'final void madness(short stop);', 'public static short stop = 23;', '1'),
(1, 18, 'Suppose that you would like to create an instance of a new Map that has an iteration order that is the same as the iteration order of an existing instance of a Map. Which concrete implementation of the Map interface should be used for the new instance?', 'TreeMap', 'HashMap', 'LinkedHashMap', 'The answer depends on  existing instance', 'LinkedHashMap', '1'),
(1, 19, 'Which class does not override the equals() and hashCode() methods, inheriting them directly from class Object?', 'java.lang.String', 'java.lang.Double', 'java.lang.StringBuffer', 'java.lang.Character', 'java.lang.StringBuffer', '1'),
(1, 20, 'Which collection class allows you to grow or shrink its size and provides indexed access to its elements, but whose methods are not synchronized?', 'java.util.HashSet', 'java.util.LinkedHashSet', 'java.util.List', 'java.util.ArrayList', 'java.util.ArrayList', '1'),
(1, 132262, '<pre class="code-pre" style="border: 1px dashed #93b7d5; padding: 10px; font-size: 12px; background-color: #f8f8f8;"><code class="java" style="font-family: ''courier new'', courier;"><span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">public</span> <span class="class" style="font-family: courier, ''courier new'';"><span class="keyword" style="color: #0000ff;">class</span> <span class="title" style="color: #ee3b3b;">Test</span> \r\n{</span>  \r\n    <span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">public</span> <span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">static</span> <span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">void</span> main(String[] args) \r\n    { \r\n        <span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">int</span> x = <span class="number" style="font-family: courier, ''courier new'';">0</span>;  \r\n        <span class="keyword" style="color: #0000ff; font-family: courier, ''courier new'';">assert</span> (x &gt; <span class="number" style="font-family: courier, ''courier new'';">0</span>) ? <span class="string" style="color: #ee3b3b; font-family: courier, ''courier new'';">"assertion failed"</span> : <span class="string" style="color: #ee3b3b; font-family: courier, ''courier new'';">"assertion passed"</span> ; \r\n        System.out.println(<span class="string" style="color: #ee3b3b; font-family: courier, ''courier new'';">"finished"</span>);  \r\n    } \r\n}</code></pre>', 'finished', 'Compiliation fails.', 'An AssertionError is thrown and finished is output', 'An AssertionError is thrown with the message "asse', 'Compiliation fails.', ''),
(1, 132299, 'What is the name of the method used to start a thread execution?', 'init();', 'start();', 'run();', 'resume();', 'start();', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `avatar` varchar(50) NOT NULL DEFAULT 'uploads/default-user-image.png',
  `thumbnail` varchar(50) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT '0',
  `hash` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `username`, `password`, `email`, `country`, `name`, `gender`, `birthday`, `avatar`, `thumbnail`, `verify`, `hash`) VALUES
(2, 'ravi2kr6', 'ravi1', 'ravi2kr6@gmail.com', 'India', 'Ravi Kumar', 'Male', '14.09.2015', 'uploads/092f01c.jpg', '', 0, '371bce7dc83817b7893bcdeed13799b5'),
(4, 'abhi', 'abhi', 'abhi@abhi', 'United States', 'abhishek', 'Male', '10.09.2015', 'uploads/default-user-image.png', '', 0, '01f78be6f7cad02658508fe4616098a9'),
(5, 'abhichauhan1994', 'datavisualisation', 'abhichauhan1994@live.com', 'India', 'Abhishek', 'Male', '09.05.1995', 'uploads/default-user-image.png', '', 0, '8b5040a8a5baf3e0e67386c2e3a9b903'),
(6, 'gaurav', 'gaurav', 'gaurav@g', 'Albania', 'gaurav', 'Male', '09.10.2015', 'uploads/default-user-image.png', '', 0, 'c361bc7b2c033a83d663b8d9fb4be56e'),
(7, 'varun', 'varun', 'varun@v', 'United Kingdom', 'varun', 'Male', '17.11.2015', 'uploads/default-user-image.png', '', 0, '142949df56ea8ae0be8b5306971900a4'),
(8, 'nishant', 'nishant', 'nishant@nishant', 'China', 'nishant', 'Male', '09.05.1995', 'uploads/default-user-image.png', '', 0, '5878a7ab84fb43402106c575658472fa'),
(9, 'karthik', 'kat', 'karthik@k', 'Argentina', 'Karthik', 'Male', '04.11.2015', 'uploads/default-user-image.png', '', 0, 'ede7e2b6d13a41ddf9f4bdef84fdc737'),
(10, 'mmaurya', '123456', 'mmaurya0563@gmail.com', 'United States', 'mahendra', 'Male', '05.12.1993', 'uploads/default-user-image.png', '', 0, 'd2ed45a52bc0edfa11c2064e9edee8bf'),
(11, 'dummy', 'dummy', 'dummy@d', 'United States', 'dummy', 'Male', '23.12.2015', 'uploads/default-user-image.png', '', 0, '92262bf907af914b95a0fc33c3f33bf6'),
(12, 'hunny', 'hunny', 'hunny@gmail.com', 'United States', 'hunny', 'Male', '07.12.2015', 'uploads/default-user-image.png', '', 0, '362e80d4df43b03ae6d3f8540cd63626');

-- --------------------------------------------------------

--
-- Table structure for table `reject`
--

CREATE TABLE IF NOT EXISTS `reject` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `reject`
--

INSERT INTO `reject` (`rid`, `email`, `reason`) VALUES
(1, 'abhi@abhi', '<p>hjk</p>'),
(2, 'varun@v', '<p>gdfgdfg</p>'),
(34, 'mmaurya0563@gmail.com', '<p>xyz</p>'),
(35, 'ravi2kr6@gmail.com', ''),
(37, 'gaurav@g', ''),
(38, 'gaurav@g', ''),
(39, 'gaurav@g', ''),
(40, 'dummy@d', ''),
(41, 'dummy@d', ''),
(42, 'dummy@d', ''),
(43, 'dummy@d', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `question` varchar(50) NOT NULL,
  `correctanswer` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `level1` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `nop` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=184 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `email`, `qid`, `subject`, `answer`, `question`, `correctanswer`, `marks`, `level1`, `time`, `nop`) VALUES
(79, 'abhi@abhi', '1', '', 'method', '', 'ans', '0', '', '16.865000009536743', ''),
(80, 'abhi@abhi', '2', '', 'string', '', 'interface', '0', '', '5.3480000495910645', ''),
(81, 'abhichauhan1994@live.com', '6', '', 'Calling the wait() method on an object.', '', 'Calling notify() method on an object.', '0', '', '4.364000082015991', ''),
(82, 'abhichauhan1994@live.com', '6', '', 'Calling the SetPriority() method on a Thread objec', '', 'Calling notify() method on an object.', '0', '', '10.891000032424927', ''),
(83, 'abhichauhan1994@live.com', '1', '', 'NATIVE', '', 'ans', '0', '', '6.322000026702881', ''),
(84, 'abhichauhan1994@live.com', '1', '', 'NATIVE', '', 'ans', '0', '', '17.575999975204468', ''),
(85, 'abhichauhan1994@live.com', '1', '', 'subclass', '', 'ans', '0', '', '22.02900004386902', ''),
(86, 'abhichauhan1994@live.com', '7', '', '2 and 3', '', '1 and 4', '0', '', '3.3989999294281006', ''),
(87, 'abhichauhan1994@live.com', '7', '', '', '', '1 and 4', '0', '', '3.0269999504089355', 'y'),
(88, 'abhichauhan1994@live.com', '18', '', 'public', '', 'protected', '0', '', '5.203999996185303', ''),
(89, 'abhichauhan1994@live.com', '15', '', 'after line 7', '', 'There is no way to be absolutely certain.', '0', '', '3.3489999771118164', ''),
(90, 'abhichauhan1994@live.com', '15', '', 'adter line 5', '', 'There is no way to be absolutely certain.', '0', '', '10.579999923706055', ''),
(91, 'abhichauhan1994@live.com', '1', '', 'reference', '', 'ans', '0', '', '2.6440000534057617', ''),
(92, 'abhichauhan1994@live.com', '18', '', '', '', 'protected', '0', '', '2.3269999027252197', 'y'),
(93, 'abhichauhan1994@live.com', '6', '', 'Calling the SetPriority() method on a Thread objec', '', 'Calling notify() method on an object.', '0', '', '3.122000217437744', ''),
(94, 'abhichauhan1994@live.com', '18', '', 'transient', '', 'protected', '0', '', '2.5169999599456787', ''),
(95, 'abhichauhan1994@live.com', '20', '', 'static', '', 'private', '0', '', '1.6570000648498535', ''),
(96, 'abhichauhan1994@live.com', '20', '', 'private', '', 'private', '5', '', '5.288000106811523', ''),
(97, 'abhichauhan1994@live.com', '9', '', 'stop();', '', 'run();', '0', '', '2.00600004196167', ''),
(98, 'abhichauhan1994@live.com', '4', '', '2 and 4', '', '1 and 2', '0', '', '19.997999906539917', ''),
(99, 'abhichauhan1994@live.com', '12', '', 'runnable', '', 'object', '0', '', '6.7190001010894775', ''),
(100, 'abhichauhan1994@live.com', '12', '', 'class', '', 'object', '0', '', '21.94000005722046', ''),
(101, 'abhichauhan1994@live.com', '6', '', 'Calling the wait() method on an object.', '', 'Calling notify() method on an object.', '0', '', '20.028000116348267', ''),
(102, 'abhichauhan1994@live.com', '6', '', 'Calling notify() method on an object.', '', 'Calling notify() method on an object.', '5', '', '23.76900005340576', ''),
(103, 'abhichauhan1994@live.com', '13', '', 'It can extend exactly one class and implement exac', '', 'It can extend exactly one class or implement exact', '0', '', '1.746999979019165', ''),
(104, 'abhichauhan1994@live.com', '9', '', 'stop();', '', 'run();', '0', '', '1.440000057220459', ''),
(105, 'abhichauhan1994@live.com', '9', '', 'stop();', '', 'run();', '0', '', '0.8789999485015869', ''),
(106, 'abhichauhan1994@live.com', '10', '', 'void run()', '', 'public void run()', '0', '', '0.8599998950958252', ''),
(107, 'abhichauhan1994@live.com', '15', '', 'after line 6', '', 'There is no way to be absolutely certain.', '0', '', '1.1549999713897705', ''),
(108, 'abhichauhan1994@live.com', '2', '', 'interface', '', 'interface', '5', '', '2.065000057220459', ''),
(109, 'abhichauhan1994@live.com', '20', '', 'final', '', 'private', '0', '', '1.0729999542236328', ''),
(110, 'abhichauhan1994@live.com', '2', '', 'interface', '', 'interface', '5', '', '1.8559999465942383', ''),
(111, 'abhichauhan1994@live.com', '10', '', 'void run()', '', 'public void run()', '0', '', '6.36299991607666', ''),
(112, 'abhi@abhi', '10', '', 'void run()', '', 'public void run()', '0', '', '2.5759999752044678', ''),
(113, 'abhi@abhi', '11', '', 'construct();', '', 'start();', '0', '', '2.9630000591278076', ''),
(114, 'abhi@abhi', '11', '', 'construct();', '', 'start();', '0', '', '16.542999982833862', ''),
(115, 'abhi@abhi', '11', '', 'start();', '', 'start();', '5', '', '23.274999856948853', ''),
(116, 'abhi@abhi', '10', '', 'void run(int priority)', '', 'public void run()', '0', '', '1.878999948501587', ''),
(118, 'gaurav@g', '2', '', '', '', 'interface', '0', '', '5.110000133514404', 'y'),
(119, 'gaurav@g', '18', '', 'protected', '', 'protected', '5', '', '4.14900016784668', ''),
(120, 'gaurav@g', '18', '', 'protected', '', 'protected', '5', '', '27.35800004005432', ''),
(121, 'gaurav@g', '18', '', 'protected', '', 'protected', '5', '', '34.5789999961853', ''),
(122, 'gaurav@g', '18', '', 'protected', '', 'protected', '5', '', '41.41799998283386', ''),
(123, 'gaurav@g', '6', '', 'Calling notify() method on an object.', '', 'Calling notify() method on an object.', '5', '', '13.557999849319458', ''),
(124, 'gaurav@g', '6', '', '', '', 'Calling notify() method on an object.', '0', '', '60.97699999809265', 'y'),
(131, 'varun@v', '17', '', 'x.finalize()', '', 'Only the garbage collection system can destroy an ', '0', '', '3.805999994277954', ''),
(132, 'varun@v', '17', '', 'Runtime.getRuntime().gc()', '', 'Only the garbage collection system can destroy an ', '0', '', '4.753000020980835', ''),
(133, 'varun@v', '3', '', '3 4 5 3 7 5', '', '15 15', '0', '', '3.861999988555908', ''),
(134, 'varun@v', '11', '', '', '', 'start();', '0', '', '2.2220001220703125', 'y'),
(138, 'ravi2kr6@gmail.com', '17', '', 'public static short stop = 23;', '', 'public static short stop = 23;', '5', '', '3.4570000171661377', ''),
(139, 'ravi2kr6@gmail.com', '4', '', 'Float', '', 'interface', '0', '', '2.7870001792907715', ''),
(140, 'ravi2kr6@gmail.com', '6', '', '', '', 'public double methoda();', '0', '', '2.869999885559082', 'y'),
(141, 'ravi2kr6@gmail.com', '7', '', '', '', 'boolean b3 = false;', '0', '', '62.53999996185303', 'y'),
(142, 'ravi2kr6@gmail.com', '17', '', 'final void madness(short stop);', '', 'public static short stop = 23;', '0', '', '2.565999984741211', ''),
(143, 'nishant@nishant', '2', '', '', '', 'int myList [] = {4, 3, 7};', '0', '', '62.83300018310547', 'y'),
(144, 'nishant@nishant', '19', '', 'java.lang.StringBuffer', '', 'java.lang.StringBuffer', '5', '', '5.965000152587891', ''),
(145, 'nishant@nishant', '15', '', 'volatile int d;', '', 'private synchronized int e;', '0', '', '2.3369998931884766', ''),
(146, 'nishant@nishant', '16', '', '', '', 'private', '0', '', '2.3320000171661377', 'y'),
(147, 'mmaurya0563@gmail.com', '18', '', '', '', 'LinkedHashMap', '0', '', '60.01200008392334', 'y'),
(148, 'mmaurya0563@gmail.com', '8', '', '', '', 'String s1 = null;', '0', '', '8.621999979019165', 'y'),
(149, 'mmaurya0563@gmail.com', '3', '', 'native', '', 'native', '5', '', '3.4079999923706055', ''),
(150, 'mmaurya0563@gmail.com', '10', '', '', '', 'protected', '0', '', '2.312999963760376', 'y'),
(151, 'mmaurya0563@gmail.com', '12', '', 'String cats[ ] = {"Fluffy", "Spot", "Zeus"};', '', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', '0', '', '7.203999996185303', ''),
(152, 'mmaurya0563@gmail.com', '5', '', '', '', 'int [] a = {23,22,21,20,19};', '0', '', '1.8590002059936523', 'y'),
(153, 'mmaurya0563@gmail.com', '18', '', 'HashMap', '', 'LinkedHashMap', '0', '', '2.115999937057495', ''),
(154, 'mmaurya0563@gmail.com', '6', '', 'protected void methoda(double d1);', '', 'public double methoda();', '0', '', '2.944000005722046', ''),
(155, 'mmaurya0563@gmail.com', '12', '', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', '', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', '5', '', '3.1659998893737793', ''),
(156, 'gaurav@g', '7', '', 'boolean b2 = ''false'';', '', 'boolean b3 = false;', '0', '', '11.205999851226807', ''),
(157, 'gaurav@g', '10', '', 'private', '', 'protected', '0', '', '13.389999866485596', ''),
(158, 'gaurav@g', '5', '', '', '', 'int [] a = {23,22,21,20,19};', '0', '', '1.5770001411437988', 'y'),
(159, 'gaurav@g', '1', '', '', '', 'goto, instanceof, native, finally, default, throws', '0', '', '85.24799990653992', 'y'),
(160, 'gaurav@g', '11', '', '', '', 'default access', '0', '', '64.36699986457825', 'y'),
(161, 'gaurav@g', '12', '', '', '', 'int [ ][ ] scores = {2,7,6}, {9,3,45};', '0', '', '65.22199988365173', 'y'),
(162, 'dummy@d', '5', '', 'int a [] = new int[5];', '', 'int [] a = {23,22,21,20,19};', '0', '', '10.628999948501587', ''),
(163, 'dummy@d', '6', '', 'static void methoda(double d1);', '', 'public double methoda();', '0', '', '7.25600004196167', ''),
(164, 'dummy@d', '2', '', 'int myList [] [] = {4,9,7,0};', '', 'int myList [] = {4, 3, 7};', '0', '', '3.892000198364258', ''),
(165, 'dummy@d', '7', '', 'boolean b2 = ''false'';', '', 'boolean b3 = false;', '0', '', '4.461999893188477', ''),
(166, 'dummy@d', '5', '', 'int [5] array;', '', 'int [] a = {23,22,21,20,19};', '0', '', '5.703999996185303', ''),
(167, 'dummy@d', '10', '', 'transient', '', 'protected', '0', '', '11.553999900817871', ''),
(168, 'dummy@d', '', '', '', '', '', '0', '', '13.922999858856201', 'y'),
(169, 'dummy@d', '18', '', '', '', 'LinkedHashMap', '0', '', '2.4739999771118164', 'y'),
(170, 'dummy@d', '', '', '', '', '', '0', '', '24.467999935150146', 'y'),
(171, 'dummy@d', '6', '', '', '', 'public double methoda();', '0', '', '1.813999891281128', 'y'),
(172, 'dummy@d', '17', '', '', '', 'public static short stop = 23;', '0', '', '3.364000082015991', 'y'),
(173, 'dummy@d', '19', '', 'java.lang.StringBuffer', '', 'java.lang.StringBuffer', '5', '', '4.740000009536743', ''),
(174, 'dummy@d', '1', '', '', '', 'goto, instanceof, native, finally, default, throws', '0', '', '1.9730000495910645', 'y'),
(175, 'dummy@d', '9', '', 'undefined', '', '0 to 65535', '0', '', '9.388000011444092', ''),
(176, 'dummy@d', '7', '', 'boolean b4 = Boolean.false();', '', 'boolean b3 = false;', '0', '', '10.204999923706055', ''),
(177, 'dummy@d', '', '', '', '', '', '5', '', '5.853000164031982', ''),
(178, 'dummy@d', '14', '', 'char[ ] ca = "Some String";', '', 'int[ ] ia = new int[15];', '0', '', '4.03600001335144', ''),
(179, 'dummy@d', '', '', '', '', '', '5', '', '5.9040000438690186', ''),
(180, 'dummy@d', '13', '', '', '', 'default access', '0', '', '3.4130001068115234', 'y'),
(181, 'dummy@d', '1', '', '', '', 'goto, instanceof, native, finally, default, throws', '0', '', '1.4350001811981201', 'y'),
(182, 'dummy@d', '17', '', 'undefined', '', 'public static short stop = 23;', '0', '', '2.13700008392334', ''),
(183, 'dummy@d', '17', '', '', '', 'public static short stop = 23;', '0', '', '18.73900008201599', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `marks` int(50) NOT NULL,
  `time` double NOT NULL,
  `tcountry` varchar(50) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`tid`, `email`, `marks`, `time`, `tcountry`) VALUES
(4, 'abhi@abhi', 5, 69.44899988174438, 'United States'),
(5, 'abhichauhan1994@live.com', 20, 216.19400024414062, 'India'),
(7, 'gaurav@g', 25, 428.1589996814728, 'Albania'),
(9, 'varun@v', 0, 14.64300012588501, 'United Kingdom'),
(10, 'ravi2kr6@gmail.com', 0, 70.76300001144409, 'India'),
(11, 'nishant@nishant', 5, 73.46700024604797, 'China'),
(12, 'mmaurya0563@gmail.com', 10, 91.64400005340576, 'United States'),
(13, 'dummy@d', 15, 157.36300039291382, 'United States');
