// This js file is inspired from week 7 Tute/Lab sheet.
//This file is used to validate the CoutractUs Page
// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            firstname: "required",
            surname: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            //Added extra validaitons to fit my website design
            PhoneNumber: "required",
            club: "required",
            member: "required",
            talkabout: "required",
            message: "required",
        },
        // Specify validation error messages
        //Added extra error messages to fit my website design
        messages: {
            firstname: "Please enter your firstname",
            surname: "Please enter your surname",
            email: "Please enter a valid email address",
            PhoneNumber:"Please enter your Phone Number",
            club: "Please choose a cluub",
            member: "Please enter number of mamber/members",
            talkabout:"Please choose an option",
            message: "Please enter your comment/enquiry"
            
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});
