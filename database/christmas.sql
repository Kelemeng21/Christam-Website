-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Dec 18. 12:17
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `christmas`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `addresses`
--
CREATE DATABASE IF NOT EXISTS  christmas;
USE christmas;

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(150) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `addresses`
--

INSERT INTO `addresses` (`address_id`, `user_id`, `street`, `city`, `country`, `zip_code`) VALUES
(1, 1, '123 North Pole Lane', 'North Pole', 'Arctic', '99705'),
(2, 2, '456 Reindeer Road', 'North Pole', 'Arctic', '99705'),
(3, 3, '789 Workshop Way', 'North Pole', 'Arctic', '99705');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `advent_rewards`
--

CREATE TABLE `advent_rewards` (
  `reward_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount_percentage` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(5, 'Clothing'),
(2, 'Decorations'),
(4, 'Electronics'),
(3, 'Gifts'),
(1, 'Toys');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `subscriber_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`subscriber_id`, `email`, `subscribed_at`, `is_active`) VALUES
(1, 'john@example.com', '2025-12-18 07:30:26', 1),
(2, 'mary@example.com', '2025-12-18 07:30:26', 1),
(3, 'winter@example.com', '2025-12-18 07:30:26', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(30) DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_status` varchar(30) DEFAULT 'pending',
  `paid_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `stock_quantity`, `created_at`, `img`) VALUES
(1, 'Christmas Tree', 'Beautiful 6ft artificial Christmas tree', 149.99, 50, '2025-12-18 07:30:26', 'https://elle.hu/uploads/cover/a2FyYWNzb255ZmFmcmlzc3RpcHBlay1lbGxlLmh1_w1060_h727_ojpg.webp'),
(2, 'Santa Hat', 'Classic red and white Santa hat', 12.99, 200, '2025-12-18 07:30:26', 'https://i.pepita.hu/images/product/11684574/univerzalis-mikulas-sapka-piros-feher-31-x-50-cm-40-g_91230705_1200x630.jpg'),
(3, 'LED Lights', 'Multi-color LED Christmas lights', 29.99, 100, '2025-12-18 07:30:26', 'https://img.kokiskashop.hu/p/2/2047/1465229062-903315-big.jpg'),
(4, 'Toy Train Set', 'Classic wooden toy train set', 89.99, 30, '2025-12-18 07:30:26', 'https://www.regiojatek.hu/data/regio_images/normal2/00611_0.jpg'),
(5, 'Snowman Kit', 'Complete snowman building kit', 24.99, 75, '2025-12-18 07:30:26', 'https://www.bakerross.co.uk/media/catalog/product/f/x/fx867z-a.jpg'),
(6, 'Arany Csillag Csúcsdísz', 'Ragyogó arany színű csillag a karácsonyfa tetejére.', 15.50, 45, '2025-12-18 10:32:15', 'https://a.allegroimg.com/original/1159a2/23d8b61a40f183ea2d8235447693/FA-EGOSOR-CSILLAG-DISZ-AZUROWA-ARANY-dekoracio-KARACSONYFA-DISZ'),
(7, 'Adventi Gyertyaszett', '4 darabos klasszikus piros gyertya készlet adventi koszorúhoz.', 12.99, 80, '2025-12-18 10:32:15', 'https://cdnbeta.imageserver.cz/packway/product/zoom/10/4812/2405968.jpg'),
(8, 'Üveggömb', 'Egyedi, kék-ezüst mintás üveggömb (6 darabos készlet).', 24.90, 25, '2025-12-18 10:32:15', 'https://www.firstdecor.hu/img/80191/ARB101500/ARB101500.jpg'),
(9, 'Karácsonyi Kötött Pulóver', 'Rénszarvas mintás, meleg gyapjú pulóver minden méretben.', 39.99, 35, '2025-12-18 10:32:15', 'https://webshop.mlsz.hu/userfiles/8/c/8c0057eef4f427f52060043356318f98.jpg'),
(10, 'Műhó Spray', 'Könnyen lemosható dekorációs spray ablakokra és fákra.', 5.50, 150, '2025-12-18 10:32:15', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTQNxxF__SGS7KvE9EE63h3OpiUaTu8y9k8g&s'),
(11, 'Diótörő Figura', '30 cm magas, hagyományos fából készült katona figura.', 29.00, 20, '2025-12-18 10:32:15', 'https://ajandekotveszek.hu/wp-content/uploads/2022/11/dd59937-2-scaled.jpg'),
(12, 'Fényfüzér Kültéri', '10 méteres, jégcsap alakú hidegfehér LED sor.', 34.50, 60, '2025-12-18 10:32:15', 'https://piktor.hu/images/termek_kepek/Kert/Kerti-dekor/SAL-fenyfuggony-KAF-600L-melegfeher.jpg'),
(13, 'Illatosított Fahéj Rúd', 'Természetes dekoráció és illatosító csomag.', 8.99, 100, '2025-12-18 10:32:15', 'https://www.chiliszoszok.hu/img/7378/142544_altpic_1/142544.jpg?time=1672675577');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product_categories`
--

CREATE TABLE `product_categories` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `product_categories`
--

INSERT INTO `product_categories` (`product_id`, `category_id`) VALUES
(1, 2),
(2, 5),
(3, 2),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_primary` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `product_images`
--

INSERT INTO `product_images` (`image_id`, `product_id`, `image_url`, `is_primary`) VALUES
(1, 1, '/images/christmas-tree.jpg', 1),
(2, 2, '/images/santa-hat.jpg', 1),
(3, 3, '/images/led-lights.jpg', 1),
(4, 4, '/images/toy-train.jpg', 1),
(5, 5, '/images/snowman-kit.jpg', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `shipments`
--

CREATE TABLE `shipments` (
  `shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `tracking_number` varchar(100) DEFAULT NULL,
  `carrier` varchar(50) DEFAULT NULL,
  `shipped_at` timestamp NULL DEFAULT NULL,
  `delivered_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password_hash`, `created_at`) VALUES
(1, 'santa_claus', 'santa@northpole.com', '$2y$10$abcdefghijklmnopqrstuv', '2025-12-18 07:30:26'),
(2, 'rudolph', 'rudolph@northpole.com', '$2y$10$abcdefghijklmnopqrstuv', '2025-12-18 07:30:26'),
(3, 'elf_helper', 'elf@workshop.com', '$2y$10$abcdefghijklmnopqrstuv', '2025-12-18 07:30:26');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `wishlist`
--

CREATE TABLE `wishlist` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- A tábla indexei `advent_rewards`
--
ALTER TABLE `advent_rewards`
  ADD PRIMARY KEY (`reward_id`),
  ADD UNIQUE KEY `unique_day` (`day`),
  ADD KEY `idx_day` (`day`),
  ADD KEY `idx_product_id` (`product_id`);

--
-- A tábla indexei `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `idx_user_id` (`user_id`);

--
-- A tábla indexei `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_id`,`product_id`),
  ADD KEY `idx_cart_id` (`cart_id`),
  ADD KEY `idx_product_id` (`product_id`);

--
-- A tábla indexei `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- A tábla indexei `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`subscriber_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_address_id` (`address_id`),
  ADD KEY `idx_status` (`status`);

--
-- A tábla indexei `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `idx_order_id` (`order_id`),
  ADD KEY `idx_product_id` (`product_id`);

--
-- A tábla indexei `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `idx_order_id` (`order_id`),
  ADD KEY `idx_status` (`payment_status`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- A tábla indexei `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`product_id`,`category_id`),
  ADD KEY `idx_product_id` (`product_id`),
  ADD KEY `idx_category_id` (`category_id`);

--
-- A tábla indexei `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `idx_product_id` (`product_id`);

--
-- A tábla indexei `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_product_id` (`product_id`),
  ADD KEY `idx_rating` (`rating`);

--
-- A tábla indexei `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`shipment_id`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `idx_order_id` (`order_id`),
  ADD KEY `idx_tracking` (`tracking_number`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`user_id`,`product_id`),
  ADD KEY `idx_user_id` (`user_id`),
  ADD KEY `idx_product_id` (`product_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `advent_rewards`
--
ALTER TABLE `advent_rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `shipments`
--
ALTER TABLE `shipments`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_addresses_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `advent_rewards`
--
ALTER TABLE `advent_rewards`
  ADD CONSTRAINT `fk_advent_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_carts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `fk_cartitems_carts` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_cartitems_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_addresses` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Megkötések a táblához `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_orderitems_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_orderitems_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Megkötések a táblához `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `fk_pc_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pc_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_images_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reviews_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `fk_shipments_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE;

--
-- Megkötések a táblához `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wishlist_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_wishlist_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
