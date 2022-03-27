// navbar togglemenu start
var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}
// navbar togglemenu end



// FAQ Section start
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
// FAQ Section end


// LOGIN SECTION START
function loginjs(){
  document.getElementById('id02').style.display='block';
}

function signupjs(){
  document.getElementById('id01').style.display='block';
}

// LOGIN SECTION END


//DAYS CHANGE START
$(".days_change").bind('keyup mouseup', function () {

  $aa = $('.carprice_ptag').html();
  $bb = $('.days_change').val();
  console.log($aa*$bb);

  var result = $aa*$bb;

  var gst = 5;
  var provincetax = 13;
  var total_tax = 13+5;

  var final_result = result*0.18;
  console.log(result+final_result);
  $('.total_amount').html('$'+(result+final_result));
});
//DAYS CHANGE END
