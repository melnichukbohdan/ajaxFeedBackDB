$(document). ready(function (){
   // this function display table with feedbacks
    function showdata (){
        var output = [];
        $.ajax ({
            tupe : "GET",
            data : "json",
            url : "ajax/dataRender.php",
            success : function (data) {
                data = JSON.parse(data);
                if (data) {
                    x = data;
                } else {
                    x = "";
                }
                for (i=0; i<x.length; i++ ) {
                    output +=
                    "<tr><td>"+
                    x[i].name+
                    "</td><td>"+
                    x[i].message+
                    "</td></tr>"
                }
                $("tbody").html(output);
            }
        })
    }
        showdata();

    // accept data from the form
    $("#sendFB").on('click', function (){
        var emailValue = $("#email").val().trim();
        var nameValue = $("#name").val().trim();
        var phoneValue = $("#phone").val().trim();
        var messageValue = $("#message").val().trim();

        //check data and send message if empty field
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

        //call Ajax method for record data to DB
        $.ajax({
            method: 'POST',
            url: "ajax/dataHedler.php",
            data: { email:emailValue, name:nameValue, phone:phoneValue, message:messageValue }
        })
            .done(function (msg){
                alert("Data Saved:" + msg);
                //call function showdata for rebuild table with feedbacks
                showdata();
            });
            //cleaning fields in table
        $("#email").val('');
        $("#name").val('');
        $("#phone").val('');
        $("#message").val('');

    })
});
