<?php
    include_once 'header.php'
?>

    <section class="index-intro">
    <?php
                    if (isset($_SESSION["usersuid"])) {
                        echo "<p>Hello there " . $_SESSION["userid"] ."</p>";
                    }
    ?>
    <h1> THIS IS INTRODUCITON</h1>
    <p>skdgosdfaokfasnf</p>
    </section>