// slide toggle "index footer"
$(document).ready(function(){
    $(".footer_btn_toggle").click(function(){
        $(".footer_content_main").slideToggle();
        $(".footer_copyrightend").slideToggle();
    });
});


// slide fullpage library
new fullpage('#fullpage', {
    
    //options here
    autoScrolling:true,
    scrollHorizontally: true,
    // sectionsColor: ['#00FA00', '#FF0800', '#FF01E5', '#E8F000'], chỉnh màu của các trang
    navigation: true, // hiển thị thanh chấm 
});