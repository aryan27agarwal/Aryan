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
        <!-- page title -->
        <title>
            <?php echo $title; ?> | Entrepreneurship Cell | GD Goenka Technology Business Incubator | GD Goenka University
        </title>
        <!-- list of style sheets -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/common.css" />
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
                                    '/enthusiasts.php' => 'Enthusiasts'
                                );
                                $template = '<li class="%s"><a href="%s" class="whitish">%s</a></li>';
                                foreach($listOfPages as $pagePath => $pageName) {
                                    $activeClass = 'notactive';
                                    // check for current script
                                    if(strcmp($pagePath, $currentScript) === 0) {
                                        $activeClass = 'active';
                                    }
                                    echo sprintf($template, $activeClass, $pagePath, $pageName);
                                }
                            ?>
                        </ul>
                    </nav>
            </div>
        </div>  