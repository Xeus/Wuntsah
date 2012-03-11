-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 08, 2007 at 01:01 PM
-- Server version: 4.1.21
-- PHP Version: 4.4.2
-- 
-- Database: `wuntsah`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `nick` text NOT NULL,
  `full_name` text NOT NULL,
  `profile` text NOT NULL,
  `age` int(11) NOT NULL default '0',
  `job` text NOT NULL,
  `personality` text NOT NULL,
  `location` text NOT NULL,
  `sign` text NOT NULL,
  `chinese_sign` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

-- 
-- Table structure for table `y2006`
-- 

CREATE TABLE `y2006` (
  `id` int(11) NOT NULL default '0',
  `month` int(11) NOT NULL default '0',
  `photo_path_thumb` text NOT NULL,
  `photo_path` text NOT NULL,
  `description` text NOT NULL,
  `title` text NOT NULL
) TYPE=MyISAM;

-- --------------------------------------------------------

-- 
-- Table structure for table `y2007`
-- 

CREATE TABLE `y2007` (
  `id` int(11) NOT NULL default '0',
  `month` int(11) NOT NULL default '0',
  `photo_path_thumb` text NOT NULL,
  `photo_path` text NOT NULL,
  `description` text NOT NULL,
  `title` text NOT NULL
) TYPE=MyISAM;
