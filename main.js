// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
        //console.log(forms)
        var validation = Array.prototype.filter.call(forms, function(form) {

            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    //console.log(event.target.id)
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    $.ajax({
                        url: '/index.php',
                        type: 'POST',
                        data: $(`#${event.target.id}`).serialize()+'&formName='+event.target.id,
                        beforeSend: function(){
                            $(`.${event.target.id}Loader`).fadeIn();
                        },
                        success: function(response){
                            $(`.${event.target.id}Loader`).fadeOut("slow", function(){
                                let res = JSON.parse(response);
                                //console.log(res);
                                if (res.answer === 'ok'){
                                    $('#answer').html(`
                                    <div class="alert alert-success" role="alert">
                                        Данные сохранены успешно!
                                    </div>`).fadeIn()
                                    $(`#${event.target.id}`).removeClass('was-validated').trigger('reset');
                                } else {
                                    $('#answer').fadeIn('slow').html(`
                                    <div class="alert alert-danger" role="alert">
                                        ${res.errors}
                                    </div>`)
                                }
                                setTimeout(function(){
                                    $('#answer').fadeOut('slow', function(){
                                        $('#answer').html('')
                                    });
                                }, 2000)

                            });
                        },
                        error: function(){
                            alert('Error');
                        }
                    })
                    event.preventDefault();
                    event.stopPropagation();

                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    $("#loadButton").click((event)=>{
        $.ajax({
            url: '/incs/studentsTable.php',
            type: 'POST',
            data: 'select',
            beforeSend: function(){
                console.log(`.${event.target.id}Loader`)
                $(`.${event.target.id}Loader`).fadeIn();
            },
            success: function(response){
                $(`.${event.target.id}Loader`).fadeOut();
                console.log('success');
                $("#studentsTable>tbody").empty();
                let res = JSON.parse(response);
                res.forEach((record) => {
                    $("#studentsTable>tbody").append('<tr></tr>');
                    record.forEach((field) => {
                        $('#studentsTable tbody').append(`<td>${field}</td>`)
                    })
                })
            }
        })
    })
})()



