$(document).ready(function(){
    $("#searchform").submit(function(e){
        e.preventDefault();
        const hashtag=$("#hashtag").val();
        $("#searchstatus").text("Loading.......");
        $("#searchresults").html("");
        $.ajax({
            
        });
    });
});
