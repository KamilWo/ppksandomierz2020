<!DOCTYPE html>
<html lang="pl-PL">
<?php
include 'head_gallery.php'
?>
<body>
<main role="main">
    <?php
    include 'menu.php'
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- treść główna -->
            <div class="col">
                <h2 class="first-content-header">Marsz dla Życia 2012</h2>
                <p>Galeria przedstawia ujęcia z&nbsp;I&nbsp;Sandomierskiego Marszu
                    dla Życia i&nbsp;Rodziny, który odbył się 3&nbsp;czerwca 2012&nbsp;r. w&nbsp;Sandomierzu.</p><br/>

                <ul id='gallery'></ul>
                <script>
                    var l = 29,
                        gallery_number = "3",
                        images_data = [];

                    for (var i = 1; i < l + 1; i++) {
                        images_data.push({
                            title: "Zdjecie " + i,
                            url: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('0' + i).slice(-2)
                                + "_b.jpg",
                            thumb: "static/gallery/"
                                + gallery_number
                                + "/"
                                + ('0' + i).slice(-2)
                                + "_t.jpg",
                        });
                    }

                    // var videos = [{}];
                </script>
                <script src="static/src/js/gallery.js"></script>

                <p>&nbsp;</p>
            </div>
        </div>
        <!-- koniec treści głównej -->
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
