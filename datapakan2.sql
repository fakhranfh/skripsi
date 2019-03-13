-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 06:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapakan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_pakans`
--

CREATE TABLE `bahan_pakans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BK` double(8,3) NOT NULL DEFAULT '0.000',
  `PK` double(8,3) NOT NULL DEFAULT '0.000',
  `TDN` double(8,3) NOT NULL DEFAULT '0.000',
  `Ca` double(8,3) NOT NULL DEFAULT '0.000',
  `P` double(8,3) NOT NULL DEFAULT '0.000',
  `Fe` double(8,3) NOT NULL DEFAULT '0.000',
  `Mg` double(8,3) NOT NULL DEFAULT '0.000',
  `Mn` double(8,3) NOT NULL DEFAULT '0.000',
  `K` double(8,3) NOT NULL DEFAULT '0.000',
  `Zn` double(8,3) NOT NULL DEFAULT '0.000',
  `carrier` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahan_pakans`
--

INSERT INTO `bahan_pakans` (`id`, `nama`, `BK`, `PK`, `TDN`, `Ca`, `P`, `Fe`, `Mg`, `Mn`, `K`, `Zn`, `carrier`, `created_at`, `updated_at`) VALUES
(1, 'Jerami Padi', 87.500, 4.150, 43.500, 0.413, 0.292, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(2, 'Daun Lamtoro', 24.500, 24.200, 74.400, 1.680, 0.210, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(3, 'Daun Jagung', 21.000, 9.920, 60.000, 1.240, 0.234, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(4, 'Rumput Lapang', 24.400, 8.200, 56.200, 0.366, 0.230, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(5, 'Rumput Gajah', 22.200, 8.690, 52.400, 0.475, 0.347, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(6, 'Daun Singkong', 21.600, 24.100, 61.800, 1.540, 0.457, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(7, 'Onggok', 79.800, 1.870, 78.300, 0.260, 0.160, 0.000, 0.000, 0.000, 0.000, 0.000, 1, NULL, NULL),
(8, 'Tetes', 82.400, 3.940, 70.700, 0.882, 0.141, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(9, 'Dedak jagung', 87.800, 10.000, 82.300, 0.086, 1.390, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(10, 'Bekatul', 88.000, 12.800, 69.900, 0.079, 1.230, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(11, 'Dedak Halus', 87.700, 13.000, 67.900, 0.086, 1.390, 0.000, 0.000, 0.000, 0.000, 0.000, 1, NULL, NULL),
(12, 'Bungkil Kleapa Sawit', 90.300, 16.800, 79.000, 0.165, 0.616, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(13, 'Ampas Bir Kering', 94.600, 32.300, 75.400, 0.205, 0.555, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(14, 'Bungkil Biji Kapuk', 83.900, 29.600, 73.700, 0.519, 0.582, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(15, 'Ampas Kecap', 26.600, 23.500, 87.200, 0.882, 0.141, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(16, 'Bungkil Kleapa', 88.600, 21.300, 78.700, 0.165, 0.616, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(17, 'Pollard', 88.500, 18.500, 69.200, 0.231, 1.100, 0.000, 0.000, 0.000, 0.000, 0.000, 1, NULL, NULL),
(18, 'Gaplek', 79.500, 2.600, 78.500, 0.170, 0.090, 0.000, 0.000, 0.000, 0.000, 0.000, 1, NULL, NULL),
(19, 'Jagung', 86.800, 10.800, 80.800, 0.234, 0.414, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(20, 'Bungkil Kacang Tanah', 90.200, 45.100, 80.900, 0.519, 0.582, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(21, 'Ampas Tahu', 14.600, 30.300, 77.900, 0.882, 0.141, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(22, 'Bungkil Kedelai', 88.100, 46.900, 83.200, 0.376, 0.718, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL),
(23, 'Kedelai', 89.500, 41.200, 92.800, 0.390, 0.839, 0.000, 0.000, 0.000, 0.000, 0.000, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contoh_premixes`
--

CREATE TABLE `contoh_premixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contoh_premixes`
--

INSERT INTO `contoh_premixes` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Sapi Potong', NULL, NULL),
(2, 'Sapi Perah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_minerals`
--

CREATE TABLE `jenis_minerals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan` longtext COLLATE utf8mb4_unicode_ci,
  `fungsi` longtext COLLATE utf8mb4_unicode_ci,
  `defisiensi` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_minerals`
--

INSERT INTO `jenis_minerals` (`id`, `nama`, `foto`, `penjelasan`, `fungsi`, `defisiensi`, `created_at`, `updated_at`) VALUES
(1, 'Calsium (Ca)', 'calsium.jpg', 'Kalsium Karbonat atau CaCO3 adalah sumber mineral kalsium (Ca) yang memiliki tingkat kemurnian yang lebih baik dibandingkan dengan kapur. CaCO3 umumnya terbuat dari kapur yang telah dimurnikan, sehingga ketersediaan kalsiumnya lebih tinggi dibandingkan kapur atau sumber mineral lainnya seperti tepung kerang, tepung tulang dan sejenisnya. Sepeti halnya penggunaan kapur, batas penggunaan CaCO3 pada sapi perah adalah sekitar 2%', '1.Pembentukan tulang dan gigi.\r\n2.Kalsium dalam tulang berguna sebagai bagian integral dari struktur tulang dansebagai tempat menyimpan kalsium.\r\n3.Mengatur pembekuan darah.\r\n4.Katalisator reaksi biologi, seperti absorpsi vitamin B12, tindakan enzim pemecah lemak, lipase pancreas, eksresi insulin oleh pancreas, pembentukandan pemecahan asetilkolin.\r\n5.Relaksasi dan Kontraksi otot, dengan interaksi protein yaitu aktin dan myosin.\r\n6.Berperan dalam fungsi saraf, tekanan darah dan fungsi kekebalan.\r\n7.Meningkatkan fungsi transport membran sel, stabilisator membrane, dantransmisi ion melalui membrane organel sel.\r\n', 'Defisiensi kalsium jarang menimbulkan masalah pada ternak yang digembalakan. Hal ini dapat dimengerti karena kebanyakan spesies tanaman secara normal mengandung kadar kalsium tinggi, kekurangan kalsium dalam tanah jarang terjadi, kadar kalsium tidak berkurang walaupun tanaman tersebut semakin tua. Meskipun demikian defisiensi kalsium terjadi pada sapi perah yang berproduksi tinggi, dimana kebutuhan akan kalsium sangat meningkat sedangkan kalsium yang masuk melalui penyerapan tidak mencukupi (Undenvood, 1981). Jika ransum ternak pada masa pertumbuhan defisien Ca maka pembentukan tulang menjadi kurang sempurna dan akan mengakibatkan gejala penyakit tulang dan milk fever (Piliang, 2002) .', NULL, NULL),
(2, 'Natrium(Na) ', 'natrium.jpg', 'Natrium merupakan kation utama dalam cairan ekstraseluler, 35-40 %terdapat dalam kerangka tubuh. Cairan saluran cerna, sama seperti cairan empedudan pancreas mengandung banyak natrium.Sumber utama Natrium adalah garam dapur (NaCl). Sumber natrium yanglain berupa monosodium glutamate (MSG), kecap dan makanan yang diawetkandengan garam dapur. Makanan yang belum diolah, sayur dan buah mengandungsedikit natrium.', 'a) Menjaga keseimbangan cairan dalam kompartemen ekstraseluer. \r\nb) Mengatur tekanan osmosis yang menjaga cairan tidak keluar dari darah danmasuk ke dalam sel.\r\nc) Menjaga keseimbangan asam basa dalam tubuh dengan mengimbangi zat-zatyang membentuk asam.\r\nd) Berperan dalam transmisi saraf dan kontraksi otot.\r\ne) Berperan dalam absorbsi glukosa dan sebagai alat angkut zat gizi lain melaluimembrane, terutama melalui dinding usus sebagai pompa natrium.\r\n', 'Defesiensi Na dapat menyebabkan kejang, apatis dan kehilangan nafsu makan yang dapat terjadi setelah muntah, diare, ternak kehilangan bobot badan dan anorexsia (McDowell, 1992) .', NULL, NULL),
(3, 'Klorida(Cl) ', 'klorida.jpg', 'Klor merupakan anion utama cairan ekstraselular. Konsentrasi klortertinggi adalah dalam cairan serebrospinal (otak dan sumsum tulang belakang),lambung dan pancreas. Klor terdapat bersamaan dengan natrium dalam garamdapur. Beberapa sayuran dan buah juga mengandung klor', 'a)Berperan dalam memelihara keseimbangan cairan dan elektrolit dalam cairanekstraseluler. \r\nb)Memelihara suasana asam dalam lambung sebagai bagian dari HCL, yangdiperlukan untuk bekerjanya enzim-enzim pencernaan.\r\nc)Membantu pemeliharaan keseimbangan asam dan basa bersama unsur-unsur pembentuk asam lainnya.\r\nd)Ion klor dapat dengan mudah keluar dari sel darah merah dan masuk ke dalam plasma darah guna membantu mengangkut karbondioksida ke paru-paru dankeluar dari tubuh.\r\ne)Mengatur system rennin-angiotensin-aldosteron yang mengatur keseimbangancairan tubuh.\r\n', 'Defesiensi Klor dapat menyebabkan diare kronis, muntah muntah, menurunkan nafsu makan, jalan ternak terlihat kaku, menjilat tanah, lemah/lesu, menggigil, kehilangan keseimbangan, gangguan sistem otot dan saraf dan kematian mendadak (Sudarmo, 2008).', NULL, NULL),
(4, 'Kalium (K)', 'kalium.jpg', 'Kalium merupakan ion yang bermuatan positif dan terdapat di dalam seldan cairan intraseluler. Kalium berasal dari tumbuh-tumbuhan dan hewan.Sumber utama adalah makanan segar atau mentah, terutama buah, sayuran dankacang-kacangan', 'a)Berperan dalam pemeliharaan keseimbangan cairan dan elektrolit sertakeseimbangan asam dan basa bersama natrium. \r\nb)Bersama kalsium, kalium berperan dalam transmisi saraf dan kontraksi otot.\r\nc)Di dalam sel, kalium berfungsi sebagai katalisator dalam banyak reaksi biologi, terutama metabolisme energi dan sintesis glikogen dan protein.\r\nd)Berperan dalam pertumbuhan sel.\r\n', 'Defesiensi Kalium dapat menyebabkan lesu, lemah,kehilangan nafsu makan, kelumpuhan, dankonstipasi, kerusakan jantung, nafsu makan turun dan pertumbuhan bulu kasar', NULL, NULL),
(5, 'Fosfor (P)', 'fosfor.jpg', 'Fosfor merupakan mineral kedua terbanyak dalam tubuh, sekitar 1 % dari berat badan. Fosfor terdapat pada tulang dan gigi serta dalam sel yaitu otot dancairan ekstraseluler. Fosfor merupakan bagian dari asam nukleat DNA dan RNA.Sebagai fosfolipid, fosfor merupakan komponen structural dinding sel. Sebagaifosfat organic, fosfor berperan dalam reaksi yang berkaitan dengan penyimpananatau pelepasan energi dalam bentuk Adenin Trifosfat (ATP). Fosfor terdapat padasemua sel mahluk hidup, terutama makanan kaya protein, seperti daging, ayam,ikan, telur, susu dan hasilnya, kacang-kacangan serta serealia.', '1.Kalsifikasi tulang dan gigi melalui pengendapan fosfor pada matriks tulang.\r\n2.Mengatur peralihan energi pada metabolisme karbohidrat, protein dan lemakmelalui proses fosforilasi fosfor dengan mengaktifkan berbagai enzim danvitamin B.\r\n3.Absorpsi dan transportasi zat gizi serta system buffer.\r\n4.Bagian dari ikatan tubuh esensial yaitu RNA dan DNA serta ATP danfosfolipid.\r\n5.Mengatur keseimbangan asam basa.\r\n', 'Defesiensi P dapat menyebabkan persendian kaku dan otot menjadi lembek. Ransum yang memiliki rendahnya kandungan P dapat menurunkan kesuburan , indung telur tidak berfungsi normal dan estrus tidak teratur. Kekurangan P juga dapat mengakibatkan pertumbuhan dan perkembangan terhambat serta menekan nafsu makan. Pemberian pakan menggunakan campuran rumput dan legume ( kacang-kacangan) akan mengurangi kemungkinan kekurangan P (McDowell, 1992).', NULL, NULL),
(6, 'Magnesium (Mg)', 'mg.jpg', 'Magnesium merupakan bagian dari klorofil daun. Peranan magnesiumdalam tumbuh-tumbuhan sama dengan peranan zat besi dalam ikatan hemoglobindalam darah hewan yaitu untuk pernafasan. Magnesium terlibat dalam berbagai proses metabolisme. Magnesium terdapat dalam tulang dan gigi, otot, jaringanlunak dan cairan tubuh lainnya. Sumber utama magnesium adalah sayur hijau,serealia tumbuk, biji-bijian dan kacang-kacangan. Daging dan susu merupakansumber magnesium yang baik', '1.Magnesium berperan penting dalam sistem enzim dalam tubuh.\r\n2.Berperan sebagai katalisator dalam reaksi biologi, termasuk metabolismeenergi, karbohidrat, lipid, protein dan asam nukleat, serta dalam sintesis,degradasi, dan stabilitas bahan gen DNA di dalam semua sel jaringan lunak.\r\n3.Di dalam sel ekstraselular, magnesium berperan dalam transmisi saraf,kontraksi otot dan pembekuan darah. Dalam hal ini magnesium berlawanandengan kalsium.\r\n4.Magnesium mencegah kerusakan gigi dengan cara menahan kalsium dalamemail gigi.\r\n', 'Defisiensi Mg dapat meningkatkan iritabilitas urat daging serta jika semakin parah akan menyebabkan tetany (Linder, 1992). Defesiensi Mg pada sapi laktasi dapat menyebabkan hypomagnesemic tetany atau grass tetany. Keadaan ini disebabkan tidak xukupnya Mg dalam cairan ekstracellular, yaitu plasma dan cairan interstitial (National Research council, 1989). Kekurangan magnesium berat akan menyebabkan kurang nafsu makan, gangguan pertumbuhan, kejang, gangguan sistem saraf pusar,koma dan gagal jantung. ', NULL, NULL),
(7, 'Sulfur(S)', 's.jpg', 'Sulfur merupakan bagian dari zat-zat gizi esensial, seperti vitamin tiamnindan biotin serta asam amino metionin dan sistein. Sulfur terdapat dalam tulangrawan, kulit, rambut dan kuku yang banyak mengandung jaringan ikat yang bersifat kaku. Sumber sulfur adalah makanan yang mengandung berprotein.', 'a)Sulfur berasal dari makanan yang terikat pada asam amino yang mengandungsulfur yang diperlukan untuk sintesis zat-zat penting.Sulfur berasal dari makanan yang terikat pada asam amino yangmengandung sulfur yang diperlukan untuk sintesis zat-zat penting. \r\nb)Berperan dalam reaksi oksidasi-reduksi, bagian dari tiamin, biotin dan hormone insulineserta membantu detoksifikasi. \r\nc)Sulfur juga berperan melarutkan sisa metabolisme sehingga bisa dikeluarkan melalui urin, dalam bentuk teroksidasi dan dihubungkan dengan mukopolisakarida.Sulfur (S) sangat penting dan berperan sebagai penyusun asam aminometionin dan sistein. Asam amino ini sangat berguna bagi ternak. \r\nd)Sulfur juga penting untuk sintesa protein mikroba sehingga keberadaannya sangat dibutuhkan oleh mikroba rumen. \r\n', 'Defisiensi Sulfur dapat mengakibatkan penyakit anorexia, penurunan bobot badan, penurunan produksi susu, lemah dan kematian. Kecukupan sehari hari dapat ditentukan dengan ransum yang diberikan kepada ternak memenuhi kebutuhan protein ternak dan kekurangan sulfur dapat terjadi bila ransum kekurangan protein (McDowell, 1992) .', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_contoh_premixes`
--

CREATE TABLE `list_contoh_premixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_contoh_premix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_premix` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_contoh_premixes`
--

INSERT INTO `list_contoh_premixes` (`id`, `id_contoh_premix`, `id_premix`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '2', NULL, NULL),
(3, '1', '3', NULL, NULL),
(4, '1', '4', NULL, NULL),
(5, '1', '5', NULL, NULL),
(6, '1', '6', NULL, NULL),
(7, '1', '7', NULL, NULL),
(8, '1', '8', NULL, NULL),
(10, '2', '5', NULL, NULL),
(11, '2', '9', NULL, NULL),
(12, '2', '10', NULL, NULL),
(13, '2', '3', NULL, NULL),
(14, '2', '11', NULL, NULL),
(15, '2', '8', NULL, NULL),
(16, '2', '6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_02_065225_create_bahan_pakans_table', 1),
(4, '2018_12_02_065735_create_jenis_minerals_table', 1),
(5, '2018_12_02_070112_create_minerals_table', 1),
(6, '2018_12_16_113044_create_premix_ingreedients_table', 2),
(7, '2018_12_16_113355_create_premix_min_maxes_table', 2),
(11, '2019_03_08_151629_create_contoh_premixes_table', 3),
(12, '2019_03_08_152045_create_premixes_table', 3),
(13, '2019_03_08_153319_create_list_contoh_premixes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `minerals`
--

CREATE TABLE `minerals` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BK` double(8,3) NOT NULL DEFAULT '0.000',
  `PK` double(8,3) NOT NULL DEFAULT '0.000',
  `TDN` double(8,3) NOT NULL DEFAULT '0.000',
  `CA` double(8,3) NOT NULL DEFAULT '0.000',
  `P` double(8,3) NOT NULL DEFAULT '0.000',
  `detail` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `minerals`
--

INSERT INTO `minerals` (`id`, `nama`, `foto`, `BK`, `PK`, `TDN`, `CA`, `P`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Dedak Padi', 'dedak_padi.jpg', 87.700, 13.000, 67.900, 0.086, 1.390, 'Dedak padi merupakan hasil sisa dari penumbukan atau penggilingan gabah padi. Dedak tersusun dari tiga bagian yang masing masing berbedakandungan zatnya. Ketiga bagian tersebut adalah \r\na) Kulit gabah yang banyak mengandung serat kasar dan mineral \r\nb) Selaput perak yang kaya akan protein dan vitamin B1, juga lemak danmineral.\r\nc) Lembaga beras yang sebagian besar terdiri dari karbohidrat yang mudahdicerna.\r\nBahan mineral makro yang terkandung dalam dedak padi adalah kalsium(Ca) 0,20% dan fosfor (P) 1,0 %\r\n', NULL, NULL),
(2, 'Ampas Tahu', 'ampas_tahu.jpg', 14.600, 30.300, 77.900, 0.088, 0.141, 'Ampas tahu dapat disimpan lama bila dikeringkan. Bila basah dibuat Silase tanpa menggunakan stater dan dapat dicampur dengan bahan lain. Disamping memiliki kandungan zat gizi yang baikampas tahu juga memiliki antinutrisi berupa Asam Fitat yang akan mengganggu penyerapan mineral terutama Ca, Zn, Co, Mg, Cu, sehingga penggunaannya pada unggas perlu hati-hati. Kandungan Ca 0.53% dan P 0,24%', NULL, NULL),
(3, 'Tepung Tulang', 'tepung_tulang.jpg', 0.000, 0.000, 0.000, 24.000, 12.000, 'Salah satu sumber mineral makro pakan adalah tepung tulang. Namun, penggunaannya hanya terbatas sebagai pelengkap jika nutrisi dalam komposisi bahan baku yang ada tidak mencukupi.Bahan ini biasanya diimpor dari luar negeri. Penggunaan tepung tulang sudah jarang dilakukan, apalagi sudah banyak sumber mineral sintetis yang diproduksi oleh pabrik pembuat bahan baku pakan maupun farmasi.\r\n', NULL, NULL),
(4, 'Garam', 'garam.jpg', 99.600, 0.000, 0.000, 0.000, 0.000, 'Garam dapur (NaCI) sering digunakan sebagai tambahan untuk mencukupi kebutuhankedua mineral yang dikandungnya, yaitu natrium dan klor. Penggunaannya dibatasi sampai 0,25% saja, karena jika berlebihan akan mengakibatkan prosesekskresi atau pengeluaran cairan kotoran meningkat. Keadaan ini akanmenyebabkan alas litter menjadi sangat lembab dan basah. Akibatnya, akantimbul gangguan penyakit bagi unggas yang dipelihara.\r\n', NULL, NULL),
(5, 'Tepung Ikan', 'tepung_ikan.jpg', 91.900, 55.000, 0.000, 7.190, 2.880, 'Tepung ikan merupakan salah satu bahan baku sumber protein hewani dan mineral yang dibutuhkan dalam komposisi makanan ternak. Tepung ikan adalah produk berkadar air rendah yang di peroleh dari penggilingan ikan. Kandungan proteinnya relatif tinggi tersusun oleh asam-asam amino esensial yang kompleks(methionin dan lysin) dan mineral (Ca dan P, serta vitamin B12). ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premixes`
--

CREATE TABLE `premixes` (
  `id` int(10) UNSIGNED NOT NULL,
  `senyawa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premixes`
--

INSERT INTO `premixes` (`id`, `senyawa`, `created_at`, `updated_at`) VALUES
(1, 'Ca', NULL, NULL),
(2, 'P', NULL, NULL),
(3, 'Mg', NULL, NULL),
(4, 'Co', NULL, NULL),
(5, 'Cu', NULL, NULL),
(6, 'Se', NULL, NULL),
(7, 'S', NULL, NULL),
(8, 'Zn', NULL, NULL),
(9, 'Fe', NULL, NULL),
(10, 'Mn', NULL, NULL),
(11, 'K', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `premix_ingreedients`
--

CREATE TABLE `premix_ingreedients` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ca` double(8,3) NOT NULL DEFAULT '0.000',
  `P` double(8,3) NOT NULL DEFAULT '0.000',
  `Na` double(8,3) NOT NULL DEFAULT '0.000',
  `Cl` double(8,3) NOT NULL DEFAULT '0.000',
  `K` double(8,3) NOT NULL DEFAULT '0.000',
  `Fe` double(8,3) NOT NULL DEFAULT '0.000',
  `Mg` double(8,3) NOT NULL DEFAULT '0.000',
  `Mn` double(8,3) NOT NULL DEFAULT '0.000',
  `I` double(8,3) NOT NULL DEFAULT '0.000',
  `Zn` double(8,3) NOT NULL DEFAULT '0.000',
  `Cu` double(8,3) NOT NULL DEFAULT '0.000',
  `Co` double(8,3) NOT NULL DEFAULT '0.000',
  `Se` double(8,3) NOT NULL DEFAULT '0.000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premix_ingreedients`
--

INSERT INTO `premix_ingreedients` (`id`, `nama`, `Ca`, `P`, `Na`, `Cl`, `K`, `Fe`, `Mg`, `Mn`, `I`, `Zn`, `Cu`, `Co`, `Se`, `created_at`, `updated_at`) VALUES
(1, 'Limestone', 38.000, 0.000, 0.040, 0.030, 0.010, 0.000, 0.050, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(2, 'Calcium Carbonate', 38.000, 0.000, 0.020, 0.000, 0.040, 0.000, 0.050, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(3, 'Dicalcium Phosphate', 22.000, 18.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(4, 'Monoammonium Phosphate', 0.000, 25.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(5, 'Sodium Cloride', 0.000, 0.000, 39.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(6, 'Magnesium Oxide', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 62.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(7, 'Magnesium Sulphate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 10.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(8, 'Magnesium Cloride', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 10.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(9, 'Manganese Sulphate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 32.500, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(10, 'Potassium Iodide', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 76.400, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(11, 'Calcium Iodide', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 62.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(12, 'Calcium Iodate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 51.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL),
(13, 'Zinc Oxide', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 72.000, 0.000, 0.000, 0.000, NULL, NULL),
(14, 'Zinc Sulfat', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 35.000, 0.000, 0.000, 0.000, NULL, NULL),
(15, 'Copper Oxide', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 79.700, 0.000, 0.000, NULL, NULL),
(16, 'Copper Sulphate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 25.400, 0.000, 0.000, NULL, NULL),
(17, 'Cobalt Sulphate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 21.000, 0.000, NULL, NULL),
(18, 'Sodium Selenite dehydrate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 45.000, NULL, NULL),
(19, 'Sodium Selenite hydrate', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 30.000, NULL, NULL),
(20, 'Sodium Selenite dilute', 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 4.500, NULL, NULL),
(21, 'ferrous sulfat', 0.000, 0.000, 0.000, 0.000, 0.000, 30.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, 0.000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `premix_min_maxes`
--

CREATE TABLE `premix_min_maxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `sumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimal` double(8,3) NOT NULL DEFAULT '0.000',
  `maksimal` double(8,3) NOT NULL DEFAULT '0.000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premix_min_maxes`
--

INSERT INTO `premix_min_maxes` (`id`, `sumber`, `minimal`, `maksimal`, `created_at`, `updated_at`) VALUES
(1, 'Ca', 2.200, 2.500, NULL, NULL),
(2, 'P', 1.000, 1.100, NULL, NULL),
(3, 'Fe', 0.300, 0.400, NULL, NULL),
(4, 'Mn', 0.240, 0.350, NULL, NULL),
(5, 'I', 0.006, 0.080, NULL, NULL),
(6, 'Zn', 0.450, 0.650, NULL, NULL),
(7, 'Cu', 0.045, 0.065, NULL, NULL),
(8, 'Co', 0.015, 0.200, NULL, NULL),
(9, 'Se', 0.002, 0.002, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_pakans`
--
ALTER TABLE `bahan_pakans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contoh_premixes`
--
ALTER TABLE `contoh_premixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_minerals`
--
ALTER TABLE `jenis_minerals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_contoh_premixes`
--
ALTER TABLE `list_contoh_premixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minerals`
--
ALTER TABLE `minerals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `premixes`
--
ALTER TABLE `premixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premix_ingreedients`
--
ALTER TABLE `premix_ingreedients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premix_min_maxes`
--
ALTER TABLE `premix_min_maxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_pakans`
--
ALTER TABLE `bahan_pakans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contoh_premixes`
--
ALTER TABLE `contoh_premixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_minerals`
--
ALTER TABLE `jenis_minerals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list_contoh_premixes`
--
ALTER TABLE `list_contoh_premixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `minerals`
--
ALTER TABLE `minerals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `premixes`
--
ALTER TABLE `premixes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `premix_ingreedients`
--
ALTER TABLE `premix_ingreedients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `premix_min_maxes`
--
ALTER TABLE `premix_min_maxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
