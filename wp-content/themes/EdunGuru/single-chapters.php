<?php
get_header();





$chapter = $api->getChapter(get_the_ID());
?>
<section class="inner-header divider bg-bread">
    <div class="container pt-10 pb-10">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-white text-center mt-0 mb-0"><?= $chapter['title'] ?> (<?= $chapter['course'] ?>)</h2>


                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container pt-50 pb-50">        
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <ul id="myTab" class="nav nav-tabs boot-tabs">
                        <li class="active"><a href="#topics" data-toggle="tab"> Topics</a></li>
                        <li><a href="#tests" data-toggle="tab"> Tests</a></li>
                        <li><a href="#bookmark" data-toggle="tab">Bookmark</a></li>
                    </ul>
                    <div id="" class="tab-content">
                        <div class="tab-pane fade in active" id="topics">
                            <?php
                            $topics = $api->getChapterTopics(get_the_ID());
                            ?> 

                            <ul class="list list-border">
                                <?php foreach ($topics as $topic) { ?> 
                                    <li><a href='<?= $topic['link'] ?>'> <?= $topic['title'] ?></a> <a href='<?= $topic['link'] ?>' class="btn btn-sm btn-theme-colored pull-right">Explore</a></li>
                                <?php }
                                ?>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tests">
                            <?php
                            $tests = $api->getChapterTests(get_the_ID());
                            ?> 

                            <ul class="list list-border">
                                <?php foreach ($tests as $test) { ?> 
                                    <li><a href='<?= $test['link'] ?>'> <?= $test['title'] ?></a> <a href='<?= $test['link'] ?>' class="btn btn-sm btn-theme-colored pull-right">Explore</a></li>
                                <?php }
                                ?>
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="bookmark">
                          

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>





<?php get_footer() ?>