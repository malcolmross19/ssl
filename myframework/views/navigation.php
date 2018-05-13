<header>

    <?

    foreach ($data as $link){
        $strLink = str_replace(".","",$link);
        echo "<a href='$strLink'>".$link."</a>";
    }

    ?>

</header>

