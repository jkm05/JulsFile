$(document).ready(function() {
    $('#add_education').click(function(){
        $(this).addClass('hidden');
        $('.add-edit-div').removeClass('hidden');
        $('.btn-add-div').removeClass('hidden');
    });

    $('#edit_education').click(function(){

        $('#add_education').addClass('hidden');
        $('.add-edit-div').removeClass('hidden');
        $('.btn-update-div').removeClass('hidden');

        var exp_id = $(this).attr('data-id');
        $.ajax({
            url: base_url+'education/get_education_info',
            type: 'get',
            dataType: 'json',
            data: {'id':exp_id},
            success: function(datus) {
                v = datus.data;
                $('#education_id').val(v.id);
                $('#university').val(v.university);

                grad_date = new Date(v.grad_date);
                grad_month = grad_date.getMonth();
                grad_month = (parseInt(grad_month) + 1);
                if(grad_month < 10){
                    grad_month = '0' + (parseInt(grad_month) + 1);
                }
                grad_year = grad_date.getFullYear();

                $('option:selected', 'select[name="grad_date_month"]').removeAttr('selected');
                $('select[name="grad_date_month"]').find('option[value="'+ grad_month +'"]').attr("selected",true);

                $('#grad_date_year').val(grad_year);
                
                $('option:selected', 'select[name="qualification"]').removeAttr('selected');
                $('select[name="qualification"]').find('option[value="'+ v.qualification +'"]').attr("selected",true);

                $('option:selected', 'select[name="field_of_study"]').removeAttr('selected');
                $('select[name="field_of_study"]').find('option[value="'+ v.field_of_study +'"]').attr("selected",true);
                
                $('#major').val(v.major);
                $('#grade').val(v.grade);
                $('#additional_info').val(v.additional_info);
            }
        });
    });

    $('#del_education').click(function(){
        if(confirm('are you sure you want to delete this education?')){
            var exp_id = $(this).attr('data-id');
            $.ajax({
                url: base_url+'education/delete_education',
                type: 'post',
                dataType: 'json',
                data: {'id':exp_id},
                success: function(datus) {
                    if(datus.success){
                        alert('Education successfully deleted');
                        window.location = base_url+'education';
                    }
                    else{
                        alert(datus.message);
                    }
                }
            });
        }
        else{
            return false;
        }
    });

    $('#cancel-experience').click(function(){
        $('#add_experience').removeClass('hidden');
        $('.add-edit-div').addClass('hidden');
        $('.btn-add-div').addClass('hidden');
        $('.btn-update-div').addClass('hidden');
        $('#experience_id').val('');
    });

    $('#specialization').change(function(){

        var specialization = $(this).val();

        $("#role > option").each(function() {
            if(specialization == $(this).attr('data-specialization')){
                $(this).removeClass('hidden');
            }
            else{
                $(this).addClass('hidden');
            }
        });
    });

    $('.save-experience').click(function(){

        var position_title = $('#position_title').val();
        var company_name = $('#company_name').val();
        var duration_from_month = $('#duration_from_month').val();
        var duration_from_year = $('#duration_from_year').val();
        var duration_to_month = $('#duration_to_month').val();
        var duration_to_year = $('#duration_to_year').val();
        var specialization = $('#specialization').val();
        var role = $('#role').val();
        var industry = $('#industry').val();
        var position_level = $('#position_level').val();
        var salary = $('#salary').val();
        var description = $('#description').val();

        if(position_title == ''){
            alert('Please fill up Position Title');
            return false;
        }
        if(company_name == ''){
            alert('Please fill up Company Name');
            return false;
        }
        if(duration_from_year == ''){
            alert('Please fill up Year');
            return false;
        }
        if(duration_to_year == ''){
            alert('Please fill up Year To');
            return false;
        }
        if(specialization == ''){
            alert('Please select Specialization');
            return false;
        }
        if(role == ''){
            alert('Please select Role');
            return false;
        }
        if(industry == ''){
            alert('Please select Industry');
            return false;
        }
        if(position_level == ''){
            alert('Please select Position Level');
            return false;
        }
        if(salary == ''){
            alert('Please select Salary');
            return false;
        }
        if(description == ''){
            alert('Please fill up Experience Description');
            return false;
        }
    });
});