function loadpage(a) {
   $.ajax({
      url: a,     // какой файл нужно загрузить
      cache: false,
      success: function(html){
      $("#content").html(html);  // область где разместить файл. id='content'
   }
  });
}

function contr_avtr(result_form, ajax_form, url) {
$.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
          $('#ajax_form').css('display','none');// Cкрыть форму
         $('#result_form').html(response);
      },
      error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
      }
   });
}

function reset() {
   $('#ajax_form').css('display','none'); // Показать форму
   $('#result_form').html('');
}

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
          $('#ajax_form').css('display','none');// Cкрыть форму
         $('#result_form').html(response);
      },
      error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
      }
   });
}