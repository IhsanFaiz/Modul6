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
        th{
            background: rgb(221, 221, 221);
        }
        th, td {
            padding: 10px;
        }
        tr{
            text-align: center;
            align-items: center;
            background: white;
        }
        tr:hover{
            background: rgb(227, 227, 227);
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
            <th>Cari di Google</th>
        </tr>
        <?php
            $data = array('ayam', 'angsa', 'bebek', 'domba', 'kalkun', 'kambing', 'kelinci', 'kerbau', 'kuda', 'sapi');

            $i = 1;
        foreach($data as $item) {
            ?>
            <tr>
            <td><?php echo $i ?>.</td>
            <td><?php echo $item ?></td>
            <td><img src="img/<?php echo $item ?>.jpg" alt="gambar ayam"> </td>
            <td><a href="https://www.bing.com/images/search?q=<?php echo $item ?>&form=HDRSC4&first=1">Cari</a></td>
        </tr>
       
        <?php
        $i++;
        }
        ?>
        
        // Lengkapi disini baris untuk masing masing hewan (Ayam, angsa, bebek, domba, kalkun, kambing, kelinci, kerbau, kuda, dan sapi )
       
    </table>
</body>
</html>
