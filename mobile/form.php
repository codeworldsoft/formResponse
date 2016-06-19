<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mobile form</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
        <style type="text/css">
               
            
            @media only screen and (min-width: 901px) and (max-width: 2000px) {
                body {
                        background-color: #005CF1;
                }
                #smart{
                    background:#3F88FF;
                    width:90%;
                    /*margin:7%;*/
                }
                #tablet{
                    background:#3F88FF;
                    width:90%;
                    /*margin:7%;*/
                }
                #desktop{
                    background:#0048BE;
                    width:90%;
                    /*margin:7%;*/
                }
            }
            
            @media only screen and (min-width: 501px) and (max-width: 900px) {
                body {
                        background-color: #C2EE57;
                }
                #smart{
                    background:#D2F285;
                    width:80%;
                    margin:5%;
                }
                #tablet{
                    background:#B2EA29;
                    width:80%;
                    margin:5%;
                }
                #desktop{
                    background:#D2F285;
                    width:80%;
                    margin:5%;
                }
            }
            @media only screen and (max-width: 500px) and (min-width: 300px) {
                body {
                        background-color: #7F67E3;
                }
                #smart{
                    background:#5B3BDB;
                    width:70%;
                    margin:8%;
                }
                #boxTest{
                    width:70%;
                    margin:8%;
                }
                #tablet{
                    background:#C8BDF3;
                    /*width: 150px;*/
                    width:70%;
                    margin:8%;
                }
                #desktop{
                    background:#C8BDF3;
                    width:70%;
                    margin:8%;
                    /*width: 150px;
                    height:150px;*/
                }
                /*p{*/
                /*    margin:30px 20px;*/
                /*}*/
            }
        </style>
    </head>
    <body>
        <!--
        @Media Query
        http://www.w3schools.com/css/css_rwd_mediaqueries.asp
        http://www.w3schools.com/css/css3_mediaqueries_ex.asp
        -->
        <?php
            $name = "Diego";
            echo "<p>Olá <b>" .$name. "</b> bem-vindo ao servidor.</p>";
        ?>
        <section class="resolution">
            <div id="smart">
                <p id="smart_text">Estou usando um Smartphone.
                <br>Resolução: 350X480</p>
            </div>
            <div id="boxTest">
                <p id="smart_text">Box de teste
                <br>Resolução: 350X480</p>
            </div>
            <div id="tablet">
                <p id="tablet_text">Estou usando um Tablet.
                 <br>Resolução: 500X800</p>
            </div>
            <div id="desktop">
                <p id="desktop_text">Estou usando um Desktop.
                 <br>Resolução: 1200X900</p>
            </div>
        </section>
        <article>
            <form>
            <div>
                <p>Nome</p>
                <input type="text" name="user"/>
            </div>
            <div>
                <p>Telefone</p>
                <input type="text" name="tel"/>
            </div>
            
            <div>
                <p>E-mail</p>
                <input type="text" name="email"/>
            </div>
            
            <div class="button">
                <input type="submit" value="enviar"/>
            </div>
            
        </form>
        </article>
        
    </body>
</html>
