<?php require './db-config/config.php'; ?>
<?php require './partials/_header.php'; ?>
<?php require './partials/_navbar.php'; ?>
<?php require './db-queries/get_all_games.php'; ?>
<?php require './partials/_game-card.php'; ?>
<?php require './functions/price_converter.php'; ?>
<main>
    <h1>
        Tous les jeux
    </h1>

    <?php get_all_games(); ?>
</main>





<?php require './partials/_footer.php'; ?>