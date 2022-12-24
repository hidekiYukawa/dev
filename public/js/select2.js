$(function () {

    $("#offer_type-select").select2({
        closeOnSelect: true,
        placeholder: {
            id: '-1', // the value of the option
            text: 'Select an option'
        },
        allowHtml: true,
        // allowClear: false,
        tags: false // создает новые опции на лету
    });

    $("#object_type-select").select2({
        closeOnSelect: true,
        placeholder: {
            id: '-1', // the value of the option
            text: 'Select an option'
        },
        allowHtml: true,
        // allowClear: false,
        tags: true // создает новые опции на лету
    });
})


function iformat(icon, badge,) {
    var originalOption = icon.element;
    var originalOptionBadge = $(originalOption).data('badge');

    return $('<span><i class="fa ' + $(originalOption).data('icon') + '"></i> ' + icon.text + '<span class="badge">' + originalOptionBadge + '</span></span>');
}
