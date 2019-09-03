$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var next = $(".next");
var answer = {};
var currentQuestion = $(".activeQuestion");

$(".start_test").click(function () {
    $(".instruction").hide();
    next.show();
    $(".constant_description, .constant, .question_numbers").show();
    $(".question1").addClass("activeQuestion");
    $(".b1").addClass("btn-info");
    $(this).hide();
});

$(".message").click(function () {
    $(this).hide();
});

$(".b").click(function () {
    if (!$(this).hasClass('disabled')) {
        var number = $(this).prop('class');
        console.log(number);
        var index = number.indexOf(' ');
        number = parseInt(number.substr(1, index));
        console.log(number);

        var currentQuestion = $(".activeQuestion");
        var question_number = currentQuestion.prop('class');
        var index_current = question_number.indexOf(' ');

        question_number = question_number.substr(0, index_current);
        var number_current = parseInt(question_number.substr(8));

        currentQuestion.hide().removeClass('activeQuestion');
        $(".question" + number).addClass('activeQuestion').show();
        $(".b" + number_current).removeClass('btn-info').addClass('btn-default');
        $(this).addClass('btn-info');
    }
});


$(".answer").click(function () {
    var currentQuestion = $(".activeQuestion");
    if (currentQuestion.hasClass("question22")) {
        $(".show_results").show();
    }

    $(this).addClass("answer_choice");
    $(this).siblings().removeClass("answer_choice");

    var question_number = currentQuestion.prop('class');
    var index = question_number.indexOf(' ');

    question_number = question_number.substr(0, index);
    var number = question_number.substr(8);
    answer[question_number] = currentQuestion.find(".answer_choice").prop("id");
    $(".b" + number).removeClass('btn-info').addClass('btn-success');
});

$(".show_results").click(function () {
    var counter = 0;
    for (var i = 1; i <= 22; i++) {
        if ($(".b" + i).hasClass('btn-success')) {
            counter++;
        }
    }
    if (counter === 22) {
        currentQuestion.hide().removeClass("activeQuestion");
        $.post("/get-info", answer, function (data, status) {
            var type = JSON.parse(data);
            $("#type1").text(getType(type.type1));
            $("#type2").text(getType(type.type2));
            $("#type3").text(getType(type.type3));

            type.melancholic = [type.melancholic1, type.melancholic2, type.melancholic3];
            type.sanguine = [type.sanguine1, type.sanguine2, type.sanguine2];
            type.choleric = [type.choleric1, type.choleric2, type.choleric3];
            type.phlegmatic = [type.phlegmatic1, type.phlegmatic2, type.phlegmatic3];

            drawPieChart(type);

            next.hide();
            $(".constant, .constant_description, .question_numbers, .show_results, .activeQuestion, .message").hide();
            $(".result, .resultInfo, .show_answers, .additionalInfo").show();
        });
    } else {
        $(".message").show();
    }
});

next.click(function () {
    var currentQuestion = $(".activeQuestion");
    var question_number = currentQuestion.prop('class');
    var index = question_number.indexOf(' ');

    question_number = question_number.substr(0, index);
    var number = parseInt(question_number.substr(8)) + 1;
    var button_next = $(".b" + number);
    var button_current = $(".b" + (number - 1));
    if (!button_current.hasClass('btn-success')) {
        button_current.addClass('btn-default');
    }
    button_current.removeClass('btn-info');
    button_next.addClass('btn-info').removeClass('btn-default').removeClass('disabled');

    for (var i = 11; i <= 22; i++) {
        if (currentQuestion.hasClass("question" + i)) {
            $(".constant, .constant_description").hide();
            $('.constant_description_variable, .constant_variable').show();
        }
    }

    if (currentQuestion.hasClass("question21")) {
        next.hide();
    }

    var nextQuestion = currentQuestion.next();
    currentQuestion.hide().removeClass("activeQuestion");
    nextQuestion.show().addClass("activeQuestion");
});

$(".show_answers").click(function () {
    $(".constant, .constant_description, .question_numbers, .show_results, .hide_details, .show_details, .activeQuestion").show();
    $(".result, .resultInfo, .additionalInfo, .show_answers, .show_details, .hide_details").hide();
});

$(".show_details").click(function () {

    $(".resultInfo").removeClass("col-md-offset-4");
    $(".additionalInfo").show();
    $(this).hide();
    $(".hide_details").show();
});

$(".hide_details").click(function () {
    $(".resultInfo").addClass("col-md-offset-4");
    $(".additionalInfo").hide();
    $(this).hide();
    $(".show_details").show();
});