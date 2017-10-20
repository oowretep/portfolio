$(document).ready(intializeApp);

function intializeApp() {
    applyClick();
}

function applyClick() {
    $(this).click(function() {
        console.log('button clicked');
        $('.devicon').css('display', 'inline-block');
    });
}
