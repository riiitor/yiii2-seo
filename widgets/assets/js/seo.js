$(document).ready(function() {
    $('#seo-title, #seo-description, #seo-keywords').each(function() {
        var $label = $('label[for="' + $(this).attr('id')  + '"]');
        $label.text($label.attr('data-base-label') + ' (' + $(this).val().length + ')');
    });
});
$(document).on('input', '#seo-title, #seo-description, #seo-keywords', function() {
    var $label = $('label[for="' + $(this).attr('id')  + '"]');
    $label.text($label.attr('data-base-label') + ' (' + $(this).val().length + ')');
});
