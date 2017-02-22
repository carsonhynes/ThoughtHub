-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2015 at 12:50 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thoughthub`
--
CREATE DATABASE IF NOT EXISTS `thoughthub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thoughthub`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `sID` smallint(6) NOT NULL AUTO_INCREMENT,
  `cID` smallint(6) NOT NULL,
  `uID` smallint(6) NOT NULL,
  `comment` mediumtext NOT NULL,
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE IF NOT EXISTS `saved` (
  `uID` int(11) NOT NULL,
  `list` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE IF NOT EXISTS `submissions` (
  `sID` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` mediumtext NOT NULL,
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uID` smallint(6) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `contributors` text NOT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`sID`, `title`, `description`, `udate`, `uID`, `rating`, `contributors`) VALUES
(1, 'Droidboard', 'Being an iOS developer for the past year, I''m realizing that there are several issues with not developing your apps for Android. I was often discouraged to create apps for Android because I found the view editor frustrating and difficult to use. There was a small part of me that knew that at some point, I did have to make my apps on Android. So, I decided to make a script that finishes the most menial part of the process for me. Hopefully, I will now be making many more Android apps!\r\n', '2015-03-22 03:23:16', 2, 101, ''),
(3, 'FORsight', 'The challenge of this app was to develop a way to represent unseen colors without relying on false color images or color remapping since these methods worked by reducing the natural color range of the individual in order to fill the unseen colors into was of the visual spectrum.\r\n\r\nMy goal was to find a way to represent those colors without sacrificing any of the natural visual range.', '2015-03-22 03:26:52', 1, 55, ''),
(4, 'SolarMate', 'The modern world thrives on green energy. Vancouver has especially seen a push for sustainable, renewable energy. As a team of 4 electrical and 1 computer engineering students, we hope to jump on this trend as we attempt to provide solar energy. Using newly gained information on electric circuit theory, power systems and a heck of a lot of elbow grease, we aim to implement a fully automated sun-tracking solar panel.\n\nThe target user will be the average environmentally responsible citizen; those who think long-term, people who like to track the amount of energy they save by using this tracking panel.\n\nIn addition to tracking the sun, we hope to track the amount of energy is saved by using this device. The tracking data will be interfaced on a Swift-made Apple app', '2015-03-22 03:39:06', 4, 1235, ''),
(7, 'Pulse', 'Augmented reality gives us the entirely new ability to interact with virtual objects in our physical world. But AR isn''t just about manipulating 3D space - it gives us powerful ways to enhance what we see on a day to day basis.\r\n\r\nImagine being able to determine an individual''s vitals in a matter of seconds. The medical implications are monumental: visualizing blood flow during surgery, helping EMT responses be more accurate, and allowing civilians to take more effective action during an emergency.\r\n\r\nWith Pulse, we''ve made all of this possible.\r\n\r\nWe took the Meta glasses and extracted real-time video feed from a scene. At the action of a user, or potentially even upon facial detection, the glasses will automatically begin recording a video stream and send it off to our web API.\r\n\r\nOur web API, running python with Flask and implementing OpenCV, will then apply the Eulerian Video Magnification algorithm to the data by analyzing amplified pixel coloration changes. We implemented the algorithm by modifying Tristan Hearn''s webcam pulse detector library https://github.com/thearn/webcam-pulse-detector. After a few seconds, the app performs facial detection/tracking and reports the individual''s blood rate, and sends it back to our Unity app — and it''s strikingly accurate.\r\n\r\nThis is only the beginning for Pulse — we intend to add breathing rate and blood flow detection in the future, making this app a genuine testament to the promise of AR in the medical field.', '2015-03-22 03:45:59', 5, 565, ''),
(9, 'HelloRun', 'Tasked with the simple option of moving up or down to avoid blockades and survive the full experience, you must maneuver around tight platforms as the pace quickens.', '2015-03-22 03:48:31', 3, 809, ''),
(11, 'MassAware', 'We design the following system as a means to collect accurate data on maternal and neonatal deaths in rural India. We are collecting data from both the ASHAs (Accredited Social Health Activists, typically 1 per community) as well as from directly surveying families in India.\r\n\r\nThe ASHA Survey:\r\n\r\nWe used the Google Drive API to gather data from an initial data survey given to the ASHA. We implemented this by creating a Google Forms questionnaire, and as a proof of concept we were able to gather and parse data such as names, phone numbers for the mothers, as well as location based data and expected delivery date.\r\n\r\nThe Family Survey:\r\n\r\nAfter extracting out phone numbers for the mothers from the aforementioned survey, we were able to design an SMS based survey targeted for mothers using Twilio. We implemented a skeleton that checks in on the health status of the mother and child on a weekly basis.\r\n\r\nFuture Work: - Building a GUI for easily editing the questions in the SMS - based surveys (or enable\r\nread in through a text file) - Using the Twilio-powered SMS not only as a means to gather data, but also as a means to dispense key healthy living tips to mothers and families - This could act as a means to incentivize families to engage with the data collection - Further exploring data collection from the ASHAs - One ideas is to have ASHAs also report whenever there was a death in the\r\ncommunity, but weren''t sure if there would be issues with incentivizing the ASHAs to perform this additional work - Collecting continuous updates from the ASHAS would serve as a powerful dataset, as we could reconcile with other collected data sets to get a sense of\r\nwhether the self-reported data is accurate - Determine whether ASHAs are typically stationary (if an ASHA is in a particular\r\ncity, will they stay for years?)', '2015-03-22 03:49:50', 2, 282, ''),
(13, 'Chameleon', 'Chameleon is an Android application which helps colour-deficient people by adjusting the colour spectrum to accommodate their needs.\r\n\r\nWe target the most common type of colour deficiency, dichromacy/anomalous trichromacy, in which the user is only able to clearly distinguish two colours. For instance, in red/green colour-blindness, the user sees red and green as various shades of the same colour (typically represented as yellow).\r\n\r\nThis causes a problem when, for example, viewing a line graph which uses red and green to identify different lines. Chameleon remaps the colour space so that red and green are displayed as blue and yellow, which are distinguishable.\r\n\r\nThe remapping is done using OpenCV by converting the colour to YCrCb space and rotating the Cr/Cb plane by a user-controlled angle. This way, image brightness is not affected.', '2015-03-22 03:50:53', 3, 109, ''),
(14, 'ARcode', 'ARcode, Audio Response Code, is an app that lets you send or broadcast data over the most universal medium on Earth, sound.\r\n\r\nBy a team of hackers from Rice University, UT Austin, and UC Berkeley, the inspiration for ARcode was to create a more convenient and useful upgrade of the standard "QR code" as a means for simple, instant data transfer. Integrating Microsoft Azure technology, ARcode has the compatibility to send any kind of data via a speaker and a microphone, no accounts, no pairing, no hassle.\r\n\r\nOur target users are anyone with a desire to share data to any audience instantly, whether it be a friend to another friend in a coffee shop, or a professor to a classroom full of students. Because of its robust simplicity, ARcode has versatile applications over a widespread area of society.', '2015-03-22 03:52:00', 4, 431, ''),
(16, 'lucyd', 'We (all the lucyd''s team members) are all busy people with stressful schedules. As high schoolers, we couldn''t find any time to sacrifice for "joy reads". We made our web application to cater to people''s busy schedules and their passion for reading. Our web application is made to be super simplistic and intuitive for the everyday busy person. One using our application can put in how much time they have to spare for reading and our api searches for articles (on medium) that can be read below that time.', '2015-03-22 03:53:26', 5, 94, ''),
(18, 'GreenCan', 'A trashcan that sorts items into recyclables and non-recyclables based on the sound that the item makes as it enters the trashcan.', '2015-03-22 03:57:46', 3, 20, ''),
(19, 'Follow Me', 'Real time navigation app receiving directions based on the path of a leader. Allows large groups to caravan without an end address. The first navigation application that adapts to real-world circumstances', '2015-03-22 03:59:45', 1, 82, ''),
(20, 'Fish Weight', 'Just take a pic, use the app to measure the length & girth of your fish and get an estimate that’s accurate of the fish’s actual weight.\r\n\r\nFishWeight is the ultimate tool for any fisherman. You can take a great photo, release your fish and still prove to your friends the weight of the fish. Just take a pic of your fish next to one of the standard objects on the app, choose the species, use the app to measure the length & girth and the app will automatically calculate the fish’s weight, to within 10% accuracy! This app covers most of the popular fish, including all Billfish species, & you can add your own species', '2015-03-22 04:01:08', 2, 43, ''),
(21, 'Super Candy Music Adventure', 'We developed this game during a Oculus Rift Game Jam over the period of one weekend. It is sort of an Exploration game, but also has some challenging parts. For us, it is also an Adventure; with super music and candy! You have to find all the objects in a level which are able to make music. After you interacted with all of them (Gamepad-A, CTRL, or LMB), you have found the music of the level and are granted to proceed to the next level.', '2015-03-22 04:03:30', 5, 99, ''),
(22, 'EcoChallenge', 'We were inspired by the sustainability theme for this hackathon. We wanted to build an app that helped users to be more aware of their impact on the environment through their actions but we didn''t want it to be too demanding and in need of too many inputs.\r\n\r\nSo we came up with the idea of EcoChallenge! The basic premise is that users have a slate of challenges that they can choose from. Once they''ve selected a challenge they have a certain amount of time to complete it before it expires. Challenges range from beating Google''s estimated bike trip time, to eating vegetarian for two days to not leaving lights on in any rooms you exit for a whole entire day. The best part is that you''re not even doing it all on your own because you''re able to add your friends and visit their dashboards to see how they''re doing.\r\n\r\nEvery time you complete a challenge take a picture to commemorate your achievement and provide proof to your pesky friends who can''t possibly phantom you being such a dedicated EcoChallenger. Outside of a time-constrained environment, we''d like to bring in API support for tracking your movement and predicting your mode of transportation, suggestions for things like farmer''s markets in your area, analysis of your power bill and an awesome game mode for you to spend your points in!\r\n\r\nWe hope you enjoy the concept and execution of our app as much as we enjoyed dreaming it up and building it out.\r\n\r\nThanks,\r\n\r\nThe EcoChallenge Team Alvin Hung, William Zhang, Nena Nguyen and Nicholas Pezarro', '2015-03-22 04:06:20', 1, 131, ''),
(23, 'ctree', 'Sustainable awareness is generally low because of apathetic attitudes towards the environment. We as a team wanted to engage the user in such a way that they would be rewarded for their achievements.\r\n\r\nThe objective of the app is to grow as many virtual trees as possible. In order to grow a virtual tree a user will have to complete environmental actions (such as: riding your bike to work) that reduce the overall carbon emissions. Once a virtual tree has been fully grown, it is our hope to partner with a non-profit/charity/corporation that would donate and plant a real tree somewhere in the world.', '2015-03-22 04:07:53', 5, 554, ''),
(24, 'Lewis Dot CHEMISTRY', 'Picture of lewis dot configuration Structure State at STP Molar mass Density Melting and Boiling point Number of bonds Number of lone pairs Founder Fun fact for every lewis dot!', '2015-03-22 04:12:49', 2, 12, ''),
(25, 'Keep Your Capital', 'With "Keep Your Capital...One" this pebble enable app alerts you to new charges to your account and give you an option to send an SMS with you current location and a request to place the card on hold until you can call into a call center to work through the details.', '2015-03-22 04:13:55', 5, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uID` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `name`) VALUES
(1, 'Grippo'),
(2, 'Nick'),
(3, 'Carson'),
(4, 'Steven'),
(5, 'Jack'),
(6, 'Swift'),
(7, 'Yoshida');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
