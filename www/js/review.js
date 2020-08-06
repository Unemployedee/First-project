let comments = [];
loadComments();
document.getElementById("comment-add").onclick = function () {
  event.preventDefault();
  let commentName = document.getElementById("comment-name");
  let commentBody = document.getElementById("comment-body");

  if (commentName.value == "") commentName.value = "Аноним";
  if (commentBody.value.length < 30) {
    alert("Отзыв не отправлен. \n Минимальное кол-во символов в отзыве — 30");
    return;
  }

  let comment = {
    name: commentName.value,
    body: commentBody.value,
    time: Math.floor(Date.now() / 1000),
  };
  commentName.value = "";
  commentBody.value = "";
  comments.push(comment);

  saveComments();
  showComments();
};

function saveComments() {
  localStorage.setItem("comments", JSON.stringify(comments));
}

function loadComments() {
  if (localStorage.getItem("comments"))
    comments = JSON.parse(localStorage.getItem("comments"));
  showComments();
}

function showComments() {
  let commentField = document.getElementById("comment-field");
  let out = "";
  comments.forEach(function (item) {
    out += `<div class = "comment"><p class = "name">${item.name}</p>`;
    out += `<p class = "date">${timeConverter(item.time)}</p>`;

    out += `<p class = "comment-body">${item.body}</p></div>`;
  });
  commentField.innerHTML = out;
}

function timeConverter(UNIX_timestamp) {
  let a = new Date(UNIX_timestamp * 1000);
  let months = [
    "Ян",
    "Фев",
    "Март",
    "Апр",
    "Май",
    "Июнь",
    "Июль",
    "Авг",
    "Сен",
    "Окт",
    "Нояб",
    "Дек",
  ];
  let year = a.getFullYear();
  let month = months[a.getMonth()];
  let date = a.getDate();
  let hour = a.getHours();
  let min = a.getMinutes();
  let sec = a.getSeconds();
  let time =
    date + " " + month + " " + year + " " + hour + ":" + min + ":" + sec;
  return time;
}
