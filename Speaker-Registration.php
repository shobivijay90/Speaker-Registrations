<?php

/* Template Name: Speaker Registration */ 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaker Registration</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
    <link rel="stylesheet" href="https://health4theworld.org/academy/wp-content/themes/wplms/jquery.datetimepicker.min.css">
    <script src="https://health4theworld.org/academy/wp-content/themes/wplms/jquery.datetimepicker.full.js"></script>
    
	<style>
  
 /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);
/*basic reset*/
body {
  margin: 0;
  padding: 0;
  font-family: montserrat, arial, verdana;
  width: 100%;
}

#thanks {
  background: #7fd1c6;
  padding-top: 60px;
}

#thanks div {
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

#thanks h1 {
  color: #fff;
  text-shadow: 1px 1px 2px gray;
  font-size: 34px;
  line-height: 1.5;
  width: 60%;
  padding-bottom: 20px;
}

.docimage {
  width: 300px;
  height: 250px;
  position: absolute;
  right: 100px;
  top: 150px;
}

/* button style */
#desc {
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

.clickregister {
  margin-top: 50px;
  margin-bottom: 50px;
}

.register {
  color: #fff;
  background: #eb6868;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  padding: 10px 20px;
  text-decoration: none;
}

.register:hover {
  background: #eb4646;
}

#desc h4 {
  font-weight: bold;
  font-size: 18px;
  color: #17a190;
}

#set1 h1 {
  text-shadow: 2px 2px 3px gray;
}

#desc p,
.list ul li {
  line-height: 1.5;
  font-size: 18px;
  font-weight: bold;
  list-style-type: disc;
}

.meetingid {
  line-height: 1.5;
}

.checkbox {
  margin-left: 100px;
}

.checkbox li {
  list-style-type: circle;
  color: gray;
}

.checkbox input {
  width: 15px;
  height: 15px;
  margin-left: 100px;
  margin-top: 10px;
  vertical-align: bottom;
  font-size: 18px;
}

.sample {
  color: #17a190;
  text-decoration: none;
}

.zoom {
  color: #17a190;
}

#msform {
  width: 70%;
  text-align: center;
  position: relative;
  margin-right: auto;
  margin-left: auto;
  margin-bottom: 50px;
}

#msform ul li {
  font-weight: bold;
}

#msform fieldset {
  background: #7fd1c6;
  border: 0 none;
  border-radius: 10px;
  -webkit-box-shadow: 5px 5px 15px gray;
  box-shadow: 5px 5px 15px gray;
  padding: 20px 30px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  font-weight: bold;
  border: 2px solid #009688;
}

/*inputs*/
.info input,
#specialtyname,
#audiencelevel {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2c3e50;
  font-size: 16px;
  outline: none;
  font-weight: bold;
}

.des {
  color: #fff;
  font-size: 14px;
  text-align: left;
}

.des a {
  text-decoration: none;
  color: purple;
}

.info {
  padding-top: 10px;
  padding-bottom: 10px;
  width: 90%;
  margin-left: auto;
  margin-right: auto;
}

.info label {
  text-align: left;
}

#suggestedtopics {
  float: right;
  color: purple;
  text-decoration: none;
  font-size: 14px;
}

/*buttons*/
.formbutton {
  width: 25% !important;
  border: none;
  height: 40px;
  background: #eb6868;
  color: whitesmoke;
  font-size: 18px;
  font-weight: bold;
  border-radius: 10px;
  outline: none;
  cursor: pointer;
  margin-top: 50px;
  margin-bottom: 50px;
}

.formbutton:hover {
  background: #eb4646;
}

/*headings*/
.fs-title {
  font-size: 15px;
  color: #2c3e50;
  margin-top: 10px;
  text-shadow: 2px 2px 3px gray;
}

/*progressbar*/
fieldset h1 {
  color: #fff;
  font-weight: bold;
  padding-top: 20px;
  text-shadow: 5px 5px 5px gray;
  margin-left: auto;
  margin-right: auto;
}

fieldset label {
  color: #fff;
  float: left;
}

.register:hover {
  -webkit-box-shadow: 5px 5px 10px gray;
  box-shadow: 5px 5px 10px gray;
}

.register a {
  text-decoration: none;
  color: #fff;
}

.fs-title {
  color: #fff;
  text-align: left;
}

.progressbar {
  width: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-right: auto;
  margin-left: auto;
}

.progressbar .tab {
  background: white;
  color: #009688;
  font-size: 18px;
  padding: 10px 20px;
  font-weight: bold;
  border-radius: 5px;
  margin-top: 30px;
  margin-bottom: 30px;
  border: 2px solid #009688;
}

#personal {
  color: white;
  background: #7fd1c6;
}

.releaseform {
  background: white;
  color: black;
  padding: 10px 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 100%;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2c3e50;
  font-size: 18px;
  text-align: justify;
  line-height: 1.5;
}

#set2,
#set3 {
  display: none;
}

.releaseform a {
  color: #009688;
  padding-bottom: 20px;
}

.complete {
  color: white;
  text-align: center;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
}

#success {
  text-align: center;
  width: 50%;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-left: auto;
  margin-right: auto;
  display: none;
}

#success h1 {
  color: #009688;
  font-size: 30px;
  font-weight: bold;
}

#success p {
  line-height: 1.5;
  font-weight: bold;
  font-size: 18px;
}

#success img {
  width: 70%;
  height: 70%;
}

#p1,
#p2,
#p3,
#p4,
#p5,
#p6,
#p7,
#p8,
#p9,
#p10,
#p11 {
  text-align: left;
  color: #d8000c;
  display: none;
}

.error {
  color: #d8000c;
  text-align: left;
}

.click-record {
  color: purple;
  cursor: pointer;
}

#info-record1,
#info-record2,
#info-record3 {
  display: none;
}

.signed input {
  width: 25px;
  height: 25px;
  color: white;
}

.signed {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: white;
}

.choose {
  color: purple;
  text-align: right;
  cursor: pointer;
}

.responserequired {
  color: #d8000c;
  font-weight: bold;
  padding-left: 10px;
  text-shadow: none;
}

.submitting {
  color: white;
  font-size: 20px;
  padding-bottom: 30px;
  display: none;
}

@media only screen and (max-width: 700px) {
  .submitting {
    font-size: 16px;
  }
  
  #thanks {
    padding-top: 30px;
    width: 100vw;
  }
  #thanks div {
    width: 90%;
  }
  #desc {
    width: 90%;
  }
  #thanks div h1 {
    font-size: 18px;
    width: 60%;
  }

  .docimage {
    width: 150px;
    height: 100px;
    position: absolute;
    right: 40px;
    top: 120px;
  }
  .clickregister {
    margin-top: 30px;
    margin-bottom: 30px;
  }
  #desc p {
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    text-align: justify;
  }
  .list ul li,
  .checkbox li {
    width: 90%;
  }
  .register {
    font-size: 12px;
    padding: 10px 20px;
  }
  #desc h4 {
    font-size: 14px;
  }
  #desc p,
  .list ul li {
    font-size: 12px;
    font-weight: bold;
    list-style-type: disc;
  }
  .list ul li {
    margin-left: 5px;
  }
  .checkbox {
    margin-left: 20px;
  }
  #set1 h1 {
    font-size: 18px;
    width: 80%;
  }
  #msform {
    width: 90%;
  }
  #msform fieldset {
    -webkit-box-shadow: 5px 5px 15px gray;
    box-shadow: 5px 5px 15px gray;
    padding: 15px 20px;
    width: 90%;
  }
  .info label {
    font-size: 14px;
  }
  .info input,
  #specialtyname,
  #audiencelevel {
    padding: 10px;
    margin-bottom: 5px;
    font-size: 12px;
  }
  .des {
    font-size: 12px;
  }
  .info {
    padding-top: 5px;
    padding-bottom: 5px;
    width: 90%;
  }
  #suggestedtopics {
    font-size: 12px;
  }
  .formbutton {
    height: 30px;
    font-size: 14px;
    border-radius: 5px;
  }
  .fs-title {
    font-size: 14px;
    margin-top: 5px;
  }
  fieldset h1 {
    padding-top: 10px;
  }
  .progressbar {
    width: 80%;
  }
  .progressbar .tab {
    text-align: center;
    font-size: 14px;
    padding: 5px 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    width: 25%;
  }
  .releaseform {
    padding: 5px 10px;
    margin-bottom: 5px;
    font-size: 14px;
  }
  .releaseform a {
    padding-bottom: 10px;
  }
  .complete p {
    font-size: 14px;
  }
  #success h1 {
    font-size: 25px;
  }
  #success p {
    font-size: 16px;
  }
  .error {
    font-size: 12px;
  }
  .choose {
    font-size: 12px;
  }
  .responserequired {
    font-size: 12px;
  }
}
/*# sourceMappingURL=style.css.map */
	</style>
	
    <script>
  
  $(document).ready(function(){
  
   $('#nextset1').click(function () {
    $('#set1').css('display', 'none')
    $('#set2').css('display', 'block')
    $('#set3').css('display', 'none')
    $('#personal').css('color', 'white')
    $('#personal').css('background', '#7fd1c6')
    $('#lecture').css('color', 'white')
    $('#lecture').css('background', '#7fd1c6')
    $('#availability').css('color', '#009688')
    $('#availability').css('background', 'white')
  })

  $('#previousset2').click(function () {
    $('#set2').css('display', 'none')
    $('#set1').css('display', 'block')
    $('#set3').css('display', 'none')
    $('#personal').css('color', 'white')
    $('#personal').css('background', '#7fd1c6')
    $('#lecture').css('color', '#009688')
    $('#lecture').css('background', 'white')
    $('#availability').css('color', '#009688')
    $('#availability').css('background', 'white')
  })

  $('#nextset2').click(function () {
    $('#set1').css('display', 'none')
    $('#set2').css('display', 'none')
    $('#set3').css('display', 'block')
    $('#personal').css('color', 'white')
    $('#personal').css('background', '#7fd1c6')
    $('#lecture').css('color', 'white')
    $('#lecture').css('background', '#7fd1c6')
    $('#availability').css('color', 'white')
    $('#availability').css('background', '#7fd1c6')
  })

  $('#previousset3').click(function () {
    $('#set1').css('display', 'none')
    $('#set2').css('display', 'block')
    $('#set3').css('display', 'none')
    $('#personal').css('color', 'white')
    $('#personal').css('background', '#7fd1c6')
    $('#lecture').css('color', 'white')
    $('#lecture').css('background', '#7fd1c6')
    $('#availability').css('color', '#009688')
    $('#availability').css('background', 'white')
  })

  $('.click-record').click(function(){
    $('#info-record1').toggle()
  })

  $('#date1').click(function(){
    $('#info-record2').toggle()
  })
 $('#date2').click(function(){
    $('#info-record3').toggle()
  })

 $('#datepicker').datepicker({
    format: 'm/d/y',
    changeMonth: true,
    changeYear: true,
    closeOnDateSelect: true,
    minDate: 0,
    useCurrent: false,
    beforeShowDay: function (date) {
      var str = $('#specialtyname option:selected').text()

      /*  var blockDates = [
      
       '2020-01-21',
        '2020-01-28',
        '2020-02-03',
        '2020-02-04',
        '2020-02-11',
        '2020-02-18',
        '2020-02-24',
        '2020-03-03',
        '2020-03-09'
      ]
*/
      if (str === 'Select Specialty') {
        var disabledDates = [
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [
          date.getDay() == 1 ||
            date.getDay() == 2 ||
            date.getDay() == 3 ||
            date.getDay() == 4 ||
            date.getDay() == 5 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Internal Medicine') {
        var disabledDates = [
          '2020-02-04',
          '2020-02-11',
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [date.getDay() == 2 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Radiology') {
        var disabledDates = [
 
          '2020-01-31',
          '2020-04-03',
          '2020-06-05',
          '2020-03-06',
          '2020-03-13',
          '2020-03-20',
          '2020-03-27',
          '2020-02-07',
          '2020-02-21',
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09',
          '2020-01-10',
          '2020-01-17',
          '2020-02-14',
          '2020-06-19',
          '2020-06-26',
          '2020-02-07'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [date.getDay() == 5 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Emergency Medicine') {
        var disabledDates = [
 
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [date.getDay() == 3 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Surgery') {
        var disabledDates = [
         
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [date.getDay() == 4 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Community Health') {
        var disabledDates = [
         
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        return [
          date.getDay() == 1 ||
            date.getDay() == 2 ||
            date.getDay() == 3 ||
            date.getDay() == 4 ||
            (date.getDay() == 5 && disabledDates.indexOf(string) == -1)
        ]
      } else if (str === 'Obstetrics') {
        var disabledDates = [
        
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)
        return [date.getDay() == 1 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Pediatrics') {
        var disabledDates = [
          '2020-02-03',
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [date.getDay() == 1 && disabledDates.indexOf(string) == -1]
      } else if (str === 'Other') {
        var disabledDates = [
      
          '2020-01-21',
          '2020-01-28',
          '2020-02-03',
          '2020-02-04',
          '2020-02-11',
          '2020-02-18',
          '2020-02-24',
          '2020-03-03',
          '2020-03-09'
        ]
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date)

        return [
          date.getDay() == 1 ||
            date.getDay() == 2 ||
            date.getDay() == 3 ||
            date.getDay() == 4 ||
            date.getDay() == 5 && disabledDates.indexOf(string) == -1]
      }
    }
  })


  $('#starttimepicker').timepicker({
    timeFormat: 'h:mm p PST',
    minTime: '7:00 AM',
    maxTime: '7:00 AM',
    interval: 60
  })

  $('#endtimepicker').timepicker({
    timeFormat: 'h:mm p PST',
    minTime: '8:00 AM',
    maxTime: '8:00 AM',
    interval: 60
  })
  $('#datetimepicker, #datetimepicker2, #datetimepicker3').datetimepicker({
    format: 'm/d/Y h:i a',
    changeMonth: true,
    changeYear: true,
    closeOnDateSelect: true,
    minDate: 0,
    disabledWeekDays: [0, 6],
    useCurrent: false,
    formatTime: 'h:i a'
  })

 /* const scriptURL =
    'https://script.google.com/macros/s/AKfycbyGi-HlDPyT9-hlJt2OFS2Dql-4PROKDaOpEuCm4V_nsGgP5nQ/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
      then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
  */


var set1 = $('#set1')
  var set2 = $('#set2')
  var set3 = $('#set3')
  var $errorMsg = $("<div class='error'>This field is required..!!</div>")

  $('#nextset1').on('click', function () {
    var toReturn = function () {
      $('#set1').css('display', 'none')
      $('#set2').css('display', 'block')
      $('#set3').css('display', 'none')
    }
    $('input', set1).each(function () {
      // If our field is blank
      if ($(this).val() == '') {
        // Add an error message
        if (!$(this).data('error')) {
          $(this).data('error', $errorMsg.clone().insertAfter($(this)))
        }
        toReturn = function () {
          $('#set1').css('display', 'block')
          $('#set2').css('display', 'none')
          $('#set3').css('display', 'none')
        }
      }
      // If the field is not blank
      else {
        // Remove the error message
        if ($(this).data('error')) {
          $(this)
            .data('error')
            .remove()
          $(this).removeData('error')
        }
      }
    })
    return toReturn()
  })

  $('#nextset2').on('click', function () {
  var toReturn = function () {
    $('#set1').css('display', 'none')
    $('#set2').css('display', 'none')
    $('#set3').css('display', 'block')
  }
  $('#specialtyname, #topic, #audiencelevel', set2).each(function () {
    // If our field is blank
    if ($(this).val() == '') {
      // Add an error message
      if (!$(this).data('error')) {
        $(this).data('error', $errorMsg.clone().insertAfter($(this)))
      }
      toReturn = function () {
        $('#set1').css('display', 'none')
        $('#set2').css('display', 'block')
        $('#set3').css('display', 'none')
      }
    }
    // If the field is not blank
    else {
      // Remove the error message
      if ($(this).data('error')) {
        $(this)
          .data('error')
          .remove()
        $(this).removeData('error')
      }
    }
  })
  return toReturn()
})

$('#nextset3').on('click', function () {
  var toReturn = function () {
    $('#set1').css('display', 'none')
    $('#set2').css('display', 'none')
    $('#set3').css('display', 'block')
  }
  $('#sign', set3).each(function () {
    // If our field is blank
    if ($(this).val() == '') {
      // Add an error message
      if (!$(this).data('error')) {
        $(this).data('error', $errorMsg.clone().insertAfter($(this)))
      }
      toReturn = function () {
        $('#set1').css('display', 'none')
        $('#set2').css('display', 'block')
        $('#set3').css('display', 'none')
      }
    }
    // If the field is not blank
    else {
      // Remove the error message
      if ($(this).data('error')) {
        $(this)
          .data('error')
          .remove()
        $(this).removeData('error')
      }
    }
  })
  return toReturn()
})

/*
  $('#submit').on('click', function () {
    // If any field is blank, we don't submit the form
    var toReturn = true
    $('input', $form).each(function () {
      // If our field is blank
      if ($(this).val() == '') {
        // Add an error message
        if (!$(this).data('error')) {
          $(this).data('error', $errorMsg.clone().insertAfter($(this)))
        }
        toReturn = false
      }
      // If the field is not blank
      else {
        // Remove the error message
        if ($(this).data('error')) {
          $(this)
            .data('error')
            .remove()
          $(this).removeData('error')
        }
      }
    })
    return toReturn
  })
 

  $('#firstname').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_firstname = re.test(input.val())
    var firstname = $('#firstname').val()
    if (!is_firstname) {
      $('#p1').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p1').css('display', 'none')
    }
  })

  $('#lastname').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_lastname = re.test(input.val())
    if (!is_lastname) {
      $('#p2').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p2').css('display', 'none')
    }
  })

  $('#title-department').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_title = re.test(input.val())
    if (!is_title) {
      $('#p3').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p3').css('display', 'none')
    }
  })

  $('#institution').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_institution = re.test(input.val())
    if (!is_institution) {
      $('#p4').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p4').css('display', 'none')
    }
  })
*/
  // email validation
  $('#email').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    var is_email = re.test(input.val())
    if (!is_email) {
      $('#p5').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p5').css('display', 'none')
    }
  })

  $('#phonenumber').on('change', function () {
    var input = $(this)
    var re = /^[0-9]+$/
    var is_phonenumber = re.test(input.val())
    if (
      !is_phonenumber
    ) {
      $('#p6').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p6').css('display', 'none')
    }
  })

  /*

  $('#specialtyname').on('change', function () {
    var str = $('#specialtyname option:selected').text()
    if (str == 'Select Specialty') {
      $('#p7').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p7').css('display', 'none')
    }
  })

  $('#topic').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_topic = re.test(input.val())
    if (!is_topic) {
      $('#p8').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p8').css('display', 'none')
    }
  })

  $('#audiencelevel').on('change', function () {
    var str = $('#audiencelevel option:selected').text()
    if (str == 'Select Audience') {
      $('#p9').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p9').css('display', 'none')
    }
  })

  $('#language').on('change', function () {
    var input = $(this)
    var re = /^[a-zA-Z]+$/
    var is_language = re.test(input.val())
    if (!is_language) {
      $('#p10').css('display', 'block') // This Segment Displays The Validation Rule For Email
    } else {
      $('#p10').css('display', 'none')
    }
  })

  */

})
	</script>

</head>

<body>

    <section id="speakerpage">
        <section id="thanks">
            <div>
                <h1>Thanks for your interest in the Health4TheWorld Global Classroom Education initiative!</h1>
            </div>
        </section>
        <section id="image">
            <img src="https://health4theworld.org/academy/wp-content/uploads/2019/11/docimage.png" class="docimage"
                alt="doctorsimage">
        </section>

        <section id="desc">
            <div class="clickregister">
                <a href="#speakerform" class="register">REGISTER TO SPEAK</a>
            </div>
            <h4>OUR MISSION</h4>
            <p style="text-align: justify;">Health4TheWorld is an award-winning non-profit global health movement by which we are providing free educational resources via futuristic technological innovations to low-resource communities worldwide.</p>
            <h4>YOUR CONTRIBUTION</h4>
            <p style="text-align: justify;">You will present a lecture in your medical specialty via a live web-conference, helping educate health professionals in Africa, Asia, and South America. The recorded lecture will be cataloged for future student reference on our Academy website & mobile app. <a href="https://health4theworld.org/academy/course/acute-myocardial-infarction-vascular-biology-and-treatment-implications/"
                    class="sample" target="_blank">Watch a sample lecture here.</a></p>
            <div class="list">
                <h4>LECTURE DETAILS</h4>
                <ul>
                    <li>45 minutes lecture presentation.</li>
                    <li>15 minutes Questions and Answers with the students.</li>
                    <li>Preparation Checklist:</li>
                </ul>

                <ul class="checkbox">
                    <li>Strong internet connection.</li>
                    <li>Computer camera and microphone.</li>
                    <li>Clear lighting without excess noise.</li>
                    <li>Laptop stand or books to raise your laptop camera.</li>
                </ul>
            </div>
        </section>

        <section id="form">
            <a id="speakerform"></a>
            <div class="progressbar">
                <div id="personal" class="tab">Personal Details</div>
                <div id="lecture" class="tab">Lecture Details</div>
                <div id="availability" class="tab">Availability</div>
            </div>
            <form action="https://health4theworld.org/academy/wp-content/themes/wplms/insert.php" method="post" id="msform">
                <fieldset id="set1">
                    <h1>SPEAKER REGISTRATION FORM</h1><br>
                    <h2 class="fs-title">PERSONAL DETAILS<span class="responserequired">(*Response Required)</span></h2>
                    <div class="info">
                        <label>First Name*</label>
                        <input type="text" id="firstname" class="required" name="firstname"
                            placeholder="Enter your first name" required />
                        <div id="p1" class="errormsg">Please enter text</div>
                    </div>
                    <div class="info">
                        <label>Last Name*</label>
                        <input type="text" id="lastname" class="required" name="lastname"
                            placeholder="Enter your last name" required />
                        <div id="p2" class="errormsg">Please enter text</div>
                    </div>
                    <div class="info">
                        <label>Title & Department*</label>
                        <input type="text" id="title-department" class="required" name="title_department"
                            placeholder="Enter your title & department" required />
                        <div id="p3" class="errormsg">Please enter text</div>
                    </div>
                    <div class="info">
                        <label>Institution*</label>
                        <input type="text" id="institution" class="required" name="institution"
                            placeholder="Enter your institution" required />
                        <div id="p4" class="errormsg">Please enter text</div>
                    </div>
                    <div class="info">
                        <label>Email* (Gmail preferred)</label>
                        <input type="email" id="email" class="required" name="email"
                            placeholder="Enter your email address" required />
                        <div id="p5" class="errormsg">Please enter a valid email address</div>
                    </div>
                    <div class="info">
                        <label>Cell Phone Number* (To contact on the day of talk)</label>
                        <input type="text" id="phonenumber" class="required" name="phonenumber"
                            placeholder="Enter your cell phone number" required />
                        <div id="p6" class="errormsg">Please enter valid cell phone number</div>
                    </div>
                    <button type="button" class="formbutton" id="nextset1">Next</button>
                </fieldset>
   
                <fieldset id="set2">
                    <h2 class="fs-title">LECTURE DETAILS<span class="responserequired">(*Response Required)</span></h2>
                    <br>
                    <div class="info">
                        <label>Select Specialty*</label>
                        <select id="specialtyname" class="required" name="specialty" data-default-value="" required>
                            <option value="" disabled selected>Select Specialty</option>
                            <option value="Internal Medicine">Internal Medicine</option>
                            <option value="Radiology">Radiology</option>
                            <option value="Emergency Medicine">Emergency Medicine</option>
                            <option value="Surgery">Surgery</option>
                            <option value="Community Health">Community Health</option>
                            <option value="Obstetrics">Obstetrics</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Other">Other</option>
                        </select>
                        <div id="p7" class="errormsg">Please select specialty</div>
                        <p class="des">If your specialty is not present in this list, Please<a
                                href="https://forms.gle/Cj2eFpt4pi8Atgak8" target="_blank"> CLICK HERE</a> to fill the
                            form.
                        </p>
                    </div>

                    <div class="info">
                        <label>Topic*</label>
                        <input id="topic" class="required" type="text" name="topic" placeholder=" Enter your topic"
                            required />
                        <div id="p8" class="errormsg">Please enter text</div>
                        <!-- <a href="#" id="suggestedtopics">Suggested topics</a> -->
                    </div>

                    <div class="info">
                        <label style="line-height: 1.5;">Which audience would you prefer, If not medical students or residents?*</label>
                        <select id="audiencelevel" name="audience" data-default-value="" required>
                            <option value="" disabled selected>Select Audience</option>
                            <option value="Midwives">Midwives</option>
                            <option value="Community Health Workers">Community Health Workers</option>
                            <option value="Fellows">Fellows</option>
                            <option value="Public Health Students">Public Health Students</option>
                            <option value="Nurses">Nurses</option>
                            <option value="Allied Health Workers">Allied Health Workers</option>
                            <option value="Not Applicable">Not Applicable</option>
                        </select>
                    </div>

                    <div class="info">
                        <label>Do you lecture in any other language except English? Please specify</label>
                        <input id="language" type="text" name="language" placeholder="Enter language" />
                        <div id="p10" class="errormsg">Please enter text</div>
                    </div>

                    <button type="button" class="formbutton" id="previousset2">Previous</button>
                    <button type="button" class="formbutton" id="nextset2">Next</button>
                </fieldset>
 

                <fieldset id="set3">
                    <h2 class="fs-title">AVAILABILITY<span class="responserequired">(*Response Required)</span></h2>
                    <div class="info">
                        <label>Available live session(s) for selected specialty*</label>
                        <input id="datepicker" name="available_date" placeholder="Select date" onfocus="this.value=''"
                            readonly />
                        <input id="starttimepicker" name="start_time"
                            placeholder="Select start time (PST)" onfocus="this.value=''" readonly/>
                        <input id="endtimepicker" name="end_time" placeholder="Select end time (PST)"
                            onfocus="this.value=''"
                            readonly/>
                        <div id="p11" class="errormsg">Please enter valid date and time</div>
                        <p class="des" style="line-height: 1.5;">If none of these live sessions dates and times work, Please <span class="click-record">CLICK
                                HERE</span> to set
                            up a time to record the lecture.</p>
                    </div>

                    <div class="info" id="info-record1">
                           <label>Available date and time to record* (you can choose up to 3 dates)</label>
                           <input id="datetimepicker" name="preferred_date1" placeholder="Select date and time (PST)" onfocus="this.value=''"
                               readonly />
                                <div class="choose" id="date1">Choose more dates</div>
                    </div>

                       <div class="info" id="info-record2">
                           <input id="datetimepicker2" name="preferred_date2" placeholder="Select date and time (PST)"
                               onfocus="this.value=''" readonly />
                           <div class="choose" id="date2">Choose more dates</div>
                       </div>

                        <div class="info" id="info-record3">
                            <input id="datetimepicker3" name="preferred_date3" placeholder="Select date and time (PST)"
                                onfocus="this.value=''" readonly />
                        </div>

                    <div class="info">
                        <label>Lecture Release Form*</label><br>
                        <div class="releaseform">
                            <p style="line-height: 1.5;">Your recorded lecture video will be hosted on the <a href="https://health4theworld.org/academy/" style="color: #009688; text-decoration: none;">Health4TheWorld Academy website</a> and mobile app.</p>
                           <a href="https://na3.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=8d256a30-7178-41e5-b821-ec10232f9824"
                                 target="popup" onclick="window.open('https://na3.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=8d256a30-7178-41e5-b821-ec10232f9824','popup','width=800,height=600'); return false;">Release & Authorization Form</a>
                        </div>
                        <div class="signed">
                            <input id="sign" type="checkbox" name="docusign" value="1" required>
                            <p>I have read and signed the lecture release form</p>
                        </div>
                    </div>

                    <div class="complete">
                        <p>After signing the lecture release & authorization form, click submit to complete your
                            registration.</p>
                    </div>

                    <button type="button" class="formbutton" id="previousset3">Previous</button>
                    <button type="submit" class="formbutton" id="submit" name="submit" value="insert">Submit</button>
                </fieldset>
            </form>
        </section>
    </section>
</body>

</html>