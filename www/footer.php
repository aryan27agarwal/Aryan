<?php
    // expects that the following variables be set in prior
    // $scriptts - an array - containing paths to the script files
?>
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