var GithubSSOService = {

    login: function () {
        $.ajax({
            type: "GET",
            url: ' rest/SSO-login',
            contentType: "application/json",

            success: function () {
                console.log();
            },
            error: function (errorMessage) {
                console.log(errorMessage);
                //toastr.error(errorMessage.responseJSON.message);
            }
        });
    },

}