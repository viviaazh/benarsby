<!DOCTYPE html>
<html>
<head>
<title>Report Table</title>
<style type= "text/css">
#outtable{
    padding: 20px;
    border: 1px solid #e3e3e3;
    width: 600px;
    border-radius: 5px;
}
.short{
    width: 50px;
}
.normal{
    width: 150px;
}
table{
    border-collapse: collapse;
    font-family: arial;
    color: #5E5B5C;
}
thead th{
    text-align: left;
    padding: 10px;
}
tbody td{
    border-top: 1px solid #e3e3e3;
    padding: 10px;
}
tbody tr:nth-child(even){
    background: #A6F5FA;
}
tbody tr:hover{
    background: #EAE9F5;
}
</style>
</head>
<body>
    <div id="outtable">
    <table>
    <thead>
    <tr>
        <!-- <th class="short">#</th> -->
        <th class="normal">Nama</th>
        <th class="normal">Jenis Kelamin</th>
        <th class="normal">TTL</th>
        <th class="normal">Alamat</th>
    </tr>
    </thead>
    <tbody>
        
        <?php foreach ($pasien as $user):?>
        <tr>
            <td><?php echo $user->nama; ?></td>
            <td><?php echo $user->jk; ?></td>
            <td><?php echo $user->ttl; ?></td>
            <td><?php echo $user->alamat; ?></td>
        </tr>
<?php endforeach; ?>
    </tbody>
    </table>
    </div>
</body>
</html>