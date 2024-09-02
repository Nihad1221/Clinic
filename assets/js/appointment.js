$(document).ready(function () {
  $("#bookAppointment").click(function () {
    $(".errors").html("");
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();

    if (!name) {
      $(".name-error").html("Ad mütləqdir");
    }

    if (!email) {
      $(".email-error").html("Email mütləqdir");
    }

    $.ajax({
      type: "POST",
      url: $("#rootUrl").val() + "/controllers/AppointmentController.php",
      data: {
        name,
        email,
      },
      success: function (response) {
        alert(response);
      },
    });
  });
});
