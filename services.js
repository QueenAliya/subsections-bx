$(document).ready(function () {

    function levels(){
    let list_second = $('.left .sub-menu .li_item2'),
    list_second_title = list_second.children('.h2title'),
    list_third = $('.left .sub-menu .li_item3'),
    list_third_title = list_third.children('.h2title'),
    list_fourth = $('.left .sub-menu .li_item4'),
    list_fourth_title = list_fourth.children('.h2title'),
    list_fifth =  $('.left .sub-menu .li_item5'),
    list_fifth_title = list_fifth.children('.h2title'),

    right_list_second = $('.right .sub-menu .description_item2'),
    right_list_second_deskr = right_list_second.children('.description'),
    right_list_third = $('.right .sub-menu .description_item3'),
    right_list_third_deskr = right_list_third.children('.description'),
    right_list_fourth = $('.right .sub-menu .description_item4'),
    right_list_fourth_deskr = right_list_fourth.children('.description'),
    right_list_fifth = $('.right .sub-menu .description_item5'),
    right_list_fifth_deskr = right_list_fifth.children('.description');

      list_second.each(function (i) {
        let titleNotActive = $(this).siblings().children('.h2title');
        list_second_title.eq(i).on('click', function(){
          list_second.eq(i).toggleClass('active').siblings().removeClass('active');

          if(list_second.eq(i).hasClass('active')){
            $(this).children('.title').addClass('active').removeClass('disactive');
            list_second.eq(i).siblings().find('.h2title .title').removeClass('active');
            titleNotActive.find('.title').addClass('disactive');
          } else{
            $(this).children('.title').removeClass('active');
            titleNotActive.find('.title').removeClass('disactive');
          } 

          right_list_second_deskr.eq(i).addClass('active');          
          right_list_second.eq(i).siblings().find('.description').removeClass('active');
          right_list_third_deskr.removeClass('active');
          right_list_fourth_deskr.removeClass('active');
          right_list_fifth_deskr.removeClass('active');
          if (list_second.eq(i).hasClass('active')){} else {
            list_third.removeClass('active');
            list_fourth.removeClass('active');
            list_fifth.removeClass('active');
          }
        });

        if ($(this).children().hasClass('sub-menu')){} else{
            list_second_title.eq(i).children('.title-arrow').addClass('d-none');
          }
        $(this).css({'border-top':'1px solid #E3BEB2'});
      });

      list_third.each(function (i) {
        let titleNotActive = $(this).siblings().children('.h2title');
        list_third_title.eq(i).on('click', function(){
          list_third.eq(i).toggleClass('active').siblings().removeClass('active');

          if(list_third.eq(i).hasClass('active')){
            $(this).children('.title').addClass('active');
            list_third.eq(i).siblings().find('.h2title .title').removeClass('active');   
            titleNotActive.find('.title').addClass('disactive');   
          } else{
            $(this).children('.title').removeClass('active');
            titleNotActive.find('.title').removeClass('disactive');
          } 

          right_list_third_deskr.eq(i).addClass('active');
          right_list_third.eq(i).siblings().find('.description').removeClass('active');
          right_list_second_deskr.removeClass('active');
          right_list_fourth_deskr.removeClass('active');
          right_list_fifth_deskr.removeClass('active');
          if (list_third.eq(i).hasClass('active')){ } else {
            list_fourth.removeClass('active');
            list_fifth.removeClass('active');
          }
        });
        if ($(this).children().hasClass('sub-menu')){} else{
          list_third_title.eq(i).children('.title-arrow').addClass('d-none');
          // list_third.eq(i).css({
          //   'height':'44px',
          // });
        }
      });

      list_fourth.each(function (i) {
        list_fourth_title.eq(i).on('click', function(){
          list_fourth.eq(i).toggleClass('active').siblings().removeClass('active');

          if(list_fourth.eq(i).hasClass('active')){
            $(this).children('.title').addClass('active');
            list_fourth.eq(i).siblings().find('.h2title .title').removeClass('active'); 
          } else{
            $(this).children('.title').removeClass('active');
          } 

          right_list_fourth_deskr.eq(i).addClass('active');
          right_list_fourth.eq(i).siblings().find('.description').removeClass('active');
          right_list_second_deskr.removeClass('active');
          right_list_third_deskr.removeClass('active');
          right_list_fifth_deskr.removeClass('active');
          if (list_fourth.eq(i).hasClass('active')){ } else {
            list_fifth.removeClass('active');
          }
        });
        if ($(this).children().hasClass('sub-menu')){} else{
          list_fourth_title.eq(i).children('.title-arrow').addClass('d-none');
        }
      });

      list_fifth.each(function (i) {
        list_fifth_title.eq(i).on('click', function(){
          list_fifth.eq(i).toggleClass('active').siblings().removeClass('active');
          right_list_fifth_deskr.eq(i).addClass('active');

          if(list_fifth.eq(i).hasClass('active')){
            $(this).children('.title').addClass('active');
            list_fifth.eq(i).siblings().find('.h2title .title').removeClass('active'); 
          } else{
            $(this).children('.title').removeClass('active');
          } 

          right_list_fifth .eq(i).siblings().find('.description').removeClass('active');
          right_list_second_deskr.removeClass('active');
          right_list_third_deskr.removeClass('active');
          right_list_fourth_deskr.removeClass('active');
        });
        if ($(this).children().hasClass('sub-menu')){} else{
          list_fifth_title.eq(i).children('.title-arrow').addClass('d-none');
        }
      });
      }
      levels();
      
      function sub_menus(){
        let top_list = $('.top_list').children(),
        left_list = $('.card-container .left').children();
        top_list.each(function(i){
            $(this).on('click', function(){
                let top_list_active = $(this).index();
                left_list.each(function(i){
                    if ($(this).index()==top_list_active){                        
                        $(this).toggleClass('active').siblings().removeClass('active')
                    }
                })
                $(this).addClass('active').siblings().removeClass('active');
            })
        })
        }
    
      sub_menus();

    });