//Массив из ссылок на изображения
var imageArray = [
  "../images/gallery/img1.jpg",
  "../images/gallery/img2.jpg",
  "../images/gallery/img3.jpg",
  "../images/gallery/img4.jpg",
];
window.number = "0";
//Привязка количества картинок к размеру массива
var imageCount = imageArray.length;
function image(num) {
  if (num == 1) {
    //Если это последняя картинка, то не увеличиваем счетчик number
    if (number < imageCount - 1) {
      number++;
      document.getElementById("images").src = imageArray[number];
    }
  } else {
    //Если это первая картинка, то не уменьшаем счетчик number
    if (number > 0) {
      number--;
      document.getElementById("images").src = imageArray[number];
    }
  }
}

//Выводим картинки
document.write('<img id="images" src="' + imageArray[0] + '">');
