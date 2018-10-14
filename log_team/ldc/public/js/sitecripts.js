$(document).ready(function(){

	getDay();
	slide();
	

});


function getDay()
{
	var day = new Date();
	var t = day.getDay();
	
	var thu = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];
	
	var today = day.getDate() + "/" + day.getMonth() + "/" + day.getFullYear();
	

	$('.thu').html(thu[Number(t)]);
	$('.date').html(today);

	var hour = day.getHours();
	if (hour >= 5 && hour < 12)
	{
		$('.loi-chao').html("Chào buổi sáng !");
	}
	else if (hour >= 12 && hour < 18)
	{
		$('.loi-chao').html("Chúc bạn buổi chiều tốt lành !");
	}
	else
	{
		$('.loi-chao').html("Chúc bạn có buổi tối vui vẻ !");
	}
}


