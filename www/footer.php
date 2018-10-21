<?php
    // expects that the following variables be set in prior
    // $scriptts - an array - containing paths to the script files
?>
        <div class="foot">
            <div class="contact">
                <small>phone:</small> +918291474715 | <small>email:</small> ecell@gdgoenka.ac.in<br>
            </div>

            <br><br>
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