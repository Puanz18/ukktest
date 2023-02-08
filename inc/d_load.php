<div class="w3-container w3-padding">
  <?php 
    if (!empty(@$_GET['url'])) {
      if($level != 'admin'){
      switch (@$_GET['url']) {
        case 'history':
          include_once'../dashboard/history/index.php';
        break;
        default:
            echo "<div class='flex flex-wrap'>
            Halaman tidak ditemukan
            </div>";
          break; 
      }
      }else{
        switch (@$_GET['url']) {        
          case 'siswa':
            include_once'../dashboard/siswa/index.php';
          break;            
          case 'admin':          
            include_once'../dashboard/admin/index.php';
          break; 
          case 'kelas':          
            include_once'../dashboard/kelas/index.php';
          break;
          case 'addkelas':          
            include_once'../dashboard/kelas/add_data.php';
          break;  
          case 'editkelas':          
            include_once'../dashboard/kelas/update_data.php';
          break;  
          default:
            echo "<div class='flex flex-wrap'>
            Halaman tidak ditemukan
            </div>";
          break; 
      }      
      }
    }else{
      $quotes = array(
        "Hidup ini hanya sekali dan peluang itu juga sekali munculnya, keduanya tidak datang dua kali",
        "Entah mengapa hari-hari ini akan cepat berlalu, dan senjapun mulai memberi kabar bahwa dia akan berlaku",
        "Penampilan memang tidak meyakinkan bahwa dia itu pintar atau bodoh",
        "Setiap orang ada bakatnya masing-masing, kenali dan kembangkanlah bakat itu, dengan begitu kesuksesan akan menunggu kita di hari esok",
        "Mudah untuk menemukan kebenaran sulit untuk menghadapinya dan lebih sulit untuk mengikutinya",
        );
      echo "<div class='text-green-500 text-center text-xl drop-shadow-sm'>            
            <i>'". $quotes[array_rand($quotes)] ."'</i>            
            </div>";
    }
  ?>
</div>