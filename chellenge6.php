<html>
<head>
    <style>
       body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table{
            display:flex;
            justify-content: center;
            align-items: center;
            border: none;
        }
        th{
            background: white;
        }
        tr:nth-child(even) {
            background-color:rgb(216, 216, 216);
        }
        tr:nth-child(odd) {
            background-color:rgb(255, 255, 255);
        }
        th, td {
            padding: 10px;
        }
        tr{
            text-align: center;
            align-items: center;
            background: white;
        }
        td, a{
            text-decoration: none;
            color: black;
            font-size: 20px;
        }
        a:hover{
            text-decoration: underline;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>JUMLAH KAKI</th>
            <th>Cari di Google</th>
        </tr>
        <?php
            $data = array('ayam'=>'2', 'angsa'=>'2', 'bebek'=>'2', 'domba'=>'4', 'kalkun' =>'2', 'kambing'=>'4', 'kelinci'=>'4', 'kerbau'=>'4', 'kuda'=>'4', 'sapi'=>'4');
            $i = 1;
            ksort($data);
            foreach($data as $x => $y) {
        ?>
            <tr>
            <td><?php echo $i ?>.</td>
            <td><?php echo $x ?></td>
            <td><img src="img/<?php echo $x ?>.jpg" alt="gambar <?php echo $x ?>"> </td>
            <td><?php echo $y ?></td>
            <td><a href="https://www.bing.com/images/search?q=<?php echo $x ?>&form=HDRSC4&first=1">Cari</a></td>
        </tr>
       
        <?php
        $i++;
        }
        ?>
        
        // Lengkapi disini baris untuk masing masing hewan (Ayam, angsa, bebek, domba, kalkun, kambing, kelinci, kerbau, kuda, dan sapi )
       
    </table>
</body>
</html>
