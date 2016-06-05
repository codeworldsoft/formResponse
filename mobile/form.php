<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mobile form</title>
        <style type="text/css">
                *{
            	margin:0;
            	padding:0;
            	border:0;
                }
                
            @media only screen and (max-width: 2000px) {
                body {
                        background-color: #99ff33;
                }
                p{
                    margin:100px;
                }
            }
            @media only screen and (min-width: 1300px) {
                body {
                        background-color: #ff704d;
                }            
            }
            @media only screen and (min-width: 800px) {
                body {
                        background-color: #8080ff;
                }            
            }
            @media only screen and (min-width: 500px) {
                body {
                        background-color: blue;
                }            
            }
            @media only screen and (max-width: 300px) {
                body {
                        background-color: red;
                }
                p{
                    margin:30px 20px;
                }
            }
        </style>
    </head>
    <body>
        <!--
        @Media Query
        http://www.w3schools.com/css/css_rwd_mediaqueries.asp
        -->
        <?php
            $name = "Diego";
            echo "<p>Olá <b>" .$name. "</b> bem-vindo ao servidor.</p>";
        ?>
        
        <form>
            <input type="text" name="user"/>
            <input type="submit" value="Busca"/>
        </form>
    </body>
</html>
