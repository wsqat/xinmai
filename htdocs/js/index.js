$(document).ready(function (){

    //预加载图片
    $.preloadImages = function(){
        for(var i = 0; i<arguments.length; i++)
        $("<img>").attr("src", arguments[i]);
    }
    //3秒后加载所有图片
    $(document).delay(3000).queue(function () {
        $.preloadImages("images/banner2.png","images/banner3.png","images/banner2.png","images/banner1.png");
    });

    // $(".banner").hover(function(){
    //                 $(this).find(".prev_pic,.next_pic").fadeTo("show",0.2);
    //             },function(){
    //                 $(this).find(".prev_pic,.next_pic").hide();
    // })

    // $(".prev_pic,.next_pic").hover(function(){
    //     $(this).fadeTo("show",0.5);
    // },function(){
    //     $(this).fadeTo("show",0.2);
    // })
    // $(".banner").slide({ 
    //     titCell:".num ul" , 
    //     mainCell:".banner_pic" , 
    //     effect:"left",
    //     prevCell:".prev_pic",
    //     nextCell:".next_pic",
    //     autoPlay:true, 
    //     interTime:5000, 
    //     delayTime:500,
    //     autoPage:true 
    // });

    
    //首页下拉
    //<找到row-left中跟所点击的类名相同的class予以显示，点击click可更换为鼠标移动mouseover>
        $('.row-header-2 li a').hover(function(){
                $('.row-header-2 li div').hide();
                $('.row-header-2 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-2 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-2 li div').hide();

                });
        },function(){
            $('.row-header-2 li div').hide();
        });    

        $('.row-header-3 li a').hover(function(){
                $('.row-header-3 li div').hide();
                $('.row-header-3 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-3 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-3 li div').hide();

                });
        },function(){
            $('.row-header-3 li div').hide();
        });    

        $('.row-header-4 li a').hover(function(){
                $('.row-header-4 li div').hide();
                $('.row-header-4 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-4 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-4 li div').hide();

                });
        },function(){
            $('.row-header-4 li div').hide();
        });    

        $('.row-header-5 li a').hover(function(){
                $('.row-header-5 li div').hide();
                $('.row-header-5 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-5 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-5 li div').hide();

                });
        },function(){
            $('.row-header-5 li div').hide();
        });    

        $('.row-header-6 li a').hover(function(){
                $('.row-header-6 li div').hide();
                $('.row-header-6 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-6 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-6 li div').hide();

                });
        },function(){
            $('.row-header-6 li div').hide();
        });    


        $('.row-header-7 li a').hover(function(){
                $('.row-header-7 li div').hide();
                $('.row-header-7 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header-7 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header-7 li div').hide();

                });
        },function(){
            $('.row-header-7 li div').hide();
        });    




        $('.row-header2-2 li a').hover(function(){
                $('.row-header2-2 li div').hide();
                $('.row-header2-2 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-2 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-2 li div').hide();

                });
        },function(){
            $('.row-header2-2 li div').hide();
        });    

        $('.row-header2-3 li a').hover(function(){
                $('.row-header2-3 li div').hide();
                $('.row-header2-3 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-3 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-3 li div').hide();

                });
        },function(){
            $('.row-header2-3 li div').hide();
        });    

        $('.row-header2-4 li a').hover(function(){
                $('.row-header2-4 li div').hide();
                $('.row-header2-4 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-4 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-4 li div').hide();

                });
        },function(){
            $('.row-header2-4 li div').hide();
        });    


        $('.row-header2-5 li a').hover(function(){
                $('.row-header2-5 li div').hide();
                $('.row-header2-5 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-5 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-5 li div').hide();

                });
        },function(){
            $('.row-header2-5 li div').hide();
        });    

        $('.row-header2-6 li a').hover(function(){
                $('.row-header2-6 li div').hide();
                $('.row-header2-6 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-6 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-6 li div').hide();
                });
        },function(){
            $('.row-header2-6 li div').hide();
        });    


        $('.row-header2-7 li a').hover(function(){
                $('.row-header2-7 li div').hide();
                $('.row-header2-7 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header2-7 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header2-7 li div').hide();

                });
        },function(){
            $('.row-header2-7 li div').hide();
        });    


//////////////3

        $('.row-header3-2 li a').hover(function(){
                $('.row-header3-2 li div').hide();
                $('.row-header3-2 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-2 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-2 li div').hide();

                });
        },function(){
            $('.row-header3-2 li div').hide();
        });    

        $('.row-header3-3 li a').hover(function(){
                $('.row-header3-3 li div').hide();
                $('.row-header3-3 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-3 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-3 li div').hide();

                });
        },function(){
            $('.row-header3-3 li div').hide();
        });    

        $('.row-header3-4 li a').hover(function(){
                $('.row-header3-4 li div').hide();
                $('.row-header3-4 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-4 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-4 li div').hide();

                });
        },function(){
            $('.row-header3-4 li div').hide();
        });    


        $('.row-header3-5 li a').hover(function(){
                $('.row-header3-5 li div').hide();
                $('.row-header3-5 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-5 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-5 li div').hide();

                });
        },function(){
            $('.row-header3-5 li div').hide();
        });    

        $('.row-header3-6 li a').hover(function(){
                $('.row-header3-6 li div').hide();
                $('.row-header3-6 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-6 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-6 li div').hide();
                });
        },function(){
            $('.row-header3-6 li div').hide();
        });    


        $('.row-header3-7 li a').hover(function(){
                $('.row-header3-7 li div').hide();
                $('.row-header3-7 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header3-7 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-7 li div').hide();

                });
        },function(){
            $('.row-header3-7 li div').hide();
        });    





//////////////4

        $('.row-header4-2 li a').hover(function(){
                $('.row-header4-2 li div').hide();
                $('.row-header4-2 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-2 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header4-2 li div').hide();

                });
        },function(){
            $('.row-header4-2 li div').hide();
        });    

        $('.row-header4-3 li a').hover(function(){
                $('.row-header4-3 li div').hide();
                $('.row-header4-3 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-3 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-3 li div').hide();

                });
        },function(){
            $('.row-header4-3 li div').hide();
        });    
        

        $('.row-header4-4 li a').hover(function(){
                $('.row-header4-4 li div').hide();
                $('.row-header4-4 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-4 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header4-4 li div').hide();

                });
        },function(){
            $('.row-header4-4 li div').hide();
        });    


        $('.row-header4-5 li a').hover(function(){
                $('.row-header4-5 li div').hide();
                $('.row-header4-5 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-5 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header4-5 li div').hide();

                });
        },function(){
            $('.row-header4-5 li div').hide();
        });    

        $('.row-header4-6 li a').hover(function(){
                $('.row-header4-6 li div').hide();
                $('.row-header4-6 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-6 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header4-6 li div').hide();
                });
        },function(){
            $('.row-header4-6 li div').hide();
        });    


        $('.row-header4-7 li a').hover(function(){
                $('.row-header4-7 li div').hide();
                $('.row-header4-7 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header4-7 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header4-7 li div').hide();

                });
        },function(){
            $('.row-header4-7 li div').hide();
        });    





///5


        $('.row-header5-2 li a').hover(function(){
                $('.row-header5-2 li div').hide();
                $('.row-header5-2 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-2 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header5-2 li div').hide();

                });
        },function(){
            $('.row-header5-2 li div').hide();
        });    

        
        $('.row-header5-3 li a').hover(function(){
                $('.row-header5-3 li div').hide();
                $('.row-header5-3 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-3 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header3-3 li div').hide();

                });
        },function(){
            $('.row-header5-3 li div').hide();
        });    


        $('.row-header5-4 li a').hover(function(){
                $('.row-header5-4 li div').hide();
                $('.row-header5-4 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-4 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header5-4 li div').hide();

                });
        },function(){
            $('.row-header5-4 li div').hide();
        });   


        $('.row-header5-5 li a').hover(function(){
                $('.row-header5-5 li div').hide();
                $('.row-header5-5 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-5 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header5-5 li div').hide();

                });
        },function(){
            $('.row-header5-5 li div').hide();
        });    

        $('.row-header5-6 li a').hover(function(){
                $('.row-header5-6 li div').hide();
                $('.row-header5-6 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-6 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header5-6 li div').hide();
                });
        },function(){
            $('.row-header5-6 li div').hide();
        });    


        $('.row-header5-7 li a').hover(function(){
                $('.row-header5-7 li div').hide();
                $('.row-header5-7 li div').eq($(this).index()).show();
                $(this).show();
                $('.row-header5-7 li div').hover(function(){
                $(this).show();
                },function(){
                    $('.row-header5-7 li div').hide();

                });
        },function(){
            $('.row-header5-7 li div').hide();
        });    






    // $('.row-header-3 li').hover(function(){
    //             $('.row-header-3 div').hide();
    //             $('.row-header-3 div').eq($(this).index()).show();
    //             $(this).show();
    //             $('.row-header-3 div').hover(function(){
    //                 // $('.row-left div li').show();
    //                 $(this).show();
    //                 // $(this).find('ul').show();
    //                 // $(this).find('l').show();
    //                 // $(this).animate({"left":-5},200);
    //             },function(){
    //                 $('.row-header-3 div').hide();

    //             });
    //     },function(){
    //         $('.row-header-3 div').hide();
    //     });

    // $('.row-header-4 li').hover(function(){
    //             $('.row-header-4 div').hide();
    //             $('.row-header-4 div').eq($(this).index()).show();
    //             $(this).show();
    //             $('.row-header-4 div').hover(function(){
    //                 // $('.row-left div li').show();
    //                 $(this).show();
    //                 // $(this).find('ul').show();
    //                 // $(this).find('l').show();
    //                 // $(this).animate({"left":-5},200);
    //             },function(){
    //                 $('.row-header-4 div').hide();

    //             });
    //     },function(){
    //         $('.row-header-4 div').hide();
    //     });

    //   $('.row-header-5 li').hover(function(){
    //                   $('.row-header-5 div').hide();
    //                   $('.row-header-5 div').eq($(this).index()).show();
    //                   $(this).show();
    //                   $('.row-header-5 div').hover(function(){
    //                       // $('.row-left div li').show();
    //                       $(this).show();
    //                       // $(this).find('ul').show();
    //                       // $(this).find('l').show();
    //                       // $(this).animate({"left":-5},200);
    //                   },function(){
    //                       $('.row-header-5 div').hide();

    //                   });
    //           },function(){
    //               $('.row-header-5 div').hide();
    //           });

    //   $('.row-header-6 li').hover(function(){
    //             $('.row-header-6 div').hide();
    //             $('.row-header-6 div').eq($(this).index()).show();
    //             $(this).show();
    //             $('.row-header-6 div').hover(function(){
    //                 // $('.row-left div li').show();
    //                 $(this).show();
    //                 // $(this).find('ul').show();
    //                 // $(this).find('l').show();
    //                 // $(this).animate({"left":-5},200);
    //             },function(){
    //                 $('.row-header-6 div').hide();

    //             });
    //     },function(){
    //         $('.row-header-6 div').hide();
    //     });

    //   $('.row-header-7 li').hover(function(){
    //             $('.row-header-7 div').hide();
    //             $('.row-header-7 div').eq($(this).index()).show();
    //             $(this).show();
    //             $('.row-header-7 div').hover(function(){
    //                 // $('.row-left div li').show();
    //                 $(this).show();
    //                 // $(this).find('ul').show();
    //                 // $(this).find('l').show();
    //                 // $(this).animate({"left":-5},200);
    //             },function(){
    //                 $('.row-header-7 div').hide();

    //             });
    //     },function(){
    //         $('.row-header-7 div').hide();
    //     });


});



// function menuFix() {
//  var sfEls = document.getElementById("nav").getElementsByTagName("li");
//  for (var i=0; i<sfEls.length; i++) {
//   sfEls[i].onmouseover=function() {
//   this.className+=(this.className.length>0? " ": "") + "sfhover";
//   }
//   sfEls[i].onMouseDown=function() {
//   this.className+=(this.className.length>0? " ": "") + "sfhover";
//   }
//   sfEls[i].onMouseUp=function() {
//   this.className+=(this.className.length>0? " ": "") + "sfhover";
//   }
//   sfEls[i].onmouseout=function() {
//   this.className=this.className.replace(new RegExp("( ?|^)sfhover\\b"),

// "");
//   }
//  }
// }
// window.onload=menuFix;
