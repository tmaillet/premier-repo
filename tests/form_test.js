import { Selector } from 'testcafe';

fixture `Test de conversion en Majuscules`
    .page `http://localhost:8080/index.html`;

test('L utilisateur saisit son nom et il s affiche en majuscules', async t => {
    await t
        .typeText('#nom-input', 'thomas')
        .click('#btn-enregistrer')
        // On vérifie que l'élément avec l'ID 'resultat' contient bien 'THOMAS'
        .expect(Selector('#resultat').innerText).eql('THOMAS');
});
