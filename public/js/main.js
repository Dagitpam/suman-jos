var request = new XMLHttpRequest()

request.open('GET', 'http://127.0.0.1:8000/api/register/ABCDEF/su0001/12/uhweka@gmail.com/completed', true)
request.onload = function() {
  // Begin accessing JSON data here
  var data = JSON.parse(this.response)

  if (request.status >= 200 && request.status < 400) {
    data.forEach(movie => {
      console.log(movie.title)
    })
  } else {
    console.log('error')
  }
}

request.send()

function show(param_div_id) {
  document.getElementById('main-content').innerHTML = document.getElementById(param_div_id).innerHTML;
  document.getElementById('history').style.display = "none"
}


// side level adverts left
function sideadvert () {
  let clickbtn = document.getElementById('clickbtn');
  clickbtn.style.display = "none"
  let progressbtn = document.getElementById('progressbtn');
  progressbtn.style.display = "inline-block"
  let errormsg = document.getElementById('errormsg');
  errormsg.style.display = "none"
  let successmsg = document.getElementById('successmsg');
  successmsg.style.display = "none"

  let schoolName = document.getElementById('schoolname').value
  let schoolAdress = document.getElementById('address').value
  let periodfrom = document.getElementById('periodfrom').value
  let periodto = document.getElementById('periodto').value
  let e = document.getElementById("schoolcategory");
  let category = e.options[e.selectedIndex].value;
  let schemail = document.getElementById('schemail').value
  let schphone = document.getElementById('schphone').value


  // alert(schoolName)

  $.ajaxSetup({
headers: {
  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
      $.ajax({
          url:"addschool", //the page containing php script
          method: "POST", //request type,
          cache: false,
          data: {name:schoolName, address:schoolAdress, periodfrom:periodfrom, periodto:periodto, category:category, schemail:schemail, schphone:schphone},
          success:function(result){
              var nameImage1 = result.schphone;
              // alert(nameImage1)

              clickbtn.style.display = "inline-block"
              successmsg.style.display = "inline-block"
              progressbtn.style.display = "none"
      },
      error:function(){
        clickbtn.style.display = "inline-block"
        errormsg.style.display = "inline-block"
        progressbtn.style.display = "none"
          // alert('fuck')

      }
      
      });
};