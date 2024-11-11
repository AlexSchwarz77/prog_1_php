const container = document.querySelector(".container");

getData();
// Asynchrone Funktionen werden verwendet, wenn die Anfrage und die Antwort zeitlich nicjt direkt erfolgen, sonderen eine differenz zwischen Frage und Antwort zu erwarten ist
async function getData() {
    // fetch() wird verwendet um auf Ressourcen aus einem Netzwerk zu zugreifen
    const res = await fetch('https://randomuser.me/api?results=50');
    const { results } = await res.json();

    for (user of results) {
        if (user.gender == "female") {
            // Hier wird ein HTML-Element erstellt
            const div = document.createElement("div");
            div.innerHTML = `
            <p>${user.name.first} ${user.name.last}</p>
            <img src=${user.picture.large} alt="${user.name.first}">
            `;
            // Hier wird dem HTML ein platz im Dokument zugewiesen
            // der container ist das Elternelement von div
            container.appendChild(div);
        }
    }
}