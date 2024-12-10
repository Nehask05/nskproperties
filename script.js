$(document).ready(function() {
    // Form validation and smooth transitions
    $('#enquiryForm').on('submit', function(event) {
        let isValid = true;

        // Loop through each input to validate
        $(this).find('input, select, textarea').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '1px solid #ccc');
            }
        });

        // Check the math challenge (5 + 3)
        let mathAnswer = $('#mathChallenge').val();
        if (parseInt(mathAnswer) !== 8) {
            isValid = false;
            $('#mathChallenge').css('border', '2px solid red');
            alert('Please solve the math challenge correctly!');
        }

        // If any field is empty or math answer is wrong, prevent form submission
        if (!isValid) {
            event.preventDefault();
            alert('Please fill in all fields and solve the math challenge.');
        }
    });

    // Hover effect for submit button
    $('button').hover(
        function() {
            $(this).css('background-color', '#45a049');
        },
        function() {
            $(this).css('background-color', '#4CAF50');
        }
    );

    // Form input focus effect
    $('input, select, textarea').focus(function() {
        $(this).css('box-shadow', '0 0 10px rgba(76, 175, 80, 0.6)');
    }).blur(function() {
        $(this).css('box-shadow', 'none');
    });
});