INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Coffee & Accent Tables', '2023-04-18 17:33:01', '2023-04-18 17:33:01'),
(2, 'Nightstands', '2023-04-18 17:33:06', '2023-04-18 17:33:06'),
(3, 'Sectional Sofa', '2023-04-18 17:33:12', '2023-04-18 17:33:12'),
(4, 'Baby Cribs & Bassinets', '2023-04-18 17:33:26', '2023-04-18 17:33:26'),
(5, 'Beds', '2023-04-18 17:33:32', '2023-04-18 17:33:32'),
(6, 'Ottomans & Benches', '2023-04-18 17:33:38', '2023-04-18 17:36:26'),
(7, 'Dining Tables', '2023-04-18 17:36:37', '2023-04-18 17:36:37'),
(8, 'Love Sicks', '2023-04-18 17:37:52', '2023-04-18 17:37:52'),
(9, 'Bookcases & Shelves', '2023-04-18 17:37:59', '2023-04-18 17:37:59'),
(10, 'Office Chairs', '2023-04-18 17:38:06', '2023-04-18 17:38:06'),
(11, 'Dining Chairs', '2023-04-18 17:38:20', '2023-04-18 17:38:20'),
(12, 'Hicks', '2023-04-18 17:38:26', '2023-04-18 17:38:26');

INSERT INTO `news` (`id`, `title`, `content`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'ewfnwegnoiewqg', 'fewfwkeofkoweafkmwaef', 'image1682491181-.jpg', '2023-04-25 23:39:41', '2023-04-25 23:39:41'),
(2, 'jvaoejovaewof', 'dsafsladmflads', 'image1682491193-.jpg', '2023-04-25 23:39:53', '2023-04-25 23:39:53'),
(3, 'aewfmkplwefplw', 'fwekfmkawmkpf', 'image1682491202-.jpg', '2023-04-25 23:40:02', '2023-04-25 23:40:02'),
(4, 'fewqijfeiowqjfoiwagaow', 'okfweamjkomfegakpw', 'image1682491231-.jpg', '2023-04-25 23:40:31', '2023-04-25 23:40:31');

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `email`, `address`, `phone`, `note`, `product_name`, `total`, `created_at`, `updated_at`) VALUES
(6, 1, 'Duong Ngoc Anh', 'admin@gmail.com', 'Ha noi', '0987654321', 'suc vat chien', '', '0.00', '2023-04-25 23:32:07', '2023-04-25 23:32:07'),
(7, 1, 'Nga', 'user1@gmail.com', 'Ha noi', '0987654321', 'dasda', 'san pham 5, san pham 4', '32.00', '2023-04-25 23:33:47', '2023-04-25 23:33:47'),
(8, 1, 'chien', 'koding@gmail.com', 'ha tinh', '0987654321', 'das', 'san pham 2', '2.00', '2023-04-25 23:35:28', '2023-04-25 23:35:28');

