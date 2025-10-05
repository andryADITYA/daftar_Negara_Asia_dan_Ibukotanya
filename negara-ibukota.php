<!doctype>
<html>

<head>
    <title>Daftar Negara Asia dan Ibukota</title>
</head>

<body>
    <h2>Daftar Negara Asia dan Ibukotanya</h2>

    <?php
    $negaraAsia = [
        "Indonesia" => "Jakarta",
        "India" => "New Delhi",
        "Jepang" => "Tokyo",
        "Cina" => "Beijing",
        "Malaysia" => "Kuala Lumpur",
        "Filipina" => "Manila",
        "Korea Utara" => "Pyongyang",
        "Korea Selatan" => "Seoul",
        "Iran" => "Teheran",
        "Irak" => "Baghdad",
        "Vietnam" => "Hanoi",
        "Thailand" => "Bangkok",
    ];

    $no = 1;
    foreach ($negaraAsia as $negara => $ibukota) {
        echo "$no. $negara ibukotanya $ibukota<br>";
        $no++;
    }
    ?>
</body>

</html>