document.addEventListener("DOMContentLoaded", () => {
  /* Проверяем URL и подключаем метод, если страница связана с категориями */
  function checkURL() {
    const url = window.location.href;
    const regex = /categories/g;
    const found = url.match(regex);
    if (found) {
      handlerSort();
    }
  }

  /* Обработчик событий параметров сортировки */
  async function handlerSort() {
    const categoryContainer = document.querySelector(
      ".category_content__container",
    );
    const sortList = document.querySelector(".articles_sort__select");
    const path = window.location.pathname;

    sortList.addEventListener("change", async (event) => {
      const value = event.currentTarget.value;
      const url = new URL(window.location.href);
      //Передаем параметры sort и значение в URL
      url.searchParams.set("sort", value);
      history.pushState({}, "", url);
      // Передаем ajax запрос контроллеру
      try {
        const response = await fetch(
          `${path}?sort=${encodeURIComponent(value)}`,
        );
        const result = await response.text();

        const parser = new DOMParser();
        const doc = parser.parseFromString(result, "text/html");
        const newContainer = doc.querySelector(".category_content__container");
        categoryContainer.innerHTML = newContainer.innerHTML;

        if (!response.ok) {
          throw new Error(`Ошибка сервера: ${response.status}`);
        }
      } catch (error) {
        console.error("Произошла ошибка:", error);
      }
    });
  }

  if (window.location.pathname != "/") {
    checkURL();
  }
});
