<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Barangay System</title>
    
  </head>
  <style>
    body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  width: 40%;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 300px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 480px;
  border-color: #2ecc71;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: #2ecc71;
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
  font-size: 20px;


}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #34495e;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

  </style>
  <body>

<form class="box" action="validation" method="post">
  <h1>Barangay Application System</h1>
  <input type="text" name="name" placeholder="Fullname">
  <input type="text" name="address" placeholder="Address">
  <input type="text" name="contact" placeholder="Contact No.">
  <select name="request" id="slct">
    <option selected disabled> Choose a Request</option>
    <option value="Indigency">Indigency</option>
    <option value="Barangay Clearance">Barangay Clearance</option>
    <option value="Health Certificate">Health Certificate</option>
    <option value="Quarantine Pass">Quarantine Pass</option>
    <option value="Travel Pass">Travel Pass</option>
    <option value="Certificate of Residency">Certificate of Residency</option>
  </select>
  <input type="text" name="purpose" placeholder="Purpose">
  <input type="submit" name="send" value="Submit">
</form>


  </body>
</html>
