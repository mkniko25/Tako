
<!DOCTYPE>
<html lang="ja">
  <head>
   <meta charset="utf-8">
   <title>？</title> 
   <link rel="stylesheet" href="style.css"> 
   <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
 
  </head>
   
   <body>
       
       <section id="main">
         <h1>たこ焼き何個ぶん？</h1>
          <div class="wrap">
              何個分か計算するよ！
              <form method="post" action="" class="formArea js-formArea">
                  <input type="text" name="num" autocomplete="off" class="js-get-val-num">
                  <select name="unit" class="js-get-val-unit">
                    <option value="cm">cm</option>
                    <option value="m">m</option>
                    <option value="km">km</option>
                　</select>
                  <input type="submit" value="計算" name="btn" class="btn js-show-modal">
              </form>
          </div>
           
       </section>
       
       <div class="modal js-show-modal-target">
           <div class="js-set-html"></div>
           <img src="img/tako.png" class="modal-img">
           <button class="btn btn-close js-hide-modal">閉じる</button>
       </div>
       <div class="cover js-show-modal-cover"></div>
       
       <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
       <script src="main.js"></script>
       
   </body>
    
</html>