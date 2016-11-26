<?php 
    //TODO:
    //about
    //contact
    //package source
    
    $domain = "localhost:8000";
    $title = "articles";

    //$article_path = "articles/" . urldecode($_SERVER['QUERY_STRING']); 
    $escaped_article_path = "articles/" . preg_replace('/[^A-Za-z0-9_\- ()]/', '_', urldecode($_SERVER['QUERY_STRING']));
    
    $article_exists = is_file($escaped_article_path);
    
    date_default_timezone_set('America/Edmonton');

    if ($article_exists) {
        
        $article_create_time = filemtime($escaped_article_path);
        
        $article_file = fopen($escaped_article_path, "r") or die("Unable to open file!");
        $article_title = fgets($article_file);
        $article_contents = fread($article_file,filesize($escaped_article_path));
        fclose($article_file);
        
        $fb_link = "https://www.facebook.com/sharer/sharer.php?u=" . $domain . "/" . urlencode($_SERVER['REQUEST_URI']) . "&display=popup&ref=plugin&src=share_button'data-dnt='true";
        $reddit_link = "https://www.reddit.com/submit?url=" . $domain . urlencode($_SERVER['REQUEST_URI']);
        
        $email_subject = urlencode($domain . " | " . $article_title);
        $email_body = urlencode("check out " . $article_title . $domain . $_SERVER['REQUEST_URI']);
        
        $email_link = "mailto:someone@example.com?Subject=" . $email_subject . "&Body=" . $email_body;
    
        include 'config/article.php';
    } else {
        
        include 'config/main.php';
    }
?>
