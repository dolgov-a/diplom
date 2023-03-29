<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="assets/css/style.css">

<title>Заявка</title>
</head>
<body>

<a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bxs-chevron-up scrolltop_icon'></i>
        </a>


    <header class="l-header" id="header">
            <nav class="nav bd-container">
            <a href="index.html" class="nav-logo"><i class='logo-pic bx bx-camera'></i></a>
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.html" class="nav-link">Главная</a></li>
                        <li class="nav-item"><a href="price.html" class="nav-link">Цена</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">Обо мне</a></li>
                        <li class="nav-item"><a href="send.php" class="nav-link">Заявка</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>
    
                <div class="nav-toggle" id="nav-toggle">
                    <i class='bx bx-menu-alt-right'></i>
                </div>
            </nav>
    </header>
<main class="l-main">
<section class="send section" id="send">
<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "orderphotonadezda@mail.ru";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Успешно отправленно.";
	}
}
?>
    <div class="send-container bd-container bd-grid">
        <div class="send-content">
            <h2 class="section-title-center">Связаться со мной</h2>

            <form name="contactFormEmail" method="post">
            <div class="input-row">
                <input type="text" name="userName" required id="userName" class="feedback-input" placeholder="Имя"> 
            </div>
            <div class="input-row">
                <input type="email" name="userEmail" required id="userEmail" class="feedback-input" placeholder="Email"> 
            </div>
            <div class="input-row">
                <textarea name="userMessage" required id="userMessage" class="feedback-input" placeholder="Имя"></textarea>
            </div>
                <div class="input-row">
                    <input type="submit" name="send" class="button" value="&#10148; Отправить"/>
                    <?php if (! empty($message)) {?>
                        <div class='success'>
                            <strong><?php echo $message; ?>	</strong>
                        </div>
                    <?php } ?>
                 </div>
            </form>
        </div>


                    <div class="send-img">
                        <img src="assets/img/sent-pfp.jpg">
                    </div>
    </div>
</section>
</main>



        <footer class="footer section">
            <hr class="bd-container">
            <h4 class="footer-title bd-container bd-grid">Contact</h4>
            <div class="footer-container bd-container bd-grid">
                
                <div class="footer-content">
                    <ul class="footer-list">
                        <li class="footer-contact-li"><a href="mailto:orderphotonadezda@mail.ru" class="footer-contact"><i class='bx bx-envelope ico'></i></a></li>
                    </ul>
                </div>
            </div>

            <p class="footer-copy">&#169; 2023 Nadezda Photographer</p>
        </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>


