function validate_id(){
  //check id

  var id = document.forms["delete"]["id"].value; // getting the user data
  document.write(id);
  if(id==null || id=="" ){ //alert if the data is empty
    alert("Please enter valid(eg. 10)!");
    return false;
  }
  else
  if(!/^[0-9]{6}$/.test(id)){ //alert if the data is not a 6 digit number
    alert("Entered data is invalid. Should be a 6 digit number!");
      return false;
  }
}

function validate_data(){
  //check price
  var price = document.forms["input"]["price"].value; // getting the user data
  if(price==null || price=="" ){ //alert if the data is empty
    alert("Please enter price(eg. 500.50)!");
    return false;
  }
  else
    if(!/^[0-9]+([.][0-9][0-9])?$/.test(price)){ //alert if the data is not a 6 digit number
      //alert("Invalid. Should be float with 2 decimals!");
      return false;
  }
}
