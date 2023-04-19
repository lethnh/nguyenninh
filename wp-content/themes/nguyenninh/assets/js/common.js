$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
      $("#header-main").addClass("shadow");
    } else {
      $("#header-main").removeClass("shadow");
    }
  });
  $("#btn-hamburger").on("click", function (e) {
    $(".menu-aside-page").toggleClass("show");
    $(this).toggleClass("is-active");
    $("body").toggleClass("overflow-hidden");
  });

  $(".menu-aside .menu-item-has-children").append(
    "<div class='transfer-menu'></div>"
  );

  $(".transfer-menu").on("click", function () {
    var currentTarget = $(this).siblings(".dropdown-menu").is(":hidden");
    if (!currentTarget) {
      $(this).siblings(".dropdown-menu").slideUp("slow");
      $(this).removeClass('is-open');
    } else {
      $(".transfer-menu").siblings(".dropdown-menu").slideUp("slow");
      $(this).siblings(".dropdown-menu").slideDown("slow");
      $(this).addClass('is-open');
    }
  });

  reportWindowSize();

  var index_class_active = $('.segmented-control .page_item').index($('.segmented-control .page_item.current_page_item'));
  $($('.segmented-control .page_item')[index_class_active - 1]).addClass('no_after');

  $('.share-fb-or-twitter').click(function (e) {
    e.preventDefault();
    window.open(jQuery(this).data('url'), 'fbShareWindow', 'height=450, width=550, top=' + (jQuery(window).height() / 2 - 275) + ', left=' + (jQuery(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0,         directories=0, scrollbars=0');
    return false;
  });

  // Scroll to products section
  $(".btn-scroll").on("click", function () {
    $("html, body").animate(
      {
        scrollTop: $(".banner-home").height(),
      },
      500
    );
  });

  // $(".our-passion .our-passion-item-info").matchHeight({
  //   byRow: true,
  //   property: "height",
  //   target: null,
  //   remove: false,
  // });

  // $(".card-new-body, .card-info").matchHeight({
  //   byRow: true,
  //   property: "height",
  //   target: null,
  //   remove: false,
  // });

  $(".post_item .post_excerpt").matchHeight({
    byRow: false,
    property: "height",
    target: null,
    remove: false,
  });

  $(".post_item .post_title").matchHeight({
    byRow: false,
    property: "height",
    target: null,
    remove: false,
  });

  $(".equal-height").matchHeight({
    byRow: false,
    property: "height",
    target: null,
    remove: false,
  });

  // $(".interest-cols .interest-head").matchHeight({
  //   byRow: true,
  //   property: "height",
  //   target: null,
  //   remove: false,
  // });

  // $(".interest-cols .interest-body").matchHeight({
  //   byRow: true,
  //   property: "height",
  //   target: null,
  //   remove: false,
  // });

  // $(".started-now-block .card-started-now").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  // $(".media-item").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  // $(".reason-choose-item").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  // $(".member-body").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  // $(".post-item-right-title").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  // $(".testimonial-item").matchHeight({
  //   byRow: false,
  //   property: "min-height",
  //   target: null,
  //   remove: false,
  // });

  $('.study-abroad-benefit .different-iee-block .card-info').on('click', function () {
    $('.study-abroad-benefit .different-iee-block .card-info').removeClass('active');
    $(this).addClass('active');
    $('.study-abroad-benefit .iee-block-noti').addClass('d-none');
    $($('.study-abroad-benefit .iee-block-noti')[$(this).attr('id') - 1]).removeClass('d-none');
  })

  $('.iee-layout-column .iee-layout-list .card-info').on('click', function () {
    $('.iee-layout-column .iee-layout-list .card-info').removeClass('active');
    $(this).addClass('active');
    $('.course-overview .iee-block-noti').addClass('d-none');
    $($('.course-overview .iee-block-noti')[$(this).attr('id') - 1]).removeClass('d-none');
  })

  $('.card-started-now.card-between').css('min-height', parseInt($('.card-started-now.card-first').css('min-height')) +
    50);

  $('.steps-study-abroad .step-study').on('click', function () {
    if ($(this).hasClass('is-open')) {
      $(this).removeClass('is-open')
      $(this).find('.step-study-content').slideUp("slow");
    } else {
      $(this).addClass('is-open');
      $(this).find('.step-study-content').slideDown("slow");
    }
  })

  $('.question-item').on('click', function () {
    if ($(this).hasClass('is-open')) {
      $(this).removeClass('is-open')
      $(this).find('.answer-content').slideUp("slow");
    } else {
      $(this).addClass('is-open');
      $(this).find('.answer-content').slideDown("slow");
    }
  })

  $('.btn-order').on('click', function () {
    $("#modal-send-info-order").modal("show");
  })

  $('.minus').click(function () {
    var $input = $(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  $('.plus').click(function () {
    var $input = $(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });

});

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

function reportWindowSize() {
  if ($("body").hasClass('admin-bar')) {
    $('#header-main').css('margin-top', $("#wpadminbar").height());
    $('aside .menu-aside').css('top', $("#wpadminbar").height() + $("#header-main .navbar-custom").height());
  }
}

window.onresize = reportWindowSize;