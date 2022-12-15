$(".approve-appointment").click(function() {
    $("#approve-modal").fadeIn("fast")
    let btn = $(this).val()
    let element = document.getElementById("approve-btn")
    element.value = btn
})

$(".cancel-appointment").click(function() {
    $("#cancel-modal").fadeIn("fast")
    let btn = $(this).val()
    let element = document.getElementById("cancel-btn")
    element.value = btn
})

$("#approve-cancel-btn").click(function() {
    $("#approve-modal").fadeOut("fast")
})

$("#cancel-cancel-btn").click(function() {
    $("#cancel-modal").fadeOut("fast")
})