<?php
    // expects that the following variables be set in prior
    // $scriptts - an array - containing paths to the script files
?>
        <div class="foot">
            <div class="contact">
                <small>email:</small> <a href="mailto:gdgtbi@gdgu.org">email@ecellgdgu.org</a> | <small>read:</small> <a href="/privacypolicy.php">privacy policy</a><br>
            </div>
            Copyright &copy; e-Cell, GD Goenka Technology Business Incubator, 2018-19.<br><a href="http://gdgoenkauniversity.com/">GD Goenka University</a>
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
