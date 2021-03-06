
$(function() {
    // Get the form.
    var form = $('#login');

    function checkLetters(str) {
        let res=str.split('');
        for(var i=0;i<res.length;i++)
        {
            if(res[i].match("^[a-zA-Z]+$"))
            {
                return true;
            }
        }
        return false;
      }
    
    function checkNumeric(str) {
        let res=str.split('');
        for(var i=0;i<res.length;i++)
        {
            if(res[i].match("^[0-9]+$"))
            {
                return true;
            }
        }
        return false;
    }
    
    function checkLength(str) {
          if(str.length >5)
          {
            return true;
          }
        return false;
      }

    

    // Set up an event listener for the contact form.
    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();
        var pwd = $('#password').val();
        var checklet = checkLetters(pwd);
        var checknum = checkNumeric(pwd);
        var checkleng = checkLength(pwd);
        if((checklet)&&(checknum)&&(checkleng))
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
                    window.location.href="Universities.php"
                }
            });
        }
        else{
            alert("Check your form !")
        }
        

    })
});

