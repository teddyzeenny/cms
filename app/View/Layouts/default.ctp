<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <?php echo $this->Html->css('style'); ?>
        
        <meta charset="utf-8" />
    </head>
    <body>
        <div id="wrapper">
                <?php 
                    $nav = array();
                    $pages = $this->requestAction('pages/getTopNav');
                    foreach($pages as $page) {
                        $nav[] = array(
                            'title' => $page['Page']['title'],
                            'link' => array(
                                'controller' => 'pages',
                                'action' => 'display',
                                $page['Page']['slug']
                            )
                        );
                    }
                    $nav[] = array(
                        'title' => 'Google',
                        'link' => 'http://www.google.com',
                        'attributes' => array(
                            'target' => '_blank'
                        )
                    );
                    
                    
                    
                    $options = array(
                        'nav' => array(
                            'id' => 'top-nav',
                            'teddy' => 'raz'
                        ),
                        'li' => array('class' => 'top-nav-elem')
                    );
                    echo $this->Nav->create($nav, $options);
                ?>
            <section id="content">
                <?php echo $this->fetch('content'); ?>
            </section>
        
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <?php echo $this->Html->script('script'); ?>
    </body>
</html>