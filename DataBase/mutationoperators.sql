-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:08 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutationoperators`
--

-- --------------------------------------------------------

--
-- Table structure for table `classattributenotfound`
--

CREATE TABLE `classattributenotfound` (
  `Sr` int(11) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classattributenotfound`
--

INSERT INTO `classattributenotfound` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PHNwYW4gY2xhc3M9InNpbXBsZVR4dCI+QXR0YXRjaCBDVjwvc3Bhbj4=', 'PHNwYW4gY2xhc3M9IkhlYXZ5VHh0Ij5BdHRhdGNoIENWPC9zcGFuPg=='),
(2, 'PHNwYW4gY2xhc3M9IkhlYXZ5VHh0Ij5BdHRhY2ggUG9ydGZvbGlvPC9zcGFuPg==', 'PHNwYW4gY2xhc3M9ImJvbGRUeHQiPkF0dGFjaCBQb3J0Zm9saW88L3NwYW4+'),
(3, 'PHNwYW4gY2xhc3M9ImJvbGRUeHQiPkF0dGFjaCBEZWdyZWVzPC9zcGFuPg==', 'PHNwYW4gY2xhc3M9IkhlYXZ5VHh0MSI+QXR0YWNoIERlZ3JlZXM8L3NwYW4+'),
(4, 'PHNwYW4gY2xhc3M9IkhlYXZ5VHh0MSIgaWQ9IlNlYyI+QXR0YWNoIFBvcnRmb2xpbzwvc3Bhbj4=', 'PHNwYW4gY2xhc3M9ImJvbGRUeHQxIiBpZD0iU2VjIj5BdHRhY2ggUG9ydGZvbGlvPC9zcGFuPg==');

-- --------------------------------------------------------

--
-- Table structure for table `elementtextnotfound`
--

CREATE TABLE `elementtextnotfound` (
  `Sr` int(11) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elementtextnotfound`
--

INSERT INTO `elementtextnotfound` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PHA+UGFraXN0YW48L3A+', 'PHA+bG9yZW0gaXBzdW08L3A+'),
(2, 'PHA+aGVsbG88L3A+', 'PHA+bG9yZW0gaXBzdW08L3A+'),
(3, 'PHA+UGthaXN5PC9wPg==', 'PHA+bG9yZW0gaXBzdW08L3A+'),
(4, 'PHA+aGVsbG88L3A+', 'PHA+bG9yZW0gaXBzdW08L3A+');

-- --------------------------------------------------------

--
-- Table structure for table `hrefattributenotfound`
--

CREATE TABLE `hrefattributenotfound` (
  `Sr` int(11) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrefattributenotfound`
--

INSERT INTO `hrefattributenotfound` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGEgaHJlZj0iZ29vZ2xlLmNvbSI+R29vZ2xlPC9hPg==', 'PGEgaHJlZj0iIyI+R29vZ2xlPC9hPg=='),
(2, 'PGEgaHJlZj0iIyI+eWFob288L2E+', 'PGEgaHJlZj0iIyI+eWFob288L2E+');

-- --------------------------------------------------------

--
-- Table structure for table `idbaselocator`
--

CREATE TABLE `idbaselocator` (
  `Sr` int(100) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idbaselocator`
--

INSERT INTO `idbaselocator` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', ''),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', ''),
(3, 'PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlN1Ym1pdCIgbmFtZT0iYnV0dG9uIi8+', ''),
(4, 'PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlN1Ym1pdCIgbmFtZT0iYnV0dG9uIi8+', '');

-- --------------------------------------------------------

--
-- Table structure for table `idnotfound`
--

CREATE TABLE `idnotfound` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idnotfound`
--

INSERT INTO `idnotfound` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSI1MzgxIiBuYW1lPSJvbmUiLz4='),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSIxNDA4IiBuYW1lPSJ0d3dvIi8+');

-- --------------------------------------------------------

--
-- Table structure for table `nameattributenotfound`
--

CREATE TABLE `nameattributenotfound` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nameattributenotfound`
--

INSERT INTO `nameattributenotfound` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InJhZGlvIiBuYW1lPSJ5b3UiIHZhbHVlPSJ5b3UiLz4=', 'PGlucHV0IHR5cGU9InJhZGlvIiBuYW1lPSJhbkZWdiIgdmFsdWU9InlvdSIvPg==');

-- --------------------------------------------------------

--
-- Table structure for table `typeattributechange`
--

CREATE TABLE `typeattributechange` (
  `Sr` int(11) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `typeattributechange`
--

INSERT INTO `typeattributechange` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTEiIG5hbWU9InZlaGljbGUxIiB2YWx1ZT0iQmlrZSIvPg==', 'PGlucHV0IHR5cGU9InJhZGlvIiBpZD0idmVoaWNsZTEiIG5hbWU9InZlaGljbGUxIiB2YWx1ZT0iQmlrZSIvPg=='),
(2, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTIiIG5hbWU9InZlaGljbGUyIiB2YWx1ZT0iQ2FyIi8+', 'PGlucHV0IHR5cGU9InJhZGlvIiBpZD0idmVoaWNsZTIiIG5hbWU9InZlaGljbGUyIiB2YWx1ZT0iQ2FyIi8+'),
(3, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTMiIG5hbWU9InZlaGljbGUzIiB2YWx1ZT0iQm9hdCIvPg==', 'PGlucHV0IHR5cGU9InJhZGlvIiBpZD0idmVoaWNsZTMiIG5hbWU9InZlaGljbGUzIiB2YWx1ZT0iQm9hdCIvPg==');

-- --------------------------------------------------------

--
-- Table structure for table `valueattributechange`
--

CREATE TABLE `valueattributechange` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `webpatternaddition`
--

CREATE TABLE `webpatternaddition` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpatternaddition`
--

INSERT INTO `webpatternaddition` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIgcGF0dGVybj0iW0EtWmEtejAtOV0rIi8+'),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iIHBhdHRlcm49IltBLVphLXowLTldKyIvPg==');

-- --------------------------------------------------------

--
-- Table structure for table `webpopupboxdeletion`
--

CREATE TABLE `webpopupboxdeletion` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpopupboxdeletion`
--

INSERT INTO `webpopupboxdeletion` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGJ1dHRvbiBvbmNsaWNrPSJteUZ1bmN0aW9uKCkiPkNhbmNlbDwvYnV0dG9uPg==', 'PGJ1dHRvbiBvbmNsaWNrPSIiPkNhbmNlbDwvYnV0dG9uPg==');

-- --------------------------------------------------------

--
-- Table structure for table `webpositionreplacement`
--

CREATE TABLE `webpositionreplacement` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webpositionreplacement`
--

INSERT INTO `webpositionreplacement` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4='),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTEiIG5hbWU9InZlaGljbGUxIiB2YWx1ZT0iQmlrZSIvPg=='),
(3, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTEiIG5hbWU9InZlaGljbGUxIiB2YWx1ZT0iQmlrZSIvPg==', 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTIiIG5hbWU9InZlaGljbGUyIiB2YWx1ZT0iQ2FyIi8+'),
(4, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTIiIG5hbWU9InZlaGljbGUyIiB2YWx1ZT0iQ2FyIi8+', 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTMiIG5hbWU9InZlaGljbGUzIiB2YWx1ZT0iQm9hdCIvPg=='),
(5, 'PGlucHV0IHR5cGU9ImNoZWNrYm94IiBpZD0idmVoaWNsZTMiIG5hbWU9InZlaGljbGUzIiB2YWx1ZT0iQm9hdCIvPg==', 'PGlucHV0IHR5cGU9InJhZGlvIiBuYW1lPSJ5b3UiIHZhbHVlPSJ5b3UiLz4='),
(6, 'PGlucHV0IHR5cGU9InJhZGlvIiBuYW1lPSJ5b3UiIHZhbHVlPSJ5b3UiLz4=', 'PGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlN1Ym1pdCIgbmFtZT0iYnV0dG9uIi8+');

-- --------------------------------------------------------

--
-- Table structure for table `webremoveoptionunderselect`
--

CREATE TABLE `webremoveoptionunderselect` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webremoveoptionunderselect`
--

INSERT INTO `webremoveoptionunderselect` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PG9wdGlvbiB2YWx1ZT0idm9sdm8iPlZvbHZvPC9vcHRpb24+', ''),
(2, 'PG9wdGlvbiB2YWx1ZT0ic2FhYiI+U2FhYjwvb3B0aW9uPg==', ''),
(3, 'PG9wdGlvbiB2YWx1ZT0ibWVyY2VkZXMiPk1lcmNlZGVzPC9vcHRpb24+', ''),
(4, 'PG9wdGlvbiB2YWx1ZT0iYXVkaSI+QXVkaTwvb3B0aW9uPg==', ''),
(5, 'PG9wdGlvbiB2YWx1ZT0idm9sdm8iPnBha2lzdGFuPC9vcHRpb24+', ''),
(6, 'PG9wdGlvbiB2YWx1ZT0ic2FhYiI+aXJhcTwvb3B0aW9uPg==', ''),
(7, 'PG9wdGlvbiB2YWx1ZT0ibWVyY2VkZXMiPmlyYW48L29wdGlvbj4=', '');

-- --------------------------------------------------------

--
-- Table structure for table `webrequiredattributeaddition`
--

CREATE TABLE `webrequiredattributeaddition` (
  `Sr` int(200) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webrequiredattributeaddition`
--

INSERT INTO `webrequiredattributeaddition` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIgcmVxdWlyZWQ9InRydWUiLz4='),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iIHJlcXVpcmVkPSJ0cnVlIi8+');

-- --------------------------------------------------------

--
-- Table structure for table `webtexttohiddenreplacement`
--

CREATE TABLE `webtexttohiddenreplacement` (
  `Sr` int(11) NOT NULL,
  `OriginalCode` varchar(2000) NOT NULL,
  `mutantV1` varchar(3990) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webtexttohiddenreplacement`
--

INSERT INTO `webtexttohiddenreplacement` (`Sr`, `OriginalCode`, `mutantV1`) VALUES
(1, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJvbmUiIG5hbWU9Im9uZSIvPg==', 'PGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9Im9uZSIgbmFtZT0ib25lIi8+'),
(2, 'PGlucHV0IHR5cGU9InRleHQiIGlkPSJ5b3UiIG5hbWU9InR3d28iLz4=', 'PGlucHV0IHR5cGU9ImhpZGRlbiIgaWQ9InlvdSIgbmFtZT0idHd3byIvPg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classattributenotfound`
--
ALTER TABLE `classattributenotfound`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `elementtextnotfound`
--
ALTER TABLE `elementtextnotfound`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `hrefattributenotfound`
--
ALTER TABLE `hrefattributenotfound`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `idbaselocator`
--
ALTER TABLE `idbaselocator`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `idnotfound`
--
ALTER TABLE `idnotfound`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `nameattributenotfound`
--
ALTER TABLE `nameattributenotfound`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `typeattributechange`
--
ALTER TABLE `typeattributechange`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `valueattributechange`
--
ALTER TABLE `valueattributechange`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webpatternaddition`
--
ALTER TABLE `webpatternaddition`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webpopupboxdeletion`
--
ALTER TABLE `webpopupboxdeletion`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webpositionreplacement`
--
ALTER TABLE `webpositionreplacement`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webremoveoptionunderselect`
--
ALTER TABLE `webremoveoptionunderselect`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webrequiredattributeaddition`
--
ALTER TABLE `webrequiredattributeaddition`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `webtexttohiddenreplacement`
--
ALTER TABLE `webtexttohiddenreplacement`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classattributenotfound`
--
ALTER TABLE `classattributenotfound`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `elementtextnotfound`
--
ALTER TABLE `elementtextnotfound`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hrefattributenotfound`
--
ALTER TABLE `hrefattributenotfound`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `idbaselocator`
--
ALTER TABLE `idbaselocator`
  MODIFY `Sr` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `idnotfound`
--
ALTER TABLE `idnotfound`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nameattributenotfound`
--
ALTER TABLE `nameattributenotfound`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `typeattributechange`
--
ALTER TABLE `typeattributechange`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `valueattributechange`
--
ALTER TABLE `valueattributechange`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `webpatternaddition`
--
ALTER TABLE `webpatternaddition`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `webpopupboxdeletion`
--
ALTER TABLE `webpopupboxdeletion`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `webpositionreplacement`
--
ALTER TABLE `webpositionreplacement`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `webremoveoptionunderselect`
--
ALTER TABLE `webremoveoptionunderselect`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `webrequiredattributeaddition`
--
ALTER TABLE `webrequiredattributeaddition`
  MODIFY `Sr` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `webtexttohiddenreplacement`
--
ALTER TABLE `webtexttohiddenreplacement`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
