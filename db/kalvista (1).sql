-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2018 at 12:45 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalvista`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `adjudication_fp`
-- (See below for the actual view)
--
CREATE TABLE `adjudication_fp` (
`subject_id` int(11)
,`visit_name` varchar(100)
,`study_name` varchar(100)
,`study_site` varchar(200)
,`images_received_od` varchar(255)
,`fundus_photos_od` varchar(255)
,`reflex_image_od` varchar(255)
,`media_opacities_od` varchar(255)
,`opacity_interferes_with_view_od` varchar(255)
,`confidence_score_on_fp_od` varchar(255)
,`comments_od` varchar(255)
,`location_od` varchar(255)
,`magnification_od` varchar(255)
,`fundus_photos_os` varchar(255)
,`reflex_image_os` varchar(255)
,`media_opacities_os` varchar(255)
,`opacity_interferes_with_view_os` varchar(255)
,`confidence_score_on_fp_os` varchar(255)
,`comments_os` varchar(255)
,`location_os` varchar(255)
,`magnification_os` varchar(255)
,`F1_MA_OD` varchar(50)
,`F1_HE_OD` varchar(50)
,`F1_SE_OD` varchar(50)
,`F1_VL_OD` varchar(50)
,`F1_RH_OD` varchar(50)
,`F1_VB_OD` varchar(50)
,`F1_IRMA_OD` varchar(50)
,`F2_MA_OD` varchar(50)
,`F2_HE_OD` varchar(50)
,`F2_SE_OD` varchar(50)
,`F2_VL_OD` varchar(50)
,`F2_RH_OD` varchar(50)
,`F2_VB_OD` varchar(50)
,`F2_IRMA_OD` varchar(50)
,`F3_MA_OD` varchar(50)
,`F3_HE_OD` varchar(50)
,`F3_SE_OD` varchar(50)
,`F3_VL_OD` varchar(50)
,`F3_RH_OD` varchar(50)
,`F3_VB_OD` varchar(50)
,`F3_IRMA_OD` varchar(50)
,`F4_MA_OD` varchar(50)
,`F4_HE_OD` varchar(50)
,`F4_SE_OD` varchar(50)
,`F4_VL_OD` varchar(50)
,`F4_RH_OD` varchar(50)
,`F4_VB_OD` varchar(50)
,`F4_IRMA_OD` varchar(50)
,`F5_MA_OD` varchar(50)
,`F5_HE_OD` varchar(50)
,`F5_SE_OD` varchar(50)
,`F5_VL_OD` varchar(50)
,`F5_RH_OD` varchar(50)
,`F5_VB_OD` varchar(50)
,`F5_IRMA_OD` varchar(50)
,`F6_MA_OD` varchar(50)
,`F6_HE_OD` varchar(50)
,`F6_SE_OD` varchar(50)
,`F6_VL_OD` varchar(50)
,`F6_RH_OD` varchar(50)
,`F6_VB_OD` varchar(50)
,`F6_IRMA_OD` varchar(50)
,`F7_MA_OD` varchar(50)
,`F7_HE_OD` varchar(50)
,`F7_SE_OD` varchar(50)
,`F7_VL_OD` varchar(50)
,`F7_RH_OD` varchar(50)
,`F7_VB_OD` varchar(50)
,`F7_IRMA_OD` varchar(50)
,`od_level` varchar(40)
,`F1_MA_OS` varchar(50)
,`F1_HE_OS` varchar(50)
,`F1_SE_OS` varchar(50)
,`F1_VL_OS` varchar(50)
,`F1_RH_OS` varchar(50)
,`F1_VB_OS` varchar(50)
,`F1_IRMA_OS` varchar(50)
,`F2_MA_OS` varchar(50)
,`F2_HE_OS` varchar(50)
,`F2_SE_OS` varchar(50)
,`F2_VL_OS` varchar(50)
,`F2_RH_OS` varchar(50)
,`F2_VB_OS` varchar(50)
,`F2_IRMA_OS` varchar(50)
,`F3_MA_OS` varchar(50)
,`F3_HE_OS` varchar(50)
,`F3_SE_OS` varchar(50)
,`F3_VL_OS` varchar(50)
,`F3_RH_OS` varchar(50)
,`F3_VB_OS` varchar(50)
,`F3_IRMA_OS` varchar(50)
,`F4_MA_OS` varchar(50)
,`F4_HE_OS` varchar(50)
,`F4_SE_OS` varchar(50)
,`F4_VL_OS` varchar(50)
,`F4_RH_OS` varchar(50)
,`F4_VB_OS` varchar(50)
,`F4_IRMA_OS` varchar(50)
,`F5_MA_OS` varchar(50)
,`F5_HE_OS` varchar(50)
,`F5_SE_OS` varchar(50)
,`F5_VL_OS` varchar(50)
,`F5_RH_OS` varchar(50)
,`F5_VB_OS` varchar(50)
,`F5_IRMA_OS` varchar(50)
,`F6_MA_OS` varchar(50)
,`F6_HE_OS` varchar(50)
,`F6_SE_OS` varchar(50)
,`F6_VL_OS` varchar(50)
,`F6_RH_OS` varchar(50)
,`F6_VB_OS` varchar(50)
,`F6_IRMA_OS` varchar(50)
,`F7_MA_OS` varchar(50)
,`F7_HE_OS` varchar(50)
,`F7_SE_OS` varchar(50)
,`F7_VL_OS` varchar(50)
,`F7_RH_OS` varchar(50)
,`F7_VB_OS` varchar(50)
,`F7_IRMA_OS` varchar(50)
,`os_level` varchar(40)
);

-- --------------------------------------------------------

--
-- Table structure for table `adjudication_fp_g`
--

CREATE TABLE `adjudication_fp_g` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received_od` varchar(255) NOT NULL,
  `fundus_photos_od` varchar(255) NOT NULL,
  `reflex_image_od` varchar(255) NOT NULL,
  `media_opacities_od` varchar(255) NOT NULL,
  `opacity_interferes_with_view_od` varchar(255) NOT NULL,
  `confidence_score_on_fp_od` varchar(255) NOT NULL,
  `comments_od` varchar(255) NOT NULL,
  `location_od` varchar(255) NOT NULL,
  `magnification_od` varchar(255) NOT NULL,
  `fundus_photos_os` varchar(255) NOT NULL,
  `reflex_image_os` varchar(255) NOT NULL,
  `media_opacities_os` varchar(255) NOT NULL,
  `opacity_interferes_with_view_os` varchar(255) NOT NULL,
  `confidence_score_on_fp_os` varchar(255) NOT NULL,
  `comments_os` varchar(255) NOT NULL,
  `location_os` varchar(255) NOT NULL,
  `magnification_os` varchar(255) NOT NULL,
  `F1_MA_OD` varchar(50) DEFAULT NULL,
  `F1_HE_OD` varchar(50) DEFAULT NULL,
  `F1_SE_OD` varchar(50) DEFAULT NULL,
  `F1_VL_OD` varchar(50) DEFAULT NULL,
  `F1_RH_OD` varchar(50) DEFAULT NULL,
  `F1_VB_OD` varchar(50) DEFAULT NULL,
  `F1_IRMA_OD` varchar(50) DEFAULT NULL,
  `F2_MA_OD` varchar(50) DEFAULT NULL,
  `F2_HE_OD` varchar(50) DEFAULT NULL,
  `F2_SE_OD` varchar(50) DEFAULT NULL,
  `F2_VL_OD` varchar(50) DEFAULT NULL,
  `F2_RH_OD` varchar(50) DEFAULT NULL,
  `F2_VB_OD` varchar(50) DEFAULT NULL,
  `F2_IRMA_OD` varchar(50) DEFAULT NULL,
  `F3_MA_OD` varchar(50) DEFAULT NULL,
  `F3_HE_OD` varchar(50) DEFAULT NULL,
  `F3_SE_OD` varchar(50) DEFAULT NULL,
  `F3_VL_OD` varchar(50) DEFAULT NULL,
  `F3_RH_OD` varchar(50) DEFAULT NULL,
  `F3_VB_OD` varchar(50) DEFAULT NULL,
  `F3_IRMA_OD` varchar(50) DEFAULT NULL,
  `F4_MA_OD` varchar(50) DEFAULT NULL,
  `F4_HE_OD` varchar(50) DEFAULT NULL,
  `F4_SE_OD` varchar(50) DEFAULT NULL,
  `F4_VL_OD` varchar(50) DEFAULT NULL,
  `F4_RH_OD` varchar(50) DEFAULT NULL,
  `F4_VB_OD` varchar(50) DEFAULT NULL,
  `F4_IRMA_OD` varchar(50) DEFAULT NULL,
  `F5_MA_OD` varchar(50) DEFAULT NULL,
  `F5_HE_OD` varchar(50) DEFAULT NULL,
  `F5_SE_OD` varchar(50) DEFAULT NULL,
  `F5_VL_OD` varchar(50) DEFAULT NULL,
  `F5_RH_OD` varchar(50) DEFAULT NULL,
  `F5_VB_OD` varchar(50) DEFAULT NULL,
  `F5_IRMA_OD` varchar(50) DEFAULT NULL,
  `F6_MA_OD` varchar(50) DEFAULT NULL,
  `F6_HE_OD` varchar(50) DEFAULT NULL,
  `F6_SE_OD` varchar(50) DEFAULT NULL,
  `F6_VL_OD` varchar(50) DEFAULT NULL,
  `F6_RH_OD` varchar(50) DEFAULT NULL,
  `F6_VB_OD` varchar(50) DEFAULT NULL,
  `F6_IRMA_OD` varchar(50) DEFAULT NULL,
  `F7_MA_OD` varchar(50) DEFAULT NULL,
  `F7_HE_OD` varchar(50) DEFAULT NULL,
  `F7_SE_OD` varchar(50) DEFAULT NULL,
  `F7_VL_OD` varchar(50) DEFAULT NULL,
  `F7_RH_OD` varchar(50) DEFAULT NULL,
  `F7_VB_OD` varchar(50) DEFAULT NULL,
  `F7_IRMA_OD` varchar(50) DEFAULT NULL,
  `od_level` varchar(40) NOT NULL,
  `F1_MA_OS` varchar(50) DEFAULT NULL,
  `F1_HE_OS` varchar(50) DEFAULT NULL,
  `F1_SE_OS` varchar(50) DEFAULT NULL,
  `F1_VL_OS` varchar(50) DEFAULT NULL,
  `F1_RH_OS` varchar(50) DEFAULT NULL,
  `F1_VB_OS` varchar(50) DEFAULT NULL,
  `F1_IRMA_OS` varchar(50) DEFAULT NULL,
  `F2_MA_OS` varchar(50) DEFAULT NULL,
  `F2_HE_OS` varchar(50) DEFAULT NULL,
  `F2_SE_OS` varchar(50) DEFAULT NULL,
  `F2_VL_OS` varchar(50) DEFAULT NULL,
  `F2_RH_OS` varchar(50) DEFAULT NULL,
  `F2_VB_OS` varchar(50) DEFAULT NULL,
  `F2_IRMA_OS` varchar(50) DEFAULT NULL,
  `F3_MA_OS` varchar(50) DEFAULT NULL,
  `F3_HE_OS` varchar(50) DEFAULT NULL,
  `F3_SE_OS` varchar(50) DEFAULT NULL,
  `F3_VL_OS` varchar(50) DEFAULT NULL,
  `F3_RH_OS` varchar(50) DEFAULT NULL,
  `F3_VB_OS` varchar(50) DEFAULT NULL,
  `F3_IRMA_OS` varchar(50) DEFAULT NULL,
  `F4_MA_OS` varchar(50) DEFAULT NULL,
  `F4_HE_OS` varchar(50) DEFAULT NULL,
  `F4_SE_OS` varchar(50) DEFAULT NULL,
  `F4_VL_OS` varchar(50) DEFAULT NULL,
  `F4_RH_OS` varchar(50) DEFAULT NULL,
  `F4_VB_OS` varchar(50) DEFAULT NULL,
  `F4_IRMA_OS` varchar(50) DEFAULT NULL,
  `F5_MA_OS` varchar(50) DEFAULT NULL,
  `F5_HE_OS` varchar(50) DEFAULT NULL,
  `F5_SE_OS` varchar(50) DEFAULT NULL,
  `F5_VL_OS` varchar(50) DEFAULT NULL,
  `F5_RH_OS` varchar(50) DEFAULT NULL,
  `F5_VB_OS` varchar(50) DEFAULT NULL,
  `F5_IRMA_OS` varchar(50) DEFAULT NULL,
  `F6_MA_OS` varchar(50) DEFAULT NULL,
  `F6_HE_OS` varchar(50) DEFAULT NULL,
  `F6_SE_OS` varchar(50) DEFAULT NULL,
  `F6_VL_OS` varchar(50) DEFAULT NULL,
  `F6_RH_OS` varchar(50) DEFAULT NULL,
  `F6_VB_OS` varchar(50) DEFAULT NULL,
  `F6_IRMA_OS` varchar(50) DEFAULT NULL,
  `F7_MA_OS` varchar(50) DEFAULT NULL,
  `F7_HE_OS` varchar(50) DEFAULT NULL,
  `F7_SE_OS` varchar(50) DEFAULT NULL,
  `F7_VL_OS` varchar(50) DEFAULT NULL,
  `F7_RH_OS` varchar(50) DEFAULT NULL,
  `F7_VB_OS` varchar(50) DEFAULT NULL,
  `F7_IRMA_OS` varchar(50) DEFAULT NULL,
  `os_level` varchar(40) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjudication_fp_g`
--

INSERT INTO `adjudication_fp_g` (`id`, `subject_id`, `user_id`, `visit_name`, `study_site`, `images_received_od`, `fundus_photos_od`, `reflex_image_od`, `media_opacities_od`, `opacity_interferes_with_view_od`, `confidence_score_on_fp_od`, `comments_od`, `location_od`, `magnification_od`, `fundus_photos_os`, `reflex_image_os`, `media_opacities_os`, `opacity_interferes_with_view_os`, `confidence_score_on_fp_os`, `comments_os`, `location_os`, `magnification_os`, `F1_MA_OD`, `F1_HE_OD`, `F1_SE_OD`, `F1_VL_OD`, `F1_RH_OD`, `F1_VB_OD`, `F1_IRMA_OD`, `F2_MA_OD`, `F2_HE_OD`, `F2_SE_OD`, `F2_VL_OD`, `F2_RH_OD`, `F2_VB_OD`, `F2_IRMA_OD`, `F3_MA_OD`, `F3_HE_OD`, `F3_SE_OD`, `F3_VL_OD`, `F3_RH_OD`, `F3_VB_OD`, `F3_IRMA_OD`, `F4_MA_OD`, `F4_HE_OD`, `F4_SE_OD`, `F4_VL_OD`, `F4_RH_OD`, `F4_VB_OD`, `F4_IRMA_OD`, `F5_MA_OD`, `F5_HE_OD`, `F5_SE_OD`, `F5_VL_OD`, `F5_RH_OD`, `F5_VB_OD`, `F5_IRMA_OD`, `F6_MA_OD`, `F6_HE_OD`, `F6_SE_OD`, `F6_VL_OD`, `F6_RH_OD`, `F6_VB_OD`, `F6_IRMA_OD`, `F7_MA_OD`, `F7_HE_OD`, `F7_SE_OD`, `F7_VL_OD`, `F7_RH_OD`, `F7_VB_OD`, `F7_IRMA_OD`, `od_level`, `F1_MA_OS`, `F1_HE_OS`, `F1_SE_OS`, `F1_VL_OS`, `F1_RH_OS`, `F1_VB_OS`, `F1_IRMA_OS`, `F2_MA_OS`, `F2_HE_OS`, `F2_SE_OS`, `F2_VL_OS`, `F2_RH_OS`, `F2_VB_OS`, `F2_IRMA_OS`, `F3_MA_OS`, `F3_HE_OS`, `F3_SE_OS`, `F3_VL_OS`, `F3_RH_OS`, `F3_VB_OS`, `F3_IRMA_OS`, `F4_MA_OS`, `F4_HE_OS`, `F4_SE_OS`, `F4_VL_OS`, `F4_RH_OS`, `F4_VB_OS`, `F4_IRMA_OS`, `F5_MA_OS`, `F5_HE_OS`, `F5_SE_OS`, `F5_VL_OS`, `F5_RH_OS`, `F5_VB_OS`, `F5_IRMA_OS`, `F6_MA_OS`, `F6_HE_OS`, `F6_SE_OS`, `F6_VL_OS`, `F6_RH_OS`, `F6_VB_OS`, `F6_IRMA_OS`, `F7_MA_OS`, `F7_HE_OS`, `F7_SE_OS`, `F7_VL_OS`, `F7_RH_OS`, `F7_VB_OS`, `F7_IRMA_OS`, `os_level`, `assign_date`) VALUES
(1, 1001, 3, 'Screening', 'kalvista', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-30 13:09:17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `adjudication_oct`
-- (See below for the actual view)
--
CREATE TABLE `adjudication_oct` (
`subject_id` int(11)
,`visit_name` varchar(100)
,`study_site` varchar(200)
,`images_received` varchar(255)
,`images_gradable` varchar(255)
,`etdrs_grid` varchar(255)
,`imaging_protocol` varchar(255)
,`no_please_explain` varchar(255)
,`rpe_ilm` varchar(255)
,`yes_please_specify` varchar(255)
,`Retinal_thickness` varchar(51)
,`total_volume` varchar(255)
,`Eligibility_od` varchar(34)
,`etdrs_grid_os` varchar(100)
,`imaging_protocol_os` varchar(100)
,`no_please_explain_os` varchar(100)
,`rpe_ilm_os` varchar(100)
,`yes_please_specify_os` varchar(100)
,`Retinal_thickness_os` varchar(51)
,`total_volume_os` varchar(100)
,`Eligibility_os` varchar(34)
);

-- --------------------------------------------------------

--
-- Table structure for table `adjudication_oct_g`
--

CREATE TABLE `adjudication_oct_g` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received` varchar(255) NOT NULL,
  `images_gradable` varchar(255) NOT NULL,
  `etdrs_grid` varchar(255) NOT NULL,
  `imaging_protocol` varchar(255) NOT NULL,
  `no_please_explain` varchar(255) NOT NULL,
  `rpe_ilm` varchar(255) NOT NULL,
  `yes_please_specify` varchar(255) NOT NULL,
  `Retinal_thickness` varchar(51) CHARACTER SET utf8mb4 DEFAULT NULL,
  `total_volume` varchar(255) NOT NULL,
  `optical_choerence_od` varchar(100) NOT NULL,
  `oct_finiding_od` varchar(100) NOT NULL,
  `Eligibility_od` varchar(34) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `etdrs_grid_os` varchar(100) NOT NULL,
  `imaging_protocol_os` varchar(100) NOT NULL,
  `no_please_explain_os` varchar(100) NOT NULL,
  `rpe_ilm_os` varchar(100) NOT NULL,
  `yes_please_specify_os` varchar(100) NOT NULL,
  `Retinal_thickness_os` varchar(51) CHARACTER SET utf8mb4 DEFAULT NULL,
  `total_volume_os` varchar(100) NOT NULL,
  `Eligibility_os` varchar(34) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `optical_choerence_os` varchar(100) NOT NULL,
  `oct_finiding_os` varchar(100) NOT NULL,
  `Comments` text NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjudication_oct_g`
--

INSERT INTO `adjudication_oct_g` (`id`, `subject_id`, `user_id`, `visit_name`, `study_site`, `images_received`, `images_gradable`, `etdrs_grid`, `imaging_protocol`, `no_please_explain`, `rpe_ilm`, `yes_please_specify`, `Retinal_thickness`, `total_volume`, `optical_choerence_od`, `oct_finiding_od`, `Eligibility_od`, `etdrs_grid_os`, `imaging_protocol_os`, `no_please_explain_os`, `rpe_ilm_os`, `yes_please_specify_os`, `Retinal_thickness_os`, `total_volume_os`, `Eligibility_os`, `optical_choerence_os`, `oct_finiding_os`, `Comments`, `insert_date`) VALUES
(1, 1001, 3, 'Screening', '', '', '', '', '', '', '', '', '0', '', '', '', 'Not eligible', '', '', '', '', '', '0', '', 'Not eligible', '', '', '', '2018-08-29 10:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `Assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_subject`
--

INSERT INTO `assign_subject` (`id`, `subject_id`, `user_id`, `visit_name`, `Assign_date`) VALUES
(34, 101, 2, 'Screening', '2018-08-24 12:53:35'),
(35, 102, 2, 'Visit', '2018-08-25 09:34:51'),
(37, 102, 2, 'Visit', '2018-08-27 10:20:04'),
(38, 101, 2, 'Screening', '2018-08-29 15:11:22'),
(39, 102, 2, 'Visit', '2018-08-29 15:17:28'),
(40, 101, 2, 'Screening', '2018-08-29 15:34:47'),
(41, 101, 4, 'Screening', '2018-08-30 05:34:59'),
(42, 102, 5, 'Visit', '2018-08-30 12:18:57'),
(44, 101, 6, 'Screening', '2018-08-30 12:39:47'),
(45, 104, 6, 'Screening', '2018-08-30 12:44:46'),
(46, 112, 2, 'Screening', '2018-09-03 05:35:16'),
(47, 102, 4, 'Visit', '2018-09-03 05:39:30'),
(48, 101, 2, 'Screening', '2018-09-03 07:41:43'),
(49, 112, 6, 'Screening', '2018-09-03 07:44:58');

-- --------------------------------------------------------

--
-- Stand-in structure for view `delta`
-- (See below for the actual view)
--
CREATE TABLE `delta` (
`subject_id` int(11)
,`retinal_thickness_g1` varchar(255)
,`retinal_thickness_os_g1` varchar(100)
,`retinal_thickness_g2` varchar(255)
,`retinal_thickness_os_g2` varchar(100)
,`delta` double
,`average` double
,`delta_os` double
,`average_os` double
);

-- --------------------------------------------------------

--
-- Table structure for table `grading1_fp`
--

CREATE TABLE `grading1_fp` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `study_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received_od` varchar(255) NOT NULL,
  `fundus_photos_od` varchar(255) NOT NULL,
  `reflex_image_od` varchar(255) NOT NULL,
  `media_opacities_od` varchar(255) NOT NULL,
  `opacity_interferes_with_view_od` varchar(255) NOT NULL,
  `confidence_score_on_fp_od` varchar(255) NOT NULL,
  `comments_od` varchar(255) NOT NULL,
  `location_od` varchar(255) NOT NULL,
  `magnification_od` varchar(255) NOT NULL,
  `fundus_photos_os` varchar(255) NOT NULL,
  `reflex_image_os` varchar(255) NOT NULL,
  `media_opacities_os` varchar(255) NOT NULL,
  `opacity_interferes_with_view_os` varchar(255) NOT NULL,
  `confidence_score_on_fp_os` varchar(255) NOT NULL,
  `comments_os` varchar(255) NOT NULL,
  `location_os` varchar(255) NOT NULL,
  `magnification_os` varchar(255) NOT NULL,
  `F1_MA_OD` varchar(50) DEFAULT NULL,
  `F1_HE_OD` varchar(50) DEFAULT NULL,
  `F1_SE_OD` varchar(50) DEFAULT NULL,
  `F1_VL_OD` varchar(50) DEFAULT NULL,
  `F1_RH_OD` varchar(50) DEFAULT NULL,
  `F1_VB_OD` varchar(50) DEFAULT NULL,
  `F1_IRMA_OD` varchar(50) DEFAULT NULL,
  `F2_MA_OD` varchar(50) DEFAULT NULL,
  `F2_HE_OD` varchar(50) DEFAULT NULL,
  `F2_SE_OD` varchar(50) DEFAULT NULL,
  `F2_VL_OD` varchar(50) DEFAULT NULL,
  `F2_RH_OD` varchar(50) DEFAULT NULL,
  `F2_VB_OD` varchar(50) DEFAULT NULL,
  `F2_IRMA_OD` varchar(50) DEFAULT NULL,
  `F3_MA_OD` varchar(50) DEFAULT NULL,
  `F3_HE_OD` varchar(50) DEFAULT NULL,
  `F3_SE_OD` varchar(50) DEFAULT NULL,
  `F3_VL_OD` varchar(50) DEFAULT NULL,
  `F3_RH_OD` varchar(50) DEFAULT NULL,
  `F3_VB_OD` varchar(50) DEFAULT NULL,
  `F3_IRMA_OD` varchar(50) DEFAULT NULL,
  `F4_MA_OD` varchar(50) DEFAULT NULL,
  `F4_HE_OD` varchar(50) DEFAULT NULL,
  `F4_SE_OD` varchar(50) DEFAULT NULL,
  `F4_VL_OD` varchar(50) DEFAULT NULL,
  `F4_RH_OD` varchar(50) DEFAULT NULL,
  `F4_VB_OD` varchar(50) DEFAULT NULL,
  `F4_IRMA_OD` varchar(50) DEFAULT NULL,
  `F5_MA_OD` varchar(50) DEFAULT NULL,
  `F5_HE_OD` varchar(50) DEFAULT NULL,
  `F5_SE_OD` varchar(50) DEFAULT NULL,
  `F5_VL_OD` varchar(50) DEFAULT NULL,
  `F5_RH_OD` varchar(50) DEFAULT NULL,
  `F5_VB_OD` varchar(50) DEFAULT NULL,
  `F5_IRMA_OD` varchar(50) DEFAULT NULL,
  `F6_MA_OD` varchar(50) DEFAULT NULL,
  `F6_HE_OD` varchar(50) DEFAULT NULL,
  `F6_SE_OD` varchar(50) DEFAULT NULL,
  `F6_VL_OD` varchar(50) DEFAULT NULL,
  `F6_RH_OD` varchar(50) DEFAULT NULL,
  `F6_VB_OD` varchar(50) DEFAULT NULL,
  `F6_IRMA_OD` varchar(50) DEFAULT NULL,
  `F7_MA_OD` varchar(50) DEFAULT NULL,
  `F7_HE_OD` varchar(50) DEFAULT NULL,
  `F7_SE_OD` varchar(50) DEFAULT NULL,
  `F7_VL_OD` varchar(50) DEFAULT NULL,
  `F7_RH_OD` varchar(50) DEFAULT NULL,
  `F7_VB_OD` varchar(50) DEFAULT NULL,
  `F7_IRMA_OD` varchar(50) DEFAULT NULL,
  `od_level` varchar(40) NOT NULL,
  `F1_MA_OS` varchar(50) DEFAULT NULL,
  `F1_HE_OS` varchar(50) DEFAULT NULL,
  `F1_SE_OS` varchar(50) DEFAULT NULL,
  `F1_VL_OS` varchar(50) DEFAULT NULL,
  `F1_RH_OS` varchar(50) DEFAULT NULL,
  `F1_VB_OS` varchar(50) DEFAULT NULL,
  `F1_IRMA_OS` varchar(50) DEFAULT NULL,
  `F2_MA_OS` varchar(50) DEFAULT NULL,
  `F2_HE_OS` varchar(50) DEFAULT NULL,
  `F2_SE_OS` varchar(50) DEFAULT NULL,
  `F2_VL_OS` varchar(50) DEFAULT NULL,
  `F2_RH_OS` varchar(50) DEFAULT NULL,
  `F2_VB_OS` varchar(50) DEFAULT NULL,
  `F2_IRMA_OS` varchar(50) DEFAULT NULL,
  `F3_MA_OS` varchar(50) DEFAULT NULL,
  `F3_HE_OS` varchar(50) DEFAULT NULL,
  `F3_SE_OS` varchar(50) DEFAULT NULL,
  `F3_VL_OS` varchar(50) DEFAULT NULL,
  `F3_RH_OS` varchar(50) DEFAULT NULL,
  `F3_VB_OS` varchar(50) DEFAULT NULL,
  `F3_IRMA_OS` varchar(50) DEFAULT NULL,
  `F4_MA_OS` varchar(50) DEFAULT NULL,
  `F4_HE_OS` varchar(50) DEFAULT NULL,
  `F4_SE_OS` varchar(50) DEFAULT NULL,
  `F4_VL_OS` varchar(50) DEFAULT NULL,
  `F4_RH_OS` varchar(50) DEFAULT NULL,
  `F4_VB_OS` varchar(50) DEFAULT NULL,
  `F4_IRMA_OS` varchar(50) DEFAULT NULL,
  `F5_MA_OS` varchar(50) DEFAULT NULL,
  `F5_HE_OS` varchar(50) DEFAULT NULL,
  `F5_SE_OS` varchar(50) DEFAULT NULL,
  `F5_VL_OS` varchar(50) DEFAULT NULL,
  `F5_RH_OS` varchar(50) DEFAULT NULL,
  `F5_VB_OS` varchar(50) DEFAULT NULL,
  `F5_IRMA_OS` varchar(50) DEFAULT NULL,
  `F6_MA_OS` varchar(50) DEFAULT NULL,
  `F6_HE_OS` varchar(50) DEFAULT NULL,
  `F6_SE_OS` varchar(50) DEFAULT NULL,
  `F6_VL_OS` varchar(50) DEFAULT NULL,
  `F6_RH_OS` varchar(50) DEFAULT NULL,
  `F6_VB_OS` varchar(50) DEFAULT NULL,
  `F6_IRMA_OS` varchar(50) DEFAULT NULL,
  `F7_MA_OS` varchar(50) DEFAULT NULL,
  `F7_HE_OS` varchar(50) DEFAULT NULL,
  `F7_SE_OS` varchar(50) DEFAULT NULL,
  `F7_VL_OS` varchar(50) DEFAULT NULL,
  `F7_RH_OS` varchar(50) DEFAULT NULL,
  `F7_VB_OS` varchar(50) DEFAULT NULL,
  `F7_IRMA_OS` varchar(50) DEFAULT NULL,
  `os_level` varchar(40) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading1_fp`
--

INSERT INTO `grading1_fp` (`id`, `subject_id`, `user_id`, `visit_name`, `study_name`, `Date_visit`, `study_site`, `images_received_od`, `fundus_photos_od`, `reflex_image_od`, `media_opacities_od`, `opacity_interferes_with_view_od`, `confidence_score_on_fp_od`, `comments_od`, `location_od`, `magnification_od`, `fundus_photos_os`, `reflex_image_os`, `media_opacities_os`, `opacity_interferes_with_view_os`, `confidence_score_on_fp_os`, `comments_os`, `location_os`, `magnification_os`, `F1_MA_OD`, `F1_HE_OD`, `F1_SE_OD`, `F1_VL_OD`, `F1_RH_OD`, `F1_VB_OD`, `F1_IRMA_OD`, `F2_MA_OD`, `F2_HE_OD`, `F2_SE_OD`, `F2_VL_OD`, `F2_RH_OD`, `F2_VB_OD`, `F2_IRMA_OD`, `F3_MA_OD`, `F3_HE_OD`, `F3_SE_OD`, `F3_VL_OD`, `F3_RH_OD`, `F3_VB_OD`, `F3_IRMA_OD`, `F4_MA_OD`, `F4_HE_OD`, `F4_SE_OD`, `F4_VL_OD`, `F4_RH_OD`, `F4_VB_OD`, `F4_IRMA_OD`, `F5_MA_OD`, `F5_HE_OD`, `F5_SE_OD`, `F5_VL_OD`, `F5_RH_OD`, `F5_VB_OD`, `F5_IRMA_OD`, `F6_MA_OD`, `F6_HE_OD`, `F6_SE_OD`, `F6_VL_OD`, `F6_RH_OD`, `F6_VB_OD`, `F6_IRMA_OD`, `F7_MA_OD`, `F7_HE_OD`, `F7_SE_OD`, `F7_VL_OD`, `F7_RH_OD`, `F7_VB_OD`, `F7_IRMA_OD`, `od_level`, `F1_MA_OS`, `F1_HE_OS`, `F1_SE_OS`, `F1_VL_OS`, `F1_RH_OS`, `F1_VB_OS`, `F1_IRMA_OS`, `F2_MA_OS`, `F2_HE_OS`, `F2_SE_OS`, `F2_VL_OS`, `F2_RH_OS`, `F2_VB_OS`, `F2_IRMA_OS`, `F3_MA_OS`, `F3_HE_OS`, `F3_SE_OS`, `F3_VL_OS`, `F3_RH_OS`, `F3_VB_OS`, `F3_IRMA_OS`, `F4_MA_OS`, `F4_HE_OS`, `F4_SE_OS`, `F4_VL_OS`, `F4_RH_OS`, `F4_VB_OS`, `F4_IRMA_OS`, `F5_MA_OS`, `F5_HE_OS`, `F5_SE_OS`, `F5_VL_OS`, `F5_RH_OS`, `F5_VB_OS`, `F5_IRMA_OS`, `F6_MA_OS`, `F6_HE_OS`, `F6_SE_OS`, `F6_VL_OS`, `F6_RH_OS`, `F6_VB_OS`, `F6_IRMA_OS`, `F7_MA_OS`, `F7_HE_OS`, `F7_SE_OS`, `F7_VL_OS`, `F7_RH_OS`, `F7_VB_OS`, `F7_IRMA_OS`, `os_level`, `assign_date`) VALUES
(11, 1001, 2, 'Screening', '', '2018-08-09', 'test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2018-08-28 07:47:20'),
(15, 101, 2, 'Screening', 'Kalvista', '2018-08-01', '', 'OD', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Definite', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NPDR Level 14*', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2018-08-30 07:45:59'),
(16, 112, 2, 'Screening', '', '2018-08-16', 'teststest', '', 'Yes', 'Yes', 'Yes', 'Minimal', 'Gradable', 'test', '4 Field', '45', '', '', '', '', '', '', '', '', 'Definite', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', '', '2018-09-03 05:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `grading1_oct`
--

CREATE TABLE `grading1_oct` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received` varchar(255) NOT NULL,
  `images_gradable` varchar(255) NOT NULL,
  `etdrs_grid` varchar(255) NOT NULL,
  `imaging_protocol` varchar(255) NOT NULL,
  `no_please_explain` varchar(255) NOT NULL,
  `rpe_ilm` varchar(255) NOT NULL,
  `yes_please_specify` varchar(255) NOT NULL,
  `yes_please_specify_os` varchar(100) NOT NULL,
  `retinal_thickness` varchar(255) NOT NULL,
  `total_volume` varchar(255) NOT NULL,
  `optical_choerence_od` varchar(100) NOT NULL,
  `oct_finiding_od` varchar(100) NOT NULL,
  `images_gradable_os` varchar(100) NOT NULL,
  `etdrs_grid_os` varchar(100) NOT NULL,
  `imaging_protocol_os` varchar(100) NOT NULL,
  `no_please_explain_os` varchar(100) NOT NULL,
  `rpe_ilm_os` varchar(100) NOT NULL,
  `retinal_thickness_os` varchar(100) NOT NULL,
  `total_volume_os` varchar(100) NOT NULL,
  `optical_choerence_os` varchar(100) NOT NULL,
  `oct_finiding_os` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading1_oct`
--

INSERT INTO `grading1_oct` (`id`, `subject_id`, `user_id`, `visit_name`, `Date_visit`, `study_site`, `images_received`, `images_gradable`, `etdrs_grid`, `imaging_protocol`, `no_please_explain`, `rpe_ilm`, `yes_please_specify`, `yes_please_specify_os`, `retinal_thickness`, `total_volume`, `optical_choerence_od`, `oct_finiding_od`, `images_gradable_os`, `etdrs_grid_os`, `imaging_protocol_os`, `no_please_explain_os`, `rpe_ilm_os`, `retinal_thickness_os`, `total_volume_os`, `optical_choerence_os`, `oct_finiding_os`, `comments`, `insert_date`) VALUES
(27, 1001, 2, 'Screening', '2018-08-02', 'test', 'OD', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-09-03 09:05:19'),
(28, 104, 2, 'Screening', '2018-08-14', 'Site 12', 'OD', 'Yes', 'Yes', 'Yes', '', 'Yes', '', '', '70', '', 'Cannot Grade', 'Yes', '', '', '', '', '', '70', '', '', '', '', '2018-09-03 10:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `grading2_fp`
--

CREATE TABLE `grading2_fp` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `study_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received_od` varchar(255) NOT NULL,
  `fundus_photos_od` varchar(255) NOT NULL,
  `reflex_image_od` varchar(255) NOT NULL,
  `media_opacities_od` varchar(255) NOT NULL,
  `opacity_interferes_with_view_od` varchar(255) NOT NULL,
  `confidence_score_on_fp_od` varchar(255) NOT NULL,
  `comments_od` varchar(255) NOT NULL,
  `location_od` varchar(255) NOT NULL,
  `magnification_od` varchar(255) NOT NULL,
  `fundus_photos_os` varchar(255) NOT NULL,
  `reflex_image_os` varchar(255) NOT NULL,
  `media_opacities_os` varchar(255) NOT NULL,
  `opacity_interferes_with_view_os` varchar(255) NOT NULL,
  `confidence_score_on_fp_os` varchar(255) NOT NULL,
  `comments_os` varchar(255) NOT NULL,
  `location_os` varchar(255) NOT NULL,
  `magnification_os` varchar(255) NOT NULL,
  `F1_MA_OD` varchar(50) DEFAULT NULL,
  `F1_HE_OD` varchar(50) DEFAULT NULL,
  `F1_SE_OD` varchar(50) DEFAULT NULL,
  `F1_VL_OD` varchar(50) DEFAULT NULL,
  `F1_RH_OD` varchar(50) DEFAULT NULL,
  `F1_VB_OD` varchar(50) DEFAULT NULL,
  `F1_IRMA_OD` varchar(50) DEFAULT NULL,
  `F2_MA_OD` varchar(50) DEFAULT NULL,
  `F2_HE_OD` varchar(50) DEFAULT NULL,
  `F2_SE_OD` varchar(50) DEFAULT NULL,
  `F2_VL_OD` varchar(50) DEFAULT NULL,
  `F2_RH_OD` varchar(50) DEFAULT NULL,
  `F2_VB_OD` varchar(50) DEFAULT NULL,
  `F2_IRMA_OD` varchar(50) DEFAULT NULL,
  `F3_MA_OD` varchar(50) DEFAULT NULL,
  `F3_HE_OD` varchar(50) DEFAULT NULL,
  `F3_SE_OD` varchar(50) DEFAULT NULL,
  `F3_VL_OD` varchar(50) DEFAULT NULL,
  `F3_RH_OD` varchar(50) DEFAULT NULL,
  `F3_VB_OD` varchar(50) DEFAULT NULL,
  `F3_IRMA_OD` varchar(50) DEFAULT NULL,
  `F4_MA_OD` varchar(50) DEFAULT NULL,
  `F4_HE_OD` varchar(50) DEFAULT NULL,
  `F4_SE_OD` varchar(50) DEFAULT NULL,
  `F4_VL_OD` varchar(50) DEFAULT NULL,
  `F4_RH_OD` varchar(50) DEFAULT NULL,
  `F4_VB_OD` varchar(50) DEFAULT NULL,
  `F4_IRMA_OD` varchar(50) DEFAULT NULL,
  `F5_MA_OD` varchar(50) DEFAULT NULL,
  `F5_HE_OD` varchar(50) DEFAULT NULL,
  `F5_SE_OD` varchar(50) DEFAULT NULL,
  `F5_VL_OD` varchar(50) DEFAULT NULL,
  `F5_RH_OD` varchar(50) DEFAULT NULL,
  `F5_VB_OD` varchar(50) DEFAULT NULL,
  `F5_IRMA_OD` varchar(50) DEFAULT NULL,
  `F6_MA_OD` varchar(50) DEFAULT NULL,
  `F6_HE_OD` varchar(50) DEFAULT NULL,
  `F6_SE_OD` varchar(50) DEFAULT NULL,
  `F6_VL_OD` varchar(50) DEFAULT NULL,
  `F6_RH_OD` varchar(50) DEFAULT NULL,
  `F6_VB_OD` varchar(50) DEFAULT NULL,
  `F6_IRMA_OD` varchar(50) DEFAULT NULL,
  `F7_MA_OD` varchar(50) DEFAULT NULL,
  `F7_HE_OD` varchar(50) DEFAULT NULL,
  `F7_SE_OD` varchar(50) DEFAULT NULL,
  `F7_VL_OD` varchar(50) DEFAULT NULL,
  `F7_RH_OD` varchar(50) DEFAULT NULL,
  `F7_VB_OD` varchar(50) DEFAULT NULL,
  `F7_IRMA_OD` varchar(50) DEFAULT NULL,
  `od_level` varchar(40) NOT NULL,
  `F1_MA_OS` varchar(50) DEFAULT NULL,
  `F1_HE_OS` varchar(50) DEFAULT NULL,
  `F1_SE_OS` varchar(50) DEFAULT NULL,
  `F1_VL_OS` varchar(50) DEFAULT NULL,
  `F1_RH_OS` varchar(50) DEFAULT NULL,
  `F1_VB_OS` varchar(50) DEFAULT NULL,
  `F1_IRMA_OS` varchar(50) DEFAULT NULL,
  `F2_MA_OS` varchar(50) DEFAULT NULL,
  `F2_HE_OS` varchar(50) DEFAULT NULL,
  `F2_SE_OS` varchar(50) DEFAULT NULL,
  `F2_VL_OS` varchar(50) DEFAULT NULL,
  `F2_RH_OS` varchar(50) DEFAULT NULL,
  `F2_VB_OS` varchar(50) DEFAULT NULL,
  `F2_IRMA_OS` varchar(50) DEFAULT NULL,
  `F3_MA_OS` varchar(50) DEFAULT NULL,
  `F3_HE_OS` varchar(50) DEFAULT NULL,
  `F3_SE_OS` varchar(50) DEFAULT NULL,
  `F3_VL_OS` varchar(50) DEFAULT NULL,
  `F3_RH_OS` varchar(50) DEFAULT NULL,
  `F3_VB_OS` varchar(50) DEFAULT NULL,
  `F3_IRMA_OS` varchar(50) DEFAULT NULL,
  `F4_MA_OS` varchar(50) DEFAULT NULL,
  `F4_HE_OS` varchar(50) DEFAULT NULL,
  `F4_SE_OS` varchar(50) DEFAULT NULL,
  `F4_VL_OS` varchar(50) DEFAULT NULL,
  `F4_RH_OS` varchar(50) DEFAULT NULL,
  `F4_VB_OS` varchar(50) DEFAULT NULL,
  `F4_IRMA_OS` varchar(50) DEFAULT NULL,
  `F5_MA_OS` varchar(50) DEFAULT NULL,
  `F5_HE_OS` varchar(50) DEFAULT NULL,
  `F5_SE_OS` varchar(50) DEFAULT NULL,
  `F5_VL_OS` varchar(50) DEFAULT NULL,
  `F5_RH_OS` varchar(50) DEFAULT NULL,
  `F5_VB_OS` varchar(50) DEFAULT NULL,
  `F5_IRMA_OS` varchar(50) DEFAULT NULL,
  `F6_MA_OS` varchar(50) DEFAULT NULL,
  `F6_HE_OS` varchar(50) DEFAULT NULL,
  `F6_SE_OS` varchar(50) DEFAULT NULL,
  `F6_VL_OS` varchar(50) DEFAULT NULL,
  `F6_RH_OS` varchar(50) DEFAULT NULL,
  `F6_VB_OS` varchar(50) DEFAULT NULL,
  `F6_IRMA_OS` varchar(50) DEFAULT NULL,
  `F7_MA_OS` varchar(50) DEFAULT NULL,
  `F7_HE_OS` varchar(50) DEFAULT NULL,
  `F7_SE_OS` varchar(50) DEFAULT NULL,
  `F7_VL_OS` varchar(50) DEFAULT NULL,
  `F7_RH_OS` varchar(50) DEFAULT NULL,
  `F7_VB_OS` varchar(50) DEFAULT NULL,
  `F7_IRMA_OS` varchar(50) DEFAULT NULL,
  `os_level` varchar(40) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading2_fp`
--

INSERT INTO `grading2_fp` (`id`, `subject_id`, `user_id`, `visit_name`, `study_name`, `Date_visit`, `study_site`, `images_received_od`, `fundus_photos_od`, `reflex_image_od`, `media_opacities_od`, `opacity_interferes_with_view_od`, `confidence_score_on_fp_od`, `comments_od`, `location_od`, `magnification_od`, `fundus_photos_os`, `reflex_image_os`, `media_opacities_os`, `opacity_interferes_with_view_os`, `confidence_score_on_fp_os`, `comments_os`, `location_os`, `magnification_os`, `F1_MA_OD`, `F1_HE_OD`, `F1_SE_OD`, `F1_VL_OD`, `F1_RH_OD`, `F1_VB_OD`, `F1_IRMA_OD`, `F2_MA_OD`, `F2_HE_OD`, `F2_SE_OD`, `F2_VL_OD`, `F2_RH_OD`, `F2_VB_OD`, `F2_IRMA_OD`, `F3_MA_OD`, `F3_HE_OD`, `F3_SE_OD`, `F3_VL_OD`, `F3_RH_OD`, `F3_VB_OD`, `F3_IRMA_OD`, `F4_MA_OD`, `F4_HE_OD`, `F4_SE_OD`, `F4_VL_OD`, `F4_RH_OD`, `F4_VB_OD`, `F4_IRMA_OD`, `F5_MA_OD`, `F5_HE_OD`, `F5_SE_OD`, `F5_VL_OD`, `F5_RH_OD`, `F5_VB_OD`, `F5_IRMA_OD`, `F6_MA_OD`, `F6_HE_OD`, `F6_SE_OD`, `F6_VL_OD`, `F6_RH_OD`, `F6_VB_OD`, `F6_IRMA_OD`, `F7_MA_OD`, `F7_HE_OD`, `F7_SE_OD`, `F7_VL_OD`, `F7_RH_OD`, `F7_VB_OD`, `F7_IRMA_OD`, `od_level`, `F1_MA_OS`, `F1_HE_OS`, `F1_SE_OS`, `F1_VL_OS`, `F1_RH_OS`, `F1_VB_OS`, `F1_IRMA_OS`, `F2_MA_OS`, `F2_HE_OS`, `F2_SE_OS`, `F2_VL_OS`, `F2_RH_OS`, `F2_VB_OS`, `F2_IRMA_OS`, `F3_MA_OS`, `F3_HE_OS`, `F3_SE_OS`, `F3_VL_OS`, `F3_RH_OS`, `F3_VB_OS`, `F3_IRMA_OS`, `F4_MA_OS`, `F4_HE_OS`, `F4_SE_OS`, `F4_VL_OS`, `F4_RH_OS`, `F4_VB_OS`, `F4_IRMA_OS`, `F5_MA_OS`, `F5_HE_OS`, `F5_SE_OS`, `F5_VL_OS`, `F5_RH_OS`, `F5_VB_OS`, `F5_IRMA_OS`, `F6_MA_OS`, `F6_HE_OS`, `F6_SE_OS`, `F6_VL_OS`, `F6_RH_OS`, `F6_VB_OS`, `F6_IRMA_OS`, `F7_MA_OS`, `F7_HE_OS`, `F7_SE_OS`, `F7_VL_OS`, `F7_RH_OS`, `F7_VB_OS`, `F7_IRMA_OS`, `os_level`, `assign_date`) VALUES
(11, 1001, 4, 'Screening', '', '2018-08-09', 'test', 'od', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '2018-08-30 05:57:00'),
(12, 101, 4, 'Screening', 'Kalvista', '2018-08-01', '', 'OD', 'os', 'qa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Definite', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NPDR Level 14*', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2018-08-30 07:46:32'),
(13, 102, 4, 'Visit', '', '2018-08-16', 'test stite', '', 'Yes', 'Yes', 'Yes', 'Negligible', 'Gradable', 'test', '4 Field', '45', '', '', '', '', '', '', '', '', 'Definite', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'NPDR Level 10 ', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', 'Absent', '', 'Absent', 'Absent', 'Absent', '', '2018-09-03 05:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `grading2_oct`
--

CREATE TABLE `grading2_oct` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received` varchar(255) NOT NULL,
  `images_gradable` varchar(255) NOT NULL,
  `etdrs_grid` varchar(255) NOT NULL,
  `imaging_protocol` varchar(255) NOT NULL,
  `no_please_explain` varchar(255) NOT NULL,
  `rpe_ilm` varchar(255) NOT NULL,
  `yes_please_specify` varchar(255) NOT NULL,
  `yes_please_specify_os` varchar(100) NOT NULL,
  `retinal_thickness` varchar(255) NOT NULL,
  `total_volume` varchar(255) NOT NULL,
  `images_gradable_os` varchar(100) NOT NULL,
  `etdrs_grid_os` varchar(100) NOT NULL,
  `imaging_protocol_os` varchar(100) NOT NULL,
  `no_please_explain_os` varchar(100) NOT NULL,
  `rpe_ilm_os` varchar(100) NOT NULL,
  `retinal_thickness_os` varchar(100) NOT NULL,
  `total_volume_os` varchar(100) NOT NULL,
  `optical_choerence_od` varchar(100) NOT NULL,
  `oct_finiding_od` varchar(100) NOT NULL,
  `optical_choerence_os` varchar(100) NOT NULL,
  `oct_finiding_os` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading2_oct`
--

INSERT INTO `grading2_oct` (`id`, `subject_id`, `user_id`, `visit_name`, `Date_visit`, `study_site`, `images_received`, `images_gradable`, `etdrs_grid`, `imaging_protocol`, `no_please_explain`, `rpe_ilm`, `yes_please_specify`, `yes_please_specify_os`, `retinal_thickness`, `total_volume`, `images_gradable_os`, `etdrs_grid_os`, `imaging_protocol_os`, `no_please_explain_os`, `rpe_ilm_os`, `retinal_thickness_os`, `total_volume_os`, `optical_choerence_od`, `oct_finiding_od`, `optical_choerence_os`, `oct_finiding_os`, `comments`, `insert_date`) VALUES
(27, 1001, 4, 'Screening', '2018-08-02', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-29 04:48:50'),
(28, 104, 4, 'Screening', '2018-08-14', 'Site 12', 'OS', '', '', '', '', '', '', '', '54', '', 'Yes', 'Yes', 'Yes', '', 'Yes', '54', '', '', '', '', '', '', '2018-09-03 10:35:56');

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_admin_subject`
-- (See below for the actual view)
--
CREATE TABLE `log_admin_subject` (
`user_id` int(10)
,`username` varchar(255)
,`subject_id` int(11)
,`study_name` varchar(255)
,`visit_name` varchar(255)
,`insert_date` timestamp
,`Message` varchar(18)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_fp_adju`
-- (See below for the actual view)
--
CREATE TABLE `log_fp_adju` (
`user_id` int(10)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(255)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_fp_g1`
-- (See below for the actual view)
--
CREATE TABLE `log_fp_g1` (
`user_id` int(11)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_fp_g2`
-- (See below for the actual view)
--
CREATE TABLE `log_fp_g2` (
`user_id` int(11)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(48)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_fp_qec`
-- (See below for the actual view)
--
CREATE TABLE `log_fp_qec` (
`user_id` int(11)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(43)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_oct_adju`
-- (See below for the actual view)
--
CREATE TABLE `log_oct_adju` (
`user_id` int(10)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(255)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(35)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_oct_g1`
-- (See below for the actual view)
--
CREATE TABLE `log_oct_g1` (
`user_id` int(20)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(33)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_oct_g2`
-- (See below for the actual view)
--
CREATE TABLE `log_oct_g2` (
`user_id` int(20)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(33)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_oct_qec`
-- (See below for the actual view)
--
CREATE TABLE `log_oct_qec` (
`user_id` int(20)
,`username` varchar(255)
,`subject_id` int(11)
,`Study_Name` varchar(255)
,`Visit_Name` varchar(100)
,`Assign_Visit_Date` date
,`Entry_Date` timestamp
,`Message` varchar(27)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oct_formula`
-- (See below for the actual view)
--
CREATE TABLE `oct_formula` (
`subject_id` int(11)
,`Retinal_thickness` varchar(51)
,`Retinal_thickness_os` varchar(51)
,`OD_g1` varchar(34)
,`OS_g1` varchar(34)
,`OD_g2` varchar(34)
,`OS_g2` varchar(34)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oct_fp_sum`
-- (See below for the actual view)
--
CREATE TABLE `oct_fp_sum` (
`message` varchar(23)
,`fp_total` bigint(21)
,`oct_total` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oct_view_g1`
-- (See below for the actual view)
--
CREATE TABLE `oct_view_g1` (
`subject_id` int(11)
,`user_id` int(20)
,`visit_name` varchar(100)
,`images_received` varchar(255)
,`images_gradable` varchar(255)
,`etdrs_grid` varchar(255)
,`imaging_protocol` varchar(255)
,`no_please_explain` varchar(255)
,`rpe_ilm` varchar(255)
,`yes_please_specify` varchar(255)
,`yes_please_specify_os` varchar(100)
,`retinal_thickness` varchar(255)
,`total_volume` varchar(255)
,`OD_eligibilty` varchar(34)
,`images_gradable_os` varchar(100)
,`etdrs_grid_os` varchar(100)
,`imaging_protocol_os` varchar(100)
,`no_please_explain_os` varchar(100)
,`rpe_ilm_os` varchar(100)
,`retinal_thickness_os` varchar(100)
,`total_volume_os` varchar(100)
,`OS_eligibilty` varchar(34)
,`insert_date` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oct_view_g2`
-- (See below for the actual view)
--
CREATE TABLE `oct_view_g2` (
`subject_id` int(11)
,`user_id` int(20)
,`visit_name` varchar(100)
,`images_received` varchar(255)
,`images_gradable` varchar(255)
,`etdrs_grid` varchar(255)
,`imaging_protocol` varchar(255)
,`no_please_explain` varchar(255)
,`rpe_ilm` varchar(255)
,`yes_please_specify` varchar(255)
,`yes_please_specify_os` varchar(100)
,`retinal_thickness` varchar(255)
,`total_volume` varchar(255)
,`OD_eligibilty` varchar(34)
,`images_gradable_os` varchar(100)
,`etdrs_grid_os` varchar(100)
,`imaging_protocol_os` varchar(100)
,`no_please_explain_os` varchar(100)
,`rpe_ilm_os` varchar(100)
,`retinal_thickness_os` varchar(100)
,`total_volume_os` varchar(100)
,`OS_eligibilty` varchar(34)
,`insert_date` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `qec_fp`
--

CREATE TABLE `qec_fp` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received_od` varchar(255) NOT NULL,
  `fundus_photos_od` varchar(255) NOT NULL,
  `reflex_image_od` varchar(255) NOT NULL,
  `media_opacities_od` varchar(255) NOT NULL,
  `opacity_interferes_with_view_od` varchar(255) NOT NULL,
  `confidence_score_on_fp_od` varchar(255) NOT NULL,
  `comments_od` varchar(255) NOT NULL,
  `location_od` varchar(255) NOT NULL,
  `magnification_od` varchar(255) NOT NULL,
  `fundus_photos_os` varchar(255) NOT NULL,
  `reflex_image_os` varchar(255) NOT NULL,
  `media_opacities_os` varchar(255) NOT NULL,
  `opacity_interferes_with_view_os` varchar(255) NOT NULL,
  `confidence_score_on_fp_os` varchar(255) NOT NULL,
  `comments_os` varchar(255) NOT NULL,
  `location_os` varchar(255) NOT NULL,
  `magnification_os` varchar(255) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qec_fp`
--

INSERT INTO `qec_fp` (`id`, `subject_id`, `user_id`, `visit_name`, `Date_visit`, `study_site`, `images_received_od`, `fundus_photos_od`, `reflex_image_od`, `media_opacities_od`, `opacity_interferes_with_view_od`, `confidence_score_on_fp_od`, `comments_od`, `location_od`, `magnification_od`, `fundus_photos_os`, `reflex_image_os`, `media_opacities_os`, `opacity_interferes_with_view_os`, `confidence_score_on_fp_os`, `comments_os`, `location_os`, `magnification_os`, `assign_date`) VALUES
(1, 1001, 6, 'Screening', '2018-08-09', 'test', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-29 06:59:25'),
(16, 112, 6, 'Screening', '2018-08-15', '', 'OD', 'Yes', 'Yes', 'Yes', 'Minimal', 'Gradable', 'test', '4 Field', '50', '', '', '', '', '', '', '', '', '2018-08-30 12:31:43'),
(17, 102, 6, 'Visit', '2018-08-16', 'test stite', 'OD', 'Yes', 'Yes', 'Yes', 'Negligible', 'Gradable', 'test', '4 Field', '50', '', '', '', '', '', '', '', '', '2018-08-30 12:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `qec_oct`
--

CREATE TABLE `qec_oct` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `visit_name` varchar(100) NOT NULL,
  `Date_visit` date NOT NULL,
  `study_site` varchar(200) NOT NULL,
  `images_received` varchar(255) NOT NULL,
  `images_gradable` varchar(255) NOT NULL,
  `etdrs_grid` varchar(255) NOT NULL,
  `imaging_protocol` varchar(255) NOT NULL,
  `no_please_explain` varchar(255) NOT NULL,
  `rpe_ilm` varchar(255) NOT NULL,
  `yes_please_specify` varchar(255) NOT NULL,
  `yes_please_specify_os` varchar(100) NOT NULL,
  `images_gradable_os` varchar(100) NOT NULL,
  `etdrs_grid_os` varchar(100) NOT NULL,
  `imaging_protocol_os` varchar(100) NOT NULL,
  `no_please_explain_os` varchar(100) NOT NULL,
  `rpe_ilm_os` varchar(100) NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qec_oct`
--

INSERT INTO `qec_oct` (`id`, `subject_id`, `user_id`, `visit_name`, `Date_visit`, `study_site`, `images_received`, `images_gradable`, `etdrs_grid`, `imaging_protocol`, `no_please_explain`, `rpe_ilm`, `yes_please_specify`, `yes_please_specify_os`, `images_gradable_os`, `etdrs_grid_os`, `imaging_protocol_os`, `no_please_explain_os`, `rpe_ilm_os`, `insert_date`) VALUES
(1, 1001, 6, 'Screening', '2018-08-02', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2018-08-29 06:55:39'),
(2, 102, 6, 'Visit', '2018-08-14', 'test', 'OD', 'Yes', '', '', '', '', '', '', '', '', '', '', '', '2018-08-30 10:31:03'),
(4, 101, 6, 'Screening', '2018-08-09', 'Test', 'OD', 'Yes', 'Yes', 'Yes', '', '', '', '', '', '', '', '', '', '2018-08-30 12:39:47'),
(5, 104, 6, 'Screening', '2018-08-14', 'Site 1', 'OD', 'Yes', 'Yes', '', 'asdssa', 'Yes', 'Mid', '', '', '', '', 'asdssa', '', '2018-08-30 12:44:46'),
(6, 112, 6, 'Screening', '2018-09-05', 'test', 'OD', 'Yes', 'Yes', '', 'test', 'Yes', 'Mid', '', '', '', '', 'test', '', '2018-09-03 07:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `enrollment_date` date DEFAULT NULL,
  `study_name` varchar(255) NOT NULL,
  `visit_name` varchar(255) NOT NULL,
  `visit_date` date NOT NULL,
  `insert_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `enrollment_date`, `study_name`, `visit_name`, `visit_date`, `insert_date`, `user_id`) VALUES
(101, '2018-08-09', 'Kalvista', 'Screening', '2018-08-09', '2018-08-29 08:16:17', 1),
(102, '2018-08-01', 'Kalvista', 'Visit', '2018-08-01', '2018-08-29 08:16:23', 1),
(104, '2018-08-14', 'Kalvista', 'Screening', '2018-08-15', '2018-08-01 11:17:22', 1),
(112, '2018-08-14', 'Kalvista', 'Screening', '2018-08-26', '0000-00-00 00:00:00', 1),
(1001, '2018-08-08', 'kalvista', 'Screening', '2018-08-08', '2018-08-29 08:16:31', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_all`
-- (See below for the actual view)
--
CREATE TABLE `sum_all` (
`total` bigint(21)
,`message` varchar(23)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_all_oct`
-- (See below for the actual view)
--
CREATE TABLE `sum_all_oct` (
`total` bigint(21)
,`message` varchar(23)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `type`, `email`, `assign_date`) VALUES
(1, 'admin', 'admin', 'admin', 'khalid.csit1234@gmail.com', '2018-08-29 08:27:55'),
(2, 'grader1', 'admin', 'Grader1', 'ku@qapak.org', '2018-09-03 05:27:31'),
(3, 'adjudicator', 'admin', 'Adjudicator', 'niaz@gmail.com', '2018-09-03 05:27:33'),
(4, 'grader2', 'admin', 'Grader2', 'abc', '2018-09-03 05:27:35'),
(5, 'khalid', 'admin', 'Grader1', 'ab@gmail.com', '2018-09-03 05:27:37'),
(6, 'qec', 'admin', 'QEC', 'abc', '2018-09-03 05:27:38');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_g1`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_g1` (
`subject_id` int(11)
,`study_site` varchar(200)
,`visit_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_g1_oct`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_g1_oct` (
`subject_id` int(11)
,`study_site` varchar(200)
,`visit_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_g2`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_g2` (
`subject_id` int(11)
,`study_site` varchar(200)
,`visit_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_g2_oct`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_g2_oct` (
`subject_id` int(11)
,`study_site` varchar(200)
,`visit_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_qec_fp`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_qec_fp` (
`subject_id` int(11)
,`study_name` varchar(255)
,`visit_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_id_subject_qec_oct`
-- (See below for the actual view)
--
CREATE TABLE `user_id_subject_qec_oct` (
`subject_id` int(11)
,`study_name` varchar(255)
,`visit_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view_sub_adju_fp`
-- (See below for the actual view)
--
CREATE TABLE `user_view_sub_adju_fp` (
`subject_id` int(11)
,`study_name` varchar(255)
,`visit_name` varchar(255)
,`message` varchar(73)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view_sub_adju_oct`
-- (See below for the actual view)
--
CREATE TABLE `user_view_sub_adju_oct` (
`subject_id` int(11)
,`study_name` varchar(255)
,`visit_name` varchar(255)
,`message` varchar(73)
);

-- --------------------------------------------------------

--
-- Structure for view `adjudication_fp`
--
DROP TABLE IF EXISTS `adjudication_fp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `adjudication_fp`  AS  select distinct `grading1_fp`.`subject_id` AS `subject_id`,`grading1_fp`.`visit_name` AS `visit_name`,`grading1_fp`.`study_name` AS `study_name`,(case when (`grading1_fp`.`study_site` = `grading2_fp`.`study_site`) then `grading1_fp`.`study_site` else '' end) AS `study_site`,(case when (`grading1_fp`.`images_received_od` = `grading2_fp`.`images_received_od`) then `grading1_fp`.`images_received_od` else '' end) AS `images_received_od`,(case when (`grading1_fp`.`fundus_photos_od` = `grading2_fp`.`fundus_photos_od`) then `grading1_fp`.`fundus_photos_od` else '' end) AS `fundus_photos_od`,(case when (`grading1_fp`.`reflex_image_od` = `grading2_fp`.`reflex_image_od`) then `grading1_fp`.`reflex_image_od` else '' end) AS `reflex_image_od`,(case when (`grading1_fp`.`media_opacities_od` = `grading2_fp`.`media_opacities_od`) then `grading1_fp`.`media_opacities_od` else '' end) AS `media_opacities_od`,(case when (`grading1_fp`.`opacity_interferes_with_view_od` = `grading2_fp`.`opacity_interferes_with_view_od`) then `grading1_fp`.`opacity_interferes_with_view_od` else '' end) AS `opacity_interferes_with_view_od`,(case when (`grading1_fp`.`confidence_score_on_fp_od` = `grading2_fp`.`confidence_score_on_fp_od`) then `grading1_fp`.`confidence_score_on_fp_od` else '' end) AS `confidence_score_on_fp_od`,(case when (`grading1_fp`.`comments_od` = `grading2_fp`.`comments_od`) then `grading1_fp`.`comments_od` else '' end) AS `comments_od`,(case when (`grading1_fp`.`location_od` = `grading2_fp`.`location_od`) then `grading1_fp`.`location_od` else '' end) AS `location_od`,(case when (`grading1_fp`.`magnification_od` = `grading2_fp`.`magnification_od`) then `grading1_fp`.`magnification_od` else '' end) AS `magnification_od`,(case when (`grading1_fp`.`fundus_photos_os` = `grading2_fp`.`fundus_photos_os`) then `grading1_fp`.`fundus_photos_os` else '' end) AS `fundus_photos_os`,(case when (`grading1_fp`.`reflex_image_os` = `grading2_fp`.`reflex_image_os`) then `grading1_fp`.`reflex_image_os` else '' end) AS `reflex_image_os`,(case when (`grading1_fp`.`media_opacities_os` = `grading2_fp`.`media_opacities_os`) then `grading1_fp`.`media_opacities_os` else '' end) AS `media_opacities_os`,(case when (`grading1_fp`.`opacity_interferes_with_view_os` = `grading2_fp`.`opacity_interferes_with_view_os`) then `grading1_fp`.`opacity_interferes_with_view_os` else '' end) AS `opacity_interferes_with_view_os`,(case when (`grading1_fp`.`confidence_score_on_fp_os` = `grading2_fp`.`confidence_score_on_fp_os`) then `grading1_fp`.`confidence_score_on_fp_os` else '' end) AS `confidence_score_on_fp_os`,(case when (`grading1_fp`.`comments_os` = `grading2_fp`.`comments_os`) then `grading1_fp`.`comments_os` else '' end) AS `comments_os`,(case when (`grading1_fp`.`location_os` = `grading2_fp`.`location_os`) then `grading1_fp`.`location_os` else '' end) AS `location_os`,(case when (`grading1_fp`.`magnification_os` = `grading2_fp`.`magnification_os`) then `grading1_fp`.`magnification_os` else '' end) AS `magnification_os`,(case when (`grading1_fp`.`F1_MA_OD` = `grading2_fp`.`F1_MA_OD`) then `grading1_fp`.`F1_MA_OD` else '' end) AS `F1_MA_OD`,(case when (`grading1_fp`.`F1_HE_OD` = `grading2_fp`.`F1_HE_OD`) then `grading1_fp`.`F1_HE_OD` else '' end) AS `F1_HE_OD`,(case when (`grading1_fp`.`F1_SE_OD` = `grading2_fp`.`F1_SE_OD`) then `grading1_fp`.`F1_SE_OD` else '' end) AS `F1_SE_OD`,(case when (`grading1_fp`.`F1_VL_OD` = `grading2_fp`.`F1_VL_OD`) then `grading1_fp`.`F1_VL_OD` else '' end) AS `F1_VL_OD`,(case when (`grading1_fp`.`F1_RH_OD` = `grading2_fp`.`F1_RH_OD`) then `grading1_fp`.`F1_RH_OD` else '' end) AS `F1_RH_OD`,(case when (`grading1_fp`.`F1_VB_OD` = `grading2_fp`.`F1_VB_OD`) then `grading1_fp`.`F1_VB_OD` else '' end) AS `F1_VB_OD`,(case when (`grading1_fp`.`F1_IRMA_OD` = `grading2_fp`.`F1_IRMA_OD`) then `grading1_fp`.`F1_IRMA_OD` else '' end) AS `F1_IRMA_OD`,(case when (`grading1_fp`.`F2_MA_OD` = `grading2_fp`.`F2_MA_OD`) then `grading1_fp`.`F2_MA_OD` else '' end) AS `F2_MA_OD`,(case when (`grading1_fp`.`F2_HE_OD` = `grading2_fp`.`F2_HE_OD`) then `grading1_fp`.`F2_HE_OD` else '' end) AS `F2_HE_OD`,(case when (`grading1_fp`.`F2_SE_OD` = `grading2_fp`.`F2_SE_OD`) then `grading1_fp`.`F2_SE_OD` else '' end) AS `F2_SE_OD`,(case when (`grading1_fp`.`F2_VL_OD` = `grading2_fp`.`F2_VL_OD`) then `grading1_fp`.`F2_VL_OD` else '' end) AS `F2_VL_OD`,(case when (`grading1_fp`.`F2_RH_OD` = `grading2_fp`.`F2_RH_OD`) then `grading1_fp`.`F2_RH_OD` else '' end) AS `F2_RH_OD`,(case when (`grading1_fp`.`F2_VB_OD` = `grading2_fp`.`F2_VB_OD`) then `grading1_fp`.`F2_VB_OD` else '' end) AS `F2_VB_OD`,(case when (`grading1_fp`.`F2_IRMA_OD` = `grading2_fp`.`F2_IRMA_OD`) then `grading1_fp`.`F2_IRMA_OD` else '' end) AS `F2_IRMA_OD`,(case when (`grading1_fp`.`F3_MA_OD` = `grading2_fp`.`F3_MA_OD`) then `grading1_fp`.`F3_MA_OD` else '' end) AS `F3_MA_OD`,(case when (`grading1_fp`.`F3_HE_OD` = `grading2_fp`.`F3_HE_OD`) then `grading1_fp`.`F3_HE_OD` else '' end) AS `F3_HE_OD`,(case when (`grading1_fp`.`F3_SE_OD` = `grading2_fp`.`F3_SE_OD`) then `grading1_fp`.`F3_SE_OD` else '' end) AS `F3_SE_OD`,(case when (`grading1_fp`.`F3_VL_OD` = `grading2_fp`.`F3_VL_OD`) then `grading1_fp`.`F3_VL_OD` else '' end) AS `F3_VL_OD`,(case when (`grading1_fp`.`F3_RH_OD` = `grading2_fp`.`F3_RH_OD`) then `grading1_fp`.`F3_RH_OD` else '' end) AS `F3_RH_OD`,(case when (`grading1_fp`.`F3_VB_OD` = `grading2_fp`.`F3_VB_OD`) then `grading1_fp`.`F3_VB_OD` else '' end) AS `F3_VB_OD`,(case when (`grading1_fp`.`F3_IRMA_OD` = `grading2_fp`.`F3_IRMA_OD`) then `grading1_fp`.`F3_IRMA_OD` else '' end) AS `F3_IRMA_OD`,(case when (`grading1_fp`.`F4_MA_OD` = `grading2_fp`.`F4_MA_OD`) then `grading1_fp`.`F4_MA_OD` else '' end) AS `F4_MA_OD`,(case when (`grading1_fp`.`F4_HE_OD` = `grading2_fp`.`F4_HE_OD`) then `grading1_fp`.`F4_HE_OD` else '' end) AS `F4_HE_OD`,(case when (`grading1_fp`.`F4_SE_OD` = `grading2_fp`.`F4_SE_OD`) then `grading1_fp`.`F4_SE_OD` else '' end) AS `F4_SE_OD`,(case when (`grading1_fp`.`F4_VL_OD` = `grading2_fp`.`F4_VL_OD`) then `grading1_fp`.`F4_VL_OD` else '' end) AS `F4_VL_OD`,(case when (`grading1_fp`.`F4_RH_OD` = `grading2_fp`.`F4_RH_OD`) then `grading1_fp`.`F4_RH_OD` else '' end) AS `F4_RH_OD`,(case when (`grading1_fp`.`F4_VB_OD` = `grading2_fp`.`F4_VB_OD`) then `grading1_fp`.`F4_VB_OD` else '' end) AS `F4_VB_OD`,(case when (`grading1_fp`.`F4_IRMA_OD` = `grading2_fp`.`F4_IRMA_OD`) then `grading1_fp`.`F4_IRMA_OD` else '' end) AS `F4_IRMA_OD`,(case when (`grading1_fp`.`F5_MA_OD` = `grading2_fp`.`F5_MA_OD`) then `grading1_fp`.`F5_MA_OD` else '' end) AS `F5_MA_OD`,(case when (`grading1_fp`.`F5_HE_OD` = `grading2_fp`.`F5_HE_OD`) then `grading1_fp`.`F5_HE_OD` else '' end) AS `F5_HE_OD`,(case when (`grading1_fp`.`F5_SE_OD` = `grading2_fp`.`F5_SE_OD`) then `grading1_fp`.`F5_SE_OD` else '' end) AS `F5_SE_OD`,(case when (`grading1_fp`.`F5_VL_OD` = `grading2_fp`.`F5_VL_OD`) then `grading1_fp`.`F5_VL_OD` else '' end) AS `F5_VL_OD`,(case when (`grading1_fp`.`F5_RH_OD` = `grading2_fp`.`F5_RH_OD`) then `grading1_fp`.`F5_RH_OD` else '' end) AS `F5_RH_OD`,(case when (`grading1_fp`.`F5_VB_OD` = `grading2_fp`.`F5_VB_OD`) then `grading1_fp`.`F5_VB_OD` else '' end) AS `F5_VB_OD`,(case when (`grading1_fp`.`F5_IRMA_OD` = `grading2_fp`.`F5_IRMA_OD`) then `grading1_fp`.`F5_IRMA_OD` else '' end) AS `F5_IRMA_OD`,(case when (`grading1_fp`.`F6_MA_OD` = `grading2_fp`.`F6_MA_OD`) then `grading1_fp`.`F6_MA_OD` else '' end) AS `F6_MA_OD`,(case when (`grading1_fp`.`F6_HE_OD` = `grading2_fp`.`F6_HE_OD`) then `grading1_fp`.`F6_HE_OD` else '' end) AS `F6_HE_OD`,(case when (`grading1_fp`.`F6_SE_OD` = `grading2_fp`.`F6_SE_OD`) then `grading1_fp`.`F6_SE_OD` else '' end) AS `F6_SE_OD`,(case when (`grading1_fp`.`F6_VL_OD` = `grading2_fp`.`F6_VL_OD`) then `grading1_fp`.`F6_VL_OD` else '' end) AS `F6_VL_OD`,(case when (`grading1_fp`.`F6_RH_OD` = `grading2_fp`.`F6_RH_OD`) then `grading1_fp`.`F6_RH_OD` else '' end) AS `F6_RH_OD`,(case when (`grading1_fp`.`F6_VB_OD` = `grading2_fp`.`F6_VB_OD`) then `grading1_fp`.`F6_VB_OD` else '' end) AS `F6_VB_OD`,(case when (`grading1_fp`.`F6_IRMA_OD` = `grading2_fp`.`F6_IRMA_OD`) then `grading1_fp`.`F6_IRMA_OD` else '' end) AS `F6_IRMA_OD`,(case when (`grading1_fp`.`F7_MA_OD` = `grading2_fp`.`F7_MA_OD`) then `grading1_fp`.`F7_MA_OD` else '' end) AS `F7_MA_OD`,(case when (`grading1_fp`.`F7_HE_OD` = `grading2_fp`.`F7_HE_OD`) then `grading1_fp`.`F7_HE_OD` else '' end) AS `F7_HE_OD`,(case when (`grading1_fp`.`F7_SE_OD` = `grading2_fp`.`F7_SE_OD`) then `grading1_fp`.`F7_SE_OD` else '' end) AS `F7_SE_OD`,(case when (`grading1_fp`.`F7_VL_OD` = `grading2_fp`.`F7_VL_OD`) then `grading1_fp`.`F7_VL_OD` else '' end) AS `F7_VL_OD`,(case when (`grading1_fp`.`F7_RH_OD` = `grading2_fp`.`F7_RH_OD`) then `grading1_fp`.`F7_RH_OD` else '' end) AS `F7_RH_OD`,(case when (`grading1_fp`.`F7_VB_OD` = `grading2_fp`.`F7_VB_OD`) then `grading1_fp`.`F7_VB_OD` else '' end) AS `F7_VB_OD`,(case when (`grading1_fp`.`F7_IRMA_OD` = `grading2_fp`.`F7_IRMA_OD`) then `grading1_fp`.`F7_IRMA_OD` else '' end) AS `F7_IRMA_OD`,(case when (`grading1_fp`.`od_level` = `grading2_fp`.`od_level`) then `grading1_fp`.`od_level` else '' end) AS `od_level`,(case when (`grading1_fp`.`F1_MA_OS` = `grading2_fp`.`F1_MA_OS`) then `grading1_fp`.`F1_MA_OS` else '' end) AS `F1_MA_OS`,(case when (`grading1_fp`.`F1_HE_OS` = `grading2_fp`.`F1_HE_OS`) then `grading1_fp`.`F1_HE_OS` else '' end) AS `F1_HE_OS`,(case when (`grading1_fp`.`F1_SE_OS` = `grading2_fp`.`F1_SE_OS`) then `grading1_fp`.`F1_SE_OS` else '' end) AS `F1_SE_OS`,(case when (`grading1_fp`.`F1_VL_OS` = `grading2_fp`.`F1_VL_OS`) then `grading1_fp`.`F1_VL_OS` else '' end) AS `F1_VL_OS`,(case when (`grading1_fp`.`F1_RH_OS` = `grading2_fp`.`F1_RH_OS`) then `grading1_fp`.`F1_RH_OS` else '' end) AS `F1_RH_OS`,(case when (`grading1_fp`.`F1_VB_OS` = `grading2_fp`.`F1_VB_OS`) then `grading1_fp`.`F1_VB_OS` else '' end) AS `F1_VB_OS`,(case when (`grading1_fp`.`F1_IRMA_OS` = `grading2_fp`.`F1_IRMA_OS`) then `grading1_fp`.`F1_IRMA_OS` else '' end) AS `F1_IRMA_OS`,(case when (`grading1_fp`.`F2_MA_OS` = `grading2_fp`.`F2_MA_OS`) then `grading1_fp`.`F2_MA_OS` else '' end) AS `F2_MA_OS`,(case when (`grading1_fp`.`F2_HE_OS` = `grading2_fp`.`F2_HE_OS`) then `grading1_fp`.`F2_HE_OS` else '' end) AS `F2_HE_OS`,(case when (`grading1_fp`.`F2_SE_OS` = `grading2_fp`.`F2_SE_OS`) then `grading1_fp`.`F2_SE_OS` else '' end) AS `F2_SE_OS`,(case when (`grading1_fp`.`F2_VL_OS` = `grading2_fp`.`F2_VL_OS`) then `grading1_fp`.`F2_VL_OS` else '' end) AS `F2_VL_OS`,(case when (`grading1_fp`.`F2_RH_OS` = `grading2_fp`.`F2_RH_OS`) then `grading1_fp`.`F2_RH_OS` else '' end) AS `F2_RH_OS`,(case when (`grading1_fp`.`F2_VB_OS` = `grading2_fp`.`F2_VB_OS`) then `grading1_fp`.`F2_VB_OS` else '' end) AS `F2_VB_OS`,(case when (`grading1_fp`.`F2_IRMA_OS` = `grading2_fp`.`F2_IRMA_OS`) then `grading1_fp`.`F2_IRMA_OS` else '' end) AS `F2_IRMA_OS`,(case when (`grading1_fp`.`F3_MA_OS` = `grading2_fp`.`F3_MA_OS`) then `grading1_fp`.`F3_MA_OS` else '' end) AS `F3_MA_OS`,(case when (`grading1_fp`.`F3_HE_OS` = `grading2_fp`.`F3_HE_OS`) then `grading1_fp`.`F3_HE_OS` else '' end) AS `F3_HE_OS`,(case when (`grading1_fp`.`F3_SE_OS` = `grading2_fp`.`F3_SE_OS`) then `grading1_fp`.`F3_SE_OS` else '' end) AS `F3_SE_OS`,(case when (`grading1_fp`.`F3_VL_OS` = `grading2_fp`.`F3_VL_OS`) then `grading1_fp`.`F3_VL_OS` else '' end) AS `F3_VL_OS`,(case when (`grading1_fp`.`F3_RH_OS` = `grading2_fp`.`F3_RH_OS`) then `grading1_fp`.`F3_RH_OS` else '' end) AS `F3_RH_OS`,(case when (`grading1_fp`.`F3_VB_OS` = `grading2_fp`.`F3_VB_OS`) then `grading1_fp`.`F3_VB_OS` else '' end) AS `F3_VB_OS`,(case when (`grading1_fp`.`F3_IRMA_OS` = `grading2_fp`.`F3_IRMA_OS`) then `grading1_fp`.`F3_IRMA_OS` else '' end) AS `F3_IRMA_OS`,(case when (`grading1_fp`.`F4_MA_OS` = `grading2_fp`.`F4_MA_OS`) then `grading1_fp`.`F4_MA_OS` else '' end) AS `F4_MA_OS`,(case when (`grading1_fp`.`F4_HE_OS` = `grading2_fp`.`F4_HE_OS`) then `grading1_fp`.`F4_HE_OS` else '' end) AS `F4_HE_OS`,(case when (`grading1_fp`.`F4_SE_OS` = `grading2_fp`.`F4_SE_OS`) then `grading1_fp`.`F4_SE_OS` else '' end) AS `F4_SE_OS`,(case when (`grading1_fp`.`F4_VL_OS` = `grading2_fp`.`F4_VL_OS`) then `grading1_fp`.`F4_VL_OS` else '' end) AS `F4_VL_OS`,(case when (`grading1_fp`.`F4_RH_OS` = `grading2_fp`.`F4_RH_OS`) then `grading1_fp`.`F4_RH_OS` else '' end) AS `F4_RH_OS`,(case when (`grading1_fp`.`F4_VB_OS` = `grading2_fp`.`F4_VB_OS`) then `grading1_fp`.`F4_VB_OS` else '' end) AS `F4_VB_OS`,(case when (`grading1_fp`.`F4_IRMA_OS` = `grading2_fp`.`F4_IRMA_OS`) then `grading1_fp`.`F4_IRMA_OS` else '' end) AS `F4_IRMA_OS`,(case when (`grading1_fp`.`F5_MA_OS` = `grading2_fp`.`F5_MA_OS`) then `grading1_fp`.`F5_MA_OS` else '' end) AS `F5_MA_OS`,(case when (`grading1_fp`.`F5_HE_OS` = `grading2_fp`.`F5_HE_OS`) then `grading1_fp`.`F5_HE_OS` else '' end) AS `F5_HE_OS`,(case when (`grading1_fp`.`F5_SE_OS` = `grading2_fp`.`F5_SE_OS`) then `grading1_fp`.`F5_SE_OS` else '' end) AS `F5_SE_OS`,(case when (`grading1_fp`.`F5_VL_OS` = `grading2_fp`.`F5_VL_OS`) then `grading1_fp`.`F5_VL_OS` else '' end) AS `F5_VL_OS`,(case when (`grading1_fp`.`F5_RH_OS` = `grading2_fp`.`F5_RH_OS`) then `grading1_fp`.`F5_RH_OS` else '' end) AS `F5_RH_OS`,(case when (`grading1_fp`.`F5_VB_OS` = `grading2_fp`.`F5_VB_OS`) then `grading1_fp`.`F5_VB_OS` else '' end) AS `F5_VB_OS`,(case when (`grading1_fp`.`F5_IRMA_OS` = `grading2_fp`.`F5_IRMA_OS`) then `grading1_fp`.`F5_IRMA_OS` else '' end) AS `F5_IRMA_OS`,(case when (`grading1_fp`.`F6_MA_OS` = `grading2_fp`.`F6_MA_OS`) then `grading1_fp`.`F6_MA_OS` else '' end) AS `F6_MA_OS`,(case when (`grading1_fp`.`F6_HE_OS` = `grading2_fp`.`F6_HE_OS`) then `grading1_fp`.`F6_HE_OS` else '' end) AS `F6_HE_OS`,(case when (`grading1_fp`.`F6_SE_OS` = `grading2_fp`.`F6_SE_OS`) then `grading1_fp`.`F6_SE_OS` else '' end) AS `F6_SE_OS`,(case when (`grading1_fp`.`F6_VL_OS` = `grading2_fp`.`F6_VL_OS`) then `grading1_fp`.`F6_VL_OS` else '' end) AS `F6_VL_OS`,(case when (`grading1_fp`.`F6_RH_OS` = `grading2_fp`.`F6_RH_OS`) then `grading1_fp`.`F6_RH_OS` else '' end) AS `F6_RH_OS`,(case when (`grading1_fp`.`F6_VB_OS` = `grading2_fp`.`F6_VB_OS`) then `grading1_fp`.`F6_VB_OS` else '' end) AS `F6_VB_OS`,(case when (`grading1_fp`.`F6_IRMA_OS` = `grading2_fp`.`F6_IRMA_OS`) then `grading1_fp`.`F6_IRMA_OS` else '' end) AS `F6_IRMA_OS`,(case when (`grading1_fp`.`F7_MA_OS` = `grading2_fp`.`F7_MA_OS`) then `grading1_fp`.`F7_MA_OS` else '' end) AS `F7_MA_OS`,(case when (`grading1_fp`.`F7_HE_OS` = `grading2_fp`.`F7_HE_OS`) then `grading1_fp`.`F7_HE_OS` else '' end) AS `F7_HE_OS`,(case when (`grading1_fp`.`F7_SE_OS` = `grading2_fp`.`F7_SE_OS`) then `grading1_fp`.`F7_SE_OS` else '' end) AS `F7_SE_OS`,(case when (`grading1_fp`.`F7_VL_OS` = `grading2_fp`.`F7_VL_OS`) then `grading1_fp`.`F7_VL_OS` else '' end) AS `F7_VL_OS`,(case when (`grading1_fp`.`F7_RH_OS` = `grading2_fp`.`F7_RH_OS`) then `grading1_fp`.`F7_RH_OS` else '' end) AS `F7_RH_OS`,(case when (`grading1_fp`.`F7_VB_OS` = `grading2_fp`.`F7_VB_OS`) then `grading1_fp`.`F7_VB_OS` else '' end) AS `F7_VB_OS`,(case when (`grading1_fp`.`F7_IRMA_OS` = `grading2_fp`.`F7_IRMA_OS`) then `grading1_fp`.`F7_IRMA_OS` else '' end) AS `F7_IRMA_OS`,(case when (`grading1_fp`.`os_level` = `grading2_fp`.`os_level`) then `grading1_fp`.`os_level` else '' end) AS `os_level` from ((`grading1_fp` join `grading2_fp`) join `adjudication_fp_g`) where ((`grading1_fp`.`subject_id` = `grading2_fp`.`subject_id`) and (not(`grading1_fp`.`subject_id` in (select `adjudication_fp_g`.`subject_id` from `adjudication_fp_g`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `adjudication_oct`
--
DROP TABLE IF EXISTS `adjudication_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `adjudication_oct`  AS  select `grading1_oct`.`subject_id` AS `subject_id`,`grading1_oct`.`visit_name` AS `visit_name`,`grading1_oct`.`study_site` AS `study_site`,(case when (`grading1_oct`.`images_received` = `grading2_oct`.`images_received`) then `grading1_oct`.`images_received` else '' end) AS `images_received`,(case when (`grading1_oct`.`images_gradable` = `grading2_oct`.`images_gradable`) then `grading1_oct`.`images_gradable` else '' end) AS `images_gradable`,(case when (`grading1_oct`.`etdrs_grid` = `grading2_oct`.`etdrs_grid`) then `grading1_oct`.`etdrs_grid` else '' end) AS `etdrs_grid`,(case when (`grading1_oct`.`imaging_protocol` = `grading2_oct`.`imaging_protocol`) then `grading1_oct`.`imaging_protocol` else '' end) AS `imaging_protocol`,(case when (`grading1_oct`.`no_please_explain` = `grading2_oct`.`no_please_explain`) then `grading1_oct`.`no_please_explain` else '' end) AS `no_please_explain`,(case when (`grading1_oct`.`rpe_ilm` = `grading2_oct`.`rpe_ilm`) then `grading1_oct`.`rpe_ilm` else '' end) AS `rpe_ilm`,(case when (`grading1_oct`.`yes_please_specify` = `grading2_oct`.`yes_please_specify`) then `grading1_oct`.`yes_please_specify` else '' end) AS `yes_please_specify`,`oct_formula`.`Retinal_thickness` AS `Retinal_thickness`,(case when (`grading1_oct`.`total_volume` = `grading2_oct`.`total_volume`) then `grading1_oct`.`total_volume` else '' end) AS `total_volume`,(case when (`oct_formula`.`OD_g1` = `oct_formula`.`OD_g2`) then `oct_formula`.`OD_g1` else '' end) AS `Eligibility_od`,(case when (`grading1_oct`.`etdrs_grid_os` = `grading2_oct`.`etdrs_grid_os`) then `grading1_oct`.`etdrs_grid_os` else '' end) AS `etdrs_grid_os`,(case when (`grading1_oct`.`imaging_protocol_os` = `grading2_oct`.`imaging_protocol_os`) then `grading1_oct`.`imaging_protocol_os` else '' end) AS `imaging_protocol_os`,(case when (`grading1_oct`.`no_please_explain_os` = `grading2_oct`.`no_please_explain_os`) then `grading1_oct`.`no_please_explain_os` else '' end) AS `no_please_explain_os`,(case when (`grading1_oct`.`rpe_ilm_os` = `grading2_oct`.`rpe_ilm_os`) then `grading1_oct`.`rpe_ilm_os` else '' end) AS `rpe_ilm_os`,(case when (`grading1_oct`.`yes_please_specify_os` = `grading2_oct`.`yes_please_specify_os`) then `grading1_oct`.`yes_please_specify_os` else '' end) AS `yes_please_specify_os`,`oct_formula`.`Retinal_thickness_os` AS `Retinal_thickness_os`,(case when (`grading1_oct`.`total_volume_os` = `grading2_oct`.`total_volume_os`) then `grading1_oct`.`total_volume_os` else '' end) AS `total_volume_os`,(case when (`oct_formula`.`OS_g1` = `oct_formula`.`OS_g2`) then `oct_formula`.`OS_g1` else '' end) AS `Eligibility_os` from (((`grading1_oct` join `grading2_oct`) join `oct_formula`) join `adjudication_oct_g`) where ((`grading1_oct`.`subject_id` = `grading2_oct`.`subject_id`) and (`oct_formula`.`subject_id` = `grading1_oct`.`subject_id`) and (`oct_formula`.`subject_id` = `grading2_oct`.`subject_id`) and (not(`grading1_oct`.`subject_id` in (select `adjudication_oct_g`.`subject_id` from `adjudication_oct_g`)))) ;

-- --------------------------------------------------------

--
-- Structure for view `delta`
--
DROP TABLE IF EXISTS `delta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `delta`  AS  select `grading1_oct`.`subject_id` AS `subject_id`,`grading1_oct`.`retinal_thickness` AS `retinal_thickness_g1`,`grading1_oct`.`retinal_thickness_os` AS `retinal_thickness_os_g1`,`grading2_oct`.`retinal_thickness` AS `retinal_thickness_g2`,`grading2_oct`.`retinal_thickness_os` AS `retinal_thickness_os_g2`,(`grading1_oct`.`retinal_thickness` - `grading2_oct`.`retinal_thickness`) AS `delta`,((`grading1_oct`.`retinal_thickness` + `grading2_oct`.`retinal_thickness`) / 2) AS `average`,(`grading1_oct`.`retinal_thickness_os` - `grading2_oct`.`retinal_thickness_os`) AS `delta_os`,((`grading1_oct`.`retinal_thickness_os` + `grading2_oct`.`retinal_thickness_os`) / 2) AS `average_os` from (`grading1_oct` join `grading2_oct`) where (`grading1_oct`.`subject_id` = `grading2_oct`.`subject_id`) ;

-- --------------------------------------------------------

--
-- Structure for view `log_admin_subject`
--
DROP TABLE IF EXISTS `log_admin_subject`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_admin_subject`  AS  select `subject`.`user_id` AS `user_id`,`user`.`username` AS `username`,`subject`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `study_name`,`subject`.`visit_name` AS `visit_name`,`subject`.`insert_date` AS `insert_date`,(case when `subject`.`user_id` in (select `user`.`user_id` from `user`) then 'Subject record log' else 'Subject record log' end) AS `Message` from (`subject` join `user`) where (`subject`.`user_id` = `user`.`user_id`) ;

-- --------------------------------------------------------

--
-- Structure for view `log_fp_adju`
--
DROP TABLE IF EXISTS `log_fp_adju`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_fp_adju`  AS  select distinct `adjudication_fp_g`.`user_id` AS `user_id`,`user`.`username` AS `username`,`adjudication_fp_g`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`subject`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`adjudication_fp_g`.`assign_date` AS `Entry_Date`,(case when (`adjudication_fp_g`.`user_id` = `user`.`user_id`) then 'Adjudicator- subject record in FUNDUS PHOTOGRAPHY ' end) AS `Message` from ((`adjudication_fp_g` join `user`) join `subject`) where ((`adjudication_fp_g`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `adjudication_fp_g`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_fp_g1`
--
DROP TABLE IF EXISTS `log_fp_g1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_fp_g1`  AS  select distinct `grading1_fp`.`user_id` AS `user_id`,`user`.`username` AS `username`,`grading1_fp`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`grading1_fp`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`grading1_fp`.`assign_date` AS `Entry_Date`,(case when (`grading1_fp`.`user_id` = `user`.`user_id`) then 'Grader 1 - subject record in FUNDUS PHOTOGRAPHY ' end) AS `Message` from ((`grading1_fp` join `user`) join `subject`) where ((`grading1_fp`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `grading1_fp`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_fp_g2`
--
DROP TABLE IF EXISTS `log_fp_g2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_fp_g2`  AS  select distinct `grading2_fp`.`user_id` AS `user_id`,`user`.`username` AS `username`,`grading2_fp`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`grading2_fp`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`grading2_fp`.`assign_date` AS `Entry_Date`,(case when (`grading2_fp`.`user_id` = `user`.`user_id`) then 'Grader 2 - subject record in FUNDUS PHOTOGRAPHY ' end) AS `Message` from ((`grading2_fp` join `user`) join `subject`) where ((`grading2_fp`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `grading2_fp`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_fp_qec`
--
DROP TABLE IF EXISTS `log_fp_qec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_fp_qec`  AS  select distinct `qec_fp`.`user_id` AS `user_id`,`user`.`username` AS `username`,`qec_fp`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`qec_fp`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`qec_fp`.`assign_date` AS `Entry_Date`,(case when (`qec_fp`.`user_id` = `user`.`user_id`) then 'QEC - subject record in FUNDUS PHOTOGRAPHY ' end) AS `Message` from ((`qec_fp` join `user`) join `subject`) where ((`qec_fp`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `qec_fp`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_oct_adju`
--
DROP TABLE IF EXISTS `log_oct_adju`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_oct_adju`  AS  select distinct `adjudication_oct_g`.`user_id` AS `user_id`,`user`.`username` AS `username`,`adjudication_oct_g`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`subject`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`adjudication_oct_g`.`insert_date` AS `Entry_Date`,(case when (`adjudication_oct_g`.`user_id` = `user`.`user_id`) then 'Adjudicator- subject record in OCT ' end) AS `Message` from ((`adjudication_oct_g` join `user`) join `subject`) where ((`adjudication_oct_g`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `adjudication_oct_g`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_oct_g1`
--
DROP TABLE IF EXISTS `log_oct_g1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_oct_g1`  AS  select distinct `grading1_oct`.`user_id` AS `user_id`,`user`.`username` AS `username`,`grading1_oct`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`grading1_oct`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`grading1_oct`.`insert_date` AS `Entry_Date`,(case when (`grading1_oct`.`user_id` = `user`.`user_id`) then 'Grader 1 - subject record in OCT ' end) AS `Message` from ((`grading1_oct` join `user`) join `subject`) where ((`grading1_oct`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `grading1_oct`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_oct_g2`
--
DROP TABLE IF EXISTS `log_oct_g2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_oct_g2`  AS  select distinct `grading2_oct`.`user_id` AS `user_id`,`user`.`username` AS `username`,`grading2_oct`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`grading2_oct`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`grading2_oct`.`insert_date` AS `Entry_Date`,(case when (`grading2_oct`.`user_id` = `user`.`user_id`) then 'Grader 2 - subject record in OCT ' end) AS `Message` from ((`grading2_oct` join `user`) join `subject`) where ((`grading2_oct`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `grading2_oct`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `log_oct_qec`
--
DROP TABLE IF EXISTS `log_oct_qec`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_oct_qec`  AS  select distinct `qec_oct`.`user_id` AS `user_id`,`user`.`username` AS `username`,`qec_oct`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `Study_Name`,`qec_oct`.`visit_name` AS `Visit_Name`,`subject`.`visit_date` AS `Assign_Visit_Date`,`qec_oct`.`insert_date` AS `Entry_Date`,(case when (`qec_oct`.`user_id` = `user`.`user_id`) then 'QEC - subject record in OCT' end) AS `Message` from ((`qec_oct` join `user`) join `subject`) where ((`qec_oct`.`user_id` = `user`.`user_id`) and (`subject`.`subject_id` = `qec_oct`.`subject_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `oct_formula`
--
DROP TABLE IF EXISTS `oct_formula`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oct_formula`  AS  select `delta`.`subject_id` AS `subject_id`,(case when (`delta`.`delta` = 15) then `delta`.`average` when ((`delta`.`delta` > 15) and (`delta`.`delta` < 30)) then NULL when (`delta`.`delta` > 30) then 'ask the graders to discuss and recheck their values' when (`delta`.`delta` = 0.5) then `delta`.`average` when (`delta`.`delta` < 0.5) then `delta`.`average` when ((`delta`.`delta` > 0.5) and (`delta`.`delta` < 0.9)) then NULL when (`delta`.`delta` > 1) then 'ask the graders to discuss and recheck their values' else '' end) AS `Retinal_thickness`,(case when (`delta`.`delta_os` = 15) then `delta`.`average_os` when ((`delta`.`delta_os` > 15) and (`delta`.`delta_os` < 30)) then NULL when (`delta`.`delta_os` > 30) then 'ask the graders to discuss and recheck their values' when (`delta`.`delta_os` = 0.5) then `delta`.`average_os` when (`delta`.`delta_os` < 0.5) then `delta`.`average_os` when ((`delta`.`delta_os` > 0.5) and (`delta`.`delta_os` < 0.9)) then NULL when (`delta`.`delta_os` > 1) then 'ask the graders to discuss and recheck their values' else '' end) AS `Retinal_thickness_os`,(case when ((`delta`.`retinal_thickness_g1` = 320) and (`delta`.`retinal_thickness_g1` > 320)) then 'Eligible' when (`delta`.`retinal_thickness_g1` < 305) then 'Not eligible' when ((`delta`.`retinal_thickness_g1` = 305) and (`delta`.`retinal_thickness_g1` > 305) and (`delta`.`retinal_thickness_g1` = 320) and (`delta`.`retinal_thickness_g1` < 320)) then 'eligible only if subject is female' else '' end) AS `OD_g1`,(case when ((`delta`.`retinal_thickness_os_g1` = 320) and (`delta`.`retinal_thickness_os_g1` > 320)) then 'Eligible' when (`delta`.`retinal_thickness_os_g1` < 305) then 'Not eligible' when ((`delta`.`retinal_thickness_os_g1` = 305) and (`delta`.`retinal_thickness_os_g1` > 305) and (`delta`.`retinal_thickness_os_g1` = 320) and (`delta`.`retinal_thickness_os_g1` < 320)) then 'eligible only if subject is female' else '' end) AS `OS_g1`,(case when ((`delta`.`retinal_thickness_g2` = 320) and (`delta`.`retinal_thickness_g2` > 320)) then 'Eligible' when (`delta`.`retinal_thickness_g2` < 305) then 'Not eligible' when ((`delta`.`retinal_thickness_g2` = 305) and (`delta`.`retinal_thickness_g2` > 305) and (`delta`.`retinal_thickness_g2` = 320) and (`delta`.`retinal_thickness_g2` < 320)) then 'eligible only if subject is female' else '' end) AS `OD_g2`,(case when ((`delta`.`retinal_thickness_os_g2` = 320) and (`delta`.`retinal_thickness_os_g2` > 320)) then 'Eligible' when (`delta`.`retinal_thickness_os_g2` < 305) then 'Not eligible' when ((`delta`.`retinal_thickness_os_g2` = 305) and (`delta`.`retinal_thickness_os_g2` > 305) and (`delta`.`retinal_thickness_os_g2` = 320) and (`delta`.`retinal_thickness_os_g2` < 320)) then 'eligible only if subject is female' else '' end) AS `OS_g2` from `delta` ;

-- --------------------------------------------------------

--
-- Structure for view `oct_fp_sum`
--
DROP TABLE IF EXISTS `oct_fp_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oct_fp_sum`  AS  select `sum_all`.`message` AS `message`,`sum_all`.`total` AS `fp_total`,`sum_all_oct`.`total` AS `oct_total` from (`sum_all` join `sum_all_oct`) where (`sum_all`.`message` = `sum_all_oct`.`message`) ;

-- --------------------------------------------------------

--
-- Structure for view `oct_view_g1`
--
DROP TABLE IF EXISTS `oct_view_g1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oct_view_g1`  AS  select `grading1_oct`.`subject_id` AS `subject_id`,`grading1_oct`.`user_id` AS `user_id`,`grading1_oct`.`visit_name` AS `visit_name`,`grading1_oct`.`images_received` AS `images_received`,`grading1_oct`.`images_gradable` AS `images_gradable`,`grading1_oct`.`etdrs_grid` AS `etdrs_grid`,`grading1_oct`.`imaging_protocol` AS `imaging_protocol`,`grading1_oct`.`no_please_explain` AS `no_please_explain`,`grading1_oct`.`rpe_ilm` AS `rpe_ilm`,`grading1_oct`.`yes_please_specify` AS `yes_please_specify`,`grading1_oct`.`yes_please_specify_os` AS `yes_please_specify_os`,`grading1_oct`.`retinal_thickness` AS `retinal_thickness`,`grading1_oct`.`total_volume` AS `total_volume`,(case when ((`grading1_oct`.`retinal_thickness` = 320) or (`grading1_oct`.`retinal_thickness` > 320)) then 'Eligible' when (`grading1_oct`.`retinal_thickness` < 305) then 'Not eligible' when ((`grading1_oct`.`retinal_thickness` = 305) or (`grading1_oct`.`retinal_thickness` > 305) or (`grading1_oct`.`retinal_thickness` = 320) or (`grading1_oct`.`retinal_thickness` < 320)) then 'eligible only if subject is female' else '' end) AS `OD_eligibilty`,`grading1_oct`.`images_gradable_os` AS `images_gradable_os`,`grading1_oct`.`etdrs_grid_os` AS `etdrs_grid_os`,`grading1_oct`.`imaging_protocol_os` AS `imaging_protocol_os`,`grading1_oct`.`no_please_explain_os` AS `no_please_explain_os`,`grading1_oct`.`rpe_ilm_os` AS `rpe_ilm_os`,`grading1_oct`.`retinal_thickness_os` AS `retinal_thickness_os`,`grading1_oct`.`total_volume_os` AS `total_volume_os`,(case when ((`grading1_oct`.`retinal_thickness_os` = 320) or (`grading1_oct`.`retinal_thickness_os` > 320)) then 'Eligible' when (`grading1_oct`.`retinal_thickness_os` < 305) then 'Not eligible' when ((`grading1_oct`.`retinal_thickness_os` = 305) or (`grading1_oct`.`retinal_thickness_os` > 305) or (`grading1_oct`.`retinal_thickness_os` = 320) or (`grading1_oct`.`retinal_thickness_os` < 320)) then 'eligible only if subject is female' else '' end) AS `OS_eligibilty`,`grading1_oct`.`insert_date` AS `insert_date` from `grading1_oct` ;

-- --------------------------------------------------------

--
-- Structure for view `oct_view_g2`
--
DROP TABLE IF EXISTS `oct_view_g2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oct_view_g2`  AS  select `grading2_oct`.`subject_id` AS `subject_id`,`grading2_oct`.`user_id` AS `user_id`,`grading2_oct`.`visit_name` AS `visit_name`,`grading2_oct`.`images_received` AS `images_received`,`grading2_oct`.`images_gradable` AS `images_gradable`,`grading2_oct`.`etdrs_grid` AS `etdrs_grid`,`grading2_oct`.`imaging_protocol` AS `imaging_protocol`,`grading2_oct`.`no_please_explain` AS `no_please_explain`,`grading2_oct`.`rpe_ilm` AS `rpe_ilm`,`grading2_oct`.`yes_please_specify` AS `yes_please_specify`,`grading2_oct`.`yes_please_specify_os` AS `yes_please_specify_os`,`grading2_oct`.`retinal_thickness` AS `retinal_thickness`,`grading2_oct`.`total_volume` AS `total_volume`,(case when ((`grading2_oct`.`retinal_thickness` = 320) or (`grading2_oct`.`retinal_thickness` > 320)) then 'Eligible' when (`grading2_oct`.`retinal_thickness` < 305) then 'Not eligible' when ((`grading2_oct`.`retinal_thickness` = 305) or (`grading2_oct`.`retinal_thickness` > 305) or (`grading2_oct`.`retinal_thickness` = 320) or (`grading2_oct`.`retinal_thickness` < 320)) then 'eligible only if subject is female' else '' end) AS `OD_eligibilty`,`grading2_oct`.`images_gradable_os` AS `images_gradable_os`,`grading2_oct`.`etdrs_grid_os` AS `etdrs_grid_os`,`grading2_oct`.`imaging_protocol_os` AS `imaging_protocol_os`,`grading2_oct`.`no_please_explain_os` AS `no_please_explain_os`,`grading2_oct`.`rpe_ilm_os` AS `rpe_ilm_os`,`grading2_oct`.`retinal_thickness_os` AS `retinal_thickness_os`,`grading2_oct`.`total_volume_os` AS `total_volume_os`,(case when ((`grading2_oct`.`retinal_thickness_os` = 320) or (`grading2_oct`.`retinal_thickness_os` > 320)) then 'Eligible' when (`grading2_oct`.`retinal_thickness_os` < 305) then 'Not eligible' when ((`grading2_oct`.`retinal_thickness_os` = 305) or (`grading2_oct`.`retinal_thickness_os` > 305) or (`grading2_oct`.`retinal_thickness_os` = 320) or (`grading2_oct`.`retinal_thickness_os` < 320)) then 'eligible only if subject is female' else '' end) AS `OS_eligibilty`,`grading2_oct`.`insert_date` AS `insert_date` from `grading2_oct` ;

-- --------------------------------------------------------

--
-- Structure for view `sum_all`
--
DROP TABLE IF EXISTS `sum_all`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_all`  AS  select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Subject Enrolled' else 'Subject Enrolled' end) AS `message` from `subject` union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Intialed' else 'Intialed' end) AS `message` from `subject` where ((not(`subject`.`subject_id` in (select `grading1_fp`.`subject_id` from `grading1_fp`))) and (not(`subject`.`subject_id` in (select `grading2_fp`.`subject_id` from `grading2_fp`)))) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Completed' else 'Completed' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `grading1_fp`.`subject_id` from `grading1_fp`) and `subject`.`subject_id` in (select `grading2_fp`.`subject_id` from `grading2_fp`)) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Adjudications Triggered' else 'Adjudications Triggered' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `grading1_fp`.`subject_id` from `grading1_fp`) and `subject`.`subject_id` in (select `grading2_fp`.`subject_id` from `grading2_fp`) and (not(`subject`.`subject_id` in (select `adjudication_fp_g`.`subject_id` from `adjudication_fp_g`)))) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Adjudications Resolved' else 'Adjudications Resolved' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `grading1_fp`.`subject_id` from `grading1_fp`) and `subject`.`subject_id` in (select `grading2_fp`.`subject_id` from `grading2_fp`) and `subject`.`subject_id` in (select `adjudication_fp_g`.`subject_id` from `adjudication_fp_g`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sum_all_oct`
--
DROP TABLE IF EXISTS `sum_all_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_all_oct`  AS  select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Subject Enrolled' else 'Subject Enrolled' end) AS `message` from `subject` union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Intialed' else 'Intialed' end) AS `message` from `subject` where ((not(`subject`.`subject_id` in (select `grading1_oct`.`subject_id` from `grading1_oct`))) and (not(`subject`.`subject_id` in (select `grading2_oct`.`subject_id` from `grading2_oct`)))) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Completed' else 'Completed' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `grading1_oct`.`subject_id` from `grading1_oct`) and `subject`.`subject_id` in (select `grading2_oct`.`subject_id` from `grading2_oct`)) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Adjudications Triggered' else 'Adjudications Triggered' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `grading1_oct`.`subject_id` from `grading1_oct`) and `subject`.`subject_id` in (select `grading2_oct`.`subject_id` from `grading2_oct`) and (not(`subject`.`subject_id` in (select `adjudication_oct_g`.`subject_id` from `adjudication_oct_g`)))) union all select count(`subject`.`subject_id`) AS `total`,(case when `subject`.`subject_id` in (select `subject`.`subject_id` from `subject`) then 'Adjudications Resolved' else 'Adjudications Resolved' end) AS `message` from `subject` where `subject`.`subject_id` in (select `grading1_oct`.`subject_id` from `grading1_oct`) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_g1`
--
DROP TABLE IF EXISTS `user_id_subject_g1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_g1`  AS  select distinct `qec_fp`.`subject_id` AS `subject_id`,`qec_fp`.`study_site` AS `study_site`,`qec_fp`.`visit_name` AS `visit_name` from ((`qec_fp` join `grading1_fp`) join `user`) where ((not(`qec_fp`.`subject_id` in (select `grading1_fp`.`subject_id` from `grading1_fp` where ((`qec_fp`.`subject_id` = `grading1_fp`.`subject_id`) and (`qec_fp`.`visit_name` = `grading1_fp`.`visit_name`))))) and (not(`qec_fp`.`visit_name` in (select `grading1_fp`.`visit_name` from `grading1_fp` where ((`qec_fp`.`subject_id` = `grading1_fp`.`subject_id`) and (`qec_fp`.`visit_name` = `grading1_fp`.`visit_name`))))) and (`user`.`user_id` = `grading1_fp`.`user_id`) and (`user`.`type` = 'Grader1')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_g1_oct`
--
DROP TABLE IF EXISTS `user_id_subject_g1_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_g1_oct`  AS  select distinct `qec_oct`.`subject_id` AS `subject_id`,`qec_oct`.`study_site` AS `study_site`,`qec_oct`.`visit_name` AS `visit_name` from ((`qec_oct` join `grading1_oct`) join `user`) where ((not(`qec_oct`.`subject_id` in (select `grading1_oct`.`subject_id` from `grading1_oct` where ((`qec_oct`.`subject_id` = `grading1_oct`.`subject_id`) and (`qec_oct`.`visit_name` = `grading1_oct`.`visit_name`))))) and (not(`qec_oct`.`visit_name` in (select `grading1_oct`.`visit_name` from `grading1_oct` where ((`qec_oct`.`subject_id` = `grading1_oct`.`subject_id`) and (`qec_oct`.`visit_name` = `grading1_oct`.`visit_name`))))) and (`user`.`user_id` = `grading1_oct`.`user_id`) and (`user`.`type` = 'Grader1')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_g2`
--
DROP TABLE IF EXISTS `user_id_subject_g2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_g2`  AS  select distinct `qec_fp`.`subject_id` AS `subject_id`,`qec_fp`.`study_site` AS `study_site`,`qec_fp`.`visit_name` AS `visit_name` from ((`qec_fp` join `grading2_fp`) join `user`) where ((not(`qec_fp`.`subject_id` in (select `grading2_fp`.`subject_id` from `grading2_fp` where ((`qec_fp`.`subject_id` = `grading2_fp`.`subject_id`) and (`qec_fp`.`visit_name` = `grading2_fp`.`visit_name`))))) and (not(`qec_fp`.`visit_name` in (select `grading2_fp`.`visit_name` from `grading2_fp` where ((`qec_fp`.`subject_id` = `grading2_fp`.`subject_id`) and (`qec_fp`.`visit_name` = `grading2_fp`.`visit_name`))))) and (`user`.`user_id` = `grading2_fp`.`user_id`) and (`user`.`type` = 'Grader2')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_g2_oct`
--
DROP TABLE IF EXISTS `user_id_subject_g2_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_g2_oct`  AS  select distinct `qec_oct`.`subject_id` AS `subject_id`,`qec_oct`.`study_site` AS `study_site`,`qec_oct`.`visit_name` AS `visit_name` from ((`qec_oct` join `grading2_oct`) join `user`) where ((not(`qec_oct`.`subject_id` in (select `grading2_oct`.`subject_id` from `grading2_oct` where ((`qec_oct`.`subject_id` = `grading2_oct`.`subject_id`) and (`qec_oct`.`visit_name` = `grading2_oct`.`visit_name`))))) and (not(`qec_oct`.`visit_name` in (select `grading2_oct`.`visit_name` from `grading2_oct` where ((`qec_oct`.`subject_id` = `grading2_oct`.`subject_id`) and (`qec_oct`.`visit_name` = `grading2_oct`.`visit_name`))))) and (`user`.`user_id` = `grading2_oct`.`user_id`) and (`user`.`type` = 'Grader2')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_qec_fp`
--
DROP TABLE IF EXISTS `user_id_subject_qec_fp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_qec_fp`  AS  select distinct `subject`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `study_name`,`subject`.`visit_name` AS `visit_name` from ((`subject` join `qec_fp`) join `user`) where ((not(`subject`.`subject_id` in (select `qec_fp`.`subject_id` from `qec_fp` where ((`subject`.`subject_id` = `qec_fp`.`subject_id`) and (`subject`.`visit_name` = `qec_fp`.`visit_name`))))) and (not(`subject`.`visit_name` in (select `qec_fp`.`visit_name` from `qec_fp` where ((`subject`.`subject_id` = `qec_fp`.`subject_id`) and (`subject`.`visit_name` = `qec_fp`.`visit_name`))))) and (`user`.`user_id` = `qec_fp`.`user_id`) and (`user`.`type` = 'QEC')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_id_subject_qec_oct`
--
DROP TABLE IF EXISTS `user_id_subject_qec_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_id_subject_qec_oct`  AS  select distinct `subject`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `study_name`,`subject`.`visit_name` AS `visit_name` from ((`subject` join `qec_oct`) join `user`) where ((not(`subject`.`subject_id` in (select `qec_oct`.`subject_id` from `qec_oct` where ((`subject`.`subject_id` = `qec_oct`.`subject_id`) and (`subject`.`visit_name` = `qec_oct`.`visit_name`))))) and (not(`subject`.`visit_name` in (select `qec_oct`.`visit_name` from `qec_oct` where ((`subject`.`subject_id` = `qec_oct`.`subject_id`) and (`subject`.`visit_name` = `qec_oct`.`visit_name`))))) and (`user`.`user_id` = `qec_oct`.`user_id`) and (`user`.`type` = 'QEC')) ;

-- --------------------------------------------------------

--
-- Structure for view `user_view_sub_adju_fp`
--
DROP TABLE IF EXISTS `user_view_sub_adju_fp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view_sub_adju_fp`  AS  select `subject`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `study_name`,`subject`.`visit_name` AS `visit_name`,(case when `subject`.`subject_id` in (select `adjudication_fp`.`subject_id` from `adjudication_fp` where ((`subject`.`subject_id` = `adjudication_fp`.`subject_id`) and (`subject`.`visit_name` = `adjudication_fp`.`visit_name`))) then 'Data entry completed in Grader1 & Grader2 form (Adjudications Triggered):' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `adjudication_fp`.`subject_id` from `adjudication_fp` where ((`subject`.`subject_id` = `adjudication_fp`.`subject_id`) and (`subject`.`visit_name` = `adjudication_fp`.`visit_name`))) and (not(`subject`.`subject_id` in (select `adjudication_fp_g`.`subject_id` from `adjudication_fp_g` where ((`subject`.`subject_id` = `adjudication_fp_g`.`subject_id`) and (`subject`.`visit_name` = `adjudication_fp_g`.`visit_name`)))))) ;

-- --------------------------------------------------------

--
-- Structure for view `user_view_sub_adju_oct`
--
DROP TABLE IF EXISTS `user_view_sub_adju_oct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view_sub_adju_oct`  AS  select `subject`.`subject_id` AS `subject_id`,`subject`.`study_name` AS `study_name`,`subject`.`visit_name` AS `visit_name`,(case when `subject`.`subject_id` in (select `adjudication_oct`.`subject_id` from `adjudication_oct` where ((`subject`.`subject_id` = `adjudication_oct`.`subject_id`) and (`subject`.`visit_name` = `adjudication_oct`.`visit_name`))) then 'Data entry completed in Grader1 & Grader2 form (Adjudications Triggered):' end) AS `message` from `subject` where (`subject`.`subject_id` in (select `adjudication_oct`.`subject_id` from `adjudication_oct` where ((`subject`.`subject_id` = `adjudication_oct`.`subject_id`) and (`subject`.`visit_name` = `adjudication_oct`.`visit_name`))) and (not(`subject`.`subject_id` in (select `adjudication_oct_g`.`subject_id` from `adjudication_oct_g` where ((`subject`.`subject_id` = `adjudication_oct_g`.`subject_id`) and (`subject`.`visit_name` = `adjudication_oct_g`.`visit_name`)))))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjudication_fp_g`
--
ALTER TABLE `adjudication_fp_g`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`,`user_id`),
  ADD KEY `id_fk5` (`user_id`);

--
-- Indexes for table `adjudication_oct_g`
--
ALTER TABLE `adjudication_oct_g`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `subject_id_2` (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grading1_fp`
--
ALTER TABLE `grading1_fp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grading1_oct`
--
ALTER TABLE `grading1_oct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_grading1_oct` (`subject_id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grading2_fp`
--
ALTER TABLE `grading2_fp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`user_id`),
  ADD KEY `fk_id` (`user_id`),
  ADD KEY `subject_id_2` (`subject_id`);

--
-- Indexes for table `grading2_oct`
--
ALTER TABLE `grading2_oct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`,`user_id`),
  ADD KEY `fkid` (`user_id`);

--
-- Indexes for table `qec_fp`
--
ALTER TABLE `qec_fp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`,`user_id`),
  ADD KEY `id_fk01` (`user_id`),
  ADD KEY `subject_id_2` (`subject_id`,`user_id`);

--
-- Indexes for table `qec_oct`
--
ALTER TABLE `qec_oct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`,`user_id`),
  ADD KEY `id` (`user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `grading1_fp`
--
ALTER TABLE `grading1_fp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `grading1_oct`
--
ALTER TABLE `grading1_oct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `grading2_fp`
--
ALTER TABLE `grading2_fp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `grading2_oct`
--
ALTER TABLE `grading2_oct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `qec_fp`
--
ALTER TABLE `qec_fp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `qec_oct`
--
ALTER TABLE `qec_oct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adjudication_fp_g`
--
ALTER TABLE `adjudication_fp_g`
  ADD CONSTRAINT `fk_sub12` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `id_fk5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `adjudication_oct_g`
--
ALTER TABLE `adjudication_oct_g`
  ADD CONSTRAINT `fk09` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD CONSTRAINT `fk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `fk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `grading1_fp`
--
ALTER TABLE `grading1_fp`
  ADD CONSTRAINT `fk_grade1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `fk_grade2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `grading1_oct`
--
ALTER TABLE `grading1_oct`
  ADD CONSTRAINT `fk_grading1_oct` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `grading2_fp`
--
ALTER TABLE `grading2_fp`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `subject1d` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `grading2_oct`
--
ALTER TABLE `grading2_oct`
  ADD CONSTRAINT `fkid` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `fksub` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `qec_fp`
--
ALTER TABLE `qec_fp`
  ADD CONSTRAINT `id_fk01` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `sub_fk` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `qec_oct`
--
ALTER TABLE `qec_oct`
  ADD CONSTRAINT `id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `sub` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `FK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
