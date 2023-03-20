/**
 * @const navList = les éléments de la barre de navigation.
 */
let navList = [
  "Présentation",
  "Mes compétences",
  "Mes projets",
  "Où me trouver",
];

/**
 *
 * @param {navList} table
 * @returns Tableau de string permettant la concaténation de la barre de navigation dans le DOM.
 */

function createNavList(table) {
  let selectNav = document.querySelector(".navElem");
  selectNav = selectNav.innerHTML += `
    <li><a href="${table[0]}"> ${table[0]} </a></li>
    <li><a href="${table[1]}"> ${table[1]} </a></li>
    <li><a href="${table[2]}"> ${table[2]} </a></li>
    <li><a href="${table[3]}"> ${table[3]} </a></li>`;
  return selectNav;
}

createNavList(navList);
