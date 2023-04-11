<?php
include_once "./pages/produit.inc.php"
?>

<section>
    <h3>
        <?php print $produit["produit"] ?>
    </h3>
    
    <img src="<?php print $produit["image"] ?>">

    <p>
        Prix : 79.99€
    </p>
    <p>
        <?php print $produit["description"] ?>
    </p>
    <ul>
    <?php foreach (couleurs as $key => $value) {
        //condition
        $key !== "couleurs" ? print "<li>"." ".$value."</li>":
        print '<li>'.' <a href="mailto: '.$value.'">'.$value.'</a></li>';
    }?>
        <!-- <li>rouge</li>
        <li>bleu</li>
        <li>vert</li>
        <li>jaune</li> -->
    </ul>
    <p>
        En stock
        <span class="material-symbols-outlined" aria-hidden="true">
            shopping_cart
        </span>
    </p>
</section>