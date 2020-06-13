
$(function() {
    // Get the form.
    var form = $('#comment');

    function checkIfEmpty(str) {
       
        return !str||!str.trim();
      }
    

    // Set up an event listener for the contact form.
    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();
        var comment = $('#commentText').val();
        var checkEmpty = checkIfEmpty(comment);
        if(!checkEmpty)
        {
            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
               // alert(response);
                if(response)
                {
                    console.log("youpi")
                    window.location.href="http://localhost/cela/Description.php"
                }
            });
        }
        else{
            alert("Your message is empty !")
        }
        

    })

});

