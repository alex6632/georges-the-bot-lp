/**
 * App
 * @author Alexandre Simonin
 * @created 27/10/2017
 */

(function ($) {
  var app = {
    init: function () {
      app.copyright();
    },

    trigger: function (e, el) {
      e.stopPropagation();
      el.toggleClass('is-open');
      $('.overlay').toggleClass('show');
    },

    copyright: function () {
      console.info("%c Georges %c http://alexandre-simonin.fr/", ' font-weight: bold; color: white; background:' + ' black;', 'font-weight: normal; font-style: italic; color: gray;');
    }
  };

  /**
   * Init ----------
   */
  app.init();
  /**
   * Triggers ----------
   */
  var arr_triggers = [
    '.main-navigation__trigger'
  ];
  $(document).on('click', arr_triggers.toString(), function (e) {
    e.preventDefault();
    app.trigger(e, $(this).parent());
  });



  $(document).ready(function () {



    $('#fullpage').fullpage({
      anchors: ['presentation', 'about', 'demo', 'team', 'copyright'],
      responsiveWidth: 1024,
      afterLoad: function(anchor, index) {
        if (index == 4 || index == 5) {
          $('.site-logo__link img, .main-navigation__link img').addClass('show');
          $('.header').addClass('bg');
          $('.main-navigation__link, .main-navigation__link--border, .main-navigation__link--bg').addClass('invert');
        } else {

          $('.site-logo__link img, .main-navigation__link img').removeClass('show');
          $('.header').removeClass('bg');
          $('.main-navigation__link, .main-navigation__link--border, .main-navigation__link--bg').removeClass('invert');
        }
      }
    });
  });

})(jQuery);
