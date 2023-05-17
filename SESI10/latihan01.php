<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <form name="latihan 1" method="POST" onsubmit="return checkform(this)">
    <div>
        NIM
        <input type="text" id="txNIM" name="NIM">
        </div>
    <div>
        NAMA
        <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
        jenis kelamin
        <input type="radio" id="txJKEL" name="JKEL" value="L">Laki-Laki
        <input type="radio" id="txJKEL" name="JKEL" value="P">perempuan
        </div>
        <div>
            jurusan
            <select name="JURUSAN" id="txJUR">
                <option value="MTI">MTI</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
                <option value="DKV">DKV</option>
                <option value="KAB">KAB</option>
</select>
        </div>
        <div>
           hobi
            <input type="checkbox" name="hobi_1">menulis
            <input type="checkbox" name="hobi_2">menyanyi
            <input type="checkbox" name="hobi_3">olahraga
            <input type="checkbox" name="hobi_4">memasak
           <div>
        <button type="submit">kirim data</button>
</div>

    <script>
        function checkform(frm){

            let F = frm.elements;
            let nim = F.namedItem("NIM").value;
            let nama = F.namedItem("NAMA").value;
            let jkel = F.namedItem("JKEL").value;
            let jur = F.namedItem("JURUSAN").value;
            let h1 = F.namedItem("hobi_1").checked;
            let h2 = F.namedItem("hobi_2").checked;
            let h3 = F.namedItem("hobi_3").checked;
            let h4 = F.namedItem("hobi_4").checked;


            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JKEL: "+jkel);
            console.log("JURUSAN: "+jur);
            console.log("hobi menulis: "+h1);
            console.log("hobi menyanyi: "+h2);
            console.log("hobi olahraga: "+h3);
            console.log("hobi memasak: "+h4);
            return false;
        }
        </script>
</body>
</html>