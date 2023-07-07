<?php require './db-config/config.php'; ?>
<?php require './partials/_header.php'; ?>
<?php require './functions/helpers.php'; ?>
<?php require './db-queries/get_list_of_consoles.php'; ?>
<?php require './partials/_navbar.php'; ?>
<?php require './db-queries/get_all_games.php'; ?>
<?php require './partials/_game-card.php'; ?>



<main class="section-container">

    <?php isset($_GET['console_id']) ? get_console_title_by_console_id(intval($_GET['console_id'])) : ""; ?>

    <section class="section section-all-games">
        <?php

        if (isset($_GET['console_id'])) {
            if (isset($_GET['order']) && isset($_GET['direction'])) {
                get_all_games(intval($_GET['console_id']), $_GET['order'], $_GET['direction']);
            } else {
                get_all_games(intval($_GET['console_id']), "", "");
            }
        } else {
            if (isset($_GET['order']) && isset($_GET['direction'])) {
                get_all_games(0, $_GET['order'], $_GET['direction']);
            } else {
                get_all_games(0, "", "");
            }
        }

        // isset($_GET['order']) && isset($_GET['direction']) ? get_all_games(0, $_GET['order'], $_GET['direction']) : get_all_games(0, "", "");

        // isset($_GET['console_id']) ? get_all_games(intval($_GET['console_id']), $_GET['order'], $_GET['direction']) : get_all_games(0, $_GET['order'], $_GET['direction']);
        ?>
    </section>

</main>

<?php require './partials/_footer.php'; ?>