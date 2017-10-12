$(document).ready(function() {
    $('#add_experience').click(function(){
        $(this).addClass('hidden');
        $('.add-edit-div').removeClass('hidden');
        $('.btn-add-div').removeClass('hidden');
    });

    $('#edit_experience').click(function(){

        $('#add_experience').addClass('hidden');
        $('.add-edit-div').removeClass('hidden');
        $('.btn-update-div').removeClass('hidden');

        var exp_id = $(this).attr('data-id');
        $.ajax({
            url: base_url+'home/get_experience_info',
            type: 'get',
            dataType: 'json',
            data: {'id':exp_id},
            success: function(datus) {
                v = datus.data;
                $('#experience_id').val(v.id);
                $('#position_title').val(v.position_title);
                $('#company_name').val(v.company_name);

                from_date = new Date(v.duration_from);
                from_month = from_date.getMonth();
                from_month = (parseInt(from_month) + 1);
                if(from_month < 10){
                    from_month = '0' + (parseInt(from_month) + 1);
                }
                from_year = from_date.getFullYear();

                $('option:selected', 'select[name="duration_from_month"]').removeAttr('selected');
                $('select[name="duration_from_month"]').find('option[value="'+ from_month +'"]').attr("selected",true);

                $('#duration_from_year').val(from_year);

                to_date = new Date(v.duration_to);
                to_month = to_date.getMonth();
                to_month = (parseInt(to_month) + 1);
                if(to_month < 10){
                    to_month = '0' + (parseInt(to_month) + 1);
                }
                to_year = to_date.getFullYear();

                $('option:selected', 'select[name="duration_to_month"]').removeAttr('selected');
                $('select[name="duration_to_month"]').find('option[value="'+ to_month +'"]').attr("selected",true);

                $('#duration_to_year').val(to_year);

                $('option:selected', 'select[name="specialization"]').removeAttr('selected');
                $('select[name="specialization"]').find('option[value="'+ v.specialization +'"]').attr("selected",true);
                
                $('option:selected', 'select[name="role"]').removeAttr('selected');
                $('select[name="role"]').find('option[value="'+ v.role +'"]').attr("selected",true);
                
                $('option:selected', 'select[name="industry"]').removeAttr('selected');
                $('select[name="industry"]').find('option[value="'+ v.industry +'"]').attr("selected",true);
                
                $('option:selected', 'select[name="position_level"]').removeAttr('selected');
                $('select[name="position_level"]').find('option[value="'+ v.position_level +'"]').attr("selected",true);
                
                $('#salary').val(v.salary);
                $('#description').val(v.description);
            }
        });
    });

    $('#del_experience').click(function(){
        if(confirm('are you sure you want to delete this experience?')){
            var exp_id = $(this).attr('data-id');
            $.ajax({
                url: base_url+'home/delete_experience',
                type: 'post',
                dataType: 'json',
                data: {'id':exp_id},
                success: function(datus) {
                    if(datus.success){
                        alert('Experience successfully deleted');
                        window.location = base_url+'home/experience';
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

        var fdate = new Date($("#duration_from_year").val()+'-'+$("#duration_from_month").val()+'-01');
        var tdate = new Date($("#duration_to_year").val()+'-'+$("#duration_to_month").val()+'-01');

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
        if(tdate < fdate){
            alert('Joined To Date Should not be less than Joined From Date');
            return false;
        }
    });
});