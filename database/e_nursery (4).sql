-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 06:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `nursery_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `nursery_email` varchar(500) NOT NULL,
  `Complaint` varchar(500) NOT NULL,
  `complaint_upload` varchar(500) NOT NULL,
  `complaint_response` varchar(500) NOT NULL,
  `quantity` varchar(150) NOT NULL,
  `total` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `cart_id` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `nurseryemail` varchar(100) NOT NULL,
  `nurseryid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `cartdate` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `subtotal` varchar(500) NOT NULL,
  `d_boy_email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mycartpayment`
--

CREATE TABLE `mycartpayment` (
  `mycartpay_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `quantity` varchar(60) NOT NULL,
  `userid` int(11) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `nurseryemail` varchar(100) NOT NULL,
  `nurseryid` int(11) NOT NULL,
  `productid` varchar(110) NOT NULL,
  `price` varchar(100) NOT NULL,
  `pay_status` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `order_status` varchar(500) NOT NULL,
  `subtotal` varchar(500) NOT NULL,
  `d_boy_email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_category`
--

CREATE TABLE `nursery_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_category`
--

INSERT INTO `nursery_category` (`category_id`, `category_name`, `image`) VALUES
(2, 'Gardening', '1660299417.jpg'),
(5, 'Plants', '1660300475.jpg'),
(6, 'Seeds', '1660300623.jpg'),
(7, 'Bulbs', '1660300823.jpg'),
(8, 'Planting Materials', '1660300924.jpg'),
(9, 'Soil and Fertilizer', '1660301137.jpg'),
(10, 'Gifts', '1660301256.jpg'),
(11, 'Pebbles', '1660301339.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_category_type`
--

CREATE TABLE `nursery_category_type` (
  `category_type_id` int(11) NOT NULL,
  `catgry_id` int(11) NOT NULL,
  `category_type_name` varchar(500) NOT NULL,
  `c_type_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_category_type`
--

INSERT INTO `nursery_category_type` (`category_type_id`, `catgry_id`, `category_type_name`, `c_type_image`) VALUES
(1, 5, 'Indoor Plants', '1662655318.jpeg'),
(2, 5, 'Outdoor Plants', '1662657070.jpg'),
(3, 6, 'Vegetable and Herb Seeds', '1662690786.jpg'),
(4, 7, 'Orange Color Flower Bulbs', '1663148532.jpg'),
(5, 7, 'Purple Flower Bulbs', '1663148599.jpg'),
(6, 7, 'Mix Color Flower Bulbs', '1663148705.jpg'),
(7, 7, 'Anemone Flower Bulbs', '1663148777.jpg'),
(8, 9, 'Organic Fertilizer', '1663236562.jpg'),
(9, 9, 'Potting Soil', '1663236652.jpg'),
(10, 9, 'Cocopeat', '1663236709.jpg'),
(11, 11, 'White Pebbles', '1672288920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_order`
--

CREATE TABLE `nursery_order` (
  `orderid` int(11) NOT NULL,
  `order_id` varchar(500) NOT NULL,
  `nsry_id` int(11) NOT NULL,
  `nsry_email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paymentstatus` varchar(100) NOT NULL,
  `order_sts` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `delivery_boy_email` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_registration`
--

CREATE TABLE `nursery_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `liecence` varchar(500) NOT NULL,
  `Nursery_status` varchar(500) NOT NULL,
  `Nursery_type` varchar(400) NOT NULL,
  `delivery_boy_name` varchar(500) NOT NULL,
  `delivery_boy_email` varchar(50) NOT NULL,
  `delivery_boy_password` varchar(100) NOT NULL,
  `licence` varchar(500) NOT NULL,
  `dboy_licence` varchar(500) NOT NULL,
  `aadhar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_registration`
--

INSERT INTO `nursery_registration` (`id`, `name`, `email`, `password`, `experience`, `location`, `address`, `liecence`, `Nursery_status`, `Nursery_type`, `delivery_boy_name`, `delivery_boy_email`, `delivery_boy_password`, `licence`, `dboy_licence`, `aadhar`) VALUES
(2, 'Nursery Hood', 'green@gmail.com', 'Green@123', '4', 'Thrissur', 'thrissur,ollur,680006', '1662647756.jpg', 'Approve', 'Admin', 'clinto', 'clinto@gmail.com', 'clinto', '1672913640.pdf', '1675414038.jpg', '1675414038.png'),
(11, 'Greenhouse Growers Nursery', 'greenhousegrowers@gmail.com', 'Greenhousegrowers@123', '5', 'Thrissur', 'South Anjery, christopher Nagar, Ollur, thrissur 680101', '1662648030.jpg', 'Approve', 'Admin', 'arjun', 'arjun@gmail.com', 'arjun', '1672913640.pdf', '1675414038.jpg', '1675414038.png'),
(12, 'Evergreen Nursery', 'evergreennursery@gmail.com', 'Evergreennursery@098', '8', 'Kunnamkulam', 'kanppayoor, Kunnamkula, Thrissur,680506', '1662649297.jpg', 'Approve', 'Admin', 'rahul', 'rahul@gmail.com', 'rahul', '1672913640.pdf', '1675414038.jpg', '1675414038.png'),
(28, 'Nursery Live', 'nurserylive@gmail.com', 'nurseryLive@12345', '8', 'guruvayoor', 'Thiruvenkitom po ,Guruvayoor,thrissur 680502', '1672286112.jpg', 'Approve', 'Nursery', 'Arul', 'arul@gmail.com', 'arul', '1672913640.pdf', '1675414038.jpg', '1675414038.png'),
(29, 'Hi tech Nursery', 'hitech@gmail.com', 'Hitech@123', '8', 'thrissur', 'Ammadam, thrissur 680101', '1672913640.jpg', 'Waiting For Admin Approval', 'Nursery', 'kevin', 'kevin@gmail.com', 'kevin', '1672913640.pdf', '1675414038.jpg', '1675414038.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_number` varchar(100) NOT NULL,
  `exp_date` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `pay_date` date NOT NULL,
  `amount` varchar(500) NOT NULL,
  `nurseryid` int(11) NOT NULL,
  `nurserymail` varchar(500) NOT NULL,
  `orderid` varchar(500) NOT NULL,
  `delivery_boy_email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ps_id` int(11) NOT NULL,
  `ps_nursery_id` int(11) NOT NULL,
  `ps_catgry_type_id` int(11) NOT NULL,
  `ps_name` varchar(300) NOT NULL,
  `ps_price` varchar(300) NOT NULL,
  `ps_description` varchar(800) NOT NULL,
  `ps_care` varchar(900) NOT NULL,
  `ps_watering` varchar(800) NOT NULL,
  `ps_soil` varchar(700) NOT NULL,
  `ps_temperature` varchar(700) NOT NULL,
  `ps_image` varchar(800) NOT NULL,
  `nursery_email` varchar(100) NOT NULL,
  `uses` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ps_id`, `ps_nursery_id`, `ps_catgry_type_id`, `ps_name`, `ps_price`, `ps_description`, `ps_care`, `ps_watering`, `ps_soil`, `ps_temperature`, `ps_image`, `nursery_email`, `uses`) VALUES
(1, 2, 1, 'Money Plant Golden, Scindapsus Golden - Plant', '269', 'The botanical name of the Money Plant is Epipremnum aureum. Golden Money Plant has large, glossy, golden heart-shaped leaves that can brighten any indoor space.  Money plant is the ideal plant for offices, shopping centers, hotels, and other public areas as they are easy to maintain in low light and are efficient at removing indoor pollutants.NASA places this plant among the top 3 houseplants which are great for removing formaldehyde and carbon monoxide and increasing general indoor air quality.', 'Keep the plant in Natural indirect /Artificial bright Light. Poke your finger/plain small stick into the soil to check the moisture. apply 1 cup (Approx. 50 ml) water when top soil (1-2 inches) feels dry to touch. Do not re-pot for min. 2 weeks after receiving it.', 'Apply 1 cup (Approx. 50 ml) water when the topsoil (1-2 inch) in pot feels dry to touch.', 'Soil should be well-drained and fertile, rich in organic content.', '15 to 30 degree Celsius', '1662987683.jpg', 'green@gmail.com', 'NULL'),
(5, 2, 1, 'Peace Lily, Spathiphyllum ', '299', 'One of the rarest indoor flowering plant. NASA recommended air purifier flowering plant. Easy to care and low maintenance plant. Best for office desk, bedroom.', 'Remove dead, infected or damaged plant parts and discard them away from the plants. For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.', 'Poke your finger/plain small stick into the soil to check the moisture. Apply 1 cup (Approx. 50 ml) water when the top soil (1-2 inch) in pot feels dry to touch. Apply water probably in the morning or evening time. Do not overwater the plant. As a rule of thumb, water the plant thoroughly in the summer and reduce watering in winter and rainy season.', 'The soil should be well drained and fertile, rich in organic content.', 'Natural indirect / artificial bright light is ideal for peace lily plant growth.', '1663145146.jpg', 'green@gmail.com', 'NULL'),
(6, 2, 1, 'Chlorophytum, Spider Plant', '199', 'Attractive foliage plant. Best plant for AC rooms, office desk. Easy to care and low maintenance plant. Best indoor plant for low light condition', 'Remove dead, infected or damaged plant parts and dispose them away from the planting area. Spray Neem, Eucalyptus or Citrus oil for any insect/pest attack, as a primary treatment.', 'Poke your finger/plain small stick into the soil to check the moisture. Water when top soil (3-4 inches) feels dry to touch. Water thoroughly in the summer and reduce watering in winter and rainy season.', 'The soil should be well drained and fertile rich in organic content.', 'Keep the plant indoor with natural bright light/indirect bright light. Protect the plant from direct harsh sunlight as it can cause damage to the foliage.', '1663145642.jpg', 'green@gmail.com', 'NULL'),
(7, 2, 1, 'Syngonium ', '199', 'NASA recommended air purifier plant. Best for AC rooms, office desk, etc. Best indoor plant for low light condition. Low maintenance plant. Attractive foliage plant.', 'Remove dead, infected or damaged plant parts and discard them away from the plants. For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.', 'Poke your finger/plain small stick into the soil to check the moisture. Apply 1 cup (Approx. 50 ml) water when the top soil (1-2 inch) in pot feels dry to touch. Apply water probably in the morning or evening time. Do not overwater the plant. As a rule of thumb, water the plant thoroughly in the summer and reduce watering in winter and rainy season.', 'The soil should be well drained and fertile, rich in organic content.', 'Natural indirect / artificial bright light is ideal for Syngonium plant growth.', '1663145794.jpg', 'green@gmail.com', 'NULL'),
(8, 2, 1, 'Sansevieria trifasciata Hahnii, Snake Plant', '399', 'NASA recommended an air purifier plant. Best plant for AC rooms, office desk. Zero maintenance plant. Best indoor plant for low light condition. Popular houseplant with wavy cross stripes.', 'Remove dead, infected or damaged plant parts and dispose them away from the planting area. Spray Neem, Eucalyptus or Citrus oil for any insect/pest attack, as a primary treatment.', 'Poke your finger/plain small stick into the soil to check the moisture. Water when top soil (3-4 inches) feels dry to touch. Water thoroughly in the summer and reduce watering in winter and rainy season.', 'The soil should be well drained and fertile rich in oragnic content.', 'Keep the plant indoor with bright indirect natural light or bright artifical light. Protect the plant from direct harsh sunlight as it can cause damage to the foliage.', '1663145917.jpg', 'green@gmail.com', 'NULL'),
(9, 2, 1, 'Boston Fern - Plant', '299', 'NASA recommended Air purifier plant Attractive foliage plant Low maintenance plant', 'Remove dead, infected or damaged plant parts and discard them away from the plants. For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.', 'Poke your finger/plain small stick into the soil to check the moisture. Apply 4 cup (Approx. 200 ml) water when the top soil (1-2 inch) in pot feels dry to touch. Apply water probably in the morning or evening time. Do not overwater the plant. As a rule of thumb, water the plant thoroughly in the summer and reduce watering in winter and rainy season.', 'The soil should be well drained and fertile, rich in organic content.', 'Keep the plant in Natural indirect/Artificial bright light area.', '1663146093.jpeg', 'green@gmail.com', 'NULL'),
(10, 2, 1, 'Rubber Tree, Rubber Plant', '399', 'Rubber plant is evergreen tropical plant in Moraceae family. Rubber plant have thick multiple trunks, and a spreading, irregular canopy with thick, glossy evergreen simple eliptic leaves.', 'Remove dead, infected or damaged plant parts. For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.', 'Water a plant when the topsoil in pot (5 to 8 cm) feels dry to touch. Water thoroughly in the summer and reduce watering for the winter & rainy season. Try to water the plants in the morning around 8-10 am.', 'Use nutrient rich, well drained, well aereted, and porous potting mix.', 'Place the ficus near a window in a room that gets bright morning sunlight. Turn the plant occasionally so all the growth does not occur on one side.', '1663146233.jpg', 'green@gmail.com', 'NULL'),
(11, 2, 2, 'Nutmeg, Jaifal, Jaiphal', '399', 'Wild Nutmeg is a tree up to 20 m tall. Bark is brownish, usually smooth, irregulary flaky; blaze reddish. Branches are arranged in whorls, horizontal. Young branchlets are round, rusty tomentose. Red sap oozed from cut end of bark.', 'Nutmeg trees should be planted in rich, organic soil with a medium texture and low salinity. The pH level should be 6-7, although they will tolerate ranges from 5.5-7.5. A soil test will aid in determining if the site is appropriate or if you need to amend it to correct a lack of nutrients. Mix in organic matter like bark chips, rotted manure or leaves to buck up the nutrition level and aid in aeration and water retention. Be sure to dig your hole at least four feet deep, as nutmegs do not like shallow roots. Nutmegs need well-draining soil, but they also like it humid and damp, so keep the tree moist. Drying out will stress the nutmeg. Mulching around the tree can aid in water retention, but don, t pack it against the trunk or you may be inviting unwanted insects and opening the tree to diseases', 'Medium', 'Well-drained soil', '40 degrees C and above', '1663146462.jpg', 'green@gmail.com', 'NULL'),
(13, 2, 2, 'Nariyal, Coconut Tree', '699', 'The coconut tree is a kind of palm tree with a single, straight trunk and it has got lots of uses and great importance since prehistoric times. It is one of those trees where you can find uses for all the parts including the fruits, wood and leaves. In many places in South India, coconut trees are widely cultivated and they are grown in homes as well as farms for profit as well as for home use.Easily grown in average, medium moisture, well-drained soils in full sun. Prefers fertile, slightly alkaline, loose, somewhat gritty loams with good drainage. Add lime to acidic soils to adjust the soil pH. Best grown with regular and consistent moisture during the growing season.', 'First, water the coconut tree frequently. As long as the soil drains well, you really cant water it too often. If you decide to repot your coconut tree, remember to add sand or vermiculite to the new soil to keep the water draining well. Second, growing coconut palms are heavy feeders that require regular, complete fertilizer. Look for a fertilizer that provides both the basic nutrients plus trace nutrients like boron, manganese and magnesium. Third, coconut palms are very cold sensitive. If you live in an area that gets cold, your coconut plant will need to come inside for the winter. Provide supplemental light and keep it away from drafts. In the summer, grow it outdoors and make sure you place it in a very sunny and warm spot.', 'From May to September, the palm should be abundantly watered,however without drowning the plant. From October, the amount of water can be slightly reduced.', 'Well-drained soil. The soil should be sandy-loamy and alkaline which is the beach/cayes environment.', 'Full sun.', '1663146941.jpg', 'green@gmail.com', 'NULL'),
(14, 11, 3, 'Tomato Roma - Organic Vegetable Seeds', '75', 'The Tomato is botanically known as Lycopersicum esculentum belongs to the family Solanaceae. The fruits are harvested as red for consumption. It has a prominent place in human food.The most popular garden vegetable crop, tomatoes come in a wide range of sizes, shapes, and colo  Tomatoes are an incredibly versatile food. They are often considered as a vegetable, though ideally, they are a fruit.', 'Refer our Garden Guide for detailed procedures and meanings of words related to gardening SunlightKeep the seedlings container in bright sunlight Protect the Tomato seedlings from direct harsh sunlight SoilThe soil should be well drained and nutrient rich for tomato seedlings WateringWater the seedlings when the topsoil (1-2 inch) in pot feels dry to touch Poke your finger/plain small stick into the soil to check the moisture Do not overwater the seedlings Water thoroughly in the summer and reduce watering in winter and rainy season Application of FertilizerDuring the main growing season feed the Tomato seedlings with any organic fertilizer once a month Loosen the topsoil without disturbing the roots of the seedlings so it can uptake the nutrients and moisture easily Plant ProtectionRemove dead, infected or damaged seedlings from container DontsDo not overwater the seedlings especially w', 'Water the seedlings when the topsoil (1-2 inch) in the container feels dry to touch. Poke your finger/plain small stick into the soil to check the moisture.', 'Well draining and Nutrient-rich with a pH between 6.2 and 6.8.', 'Direct bright sunlight.', '1663147372.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(15, 11, 3, 'Methi Shalimar Improved - Organic Microgreen', '99', 'The seeds are brownish with a deep furrow dividing them into two unequal lobes.Follow the steps to grow your own Microgreens:Select a container having 4-6 inch upper diameter.Fill the container with well drained and nutrient rich soil leaving some space (About 1 inch) below rim.Scatter seeds over potting soil in a planter and cover with another thin layer of soil.Mist the soil with water and Cover the seed container with a transparent plastic paper.Place near a source of bright indirect sunlight or under artificial bright light.Continue to mist the seeds to keep the soil moist. Don t overwater it. Remove plastic wrapping once seeds start to germinate.After germination the Microgreens will be ready to harvest in 2-3 weeks.', 'Keep the seedlings container in indirect bright sunlight The media should be well drained Apply Water occasionally to keep the growing medium moist Poke your finger/plain small stick into the growing medium to check the moisture Do not over water Remove dead, infected or damaged seedlings from container', 'Water the seedlings to keep the growing media moist. Poke your finger/plain small stick into the growing medium to check the moisture, apply water if top soil (1-2inches) feels dry to touch. Do not over water.', 'Use cocopeat or well drained soil for growing microgreens.', '16-26 degree Celsius', '1663147519.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(16, 11, 3, 'Carrot Nantes ', '75', 'Nantes carrots are small to medium in size, averaging 15-20 centimeters in length and 2-5 centimeters in diameter and are cylindrical in shape with blunt, rounded ends on both the stem and non-stem end. Nantes carrots are crunchy and tender with a mild sweet taste.', 'Refer our Garden Guide for detailed procedures and meanings of words related to gardening SunlightKeep the seedlings container in Natural bright light Protect the Carrots seedlings from direct harsh sunlight SoilThe soil should be well drained and nutrient rich for Carrots seedlings WateringWater the seedlings when the topsoil (1-2 inch) in pot feels dry to touch Poke your finger/plain small stick into the soil to check the moisture Do not overwater the seedlings Water thoroughly in the summer and reduce watering in winter and rainy season Application of FertilizerDuring the main growing season feed the Carrots seedlings with organic fertilizer once a month Loosen the topsoil without disturbing the roots of the seedlings so it can uptake the nutrients and moisture easily Plant ProtectionRemove dead, infected or damaged seedlings from container Donts Do not overwater the seedlings especia', 'Water the seedlings when the topsoil (1-2 inch) in pot feels dry to touch. Poke your finger/plain small stick into the soil to check the moisture.', 'Nutrient-rich well-draining soil with Optimum PH range 5.5 to 6.5', '20-30-degrees celsius.', '1663147633.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(17, 11, 1, 'Areca Palm ', '349', 'Pinnate, 6 to 8 pale green leaves per stem, 80 to 100 leaflets, to 8 feet long (2.4 m). Yellow if grown with enough light, 2 feet long. Yellow male and female flowers on the same inflorescence. This palm tree, with its long, graceful feather-shaped fronds, will add a tropical feel to your home and is especially well suited for screened patios and atriums.', 'Palms grow best when you let their roots fill the pot. They need soil-based potting compost and should not be re-potted unnecessarily. They are sensitive to chemicals and will be damaged if you expose them to aerosol sprays. If you need to treat them with insecticides, be sure what you use is suitable for a palm.', 'Medium', 'Chalky, Loamy, Sandy soil: moist but well-drained', 'Full to partial sunlight', '1663147869.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(18, 11, 7, 'Anemone The Admiral (Pink)', '259', 'Besides being the most common gift to give to someone, flowers are also beautiful decoration and important ingredients of perfumes and many other things that make our lives more beautiful.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am Remove dead, infected or damaged plant parts and throw in the garbage collector Fertilize the plant during planting and growing season with organic fertilizer Store the bulbs away from sunlight in a cool and dry area and check regularly Do not store bulbs for more time as they can loose their viability', '	Keep soil moist throughout the growing season', 'Well-drained and fertile soil', 'Full Sun', '1663149010.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(19, 11, 7, 'Anemone Bicolor (White, Red) ', '259', 'Besides being the most common gift to give to someone, flowers are also beautiful decoration and important ingredients of perfumes and many other things that make our lives more beautiful.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am Remove dead, infected or damaged plant parts and throw in the garbage collector Fertilize the plant during planting and growing season with organic fertilizer Store the bulbs away from sunlight in a cool and dry area and check regularly Do not store bulbs for more time as they can loose their viability', 'Keep soil moist throughout the growing season.', 'Well-drained and fertile soil', 'Full Sun', '1663149117.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(20, 11, 7, 'Anemone The Governor (Red)', '259', 'Anemone is perennial flowering plant that have basal leaves with long leaf-stems that can be upright or prostrate. A scarlet beauty with shiny red petals and a black center that is set off by a white halo.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am Remove dead, infected or damaged plant parts and throw in the garbage collector Fertilize the plant during planting and growing season with organic fertilizer Store the bulbs away from sunlight in a cool and dry area and check regularly Do not store bulbs for more time as they can loose their viability', 'Keep soil moist throughout the growing season.', '	Well-drained and fertile soil', 'full sun', '1663149236.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(21, 11, 6, 'Ranunculus (Random Color) ', '349', 'Ranunculus flowers look almost too perfect to be real. Their rose-like blossoms feature layer upon layer of tissue-thin petals. Brilliantly colored flowers of Ranunculus is a great attraction. These gorgeous flowers are beloved for their colored double-ruffled petals, tall stems, and long vase life. They also make long-lasting cut flowe', 'Water a plant when the soil feels dry to touch Try to water the plants in the morning around 8-10am Remove dead, infected or damaged plant parts and throw in the garbage collector Fertilize the plant during planting and growing season with organic fertilizer Store the bulbs away from sunlight in a cool and dry area and check regularly Do not store bulbs for more time as they can loose their viability', 'Moderately', 'Well drained and fertile soil.', '	Full sun', '1663149426.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(22, 11, 6, 'Gladiolus (Random color)', '179', 'Gladiolus are available with flowers in a huge range of colors, including apricot, blue, burgundy, pink, gold, red, orange, and white, as well as multicolored varieties. It is sometimes called the sword lily. A great cutting flower, gladioli look beautiful in midsummer bouquets. Height ranges from 2 to 5 feet.  Their stems are generally unbranched, producing 1 to 9 narrow, sword-shaped, longitudinal grooved leaves. The flower spikes are large and one-sided. They are united at their base into a tube-shaped structure.', 'Planting time is October for plains and March-April for hills. Dig a hole about 5 cm deep to sow the bulb. Set the bulb in the hole, pointy end up, then cover with soil and press firmly Space bulbs 6 to 8 inches apart Following are the suggested compositions for bulb plantation: Garden soil + Compost + Perlite + Sand (2:2:1:1) or, Soil + Cocopeat + vermicompost (1:1:1)', 'Moderately', '	Sandy loam soil', 'Full to partial sunlight', '1663149535.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(23, 11, 6, 'Portulaca, 9 O Clock (Any Color)', '199', 'Afterward, the plant will bloom and it could be of any colored flower. Portulaca flowers are truly beautiful in various garden and landscape settings and have been used to beautify old structures and stone walkways. Portulaca is another clue to the wonderful drought tolerance of a perennial succulent flowering plant. Many varieties of portulaca have semi-double to fully double flowers that resemble miniature roses. Flowers blooms in bright colors, like yellow, orange, red, and bright pink, white, cream, and variegated flower colors are also available.', 'Water a plant when the soil feels dry to touch. Water thoroughly in the summer and reduce watering for the winter & rainy season. Try to water the plants in the morning around 8-10am. You should remove dead, infected, or damaged plant parts and throw in the garbage collector. You should prune and fertilize a plant mostly in the spring season. When a plant grows beyond its limit and pot size not providing enough space for the spread of roots, re-pot with fresh soil and some fertilizer. While re-potting, try not to disturb the roots. Avoid any drastic change in the provided environment otherwise, the plants may get stress/shock. For any insect attack or disease, you can use Neem oil, Eucalyptus oil or Citrus oil spray for primary treatment.', 'Moderately', '	Sandy well-drained soils.', 'Full sunlight', '1663149660.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(24, 11, 5, 'Iris (Purple)', '239', 'Irises are perennial plants, growing from creeping rhizomes or, in drier climates, from bulbs. They may be bearded or beardless. They have long, erect flowering stems which may be simple or branched, solid or hollow, and flattened or circular. The bulbous species have cylindrical, basal leaves.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am You should remove dead, infected or damaged plant parts and throw in the garbage collector You should fertilize a plant mostly in the spring season, flower bud stage Mulch the potting mix with organic material', 'Moderately', 'sandy loam soil', '16 to 30 degrees C', '1663149992.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(25, 11, 5, 'Allium sphaerocephalon (Wine Color) ', '229', 'Allium, also called Ornamental Onion, is one of the most interesting blooms in the spring and summer garden. With a spherical shape flower that holds its form throughout the season, it is one of the long lasting blooms to be had from a bulb.', 'You should fertilize a plant mostly in the spring season, flower bud stage Water a plant when the soil feels dry to touch If there is a dry spell and it does not rain, you must water the bulbs weekly until the ground freezes Apply compost annually to provide nutrients needed for future blooms You should fertilize a plant mostly in the spring season, flower bud stage After the foliage turns yellow and dies back, it can be pruned off Plant the bulbs in a place that receives proper sunlight', 'Moderately', 'Sandy loam soil', 'Full sun to partial shade', '1663150098.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(26, 11, 5, 'Muscari Comosum pulmosum (Purple)', '239', 'Muscari have one or more narrow leaves than Hyacinth which arise from a bulb. The flowers appear in the spring and form a spike or raceme, being held in a close or loose spiral around a central stalk.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am You should remove dead, infected or damaged plant parts and throw in the garbage collector You should fertilize a plant at planting time and growing season', 'Moderately', 'Well-drained sandy soil', 'Full to partial sunlight', '1663150355.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(27, 11, 4, 'Gladiolus (Orange)', '189', 'Gladiolus are available with flowers in a huge range of colors, including apricot, blue, burgundy, pink, gold, red, orange, and white, as well as multicolored varieties. It is sometimes called the sword lily.A great cutting flower, gladioli look beautiful in midsummer bouquets. Height ranges from 2 to 5 feet.', 'Water a plant when the soil feels dry to touch Water thoroughly in the summer and reduce watering for the winter & rainy season Try to water the plants in the morning around 8-10am You should remove dead, infected or damaged plant parts and throw in the garbage collector You should fertilize a plant at planting time and growing season Mulch the potting mix with organic material', 'Moderately', 'Sandy loam soil', 'Full to partial sunlight', '1663150480.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(28, 11, 4, 'Asiatic Lily (Orange)', '269', 'Lilium asiaticum is the scientific name of the plant. Bulbous rootstock with central growing point covered by concentric layers of scales. This perennial lily flowers are trumpet shaped, reflexed, cup shaped or bowl shaped. All lily flowers have six petals and six anthe Most are sweetly scented.', 'Remove old stems in late fall to help discourage diseases Bulbs of this lily should never sit in soggy soil Protect against frost', 'Medium', 'Sandy or clay, well-drained', 'Full sun or partial shade', '1663150597.jpg', 'greenhousegrowers@gmail.com', 'NULL'),
(36, 12, 11, 'Super Marble Pebbles (White, Big, Unpolished) ', '149', 'Get creative and give an amazing look to your garden with these decorative pebbles.  Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles. These decorative pebbles are perfect if you wish to show your creativity and develop an attractive garden.  These pebbles can be used to decorate garden corners, Garden pathways, Garden borders, Miniature Gardens, Terrariums or just arrange them around the planters; they will anyway look stunning and impart structured look you are looking for.', 'Keep it away from the children below 3 yea These items are not edible.', 'NULL', 'NULL', 'NULL', '1672289142.jpg', 'evergreennursery@gmail.com', 'Decoration of pots, plants, gardens; Mulching etc.'),
(37, 12, 11, 'Onex Pebbles (White, Medium) ', '140', 'Get creative and give an amazing look to your garden with these decorative pebbles.  Simple gardens may be indoor or outdoor can be transformed into beautiful ones with these wonderful pebbles. These decorative pebbles are perfect if you wish to show your creativity and develop an attractive garden.  These pebbles can be used to decorate garden corners, Garden pathways, Garden borders, Miniature Gardens, Terrariums or just arrange them around the planters; they will anyway look stunning and impart structured look you are looking for. Product Type	Onex Simple Pebbles Each unit contains -   1 Kg white color pebbles Size, 1 to 2 cm Pebbles per sqft, Approx 2 to 3 kg', 'Keep it away from the children below 3 yea These items are not edible.', 'NULL', 'NULL', 'NULL', '1672289293.jpg', 'evergreennursery@gmail.com', 'Decoration of pots, plants, gardens; Mulching etc.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `rating` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `nursery_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `nursery_email` varchar(600) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `password` varchar(400) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `name`, `email`, `phone`, `password`, `address`) VALUES
(1, 'Safrin T S', 'safrin@gmail.com', '9546873258', 'Safrin@123', 'Guruvayur Thrissur Kerala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `mycartpayment`
--
ALTER TABLE `mycartpayment`
  ADD PRIMARY KEY (`mycartpay_id`);

--
-- Indexes for table `nursery_category`
--
ALTER TABLE `nursery_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `nursery_category_type`
--
ALTER TABLE `nursery_category_type`
  ADD PRIMARY KEY (`category_type_id`);

--
-- Indexes for table `nursery_order`
--
ALTER TABLE `nursery_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `nursery_registration`
--
ALTER TABLE `nursery_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mycartpayment`
--
ALTER TABLE `mycartpayment`
  MODIFY `mycartpay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_category`
--
ALTER TABLE `nursery_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nursery_category_type`
--
ALTER TABLE `nursery_category_type`
  MODIFY `category_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nursery_order`
--
ALTER TABLE `nursery_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_registration`
--
ALTER TABLE `nursery_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
