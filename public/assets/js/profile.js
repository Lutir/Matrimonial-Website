

$(document).ready(function()
{

$('.s-2').hide('slow');
$('.s-3').hide('slow');

$('#1').click(function(event) {
	$('.s-2').hide('slow');
	$('.s-3').hide('slow');
	$('.s-1').show('slow');
	$('#1').addClass('activated');
	$('#2').removeClass('activated')
	$('#3').removeClass('activated')
});

$('#2').click(function(event) {
	$('.s-1').hide('slow');
	$('.s-3').hide('slow');
	$('.s-2').show('slow');
	$('#2').addClass('activated');
	$('#1').removeClass('activated')
	$('#3').removeClass('activated')
});

$('#3').click(function(event) {
	$('.s-2').hide('slow');
	$('.s-1').hide('slow');
	$('.s-3').show('slow');
	$('#3').addClass('activated');
	$('#2').removeClass('activated')
	$('#1').removeClass('activated')
});

// --------------------------------------------------------
// $('#bannerImg').hide();	

// 				var bannerImage = document.getElementById('bannerImg');
// 				imgData = getBase64Image(bannerImage);
// 				// console.log(imgData);
// 				function readURL(input) 
// 	{
		

// 		if (input.files && input.files[0]) {
// 			var reader = new FileReader();

// 			reader.onload = function (e) {
// 				document.getElementById('bannerImg').src =  e.target.result;
// 				document.getElementById('bannerImage').src =  e.target.result;
// 				bannerImage = document.getElementById('bannerImg');
// 				// if(bannerImg.height>300 || bannerImg.width>200){
// 					// alert('Enter Image of size < 200*300');
// 					// return ;
// 				// }
// 				// else{
// 					imgData = getBase64Image(bannerImage);
// 					imgData = b64toBlob(imgData, 'image', 512);
// 					console.log('naya image');
// 					console.log(imgData);
// 					localStorage.setItem("imgData", imgData);

// 				}
// 				// }
// 				// $('#bannerImg').css('width','100px');
// 				reader.readAsDataURL(input.files[0]);
// 			}
// 		}

// 		function getBase64Image(img) {
// 			var canvas = document.createElement("canvas");
// 			canvas.width = img.width;
// 			canvas.height = img.height;
			
			
// 			var ctx = canvas.getContext("2d");
// 			ctx.drawImage(img, 0, 0);

// 			var dataURL = canvas.toDataURL("image/png");
			
// 			return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
// 		}

// 		function b64toBlob(b64Data, contentType, sliceSize) {
// 		  contentType = contentType || '';
// 		  sliceSize = sliceSize || 512;

// 		  var byteCharacters = atob(b64Data);
// 		  var byteArrays = [];

// 		  for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
// 		    var slice = byteCharacters.slice(offset, offset + sliceSize);

// 		    var byteNumbers = new Array(slice.length);
// 		    for (var i = 0; i < slice.length; i++) {
// 		      byteNumbers[i] = slice.charCodeAt(i);
// 		    }

// 		    var byteArray = new Uint8Array(byteNumbers);

// 		    byteArrays.push(byteArray);
// 		  }

// 		  var blob = new Blob(byteArrays, {type: contentType});
// 		  return blob;
// 		}

		// -------------------------------------------------


$('.save').click(function(){
	var data = {};
	data.firstName = $('#firstName').val();
	data.lastName = $('#lastName').val();
	data.email = $('#email').val();
	data.religion = $('#maritalStatus option:selected').val();
	data.country = $('#search_country option:selected').val();
	data.mothertongue = $('#search_motherTongue option:selected').val();
	data.religion = $('#search_religion option:selected').val();

	data.occupation = $('#occupation').val();
	data.income = $('#income').val();
	data.company = $('#company').val();
	data.diet = $('#diet option:selected').val();
	data.smoke = $('#smoke option:selected').val();
	data.drink = $('#drink option:selected').val();
	data.raashi = $('#raashi').val();
	data.complexion = $('#complexion').val();
	data.fathers_occupation = $('#fathers_occupation').val();
	data.mothers_occupation = $('#mothers_occupation').val();
	data.desc = $('#desc').val();
	data.image = localStorage.getItem('imgData');
	console.log(data);


	$.ajaxSetup(
		    {
		        headers:
		        {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });
			
			$.ajax(
		    {
		        type: "POST",
		        url: '/storeInfo',
		        data: data,
		        dataType: "json",
		        success: function(data){
		        	console.log(data);
		        	// console.log("helo");
		        	// location.reload();
		        },
		        error: function(jqXHR,testStatus,errorThrown){
		        	console.log(errorThrown);
		        }
			});

});
	
//ajax
var data = 'yo';
$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		
		$.ajax(
	    {
	        type: "POST",
	        url: '/fetchInfo',
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log(data);
	        	setInformation(data);
	        	// location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});

function setInformation(data)
{
	console.log(data);
	
	$('#firstName').val(data.firstName);
	$('#lastName').val(data.lastName);
	$('#email').val(data.email);
	$('#occupation').val(data.occupation);
	$('#company').val(data.company_name);
	$('#income').val(data.income);
	$('#raashi').val(data.raashi);
	$('#complexion').val(data.complexion);
	$('#fathers_occupation').val(data.fathers_occupation);
	$('#mothers_occupation').val(data.mothers_occupation);
	$('textarea#desc').val(data.description);

	$('#search_religion').val(data.religion);
	$('#search_motherTongue').val(data.mothertongue);
	$('#search_country').val(data.country);
	$('#diet').val(data.diet);
	$('#smoke').val(data.smoke);
	$('#drink').val(data.drink);

}

});