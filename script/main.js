$(document).ready(function(){

    var app = {

        initialize : function () {
            this.setUpListeners();
        },


        setUpListeners : function () {
            form = $('form');
            form.on('submit', app.submitForm);
            form.on('keydown','input', app.removeError);
        },

        submitForm : function (e){
            e.preventDefault();

            var form = $(this),
                submitBtn = form.find('button[type="submit"]');

            if ( app.validateForm(form) === false ) {
                return false;
            }

            submitBtn.attr('disabled','disabled');

            console.log('go to ajax');
        },

        validateForm : function(form) {
            var inputs = form.find('input'),
                valid = true;

            inputs.tooltip('destroy');

            $.each(inputs, function(index,val) {
                var input = $(val),
                    val = input.val(),
                    formGroup = input.parents('.form-group'),
                    label = formGroup.find('label').text().toLowerCase(),
                    textError = "Введите " + label;

                if ( val.length === 0 ) {
                    formGroup.addClass('has-error').removeClass('has-success');
                    input.tooltip({
                        trigger: 'manual',
                        placement: 'right',
                        title: textError
                    }).tooltip('show');
                    valid = false;
                } else {
                    formGroup.addClass('has-success').removeClass('has-error');
                }

            });

            return valid;
        },

        removeError : function () {
            $(this).tooltip('destroy').parents('.form-group').removeClass('has-error');
        }

    };

    app.initialize();

})();