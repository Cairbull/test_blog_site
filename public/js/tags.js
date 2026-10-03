document.addEventListener("DOMContentLoaded", () => {
  /* Проверяем URL и подключаем метод, если страница связана с материалом */
  function checkURL() {
    const url = window.location.href;
    const regexArticle = /article/g;
    const foundArticle = url.match(regexArticle);
    if (foundArticle) {
      changeTags();
    }
  }

  /* Убирает у хэштега [] и заменяет на # */
  function changeTags() {
    const field_tags = document.querySelector(".article_content__tag");
    const value_tags = field_tags.innerText;
   const hashtags = value_tags
    .replace(/[\[\]"]/g, '')
    .split(',')
    .map(tag => `#${tag.trim()}`)
    .join(' ');
    field_tags.innerText = hashtags;
  }

  if (window.location.pathname != "/") {
    checkURL();
  }
});
