<?php
    // expects that the following variables be set in prior
    // $scriptts - an array - containing paths to the script files
?>
        <div class="foot">
            <div class="contact">
                <small>phone:</small> <a href="tel:+919529323218">+91 952 932 3218</a> | <small>email:</small> <a href="mailto:ecell@gdgoenka.ac.in">ecell@gdgoenka.ac.in</a><br>
            </div>
            <br>
            Copyright &copy; e-Cell, GD Goenka Technology Business Incubator, 2018.<br><a href="https://gdgoenkauniversity.com/">GD Goenka University</a>
        </div>
    </body>
    <!-- list of script -->
    <?php
        $template = '<script type="application/javascript" src="%s"></script>';
        foreach($scripts as $script) {
            echo sprintf($template, $script);
        }
        echo "\n";
    ?>
</html>