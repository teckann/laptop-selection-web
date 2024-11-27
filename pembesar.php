<!-- fungsi mengubah saiz tulisan bagi kepelbagaian pengguna-->
<script>

function ubahsaiz(gandaan){
    //mendapatkan saiz semasa tulisan pada jadual 
    var saiz = document.getElementById("pembesar");
    var saiz_semasa = saiz.style.fontSize || 1;

    /* menyemak jika pengguna menekan butang, nilai yang akan dihantar 
        butang reset - nilai 2 dihantar - kembali kepada saiz asal tulisan 
        butang +     - nilai 1 dihantar - besarkan saiz tulisan 
        butang -     - nilai -1 dihantar - kecilkan saiz tulisan  
    */
   if(gandaan==2)
   {
    saiz.style.fontSize = "1em";
   }
   else
   {
    saiz.style.fontSize = ( parseFloat(saiz_semasa) + (gandaan * 0.2)) + "em";
   }
}
</script>

<!--Kod untuk butang mengubah saiz tulisan-->

| Font Size |
<input name=reSize' type='button' value='&nbsp;+&nbsp;' onclick="ubahsaiz(1)" style="border-radius: 10px"/>
<input name=reSize2' type='button' value='&nbsp;-&nbsp;' onclick="ubahsaiz(-1)" style="border-radius: 10px"/>
<input name='reSize1' type='button' value='Original Size'       onclick="ubahsaiz(2)" style="border-radius: 10px"/>
