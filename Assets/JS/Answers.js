$(document).ready(function(){

    $('.js-example-basic-multiple').select2();

    $(".ans-button").click(function(){
        $('.add-answers , .bg-modal').fadeIn("slow");
        console.log("pop");
    });

    $(".close").click(function(){
        $('.add-answers , .add-comment, .add-comment-question, .bg-modal').fadeOut("slow");
    })

    $(".comment-button").click(function(){
        $('.add-comment-question , .bg-modal').fadeIn("slow");
        console.log("pop");
    });

    $(".reply").click(function(){
        let idReply = $('.reply').attr('name');
        console.log(idReply);
    })

    $(".list-button").click(function(){

        $(".card-wrap").fadeToggle(800)
        $(".acc-list-question").fadeToggle(800);

    })
    let id = '';
    $(".button-reply").click(function(event) {
        $('.add-comment , .bg-modal').fadeIn("slow");
        event.preventDefault();

        id = event.target.id;

        console.log(id);

    });
    
    $(".form-commit").on('submit', function(event){
        event.preventDefault();
        let userId = $("[name='user_id']").val();
        let textComment = $("[name='comment-reply']").val();
        let queId = $('[name="question_id"]').val();
        console.log(queId);
        console.log(textComment);
        $.ajax({
            url: BASE_URL + 'comment/reply',
            method: 'POST',
            data: {
                comment_id : id,
                user_id : userId,
                comment :  textComment
            },
            
            dataType: 'JSON',
            success:function(data){
                console.log(data);
            },
            error: function(response){
                window.location.href = `${BASE_URL}forum/detail/${queId}`;
                console.log(response);
                
            }}); 

    })

});
