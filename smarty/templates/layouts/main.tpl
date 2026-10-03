<!DOCTYPE html>
<html lang="ru-ru" dir="ltr">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
     <link rel="stylesheet" href="/css/main.css">
     <script src="/js/sort.js"></script>
     <script src="/js/tags.js"></script>
</head>
<body>
{include file="components/header.tpl"}
<main>
    {block name="content"}{/block}
</main>
{include file="components/footer.tpl"}
</body>
</html>