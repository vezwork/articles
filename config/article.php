<!DOCTYPE html>
<html >
    <head>
    <meta charset="UTF-8">
        <title><?php echo $title; ?> | <?php echo $article_title; ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                width: 550px;
                margin: 0 auto;
                display: block;
            }
        </style>
    </head>
    <body>
        <a href="<?php echo $domain; ?>"><b><?php echo $title; ?></b></a>
        
        <!-- social sharing links -->
        <a href=<?php echo $fb_link ?> target="_blank">share on facebook</a>

        <a href="https://twitter.com/share" data-dnt="true" target="_blank">share on twitter</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

        <a href=<?php echo $reddit_link ?> target = "_blank">share on reddit</a>

        <a href=<?php echo $email_link ?> target="_blank">share thru email</a> 
        <!---->
        
        <h1><?php echo $article_title; ?>
            <sup><?php echo date ("M j<\s\up>S</\s\up>", $article_create_time); ?></sup>
        </h1>

        <p><?php echo $article_contents; ?><p>

        <a href="<?php echo $domain; ?>"><b><?php echo $title; ?></b></a>

    </body>
</html>