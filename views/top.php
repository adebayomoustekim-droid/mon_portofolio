<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdebayoDev</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">AdebayoDev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#projets">Projets</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<style>
    /* ------------------ HEADER SPECIAL ------------------ */
    body {
    padding-top: 80px; /* adapte selon la hauteur de ta navbar */
}

.navbar {
    transition: all 0.4s ease;
    letter-spacing: 0.5px;
}

/* Changement de couleur au scroll */
.navbar.scrolled {
    background-color: #111 !important;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

/* Nom du site stylé */
/* ==========================
   MENU NAVBAR RESPONSIVE
   ADEBAYODEV
========================== */

/* Navbar globale */
.navbar {
    padding: 15px 20px;
    border-bottom: 2px solid #0dcaf0;
}

/* Brand */
.navbar-brand {
    font-weight: 700;
    font-size: 1.5rem;
    color: #0dcaf0 !important;
}

/* Liens du menu */
.navbar-nav .nav-link {
    color: #fff !important;
    font-weight: 500;
    margin-left: 15px;
    transition: color 0.3s;
}

.navbar-nav .nav-link:hover {
    color: #0dcaf0 !important;
}

/* Hamburger icon */
.navbar-toggler {
    border: none;
    outline: none;
}

/* Icon color */
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28236, 236, 236, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/ %3E%3C/svg%3E");
}

/* Responsive menu (small screens) */
@media (max-width: 768px) {
    .navbar-nav {
        background: #222;
        padding: 15px;
        border-radius: 8px;
    }

    .navbar-nav .nav-link {
        margin: 10px 0;
        text-align: center;
        font-size: 16px;
    }

    .navbar {
        padding: 10px 15px;
    }
}


</style>
