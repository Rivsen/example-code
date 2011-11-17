      <script type="text/javascript">
      {literal}
          $('.name>li ul').css('display','none');
          var selected=null;

          $('.name li>a').click(function(){
              if($(this).parent().children('ul')[0].style.display=='none'){

                 window.selected=$(this);
                 $(this).parent().parent().find('ul').slideUp('fast',function(){
                      $(this).parent().removeClass('selected').find('.selected').removeClass('selected');
                  });

                  $(this).parent().addClass('selected').children('ul').slideDown('normal');

              }else{

                 window.selected=null;
                 $(this).parent().removeClass('selected').children('ul').slideUp('fast',function(){$(this).parent().find('.selected').removeClass('selected')});
                 $(this).parent().parent().find('ul').slideUp('fast');

              }
          });

          $('.name>li>ul>li li:not(.selected)').hover(function(){$(this).children('a').css('color','#bcbabb');},function(){$(this).children('a').css('color','#555');});
      {/literal}
      </script>

