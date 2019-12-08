function validateForm() {
    var x = document.forms["contactForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    var x = document.forms["contactForm"]["email"].value;
    if (x == "") {
      alert("Email must be filled out");
      return false;
    }
    var x = document.forms["contactForm"]["message"].value;
    if (x == "") {
      alert("Message must be filled out");
      return false;
    }
  
  }