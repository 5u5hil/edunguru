<?php
get_header();




$courseId = get_the_ID();
$course = $api->getCourse($courseId);
?>



<div class="container-fluid inner-header course-det-divider divider layer-overlay overlay-dark-5" data-bg-img="https://s2.pluralsight.com/learner/ab1f264000bfb145cfa246fde77e831f.jpg">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="course-detail-img"><img src="<?= $course['img'] ?>" /></div>
                <h1 class="course-title"><?= $course['title'] ?></h1>
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
                    <ul id="myTab" class="nav nav-tabs boot-tabs">
                        <li class="active"><a href="#chapters" data-toggle="tab"> Chapters</a></li>
                        <li><a href="#practice" data-toggle="tab"> Practice Test</a></li>
                        <li><a href="#analytics" data-toggle="tab"> Analytics</a></li>
                    </ul>
                    <div id="" class="tab-content">
                        <div class="tab-pane fade in active" id="chapters">
                            <?php
                            $chapters = $api->getCourseChapters($courseId);
                            ?> 
                            <ul class="list list-border">
                                <?php foreach ($chapters as $chapter) { ?> 
                                    <li><a href='<?= $chapter['link'] ?>'> <?= $chapter['title'] ?></a> <a href='<?= $topic['link'] ?>' class="btn btn-sm btn-theme-colored pull-right">Explore</a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="practice">
                            <div class="row ">
                                <div class="col-md-12">
                                    <a href="/practice-test/<?= $courseId ?>" class="btn btn-success pull-right">Generate Test</a>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="analytics">

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>




<?php get_footer() ?>