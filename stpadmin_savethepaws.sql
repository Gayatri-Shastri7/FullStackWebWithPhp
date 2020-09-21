-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2020 at 07:47 AM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stpadmin_savethepaws`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(10) NOT NULL,
  `admin_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `admin_username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(2, 'admin123', 'admin123', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `cause_id` int(11) NOT NULL,
  `cause_name` varchar(255) NOT NULL,
  `cause_maintitle` text NOT NULL,
  `cause_context` text NOT NULL,
  `goal` int(255) NOT NULL,
  `cause_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cause`
--

INSERT INTO `cause` (`cause_id`, `cause_name`, `cause_maintitle`, `cause_context`, `goal`, `cause_img`) VALUES
(5, 'Tommy needs your help', 'Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home. ', 'Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.', 10000, 'st1.jpeg'),
(6, 'test', 'Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.', 'Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.Tommy is a 1 year Pomeranian.She is full of excitement and a bundle of love.She needs your help to find a new home.', 7000, 'st3.jpeg'),
(10, 'test2', 'Loresum Ipsum', 'Lorsum Ipsum', 5500, 'cat-owner-guide.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `purpose` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `purpose`, `amount`, `name`, `email`, `phone`, `pid`, `status`) VALUES
(1, 'test', '15.00', 'test', 'chandrikawork18@gmail.com', '8106905885', 'MOJO0813E05A83336346', 'Credit'),
(2, 'Tommy needs your help', '10.00', 'test-final', 'chandrikawork18@gmail.com', '+918106905885', 'MOJO0813505A83336380', 'Credit'),
(3, 'Tommy needs your help', '200.00', 'testing', 'chandrikawork18@gmail.com', '+918106905885', 'MOJO0814C05A05177053', 'Credit'),
(4, 'test', '100.00', 'Chandrika', 'chandrikawork18@gmail.com', '+918106905885', 'MOJO0814705A05177420', 'Credit'),
(5, 'Tommy needs your help', '500.00', 'Chandrika', 'chandrikawork18@gmail.com', '+918106905885', 'MOJO0815N05A02955395', 'Credit');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_ownername` varchar(255) NOT NULL,
  `d_contact` text NOT NULL,
  `d_location` varchar(255) NOT NULL,
  `d_bloodgrp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`d_id`, `d_name`, `d_ownername`, `d_contact`, `d_location`, `d_bloodgrp`) VALUES
(2, 'Rocky', 'xyz', '123456789', 'Delhi', 'DEA 7'),
(3, 'Snoopyy', 'Lorem', 'abc@gmail.com', 'Mumbai', 'DEA 4');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_fullname` varchar(255) NOT NULL,
  `login_mail` varchar(255) NOT NULL,
  `login_username` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_fullname`, `login_mail`, `login_username`, `login_password`, `status`) VALUES
(11, 'testing', 'testing', 'testing', '098f6bcd4621d373cade4e832627b4f6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth`
--

CREATE TABLE `oauth` (
  `id` int(11) NOT NULL,
  `keeys` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth`
--

INSERT INTO `oauth` (`id`, `keeys`) VALUES
(1, 'aUhPRW1rdkw0dStFNi9WVDZKVmZBdz09Ojp6PEHl3SvRjK2Ys16hrijG'),
(2, 'UGRFUDQ1MS91TE1XQnpyLysvR1hmNnZIL3JhQmNuTkczcTFpUnkvTXplVWFRL0orWUdiYW5UdG9WY3FoaXB6Nzo6lHtJALgkaeEFFXKR3VhbUw=='),
(3, 'NVM4R3hzeXBrLzBVUnpkQVp4clp0OTF4bUVGZVpvci9NanMwWmFvc3ZNZXN0NHRZcFJORUVNKzFCeGxRMlJ1djo6aaKke/3CqyBC576TH9hEwQ=='),
(4, 'Z1NaVktjUVEvY3lNNThtbm0xcVZ4dmIxMnRybUdSQWlOZlNSeldEbEZkQ2NKeTVsakkyN1hSTXJWWDlHZ2toYTo6C0Vg+71aZMwwjY+mXu2Svw==');

-- --------------------------------------------------------

--
-- Table structure for table `oauthentic`
--

CREATE TABLE `oauthentic` (
  `access_id` int(11) NOT NULL,
  `access_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauthentic`
--

INSERT INTO `oauthentic` (`access_id`, `access_code`) VALUES
(2, '&BxIBbt7HM^c7UwfcmL^');

-- --------------------------------------------------------

--
-- Table structure for table `pfplaces`
--

CREATE TABLE `pfplaces` (
  `pfp_id` int(11) NOT NULL,
  `pfp_name` varchar(255) NOT NULL,
  `pfp_category` varchar(255) NOT NULL,
  `pfp_location` varchar(255) NOT NULL,
  `pfp_address` varchar(400) NOT NULL,
  `pfp_description` text NOT NULL,
  `pfp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pfplaces`
--

INSERT INTO `pfplaces` (`pfp_id`, `pfp_name`, `pfp_category`, `pfp_location`, `pfp_address`, `pfp_description`, `pfp_img`) VALUES
(3, 'final', 'Activities', 'Hyderabad', 'xyz,1234', 'final', 'hotel.jpg'),
(4, 'Navy Way', 'Resorts', 'Pune', '786-xyz,Road No:4,', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum', 'home.jpg'),
(5, 'Taj Vivanta', 'Hotel', 'Gurgaon', 'Plot No.1, Sector 44, Gurugram, Haryana 122004', 'Imagine that impeccable Taj service being extended to your pet! A specially designed door hanger that lets everyone know that the pet is in-house, cribs, pet shampoo, vet spray, hair brush, untangler spray, leash, dog chews and dog food from the kitchen are some of the amenities that are offered exlusively for your pet. It comes with a price tag though. \"We charge an extra of Rs 3,000 for guests checking in with their pets,\" informs Sumeet Taneja, general manager of the hotel. But if you have an infant, sorry this hotel is not for you. The hotel allows pets who are at least one year old. Also your pet should weigh less than 45 kg! ', 'hotel.jpg'),
(6, 'Four Seasons', 'Hotel', 'Mumbai', '1/136, Dr. E. Moses Road Worli, Mumbai, Maharashtra 400018', 'Yes, Four Seasons Mumbai allows you to check-in with your pooch. Dog and cat lovers we know you screamed at this one! A luxe stay in the maximum city for your pet, are you packing your bags already? Wait, there is more good news. There is no extra charge for guests checking in with their pets and the hotel provides beds, rugs, toys and food for the pet. It also offers services like dog-walking and you can avail grooming or vet services at an extra cost.', 'resorts.jpg'),
(7, 'Ibis Aerocity.', 'Resorts', 'Delhi', 'IGI Airport , 110037 New Delhi', 'A budget transit visit to Delhi with your pet? This hotel is for you then. Located at Delhi\'s new hotel hub Aerocity, Ibis is a budget brand of the Accor Group. It allows you to check in with your pet. The hotel is close to the Delhi airport and also in close proximity to Gurgaon. ', 'hotel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_author` varchar(245) NOT NULL,
  `post_content` text NOT NULL,
  `post_img` varchar(50) NOT NULL,
  `pos_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_author`, `post_content`, `post_img`, `pos_date`) VALUES
(19, 'How dogs contribute to your Health and Wellness', 'Save The Paws', 'According to the American Society for the Prevention of Cruelty to Animals (ASPCA), an estimated 78 million dogs are owned as pets in the United States.\r\n<br><br>\r\nIt is unclear when dogs were first domesticated, but a study published last year claims that, at least in Europe, dogs were tamed 20,000â€“40,000 years ago.\r\n<br><br>\r\nIt is likely that humans and dogs have shared a special bond of friendship and mutual support ever since at least the Neolithic period â€” but why has this bond been so long-lasting?\r\n<br><br>\r\nOf course, these cousins of the wolves have historically been great at keeping us and our dwellings safe, guarding our houses, our cattle, and our various material goods. Throughout history, humans have also trained dogs to assist them with hunting, or they have bred numerous quirky-looking species for their cuteness or elegance.\r\n<br><br>\r\nHowever, dogs are also â€” and might have always been â€” truly valued companions, famed for their loyalty and seemingly constant willingness to put a smile on their ownersâ€™ faces.\r\n<br><br>\r\nIn this Spotlight, we outline the research that shows how our dogs make us happier, more resilient when facing stress, and physically healthier, to name but a few ways in which these much-loved quadrupeds support our well-being\r\n<br><br>', 'st3.jpeg', '2020-08-06 10:19:34'),
(20, 'Ten Tips for Taking Care of Your Dog', 'Save The Paws', '1.PROVIDE A PROTECTED AND CLEAN LIVING ENVIRONMENT FOR YOUR DOG. Shelter from the elements and hazards, as well as good hygiene, are basic to a quality life.        \r\n<br><br>\r\n2.ALWAYS KEEP FRESH WATER AVAILABLE. Maintaining optimal hydration is important for health and energy.\r\nFEED A QUALITY DIET AND PREVENT OBESITY. Overweight humans and animals can adversely affect health in many ways. Follow the dietary recommendations that your veterinarian will make according to the nutritional needs of your dog, based on size, age, level of activity and breed. Remember to provide healthy treats rather than table scraps, as rewards.\r\n<br>\r\n<br>\r\n3.HAVE YOUR PET EXAMINED BY A VETERINARIAN ON A REGULAR BASIS. Your veterinarian will provide you with the information on vaccination schedules, deworming and external parasite control. Keep a copy of your petâ€™s vaccination records in your home or with you when you travel. Contact your veterinarian if you believe that your pet may be ill, injured, or if something just doesnâ€™t seem right. Your veterinarian is the expert on keeping your dog healthy.  Work as a team with him or her.\r\n<br><br>\r\n4.PROVIDE AMPLE OPPORTUNITIES TO EXERCISE. Make sure your dog gets the regular exercise needed to enable it to be fit.  By being in shape, your dog will be more capable of participating in the activities that it enjoys.\r\n<br><br>\r\n5.COMMUNICATE WITH YOUR DOG AND DEVELOP A RELATIONSHIP. Dogs are social creatures and they need to interact with their owner. Quality time will help you get to know your dog and understand  particular needs that it might have, as well enhance your ability to recognize early signs of an illness that could be developing. In addition, time spent in developing a relationship will help prevent many undesirable behavioral patterns. \r\n<br><br>\r\n6.TRAIN YOUR DOG TO FOLLOW THE SIMPLE COMMANDS. Puppy and dog training classes can be very helpful. The better your dog is at following basic and necessary commands, the greater the chances are that your dog will live a safe and long life.<br><br>\r\n7.PRACTICE REPRODUCTIVE CONTROL. If you do not intend to create puppies, spaying or neutering is a certain option. If you plan to breed your dog or are opposed to spaying and neutering for other reasons, take appropriate measures to prevent mismatings. Consult with your veterinarian in regard to other options that are available.<br><br>\r\n8.DENTAL CARE IS VERY IMPORTANT. Many breeds are prone to gum disease, which can have serious implications. Infection resulting from this condition leads to premature tooth loss, and can commonly cause infections in major organs, including the heart valves.    <br><br>\r\n9.DONâ€™T OVERLOOK GROOMING AND NAIL TRIMMING. Long coated dogs are prone to developing matts and ice balls in their hair. Overgrown nails are common in elderly dogs and can make it more difficult for them to walk. In addition, such nails are much more prone to breaking, which can be quite painful. \r\n<br><br>', 'st4.jpeg', '2020-08-06 13:39:54'),
(21, 'What To Consider Before You Get a  Cat and become a cat owner!', 'Save The Paws', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu nunc non neque placerat luctus ut et ipsum. Maecenas porttitor venenatis enim, vel aliquam est suscipit et. Proin viverra at nulla sit amet pulvinar. Sed sit amet augue mi. Quisque commodo nulla eget magna tempus, eu vehicula diam auctor. Nam sed nunc risus. Quisque eleifend euismod dui vel maximus. Mauris vestibulum in arcu ac ornare.\r\n<br><br>\r\nFusce eu ligula nulla. Duis non ante elit. Suspendisse ullamcorper in orci vel viverra. Sed a mollis quam. Aenean ac iaculis arcu. In hac habitasse platea dictumst. Pellentesque accumsan, velit tempus dignissim porta, mauris justo commodo turpis, id euismod mauris diam non nisi.\r\n<br><br>\r\nProin fringilla iaculis lectus, non ultrices est ornare id. Duis blandit ligula in dignissim tempor. Fusce rhoncus nibh massa, ut auctor sapien volutpat non. Etiam ac scelerisque enim. Phasellus efficitur quam eget ante consequat elementum. Mauris in dui eget nunc efficitur bibendum. Vestibulum ornare ex eu imperdiet faucibus.\r\n<br><br>\r\nMauris non sem sapien. Pellentesque sodales ut massa sed laoreet. Phasellus ultrices commodo maximus. Nullam pellentesque condimentum lectus ac dictum. Praesent ullamcorper sapien eu diam porttitor, sit amet porttitor odio sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed turpis diam, tristique eget nisl ac, rutrum mollis metus. Cras at iaculis elit. Nullam vulputate felis imperdiet varius faucibus.\r\n<br><br>\r\nSuspendisse vehicula neque a neque molestie, vel interdum neque euismod. Duis faucibus dolor quis tincidunt interdum. Proin mollis odio eget mi finibus tempus. Maecenas hendrerit imperdiet nisi, eget ornare urna fringilla eu. Sed sed felis sit amet libero gravida sollicitudin. Vestibulum placerat accumsan leo. Aenean consequat massa sed dui venenatis tincidunt. Duis et molestie lacus. Donec lobortis, arcu vestibulum lobortis pharetra, leo nibh pellentesque nulla, vel sollicitudin leo magna in velit. Donec vulputate nulla id odio semper, vitae tincidunt est tincidunt. Proin aliquet at dui a fermentum\r\n<br><br>', 'cat-owner-guide.jpg', '2020-08-14 10:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `register_fullname` text NOT NULL,
  `register_mail` varchar(255) NOT NULL,
  `register_username` varchar(255) NOT NULL,
  `register_password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `resource_name` varchar(255) NOT NULL,
  `resource_author` varchar(255) NOT NULL,
  `resource_category` varchar(255) NOT NULL,
  `resource_content` text NOT NULL,
  `resource_img` varchar(50) NOT NULL,
  `resource_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `resource_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `resource_name`, `resource_author`, `resource_category`, `resource_content`, `resource_img`, `resource_date`, `resource_file`) VALUES
(2, 'test234', 'test234', 'Rescuers', 'wezesxdrcfvgybhnjmkl,;.zetryubjmkl,;', 'st3.jpeg', '2020-08-19 07:49:12', 'unit-2(nw,lc prob).pdf'),
(4, '10 Money-Saving Tips for Pet Parents', 'Save The paws', 'Petowners', 'Do you spend more money on your pet than necessary? We love our four-footed companions but caring for them, especially if they get sick, can become expensive.\r\n\r\nConsider these money-saving ideas that also work to keep pets healthy. They can help you to spend less without neglecting any of your pet\'s needs â€” or forgoing the pleasures of being a pet parent.\r\n<br>\r\n1.Keep your pet\'s weight within a healthy range. By not being overfed, your cat won\'t put on pounds that could lead to diabetes â€” and you won\'t have to replenish kibble as frequently.\r\n<br>\r\n2.Exercise your dog daily. Sticking to a heart-pumping regimen for at least an hour a day not only helps keep your dog healthy, it can be as physically demanding of you as a costly health-club workout.\r\n<br>\r\n3.Take care of your pet\'s mouth. Commit to brushing teeth and inspect gums for redness and swelling. Decayed and broken teeth and untreated gum disease can lead to serious illness.\r\n<br>\r\n4,Visit your veterinarian. Bring your pet in for regular check-ups and keep vaccinations current. It can be life threatening for an unprotected animal to be exposed to certain diseases â€” and they can also be very expensive to treat and cure.\r\n<br>\r\n5.Combat fleas and ticks. Plan on providing your pet with uninterrupted coverage with products such as Activyl monthly spot-on flea control or Bravecto which defends against fleas and ticks for up to 12 weeks with each dose.\r\n<br>\r\n6.Make your house pet-safe. Always close doors securely and make sure your pet can\'t escape through an open window. Store toxic products where dogs and cats can\'t get to them. Relocate cords that might choke, strangle or electrocute a pet. Even items like loose string and rubber bands can provoke a trip to the emergency room.\r\n<br>\r\n7.Craft DIY toys. Have you priced pet toys recently? They cost a fortune! Check out Pinterest for homemade dog toys and homemade cat toys that are inexpensive to make and can entertain your pet for hours, if not days.\r\n<br>\r\n8.Don\'t buy pet clothes. Unless you have a shorthaired dog or hairless cat and live in a place where it gets frigid, your pet doesn\'t need a wardrobe. If she does, consider making your own. If you knit or crochet, download a free pattern at Lion Brand. You can also cut down a small or child\'s old sweater and refashion it for your pet with a few stitches.\r\n<br>\r\n9.Subscribe for freebies. Sign up for your favorite pet brands\' newsletters, Facebook pages and Twitter feeds for news of sales and to get discount coupons.\r\n<br>\r\n10.Trade for pet sitting services. Have to go out of town? Trade services with a friend who loves your dog or cat. You can even try apps like Bark\'N\'Borrow where you can find a sitter or earn extra cash by becoming one.', 'cat-owner-guide.jpg', '2020-09-05 09:49:07', 'unit-2.pdf'),
(6, 'test123', 'test123', 'Feeders', 'test123', 'home.jpg', '2020-08-22 06:30:41', 'unit-2(nw,lc prob matter).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `urgent_cause`
--

CREATE TABLE `urgent_cause` (
  `ucause_id` int(11) NOT NULL,
  `ucause_name` varchar(255) NOT NULL,
  `ucause_maintitle` text NOT NULL,
  `ucause_context` text NOT NULL,
  `ugoal` int(255) NOT NULL,
  `ucause_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urgent_cause`
--

INSERT INTO `urgent_cause` (`ucause_id`, `ucause_name`, `ucause_maintitle`, `ucause_context`, `ugoal`, `ucause_img`) VALUES
(5, 'test2', 'Loresum Ipsum', 'Lorsum Ipsum', 5500, 'cat-owner-guide.jpg'),
(6, 'test2', 'Loresum Ipsum', 'Lorsum Ipsum', 5500, 'cat-owner-guide.jpg'),
(9, 'test2', 'Loresum Ipsum', 'Lorsum Ipsum', 5500, 'cat-owner-guide.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`cause_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `oauth`
--
ALTER TABLE `oauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauthentic`
--
ALTER TABLE `oauthentic`
  ADD PRIMARY KEY (`access_id`);

--
-- Indexes for table `pfplaces`
--
ALTER TABLE `pfplaces`
  ADD PRIMARY KEY (`pfp_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `urgent_cause`
--
ALTER TABLE `urgent_cause`
  ADD PRIMARY KEY (`ucause_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cause`
--
ALTER TABLE `cause`
  MODIFY `cause_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `oauth`
--
ALTER TABLE `oauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauthentic`
--
ALTER TABLE `oauthentic`
  MODIFY `access_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pfplaces`
--
ALTER TABLE `pfplaces`
  MODIFY `pfp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
