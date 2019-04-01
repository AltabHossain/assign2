function validate_price(){
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
