$("#SignUpForm").validate({
    rules:{
        firstName:{
            required:true,
            minlength:2,
        },
        lastName:{
            required:true,
            minlength:2,
        },
        SignUpEmail:{
            required:true,
            email:true,
        },

        SignUpPassword:{
            required:true,
            minlength:8,
        },
        ConfirmPassword:{
            minlength:8,
            equalTo: "#pass",
        }
    }
});
$("#SignInForm").validate({
    rules:{
        Email:{
            required: true,
            email: true,
        },
        Password:{
            required: true,
        },
    }
});
