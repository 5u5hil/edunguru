<?php
get_header();



$courseId = $_REQUEST['courseId'];
$topics = $_REQUEST['topicNames'];


$course = $api->getCourse($courseId);
?>



<div class="container-fluid inner-header course-det-divider divider layer-overlay overlay-dark-5" data-bg-img="https://s2.pluralsight.com/learner/ab1f264000bfb145cfa246fde77e831f.jpg">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="course-detail-img"><img src="<?= $course['img'] ?>" /></div>
                <h1 class="course-title">Practice Test (<?= $course['title'] ?>)</h1>
                <p class="txt-white"><?= $course['subtitle'] ?></p>

            </div>
        </div>

    </div>
</div>

<section>
    <div class="container pt-50 pb-50">        
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <input type="hidden" name="courseId" value="<?= $courseId ?>"/>
                        <?php
                        $qns = $api->getTopicQuestions($topics);
                        ?> 
                        <ul>
                            <?php foreach ($qns as $qn) { ?> 
                                <li><?= $qn['question'] ?></li>


                                <ul>
                                    <?php foreach ($qn['options'] as $opt) { ?> 
                                        <li>
                                            <label for="<?= $opt['id'] ?>"><input type='checkbox' value="" id='<?= $opt['id'] ?>'> 
                                                <?= $opt['option'] ?>
                                            </label>
                                        </li>
                                    <?php }
                                    ?>
                                </ul>

                            <?php }
                            ?>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer() ?>