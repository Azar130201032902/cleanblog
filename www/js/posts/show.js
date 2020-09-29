/*
  ./www/js/posts/show.php;
 */

$(function() {

  $('.editable').dblclick(function() {

    let contenu = $(this).html();
    let code;

    switch ($(this).attr('data-type')) {
      case 'text':
        code = '<input type="text" class="input"/>';
        $(this).html(code).find('input').val(contenu);
      break;

      case 'textarea':
        code = '<textarea class="input"></textarea>';
      break;
    }

    $(this).html(code).find('.input').val(contenu);
  });

  $('main').on('blur','.input',function() {

    let that = $(this);

    $.ajax({
      url: '?ajax=updateField',
      data: {
        id: $(this).closest('.post-details').attr('data-id'),
        field: $(this).closest('.editable').attr('data-field'),
        value: $(this).val()
      },
      method: 'get',
      success: function(reponsePHP) {
        if(reponsePHP == 1) {
          that.closest('.editable').html($(that).val());

          notify("Modification sauvegardée !", "success");

        }
        else {

          notify("Problème de sauvegarde !", "danger");

        }
      },
      error: function() {
        alert("Problème durant la transaction ajax !");
      }
    });

  });
});
