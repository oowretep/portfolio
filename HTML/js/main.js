$(document).ready(function() {
    var email = '13woopeter@gmail.com';
    var phone = '(714) 788-9553'

    $('.phone').text(phone).attr('href', 'tel:17147889553');
    $('.email').text(email).attr('href', 'mailto:'+email);
    $('.stubbies.live').click(stubbiesLive);
    $('.stubbies.code').click(stubbiesCode);
});

function stubbiesLive() {
    console.log('live was pressed for stubbies');
    window.open('https://www.google.com');
}

function stubbiesCode() {
    window.open('https://www.github.com/oowretep');
}