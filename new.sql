-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:8889
-- 生成日期： 2026-03-20 06:52:41
-- 服务器版本： 5.7.34
-- PHP 版本： 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `new`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--
-- 1. 创建生产工单表 (Órdenes de Producción)
CREATE TABLE production_orders (
                                   id INT AUTO_INCREMENT PRIMARY KEY,
                                   order_number VARCHAR(50) NOT NULL,
                                   product_name VARCHAR(100) NOT NULL, -- 例如：Soldadora Inverter TIG-200 (TIG-200逆变焊机)
                                   target_quantity INT NOT NULL,
                                   completed_quantity INT DEFAULT 0,
                                   status ENUM('Pendiente', 'En Producción', 'Control de Calidad', 'Completado') DEFAULT 'Pendiente',
                                   start_date DATE,
                                   update_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 2. 创建质量检测表 (Control de Calidad - QC) 工业设备极度看重QC
CREATE TABLE quality_control (
                                 id INT AUTO_INCREMENT PRIMARY KEY,
                                 order_id INT,
                                 inspector_name VARCHAR(50),
                                 test_type VARCHAR(50), -- 例如：Prueba de Arco (起弧测试), Voltaje (电压测试)
                                 result ENUM('Aprobado', 'Rechazado', 'Reproceso') NOT NULL,
                                 comments TEXT,
                                 FOREIGN KEY (order_id) REFERENCES production_orders(id)
);

-- 3. 插入针对“焊接设备”的演示数据
INSERT INTO production_orders (order_number, product_name, target_quantity, completed_quantity, status, start_date) VALUES
                                                                                                                        ('PO-2026-001', 'Soldadora Inverter MIG/MAG 300A', 50, 50, 'Completado', '2026-03-10'),
                                                                                                                        ('PO-2026-002', 'Máquina de Soldar TIG Pro 250', 100, 45, 'En Producción', '2026-03-20'),
                                                                                                                        ('PO-2026-003', 'Cortadora Plasma CNC 100A', 20, 0, 'Pendiente', '2026-03-25');

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`, `name`) VALUES
(1, 'oscarcastillo@zte.com.cn', '28a7ef4b8635dc4a10a0e5d1113fac59', 'Oscar Castillo'),
(2, 'Siu Ling', 'b206931649d2617f8f9a6d152bf5716b', 'Siu Ling');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_price` int(11) DEFAULT NULL,
  `image` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_description`, `p_category`, `p_quantity`, `p_price`, `image`) VALUES
(1, 'Vergatario S302', 'El teléfono icónico del convenio ZTE-VTELCA 2014.', 'Básicos', 500, 15, NULL),
(2, 'Victoria V970', 'Gama alta ensamblado en la planta de Punto Fijo.', 'Smartphones', 200, 85, NULL),
(3, 'Telepatria V821', 'Equipo con sintonizador de TV digital abierto.', 'Smartphones', 150, 45, NULL),
(4, 'Caribe 3', 'Teléfono de entrada con tecnología ZTE.', 'Básicos', 1000, 12, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'oscarcastillo@zte.com.cn', 'ZTEvtelca2014'),
(2, 'Siu Ling', 'ZTE_imes_2014');

-- --------------------------------------------------------

--
-- 表的结构 `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `Whs_Name` varchar(100) NOT NULL,
  `Whs_Category` varchar(100) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Description` text,
  `Location` varchar(255) DEFAULT NULL,
  `Picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `warehouse`
--

INSERT INTO `warehouse` (`id`, `Whs_Name`, `Whs_Category`, `Contact`, `Email`, `Description`, `Location`, `Picture`) VALUES
(1, 'Planta VTELCA', 'Principal', '+58 269 2482907', 'logistica@vtelca.gob.ve', 'Planta de ensamblaje principal en Falcón', 'Zona Franca Industrial, Punto Fijo', 'uploads/vtelca_factory.jpg'),
(2, 'ZTEICT', 'Regional', '+58 414 5471805', 'oscarcastillo@zte.com.cn', 'Oficina técnica y almacén regional Caracas', 'Torre ZTE, Chacao, Caracas', 'uploads/zte_office.jpg'),
(3, 'Puerto Guaranao', 'Puerto', '+58 269 248 1202', 'aduanas@vtelca.gob.ve', 'Recepción de componentes importados de China', 'Puerto de Guaranao, Punto Fijo', 'uploads/port.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `whscategory`
--

CREATE TABLE `whscategory` (
  `id` int(11) NOT NULL,
  `Category_Name` varchar(100) NOT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `whscategory`
--

INSERT INTO `whscategory` (`id`, `Category_Name`, `Description`) VALUES
(1, 'Principal', 'Almacén central de distribución'),
(2, 'Regional', 'Centros de acopio regionales'),
(3, 'Puerto', 'Zona de logística portuaria');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- 表的索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `whscategory`
--
ALTER TABLE `whscategory`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `whscategory`
--
ALTER TABLE `whscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
