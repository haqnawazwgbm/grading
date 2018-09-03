function myFunction() {
  $('ul').find('#os-tab').css('display', 'none');
  $('ul').find('#od-tab').css('display', 'block');
  $('#step-tab').attr('step', 3);
  var elements = document.getElementsByClassName("child1");
  var elements2 = document.getElementsByClassName("child2");
  
  var el = document.getElementById("myCheck");

  for (var i = 0; i < elements.length; i++) {
    
    if (el.checked) {

      elements[i].disabled = true;
      elements2[i].disabled = false;
      elements[i].checked = false;
      $('.os_text').prop( "disabled", true );
      $('.od_text').prop( "disabled", false );

    } else {

      elements[i].disabled = true;
      elements2[i].disabled = true;
      elements[i].checked = false;
      elements2[i].checked = false;
      $('#step-tab').attr('step', 0);
      $('ul').find('#od-tab').css('display', 'none');
      $('ul').find('#os-tab').css('display', 'none');
      $('.od_text').prop( "disabled", true );
    }
  }
}



 function myFunction1() {
  $('ul').find('#od-tab').css('display', 'none');
  $('ul').find('#os-tab').css('display', 'block');
  $('#step-tab').attr('step', 2);
  var elements = document.getElementsByClassName("child2");
  var elements1 = document.getElementsByClassName("child1");
  
  var el = document.getElementById("myCheck1");


  for (var i = 0; i < elements.length; i++) {

    if (el.checked) {
     
      elements[i].disabled = true;
      elements1[i].disabled = false;
      elements[i].checked = false;
      $('.od_text').prop( "disabled", true );
      $('.os_text').prop( "disabled", false );

    } else {
      elements[i].disabled = true;
      elements1[i].disabled = true;
      elements[i].checked = false;
      elements1[i].checked = false;
      $('#step-tab').attr('step', 0);
      $('ul').find('#od-tab').css('display', 'none');
      $('ul').find('#os-tab').css('display', 'none');
      $('.os_text').prop( "disabled", true );

    }
  }
}

function myFunction2()
{
  $('ul').find('#od-tab').css('display', 'block');
  $('ul').find('#os-tab').css('display', 'block');
  $('#step-tab').attr('step', 4);
  var elements = document.getElementsByClassName("child1");
  var elements2 = document.getElementsByClassName("child2");
  
  var el = document.getElementById("myCheck2");


  for (var i = 0; i < elements.length; i++) {
    
    if (el.checked) {

      elements[i].disabled = false;
      elements2[i].disabled = false;
      $('.os_text').prop( "disabled", false );
      $('.od_text').prop( "disabled", false );
     
    } else {

      elements[i].disabled = true;
      elements2[i].disabled = true;
      elements[i].checked = false;
      elements2[i].checked = false;
      $('#step-tab').attr('step', 0);
      $('ul').find('#od-tab').css('display', 'none');
      $('ul').find('#os-tab').css('display', 'none');
      $('.os_text').prop( "disabled", true );
      $('.od_text').prop( "disabled", true );

    }
  }

}

function myFunction3()
{
  var elements = document.getElementsByClassName("child1");
  var elements2 = document.getElementsByClassName("child2");
  
  var el = document.getElementById("myCheck3");


  for (var i = 0; i < elements.length; i++) {
    

       elements[i].disabled = true;
      elements2[i].disabled = true;
      elements[i].checked = false;
      elements2[i].checked = false;
      $('.os_text').prop( "disabled", true );
      $('.od_text').prop( "disabled", true );
      $('#step-tab').attr('step', 0);
      $('ul').find('#od-tab').css('display', 'none');
      $('ul').find('#os-tab').css('display', 'none');
     
   
  }

}
$(document).ready(function() {
  // Jquery Select one Option at time


 $('input.RH3').on('change', function() {
    $('input.RH3').not(this).prop('checked', false);  
   });

  $('input.RH4').on('change', function() {
    $('input.RH4').not(this).prop('checked', false);  
   });

  $('input.RH5').on('change', function() {
    $('input.RH5').not(this).prop('checked', false);  
});
  $('input.RH6').on('change', function() {
    $('input.RH6').not(this).prop('checked', false);  
});
  $('input.RH7').on('change', function() {
    $('input.RH7').not(this).prop('checked', false);  
});
})


