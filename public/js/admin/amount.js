function  getData(elem) {
    // console.log(1);
    $.ajax({
        url: "../../../controller/admin/show/amountInDay.php",
        method: "post",
        data: {
            id: $(elem).data('id')
        },
        success: function (result) {
            $('#modal-content table tbody').html(result);
            $('#modal-popup').modal();
        }
    });
}