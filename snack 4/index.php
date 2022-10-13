<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores natus dicta laboriosam exercitationem repellendus omnis asperiores inventore, magni cumque dolorem corporis recusandae vero quaerat illo doloremque obcaecati earum id ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio assumenda eum recusandae exercitationem quas voluptates eligendi, quisquam dicta ab enim blanditiis placeat, eos debitis consequuntur praesentium ipsam culpa in asperiores? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem maxime esse fuga eos, ipsam illum doloremque deserunt natus quia quasi excepturi labore ut itaque veniam illo laudantium. Voluptates, ipsam repellendus?";

$testoParagrafi = explode(".", $testo);

echo $testo . "<br>";

foreach ($testoParagrafi as $paragrafo) {
    echo  "<br>" . $paragrafo . "<br>";
}

?>