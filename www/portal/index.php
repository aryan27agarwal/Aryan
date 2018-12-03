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
        <!---->
        <div id="fb-root"></div>
        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
        <button id="test" onclick="clickButton();"></button>
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
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=254027531936489&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        function clickButton() {
            FB.getLoginStatus(function(response) {
                console.log(response);
            });
        }
        function later() {
            console.log('done');
        }
        FB.Event.subscribe('xfbml.render', later);
    </script>
</html>