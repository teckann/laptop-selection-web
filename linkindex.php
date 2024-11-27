<html>
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="deco.css">
<style>

/*"automatik enable scrolling" jika teks terlalu banyak*/
.topnav {
  overflow: hidden;
  background-color: #A9A9A9; 9561E2
}

/*set format "topnav"*/
.topnav a {
  float: left;
  display: block;
  color:  #FFFFFF;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

/*set posisi dropdown ke kiri*/
.dropdown {
  float: left;
  overflow: hidden;
}

/*set format butang dropdown*/
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: #FFFFFF;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/*format mouse ketika hover*/
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #808080;
  color: white;
  cursor: pointer;
}

/* set format dropdown */
.dropdown-content {
  display: none;
  position: absolute;
  background-color:	#696969;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* set format elemen dalam dropdown */
.dropdown-content a {
  float: none;
  color:  #FFFFFF;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/*format elemen dropdown ketika hover*/
.dropdown-content a:hover {
  background-color:#808080;
}

/*set dropdown kotak */
.dropdown:hover .dropdown-content {
  display: block;
}

/* lebar skrin besar, menubar akan berubah kedudukan */
@media screen and (min-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav a { font-size: 14px; }
  .dropdown .dropbtn { font-size: 14px; }
}
</style>
</head>


<body>

<div class="topnav" style="border-radius: 15px">
	<a href="index.php" target="_top">
  	<i class="fa fa-list-ol"></i> Utama</a>
    
    <div class="dropdown">   
      <button class="dropbtn"><i class="fa fa-list-ol"></i> Pengguna Baru
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tambahjual.php"><i class="fa fa-plus"></i> Daftar Kedai</a>
      <a href="tambahbeli.php"><i class="fa fa-plus"></i> Daftar Pelanggan</a>
    </div>
  </div>
      
	<a href="login.php" target="_top">
	<i class="fa fa-sign-out"></i> Log Masuk</a>
</div>

</body>
</html>