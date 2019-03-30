<?php
header("Content-type: text/css; charset: UTF-8");
?>
/* Nav bar */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
/* Add a gray right border to all list items, except the last item (last-child) */
li {
  border-right: 1px solid #bbb;
}

li:last-child {
  border-right: none;
}
/* Nav bar */

nav {
    display: inline-block;
}

nav img {
  background-color: white;
}

body {
background-color: #CCFFE5;
text-align: center;
}

.logo {
  float:left;
  width: 55px;
  height: 47px;
}

article {
  text-align: center;
  margin-left: 200px;
  margin-right: 200px;
}

h1 {
  font-size: 25px;
  font-weight: bold;
}
iframe {
    border-style: none;
}
form {
  margin-left: 450px;
}
label {
    display: inline-block;
    float: left;
    clear: left;
    width: 150px;
    text-align: left;
    //margin-left: 500px;
    margin-right: 5px;
}
input {
  display: inline-block;
  float: left;
}
