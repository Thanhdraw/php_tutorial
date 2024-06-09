$(document).ready(function () {
    $("#load_user").click(function () {
        $.ajax({
            url: "user.php",
            method: "GET",
            dataType: "JSON",
            success: function (response) {

                // console.log(JSON.stringify(response));
                // let data = JSON.stringify(response)
                // $("#show_user").html(data);
                let html = "";
                $.each(response, function (key, value) {
                    html += "<tr>";
                    html += "<td>" + value.name + "</td>";
                    html += "<td>" + value.password + "</td>";
                    html += "</tr>";
                })
                $("#show_user").html(html);

            },
            error: function (response) {
                console.log("error" + response);
            }
        })

    })
})