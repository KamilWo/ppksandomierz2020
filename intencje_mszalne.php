<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head.php';
?>
<body>
<main role="main">
    <?php
    include 'menu.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- treść główna -->
            <div class="col">

                <h2 class="first-content-header">
                    <i class="fa fa-newspaper"></i> Intencje mszalne
                </h2>

                <div class="row">
                    <div class="col-md-12">
                        <?php
                            include 'last_intentions.php';
                        ?>
                    </div>
                </div>
            </div>
            <!-- koniec treści głównej -->
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
