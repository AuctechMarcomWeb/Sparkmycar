-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2025 at 12:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkmycar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_inactive_user`
--

CREATE TABLE `add_inactive_user` (
  `s_no` int(11) NOT NULL,
  `inactive_user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `game_wallet` varchar(255) DEFAULT NULL,
  `task_wallet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `suggestion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpire` date DEFAULT NULL,
  `task_wallet` int(100) DEFAULT 0,
  `game_wallet` int(100) DEFAULT 0,
  `BANK_NAME` varchar(100) NOT NULL,
  `IFSC_CODE` varchar(100) NOT NULL,
  `ACC_HOLDER_NM` varchar(100) NOT NULL,
  `ACC_NUMBERS` int(100) NOT NULL,
  `ACC_TYPE` varchar(100) NOT NULL,
  `LAST_LOGIN` varchar(100) NOT NULL,
  `ACC_STATUS` varchar(100) NOT NULL DEFAULT 'active',
  `TYPE` varchar(50) NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `suggestion`, `mobile_no`, `password`, `confirm_password`, `resettoken`, `resettokenexpire`, `task_wallet`, `game_wallet`, `BANK_NAME`, `IFSC_CODE`, `ACC_HOLDER_NM`, `ACC_NUMBERS`, `ACC_TYPE`, `LAST_LOGIN`, `ACC_STATUS`, `TYPE`) VALUES
(2, '786', 'Zaid', 'Rizvi', 'zaid', 'admin@gmail.com', 'test', '', '9335438189', 'Auctech@321', 'Auctech@321', NULL, NULL, 0, 999, '', '', '', 0, '', '', 'active', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(5, 'img_687b69fbaab5c7.04502446.jpg'),
(6, 'img_687b6769aa95b7.66806803.jpg'),
(8, 'img_687b6a7f711669.04929320.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prd_url` varchar(255) NOT NULL,
  `prd_heading` varchar(255) NOT NULL,
  `prd_type` varchar(255) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_capacity` varchar(255) DEFAULT NULL,
  `prf_info` text DEFAULT NULL,
  `prd_advntage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prd_url`, `prd_heading`, `prd_type`, `prd_desc`, `prd_capacity`, `prf_info`, `prd_advntage`, `created_at`) VALUES
(90, 'Stainless-Steel-Glass-Railing', 'Stainless Steel Glass Railing', 'RAILING', 'The SS Glass Railing system consists of stainless steel posts, glass infills, and handrails. The system is designed to provide a sleek, modern, and safe barrier solution for stairs, balconies, and floor edges.', 'Production Capacity: 50', '', '<h6>Specification: SS Glass Railing</h6><h6>Material:</h6><p>- Stainless Steel (SS) - Grade 304 or 316</p><p>- Glass - Toughened, Tempered, or Laminated</p><h6>Description:</h6><p>The SS Glass Railing system consists of stainless steel posts, glass infills, and handrails. The system is designed to provide a sleek, modern, and safe barrier solution for stairs, balconies, and floor edges.</p><h6>Components:</h6><p>- SS Posts: Made from SS 304 or 316, with a brushed or polished finish</p><p>- Glass Infills: Toughened, tempered, or laminated glass, with a minimum thickness of 12mm</p><p>- Handrails: Made from SS 304 or 316, with a brushed or polished finish</p><p>- Fixings: SS screws, bolts, and nuts for secure assembly</p><h6>Dimensions:</h6><p>- Post spacing: Maximum 1 meters</p><p>- Glass infill size: As per design requirements</p><p>- Handrail height: 900mm to 1100mm above the floor level</p><h6>Finishing:</h6><p>- SS components: Brushed or polished finish</p><p>- Glass components: Polished or ground edges</p><h6>Safety Features:</h6><p>- Compliance with building codes and regulations</p><p>- Robust design for maximum safety</p><p>- Secure fixing system to prevent glass displacement</p>', '2024-10-29 10:29:21'),
(93, '-Stainless-Steel-Pipe-Railing', ' Stainless Steel Pipe Railing', 'RAILING', 'Stainless Steel Pipe Railing offers a sleek, modern look combined with durability and strength, making it a popular choice for residential, commercial, and industrial spaces. Typically crafted from high-quality stainless steel, these railings are known for their resistance to corrosion, rust, and weathering, making them ideal for both indoor and outdoor use. They are easy to maintain, requiring only occasional cleaning to maintain their shine and resist tarnishing.', 'Production Capacity: 50', '', '<h6>Specification: SS Pipe Railing</h6><h6>Material:</h6><p>- Pipe: Stainless Steel (SS) 304 or 316 grade</p><p>- Fittings: SS 304 or 316 grade</p><p>- Flanges: SS 304 or 316 grade</p><h6>Dimensions:</h6><p>- Pipe Outer Diameter: 38mm, 42mm, 48mm, 50mm, or as per customer requirement</p><p>- Pipe Thickness: 1.2mm, 1.5mm, 2mm, or as per customer requirement</p><p>- Railing Height: 900mm, 1000mm, 1100mm, or as per customer requirement</p><p>- Baluster Spacing: 150, 300mm, or as per customer requirement</p><h6>Surface Finish:</h6><p>- Polished or Brushed.</p><h6>Fittings:</h6><p>- Elbows: 90 degrees, 45 degrees, or as per customer requirement</p><p>- Flanges: Slip-on, socket weld, or as per customer requirement</p><h6>Assembly:</h6><p>- Pipe and fittings to be assembled using SS screws, nuts, and washers</p><p>- Welding to be done using TIG or MIG process</p><h6>Testing:</h6><p>- Load testing to ensure railing can withstand a load of 1.5 times the designed load</p><p>- Inspection for any defects or damage</p>', '2024-10-29 11:13:38'),
(94, 'Aluminium-Glass-Railing-Powder-Coated', 'Aluminium Glass Railing Powder Coated', 'RAILING', 'The Aluminium Glass Railing system consists of aluminium posts or U channels, glass infills, and handrails. The system is designed to provide a sleek, modern, and safe barrier solution for stairs, balconies, and floor edges.', 'Production Capacity: 50', '', '<h6>Specification: Aluminium Glass Railing</h6><h6>Material:</h6><p>- Aluminium: 6063-T5 alloy</p><p>- Glass: Toughened, tempered, or laminated</p><h6>Description:</h6><p>The Aluminium Glass Railing system consists of aluminium posts or U channels, glass infills, and handrails. The system is designed to provide a sleek, modern, and safe barrier solution for stairs, balconies, and floor edges.</p><h6>Components:</h6><p>- Aluminium Posts or u channels: Made from 6063-T5 alloy, with a powder-coated finish</p><p>- Glass Infills: Toughened, tempered, or laminated glass, with a minimum thickness of 12mm</p><p>- Handrails: Made from aluminium or stainless steel, with a powder-coated or polished finish</p><p>- Fixings: G.I. or Stainless steel screws, bolts, and nuts for secure assembly</p><h6>Dimensions:</h6><p>- Post or Screws spacing: Maximum 18 inches.</p><p>- Glass infill size: As per design requirements</p><p>- Handrail height: 900mm to 1100mm above the floor level</p><h6>Finishing:</h6><p>- Aluminium components: Powder-coated (wooden or anodized finish)</p><p>- Glass components: Polished or ground edges</p><h6>Safety Features:</h6><p>- Compliance with building codes and regulations</p><p>- Robust design for maximum safety</p><p>- Secure fixing system to prevent glass displacement</p><h6>Additional Features:</h6><p>- Optional: LED lighting integration for enhanced visual appeal</p><p>- Optional: Powder coating or anodizing in various colors</p>', '2024-10-29 11:16:37'),
(95, 'PVD-Coated-Stainless-Steel-Glass-Railing', 'PVD Coated Stainless Steel Glass Railing', 'RAILING', 'PVD Coated Stainless Steel Glass Railings combine the strength and elegance of stainless steel with a high-quality, decorative finish achieved through Physical Vapor Deposition (PVD) coating. ', 'Production Capacity: 50', '', '<h6>Specification: PVD Coated Stainless Steel Glass Railing</h6><h6>Material:</h6><p>- Pipe: Stainless Steel (SS) 304 grade</p><p>- Fittings: SS 304 grade</p><p>- Glass: Toughened glass, 12mm thickness</p><p>- Coating: PVD (Physical Vapor Deposition) coating in various colors (e.g. gold, rose gold, black).</p><h6>Dimensions:</h6><p>- Pipe Outer Diameter: 40 x 40mm, 50mm, or as per customer requirement</p><p>- Pipe Thickness: 1.5mm</p><p>- Railing Height: 900mm, 1000mm, 1100mm, or as per customer requirement</p><p>- Baluster Spacing: 300mm</p><p>- Glass Size: As per customer requirement</p><h6>Surface Finish:</h6><p>- PVD Coating: Matte or high-gloss finish</p><h6>Glass Specifications:</h6><p>- Type: Toughened glass</p><p>- Thickness: 12mm or 13.5mm</p><p>- Color: Clear, tinted, or frosted</p><p>- Finish: Polished edges, chamfered edges, or as per customer requirement</p><h6>Assembly:</h6><p>- SS pipes and fittings to be assembled using SS screws, nuts, and washers</p><p>- Glass to be attached using SS glass clamps or adhesive</p><h6>Packaging:</h6><p>- Railing assembly to be packed in a protective covering to prevent damage during transportation.</p>', '2024-10-29 11:25:33'),
(96, 'Stainless-Steel-Bus-Shelter', 'Stainless Steel Bus Shelter', 'URBAN-STREET-FURNITURE', 'Stainless Steel Bus Shelters are a durable and modern solution for providing protection and comfort to passengers waiting for public transportation. Made from high-quality stainless steel, these shelters offer a sleek and corrosion-resistant design.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Frame: Stainless Steel (Grade 304 or 316)</p><p>- Roof and Walls: Stainless Steel (Grade 304 or 316) or Glass</p><p>- Seating: Stainless Steel or Recycled Plastic</p><p>- Flooring: Stainless Steel or Concrete</p><h6>Dimensional Specifications:</h6><p>- Standard Size: 3m x 2m x 2.5m (L x W x H)</p><p>- Custom sizes available</p>', '2024-10-29 11:55:32'),
(97, '-Wall-&-Floor-Mounted-SS-Trolley-Fender', ' Wall & Floor Mounted SS Trolley Fender', 'URBAN-STREET-FURNITURE', 'Wall & Floor Mounted Stainless Steel Trolley Fender is a durable and corrosion-resistant solution for protecting walls and floors from damage caused by trolleys, carts, and other equipment. Made from high-quality stainless steel, this fender provides a sleek and modern design.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Thickness: 1.5mm to 3mm</p><p>- Finish: Brushed or Glossy Polished</p><h6>Dimensional Specifications:</h6><p>- Custom sizes available</p><h6>Features:</h6><p>- Wall &amp; Floor mounted design for maximum protection</p><p>- Easy to clean and maintain</p><p>- Suitable for indoor and outdoor use</p><p>- Customizable to fit specific requirements</p>', '2024-10-29 12:00:58'),
(98, 'Stainless-Steel-Bollards', 'Stainless Steel Bollards', 'URBAN-STREET-FURNITURE', 'Stainless Steel Bollards are a durable and corrosion-resistant solution for providing safety, security, and protection in various applications. Made from high-quality stainless steel, these bollards offer a sleek and modern design.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Thickness: 2mm to 5mm</p><p>- Finish: Brushed or Mirror Polished</p><h6>Dimensional Specifications:</h6><p>- Height: 500mm to 1500mm (standard)</p><p>- Diameter: 50mm to 150mm (standard)</p><p>- Custom sizes available</p><h6>Applications:</h6><p>- Safety and security barriers</p><p>- Traffic control and management</p><p>- Property protection</p><p>- Architectural features</p>', '2024-10-29 12:03:54'),
(99, 'Stainless-Steel-Chamber-Plates', 'Stainless Steel Chamber Plates', 'URBAN-STREET-FURNITURE', 'Stainless Steel Chamber Plates are high-quality, corrosion-resistant plates designed for use in various industrial applications. Made from durable stainless steel, these plates offer excellent resistance to corrosion, erosion, and high temperatures.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Thickness: 3mm to 12mm (standard)</p><p>- Size: Customizable to fit specific requirements</p><h6>Features:</h6><p>- High-strength and durable</p><p>- Excellent corrosion resistance</p><p>- Easy to clean and maintain</p><p>- Customizable to fit specific requirements</p>', '2024-10-29 12:07:20'),
(100, 'Front-Building-CNC-Elevation-or-Partition', 'Front Building CNC Elevation or Partition', 'CNC-LASER-CUTTING-DESIGN', 'CNC Front Building Elevation or Partition Panels provide a modern and customizable facade or interior feature that enhances the architectural appeal of buildings. Made using precision CNC (Computer Numerical Control) cutting technology.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Stainless Steel (Grade 304 or 316) or Mild Steel (ISI Marked)</p><p>- Thickness: Upto 16mm CNC Laser cutting in SS ,&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Upto 25mm CNC Laser cutting in MS</p><p>- Finish: Brushed or Mirror Polished in SS,</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PU Paint or Hot dipped Galvanised in MS</p><h6>Dimensional Specifications:</h6><p>- Custom sizes available</p>', '2024-10-29 12:12:48'),
(101, 'Stainless-Steel-Column-Cladding', 'Stainless Steel Column Cladding', 'CNC-LASER-CUTTING-DESIGN', 'Stainless Steel Column Cladding is a modern architectural solution that enhances the appearance and durability of structural columns in various settings, including commercial, residential, and public spaces.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Thickness: 1.5mm</p><p>- Finish: Brushed or Mirror Polished</p>', '2024-10-29 12:27:06'),
(102, 'Stainless-Steel-Mild-Steel-Pergola-or-Cantilever', 'Stainless Steel/Mild Steel Pergola or Cantilever', 'CNC-LASER-CUTTING-DESIGN', 'Stainless Steel/Mild Steel Pergola or Cantilever structures are modern and stylish architectural elements designed to add both function and aesthetic appeal to outdoor spaces. These structures are ideal for creating shaded areas in gardens, patios, terraces, and even commercial outdoor settings.', 'Production Capacity: 50', '', '<h6>Material Specifications:</h6><p>- Material: Mild Steel (ISI Marked)</p><p>- Thickness: 1.5mm to 4mm</p><p>- Finish: PU Paint</p><p>*HPL Sheets, Glass or Polycarbonate sheets (as per requirement).</p>', '2024-10-29 12:30:21'),
(103, 'TRADING-OF-RAW-MATERIAL', 'TRADING OF RAW MATERIAL', 'TRADING-OF-RAW-MATERIAL', 'We are proud to be an authorized distributor of Jindal Stainless Steel. Jindal Stainless is a leading manufacturer of stainless steel products in India, known for their high-quality and durability. Our product range includes:', 'Production Capacity: 50', '', '<h6>1) SS Pipes &amp; Sheets</h6><p>- High-quality stainless steel pipes for various industrial applications</p><p>- Available in different sizes, thicknesses, and grades</p><h6>2) SS Railing Fittings and Accessories</h6><p>- Stylish and durable railing fittings and accessories for indoor and outdoor use</p><p>- Available in various designs and finishes</p><h6>3) SS Pillars and Mail Pillars</h6><p>- Strong and durable pillars for indoor and outdoor use</p><p>- Available in various designs and finishes</p>', '2024-10-29 12:37:12'),
(105, 'Stainless-Steel-Gate-with-HPL-CNC-Design', 'Stainless Steel Gate with HPL & CNC Design', 'GATE', 'Stainless Steel Gate with HPL and CNC Design combines the durability of stainless steel with the aesthetic appeal of High-Pressure Laminate (HPL) and Computer Numerical Control (CNC) design. This gate offers a unique and modern entrance solution for residential, commercial, or industrial properties.', 'Production Capacity: 50', '', '<h4>Material Specifications:</h4><p>- Frame: Stainless Steel (Grade 304 or 316)</p><p>- Infills: High-Pressure Laminate (HPL) sheets</p><p>- Design: CNC machined stainless steel</p><p>- Finish: Matte.</p><h4>Dimensional Specifications:</h4><p>- Gate Width &amp; Height: Customised</p><p>- CNC (laser cutting design) Sheet Thickness - 1.5mm</p><h4>HPL Specifications:</h4><p>- Brand : Greenlam or Century Exteria</p><p>- Material: High-Pressure Laminate (HPL)</p><p>- Color: Various colors and patterns available</p><p>- Finish: Matte</p><h4>Welding:</h4><p>- Only Argon &amp; Laser Welding</p><h4>Locking System:</h4><p>- Stainless Steel Center locks (Harrison brand or equivalent brand available)</p><p>- Electronic locks or IP VDP</p><h4>Gate Automation: (*Optional)</h4><p>- Capacity - Depends on size and weight</p><h4>Slider Specification: (* For Slider gates)</h4><p>- SS 304 Grade sliding wheels with bearing (SKF brand)</p><p>- Nylon Roller with bearing (SKF brand)</p><p>- SS U Channel with bright bar (Rail track)</p><p>- SS Plate L Connector (Hanging of gate rollers) - 200 x 200 x 8mm Plate.</p><h4>Additional feature:</h4><p>- LED lights can be used as per design.</p>', '2024-11-06 05:39:23'),
(106, 'Aluminium-Louvers-Profile-Gate', 'Aluminium Louvers Profile Gate', 'GATE', 'Aluminium Louvers Profile Gate is a sleek and modern entrance solution featuring horizontal or vertical louvers made from high-quality aluminium profiles. This gate offers excellent ventilation, visibility, and security for residential, commercial, or industrial properties.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Frame: Stainless Steel or Mild Steel (as per requirement)</p><p>- Louvers: Aluminium profiles (140mm to 150mm width &amp; Height - 12 ft and 15 ft)</p><p>- Finish: Powder Coated or PU Paint</p><h3>Dimensional Specifications:</h3><p>- Gate Width &amp; Height: Customised</p><p>- Louver Thickness: 1.5 mm to 3 mm</p><h4>Louvers Finish Specifications:</h4><p>- Color: Various colors available (e.g., anodized or wooden)</p><p>- Finish - Matte</p><h4>Additional feature:</h4><p>- LED lights can be used as per design.</p>', '2024-11-06 06:31:15'),
(107, 'Mild-Steel-Gate-with-HPL--CNC-Design', 'Mild Steel Gate with HPL & CNC Design', 'GATE', 'Mild Steel Gate with HPL and CNC Design combines the strength of mild steel with the aesthetic appeal of High-Pressure Laminate (HPL) and Computer Numerical Control (CNC) design. This gate offers a durable and modern entrance solution for residential, commercial, or industrial properties.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Frame: Mild Steel (MS) - ISI Marked</p><p>- Infills: High-Pressure Laminate (HPL) sheets</p><p>- Design: CNC machined mild steel</p><p>- Finish: PU Paint or hot dip galvanized</p><h4>Dimensional Specifications:</h4><p>- Gate Width &amp; Height: Customised</p><p>- CNC (laser cutting design) Sheet Thickness - 1.5mm to 8mm (as per requirement).</p><h4>HPL Specifications:</h4><p>- Material: High-Pressure Laminate (HPL)</p><p>- Thickness: 6 mm</p><p>- Color: Various colors and patterns available</p><p>- Finish: Matte</p><h4>Welding:</h4><p>- Only Argon &amp; Laser Welding</p><h4>Locking System:</h4><p>- Stainless Steel Center locks (Harrison brand or equivalent brand available)</p><p>- Electronic locks or IP VDP</p>', '2024-11-06 06:45:20'),
(108, '-Mild-Steel-Industrial-Slider-Gate-with-Automation', ' Mild Steel Industrial Slider Gate with Automation', 'GATE', 'Mild Steel Industrial Slider Gate with Automation is a robust and reliable entrance solution designed for industrial applications, featuring a sliding gate made from mild steel, equipped with an automation system for smooth and secure operation.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Frame: Mild Steel (MS) - ISI Marked</p><p>- Finish: PU Paint or hot dip galvanized</p><p>- Automation System:</p><p>&nbsp; &nbsp; - Motor: 3-phase induction motor (415V, 50Hz)</p><p>&nbsp; &nbsp; - Gearbox: Heavy-duty reduction gearbox</p><p>&nbsp; &nbsp; - Control Unit: Programmable logic controller (PLC)</p><p>&nbsp; &nbsp; - Sensors: Infrared or magnetic sensors for safety and security</p><h4>Dimensional Specifications:</h4><p>- Gate Width &amp; Height: Customised</p><h4>Welding:</h4><p>- Only Argon &amp; Laser Welding</p><h4>Locking System:</h4><p>- Stainless Steel Slider Locks</p><p>- Electronic locks or IP VDP</p><h4>Slider Specification:</h4><p>- SS 304 Grade sliding wheels with bearing (SKF brand)</p><p>- Nylon Roller with bearing (SKF brand)</p><p>- MS U Channel with bright bar (Rail track)</p><p>- MS Plate L Connector (Hanging of gate rollers) - 200 x 200 x 8mm Plate.</p>', '2024-11-06 06:49:14'),
(109, 'Stainless-Steel-Powder-Coated-Railings', 'Stainless Steel Powder Coated Railings', 'RAILING', 'Stainless Steel Powder Coated Railings are a durable and corrosion-resistant solution. Made from high-quality stainless steel, these railings are powder coated with a durable and scratch-resistant finish.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Powder Coating: Polyester or Polyurethane based</p><p>- Thickness: 1.5 mm</p><h4>Finish Specifications:</h4><p>- Color Available: Wengy Wood, Oak Wood, Cherry Red.</p><p>- Gloss Level: Matte, Glossy.</p><h5>Dimensional Specifications:</h5><p>- Railing Height: 900 mm (standard)&nbsp;&nbsp;</p><p>- Top Handrail &amp; Mid Rails: Customizable to site requirements</p><p>- Baluster Spacing: 900 mm.</p><p>- Glass Thickness - 12mm Toughened.</p>', '2024-11-08 05:43:39'),
(110, 'Stainless-Steel-Wooden-Railings', 'Stainless Steel Wooden Railings', 'RAILING', 'Stainless Steel Wooden Railings combine the durability of stainless steel with the natural beauty of wood, creating a unique and striking railing system. The stainless steel framework provides strength and corrosion resistance, while the wooden infills add warmth and texture.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Framework: Stainless Steel (Grade 304 or 316)</p><p>- Wooden Infills: High-quality wood (e.g., Teak, Hardwood, or Engineered Wood)</p><p>- Wood Finish: Natural oil-based stain, paint, or varnish.</p><h4>Finish Specifications:</h4><p>- Color Available: Wengy Wood, Oak Wood, Cherry Red.</p><p>- Gloss Level: Matte, Glossy.</p><h4>Dimensional Specifications:</h4><p>- Railing Height: 900 mm.</p><p>- Top Handrail and Mid rails: Customizable to site requirements</p><p>- Baluster Spacing: 900 mm.</p><p>- Wooden Infill Thickness: 20 mm to 40 mm.</p><p>- Glass Thickness - 12mm Toughened.</p>', '2024-11-08 05:51:52'),
(111, 'Stainless-Steel-Mild-Steel-Barricades', 'Stainless Steel/Mild Steel Barricades', 'URBAN-STREET-FURNITURE', 'Stainless Steel/Mild Steel Barricades are robust and corrosion-resistant barriers designed for crowd control, safety, and security applications. Made from high-quality stainless steel/mild steel, these barricades offer excellent durability and resistance to harsh environments.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Material: Stainless Steel (Grade 304 or 316), Mild Steel (ISI Marked)</p><p>- Thickness: 2mm to 5mm</p><p>- Finish: Brushed, Mirror Polished or PU Paint</p><h4>Dimensional Specifications:</h4><p>- Custom sizes available</p><h4>Applications:</h4><p>- Crowd control</p><p>- Safety and security barriers</p><p>- Event management</p><p>- Construction sites</p><p>- Industrial facilities</p>', '2024-11-08 06:02:59'),
(112, 'Stainless-Steel-Fire-Doors', 'Stainless Steel Fire Doors', 'URBAN-STREET-FURNITURE', 'Stainless Steel Fire Doors are designed to provide safety and protection in the event of a fire. Made from high-quality stainless steel, these doors offer excellent durability, corrosion resistance, and fire resistance.', 'Production Capacity: 50', '', '<h3>Material Specifications:</h3><p>- Material: Stainless Steel (Grade 304 or 316)</p><p>- Thickness: 1.2mm to 3mm</p><p>- Finish: Brushed or Mirror Polished</p><h4>Dimensional Specifications:</h4><p>- Custom sizes available</p><h4>Features:</h4><p>- Durable and corrosion-resistant</p><p>- Excellent fire resistance</p><p>- Easy to clean and maintain</p><p>- Customizable to fit specific requirements</p><h4>Applications:</h4><p>- Commercial buildings</p><p>- Industrial facilities</p><p>- Hospitals and healthcare facilities</p><p>- Government buildings</p>', '2024-11-08 06:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `client_review` varchar(255) NOT NULL,
  `added_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `client_review`, `added_date`) VALUES
(2, 'Rohit Sharma', 'My car looks absolutely stunning! The polish and shine lasted for\r\n                                                weeks.', '2025-07-19'),
(3, 'Ananya Verma', 'Great service and punctual team. They really pay attention to the\r\n                                                details!', '2025-07-19'),
(4, 'Mohd Faizan', 'Loved how they cleaned even the tightest spots. My SUV feels brand\r\n                                                new!', '2025-07-19'),
(5, 'Simran Kaur', ' Quick, affordable and spotless results. Definitely booking again\r\n                                                next month!', '2025-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_inactive_user`
--
ALTER TABLE `add_inactive_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_inactive_user`
--
ALTER TABLE `add_inactive_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
