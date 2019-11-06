$("#directive-cards").on("click", ".vote-check", function () {
    var val = $(this).val();
    var title = $(this).prop('title');
    console.log(".vote-check."+title+".op-"+val);

    if ($(".vote-check."+title+".op-"+val).prop('checked')) {
        console.log("check");
        $(".vote-check.op-" + val).not(this).prop('disabled', true);
        $(".vote-option label.op-" + val).parent().not($(".vote-option label." + title + ".op-" + val)).parent().toggleClass("disable");
    }
    else {
        console.log("uncheck");
        $(".vote-check.op-" + val).prop('disabled', false);
        $(".vote-option label.op-" + val).not($(".vote-option  label." + title + ".op-" + val)).toggleClass("disable");
    }
        
});