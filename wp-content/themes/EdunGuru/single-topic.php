<?php
get_header();





$test = $api->getTest(get_the_ID());

echo(json_encode($test));

?>

<h1><?= $test['title'] ?> (<?= $test['chapter'] ?> / <?= $test['course'] ?>)</h1>

<h2>Questions</h2>
<ul>
    <?php
    foreach ($test['topics'] as $topic) {
        foreach ($topic['questions'] as $qn) {
            ?> <li><?= $qn['ID'] ?> </li>
            <?php
        }
    }
    ?>
</ul>




<?php get_footer() ?>