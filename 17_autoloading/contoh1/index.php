<?php
// new spl_autoload_register() in PHP8.1
spl_autoload_register(function($class){
    $path = __DIR__ . '/' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    if(file_exists($path)){
        require $path;
    }
});

$category = new Category();
$post = new Post();
echo "Category : " . $category->getName();

echo ", Title : " . $post->getTitle();
echo ", Isinya : " . $post->getBody() . "<br/>";
?>