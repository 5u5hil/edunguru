<?php
get_header();



$courseId = end((explode('/', rtrim($_SERVER['REQUEST_URI'], '/'))));




$course = $api->getCourse($courseId);
?>


<section class="inner-header divider bg-bread">
    <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white text-center mt-0 mb-0">Generate Practice Test (<?= $course['title'] ?>)</h2>
                    <p class="txt-white text-center"><?= $course['subtitle'] ?></p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--<div class="container-fluid inner-header course-det-divider divider layer-overlay overlay-dark-5" data-bg-img="https://s2.pluralsight.com/learner/ab1f264000bfb145cfa246fde77e831f.jpg">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="course-detail-img"><img src="<//?= $course['img'] ?>" /></div>
                <h1 class="course-title">Generate Practice Test (<//?= $course['title'] ?>)</h1>
                <p class="txt-white"><//?= $course['subtitle'] ?></p>

            </div>
        </div>

    </div>
</div>-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="accordion5" class="panel-group accordion transparent">
                    <form method="post" action='/take-test/'>
                        <input type="hidden" name="courseId" value="<?= $courseId ?>"/>
                        <?php
                        $chapters = $api->getCourseChapters($courseId);

                        $b = 1;
                        foreach ($chapters as $chapter) {
                            ?> 

                            <div class="panel">
                                <div class="panel-title"> 
                                    <a class="collapsed" data-parent="#accordion5" data-toggle="collapse" href="#accordion5<?= $b ?>" aria-expanded="false"> <span class="open-sub"></span> 
                                        <strong>
                                            <label for="<?= $chapter['id'] ?>" class="mb-0"><input type='checkbox' value="<?= $chapter['id'] ?>" id='<?= $chapter['id'] ?>' name="chapters[]"> <?= $chapter['title'] ?> (<?= $chapter['count'] ?>)</label>
                                        </strong>
                                    </a> 
                                </div>
                                <?php
                                $topics = $api->getChapterTopics($chapter['id']);
                                ?> 
                                <div id="accordion5<?= $b ?>" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                                    <div class="panel-content">
                                        <div>
                                            <ul>
                                                <?php foreach ($topics as $topic) { ?> 
                                                    <li>
                                                        <label for="<?= $topic['id'] ?>"><input type='checkbox' name='topicNames[]' value="<?= $topic['id'] ?>" id='<?= $topic['id'] ?>'> <?= $topic['title'] ?> (<?= $topic['count'] ?>)</label>
                                                    </li>
                                                <?php }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $b++;
                        }
                        ?>
                        <input type="text" value="" name="questions" class="mt-15" />
                        <input type="text" value="" name="marks" class="mt-15" />
                        <?php
                        $diffcultyLevel = $api->getDifficultyLevel();
                       // print_r($diffcultyLevel['choices'])
                        ?>
                        <select name="diffcultyLevel" id="diffcultyLevel" />
                        <option value="">Please select difficulty level</option>
                        <?php foreach ($diffcultyLevel['choices'] as $key => $value) { ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php }
                        ?>
                        </select>
                        <input type="submit" value="Take Test" name="submit" class="btn btn-success mt-15" />
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>