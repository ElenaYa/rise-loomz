<?php
// partials/header.php
include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if (isset($page_title)): ?>
        <title><?php echo htmlspecialchars($page_title); ?></title>
    <?php else: ?>
        <title><?php echo htmlspecialchars($site_config['default_title']); ?></title>
    <?php endif; ?>
    
    <?php if (isset($page_description)): ?>
        <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php else: ?>
        <meta name="description" content="<?php echo htmlspecialchars($site_config['default_description']); ?>">
    <?php endif; ?>
    
    <?php if (isset($page_keywords)): ?>
        <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <?php else: ?>
        <meta name="keywords" content="<?php echo htmlspecialchars($site_config['default_keywords']); ?>">
    <?php endif; ?>
    
    <link rel="canonical" href="https://<?php echo $site_config['domain']; ?><?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars(isset($page_title) ? $page_title : $site_config['default_title']); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(isset($page_description) ? $page_description : $site_config['default_description']); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?php echo $site_config['domain']; ?><?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">
</head>
<body>
    <!-- Scroll Progress Bar -->
    <div id="scroll-progress" class="scroll-progress"></div>
    
    <!-- Header -->
    <header id="main-header" class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-header.png" alt="<?php echo htmlspecialchars($site_config['company_name']); ?>" class="navbar-logo">
                </a>
                
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Avaa navigaatio">
                    <span class="icon-burger" aria-hidden="true"><span class="bar"></span></span>
                    <span class="icon-close" aria-hidden="true"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Etusivu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Tietoa meistä</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Palvelut
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="services.php">Kaikki palvelut</a></li>
                                <li><a class="dropdown-item" href="services.php#call-center">Puhelinkeskusoptimointi</a></li>
                                <li><a class="dropdown-item" href="services.php#crm">CRM-ratkaisut</a></li>
                                <li><a class="dropdown-item" href="services.php#analytics">Asiakaspalaute-analytiikka</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonials.php">Asiakaskokemukset</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Yhteystiedot</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">UKK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>