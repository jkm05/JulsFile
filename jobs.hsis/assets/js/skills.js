$(document).ready(function() {
    $('#add_skill').click(function(){
        var new_skill = '<div class="form-group">' +
                    '<div class="col-sm-1">' +
                    '<input type="hidden" name="skill_id[]" value="">' +
                    '&nbsp;</div>' +
                    '<div class="col-sm-6">' +
                        '<input type="text" class="form-control" id="skill[]" name="skill[]" placeholder="Enter Skill">' +
                    '</div>' +
                    '<div class="col-sm-3">' +
                        '<select class="form-control" name="proficiency[]">' +
                                '<option value="advanced" selected="">Advanced</option>' +
                                '<option value="intermediate">Intermediate</option>' +
                                '<option value="beginner">Beginner</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="col-sm-2" style="margin-top: 7px;">' +
                        '<a href="javascript:;" title="Delete Skills"><span class="glyphicon glyphicon-trash delete-skill"></span></a>' +
                    '</div>' +
                '</div>';
        $('#main-skills').append(new_skill);
    });

    $('.action-div').delegate('.delete-skill', 'click', function(e){
//    $('.delete-skill').click(function(e){
        if(confirm('are you sure you want to delete this skill?')){
            var skill_obj = $(this).prev('input');
            var skill_id = skill_obj.val();
//            var exp_id = $(this).closest('div').closest('div');console.log(exp_id.html());

                $.ajax({
                url: base_url+'skills/delete_skills',
                type: 'post',
                dataType: 'json',
                data: {'id':skill_id},
                success: function(datus) {
                    skill_obj.parent('div').parent('div').remove();
                    alert('skill successfully deleted');
                }
            });
        }
    });
});