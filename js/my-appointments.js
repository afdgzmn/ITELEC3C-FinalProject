$(".btn").click(function() {
    console.log("click")
    $("#cancel-modal").fadeIn("fast")
    let btn = $(this).val()
    let element = document.getElementById("cancel-btn")
    element.value = btn
})

$("#cancel-cancel-btn").click(function() {
    $("#cancel-modal").fadeOut("fast")
})