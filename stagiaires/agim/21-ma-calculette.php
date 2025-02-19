<?php
function calculSimple($nbr, $operator, $nbr2)
{
    if ($operator === "+") {
        $somme = $nbr + $nbr2;
        return $somme;
    } else if ($operator === "-") {
        $somme = $nbr - $nbr2;
        return $somme;
    } else if ($operator === "/") {
        $somme = $nbr / $nbr2;
        return $somme;
    } else if ($operator === "*") {
        $somme = $nbr * $nbr2;
        return $somme;
    }
}
?>
<?php echo calculSimple(10, "+", 2); ?><br>
<?php echo calculSimple(10, "-", 2); ?><br>
<?php echo calculSimple(10, "*", 2); ?><br>
<?php echo calculSimple(10, "/", 2); ?>



