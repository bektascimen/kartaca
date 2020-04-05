(function ($) {
    "use strict"

    // NAVIGATION
    var responsiveNav = $('#responsive-nav'),
        catToggle = $('#responsive-nav .category-nav .category-header'),
        catList = $('#responsive-nav .category-nav .category-list'),
        menuToggle = $('#responsive-nav .menu-nav .menu-header'),
        menuList = $('#responsive-nav .menu-nav .menu-list');

    catToggle.on('click', function () {
        menuList.removeClass('open');
        catList.toggleClass('open');
    });

    menuToggle.on('click', function () {
        catList.removeClass('open');
        menuList.toggleClass('open');
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(responsiveNav).length) {
            if (responsiveNav.hasClass('open')) {
                responsiveNav.removeClass('open');
                $('#navigation').removeClass('shadow');
            } else {
                if ($(event.target).closest('.nav-toggle > button').length) {
                    if (!menuList.hasClass('open') && !catList.hasClass('open')) {
                        menuList.addClass('open');
                    }
                    $('#navigation').addClass('shadow');
                    responsiveNav.addClass('open');
                }
            }
        }
    });

    // HOME SLICK
    $('#home-slick').slick({
        autoplay: true,
        infinite: true,
        speed: 300,
        arrows: true,
    });

    // PRODUCTS SLICK
    $('#product-slick-1').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        infinite: true,
        speed: 300,
        dots: true,
        arrows: false,
        appendDots: '.product-slick-dots-1',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
            {
                breakpoint: 480,
                settings: {
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    $('#product-slick-2').slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        autoplay: true,
        infinite: true,
        speed: 300,
        dots: true,
        arrows: false,
        appendDots: '.product-slick-dots-2',
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
            {
                breakpoint: 480,
                settings: {
                    dots: false,
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // PRODUCT DETAILS SLICK
    $('#product-main-view').slick({
        infinite: true,
        speed: 300,
        dots: false,
        arrows: true,
        fade: true,
        asNavFor: '#product-view',
    });

    $('#product-view').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        asNavFor: '#product-main-view',
    });

    // PRODUCT ZOOM
    $('#product-main-view .product-view').zoom();

    // PRICE SLIDER
    var slider = document.getElementById('price-slider');
    if (slider) {
        noUiSlider.create(slider, {
            start: [1, 999],
            connect: true,
            tooltips: [true, true],
            format: {
                to: function (value) {
                    return value.toFixed(2) + '$';
                },
                from: function (value) {
                    return value
                }
            },
            range: {
                'min': 1,
                'max': 999
            }
        });
    }
})(jQuery);


jQuery.fn.extend({
    rating: function(options){
        if(typeof(options)=='undefined') options={};
        var ratings=[];
        objs=this;
        if(objs.length){
            for(var i=0;i<objs.length;i++){
                ratings.push(new simpleRating(options,objs[i]));
            }
        }
    },
});

class simpleRating{
    constructor(options,obj) {
        this.obj=obj;
        this.options=options;
        this.rating=0;
        this.init();
    }

    init(){
        var html='<div class="simple-rating star-rating">';
        for(var i=0;i<5;i++){html+='<i class="fa fa-star-o" data-rating="'+(i+1)+'"></i>';}
        html+='</div>';

        $(this.obj)
            .attr('type','hidden')
            .after(html);

        $(this.obj).next().children().click({classObj:this},function(e){
            e.data.classObj.rate(this);
        });

        $(this.obj).next().children().mouseenter({classObj:this},function(e){
            e.data.classObj.setstars($(this).data('rating'));
        });

        $(this.obj).next().children().mouseleave({classObj:this},function(e){
            e.data.classObj.setstars(e.data.classObj.rating);
        });
    }

    rate(obj){
        var rating=$(obj).data('rating');
        $(obj).parent().prev().val(rating);
        this.rating=rating;
        this.refresh();
    }

    refresh(){
        this.setstars(this.rating);
    }

    setstars(rating){
        var stars=$(this.obj).next().children();
        for(var i=0;i<5;i++){
            var starObj=$(this.obj).next().children()[i];
            if(i<rating){
                $(starObj).removeClass('fa-star-o');
                $(starObj).addClass('fa-star');
            }else{
                $(starObj).addClass('fa-star-o');
                $(starObj).removeClass('fa-star');
            }
        }
    }
}
