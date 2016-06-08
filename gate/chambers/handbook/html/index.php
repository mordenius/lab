<html>
<head>
    <title>Справочник по HTML</title>
</head>
<meta charset="utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body>
    <h1>Справочник по HTML </h1>
    <input id="Input_Seorch" type="text" placeholder="Поиск">
    <div class="tag_meny"> </div>
    <div class="wrap_tegs">
        <ul> </ul>
    </div>
    <div class="result">
        <div> </div>
    </div>
    <script>
        $(document).ready(function() {
            var Width_Wrap_tegs = $(".wrap_tegs").width();
            var result;
            var html_tags;
            $.post('Untitled-5.php', {
                value1: '1',
                value2: '2'
            }, function(data) {
                // $("body").text(data)
                html_tags = JSON.parse(data);
            }).done(function() {
if (done){require = find }
                $.each(html_tags, function(key, value) {
                    console.log(html_tags);

                    value["tag_name"] = $.trim(value["tag_name"]);
                    //----------------------------------------------------------------------------------------------------                    
                    //$(".wrap_tegs ul").append('<li><a href="#">' + "&lt;" + value["tag_name"] + ">" + '</a></li>');                
                    //console.log(value["tag_name"]) 
                    //----------------------------------------------------------------------------------------------------
                    var app = $('.wrap_tegs');
                    if (value["tag_name"] !== "DOCTYPE" && value["tag_name"] !== "-- --") {
                        if ($('.' + value["tag_name"][0]).length) {} else {
                            $(".tag_meny").append('<a class=' + value["tag_name"][0] + "_" + '>' + value["tag_name"][0].toUpperCase() + '</a>');
                            app.append('<ul class=' + value["tag_name"][0] + '>' + '<h2 class=' + value["tag_name"][0] + "_" + '>' + value["tag_name"][0].toUpperCase() + '</h2>' + '<br>' + '</ul>', '<br>');
                        }
                        $('.' + value["tag_name"][0]).append('<li>' + '<a href="#">' + "&lt;" + value["tag_name"] + ">" + '</a>' + '</li>');

                    } else {
                        //---------------------------------------------------------------------------------------------
                        var tag = "spec_simbols"
                        if ($('.' + tag).length) {} else {
                            app.prepend('<br>', '<ul class="spec_simbols"><h2 class="spec_simbols_">!<h2></ul>');
                        }

                        $(".spec_simbols").append('<li>' + '<a href="#">' + "&lt;" + "!" + value["tag_name"] + ">" + '</a>' + '</li>');
                    }

                    //-----------------------------------------------------------------------------------------------
                    //---------------------------------------------------------                            
                    $("body").keypress(function(e) {
                        $("#Input_Seorch").focus();
                    });
                    var value_seorch;
                    document.onkeyup = function(e) {
                        $(".result div").empty();
                        value_seorch = $("#Input_Seorch").val();
                        seorch(value_seorch);
                    }

                    function seorch(value_seorch) {
                        $.each(html_tags, function(key, value) {
                            if (value["tag_name"].indexOf(value_seorch) != -1) {
                                $(".result div").append('<span>' + value["tag_name"] + '</span>');
                            }
                        })

                    }
                })

                  //$("body").append(html_tags);             
                $(".tag_meny").prepend('<a class="spec_simbols_"> ! </a>');
                  //-----------------------------------------------------------------------------------------------------------------  
                var tgl = 0;
                $(".tag_meny > a").click(function() {
                    $('.wrap_tegs > ul').show();
                    $('br').show()

                    i = $("." + $(this).attr('class'))
                    r = $("." + $(this).attr('class').slice(0, -1))
                    console.log(r)
                    r.addClass("active")
                    i.addClass("active")
                        //$('.wrap_tegs > ul').not('.' + $(this).attr('class').slice(0, -1) ).hide('slow')
                    $('.wrap_tegs > ul').not('.active').hide('slow')
                    $('br').not('.' + $(this).attr('class').slice(0, -1)).hide('slow')
                        //$(".tag_meny > a").not('.' + $(this).attr('class').slice(0, -1)).hide('slow')
                });
                $('.wrap_tegs > ul').on('click', 'h2', function(event) {
                    tgl++;
                    if (tgl == 2) {
                        $("#Input_Seorch").val("");
                        $(".result > div").empty();
                        $(".tag_meny > a").removeClass("active");
                        $('.wrap_tegs > ul').removeClass("active");
                        $('.wrap_tegs > ul').show();
                        $('br').show();
                        tgl = 1;
                    };
                   //$("body").text(html_tags);
                });


            });
        });
    </script>
</body>
</html>