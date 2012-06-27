<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout; ?></title>
        <?php echo $this->Html->css('style'); ?>
        
        <meta charset="utf-8" />
    </head>
    <body>
        <div id="wrapper">
            <section id="content">
                <?php echo $this->fetch('content'); ?>
            </section>
        
        </div>
    </body>
</html>