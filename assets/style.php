<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");
?>

@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Source+Sans+Pro:wght@300&display=swap');

:root {
--bg-header: rgba(0, 214, 180, .95);
--bg-body: rgba(253, 252, 255, .75);
--bg-button: rgba(0, 214, 180, .95);
--bg-btntext: rgba(250, 250, 252, 100);
--bg-spanbtn: rgba(72, 138, 239, 100);
}

body {
padding: 0;
margin: 0;
height: 100vh;
/*background-color: var(--bg-body);*/
background-image: url(../assets/img/bg-paul-voie.jpg);
background-repeat: no-repeat;
background-size: cover;
background-position: center;
font-family: Raleway;
}

/*navigation styles*/

header {
background: var(--bg-header);
text-align: center;
position: fixed;
width: 100%;
top: 0;
left: 0;
}

nav {
background: var(--bg-header);
position: absolute;
text-align: left;
font-family: Raleway;
top: 50%;
left: 0;
width: 100%;
}

nav ul{
margin: 0;
padding: .5em 0 0;
list-style: none;
}

nav li {
margin-bottom: 1em;
margin-left: 1em;

}

nav a {
color: #ffffff;
text-decoration: none;
font-size: 1em;
text-transform: uppercase;
}

nav a:hover{
color: #64d7b2;
}

/*body styles*/

.container,
.form-control {
background-color: var(--bg-body)
}

.date-container {
right: 0;
top: 0;
border-bottom: 1px solid #8b8888;
width: 150px;
}

.pagetitle{
padding: 1em;
align-items: center;
text-align: center;
}

.form-control {
border: none;
max-width: 600px;
width: 600px;
height: 85vh;
display: block;
margin: 1em auto;
padding: 2em;
}

.form {
border: none;
max-width: 560px;
display:block;
margin: 0 auto;
padding: .5em;
}

.form .form-control-label {
color: #4a5252;
margin: 1em auto;
}

.form .form-control-text,
.form .form-control-submit {
padding: 1em;
display: block;
width: 500px;
max-width: 500px;
margin: 1em auto;
}

.form .form-control-text {
background: transparent;
border: none;
outline: none;
border-bottom: 1px solid #8b8888;
}

.form .form-control-submit {
background: var(--bg-button);
color: var(--bg-btntext);
font-weight: bold;
font-size: 15px;
border: none;
border-radius: 6px;
outline: none;
cursor: pointer;
}

.reg-container {
text-align: center;
margin: 2em;
padding: 1em;
width: 150px;
cursor: pointer;
border: none;
outline: none;
border-radius: 2px;
background: var(--bg-spanbtn)
}

.reg-container: hover {
outline: 2px solid #488AEF;
outline-offset: 2px;
transition: 200ms ease-in-out;
cursor: pointer;
}

.reg-container a {
text-decoration: none;
color: var(--bg-btntext);
}


@media screen and (max-width: 1200px) {
span.psw {
display: block;
float: none;
}

header {
display: grid;
grid-template-columns: 1fr auto minmax(600px, 3fr) 1fr;
}

nav {
all:unset;
padding: .5em;
grid-column: 3/4;
display: flex;
justify-content: flex-end;
align-items: center;

}

nav ul {
display: flex;
justify-content: flex-end;

}
nav li {
margin-left: 4em;
}

.container {
margin: 1em;
margin-top: 4em;
padding: 2em;
width: 90vw;
height: 70vh;
display: block;
position: absolute;
}
}