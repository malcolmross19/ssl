<div class="container">
    <h1>Login</h1>
    <hr>
    <form method="post">
        <div class="form-group">
            <label for="email">Email address (required)</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password (required)</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <input type="button" class="btn btn-primary" value="Submit" id="ajaxbutton">
    </form>
</div>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script>
    $("#ajaxbutton").click(function() {
        $.ajax({
            method: "POST",
            url: "/main/checkLogin",
            data: { email: $("#email").val(), password: $("#password").val()},
            success: function (msg) {
                var match = /\r|\n/.exec(msg);
                if(msg==match+"Success"){
                    alert("Login Successful!");
                }else if(msg==match+"Invalid Login") {
                    alert("There was an issue logging you in.")
                }else{
                    alert("You made a mistake! Try Again!")
                }
            }
        })
    })
</script>

</body>
</html>