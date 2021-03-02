document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll("[mytable='']").forEach(function(div) {
        var tableclass = div.getAttribute("tableclass");
        var theadclass = div.getAttribute("theadclass");
        var caption = div.getAttribute("caption");
        div.innerHTML = getTable(tableclass, theadclass, caption);
    });

    function getTable(tableclass = "", theadclass = "", caption = "") {
        var theadclassTmp = theadclass != null ? `class="${theadclass}"` : "";
        var thead = `
        <thead ${theadclassTmp}>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Age</th>
            </tr>
        </thead>`;
        var tbody = `
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Piette</td>
                <td>Johnny</td>
                <td>46</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Dupont</td>
                <td>Patrick</td>
                <td>35</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jacques</td>
                <td>Gabriel</td>
                <td>6</td>
            </tr>
        </tbody>`;
        var captiontmp = caption != null ? `<caption>${caption}</caption>` : "";
        var tableclasstmp = tableclass != null ? `class="${tableclass}"` : "";
        var table = `
            <table ${tableclasstmp} comment="J'ai été généré en Javascript. Si vous êtes curieux, voir le fichier js/tables.js">
            ${captiontmp}
            ${thead}
            ${tbody}
            </table>
        `;
        return table;
    }
});