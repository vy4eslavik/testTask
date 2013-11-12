/**
 * User: vy4eslavik
 * Date: 10.11.13
 * Time: 23:23
 */

var latestPosts = {
    obj : [],
    currentLevel : 0,

    prev: function(){
        console.log('prev');

        $.ajax({
            url: '/functions.php',             // указываем URL и
            dataType : "post",                     // тип загружаемых данных
            ajaxStart: function(){                 // Ajax Start

            },
            error: function(){                      // Ajax error

            },
            success: function (data, textStatus) { // Ajax done
                $.each(data, function(i, val) {    // обрабатываем полученные данные
                    /* ... */
                });
            },
            complete: function(){                   // Ajax end

            }

        });
//        $('#'+this.currentLevel).remove();
        this.currentLevel++;
    }
};

$(window).load(function(){
    latestPosts.obj[latestPosts.obj.length] = $('#0');
});