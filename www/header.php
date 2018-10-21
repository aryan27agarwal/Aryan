<?php
    // expects that the following variables be set in prior
    // $stylesheets - an array - containing the list of stylesheet paths [excluding bootstrap]
    // $title - a string - the title for the given page
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- essential bootstrap components -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- site metadata -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="ecell, gdgu, gdgtbi, gdgoenka, entrepreneurship" />
        <!-- page title -->
        <title>
            <?php echo $title; ?> | Entrepreneurship Cell | GD Goenka Technology Business Incubator | GD Goenka University
        </title>
        <!-- list of style sheets -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/fresh.css" />
        <?php
            $template = '<link rel="stylesheet" type="text/css" href="%s" />';
            foreach($stylesheets as $stylesheet) {
                echo sprintf($template, $stylesheet);
            }
            echo "\n";
        ?>
    </head>
    <body>
        <div class="container-fluid background">
            <div class="container-fluid wrapper">
                <div class="container-fluid">
                    <nav class="navbar-default">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/" class="whitish">Home</a></li>
                            <li><a href="testimonials" class="whitish">Testimonials</a></li>
                            <li><a href="events" class="whitish">Events</a></li>
                            <li><a href="contact" class="whitish">Contact Us</a></li>
                            <li><a href="team" class="whitish">Support Team</a></li>
                            <li><a href="register" class="whitish">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>  