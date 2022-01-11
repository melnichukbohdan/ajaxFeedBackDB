$(document). ready(function (){
    $("#sendMail").on('click', function (){
        var emailValue = $("#email").val().trim();
        var nameValue = $("#name").val().trim();
        var phoneValue = $("#phone").val().trim();
        var messageValue = $("#message").val().trim();

        if (emailValue == "") {
            $("#errorMess").text("Enter email");
            return false;
        }else if (nameValue == "") {
            $("#errorMess").text("Enter name");
            return false;
        }else if (phoneValue == "") {
            $("#errorMess").text("Enter phone");
            return false;
        }else if (messageValue.length < 5) {
            $("#errorMess").text("Enter message at least 5 characters");
            return false;
        }

        $("#errorMess").text("");

        $.ajax({
            method: 'POST',
            url: "ajax/datahedler.php",
            data: { email:emailValue, name:nameValue, phone:phoneValue, message:messageValue }
        })
            .done(function (msg){
                alert("Data Saved:" + msg);
            });
        $("#email").val('');
        $("#name").val('');
        $("#phone").val('');
        $("#message").val('');

       // console.log(email, name, phone, message);
    })
});
