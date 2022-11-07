<!DOCTYPE html>
<html lang="en">

    <?php include './includes/head.html'; ?>

    <body>
        <?php
            include './includes/header.html';
            include './includes/nav.html';
        ?>

        <main class="container">
            <?php
                if (isset($_GET['about-me'])) {
                    include './pages/about-me.html';
                } elseif (isset($_GET['my-dreams'])) {
                    include './pages/my-dreams.html';
                } elseif (isset($_GET['my-passions'])) {
                    include './pages/my-passions.html';
                } else {
                    include './pages/home.html';
                }
            ?>
        </main>

        <?php include './includes/footer.html'; ?>
    </body>

</html>
