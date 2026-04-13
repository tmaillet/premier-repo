import { Selector } from 'testcafe';

fixture `Test de conversion en Majuscules`
    .page `http://localhost:8080/index.php`;

test('L utilisateur saisit son nom et il s affiche en majuscules', async t => {
    await t
        .typeText('#nom-input', 'thomas')
        .click('#btn-enregistrer')
        .expect(Selector('#resultat').innerText).eql('THOMAS');
});
