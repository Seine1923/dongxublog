-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: dxdb
-- ------------------------------------------------------
-- Server version	5.7.12-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` int(11) NOT NULL,
  `time` date DEFAULT NULL,
  `author` varchar(40) NOT NULL,
  `top_level` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (9,'人间天堂-抚仙湖','<p>抚仙湖，因湖水清澈见底、晶莹剔透，被古人称为“琉璃万顷”。是中国最大的深水型淡水湖泊，珠江源头第一大湖，属南盘江水系，位于云南省玉溪市澄江、江川、华宁三县间，距昆明70多公里。抚仙湖是一个南北向的断层溶蚀湖泊，形如倒置葫芦状，两端大、中间小，北部宽而深，南部窄而浅，中呈喉扼形。湖面海拔高度为1722.5米，湖面积216.6平方公里，湖容积为206.2亿立方米，湖水平均深度为95.2米，最深处有158.9米，蓄水量是滇池的12倍，洱海的6倍，太湖的4.5倍，占云南九大高原湖泊总蓄水量的72.8%，占全国淡水湖泊蓄水量的9.16%。抚仙湖水质为I类，是国家一类饮用水源地，也是我国水质最好的天然湖泊之一。2013年12月通过了财政部、环境保护部组织的2013年江河湖泊生态环境保护工作，被纳入国家15个重点湖泊支持范围。</p><p><img src=\"/frontend/web/uploads/1/37db6bb5f1-jellyfish.jpg\"></p>',10,'2016-05-22','Hary',0),(10,'泸沽湖-最美不过你','泸沽湖，位于四川省盐源县与云南省宁蒗县交界处，为川滇共辖。湖东为盐源县泸沽湖镇（原左所区），湖西为宁蒗县永宁乡。该湖俗称左所海，古名勒得海、鲁枯湖，湖面海拔2685米，湖泊最长9.5公里，宽7.5公里，最大水深70米，平均水深40米，面积49.5平方公里，蓄水9.5亿立方米。[1] \r\n泸沽湖属高原断层溶蚀陷落湖泊，由一个西北东南向的断层和两个东西向的断层共同构成。\r\n泸沽湖属长江上游干流金沙江支流雅砻江支流理塘河水系。泸沽湖入湖河流共18条（云南部分11条，四川 部分7条），湖水经东侧的大草海注入盐源县境内前所河，再注入盖祖河（下游称永宁河），再注入卧龙河（又名卧落河、盐源河），入流理塘河，最后排入长江上游干流段金沙江的支流雅砻江。[2] ',0,'2016-06-01','Hary',0),(11,'强突发事件、公共安全、重大疫情等信息发布','<h1>每一项重大的突发事件，其实都是考验各级干部的时刻。其中的重要一项，是“舆情”。</h1><p style=\"text-align: center;\"><img src=\"http://localhost:8080/backend/web/uploads/1/88fee04213-desert.jpg\"></p><p><img src=\"http://localhost:8080/backend/web/uploads/guest/a952ddeda0-lighthouse.jpg\"></p><p><strong>舆情热烈，说明广大人民群众对事件的关注度高。由此，舆论引导就成为重要的一项工作。这讲究技术，也讲究艺术。舆论引导得当与否，经常影响一地、一部门乃至全局的工作和形象。近年来，应对舆情不力、不当的事情也时有发生。</strong></p><p><em>但归根结底，舆论不一定是“引导”出来的。问题的推进、解决，才是真正的”引导“。</em></p><p><del>今年年初，中共中央办公厅下发了名为《关于全面推进政务公开工作的意见》的文件。其中提到，要加强突发事件的信息发布，负责处置的地方和部门是第一责任人，根据处置进展动态发布信息，回应社会关切；习近平总书记在今年2月召开党的新闻舆论工作座谈会时也指出，要直面工作中存在的问题，同时发表批评性报道要事实准确、分析客观。</del></p><ul><li>分享这两篇文字中的精要部分，供大家学习。</li><li>新闻舆论要讲究时度效</li></ul><p>团结稳定鼓劲、正面宣传为主，是党的新闻舆论工作必须遵循的基本方针。做好正面宣传，要增强吸引力和感染力。真实性是新闻的生命。要根据事实来描述事实，既准确报道个别事实，又从宏观上把握和反映事件或事物的全貌。舆论监督和正面宣传是统一的。新闻媒体要直面工作中存在的问题，直面社会丑恶现象，激浊扬清、针砭时弊，同时发表批评性报道要事实准确、分析客观。</p><ol><li>随着形势发展，党的新闻舆论工作必须创新理念、内容、体裁、形式、方法、手段、业态、体制、机制，增强针对性和实效性。要适应分众化、差异化传播趋势，加快构建舆论引导新格局。要推动融合发展，主动借助新媒体传播优势。要抓住时机、把握节奏、讲究策略，从时度效着力，体现时度效要求。</li><li>——习近平，在党的新闻舆论工作座谈会上的讲话</li></ol><p>快速及时回应社会关切</p><p><img><a href=\"http://www.baidu.com/\" target=\"_blank\">baidu</a></p><pre>加强突发事件、公共安全、重大疫情等信息发布，负责处置的地方和部门是信息发布第一责任人，要快速反应、及时发声，根据处置进展动态发布信息。 </pre><p><a href=\"http://localhost:8080/backend/web/uploads/guest/2bd9cae0be-5.docx\">毕业生质量.docx</a></p>',10,'2014-01-24','Xi',0);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-24 14:17:49
