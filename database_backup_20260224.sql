-- MySQL dump 10.13  Distrib 8.0.45, for Linux (x86_64)
--
-- Host: localhost    Database: afadzute_afad
-- ------------------------------------------------------
-- Server version	8.0.45-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_us` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us`
--

LOCK TABLES `about_us` WRITE;
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` VALUES (1,'Uddipto Mohila Unnayan Sangstha (UMUS) was formed in 2003 by young Dalit activists and women advocates to ensure equal rights for the Dalit community in Bangladesh. Based in Satkhira district, UMUS has been working tirelessly for over two decades to empower marginalized women and children, particularly from the Dalit community.\n\nOur organization operates primarily in Tala and Assasuni Upazilas of Satkhira, focusing on the most vulnerable and discriminated populations. We believe that every individual, regardless of their caste, gender, or economic status, deserves dignity, respect, and equal opportunities.\n\nUMUS works on multiple fronts including education, healthcare access, legal rights, livelihood support, and leadership development. Through our programs, we have touched thousands of lives, helping women and children access their fundamental rights and build better futures for themselves and their communities.\n\nWe collaborate with national and international organizations including Manusher Jonno Foundation (MJF), Christian Aid, Nagorik Uddyog, and Women\'s Voice and Leadership Bangladesh (WVLB) to implement sustainable development programs that create lasting change in our communities.\n\nOur work is guided by the principles of social justice, equality, dignity, and empowerment. We envision a society where discrimination is eliminated and every person can live with honor and access their rights as citizens of Bangladesh.','2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applications`
--

LOCK TABLES `applications` WRITE;
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` VALUES (1,'umus-logo.jpg','umus-logo.jpg','https://www.facebook.com/Uddipto.2003','','','','2026-02-15 04:45:48','2026-02-15 04:45:48');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chief_executive_message`
--

DROP TABLE IF EXISTS `chief_executive_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chief_executive_message` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chief_executive_message`
--

LOCK TABLES `chief_executive_message` WRITE;
/*!40000 ALTER TABLE `chief_executive_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `chief_executive_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('head_office','branch','person') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donor_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_method_id` bigint unsigned NOT NULL,
  `status` enum('pending','verified','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `admin_note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `donations_payment_method_id_foreign` (`payment_method_id`),
  CONSTRAINT `donations_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donations`
--

LOCK TABLES `donations` WRITE;
/*!40000 ALTER TABLE `donations` DISABLE KEYS */;
/*!40000 ALTER TABLE `donations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `executive_committee`
--

DROP TABLE IF EXISTS `executive_committee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `executive_committee` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `executive_committee`
--

LOCK TABLES `executive_committee` WRITE;
/*!40000 ALTER TABLE `executive_committee` DISABLE KEYS */;
INSERT INTO `executive_committee` VALUES (1,'Dr. Mohammad Rahman','Chairperson','placeholder-chairperson.jpg','Distinguished social worker and advocate for Dalit rights with over 20 years of experience in community development.',NULL,NULL,NULL,NULL,1,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(2,'Jayonti Rani Das','Executive Director','placeholder-ed.jpg','Dedicated leader working for women empowerment and Dalit community rights. Leading UMUS initiatives since establishment.',NULL,NULL,NULL,NULL,2,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(3,'Mrs. Sultana Begum','Secretary','placeholder-secretary.jpg','Experienced administrator with strong commitment to social justice and women development programs.',NULL,NULL,NULL,NULL,3,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(4,'Advocate Kamal Hossain','Treasurer','placeholder-treasurer.jpg','Legal expert and financial consultant working towards transparent governance in NGO sector.',NULL,NULL,NULL,NULL,4,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(5,'Dr. Farhana Islam','Member','placeholder-member1.jpg','Public health specialist focusing on healthcare access for marginalized communities.',NULL,NULL,NULL,NULL,5,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(6,'Professor Ashok Kumar Das','Member','placeholder-member2.jpg','Education researcher and advocate for Dalit children\'s educational rights.',NULL,NULL,NULL,NULL,6,'2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `executive_committee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (1,'What is UMUS (Uddipto Mohila Unnoyon Sangstha)?','UMUS is a non-governmental organization dedicated to women empowerment and community development in Bangladesh. We focus on eradicating gender-based violence, promoting women\'s rights, providing livelihood support, and ensuring access to essential services for marginalized women and communities.','General',1,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(2,'How can I volunteer with UMUS?','You can register as a volunteer through our website by filling out the volunteer registration form. We welcome individuals who are passionate about women\'s rights and community development. Once registered, our team will review your application and contact you with opportunities that match your skills and interests.','Volunteer',2,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(3,'What areas does UMUS work in?','UMUS primarily operates in Satkhira district and northern Bangladesh, particularly in char areas (river islands). Our programs reach rural and marginalized communities where women face the greatest challenges in accessing rights, resources, and opportunities.','General',3,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(4,'How can I donate to support UMUS programs?','You can donate through our website using mobile banking services (bKash, Nagad, Rocket) or bank transfer. Visit our Donate page for detailed payment information. All donations go directly toward our programs supporting women\'s empowerment, livelihood development, and community services.','Donation',4,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(5,'What types of training does UMUS provide?','UMUS provides vocational skills training including tailoring, handicrafts, food processing, and small business management. We also offer leadership development training, legal awareness sessions, and health education programs. All training is provided free of cost to participants from economically disadvantaged backgrounds.','Programs',5,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(6,'How does UMUS support survivors of gender-based violence?','UMUS provides comprehensive support including legal aid, counseling services, safe spaces, and referrals to appropriate services. We also work on prevention through community awareness campaigns and engage stakeholders at all levels to create violence-free environments for women.','Programs',6,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(7,'Can I partner with UMUS for community development projects?','Yes, UMUS welcomes partnerships with organizations, institutions, and individuals who share our vision. Please contact us through our website or email to discuss potential collaboration opportunities. We believe in building strong partnerships to maximize our impact on women\'s empowerment and community development.','Partnership',7,'2026-02-17 15:21:54','2026-02-17 15:21:54'),(8,'How can I get updates about UMUS activities?','You can subscribe to our newsletter through the subscription form on our website. We also share updates on our social media channels and publish news about our activities regularly on our website. Follow us to stay connected with our work and impact.','General',8,'2026-02-17 15:21:54','2026-02-17 15:21:54');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `focus_areas`
--

DROP TABLE IF EXISTS `focus_areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `focus_areas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `focus_areas`
--

LOCK TABLES `focus_areas` WRITE;
/*!40000 ALTER TABLE `focus_areas` DISABLE KEYS */;
INSERT INTO `focus_areas` VALUES (1,'Women Empowerment','AFAD mainly focuses on women empowerment, eradicating the gender Based Violence in community level, sub-distrit, district and national level. AFAD undertakes initiatives that empower the destitute and neglected portion of women who are deprived from rights and to ensure equal rights and opportunities for them. AFAD works on acclerating the women dignity and eqaul opportunity. AFAD sensitizes the government and non-government institutions for strengthening the socio-economic status of women, and ensuring the full enforcement of such arrangement though training and advocacy. It also sensitizes and influences the different level of stakeholders (policy makers, local government representatives, media, communities and religious leaders) on GVB. AFAD provides the income generation training to the women for the socio-economic empowerment.','fa-solid fa-venus',NULL,NULL,1,1,'2026-02-17 13:53:06','2026-02-17 13:53:06'),(2,'Community Empowerment','AFAD believes Community empowerment is only possible when everyone\'s voices are heard. Women\'s voices, particularly those living in poverty, are often unheard. Women often have the least power in communities, usually not knowing their rights or how to realize them, meaning the potential of half the population is not realized. As a result, AFAD Providing people, especially women living in poverty, with the tools to claim entitlements, develop leadership and take collective action through community-level organizations. In parallel, equipping local governments to be more accountable and responsive, creating violence-free enabling environments for women through realizing their potential, and increasing access to information and services. AFAD works on strengthening women-led community based organizations to uphold voices and realize their rights. Awareness for prevention and action to address violence, particularly against women and children. At the same time, though increasing access to the the information, AFAD creating sustainable impact as institutions become more accountable and pro-poor through ensuring access of the community to information.','fa-solid fa-people-group',NULL,NULL,2,1,'2026-02-17 13:53:06','2026-02-17 13:53:06'),(3,'Livelihood','AFAD is playing influential role in the development sectors for bringing a sustainable livelihoods and social changes of the women. AFAD try to Improve the livelihoods, income and food security of extremely poor women, children and men living on the norther Baangladesh particularly the island char. AFAD provide technical skills training, grants or interest-free loans to procure a viable market asset or start a business. Promoting agricultural farming, disaster preparedness, livelihood security, access to finance and micro-enterprise as means of income. AFAD works for the market linkage.','fa-solid fa-hand-holding-dollar',NULL,NULL,3,1,'2026-02-17 13:53:06','2026-02-17 13:53:06'),(4,'Social Protection','Ensure access to health, education and employment opportunities, through community mobilization and linkages with government services, social safety net programs and emergency relief during crises.','fa-solid fa-shield-halved',NULL,NULL,4,1,'2026-02-17 13:53:06','2026-02-17 13:53:06');
/*!40000 ALTER TABLE `focus_areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Community Empowerment Workshop','Dalit women participating in a skills training and empowerment workshop organized by UMUS in Dinajpur','11857gallery.jpg','2026-02-17 13:34:56','2026-02-17 13:34:56'),(2,'Education Support Program','Children from marginalized communities receiving educational materials and support through UMUS education initiative','53976gallery.jpg','2026-02-17 13:34:56','2026-02-17 13:34:56'),(3,'Women Rights Awareness Campaign','Community gathering for women rights awareness and legal aid information session','71834gallery.jpg','2026-02-17 13:34:56','2026-02-17 13:34:56'),(4,'Livelihood Training Session','Women learning new vocational skills for income generation and economic independence','89222gallery.jpg','2026-02-17 13:34:56','2026-02-17 13:34:56');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impact`
--

DROP TABLE IF EXISTS `impact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `impact` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metric_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metric_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impact`
--

LOCK TABLES `impact` WRITE;
/*!40000 ALTER TABLE `impact` DISABLE KEYS */;
INSERT INTO `impact` VALUES (1,'Women Empowered','2500','Women','Dalit women provided with skills training and leadership development programs','fas fa-users',2025,1,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(2,'Children Educated','1800','Students','Children from marginalized communities enrolled in education support programs','fas fa-graduation-cap',2025,2,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(3,'Families Supported','950','Families','Households assisted with livelihood and economic empowerment initiatives','fas fa-home',2025,3,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(4,'Legal Aid Provided','650','Cases','Women supported with legal assistance and advocacy services','fas fa-balance-scale',2025,4,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(5,'Communities Reached','75','Villages','Rural communities engaged through awareness and development programs','fas fa-map-marked-alt',2025,5,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(6,'Health Services','3200','Beneficiaries','Women and children provided with health awareness and nutrition programs','fas fa-heartbeat',2025,6,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(7,'Skill Training Hours','15000','Hours','Vocational training delivered for income generation activities','fas fa-briefcase',2025,7,'2026-02-17 13:19:29','2026-02-17 13:19:29'),(8,'Advocacy Campaigns','42','Campaigns','Community awareness programs on women rights and social justice conducted','fas fa-bullhorn',2025,8,'2026-02-17 13:19:29','2026-02-17 13:19:29');
/*!40000 ALTER TABLE `impact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoked`
--

DROP TABLE IF EXISTS `invoked`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoked` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoked`
--

LOCK TABLES `invoked` WRITE;
/*!40000 ALTER TABLE `invoked` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoked` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `latest_news`
--

DROP TABLE IF EXISTS `latest_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `latest_news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `latest_news`
--

LOCK TABLES `latest_news` WRITE;
/*!40000 ALTER TABLE `latest_news` DISABLE KEYS */;
INSERT INTO `latest_news` VALUES (2,'UMUS Launches New Women Empowerment Center in Satkhira','Uddipto Mohila Unnoyon Sangstha (UMUS) has inaugurated a new women empowerment center in Satkhira district to provide comprehensive support services to rural women. The center will offer vocational training, legal aid, counseling services, and a safe space for women to gather and share experiences. This initiative is part of UMUS\'s ongoing commitment to create violence-free environments and promote women\'s economic independence. The center is equipped with modern training facilities and staffed by qualified professionals dedicated to women\'s welfare.','17679news.jpg','2026-02-17 15:20:47','2026-02-17 15:20:47'),(3,'500 Women Receive Livelihood Training Through UMUS Initiative','In a significant milestone, UMUS has successfully trained 500 women from economically disadvantaged backgrounds in various vocational skills including tailoring, handicrafts, and food processing. The three-month intensive training program concluded with a certificate distribution ceremony attended by local government officials and development partners. Many participants have already started their own micro-enterprises with support from UMUS\'s micro-credit program. This achievement demonstrates UMUS\'s dedication to sustainable livelihood development and women\'s economic empowerment.','39728news.jpg','2026-02-17 15:20:47','2026-02-17 15:20:47'),(4,'UMUS Organizes Community Dialogue on Gender-Based Violence Prevention','UMUS conducted a series of community dialogues across Satkhira district to raise awareness about gender-based violence and promote gender equality. The dialogues engaged community leaders, religious scholars, local government representatives, and family members in open discussions about women\'s rights and protection. Over 1,000 community members participated in these sessions, which focused on changing harmful social norms and building supportive communities. The initiative has led to the formation of community watch groups to prevent violence against women.','56735news.png','2026-02-17 15:20:47','2026-02-17 15:20:47'),(5,'Partnership Announcement: UMUS Collaborates with International NGO','UMUS has signed a partnership agreement with an international development organization to expand its women empowerment programs in northern Bangladesh. The collaboration will focus on climate resilience, sustainable agriculture, and women\'s leadership development in char areas. This partnership brings additional resources and expertise to UMUS\'s ongoing efforts to improve the lives of marginalized women. The project is expected to benefit over 2,000 families in the region over the next three years.','57201news.jpeg','2026-02-17 15:20:47','2026-02-17 15:20:47'),(6,'UMUS Celebrates International Women\'s Day with Community Events','UMUS marked International Women\'s Day with a series of events across its project areas, celebrating the achievements of women and advocating for gender equality. The celebrations included cultural programs, award ceremonies recognizing outstanding women leaders, and advocacy campaigns for women\'s rights. Local women shared their success stories of overcoming challenges and achieving economic independence with UMUS support. The events highlighted UMUS\'s role in creating platforms for women\'s voices and promoting social change.','78592news.jpg','2026-02-17 15:20:47','2026-02-17 15:20:47'),(7,'UMUS Team Conducts Health Awareness Camp for Rural Women','A comprehensive health awareness and screening camp was organized by UMUS in remote villages of Satkhira, providing free health check-ups and consultation to over 300 women. The camp focused on maternal health, nutrition, and reproductive health awareness. Medical professionals provided guidance on various health issues and distributed iron supplements and vitamin packets. UMUS also facilitated referrals for women requiring specialized medical attention, ensuring they receive proper healthcare services.','91023news.jpg','2026-02-17 15:20:47','2026-02-17 15:20:47');
/*!40000 ALTER TABLE `latest_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legal_affilation`
--

DROP TABLE IF EXISTS `legal_affilation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `legal_affilation` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legal_affilation`
--

LOCK TABLES `legal_affilation` WRITE;
/*!40000 ALTER TABLE `legal_affilation` DISABLE KEYS */;
/*!40000 ALTER TABLE `legal_affilation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2026_02_05_110131_create_executive_committee_table',1),(6,'2026_02_05_110529_create_team_members_table',1),(7,'2026_02_05_110648_create_programs_table',1),(8,'2026_02_05_110659_create_impact_table',1),(9,'2026_02_05_110709_create_stories_table',1),(10,'2026_02_05_110720_create_chief_executive_message_table',1),(11,'2026_02_05_110731_create_faq_table',1),(12,'2026_02_05_110742_create_volunteers_table',1),(13,'2026_02_05_113231_add_social_links_to_executive_committee_and_team_members_tables',1),(14,'2026_02_05_190409_create_sessions_table',1),(15,'2026_02_06_120000_create_focus_areas_table',1),(16,'2026_02_06_120000_create_payment_methods_table',1),(17,'2026_02_06_120001_create_donations_table',1),(18,'2026_02_06_151308_create_contacts_table',1),(19,'2026_02_07_000001_add_icon_path_to_focus_areas_table',1),(20,'2026_02_07_142821_create_publications_table',1),(21,'2026_02_08_000001_create_strategic_plans_table',1),(22,'2026_02_09_000001_add_description_to_strategic_plans_table',1),(23,'2026_02_09_000002_make_pdf_file_nullable_in_strategic_plans_table',1),(24,'2026_02_09_000003_add_image_and_make_pdf_required_in_strategic_plans_table',1),(25,'2026_02_10_173058_add_rating_and_beneficiary_title_to_stories_table',1),(26,'2026_02_15_073025_create_about_us_table',2),(27,'2026_02_15_073025_create_mission_vision_table',2),(28,'2026_02_15_103808_create_slider_table',3),(29,'2026_02_15_103908_create_legal_affilation_table',4),(30,'2026_02_15_103908_create_partners_table',4),(31,'2026_02_15_103909_create_latest_news_table',4),(32,'2026_02_15_103909_create_ongoing_project_table',4),(33,'2026_02_15_103909_create_projects_table',4),(34,'2026_02_15_103910_create_policy_guideline_table',4),(35,'2026_02_15_103910_create_subscribe_table',4),(36,'2026_02_15_104124_create_applications_table',5),(37,'2026_02_15_104719_create_gallery_table',6),(38,'2026_02_15_120000_create_messages_table',7),(39,'2026_02_17_113029_create_invoked_table',8),(40,'2026_02_17_140354_create_volunteer_registrations_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mission_vision`
--

DROP TABLE IF EXISTS `mission_vision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mission_vision` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mission_vision`
--

LOCK TABLES `mission_vision` WRITE;
/*!40000 ALTER TABLE `mission_vision` DISABLE KEYS */;
INSERT INTO `mission_vision` VALUES (1,'UMUS works to reduce discrimination and help rebuild society by promoting the legal rights of marginalized women and children, with a strong focus on the Dalit community. Our mission is to empower women and girls through quality programs that strengthen their access to essential services including healthcare, legal aid, and education. We work to build leadership capacity, develop vocational skills, and create income-generating opportunities that enable sustainable livelihoods. Through community engagement and activist development, we strive to eliminate social barriers and advance justice for all.','An equal and just society where Dalit people live with honor, are recognized as full citizens of Bangladesh, and their cultural diversity is respected. We envision communities where women and girls can access their rights without discrimination, where social barriers are dismantled, and where every individual has the opportunity to reach their full potential regardless of their background.','Social Justice • Equality & Non-Discrimination • Human Dignity & Rights • Women\'s Empowerment • Community Participation • Transparency & Accountability • Solidarity with Marginalized Communities • Sustainable Development • Cultural Diversity & Respect • Collaborative Partnership','2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `mission_vision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ongoing_project`
--

DROP TABLE IF EXISTS `ongoing_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ongoing_project` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ongoing_project`
--

LOCK TABLES `ongoing_project` WRITE;
/*!40000 ALTER TABLE `ongoing_project` DISABLE KEYS */;
INSERT INTO `ongoing_project` VALUES (2,'Women Leadership and Advocacy Program','UMUS is implementing a comprehensive women leadership program in Satkhira district, focusing on developing leadership skills among rural women. This initiative trains women in advocacy, community mobilization, and decision-making processes. Through this program, we are creating a network of empowered women leaders who can champion women\'s rights and address gender-based violence at the grassroots level. The program includes regular training sessions, mentorship opportunities, and platform building for women to participate in local governance.','3928750project.jpg','2026-02-17 15:20:06','2026-02-17 15:20:06'),(3,'Sustainable Livelihood and Skill Development','This ongoing project provides vocational training and livelihood support to economically disadvantaged women in northern Bangladesh, particularly in char areas. UMUS offers technical skills training in tailoring, handicrafts, food processing, and small business management. Participants receive interest-free loans or grants to start their own enterprises. We also facilitate market linkages to ensure sustainable income generation. The project has enabled hundreds of women to achieve financial independence and contribute to their household economies.','5972211project.jpg','2026-02-17 15:20:06','2026-02-17 15:20:06'),(4,'Gender-Based Violence Prevention and Response','UMUS is working intensively to eradicate gender-based violence through awareness campaigns, community sensitization, and support services for survivors. This project operates at community, sub-district, and district levels, engaging stakeholders including policy makers, local government representatives, religious leaders, and media. We provide legal aid, counseling, and safe spaces for survivors. The program also conducts training for law enforcement and service providers to improve response mechanisms.','6351140project.jpg','2026-02-17 15:20:06','2026-02-17 15:20:06'),(5,'Community Health and Nutrition Initiative','This project focuses on improving maternal and child health outcomes in underserved areas of Satkhira district. UMUS provides health education, nutrition counseling, and facilitates access to government health services. We train community health workers and establish mother support groups. The initiative also addresses reproductive health rights and family planning awareness. Regular health camps and screening programs are organized to ensure preventive healthcare reaches vulnerable populations.','9402508project.jpg','2026-02-17 15:20:06','2026-02-17 15:20:06');
/*!40000 ALTER TABLE `ongoing_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (1,'ActionAid Bangladesh','partner1.png','2026-02-17 15:22:15','2026-02-17 15:22:15'),(2,'UN Women Bangladesh','partner2.png','2026-02-17 15:22:15','2026-02-17 15:22:15'),(3,'Oxfam Bangladesh','partner3.png','2026-02-17 15:22:15','2026-02-17 15:22:15'),(4,'BRAC','partner4.png','2026-02-17 15:22:15','2026-02-17 15:22:15'),(5,'Save the Children','partner5.png','2026-02-17 15:22:15','2026-02-17 15:22:15'),(6,'Care Bangladesh','partner6.png','2026-02-17 15:22:15','2026-02-17 15:22:15');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_methods` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_details` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `display_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_methods`
--

LOCK TABLES `payment_methods` WRITE;
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
INSERT INTO `payment_methods` VALUES (2,'bkash',NULL,'Personal','01712-345678',NULL,1,1,'2026-02-17 13:47:37','2026-02-17 13:47:37'),(3,'nagad',NULL,'Personal','01812-345678',NULL,1,2,'2026-02-17 13:47:37','2026-02-17 13:47:37'),(4,'rocket',NULL,'Personal','01912-345678',NULL,1,3,'2026-02-17 13:47:37','2026-02-17 13:47:37'),(5,'upay',NULL,'Personal','01512-345678',NULL,1,4,'2026-02-17 13:47:37','2026-02-17 13:47:37');
/*!40000 ALTER TABLE `payment_methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policy_guideline`
--

DROP TABLE IF EXISTS `policy_guideline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `policy_guideline` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policy_guideline`
--

LOCK TABLES `policy_guideline` WRITE;
/*!40000 ALTER TABLE `policy_guideline` DISABLE KEYS */;
/*!40000 ALTER TABLE `policy_guideline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `status` enum('active','completed','upcoming') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (1,'SUChWONA - Securing Underprivileged Children & Women from Obstacles by Nurturing Activists','A comprehensive program focused on strengthening social security of Dalit women and girls in Assasuni, Satkhira. The project works on multiple fronts including healthcare access, legal support, educational opportunities, skill development, income generation activities, and leadership training. Implemented with support from Women\'s Voice and Leadership Bangladesh (WVLB) and Manusher Jonno Foundation (MJF).\n\nKey Objectives:\n• Increase access to essential services (healthcare, legal aid, education)\n• Provide quality training on management, skills development, and networking\n• Promote gender equality and combat discrimination against women\n• Deliver income-generating activities (IGA) training and financial management support\n• Build leadership capacity among Dalit women activists\n\nTarget Areas: Assasuni and Tala Upazilas, Satkhira\nBudget: ৳94,59,952\nPartners: WVLB, MJF, Christian Aid, Nagorik Uddyog','program-suchwona.jpg','2019-02-25','active','2026-02-15 04:31:09','2026-02-15 04:31:09'),(2,'Adolescent Girls Empowerment through Sports','An innovative program using sports as a tool for empowerment of adolescent girls in rural Satkhira. The program organizes inter-school sports competitions, particularly football, to build confidence, leadership skills, and physical fitness among teenage girls. Through sports activities, girls develop teamwork, confidence, and learn about their rights.\n\nActivities include:\n• Inter-school friendly football matches\n• Sports training sessions for girls\n• Gender awareness sessions alongside sports\n• Life skills development through sports\n• Building safe spaces for girls in schools\n\nThe program has been successfully implemented in multiple schools in Assasuni with support from Manusher Jonno Foundation.','program-sports.jpg','2023-01-01','active','2026-02-15 04:31:09','2026-02-15 04:31:09'),(3,'Livelihood Support for Vulnerable Households','This program provides sustainable livelihood support to vulnerable households, particularly those headed by women, in Tala and Assasuni. The initiative includes skills training, small business support, asset transfers, and market linkages to help families achieve economic independence.\n\nProgram Components:\n• Vocational skills training (tailoring, handicrafts, small business)\n• Small grants for income-generating activities\n• Market access and linkage support\n• Financial literacy and management training\n• Formation of self-help groups\n\nThe program aims to reduce poverty and build resilience among marginalized families.','program-livelihood.jpg','2020-06-01','active','2026-02-15 04:31:09','2026-02-15 04:31:09'),(4,'Education Support for Dalit Children','Focused on ensuring educational access and quality learning for children from Dalit communities. The program provides educational materials, tutoring support, scholarships, and works with schools to create discrimination-free learning environments.\n\nKey Activities:\n• School enrollment drives in Dalit communities\n• Distribution of educational materials and supplies\n• After-school tutoring and mentoring programs\n• Scholarships for underprivileged students\n• Awareness campaigns against discrimination in schools\n• Parent engagement programs\n\nThis program ensures that Dalit children can access their right to quality education without facing discrimination.','program-education.jpg','2018-03-01','active','2026-02-15 04:31:09','2026-02-15 04:31:09'),(5,'Legal Aid and Rights Awareness','Provides legal support and rights awareness to marginalized communities, particularly Dalit women and children. The program offers legal counseling, assistance in accessing justice, and conducts awareness campaigns about fundamental rights and legal protections.\n\nServices Include:\n• Free legal counseling and advice\n• Assistance in filing cases and accessing courts\n• Mediation and alternative dispute resolution\n• Rights awareness training sessions\n• Advocacy for policy change\n• Collaboration with local legal aid providers\n\nThe program empowers community members to claim their rights and access justice.','program-legal.jpg','2019-09-01','active','2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partners` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Women Empowerment and Livelihood Development','ActionAid Bangladesh','2020-01-01','2022-12-31','2026-02-17 15:19:34','2026-02-17 15:19:34'),(2,'Gender-Based Violence Prevention Program','UN Women Bangladesh','2019-06-01','2021-12-31','2026-02-17 15:19:34','2026-02-17 15:19:34'),(3,'Community Resilience and Climate Adaptation','Oxfam Bangladesh','2018-03-01','2020-12-31','2026-02-17 15:19:34','2026-02-17 15:19:34'),(4,'Skills Training for Women Entrepreneurs','BRAC','2021-04-01','2023-06-30','2026-02-17 15:19:34','2026-02-17 15:19:34'),(5,'Healthcare Access for Rural Women','Save the Children','2017-09-01','2019-08-31','2026-02-17 15:19:34','2026-02-17 15:19:34');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
INSERT INTO `publications` VALUES (1,'Annual Report 2024','Comprehensive annual report documenting UMUS activities, achievements, financial statements, and impact throughout 2024. Includes detailed program reports, beneficiary statistics, success stories, and audited financial information.','publication-annual-2024.jpg','UMUS-Annual-Report-2024.pdf','2026-02-15 04:31:09','2026-02-15 04:31:09'),(2,'Dalit Women Rights Advocacy Manual','A practical guide for community activists and field workers on advocating for Dalit women\'s rights. Covers legal frameworks, advocacy strategies, case documentation, and success stories from UMUS programs.','publication-advocacy-manual.jpg','Dalit-Women-Rights-Manual.pdf','2026-02-15 04:31:09','2026-02-15 04:31:09'),(3,'SUChWONA Project Case Study','Detailed case study documenting the SUChWONA project implementation, methodology, challenges, achievements, and lessons learned. Includes quantitative and qualitative data on project impact.','publication-suchwona-case.jpg','SUChWONA-Case-Study.pdf','2026-02-15 04:31:09','2026-02-15 04:31:09'),(4,'Community Newsletter - January 2026','Monthly newsletter featuring recent activities, upcoming events, beneficiary stories, and news from UMUS programs across Satkhira.','publication-newsletter-jan2026.jpg','UMUS-Newsletter-Jan-2026.pdf','2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slider` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider`
--

LOCK TABLES `slider` WRITE;
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` VALUES (2,'Empowering Women, Transforming Communities','Uddipto Mohila Unnoyon Sangstha is dedicated to women empowerment and community development through sustainable initiatives and social protection programs.','7509991slider.jpeg','2026-02-17 13:58:50','2026-02-17 13:58:50'),(3,'Creating a Violence-Free Society','Working together to eradicate gender-based violence and ensure equal rights and opportunities for women at all levels of society.','8163422slider.jpg','2026-02-17 13:58:50','2026-02-17 13:58:50'),(4,'Building Sustainable Livelihoods','Providing skills training, financial support, and market linkages to empower women and youth for economic independence and social change.','8402279slider.jpg','2026-02-17 13:58:50','2026-02-17 13:58:50');
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stories`
--

DROP TABLE IF EXISTS `stories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `rating` int NOT NULL DEFAULT '5',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stories`
--

LOCK TABLES `stories` WRITE;
/*!40000 ALTER TABLE `stories` DISABLE KEYS */;
INSERT INTO `stories` VALUES (1,5,'From Discrimination to Empowerment: Rina\'s Journey\n\nRina Das (name changed), a young Dalit woman from Assasuni, faced severe discrimination in accessing healthcare services. Through UMUS\'s SUChWONA project, she received training on health rights and was connected with local health facilities. Today, Rina not only accesses healthcare without discrimination but has also become a community health advocate, helping other women understand their rights. She has organized 15 awareness sessions in her village, reaching over 200 women. Her transformation from a marginalized individual to a community leader exemplifies the impact of rights-based empowerment.','story-rina.jpg','Rina Das','Community Health Advocate','2024-11-15','2026-02-15 04:31:09','2026-02-15 04:31:09'),(2,5,'Breaking Barriers: Maya\'s Educational Success\n\nMaya Rani (name changed), 14, was on the verge of dropping out of school due to poverty and social pressure. Her family, from a Dalit community in Tala, couldn\'t afford educational expenses. UMUS\'s education support program provided her with school supplies, tuition support, and mentoring. Maya not only continued her education but also excelled academically, securing top position in her class. She recently passed her SSC examination with distinction. Maya now dreams of becoming a teacher to help other children from her community. Her story shows how timely support can change lives and break intergenerational cycles of poverty.','story-maya.jpg','Maya Rani','SSC Top Score Student','2025-03-20','2026-02-15 04:31:09','2026-02-15 04:31:09'),(3,5,'Economic Independence: Shefali\'s Small Business\n\nShefali Sarkar (name changed), a widow with three children, struggled to make ends meet through irregular daily labor. Through UMUS\'s livelihood program, she received training in tailoring and a small grant to start her business. With dedication and the skills learned, Shefali now runs a successful tailoring shop in her village. She earns a stable income, has sent her children to school, and employs two other women from her community. Shefali\'s business has grown to the point where she has started saving money and planning for her children\'s higher education. Her success has inspired five other women in her village to start their own small businesses.','story-shefali.jpg','Shefali Sarkar','Entrepreneur & Tailor','2025-08-10','2026-02-15 04:31:09','2026-02-15 04:31:09'),(4,5,'Sports Champion: Priya\'s Football Journey\n\nPriya (name changed), 16, never imagined she could play football. Growing up in a conservative family in Assasuni, she faced restrictions on outdoor activities. When UMUS organized an inter-school football program, Priya\'s school teacher encouraged her to participate. Initially hesitant, Priya joined and discovered her passion for the sport. Through regular practice and coaching provided by UMUS, she became captain of her school team. The confidence she gained through sports has transformed her personality. She now speaks confidently in public, has taken leadership roles in her school, and advocates for girls\' rights in sports. Her family, initially reluctant, now proudly supports her aspirations to pursue sports professionally.','story-priya.jpg','Priya','School Football Team Captain','2023-12-05','2026-02-15 04:31:09','2026-02-15 04:31:09'),(5,5,'Getting incentives from UMUS.','11866story.jpg','Nahin','Agri Buisness',NULL,NULL,NULL);
/*!40000 ALTER TABLE `stories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `strategic_plans`
--

DROP TABLE IF EXISTS `strategic_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `strategic_plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strategic_plans`
--

LOCK TABLES `strategic_plans` WRITE;
/*!40000 ALTER TABLE `strategic_plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `strategic_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribe` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscribe_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribe`
--

LOCK TABLES `subscribe` WRITE;
/*!40000 ALTER TABLE `subscribe` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscribe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_members`
--

LOCK TABLES `team_members` WRITE;
/*!40000 ALTER TABLE `team_members` DISABLE KEYS */;
INSERT INTO `team_members` VALUES (1,'Tirtha De','Program Officer','team-tirtha.jpg','Programs','Coordinates program implementation and monitoring across all UMUS projects in Satkhira.',NULL,NULL,NULL,NULL,1,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(2,'Salma Parvin','Project Coordinator','team-salma.jpg','Projects','Manages SUChWONA project activities and beneficiary engagement in Assasuni and Tala.',NULL,NULL,NULL,NULL,2,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(3,'Moni Shankar','Accounts Officer','team-moni.jpg','Finance','Handles financial management, budgeting, and reporting for all UMUS programs.',NULL,NULL,NULL,NULL,3,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(4,'Dharmacharan Das','Field Officer','team-dharma.jpg','Field Operations','Works directly with communities to implement programs and support beneficiaries.',NULL,NULL,NULL,NULL,4,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(5,'Shiuli Rani Sarkar','Program Assistant','team-shiuli.jpg','Programs','Supports program activities and maintains documentation for UMUS initiatives.',NULL,NULL,NULL,NULL,5,'2026-02-15 04:31:09','2026-02-15 04:31:09'),(6,'Rakibul Islam','Communications Officer','team-rakib.jpg','Communications','Manages UMUS communications, social media, and community outreach activities.',NULL,NULL,NULL,NULL,6,'2026-02-15 04:31:09','2026-02-15 04:31:09');
/*!40000 ALTER TABLE `team_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','mamaruf317@gmail.com',NULL,'$2y$10$CIF6yRw3v62XpQG/zTIrUuhnJjq965aJI6M0Hq77L5XcyprSvzyz2',1,NULL,'2026-02-15 01:29:29','2026-02-15 01:29:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteer_registrations`
--

DROP TABLE IF EXISTS `volunteer_registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `volunteer_registrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci,
  `why_volunteer` text COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer_registrations`
--

LOCK TABLES `volunteer_registrations` WRITE;
/*!40000 ALTER TABLE `volunteer_registrations` DISABLE KEYS */;
INSERT INTO `volunteer_registrations` VALUES (1,'Israt Mohammad Nahin','nahin.nahin111@gmail.com','01997900840','ss','awsx','wsx','pending','2026-02-17 08:09:58','2026-02-17 08:09:58'),(2,'Test Volunteer','test@example.com','01712345678','Dhaka, Bangladesh','Community organizing, training facilitation','I want to contribute to women empowerment initiatives','pending','2026-02-17 15:14:33','2026-02-17 15:14:33'),(3,'Israt Mohammad Nahin','nahin.nahin111@gmail.com','44','3','e','e','pending','2026-02-21 12:55:53','2026-02-21 12:55:53');
/*!40000 ALTER TABLE `volunteer_registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `volunteers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('open','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteers`
--

LOCK TABLES `volunteers` WRITE;
/*!40000 ALTER TABLE `volunteers` DISABLE KEYS */;
INSERT INTO `volunteers` VALUES (1,'Community Mobilizer','Join our team to mobilize and engage with Dalit communities. Help raise awareness about women\'s rights, social justice, and available support programs. Work directly with marginalized families to connect them with resources and services.','Strong communication skills, Ability to work with rural communities, Knowledge of local language, Commitment to social justice, Willingness to travel to field locations','Dinajpur and surrounding districts','open','2026-02-17 13:21:06','2026-02-17 13:21:06'),(2,'Education Support Volunteer','Support our education program by assisting children from marginalized backgrounds with their studies. Help with tutoring, homework assistance, and creating engaging learning activities for students aged 6-16 years.','Minimum HSC qualification, Patient and friendly with children, Good knowledge of basic subjects, Ability to work 3-4 hours per week, Passion for education','UMUS Office, Dinajpur','open','2026-02-17 13:21:06','2026-02-17 13:21:06'),(3,'Women\'s Rights Advocate','Advocate for Dalit women\'s rights through awareness campaigns and community programs. Assist in organizing training sessions, workshops, and support groups for women empowerment and leadership development.','Understanding of gender issues and women\'s rights, Good presentation skills, Ability to facilitate group discussions, Commitment to women\'s empowerment, Flexibility to attend weekend programs','Multiple locations in Dinajpur','open','2026-02-17 13:21:06','2026-02-17 13:21:06'),(4,'Legal Support Assistant','Assist our legal aid program by helping women access justice. Support includes documentation, filing applications, accompanying women to legal proceedings, and coordinating with lawyers and authorities.','Basic understanding of legal procedures, Good organizational skills, Ability to maintain confidentiality, Empathy and patience, Computer literacy for documentation','Dinajpur District Court area','open','2026-02-17 13:21:06','2026-02-17 13:21:06'),(5,'Health & Nutrition Educator','Promote health awareness and nutrition education among women and children in rural communities. Conduct health camps, distribute information materials, and organize hygiene and nutrition workshops.','Background in health/nutrition (preferred), Ability to explain concepts simply, Willing to work in rural areas, Good rapport with community members, Flexible schedule','Rural villages in Dinajpur','open','2026-02-17 13:21:06','2026-02-17 13:21:06');
/*!40000 ALTER TABLE `volunteers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-02-24  6:19:29
