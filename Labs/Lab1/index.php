<!DOCTYPE html>
<html>
<!--
Byron Norrod II
Lab1
in html



-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset=”utf-8” />        <!--keep these two things in every doc:-->
        <title>Byron Norrod II: Personal website.</title>
        /*<style>*/
        /*    body{*/
                background-color: #000066 !important;  /*selector = “body”, (does the whole web page); Property = background-color*/
        /*    }*/
        /*</style>*/
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <!--inline style: <body style="background-color:black; color:white">-->
    <body>
        <header>
            <h1> Byron Norrod II</h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <br /><br />
        
        <main>
    
        <figure>
            <img src="img/Beach_Byron v2.png" alt="Picture of Byron" />   <!--My first debug = src=, not arc= -->
        </figure>
        
        <div>
            Hello! <br />
            <p>Thank you for visiting my professional portfolio website.</p>
            
            <p>I am a Software Engineer and have recently been hired at the Acme corperation.</p>

            <p>Feel free to contact me!</p>
            
            <br /><br />
            
            <em>"With ordinary talent and extrordinary
            <strong>pererseverance</strong>, all things are attainable"</em><br />
            -Thomas F. Buxton
            
        </div>
        
    </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>    <!--hr = adds a line for formatting-->
            CST 336: Internet Programming. 2018&copy; Norrod <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitions <br/>
            It is used for academic purposes only.
            </br><a href="/cst336_git/Labs">Back</a>
   
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>