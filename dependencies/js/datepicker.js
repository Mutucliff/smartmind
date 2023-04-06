





  

  
  function parseFloatclear(data)
	{
		if(!$.isNumeric(data)) {
		data= parseFloat(data.replace(/,/g, ''));
		}
		else
		{
			data= parseFloat(data);
		}
		return data;
		
		
	}
  

  
    $( function() {
    var $intRateSlider = $('#int-rate').slider({
      range: "max",
      min: 1,
      max: 40,
      value: 1,
      slide: function( event, ui ) {
        $( "#interest_rate" ).val( ui.value) ;
      }
    });
    $( "#interest_rate" ).val( $( "#int-rate").slider( "value" ));
	
	 function formatINR(unit){
		return unit + "%";
	}
	$(document).on('input', '#interest_rate', function(e) {
		var value = e.target.value;
		//var validintratevalue = Number(value.replace(/\D+/g, ''));
		var validintratevalue = value.replace(/[^0-9\.]/g,"");
		//console.log("valu"+validintratevalue);
		$intRateSlider.slider( "option", "value", validintratevalue );
	});
  } );
  
  $( function() {
    var $tenureMonthSlider = $('#tenure-month').slider({
      range: "max",
      min: 1,
      max: 120,
      value: 1,
      slide: function( event, ui ) {
        $( "#tmonth" ).val( ui.value );
      }
    });
    $( "#tmonth" ).val( $( "#tenure-month" ).slider( "value" ) );
	function formatINR(unit){
		return unit + "KSh";
	}
	$(document).on('input', '#tmonth', function(e) {
		var value = e.target.value;
		var validMonthSliderValue = Number(value.replace(/\D+/g, ''));
		$tenureMonthSlider.slider( "option", "value", validMonthSliderValue );
	});
  } );
  
    $( function() {
 var $tenMonthSlider = $('#ten_month').slider({
      range: "max",
      min: 1,
      max: 60,
      value: 2,
      slide: function( event, ui ) {
        $( "#tenure_month" ).val( ui.value );
      }
    });
    $( "#tenure_month" ).val( $( "#ten_month" ).slider( "value" ) );
	 function formatINR(unit){
		return unit + "KSh";
	}
	$(document).on('input', '#tenure_month', function(e) {
		var value = e.target.value;
		var validMonthSliderValue = Number(value.replace(/\D+/g, ''));
		$tenMonthSlider.slider( "option", "value", validMonthSliderValue );
	});
  } );
$(function()
{

    $("#checkinw1").datepicker({dateFormat: "dd-mm-yy",
      
        minDate: "dateToday",
        onClose: function (selectedDate) {
            var myDate = $(this).datepicker('getDate'); 
                myDate.setDate(myDate.getDate()+1); 
            $('#checkoutw1').datepicker('setDate', myDate);
        }
		
    });
    
    $("#checkoutw1").datepicker({
        dateFormat: "dd-mm-yy",
        
    });
    
    //$("#checkinw1").datepicker("setDate", "0");
    //$("#checkoutw1").datepicker("setDate", "1");

	//$("#checkoutw1").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});
	$("#checkinw").datepicker({minDate:0,showAnim: "slideDown"});
	$("#checkoutw").datepicker({minDate:0,showAnim: "slideDown"});
	$("#wedding_date").datepicker({minDate:0,showAnim: "slideDown"});
$("#commence_date").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});
$("#end_date").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});
$("#checkin_date").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});
$("#prefer_date").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});
  $("#p_date").datepicker({minDate:0,showAnim: "slideDown",dateFormat:'dd-mm-yy'});		
			
		});
		/*
$("#checkinw1").datepicker({
        dateFormat: "dd-mm-yy", 
        minDate:  0,
        onSelect: function(date){            
            var date1 = $('#checkinw1').datepicker('getDate');           
            var date = new Date( Date.parse( date1 ) ); 
            date.setDate( date.getDate() + 1 );        
            var newDate = date.toDateString(); 
            newDate = new Date( Date.parse( newDate ) );                      
            $('#checkoutw1').datepicker("option","minDate",newDate);            
        }
    });*/
	
	