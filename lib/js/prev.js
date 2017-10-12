// Регистрация обработчика события load для HTML-страницы
window.addEventListener("load", loadScript, false);
	// Функция запускается после загрузки HTML-страницы
	function loadScript() {
	    // Ссылка на элемент img
	    var preview_img = document.getElementById("preview-img");
	            
	    // Получение ссылки на элемент input и
	    // регистрация обработчика события change для него 
	    var input_image = document.getElementById("input-image");
	    input_image.addEventListener("change", readFile, false);
	            
	    // Отмена действий по умолчанию для события change:
	    // предупреждает всплытие события к элементу form
	    // и  перезагрузку страницы
	    input_image.addEventListener("change", function (event) { event.preventDefault(); });
	            
	    // Обработчик события change элемента input
	    function readFile() {
	        // Вызов rонструктора FileReader() для работы с двоичными объектами
	        var reader = new FileReader();
	                
	        // Чтение содержимого URL
	        // из двоичного представления загружаемого изображения
	        reader.readAsDataURL(this.files[0]);
	                
	        // Передача значения result аттрибуту src элемента img,
	        // которое вернуло свойство readAsDataURL объекта FileReader
	        // после окончания загрузки последнего
	        reader.addEventListener("load", function (event) { preview_img.src = event.target.result; }, false);
	                
	        // Отмена действий по умолчанию для события load:
	        // предупреждает всплытие события к элементу form
	        // и  перезагрузку страницы   
	    	reader.addEventListener("load",  function (event) { event.preventDefault(); });   
		}
	}
	// Подгрузка в предпросмотр значений из формы
	function prev()
	{
		var name = document.getElementById("name").value;
		document.getElementById('prev-name').innerHTML = name;

		var mail = document.getElementById("mail").value;
		document.getElementById('prev-mail').innerHTML = mail;

		var task = document.getElementById("task").value;
		document.getElementById('prev-task').innerHTML = task;
	}