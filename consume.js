const container = document.querySelector(".container");

getData();
async function getData() {
    const res = await fetch('https://randomuser.me/api?results=50');
    const { results } = await res.json();

    for (user of results) {
        if (user.gender == "female") {
            const div = document.createElement("div");
            div.innerHTML = `
            <p>${user.name.first} ${user.name.last}</p>
            <img src=${user.picture.large} alt="${user.name.first}">
            `;
            container.appendChild(div);
        }
    }
}