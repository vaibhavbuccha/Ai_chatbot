<?php 

// print_r($_POST);
// echo __DIR__;
$id = $_POST['id'];

switch(true)
{
    case ($id == 1): 
        echo "<div style='margin:10px; padding:10px;background:#f0f0f0;border:1px solid white; '> <img src='https://scx1.b-cdn.net/csz/news/800/2019/3-robot.jpg' width='50px' height='50px' style='border-radius:50%' >&nbsp;&nbsp; Hello , I am <q>Robot</q> </div>";
    break;
    case ($id == 2): 
        echo "<div style='margin:10px; padding:10px;background:#f0f0f0;border:1px solid white; '> <img src='https://scx1.b-cdn.net/csz/news/800/2019/3-robot.jpg' width='50px' height='50px' style='border-radius:50%' >&nbsp;&nbsp; Happy to help you! </div>";
    break;
    case ($id == 7): 
        echo "<div style='margin:10px; padding:10px;background:#f0f0f0;border:1px solid white; '> <img src='https://scx1.b-cdn.net/csz/news/800/2019/3-robot.jpg' width='50px' height='50px' style='border-radius:50%' >&nbsp;&nbsp; Please send your query on <u>jainvaibhav415@gmail.com</u>  </div>";
    break;
    default:
    echo "<div style='margin:10px; padding:10px;background:#f0f0f0;border:1px solid white; '> <img src='https://scx1.b-cdn.net/csz/news/800/2019/3-robot.jpg' width='50px' height='50px' style='border-radius:50%' >&nbsp;&nbsp; We will back to you ASAP, Thanks. </div>";
    break;
}

?>