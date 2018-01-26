$(document).ready(function() {
    var email = 'filleremail@filler.filler';
    var phone = '123-456-7890'

    $('.phone').text(phone)
    // .attr('href', 'tel:17147889553');
    $('.email').text(email)
    // .attr('href', 'mailto:'+email);
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