<?php
\$errors = 0;
// Dossiers obligatoires
foreach (['site/img', 'site/css', 'site/js', 'src'] as \$dir) {
    if (!is_dir(\$dir)) { echo "Manquant: \$dir\n"; \$errors++; }
}
// Extensions autorisées
function check(\$d, \$exts) {
    \$e = 0;
    foreach (glob("\$d/*") as \$f) {
        if (is_file(\$f) && !in_array(pathinfo(\$f, PATHINFO_EXTENSION), \$exts)) {
            echo "Interdit: \$f\n"; \$e++;
        }
    }
    return \$e;
}
\$errors += check('site', ['html', 'php']);
\$errors += check('site/img', ['png', 'jpg']);
\$errors += check('site/css', ['css']);
\$errors += check('site/js', ['js']);

exit(\$errors > 0 ? 1 : 0);