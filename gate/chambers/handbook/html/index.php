<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->

 <link rel="stylesheet" href="https://lab:80/gate/handbook/html/css/style.css">
<section>
    <h1>Справочник по HTML </h1>
    <input id="Input_Seorch" type="text" placeholder="Поиск">
    <div class="tag_meny"> </div>
    <div class="wrap_tegs">
        <ul> </ul>
    </div>
    <div class="select_tag">
              <div class="tag_name"> </div>
              <div class="tag_type"> </div>
              <div class="tag_attribute"> </div>
              <div class="tag_syntax"> </div>
              <div class="tag_closing"> </div>
              <div class="tag_description"> </div>
              <div class="tag_specification"> </div>
              <div class="tag_example"> </div>
              <div class="tag_note"> </div>
     </div>
 </section>

    <script>
$(document).ready(function() {
    var Width_Wrap_tegs = $(".wrap_tegs").width();
    var html_tags;
    $.post('Untitled-5.php', {
        value1: '1',
        value2: '2'
    }, function(data) {
        html_tags = JSON.parse(data);
    }).done(function() {
        $.each(html_tags, function(key, value) {
            value["tag_name"] = $.trim(value["tag_name"]);
            var app = $('.wrap_tegs');
            if (value["tag_name"] !== "DOCTYPE" && value["tag_name"] !== "-- --") {
                if ($('.' + value["tag_name"][0]).length) {} else {
                    $(".tag_meny").append('<a href="#" class=' + value["tag_name"][0] + "_" + '>' + value["tag_name"][0].toUpperCase() + '</a>');
                    app.append('<ul class=' + value["tag_name"][0] + '>' + '<h2 class=' + value["tag_name"][0] + "_" + '>' + value["tag_name"][0].toUpperCase() + '</h2>' + '<br>' + '</ul>', '<br>');
                }
                $('.' + value["tag_name"][0]).append('<li>' + '<a href="#">' + "&lt;" + value["tag_name"] + ">" + '</a>' + '</li>');
            }else{
                var tag = "spec_simbols"
                if ($('.' + tag).length) {} else {
                    app.prepend('<br>', '<ul class="spec_simbols"><h2 class="spec_simbols_">!<h2></ul>');
                }
                $(".spec_simbols").append('<li>' + '<a href="#">' + "&lt;" + "!" + value["tag_name"] + ">" + '</a>' + '</li>');
            }
                     
      
        })         
        $(".tag_meny").prepend('<a class="spec_simbols_"> ! </a>');
        //---------------------------------------------------------------
        
   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        //-----------------------------------------------------------------
        var tgl = 0;
        var OfOn = 0;
        $(".tag_meny > a").click(function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $("." + $(this).attr('class').slice(0, -1)).removeClass("active");
                OfOn = false;
            } else {
                $('.wrap_tegs > ul').show();
                $('br').show()
                i = $("." + $(this).attr('class'))
                r = $("." + $(this).attr('class').slice(0, -1))
                console.log(r)
                r.addClass("active")
                i.addClass("active")
            }
            $('.wrap_tegs > ul').not('.active').hide('slow')
            $('br').not('.' + $(this).attr('class').slice(0, -1)).hide('slow')
        });
        $('.wrap_tegs > ul').on('click', 'h2', function(event) {
            tgl++;
            if (tgl == 2) {
                $("#Input_Seorch").val("");
                $(".tag_meny > a").removeClass("active");
                $('.wrap_tegs > ul').removeClass("active");
                $('.wrap_tegs > ul').show();
                $('br').show();
                tgl = 1;
            };
        });
    });
//--    
   $("body").keypress(function(e) {
        $("#Input_Seorch").focus();
    });
    var value_seorch;
    document.onkeyup = function(e) {
        value_seorch = $("#Input_Seorch").val();
        seorch(value_seorch);
    }
    function seorch(value_seorch) {
        $.each(html_tags, function(key, value) {
            if (value["tag_name"].indexOf(value_seorch) != -1) {

            }
        })
    }    
//--
    
// --- show teg information 
$('.wrap_tegs').on('click', 'ul > li > a', function(event) {
  var val_tag_name = $(this).text().slice(1, -1);
   $('.wrap_tegs').css({'display' : 'none'});
 function seorch_tegs(val_tag_name) {
   $.each(html_tags, function(key, value) {
       console.log(value);
     if (value["tag_name"] == val_tag_name) {
               // ---
               $(".tag_name").append('<p><span>Тег</span>' + '&lt;' + value["tag_name"] + '&gt;' + '</p>'); 
               $(".tag_type").append('<p><span>sdfsdf</span>' + '&lt;' + value["tag_type"] + '&gt;' + '</p>'); 
               $(".tag_attribute").append('<p><span>Тег</span>' + '&lt;' + value["tag_attribute"] + '&gt;' + '</p>'); 
               $(".tag_syntax").append('<p><span>Тег</span>' + '&lt;' + value["tag_syntax"] + '&gt;' + '</p>'); 
               $(".tag_closing").append('<p><span>Тег</span>' + '&lt;' + value["tag_closing"] + '&gt;' + '</p>'); 
               $(".tag_description").append('<p><span>Тег</span>' + '&lt;' + value["tag_description"] + '&gt;' + '</p>'); 
               $(".tag_specification").append('<p><span>Тег</span>' + '&lt;' + value["tag_specification"] + '&gt;' + '</p>'); 
               $(".tag_example").append('<p><span>Тег</span>' + '&lt;' + value["tag_example"] + '&gt;' + '</p>'); 
               $(".tag_note").append('<p><span>Тег</span>' + '&lt;' + value["tag_note"] + '&gt;' + '</p>'); 
               // ---
               //$(".tag_name  p").append("<span> фывафываыфв <span>"); 
            }   
         })
      } 
 seorch_tegs(val_tag_name)                  
 });
//---------------------------------------------------------------    
    var height_ul = function() {
        var height = $(".wrap_tegs > ul > li").height();
        var c = 0;
        var ctr = 0;
        var ctr_nam = 0;
        $(".wrap_tegs > .active > li").each(function(i, elem) {
            ctr_nam++;
            console.log(ctr_nam)
            c++;
            console.log(c)
            if (c == 7) {
                ctr++;
                c = 0;
                $(".wrap_tegs > .active").height((height + 80) * ctr);
            } else if (ctr_nam == 15) {
                $(".wrap_tegs > .active").height(0);
                $(".wrap_tegs > .active").height((height + 80) * ctr);
            }
            $(".wrap_tegs > .active").height((height + 60) + 80);
        });   
    }
    

    
    
    $(".tag_meny").click(function() {
        height_ul();
    });
});
    </script>
