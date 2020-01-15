$(function () {
    $('form[name="login"]').submit(function (event) {
        event.preventDefault();
        const form = $(this)
        const action = form.attr('action');
        const email = '';
        const password = '';

        console.log(action, email pass)

    })
})
