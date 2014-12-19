
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abrasivesworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `rfq_main`
--

CREATE TABLE `rfq_bid_main` (
  `id` bigint(20) NOT NULL auto_increment,
  `user_bid_id` int(11) default NULL,
  `user_send_id` int(11) default NULL,
  `rfq_id` varchar(500) default NULL,
  `rfq_no` varchar(500) default NULL,
  `rfq_title` text,
  `rfq_issueby` varchar(500) default NULL,
  `rfq_company_name` text,
  `rfq_issue_date` varchar(100) default NULL,
  `rfq_close_date` varchar(100) default NULL,
  `rfq_country_imports` text,
  `rfq_pref_cn_export` text,
  `rfq_pref_currency` text,
  `rfq_quot_validation` text,
  `rfq_incoterm` varchar(500) default NULL,
  `rfq_partial` varchar(500) default NULL,
  `rfq_email` text,
  `rfq_group` text,
  `rfq_documents` text,
  `rfq_active` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9;


CREATE TABLE `rfq_bid_table` (
  `id` bigint(20) NOT NULL auto_increment,
  `rfq_mid` varchar(500) default NULL,
  `user_bid_id` int(11) default NULL,
  `user_send_id` int(11) default NULL,
  `serialno` varchar(500) default NULL,
  `cdesc` text,
  `spec` text,
  `dimension` varchar(500) default NULL,
  `quantity` varchar(500) default NULL,
  `uom` varchar(500) default NULL,
  `reqprice` varchar(500) default NULL,
  `reqleadtime` varchar(500) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24;
