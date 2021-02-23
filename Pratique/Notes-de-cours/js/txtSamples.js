//L'informaticien est un fainéant. :) S'il peut éviter de retaper la même chose plusieurs fois, il le fera.
//Ici on va remplacer les classes loremipsum, blindcode et bootstrap par du html lorsque le dom sera chargé.
document.addEventListener("DOMContentLoaded", function() {
    blindcode = "<p>Comme vous le savez peut-être, le secteur du numérique est porteur d’emploi et l’avenir s’annonce de plus en plus digital.</p><p>Mais saviez-vous que toute une gamme de métiers du numérique est accessible aux personnes aveugles et malvoyantes ?</p><p>Grâce à quelques adaptations et outils spécifiques, les personnes déficientes visuelles peuvent devenir développeur·euse web, spécialiste data, helpdesk informatique, consultant·e en accessibilité, etc.</p><p>Ainsi, pour contribuer à l’inclusion de tous, Eqla propose en 2020, avec le soutien du Digital Belgium Skills Fund, de Bruxelles Formation et du Fonds Social Européen, une formation professionnelle innovante en Belgique nommée « BlindCode».</p> <p>Elle s’adresse aux jeunes et aux adultes intéressés par le numérique, et souhaitant s’orienter vers le métier de développeur.se web et mobile, ou se préparer à poursuivre des études supérieures en informatique.</p>";

    blindcodeImg = "<img class='img-fluid float-left' src='../Images/BlindCode.png' alt='Logo d''Eqla' />" + blindcode;

    loremipsum = "<span class='font-weight-bold'>Le Lorem Ipsum</span> est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.";

    bootstrap = "Bootstrap est une collection d'outils utiles à la création du design de sites et d'applications web. C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option. Wikipédia";

    replaceInnertHTML(".blindcode", blindcode);
    replaceInnertHTML(".blindcodeImg", blindcodeImg);
    replaceInnertHTML(".loremipsum", loremipsum);
    replaceInnertHTML(".bootstrap", bootstrap);

    /**
     * 
     * @param {string} target nom de l'element ou de la classe
     * @param {string} content valeur à mettre dans l'innerHTML
     */
    function replaceInnertHTML(target, innerHTML) {
        document.querySelectorAll(target).forEach(function(x) {
            x.innerHTML = innerHTML;
        });
    }
});