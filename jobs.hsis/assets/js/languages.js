$(document).ready(function() {
    $('#add_language').click(function(){
        var new_language = '<div class="form-group">' +
                    '<div class="col-sm-1">' +
                    '<input type="hidden" name="language_id[]" value="">' +
                    '&nbsp;</div>' +
                    '<div class="col-sm-5">' +
                        '<select class="form-control" name="language[]">' +
                                '<option value="Arabic">Arabic</option>' +
                                '<option value="Bahasa Indonesia">Bahasa Indonesia</option>' +
                                '<option value="Bahasa Malaysia">Bahasa Malaysia</option>' +
                                '<option value="Bengali">Bengali</option>' +
                                '<option value="Chinese">Chinese</option>' +
                                '<option value="Dutch">Dutch</option>' +
                                '<option value="English">English</option>' +
                                '<option value="Filipino">Filipino</option>' +
                                '<option value="French">French</option>' +
                                '<option value="German">German</option>' +
                                '<option value="Hebrew">Hebrew</option>' +
                                '<option value="Hindi">Hindi</option>' +
                                '<option value="Italian">Italian</option>' +
                                '<option value="Japanese">Japanese</option>' +
                                '<option value="Korean">Korean</option>' +
                                '<option value="Portuguese">Portuguese</option>' +
                                '<option value="Russian">Russian</option>' +
                                '<option value="Spanish">Spanish</option>' +
                                '<option value="Tamil">Tamil</option>' +
                                '<option value="Thai">Thai</option>' +
                                '<option value="Vietnamese">Vietnamese</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                        '<select class="form-control" name="spoken[]">' +
                                '<option value="10">10</option>' +
                                '<option value="9">9</option>' +
                                '<option value="8">8</option>' +
                                '<option value="7">7</option>' +
                                '<option value="6">6</option>' +
                                '<option value="5">5</option>' +
                                '<option value="4">4</option>' +
                                '<option value="3">3</option>' +
                                '<option value="2">2</option>' +
                                '<option value="1">1</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="col-sm-2">' +
                        '<select class="form-control" name="written[]">' +
                                '<option value="10">10</option>' +
                                '<option value="9">9</option>' +
                                '<option value="8">8</option>' +
                                '<option value="7">7</option>' +
                                '<option value="6">6</option>' +
                                '<option value="5">5</option>' +
                                '<option value="4">4</option>' +
                                '<option value="3">3</option>' +
                                '<option value="2">2</option>' +
                                '<option value="1">1</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="col-sm-2" style="margin-top: 7px;">' +
                        '<a href="javascript:;" title="Delete Skills"><span class="glyphicon glyphicon-trash delete-language"></span></a>' +
                    '</div>' +
                '</div>';
        $('#main-language').append(new_language);
    });

    $('.action-div').delegate('.delete-language', 'click', function(e){
//    $('.delete-skill').click(function(e){
        if(confirm('are you sure you want to delete this language?')){
            var language_obj = $(this).prev('input');
            var language_id = language_obj.val();
//            var exp_id = $(this).closest('div').closest('div');console.log(exp_id.html());

                $.ajax({
                url: base_url+'languages/delete_languages',
                type: 'post',
                dataType: 'json',
                data: {'id':language_id},
                success: function(datus) {
                    language_obj.parent('div').parent('div').remove();
                    alert('language successfully deleted');
                }
            });
        }
    });
});