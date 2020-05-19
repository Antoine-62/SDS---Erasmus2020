
$(function() {
    // Get the form.
    var form = $('#Registration');

    function checkPhone(str) {
        let res=str.match("^[0-9]+$");
        if(res){
            if(str.length===10)
            {
                return true;
            }
            
        }
        return false;
      }

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

      function checkConfirmation(pwd, cpwd){
        if(pwd === cpwd)
        {
            return true;
        }
        return false;

      }
    

    // Set up an event listener for the contact form.
    $(form).submit(function(event) {
        // Stop the browser from submitting the form.
        event.preventDefault();
        var pwd = $('#Pwd').val();
        var Cpwd = $('#Cpwd').val();
        var phone = $('#Phone').val();

        var checkPhon = checkPhone(phone);
        var checklet = checkLetters(pwd);
        var checknum = checkNumeric(pwd);
        var checkleng = checkLength(pwd);
        var checkconf = checkConfirmation(pwd,Cpwd);
        if((checklet)&&(checknum)&&(checkleng)&&(checkconf)&&(checkPhon))
        {
            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(data) {
                console.log(data);
                var response = JSON.parse(data);
                if(response['success'])
                {
                    window.location.href="Universities.php"
                }
                else{
                    alert("Please, change your username, it had already been taken by someone else.")
                }
            });
        }
        else{
            alert("Check your form !")
        }
        

    })

    // TODO: The rest of the code will go here...
});

