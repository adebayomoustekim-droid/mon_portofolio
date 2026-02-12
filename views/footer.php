<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Employés</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles 2.css">
</head>

<footer class="footer">
    <div class="container">
        <div class="row">

            <!-- A propos -->
            <div class="col-md-4 footer-col">
                <h4><span class="footer-brand">Adebayo</span>Dev</h4>
                <p>
                    Agence digitale spécialisée dans la création
                    de sites web modernes, performants et sécurisés.
                </p>
            </div>

            <!-- Services -->
            <div class="col-md-4 footer-col">
                <h5>Services</h5>
                <ul>
                    <li>Développement Web</li>
                    <li>Maintenance & Sécurité</li>
                    <li>UI / UX Design</li>
                    <li>Solutions sur mesure</li>
                </ul>
            </div>

            <!-- Contact & Réseaux -->
            <div class="col-md-4 footer-col">
                <h5>Contact</h5>
                <p><i class="fa-solid fa-envelope"></i> 
                    <a href="mailto:adebayomoustekim@gmail.com" class="text-decoration-none" style="color:#ccc;">adebayomoustekim@gmail.com</a>
                </p>
                <p><i class="fa-solid fa-phone"></i> 
                    <a href="tel:+2290143520071" class="text-decoration-none" style="color:#ccc;">+229 0143520071</a>
                </p>

                <div class="social-links">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/AdebayoDev" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/adebayo-moustekim" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/2290143520071" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bas du footer -->
        <div class="footer-bottom text-center">
            <p>© <?php echo date('Y'); ?> AdebayoDev — digital.Web.IT Solution</p>
            <p> <em>Digital solutions for a smarter futur</em></p>
        </div>
    </div>
</footer>

<style>
.footer {
    background: linear-gradient(135deg, #111, #0a0a0a);
    color: #ccc;
    padding: 60px 0 20px;
    margin-top: 80px;
}

.footer-col h4,
.footer-col h5 {
    color: #fff;
    font-weight: 700;
    margin-bottom: 20px;
}

.footer-brand {
    color: #0dcaf0;
}

.footer-col p {
    font-size: 15px;
    line-height: 1.7;
}

.footer-col ul {
    list-style: none;
    padding: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
    font-size: 15px;
}

.footer-col i {
    color: #0dcaf0;
    margin-right: 8px;
}

/* Réseaux sociaux */
.social-links {
    margin-top: 15px;
}

.social-links a {
    display: inline-block;
    width: 38px;
    height: 38px;
    line-height: 38px;
 
    color: #111;
    text-align: center;
    border-radius: 50%;
    margin-right: 10px;
    transition: 0.3s;
}

.social-links a:hover {
    background: #fff;
   
    transform: translateY(-5px);
}

/* Bas du footer */
.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.1);
    margin-top: 40px;
    padding-top: 15px;
    font-size: 14px;
    color: #888;
}
</style>
