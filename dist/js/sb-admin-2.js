$(function() {

    $('#side-menu').metisMenu();

});

$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});


$(document).ready(function(){ 
    $('#form').submit(function(){
        $('#output').html('<img src="../dist/loading.gif"><br><b>İşleniyor...</b>');
        $.ajax({
            type: 'POST',
            url: '../dist/ajax.php', 
            data: $(this).serialize()
        })
        .done(function(data){
            $('#output').html(data);
        })
        .fail(function() {
            alert( "Hata! Sayfayı yenileyip tekrar deneyin..." );
        });
        return false;
    });
});

$(document).ready(function(){ 
    $('#form1').submit(function(){
        $('#output1').html('<img src="../dist/loading.gif"><br><b>İşleniyor...</b>');
        $.ajax({
            type: 'POST',
            url: '../dist/ajax.php', 
            data: $(this).serialize()
        })
        .done(function(data){
            $('#output1').html(data);
        })
        .fail(function() {
            alert( "Hata! Sayfayı yenileyip tekrar deneyin..." );
        });
        return false;
    });
});
