function check_records(){
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var pass = $('#password').val();
    var cpass = $('#cpassword').val();

    if(fname == ''){
        alert('First Name is required');
        return false;
    }
    if(lname == ''){
        alert('Last Name is required');
        return false;
    }
    if(pass != ''){
        if(pass.length < 8){
            alert('Password should not be less than 8 characters');
            return false;
        }
        if(pass != cpass){
            alert('Password did not match to Confirm Password');
            return false;
        }
    }
    
}