<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatApp</title>
</head>
<style type="text/css">
    
    @font-face{
        font-family: headFont;
        src: url(ui/fonts/SFProDisplay-Regular.ttf);
    }
    @font-face{
        font-family: myFont;
        src: url(ui/fonts/SFProDisplay-Regular.ttf);
    }
    #wrapper{

        max-width:900px;
        min-height:500px;
        margin: auto;
        color:grey;
        font-family:myFont;
        font-size:13px;
    }

    form{
        margin: auto;
        padding: 10px;
        width: 100%;
        max-width:400px;

    }

    input[type=text], input[type=password], input[type=submit]{

        padding:10px;
        margin: 10px;
        width: 98%;
        border-radius: 5px;
        border: solid 1px grey;   
    }

    input[type=submit]{

        width: 103%;
        cursor:pointer;
        background-color:#464b95;
        color: white;
    }

    input[type=radio]{

    transform: scale(1.2);
    cursor:pointer;

    }
    #header{

    background-color:#464b95;
    height:70px;
    font-size:40px;
    text-align: center;
    font-family: headFont;
    width:100%;
    color: white;
    }

</style>
<body>
    <div id="wrapper">

        <div id=header>
            Chat App
            <div style="font-size:18px; font-family: myFont;">Signup</div>
        </div>
        <form id="myform">
            <input type="text" name="username", placeholder="Username"><br>
            <input type="text" name="email", placeholder="Email"><br>
            <div style="padding: 10px;">
                <br>Gender: <br>
                <input type="radio" values="Male" name="gender"> Male <br>
                <input type="radio" values="Female" name="gender"> Female <br>
            </div>
            <input type="password" name="password", placeholder="Password"><br>
            <input type="password" name="password2", placeholder="Retype Password"><br>
            <input type="submit" value="Sing up"><br>
        </form>
      
    </div>
</body>
</html>

<script type="text/javascript">

    function _(element){

        return document.getElementById(element);
    } 

    var singup_button = _("signup_button");
    signup_button.addEventListener("click", collect_data);

    function collect_data(){

        var myform - _("myform");
        var inputs = myform.getElementsByTagName("INPUT");

        var data = {};
        for (var i = inputs.length - 1; i >= 0; i--){

            var key = inputs[i].name;

            switch(key){
                case "username":  
                    data.username = imputs[i].value;
                    break;

                case "email":
                    data.email = imputs[i].value;
                    break;
                case "gender":
                    if(imputs[i].checked){
                    data.gender = imputs[i].value;
                    }
                    break;
                case "password":
                    data.password = imputs[i].value;
                    break;
                case "password2":
                    data.password2 = imputs[i].value;
                    break;
                    
            }
        }

        alert(data.username);
    }
</script>