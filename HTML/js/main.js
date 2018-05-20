$(document).ready(function() {
    var email = '13woopeter@gmail.com';
    var phone = '(714) 788-9553'

    $('.phone').text(phone).attr('href', 'tel:17147889553');
    $('.email').text(email).attr('href', 'mailto:'+email);
    $('.resume-link').click(resumeLink);
    $('.stubbies.live').click(stubbiesLive);
    $('.stubbies.code').click(stubbiesCode);
    $('.ticTac.live').click(ticTacLive);
    $('.ticTac.code').click(ticTacCode);
    $('.fridgeBridge.live').click(fridgeBridgeLive);
    $('.fridgeBridge.code').click(FridgeBridgeCode);

    $('.toggleWrapper').unbind('click').click(colorSchemeChange);

    $('.inputCheck').prop('checked', true);
    var path = 'css/dark.css'
    $('#color-switcher').attr('href', path);
});

function resumeLink() {
    window.open('https://drive.google.com/file/d/1MlHtxETo-e4LhOLQvShNLQ4Kvd52Km23/view?usp=sharing');
}

function stubbiesLive() {
    window.open('http://stubbies.kryseno.com/');
}

function stubbiesCode() {
    window.open('https://github.com/kryseno/stubbies');
}

function ticTacLive() {
    window.open('http://www.oowretep.com/tictacduckhunt');
}

function ticTacCode() {
    window.open('https://github.com/oowretep/Tic-Tac-Duck-Hunt');
}

function fridgeBridgeLive() {
    window.open('http://www.oowretep.com/fridgebridge');
}

function FridgeBridgeCode() {
    window.open('https://github.com/oowretep/Fridge-Bridge');
}

var check = false;

function colorSchemeChange() {
    if ($('.inputCheck').is(':checked')) {
        if (check === true) {
            return;
        }
        var path = 'css/dark.css'
        $('#color-switcher').attr('href', path);
        check = true;
    } else if ($('.inputCheck').not(':checked')) {
        if (check === false) {
            return;
        }
        var path = 'css/light.css'
        $('#color-switcher').attr('href', path);
        check = false;
    }
}