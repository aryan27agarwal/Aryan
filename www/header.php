<?php
    // expects that the following variables be set in prior
    // $stylesheets - an array - containing the list of stylesheet paths [excluding bootstrap]
    // $title - a string - the title for the given page
    $currentScript = $_SERVER['SCRIPT_NAME'];
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
        <!-- favicons, generated using favicomatic.com -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="favicons/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="favicons/favicon-128.png" sizes="128x128" />
        <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="favicons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="favicons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="favicons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="favicons/mstile-310x310.png" />
        <!-- page title -->
        <title>
            <?php echo $title; ?> | Entrepreneurship Cell | GD Goenka Technology Business Incubator | GD Goenka University
        </title>
        <!-- list of style sheets -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/common.css" />
        <?php
            $template = '<link rel="stylesheet" type="text/css" href="%s" />';
            foreach($stylesheets as $stylesheet) {
                printf($template, $stylesheet);
            }
            echo "\n";
        ?>
    </head>
    <body>
        <div class="container-fluid background">
            <div class="container-fluid wrapper">
                    <nav class="navbar-default">
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                                // will print list of li inside
                                // the navbar that has link to
                                // different page. Also, auto assigns
                                // active class li based on current script
                                $listOfPages = array(
                                    '/index.php' => 'Home',
                                    '/testimonials.php' => 'Testimonials',
                                    '/events.php' => 'Events',
                                    '/contactus.php' => 'Contact Us',
                                    '/supportteam.php' => 'Support Team',
                                    '/enthusiasts.php' => 'Enthusiasts',
				                            '/ambassadors.php' => 'Ambassadors'

                                );
                                $template = '<li class="%s"><a href="%s" class="whitish">%s</a></li>';
                                foreach($listOfPages as $pagePath => $pageName) {
                                    $activeClass = 'notactive';
                                    // check for current script
                                    if(strcmp($pagePath, $currentScript) === 0) {
                                        $activeClass = 'active';
                                    }
                                    printf($template, $activeClass, $pagePath, $pageName);
                                }
                            ?>
                        </ul>
                    </nav>
            </div>
        </div>
