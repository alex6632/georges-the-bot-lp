/**
 * Agence'O - _windowFocus
 * @author Guillaume Bouillon (Agence'O)
 * @created 06/06/2017
 * @requires jQuery
 */

(function ($) {

  $(function () {

    var fun = false;
    if (fun) {
      var origTitle = $('title').text();
      document.addEventListener("visibilitychange", function () {
        var titleTag = $("title");
        if (document.hidden) {
          titleTag.text("Reviens Léon j'ai les mêmes à la maison.");
        } else {
          titleTag.text(origTitle);
        }
      });
    }
  });

})(jQuery);
