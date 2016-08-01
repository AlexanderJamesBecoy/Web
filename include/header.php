<?php
# Site settings
$site = array(
    "charset" => "UTF-8",           # Default: UTF-8
    "domain" => "localhost", 
    "name" => "Social Network", 
    "protocol" => "http",           # Default: https
    "robots" => "index, follow"     # Default: index, follow
);

# Quick variables; those with isset() check if a page setting exists, if not use the site setting)
$url = $site["protocol"] . "://" . $site["domain"];
$description = isset($page["description"]) ? $page["description"] : $site["description"];
$keywords = isset($page["keywords"]) ? $page["keywords"] : $site["keywords"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $site["name"]; ?></title>
        
        <meta charset="<?php echo $site["charset"]; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <meta name="robots" content="<?php echo $site["robots"]; ?>" />
        
        <style>
        
        </style>
    </head>
    
    <body>
        <h1><?php echo $site["name"]; ?></h1>
        <form>
            <input type="text" name="q" size="60" placeholder="Search...">
        </form>
