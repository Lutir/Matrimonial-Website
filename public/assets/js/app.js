//slider settings
$('.bxslider').bxSlider({
  minSlides: 3,
  maxSlides: 4,  
  captions: true,
  slideWidth: 200,
  slideMargin: 10
});

//append start and end ages
var age='';
for(var i=18;i<40;i++){
	age+='<option value='+i+'>'+i+'</option>';
}
$('#search_min_age').append(age);
$('#search_max_age').append(age);
var motherTongue = ['Hindi','English','Marathi','Chattisgari','Bengali','Bhojpuri','Telegu','Tamil'];
var religion = ['Jain','Hindu','Muslim','Bong','Tamil','Telegu','Marathi','Assamese','Sikh','Punjabi'];
var country = ['India','Pakistan','Dubai','Singapore','US','other'];
var religion_list = '';
var motherTongue_List = '';
var country_list = '';
for(var i=0;i<religion.length;i++)
	religion_list+='<option value='+religion[i]+'>'+religion[i]+'</option>';
for(var i=0;i<motherTongue.length;i++)
	motherTongue_List+='<option value='+motherTongue[i]+'>'+motherTongue[i]+'</option>';
for(var i=0;i<country.length;i++)
	country_list+='<option value='+country[i]+'>'+country[i]+'</option>';
$('#search_religion').append(religion_list);
$('#search_motherTongue').append(motherTongue_List);
$('#search_country').append(country_list);


// for profile page
