function checkWindowSize() {  

    if ( $(window).width() < 580 ) {  
        $('.cta').addClass('cta-mob');
        $( '.cta-mob' ).css('background-color', '#efefef');

    }  
    else {  
        $('.cta').removeClass('cta-mob');  
        $( '.cta' ).css('background-color', 'transparent');
    }  

}  

checkWindowSize(); 
$(window).resize(checkWindowSize);


function copyUrl(){
    var copyText = document.getElementById("myInput");
    copyText.value = window.location;
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  $('.copyurl-label').html("Copied!");
}