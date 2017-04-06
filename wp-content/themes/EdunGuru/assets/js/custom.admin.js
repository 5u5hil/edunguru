
ajaxurl = window.location.origin + '/wp-admin/admin-ajax.php';
var $ = jQuery.noConflict();

jQuery('.selectit').click(function () {

});
var categories = [];
//onload get selected values for course
$(document).ready(function () {
    var categories ;
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'filterByTaxonomy', categories: $('#taxonomy-course-categories select').val(), categoryType: 'course-categories', postType: 'courses', postId: $('#post_ID').val(), currentPostType: $('#post_type').val()},
        success: function (data) {
            if ($('#post_type').val() === 'chapters') {
                jQuery('#acf-field_58e2234a8acdf').html(data);
            } else {
                jQuery('#acf-field_58dce36248e7c').html(data);
            }
            $('.course-field select').html(data);
            if ($('#post_type').val() == 'tests' || $('#post_type').val() == 'questions') {
                 categories = $('.course-field select').val();

            } else {
                 categories = $('#acf-field_58dce36248e7c').val();
            }
            $.ajax({
                url: ajaxurl,
                method: "POST",
                data: {action: 'chaptersFilter', courseId: categories, postId: $('#post_ID').val()},
                success: function (data) {
                    $('#acf-field_58de17c79b4cf').html(data);
                    $('.chapter-field select').html(data);
                    if ($('#post_type').val() != 'tests') {
                        filterTopic();
                    } else {
                        var chapterId = $('.chapter-field select').val();
                        getQuestionsOnChapter(chapterId);  //for test
                    }
                },
                error: function (data) {
                    console.log(data)
                }
            })

        },
        error: function (data) {
            console.log(data)
        }
    })



})




//on change of course categories get course
jQuery(document).on('change', "#taxonomy-course-categories select", function () {
    var categories = $(this).val();

    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'filterByTaxonomy', categories: categories, categoryType: 'course-categories', postType: 'courses'},
        success: function (data) {
            console.log("Hello");
            if ($('#post_type').val() === 'chapters') {
                jQuery('#acf-field_58e2234a8acdf').html(data);
            } else {
                jQuery('#acf-field_58dce36248e7c').html(data);
            }
            $('.course-field select').html(data);
            $('.test-questions-field select').html("");//test questions 
            $('.chapter_field select').html("<option value='0'>Please Select Chapter</option>");
            $('.chapter-field select').html("<option value='0'>Please Select Chapter</option>");
            $('.topic-field select').html("<option value='0'>Please Select Topic</option>");
        },
        error: function (data) {
            console.log(data);
        }
    })
})

//on change of course course get chapters
$(document).on('change', '#acf-field_58dce36248e7c', function () {
    var categories = $('#acf-field_58dce36248e7c').val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'chaptersFilter', courseId: categories},
        success: function (data) {
            $('#acf-field_58de17c79b4cf').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    })

})


//Question relational select box************
//course categories

$(document).on('change', '.course-cat', function () {
    var categoryId = $('.course-cat').find('input[type=hidden]').val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'filterByTaxonomy', categories: categoryId, categoryType: 'course-categories', postType: 'courses', postId: $('#post_ID').val(), currentPostType: $('#post_type').val()},
        success: function (data) {
            jQuery('.course-field select').html(data);
            var categories = $('.course-field select').val();
            filterChapter(categories);
        },
        error: function (data) {
            console.log(data)
        }
    })
})

//chapter function
function filterChapter(categories) {
    if ($('#post_type').val() != 'tests') {
        console.log(categories);
        $.ajax({
            url: ajaxurl,
            method: "POST",
            data: {action: 'chaptersFilter', courseId: categories, currentPostType: $('#post_type').val(), postId: $('#post_ID').val()},
            success: function (data) {
                $('.chapter-field select').html(data);
                filterTopic();
            },
            error: function (data) {
                console.log(data)
            }
        })
    }
}

//filter topic
function filterTopic() {
    var chapterId = $('.chapter-field select').val();
    var courseId = $('.course-field select').val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'topicsFilter', chapterId: chapterId, courseId: courseId, postId: $('#post_ID').val()},
        success: function (data) {
            $('.topic-field select').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    });
}
//course
$(document).on('change', '.course-field select', function () {
    var categories = $(this).val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'chaptersFilter', courseId: categories},
        success: function (data) {
            $('.chapter-field select').html(data);
            $('.test-questions-field select').html("");//test questions 
            $('.topic-field select').html("<option value='0'>Please Select Topic</option>");//test questions 
        },
        error: function (data) {
            console.log(data);
        }
    })

})
$(document).on('change', '.questions-field select', function () {
    var categories = $(this).val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'chaptersFilter', courseId: categories},
        success: function (data) {
            $('.chapter-field select').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    })

})

//chapters
$(document).on('change', '.chapter-field select', function () {
    
    var chapterId = $(this).val();
    var courseId = $('.course-field select').val();
    if ($('#post_type').val() != 'tests') {
        $.ajax({
            url: ajaxurl,
            method: "POST",
            data: {action: 'topicsFilter', chapterId: chapterId, courseId: courseId},
            success: function (data) {
                $('.topic-field select').html(data);
            },
            error: function (data) {
                console.log(data);
            }
        })
    } else {
        getQuestionsOnChapter($(this).val());
    }

})

function getQuestionsOnChapter(chapterId) {
    console.log(chapterId);
    var chapterId = chapterId;
    var courseId = $('.course-field select').val();
    $.ajax({
        url: ajaxurl,
        method: "POST",
        data: {action: 'questionsFilter', chapterId: chapterId, courseId: courseId,postId: $('#post_ID').val()},
        success: function (data) {
            $('.test-questions-field select').html(data);
        },
        error: function (data) {
            console.log(data);
        }
    })
}

  