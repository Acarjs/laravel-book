import "./bootstrap";

const url =
    "https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php";

const books = document.getElementById("loadBooks");

const loadData = async () => {
    const response = await fetch(url);
    const data = await response.json();

    books.innerHTML = data.map((book) => {
        return `
    <div class="card">
    <h2>${book.title}</h2>
        <p>Author: ${book.authors[0].name}</p>
        DESCRIPTION: ${book.description}
        <p>Publication Date: ${book.publication_date}</p>
        <p>Pages: ${book.pages}</p>
        <p>Price: $${book.price}</p>
        <img src=${book.image} alt="">
      </div>
    `;
    });
};

loadData();
