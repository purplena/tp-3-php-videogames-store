<?php require './db-config/config.php'; ?>
<?php require './partials/_header.php'; ?>
<?php require './db-queries/get_list_of_consoles.php'; ?>
<?php require './partials/_navbar.php'; ?>
<?php require './db-queries/get_all_games.php'; ?>
<?php require './partials/_game-card.php'; ?>
<?php require './functions/helpers.php'; ?>

<main class="section-container">
    <section class="section section-all-games">
        <?php get_all_games(0); ?>
    </section>
</main>





<?php require './partials/_footer.php'; ?>