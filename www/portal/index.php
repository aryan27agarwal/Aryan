<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Entrepreneurship Cell GD Goenka University Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-client_id" content="428798352362-v0igrmk5fe9960fpo7hsst95rcsmnl8k.apps.googleusercontent.com">
    </head>
    <body>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <br>
        <a href="#" onclick="signOut();">Sign out</a>
    </body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());
            var token = googleUser.getAuthResponse().id_token;
            console.log('Signed Token: ' + token);
        }
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
            console.log('User signed out.');
            });
        }
    </script>
</html>