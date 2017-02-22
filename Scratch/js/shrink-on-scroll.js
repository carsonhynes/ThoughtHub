$(function(){
  $('#navbar').data('size','big');
});

$(window).scroll(function(){
  if($(document).scrollTop() > 0)
{
    if($('#navbar').data('size') == 'big')
    {
        $('#navbar').data('size','small');
        $('#navbar').stop().animate({
            height:'40px'
        },600);
    }
}
else
  {
    if($('#navbar').data('size') == 'small')
      {
        $('#navbar').data('size','big');
        $('#navbar').stop().animate({
            height:'100px'
        },600);
      }  
  }
});