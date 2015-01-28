<!DOCTYPE html>
<html>
<head>
    <title>Kapow!</title>

    <style>
        body {
            background-image: url('http://bit.ly/UpQgJ6');
            repeat: no-repeat;
        }

        div {
            height: 100px;
            width: 100px;
            border-radius: 100%;
            background-color: #008800;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#003500), to(#008800));
            background-image: -webkit-linear-gradient(left, #003500, #008800);
            background-image:    -moz-linear-gradient(left, #003500, #008800);
            background-image:     -ms-linear-gradient(left, #003500, #008800);
            background-image:      -o-linear-gradient(left, #003500, #008800);
        }

        .red {
            background-color: #CC0000;
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#330000), to(#CC0000));
            background-image: -webkit-linear-gradient(left, #330000, #CC0000);
            background-image:    -moz-linear-gradient(left, #330000, #CC0000);
            background-image:     -ms-linear-gradient(left, #330000, #CC0000);
            background-image:      -o-linear-gradient(left, #330000, #CC0000);
        }
    </style>

    <script type="text/javascript" src="script/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('div').click(function(){
                $(this).fadeOut('fast');
            });
            $('div').addClass('red');
        });
    </script>

</head>
<body>
<div></div>
</body>
</html>