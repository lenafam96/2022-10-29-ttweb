<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo&effect=neon">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Siêu thị sữa</title>
</head>

<body>
    <section class="wrapper">
        <header>
            <?php require_once 'views/Header.php'; ?>
        </header>
        <section class="body">
            <aside><?php //require_once 'views/Navbar.php'; ?></aside>
            <article>
                <?php
                require_once 'route.php';
                ?>
            </article>
            <aside></aside>
        </section>
        <footer>
            <div class="card-footer text-muted">
                <?php require_once 'views/Footer.php'; ?>
            </div>
        </footer>
    </section>

</body>

</html>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 99) {
                document.getElementById('navbar_top').classList.add('fixed-top');
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
                document.getElementById('nav-left').style.paddingTop = "50px";
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                document.body.style.paddingTop = '0';
                document.getElementById('nav-left').style.paddingTop = "150px";
            }
        });
    });
</script>