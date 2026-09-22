<HTML>

<HEAD>
    <TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE>
</HEAD>

<BODY>
    <?php
    $ip1 = "192.18.16.204";
    $ip2 = "10.33.161.2";

    $ip1bl1 = substr($ip1, 0, 3);
    $ip1bl2 = substr($ip1, 4, 2);
    $ip1bl3 = substr($ip1, 7, 2);
    $ip1bl4 = substr($ip1, 10, 3);

    $ip2bl1 = substr($ip2, 0, 2);
    $ip2bl2 = substr($ip2, 3, 2);
    $ip2bl3 = substr($ip2, 6, 3);
    $ip2bl4 = substr($ip2, 10);

    printf("IP $ip1 en binario es "
        . str_pad(decbin((int) $ip1bl1), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip1bl2), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip1bl3), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip1bl4), 8, 0, STR_PAD_LEFT) . "<br>");

    printf("IP $ip2 en binario es "
        . str_pad(decbin((int) $ip2bl1), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip2bl2), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip2bl3), 8, 0, STR_PAD_LEFT) . ", "
        . str_pad(decbin((int) $ip2bl4), 8, 0, STR_PAD_LEFT));
    ?>
</BODY>

</HTML>